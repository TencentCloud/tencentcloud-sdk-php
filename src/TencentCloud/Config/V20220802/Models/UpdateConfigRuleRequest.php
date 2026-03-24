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
 * UpdateConfigRule请求参数结构体
 *
 * @method array getTriggerType() 获取触发类型，最多支持两种
 * @method void setTriggerType(array $TriggerType) 设置触发类型，最多支持两种
 * @method integer getRiskLevel() 获取风险等级
1：高风险。
2：中风险。
3：低风险。
 * @method void setRiskLevel(integer $RiskLevel) 设置风险等级
1：高风险。
2：中风险。
3：低风险。
 * @method string getRuleId() 获取规则ID
 * @method void setRuleId(string $RuleId) 设置规则ID
 * @method string getRuleName() 获取规则名称
 * @method void setRuleName(string $RuleName) 设置规则名称
 * @method array getInputParameter() 获取入参
 * @method void setInputParameter(array $InputParameter) 设置入参
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method array getRegionsScope() 获取规则评估地域范围，规则仅对指定地域中的资源生效。
支持的地域范围config:ListResourceRegions返回的地域
 * @method void setRegionsScope(array $RegionsScope) 设置规则评估地域范围，规则仅对指定地域中的资源生效。
支持的地域范围config:ListResourceRegions返回的地域
 * @method array getTagsScope() 获取规则评估标签范围，规则仅对绑定指定标签的资源生效。
 * @method void setTagsScope(array $TagsScope) 设置规则评估标签范围，规则仅对绑定指定标签的资源生效。
 * @method array getExcludeResourceIdsScope() 获取规则对指定资源ID无效，即不对该资源执行评估。
 * @method void setExcludeResourceIdsScope(array $ExcludeResourceIdsScope) 设置规则对指定资源ID无效，即不对该资源执行评估。
 */
class UpdateConfigRuleRequest extends AbstractModel
{
    /**
     * @var array 触发类型，最多支持两种
     */
    public $TriggerType;

    /**
     * @var integer 风险等级
1：高风险。
2：中风险。
3：低风险。
     */
    public $RiskLevel;

    /**
     * @var string 规则ID
     */
    public $RuleId;

    /**
     * @var string 规则名称
     */
    public $RuleName;

    /**
     * @var array 入参
     */
    public $InputParameter;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var array 规则评估地域范围，规则仅对指定地域中的资源生效。
支持的地域范围config:ListResourceRegions返回的地域
     */
    public $RegionsScope;

    /**
     * @var array 规则评估标签范围，规则仅对绑定指定标签的资源生效。
     */
    public $TagsScope;

    /**
     * @var array 规则对指定资源ID无效，即不对该资源执行评估。
     */
    public $ExcludeResourceIdsScope;

    /**
     * @param array $TriggerType 触发类型，最多支持两种
     * @param integer $RiskLevel 风险等级
1：高风险。
2：中风险。
3：低风险。
     * @param string $RuleId 规则ID
     * @param string $RuleName 规则名称
     * @param array $InputParameter 入参
     * @param string $Description 描述
     * @param array $RegionsScope 规则评估地域范围，规则仅对指定地域中的资源生效。
支持的地域范围config:ListResourceRegions返回的地域
     * @param array $TagsScope 规则评估标签范围，规则仅对绑定指定标签的资源生效。
     * @param array $ExcludeResourceIdsScope 规则对指定资源ID无效，即不对该资源执行评估。
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
        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = [];
            foreach ($param["TriggerType"] as $key => $value){
                $obj = new TriggerType();
                $obj->deserialize($value);
                array_push($this->TriggerType, $obj);
            }
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("InputParameter",$param) and $param["InputParameter"] !== null) {
            $this->InputParameter = [];
            foreach ($param["InputParameter"] as $key => $value){
                $obj = new InputParameter();
                $obj->deserialize($value);
                array_push($this->InputParameter, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RegionsScope",$param) and $param["RegionsScope"] !== null) {
            $this->RegionsScope = $param["RegionsScope"];
        }

        if (array_key_exists("TagsScope",$param) and $param["TagsScope"] !== null) {
            $this->TagsScope = [];
            foreach ($param["TagsScope"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagsScope, $obj);
            }
        }

        if (array_key_exists("ExcludeResourceIdsScope",$param) and $param["ExcludeResourceIdsScope"] !== null) {
            $this->ExcludeResourceIdsScope = $param["ExcludeResourceIdsScope"];
        }
    }
}
