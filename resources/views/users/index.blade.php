<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kelola Kasir</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-8">

    <div class="max-w-5xl mx-auto bg-white p-6 rounded-lg shadow">

        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Kelola Akun Kasir</h1>

            <a href="{{ route('users.create') }}"
               class="bg-indigo-600 text-white px-4 py-2 rounded">
                + Tambah Kasir
            </a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <table class="w-full border">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border p-3">No</th>
                    <th class="border p-3">Nama</th>
                    <th class="border p-3">Email</th>
                    <th class="border p-3">Role</th>
                    <th class="border p-3">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td class="border p-3">
                            {{ $loop->iteration }}
                        </td>

                        <td class="border p-3">
                            {{ $user->name }}
                        </td>

                        <td class="border p-3">
                            {{ $user->email }}
                        </td>

                        <td class="border p-3">
                            {{ $user->role }}
                        </td>

                        <td class="border p-3">

                            <a href="{{ route('users.edit', $user->id) }}"
                               class="bg-yellow-500 text-white px-3 py-1 rounded">
                                Edit
                            </a>

                            <form action="{{ route('users.destroy', $user->id) }}"
                                  method="POST"
                                  class="inline">
                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="bg-red-600 text-white px-3 py-1 rounded">
                                    Hapus
                                </button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</body>
</html>