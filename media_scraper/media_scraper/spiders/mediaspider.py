import scrapy
import mysql.connector
import re
from media_scraper.items import Mediaitem

class MediaspiderSpider(scrapy.Spider):
    name = "mediaspider"
    allowed_domains = ['tempo.co']
    start_urls = ['https://www.tempo.co/search?q=Golkar']  # URL pencarian awal

    def start_requests(self):
        # Koneksi ke database MySQL
        conn = mysql.connector.connect(
            host='localhost',
            user='root',
            password='',
            database='portal_monitoring'
        )
        cursor = conn.cursor()

        # Mendapatkan id dan kata kunci dari tabel target_user_spider
        cursor.execute("SELECT id, user_target FROM target_user_spider")
        user_targets = cursor.fetchall()
        conn.close()

        # Iterasi melalui setiap kata kunci dan membuat permintaan pencarian
        for id, keyword in user_targets:
            url = f"https://www.tempo.co/search?q={keyword}"
            # Menyertakan informasi id dan user_target saat membuat permintaan
            yield scrapy.Request(url, callback=self.parse, meta={'id': id, 'user_target': keyword})

    def parse(self, response):
        # Mendapatkan informasi id dan user_target dari meta
        id = response.meta.get('id')
        user_target = response.meta.get('user_target')

        # Proses ekstraksi informasi dari setiap halaman hasil pencarian
        search_results = response.css('div.card-box')
        for result in search_results:
            relative_url_news = result.css('h2.title a::attr(href)').get()

            if relative_url_news is not None:
                yield response.follow(relative_url_news, callback=self.parse_page, meta={'id': id, 'user_target': user_target})

    def parse_page(self, response):
        title = response.css('div.detail-title h1::text').get()
        p_tags = response.xpath('//div[@id="isi" and contains(@class, "detail-in")]//p//text()').getall()
        combined_p = " ".join(p_tags)
        clean_isi = re.sub(r'^.*?-|"[\s\S]*?"|kata \d+ selanjutnya|\d+|[\t\xa0\n\r]+|Selanjutnya', '', combined_p).strip()

        # Mengekstrak informasi penulis
        author = response.xpath('//p[@class="title bold"]/a/span[@itemprop="author"]/text()').get()
        if author is None:
            author = 'Penulis tidak diketahui'
        # Mengekstrak informasi editor
        editor = response.xpath('//p[@class="title bold"]/a/span[@itemprop="editor"]/text()').get()

        # Mendapatkan informasi id dan user_target dari meta
        id = response.meta.get('id')
        user_target = response.meta.get('user_target')

        media_item = Mediaitem()
        media_item['judul'] = title
        media_item['link'] = response.url
        media_item['isi'] = clean_isi
        media_item['penulis'] = author
        media_item['editor'] = editor
        media_item['user_target'] = user_target
        media_item['proses'] = 0
        media_item['sentimen'] = 0
        media_item['id_target_user'] = id  # Menambahkan id ke item

        yield media_item
