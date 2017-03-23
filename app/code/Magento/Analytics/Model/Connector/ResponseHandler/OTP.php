<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Analytics\Model\Connector\ResponseHandler;

use Magento\Analytics\Model\Connector\Http\ResponseHandlerInterface;

/**
 * Class OTP
 */
class OTP implements ResponseHandlerInterface
{
    /**
     * @param array $responseBody
     *
     * @return bool|string
     */
    public function handleResponse(array $responseBody)
    {
        return !empty($responseBody['otp']) ? $responseBody['otp'] : false;
    }
}
