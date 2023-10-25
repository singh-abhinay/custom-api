<?php

namespace Abhinay\CustomApi\Api;

use Magento\TestFramework\Exception\NoSuchActionException;

/**
 * Interface BussinessRepositoryInterface
 * @package Abhinay\CustomApi\Api
 */
interface BussinessRepositoryInterface
{
    /**
     * GET for Post api
     * @return string[]
     */

    public function getUsers();

    /**
     * Post api
     * @param string[] $data
     * @return string
     */

    public function setUsers($data);


    /**
     * @param int $id
     * @return \Abhinay\CustomApi\Api\Data\UserInterface
     * @throws NoSuchActionException
     */
    public function getBussinesById($id);

}