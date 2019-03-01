<?php
/**
 * This file is part of riesenia/scheduler package.
 *
 * Licensed under the MIT License
 * (c) RIESENIA.com
 */

declare(strict_types=1);

namespace Riesenia\Scheduler;

interface TermInterface
{
    /**
     * Get event starting date.
     *
     * @return \DateTimeImmutable
     */
    public function getFrom(): \DateTimeImmutable;

    /**
     * Get event ending date.
     *
     * @return \DateTimeImmutable
     */
    public function getTo(): \DateTimeImmutable;

    /**
     * Check if event is locked for specific item.
     *
     * @return int|null
     */
    public function getLockedId(): ?int;

    /**
     * Set event to item.
     *
     * @param int|null $id
     */
    public function setItemId(?int $id);

    /**
     * Get event item.
     *
     * @return int|null
     */
    public function getItemId(): ?int;
}
