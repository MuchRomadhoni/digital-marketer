@extends('layouts.main-layout')


@section('content')
    {{-- home --}}
    <section id="home" class="h-100 w-100" style="
            box-sizing: border-box;
            position: relative;
            background-color: #fafcff;
          ">
        <div class="header-3-3 container-xxl mx-auto p-0 position-relative" style="font-family: 'Poppins', sans-serif">
            <div>
                <div class="mx-auto d-flex flex-lg-row flex-column hero">
                    <!-- Left Column -->
                    <div
                        class="left-column flex-lg-grow-1 d-flex flex-column align-items-lg-center text-lg-center align-items-center text-center">
                        <h1 class="title-text-big">
                            Hanya Di <span style="color: #4e91f9">Herva ID</span><br class="d-lg-block d-none" /> Yang Bikin
                            Usahamu Jadi Makin <span style="color: #2ec49c">Laris</span>
                            {{-- Ada Gak Sih<br class="d-lg-block d-none" />
                            <span style="color: #4e91f9">Seminar</span> Yang<br class="d-lg-block d-none" />
                            Bikin Omset
                            <span style="color: #ff7c57">Maksimal</span> --}}
                        </h1>
                        <p class="text-caption">
                            Mau bikin usahamu makin laris di era digital saat ini ?<br class="d-sm-block d-none" />Tenang
                            saja, kami disini bakal bantu kamu
                        </p>
                        <div
                            class="d-flex flex-sm-row flex-column align-items-center mx-auto mx-lg-0 justify-content-center gap-3">
                            <button class="btn btn-get text-white d-inline-flex">
                                Get Started
                            </button>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="ml-3 right-column d-flex justify-content-center justify-content-lg-start text-center pe-0">
                        <img class="ml-5 d-lg-block d-none hero-right" src="{{ asset('img/digi.png') }}" alt="" />

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- karikatur --}}
    <section class="h-100 w-100 bg-white" style="box-sizing: border-box">
        <div class="empty-2-2 container mx-auto d-flex align-items-center justify-content-center flex-column"
            style="font-family: 'Poppins', sans-serif">
            <div class="text-center w-100 mb-5">
                <h1 class="title-text">Bayangkan</h1>
                <img style="width: 30%" src="{{ asset('img/ralex.jpg') }}" alt="">
                <h2>Dengan join <span style="color: #4e91f9">Herva ID</span></h2>
                <h2><span style="color: #ff7c57">Anda gak perlu melakukan hal-hal dibawah ini</span></h2>
            </div>
            <div class="d-flex flex-column karikatur">
                <div class="media all">
                    <img src="{{ asset('img/karikatur/karikatur_01.png') }}" class="mr-2" alt="">
                    <div class="media-body">
                        <p class="karikatur-caption">Susah² Trial Error berjualan Online, hingga mencoba membuat produk
                            sendiri <span style="color: #ff7c57">yang belum tentu laku, belum lagi ongkos
                                produksinya</span></p>
                    </div>
                </div>
                <hr>
                <div class="media all">
                    <img src="{{ asset('img/karikatur/karikatur_02.png') }}" class="mr-3" alt="">
                    <div class="media-body">
                        <p class="karikatur-caption"> <span style="color: #ff7c57">Capek² Packing Barang, </span>Keluar
                            Biaya Kardus Packing, Bubble Wrap,
                            Lakban hingga Printer Alamat</p>
                    </div>
                </div>
                <hr>
                <div class="media all">
                    <img src="{{ asset('img/karikatur/karikatur_03.png') }}" class="mr-3" alt="">
                    <div class="media-body">
                        <p class="karikatur-caption"><span style="color: #ff7c57">Ikut Seminar atau Webinar Strategi
                                Bisnis yang harganya
                                berjuta-juta.</span> Di Herva ID Modul Pembelajarannya Lengkap mulai dari Instagram,
                            Marketplace, hingga Facebook</p>
                    </div>
                </div>
                <hr>
                <div class="media all">
                    <img src="{{ asset('img/karikatur/karikatur_04.png') }}" class="mr-3" alt="">
                    <div class="media-body">
                        <p class="karikatur-caption"><span style="color: #ff7c57">Nyetok Barang dari Supplier</span>
                            demi harga lebih murah, yang ada
                            malah
                            makan tempat, modal besar dan risiko stok mati</p>
                    </div>
                </div>
                <hr>
                <div class="media all">
                    <img src="{{ asset('img/karikatur/karikatur_05.png') }}" class="mr-3" alt="">
                    <div class="media-body">
                        <p class="karikatur-caption">Meninggalkan Keluarga Anda tercinta <span style="color: #ff7c57">hanya
                                untuk mendapatkan
                                penghasilan</span></p>
                    </div>
                </div>
                <hr>
                <div class="media all">
                    <img src="{{ asset('img/karikatur/karikatur_06.png') }}" class="mr-3" alt="">
                    <div class="media-body">
                        <p class="karikatur-caption">Bisnis yang dimulai lama² akan tumbuh, <span style="color: #ff7c57">nah
                                Gak Perlu lagi Gaji Staff
                                untuk Desain Foto Produk, Packing, hingga CS</span></p>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </section>

    <!-- Youtube -->
    <section class="h-100 w-100 bg-white" style="box-sizing: border-box">
        <div class="empty-2-2 container mx-auto d-flex align-items-center justify-content-center flex-column"
            style="font-family: 'Poppins', sans-serif">
            <div class="text-center w-100" style="margin-bottom: -33px">
                <h1 class="title-text">Tonton videonya dulu ya</h1>
                <p class="title-caption">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
                    ducimus quod repudiandae porro temporibus. Similique quasi vel, in
                    ad voluptates voluptatem suscipit necessitatibus praesentium quam
                    <!-- atque esse, sint, natus nostrum?<br class="d-sm-block d-none" />
                suggest you Back to Homepage. -->
                </p>
            </div>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dQw4w9WgXcQ"
                    allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <!-- Kata Mereka -->
    <section id="testimoni" class="h-100 w-100" style="box-sizing: border-box; background-color: #f2f6ff">
        <div class="  empty-2-2 container mx-auto d-flex align-items-center justify-content-center flex-column pb-5"
            style="font-family: 'Poppins', sans-serif">
            <div class="text-center w-100">
                <h1 class="title-text">Apa kata mereka ?</h1>
                <p class="title-caption">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
                    ducimus quod repudiandae porro temporibus. Similique quasi vel, in
                    ad voluptates voluptatem suscipit necessitatibus praesentium quam
                    <br class="d-sm-block d-none" />
                </p>
            </div>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="media">
                                    <img src="{{ asset('img/luhut.png') }}" class="mr-3" alt="">
                                    <div class="media-body">
                                        <div class="testimonial">
                                            <p class="testi-caption">Lorem ipsum dolor sit amet, consec adipiscing
                                                elit. Nam eusem scelerisque
                                                tempor, varius quam luctus dui. Mauris magna metus nec.</p>
                                            <p class="overview"><b>Paula Wilson</b>, Media Analyst</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="media">
                                    <img src="{{ asset('img/luhut.png') }}" class="mr-3" alt="">
                                    <div class="media-body">
                                        <div class="testimonial">
                                            <p class="testi-caption">Lorem ipsum dolor sit amet, consec adipiscing
                                                elit. Nam eusem scelerisque
                                                tempor, varius quam luctus dui. Mauris magna metus nec.</p>
                                            <p class="overview"><b>Paula Wilson</b>, Media Analyst</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="media">
                                    <img src="{{ asset('img/luhut.png') }}" class="mr-3" alt="">
                                    <div class="media-body">
                                        <div class="testimonial">
                                            <p class="testi-caption">Vestibulum quis quam ut magna consequat faucibus.
                                                Pellentesque eget mi
                                                suscipit tincidunt. Utmtc tempus dictum. Pellentesque virra.</p>
                                            <p class="overview"><b>Antonio Moreno</b>, Web Developer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Digital Agency -->
    <section id="digital-agency" class="h1-00 w-100 bg-white" style="box-sizing: border-box">
        <div class="content-3-2 container-xxl mx-auto position-relative" style="font-family: 'Poppins', sans-serif">
            <div class="d-flex flex-lg-row flex-column align-items-center">
                <!-- Left Column -->
                <div class="img-hero text-center justify-content-center d-flex">
                    <img id="hero" class="img-fluid"
                        src="{{ asset('img/digital-agency.png') }}"
                        alt="" />
                </div>

                <!-- Right Column -->
                <div
                    class="right-column d-flex flex-column align-items-lg-start align-items-center text-lg-start text-center">
                    <h2 class="title-text">Digital Agency</h2>
                    <ul style="padding: 0; margin: 0">
                        <li class="list-unstyled" style="margin-bottom: 2rem">
                            <p class="text-caption">
                                <span style="color: #4e91f9"> Digital Agency </span> agensi
                                yang membantu memasarkan produk dengan strategis melalui jalur
                                digital seperti menggunakan social media untuk pemasarannya<br
                                    class="d-sm-inline d-none" />
                                <br class="d-sm-inline d-none" />
                                <span style="color: #4e91f9">Apa sih pentingnya Digital Agency ?</span>
                                Di zaman sekarang banyak orang lebih menggunakan social media
                                di kehidupannya, jadi efektif banget untuk memasarkan produk
                                maupun brand kita lewat digital agency selain itu ada beberapa
                                faktor pendukung lainnya<br class="d-sm-inline d-none" />
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Mengapa Kami -->
    <section id="mengapa-kami" class="choose">
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap");

            * {
                font-family: "Inter", sans-serif !important;
            }

            body .choose {
                background-color: #f9fcfc;
            }

            body .choose h1 {
                color: #232323;
                font-weight: 700 !important;
            }

            body .choose p {
                color: #879fb0;
            }

            @media screen and (min-width: 768px) {
                body .choose h1 {
                    font-size: 60px !important;
                }
            }

            body .cl-blue {
                color: #0f52ba !important;
            }

        </style>
        <div class="container pb-4 px-4">
            <div class="row text-center d-block pt-5 pb-md-4">
                <h1 class="my-3">Mengapa kami ?</h1>
                <p>Herva berkomitmen untuk membantu klien mencapai tujuan mereka</p>
            </div>
            <div class="row py-5">
                <div class="col-md-3 p-4 text-center" onmouseover="coloringgoals(this)" onmouseout="normalgoals(this)">
                    <img src="{{ asset('img/mengapa-kami-1.svg') }}"
                        alt="taxes" class="img-fluid mx-auto" />
                    <img src="{{ asset('img/mengapa-kami-1-dif.svg') }}"
                        alt="taxes" class="img-fluid mx-auto" style="display: none" />
                    <p class="font-weight-bold mt-4 mb-1 cl-blue">Pencapaian</p>
                    <p class="mb-0">

                        Digital Marketer memberikan jasa digital marketing terbaik untuk pencapaian pemasaran yang luar
                        biasa.
                    </p>
                </div>
                <div class="col-md-3 p-4 text-center" onmouseover="coloringgoals(this)" onmouseout="normalgoals(this)">
                    <img src="{{ asset('img/mengapa-kami-2.svg') }}"
                        alt="calendar" class="img-fluid mx-auto" />
                    <img src="{{ asset('img/mengapa-kami-2-dif.svg') }}"
                        alt="user" class="img-fluid mx-auto" style="display: none" />

                    <p class="font-weight-bold mt-4 mb-1 cl-blue">Fokus Pada Hasil</p>
                    <p class="mb-0">
                        Kami berpengalaman menjalankan berbagai kampanye diberbagai inudstri dengan tujuan sales dan
                        konversi.

                    </p>
                </div>
                <div class="col-md-3 p-4 text-center" onmouseover="coloringgoals(this)" onmouseout="normalgoals(this)">
                    <img src="{{ asset('img/mengapa-kami-3.svg') }}"
                        alt="discount" class="img-fluid mx-auto" />
                    <img src="{{ asset('img/mengapa-kami-3-dif.svg') }}"
                        alt="user" class="img-fluid mx-auto" style="display: none" />
                    <p class="font-weight-bold mt-4 mb-1 cl-blue">Berpengalaman</p>
                    <p class="mb-0">
                        Tim kami merupakan praktisi digital marketing expert yang telah teruji di bidangnya selama
                        bertahun-tahun.
                    </p>
                </div>
                <div class="col-md-3 p-4 text-center" onmouseover="coloringgoals(this)" onmouseout="normalgoals(this)">
                    <img src="{{ asset('img/mengapa-kami-4.svg') }}"
                        alt="user" class="img-fluid mx-auto" />
                    <img src="{{ asset('img/mengapa-kami-4-dif.svg') }}"
                        alt="user" class="img-fluid mx-auto" style="display: none" />
                    <p class="font-weight-bold mt-4 mb-1 cl-blue">Target Spesifik</p>
                    <p class="mb-0">
                        Anda dapat memilih target sesuai keinginan anda dari segi usia, lokasi, pekerjaan, dan lain
                        sebagainya!
                    </p>
                </div>
            </div>
        </div>

        <script>
            function coloringgoals(x) {
                x.classList.add("bg-white");
                x.classList.add("rounded-24");
                x.childNodes[1].style.display = "none";
                x.childNodes[3].style.display = "block";
            }

            function normalgoals(x) {
                x.classList.remove("bg-white");
                x.classList.remove("rounded-24");
                x.childNodes[1].style.display = "block";
                x.childNodes[3].style.display = "none";
            }
        </script>
    </section>

    <!-- Product -->
    <section id="produk" class="content">
        <div class="container">
            <div class="row content">
                <div class="col-12 px-md-0 my-auto">
                    <div class="tagline">PRODUCTS AND SERVICES</div>
                    <div class="headline mt-3">
                        Beberapa Produk dan Service Kami <br class="d-none d-md-block" />
                        Yang Bakalan Buat Usahamu Jadi Makin Rame
                    </div>
                    <div class="row benefits text-center px-0">
                        <div class="col-md-3 mt-md-0">
                            <div class="rectangle mx-auto px-1">
                                <img src="img/fb.png" alt="benefits-1" class="img-fluid" />
                                <div class="headline-benefit">IKLAN ONLINE DIGITAL</div>
                                <div class="subheadline-benefit mt-2">
                                    Iklan FB, IG, Youtube, Google Ads, Tiktok
                                    <br class="d-none d-md-block" />
                                </div>
                                <a href="/jasa-iklan-digital" style="text-decoration: none">
                                    <button class="btn btn-produk text-white d-inline-flex">
                                        Selengkapnya
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 mt-5 mt-md-0">
                            <div class="rectangle mx-auto px-1">
                                <img src="img/web.jpg" alt="benefits-1" class="img-fluid" />
                                <div class="headline-benefit">Social Media All In</div>
                                <div class="subheadline-benefit mt-2">
                                    Akun FB, instagram, dan google di handle secara profesional
                                    <br class="d-none d-md-block" />
                                </div>
                                <a href="/social-media-all-in" style="text-decoration: none">
                                    <button class="btn btn-produk text-white d-inline-flex">
                                        Selengkapnya
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 mt-5 mt-md-0">
                            <div class="rectangle mx-auto px-1">
                                <img src="img/market.webp" alt="benefits-1" class="img-fluid" />
                                <div class="headline-benefit">Management Marketplace</div>
                                <div class="subheadline-benefit mt-2">
                                    memaksimalkan potensi besar dari marketplace untuk perkembangan bisnis anda
                                    <br class="d-none d-md-block" />
                                </div>
                                <a href="/manajemen-marketplace" style="text-decoration: none">
                                    <button class="btn btn-produk text-white d-inline-flex">
                                        Selengkapnya
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 mt-5 mt-md-0">
                            <div class="rectangle mx-auto px-1">
                                <img src="img/feed.jpg" alt="benefits-1" class="img-fluid" />
                                <div class="headline-benefit">Endorsment Influencer</div>
                                <div class="subheadline-benefit mt-2">
                                    pelayanan jasa Endorse Influencer Instagram  yang terjangkau
                                    <br class="d-none d-md-block" />
                                </div>
                                <a href="/endorse-influencer" style="text-decoration: none">
                                    <button class="btn btn-produk text-white d-inline-flex">
                                        Selengkapnya
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 mt-md-0">
                            <div class="rectangle mx-auto px-1">
                                <img src="img/sosmed.jpg" alt="benefits-1" class="img-fluid" />
                                <div class="headline-benefit">Paket Conversion untuk UMKM</div>
                                <div class="subheadline-benefit mt-2">
                                    Membantu UMKM untuk meningkatkan penjualan online
                                </div>
                                <a href="/conversion-umkm" style="text-decoration: none">
                                    <button class="btn btn-produk text-white d-inline-flex">
                                        Selengkapnya
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 mt-5 mt-md-0">
                            <div class="rectangle mx-auto px-1">
                                <img src="img/dm.jpg" alt="benefits-1" class="img-fluid" />
                                <div class="headline-benefit">Live Streaming</div>
                                <div class="subheadline-benefit mt-2">
                                    Live Jualan Di Shopee, Tiktok, Atau IG
                                </div>
                                <a href="produk.html" style="text-decoration: none">
                                    <button class="btn btn-produk text-white d-inline-flex">
                                        Selengkapnya
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 mt-5 mt-md-0">
                            <div class="rectangle mx-auto px-1">
                                <img src="img/feed.jpg" alt="benefits-1" class="img-fluid" />
                                <div class="headline-benefit">Jasa Foto Produk</div>
                                <div class="subheadline-benefit mt-2">
                                    Jasa Foto Produk dengan kualitas tinggi dan harga murah untuk kebutuhan usaha anda
                                </div>
                                <a href="produk.html" style="text-decoration: none">
                                    <button class="btn btn-produk text-white d-inline-flex">
                                        Selengkapnya
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 mt-5 mt-md-0">
                            <div class="rectangle mx-auto px-1">
                                <img src="img/foto.jpg" alt="benefits-1" class="img-fluid" />
                                <div class="headline-benefit">Video Profesional</div>
                                <div class="subheadline-benefit mt-2">
                                    menciptakan video sebagai salah satu ujung tombak konten promosi yang kuat
                                </div>
                                <a href="produk.html" style="text-decoration: none">
                                    <button class="btn btn-produk text-white d-inline-flex">
                                        Selengkapnya
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 mt-5 mt-md-0">
                            <div class="rectangle mx-auto px-1">
                                <img src="img/foto.jpg" alt="benefits-1" class="img-fluid" />
                                <div class="headline-benefit">Pembuatan Website</div>
                                <div class="subheadline-benefit mt-2">
                                    memberikan pelayanan jasa pembuatan website profesional yang terjangkau
                                </div>
                                <a href="produk.html" style="text-decoration: none">
                                    <button class="btn btn-produk text-white d-inline-flex">
                                        Selengkapnya
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 mt-5 mt-md-0">
                            <div class="rectangle mx-auto px-1">
                                <img src="img/foto.jpg" alt="benefits-1" class="img-fluid" />
                                <div class="headline-benefit">Training Digital Marketing</div>
                                <div class="subheadline-benefit mt-2">
                                    Herva ID menyediakan layanan Private Training yang sangat sesuai kebutuhan kamu!
                                </div>
                                <a href="produk.html" style="text-decoration: none">
                                    <button class="btn btn-produk text-white d-inline-flex">
                                        Selengkapnya
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Pricing UMKM --}}
    <section class="h-100 w-100" style="box-sizing: border-box; background-color: #f2f6ff">
        <div class="content-3-7 overflow-hidden container-xxl mx-auto position-relative"
            style="font-family: 'Poppins', sans-serif">
            <div class="container mx-auto">
                <div class="d-flex flex-column text-center w-100" style="margin-bottom: 2.25rem">
                    <h2 class="title-text">Beberapa Paket Khusus Untuk Bantu UMKM</h2>
                    <p class="caption-text mx-auto">
                        Pilih salah satu harga bersahabat kami<br />
                        yang cocok untuk bisnis anda
                    </p>
                </div>
                <div class="d-flex flex-wrap">
                    <div class="mx-auto card-item position-relative">
                        <div class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden">
                            <h2 class="price-title">UMKM Starter</h2>
                            <h2 class="price-value d-flex align-items-center">
                                <s><span>Rp. 10 jt</span></s>
                                <span class="price-duration">/Bulan</span>
                            </h2>
                            <h2 class="price-value d-flex align-items-center">
                                <span>Rp. 5 jt</span>
                                <span class="price-duration">/Bulan</span>
                            </h2>
                            {{-- <p class="price-caption">
                                Suitable for those of you<br />
                                who are beginners
                            </p> --}}
                            <div class="price-list">
                                <p class="d-flex align-items-center check">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="{{ asset('img/check.png') }}" alt="" />
                                    </span>Planning Campaign
                                </p>
                                <p class="d-flex align-items-center check">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="{{ asset('img/check.png') }}" alt="" />
                                    </span>Periode iklan 1 bulan
                                </p>
                                <p class="d-flex align-items-center check">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="{{ asset('img/check.png') }}" alt="" />
                                    </span>Pembuatan landing page penjualan
                                </p>
                                <p class="d-flex align-items-center check">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="{{ asset('img/check.png') }}" alt="" />
                                    </span>FREE Update & Support
                                </p>
                                <p class="d-flex align-items-center check">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="{{ asset('img/check.png') }}" alt="" />
                                    </span>50 Produk
                                </p>
                                <p class="d-flex align-items-center check">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="{{ asset('img/check.png') }}" alt="" />
                                    </span>5.000 Kuota Order/Bulan
                                </p>
                                <p class="d-flex align-items-center check">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="{{ asset('img/check.png') }}" alt="" />
                                    </span>Checkout Page
                                </p>
                                <p class="d-flex align-items-center check">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="{{ asset('img/check.png') }}" alt="" />
                                    </span>Bisa COD Menggunakan SiCepat,j&T,JNE & SAP
                                </p>
                                <p class="d-flex align-items-center check">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="{{ asset('img/check.png') }}" alt="" />
                                    </span>Iklan facebook & instagram conversion focus
                                </p>
                                <p class="d-flex align-items-center check">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="{{ asset('img/check.png') }}" alt="" />
                                    </span>Free 2 konten video untuk iklan
                                </p>
                                <p class="d-flex align-items-center check">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="{{ asset('img/check.png') }}" alt="" />
                                    </span>Report & analisa Hasil Iklan
                                </p>
                                <p class="d-flex align-items-center check">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="{{ asset('img/check.png') }}" alt="" />
                                    </span>Rekomendasi Strategi
                                </p>
                            </div>
                            <a class="align-items-end" href="form.html" style="text-decoration: none">
                                <button class="btn btn-outline d-flex justify-content-center align-items-center w-100">
                                    Choose Plan
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="mx-auto card-item position-relative">
                        <div class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden">
                            <h2 class="price-title">UMKM Boost</h2>
                            <h2 class="price-value d-flex align-items-center">
                                <s><span>Rp. 20 jt</span></s>
                                <span class="price-duration">/Bulan</span>
                            </h2>
                            <h2 class="price-value d-flex align-items-center">
                                <span>Rp. 10 jt</span>
                                <span class="price-duration">/Bulan</span>
                            </h2>
                            {{-- <p class="price-caption">
                                Suitable for those of you<br />
                                who are beginners
                            </p> --}}
                            <div class="price-list">
                                <p class="d-flex align-items-center check">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="{{ asset('img/check.png') }}" alt="" />
                                    </span>Planning Campaign
                                </p>
                                <p class="d-flex align-items-center check">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="{{ asset('img/check.png') }}" alt="" />
                                    </span>Periode iklan 1 bulan
                                </p>
                                <p class="d-flex align-items-center check">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="{{ asset('img/check.png') }}" alt="" />
                                    </span>Pembuatan landing page penjualan
                                </p>
                                <p class="d-flex align-items-center check">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="{{ asset('img/check.png') }}" alt="" />
                                    </span>FREE Update & Support
                                </p>
                                <p class="d-flex align-items-center check">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="{{ asset('img/check.png') }}" alt="" />
                                    </span>Unlimited Produk
                                </p>
                                <p class="d-flex align-items-center check">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="{{ asset('img/check.png') }}" alt="" />
                                    </span>25.000 Kuota Order/Bulan
                                </p>
                                <p class="d-flex align-items-center check">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="{{ asset('img/check.png') }}" alt="" />
                                    </span>Checkout Page
                                </p>
                                <p class="d-flex align-items-center check">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="{{ asset('img/check.png') }}" alt="" />
                                    </span>Bisa COD Menggunakan SiCepat,j&T,JNE & SAP
                                </p>
                                <p class="d-flex align-items-center check">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="{{ asset('img/check.png') }}" alt="" />
                                    </span>Iklan facebook & instagram conversion focus
                                </p>
                                <p class="d-flex align-items-center check">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="{{ asset('img/check.png') }}" alt="" />
                                    </span>Iklan google conversion focus
                                </p>
                                <p class="d-flex align-items-center check">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="{{ asset('img/check.png') }}" alt="" />
                                    </span>Free 4 konten video untuk iklan
                                </p>
                                <p class="d-flex align-items-center check">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="{{ asset('img/check.png') }}" alt="" />
                                    </span>Free 1 KOL/Influencer live shopping
                                </p>
                                <p class="d-flex align-items-center check">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="{{ asset('img/check.png') }}" alt="" />
                                    </span>Free 5 KOL/Influencer Nano
                                </p>
                                <p class="d-flex align-items-center check">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="{{ asset('img/check.png') }}" alt="" />
                                    </span>Report & analisa Hasil Iklan
                                </p>
                                <p class="d-flex align-items-center check">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="{{ asset('img/check.png') }}" alt="" />
                                    </span>Rekomendasi Strategi
                                </p>
                            </div>
                            <a href="form.html" style="text-decoration: none">
                                <button class="btn btn-outline d-flex justify-content-center align-items-center w-100">
                                    Choose Plan
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="mx-auto card-item position-relative">
                        <div class="card-item-outline d-flex flex-column position-relative overflow-hidden h-100"
                            style="background-color: #2e3a53">
                            <h2 class="price-title text-white">UMKM Accelerate</h2>
                            <h2 class="price-value d-flex align-items-center text-white">
                                <s><span>Rp. 30 jt</span></s>
                                <span class="price-duration" style="color: #8997b5">/bulan</span>
                            </h2>
                            <h2 class="price-value d-flex align-items-center text-white">
                                <span>Rp. 15 jt</span>
                                <span class="price-duration" style="color: #8997b5">/bulan</span>
                            </h2>
                            {{-- <p class="price-caption" style="color: #7987a6">
                                Suitable to make your<br />
                                company grow rapidly
                            </p> --}}
                            <div class="price-list">
                                <p class="d-flex align-items-center check text-white">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="{{ asset('img/check.png') }}" alt="" />
                                    </span>Planning Campaign
                                </p>
                                <p class="d-flex align-items-center check text-white">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="{{ asset('img/check.png') }}" alt="" />
                                    </span>Periode iklan 1 bulan
                                </p>
                                <p class="d-flex align-items-center check text-white">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="{{ asset('img/check.png') }}" alt="" />
                                    </span>Pembuatan landing page penjualan
                                </p>
                                <p class="d-flex align-items-center check text-white">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="{{ asset('img/check.png') }}" alt="" />
                                    </span>FREE Update & Support
                                </p>
                                <p class="d-flex align-items-center check text-white">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="{{ asset('img/check.png') }}" alt="" />
                                    </span>Unlimited Produk
                                </p>
                                <p class="d-flex align-items-center check text-white">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="{{ asset('img/check.png') }}" alt="" />
                                    </span>25.000 Kuota Order/Bulan
                                </p>
                                <p class="d-flex align-items-center check text-white">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="{{ asset('img/check.png') }}" alt="" />
                                    </span>Checkout Page
                                </p>
                                <p class="d-flex align-items-center check text-white">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="{{ asset('img/check.png') }}" alt="" />
                                    </span>Bisa COD Menggunakan SiCepat,j&T,JNE & SAP
                                </p>
                                <p class="d-flex align-items-center check text-white">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="{{ asset('img/check.png') }}" alt="" />
                                    </span>Iklan facebook & instagram conversion focus
                                </p>
                                <p class="d-flex align-items-center check text-white">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="{{ asset('img/check.png') }}" alt="" />
                                    </span><strong> Iklan google conversion focus</strong>
                                </p>
                                <p class="d-flex align-items-center check text-white">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="{{ asset('img/check.png') }}" alt="" />
                                    </span><strong>Free 5 konten video untuk iklan</strong>
                                </p>
                                <p class="d-flex align-items-center check text-white">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="{{ asset('img/check.png') }}" alt="" />
                                    </span><strong>Free 2 KOL/Influencer live shopping</strong>
                                </p>
                                <p class="d-flex align-items-center check text-white">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="{{ asset('img/check.png') }}" alt="" />
                                    </span><strong>Free 10 KOL/Influencer Nano</strong>
                                </p>
                                <p class="d-flex align-items-center check text-white">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="{{ asset('img/check.png') }}" alt="" />
                                    </span><strong>Free 1 KOL/Influencer Micro</strong>
                                </p>
                                <p class="d-flex align-items-center check text-white">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="{{ asset('img/check.png') }}" alt="" />
                                    </span><strong>Optimasi Shopee & Tokopedia</strong>
                                </p>
                                <p class="d-flex align-items-center check text-white">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="{{ asset('img/check.png') }}" alt="" />
                                    </span>Report & analisa Hasil Iklan
                                </p>
                                <p class="d-flex align-items-center check text-white">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="{{ asset('img/check.png') }}" alt="" />
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
    </section>

    {{-- seminar --}}
    <section class="h-100 w-100" style="box-sizing: border-box;">
        <div class="header-3-3 container-xxl mx-auto p-0 position-relative" style="font-family: 'Poppins', sans-serif">
            <div>
                <div class="mx-auto d-flex flex-lg-row flex-column hero mb-5">
                    <!-- Left Column -->
                    <div
                        class="left-column flex-lg-grow-1 d-flex flex-column align-items-lg-center text-lg-center align-items-center text-center mb-5">
                        <h1 class="title-text-big">
                            Ada Gak Sih<br class="d-lg-block d-none" />
                            <span style="color: #4e91f9">Pelatihan</span> Yang<br class="d-lg-block d-none" />
                            Bikin Usaha
                            <span style="color: #ff7c57">Laris</span>
                        </h1>
                        <p class="text-caption">
                            Mau bikin usahamu makin laris di era digital saat ini ?<br class="d-sm-block d-none" />Tenang
                            saja, kami disini bakal bantu kamu
                        </p>
                        <div
                            class="d-flex flex-sm-row flex-column align-items-center mx-auto mx-lg-0 justify-content-center gap-3">
                            <button class="btn btn-get text-white d-inline-flex">
                                Daftar Pelatihan
                            </button>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="right-column d-flex justify-content-center align-middle text-center pe-0">
                        <img class="d-lg-block d-none" src="{{ asset('img/seminar.jpg') }}" alt="" />

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
