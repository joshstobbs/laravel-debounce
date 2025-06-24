<?php

namespace Zackaj\LaravelDebounce\Contracts;

use Carbon\CarbonInterface;
use Illuminate\Foundation\Bus\PendingDispatch;

interface DebounceableJob
{
    public function getLastActivityTimestamp(): ?CarbonInterface;

    public function after(): void;

    public function before(): void;

    public function debounce(int $delay, string $uniqueKey, bool $sync = false): PendingDispatch;

    public function handle(): void;
}
