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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RateLimit规则
 *
 * @method integer getThreshold() 获取RateLimit统计阈值
 * @method void setThreshold(integer $Threshold) 设置RateLimit统计阈值
 * @method integer getPeriod() 获取RateLimit统计时间
 * @method void setPeriod(integer $Period) 设置RateLimit统计时间
 * @method string getRuleName() 获取规则名
 * @method void setRuleName(string $RuleName) 设置规则名
 * @method string getAction() 获取动作：monitor(观察), drop(拦截)
 * @method void setAction(string $Action) 设置动作：monitor(观察), drop(拦截)
 * @method integer getPunishTime() 获取惩罚时长
 * @method void setPunishTime(integer $PunishTime) 设置惩罚时长
 * @method string getPunishTimeUnit() 获取处罚时长单位，second
 * @method void setPunishTimeUnit(string $PunishTimeUnit) 设置处罚时长单位，second
 * @method string getRuleStatus() 获取规则状态
 * @method void setRuleStatus(string $RuleStatus) 设置规则状态
 * @method array getConditions() 获取规则
 * @method void setConditions(array $Conditions) 设置规则
 * @method integer getRulePriority() 获取规则权重
 * @method void setRulePriority(integer $RulePriority) 设置规则权重
 * @method integer getRuleID() 获取规则id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleID(integer $RuleID) 设置规则id
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFreqFields() 获取过滤词
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFreqFields(array $FreqFields) 设置过滤词
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class RateLimitUserRule extends AbstractModel
{
    /**
     * @var integer RateLimit统计阈值
     */
    public $Threshold;

    /**
     * @var integer RateLimit统计时间
     */
    public $Period;

    /**
     * @var string 规则名
     */
    public $RuleName;

    /**
     * @var string 动作：monitor(观察), drop(拦截)
     */
    public $Action;

    /**
     * @var integer 惩罚时长
     */
    public $PunishTime;

    /**
     * @var string 处罚时长单位，second
     */
    public $PunishTimeUnit;

    /**
     * @var string 规则状态
     */
    public $RuleStatus;

    /**
     * @var array 规则
     */
    public $Conditions;

    /**
     * @var integer 规则权重
     */
    public $RulePriority;

    /**
     * @var integer 规则id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleID;

    /**
     * @var array 过滤词
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FreqFields;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @param integer $Threshold RateLimit统计阈值
     * @param integer $Period RateLimit统计时间
     * @param string $RuleName 规则名
     * @param string $Action 动作：monitor(观察), drop(拦截)
     * @param integer $PunishTime 惩罚时长
     * @param string $PunishTimeUnit 处罚时长单位，second
     * @param string $RuleStatus 规则状态
     * @param array $Conditions 规则
     * @param integer $RulePriority 规则权重
     * @param integer $RuleID 规则id
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FreqFields 过滤词
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
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
        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("PunishTime",$param) and $param["PunishTime"] !== null) {
            $this->PunishTime = $param["PunishTime"];
        }

        if (array_key_exists("PunishTimeUnit",$param) and $param["PunishTimeUnit"] !== null) {
            $this->PunishTimeUnit = $param["PunishTimeUnit"];
        }

        if (array_key_exists("RuleStatus",$param) and $param["RuleStatus"] !== null) {
            $this->RuleStatus = $param["RuleStatus"];
        }

        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = [];
            foreach ($param["Conditions"] as $key => $value){
                $obj = new ACLCondition();
                $obj->deserialize($value);
                array_push($this->Conditions, $obj);
            }
        }

        if (array_key_exists("RulePriority",$param) and $param["RulePriority"] !== null) {
            $this->RulePriority = $param["RulePriority"];
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("FreqFields",$param) and $param["FreqFields"] !== null) {
            $this->FreqFields = $param["FreqFields"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
