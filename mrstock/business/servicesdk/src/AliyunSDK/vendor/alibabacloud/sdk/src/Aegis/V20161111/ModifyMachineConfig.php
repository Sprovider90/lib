<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyMachineConfig
 *
 * @method string getSourceIp()
 * @method string getType()
 * @method string getTarget()
 */
class ModifyMachineConfig extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'aegis';

    /**
     * @var string
     */
    public $version = '2016-11-11';

    /**
     * @var string
     */
    public $action = 'ModifyMachineConfig';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vipaegis';

    /**
     * @deprecated deprecated since version 2.0, Use withSourceIp() instead.
     *
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        return $this->withSourceIp($sourceIp);
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function withSourceIp($sourceIp)
    {
        $this->data['SourceIp'] = $sourceIp;
        $this->options['query']['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withType() instead.
     *
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        return $this->withType($type);
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function withType($type)
    {
        $this->data['Type'] = $type;
        $this->options['query']['Type'] = $type;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTarget() instead.
     *
     * @param string $target
     *
     * @return $this
     */
    public function setTarget($target)
    {
        return $this->withTarget($target);
    }

    /**
     * @param string $target
     *
     * @return $this
     */
    public function withTarget($target)
    {
        $this->data['Target'] = $target;
        $this->options['query']['Target'] = $target;

        return $this;
    }
}
