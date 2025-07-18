<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Manajemen Produk') }}
        </h2>
    </x-slot>
    <main class="container my-3">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <a href="{{route('products-tambah')}}" type="button" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Tambah Produk
            </a>
        </div>

        <div class="card ">
            <div class="card-body">
                <table class="table table-striped table-hover table-bordered mb-2">
                    <thead class="table-dark text-center">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Gambar Produk</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col" style="width: 30%">Deskripsi Produk</th>
                            <th scope="col">Stok Produk</th>
                            <th scope="col">Harga Produk</th>
                            <th scope="col" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr class="align-middle">
                            <td class="text-center">{{ $product->id }}</td>
                            <td class="flex justify-center items-center"><img src="{{ $product->image }}" alt="Produk 1" class="w-16 h-16 rounded-lg"></td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}.</td>
                            <td class="text-center">{{ $product->stock }}</td>
                            <td class="text-center">Rp {{number_format($product->price, 0, ',', '.')}}</td>
                            <td class="text-center">
                                <a href="{{ route('products-edit') }}" class="btn btn-warning btn-sm" title="Edit">
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
                {{ $products->links() }}
            </div>
        </div>
    </main>
</x-app-layout>
