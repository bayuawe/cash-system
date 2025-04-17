<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Tambah Gender') }}
        </h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
            <div class="container mx-auto py-8">
                <h1 class="text-2xl font-bold mb-4 text-white">Tambah Gender</h1>

                <form action="{{ route('genders.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label for="name" class="block font-medium text-white">Nama</label>
                        <input type="text" name="name" id="name"
                            class="border rounded px-4 py-2 w-full bg-gray-700 text-black" required
                            oninput="generateSlug()">
                    </div>

                    <div>
                        <label for="slug" class="block font-medium text-white">Slug</label>
                        <input type="text" name="slug" id="slug"
                            class="border rounded px-4 py-2 w-full bg-gray-700 text-black" readonly>
                    </div>

                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
                    <a href="{{ route('genders.index') }}" class="text-gray-400 hover:text-gray-200 ml-2">Kembali</a>
                </form>
            </div>

        </div>
    </div>

    <script>
        function generateSlug() {
            var name = document.getElementById('name').value;
            var slug = name.toLowerCase()
                .replace(/[^a-z0-9]+/g, '-') // Mengubah karakter non-alfanumerik menjadi '-'
                .replace(/^-+|-+$/g, ''); // Menghapus '-' yang ada di awal dan akhir

            document.getElementById('slug').value = slug;
        }
    </script>
</x-app-layout>
