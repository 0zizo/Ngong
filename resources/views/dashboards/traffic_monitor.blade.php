<x-app-layout>
    <div class="max-w-7xl mx-auto p-6">
        <h1 class="text-2xl font-bold">Traffic Monitor Dashboard</h1>
        <p>Monitor Ngong's traffic, {{ auth()->user()->name }}.</p>
        <a href="{{ route('traffic.index') }}" class="bg-blue-500 text-white p-2 rounded">View Traffic Updates</a>
    </div>
</x-app-layout>
