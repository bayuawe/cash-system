<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Data Students') }}
        </h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
            <div class="mb-4">
                <a href="{{ route('students.create') }}"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded border border-blue-600">+
                    Tambah
                    Student</a>
            </div>

            <table class="w-full table-auto border-collapse border border-gray-700 text-white">
                <thead class="bg-gray-700">
                    <tr>
                        <th class="border px-4 py-2">#</th>
                        <th class="border px-4 py-2">NIM</th>
                        <th class="border px-4 py-2">Nama</th>
                        <th class="border px-4 py-2">Jenis Kelamin</th>
                        <th class="border px-4 py-2">No. HP</th>
                        <th class="border px-4 py-2">Alamat</th>
                        <th class="border px-4 py-2">Created At</th>
                        <th class="border px-4 py-2">Updated At</th>
                        <th class="border px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-800">
                    @foreach ($students as $student)
                        <tr>
                            <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                            <td class="border px-4 py-2">{{ $student->nim }}</td>
                            <td class="border px-4 py-2">{{ $student->name }}</td>
                            <td class="border px-4 py-2">{{ $student->gender->name }}</td>
                            <td class="border px-4 py-2">{{ $student->phone }}</td>
                            <td class="border px-4 py-2">{{ $student->address }}</td>
                            <td class="border px-4 py-2">{{ $student->created_at->format('d M Y') }}</td>
                            <td class="border px-4 py-2">{{ $student->updated_at->format('d M Y') }}</td>
                            <td class="border px-4 py-2">
                                <a href="{{ route('students.edit', $student) }}"
                                    class="text-blue-400 hover:underline">Edit</a>
                                <form action="{{ route('students.destroy', $student) }}" method="POST" class="inline"
                                    onsubmit="return confirm('Yakin hapus?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-400 hover:underline ml-2">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
