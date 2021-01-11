<?php

namespace Robin\Bai2\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class InstallSchema implements \Magento\Framework\Setup\InstallSchemaInterface
{

	public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
	{
		$installer = $setup;
		$installer->startSetup();
		if (!$installer->tableExists('banner')) {
			$table = $installer->getConnection()->newTable(
				$installer->getTable('banner')
			)
				->addColumn(
					'id',
					Table::TYPE_INTEGER,
					null,
					[
						'identity' => true,
						'nullable' => false,
						'primary'  => true,
						'unsigned' => true,
					],
					'ID'
				)
				->addColumn(
					'image',
					Table::TYPE_TEXT,
					255,
					['nullable' => false],
					'Image'
				)
				->addColumn(
					'link',
					Table::TYPE_TEXT,
					255,
					[],
					'URL'
				)->setOption('chaset', 'utf8');
			$installer->getConnection()->createTable($table);
		}
		$installer->endSetup();
	}
}
