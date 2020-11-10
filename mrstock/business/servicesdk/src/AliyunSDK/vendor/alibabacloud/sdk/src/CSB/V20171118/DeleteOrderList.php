<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteOrderList
 *
 * @method string getData()
 */
class DeleteOrderList extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CSB';

    /**
     * @var string
     */
    public $version = '2017-11-18';

    /**
     * @var string
     */
    public $action = 'DeleteOrderList';

    /**
     * @var string
     */
    public $scheme = 'https';


    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withData() instead.
     *
     * @param string $data
     *
     * @return $this
     */
    public function setData($data)
    {
        return $this->withData($data);
    }

    /**
     * @param string $data
     *
     * @return $this
     */
    public function withData($data)
    {
        $this->data['Data'] = $data;
        $this->options['query']['Data'] = $data;

        return $this;
    }
}
