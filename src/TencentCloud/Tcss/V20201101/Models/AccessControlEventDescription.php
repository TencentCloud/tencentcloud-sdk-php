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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 运行时容器访问控制事件描述信息
 *
 * @method string getDescription() 获取事件规则
 * @method void setDescription(string $Description) 设置事件规则
 * @method string getSolution() 获取解决方案
 * @method void setSolution(string $Solution) 设置解决方案
 * @method string getRemark() 获取事件备注信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置事件备注信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method AccessControlChildRuleInfo getMatchRule() 获取命中规则详细信息
 * @method void setMatchRule(AccessControlChildRuleInfo $MatchRule) 设置命中规则详细信息
 * @method string getRuleName() 获取命中规则名字
 * @method void setRuleName(string $RuleName) 设置命中规则名字
 * @method string getRuleId() 获取命中规则id
 * @method void setRuleId(string $RuleId) 设置命中规则id
 * @method string getOperationTime() 获取事件最后一次处理的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperationTime(string $OperationTime) 设置事件最后一次处理的时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class AccessControlEventDescription extends AbstractModel
{
    /**
     * @var string 事件规则
     */
    public $Description;

    /**
     * @var string 解决方案
     */
    public $Solution;

    /**
     * @var string 事件备注信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var AccessControlChildRuleInfo 命中规则详细信息
     */
    public $MatchRule;

    /**
     * @var string 命中规则名字
     */
    public $RuleName;

    /**
     * @var string 命中规则id
     */
    public $RuleId;

    /**
     * @var string 事件最后一次处理的时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperationTime;

    /**
     * @param string $Description 事件规则
     * @param string $Solution 解决方案
     * @param string $Remark 事件备注信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param AccessControlChildRuleInfo $MatchRule 命中规则详细信息
     * @param string $RuleName 命中规则名字
     * @param string $RuleId 命中规则id
     * @param string $OperationTime 事件最后一次处理的时间
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
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Solution",$param) and $param["Solution"] !== null) {
            $this->Solution = $param["Solution"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("MatchRule",$param) and $param["MatchRule"] !== null) {
            $this->MatchRule = new AccessControlChildRuleInfo();
            $this->MatchRule->deserialize($param["MatchRule"]);
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("OperationTime",$param) and $param["OperationTime"] !== null) {
            $this->OperationTime = $param["OperationTime"];
        }
    }
}
