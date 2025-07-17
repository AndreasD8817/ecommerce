@extends ('layout')
@section ('title', 'Shopping Cart')
@section ('content')

    <main class="container my-5">
        <h1 class="mb-4">Keranjang Belanja Anda</h1>
        
        <div class="row">
            <div class="col-md-8">
                
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            
                            <div class="d-flex align-items-center">
                                <img src="https://placehold.co/600x600/555/FFF?text=Produk+1" alt="Produk 1" class="cart-item-img rounded me-3">
                                <div>
                                    <h5 class="mb-0">Nama Produk Keren</h5>
                                    <p class="mb-0 text-muted">Harga: Rp 250.000</p>
                                    
                                    <div class="input-group input-group-sm quantity-input mt-2">
                                        <button class="btn btn-outline-secondary" type="button">-</button>
                                        <input type="text" class="form-control text-center" value="1" placeholder="1">
                                        <button class="btn btn-outline-secondary" type="button">+</button>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex align-items-center">
                                <h6 class="mb-0 me-3">Rp 250.000</h6>
                                <button class="btn btn-outline-danger btn-sm">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            
                            <div class="d-flex align-items-center">
                                <img src="https://placehold.co/600x600/555/FFF?text=Produk+2" alt="Produk 2" class="cart-item-img rounded me-3">
                                <div>
                                    <h5 class="mb-0">Nama Produk Keren</h5>
                                    <p class="mb-0 text-muted">Harga: Rp 250.000</p>
                                    
                                    <div class="input-group input-group-sm quantity-input mt-2">
                                        <button class="btn btn-outline-secondary" type="button">-</button>
                                        <input type="text" class="form-control text-center" value="1" placeholder="1">
                                        <button class="btn btn-outline-secondary" type="button">+</button>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex align-items-center">
                                <h6 class="mb-0 me-3">Rp 250.000</h6>
                                <button class="btn btn-outline-danger btn-sm">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
                
                <a href="index.html#produk-unggulan" class="btn btn-outline-primary"><i class="bi bi-arrow-left"></i> Lanjut Belanja</a>

            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Ringkasan Pesanan</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Subtotal</span>
                                <strong>Rp 648.000</strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Ongkos Kirim</span>
                                <strong>Rp 15.000</strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Diskon</span>
                                <span class="text-success">- Rp 0</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between bg-light">
                                <strong class="fs-5">Total</strong>
                                <strong class="fs-5">Rp 663.000</strong>
                            </li>
                        </ul>
                        <div class="d-grid mt-3">
                           <a href="#" class="btn btn-primary btn-lg">Lanjut ke Pembayaran <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection