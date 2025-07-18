<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Kategori Produk') }}
        </h2>
    </x-slot>
<main class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow-sm">
                    <div class="card-header">
                        <h1 class="h3 mb-0">Formulir Edit Kategori</h1>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="categoryName" class="form-label">Nama Kategori</label>
                                <input type="text" class="form-control rounded-2" id="categoryName" placeholder="Contoh: Parfum Unisex" required>
                                <div class="form-text">Pilih untuk edit nama kategori.</div>
                            </div>
                            
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('category-products') }}" class="btn btn-secondary me-2">Kembali</a>
                                <button type="submit" class="btn btn-primary">Simpan Kategori</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </main>
</x-app-layout>