<x-layouts.app>
<header class="bg-white shadow-md py-4">
    <div class="container mx-auto px-4 flex justify-between items-center">
        <h1 class="text-xl font-bold text-indigo-600">InvoiceGen</h1>
        <nav>
            <a href="/login" class="text-sm text-gray-700 hover:text-indigo-600 mr-4">Login</a>
            <a href="/register" wire:navigate='/register' class="text-sm bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-500">Get Started</a>
        </nav>
    </div>
</header>
{{ $slot }}
</x-layouts.app>
