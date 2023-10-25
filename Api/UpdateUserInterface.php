<?php

namespace Abhinay\CustomApi\Api;

/**
 * Interface UpdateUserInterface
 * @package Abhinay\CustomApi\Api
 */
interface UpdateUserInterface
{
    /**
     * Alters a given Bussiness
     * @param int    $id
     * @param string[] $data
     * @return string Either 'success' or the exception message.
     */
    public function execute(
        $id,
        $data
    );
}