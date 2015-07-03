<?php

namespace Binding\Annotations;

use Doctrine\Common\Annotations\Annotation;

/**
 * @Annotation
 */
class Input extends Annotation
{
    public $type;
    public $name;
    public $label;
    public $required = true;
}