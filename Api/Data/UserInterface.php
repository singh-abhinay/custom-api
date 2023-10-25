<?php

namespace Abhinay\CustomApi\Api\Data;

/**
 * Interface UserInterface
 * @package Abhinay\CustomApi\Api\Data
 */
interface UserInterface {

    /**
     * @return int
     */
    public function getId();

    /**
     * @param int $id
     * @return $this
     */
    public function setId($id);


    /**
     * @return string
     */
    public function getBussinessName();

    /**
     * @param string $bussinessName
     * @return $this
     */
    public function setBussinessName($bussinessName);

    /**
     * @return string
     */
    public function getBussinessEmail();

    /**
     * @param string $bussinessEmail
     * @return $this
     */
    public function setBussinessEmail($bussinessEmail);


    /**
     * @return string
     */
    public function getDescription();

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description);

    /**
     * @return int
     */
    public function getRegistrationNumber();

    /**
     * @param int $registrationNumber
     * @return $this
     */
    public function setRegistrationNumber($registrationNumber);

}