<!-- resources/views/layouts/app.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Hi, Admin') }}
        </h2>
    </x-slot>

    <div class="flex h-screen">
        <!-- Komponen Masuk -->
        <div class="flex-1 py-12">
            <x-masuk username="User1" />
            <x-masuk username="User2" />
            <x-masuk username="User3" />
            <x-masuk username="User4" />
            <x-masuk username="User5" />
        </div>
    </div>
</x-app-layout>
