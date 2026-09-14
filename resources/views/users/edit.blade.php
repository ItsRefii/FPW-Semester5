<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Kasir</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 p-8">

<div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow">

    <h1 class="text-2xl font-bold mb-6">
        Edit Akun Kasir
    </h1>

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label>Nama</label>

            <input type="text"
                   name="name"
                   value="{{ $user->name }}"
                   class="w-full border rounded p-2"
                   required>
        </div>

        <div class="mb-4">
            <label>Email</label>

            <input type="email"
                   name="email"
                   value="{{ $user->email }}"
                   class="w-full border rounded p-2"
                   required>
        </div>

        <div class="mb-4">
            <label>Password Baru</label>

            <input type="password"
                   name="password"
                   class="w-full border rounded p-2"
                   placeholder="Kosongkan jika tidak ingin mengubah">
        </div>

        <button type="submit"
                class="bg-indigo-600 text-white px-4 py-2 rounded">
            Simpan Perubahan
        </button>

    </form>

</div>

</body>
</html>