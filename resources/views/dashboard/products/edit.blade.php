<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Produk') }}
        </h2>
    </x-slot>
    <main class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="card shadow-sm mb-5">
                    <div class="card-header">
                        <h1 class="h3 mb-0">Formulir Edit Produk Baru</h1>
                    </div>
                    <div class="card-body">
                        <form action="#" method="POST" enctype="multipart/form-data">
                            
                            <div class="mb-3">
                                <label for="productName" class="form-label">Nama Produk</label>
                                <input type="text" class="form-control rounded-2" id="productName" name="name" placeholder="Contoh: L4gon Blue" required>
                            </div>

                            <div class="mb-3">
                                <label for="productCategory" class="form-label">Kategori Produk</label>
                                <select class="form-select rounded-2" id="productCategory" name="category_id" required>
                                    <option selected disabled value="">Pilih Kategori...</option>
                                    <option value="1">Parfum Pria</option>
                                    <option value="2">Parfum Wanita</option>
                                    <option value="3">Parfum Unisex</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="productDescription" class="form-label">Deskripsi Produk</label>
                                <textarea class="form-control rounded-2" id="productDescription" name="description" rows="4" placeholder="Jelaskan keunggulan dan aroma produk..."></textarea>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="productStock" class="form-label">Stok</label>
                                    <input type="number" class="form-control rounded-2" id="productStock" name="stock" value="0" min="0" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="productPrice" class="form-label">Harga</label>
                                    <div class="input-group">
                                        <span class="input-group-text">Rp</span>
                                        <input type="number" class="form-control rounded-2" id="productPrice" name="price" placeholder="150000" min="0" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="productImage" class="form-label">Gambar Produk</label>
                                <input class="form-control border-2 rounded-2" type="file" id="productImage" name="image">
                            </div>

                            <div class="d-flex justify-content-end mt-4">
                                <a href="{{route('products')}}" class="btn btn-secondary me-2">Kembali</a>
                                <button type="submit" class="btn btn-primary">Simpan Produk</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </main>
</x-app-layout>