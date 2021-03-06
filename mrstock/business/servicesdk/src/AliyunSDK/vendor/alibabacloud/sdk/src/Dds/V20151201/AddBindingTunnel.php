<?php

namespace AlibabaCloud\Dds\V20151201;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AddBindingTunnel
 *
 * @method string getResourceOwnerId()
 * @method string getRestoreCheckPointTS()
 * @method string getSourceDataFilter()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getSecurityToken()
 * @method string getReplicationGroupId()
 * @method string getDestinationInstanceId()
 * @method string getSourceInstanceId()
 * @method string getDestinationDataFilter()
 */
class AddBindingTunnel extends RpcRequest
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
    public $action = 'AddBindingTunnel';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'dds';

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
     * @deprecated deprecated since version 2.0, Use withRestoreCheckPointTS() instead.
     *
     * @param string $restoreCheckPointTS
     *
     * @return $this
     */
    public function setRestoreCheckPointTS($restoreCheckPointTS)
    {
        return $this->withRestoreCheckPointTS($restoreCheckPointTS);
    }

    /**
     * @param string $restoreCheckPointTS
     *
     * @return $this
     */
    public function withRestoreCheckPointTS($restoreCheckPointTS)
    {
        $this->data['RestoreCheckPointTS'] = $restoreCheckPointTS;
        $this->options['query']['RestoreCheckPointTS'] = $restoreCheckPointTS;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSourceDataFilter() instead.
     *
     * @param string $sourceDataFilter
     *
     * @return $this
     */
    public function setSourceDataFilter($sourceDataFilter)
    {
        return $this->withSourceDataFilter($sourceDataFilter);
    }

    /**
     * @param string $sourceDataFilter
     *
     * @return $this
     */
    public function withSourceDataFilter($sourceDataFilter)
    {
        $this->data['SourceDataFilter'] = $sourceDataFilter;
        $this->options['query']['SourceDataFilter'] = $sourceDataFilter;

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
     * @deprecated deprecated since version 2.0, Use withReplicationGroupId() instead.
     *
     * @param string $replicationGroupId
     *
     * @return $this
     */
    public function setReplicationGroupId($replicationGroupId)
    {
        return $this->withReplicationGroupId($replicationGroupId);
    }

    /**
     * @param string $replicationGroupId
     *
     * @return $this
     */
    public function withReplicationGroupId($replicationGroupId)
    {
        $this->data['ReplicationGroupId'] = $replicationGroupId;
        $this->options['query']['ReplicationGroupId'] = $replicationGroupId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDestinationInstanceId() instead.
     *
     * @param string $destinationInstanceId
     *
     * @return $this
     */
    public function setDestinationInstanceId($destinationInstanceId)
    {
        return $this->withDestinationInstanceId($destinationInstanceId);
    }

    /**
     * @param string $destinationInstanceId
     *
     * @return $this
     */
    public function withDestinationInstanceId($destinationInstanceId)
    {
        $this->data['DestinationInstanceId'] = $destinationInstanceId;
        $this->options['query']['DestinationInstanceId'] = $destinationInstanceId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSourceInstanceId() instead.
     *
     * @param string $sourceInstanceId
     *
     * @return $this
     */
    public function setSourceInstanceId($sourceInstanceId)
    {
        return $this->withSourceInstanceId($sourceInstanceId);
    }

    /**
     * @param string $sourceInstanceId
     *
     * @return $this
     */
    public function withSourceInstanceId($sourceInstanceId)
    {
        $this->data['SourceInstanceId'] = $sourceInstanceId;
        $this->options['query']['SourceInstanceId'] = $sourceInstanceId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDestinationDataFilter() instead.
     *
     * @param string $destinationDataFilter
     *
     * @return $this
     */
    public function setDestinationDataFilter($destinationDataFilter)
    {
        return $this->withDestinationDataFilter($destinationDataFilter);
    }

    /**
     * @param string $destinationDataFilter
     *
     * @return $this
     */
    public function withDestinationDataFilter($destinationDataFilter)
    {
        $this->data['DestinationDataFilter'] = $destinationDataFilter;
        $this->options['query']['DestinationDataFilter'] = $destinationDataFilter;

        return $this;
    }
}
