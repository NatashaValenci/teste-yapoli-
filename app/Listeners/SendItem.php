<?php

namespace App\Listeners;

use App\Events\ItemRegister;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendItem
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ItemRegister  $event
     * @return void
     */
    public function handle(ItemRegister $event)
    {
        \Log::info($event->register());
    }
}
