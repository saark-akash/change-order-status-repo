<?php

namespace Vendor\CustomOrderProcessing\Model\ResourceModel;

/**
 * StatusLogs RosourceModel Class
 */
class StatusLogs extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init("change_status_logs", "entity_id");
    }
}

