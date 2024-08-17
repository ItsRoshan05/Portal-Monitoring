# Define your item pipelines here
#
# Don't forget to add your pipeline to the ITEM_PIPELINES setting
# See: https://docs.scrapy.org/en/latest/topics/item-pipeline.html
#

# useful for handling different item types with a single interface
from itemadapter import ItemAdapter


class MediaScraperPipeline:
    def process_item(self, item, spider):
        return item

import mysql.connector

class SaveToDatabase:

    def __init__(self):
        self.conn = mysql.connector.connect(
            host='localhost',
            user='root',
            password='',
            database='portal_monitoring'
        )

        self.cur = self.conn.cursor()

        self.cur.execute("""
        CREATE TABLE IF NOT EXISTS spider_raw (
            id INT AUTO_INCREMENT PRIMARY KEY,
            judul VARCHAR(255),
            link VARCHAR(255),
            isi TEXT,
            penulis VARCHAR(100),
            editor VARCHAR(100),
            user_target VARCHAR(100),
            proses INT,
            sentiment INT,
            id_target_user INT
        );
        """)

    def process_item(self, item, spider):
        self.cur.execute("""
            INSERT INTO spider_raw (
            judul,
            link,
            isi,
            penulis,
            editor,
            user_target,
            proses,
            sentiment,
            id_target_user
            ) VALUES (
            %s, %s, %s, %s, %s, %s, %s, %s, %s
        )""", (
            item['judul'],
            item['link'],
            item['isi'],
            item['penulis'],
            item['editor'],
            item['user_target'],
            item['proses'],
            item['sentimen'],
            item['id_target_user']
        ))

        self.conn.commit()
        return item

    def close_spider(self, spider):
        self.cur.close()
        self.conn.close()