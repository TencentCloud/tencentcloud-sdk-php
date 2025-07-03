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
 * ModifyConditionsTemplateRequestCondition，Condition入参字段值
 *
 * @method string getCalcPeriod() 获取统计周期
 * @method void setCalcPeriod(string $CalcPeriod) 设置统计周期
 * @method string getCalcType() 获取统计方式
 * @method void setCalcType(string $CalcType) 设置统计方式
 * @method string getContinuePeriod() 获取持续周期
 * @method void setContinuePeriod(string $ContinuePeriod) 设置持续周期
 * @method integer getMetricID() 获取指标ID
 * @method void setMetricID(integer $MetricID) 设置指标ID
 * @method string getCalcValue() 获取统计值
 * @method void setCalcValue(string $CalcValue) 设置统计值
 * @method string getAlarmNotifyPeriod() 获取告警通知周期
 * @method void setAlarmNotifyPeriod(string $AlarmNotifyPeriod) 设置告警通知周期
 * @method integer getAlarmNotifyType() 获取告警通知方式
 * @method void setAlarmNotifyType(integer $AlarmNotifyType) 设置告警通知方式
 * @method integer getRuleID() 获取规则ID
 * @method void setRuleID(integer $RuleID) 设置规则ID
 */
class ModifyConditionsTemplateRequestCondition extends AbstractModel
{
    /**
     * @var string 统计周期
     */
    public $CalcPeriod;

    /**
     * @var string 统计方式
     */
    public $CalcType;

    /**
     * @var string 持续周期
     */
    public $ContinuePeriod;

    /**
     * @var integer 指标ID
     */
    public $MetricID;

    /**
     * @var string 统计值
     */
    public $CalcValue;

    /**
     * @var string 告警通知周期
     */
    public $AlarmNotifyPeriod;

    /**
     * @var integer 告警通知方式
     */
    public $AlarmNotifyType;

    /**
     * @var integer 规则ID
     */
    public $RuleID;

    /**
     * @param string $CalcPeriod 统计周期
     * @param string $CalcType 统计方式
     * @param string $ContinuePeriod 持续周期
     * @param integer $MetricID 指标ID
     * @param string $CalcValue 统计值
     * @param string $AlarmNotifyPeriod 告警通知周期
     * @param integer $AlarmNotifyType 告警通知方式
     * @param integer $RuleID 规则ID
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
