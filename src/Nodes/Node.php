<?php

namespace Scrumpy\HtmlToProseMirror\Nodes;

class Node
{
    public $type = 'node';

    protected $DOMNode;

    function __construct($DOMNode)
    {
        $this->DOMNode = $DOMNode;
    }

    public function matching()
    {
        return false;
    }

    public function data()
    {
        return [];
    }
}