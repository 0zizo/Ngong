<!-- resources/views/businesses/index.blade.php -->
<x-app-layout>
    <div class="max-w-7xl mx-auto p-6">
        <h1 class="text-2xl font-bold">Ngong Business Directory</h1>
        @foreach ($businesses as$business)
            <div class="mt-4 p-4 bg-white shadow">
                <h2>{{$business->name }}</h2>
                <p>Location: {{$business->location }}</p>
                <p>Services: {{$business->services }}</p>
            </div>
        @endforeach
        <form action="{{ route('businesses.store') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Business Name" class="p-2 border">
            <input type="text" name="location" placeholder="Location" class="p-2 border">
            <input type="text" name="services" placeholder="Services" class="p-2 border">
            <button type="submit" class="bg-blue-500 text-white p-2">Add Business</button>
        </form>
    </div>
</x-app-layout>
