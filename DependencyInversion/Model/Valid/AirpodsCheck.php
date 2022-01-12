<?php

namespace Solid\DependencyInversion\Model\Valid;

class AirpodsCheck
{
    /**
     * @var Airpods
     */
    protected $airpods;

    /**
     * @param Airpods $airpods
     */
    public function __construct(
        Airpods $airpods
    ) {
        $this->airpods = $airpods;
    }

    /**
     * @param Airpods $airpods
     */
    public function setAirpods(Airpods $airpods)
    {
        $this->airpods = $airpods;
    }

    /**
     * @return void
     */
    public function noiseCancellation()
    {
       $this->airpods->NoiseCancellation();
    }
}
