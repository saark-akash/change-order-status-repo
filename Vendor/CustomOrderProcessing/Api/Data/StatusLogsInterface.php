<?php

namespace Vendor\CustomOrderProcessing\Api\Data;

/**
 * StatusLogs Model Interface
 */
interface StatusLogsInterface
{
    public const ENTITY_ID = 'entity_id';

    public const ORDER_ID = 'order_id';

    public const OLD_STATUS = 'old_status';

    public const NEW_STATUS = 'new_status';

    public const CREATED_AT = 'created_at';

    /**
     * Set EntityId
     *
     * @param int $entityId
     * @return \Vendor\CustomOrderProcessing\Api\Data\StatusLogsInterface
     */
    public function setEntityId($entityId);
    /**
     * Get EntityId
     *
     * @return int
     */
    public function getEntityId();
    /**
     * Set OrderId
     *
     * @param int $orderId
     * @return \Vendor\CustomOrderProcessing\Api\Data\StatusLogsInterface
     */
    public function setOrderId($orderId);
    /**
     * Get OrderId
     *
     * @return int
     */
    public function getOrderId();
    /**
     * Set OldStatus
     *
     * @param string $oldStatus
     * @return \Vendor\CustomOrderProcessing\Api\Data\StatusLogsInterface
     */
    public function setOldStatus($oldStatus);
    /**
     * Get OldStatus
     *
     * @return string
     */
    public function getOldStatus();
    /**
     * Set NewStatus
     *
     * @param string $newStatus
     * @return \Vendor\CustomOrderProcessing\Api\Data\StatusLogsInterface
     */
    public function setNewStatus($newStatus);
    /**
     * Get NewStatus
     *
     * @return string
     */
    public function getNewStatus();
    /**
     * Set CreatedAt
     *
     * @param string $createdAt
     * @return \Vendor\CustomOrderProcessing\Api\Data\StatusLogsInterface
     */
    public function setCreatedAt($createdAt);
    /**
     * Get CreatedAt
     *
     * @return string
     */
    public function getCreatedAt();
}

