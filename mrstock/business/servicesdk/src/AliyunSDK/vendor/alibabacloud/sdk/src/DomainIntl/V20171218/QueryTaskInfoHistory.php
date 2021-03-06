<?php

namespace AlibabaCloud\DomainIntl\V20171218;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryTaskInfoHistory
 *
 * @method string getBeginCreateTime()
 * @method string getEndCreateTime()
 * @method string getTaskNoCursor()
 * @method string getUserClientIp()
 * @method string getPageSize()
 * @method string getLang()
 * @method string getCreateTimeCursor()
 */
class QueryTaskInfoHistory extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Domain-intl';

    /**
     * @var string
     */
    public $version = '2017-12-18';

    /**
     * @var string
     */
    public $action = 'QueryTaskInfoHistory';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'domain';

    /**
     * @deprecated deprecated since version 2.0, Use withBeginCreateTime() instead.
     *
     * @param string $beginCreateTime
     *
     * @return $this
     */
    public function setBeginCreateTime($beginCreateTime)
    {
        return $this->withBeginCreateTime($beginCreateTime);
    }

    /**
     * @param string $beginCreateTime
     *
     * @return $this
     */
    public function withBeginCreateTime($beginCreateTime)
    {
        $this->data['BeginCreateTime'] = $beginCreateTime;
        $this->options['query']['BeginCreateTime'] = $beginCreateTime;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEndCreateTime() instead.
     *
     * @param string $endCreateTime
     *
     * @return $this
     */
    public function setEndCreateTime($endCreateTime)
    {
        return $this->withEndCreateTime($endCreateTime);
    }

    /**
     * @param string $endCreateTime
     *
     * @return $this
     */
    public function withEndCreateTime($endCreateTime)
    {
        $this->data['EndCreateTime'] = $endCreateTime;
        $this->options['query']['EndCreateTime'] = $endCreateTime;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTaskNoCursor() instead.
     *
     * @param string $taskNoCursor
     *
     * @return $this
     */
    public function setTaskNoCursor($taskNoCursor)
    {
        return $this->withTaskNoCursor($taskNoCursor);
    }

    /**
     * @param string $taskNoCursor
     *
     * @return $this
     */
    public function withTaskNoCursor($taskNoCursor)
    {
        $this->data['TaskNoCursor'] = $taskNoCursor;
        $this->options['query']['TaskNoCursor'] = $taskNoCursor;

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
     * @deprecated deprecated since version 2.0, Use withPageSize() instead.
     *
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        return $this->withPageSize($pageSize);
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize'] = $pageSize;
        $this->options['query']['PageSize'] = $pageSize;

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
     * @deprecated deprecated since version 2.0, Use withCreateTimeCursor() instead.
     *
     * @param string $createTimeCursor
     *
     * @return $this
     */
    public function setCreateTimeCursor($createTimeCursor)
    {
        return $this->withCreateTimeCursor($createTimeCursor);
    }

    /**
     * @param string $createTimeCursor
     *
     * @return $this
     */
    public function withCreateTimeCursor($createTimeCursor)
    {
        $this->data['CreateTimeCursor'] = $createTimeCursor;
        $this->options['query']['CreateTimeCursor'] = $createTimeCursor;

        return $this;
    }
}
