<?php

namespace Vendor\CustomOrderProcessing\Model\ResourceModel\StatusLogs;

/**
 * StatusLogs Collection Class
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'entity_id';

    /**
     * Initialize resource model
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init(
            \Vendor\CustomOrderProcessing\Model\StatusLogs::class,
            \Vendor\CustomOrderProcessing\Model\ResourceModel\StatusLogs::class
        );
        $this->_map['fields']['entity_id'] = 'main_table.entity_id';
    }
}

