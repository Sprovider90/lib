<?php

namespace AlibabaCloud\Alidns\V20150109;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryCreateInstancePrice
 *
 * @method string getMonth()
 * @method string getUserClientIp()
 * @method string getLang()
 * @method string getInstanceVersion()
 * @method string getOwnerId()
 */
class QueryCreateInstancePrice extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Alidns';

    /**
     * @var string
     */
    public $version = '2015-01-09';

    /**
     * @var string
     */
    public $action = 'QueryCreateInstancePrice';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'alidns';

    /**
     * @deprecated deprecated since version 2.0, Use withMonth() instead.
     *
     * @param string $month
     *
     * @return $this
     */
    public function setMonth($month)
    {
        return $this->withMonth($month);
    }

    /**
     * @param string $month
     *
     * @return $this
     */
    public function withMonth($month)
    {
        $this->data['Month'] = $month;
        $this->options['query']['Month'] = $month;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withUserClientIp() instead.
     *
     * @param string $userClientIp
     *
     * @return $this
     */
    public function setUserClientIp($userClientIp)
    {
        return $this->withUserClientIp($userClientIp);
    }

    /**
     * @param string $userClientIp
     *
     * @return $this
     */
    public function withUserClientIp($userClientIp)
    {
        $this->data['UserClientIp'] = $userClientIp;
        $this->options['query']['UserClientIp'] = $userClientIp;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withLang() instead.
     *
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        return $this->withLang($lang);
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function withLang($lang)
    {
        $this->data['Lang'] = $lang;
        $this->options['query']['Lang'] = $lang;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withInstanceVersion() instead.
     *
     * @param string $instanceVersion
     *
     * @return $this
     */
    public function setInstanceVersion($instanceVersion)
    {
        return $this->withInstanceVersion($instanceVersion);
    }

    /**
     * @param string $instanceVersion
     *
     * @return $this
     */
    public function withInstanceVersion($instanceVersion)
    {
        $this->data['InstanceVersion'] = $instanceVersion;
        $this->options['query']['InstanceVersion'] = $instanceVersion;

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
