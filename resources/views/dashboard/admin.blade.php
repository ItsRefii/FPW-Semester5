<x-app-layout>

    <x-slot name="header">

        <div class="flex items-center justify-between">

            <div>
                <h2 class="font-bold text-2xl text-gray-800">
                    Dashboard Admin
                </h2>

                <p class="text-sm text-gray-500 mt-1">
                    Ringkasan aktivitas POS Barokah Mart
                </p>
            </div>

            <span class="px-3 py-1 bg-indigo-100 text-indigo-700
                         rounded-full text-sm font-medium">
                Admin
            </span>

        </div>

    </x-slot>


    <div class="py-8">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">


            <!-- WELCOME -->
            <div class="bg-gradient-to-r from-indigo-600 to-indigo-800
                        rounded-2xl p-6 mb-8 text-white">

                <h3 class="text-2xl font-bold">
                    Selamat datang, {{ auth()->user()->name }}!
                </h3>

                <p class="mt-2 text-indigo-100">
                    Kelola seluruh aktivitas toko melalui dashboard admin.
                </p>

            </div>


            <!-- STATISTIK -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">


                <!-- PRODUK -->
                <x-card>

                    <div class="flex items-center justify-between">

                        <div>

                            <p class="text-sm text-gray-500">
                                Total Produk
                            </p>

                            <p class="text-3xl font-bold text-gray-800 mt-2">
                                0
                            </p>

                            <p class="text-xs text-gray-400 mt-2">
                                Produk terdaftar
                            </p>

                        </div>

                        <div class="w-12 h-12 rounded-xl bg-blue-100
                                    flex items-center justify-center">

                            <span class="text-blue-600 font-bold">
                                PR
                            </span>

                        </div>

                    </div>

                </x-card>


                <!-- KATEGORI -->
                <x-card>

                    <div class="flex items-center justify-between">

                        <div>

                            <p class="text-sm text-gray-500">
                                Total Kategori
                            </p>

                            <p class="text-3xl font-bold text-gray-800 mt-2">
                                0
                            </p>

                            <p class="text-xs text-gray-400 mt-2">
                                Kategori produk
                            </p>

                        </div>

                        <div class="w-12 h-12 rounded-xl bg-green-100
                                    flex items-center justify-center">

                            <span class="text-green-600 font-bold">
                                KT
                            </span>

                        </div>

                    </div>

                </x-card>


                <!-- KASIR -->
                <x-card>

                    <div class="flex items-center justify-between">

                        <div>

                            <p class="text-sm text-gray-500">
                                Total Kasir
                            </p>

                            <p class="text-3xl font-bold text-gray-800 mt-2">
                                0
                            </p>

                            <p class="text-xs text-gray-400 mt-2">
                                Pengguna kasir
                            </p>

                        </div>

                        <div class="w-12 h-12 rounded-xl bg-purple-100
                                    flex items-center justify-center">

                            <span class="text-purple-600 font-bold">
                                KS
                            </span>

                        </div>

                    </div>

                </x-card>


                <!-- TRANSAKSI -->
                <x-card>

                    <div class="flex items-center justify-between">

                        <div>

                            <p class="text-sm text-gray-500">
                                Transaksi Hari Ini
                            </p>

                            <p class="text-3xl font-bold text-gray-800 mt-2">
                                0
                            </p>

                            <p class="text-xs text-gray-400 mt-2">
                                Transaksi hari ini
                            </p>

                        </div>

                        <div class="w-12 h-12 rounded-xl bg-orange-100
                                    flex items-center justify-center">

                            <span class="text-orange-600 font-bold">
                                TR
                            </span>

                        </div>

                    </div>

                </x-card>

            </div>


            <!-- MENU ADMIN -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">


                <x-card>

                    <h3 class="text-lg font-bold text-gray-800">
                        Manajemen Toko
                    </h3>

                    <p class="text-sm text-gray-500 mt-1 mb-5">
                        Kelola data utama toko.
                    </p>


                    <div class="space-y-3">

                        <a href="{{ route('categories.index') }}"
                           class="flex items-center justify-between p-4
                                  rounded-lg bg-gray-50 hover:bg-indigo-50
                                  transition">

                            <div>

                                <p class="font-semibold text-gray-800">
                                    Kategori
                                </p>

                                <p class="text-sm text-gray-500">
                                    Kelola kategori produk
                                </p>

                            </div>

                            <span class="text-indigo-600">
                                →
                            </span>

                        </a>


                        <a href="{{ route('products.index') }}"
                           class="flex items-center justify-between p-4
                                  rounded-lg bg-gray-50 hover:bg-indigo-50
                                  transition">

                            <div>

                                <p class="font-semibold text-gray-800">
                                    Produk
                                </p>

                                <p class="text-sm text-gray-500">
                                    Kelola produk dan stok
                                </p>

                            </div>

                            <span class="text-indigo-600">
                                →
                            </span>

                        </a>


                        <a href="{{ route('users.index') }}"
                           class="flex items-center justify-between p-4
                                  rounded-lg bg-gray-50 hover:bg-indigo-50
                                  transition">

                            <div>

                                <p class="font-semibold text-gray-800">
                                    Manajemen Kasir
                                </p>

                                <p class="text-sm text-gray-500">
                                    Kelola akun pengguna dan kasir
                                </p>

                            </div>

                            <span class="text-indigo-600">
                                →
                            </span>

                        </a>

                    </div>

                </x-card>


                <x-card>

                    <h3 class="text-lg font-bold text-gray-800">
                        Laporan & Transaksi
                    </h3>

                    <p class="text-sm text-gray-500 mt-1 mb-5">
                        Pantau aktivitas penjualan toko.
                    </p>


                    <div class="space-y-3">

                        <a href="{{ route('pos.index') }}"
                           class="flex items-center justify-between p-4
                                  rounded-lg bg-gray-50 hover:bg-indigo-50
                                  transition">

                            <div>

                                <p class="font-semibold text-gray-800">
                                    Transaksi
                                </p>

                                <p class="text-sm text-gray-500">
                                    Buka halaman transaksi POS
                                </p>

                            </div>

                            <span class="text-indigo-600">
                                →
                            </span>

                        </a>


                        <div class="flex items-center justify-between p-4
                                    rounded-lg bg-gray-50">

                            <div>

                                <p class="font-semibold text-gray-800">
                                    Laporan Penjualan
                                </p>

                                <p class="text-sm text-gray-500">
                                    Rekap transaksi dan penjualan
                                </p>

                            </div>

                            <span class="text-gray-400">
                                Segera
                            </span>

                        </div>

                    </div>

                </x-card>

            </div>

        </div>

    </div>

</x-app-layout>