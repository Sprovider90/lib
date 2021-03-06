<?php

namespace AlibabaCloud\Dds\V20151201;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyReplicaMode
 *
 * @method string getDomainMode()
 * @method string getResourceOwnerId()
 * @method string getPrimaryInstanceId()
 * @method string getReplicaMode()
 * @method string getSecurityToken()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getReplicaId()
 * @method string getOwnerId()
 */
class ModifyReplicaMode extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Dds';

    /**
     * @var string
     */
    public $version = '2015-12-01';

    /**
     * @var string
     */
    public $action = 'ModifyReplicaMode';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'dds';

    /**
     * @deprecated deprecated since version 2.0, Use withDomainMode() instead.
     *
     * @param string $domainMode
     *
     * @return $this
     */
    public function setDomainMode($domainMode)
    {
        return $this->withDomainMode($domainMode);
    }

    /**
     * @param string $domainMode
     *
     * @return $this
     */
    public function withDomainMode($domainMode)
    {
        $this->data['DomainMode'] = $domainMode;
        $this->options['query']['DomainMode'] = $domainMode;

        return $this;
    }

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
     * @deprecated deprecated since version 2.0, Use withPrimaryInstanceId() instead.
     *
     * @param string $primaryInstanceId
     *
     * @return $this
     */
    public function setPrimaryInstanceId($primaryInstanceId)
    {
        return $this->withPrimaryInstanceId($primaryInstanceId);
    }

    /**
     * @param string $primaryInstanceId
     *
     * @return $this
     */
    public function withPrimaryInstanceId($primaryInstanceId)
    {
        $this->data['PrimaryInstanceId'] = $primaryInstanceId;
        $this->options['query']['PrimaryInstanceId'] = $primaryInstanceId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withReplicaMode() instead.
     *
     * @param string $replicaMode
     *
     * @return $this
     */
    public function setReplicaMode($replicaMode)
    {
        return $this->withReplicaMode($replicaMode);
    }

    /**
     * @param string $replicaMode
     *
     * @return $this
     */
    public function withReplicaMode($replicaMode)
    {
        $this->data['ReplicaMode'] = $replicaMode;
        $this->options['query']['ReplicaMode'] = $replicaMode;

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
