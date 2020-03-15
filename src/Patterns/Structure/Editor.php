<?php

namespace App\Patterns\Structure;

class Editor
{
    public $context;

    /**
     * @param $context
     * @return EditorMemento
     */
    public function saveContext()
    {
        return new EditorMemento($this->context);
    }

    /**
     * @param EditorMemento $context
     * @return string
     */
    public function getMemoryContext(EditorMemento $context)
    {
        return $context->getContext();
    }

    /**
     * @return mixed
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * @param $context
     * @return string
     */
    public function setContext($context)
    {
        $this->context .= ' '.$context;
    }
}