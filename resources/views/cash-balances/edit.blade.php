<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Edit Pembayaran Kas Kelas') }}
        </h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
            <form action="{{ route('cash_balances.update', $cashBalance) }}" method="POST" class="space-y-4">
                @csrf
                @method('PUT')

                <div>
                    <label for="student_id" class="block font-medium text-white">Nama Siswa</label>
                    <select name="student_id" id="student_id"
                        class="border rounded px-4 py-2 w-full bg-gray-700 text-black" required>
                        <option value="">Pilih Siswa</option>
                        @foreach ($students as $student)
                            <option value="{{ $student->id }}"
                                {{ $cashBalance->student_id == $student->id ? 'selected' : '' }}>
                                {{ $student->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="income" class="block font-medium text-white">Pemasukan</label>
                    <input type="number" name="income" id="income"
                        value="{{ old('income', $cashBalance->income) }}"
                        class="border rounded px-4 py-2 w-full bg-gray-700 text-black" required>
                </div>

                <div>
                    <label for="expense" class="block font-medium text-white">Pengeluaran</label>
                    <input type="number" name="expense" id="expense"
                        value="{{ old('expense', $cashBalance->expense) }}"
                        class="border rounded px-4 py-2 w-full bg-gray-700 text-black">
                </div>

                <div>
                    <label for="description" class="block font-medium text-white">Deskripsi</label>
                    <input type="text" name="description" id="description"
                        value="{{ old('description', $cashBalance->description) }}"
                        class="border rounded px-4 py-2 w-full bg-gray-700 text-black" required>
                </div>

                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Perbarui</button>
                <a href="{{ route('cash_balances.index') }}" class="text-gray-400 hover:text-gray-200 ml-2">Batal</a>
            </form>
        </div>
    </div>
</x-app-layout>
