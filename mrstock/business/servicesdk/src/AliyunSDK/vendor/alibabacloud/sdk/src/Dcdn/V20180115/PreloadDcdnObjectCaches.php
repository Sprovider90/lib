<?php

namespace AlibabaCloud\Dcdn\V20180115;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of PreloadDcdnObjectCaches
 *
 * @method string getArea()
 * @method string getSecurityToken()
 * @method string getObjectPath()
 * @method string getOwnerId()
 */
class PreloadDcdnObjectCaches extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'dcdn';

    /**
     * @var string
     */
    public $version = '2018-01-15';

    /**
     * @var string
     */
    public $action = 'PreloadDcdnObjectCaches';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'dcdn';

    /**
     * @deprecated deprecated since version 2.0, Use withArea() instead.
     *
     * @param string $area
     *
     * @return $this
     */
    public function setArea($area)
    {
        return $this->withArea($area);
    }

    /**
     * @param string $area
     *
     * @return $this
     */
    public function withArea($area)
    {
        $this->data['Area'] = $area;
        $this->options['query']['Area'] = $area;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSecurityToken() instead.
     *
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        return $this->withSecurityToken($securityToken);
    }

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function withSecurityToken($securityToken)
    {
        $this->data['SecurityToken'] = $securityToken;
        $this->options['query']['SecurityToken'] = $securityToken;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withObjectPath() instead.
     *
     * @param string $objectPath
     *
     * @return $this
     */
    public function setObjectPath($objectPath)
    {
        return $this->withObjectPath($objectPath);
    }

    /**
     * @param string $objectPath
     *
     * @return $this
     */
    public function withObjectPath($objectPath)
    {
        $this->data['ObjectPath'] = $objectPath;
        $this->options['query']['ObjectPath'] = $objectPath;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }
}
