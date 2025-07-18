<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card bg-primary-subtle">
                                    <div class="card-header">
                                        Jumlah Produk
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold fs-2">100</h5>
                                        <p class="card-text">Total Produk Yang Tersedia</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card bg-success-subtle">
                                    <div class="card-header">
                                        Jumlah Klik Produk
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold fs-2">2,000</h5>
                                        <p class="card-text">Jumlah Klik Produk</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card bg-warning-subtle">
                                    <div class="card-header">
                                        Jumlah Kategori Produk
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold fs-2">10</h5>
                                        <p class="card-text">Jumlah Kategori Produk</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
