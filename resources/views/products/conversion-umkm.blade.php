@extends('layouts.main-layout')

@section('content')
    <section id="produk" class="choose">
        <div class="container pb-4 px-4">
            <div class="row text-center d-block pt-5 pb-md-4">
                <h1>Paket Conversion untuk UMKM</h1>
            </div>
            <div class="">
                <img class="mx-auto img-fluid d-block" src="{{ asset('img/umkm.png') }}" alt="">
            </div>
            <h4 class="card-title">Apa sih conversion UMKM itu ?</h4>
            <p>
                Dalam rangka membantu UMKM untuk meningkatkan penjualan dari online, Herva ID hadir untuk menjaab kebutuhan
                tersebut. Berbekal pengalaman lebih dari 10 tahun dalam dunia bisnis & marketing memberikan efek positif
                yang besar pada perkmbangan bisnis UMKM.
            </p>
            <p>
                Tim kami akan senantiasa membantu Anda baik hal strategi, rekomendasi, dan konten apa yang harus ditampilkan
                untuk meningkatkan penjualan secara cepat.
            </p>
            <p>
                Jasa iklan konversi untuk penjualan hanya ada di Herva Id dengan harga yang menarik dan terjangkau. Tunggu
                apalagi, hubungi tim marketing kami sekarang juga untuk konsultasi gratis.
            </p>
            <br>
            <h4>Apa Kelebihan Iklan Konversi ?</h4>
            <p>Iklan konversi kami memiliki banyak keuntungan yang sangat sayang sekali untuk dilewatkan. Namun terkadang
                banyak orang yang masih menghiraukan kesempatan ini karena takut tidak menghasilkan. Berikut merupakan
                beberapa keuntungan beriklan di kami!</p>
            <p>Anda memiliki produk ataupun jasa sebagus apapun jika marketingnya buruk akan terasa percuma karena kecilnya
                bahkan tidak ada pendapatan.</p>
            <ul>
                <li>
                    Target Konsumen yang Spesifik
                </li>
                <li>
                    Lebih Fleksibel
                </li>
                <li>
                    Lebih Murah
                </li>
                <li>
                    Jangkauan Lebih Luas
                </li>
            </ul>

            <div class="form iklan-digital">
                <div class="row text-center d-block pt-5 pb-md-4">
                    <h1>Tunggu apa Lagi ? Pilih Paket Conversion untuk UMKM di Bawah</h1>
                </div>
                <div class="container px-4">
                    <div class="row pb-md-4 padding-top-form" style="justify-content: center" ;>

                        {{-- umkm --}}
                        <div class="card mb-3">
                            <div class="card-body pb-0">
                                <ul id="faq-list" class="list-unstyled">
                                    <li class="mb-2">
                                        <a data-toggle="collapse" class="collapsed" href="#umkm">
                                            <div class="d-flex produk-iklan">
                                                <h3 class="card-title mx-2">Paket Conversion untuk UMKM</h3>
                                                <svg class="ml-auto" xmlns="http://www.w3.org/2000/svg" width="28"
                                                    height="28" fill="currentColor" class="bi bi-arrow-down-short"
                                                    viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
                                                </svg>
                                            </div>
                                        </a>
                                        <div id="umkm" class="collapse show" data-parent="#faq-list">
                                            <div class="content-3-7 overflow-hidden mx-auto position-relative p-0"
                                                style="font-family: 'Poppins', sans-serif">
                                                <div class="mx-auto">
                                                    <div class="d-flex flex-wrap">
                                                        <div class="mx-auto card-item position-relative">
                                                            <div
                                                                class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden">
                                                                <h2 class="price-title">UMKM Starter</h2>
                                                                <h2 class="price-value d-flex align-items-center">
                                                                    <s><span>Rp. 10 jt</span></s>
                                                                    <span class="price-duration">/Bulan</span>
                                                                </h2>
                                                                <h2 class="price-value d-flex align-items-center">
                                                                    <span>Rp. 5 jt</span>
                                                                    <span class="price-duration">/Bulan</span>
                                                                </h2>
                                                                <div class="price-list">
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Planning Campaign
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Periode iklan 1 bulan
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Pembuatan landing page penjualan
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>FREE Update & Support
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>50 Produk
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>5.000 Kuota Order/Bulan
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Checkout Page
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Bisa COD Menggunakan SiCepat,j&T,JNE & SAP
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Iklan facebook & instagram conversion focus
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Free 2 konten video untuk iklan
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Report & analisa Hasil Iklan
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Rekomendasi Strategi
                                                                    </p>
                                                                </div>
                                                                <a class="align-items-end" href="form.html"
                                                                    style="text-decoration: none">
                                                                    <button
                                                                        class="btn btn-outline d-flex justify-content-center align-items-center w-100">
                                                                        Choose Plan
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="mx-auto card-item position-relative">
                                                            <div
                                                                class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden">
                                                                <h2 class="price-title">UMKM Boost</h2>
                                                                <h2 class="price-value d-flex align-items-center">
                                                                    <s><span>Rp. 20 jt</span></s>
                                                                    <span class="price-duration">/Bulan</span>
                                                                </h2>
                                                                <h2 class="price-value d-flex align-items-center">
                                                                    <span>Rp. 10 jt</span>
                                                                    <span class="price-duration">/Bulan</span>
                                                                </h2>
                                                                <div class="price-list">
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Planning Campaign
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Periode iklan 1 bulan
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Pembuatan landing page penjualan
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>FREE Update & Support
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Unlimited Produk
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>25.000 Kuota Order/Bulan
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Checkout Page
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Bisa COD Menggunakan SiCepat,j&T,JNE & SAP
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Iklan facebook & instagram conversion focus
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Iklan google conversion focus
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Free 4 konten video untuk iklan
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Free 1 KOL/Influencer live shopping
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Free 5 KOL/Influencer Nano
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Report & analisa Hasil Iklan
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Rekomendasi Strategi
                                                                    </p>
                                                                </div>
                                                                <a href="form.html" style="text-decoration: none">
                                                                    <button
                                                                        class="btn btn-outline d-flex justify-content-center align-items-center w-100">
                                                                        Choose Plan
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="mx-auto card-item position-relative">
                                                            <div class="card-item-outline d-flex flex-column position-relative overflow-hidden h-100"
                                                                style="background-color: #2e3a53">
                                                                <h2 class="price-title text-white">UMKM Accelerate</h2>
                                                                <h2
                                                                    class="price-value d-flex align-items-center text-white">
                                                                    <s><span>Rp. 30 jt</span></s>
                                                                    <span class="price-duration"
                                                                        style="color: #8997b5">/bulan</span>
                                                                </h2>
                                                                <h2
                                                                    class="price-value d-flex align-items-center text-white">
                                                                    <span>Rp. 15 jt</span>
                                                                    <span class="price-duration"
                                                                        style="color: #8997b5">/bulan</span>
                                                                </h2>
                                                                <div class="price-list">
                                                                    <p class="d-flex align-items-center check text-white">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Planning Campaign
                                                                    </p>
                                                                    <p class="d-flex align-items-center check text-white">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Periode iklan 1 bulan
                                                                    </p>
                                                                    <p class="d-flex align-items-center check text-white">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Pembuatan landing page penjualan
                                                                    </p>
                                                                    <p class="d-flex align-items-center check text-white">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>FREE Update & Support
                                                                    </p>
                                                                    <p class="d-flex align-items-center check text-white">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Unlimited Produk
                                                                    </p>
                                                                    <p class="d-flex align-items-center check text-white">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>25.000 Kuota Order/Bulan
                                                                    </p>
                                                                    <p class="d-flex align-items-center check text-white">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Checkout Page
                                                                    </p>
                                                                    <p class="d-flex align-items-center check text-white">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Bisa COD Menggunakan SiCepat,j&T,JNE & SAP
                                                                    </p>
                                                                    <p class="d-flex align-items-center check text-white">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Iklan facebook & instagram conversion focus
                                                                    </p>
                                                                    <p class="d-flex align-items-center check text-white">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span><strong> Iklan google conversion
                                                                            focus</strong>
                                                                    </p>
                                                                    <p class="d-flex align-items-center check text-white">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span><strong>Free 5 konten video untuk
                                                                            iklan</strong>
                                                                    </p>
                                                                    <p class="d-flex align-items-center check text-white">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span><strong>Free 2 KOL/Influencer live
                                                                            shopping</strong>
                                                                    </p>
                                                                    <p class="d-flex align-items-center check text-white">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span><strong>Free 10 KOL/Influencer Nano</strong>
                                                                    </p>
                                                                    <p class="d-flex align-items-center check text-white">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span><strong>Free 1 KOL/Influencer Micro</strong>
                                                                    </p>
                                                                    <p class="d-flex align-items-center check text-white">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span><strong>Optimasi Shopee & Tokopedia</strong>
                                                                    </p>
                                                                    <p class="d-flex align-items-center check text-white">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Report & analisa Hasil Iklan
                                                                    </p>
                                                                    <p class="d-flex align-items-center check text-white">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Rekomendasi Strategi
                                                                    </p>
                                                                </div>
                                                                <a href="form.html" style="text-decoration: none">
                                                                    <button
                                                                        class="btn btn-fill text-white d-flex justify-content-center align-items-center w-100">
                                                                        Choose Plan
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
