<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeduceQuota请求参数结构体
 *
 * @method string getAnchorId() 获取主播ID
 * @method void setAnchorId(string $AnchorId) 设置主播ID
 * @method integer getAmount() 获取提现金额，单位为"分"
 * @method void setAmount(integer $Amount) 设置提现金额，单位为"分"
 * @method string getOrderId() 获取外部业务订单号
 * @method void setOrderId(string $OrderId) 设置外部业务订单号
 */
class DeduceQuotaRequest extends AbstractModel
{
    /**
     * @var string 主播ID
     */
    public $AnchorId;

    /**
     * @var integer 提现金额，单位为"分"
     */
    public $Amount;

    /**
     * @var string 外部业务订单号
     */
    public $OrderId;

    /**
     * @param string $AnchorId 主播ID
     * @param integer $Amount 提现金额，单位为"分"
     * @param string $OrderId 外部业务订单号
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("AnchorId",$param) and $param["AnchorId"] !== null) {
            $this->AnchorId = $param["AnchorId"];
        }

        if (array_key_exists("Amount",$param) and $param["Amount"] !== null) {
            $this->Amount = $param["Amount"];
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }
    }
}
