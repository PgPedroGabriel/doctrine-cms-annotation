<?php

namespace Binding\Annotations;
class AnnotationReader
{

    private $_reader;

    public function __construct()
    {
        $this->_reader = new \Doctrine\Common\Annotations\AnnotationReader();
    }

    public function Inputs($class)
    {
        $ref = new \ReflectionClass($class);

        $properties = $ref->getProperties();

        foreach ($properties as $p)
        {
            $annotations = $this->_reader->getPropertyAnnotations($p);

            foreach ($annotations as $annotation)
            {
                var_dump($annotation);
            }

        }
        die();
    }
}