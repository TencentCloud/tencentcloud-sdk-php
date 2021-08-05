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
 * QueryMerchant返回参数结构体
 *
 * @method string getMerchantAppId() 获取分配给商户的 AppId，该 AppId 为后续各项 交易的商户标识。
 * @method void setMerchantAppId(string $MerchantAppId) 设置分配给商户的 AppId，该 AppId 为后续各项 交易的商户标识。
 * @method string getMerchantName() 获取收款商户名称。
 * @method void setMerchantName(string $MerchantName) 设置收款商户名称。
 * @method string getBusinessPayFlag() 获取B2B 支付标志。是否开通 B2B 支付， 1:开通 0:不开通。
 * @method void setBusinessPayFlag(string $BusinessPayFlag) 设置B2B 支付标志。是否开通 B2B 支付， 1:开通 0:不开通。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class QueryMerchantResponse extends AbstractModel
{
    /**
     * @var string 分配给商户的 AppId，该 AppId 为后续各项 交易的商户标识。
     */
    public $MerchantAppId;

    /**
     * @var string 收款商户名称。
     */
    public $MerchantName;

    /**
     * @var string B2B 支付标志。是否开通 B2B 支付， 1:开通 0:不开通。
     */
    public $BusinessPayFlag;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $MerchantAppId 分配给商户的 AppId，该 AppId 为后续各项 交易的商户标识。
     * @param string $MerchantName 收款商户名称。
     * @param string $BusinessPayFlag B2B 支付标志。是否开通 B2B 支付， 1:开通 0:不开通。
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
        if (array_key_exists("MerchantAppId",$param) and $param["MerchantAppId"] !== null) {
            $this->MerchantAppId = $param["MerchantAppId"];
        }

        if (array_key_exists("MerchantName",$param) and $param["MerchantName"] !== null) {
            $this->MerchantName = $param["MerchantName"];
        }

        if (array_key_exists("BusinessPayFlag",$param) and $param["BusinessPayFlag"] !== null) {
            $this->BusinessPayFlag = $param["BusinessPayFlag"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
