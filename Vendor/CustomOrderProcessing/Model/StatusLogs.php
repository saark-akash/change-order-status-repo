<?php

namespace Vendor\CustomOrderProcessing\Model;

/**
 * StatusLogs Model Class
 */
class StatusLogs extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface, \Vendor\CustomOrderProcessing\Api\Data\StatusLogsInterface
{
    final public const NOROUTE_ENTITY_ID = 'no-route';

    final public const CACHE_TAG = 'vendor_customorderprocessing_statuslogs';

    protected $_cacheTag = 'vendor_customorderprocessing_statuslogs';

    protected $_eventPrefix = 'vendor_customorderprocessing_statuslogs';

    /**
     * Set resource model
     */
    public function _construct()
    {
        $this->_init(\Vendor\CustomOrderProcessing\Model\ResourceModel\StatusLogs::class);
    }

    /**
     * Load No-Route Indexer.
     *
     * @return $this
     */
    public function noRouteReasons()
    {
        return $this->load(self::NOROUTE_ENTITY_ID, $this->getIdFieldName());
    }

    /**
     * Get identities.
     *
     * @return []
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG.'_'.$this->getId()];
    }

    /**
     * Set EntityId
     *
     * @param int $entityId
     * @return \Vendor\CustomOrderProcessing\Model\StatusLogsInterface
     */
    public function setEntityId($entityId)
    {
        return $this->setData(self::ENTITY_ID, $entityId);
    }

    /**
     * Get EntityId
     *
     * @return int
     */
    public function getEntityId()
    {
        return parent::getData(self::ENTITY_ID);
    }

    /**
     * Set OrderId
     *
     * @param int $orderId
     * @return \Vendor\CustomOrderProcessing\Model\StatusLogsInterface
     */
    public function setOrderId($orderId)
    {
        return $this->setData(self::ORDER_ID, $orderId);
    }

    /**
     * Get OrderId
     *
     * @return int
     */
    public function getOrderId()
    {
        return parent::getData(self::ORDER_ID);
    }

    /**
     * Set OldStatus
     *
     * @param string $oldStatus
     * @return \Vendor\CustomOrderProcessing\Model\StatusLogsInterface
     */
    public function setOldStatus($oldStatus)
    {
        return $this->setData(self::OLD_STATUS, $oldStatus);
    }

    /**
     * Get OldStatus
     *
     * @return string
     */
    public function getOldStatus()
    {
        return parent::getData(self::OLD_STATUS);
    }

    /**
     * Set NewStatus
     *
     * @param string $newStatus
     * @return \Vendor\CustomOrderProcessing\Model\StatusLogsInterface
     */
    public function setNewStatus($newStatus)
    {
        return $this->setData(self::NEW_STATUS, $newStatus);
    }

    /**
     * Get NewStatus
     *
     * @return string
     */
    public function getNewStatus()
    {
        return parent::getData(self::NEW_STATUS);
    }

    /**
     * Set CreatedAt
     *
     * @param string $createdAt
     * @return \Vendor\CustomOrderProcessing\Model\StatusLogsInterface
     */
    public function setCreatedAt($createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    /**
     * Get CreatedAt
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return parent::getData(self::CREATED_AT);
    }
}

