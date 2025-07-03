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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquiryPriceUpgradeInstance返回参数结构体
 *
 * @method float getPrice() 获取价格
 * @method void setPrice(float $Price) 设置价格
 * @method float getHighPrecisionPrice() 获取高精度价格
 * @method void setHighPrecisionPrice(float $HighPrecisionPrice) 设置高精度价格
 * @method string getCurrency() 获取币种
 * @method void setCurrency(string $Currency) 设置币种
 * @method string getAmountUnit() 获取价格金额单位

- pent: 分
- microPent: 微分
 * @method void setAmountUnit(string $AmountUnit) 设置价格金额单位

- pent: 分
- microPent: 微分
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class InquiryPriceUpgradeInstanceResponse extends AbstractModel
{
    /**
     * @var float 价格
     */
    public $Price;

    /**
     * @var float 高精度价格
     */
    public $HighPrecisionPrice;

    /**
     * @var string 币种
     */
    public $Currency;

    /**
     * @var string 价格金额单位

- pent: 分
- microPent: 微分
     */
    public $AmountUnit;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param float $Price 价格
     * @param float $HighPrecisionPrice 高精度价格
     * @param string $Currency 币种
     * @param string $AmountUnit 价格金额单位

- pent: 分
- microPent: 微分
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
        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = $param["Price"];
        }

        if (array_key_exists("HighPrecisionPrice",$param) and $param["HighPrecisionPrice"] !== null) {
            $this->HighPrecisionPrice = $param["HighPrecisionPrice"];
        }

        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }

        if (array_key_exists("AmountUnit",$param) and $param["AmountUnit"] !== null) {
            $this->AmountUnit = $param["AmountUnit"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
