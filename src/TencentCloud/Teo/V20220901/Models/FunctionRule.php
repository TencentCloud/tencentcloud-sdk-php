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
 * 边缘函数触发规则。
 *
 * @method string getRuleId() 获取规则ID。
 * @method void setRuleId(string $RuleId) 设置规则ID。
 * @method array getFunctionRuleConditions() 获取规则条件列表，列表项之间为或关系。
 * @method void setFunctionRuleConditions(array $FunctionRuleConditions) 设置规则条件列表，列表项之间为或关系。
 * @method string getTriggerType() 获取函数选择配置类型：
<li> direct：直接指定执行函数；</li>
<li> weight：基于权重比选择函数；</li>
<li> region：基于客户端 IP 的国家/地区选择函数。</li>

 * @method void setTriggerType(string $TriggerType) 设置函数选择配置类型：
<li> direct：直接指定执行函数；</li>
<li> weight：基于权重比选择函数；</li>
<li> region：基于客户端 IP 的国家/地区选择函数。</li>

 * @method string getFunctionId() 获取指定执行的函数 ID。当 TriggerType 为 direct 时有效。
 * @method void setFunctionId(string $FunctionId) 设置指定执行的函数 ID。当 TriggerType 为 direct 时有效。
 * @method string getFunctionName() 获取指定执行的函数名称。
 * @method void setFunctionName(string $FunctionName) 设置指定执行的函数名称。
 * @method array getRegionMappingSelections() 获取基于客户端 IP 国家/地区的函数选择配置。
 * @method void setRegionMappingSelections(array $RegionMappingSelections) 设置基于客户端 IP 国家/地区的函数选择配置。
 * @method array getWeightedSelections() 获取基于权重的函数选择配置。
 * @method void setWeightedSelections(array $WeightedSelections) 设置基于权重的函数选择配置。
 * @method integer getPriority() 获取函数触发规则优先级，数值越大，优先级越高。
 * @method void setPriority(integer $Priority) 设置函数触发规则优先级，数值越大，优先级越高。
 * @method string getRemark() 获取规则描述。
 * @method void setRemark(string $Remark) 设置规则描述。
 * @method string getCreateTime() 获取创建时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
 * @method string getUpdateTime() 获取更新时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
 */
class FunctionRule extends AbstractModel
{
    /**
     * @var string 规则ID。
     */
    public $RuleId;

    /**
     * @var array 规则条件列表，列表项之间为或关系。
     */
    public $FunctionRuleConditions;

    /**
     * @var string 函数选择配置类型：
<li> direct：直接指定执行函数；</li>
<li> weight：基于权重比选择函数；</li>
<li> region：基于客户端 IP 的国家/地区选择函数。</li>

     */
    public $TriggerType;

    /**
     * @var string 指定执行的函数 ID。当 TriggerType 为 direct 时有效。
     */
    public $FunctionId;

    /**
     * @var string 指定执行的函数名称。
     */
    public $FunctionName;

    /**
     * @var array 基于客户端 IP 国家/地区的函数选择配置。
     */
    public $RegionMappingSelections;

    /**
     * @var array 基于权重的函数选择配置。
     */
    public $WeightedSelections;

    /**
     * @var integer 函数触发规则优先级，数值越大，优先级越高。
     */
    public $Priority;

    /**
     * @var string 规则描述。
     */
    public $Remark;

    /**
     * @var string 创建时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
     */
    public $CreateTime;

    /**
     * @var string 更新时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
     */
    public $UpdateTime;

    /**
     * @param string $RuleId 规则ID。
     * @param array $FunctionRuleConditions 规则条件列表，列表项之间为或关系。
     * @param string $TriggerType 函数选择配置类型：
<li> direct：直接指定执行函数；</li>
<li> weight：基于权重比选择函数；</li>
<li> region：基于客户端 IP 的国家/地区选择函数。</li>

     * @param string $FunctionId 指定执行的函数 ID。当 TriggerType 为 direct 时有效。
     * @param string $FunctionName 指定执行的函数名称。
     * @param array $RegionMappingSelections 基于客户端 IP 国家/地区的函数选择配置。
     * @param array $WeightedSelections 基于权重的函数选择配置。
     * @param integer $Priority 函数触发规则优先级，数值越大，优先级越高。
     * @param string $Remark 规则描述。
     * @param string $CreateTime 创建时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
     * @param string $UpdateTime 更新时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
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

        if (array_key_exists("FunctionRuleConditions",$param) and $param["FunctionRuleConditions"] !== null) {
            $this->FunctionRuleConditions = [];
            foreach ($param["FunctionRuleConditions"] as $key => $value){
                $obj = new FunctionRuleCondition();
                $obj->deserialize($value);
                array_push($this->FunctionRuleConditions, $obj);
            }
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("FunctionId",$param) and $param["FunctionId"] !== null) {
            $this->FunctionId = $param["FunctionId"];
        }

        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("RegionMappingSelections",$param) and $param["RegionMappingSelections"] !== null) {
            $this->RegionMappingSelections = [];
            foreach ($param["RegionMappingSelections"] as $key => $value){
                $obj = new FunctionRegionSelection();
                $obj->deserialize($value);
                array_push($this->RegionMappingSelections, $obj);
            }
        }

        if (array_key_exists("WeightedSelections",$param) and $param["WeightedSelections"] !== null) {
            $this->WeightedSelections = [];
            foreach ($param["WeightedSelections"] as $key => $value){
                $obj = new FunctionWeightedSelection();
                $obj->deserialize($value);
                array_push($this->WeightedSelections, $obj);
            }
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
