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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquiryPriceRenewInstance返回参数结构体
 *
 * @method float getPrice() 获取<p>折扣后价格</p>
 * @method void setPrice(float $Price) 设置<p>折扣后价格</p>
 * @method float getHighPrecisionPrice() 获取<p>高精度折扣后价格</p>
 * @method void setHighPrecisionPrice(float $HighPrecisionPrice) 设置<p>高精度折扣后价格</p>
 * @method float getOriginalPrice() 获取<p>原价</p>
 * @method void setOriginalPrice(float $OriginalPrice) 设置<p>原价</p>
 * @method float getHighPrecisionOriginalPrice() 获取<p>高精度原价</p>
 * @method void setHighPrecisionOriginalPrice(float $HighPrecisionOriginalPrice) 设置<p>高精度原价</p>
 * @method string getCurrency() 获取<p>币种</p>
 * @method void setCurrency(string $Currency) 设置<p>币种</p>
 * @method string getAmountUnit() 获取<p>价格金额单位</p><ul><li>pent: 分</li><li>microPent: 微分</li></ul>
 * @method void setAmountUnit(string $AmountUnit) 设置<p>价格金额单位</p><ul><li>pent: 分</li><li>microPent: 微分</li></ul>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class InquiryPriceRenewInstanceResponse extends AbstractModel
{
    /**
     * @var float <p>折扣后价格</p>
     */
    public $Price;

    /**
     * @var float <p>高精度折扣后价格</p>
     */
    public $HighPrecisionPrice;

    /**
     * @var float <p>原价</p>
     */
    public $OriginalPrice;

    /**
     * @var float <p>高精度原价</p>
     */
    public $HighPrecisionOriginalPrice;

    /**
     * @var string <p>币种</p>
     */
    public $Currency;

    /**
     * @var string <p>价格金额单位</p><ul><li>pent: 分</li><li>microPent: 微分</li></ul>
     */
    public $AmountUnit;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param float $Price <p>折扣后价格</p>
     * @param float $HighPrecisionPrice <p>高精度折扣后价格</p>
     * @param float $OriginalPrice <p>原价</p>
     * @param float $HighPrecisionOriginalPrice <p>高精度原价</p>
     * @param string $Currency <p>币种</p>
     * @param string $AmountUnit <p>价格金额单位</p><ul><li>pent: 分</li><li>microPent: 微分</li></ul>
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

        if (array_key_exists("OriginalPrice",$param) and $param["OriginalPrice"] !== null) {
            $this->OriginalPrice = $param["OriginalPrice"];
        }

        if (array_key_exists("HighPrecisionOriginalPrice",$param) and $param["HighPrecisionOriginalPrice"] !== null) {
            $this->HighPrecisionOriginalPrice = $param["HighPrecisionOriginalPrice"];
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
