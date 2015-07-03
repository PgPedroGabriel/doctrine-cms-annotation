<?php

namespace Binding\HtmlTemplates;

abstract class Input implements HtmlTemplatesInterface
{

    private $fileName = '/inputTemplate.html';

    public function set($html)
    {
        // check if contains the patterns of switching html {{_property}} e etc.
        return file_put_contents($this->fileName, $html);
    }

    public function get()
    {
        return file_get_contents($this->fileName);
    }
}