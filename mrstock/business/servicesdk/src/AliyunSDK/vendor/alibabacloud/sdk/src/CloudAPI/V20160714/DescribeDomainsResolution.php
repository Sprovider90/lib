<?php

namespace AlibabaCloud\CloudAPI\V20160714;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeDomainsResolution
 *
 * @method string getSecurityToken()
 * @method string getDomainNames()
 * @method string getGroupId()
 */
class DescribeDomainsResolution extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CloudAPI';

    /**
     * @var string
     */
    public $version = '2016-07-14';

    /**
     * @var string
     */
    public $action = 'DescribeDomainsResolution';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'apigateway';

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
     * @param string $domainNames
     *
     * @return $this
     */
    public function withDomainNames($domainNames)
    {
        $this->data['DomainNames'] = $domainNames;
        $this->options['query']['DomainNames'] = $domainNames;

        return $this;
    }

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function withGroupId($groupId)
    {
        $this->data['GroupId'] = $groupId;
        $this->options['query']['GroupId'] = $groupId;

        return $this;
    }
}
