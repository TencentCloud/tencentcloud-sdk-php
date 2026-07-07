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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 转发规则修改信息
 *
 * @method array getActions() 获取转发规则动作列表。
 * @method void setActions(array $Actions) 设置转发规则动作列表。
 * @method array getConditions() 获取转发规则条件列表。
 * @method void setConditions(array $Conditions) 设置转发规则条件列表。
 * @method integer getPriority() 获取优先级，值越小优先级越高，取值范围：1~10000。
 * @method void setPriority(integer $Priority) 设置优先级，值越小优先级越高，取值范围：1~10000。
 * @method string getRuleId() 获取转发规则 ID，格式为 rule- 后接 8 位字母数字。
 * @method void setRuleId(string $RuleId) 设置转发规则 ID，格式为 rule- 后接 8 位字母数字。
 * @method string getRuleName() 获取转发规则名称。
 * @method void setRuleName(string $RuleName) 设置转发规则名称。
 */
class RuleModify extends AbstractModel
{
    /**
     * @var array 转发规则动作列表。
     */
    public $Actions;

    /**
     * @var array 转发规则条件列表。
     */
    public $Conditions;

    /**
     * @var integer 优先级，值越小优先级越高，取值范围：1~10000。
     */
    public $Priority;

    /**
     * @var string 转发规则 ID，格式为 rule- 后接 8 位字母数字。
     */
    public $RuleId;

    /**
     * @var string 转发规则名称。
     */
    public $RuleName;

    /**
     * @param array $Actions 转发规则动作列表。
     * @param array $Conditions 转发规则条件列表。
     * @param integer $Priority 优先级，值越小优先级越高，取值范围：1~10000。
     * @param string $RuleId 转发规则 ID，格式为 rule- 后接 8 位字母数字。
     * @param string $RuleName 转发规则名称。
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
        if (array_key_exists("Actions",$param) and $param["Actions"] !== null) {
            $this->Actions = [];
            foreach ($param["Actions"] as $key => $value){
                $obj = new RuleAction();
                $obj->deserialize($value);
                array_push($this->Actions, $obj);
            }
        }

        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = [];
            foreach ($param["Conditions"] as $key => $value){
                $obj = new RuleCondition();
                $obj->deserialize($value);
                array_push($this->Conditions, $obj);
            }
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }
    }
}
