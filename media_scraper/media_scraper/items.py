# Define here the models for your scraped items
#
# See documentation in:
# https://docs.scrapy.org/en/latest/topics/items.html

import scrapy


class MediaScraperItem(scrapy.Item):
    # define the fields for your item here like:
    # name = scrapy.Field()
    pass

class Mediaitem(scrapy.Item):
    judul = scrapy.Field()
    link = scrapy.Field()
    isi = scrapy.Field()
    penulis = scrapy.Field()
    editor = scrapy.Field()
    user_target = scrapy.Field()
    proses = scrapy.Field()
    sentimen = scrapy.Field()
    id_target_user = scrapy.Field()
