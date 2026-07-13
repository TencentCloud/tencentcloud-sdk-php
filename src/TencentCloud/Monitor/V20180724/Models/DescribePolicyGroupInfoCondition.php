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
 * 查询策略输出的阈值告警条件
 *
 * @method string getMetricShowName() 获取<p>指标名称</p>
 * @method void setMetricShowName(string $MetricShowName) 设置<p>指标名称</p>
 * @method integer getPeriod() 获取<p>数据聚合周期(单位秒)</p>
 * @method void setPeriod(integer $Period) 设置<p>数据聚合周期(单位秒)</p>
 * @method integer getMetricId() 获取<p>指标id</p>
 * @method void setMetricId(integer $MetricId) 设置<p>指标id</p>
 * @method integer getRuleId() 获取<p>阈值规则id</p>
 * @method void setRuleId(integer $RuleId) 设置<p>阈值规则id</p>
 * @method string getUnit() 获取<p>指标单位</p>
 * @method void setUnit(string $Unit) 设置<p>指标单位</p>
 * @method integer getAlarmNotifyType() 获取<p>告警发送收敛类型。0连续告警，1指数告警</p>
 * @method void setAlarmNotifyType(integer $AlarmNotifyType) 设置<p>告警发送收敛类型。0连续告警，1指数告警</p>
 * @method integer getAlarmNotifyPeriod() 获取<p>告警发送周期单位秒。&lt;0 不触发, 0 只触发一次, &gt;0 每隔triggerTime秒触发一次</p>
 * @method void setAlarmNotifyPeriod(integer $AlarmNotifyPeriod) 设置<p>告警发送周期单位秒。&lt;0 不触发, 0 只触发一次, &gt;0 每隔triggerTime秒触发一次</p>
 * @method integer getCalcType() 获取<p>比较类型，1表示大于，2表示大于等于，3表示小于，4表示小于等于，5表示相等，6表示不相等，7表示日同比上涨，8表示日同比下降，9表示周同比上涨，10表示周同比下降，11表示周期环比上涨，12表示周期环比下降</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCalcType(integer $CalcType) 设置<p>比较类型，1表示大于，2表示大于等于，3表示小于，4表示小于等于，5表示相等，6表示不相等，7表示日同比上涨，8表示日同比下降，9表示周同比上涨，10表示周同比下降，11表示周期环比上涨，12表示周期环比下降</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCalcValue() 获取<p>检测阈值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCalcValue(string $CalcValue) 设置<p>检测阈值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getContinueTime() 获取<p>持续多长时间触发规则会告警(单位秒)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContinueTime(integer $ContinueTime) 设置<p>持续多长时间触发规则会告警(单位秒)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMetricName() 获取<p>告警指标名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetricName(string $MetricName) 设置<p>告警指标名</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribePolicyGroupInfoCondition extends AbstractModel
{
    /**
     * @var string <p>指标名称</p>
     */
    public $MetricShowName;

    /**
     * @var integer <p>数据聚合周期(单位秒)</p>
     */
    public $Period;

    /**
     * @var integer <p>指标id</p>
     */
    public $MetricId;

    /**
     * @var integer <p>阈值规则id</p>
     */
    public $RuleId;

    /**
     * @var string <p>指标单位</p>
     */
    public $Unit;

    /**
     * @var integer <p>告警发送收敛类型。0连续告警，1指数告警</p>
     */
    public $AlarmNotifyType;

    /**
     * @var integer <p>告警发送周期单位秒。&lt;0 不触发, 0 只触发一次, &gt;0 每隔triggerTime秒触发一次</p>
     */
    public $AlarmNotifyPeriod;

    /**
     * @var integer <p>比较类型，1表示大于，2表示大于等于，3表示小于，4表示小于等于，5表示相等，6表示不相等，7表示日同比上涨，8表示日同比下降，9表示周同比上涨，10表示周同比下降，11表示周期环比上涨，12表示周期环比下降</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CalcType;

    /**
     * @var string <p>检测阈值</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CalcValue;

    /**
     * @var integer <p>持续多长时间触发规则会告警(单位秒)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContinueTime;

    /**
     * @var string <p>告警指标名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetricName;

    /**
     * @param string $MetricShowName <p>指标名称</p>
     * @param integer $Period <p>数据聚合周期(单位秒)</p>
     * @param integer $MetricId <p>指标id</p>
     * @param integer $RuleId <p>阈值规则id</p>
     * @param string $Unit <p>指标单位</p>
     * @param integer $AlarmNotifyType <p>告警发送收敛类型。0连续告警，1指数告警</p>
     * @param integer $AlarmNotifyPeriod <p>告警发送周期单位秒。&lt;0 不触发, 0 只触发一次, &gt;0 每隔triggerTime秒触发一次</p>
     * @param integer $CalcType <p>比较类型，1表示大于，2表示大于等于，3表示小于，4表示小于等于，5表示相等，6表示不相等，7表示日同比上涨，8表示日同比下降，9表示周同比上涨，10表示周同比下降，11表示周期环比上涨，12表示周期环比下降</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CalcValue <p>检测阈值</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ContinueTime <p>持续多长时间触发规则会告警(单位秒)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MetricName <p>告警指标名</p>
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
        if (array_key_exists("MetricShowName",$param) and $param["MetricShowName"] !== null) {
            $this->MetricShowName = $param["MetricShowName"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("MetricId",$param) and $param["MetricId"] !== null) {
            $this->MetricId = $param["MetricId"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("AlarmNotifyType",$param) and $param["AlarmNotifyType"] !== null) {
            $this->AlarmNotifyType = $param["AlarmNotifyType"];
        }

        if (array_key_exists("AlarmNotifyPeriod",$param) and $param["AlarmNotifyPeriod"] !== null) {
            $this->AlarmNotifyPeriod = $param["AlarmNotifyPeriod"];
        }

        if (array_key_exists("CalcType",$param) and $param["CalcType"] !== null) {
            $this->CalcType = $param["CalcType"];
        }

        if (array_key_exists("CalcValue",$param) and $param["CalcValue"] !== null) {
            $this->CalcValue = $param["CalcValue"];
        }

        if (array_key_exists("ContinueTime",$param) and $param["ContinueTime"] !== null) {
            $this->ContinueTime = $param["ContinueTime"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }
    }
}
