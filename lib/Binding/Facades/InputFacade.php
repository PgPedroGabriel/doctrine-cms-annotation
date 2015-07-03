<?php

namespace Binding\Facades;
abstract class InputFacade implements \Binding\Interfaces\FacadeInterface
{

    private $_class;
    private $_property;

    public function generate($class)
    {
        $reader = new \Binding\Annotations\AnnotationReader();

        $inputsProperties = $reader->Inputs($class);

    }

    public function generateProperty($class, $property)
    {
    }
}