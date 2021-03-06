<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of RemoveNumberFromSkillGroup
 *
 * @method string getNumber()
 * @method string getInstanceId()
 * @method string getSkillGroupId()
 */
class RemoveNumberFromSkillGroup extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CCC';

    /**
     * @var string
     */
    public $version = '2017-07-05';

    /**
     * @var string
     */
    public $action = 'RemoveNumberFromSkillGroup';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccc';

    /**
     * @deprecated deprecated since version 2.0, Use withNumber() instead.
     *
     * @param string $number
     *
     * @return $this
     */
    public function setNumber($number)
    {
        return $this->withNumber($number);
    }

    /**
     * @param string $number
     *
     * @return $this
     */
    public function withNumber($number)
    {
        $this->data['Number'] = $number;
        $this->options['query']['Number'] = $number;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withInstanceId() instead.
     *
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        return $this->withInstanceId($instanceId);
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        $this->options['query']['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSkillGroupId() instead.
     *
     * @param string $skillGroupId
     *
     * @return $this
     */
    public function setSkillGroupId($skillGroupId)
    {
        return $this->withSkillGroupId($skillGroupId);
    }

    /**
     * @param string $skillGroupId
     *
     * @return $this
     */
    public function withSkillGroupId($skillGroupId)
    {
        $this->data['SkillGroupId'] = $skillGroupId;
        $this->options['query']['SkillGroupId'] = $skillGroupId;

        return $this;
    }
}
