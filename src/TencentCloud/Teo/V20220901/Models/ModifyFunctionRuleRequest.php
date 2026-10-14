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
 * ModifyFunctionRule请求参数结构体
 *
 * @method string getZoneId() 获取<p>站点 ID。</p>
 * @method void setZoneId(string $ZoneId) 设置<p>站点 ID。</p>
 * @method string getRuleId() 获取<p>规则 ID。您可以先通过 DescribeFunctionRules 接口来获取需要修改的规则的 RuleId，然后传入修改后的规则内容，原规则内容会被覆盖式更新。</p>
 * @method void setRuleId(string $RuleId) 设置<p>规则 ID。您可以先通过 DescribeFunctionRules 接口来获取需要修改的规则的 RuleId，然后传入修改后的规则内容，原规则内容会被覆盖式更新。</p>
 * @method array getFunctionRuleConditions() 获取<p>规则条件列表，相同触发规则的不同条件匹配项之间为或关系，不填写保持原有配置。</p>
 * @method void setFunctionRuleConditions(array $FunctionRuleConditions) 设置<p>规则条件列表，相同触发规则的不同条件匹配项之间为或关系，不填写保持原有配置。</p>
 * @method string getTriggerType() 获取<p>函数选择配置类型：</p><li> direct：直接指定执行函数；</li><li> weight：基于权重比选择函数；</li><li> region：基于客户端 IP 的国家/地区选择函数。</li>不填时默认为 direct 。
 * @method void setTriggerType(string $TriggerType) 设置<p>函数选择配置类型：</p><li> direct：直接指定执行函数；</li><li> weight：基于权重比选择函数；</li><li> region：基于客户端 IP 的国家/地区选择函数。</li>不填时默认为 direct 。
 * @method string getFunctionId() 获取<p>指定执行的函数 ID。当 TriggerType 为 direct 或 TriggerType 不填时生效。</p>
 * @method void setFunctionId(string $FunctionId) 设置<p>指定执行的函数 ID。当 TriggerType 为 direct 或 TriggerType 不填时生效。</p>
 * @method array getRegionMappingSelections() 获取<p>基于客户端 IP 国家/地区的函数选择配置，当 TriggerType 为 region 时生效且 RegionMappingSelections 必填。RegionMappingSelections 中必须包含一项 Regions 为 Default 的配置，同时还需至少配置一项其他具体的 Region。</p>
 * @method void setRegionMappingSelections(array $RegionMappingSelections) 设置<p>基于客户端 IP 国家/地区的函数选择配置，当 TriggerType 为 region 时生效且 RegionMappingSelections 必填。RegionMappingSelections 中必须包含一项 Regions 为 Default 的配置，同时还需至少配置一项其他具体的 Region。</p>
 * @method array getWeightedSelections() 获取<p>基于权重的函数选择配置，当 TriggerType 为 weight 时生效且 WeightedSelections 必填。WeightedSelections 中的所有权重之和需要为100。</p>
 * @method void setWeightedSelections(array $WeightedSelections) 设置<p>基于权重的函数选择配置，当 TriggerType 为 weight 时生效且 WeightedSelections 必填。WeightedSelections 中的所有权重之和需要为100。</p>
 * @method string getRemark() 获取<p>规则描述，最大支持 60 个字符，不填写保持原有配置。</p>
 * @method void setRemark(string $Remark) 设置<p>规则描述，最大支持 60 个字符，不填写保持原有配置。</p>
 */
class ModifyFunctionRuleRequest extends AbstractModel
{
    /**
     * @var string <p>站点 ID。</p>
     */
    public $ZoneId;

    /**
     * @var string <p>规则 ID。您可以先通过 DescribeFunctionRules 接口来获取需要修改的规则的 RuleId，然后传入修改后的规则内容，原规则内容会被覆盖式更新。</p>
     */
    public $RuleId;

    /**
     * @var array <p>规则条件列表，相同触发规则的不同条件匹配项之间为或关系，不填写保持原有配置。</p>
     */
    public $FunctionRuleConditions;

    /**
     * @var string <p>函数选择配置类型：</p><li> direct：直接指定执行函数；</li><li> weight：基于权重比选择函数；</li><li> region：基于客户端 IP 的国家/地区选择函数。</li>不填时默认为 direct 。
     */
    public $TriggerType;

    /**
     * @var string <p>指定执行的函数 ID。当 TriggerType 为 direct 或 TriggerType 不填时生效。</p>
     */
    public $FunctionId;

    /**
     * @var array <p>基于客户端 IP 国家/地区的函数选择配置，当 TriggerType 为 region 时生效且 RegionMappingSelections 必填。RegionMappingSelections 中必须包含一项 Regions 为 Default 的配置，同时还需至少配置一项其他具体的 Region。</p>
     */
    public $RegionMappingSelections;

    /**
     * @var array <p>基于权重的函数选择配置，当 TriggerType 为 weight 时生效且 WeightedSelections 必填。WeightedSelections 中的所有权重之和需要为100。</p>
     */
    public $WeightedSelections;

    /**
     * @var string <p>规则描述，最大支持 60 个字符，不填写保持原有配置。</p>
     */
    public $Remark;

    /**
     * @param string $ZoneId <p>站点 ID。</p>
     * @param string $RuleId <p>规则 ID。您可以先通过 DescribeFunctionRules 接口来获取需要修改的规则的 RuleId，然后传入修改后的规则内容，原规则内容会被覆盖式更新。</p>
     * @param array $FunctionRuleConditions <p>规则条件列表，相同触发规则的不同条件匹配项之间为或关系，不填写保持原有配置。</p>
     * @param string $TriggerType <p>函数选择配置类型：</p><li> direct：直接指定执行函数；</li><li> weight：基于权重比选择函数；</li><li> region：基于客户端 IP 的国家/地区选择函数。</li>不填时默认为 direct 。
     * @param string $FunctionId <p>指定执行的函数 ID。当 TriggerType 为 direct 或 TriggerType 不填时生效。</p>
     * @param array $RegionMappingSelections <p>基于客户端 IP 国家/地区的函数选择配置，当 TriggerType 为 region 时生效且 RegionMappingSelections 必填。RegionMappingSelections 中必须包含一项 Regions 为 Default 的配置，同时还需至少配置一项其他具体的 Region。</p>
     * @param array $WeightedSelections <p>基于权重的函数选择配置，当 TriggerType 为 weight 时生效且 WeightedSelections 必填。WeightedSelections 中的所有权重之和需要为100。</p>
     * @param string $Remark <p>规则描述，最大支持 60 个字符，不填写保持原有配置。</p>
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
