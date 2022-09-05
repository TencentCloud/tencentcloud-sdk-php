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
 * @method integer getThreshold() 获取RateLimit统计阈值，单位是次，取值范围0-4294967294。
 * @method void setThreshold(integer $Threshold) 设置RateLimit统计阈值，单位是次，取值范围0-4294967294。
 * @method integer getPeriod() 获取RateLimit统计时间，取值范围 10/20/30/40/50/60 单位是秒。
 * @method void setPeriod(integer $Period) 设置RateLimit统计时间，取值范围 10/20/30/40/50/60 单位是秒。
 * @method string getRuleName() 获取规则名，只能以英文字符，数字，下划线组合，且不能以下划线开头。
 * @method void setRuleName(string $RuleName) 设置规则名，只能以英文字符，数字，下划线组合，且不能以下划线开头。
 * @method string getAction() 获取处置动作。
1. monitor(观察)；
2. drop(拦截)；
3. alg(Javascript挑战)
 * @method void setAction(string $Action) 设置处置动作。
1. monitor(观察)；
2. drop(拦截)；
3. alg(Javascript挑战)
 * @method integer getPunishTime() 获取惩罚时长，0-100。
 * @method void setPunishTime(integer $PunishTime) 设置惩罚时长，0-100。
 * @method string getPunishTimeUnit() 获取处罚时长单位。
1. second 秒; 
2. minutes 分钟
3. hour 小时
 * @method void setPunishTimeUnit(string $PunishTimeUnit) 设置处罚时长单位。
1. second 秒; 
2. minutes 分钟
3. hour 小时
 * @method string getRuleStatus() 获取规则状态。
1. on 生效
2. off 不生效
 * @method void setRuleStatus(string $RuleStatus) 设置规则状态。
1. on 生效
2. off 不生效
 * @method array getConditions() 获取规则。
 * @method void setConditions(array $Conditions) 设置规则。
 * @method integer getRulePriority() 获取规则权重，取值范围0-100。
 * @method void setRulePriority(integer $RulePriority) 设置规则权重，取值范围0-100。
 * @method integer getRuleID() 获取规则id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleID(integer $RuleID) 设置规则id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFreqFields() 获取过滤词。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFreqFields(array $FreqFields) 设置过滤词。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间.
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间.
注意：此字段可能返回 null，表示取不到有效值。
 */
class RateLimitUserRule extends AbstractModel
{
    /**
     * @var integer RateLimit统计阈值，单位是次，取值范围0-4294967294。
     */
    public $Threshold;

    /**
     * @var integer RateLimit统计时间，取值范围 10/20/30/40/50/60 单位是秒。
     */
    public $Period;

    /**
     * @var string 规则名，只能以英文字符，数字，下划线组合，且不能以下划线开头。
     */
    public $RuleName;

    /**
     * @var string 处置动作。
1. monitor(观察)；
2. drop(拦截)；
3. alg(Javascript挑战)
     */
    public $Action;

    /**
     * @var integer 惩罚时长，0-100。
     */
    public $PunishTime;

    /**
     * @var string 处罚时长单位。
1. second 秒; 
2. minutes 分钟
3. hour 小时
     */
    public $PunishTimeUnit;

    /**
     * @var string 规则状态。
1. on 生效
2. off 不生效
     */
    public $RuleStatus;

    /**
     * @var array 规则。
     */
    public $Conditions;

    /**
     * @var integer 规则权重，取值范围0-100。
     */
    public $RulePriority;

    /**
     * @var integer 规则id。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleID;

    /**
     * @var array 过滤词。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FreqFields;

    /**
     * @var string 更新时间.
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @param integer $Threshold RateLimit统计阈值，单位是次，取值范围0-4294967294。
     * @param integer $Period RateLimit统计时间，取值范围 10/20/30/40/50/60 单位是秒。
     * @param string $RuleName 规则名，只能以英文字符，数字，下划线组合，且不能以下划线开头。
     * @param string $Action 处置动作。
1. monitor(观察)；
2. drop(拦截)；
3. alg(Javascript挑战)
     * @param integer $PunishTime 惩罚时长，0-100。
     * @param string $PunishTimeUnit 处罚时长单位。
1. second 秒; 
2. minutes 分钟
3. hour 小时
     * @param string $RuleStatus 规则状态。
1. on 生效
2. off 不生效
     * @param array $Conditions 规则。
     * @param integer $RulePriority 规则权重，取值范围0-100。
     * @param integer $RuleID 规则id。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FreqFields 过滤词。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间.
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
