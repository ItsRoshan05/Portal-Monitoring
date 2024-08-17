import streamlit as st
from streamlit_option_menu import option_menu
import requests
from streamlit_lottie import st_lottie

st.set_page_config(page_title = "Sentiment Analysis App", page_icon = ":tada:", layout = "wide")

def load_animation(url):
    r = requests.get(url)

    if r.status_code != 200:
        return None
    
    return r.json()

animation = load_animation("https://lottie.host/6d2774b5-55cf-408f-abd0-5c47508e00d7/8qRRYQeBRt.json")

with st.sidebar:
    selected = option_menu(
        menu_title = "Sentimen Analysis",
        options = ['Home', 'Prediksi', 'Dataset'],
        icons = ['house','gear-wide-connected','file-earmark-bar-graph'],
        menu_icon = "cast",
        default_index = 0
    )

if selected == "Home":
    with st.container():
        leftSide, rightSide = st.columns(2)
        with leftSide:
            st.subheader("Hallo, Saya Dhika Ro'id :wave:")
            st.title("Seorang Machine learning enthusiastic")
            st.write("Saya sangat tertarik pada machine learning dan bahasa pemograman python")
            st.write("Website simple untuk memprediksi sentiment analysis dari sebuah portal beritas")
        with rightSide:
            st_lottie(animation, height = 300, key = "coding")
if selected == "Prediksi":
    st.title("Ini adalah prediksi")
if selected == "Dataset":
    st.title("Ini adalah Dataset")