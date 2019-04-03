<?php
/**
 * This file is part of riesenia/scheduler package.
 *
 * Licensed under the MIT License
 * (c) RIESENIA.com
 */

declare(strict_types=1);

namespace Riesenia\Scheduler;

/**
 * Trait simplifying TermInterface implementation.
 */
trait TermTrait
{
    /** @var int|null */
    private $termItemId;

    /**
     * Set event to item.
     *
     * @param int|null $id
     */
    public function setItemId(?int $id)
    {
        $this->termItemId = $id;
    }

    /**
     * Get event item.
     *
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->termItemId;
    }
}
