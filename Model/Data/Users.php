<?php


namespace Abhinay\CustomApi\Model\Data;

use \Abhinay\CustomApi\Api\Data\UserInterface;
use \Magento\Framework\DataObject;

/**
 * Class Users
 * @package Abhinay\CustomApi\Model\Data
 */
class Users extends DataObject implements UserInterface {

    /**
     * @return int
     */
    public function getId(){
        return $this->getData('id');
    }

    /**
     * @param int $id
     * @return $this
     */
    public function setId($id){
        return $this->setData('id', $id);
    }


    /**
     * @return string
     */
    public function getBussinessName(){
        return $this->getData('bussiness_name');
    }

    /**
     * @param string $bussinessName
     * @return $this
     */
    public function setBussinessName($bussinessName){
        return $this->setData('bussiness_name', $bussinessName);
    }

    /**
     * @return string
     */
    public function getBussinessEmail(){
        return $this->getData('bussiness_email');
    }

    /**
     * @param string $bussinessEmail
     * @return $this
     */
    public function setBussinessEmail($bussinessEmail){
        return $this->setData('bussiness_email', $bussinessEmail);
    }


    /**
     * @return string
     */
    public function getDescription(){
        return $this->getData('description');
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description){
        return $this->setData('description', $description);
    }

    /**
     * @return int
     */
    public function getRegistrationNumber(){
        return $this->getData('registration_number');
    }

    /**
     * @param int $registrationNumber
     * @return $this
     */
    public function setRegistrationNumber($registrationNumber){
        return $this->setData('registration_number', $registrationNumber);
    }
}