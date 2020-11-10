<?php

namespace AlibabaCloud\RKvstore\V20150101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeReplicaUsage
 *
 * @method string getResourceOwnerId()
 * @method string getSourceDBInstanceId()
 * @method string getDestinationDBInstanceId()
 * @method string getSecurityToken()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getReplicaId()
 * @method string getOwnerId()
 */
class DescribeReplicaUsage extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'R-kvstore';

    /**
     * @var string
     */
    public $version = '2015-01-01';

    /**
     * @var string
     */
    public $action = 'DescribeReplicaUsage';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'redisa';

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
     * @deprecated deprecated since version 2.0, Use withSourceDBInstanceId() instead.
     *
     * @param string $sourceDBInstanceId
     *
     * @return $this
     */
    public function setSourceDBInstanceId($sourceDBInstanceId)
    {
        return $this->withSourceDBInstanceId($sourceDBInstanceId);
    }

    /**
     * @param string $sourceDBInstanceId
     *
     * @return $this
     */
    public function withSourceDBInstanceId($sourceDBInstanceId)
    {
        $this->data['SourceDBInstanceId'] = $sourceDBInstanceId;
        $this->options['query']['SourceDBInstanceId'] = $sourceDBInstanceId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDestinationDBInstanceId() instead.
     *
     * @param string $destinationDBInstanceId
     *
     * @return $this
     */
    public function setDestinationDBInstanceId($destinationDBInstanceId)
    {
        return $this->withDestinationDBInstanceId($destinationDBInstanceId);
    }

    /**
     * @param string $destinationDBInstanceId
     *
     * @return $this
     */
    public function withDestinationDBInstanceId($destinationDBInstanceId)
    {
        $this->data['DestinationDBInstanceId'] = $destinationDBInstanceId;
        $this->options['query']['DestinationDBInstanceId'] = $destinationDBInstanceId;

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
     * @deprecated deprecated since version 2.0, Use withReplicaId() instead.
     *
     * @param string $replicaId
     *
     * @return $this
     */
    public function setReplicaId($replicaId)
    {
        return $this->withReplicaId($replicaId);
    }

    /**
     * @param string $replicaId
     *
     * @return $this
     */
    public function withReplicaId($replicaId)
    {
        $this->data['ReplicaId'] = $replicaId;
        $this->options['query']['ReplicaId'] = $replicaId;

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
