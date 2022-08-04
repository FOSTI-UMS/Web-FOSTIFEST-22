<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOSTIFEST 2.0</title>
    <!-- Icon Title -->
    <link rel="icon" href="{{ asset('asset/logo.png') }}" type="image/x-icon">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Play:wght@400;700&display=swap"
        rel="stylesheet">
</head>

<body>
    {{-- <section id="info" class="bg-secondary text-center py-1">
        <p class="info-title m-0">Sekarang batch ke-1 Pembayaran Webinar Rp.50.000,00,- Lomba Rp. 60.000,00,-</p>
    </section> --}}
    <section id="navbar" class="sticky-top">
        <div class="container py-3 d-flex justify-content-between align-items-center position-relative">
            <div class="nav-logo d-flex justify-content-between">
                <img src="asset/logo-nav.png" alt="">
                <div class="hamburger d-lg-none d-inline" id="hamburger-1">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>
            </div>
            <div id="nav-menu" class="nav-menu d-none d-lg-flex flex-row justify-content-between align-items-center">
                <a href="https://fostiums.org/" class="menu-nav text-decoration-none text-black">
                    <svg class="pr-1" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                            stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M8.00156 3H9.00156C7.05156 8.84 7.05156 15.16 9.00156 21H8.00156" stroke="#292D32"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M15 3C16.95 8.84 16.95 15.16 15 21" stroke="#292D32" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M3 16V15C8.84 16.95 15.16 16.95 21 15V16" stroke="#292D32" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M3 8.99998C8.84 7.04998 15.16 7.04998 21 8.99998" stroke="#292D32" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    FOSTI UMS
                </a>
                <a href="{{ route('downloadRules') }}" class="menu-nav text-decoration-none text-black">
                    <svg class="pr-1" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M21.6601 10.44L20.6801 14.62C19.8401 18.23 18.1801 19.69 15.0601 19.39C14.5601 19.35 14.0201 19.26 13.4401 19.12L11.7601 18.72C7.59006 17.73 6.30006 15.67 7.28006 11.49L8.26006 7.30001C8.46006 6.45001 8.70006 5.71001 9.00006 5.10001C10.1701 2.68001 12.1601 2.03001 15.5001 2.82001L17.1701 3.21001C21.3601 4.19001 22.6401 6.26001 21.6601 10.44Z"
                            stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M15.0584 19.3896C14.4384 19.8096 13.6584 20.1596 12.7084 20.4696L11.1284 20.9896C7.15839 22.2696 5.06839 21.1996 3.77839 17.2296L2.49839 13.2796C1.21839 9.30961 2.27839 7.20961 6.24839 5.92961L7.82839 5.40961C8.23839 5.27961 8.62839 5.16961 8.99839 5.09961C8.69839 5.70961 8.45839 6.44961 8.25839 7.29961L7.27839 11.4896C6.29839 15.6696 7.58839 17.7296 11.7584 18.7196L13.4384 19.1196C14.0184 19.2596 14.5584 19.3496 15.0584 19.3896Z"
                            stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12.64 8.53003L17.49 9.76003" stroke="#292D32" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M11.66 12.4L14.56 13.14" stroke="#292D32" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    GUIDE BOOK
                </a>
                <a href="#scroll" class="menu-nav text-decoration-none text-black">
                    <svg class="pr-1" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.89844 7.56023C9.20844 3.96023 11.0584 2.49023 15.1084 2.49023H15.2384C19.7084 2.49023 21.4984 4.28023 21.4984 8.75023V15.2702C21.4984 19.7402 19.7084 21.5302 15.2384 21.5302H15.1084C11.0884 21.5302 9.23844 20.0802 8.90844 16.5402"
                            stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M2 12H14.88" stroke="#292D32" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M12.6484 8.65039L15.9984 12.0004L12.6484 15.3504" stroke="#292D32" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    REGISTRATION
                </a>
            </div>
        </div>
        <div id="nav-menu-out"
            class="nav-menu d-flex d-lg-none flex-column justify-content-between align-items-center hide">
            <a href="https://fostiums.org/" class="menu-nav text-decoration-none text-black">
                <svg class="pr-1" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                        stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M8.00156 3H9.00156C7.05156 8.84 7.05156 15.16 9.00156 21H8.00156" stroke="#292D32"
                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M15 3C16.95 8.84 16.95 15.16 15 21" stroke="#292D32" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M3 16V15C8.84 16.95 15.16 16.95 21 15V16" stroke="#292D32" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M3 8.99998C8.84 7.04998 15.16 7.04998 21 8.99998" stroke="#292D32" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                FOSTI UMS
            </a>
            <a href="{{ route('downloadRules') }}" class="menu-nav text-decoration-none text-black">
                <svg class="pr-1" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M21.6601 10.44L20.6801 14.62C19.8401 18.23 18.1801 19.69 15.0601 19.39C14.5601 19.35 14.0201 19.26 13.4401 19.12L11.7601 18.72C7.59006 17.73 6.30006 15.67 7.28006 11.49L8.26006 7.30001C8.46006 6.45001 8.70006 5.71001 9.00006 5.10001C10.1701 2.68001 12.1601 2.03001 15.5001 2.82001L17.1701 3.21001C21.3601 4.19001 22.6401 6.26001 21.6601 10.44Z"
                        stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M15.0584 19.3896C14.4384 19.8096 13.6584 20.1596 12.7084 20.4696L11.1284 20.9896C7.15839 22.2696 5.06839 21.1996 3.77839 17.2296L2.49839 13.2796C1.21839 9.30961 2.27839 7.20961 6.24839 5.92961L7.82839 5.40961C8.23839 5.27961 8.62839 5.16961 8.99839 5.09961C8.69839 5.70961 8.45839 6.44961 8.25839 7.29961L7.27839 11.4896C6.29839 15.6696 7.58839 17.7296 11.7584 18.7196L13.4384 19.1196C14.0184 19.2596 14.5584 19.3496 15.0584 19.3896Z"
                        stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M12.64 8.53003L17.49 9.76003" stroke="#292D32" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M11.66 12.4L14.56 13.14" stroke="#292D32" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                GUIDE BOOK
            </a>
            <a href="#scroll" class="menu-nav text-decoration-none text-black">
                <svg class="pr-1" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M8.89844 7.56023C9.20844 3.96023 11.0584 2.49023 15.1084 2.49023H15.2384C19.7084 2.49023 21.4984 4.28023 21.4984 8.75023V15.2702C21.4984 19.7402 19.7084 21.5302 15.2384 21.5302H15.1084C11.0884 21.5302 9.23844 20.0802 8.90844 16.5402"
                        stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M2 12H14.88" stroke="#292D32" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M12.6484 8.65039L15.9984 12.0004L12.6484 15.3504" stroke="#292D32" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                REGISTRATION
            </a>
        </div>
    </section>
    <section id="banner" class="d-flex align-items-center">
        <div class="container d-flex flex-column-reverse flex-lg-row" data-aos="fade-up" data-aos-duration="1500">
            <div class="text-banner">
                <h1 class="banner-title">Cyber Security for Public Safety.</h1>
                <p class="banner-subtitle">Webinar nasional dan perlombaan Capture The Flag (CTF), sebuah praktik dalam
                    melindungi sistem, jaringan,
                    dan program dari serangan digital. Webinar kali ini menghadirkan Redho Maland sebagai Cyber Security
                    Consultant & Instructor.</p>
            </div>
            <div class="image-banner position-relative">
                <img src="asset/banner.png" class="banner-1 position-absolute d-lg-block d-none">
            </div>
        </div>
    </section>
    <div id="scroll" class="my-5 py-5"></div>
    <section id="main" class="mt-3 pb-3 position-relative border border-1 border-white">
        <div class="webinar" data-aos="fade-up" data-aos-duration="1000">
            <div
                class="container d-flex flex-column-reverse flex-lg-row position-relative align-items-center align-items-lg-start">
                <div class="text-webinar">
                    <p class="non-button px-2 py-1">Webinar</p>
                    <h1 class="main-title">Upgrade Your Digital Security</h1>
                    <p class="main-subtitle">Webinar nasional dengan tema “Upgrade Your Digital Security” (Tingkatkan
                        Keamanan Digital Anda). Menghadirkan <span class="fw-bold">Redho Maland</span> sebagai Cyber
                        Security Consultant & Instructor, akan membahas bagaimana meningkatkan keamanan digital.</p>
                    <p class="fw-bold">*Webinar Rp 20.000 (FREE untuk Mahasiswa Universitas Muhammadiyah Surakarta)</p>
                    <a href="{{ route('webinar') }}"
                        class="main-button btn px-2 py-1 text-decoration-none d-inline-block">Daftar Webinar</a>
                </div>
                <div class="image-webinar position-relative">
                    <img src="asset/webinar-1.png" class="webinar-image-1 position-absolute">
                    {{-- <div class="wrap-tag position-absolute">
                        <p class="name-tag px-2 py-1">Edo Maland</p>
                        <p class="name-tag px-2 py-1">IT Consultant</p>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="lomba" data-aos="fade-up" data-aos-duration="1000">
            <div
                class="container d-flex flex-column flex-lg-row position-relative align-items-center align-items-lg-start">
                <div class="image-lomba position-relative text-center text-md-start">
                    <img src="asset/lomba-1.png" class="lomba-image position-absolute">
                </div>
                <div class="text-lomba text-end">
                    <p class="non-button px-2 py-1">Capture The Flag</p>
                    <h1 class="main-title">Implement Cyber Security For a Safe Life</h1>
                    <p class="main-subtitle">Webinar nasional dengan tema “Increase Oportunities productivity with An
                        Efficient IoT Sollution” (Meningkatkan Peluang Prroduktivitas dengan Solusi IoT Yang Efisien).
                        Menghadirkan Bambang Pamungkas membahas solusi dari IoT untuk sebuah problematika yang ada di
                        dlingkungan masyarakat </p>
                    <p class="fw-bold">*Pendaftaran lomba batch 1 Rp 80.000 (FREE Webinar bagi pendaftar lomba)</p>
                    <a href="{{ route('competition') }}"
                        class="main-button btn px-2 py-1 text-decoration-none d-inline-block">Daftar Lomba</a>
                </div>
            </div>
        </div>
        <div class="timeline w-100 d-flex justify-content-center" style="margin-top:150px">
            <img src="asset/timeline.png" class="d-block" style="left: auto; right: auto;; max-width: 100%;">
        </div>
        <div class="wrap-sponsor position-relative" data-aos="fade-up" data-aos-duration="1000">
            <div class="container text-center d-flex flex-column align-items-center">
                <h1 class="media-title">Supported By</h1>
                <div class="media-logo d-flex flex-wrap justify-content-around w-75">
                    <!-- <a href="#" target="_blank">
                        <img src="asset/gojek.png" alt="">
                    </a>
                    <a href="#" target="_blank">
                        <img src="asset/grab.png" class="media-over" alt="">
                    </a>
                    <a href="#" target="_blank">
                        <img src="asset/google.png" alt="">
                    </a> -->
                    <h1>Open Sponsorship</h1>
                </div>
            </div>
        </div>
    </section>
    <section id="main-crop">
        <div class="wrap-media" data-aos="fade-up" data-aos-duration="1000">
            <div class="container text-center d-flex flex-column align-items-center">
                <h1 class="media-title">Media Patner</h1>
                <div class="media-logo d-flex flex-wrap justify-content-around align-items-center w-75">
                    <!-- <a href="#" target="_blank">
                        <img src="asset/sopolos.png" class="media-over" alt="">
                    </a>
                    <a href="#" target="_blank">
                        <img src="asset/rapma.png" alt="">
                    </a> -->
                    <h1>Open Media Patner</h1>
                </div>
            </div>
        </div>
    </section>
    <section id="sosmed" data-aos="fade-up" data-aos-duration="1000">
        <div class="container text-center d-flex flex-column align-items-center">
            <h1 class="sosmed-title">Frequently Asked Questions</h1>
            <p class="sosmed-subtitle">Jika ada pertanyaan mengenai lomba maupun webinar dapat menghubungi contact
                person di bawah ini</p>
            <div class="sosmed-image d-flex justify-content-around">
                <a href="https://www.instagram.com/fosti_ums/" target="_blank">
                    <img src="asset/instagram.png" alt="">
                </a>
                <a href="https://www.twitter.com" target="_blank" class="mx-3">
                    <img src="asset/twitter.png" alt="">
                </a>
                <a href="https://wa.me" target="_blank">
                    <img src="asset/whatsapp.png" alt="">
                </a>
            </div>
            <p class="sosmed-footer">&copy; FOSTI UMS</p>
        </div>
    </section>
    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- AOS INIT -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        $(document).ready(function(){
            $(".hamburger").click(function(){
                $(this).toggleClass("is-active");
                if($("#nav-menu-out").hasClass("hide")){
                    $("#nav-menu-out").removeClass("hide");
                    $("#nav-menu-out").addClass("show");
                } else {
                    $("#nav-menu-out").removeClass("show");
                    $("#nav-menu-out").addClass("hide");
                }
            });
        });

        $(document).on("scroll", function(){
            if(!$("#nav-menu-out").hasClass("hide")){
                $(".hamburger").removeClass("is-active");
                $("#nav-menu-out").removeClass("show");
                $("#nav-menu-out").addClass("hide");
            }
        })
        $(window).resize(function(){
            if(!$("#nav-menu-out").hasClass("hide")){
                $(".hamburger").removeClass("is-active");
                $("#nav-menu-out").removeClass("show");
                $("#nav-menu-out").addClass("hide");
            }
        })
        AOS.init({
            once: true
        });
    </script>
</body>

</html>