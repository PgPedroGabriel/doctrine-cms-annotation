<?php

namespace Binding\Annotations;

use Doctrine\Common\Annotations\AnnotationRegistry;

abstract class AnnotationRegister
{

    public function register()
    {

        AnnotationRegistry::registerFile("../vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/DoctrineAnnotations.php");

        AnnotationRegistry::registerLoader(function($class) {
            $file = str_replace("\\", DIRECTORY_SEPARATOR, $class) . ".php";
            if (file_exists("../lib/" . $file)) {
                // file exists makes sure that the loader fails silently
                require "../lib/" . $file;
            }
        });

        return;
    }
}