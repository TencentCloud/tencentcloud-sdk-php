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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRiskRuleDetail返回参数结构体
 *
 * @method string getRiskRuleId() 获取风险规则ID
 * @method void setRiskRuleId(string $RiskRuleId) 设置风险规则ID
 * @method string getProvider() 获取云厂商
 * @method void setProvider(string $Provider) 设置云厂商
 * @method string getRiskName() 获取风险名称
 * @method void setRiskName(string $RiskName) 设置风险名称
 * @method string getRiskInfluence() 获取风险危害
 * @method void setRiskInfluence(string $RiskInfluence) 设置风险危害
 * @method string getRiskFixAdvice() 获取修复指引
 * @method void setRiskFixAdvice(string $RiskFixAdvice) 设置修复指引
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRiskRuleDetailResponse extends AbstractModel
{
    /**
     * @var string 风险规则ID
     */
    public $RiskRuleId;

    /**
     * @var string 云厂商
     */
    public $Provider;

    /**
     * @var string 风险名称
     */
    public $RiskName;

    /**
     * @var string 风险危害
     */
    public $RiskInfluence;

    /**
     * @var string 修复指引
     */
    public $RiskFixAdvice;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $RiskRuleId 风险规则ID
     * @param string $Provider 云厂商
     * @param string $RiskName 风险名称
     * @param string $RiskInfluence 风险危害
     * @param string $RiskFixAdvice 修复指引
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
        if (array_key_exists("RiskRuleId",$param) and $param["RiskRuleId"] !== null) {
            $this->RiskRuleId = $param["RiskRuleId"];
        }

        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("RiskName",$param) and $param["RiskName"] !== null) {
            $this->RiskName = $param["RiskName"];
        }

        if (array_key_exists("RiskInfluence",$param) and $param["RiskInfluence"] !== null) {
            $this->RiskInfluence = $param["RiskInfluence"];
        }

        if (array_key_exists("RiskFixAdvice",$param) and $param["RiskFixAdvice"] !== null) {
            $this->RiskFixAdvice = $param["RiskFixAdvice"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
