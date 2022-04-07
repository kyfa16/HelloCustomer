<?php

namespace FandyComposer\BelajarComposerLibrary;

class Customer {

    public function __construct(public string $name = "Guest") {        
    }

    public function sayHello(string $name) : string {
        return "Hello customer $name, my name is {$this->name}" . PHP_EOL;
    }

}