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
 * 规则引擎规则详情。
 *
 * @method string getStatus() 获取<p>规则状态。取值有：<li> enable: 启用； </li><li> disable: 未启用。</li></p>
 * @method void setStatus(string $Status) 设置<p>规则状态。取值有：<li> enable: 启用； </li><li> disable: 未启用。</li></p>
 * @method string getRuleId() 获取<p>规则 ID。规则的唯一性标识，当调用 ModifyL7AccRule 时，该参数必填。</p>
 * @method void setRuleId(string $RuleId) 设置<p>规则 ID。规则的唯一性标识，当调用 ModifyL7AccRule 时，该参数必填。</p>
 * @method string getRuleName() 获取<p>规则名称。名称长度限制不超过 255 个字符。</p>
 * @method void setRuleName(string $RuleName) 设置<p>规则名称。名称长度限制不超过 255 个字符。</p>
 * @method array getDescription() 获取<p>规则注释。可以填写多个注释。</p>
 * @method void setDescription(array $Description) 设置<p>规则注释。可以填写多个注释。</p>
 * @method array getCustomVariables() 获取<p>规则级自定义变量列表。CustomVariable.Name 需要使用 user.rule. 作为前缀。变量按照数组顺序依次初始化，InitialValue 支持引用站点级自定义变量，以及位于当前变量之前的规则级自定义变量，不支持引用当前变量自身或位于其后的规则级自定义变量。站点级自定义变量可通过 DescribeZoneCustomVariables 接口查询。当 Branches 为空时 CustomVariable 不允许填写，填写无效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomVariables(array $CustomVariables) 设置<p>规则级自定义变量列表。CustomVariable.Name 需要使用 user.rule. 作为前缀。变量按照数组顺序依次初始化，InitialValue 支持引用站点级自定义变量，以及位于当前变量之前的规则级自定义变量，不支持引用当前变量自身或位于其后的规则级自定义变量。站点级自定义变量可通过 DescribeZoneCustomVariables 接口查询。当 Branches 为空时 CustomVariable 不允许填写，填写无效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCustomVariableOperations() 获取<p>规则级自定义变量运算详情。运算中支持引用站点级自定义变量和当前规则已定义的规则级自定义变量。站点级自定义变量可通过 DescribeZoneCustomVariables 接口查询。此列表当前只支持填写一项规则，多填无效。当 Branches 为空时 CustomVariableOperations 不允许填写，填写无效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomVariableOperations(array $CustomVariableOperations) 设置<p>规则级自定义变量运算详情。运算中支持引用站点级自定义变量和当前规则已定义的规则级自定义变量。站点级自定义变量可通过 DescribeZoneCustomVariables 接口查询。此列表当前只支持填写一项规则，多填无效。当 Branches 为空时 CustomVariableOperations 不允许填写，填写无效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBranches() 获取<p>子规则分支。此列表当前只支持填写一项规则，多填无效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBranches(array $Branches) 设置<p>子规则分支。此列表当前只支持填写一项规则，多填无效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRulePriority() 获取<p>规则优先级。仅作为出参使用。</p>
 * @method void setRulePriority(integer $RulePriority) 设置<p>规则优先级。仅作为出参使用。</p>
 */
class RuleEngineItem extends AbstractModel
{
    /**
     * @var string <p>规则状态。取值有：<li> enable: 启用； </li><li> disable: 未启用。</li></p>
     */
    public $Status;

    /**
     * @var string <p>规则 ID。规则的唯一性标识，当调用 ModifyL7AccRule 时，该参数必填。</p>
     */
    public $RuleId;

    /**
     * @var string <p>规则名称。名称长度限制不超过 255 个字符。</p>
     */
    public $RuleName;

    /**
     * @var array <p>规则注释。可以填写多个注释。</p>
     */
    public $Description;

    /**
     * @var array <p>规则级自定义变量列表。CustomVariable.Name 需要使用 user.rule. 作为前缀。变量按照数组顺序依次初始化，InitialValue 支持引用站点级自定义变量，以及位于当前变量之前的规则级自定义变量，不支持引用当前变量自身或位于其后的规则级自定义变量。站点级自定义变量可通过 DescribeZoneCustomVariables 接口查询。当 Branches 为空时 CustomVariable 不允许填写，填写无效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomVariables;

    /**
     * @var array <p>规则级自定义变量运算详情。运算中支持引用站点级自定义变量和当前规则已定义的规则级自定义变量。站点级自定义变量可通过 DescribeZoneCustomVariables 接口查询。此列表当前只支持填写一项规则，多填无效。当 Branches 为空时 CustomVariableOperations 不允许填写，填写无效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomVariableOperations;

    /**
     * @var array <p>子规则分支。此列表当前只支持填写一项规则，多填无效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Branches;

    /**
     * @var integer <p>规则优先级。仅作为出参使用。</p>
     */
    public $RulePriority;

    /**
     * @param string $Status <p>规则状态。取值有：<li> enable: 启用； </li><li> disable: 未启用。</li></p>
     * @param string $RuleId <p>规则 ID。规则的唯一性标识，当调用 ModifyL7AccRule 时，该参数必填。</p>
     * @param string $RuleName <p>规则名称。名称长度限制不超过 255 个字符。</p>
     * @param array $Description <p>规则注释。可以填写多个注释。</p>
     * @param array $CustomVariables <p>规则级自定义变量列表。CustomVariable.Name 需要使用 user.rule. 作为前缀。变量按照数组顺序依次初始化，InitialValue 支持引用站点级自定义变量，以及位于当前变量之前的规则级自定义变量，不支持引用当前变量自身或位于其后的规则级自定义变量。站点级自定义变量可通过 DescribeZoneCustomVariables 接口查询。当 Branches 为空时 CustomVariable 不允许填写，填写无效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CustomVariableOperations <p>规则级自定义变量运算详情。运算中支持引用站点级自定义变量和当前规则已定义的规则级自定义变量。站点级自定义变量可通过 DescribeZoneCustomVariables 接口查询。此列表当前只支持填写一项规则，多填无效。当 Branches 为空时 CustomVariableOperations 不允许填写，填写无效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Branches <p>子规则分支。此列表当前只支持填写一项规则，多填无效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RulePriority <p>规则优先级。仅作为出参使用。</p>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CustomVariables",$param) and $param["CustomVariables"] !== null) {
            $this->CustomVariables = [];
            foreach ($param["CustomVariables"] as $key => $value){
                $obj = new CustomVariable();
                $obj->deserialize($value);
                array_push($this->CustomVariables, $obj);
            }
        }

        if (array_key_exists("CustomVariableOperations",$param) and $param["CustomVariableOperations"] !== null) {
            $this->CustomVariableOperations = [];
            foreach ($param["CustomVariableOperations"] as $key => $value){
                $obj = new CustomVariableOperation();
                $obj->deserialize($value);
                array_push($this->CustomVariableOperations, $obj);
            }
        }

        if (array_key_exists("Branches",$param) and $param["Branches"] !== null) {
            $this->Branches = [];
            foreach ($param["Branches"] as $key => $value){
                $obj = new RuleBranch();
                $obj->deserialize($value);
                array_push($this->Branches, $obj);
            }
        }

        if (array_key_exists("RulePriority",$param) and $param["RulePriority"] !== null) {
            $this->RulePriority = $param["RulePriority"];
        }
    }
}
