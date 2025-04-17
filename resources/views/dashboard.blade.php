<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Dashboard Keuangan') }}
        </h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8 text-white">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            <ul role="list" class="divide-y divide-white divide-opacity-50">
                <li class="flex justify-between gap-x-6 py-5">
                    <h3>Total Pemasukan 🤑</h3>
                    <p class="text-2xl font-bold">Rp {{ number_format($totals->total_income, 0, ',', '.') }}</p>
                </li>
                <li class="flex justify-between gap-x-6 py-5">
                    <h3>Total Pengeluaran 💲</h3>
                    <p class="text-2xl font-bold">Rp {{ number_format($totals->total_expense, 0, ',', '.') }}</p>
                </li>
                <li class="flex justify-between gap-x-6 py-5">
                    <h3>Total Saldo 💰</h3>
                    <p class="text-2xl font-bold">Rp {{ number_format($totals->total_balance, 0, ',', '.') }}</p>
                </li>
                <li class="flex justify-between gap-x-6 py-5">
                    <h3>Total Student 🧑‍🎓</h3>
                    <p class="text-2xl font-bold">{{ $totalStudents }} Student</p>
                </li>
                <li class="flex justify-between gap-x-6 py-5">
                    <h3>Jumlah Student Laki-laki 🧑‍🎓</h3>
                    <p class="text-2xl font-bold">{{ $totalMale }} Student</p>
                </li>
                <li class="flex justify-between gap-x-6 py-5">
                    <h3>Jumlah Student Perempuan 👩‍🎓</h3>
                    <p class="text-2xl font-bold">{{ $totalFemale }} Student</p>
            </ul>
        </div>

        <div class="bg-gray-800 p-6 rounded-lg shadow">
            <h3 class="text-xl font-semibold mb-4">Grafik Keuangan Bulanan</h3>
            <canvas id="financeChart" height="100"></canvas>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('financeChart').getContext('2d');
        const financeChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: {!! json_encode($monthly->pluck('month_name')) !!},
                datasets: [{
                        label: 'Pemasukan',
                        data: {!! json_encode($monthly->pluck('income')) !!},
                        backgroundColor: 'rgba(16, 185, 129, 0.6)'
                    },
                    {
                        label: 'Pengeluaran',
                        data: {!! json_encode($monthly->pluck('expense')) !!},
                        backgroundColor: 'rgba(239, 68, 68, 0.6)'
                    }
                ]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</x-app-layout>
