<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Manajemen Kategori Produk') }}
        </h2>
    </x-slot>
    <main class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            {{-- <h1 class="h2">Manajemen Kategori Produk</h1> --}}
            <a href="{{ route('category-products-tambah') }}" type="button" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Tambah Kategori
            </a>
        </div>

        <div class="card">
            <div class="card-body">
                <table class="table table-striped table-hover table-bordered">
                    <thead class="table-dark text-center">
                        <tr>
                            <th scope="col">#ID</th>
                            <th scope="col">Nama Kategori</th>
                            <th scope="col">Jumlah Produk</th>
                            <th scope="col" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>Parfum Pria</td>
                            <td class="text-center">15</td>
                            <td class="text-center">
                                <a href="{{ route('category-products-edit') }}" class="btn btn-warning btn-sm" title="Edit">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>
                                <button type="button" class="btn btn-danger btn-sm" title="Hapus">
                                    <i class="bi bi-trash-fill"></i> Hapus
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</x-app-layout>
