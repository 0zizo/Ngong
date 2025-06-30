<x-app-layout>
    <div class="max-w-7xl mx-auto p-6">
        <h1 class="text-2xl font-bold">Admin Dashboard</h1>
        <p>Control all features, {{ auth()->user()->name }}.</p>
        <div class="flex space-x-4">
            <a href="{{ route('businesses.index') }}" class="bg-blue-500 text-white p-2 rounded">Businesses</a>
            <a href="{{ route('schools.index') }}" class="bg-blue-500 text-white p-2 rounded">Schools</a>
            <a href="{{ route('traffic.index') }}" class="bg-blue-500 text-white p-2 rounded">Traffic</a>
            <a href="{{ route('social.index') }}" class="bg-blue-500 text-white p-2 rounded">Social</a>
        </div>
    </div>
</x-app-layout>
