<?php

namespace AlibabaCloud\Sms\V20160927;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyAccountSummary
 *
 * @method string getResourceOwnerId()
 * @method string getMonthQuota()
 * @method string getResourceOwnerAccount()
 * @method string getDailyQuota()
 * @method string getOwnerId()
 */
class ModifyAccountSummary extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Sms';

    /**
     * @var string
     */
    public $version = '2016-09-27';

    /**
     * @var string
     */
    public $action = 'ModifyAccountSummary';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withResourceOwnerId() instead.
     *
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        return $this->withResourceOwnerId($resourceOwnerId);
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMonthQuota() instead.
     *
     * @param string $monthQuota
     *
     * @return $this
     */
    public function setMonthQuota($monthQuota)
    {
        return $this->withMonthQuota($monthQuota);
    }

    /**
     * @param string $monthQuota
     *
     * @return $this
     */
    public function withMonthQuota($monthQuota)
    {
        $this->data['MonthQuota'] = $monthQuota;
        $this->options['query']['MonthQuota'] = $monthQuota;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceOwnerAccount() instead.
     *
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        return $this->withResourceOwnerAccount($resourceOwnerAccount);
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function withResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->data['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->options['query']['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDailyQuota() instead.
     *
     * @param string $dailyQuota
     *
     * @return $this
     */
    public function setDailyQuota($dailyQuota)
    {
        return $this->withDailyQuota($dailyQuota);
    }

    /**
     * @param string $dailyQuota
     *
     * @return $this
     */
    public function withDailyQuota($dailyQuota)
    {
        $this->data['DailyQuota'] = $dailyQuota;
        $this->options['query']['DailyQuota'] = $dailyQuota;

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
