from prediction import SentimentAnalysis, PreProcessing
import mysql.connector
from sqlalchemy.orm import sessionmaker
import pytz


pr = SentimentAnalysis()

def main():
   # Membuat objek sentimentanalysis dari prediction class SentimentAnalysis 
   
   tanggalTarget = pr.gettime().strftime('%Y-%m-%d')
   df = pr.readData('spider_raw', tanggalTarget)

   df['sentiment'] = pr.predictedOwn(df['judul'])
   
   waktujakarta = pr.gettime().strftime('%Y-%m-%d %H:%M:%S')
   
   # Koneksi ke database lalu melakukan Query update 
   db_connection = mysql.connector.connect(
      host="localhost",
      user="root",
      password="",
      database="portal_monitoring"
   )

   # Membuat objek cursor
   cursor = db_connection.cursor()

   # Query untuk melakukan update pada tabel
   update_query = "UPDATE tbl_spider_raw SET sentiment = %s, updated = %s WHERE id = %s"
   insert_query = """
        INSERT INTO predicted (id_spider_raw, proses, sentiment, created_at)
        VALUES (%s, %s, %s, %s)
    """

   # Menyiapkan data untuk diinsert
   data_to_insert = [
        (row['id'], 1, row['sentiment'], waktujakarta)
        for index, row in df.iterrows()
    ]

    # Menjalankan query insert
   cursor.executemany(insert_query, data_to_insert)

    # Melakukan commit perubahan
   db_connection.commit()

    # Menutup kursor dan koneksi
   cursor.close()
   db_connection.close()
   # # Melakukan iterasi melalui baris-baris dataset
   # for index, row in df.iterrows():
   #    x = row['sentiment']  # Ganti 'kolom_di_dataset' sesuai dengan kolom dalam dataset Anda
   #    updated = waktujakarta
   #    condition = row['id']  # Ganti 'kondisi_di_dataset' sesuai dengan kolom dalam dataset Anda
   #    # Menjalankan query update dengan parameter
   #    cursor.execute(update_query, (x,updated, condition))

   #    # Melakukan commit perubahan setiap baris
   #    db_connection.commit()

   # # Menutup kursor dan koneksi
   # cursor.close()
   # db_connection.close()
   # df.to_sql('predicted', con=pr.engine(), index=False, if_exists = 'replace')

   print("Data Berhasil di update")
   return None


if __name__ == '__main__':
   main()