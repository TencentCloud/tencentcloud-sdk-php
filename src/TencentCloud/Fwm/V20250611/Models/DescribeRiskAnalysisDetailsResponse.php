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
namespace TencentCloud\Fwm\V20250611\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRiskAnalysisDetails返回参数结构体
 *
 * @method array getEnterpriseSecurityGroupRule() 获取风险企业安全组规则列表
 * @method void setEnterpriseSecurityGroupRule(array $EnterpriseSecurityGroupRule) 设置风险企业安全组规则列表
 * @method array getSecurityGroupPolicy() 获取风险安全组规则列表
 * @method void setSecurityGroupPolicy(array $SecurityGroupPolicy) 设置风险安全组规则列表
 * @method integer getStatus() 获取实时分析状态，1分析执行中请轮询，0分析已结束
 * @method void setStatus(integer $Status) 设置实时分析状态，1分析执行中请轮询，0分析已结束
 * @method array getEnterpriseSecurityGroupRuleIPV6() 获取风险企业安全组IPV6规则列表
 * @method void setEnterpriseSecurityGroupRuleIPV6(array $EnterpriseSecurityGroupRuleIPV6) 设置风险企业安全组IPV6规则列表
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRiskAnalysisDetailsResponse extends AbstractModel
{
    /**
     * @var array 风险企业安全组规则列表
     */
    public $EnterpriseSecurityGroupRule;

    /**
     * @var array 风险安全组规则列表
     */
    public $SecurityGroupPolicy;

    /**
     * @var integer 实时分析状态，1分析执行中请轮询，0分析已结束
     */
    public $Status;

    /**
     * @var array 风险企业安全组IPV6规则列表
     */
    public $EnterpriseSecurityGroupRuleIPV6;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $EnterpriseSecurityGroupRule 风险企业安全组规则列表
     * @param array $SecurityGroupPolicy 风险安全组规则列表
     * @param integer $Status 实时分析状态，1分析执行中请轮询，0分析已结束
     * @param array $EnterpriseSecurityGroupRuleIPV6 风险企业安全组IPV6规则列表
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
        if (array_key_exists("EnterpriseSecurityGroupRule",$param) and $param["EnterpriseSecurityGroupRule"] !== null) {
            $this->EnterpriseSecurityGroupRule = [];
            foreach ($param["EnterpriseSecurityGroupRule"] as $key => $value){
                $obj = new AnalysisSgRuleInfoResp();
                $obj->deserialize($value);
                array_push($this->EnterpriseSecurityGroupRule, $obj);
            }
        }

        if (array_key_exists("SecurityGroupPolicy",$param) and $param["SecurityGroupPolicy"] !== null) {
            $this->SecurityGroupPolicy = [];
            foreach ($param["SecurityGroupPolicy"] as $key => $value){
                $obj = new SecurityGroupRiskPolicy();
                $obj->deserialize($value);
                array_push($this->SecurityGroupPolicy, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("EnterpriseSecurityGroupRuleIPV6",$param) and $param["EnterpriseSecurityGroupRuleIPV6"] !== null) {
            $this->EnterpriseSecurityGroupRuleIPV6 = [];
            foreach ($param["EnterpriseSecurityGroupRuleIPV6"] as $key => $value){
                $obj = new AnalysisSgRuleInfoResp();
                $obj->deserialize($value);
                array_push($this->EnterpriseSecurityGroupRuleIPV6, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
