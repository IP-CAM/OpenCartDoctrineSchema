<?php


/**
 * OcLocation
 */
class OcLocation
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $telephone;

    /**
     * @var string
     */
    private $fax;

    /**
     * @var string
     */
    private $geocode;

    /**
     * @var string
     */
    private $image;

    /**
     * @var string
     */
    private $open;

    /**
     * @var string
     */
    private $comment;

    /**
     * @var integer
     */
    private $locationId;

    public function __construct($name, $address, $telephone, $fax, $geocode, $open, $comment, $image = null)
    {
        $this->name = $name;
        $this->address = $address;
        $this->telephone = $telephone;
        $this->fax = $fax;
        $this->geocode = $geocode;
        $this->open = $open;
        $this->comment = $comment;
        $this->image = $image;
    }


}
