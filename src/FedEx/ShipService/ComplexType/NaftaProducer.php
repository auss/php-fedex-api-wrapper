<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This element is currently not supported and is for the future use.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class NaftaProducer
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'NaftaProducer';

    /**
     * Set Id
     *
     * @param string $id
     * return NaftaProducer
     */
    public function setId($id)
    {
        $this->Id = $id;
        return $this;
    }
    
    /**
     * Set Producer
     *
     * @param Party $producer
     * return NaftaProducer
     */
    public function setProducer(Party $producer)
    {
        $this->Producer = $producer;
        return $this;
    }
    

    
}