from sqlalchemy import create_engine, Column, Text, BigInteger
from sqlalchemy.ext.declarative import declarative_base

Base = declarative_base()

class hasilPrediksi(Base):
    __tablename__ = 'testing'
    
    id = Column(BigInteger, primary_key=True)
    title = Column(Text)
    sentiment = Column(BigInteger)

    def __init__(self, title, sentiment):
        self.title = title
        self.sentiment = sentiment