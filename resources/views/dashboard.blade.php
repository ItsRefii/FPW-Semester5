<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard - POS Barokah Mart</title>

    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 min-h-screen">

    <!-- Navbar -->
    <nav class="bg-indigo-600 text-white shadow-md">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

            <div>
                <h1 class="text-xl font-bold">
                    POS Barokah Mart
                </h1>
                <p class="text-sm text-indigo-200">
                    Sistem Point of Sale
                </p>
            </div>

            <div class="flex items-center gap-5">

                <div class="text-right">
                    <p class="font-semibold">
                        {{ Auth::user()->name }}
                    </p>

                    <p class="text-xs text-indigo-200 capitalize">
                        {{ Auth::user()->role }}
                    </p>
                </div>

                <!-- Logout -->
                <form action="{{ route('logout') }}" method="POST">
                    @csrf

                    <button
                        type="submit"
                        class="bg-white text-indigo-600 px-4 py-2 rounded-lg text-sm font-semibold hover:bg-gray-100 transition">
                        Logout
                    </button>
                </form>

            </div>

        </div>
    </nav>


    <!-- Content -->
    <main class="max-w-7xl mx-auto px-6 py-8">

        <!-- Welcome -->
        <div class="mb-8">
            <h2 class="text-3xl font-bold text-gray-800">
                Dashboard
            </h2>

            <p class="text-gray-500 mt-1">
                Selamat datang kembali, {{ Auth::user()->name }} 👋
            </p>
        </div>


        <!-- Statistik -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">

            <!-- Total Produk -->
            <div class="bg-white rounded-xl shadow-sm p-6">
                <div class="flex items-center justify-between">

                    <div>
                        <p class="text-sm text-gray-500">
                            Total Produk
                        </p>

                        <h3 class="text-3xl font-bold text-gray-800 mt-2">
                            120
                        </h3>
                    </div>

                    <div class="bg-indigo-100 p-3 rounded-lg">
                        📦
                    </div>

                </div>
            </div>


            <!-- Total Kategori -->
            <div class="bg-white rounded-xl shadow-sm p-6">
                <div class="flex items-center justify-between">

                    <div>
                        <p class="text-sm text-gray-500">
                            Total Kategori
                        </p>

                        <h3 class="text-3xl font-bold text-gray-800 mt-2">
                            12
                        </h3>
                    </div>

                    <div class="bg-green-100 p-3 rounded-lg">
                        🗂️
                    </div>

                </div>
            </div>


            <!-- Transaksi Hari Ini -->
            <div class="bg-white rounded-xl shadow-sm p-6">
                <div class="flex items-center justify-between">

                    <div>
                        <p class="text-sm text-gray-500">
                            Transaksi Hari Ini
                        </p>

                        <h3 class="text-3xl font-bold text-gray-800 mt-2">
                            35
                        </h3>
                    </div>

                    <div class="bg-yellow-100 p-3 rounded-lg">
                        🛒
                    </div>

                </div>
            </div>


            <!-- Pendapatan -->
            <div class="bg-white rounded-xl shadow-sm p-6">
                <div class="flex items-center justify-between">

                    <div>
                        <p class="text-sm text-gray-500">
                            Pendapatan Hari Ini
                        </p>

                        <h3 class="text-2xl font-bold text-gray-800 mt-2">
                            Rp 2.450.000
                        </h3>
                    </div>

                    <div class="bg-blue-100 p-3 rounded-lg">
                        💰
                    </div>

                </div>
            </div>

        </div>


        <!-- Menu Utama -->
        <div class="bg-white rounded-xl shadow-sm p-6">

            <h3 class="text-xl font-bold text-gray-800 mb-6">
                Menu Utama
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">

                <!-- POS -->
                <a href="/pos"
                   class="border rounded-xl p-6 hover:shadow-md hover:border-indigo-400 transition">

                    <div class="text-3xl mb-3">
                        🛒
                    </div>

                    <h4 class="text-lg font-semibold text-gray-800">
                        Kasir / POS
                    </h4>

                    <p class="text-sm text-gray-500 mt-1">
                        Melakukan transaksi penjualan.
                    </p>

                </a>


                <!-- Produk -->
                @if(Auth::user()->role === 'admin')

                <a href="/products"
                   class="border rounded-xl p-6 hover:shadow-md hover:border-indigo-400 transition">

                    <div class="text-3xl mb-3">
                        📦
                    </div>

                    <h4 class="text-lg font-semibold text-gray-800">
                        Data Produk
                    </h4>

                    <p class="text-sm text-gray-500 mt-1">
                        Mengelola data produk toko.
                    </p>

                </a>


                <!-- Kategori -->
                <a href="/categories"
                   class="border rounded-xl p-6 hover:shadow-md hover:border-indigo-400 transition">

                    <div class="text-3xl mb-3">
                        🗂️
                    </div>

                    <h4 class="text-lg font-semibold text-gray-800">
                        Data Kategori
                    </h4>

                    <p class="text-sm text-gray-500 mt-1">
                        Mengelola kategori produk.
                    </p>

                </a>


                <!-- Laporan -->
                <a href="/reports/sales"
                   class="border rounded-xl p-6 hover:shadow-md hover:border-indigo-400 transition">

                    <div class="text-3xl mb-3">
                        📊
                    </div>

                    <h4 class="text-lg font-semibold text-gray-800">
                        Laporan Penjualan
                    </h4>

                    <p class="text-sm text-gray-500 mt-1">
                        Melihat laporan transaksi penjualan.
                    </p>

                </a>

                @endif

            </div>

        </div>


        <!-- Informasi User -->
        <div class="mt-6 bg-white rounded-xl shadow-sm p-6">

            <h3 class="text-lg font-bold text-gray-800 mb-4">
                Informasi Akun
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                <div>
                    <p class="text-sm text-gray-500">
                        Nama
                    </p>

                    <p class="font-semibold text-gray-800">
                        {{ Auth::user()->name }}
                    </p>
                </div>

                <div>
                    <p class="text-sm text-gray-500">
                        Email
                    </p>

                    <p class="font-semibold text-gray-800">
                        {{ Auth::user()->email }}
                    </p>
                </div>

                <div>
                    <p class="text-sm text-gray-500">
                        Role
                    </p>

                    <span class="inline-block mt-1 px-3 py-1 bg-indigo-100 text-indigo-700 rounded-full text-sm font-semibold capitalize">
                        {{ Auth::user()->role }}
                    </span>
                </div>

            </div>

        </div>

    </main>

</body>
</html>