<x-app-layout>

    <x-slot name="header">

        <div class="flex items-center justify-between">

            <div>

                <h2 class="font-bold text-2xl text-gray-800">
                    Dashboard Kasir
                </h2>

                <p class="text-sm text-gray-500 mt-1">
                    Kelola transaksi penjualan toko
                </p>

            </div>

            <span class="px-3 py-1 bg-green-100 text-green-700
                         rounded-full text-sm font-medium">
                Kasir
            </span>

        </div>

    </x-slot>


    <div class="py-8">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">


            <!-- WELCOME -->
            <div class="bg-gradient-to-r from-green-600 to-emerald-700
                        rounded-2xl p-6 mb-8 text-white">

                <h3 class="text-2xl font-bold">
                    Halo, {{ auth()->user()->name }}!
                </h3>

                <p class="mt-2 text-green-100">
                    Selamat bekerja. Silakan kelola transaksi pelanggan
                    melalui sistem POS.
                </p>

            </div>


            <!-- STATISTIK -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">


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
                                Transaksi yang dilakukan hari ini
                            </p>

                        </div>

                        <div class="w-14 h-14 rounded-xl bg-green-100
                                    flex items-center justify-center">

                            <span class="text-green-600 font-bold">
                                TR
                            </span>

                        </div>

                    </div>

                </x-card>


                <x-card>

                    <div class="flex items-center justify-between">

                        <div>

                            <p class="text-sm text-gray-500">
                                Penjualan Hari Ini
                            </p>

                            <p class="text-3xl font-bold text-gray-800 mt-2">
                                Rp0
                            </p>

                            <p class="text-xs text-gray-400 mt-2">
                                Total penjualan hari ini
                            </p>

                        </div>

                        <div class="w-14 h-14 rounded-xl bg-blue-100
                                    flex items-center justify-center">

                            <span class="text-blue-600 font-bold">
                                RP
                            </span>

                        </div>

                    </div>

                </x-card>

            </div>


            <!-- TRANSAKSI -->
            <x-card>

                <div class="flex flex-col md:flex-row
                            md:items-center md:justify-between gap-4">

                    <div>

                        <h3 class="text-xl font-bold text-gray-800">
                            Mulai Transaksi
                        </h3>

                        <p class="text-gray-500 mt-1">
                            Lakukan transaksi penjualan melalui halaman POS.
                        </p>

                    </div>

                    <a href="{{ route('pos.index') }}"
                       class="inline-flex items-center justify-center
                              px-6 py-3 bg-green-600 hover:bg-green-700
                              text-white font-semibold rounded-lg
                              transition">

                        Transaksi Baru

                        <span class="ml-2">
                            →
                        </span>

                    </a>

                </div>

            </x-card>


            <!-- INFORMASI -->
            <div class="mt-6">

                <x-card>

                    <h3 class="text-lg font-bold text-gray-800 mb-4">
                        Informasi Akun
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                        <div class="bg-gray-50 rounded-lg p-4">

                            <p class="text-sm text-gray-500">
                                Nama
                            </p>

                            <p class="font-semibold text-gray-800 mt-1">
                                {{ auth()->user()->name }}
                            </p>

                        </div>

                        <div class="bg-gray-50 rounded-lg p-4">

                            <p class="text-sm text-gray-500">
                                Email
                            </p>

                            <p class="font-semibold text-gray-800 mt-1">
                                {{ auth()->user()->email }}
                            </p>

                        </div>

                    </div>

                </x-card>

            </div>

        </div>

    </div>

</x-app-layout>