<?php

namespace Solid\InterfaceSegregation\Model\Valid;

class Motorcycle implements TwoWheeler, \Solid\InterfaceSegregation\Model\Valid\Vehicle
{
    public function twoWheels()
    {
        // TODO: Implement twoWheels() method.
    }

    public function useGas()
    {
        // TODO: Implement useGas() method.
    }

    public function useElectric()
    {
        // TODO: Implement useElectric() method.
    }
}
