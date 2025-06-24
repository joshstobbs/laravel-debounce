<?php

namespace Zackaj\LaravelDebounce\Contracts;

use Carbon\CarbonInterface;

interface Debounceable
{
    /**
     * used for redis lock to prevent dispatching another job
     * if one already exists it won't be added to queue
     * implemented by ShouldBeUniqueUntilProcessing
     */
    public function uniqueId(): string;

    public function beforeExecute(): void;

    /**
     * handle logic when debounce is finally fired
     */
    public function execute(): void;

    public function afterExecute(): void;

    public function getTimestamp(): ?CarbonInterface;

    public function getLastActivityTimestamp(): ?CarbonInterface;

    public function getLastActivityTimestampFallback(): ?CarbonInterface;

    public function getOriginalDelay(): int;

    public function getConstructorArgs(): array;

    public function isLocked(): bool;
}
