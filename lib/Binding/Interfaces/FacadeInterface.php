<?php

namespace Binding\Interfaces;

interface FacadeInterface
{

    private $class;
    private $property;

    public function generateProperty($class, $property);
    public function generate($class);

}