<!-- resources/views/layouts/app.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Hi, Admin') }}
        </h2>
    </x-slot>

    <div class="flex h-screen">
        <!-- Komponen Dual Text -->
        <div class="flex-1 py-12">
            <x-info
                title="Detail Pemesanan"
                text1="Nama"
                text2="Alamat"
                text3="Jam/Tgl Penjemputan"
                text4="Jam/Tgl Pemulangan"
                text5="Jenis Pencucian"
                text6="Jenis Detergen"
                text7="User A"
                text8="Jalan 123"
                text9="09.00/21.03.2023"
                text10="09.00/22.03.2023"
                text11="Express"
                text12="Cair"
                
            />
        </div>
    </div>
</x-app-layout>
