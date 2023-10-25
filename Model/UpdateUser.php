<?php

namespace Abhinay\CustomApi\Model;

use Abhinay\CustomApi\Model\BussinessFactory;
use Abhinay\CustomApi\Model\ResourceModel\Bussiness\CollectionFactory;

/**
 * Class UpdateUser
 * @package Abhinay\CustomApi\Model
 */
class UpdateUser extends \Magento\Framework\Model\AbstractModel implements \Abhinay\CustomApi\Api\UpdateUserInterface
{
    /**
     * @var \Abhinay\CustomApi\Model\BussinessFactory
     */
    private $bussinessFactory;
    /**
     * @var CollectionFactory
     */
    private $CollectionFactory;

    /**
     * UpdateUser constructor.
     * @param \Abhinay\CustomApi\Model\BussinessFactory $bussinessFactory
     * @param CollectionFactory $CollectionFactory
     */
    public function __construct(
        BussinessFactory $bussinessFactory,
        CollectionFactory $CollectionFactory)
    {
        $this->bussinessFactory = $bussinessFactory;
        $this->CollectionFactory = $CollectionFactory;
    }

    /**
     * @param int $id
     * @param string[] $data
     * @return string
     */
    public function execute($id, $data)
    {
        try {
            $model = $this->bussinessFactory->create()->load($id);
            if (isset($data['bussiness_name'])){
                $model->setBussinessName($data['bussiness_name']);
            }
            if (isset($data['bussiness_email'])){
                $model->setBussinessEmail($data['bussiness_email']);
            }
            if (isset($data['description'])){
                $model->setDescription($data['description']);
            }
            if (isset($data['registration_number'])){
                $model->setRegistrationNumber($data['registration_number']);
            }
            $model->save();
        } catch (\Exception $e) {
            return "Something went wrong while updating the record" . $e->getMessage();
        }
        return 'Bussiness data updated successfully';
    }
}