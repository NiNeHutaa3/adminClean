<!-- resources/views/components/akhir.blade.php -->

<div class="bg-white rounded-lg overflow-hidden shadow-lg p-6  mx-auto">
    <h2 class="text-2xl font-bold mb-4">Laporan Akhir</h2>

    <div class="mb-4">
        <p class="font-bold">Judul:</p>
        <p>{{ $judul }}</p>
    </div>

    <div class="mb-4">
        <p class="font-bold">Nama Pelanggan:</p>
        <p>{{ $namaPelanggan }}</p>
    </div>

    <div class="mb-4">
        <p class="font-bold">Tanggal Pesanan:</p>
        <p>{{ $tanggalPesanan }}</p>
    </div>

    <div>
        <p class="font-bold">Barang yang Dilayani:</p>
        <ul>
            @foreach($barang as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
</div>
