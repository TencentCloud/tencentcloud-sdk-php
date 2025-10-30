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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquirePriceRenewInstance返回参数结构体
 *
 * @method float getOriginalPrice() 获取刊例价，即集群原始价格
 * @method void setOriginalPrice(float $OriginalPrice) 设置刊例价，即集群原始价格
 * @method float getDiscountPrice() 获取折后价
 * @method void setDiscountPrice(float $DiscountPrice) 设置折后价
 * @method float getDiscount() 获取折扣，如65折
 * @method void setDiscount(float $Discount) 设置折扣，如65折
 * @method string getCurrency() 获取货币，如CNY代表人民币
 * @method void setCurrency(string $Currency) 设置货币，如CNY代表人民币
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class InquirePriceRenewInstanceResponse extends AbstractModel
{
    /**
     * @var float 刊例价，即集群原始价格
     */
    public $OriginalPrice;

    /**
     * @var float 折后价
     */
    public $DiscountPrice;

    /**
     * @var float 折扣，如65折
     */
    public $Discount;

    /**
     * @var string 货币，如CNY代表人民币
     */
    public $Currency;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param float $OriginalPrice 刊例价，即集群原始价格
     * @param float $DiscountPrice 折后价
     * @param float $Discount 折扣，如65折
     * @param string $Currency 货币，如CNY代表人民币
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
        if (array_key_exists("OriginalPrice",$param) and $param["OriginalPrice"] !== null) {
            $this->OriginalPrice = $param["OriginalPrice"];
        }

        if (array_key_exists("DiscountPrice",$param) and $param["DiscountPrice"] !== null) {
            $this->DiscountPrice = $param["DiscountPrice"];
        }

        if (array_key_exists("Discount",$param) and $param["Discount"] !== null) {
            $this->Discount = $param["Discount"];
        }

        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
