<?php
/**
 * This file is part of riesenia/scheduler package.
 *
 * Licensed under the MIT License
 * (c) RIESENIA.com
 */

declare(strict_types=1);

namespace Riesenia\Scheduler;

class TermInvalidItemException extends \OutOfBoundsException
{
    /** @var TermInterface */
    private $term;

    /** @var int */
    private $item;

    /**
     * Set conflicting term.
     *
     * @param TermInterface $term
     */
    public function setTerm(TermInterface $term)
    {
        $this->term = $term;
    }

    /**
     * Get conflicting term.
     *
     * @return TermInterface
     */
    public function getTerm(): TermInterface
    {
        return $this->term;
    }

    /**
     * Set invalid item.
     *
     * @param int $item
     */
    public function setItem(int $item)
    {
        $this->item = $item;
    }

    /**
     * Get invalid item.
     *
     * @return int
     */
    public function getItem(): int
    {
        return $this->item;
    }
}
