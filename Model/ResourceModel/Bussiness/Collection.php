<?php

namespace Abhinay\CustomApi\Model\ResourceModel\Bussiness;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Class Collection
 * @package Abhinay\CustomApi\Model\ResourceModel\Bussiness
 */
class Collection extends AbstractCollection
{
    protected $_idFieldName = 'id';

    public function _construct()
    {
        $this->_init(
            'Abhinay\CustomApi\Model\Bussiness',
            'Abhinay\CustomApi\Model\ResourceModel\Bussiness'
        );
    }
}
