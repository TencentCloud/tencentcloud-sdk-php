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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListConfigRuleEvaluationResults请求参数结构体
 *
 * @method string getConfigRuleId() 获取规则ID
 * @method void setConfigRuleId(string $ConfigRuleId) 设置规则ID
 * @method integer getLimit() 获取偏移量
 * @method void setLimit(integer $Limit) 设置偏移量
 * @method integer getOffset() 获取当前页
 * @method void setOffset(integer $Offset) 设置当前页
 * @method array getResourceType() 获取类型
 * @method void setResourceType(array $ResourceType) 设置类型
 * @method array getComplianceType() 获取评估结果 COMPLIANT：合规   NON_COMPLIANT：不合规
 * @method void setComplianceType(array $ComplianceType) 设置评估结果 COMPLIANT：合规   NON_COMPLIANT：不合规
 */
class ListConfigRuleEvaluationResultsRequest extends AbstractModel
{
    /**
     * @var string 规则ID
     */
    public $ConfigRuleId;

    /**
     * @var integer 偏移量
     */
    public $Limit;

    /**
     * @var integer 当前页
     */
    public $Offset;

    /**
     * @var array 类型
     */
    public $ResourceType;

    /**
     * @var array 评估结果 COMPLIANT：合规   NON_COMPLIANT：不合规
     */
    public $ComplianceType;

    /**
     * @param string $ConfigRuleId 规则ID
     * @param integer $Limit 偏移量
     * @param integer $Offset 当前页
     * @param array $ResourceType 类型
     * @param array $ComplianceType 评估结果 COMPLIANT：合规   NON_COMPLIANT：不合规
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
        if (array_key_exists("ConfigRuleId",$param) and $param["ConfigRuleId"] !== null) {
            $this->ConfigRuleId = $param["ConfigRuleId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ComplianceType",$param) and $param["ComplianceType"] !== null) {
            $this->ComplianceType = $param["ComplianceType"];
        }
    }
}
