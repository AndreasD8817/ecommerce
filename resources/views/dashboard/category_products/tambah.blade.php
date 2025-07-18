<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Kategori Produk') }}
        </h2>
    </x-slot>
    <main class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                
                <div class="card shadow-sm">
                    
                    <div class="card-header">
                        <h1 class="h3 mb-0">Formulir Tambah Kategori</h1>
                    </div>
                    
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show m-3" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="card-body">
                        <form action="{{ route('product-category.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Kategori</label>
                                <input type="text" class="form-control rounded-2" id="name" name="name" value="{{ old('name') }}" required>
                                <div class="form-text">Masukkan nama yang unik untuk kategori baru.</div>
                            </div>
                            
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('product-category.index') }}" class="btn btn-secondary me-2">Kembali</a>
                                <button type="submit" class="btn btn-primary">Simpan Kategori</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h1 class="modal-title fs-5" id="errorModalLabel">
                        <i class="bi bi-exclamation-triangle-fill"></i> Terjadi Kesalahan
                    </h1>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    @if ($errors->any())
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var errorModal = new bootstrap.Modal(document.getElementById('errorModal'));
            errorModal.show();
        });
    </script>
    @endif
</x-app-layout>