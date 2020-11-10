<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AddLiveDomainMapping
 *
 * @method string getPullDomain()
 * @method string getSecurityToken()
 * @method string getPushDomain()
 * @method string getOwnerId()
 */
class AddLiveDomainMapping extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cdn';

    /**
     * @var string
     */
    public $version = '2014-11-11';

    /**
     * @var string
     */
    public $action = 'AddLiveDomainMapping';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withPullDomain() instead.
     *
     * @param string $pullDomain
     *
     * @return $this
     */
    public function setPullDomain($pullDomain)
    {
        return $this->withPullDomain($pullDomain);
    }

    /**
     * @param string $pullDomain
     *
     * @return $this
     */
    public function withPullDomain($pullDomain)
    {
        $this->data['PullDomain'] = $pullDomain;
        $this->options['query']['PullDomain'] = $pullDomain;

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
     * @deprecated deprecated since version 2.0, Use withPushDomain() instead.
     *
     * @param string $pushDomain
     *
     * @return $this
     */
    public function setPushDomain($pushDomain)
    {
        return $this->withPushDomain($pushDomain);
    }

    /**
     * @param string $pushDomain
     *
     * @return $this
     */
    public function withPushDomain($pushDomain)
    {
        $this->data['PushDomain'] = $pushDomain;
        $this->options['query']['PushDomain'] = $pushDomain;

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
