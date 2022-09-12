<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Prometheus 聚合规则响应结构体内信息
 *
 * @method string getRuleId() 获取规则 ID
 * @method void setRuleId(string $RuleId) 设置规则 ID
 * @method integer getRuleState() 获取规则状态码
 * @method void setRuleState(integer $RuleState) 设置规则状态码
 * @method string getName() 获取分组名称
 * @method void setName(string $Name) 设置分组名称
 * @method string getGroup() 获取规则内容组
 * @method void setGroup(string $Group) 设置规则内容组
 * @method integer getTotal() 获取规则数量
 * @method void setTotal(integer $Total) 设置规则数量
 * @method string getCreatedAt() 获取规则创建时间
 * @method void setCreatedAt(string $CreatedAt) 设置规则创建时间
 * @method string getUpdatedAt() 获取规则最近更新时间
 * @method void setUpdatedAt(string $UpdatedAt) 设置规则最近更新时间
 * @method string getRuleName() 获取规则名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleName(string $RuleName) 设置规则名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class RecordingRuleSet extends AbstractModel
{
    /**
     * @var string 规则 ID
     */
    public $RuleId;

    /**
     * @var integer 规则状态码
     */
    public $RuleState;

    /**
     * @var string 分组名称
     */
    public $Name;

    /**
     * @var string 规则内容组
     */
    public $Group;

    /**
     * @var integer 规则数量
     */
    public $Total;

    /**
     * @var string 规则创建时间
     */
    public $CreatedAt;

    /**
     * @var string 规则最近更新时间
     */
    public $UpdatedAt;

    /**
     * @var string 规则名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleName;

    /**
     * @param string $RuleId 规则 ID
     * @param integer $RuleState 规则状态码
     * @param string $Name 分组名称
     * @param string $Group 规则内容组
     * @param integer $Total 规则数量
     * @param string $CreatedAt 规则创建时间
     * @param string $UpdatedAt 规则最近更新时间
     * @param string $RuleName 规则名称
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("RuleState",$param) and $param["RuleState"] !== null) {
            $this->RuleState = $param["RuleState"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }
    }
}
