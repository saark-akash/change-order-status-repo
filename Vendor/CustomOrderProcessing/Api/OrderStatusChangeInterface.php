<?php

namespace Vendor\CustomOrderProcessing\Api;

interface OrderStatusChangeInterface {
    /**
     * Sets the status for a specified order.
     *
     * @param int $id The order ID.
     * @return string Order status.
     */
    public function setStatus($id);
}