<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Edit Gender') }}
        </h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
            <div class="container mx-auto py-8">
                <h1 class="text-2xl font-bold mb-4 text-white">Edit Gender</h1>

                <form action="{{ route('genders.update', $gender) }}" method="POST" class="space-y-4">
                    @csrf
                    @method('PUT')

                    <div>
                        <label for="name" class="block font-medium text-white">Nama</label>
                        <input type="text" name="name" id="name"
                            class="border rounded px-4 py-2 w-full bg-gray-700 text-black"
                            value="{{ old('name', $gender->name) }}" required oninput="generateSlug()">
                    </div>

                    <div>
                        <label for="slug" class="block font-medium text-white">Slug</label>
                        <input type="text" name="slug" id="slug"
                            class="border rounded px-4 py-2 w-full bg-gray-700 text-black"
                            value="{{ old('slug', $gender->slug) }}" readonly>
                    </div>

                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Update</button>
                    <a href="{{ route('genders.index') }}" class="text-gray-400 hover:text-gray-200 ml-2">Batal</a>
                </form>
            </div>
        </div>
    </div>

    <script>
        function generateSlug() {
            const name = document.getElementById('name').value;
            const slug = name.toLowerCase().replace(/ /g, '-');
            document.getElementById('slug').value = slug;
        }
    </script>
</x-app-layout>
