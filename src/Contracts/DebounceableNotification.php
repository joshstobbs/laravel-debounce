<?php

namespace Zackaj\LaravelDebounce\Contracts;

use Carbon\CarbonInterface;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\PendingDispatch;

interface DebounceableNotification extends ShouldQueue
{
    /**
     * the timestamp that should be compared to the debounce interval
     *
     * @param  \Illuminate\Support\Collection|array|mixed  $notifiables
     */
    public function getLastActivityTimestamp(mixed $notifiables): ?CarbonInterface;

    public function after($notifiables): void;

    public function before($notifiables): void;

    public function debounce($notifiables, int $delay, string $uniqueKey): PendingDispatch;
}
