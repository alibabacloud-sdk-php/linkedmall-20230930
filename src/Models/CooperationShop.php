<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class CooperationShop extends Model
{
    /**
     * @var string
     */
    public $cooperationCompanyId;

    /**
     * @var string
     */
    public $cooperationShopId;

    /**
     * @var string
     */
    public $shopId;
    protected $_name = [
        'cooperationCompanyId' => 'cooperationCompanyId',
        'cooperationShopId' => 'cooperationShopId',
        'shopId' => 'shopId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cooperationCompanyId) {
            $res['cooperationCompanyId'] = $this->cooperationCompanyId;
        }

        if (null !== $this->cooperationShopId) {
            $res['cooperationShopId'] = $this->cooperationShopId;
        }

        if (null !== $this->shopId) {
            $res['shopId'] = $this->shopId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cooperationCompanyId'])) {
            $model->cooperationCompanyId = $map['cooperationCompanyId'];
        }

        if (isset($map['cooperationShopId'])) {
            $model->cooperationShopId = $map['cooperationShopId'];
        }

        if (isset($map['shopId'])) {
            $model->shopId = $map['shopId'];
        }

        return $model;
    }
}
