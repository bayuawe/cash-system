<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Tambah Student') }}
        </h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
            <form action="{{ route('students.store') }}" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label for="nim" class="block font-medium text-white">NIM</label>
                    <input type="number" name="nim" id="nim"
                        class="border rounded px-4 py-2 w-full bg-gray-700 text-black" required
                        value="{{ old('nim') }}">
                    @error('nim')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="name" class="block font-medium text-white">Nama</label>
                    <input type="text" name="name" id="name"
                        class="border rounded px-4 py-2 w-full bg-gray-700 text-black" required
                        value="{{ old('name') }}">
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="gender_id" class="block font-medium text-white">Gender</label>
                    <select name="gender_id" id="gender_id"
                        class="border rounded px-4 py-2 w-full bg-gray-700 text-black" required>
                        <option value="">Pilih Gender</option>
                        @foreach ($genders as $gender)
                            <option value="{{ $gender->id }}" {{ old('gender_id') == $gender->id ? 'selected' : '' }}>
                                {{ $gender->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('gender_id')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="phone" class="block font-medium text-white">Phone</label>
                    <input type="number" name="phone" id="phone"
                        class="border rounded px-4 py-2 w-full bg-gray-700 text-black" required
                        value="{{ old('phone') }}">
                    @error('phone')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="address" class="block font-medium text-white">Alamat</label>
                    <input type="text" name="address" id="address"
                        class="border rounded px-4 py-2 w-full bg-gray-700 text-black" required
                        value="{{ old('address') }}">
                    @error('address')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="pt-4">
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Simpan</button>
                    <a href="{{ route('students.index') }}" class="text-gray-400 hover:text-gray-200 ml-2">Batal</a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
