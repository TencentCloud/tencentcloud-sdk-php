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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 托管规则详情
 *
 * @method string getRuleId() 获取托管规则Id。
 * @method void setRuleId(string $RuleId) 设置托管规则Id。
 * @method string getRiskLevel() 获取托管规则的防护级别。取值有：<li>low：低风险，此规则风险较低，适用于非常严格控制环境下的访问场景，该等级规则可能造成较多的误报；</li><li>medium：中风险，表示此条规则风险正常，适用较为严格的防护场景；</li><li>high：高风险，表示此条规则风险较高，大多数场景不会产生误报；</li><li>extreme：超高风险，表示此条规则风险极高，基本不会产生误报；</li>
 * @method void setRiskLevel(string $RiskLevel) 设置托管规则的防护级别。取值有：<li>low：低风险，此规则风险较低，适用于非常严格控制环境下的访问场景，该等级规则可能造成较多的误报；</li><li>medium：中风险，表示此条规则风险正常，适用较为严格的防护场景；</li><li>high：高风险，表示此条规则风险较高，大多数场景不会产生误报；</li><li>extreme：超高风险，表示此条规则风险极高，基本不会产生误报；</li>
 * @method string getDescription() 获取规则描述。
 * @method void setDescription(string $Description) 设置规则描述。
 * @method array getTags() 获取规则标签。部分类型的规则不存在标签。
 * @method void setTags(array $Tags) 设置规则标签。部分类型的规则不存在标签。
 * @method string getRuleVersion() 获取规则所属版本。
 * @method void setRuleVersion(string $RuleVersion) 设置规则所属版本。
 */
class ManagedRuleDetail extends AbstractModel
{
    /**
     * @var string 托管规则Id。
     */
    public $RuleId;

    /**
     * @var string 托管规则的防护级别。取值有：<li>low：低风险，此规则风险较低，适用于非常严格控制环境下的访问场景，该等级规则可能造成较多的误报；</li><li>medium：中风险，表示此条规则风险正常，适用较为严格的防护场景；</li><li>high：高风险，表示此条规则风险较高，大多数场景不会产生误报；</li><li>extreme：超高风险，表示此条规则风险极高，基本不会产生误报；</li>
     */
    public $RiskLevel;

    /**
     * @var string 规则描述。
     */
    public $Description;

    /**
     * @var array 规则标签。部分类型的规则不存在标签。
     */
    public $Tags;

    /**
     * @var string 规则所属版本。
     */
    public $RuleVersion;

    /**
     * @param string $RuleId 托管规则Id。
     * @param string $RiskLevel 托管规则的防护级别。取值有：<li>low：低风险，此规则风险较低，适用于非常严格控制环境下的访问场景，该等级规则可能造成较多的误报；</li><li>medium：中风险，表示此条规则风险正常，适用较为严格的防护场景；</li><li>high：高风险，表示此条规则风险较高，大多数场景不会产生误报；</li><li>extreme：超高风险，表示此条规则风险极高，基本不会产生误报；</li>
     * @param string $Description 规则描述。
     * @param array $Tags 规则标签。部分类型的规则不存在标签。
     * @param string $RuleVersion 规则所属版本。
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("RuleVersion",$param) and $param["RuleVersion"] !== null) {
            $this->RuleVersion = $param["RuleVersion"];
        }
    }
}
