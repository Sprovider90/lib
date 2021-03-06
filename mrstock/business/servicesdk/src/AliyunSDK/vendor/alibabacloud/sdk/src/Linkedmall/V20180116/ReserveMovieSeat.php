<?php

namespace AlibabaCloud\Linkedmall\V20180116;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ReserveMovieSeat
 *
 * @method string getBizId()
 * @method string getScheduleId()
 * @method string getSeatIds()
 * @method string getSeatNames()
 * @method string getBizUid()
 * @method string getMobile()
 * @method string getExtJson()
 */
class ReserveMovieSeat extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'linkedmall';

    /**
     * @var string
     */
    public $version = '2018-01-16';

    /**
     * @var string
     */
    public $action = 'ReserveMovieSeat';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'linkedmall';

    /**
     * @deprecated deprecated since version 2.0, Use withBizId() instead.
     *
     * @param string $bizId
     *
     * @return $this
     */
    public function setBizId($bizId)
    {
        return $this->withBizId($bizId);
    }

    /**
     * @param string $bizId
     *
     * @return $this
     */
    public function withBizId($bizId)
    {
        $this->data['BizId'] = $bizId;
        $this->options['query']['BizId'] = $bizId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScheduleId() instead.
     *
     * @param string $scheduleId
     *
     * @return $this
     */
    public function setScheduleId($scheduleId)
    {
        return $this->withScheduleId($scheduleId);
    }

    /**
     * @param string $scheduleId
     *
     * @return $this
     */
    public function withScheduleId($scheduleId)
    {
        $this->data['ScheduleId'] = $scheduleId;
        $this->options['query']['ScheduleId'] = $scheduleId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSeatIds() instead.
     *
     * @param string $seatIds
     *
     * @return $this
     */
    public function setSeatIds($seatIds)
    {
        return $this->withSeatIds($seatIds);
    }

    /**
     * @param string $seatIds
     *
     * @return $this
     */
    public function withSeatIds($seatIds)
    {
        $this->data['SeatIds'] = $seatIds;
        $this->options['query']['SeatIds'] = $seatIds;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSeatNames() instead.
     *
     * @param string $seatNames
     *
     * @return $this
     */
    public function setSeatNames($seatNames)
    {
        return $this->withSeatNames($seatNames);
    }

    /**
     * @param string $seatNames
     *
     * @return $this
     */
    public function withSeatNames($seatNames)
    {
        $this->data['SeatNames'] = $seatNames;
        $this->options['query']['SeatNames'] = $seatNames;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withBizUid() instead.
     *
     * @param string $bizUid
     *
     * @return $this
     */
    public function setBizUid($bizUid)
    {
        return $this->withBizUid($bizUid);
    }

    /**
     * @param string $bizUid
     *
     * @return $this
     */
    public function withBizUid($bizUid)
    {
        $this->data['BizUid'] = $bizUid;
        $this->options['query']['BizUid'] = $bizUid;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMobile() instead.
     *
     * @param string $mobile
     *
     * @return $this
     */
    public function setMobile($mobile)
    {
        return $this->withMobile($mobile);
    }

    /**
     * @param string $mobile
     *
     * @return $this
     */
    public function withMobile($mobile)
    {
        $this->data['Mobile'] = $mobile;
        $this->options['query']['Mobile'] = $mobile;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withExtJson() instead.
     *
     * @param string $extJson
     *
     * @return $this
     */
    public function setExtJson($extJson)
    {
        return $this->withExtJson($extJson);
    }

    /**
     * @param string $extJson
     *
     * @return $this
     */
    public function withExtJson($extJson)
    {
        $this->data['ExtJson'] = $extJson;
        $this->options['query']['ExtJson'] = $extJson;

        return $this;
    }
}
