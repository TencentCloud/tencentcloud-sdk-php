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
 * RenewTWeSeeSubscription返回参数结构体
 *
 * @method string getOrderId() 获取<p>订单 ID</p>
 * @method void setOrderId(string $OrderId) 设置<p>订单 ID</p>
 * @method string getStatus() 获取<p>订单状态</p>
 * @method void setStatus(string $Status) 设置<p>订单状态</p>
 * @method string getResourceId() 获取<p>资源 ID</p>
 * @method void setResourceId(string $ResourceId) 设置<p>资源 ID</p>
 * @method string getOriginalPrice() 获取<p>原价</p>
 * @method void setOriginalPrice(string $OriginalPrice) 设置<p>原价</p>
 * @method string getDiscountPrice() 获取<p>折后价</p>
 * @method void setDiscountPrice(string $DiscountPrice) 设置<p>折后价</p>
 * @method string getCurrency() 获取<p>币种</p>
 * @method void setCurrency(string $Currency) 设置<p>币种</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class RenewTWeSeeSubscriptionResponse extends AbstractModel
{
    /**
     * @var string <p>订单 ID</p>
     */
    public $OrderId;

    /**
     * @var string <p>订单状态</p>
     */
    public $Status;

    /**
     * @var string <p>资源 ID</p>
     */
    public $ResourceId;

    /**
     * @var string <p>原价</p>
     */
    public $OriginalPrice;

    /**
     * @var string <p>折后价</p>
     */
    public $DiscountPrice;

    /**
     * @var string <p>币种</p>
     */
    public $Currency;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $OrderId <p>订单 ID</p>
     * @param string $Status <p>订单状态</p>
     * @param string $ResourceId <p>资源 ID</p>
     * @param string $OriginalPrice <p>原价</p>
     * @param string $DiscountPrice <p>折后价</p>
     * @param string $Currency <p>币种</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("OriginalPrice",$param) and $param["OriginalPrice"] !== null) {
            $this->OriginalPrice = $param["OriginalPrice"];
        }

        if (array_key_exists("DiscountPrice",$param) and $param["DiscountPrice"] !== null) {
            $this->DiscountPrice = $param["DiscountPrice"];
        }

        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
