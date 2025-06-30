<?php

namespace App\Events;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
class PostCreated implements ShouldBroadcast {
    use InteractsWithSockets;
    public function broadcastOn() {
        return new Channel('social-feed');
        }
    }
