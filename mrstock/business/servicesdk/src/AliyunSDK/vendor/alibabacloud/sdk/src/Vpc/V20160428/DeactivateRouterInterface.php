<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeactivateRouterInterface
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method string getRouterInterfaceId()
 */
class DeactivateRouterInterface extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Vpc';

    /**
     * @var string
     */
    public $version = '2016-04-28';

    /**
     * @var string
     */
    public $action = 'DeactivateRouterInterface';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vpc';

    /**
     * @deprecated deprecated since version 2.0, Use withResourceOwnerId() instead.
     *
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        return $this->withResourceOwnerId($resourceOwnerId);
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceOwnerAccount() instead.
     *
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        return $this->withResourceOwnerAccount($resourceOwnerAccount);
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function withResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->data['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->options['query']['ResourceOwnerAccount'] = $resourceOwnerAccount;

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

    /**
     * @deprecated deprecated since version 2.0, Use withRouterInterfaceId() instead.
     *
     * @param string $routerInterfaceId
     *
     * @return $this
     */
    public function setRouterInterfaceId($routerInterfaceId)
    {
        return $this->withRouterInterfaceId($routerInterfaceId);
    }

    /**
     * @param string $routerInterfaceId
     *
     * @return $this
     */
    public function withRouterInterfaceId($routerInterfaceId)
    {
        $this->data['RouterInterfaceId'] = $routerInterfaceId;
        $this->options['query']['RouterInterfaceId'] = $routerInterfaceId;

        return $this;
    }
}
