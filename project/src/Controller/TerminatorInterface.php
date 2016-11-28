<?php

namespace Controller;

/**
 * Interface TerminatorInterface
 * @package Controller
 */
interface TerminatorInterface
{
    /**
     * @param int     $state
     * @param array $juniorBehavior
     *
     * @return mixed
     */
    public function exec($state, array $juniorBehavior);
}