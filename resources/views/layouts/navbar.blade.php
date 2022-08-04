<section id="navbar" class="position-absolute">
    <div class="container">
        <div class="nav-menu d-flex align-items-center justify-content-center">
            <img src="{{ asset('asset/logo.png') }}" width="40" class="logo-nav">
            <h1 class="tag-logo">FOSTIFEST<br><span>Dashboard</span></h1>
        </div>
        <div class="nav-menu d-flex flex-column align-items-center justify-content-center">
            <a href="{{ route('pesertaWebinar')}}"
                class="text-decoration-none w-100 my-1 {{ Route::is('pesertaWebinar') ? 'nav-active' : '' }}">
                <div class="nav-item text-white text-start">
                    <p>Daftar Peserta Webinar</p>
                </div>
            </a>
            <a href="{{ route('pesertaLomba')}}"
                class="text-decoration-none w-100 my-1 {{ Route::is('pesertaLomba') ? 'nav-active' : '' }}">
                <div class="nav-item text-white text-start">
                    <p>Daftar Peserta Lomba</p>
                </div>
            </a>
        </div>
        <div class="nav-menu d-flex flex-column align-items-center justify-content-center">
            <a href="{{ route('notVerified')}}"
                class="text-decoration-none w-100 my-1 {{ Route::is('notVerified') ? 'nav-active' : '' }}">
                <div class="nav-item text-white text-start">
                    <p>Peserta Lomba <span class="btn btn-primary">Menunggu ({{ $notVerif }})</span></p>
                </div>
            </a>
            <a href="{{ route('verified')}}"
                class="text-decoration-none w-100 my-1 {{ Route::is('verified') ? 'nav-active' : '' }}">
                <div class="nav-item text-white text-start">
                    <p>Peserta Lomba <span class="btn btn-success">Terverifikasi ({{ $verif }})</span></p>
                </div>
            </a>
        </div>
        <a href="{{ route('logout') }}" class="text-decoration-none w-100 my-1 position-absolute button-logout ms-2">
            <div class="nav-item text-white text-start fw-bold">
                <p><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.8999 7.55999C9.2099 3.95999 11.0599 2.48999 15.1099 2.48999H15.2399C19.7099 2.48999 21.4999 4.27999 21.4999 8.74999V15.27C21.4999 19.74 19.7099 21.53 15.2399 21.53H15.1099C11.0899 21.53 9.2399 20.08 8.9099 16.54"
                            stroke="url(#paint0_linear_198_20683)" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M2 12H14.88" stroke="url(#paint1_linear_198_20683)" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12.6499 8.6499L15.9999 11.9999L12.6499 15.3499" stroke="url(#paint2_linear_198_20683)"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <defs>
                            <linearGradient id="paint0_linear_198_20683" x1="6.8209" y1="-14.9634" x2="24.4233"
                                y2="-13.5193" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#369A90" />
                                <stop offset="0.0001" stop-color="#369A90" />
                                <stop offset="1" stop-color="#005571" />
                            </linearGradient>
                            <linearGradient id="paint1_linear_198_20683" x1="-0.125199" y1="11.0833" x2="4.97854"
                                y2="19.2322" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#369A90" />
                                <stop offset="0.0001" stop-color="#369A90" />
                                <stop offset="1" stop-color="#005571" />
                            </linearGradient>
                            <linearGradient id="paint2_linear_198_20683" x1="12.0972" y1="2.50823" x2="16.7906"
                                y2="2.79914" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#369A90" />
                                <stop offset="0.0001" stop-color="#369A90" />
                                <stop offset="1" stop-color="#005571" />
                            </linearGradient>
                        </defs>
                    </svg> Logout</p>
            </div>
        </a>
    </div>
</section>