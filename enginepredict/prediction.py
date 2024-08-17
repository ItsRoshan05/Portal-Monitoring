import pandas as pd
from sqlalchemy import create_engine
import joblib
import matplotlib.pyplot as plt
from nltk.tokenize  import RegexpTokenizer
import re
from nltk.corpus import stopwords
import nltk as nk
from Sastrawi.Stemmer.StemmerFactory import StemmerFactory
from sklearn.feature_extraction.text import TfidfVectorizer
import string
import datetime
import pytz



class SentimentAnalysis():
    def __init__(self, userEngine='', passwordEngine='', hostEngine='',dataBaseEngine='', modelName = ''):
        self.userEngine = 'root'
        self.passwordEngine = ''
        self.hostEngine = 'localhost'
        self.portEngine = 3306
        self.modelName = 'outputModel/modelpolitik/NB_politics.joblib'
        self.featureExtraction = 'outputModel/modelpolitik/NB_politics_tfidf.joblib'
        self.dataBaseEngine = 'portal_monitoring'

    
    def engine(self):
        url="mysql+pymysql://{0}:{1}@{2}:{3}/{4}".format(self.userEngine, self.passwordEngine, self.hostEngine, self.portEngine, self.dataBaseEngine)
        return url


    def readData(self,nameTable, tanggal):
        try:
            engine = self.engine()
            df = pd.read_sql(f"SELECT * FROM {nameTable} WHERE created_at LIKE '%%{tanggal}%%'", con = engine)
            return df
        except Exception as ex:
            return print("Error: \n", ex)

    def predictedOwn(self,ds):
        vect = joblib.load(self.featureExtraction)
        xNewDataset = vect.transform(ds)
        loaded_model = joblib.load(self.modelName)
        p = loaded_model.predict(xNewDataset)

        # dos = []

        # for prediction in p:
        #     if prediction == "NETRAL":
        #         do = 0
        #     elif prediction == "POSITIF":
        #         do = 1
        #     else:
        #         do = 2
        #     dos.append(do) 

        return p

    def gettime(self):
        # Menentukan zona waktu Jakarta
        jakarta_timezone = pytz.timezone('Asia/Jakarta')
        # Mendapatkan waktu saat ini di zona waktu Jakarta
        current_time_jakarta = datetime.datetime.now(jakarta_timezone)
        return current_time_jakarta

class PreProcessing():
    pass

    def __init__(self):
        super(PreProcessing, self).__init__()

    def caseFolding(self, kalimat):
        # kalimat = kalimat.translate(str.maketrans(' ',' ',string.punctuation))
        kalimat = kalimat.strip()
        kalimat = kalimat.lower()
        kalimat = re.sub(r'[|?|$|.|!_:")(-+,)]','', kalimat)
        # kalimat = re.sub('<.*>',' ',kalimat)
        # kalimat = re.sub('[^a-zA-Z]',' ', kalimat)
        # kalimat = re.sub(r"\b[a-aZ-Z]\b"," ", kalimat)
        # kalimat = re.sub(r'\b\w\b', '', kalimat)
        # kalimat = re.sub("\n"," ", kalimat)
        return kalimat
    
    def tokenizing(self):
        regexp = RegexpTokenizer(r'\w+|$[0-9]+|\S')
        return regexp
    
    def stopWord(self, text):
        stopword = stopwords.words('indonesian')
        txt_stopword = pd.read_csv('resource/stopword.txt', names=['stopword'], header=None)
        stopword.extend(['wkwk','hahahaha','haha','yang','yoi','yoyoy', 'mm', 'mk', 'bandung', 'subang','wartakinico','galamedianews'])
        stopword.extend(txt_stopword["stopword"][0].split('\n'))
        stopword = set(stopword)

        text = [word for word in text if word not in stopword]
        return text

    def stemmingWithjoin(self, konten):
        factory = StemmerFactory()
        stemmer = factory.create_stemmer()
        do = []
        for i in konten:
            dt = stemmer.stem(i)
            do.append(dt)
        
        d_clean = []
        d_clean = " ".join(do)
        return d_clean
    
#     def stemWrapper(self):
#         pass



