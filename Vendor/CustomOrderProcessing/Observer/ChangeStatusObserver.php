<?php

declare(strict_types=1);

namespace Vendor\CustomOrderProcessing\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Sales\Api\OrderRepositoryInterface;
use Magento\Sales\Model\Order\Email\Sender\OrderSender;
use Vendor\CustomOrderProcessing\Api\StatusLogsRepositoryInterface;

class ChangeStatusObserver implements ObserverInterface
{
    /**
     * @var OrderRepositoryInterface
     */
    private $orderRepository;
    /**
     * @var OrderSender
     */
    protected $orderSender;
    protected $statusLogs;
    /**
     * AssignOrderToCustomerObserver constructor.
     *
     * @param StatusLogsRepositoryInterface $statusLogs
     * @param OrderSender $orderSender,
     * @param OrderRepositoryInterface $orderRepository
     */
    public function __construct(
        StatusLogsRepositoryInterface $statusLogs,
        OrderSender $orderSender,
        OrderRepositoryInterface $orderRepository
    ) {
        $this->statusLogs = $statusLogs;
        $this->orderSender = $orderSender;
        $this->orderRepository = $orderRepository;
    }

    /**
     * @inheritdoc
     */
    public function execute(Observer $observer)
    {
        try {
            $order = $observer->getOrder();
            $oldStatus = $observer->getData('old_status');
            $orderId = $order->getId();
            $orderStatus = $order->getStatus();
            $array = [
                "order_id" => $order->getId(),
                "old_status" => $oldStatus,
                "new_status" => $orderStatus
            ];
            $stat = $this->statusLogs->getByOrderId($orderId);
            if (is_null($stat)) {
                $this->statusLogs->saveData($array);
            } else {
                $this->statusLogs->deleteById($stat->getFirstItem()->getId());
                $this->statusLogs->saveData($array);
            }
            if ($orderStatus == "shipped")
            $this->orderSender->send($order);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}