<?php


/**
 * OcProductDiscount
 */
class OcProductDiscount
{

    /**
     * @var integer
     */
    private $quantity = '0';

    /**
     * @var integer
     */
    private $priority = '1';

    /**
     * @var string
     */
    private $price = '0.0000';

    /**
     * @var \DateTime
     */
    private $dateStart = '0000-00-00';

    /**
     * @var \DateTime
     */
    private $dateEnd = '0000-00-00';

    /**
     * @var integer
     */
    private $productDiscountId;

    /**
     * @var \OcCustomerGroup
     */
    private $customerGroup;

    /**
     * @var \OcProduct
     */
    private $product;

    public function __construct(OcCustomerGroup $customerGroup, OcProduct $product, $quantity, $priority, $price, $dateStart, $dateEnd)
    {
        $this->customerGroup = $customerGroup;
        $this->product = $product;
        $this->quantity = $quantity;
        $this->priority = $priority;
        $this->price = $price;
        $this->dateStart = $dateStart;
        $this->dateEnd = $dateEnd;
    }


}
