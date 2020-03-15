<?php

namespace App\Patterns\Structure;

class EditorMemento
{
    public $context = '';

    /**
     * EditorMemento constructor.
     * @param $context
     */
    public function __construct($context)
    {
        $this->context = $context;
    }

    /**
     * @return string
     */
    public function getContext()
    {
        return $this->context;
    }
}