<?php

namespace Vendor\CustomOrderProcessing\Api;

/**
 * StatusLogsRepository Repository Interface
 */
interface StatusLogsRepositoryInterface
{
    /**
     * Save data
     *
     * @param array $data 
     * @return \Vendor\CustomOrderProcessing\Model\StatusLogs
     */
    public function saveData($data);
    /**
     * Get by id
     *
     * @param int $id
     * @return \Vendor\CustomOrderProcessing\Model\ResourceModel\StatusLogs\CollectionFactory
     */
    public function getByOrderId($orderId);
    /**
     * Get by id
     *
     * @param int $id
     * @return \Vendor\CustomOrderProcessing\Model\StatusLogs
     */
    public function getById($id);
    /**
     * Save
     *
     * @param \Vendor\CustomOrderProcessing\Model\StatusLogs $subject
     * @return \Vendor\CustomOrderProcessing\Model\StatusLogs
     */
    public function save(\Vendor\CustomOrderProcessing\Model\StatusLogs $subject);
    /**
     * Get list
     *
     * @param Magento\Framework\Api\SearchCriteriaInterface $creteria
     * @return Magento\Framework\Api\SearchResults
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $creteria);
    /**
     * Delete
     *
     * @param \Vendor\CustomOrderProcessing\Model\StatusLogs $subject
     * @return boolean
     */
    public function delete(\Vendor\CustomOrderProcessing\Model\StatusLogs $subject);
    /**
     * Delete by id
     *
     * @param int $id
     * @return boolean
     */
    public function deleteById($id);
}

