<?php

namespace Vendor\CustomOrderProcessing\Model;

/**
 * StatusLogsRepository Repo Class
 */
class StatusLogsRepository implements \Vendor\CustomOrderProcessing\Api\StatusLogsRepositoryInterface
{
    protected $modelFactory = null;

    protected $collectionFactory = null;

    /**
     * Initialize
     *
     * @param \Vendor\CustomOrderProcessing\Model\StatusLogsFactory $modelFactory
     * @param
     * \Vendor\CustomOrderProcessing\Model\ResourceModel\StatusLogs\CollectionFactory
     * $collectionFactory
     */
    public function __construct(\Vendor\CustomOrderProcessing\Model\StatusLogsFactory $modelFactory, \Vendor\CustomOrderProcessing\Model\ResourceModel\StatusLogs\CollectionFactory $collectionFactory)
    {
        $this->modelFactory = $modelFactory;
        $this->collectionFactory = $collectionFactory;
    }
    /**
     * Save data
     *
     * @param array $data 
     * @return \Vendor\CustomOrderProcessing\Model\StatusLogs
     */
    public function saveData($data)
    {
        $model = $this->modelFactory->create()->setData($data);
        return $this->save($model);
    }
    /**
     * Get by id
     *
     * @param int $id
     * @return \Vendor\CustomOrderProcessing\Model\ResourceModel\StatusLogs\CollectionFactory
     */
    public function getByOrderId($orderId)
    {
        $model = $this->collectionFactory->create()->addFieldToFilter("order_id", $orderId);
        return $model;
    }
    /**
     * Get by id
     *
     * @param int $id
     * @return \Vendor\CustomOrderProcessing\Model\StatusLogs
     */
    public function getById($id)
    {
        $model = $this->modelFactory->create()->load($id);
        if (!$model->getId()) {
            throw new \Magento\Framework\Exception\NoSuchEntityException(
                __('The data with the "%1" ID doesn\'t exist.', $id)
            );
        }
        return $model;
    }

    /**
     * Save
     *
     * @param \Vendor\CustomOrderProcessing\Model\StatusLogs $subject
     * @return \Vendor\CustomOrderProcessing\Model\StatusLogs
     */
    public function save(\Vendor\CustomOrderProcessing\Model\StatusLogs $subject)
    {
        try {
            $subject->save();
        } catch (\Exception $exception) {
             throw new \Magento\Framework\Exception\CouldNotSaveException(__($exception->getMessage()));
        }
        return $subject;
    }

    /**
     * Get list
     *
     * @param Magento\Framework\Api\SearchCriteriaInterface $creteria
     * @return Magento\Framework\Api\SearchResults
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $creteria)
    {
        $collection = $this->collectionFactory->create();
        return $collection;
    }

    /**
     * Delete
     *
     * @param \Vendor\CustomOrderProcessing\Model\StatusLogs $subject
     * @return boolean
     */
    public function delete(\Vendor\CustomOrderProcessing\Model\StatusLogs $subject)
    {
        try {
            $subject->delete();
        } catch (\Exception $exception) {
            throw new \Magento\Framework\Exception\CouldNotDeleteException(__($exception->getMessage()));
        }
        return true;
    }

    /**
     * Delete by id
     *
     * @param int $id
     * @return boolean
     */
    public function deleteById($id)
    {
        return $this->delete($this->getById($id));
    }
}

