<?php

namespace Solid\DependencyInversion\Model\Violation;

class AirpodsCheck
{
    /**
     * @var AirpodsPro
     */
    protected $airpods;

    /**
     * @param AirpodsPro $airpods
     */
    public function __construct(
        AirpodsPro $airpods
    ) {
        $this->airpods = $airpods;
    }

    /**
     * @param AirpodsPro $airpods
     */
    public function setAirpods(AirpodsPro $airpods)
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
