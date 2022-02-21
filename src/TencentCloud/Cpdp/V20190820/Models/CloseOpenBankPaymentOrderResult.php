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
 * 云企付-关单响应
 *
 * @method string getOutOrderId() 获取外部商户订单号
 * @method void setOutOrderId(string $OutOrderId) 设置外部商户订单号
 * @method string getChannelOrderId() 获取云企付平台订单号
 * @method void setChannelOrderId(string $ChannelOrderId) 设置云企付平台订单号
 * @method string getOrderStatus() 获取订单状态。关单成功CLOSED
 * @method void setOrderStatus(string $OrderStatus) 设置订单状态。关单成功CLOSED
 */
class CloseOpenBankPaymentOrderResult extends AbstractModel
{
    /**
     * @var string 外部商户订单号
     */
    public $OutOrderId;

    /**
     * @var string 云企付平台订单号
     */
    public $ChannelOrderId;

    /**
     * @var string 订单状态。关单成功CLOSED
     */
    public $OrderStatus;

    /**
     * @param string $OutOrderId 外部商户订单号
     * @param string $ChannelOrderId 云企付平台订单号
     * @param string $OrderStatus 订单状态。关单成功CLOSED
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
        if (array_key_exists("OutOrderId",$param) and $param["OutOrderId"] !== null) {
            $this->OutOrderId = $param["OutOrderId"];
        }

        if (array_key_exists("ChannelOrderId",$param) and $param["ChannelOrderId"] !== null) {
            $this->ChannelOrderId = $param["ChannelOrderId"];
        }

        if (array_key_exists("OrderStatus",$param) and $param["OrderStatus"] !== null) {
            $this->OrderStatus = $param["OrderStatus"];
        }
    }
}
