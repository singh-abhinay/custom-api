<?php

namespace Abhinay\CustomApi\Model;

use Abhinay\CustomApi\Api\BussinessRepositoryInterface;
use Abhinay\CustomApi\Model\BussinessFactory;
use Abhinay\CustomApi\Model\ResourceModel\Bussiness\CollectionFactory;
use Abhinay\CustomApi\Api\Data\UserInterfaceFactory;
use Magento\TestFramework\Exception\NoSuchActionException;

/**
 * Class Users
 * @package Abhinay\CustomApi\Model
 */
class Users implements BussinessRepositoryInterface
{
    /**
     * @var \Abhinay\CustomApi\Model\BussinessFactory
     */
    private $bussinessFactory;
    /**
     * @var CollectionFactory
     */
    private $collectionFactory;
    /**
     * @var UserInterfaceFactory
     */
    private $userInterfaceFactory;

    /**
     * Users constructor.
     * @param UserInterfaceFactory $userInterfaceFactory
     * @param \Abhinay\CustomApi\Model\BussinessFactory $bussinessFactory
     * @param CollectionFactory $CollectionFactory
     */
    public function __construct(
        UserInterfaceFactory $userInterfaceFactory,
        BussinessFactory $bussinessFactory,
        CollectionFactory $CollectionFactory)
    {
        $this->userInterfaceFactory = $userInterfaceFactory;
        $this->bussinessFactory = $bussinessFactory;
        $this->collectionFactory = $CollectionFactory;
    }

    /**
     * @param string[] $data
     * @return string
     */
    public function setUsers($data)
    {
        try {
            $model = $this->bussinessFactory->create();
            $model->setBussinessName($data['bussiness_name']);
            $model->setBussinessEmail($data['bussiness_email']);
            $model->setDescription($data['description']);
            $model->setRegistrationNumber($data['registration_number']);
            $model->save();
        } catch (\Exception $e) {
            return "Something went wrong " . $e->getMessage();
        }
        return 'Bussiness data saved successfully';
    }

    /**
     * @return array
     */
    public function getUsers()
    {
        $collection = $this->collectionFactory->create();
        return $collection->getData();
    }

    /**
     * @param int $id
     * @return \Abhinay\CustomApi\Api\Data\UserInterface
     */
    public function getBussinesById($id){
        $userInterface = $this->userInterfaceFactory->create();
        $bussiness= $this->bussinessFactory->create()->load($id);
        try{
            $userInterface->setId($bussiness->getId());
            $userInterface->setBussinessName($bussiness->getBussinessName());
            return $userInterface;
        } catch (\Exception $e){
            throw NoSuchActionException::singleField("id", $id);
        }
    }
}