<?php


/**
 * OcZone
 */
class OcZone
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $code;

    /**
     * @var boolean
     */
    private $status = '1';

    /**
     * @var integer
     */
    private $zoneId;

    /**
     * @var \OcCountry
     */
    private $country;

    public function __construct(OcCountry $country, $name, $code, $status)
    {
        $this->country = $country;
        $this->name = $name;
        $this->code = $code;
        $this->status = $status;
    }


}
