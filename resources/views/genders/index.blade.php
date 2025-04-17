<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Data Gender') }}
        </h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
            {{-- Tombol Tambah Gender --}}
            <div class="mb-4">
                <a href="{{ route('genders.create') }}"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded border border-blue-600">
                    + Tambah Gender
                </a>
            </div>

            {{-- Tabel --}}
            <table class="w-full table-auto border-collapse border border-gray-700 text-white">
                <thead class="bg-gray-700">
                    <tr>
                        <th class="border px-4 py-2">#</th>
                        <th class="border px-4 py-2">Nama</th>
                        <th class="border px-4 py-2">Slug</th>
                        <th class="border px-4 py-2">Created At</th>
                        <th class="border px-4 py-2">Updated At</th>
                        <th class="border px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-800">
                    @foreach ($genders as $gender)
                        <tr>
                            <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                            <td class="border px-4 py-2">{{ $gender->name }}</td>
                            <td class="border px-4 py-2">{{ $gender->slug }}</td>
                            <td class="border px-4 py-2">{{ $gender->created_at->format('d M Y ') }}</td>
                            <td class="border px-4 py-2">{{ $gender->updated_at->format('d M Y') }}</td>
                            <td class="border px-4 py-2">
                                <a href="{{ route('genders.edit', $gender) }}"
                                    class="text-blue-400 hover:underline">Edit</a>
                                <form action="{{ route('genders.destroy', $gender) }}" method="POST" class="inline"
                                    onsubmit="return confirm('Yakin hapus?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-400 hover:underline ml-2">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    @if ($genders->isEmpty())
                        <tr>
                            <td colspan="4" class="border px-4 py-2 text-center text-gray-500">Belum ada data gender.
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
