<x-app-layout>
    <div class="max-w-7xl mx-auto p-6">
        <h1 class="text-2xl font-bold">Business Dashboard</h1>
        <p>Manage your listings, {{ auth()->user()->name }}.</p>
        <a href="{{ route('businesses.index') }}" class="bg-blue-500 text-white p-2 rounded">Manage Listings</a>
    </div>
</x-app-layout>
