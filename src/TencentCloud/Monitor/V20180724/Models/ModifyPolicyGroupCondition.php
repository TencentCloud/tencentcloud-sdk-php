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
 * 修改告警策略组传入的指标阈值条件
 *
 * @method integer getMetricId() 获取<p>指标id</p>
 * @method void setMetricId(integer $MetricId) 设置<p>指标id</p>
 * @method integer getCalcType() 获取<p>比较类型，1表示大于，2表示大于等于，3表示小于，4表示小于等于，5表示相等，6表示不相等</p>
 * @method void setCalcType(integer $CalcType) 设置<p>比较类型，1表示大于，2表示大于等于，3表示小于，4表示小于等于，5表示相等，6表示不相等</p>
 * @method string getCalcValue() 获取<p>检测阈值</p>
 * @method void setCalcValue(string $CalcValue) 设置<p>检测阈值</p>
 * @method integer getCalcPeriod() 获取<p>检测指标的数据周期</p>
 * @method void setCalcPeriod(integer $CalcPeriod) 设置<p>检测指标的数据周期</p>
 * @method integer getContinuePeriod() 获取<p>持续周期个数</p>
 * @method void setContinuePeriod(integer $ContinuePeriod) 设置<p>持续周期个数</p>
 * @method integer getAlarmNotifyType() 获取<p>告警发送收敛类型。0连续告警，1指数告警</p>
 * @method void setAlarmNotifyType(integer $AlarmNotifyType) 设置<p>告警发送收敛类型。0连续告警，1指数告警</p>
 * @method integer getAlarmNotifyPeriod() 获取<p>告警发送周期单位秒。&lt;0 不触发, 0 只触发一次, &gt;0 每隔triggerTime秒触发一次</p>
 * @method void setAlarmNotifyPeriod(integer $AlarmNotifyPeriod) 设置<p>告警发送周期单位秒。&lt;0 不触发, 0 只触发一次, &gt;0 每隔triggerTime秒触发一次</p>
 * @method integer getRuleId() 获取<p>规则id，不填表示新增，填写了ruleId表示在已存在的规则基础上进行修改</p>
 * @method void setRuleId(integer $RuleId) 设置<p>规则id，不填表示新增，填写了ruleId表示在已存在的规则基础上进行修改</p>
 */
class ModifyPolicyGroupCondition extends AbstractModel
{
    /**
     * @var integer <p>指标id</p>
     */
    public $MetricId;

    /**
     * @var integer <p>比较类型，1表示大于，2表示大于等于，3表示小于，4表示小于等于，5表示相等，6表示不相等</p>
     */
    public $CalcType;

    /**
     * @var string <p>检测阈值</p>
     */
    public $CalcValue;

    /**
     * @var integer <p>检测指标的数据周期</p>
     */
    public $CalcPeriod;

    /**
     * @var integer <p>持续周期个数</p>
     */
    public $ContinuePeriod;

    /**
     * @var integer <p>告警发送收敛类型。0连续告警，1指数告警</p>
     */
    public $AlarmNotifyType;

    /**
     * @var integer <p>告警发送周期单位秒。&lt;0 不触发, 0 只触发一次, &gt;0 每隔triggerTime秒触发一次</p>
     */
    public $AlarmNotifyPeriod;

    /**
     * @var integer <p>规则id，不填表示新增，填写了ruleId表示在已存在的规则基础上进行修改</p>
     */
    public $RuleId;

    /**
     * @param integer $MetricId <p>指标id</p>
     * @param integer $CalcType <p>比较类型，1表示大于，2表示大于等于，3表示小于，4表示小于等于，5表示相等，6表示不相等</p>
     * @param string $CalcValue <p>检测阈值</p>
     * @param integer $CalcPeriod <p>检测指标的数据周期</p>
     * @param integer $ContinuePeriod <p>持续周期个数</p>
     * @param integer $AlarmNotifyType <p>告警发送收敛类型。0连续告警，1指数告警</p>
     * @param integer $AlarmNotifyPeriod <p>告警发送周期单位秒。&lt;0 不触发, 0 只触发一次, &gt;0 每隔triggerTime秒触发一次</p>
     * @param integer $RuleId <p>规则id，不填表示新增，填写了ruleId表示在已存在的规则基础上进行修改</p>
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
        if (array_key_exists("MetricId",$param) and $param["MetricId"] !== null) {
            $this->MetricId = $param["MetricId"];
        }

        if (array_key_exists("CalcType",$param) and $param["CalcType"] !== null) {
            $this->CalcType = $param["CalcType"];
        }

        if (array_key_exists("CalcValue",$param) and $param["CalcValue"] !== null) {
            $this->CalcValue = $param["CalcValue"];
        }

        if (array_key_exists("CalcPeriod",$param) and $param["CalcPeriod"] !== null) {
            $this->CalcPeriod = $param["CalcPeriod"];
        }

        if (array_key_exists("ContinuePeriod",$param) and $param["ContinuePeriod"] !== null) {
            $this->ContinuePeriod = $param["ContinuePeriod"];
        }

        if (array_key_exists("AlarmNotifyType",$param) and $param["AlarmNotifyType"] !== null) {
            $this->AlarmNotifyType = $param["AlarmNotifyType"];
        }

        if (array_key_exists("AlarmNotifyPeriod",$param) and $param["AlarmNotifyPeriod"] !== null) {
            $this->AlarmNotifyPeriod = $param["AlarmNotifyPeriod"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }
    }
}
