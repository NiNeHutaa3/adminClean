<!-- resources/views/components/dual_text.blade.php -->

<div class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
    <h2 class=" font-bold mb-4">{{ $title }}</h2>

    <div class="flex">
        <!-- Sisi Kiri -->
        <div class="mr-8 ">
            <p class="mb-4">{{ $text1 }}</p>
            <p class="mb-4">{{ $text2 }}</p>
            <p class="mb-4">{{ $text3 }}</p>
            <p class="mb-4">{{ $text4 }}</p>
            <p class="mb-4">{{ $text5 }}</p>
            <p class="mb-4">{{ $text6 }}</p>
        </div>

        <!-- Sisi Kanan -->
        <div style="margin-left: auto;">
            <p class="mb-4">{{ $text7 }}</p>
            <p class="mb-4">{{ $text8 }}</p>
            <p class="mb-4">{{ $text9 }}</p>
            <p class="mb-4">{{ $text10 }}</p>
            <p class="mb-4">{{ $text11 }}</p>
            <p class="mb-4">{{ $text12 }}</p>
        </div>
    </div>

    <div class="mt-8 text-right">
        <a href="/input" class="text-blue-500 hover:underline">Selanjutnya</a>
    </div>
</div>
