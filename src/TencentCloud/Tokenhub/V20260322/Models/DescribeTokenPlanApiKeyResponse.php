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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTokenPlanApiKey返回参数结构体
 *
 * @method TokenPlanApiKeyInfo getApiKey() 获取API Key 详情信息。
 * @method void setApiKey(TokenPlanApiKeyInfo $ApiKey) 设置API Key 详情信息。
 * @method SubPackageBalance getBalance() 获取API Key 额度及用量信息。
 * @method void setBalance(SubPackageBalance $Balance) 设置API Key 额度及用量信息。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTokenPlanApiKeyResponse extends AbstractModel
{
    /**
     * @var TokenPlanApiKeyInfo API Key 详情信息。
     */
    public $ApiKey;

    /**
     * @var SubPackageBalance API Key 额度及用量信息。
     */
    public $Balance;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param TokenPlanApiKeyInfo $ApiKey API Key 详情信息。
     * @param SubPackageBalance $Balance API Key 额度及用量信息。
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
        if (array_key_exists("ApiKey",$param) and $param["ApiKey"] !== null) {
            $this->ApiKey = new TokenPlanApiKeyInfo();
            $this->ApiKey->deserialize($param["ApiKey"]);
        }

        if (array_key_exists("Balance",$param) and $param["Balance"] !== null) {
            $this->Balance = new SubPackageBalance();
            $this->Balance->deserialize($param["Balance"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
