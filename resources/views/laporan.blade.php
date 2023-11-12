<!-- resources/views/layouts/app.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Hi, Admin') }}
        </h2>
    </x-slot>

    <div class="flex h-screen">
        <div class="h-full  p-4">
            <x-akhir
                :judul="'Laporan Laundry'"
                :namaPelanggan="'John Doe'"
                :tanggalPesanan="'2023-11-12'"
                :barang="['Pakaian', 'Sepatu', 'Selimut']"
            />
        </div>
    </div>
</x-app-layout>
