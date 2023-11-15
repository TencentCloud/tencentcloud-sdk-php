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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 规则详情查询结果
 *
 * @method integer getRuleId() 获取联动id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleId(integer $RuleId) 设置联动id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleName() 获取联动名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleName(string $RuleName) 设置联动名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleDesc() 获取联动说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleDesc(string $RuleDesc) 设置联动说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getValidType() 获取1 全天有效，0：固定时间段有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValidType(integer $ValidType) 设置1 全天有效，0：固定时间段有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValidPeriod() 获取有效期，json字符串（全天有效时为空）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValidPeriod(string $ValidPeriod) 设置有效期，json字符串（全天有效时为空）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBeginDate() 获取起始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBeginDate(string $BeginDate) 设置起始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndDate() 获取结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndDate(string $EndDate) 设置结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取启用状态。1-启用，0-停用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置启用状态。1-启用，0-停用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventRule() 获取触发规则，事件的组合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventRule(string $EventRule) 设置触发规则，事件的组合
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEventInfoSet() 获取事件对象集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventInfoSet(array $EventInfoSet) 设置事件对象集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getActionInfoSet() 获取动作对象集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActionInfoSet(array $ActionInfoSet) 设置动作对象集合
注意：此字段可能返回 null，表示取不到有效值。
 */
class RuleDetailRes extends AbstractModel
{
    /**
     * @var integer 联动id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleId;

    /**
     * @var string 联动名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleName;

    /**
     * @var string 联动说明
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleDesc;

    /**
     * @var integer 1 全天有效，0：固定时间段有效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValidType;

    /**
     * @var string 有效期，json字符串（全天有效时为空）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValidPeriod;

    /**
     * @var string 起始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BeginDate;

    /**
     * @var string 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndDate;

    /**
     * @var integer 启用状态。1-启用，0-停用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 触发规则，事件的组合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventRule;

    /**
     * @var array 事件对象集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventInfoSet;

    /**
     * @var array 动作对象集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActionInfoSet;

    /**
     * @param integer $RuleId 联动id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleName 联动名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleDesc 联动说明
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ValidType 1 全天有效，0：固定时间段有效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ValidPeriod 有效期，json字符串（全天有效时为空）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BeginDate 起始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndDate 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 启用状态。1-启用，0-停用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventRule 触发规则，事件的组合
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $EventInfoSet 事件对象集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ActionInfoSet 动作对象集合
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

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleDesc",$param) and $param["RuleDesc"] !== null) {
            $this->RuleDesc = $param["RuleDesc"];
        }

        if (array_key_exists("ValidType",$param) and $param["ValidType"] !== null) {
            $this->ValidType = $param["ValidType"];
        }

        if (array_key_exists("ValidPeriod",$param) and $param["ValidPeriod"] !== null) {
            $this->ValidPeriod = $param["ValidPeriod"];
        }

        if (array_key_exists("BeginDate",$param) and $param["BeginDate"] !== null) {
            $this->BeginDate = $param["BeginDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("EventRule",$param) and $param["EventRule"] !== null) {
            $this->EventRule = $param["EventRule"];
        }

        if (array_key_exists("EventInfoSet",$param) and $param["EventInfoSet"] !== null) {
            $this->EventInfoSet = [];
            foreach ($param["EventInfoSet"] as $key => $value){
                $obj = new EventObj();
                $obj->deserialize($value);
                array_push($this->EventInfoSet, $obj);
            }
        }

        if (array_key_exists("ActionInfoSet",$param) and $param["ActionInfoSet"] !== null) {
            $this->ActionInfoSet = [];
            foreach ($param["ActionInfoSet"] as $key => $value){
                $obj = new ActionObj();
                $obj->deserialize($value);
                array_push($this->ActionInfoSet, $obj);
            }
        }
    }
}
