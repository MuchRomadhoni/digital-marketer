@extends('layouts.main-layout')

@section('content')
    <section id="produk" class="choose">
        <div class="container pb-4 px-4">
            <div class="row text-center d-block pt-5 pb-md-4">
                <h1>Jasa Social Media All In</h1>
                <p>Herva memudahkan kamu untuk menghandle akun FB, instagram, dan google kamu secara profesional</p>
            </div>
            <div class="">
                <img class="mx-auto img-fluid d-block" src="{{ asset('img/social-media.png') }}" alt="">
            </div>
            <h4 class="card-title">Social Media All In</h4>
            <p>“Ini Baru Gokil! Akun FB, instagram, dan google di handle secara profesional, diiklankan pula dengan jangkauan ribuan orang per hari! Alhamdulillah penjualan naik, pelanggan tambah banyak, Thanks a lot!” – Tere, Pengusaha Tour Travel-</p>
            <p>Ingin rasakan peningkatkan Penjualan dengan Facebook, Instagram, dan Google tapi pusing bagaimana caranya, harus posting apa, dan lain lain?</p>
            <p>Kami siap membantu kamu! Hasil Maksimal, Biaya Efektif dan Efisien.</p>
            
            <div class="form iklan-digital">
                <div class="row text-center d-block pt-5 pb-md-4">
                    <h1>Tunggu apa Lagi ? Lihat harga jasa dibawah</h1>
                </div>
                <div class="container px-4">
                    <div class="row pb-md-4 padding-top-form" style="justify-content: center" ;>
                        
                        {{-- Harga Jasa Sosial Media All in --}}
                        <div class="card mb-3">
                            <div class="card-body pb-0">
                                <ul id="faq-list" class="list-unstyled">
                                    <li class="mb-2">
                                        <a data-toggle="collapse" class="collapsed" href="#all-in">
                                            <div class="d-flex produk-iklan">
                                                <h3 class="card-title mx-2">Sosial Media All in</h3>
                                                <svg class="ml-auto" xmlns="http://www.w3.org/2000/svg" width="28"
                                                    height="28" fill="currentColor" class="bi bi-arrow-down-short"
                                                    viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
                                                </svg>
                                            </div>
                                        </a>
                                        <div id="all-in" class="collapse show" data-parent="#faq-list">
                                            <div class="content-3-7 overflow-hidden mx-auto position-relative p-0"
                                                style="font-family: 'Poppins', sans-serif">
                                                <div class="mx-auto">
                                                    <div class="d-flex flex-wrap">
                                                        <div class="mx-auto card-item position-relative">
                                                            <div
                                                                class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden">
                                                                <h2 class="price-title">Paket Bronze</h2>
                                                                <h2 class="price-value d-flex align-items-center">
                                                                    <span class="mb-2">Rp. 2.699.000/bln</span>
                                                                </h2>
                                                                <div class="price-list">
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Planning Campaign di FB dan Instagram
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Free up to 10 hari iklan di Facebook Instagram (7.500-15.000 reach), Google Ads (30-40 click)
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>2 video reels atau tiktok per bulan
                                                                    </p>
                                                                                                                                        <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>5 Nano influencers
                                                                    </p>
                                                                                                                                        <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Report perbulan
                                                                    </p>
                                                                </div>
                                                                <a class="align-items-end" href="form.html"
                                                                    style="text-decoration: none">
                                                                    <button
                                                                        class="btn btn-fill text-white d-flex justify-content-center align-items-center w-100">
                                                                        Choose Plan
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="mx-auto card-item position-relative">
                                                            <div
                                                                class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden">
                                                                <h2 class="price-title">Paket Silver</h2>
                                                                <h2 class="price-value d-flex align-items-center">
                                                                    <span class="mb-2">Rp. 3.799.000/bln</span>
                                                                </h2>
                                                                <div class="price-list">
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Planning Campaign di FB dan Instagram
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Free up to 15 hari iklan di Facebook Instagram (10.500 – 21.000 reach), Google Ads (50-60 click)
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>2 video reels atau tiktok per bulan
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>2 video gif per bulan
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>4 single image per bulan
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>30 story mirroring post + interaksi per bulan
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>5 Nano influencers
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Support Design Content dan Iklan
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Report perbulan
                                                                    </p>
                                                                </div>
                                                                <a class="align-items-end" href="form.html"
                                                                    style="text-decoration: none">
                                                                    <button
                                                                        class="btn btn-fill text-white d-flex justify-content-center align-items-center w-100">
                                                                        Choose Plan
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="mx-auto card-item position-relative">
                                                            <div
                                                                class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden">
                                                                <h2 class="price-title">Paket Gold</h2>
                                                                <h2 class="price-value d-flex align-items-center">
                                                                    <span class="mb-2">Rp. 5.199.000/bln</span>
                                                                </h2>
                                                                <div class="price-list">
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Planning Campaign di FB dan Instagram
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Free up to 30 hari iklan di Facebook Instagram (22.500 – 45.000 reach), Google Ads (100-120 click)
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>4 video reels atau tiktok per bulan
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>4 video gif per bulan
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>12 single image per bulan
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>30 story mirroring post + interaksi per bulan
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>5 Nano influencers
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Support Design Content dan Iklan
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Report perbulan
                                                                    </p>
                                                                </div>
                                                                <a class="align-items-end" href="form.html"
                                                                    style="text-decoration: none">
                                                                    <button
                                                                        class="btn btn-fill text-white d-flex justify-content-center align-items-center w-100">
                                                                        Choose Plan
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="mx-auto card-item position-relative">
                                                            <div
                                                                class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden">
                                                                <h2 class="price-title">Paket Ultimate</h2>
                                                                <h2 class="price-value d-flex align-items-center">
                                                                    <span class="mb-2">Rp. 6.199.000/bln</span>
                                                                </h2>
                                                                <div class="price-list">
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Planning Campaign di FB dan Instagram
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Free up to 30 hari iklan di Facebook Instagram (45.000 – 90.000 reach), Google Ads (100-120 click)
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>4 video reels atau tiktok per bulan
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>4 video gif per bulan
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>12 single image per bulan
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>30 story mirroring post + interaksi per bulan
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>5 Nano influencers
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Support Design Content dan Iklan
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Report perbulan
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Free maintenance Website
                                                                    </p>
                                                                </div>
                                                                <a class="align-items-end" href="form.html"
                                                                    style="text-decoration: none">
                                                                    <button
                                                                        class="btn btn-fill text-white d-flex justify-content-center align-items-center w-100">
                                                                        Choose Plan
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="mx-auto card-item position-relative">
                                                            <div
                                                                class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden">
                                                                <h2 class="price-title">Paket Emerald</h2>
                                                                <h2 class="price-value d-flex align-items-center">
                                                                    <span class="mb-2">Rp. 7.199.000/bln</span>
                                                                </h2>
                                                                <div class="price-list">
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Planning Campaign di FB dan Instagram
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Free up to 30 hari iklan di Facebook Instagram (45.000 – 90.000 reach), Google Ads (100-120 click)
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Free iklan tiktok (10.000 – 15.000 impression)
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>4 video reels atau tiktok per bulan
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>4 video gif per bulan
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>12 single image per bulan
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>30 story mirroring post + interaksi per bulan
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>5 Nano influencers
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Support Design Content dan Iklan
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Report perbulan
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Free maintenance Website
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Photo Shoot profile (produk/proses kerja)
                                                                    </p>
                                                                </div>
                                                                <a class="align-items-end" href="form.html"
                                                                    style="text-decoration: none">
                                                                    <button
                                                                        class="btn btn-fill text-white d-flex justify-content-center align-items-center w-100">
                                                                        Choose Plan
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="mx-auto card-item position-relative">
                                                            <div
                                                                class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden">
                                                                <h2 class="price-title">Paket Platinum</h2>
                                                                <h2 class="price-value d-flex align-items-center">
                                                                    <span class="mb-2">Rp. 8.199.000/bln</span>
                                                                </h2>
                                                                <div class="price-list">
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Planning Campaign di FB dan Instagram
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Free up to 30 hari iklan di Facebook Instagram (45.000 – 90.000 reach), Google Ads (100-120 click)
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Free iklan tiktok (10.000 – 15.000 impression)
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>4 video reels atau tiktok per bulan
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>4 video gif per bulan
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>12 single image per bulan
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>30 story mirroring post + interaksi per bulan
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>5 Nano influencers
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Support Design Content dan Iklan
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Report perbulan
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Free maintenance Website
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>1 menit Video Animasi Explainer
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Photo Shoot profile (produk/proses kerja)
                                                                    </p>
                                                                </div>
                                                                <a class="align-items-end" href="form.html"
                                                                    style="text-decoration: none">
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

                        {{-- Jasa Mix Social Media All in --}}
                        <div class="card mb-3">
                            <div class="card-body pb-0">
                                <ul id="faq-list" class="list-unstyled">
                                    <li class="mb-2">
                                        <a data-toggle="collapse" class="collapsed" href="#mix-sm">
                                            <div class="d-flex produk-iklan">
                                                <h3 class="card-title mx-2">Mix Sosial Media All in</h3>
                                                <svg class="ml-auto" xmlns="http://www.w3.org/2000/svg" width="28"
                                                    height="28" fill="currentColor" class="bi bi-arrow-down-short"
                                                    viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
                                                </svg>
                                            </div>
                                        </a>
                                        <div id="mix-sm" class="collapse" data-parent="#faq-list">
                                            <div class="content-3-7 overflow-hidden mx-auto position-relative p-0"
                                                style="font-family: 'Poppins', sans-serif">
                                                <div class="mx-auto">
                                                    <div class="d-flex flex-wrap">
                                                        <div class="mx-auto card-item position-relative">
                                                            <div
                                                                class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden">
                                                                <h2 class="price-title">Paket Mix Ultimate</h2>
                                                                <h2 class="price-value d-flex align-items-center">
                                                                    <span class="mb-2"><s>RP. 10.000.000/bln</s></span>
                                                                </h2>
                                                                <h2 class="price-value d-flex align-items-center">
                                                                    <span class="mb-2">RP. 9.000.000/bln</span>
                                                                </h2>
                                                                <div class="price-list">
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Paket Social Media Ultimate
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Landing Page atau Iklan 50.000 reach
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Iklan Traffic 1.000 Klik
                                                                    </p>
                                                                </div>
                                                                <a class="align-items-end" href="form.html"
                                                                    style="text-decoration: none">
                                                                    <button
                                                                        class="btn btn-fill text-white d-flex justify-content-center align-items-center w-100">
                                                                        Choose Plan
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="mx-auto card-item position-relative">
                                                            <div
                                                                class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden">
                                                                <h2 class="price-title">Paket Mix Emerald</h2>
                                                                <h2 class="price-value d-flex align-items-center">
                                                                    <span class="mb-2"><s>RP. 13.950.000/bln</s></span>
                                                                </h2>
                                                                <h2 class="price-value d-flex align-items-center">
                                                                    <span class="mb-2">RP.  12.555.000/bln</span>
                                                                </h2>
                                                                <div class="price-list">
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Paket Social Media Emerald
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Landing Page atau Iklan 50.000 reach
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Iklan Traffic 2.000 Klik
                                                                    </p>
                                                                </div>
                                                                <a class="align-items-end" href="form.html"
                                                                    style="text-decoration: none">
                                                                    <button
                                                                        class="btn btn-fill text-white d-flex justify-content-center align-items-center w-100">
                                                                        Choose Plan
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="mx-auto card-item position-relative">
                                                            <div
                                                                class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden">
                                                                <h2 class="price-title">Paket Mix Platinum</h2>
                                                                <h2 class="price-value d-flex align-items-center">
                                                                    <span class="mb-2"><s>RP. 16.700.000/bln</s></span>
                                                                </h2>
                                                                <h2 class="price-value d-flex align-items-center">
                                                                    <span class="mb-2">RP. 15.030.000/bln</span>
                                                                </h2>
                                                                <div class="price-list">
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Paket Social Media Platinum
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Landing Page atau Iklan 50.000 leads
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Iklan Traffic 2.000 Klik
                                                                    </p>
                                                                </div>
                                                                <a class="align-items-end" href="form.html"
                                                                    style="text-decoration: none">
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

                        {{-- Paket TikTok atau Reels Management For UMKM --}}
                        <div class="card mb-3">
                            <div class="card-body pb-0">
                                <ul id="faq-list" class="list-unstyled">
                                    <li class="mb-2">
                                        <a data-toggle="collapse" class="collapsed" href="#tt-reels">
                                            <div class="d-flex produk-iklan">
                                                <h3 class="card-title mx-2">Paket TikTok atau Reels Management For UMKM</h3>
                                                <svg class="ml-auto" xmlns="http://www.w3.org/2000/svg" width="28"
                                                    height="28" fill="currentColor" class="bi bi-arrow-down-short"
                                                    viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
                                                </svg>
                                            </div>
                                        </a>
                                        <div id="tt-reels" class="collapse" data-parent="#faq-list">
                                            <div class="content-3-7 overflow-hidden mx-auto position-relative p-0"
                                                style="font-family: 'Poppins', sans-serif">
                                                <div class="mx-auto">
                                                    <div class="d-flex flex-wrap">
                                                        <div class="mx-auto card-item position-relative">
                                                            <div
                                                                class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden">
                                                                <h2 class="price-title">Paket Bronze</h2>
                                                                <h2 class="price-value d-flex align-items-center">
                                                                    <span class="mb-2"><s>RP. 1.050.000/bln</s></span>
                                                                </h2>
                                                                <h2 class="price-value d-flex align-items-center">
                                                                    <span class="mb-2">RP. 750.000/bln</span>
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
                                                                        </span>Report
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
                                                                        class="btn btn-fill text-white d-flex justify-content-center align-items-center w-100">
                                                                        Choose Plan
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="mx-auto card-item position-relative">
                                                            <div
                                                                class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden">
                                                                <h2 class="price-title">Paket Silver</h2>
                                                                <h2 class="price-value d-flex align-items-center">
                                                                    <span class="mb-2"><s>RP. 5.500.000/bln</s></span>
                                                                </h2>
                                                                <h2 class="price-value d-flex align-items-center">
                                                                    <span class="mb-2">RP.  4.200.000/bln</span>
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
                                                                        </span>Admin Service
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Talent 1-2 person
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Free tiktok ads (10.000 – 15.000 Impression)
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Support Creative Content 8 Video
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Bonus Support 5 Influencer
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Report & Analisa Hasil Iklan
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
                                                                        class="btn btn-fill text-white d-flex justify-content-center align-items-center w-100">
                                                                        Choose Plan
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="mx-auto card-item position-relative">
                                                            <div
                                                                class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden">
                                                                <h2 class="price-title">Paket Gold</h2>
                                                                <h2 class="price-value d-flex align-items-center">
                                                                    <span class="mb-2"><s>RP. 8.500.000/bln</s></span>
                                                                </h2>
                                                                <h2 class="price-value d-flex align-items-center">
                                                                    <span class="mb-2">RP.  6.700.000/bln</span>
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
                                                                        </span>Admin Service
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Talent 1-2 person
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Free tiktok ads (15.000 – 20.000 Impression)
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Support Creative Content 16 Video
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Bonus Support 10 Influencer
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Report & Analisa Hasil Iklan
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Rekomendasi Strategi
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Research Concept & Audio Trending
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Research Hashtag Revelan
                                                                    </p>
                                                                </div>
                                                                <a class="align-items-end" href="form.html"
                                                                    style="text-decoration: none">
                                                                    <button
                                                                        class="btn btn-fill text-white d-flex justify-content-center align-items-center w-100">
                                                                        Choose Plan
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="mx-auto card-item position-relative">
                                                            <div
                                                                class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden">
                                                                <h2 class="price-title">Paket Ultimate</h2>
                                                                <h2 class="price-value d-flex align-items-center">
                                                                    <span class="mb-2"><s>RP. 10.500.000/bln</s></span>
                                                                </h2>
                                                                <h2 class="price-value d-flex align-items-center">
                                                                    <span class="mb-2">RP.  8.500.000/bln</span>
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
                                                                        </span>Admin Service
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Talent 1-2 person
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Free tiktok ads (20.000 – 30.000 Impression)
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Support Creative Content 22 Video
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Bonus Support 15 Influencer
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Report & Analisa Hasil Iklan
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Rekomendasi Strategi
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Research Concept & Audio Trending
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Research Hashtag Revelan
                                                                    </p>
                                                                </div>
                                                                <a class="align-items-end" href="form.html"
                                                                    style="text-decoration: none">
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
                        <img class="img-fluid mt-3" src="{{ asset('img/term-and-condition-jasa-sosial-media-all-in.jpg') }}" alt="Terms and condition">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
