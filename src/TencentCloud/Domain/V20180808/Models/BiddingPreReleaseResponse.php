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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BiddingPreRelease返回参数结构体
 *
 * @method boolean getIsNeedPay() 获取是否需要额外支付
true: 需要额外支付
false: 不需要额外支付
 * @method void setIsNeedPay(boolean $IsNeedPay) 设置是否需要额外支付
true: 需要额外支付
false: 不需要额外支付
 * @method string getBillingParam() 获取计费请求参数，以类Json字符串的形式进行返回。json字符串前有一个">"特定标识符号，去掉标识符的字符串可用于计费下单

 * @method void setBillingParam(string $BillingParam) 设置计费请求参数，以类Json字符串的形式进行返回。json字符串前有一个">"特定标识符号，去掉标识符的字符串可用于计费下单

 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class BiddingPreReleaseResponse extends AbstractModel
{
    /**
     * @var boolean 是否需要额外支付
true: 需要额外支付
false: 不需要额外支付
     */
    public $IsNeedPay;

    /**
     * @var string 计费请求参数，以类Json字符串的形式进行返回。json字符串前有一个">"特定标识符号，去掉标识符的字符串可用于计费下单

     */
    public $BillingParam;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $IsNeedPay 是否需要额外支付
true: 需要额外支付
false: 不需要额外支付
     * @param string $BillingParam 计费请求参数，以类Json字符串的形式进行返回。json字符串前有一个">"特定标识符号，去掉标识符的字符串可用于计费下单

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
        if (array_key_exists("IsNeedPay",$param) and $param["IsNeedPay"] !== null) {
            $this->IsNeedPay = $param["IsNeedPay"];
        }

        if (array_key_exists("BillingParam",$param) and $param["BillingParam"] !== null) {
            $this->BillingParam = $param["BillingParam"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
