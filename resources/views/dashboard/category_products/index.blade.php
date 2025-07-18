<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Manajemen Kategori Produk') }}
        </h2>
    </x-slot>
    <main class="container my-5">
                    @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
        <div class="d-flex justify-content-between align-items-center mb-4">
            {{-- <h1 class="h2">Manajemen Kategori Produk</h1> --}}
            <a href="{{ route('product-category.create') }}" type="button" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Tambah Kategori
            </a>
        </div>

        <div class="card">
            <div class="card-body">
                <table class="table table-striped table-hover table-bordered">
                    <thead class="table-dark text-center">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama Kategori</th>
                            <th scope="col">Jumlah Produk</th>
                            <th scope="col" class="text-center">Aksi</th>
                        </tr>
                        
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td class="text-center">{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td class="text-center">{{ $category->product_count }}</td>
                            <td class="text-center">
                                <a href="{{ route('category-products-edit') }}" class="btn btn-warning btn-sm" title="Edit">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>
                                <button type="button" class="btn btn-danger btn-sm" title="Hapus">
                                    <i class="bi bi-trash-fill"></i> Hapus
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</x-app-layout>
