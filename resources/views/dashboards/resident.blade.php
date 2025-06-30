<x-app-layout>
    <div class="max-w-7xl mx-auto p-6">
        <h1 class="text-2xl font-bold">Resident Dashboard</h1>
        <p>Welcome, {{ auth()->user()->name }}! Connect with Ngong's community.</p>
        <a href="{{ route('social.index') }}" class="bg-blue-500 text-white p-2 rounded">Go to Social Feed</a>
    </div>
</x-app-layout>
