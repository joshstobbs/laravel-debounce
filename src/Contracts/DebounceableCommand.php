<?php

namespace Zackaj\LaravelDebounce\Contracts;

use Carbon\CarbonInterface;

interface DebounceableCommand
{
    public static function getLastActivityTimestamp(): ?CarbonInterface;

    public static function before(): void;

    public static function after(): void;

    public function handle();
}
