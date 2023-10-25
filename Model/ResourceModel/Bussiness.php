<?php

namespace Abhinay\CustomApi\Model\ResourceModel;

/**
 * Class Bussiness
 * @package Abhinay\CustomApi\Model\ResourceModel
 */
class Bussiness extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected $_idFieldName = 'id';

    public function _construct()
    {
        $this->_init("bussiness_details", "id");
    }
}
