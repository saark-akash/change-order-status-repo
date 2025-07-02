<?php

namespace Vendor\CustomOrderProcessing\Model\Service;
use Vendor\CustomOrderProcessing\Api\OrderStatusChangeInterface;
use Magento\Framework\Webapi\Rest\Request;

Class OrderChangeStatusService implements OrderStatusChangeInterface
{
    protected $request;
    protected $eventManager;
    /**
     * @var \Magento\Sales\Api\OrderRepositoryInterface
     */
    protected $orderRepository;
    /**
     * Constructor 
     * 
     * @param Request $request
     * @param \Magento\Framework\Event\ManagerInterface $eventManager
     * @param \Magento\Sales\Api\OrderRepositoryInterface $orderRepository
     */
    public function __construct(
        Request $request,
        \Magento\Framework\Event\ManagerInterface $eventManager,
        \Magento\Sales\Api\OrderRepositoryInterface $orderRepository
    )
    {
        $this->eventManager = $eventManager;
        $this->orderRepository = $orderRepository;
        $this->request = $request;
    }
    /**
     * @inheritDoc
     */
    public function setStatus($id){
        try {
            $params = $this->request->getBodyParams();
            $order = $this->orderRepository->get($id);
            $oldStatus = $order->getStatus();
            $order->setStatus($params["status"])->save();
            $this->eventManager->dispatch(
                'sales_order_status_change_after',
                ['order' => $order, 'old_status' => $oldStatus]
            );
            return $order->getStatus();
        } catch(\Exception $e){
            return $e->getMessage();
        }
    }
}