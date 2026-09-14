<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - POS Barokah Mart</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-slate-100">

    <div class="min-h-screen flex">

        <!-- BAGIAN KIRI -->
        <div class="hidden lg:flex lg:w-1/2 bg-indigo-700 relative overflow-hidden">

            <div class="absolute inset-0 bg-gradient-to-br from-indigo-700 to-indigo-900"></div>

            <div class="relative z-10 flex flex-col justify-center px-16 text-white">

                <div class="mb-8">

                    <div class="w-16 h-16 bg-white/10 rounded-2xl flex items-center justify-center mb-6">
                        <span class="text-3xl font-bold">BM</span>
                    </div>

                    <h1 class="text-4xl font-bold mb-4">
                        POS Barokah Mart
                    </h1>

                    <p class="text-indigo-100 text-lg leading-relaxed max-w-md">
                        Sistem Point of Sale untuk membantu
                        pengelolaan transaksi, produk, kategori,
                        dan laporan penjualan.
                    </p>

                </div>

                <div class="space-y-4">

                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center">
                            ✓
                        </div>

                        <span class="text-indigo-100">
                            Pengelolaan produk
                        </span>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center">
                            ✓
                        </div>

                        <span class="text-indigo-100">
                            Pencatatan transaksi
                        </span>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center">
                            ✓
                        </div>

                        <span class="text-indigo-100">
                            Laporan penjualan
                        </span>
                    </div>

                </div>

            </div>

        </div>


        <!-- BAGIAN KANAN -->
        <div class="w-full lg:w-1/2 flex items-center justify-center px-6 py-12">

            <div class="w-full max-w-md">

                <!-- LOGO MOBILE -->
                <div class="lg:hidden text-center mb-8">

                    <div class="inline-flex w-16 h-16 bg-indigo-600 rounded-2xl
                                items-center justify-center text-white text-xl font-bold mb-4">
                        BM
                    </div>

                    <h1 class="text-2xl font-bold text-gray-900">
                        POS Barokah Mart
                    </h1>

                </div>


                <!-- CARD LOGIN -->
                <div class="bg-white rounded-2xl shadow-xl border border-gray-100 p-8">

                    <div class="mb-8">

                        <h2 class="text-2xl font-bold text-gray-900">
                            Selamat Datang
                        </h2>

                        <p class="text-gray-500 mt-2">
                            Silakan masuk ke akun Anda untuk melanjutkan.
                        </p>

                    </div>


                    <!-- ERROR -->
                    @if ($errors->any())

                        <div class="mb-6 rounded-lg bg-red-50 border border-red-200
                                    px-4 py-3 text-sm text-red-700">

                            {{ $errors->first() }}

                        </div>

                    @endif


                    <!-- FORM -->
                    <form action="{{ route('login.store') }}" method="POST" class="space-y-5">

                        @csrf


                        <!-- EMAIL -->
                        <div>

                            <label for="email"
                                   class="block text-sm font-medium text-gray-700 mb-2">
                                Email
                            </label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="{{ old('email') }}"
                                placeholder="Masukkan email"
                                class="w-full px-4 py-3 rounded-lg border border-gray-300
                                       focus:outline-none focus:ring-2 focus:ring-indigo-500
                                       focus:border-indigo-500 transition"
                                required
                                autofocus
                            >

                        </div>


                        <!-- PASSWORD -->
                        <div>

                            <label for="password"
                                   class="block text-sm font-medium text-gray-700 mb-2">
                                Password
                            </label>

                            <input
                                type="password"
                                id="password"
                                name="password"
                                placeholder="Masukkan password"
                                class="w-full px-4 py-3 rounded-lg border border-gray-300
                                       focus:outline-none focus:ring-2 focus:ring-indigo-500
                                       focus:border-indigo-500 transition"
                                required
                            >

                        </div>


                        <!-- BUTTON -->
                        <button
                            type="submit"
                            class="w-full bg-indigo-600 hover:bg-indigo-700
                                   text-white font-semibold py-3 rounded-lg
                                   transition duration-200 shadow-sm
                                   hover:shadow-md">

                            Masuk ke Sistem

                        </button>

                    </form>


                    <div class="mt-8 pt-6 border-t border-gray-100 text-center">

                        <p class="text-xs text-gray-400">
                            POS Barokah Mart
                        </p>

                        <p class="text-xs text-gray-400 mt-1">
                            Sistem Point of Sale
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>

</html>