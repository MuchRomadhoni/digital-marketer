@extends('layouts.main-layout')

@section('content')
    <section id="produk" class="choose">
        <div class="container pb-4 px-4">
            <div class="row text-center d-block pt-5 pb-md-4">
                <h1>Iklan Digital</h1>
                <p>Herva memudahkan kamu untuk mengiklan pada FB, IG, Youtube, Google Ads, Tiktok</p>
            </div>
            <div class="">
                <img class="mx-auto img-fluid d-block" src="{{ asset('img/iklan-digital.png') }}" alt="">
            </div>
            <h4 class="card-title">Apa sih iklan digital itu ?</h4>
            <p class="">Iklan online adalah cara untuk memasarkan produk ataupun jasa bisnis anda dengan sarana
                internet dan website. Iklan online sendiri dapat memanfaatkan berbagai platform seperti: </p>
            <ul class="list-styled">
                <li><b>Sosial media</b>, memanfaatkan sosial media untuk memasang iklan kita. Dengan banyaknya pengguna
                    sosmed di sleuruh dunia merupakan suatu keuntungan yang sangat besar, anda bisa melakukan segmentasi
                    pasar secara tepat dan cepat!Berikut merupakan contoh sosmed yang sangat disarankan untuk melakukan
                    pengiklanan.</li>
                <ul>
                    <li>Facebook</li>
                    <li>Instagram</li>
                    <li>Tiktok</li>
                </ul>
                <li>
                    <b>Mesin pencarian</b>, Iklan yang satu ini merupakan iklan yang disediakan oleh mesin pencarian untuk
                    media pemasaran.Contohnya adalah seperti google dengan menggunakan google ads.
                </li>
                <li>
                    <b>Forum dan website</b>, Iklan yang memanfaatkan forum dan website terkenal untuk media pemasaran.Anda
                    dapat memilih forum atau website yang sesuai dengan produk ataupun jasa anda sehingga tepat sasaran.
                </li>
            </ul>
            <br>
            <h4>Kenapa penting ?</h4>
            <p>Iklan online pada saat ini sangat penting untuk setiap usaha sebagai salah satu strategi marketing yang patut
                diperhitungkan. Bagaimana tidak? sebagai contoh pengguna aktif internet di Indonesia awal tahun 2017 lalu
                saja sebanyak 132,7 juta!!</p>
            <p>Anda memiliki produk ataupun jasa sebagus apapun jika marketingnya buruk akan terasa percuma karena kecilnya
                bahkan tidak ada pendapatan.</p>
            <p>Lantas cara praktis apa yang dapat meledakkan pendapatan anda?</p>

            <div class="form iklan-digital">
                <div class="row text-center d-block pt-5 pb-md-4">
                    <h1>Tunggu apa Lagi ? Pilih Paket Iklan di Bawah</h1>
                </div>
                <div class="container px-4">
                    <div class="row pb-md-4 padding-top-form" style="justify-content: center" ;>
                        
                        {{-- fb --}}
                        <div class="card mb-3">
                            <div class="card-body pb-0">
                                <ul id="faq-list" class="list-unstyled">
                                    <li class="mb-2">
                                        <a data-toggle="collapse" class="collapsed" href="#facebook-ads">
                                            <div class="d-flex produk-iklan">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="blue"
                                                    class="bi bi-facebook" viewBox="0 0 16 16">
                                                    <path
                                                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                                </svg>
                                                <h3 class="card-title mx-2">Facebook ads</h3>
                                                <svg class="ml-auto" xmlns="http://www.w3.org/2000/svg" width="28"
                                                    height="28" fill="currentColor" class="bi bi-arrow-down-short"
                                                    viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
                                                </svg>
                                            </div>
                                        </a>
                                        <div id="facebook-ads" class="collapse" data-parent="#faq-list">
                                            <p class="card-text pt-3">
                                                Salah satu kiat sukses dalam melakukan pemasaran dalam internet adalah
                                                beriklan.
                                                Facebook merupakan salah satu sosial media terbesar di dunia dengan ratusan
                                                juta
                                                pengguna aktif diseluruh dunia.</p>
                                            <p>Kelebihan itulah yang membuat facebook sangat diminati para digital marketer
                                                untuk
                                                menggunakan layanan iklan facebook (facebook ads), sehingga facebook
                                                merupakan tools
                                                yang sangat powerfull untuk melakukan pemasaran, telah banyak pemilik toko
                                                online yang
                                                mendapatkan profit puluhan juta hanya dengan iklan facebook ini.</p>
                                            <div class="content-3-7 overflow-hidden mx-auto position-relative p-0"
                                                style="font-family: 'Poppins', sans-serif">
                                                <div class="mx-auto">
                                                    <div class="d-flex flex-wrap">
                                                        <div class="mx-auto card-item position-relative">
                                                            <div
                                                                class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden">
                                                                <h2 class="price-title">Facebook Starter</h2>
                                                                <h2 class="price-value d-flex align-items-center">
                                                                    <span class="mb-2">Rp. 150.000</span>
                                                                </h2>
                                                                <div class="price-list">
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Konsultasi Konten & Target Pasar
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>3 hari tayang atau KPI lebih dari 3000 orang
                                                                    </p>
                                                                    <p class="d-flex align-items-center no-check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/no-check.png') }}"
                                                                                alt="" />
                                                                        </span>Free konten design dan copy writing
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
                                                                <h2 class="price-title">Facebook Business</h2>
                                                                <h2 class="price-value d-flex align-items-center">
                                                                    <span class="mb-2">Rp. 265.000</span>
                                                                </h2>
                                                                <div class="price-list">
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Konsultasi Konten & Target Pasar
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>7 hari tayang atau jangkauan 7000 - 10.000
                                                                    </p>
                                                                    <p class="d-flex align-items-center no-check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/no-check.png') }}"
                                                                                alt="" />
                                                                        </span>Free konten design dan copy writing
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
                                                                <h2 class="price-title">Facebook Platinum</h2>
                                                                <h2 class="price-value d-flex align-items-center">
                                                                    <span class="mb-2">Rp. 825.000</span>
                                                                </h2>
                                                                <div class="price-list">
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Konsultasi Konten & Target Pasar
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>14 hari tayang atau atau jangkauan 15.000 –
                                                                        25.000
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Free konten design dan copy writing
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

                        {{-- ig --}}
                        <div class="card mb-3">
                            <div class="card-body pb-0">
                                <ul id="faq-list" class="list-unstyled">
                                    <li class="mb-2">
                                        <a data-toggle="collapse" class="collapsed" href="#ig-ads">
                                            <div class="d-flex produk-iklan">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                    fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                                </svg>
                                                <h3 class="card-title mx-2">Instagram ads</h3>
                                                <svg class="ml-auto" xmlns="http://www.w3.org/2000/svg" width="28"
                                                    height="28" fill="currentColor" class="bi bi-arrow-down-short"
                                                    viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
                                                </svg>
                                            </div>
                                        </a>
                                        <div id="ig-ads" class="collapse" data-parent="#faq-list">
                                            <p class="card-text pt-3">
                                                Dengan menggunakan Jasa Iklan Instagram anda akan mendapatkan banyak
                                                keuntungan. Instagram merupakan salah satu sosial media foto terbesar di
                                                dunia dengan jutaan user aktif setiap harinya!</p>
                                            <p>Anda dapat membuat iklan instagram yang langsung mengarahkan pengguna
                                                instagram ke website anda atau halaman lain yang anda inginkan. Selain itu
                                                format iklan anda dapat beripa video ataupun gambar. Cara kerja iklan
                                                instagram yang menyerupai ads facebook menjadikan suatu keuntungan
                                                tersendiri untuk anda. Simak kelebihan jika anda beriklan di instagram di
                                                bawah ini.</p>
                                            <div class="content-3-7 overflow-hidden mx-auto position-relative p-0"
                                                style="font-family: 'Poppins', sans-serif">
                                                <div class="mx-auto">
                                                    <div class="d-flex flex-wrap">
                                                        <div class="mx-auto card-item position-relative">
                                                            <div
                                                                class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden">
                                                                <h2 class="price-title">Instagram Start</h2>
                                                                <h2 class="price-value d-flex align-items-center">
                                                                    <span class="mb-2">Rp. 180.000</span>
                                                                </h2>
                                                                <div class="price-list">
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Konsultasi Konten & Target Pasar
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>3 hari tayang atau jangkauan 1.000 – 2.000
                                                                    </p>
                                                                    <p class="d-flex align-items-center no-check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/no-check.png') }}"
                                                                                alt="" />
                                                                        </span>3 desain iklan single
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
                                                                <h2 class="price-title">Instagram Business</h2>
                                                                <h2 class="price-value d-flex align-items-center">
                                                                    <span class="mb-2">Rp. 325.000</span>
                                                                </h2>
                                                                <div class="price-list">
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Konsultasi Konten & Target Pasar
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>7 hari tayang atau jangkauan 5.000 – 8.000
                                                                    </p>
                                                                    <p class="d-flex align-items-center no-check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/no-check.png') }}"
                                                                                alt="" />
                                                                        </span>3 desain iklan single
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
                                                                <h2 class="price-title">Instagram Platinum</h2>
                                                                <h2 class="price-value d-flex align-items-center">
                                                                    <span class="mb-2">Rp. 325.000</span>
                                                                </h2>
                                                                <div class="price-list">
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Konsultasi Konten & Target Pasar
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>14 hari tayang atau jangkauan 10.000 – 15.000
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span><strong>3 desain iklan single</strong>
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
                                                                <h2 class="price-title">Insta Story Start</h2>
                                                                <h2 class="price-value d-flex align-items-center">
                                                                    <span class="mb-2">Rp. 180.000</span>
                                                                </h2>
                                                                <div class="price-list">
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Konsultasi Konten & Target Pasar
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>3 hari tayang atau jangkauan 500 – 1.000
                                                                    </p>
                                                                    <p class="d-flex align-items-center no-check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/no-check.png') }}"
                                                                                alt="" />
                                                                        </span>3 desain iklan single
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
                                                                <h2 class="price-title">Insta Story Business</h2>
                                                                <h2 class="price-value d-flex align-items-center">
                                                                    <span class="mb-2">Rp. 350.000</span>
                                                                </h2>
                                                                <div class="price-list">
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Konsultasi Konten & Target Pasar
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>7 hari tayang atau jangkauan 1.000 – 2.000
                                                                    </p>
                                                                    <p class="d-flex align-items-center no-check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/no-check.png') }}"
                                                                                alt="" />
                                                                        </span>3 desain iklan single
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
                                                                <h2 class="price-title">Insta Story Platinum</h2>
                                                                <h2 class="price-value d-flex align-items-center">
                                                                    <span class="mb-2">Rp. 950.000</span>
                                                                </h2>
                                                                <div class="price-list">
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Konsultasi Konten & Target Pasar
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>14 hari tayang atau jangkauan 2.500 – 5.000
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span><strong>3 desain iklan single</strong>
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

                        {{-- Youtube --}}
                        <div class="card mb-3">
                            <div class="card-body pb-0">
                                <ul id="faq-list" class="list-unstyled">
                                    <li class="mb-2">
                                        <a data-toggle="collapse" class="collapsed" href="#youtube-ads">
                                            <div class="d-flex produk-iklan">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red"
                                                    class="bi bi-youtube" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                                                </svg>
                                                <h3 class="card-title mx-2">Youtube ads</h3>
                                                <svg class="ml-auto" xmlns="http://www.w3.org/2000/svg" width="28"
                                                    height="28" fill="currentColor" class="bi bi-arrow-down-short"
                                                    viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
                                                </svg>
                                            </div>
                                        </a>
                                        <div id="youtube-ads" class="collapse" data-parent="#faq-list">
                                            <p class="card-text pt-3">
                                                Berikut merupakan beberapa keuntungan beriklan di Youtube!
                                            <ul>
                                                <li>
                                                    <strong>Target Konsumen yang Spesifik </strong>,
                                                    Anda dapat memilih target yang spesifik, mulai dari kata kunci apa yang
                                                    anda inginkan untuk iklan yang anda tayangkan, topik tertentu, bahkan
                                                    berdasarkan demografi seperti “wanita diatas 20 tahun” atau “pria diatas
                                                    35 tahun” dan lainnya.
                                                </li>
                                                <li>
                                                    <strong>
                                                        Iklan lebih dipercaya</strong>,
                                                    Iklan dengan format video dalam waktu beberapa menit tentunya akan
                                                    memberikan pengalaman berbeda bagi setiap orang yang melihatnya.
                                                    Pastikan iklan video anda memiliki kualitas yang baik sehingga orang
                                                    yang menonton akan tertarik dengan bisnis anda.
                                                </li>
                                                <li><strong>Lebih Murah</strong>,
                                                    Iklan di Youtube pastinya akan jauh lebih murah dibandingkan anda
                                                    beriklan di televisi. Jika di televisi anda harus mengeluarkan budget
                                                    puluhan hingga ratusan juta tapi tidak di Youtube. Dengan paket yang
                                                    kami berikan, pastinya akan jauh lebih murah dan lebih efektif kerja
                                                    dari iklan anda!
                                                </li>
                                                <li><strong>Jangkauan Lebih Luas</strong>,
                                                    Promosi di Youtube dengan jutaan pengunjung setiap harinya, bayangkan
                                                    berapa orang yang nantinya akan melihat langsung iklan anda?
                                                </li>
                                            </ul>
                                            </p>
                                            <div class="content-3-7 overflow-hidden mx-auto position-relative p-0"
                                                style="font-family: 'Poppins', sans-serif">
                                                <div class="mx-auto">
                                                    <div class="d-flex flex-wrap">
                                                        <div class="mx-auto card-item position-relative">
                                                            <div
                                                                class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden">
                                                                <h2 class="price-title">Youtube Starter</h2>
                                                                <h2 class="price-value d-flex align-items-center">
                                                                    <span class="mb-2">Rp. 150.000</span>
                                                                </h2>
                                                                <div class="price-list">
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Konsultasi Target Pasar
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>3 hari tayang
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Estimasi Tayang 60 - 100 kali
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Youtube In Stream (Iklan video anda tayang
                                                                        sebelum video youtube mulai diputar)
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
                                                                <h2 class="price-title">Youtube Business</h2>
                                                                <h2 class="price-value d-flex align-items-center">
                                                                    <span class="mb-2">Rp. 275.000</span>
                                                                </h2>
                                                                <div class="price-list">
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Konsultasi Target Pasar
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>7 hari tayang
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Estimasi Tayang 140 - 210 kali
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Youtube In Stream (Iklan video anda tayang
                                                                        sebelum video youtube mulai diputar)
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
                                                                <h2 class="price-title">Youtube Pro</h2>
                                                                <h2 class="price-value d-flex align-items-center">
                                                                    <span class="mb-2">Rp. 525.000</span>
                                                                </h2>
                                                                <div class="price-list">
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Konsultasi Target Pasar
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>14 hari tayang
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Estimasi Tayang 300 - 450 kali
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Youtube In Stream (Iklan video anda tayang
                                                                        sebelum video youtube mulai diputar)
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

                                                        <div class="text-center mt-3 training">


                                                            <h2>Paket Training Monetitasi Channel Youtube</h2>
                                                            <p>90 Menit Sesi training bagaimana mendapatkan uang dari
                                                                mengelola channel youtube.
                                                                Pengajar adalah praktisi yang memiliki 3 channel youtube dan
                                                                telah berhasil mendapatkan hasil jutaan rupiah dari
                                                                monetisasi channelnya.</p>
                                                        </div>

                                                        <div class="mx-auto card-item position-relative">
                                                            <div
                                                                class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden">
                                                                <h2 class="price-title">Paket Bronze</h2>
                                                                <h2 class="price-value d-flex align-items-center">
                                                                    <span class="mb-2">Rp. 450.000</span>
                                                                    <span class="price-duration"
                                                                        style="color: #8997b5">/orang</span>
                                                                </h2>
                                                                <div class="price-list">
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Perorang
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
                                                                    <span class="mb-2">Rp. 300.000</span>
                                                                    <span class="price-duration"
                                                                        style="color: #8997b5">/orang</span>
                                                                </h2>
                                                                <div class="price-list">
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>2 - 4 Orang
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
                                                                    <span class="mb-2">Rp. 225.000</span>
                                                                    <span class="price-duration"
                                                                        style="color: #8997b5">/orang</span>
                                                                </h2>
                                                                <div class="price-list">
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>5 - 9 Orang
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
                                                                    <span class="mb-2">Rp. 175.000</span>
                                                                    <span class="price-duration"
                                                                        style="color: #8997b5">/orang</span>
                                                                </h2>
                                                                <div class="price-list">
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Lebih dari 10 Orang
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

                        {{-- Google Ads --}}
                        <div class="card mb-3">
                            <div class="card-body pb-0">
                                <ul id="faq-list" class="list-unstyled">
                                    <li class="mb-2">
                                        <a data-toggle="collapse" class="collapsed" href="#google-ads">
                                            <div class="d-flex produk-iklan">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                    fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                                                </svg>
                                                <h3 class="card-title mx-2">Google ads</h3>
                                                <svg class="ml-auto" xmlns="http://www.w3.org/2000/svg" width="28"
                                                    height="28" fill="currentColor" class="bi bi-arrow-down-short"
                                                    viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
                                                </svg>
                                            </div>
                                        </a>
                                        <div id="google-ads" class="collapse" data-parent="#faq-list">
                                            <p class="card-text pt-3">
                                                Jasa Iklan Google Adwords merupakan salah satu strategi internet marketing
                                                yang patut diperhitungkan. Siapa yang tidak tahu mesin pencarian terbesar di
                                                dunia ini? Pastinya adalah google dengan jumlah usernya yang begitu besar.
                                            </p>
                                            <p>Terdapat banyak keuntungan yang akan didapatkan jika menggunakan google
                                                sebagai tools marketing anda karena umumnya seluruh orang di dunia jika
                                                ingin mencari sesuatu akan segera mencari di google.</p>
                                            <div class="content-3-7 overflow-hidden mx-auto position-relative p-0"
                                                style="font-family: 'Poppins', sans-serif">
                                                <div class="mx-auto">
                                                    <div class="d-flex flex-wrap">
                                                        <div class="mx-auto card-item position-relative">
                                                            <div
                                                                class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden">
                                                                <h2 class="price-title">Google Start</h2>
                                                                <h2 class="price-value d-flex align-items-center">
                                                                    <span class="mb-2">Rp. 125.000</span>
                                                                </h2>
                                                                <div class="price-list">
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Konsultasi Konten & Target Pasar
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>3 hari tayang atau jangkauan 500 – 1.000
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>10 Keyword
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
                                                                <h2 class="price-title">Google Business</h2>
                                                                <h2 class="price-value d-flex align-items-center">
                                                                    <span class="mb-2">Rp. 250.000</span>
                                                                </h2>
                                                                <div class="price-list">
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Konsultasi Konten & Target Pasar
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>7 hari tayang atau jangkauan 1.000 – 2.000
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>20 – 30 Keyword
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
                                                                <h2 class="price-title">Google Platinum</h2>
                                                                <h2 class="price-value d-flex align-items-center">
                                                                    <span class="mb-2">Rp. 575.000</span>
                                                                </h2>
                                                                <div class="price-list">
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Konsultasi Konten & Target Pasar
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>14 hari tayang atau jangkauan 2.500 – 5.000
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>> 30 Keyword
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

                        {{-- Tiktok Ads --}}
                        <div class="card mb-3">
                            <div class="card-body pb-0">
                                <ul id="faq-list" class="list-unstyled">
                                    <li class="mb-2">
                                        <a data-toggle="collapse" class="collapsed" href="#tiktok-ads">
                                            <div class="d-flex produk-iklan">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                    fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                                                    <path
                                                        d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z" />
                                                </svg>
                                                <h3 class="card-title mx-2">Tiktok ads</h3>
                                                <svg class="ml-auto" xmlns="http://www.w3.org/2000/svg" width="28"
                                                    height="28" fill="currentColor" class="bi bi-arrow-down-short"
                                                    viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
                                                </svg>
                                            </div>
                                        </a>
                                        <div id="tiktok-ads" class="collapse" data-parent="#faq-list">
                                            <p class="card-text pt-3">
                                                Sudah coba iklan di tiktok belum? Tiktok menjadi sangat fenomenal setelah
                                                menjadi aplikasi social media terbanyak yang di download di dunia!. Pengguna
                                                tiktok 41% berusia 16 hingga 24 tahun dan secara umum 66% pengguna TikTok’s
                                                berusia dibawah 30 tahun.
                                            </p>
                                            <p>Tiktok potensinya sangatlah besar bagi perusahaan dan bisnis untuk meraih
                                                customer. tiktok disebut memiliki kelebihan utama yaitu: mampu menciptakan
                                                interaksi yang tinggi dari pengguna kepada brand.</p>
                                            <p>Tiktok potensinya sangatlah besar bagi perusahaan dan bisnis untuk meraih
                                                customer. tiktok disebut memiliki kelebihan utama yaitu: mampu menciptakan
                                                interaksi yang tinggi dari pengguna kepada brand.</p>
                                            <div class="content-3-7 overflow-hidden mx-auto position-relative p-0"
                                                style="font-family: 'Poppins', sans-serif">
                                                <div class="mx-auto">
                                                    <div class="d-flex flex-wrap">
                                                        <div class="mx-auto card-item position-relative">
                                                            <div
                                                                class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden">
                                                                <h2 class="price-title">Tiktok Start</h2>
                                                                <h2 class="price-value d-flex align-items-center">
                                                                    <span class="mb-2">Rp. 1.625.000</span>
                                                                </h2>
                                                                <div class="price-list">
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Konsultasi Konten & Target Pasar
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>3 Hari Tayang atau 3.000 – 10.000 Jangkauan
                                                                        Orang
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Report dan Analisis
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
                                                                <h2 class="price-title">Tiktok Business</h2>
                                                                <h2 class="price-value d-flex align-items-center">
                                                                    <span class="mb-2">Rp. 3.850.000</span>
                                                                </h2>
                                                                <div class="price-list">
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Konsultasi Konten & Target Pasar
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>7 hari tayang atau 20.000 – 70.000 Jangkauan
                                                                        Orang
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Report dan Analisis
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
                                                                <h2 class="price-title">Tiktok Platinum</h2>
                                                                <h2 class="price-value d-flex align-items-center">
                                                                    <span class="mb-2">Rp. 7.000.000</span>
                                                                </h2>
                                                                <div class="price-list">
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Konsultasi Konten & Target Pasar
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>14 hari tayang atau 100.000 – 150.000
                                                                        Jangkauan Orang
                                                                    </p>
                                                                    <p class="d-flex align-items-center check">
                                                                        <span
                                                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('img/check.png') }}"
                                                                                alt="" />
                                                                        </span>Report dan Analisis
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
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
