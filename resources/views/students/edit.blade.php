<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Edit Student') }}
        </h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
            <form action="{{ route('students.update', $student) }}" method="POST" class="space-y-4">
                @csrf
                @method('PUT')

                <div>
                    <label for="nim" class="block font-medium text-white">NIM</label>
                    <input type="number" name="nim" id="nim" value="{{ old('nim', $student->nim) }}"
                        class="border rounded px-4 py-2 w-full bg-gray-700 text-black" required>
                </div>

                <div>
                    <label for="name" class="block font-medium text-white">Nama</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $student->name) }}"
                        class="border rounded px-4 py-2 w-full bg-gray-700 text-black" required>
                </div>

                <div>
                    <label for="gender_id" class="block font-medium text-white">Gender</label>
                    <select name="gender_id" id="gender_id"
                        class="border rounded px-4 py-2 w-full bg-gray-700 text-black" required>
                        <option value="">Pilih Gender</option>
                        @foreach ($genders as $gender)
                            <option value="{{ $gender->id }}"
                                {{ $student->gender_id == $gender->id ? 'selected' : '' }}>
                                {{ $gender->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="phone" class="block font-medium text-white">Phone</label>
                    <input type="number" name="phone" id="phone" value="{{ old('phone', $student->phone) }}"
                        class="border rounded px-4 py-2 w-full bg-gray-700 text-black" required>
                </div>

                <div>
                    <label for="address" class="block font-medium text-white">Alamat</label>
                    <input type="text" name="address" id="address" value="{{ old('address', $student->address) }}"
                        class="border rounded px-4 py-2 w-full bg-gray-700 text-black" required>
                </div>

                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded"
                    onclick="window.location.href='{{ route('students.index') }}'">Update</button>
                <a href="{{ route('students.index') }}" class="text-gray-400 hover:text-gray-200 ml-2">Batal</a>
            </form>
        </div>
    </div>
</x-app-layout>
