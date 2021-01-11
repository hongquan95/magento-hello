<?php

namespace Robin\Bai2\Controller\Index;

use Robin\Bai2\Model\Banner;

class Test extends \Magento\Framework\App\Action\Action
{
    protected $bannerFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Robin\Bai2\Model\BannerFactory $bannerFactory
    )
    {
        $this->bannerFactory = $bannerFactory;
		return parent::__construct($context);
    }

    public function execute()
    {
        //Create banner factory
        $banner = $this->bannerFactory->create();

        $collection = $banner->getCollection();

        // SELECT * from banner where id  20
        $data = $collection
            ->addFieldToSelect(['id', 'image'])
            ->addFieldToFilter('id', ['lteq' => 10])
            ->getSelect();
            // ->getData();
        echo ($data);
        exit;

        foreach($data as $item){
            echo "<pre>";
            print_r($item);
            echo "</pre>";
		}
    }
}
