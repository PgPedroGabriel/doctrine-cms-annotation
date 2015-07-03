<?php

namespace Binding\Html;

class HtmlException extends Exception
{
    function __construct($message = "An Html exception", $code = 100) {
        $this->message = $message;
        $this->code = $code;
    }
}