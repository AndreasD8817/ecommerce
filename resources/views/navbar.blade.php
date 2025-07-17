<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="bi bi-shop"></i> TokoSaya
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kategori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                </ul>
                <div class="d-flex">
                    {{-- <a href="#" class="btn btn-outline-light me-2">
                        <i class="bi bi-person-circle"></i> Login
                    </a> --}}
                    @if (Route::has('login'))
                        <nav class="flex items-center justify-end gap-4">
                            @auth

                                <a href="{{ url('/dashboard') }}" class="btn btn-outline-light me-2">
                                    <i class="bi bi-person-circle"></i> Dashboard
                                </a>
                                {{-- <a
                                    href="{{ url('/dashboard') }}"
                                    class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                                >
                                    Dashboard
                                </a> --}}
                            @else
                                <a href="{{ route('login') }}" class="btn btn-outline-light me-2">
                                    <i class="bi bi-person-circle"></i> Login
                                </a>

                                {{-- <a
                                    href="{{ route('login') }}"
                                    class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                                >
                                    Log in
                                </a> --}}

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-outline-success me-2">
                                        <i class="bi bi-r-square-fill"></i> egister
                                    </a>

                                    {{-- <a
                                        href="{{ route('register') }}"
                                        class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                        Register
                                    </a> --}}
                                @endif
                            @endauth
                        </nav>
                    @endif
                    <a href="#" class="btn btn-light">
                        <i class="bi bi-cart3"></i> Keranjang <span class="badge bg-danger">3</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>