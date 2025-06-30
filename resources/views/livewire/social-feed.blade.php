<!-- resources/views/livewire/social-feed.blade.php -->
<div>
    <form wire:submit.prevent="save">
        <textarea wire:model="content" class="w-full p-2 border"></textarea>
        <button type="submit" class="bg-blue-500 text-white p-2">Post</button>
    </form>
    @foreach ($posts as$post)
        <div class="mt-4 p-4 bg-white shadow">
            <p>{{$post->user->name }}: {{$post->content }}</p>
        </div>
    @endforeach
</div>
