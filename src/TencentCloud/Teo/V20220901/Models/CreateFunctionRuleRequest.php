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
 * CreateFunctionRule请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method array getFunctionRuleConditions() 获取规则条件列表，相同触发规则的不同条件匹配项之间为或关系。
 * @method void setFunctionRuleConditions(array $FunctionRuleConditions) 设置规则条件列表，相同触发规则的不同条件匹配项之间为或关系。
 * @method string getTriggerType() 获取函数选择配置类型：
<li> direct：直接指定执行函数；</li>
<li> weight：基于权重比选择函数；</li>
<li> region：基于客户端 IP 的国家/地区选择函数。</li>
不填时默认为 direct 。
 * @method void setTriggerType(string $TriggerType) 设置函数选择配置类型：
<li> direct：直接指定执行函数；</li>
<li> weight：基于权重比选择函数；</li>
<li> region：基于客户端 IP 的国家/地区选择函数。</li>
不填时默认为 direct 。
 * @method string getFunctionId() 获取指定执行的函数 ID。当 TriggerType 为 direct 或 TriggerType 不填时生效。
 * @method void setFunctionId(string $FunctionId) 设置指定执行的函数 ID。当 TriggerType 为 direct 或 TriggerType 不填时生效。
 * @method array getRegionMappingSelections() 获取基于客户端 IP 国家/地区的函数选择配置，当 TriggerType 为 region 时生效且 RegionMappingSelections 必填。RegionMappingSelections 中至少包含一项 Regions 为 Default 的配置。
 * @method void setRegionMappingSelections(array $RegionMappingSelections) 设置基于客户端 IP 国家/地区的函数选择配置，当 TriggerType 为 region 时生效且 RegionMappingSelections 必填。RegionMappingSelections 中至少包含一项 Regions 为 Default 的配置。
 * @method array getWeightedSelections() 获取基于权重的函数选择配置，当 TriggerType 为 weight 时生效且 WeightedSelections 必填。WeightedSelections 中的所有权重之和需要为100。
 * @method void setWeightedSelections(array $WeightedSelections) 设置基于权重的函数选择配置，当 TriggerType 为 weight 时生效且 WeightedSelections 必填。WeightedSelections 中的所有权重之和需要为100。
 * @method string getRemark() 获取规则描述，最大支持 60 个字符。
 * @method void setRemark(string $Remark) 设置规则描述，最大支持 60 个字符。
 */
class CreateFunctionRuleRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var array 规则条件列表，相同触发规则的不同条件匹配项之间为或关系。
     */
    public $FunctionRuleConditions;

    /**
     * @var string 函数选择配置类型：
<li> direct：直接指定执行函数；</li>
<li> weight：基于权重比选择函数；</li>
<li> region：基于客户端 IP 的国家/地区选择函数。</li>
不填时默认为 direct 。
     */
    public $TriggerType;

    /**
     * @var string 指定执行的函数 ID。当 TriggerType 为 direct 或 TriggerType 不填时生效。
     */
    public $FunctionId;

    /**
     * @var array 基于客户端 IP 国家/地区的函数选择配置，当 TriggerType 为 region 时生效且 RegionMappingSelections 必填。RegionMappingSelections 中至少包含一项 Regions 为 Default 的配置。
     */
    public $RegionMappingSelections;

    /**
     * @var array 基于权重的函数选择配置，当 TriggerType 为 weight 时生效且 WeightedSelections 必填。WeightedSelections 中的所有权重之和需要为100。
     */
    public $WeightedSelections;

    /**
     * @var string 规则描述，最大支持 60 个字符。
     */
    public $Remark;

    /**
     * @param string $ZoneId 站点 ID。
     * @param array $FunctionRuleConditions 规则条件列表，相同触发规则的不同条件匹配项之间为或关系。
     * @param string $TriggerType 函数选择配置类型：
<li> direct：直接指定执行函数；</li>
<li> weight：基于权重比选择函数；</li>
<li> region：基于客户端 IP 的国家/地区选择函数。</li>
不填时默认为 direct 。
     * @param string $FunctionId 指定执行的函数 ID。当 TriggerType 为 direct 或 TriggerType 不填时生效。
     * @param array $RegionMappingSelections 基于客户端 IP 国家/地区的函数选择配置，当 TriggerType 为 region 时生效且 RegionMappingSelections 必填。RegionMappingSelections 中至少包含一项 Regions 为 Default 的配置。
     * @param array $WeightedSelections 基于权重的函数选择配置，当 TriggerType 为 weight 时生效且 WeightedSelections 必填。WeightedSelections 中的所有权重之和需要为100。
     * @param string $Remark 规则描述，最大支持 60 个字符。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
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

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
