<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteScalingGroup
 *
 * @method string getResourceOwnerAccount()
 * @method string getScalingGroupId()
 * @method string getForceDelete()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 */
class DeleteScalingGroup extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ess';

    /**
     * @var string
     */
    public $version = '2014-08-28';

    /**
     * @var string
     */
    public $action = 'DeleteScalingGroup';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ess';

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
     * @deprecated deprecated since version 2.0, Use withScalingGroupId() instead.
     *
     * @param string $scalingGroupId
     *
     * @return $this
     */
    public function setScalingGroupId($scalingGroupId)
    {
        return $this->withScalingGroupId($scalingGroupId);
    }

    /**
     * @param string $scalingGroupId
     *
     * @return $this
     */
    public function withScalingGroupId($scalingGroupId)
    {
        $this->data['ScalingGroupId'] = $scalingGroupId;
        $this->options['query']['ScalingGroupId'] = $scalingGroupId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withForceDelete() instead.
     *
     * @param string $forceDelete
     *
     * @return $this
     */
    public function setForceDelete($forceDelete)
    {
        return $this->withForceDelete($forceDelete);
    }

    /**
     * @param string $forceDelete
     *
     * @return $this
     */
    public function withForceDelete($forceDelete)
    {
        $this->data['ForceDelete'] = $forceDelete;
        $this->options['query']['ForceDelete'] = $forceDelete;

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
