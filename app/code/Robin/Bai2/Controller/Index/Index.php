<?php

namespace Robin\Bai2\Controller\Index;

use Robin\Bai2\Model\Banner;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;

    public function __construct(
		\Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory
        )
	{
        $this->_pageFactory = $pageFactory;
		return parent::__construct($context);
    }

    public function execute()
    {
        /**
         * Insert data
         */
        $banner = $this->_objectManager->create(Banner::class);
        $banner->addData([
            'link'       => 'Banner link',
            'image'      => 'image.png',
            'sort_order' => 1,
            'status'     => true
        ])->save();
        echo 'Created';

        /**
         * Load Data by Id
         */
        // $banner = $this->_objectManager->create(Banner::class);
        // echo "<pre>";
        // print_r($banner->load(1)->getData());
        // echo "</pre>";

        /**
         * Update
         */
        // $banner = $this->_objectManager->create(Banner::class);
        // $data = $banner->load(1);
        // $data->setLink('Link updated 123')->save();
        // echo 'updated';

        /**
         * Update
         */
        // $banner = $this->_objectManager->create(Banner::class);
        // $data = $banner->load(3);
        // $data->delete();
        // echo 'Deleted';
    }
}
