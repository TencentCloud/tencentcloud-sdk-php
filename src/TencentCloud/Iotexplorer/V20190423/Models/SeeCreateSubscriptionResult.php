<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TWeSee 预付费订阅开通结果
 *
 * @method string getOrderId() 获取订单 ID
 * @method void setOrderId(string $OrderId) 设置订单 ID
 * @method string getStatus() 获取订单状态
 * @method void setStatus(string $Status) 设置订单状态
 * @method string getResourceId() 获取资源 ID
 * @method void setResourceId(string $ResourceId) 设置资源 ID
 */
class SeeCreateSubscriptionResult extends AbstractModel
{
    /**
     * @var string 订单 ID
     */
    public $OrderId;

    /**
     * @var string 订单状态
     */
    public $Status;

    /**
     * @var string 资源 ID
     */
    public $ResourceId;

    /**
     * @param string $OrderId 订单 ID
     * @param string $Status 订单状态
     * @param string $ResourceId 资源 ID
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
        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}
