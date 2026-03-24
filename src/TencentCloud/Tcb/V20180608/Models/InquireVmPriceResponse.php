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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquireVmPrice返回参数结构体
 *
 * @method string getCurrency() 获取价格货币单位。取值范围CNY:人民币。USD:美元。
 * @method void setCurrency(string $Currency) 设置价格货币单位。取值范围CNY:人民币。USD:美元。
 * @method float getOriginalPrice() 获取原价（主机原始每月价格）
 * @method void setOriginalPrice(float $OriginalPrice) 设置原价（主机原始每月价格）
 * @method float getDiscount() 获取折扣率
 * @method void setDiscount(float $Discount) 设置折扣率
 * @method float getDiscountPrice() 获取折扣后每月价格
 * @method void setDiscountPrice(float $DiscountPrice) 设置折扣后每月价格
 * @method float getOriginalCredits() 获取折扣前每天资源点
 * @method void setOriginalCredits(float $OriginalCredits) 设置折扣前每天资源点
 * @method float getDiscountCredits() 获取折扣后每天资源点
 * @method void setDiscountCredits(float $DiscountCredits) 设置折扣后每天资源点
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class InquireVmPriceResponse extends AbstractModel
{
    /**
     * @var string 价格货币单位。取值范围CNY:人民币。USD:美元。
     */
    public $Currency;

    /**
     * @var float 原价（主机原始每月价格）
     */
    public $OriginalPrice;

    /**
     * @var float 折扣率
     */
    public $Discount;

    /**
     * @var float 折扣后每月价格
     */
    public $DiscountPrice;

    /**
     * @var float 折扣前每天资源点
     */
    public $OriginalCredits;

    /**
     * @var float 折扣后每天资源点
     */
    public $DiscountCredits;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Currency 价格货币单位。取值范围CNY:人民币。USD:美元。
     * @param float $OriginalPrice 原价（主机原始每月价格）
     * @param float $Discount 折扣率
     * @param float $DiscountPrice 折扣后每月价格
     * @param float $OriginalCredits 折扣前每天资源点
     * @param float $DiscountCredits 折扣后每天资源点
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
        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }

        if (array_key_exists("OriginalPrice",$param) and $param["OriginalPrice"] !== null) {
            $this->OriginalPrice = $param["OriginalPrice"];
        }

        if (array_key_exists("Discount",$param) and $param["Discount"] !== null) {
            $this->Discount = $param["Discount"];
        }

        if (array_key_exists("DiscountPrice",$param) and $param["DiscountPrice"] !== null) {
            $this->DiscountPrice = $param["DiscountPrice"];
        }

        if (array_key_exists("OriginalCredits",$param) and $param["OriginalCredits"] !== null) {
            $this->OriginalCredits = $param["OriginalCredits"];
        }

        if (array_key_exists("DiscountCredits",$param) and $param["DiscountCredits"] !== null) {
            $this->DiscountCredits = $param["DiscountCredits"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
