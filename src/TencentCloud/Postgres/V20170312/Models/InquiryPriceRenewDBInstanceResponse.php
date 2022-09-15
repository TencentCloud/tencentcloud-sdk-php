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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquiryPriceRenewDBInstance返回参数结构体
 *
 * @method integer getOriginalPrice() 获取总费用，打折前的。比如24650表示246.5元
 * @method void setOriginalPrice(integer $OriginalPrice) 设置总费用，打折前的。比如24650表示246.5元
 * @method integer getPrice() 获取实际需要付款金额。比如24650表示246.5元
 * @method void setPrice(integer $Price) 设置实际需要付款金额。比如24650表示246.5元
 * @method string getCurrency() 获取币种。例如，CNY：人民币。
 * @method void setCurrency(string $Currency) 设置币种。例如，CNY：人民币。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class InquiryPriceRenewDBInstanceResponse extends AbstractModel
{
    /**
     * @var integer 总费用，打折前的。比如24650表示246.5元
     */
    public $OriginalPrice;

    /**
     * @var integer 实际需要付款金额。比如24650表示246.5元
     */
    public $Price;

    /**
     * @var string 币种。例如，CNY：人民币。
     */
    public $Currency;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $OriginalPrice 总费用，打折前的。比如24650表示246.5元
     * @param integer $Price 实际需要付款金额。比如24650表示246.5元
     * @param string $Currency 币种。例如，CNY：人民币。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = $param["Price"];
        }

        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
