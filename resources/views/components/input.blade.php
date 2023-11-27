<!-- resources/views/components/input.blade.php -->

<div class="p-4">
    <h2 class="text-2xl font-bold mb-2">Proses Pemesanan</h2>
    <p class="mb-4">Nama User:</p>

    <label for="berat" class="block mb-1">Berat barang:</label>
    <input type="text" id="berat" name="berat" class="w-full border p-2 mb-2">

    <label for="harga" class="block mb-1">Harga total:</label>
    <input type="text" id="harga" name="harga" class="w-full border p-2 mb-4">

    <h3 class="text-xl font-bold mb-2">Items</h3>

    <p class="mb-1">10x Kemeja</p>
    <p class="mb-1">20x Celana</p>
    <p class="mb-1">15x T-shirt</p>

    <!-- Fitur Checkbox -->
    <h3 class="text-xl font-bold mt-10 mb-2">Status Pemesanan</h3>

    <div class="grid grid-cols-5 gap-4">
        <div class="flex items-center">
            <label for="checkbox1" class="inline-flex items-center">
                <input type="checkbox" id="checkbox1" name="checkbox1" class="form-checkbox h-5 w-5 text-gray-600">
                <span class="ml-2">Cuci</span>
            </label>
        </div>

        <div class="flex items-center">
            <label for="checkbox2" class="inline-flex items-center">
                <input type="checkbox" id="checkbox2" name="checkbox2" class="form-checkbox h-5 w-5 text-gray-600">
                <span class="ml-2">Setrika</span>
            </label>
        </div>

        <div class="flex items-center">
            <label for="checkbox3" class="inline-flex items-center">
                <input type="checkbox" id="checkbox3" name="checkbox3" class="form-checkbox h-5 w-5 text-gray-600">
                <span class="ml-2">Packing</span>
            </label>
        </div>

        <div class="flex items-center">
            <label for="checkbox4" class="inline-flex items-center">
                <input type="checkbox" id="checkbox4" name="checkbox4" class="form-checkbox h-5 w-5 text-gray-600">
                <span class="ml-2">Kirim</span>
            </label>
        </div>

        <div class="flex items-center">
            <label for="checkbox5" class="inline-flex items-center">
                <input type="checkbox" id="checkbox5" name="checkbox5" class="form-checkbox h-5 w-5 text-gray-600">
                <span class="ml-2">Pembayaran</span>
            </label>
        </div>
    </div>
</div>
