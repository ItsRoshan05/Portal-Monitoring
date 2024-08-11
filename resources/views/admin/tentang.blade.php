@extends('layouts.admin.main')

@section('headingheader')
Tentang
@endsection

@section('mainkoten')
<div class="container">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="about-card">
                        <img src="https://via.placeholder.com/600x400" class="img-fluid" alt="About Image">
                    </div>
                </div>
                <div class="col-lg-6 about-text">
                    <h2>Tentang Sistem Kami</h2>
                    <p>Sistem kami dirancang untuk mengumpulkan data dari berbagai portal berita politik melalui proses crawling. Data yang dikumpulkan kemudian diprediksi oleh engine prediksi menggunakan algoritma tf-idf dan naive bayes. Proses ini memastikan bahwa setiap berita politik dianalisis untuk menentukan sentimen atau klasifikasinya, apakah berita tersebut bersifat positif, negatif, atau netral.</p>
                    <p>Data yang telah diprediksi kemudian disajikan melalui aplikasi berbasis web, memungkinkan pengguna untuk melihat hasil analisis sentimen berita politik secara real-time. Seluruh proses, dari pengumpulan data hingga prediksi dan penyajian hasil, dilakukan secara otomatis oleh sistem. Kami mengintegrasikan berbagai komponen teknologi termasuk crawling engine, algoritma prediksi, dan platform website untuk menyajikan informasi yang akurat dan mudah diakses kepada pengguna.</p>
                    <a href="#learn-more" class="btn btn-primary mt-4">Pelajari Lebih Lanjut</a>
                </div>
            </div>
        </div>
@endsection

@section('css')
<style>
        .about-section {
            padding: 60px 0;
        }
        .about-card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        .about-card img {
            max-height: 300px;
            object-fit: cover;
        }
        .about-text {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .about-text h2 {
            margin-bottom: 20px;
            font-size: 2.5rem;
        }
        .about-text p {
            font-size: 1.1rem;
            line-height: 1.6;
        }
    </style>
@endsection