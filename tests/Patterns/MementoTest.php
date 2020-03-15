<?php

namespace AppTests\Patterns;

use App\Patterns\Structure\Editor;
use PHPUnit\Framework\TestCase;

class MementoTest extends TestCase
{
    /**
     * @test
     */
    public function testEditorMemento()
    {
        $editor = new Editor();
        $editor->setContext('oooo');
        $save = $editor->saveContext();
        $text = $editor->getMemoryContext($save);
        $this->AssertEquals($text, ' oooo');
    }
}