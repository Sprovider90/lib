<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryMeasureTop
 *
 * @method string getStartDay()
 * @method string getSustainDays()
 * @method string getTopCount()
 */
class QueryMeasureTop extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Iot';

    /**
     * @var string
     */
    public $version = '2018-01-20';

    /**
     * @var string
     */
    public $action = 'QueryMeasureTop';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withStartDay() instead.
     *
     * @param string $startDay
     *
     * @return $this
     */
    public function setStartDay($startDay)
    {
        return $this->withStartDay($startDay);
    }

    /**
     * @param string $startDay
     *
     * @return $this
     */
    public function withStartDay($startDay)
    {
        $this->data['StartDay'] = $startDay;
        $this->options['query']['StartDay'] = $startDay;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSustainDays() instead.
     *
     * @param string $sustainDays
     *
     * @return $this
     */
    public function setSustainDays($sustainDays)
    {
        return $this->withSustainDays($sustainDays);
    }

    /**
     * @param string $sustainDays
     *
     * @return $this
     */
    public function withSustainDays($sustainDays)
    {
        $this->data['SustainDays'] = $sustainDays;
        $this->options['query']['SustainDays'] = $sustainDays;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTopCount() instead.
     *
     * @param string $topCount
     *
     * @return $this
     */
    public function setTopCount($topCount)
    {
        return $this->withTopCount($topCount);
    }

    /**
     * @param string $topCount
     *
     * @return $this
     */
    public function withTopCount($topCount)
    {
        $this->data['TopCount'] = $topCount;
        $this->options['query']['TopCount'] = $topCount;

        return $this;
    }
}
