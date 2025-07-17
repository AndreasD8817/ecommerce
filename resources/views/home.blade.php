@extends ('layout')
@section ('title', 'Toko Online Parfum')
@section ('content')
    <header class="hero-section text-white text-center">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://placehold.co/1920x1080/445566/FFFFFF?text=Promo+Lebaran" class="d-block w-100" alt="Promo Lebaran">
                    
                    <div class="carousel-caption d-block">
                        <h1 class="display-4">Koleksi Terbaru 2025</h1>
                        <p class="lead">Temukan produk terbaik dengan penawaran spesial hanya untuk Anda.</p>
                        <a href="#produk-unggulan" class="btn btn-primary btn-lg">Belanja Sekarang</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="https://placehold.co/1920x1080/664455/FFFFFF?text=Diskon+Akhir+Tahun" class="d-block w-100" alt="Diskon Akhir Tahun">
                    
                    <div class="carousel-caption d-block">
                        <h1 class="display-4">Diskon Hingga 50%</h1>
                        <p class="lead">Jangan lewatkan kesempatan emas ini. Stok terbatas!</p>
                        <a href="#produk-unggulan" class="btn btn-primary btn-lg">Lihat Semua Diskon</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="https://placehold.co/1920x1080/556644/FFFFFF?text=Produk+Terlaris" class="d-block w-100" alt="Produk Terlaris">
                    <div class="carousel-caption d-block">
                        <h1 class="display-4">Produk Paling Dicari</h1>
                        <p class="lead">Lihat apa yang sedang tren dan dibeli oleh pelanggan lain.</p>
                        <a href="#produk-unggulan" class="btn btn-primary btn-lg">Jelajahi Sekarang</a>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>

    <main class="container" id="produk-unggulan">
        <h2 class="text-center mb-4">Produk Unggulan</h2>
        
        <div class="row">
            @foreach($products as $product)            
            <div class="col-md-4 mb-4 col-sm-6">
                <div class="card shadow-sm h-100">
                    <img src="{{$product->image}}" class="card-img-top" alt="Nama Produk 1">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <div class="mt-auto"> 
                            <h6 class="card-subtitle mb-2 text-danger">
                                Rp {{ number_format($product->price, 0, ',', '.') }}
                            </h6>
                            
                            <a href="#" class="btn btn-primary w-100">
                                <i class="bi bi-cart-plus"></i> Tambah ke Keranjang
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div> 
        <div class="col-12">
            {{ $products->links() }}
        </div>
    </main>
@endsection
