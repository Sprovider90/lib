<?php

namespace AlibabaCloud\Eci\V20180808;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeContainerLog
 *
 * @method string getResourceOwnerId()
 * @method string getContainerName()
 * @method string getStartTime()
 * @method string getContainerGroupId()
 * @method string getResourceOwnerAccount()
 * @method string getTail()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 */
class DescribeContainerLog extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Eci';

    /**
     * @var string
     */
    public $version = '2018-08-08';

    /**
     * @var string
     */
    public $action = 'DescribeContainerLog';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'eci';

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
     * @deprecated deprecated since version 2.0, Use withContainerName() instead.
     *
     * @param string $containerName
     *
     * @return $this
     */
    public function setContainerName($containerName)
    {
        return $this->withContainerName($containerName);
    }

    /**
     * @param string $containerName
     *
     * @return $this
     */
    public function withContainerName($containerName)
    {
        $this->data['ContainerName'] = $containerName;
        $this->options['query']['ContainerName'] = $containerName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStartTime() instead.
     *
     * @param string $startTime
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        return $this->withStartTime($startTime);
    }

    /**
     * @param string $startTime
     *
     * @return $this
     */
    public function withStartTime($startTime)
    {
        $this->data['StartTime'] = $startTime;
        $this->options['query']['StartTime'] = $startTime;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withContainerGroupId() instead.
     *
     * @param string $containerGroupId
     *
     * @return $this
     */
    public function setContainerGroupId($containerGroupId)
    {
        return $this->withContainerGroupId($containerGroupId);
    }

    /**
     * @param string $containerGroupId
     *
     * @return $this
     */
    public function withContainerGroupId($containerGroupId)
    {
        $this->data['ContainerGroupId'] = $containerGroupId;
        $this->options['query']['ContainerGroupId'] = $containerGroupId;

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
     * @deprecated deprecated since version 2.0, Use withTail() instead.
     *
     * @param string $tail
     *
     * @return $this
     */
    public function setTail($tail)
    {
        return $this->withTail($tail);
    }

    /**
     * @param string $tail
     *
     * @return $this
     */
    public function withTail($tail)
    {
        $this->data['Tail'] = $tail;
        $this->options['query']['Tail'] = $tail;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOwnerAccount() instead.
     *
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        return $this->withOwnerAccount($ownerAccount);
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function withOwnerAccount($ownerAccount)
    {
        $this->data['OwnerAccount'] = $ownerAccount;
        $this->options['query']['OwnerAccount'] = $ownerAccount;

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
