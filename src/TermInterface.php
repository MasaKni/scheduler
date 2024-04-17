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
     * @return \DateTimeInterface
     */
    public function getFrom(): \DateTimeInterface;

    /**
     * Get event ending date.
     *
     * @return \DateTimeInterface|null
     */
    public function getTo(): ?\DateTimeInterface;

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
