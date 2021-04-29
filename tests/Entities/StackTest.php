<?php

namespace Test\Entities;

use App\Entities\Stack;
use PhpParser\NodeVisitor\FirstFindingVisitor;
use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    public function testClassExist()
    {
        $stack = new Stack;
        $this->assertInstanceOf(Stack::class, $stack);
        return $stack;
    }

    /**
     * Check by default stack should be empty.
     *
     * @depends testClassExist
     */
    public function testEmpty(Stack $stack)
    {
        $this->assertEmpty($stack->getStack());
        return $stack;
    }

    /**
     * Push an item to the stack.
     *
     * @depends testEmpty
     */
    public function testPush(Stack $stack)
    {
        $stack->pushStack('Name is Khan');
        $firstElement = $stack->getStack();
        $this->assertEquals('Name is Khan', $firstElement[count($firstElement) - 1]);
    }
}
