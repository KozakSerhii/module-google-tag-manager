<?php
/**
 * Copyright © Magefan (support@magefan.com). All rights reserved.
 * Please visit Magefan.com for license details (https://magefan.com/end-user-license-agreement).
 */

declare(strict_types=1);

namespace Magefan\GoogleTagManager\Api\DataLayer;

use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Session\SessionManager;

interface SessionDataLayerInterface
{
    /**
     * Get GTM datalayer
     *
     * @param SessionManager $order
     * @return array
     * @throws NoSuchEntityException
     */
    public function get(SessionManager $session): SessionManager;

    /**
     * @param SessionManager $session
     * @param array $data
     * @return void
     * @throws NoSuchEntityException
     */
    public function push(SessionManager $session, array $data): void;

}
