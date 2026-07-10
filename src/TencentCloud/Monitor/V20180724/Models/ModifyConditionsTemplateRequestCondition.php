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
 * ModifyConditionsTemplateRequestCondition，Condition入参字段值
 *
 * @method string getCalcPeriod() 获取<p>统计周期</p>
 * @method void setCalcPeriod(string $CalcPeriod) 设置<p>统计周期</p>
 * @method string getCalcType() 获取<p>统计方式</p>
 * @method void setCalcType(string $CalcType) 设置<p>统计方式</p>
 * @method string getContinuePeriod() 获取<p>持续周期</p>
 * @method void setContinuePeriod(string $ContinuePeriod) 设置<p>持续周期</p>
 * @method integer getMetricID() 获取<p>指标ID</p>
 * @method void setMetricID(integer $MetricID) 设置<p>指标ID</p>
 * @method string getCalcValue() 获取<p>统计值</p>
 * @method void setCalcValue(string $CalcValue) 设置<p>统计值</p>
 * @method string getAlarmNotifyPeriod() 获取<p>告警通知周期</p>
 * @method void setAlarmNotifyPeriod(string $AlarmNotifyPeriod) 设置<p>告警通知周期</p>
 * @method integer getAlarmNotifyType() 获取<p>告警通知方式</p>
 * @method void setAlarmNotifyType(integer $AlarmNotifyType) 设置<p>告警通知方式</p>
 * @method integer getRuleID() 获取<p>规则ID</p>
 * @method void setRuleID(integer $RuleID) 设置<p>规则ID</p>
 */
class ModifyConditionsTemplateRequestCondition extends AbstractModel
{
    /**
     * @var string <p>统计周期</p>
     */
    public $CalcPeriod;

    /**
     * @var string <p>统计方式</p>
     */
    public $CalcType;

    /**
     * @var string <p>持续周期</p>
     */
    public $ContinuePeriod;

    /**
     * @var integer <p>指标ID</p>
     */
    public $MetricID;

    /**
     * @var string <p>统计值</p>
     */
    public $CalcValue;

    /**
     * @var string <p>告警通知周期</p>
     */
    public $AlarmNotifyPeriod;

    /**
     * @var integer <p>告警通知方式</p>
     */
    public $AlarmNotifyType;

    /**
     * @var integer <p>规则ID</p>
     */
    public $RuleID;

    /**
     * @param string $CalcPeriod <p>统计周期</p>
     * @param string $CalcType <p>统计方式</p>
     * @param string $ContinuePeriod <p>持续周期</p>
     * @param integer $MetricID <p>指标ID</p>
     * @param string $CalcValue <p>统计值</p>
     * @param string $AlarmNotifyPeriod <p>告警通知周期</p>
     * @param integer $AlarmNotifyType <p>告警通知方式</p>
     * @param integer $RuleID <p>规则ID</p>
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
        if (array_key_exists("CalcPeriod",$param) and $param["CalcPeriod"] !== null) {
            $this->CalcPeriod = $param["CalcPeriod"];
        }

        if (array_key_exists("CalcType",$param) and $param["CalcType"] !== null) {
            $this->CalcType = $param["CalcType"];
        }

        if (array_key_exists("ContinuePeriod",$param) and $param["ContinuePeriod"] !== null) {
            $this->ContinuePeriod = $param["ContinuePeriod"];
        }

        if (array_key_exists("MetricID",$param) and $param["MetricID"] !== null) {
            $this->MetricID = $param["MetricID"];
        }

        if (array_key_exists("CalcValue",$param) and $param["CalcValue"] !== null) {
            $this->CalcValue = $param["CalcValue"];
        }

        if (array_key_exists("AlarmNotifyPeriod",$param) and $param["AlarmNotifyPeriod"] !== null) {
            $this->AlarmNotifyPeriod = $param["AlarmNotifyPeriod"];
        }

        if (array_key_exists("AlarmNotifyType",$param) and $param["AlarmNotifyType"] !== null) {
            $this->AlarmNotifyType = $param["AlarmNotifyType"];
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }
    }
}
