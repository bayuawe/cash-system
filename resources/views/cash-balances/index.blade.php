<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Dashboard Keuangan') }}
        </h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">


            <div class="bg-gray-400 p-6 rounded-lg shadow-xl mb-4">
                <h3 class="text-white text-xl font-semibold">Total Keuangan</h3>
                <div class="flex justify-between mt-4 text-white">
                    <p><strong>Total Pemasukan:</strong> Rp {{ number_format($totals->total_income, 0, ',', '.') }}</p>
                    <p><strong>Total Pengeluaran:</strong> Rp {{ number_format($totals->total_expense, 0, ',', '.') }}
                    </p>
                    <p><strong>Total Saldo:</strong> Rp {{ number_format($totals->total_balance, 0, ',', '.') }}</p>
                </div>
            </div>

            <div class="mb-4">
                <a href="{{ route('cash-balances.create') }}"
                    class="bg-blue-600 text-white px-4 py-2 rounded mb-4 border border-blue-600">+
                    Tambah Pembayaran</a>
            </div>

            <table class="w-full table-auto border-collapse border border-gray-700 text-white mt-6">
                <thead class="bg-gray-700">
                    <tr>
                        <th class="border px-4 py-2">#</th>
                        <th class="border px-4 py-2">Nama Siswa</th>
                        <th class="border px-4 py-2">Pemasukan</th>
                        <th class="border px-4 py-2">Pengeluaran</th>
                        <th class="border px-4 py-2">Deskripsi</th>
                        <th class="border px-4 py-2">Created At</th>
                        <th class="border px-4 py-2">Updated At</th>
                        <th class="border px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-800">
                    @foreach ($cashBalances as $balance)
                        <tr>
                            <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                            <td class="border px-4 py-2">{{ $balance->student->name }}</td>
                            <td class="border px-4 py-2">{{ number_format($balance->income, 0, ',', '.') }}</td>
                            <td class="border px-4 py-2">{{ number_format($balance->expense, 0, ',', '.') }}</td>
                            <td class="border px-4 py-2">{{ $balance->description }}</td>
                            <td class="border px-4 py-2">{{ $balance->created_at->format('d M Y') }}</td>
                            <td class="border px-4 py-2">{{ $balance->updated_at->format('d M Y') }}</td>
                            <td class="border px-4 py-2">
                                <a href="{{ route('cash-balances.edit', $balance) }}"
                                    class="text-blue-400 hover:underline">Edit</a>
                                <form action="{{ route('cash-balances.destroy', $balance) }}" method="POST"
                                    class="inline" onsubmit="return confirm('Yakin hapus?')">
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
