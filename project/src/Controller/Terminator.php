<?php

namespace Controller;

/**
 * class Terminator
 */
class Terminator implements TerminatorInterface
{

    /**
     * @param int   $state
     * @param array $juniorBehavior
     *
     * @return string
     */
    public function exec($state, array $juniorBehavior)
    {
        // TODO: Implement exec() method.

        return "Hello world";
    }
}