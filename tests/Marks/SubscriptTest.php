<?php

namespace Scrumpy\HtmlToProseMirror\Test\Nodes;

use Scrumpy\HtmlToProseMirror\Renderer;
use Scrumpy\HtmlToProseMirror\Test\TestCase;

class SubscriptTest extends TestCase
{
    /** @test */
    public function subscript_gets_rendered_correctly()
    {
        $html = '<p><sub>Example Text</sub></p>';

        $json = [
            'type' => 'doc',
            'content' => [
                [
                    'type' => 'paragraph',
                    'content' => [
                        [
                            'type' => 'text',
                            'text' => 'Example Text',
                            'marks' => [
                                [
                                    'type' => 'sub',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ];

        $this->assertEquals($json, (new Renderer)->render($html));
    }
}