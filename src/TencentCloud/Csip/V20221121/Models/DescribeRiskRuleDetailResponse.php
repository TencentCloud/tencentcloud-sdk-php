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
 * @method string getRiskRuleId() 获取<p>风险规则ID</p>
 * @method void setRiskRuleId(string $RiskRuleId) 设置<p>风险规则ID</p>
 * @method string getProvider() 获取<p>云厂商</p>
 * @method void setProvider(string $Provider) 设置<p>云厂商</p>
 * @method string getRiskName() 获取<p>风险名称</p>
 * @method void setRiskName(string $RiskName) 设置<p>风险名称</p>
 * @method string getRiskInfluence() 获取<p>风险危害</p>
 * @method void setRiskInfluence(string $RiskInfluence) 设置<p>风险危害</p>
 * @method string getRiskFixAdvice() 获取<p>修复指引</p>
 * @method void setRiskFixAdvice(string $RiskFixAdvice) 设置<p>修复指引</p>
 * @method string getAssetType() 获取<p>资产类型</p>
 * @method void setAssetType(string $AssetType) 设置<p>资产类型</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRiskRuleDetailResponse extends AbstractModel
{
    /**
     * @var string <p>风险规则ID</p>
     */
    public $RiskRuleId;

    /**
     * @var string <p>云厂商</p>
     */
    public $Provider;

    /**
     * @var string <p>风险名称</p>
     */
    public $RiskName;

    /**
     * @var string <p>风险危害</p>
     */
    public $RiskInfluence;

    /**
     * @var string <p>修复指引</p>
     */
    public $RiskFixAdvice;

    /**
     * @var string <p>资产类型</p>
     */
    public $AssetType;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $RiskRuleId <p>风险规则ID</p>
     * @param string $Provider <p>云厂商</p>
     * @param string $RiskName <p>风险名称</p>
     * @param string $RiskInfluence <p>风险危害</p>
     * @param string $RiskFixAdvice <p>修复指引</p>
     * @param string $AssetType <p>资产类型</p>
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

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
