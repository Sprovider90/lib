<?php

namespace AlibabaCloud\Rtc\V20180111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeRecordDetail
 *
 * @method string getStartTime()
 * @method string getEndTime()
 * @method string getOwnerId()
 * @method string getRecordId()
 * @method string getAppId()
 * @method string getChannelId()
 */
class DescribeRecordDetail extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'rtc';

    /**
     * @var string
     */
    public $version = '2018-01-11';

    /**
     * @var string
     */
    public $action = 'DescribeRecordDetail';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'rtc';

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
     * @deprecated deprecated since version 2.0, Use withEndTime() instead.
     *
     * @param string $endTime
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        return $this->withEndTime($endTime);
    }

    /**
     * @param string $endTime
     *
     * @return $this
     */
    public function withEndTime($endTime)
    {
        $this->data['EndTime'] = $endTime;
        $this->options['query']['EndTime'] = $endTime;

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
     * @deprecated deprecated since version 2.0, Use withRecordId() instead.
     *
     * @param string $recordId
     *
     * @return $this
     */
    public function setRecordId($recordId)
    {
        return $this->withRecordId($recordId);
    }

    /**
     * @param string $recordId
     *
     * @return $this
     */
    public function withRecordId($recordId)
    {
        $this->data['RecordId'] = $recordId;
        $this->options['query']['RecordId'] = $recordId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAppId() instead.
     *
     * @param string $appId
     *
     * @return $this
     */
    public function setAppId($appId)
    {
        return $this->withAppId($appId);
    }

    /**
     * @param string $appId
     *
     * @return $this
     */
    public function withAppId($appId)
    {
        $this->data['AppId'] = $appId;
        $this->options['query']['AppId'] = $appId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withChannelId() instead.
     *
     * @param string $channelId
     *
     * @return $this
     */
    public function setChannelId($channelId)
    {
        return $this->withChannelId($channelId);
    }

    /**
     * @param string $channelId
     *
     * @return $this
     */
    public function withChannelId($channelId)
    {
        $this->data['ChannelId'] = $channelId;
        $this->options['query']['ChannelId'] = $channelId;

        return $this;
    }
}
