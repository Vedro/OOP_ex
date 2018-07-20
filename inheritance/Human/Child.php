<?php

namespace Human;


// class Child extends Leg;

class Child extends Human
{
    private $brain;

    public function getBrain() : string
    {
        return $this->brain;
    }

    public function setBrain(string $brain)

    {
        $this->brain = $brain;
        return $this;
    }

    public static function fromArray(array $definition)
    {
        
        $child = new child();
        $child->setQuality ($definition['color'] ?? '')
              ->setQuality($definition['quality'] ?? '');
        
        return $child;
    }

}



?>