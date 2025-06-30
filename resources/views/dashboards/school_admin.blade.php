<x-app-layout>
    <div class="max-w-7xl mx-auto p-6">
        <h1 class="text-2xl font-bold">School Admin Dashboard</h1>
        <p>Update school schedules, {{ auth()->user()->name }}.</p>
        <a href="{{ route('schools.index') }}" class="bg-blue-500 text-white p-2 rounded">Manage Schools</a>
    </div>
</x-app-layout>
