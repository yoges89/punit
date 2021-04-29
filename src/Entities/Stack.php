<?php

namespace App\Entities;

class Stack
{

    protected $stack;

    public function getStack()
    {
        return $this->stack ?? [];
    }

    public function pushStack(string $element)
    {
        $this->stack[] = $element;
    }
}
