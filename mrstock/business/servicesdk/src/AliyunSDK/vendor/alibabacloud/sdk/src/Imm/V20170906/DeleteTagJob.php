<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteTagJob
 *
 * @method string getJobId()
 * @method string getProject()
 * @method string getClearIndexData()
 */
class DeleteTagJob extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'imm';

    /**
     * @var string
     */
    public $version = '2017-09-06';

    /**
     * @var string
     */
    public $action = 'DeleteTagJob';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'imm';

    /**
     * @deprecated deprecated since version 2.0, Use withJobId() instead.
     *
     * @param string $jobId
     *
     * @return $this
     */
    public function setJobId($jobId)
    {
        return $this->withJobId($jobId);
    }

    /**
     * @param string $jobId
     *
     * @return $this
     */
    public function withJobId($jobId)
    {
        $this->data['JobId'] = $jobId;
        $this->options['query']['JobId'] = $jobId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withProject() instead.
     *
     * @param string $project
     *
     * @return $this
     */
    public function setProject($project)
    {
        return $this->withProject($project);
    }

    /**
     * @param string $project
     *
     * @return $this
     */
    public function withProject($project)
    {
        $this->data['Project'] = $project;
        $this->options['query']['Project'] = $project;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withClearIndexData() instead.
     *
     * @param string $clearIndexData
     *
     * @return $this
     */
    public function setClearIndexData($clearIndexData)
    {
        return $this->withClearIndexData($clearIndexData);
    }

    /**
     * @param string $clearIndexData
     *
     * @return $this
     */
    public function withClearIndexData($clearIndexData)
    {
        $this->data['ClearIndexData'] = $clearIndexData;
        $this->options['query']['ClearIndexData'] = $clearIndexData;

        return $this;
    }
}
