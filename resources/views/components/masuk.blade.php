<!-- resources/views/components/Masuk.blade.php -->

<div class="flex items-center justify-between w-full p-4 bg-white shadow-md mb-4">
    <!-- Bagian Kiri -->
    <div class="flex items-center">
        <div class="font-bold text-lg">{{ $username }}</div>
    </div>

    <!-- Bagian Kanan -->
    <div class="flex space-x-8">
        <a href="/detail" 
            class="bg-red-400 text-white px-4 py-2 rounded">Detail</a>
        <button class="bg-blue-400 text-white px-4 py-2 rounded">Terima</button>
    </div>
</div>
