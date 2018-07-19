<?php

namespace Human;

Class Child extends Human
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
        $child = new Child();
        $child->setAge((int)$definition['age'] ?? '')
            ->setGender($definition['gender'] ?? '')
            ->setName($definition['name'] ?? '')
            ->setBrain($definition['brain'] ?? '')
            ->setEye(Eye::fromArray($definition['eye'] ?? []))
            ->setHair(Hair::fromArray($definition['hair'] ?? []));
        
        return $child;
    }
}