<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Tambah Pembayaran Kas Kelas') }}
        </h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
            <form action="{{ route('cash-balances.store') }}" method="POST" class="space-y-4">
                @csrf

                <!-- Pilihan Nama Siswa -->
                <div>
                    <label for="student_id" class="block font-medium text-white">Nama Siswa</label>
                    <select name="student_id" id="student_id"
                        class="border rounded px-4 py-2 w-full bg-gray-700 text-black" required>
                        <option value="">Pilih Siswa</option>
                        @foreach ($students as $student)
                            <option value="{{ $student->id }}">{{ $student->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Tab Pilihan Pemasukan atau Pengeluaran -->
                <div class="mx-4 mt-4 mb-4">
                    <div class="mb-4">
                        <h1 class="text-white text-lg font-semibold">Pilih Tipe Transaksi</h1>
                    </div>

                    <div class="flex justify-normal">
                        <button type="button" id="incomeTab"
                            class="px-6 py-2 bg-gray-600 text-white rounded-md border border-gray-600 hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50"
                            onclick="showInput('income')">Pemasukan</button>
                        <button type="button" id="expenseTab"
                            class="px-6 py-2 bg-gray-600 text-white rounded-md border border-gray-600 hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50"
                            onclick="showInput('expense')">Pengeluaran</button>
                    </div>
                </div>



                <!-- Input Pemasukan -->
                <div id="incomeInput" class="tab-content hidden">
                    <label for="income" class="block font-medium text-white">Pemasukan</label>
                    <input type="number" name="income" id="income"
                        class="border rounded px-4 py-2 w-full bg-gray-700 text-black">
                </div>

                <!-- Input Pengeluaran -->
                <div id="expenseInput" class="tab-content hidden">
                    <label for="expense" class="block font-medium text-white">Pengeluaran</label>
                    <input type="number" name="expense" id="expense"
                        class="border rounded px-4 py-2 w-full bg-gray-700 text-black">
                </div>

                <!-- Deskripsi -->
                <div>
                    <label for="description" class="block font-medium text-white">Deskripsi</label>
                    <input type="text" name="description" id="description"
                        class="border rounded px-4 py-2 w-full bg-gray-700 text-black" required>
                </div>

                <!-- Tombol Submit dan Batal -->
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
                <a href="{{ route('cash-balances.index') }}" class="text-gray-400 hover:text-gray-200 ml-2">Batal</a>
            </form>
        </div>
    </div>

    <!-- CSS untuk Tab dan Input -->
    <style>
        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }
    </style>

    <!-- JavaScript untuk Logika Tab -->
    <script>
        // Fungsi untuk menampilkan input yang dipilih (Pemasukan atau Pengeluaran)
        function showInput(type) {
            // Sembunyikan semua input
            document.getElementById('incomeInput').classList.remove('active');
            document.getElementById('expenseInput').classList.remove('active');

            // Sembunyikan tab
            document.getElementById('incomeTab').classList.remove('bg-blue-600');
            document.getElementById('incomeTab').classList.add('bg-gray-600');
            document.getElementById('expenseTab').classList.remove('bg-gray-600');
            document.getElementById('expenseTab').classList.add('bg-blue-600');

            // Tampilkan input yang relevan
            if (type === 'income') {
                document.getElementById('incomeInput').classList.add('active');
            } else if (type === 'expense') {
                document.getElementById('expenseInput').classList.add('active');
            }
        }

        // Secara default pilih Pemasukan
        window.onload = function() {
            showInput('income');
        };
    </script>

</x-app-layout>
