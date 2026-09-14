<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Kasir</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 p-8">

<div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow">

    <h1 class="text-2xl font-bold mb-6">
        Tambah Akun Kasir
    </h1>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label>Nama</label>

            <input type="text"
                   name="name"
                   class="w-full border rounded p-2"
                   required>
        </div>

        <div class="mb-4">
            <label>Email</label>

            <input type="email"
                   name="email"
                   class="w-full border rounded p-2"
                   required>
        </div>

        <div class="mb-4">
            <label>Password</label>

            <input type="password"
                   name="password"
                   class="w-full border rounded p-2"
                   required>
        </div>

        <button type="submit"
                class="bg-indigo-600 text-white px-4 py-2 rounded">
            Simpan
        </button>

        <a href="{{ route('users.index') }}"
           class="ml-2 text-gray-600">
            Kembali
        </a>

    </form>

</div>

</body>
</html>