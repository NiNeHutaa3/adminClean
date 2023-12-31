<!-- resources/views/components/akhir.blade.php -->

<!-- Pastikan Anda telah menyertakan link FontAwesome di bagian head HTML Anda -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-...">

<div class="container mx-auto p-8" id="printableArea">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold">Laporan Pemesanan</h1>

        <!-- Fitur Pencarian -->
        <div class="flex items-center">
            <label for="search" class="text-lg mr-2">Cari:</label>
            <input type="text" id="search" class="border p-2">
            <button class="bg-blue-500 text-white py-2 px-4 ml-2 rounded">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full bg-white border-collapse border border-gray-300 rounded-lg">
            <thead class="bg-gray-200 divide-y divide-gray-300">
                <tr>
                    <td class="py-2 text-lg px-4">No</td>
                    <td class="py-2 text-lg px-4">Tanggal Pesanan</td>
                    <td class="py-2 text-lg px-4">Nama Pemesan</td>
                    <td class="py-2 text-lg px-4">Status Pemesanan</td>
                    <td class="py-2 text-lg px-4">Pembayaran</td>
                    <td class="py-2 text-lg px-4">Evaluasi</td>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-300">
                <!-- Isi tabel di sini -->
                <tr>
                    <td class="py-2 px-4">1</td>
                    <td class="py-2 px-4">12-03-2023</td>
                    <td class="py-2 px-4">Agung Berseri</td>
                    <td class="py-2 px-4">Selesai</td>
                    <td class="py-2 px-4">Lunas</td>
                    <td class="py-2 px-4">5/5</td>
                </tr>
                <!-- Tambahkan baris lain jika diperlukan -->
            </tbody>
        </table>
    </div>

    <div class="flex justify-end mt-6">
        <button id="printButton" class="flex items-center bg-green-600 text-white py-2 px-4 rounded">
            <i class="fas fa-print mr-2"></i> Cetak
        </button>
    </div>

    <script>
        document.getElementById('printButton').addEventListener('click', function() {
            var printContents = document.getElementById('printableArea').innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        });
    </script>

    <style>
        @media print {
            /* Sembunyikan tombol cetak saat dicetak */
            #printButton {
                display: none;
            }
        }
    </style>
</div>
