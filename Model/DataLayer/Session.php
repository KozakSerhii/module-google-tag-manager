<?php
/**
 * Copyright © Magefan (support@magefan.com). All rights reserved.
 * Please visit Magefan.com for license details (https://magefan.com/end-user-license-agreement).
 */

namespace Magefan\GoogleTagManager\Model\DataLayer;

use Magefan\GoogleTagManager\Api\DataLayer\SessionDataLayerInterface;
use Magento\Framework\Session\SessionManager;

/**
 * Abstract management model
 */
class Session implements SessionDataLayerInterface
{

    /**
     * @param SessionManager $session
     * @param array $data
     */
    public function push(SessionManager $session, array $data): void
    {
        $dataLayer = $session->getData('dataLayer');
        $dataLayer = array_merge($dataLayer, $data);
        $session->setData('dataLayer', $dataLayer);
    }

    /**
     * @param SessionManager $session
     * @return SessionManager
     */
    public function get(SessionManager $session): SessionManager
    {
        if ($session) {
            return $session->getData('dataLayer');
        }
        return [];
    }
}
