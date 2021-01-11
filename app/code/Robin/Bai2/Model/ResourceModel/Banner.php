<?php
namespace Robin\Bai2\Model\ResourceModel;

class Banner extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
	{
		$this->_init('banner', 'id');
	}
}
