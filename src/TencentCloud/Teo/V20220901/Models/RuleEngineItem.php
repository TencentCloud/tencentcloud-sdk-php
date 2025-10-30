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
 * @method string getStatus() 获取规则状态。取值有：<li> enable: 启用； </li><li> disable: 未启用。</li>
 * @method void setStatus(string $Status) 设置规则状态。取值有：<li> enable: 启用； </li><li> disable: 未启用。</li>
 * @method string getRuleId() 获取规则 ID。规则的唯一性标识，当调用 ModifyL7AccRules 时，该参数必填。
 * @method void setRuleId(string $RuleId) 设置规则 ID。规则的唯一性标识，当调用 ModifyL7AccRules 时，该参数必填。
 * @method string getRuleName() 获取规则名称。名称长度限制不超过 255 个字符。
 * @method void setRuleName(string $RuleName) 设置规则名称。名称长度限制不超过 255 个字符。
 * @method array getDescription() 获取规则注释。可以填写多个注释。
 * @method void setDescription(array $Description) 设置规则注释。可以填写多个注释。
 * @method array getBranches() 获取子规则分支。此列表当前只支持填写一项规则，多填无效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBranches(array $Branches) 设置子规则分支。此列表当前只支持填写一项规则，多填无效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRulePriority() 获取规则优先级。仅作为出参使用。
 * @method void setRulePriority(integer $RulePriority) 设置规则优先级。仅作为出参使用。
 */
class RuleEngineItem extends AbstractModel
{
    /**
     * @var string 规则状态。取值有：<li> enable: 启用； </li><li> disable: 未启用。</li>
     */
    public $Status;

    /**
     * @var string 规则 ID。规则的唯一性标识，当调用 ModifyL7AccRules 时，该参数必填。
     */
    public $RuleId;

    /**
     * @var string 规则名称。名称长度限制不超过 255 个字符。
     */
    public $RuleName;

    /**
     * @var array 规则注释。可以填写多个注释。
     */
    public $Description;

    /**
     * @var array 子规则分支。此列表当前只支持填写一项规则，多填无效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Branches;

    /**
     * @var integer 规则优先级。仅作为出参使用。
     */
    public $RulePriority;

    /**
     * @param string $Status 规则状态。取值有：<li> enable: 启用； </li><li> disable: 未启用。</li>
     * @param string $RuleId 规则 ID。规则的唯一性标识，当调用 ModifyL7AccRules 时，该参数必填。
     * @param string $RuleName 规则名称。名称长度限制不超过 255 个字符。
     * @param array $Description 规则注释。可以填写多个注释。
     * @param array $Branches 子规则分支。此列表当前只支持填写一项规则，多填无效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RulePriority 规则优先级。仅作为出参使用。
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
