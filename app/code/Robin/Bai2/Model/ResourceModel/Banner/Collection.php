<?php
namespace Robin\Bai2\Model\ResourceModel\Banner;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Robin\Bai2\Model\Banner', 'Robin\Bai2\Model\ResourceModel\Banner');
	}
}
