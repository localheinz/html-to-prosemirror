<?php

namespace Scrumpy\HtmlToProseMirror\Marks;

class Code extends Mark
{
    public function matching()
    {
        if ($this->DOMNode->parentNode->nodeName === 'pre') {
            return false;
        }

        return $this->DOMNode->nodeName === 'code';
    }

    public function data()
    {
        return [
            'type' => 'code',
        ];
    }
}
