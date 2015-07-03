<?php

namespace Binding\Annotations;

class AnnotationException extends \Exception
{
    function __construct($message = "", $code = 0) {

        $this->message = "A Exception occours in Binding library. ".$message;
        $this->code = $code;
    }
}