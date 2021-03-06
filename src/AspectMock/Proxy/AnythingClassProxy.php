<?php
namespace AspectMock\Proxy;


class AnythingClassProxy extends ClassProxy {

    public function __construct($class_name)
    {
        $this->className = $class_name;
        $this->reflected = new \ReflectionClass('AspectMock\Proxy\Anything');
    }

    public function defined()
    {
       return false;
    }

    public function construct()
    {
        return new Anything($this->className);
    }

    public function make()
    {
        return new Anything($this->className);
    }

    public function interfaces()
    {
        return array();
    }

    public function hasMethod()
    {
        return false;
    }

}