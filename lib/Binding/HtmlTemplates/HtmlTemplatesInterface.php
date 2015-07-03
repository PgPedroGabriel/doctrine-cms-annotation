<?php

namespace Binding\HtmlTemplates;

interface HtmlTemplatesInterface
{
    private $fileName;

    public function get();
    public function set($html);
}