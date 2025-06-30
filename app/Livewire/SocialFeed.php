<?php


namespace App\Http\Livewire;
use App\Models\Post;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class SocialFeed extends Component {

    public $content = '';

    public function save() {
        $user = Auth::user();
        if ($user) {
            Post::create(['user_id' => $user->id, 'content' => $this->content]);
            $this->content = '';
            event(new \App\Events\PostCreated());
        }
        event(new \App\Events\PostCreated());
    }
    public function render() {
        return view('livewire.social-feed', ['posts' => Post::with('user')->latest()->get()]);
    }
}
