<?php

namespace Khalin\LaravelSlice\Adapters\Http\Listeners\ResponseReceived;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Client\Events\ResponseReceived;

class StoreEntry implements ShouldQueue
{
    public function handle(ResponseReceived $event)
    {
    }
}
