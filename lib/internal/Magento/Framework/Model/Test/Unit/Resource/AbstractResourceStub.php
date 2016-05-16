<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Framework\Model\Test\Unit\Resource;

use Magento\Framework\Object;
use Magento\Framework\Model\Resource\AbstractResource;

class AbstractResourceStub extends AbstractResource
{
    /**
     * Resource initialization
     *
     * @return void
     */
    protected function _construct()
    {
        return null;
    }

    /**
     * Retrieve connection for read data
     *
     * @return \Magento\Framework\DB\Adapter\AdapterInterface
     */
    protected function _getReadAdapter()
    {
        return null;
    }

    /**
     * Retrieve connection for write data
     *
     * @return \Magento\Framework\DB\Adapter\AdapterInterface
     */
    protected function _getWriteAdapter()
    {
        return null;
    }

    /**
     * Get connection
     *
     * @return \Magento\Framework\DB\Adapter\AdapterInterface
     */
    protected function getConnection()
    {
        return null;
    }

    /**
     * @param Object $object
     * @param string $field
     * @param null $defaultValue
     * @param bool $unsetEmpty
     * @return $this
     */
    public function _serializeField(Object $object, $field, $defaultValue = null, $unsetEmpty = false)
    {
        return parent::_serializeField($object, $field, $defaultValue, $unsetEmpty);
    }

    /**
     * @param Object $object
     * @param string $field
     * @param null $defaultValue
     */
    public function _unserializeField(Object $object, $field, $defaultValue = null)
    {
        parent::_unserializeField($object, $field, $defaultValue);
    }
}
