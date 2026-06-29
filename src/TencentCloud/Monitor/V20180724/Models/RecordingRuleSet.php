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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Prometheus 聚合规则响应结构体内信息
 *
 * @method string getRuleId() 获取<p>规则 ID</p>
 * @method void setRuleId(string $RuleId) 设置<p>规则 ID</p>
 * @method integer getRuleState() 获取<p>规则状态码</p>
 * @method void setRuleState(integer $RuleState) 设置<p>规则状态码</p>
 * @method string getName() 获取<p>分组名称</p>
 * @method void setName(string $Name) 设置<p>分组名称</p>
 * @method string getGroup() 获取<p>规则内容组</p>
 * @method void setGroup(string $Group) 设置<p>规则内容组</p>
 * @method integer getTotal() 获取<p>规则数量</p>
 * @method void setTotal(integer $Total) 设置<p>规则数量</p>
 * @method string getCreatedAt() 获取<p>规则创建时间</p>
 * @method void setCreatedAt(string $CreatedAt) 设置<p>规则创建时间</p>
 * @method string getUpdatedAt() 获取<p>规则最近更新时间</p>
 * @method void setUpdatedAt(string $UpdatedAt) 设置<p>规则最近更新时间</p>
 * @method string getRuleName() 获取<p>规则名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleName(string $RuleName) 设置<p>规则名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class RecordingRuleSet extends AbstractModel
{
    /**
     * @var string <p>规则 ID</p>
     */
    public $RuleId;

    /**
     * @var integer <p>规则状态码</p>
     */
    public $RuleState;

    /**
     * @var string <p>分组名称</p>
     */
    public $Name;

    /**
     * @var string <p>规则内容组</p>
     */
    public $Group;

    /**
     * @var integer <p>规则数量</p>
     */
    public $Total;

    /**
     * @var string <p>规则创建时间</p>
     */
    public $CreatedAt;

    /**
     * @var string <p>规则最近更新时间</p>
     */
    public $UpdatedAt;

    /**
     * @var string <p>规则名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleName;

    /**
     * @param string $RuleId <p>规则 ID</p>
     * @param integer $RuleState <p>规则状态码</p>
     * @param string $Name <p>分组名称</p>
     * @param string $Group <p>规则内容组</p>
     * @param integer $Total <p>规则数量</p>
     * @param string $CreatedAt <p>规则创建时间</p>
     * @param string $UpdatedAt <p>规则最近更新时间</p>
     * @param string $RuleName <p>规则名称</p>
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
