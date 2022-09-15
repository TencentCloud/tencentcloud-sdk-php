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
 * 告警条件
 *
 * @method integer getAlarmNotifyPeriod() 获取告警通知频率
 * @method void setAlarmNotifyPeriod(integer $AlarmNotifyPeriod) 设置告警通知频率
 * @method integer getAlarmNotifyType() 获取重复通知策略预定义（0 - 只告警一次， 1 - 指数告警，2 - 连接告警）
 * @method void setAlarmNotifyType(integer $AlarmNotifyType) 设置重复通知策略预定义（0 - 只告警一次， 1 - 指数告警，2 - 连接告警）
 * @method string getCalcType() 获取检测方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCalcType(string $CalcType) 设置检测方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCalcValue() 获取检测值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCalcValue(string $CalcValue) 设置检测值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContinueTime() 获取持续时间，单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContinueTime(string $ContinueTime) 设置持续时间，单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMetricID() 获取指标ID
 * @method void setMetricID(integer $MetricID) 设置指标ID
 * @method string getMetricDisplayName() 获取指标展示名称（对外）
 * @method void setMetricDisplayName(string $MetricDisplayName) 设置指标展示名称（对外）
 * @method integer getPeriod() 获取周期
 * @method void setPeriod(integer $Period) 设置周期
 * @method integer getRuleID() 获取规则ID
 * @method void setRuleID(integer $RuleID) 设置规则ID
 * @method string getUnit() 获取指标单位
 * @method void setUnit(string $Unit) 设置指标单位
 * @method integer getIsAdvanced() 获取是否为高级指标，0：否；1：是
 * @method void setIsAdvanced(integer $IsAdvanced) 设置是否为高级指标，0：否；1：是
 * @method integer getIsOpen() 获取是否开通高级指标，0：否；1：是
 * @method void setIsOpen(integer $IsOpen) 设置是否开通高级指标，0：否；1：是
 * @method string getProductId() 获取产品ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductId(string $ProductId) 设置产品ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class Condition extends AbstractModel
{
    /**
     * @var integer 告警通知频率
     */
    public $AlarmNotifyPeriod;

    /**
     * @var integer 重复通知策略预定义（0 - 只告警一次， 1 - 指数告警，2 - 连接告警）
     */
    public $AlarmNotifyType;

    /**
     * @var string 检测方式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CalcType;

    /**
     * @var string 检测值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CalcValue;

    /**
     * @var string 持续时间，单位秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContinueTime;

    /**
     * @var integer 指标ID
     */
    public $MetricID;

    /**
     * @var string 指标展示名称（对外）
     */
    public $MetricDisplayName;

    /**
     * @var integer 周期
     */
    public $Period;

    /**
     * @var integer 规则ID
     */
    public $RuleID;

    /**
     * @var string 指标单位
     */
    public $Unit;

    /**
     * @var integer 是否为高级指标，0：否；1：是
     */
    public $IsAdvanced;

    /**
     * @var integer 是否开通高级指标，0：否；1：是
     */
    public $IsOpen;

    /**
     * @var string 产品ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductId;

    /**
     * @param integer $AlarmNotifyPeriod 告警通知频率
     * @param integer $AlarmNotifyType 重复通知策略预定义（0 - 只告警一次， 1 - 指数告警，2 - 连接告警）
     * @param string $CalcType 检测方式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CalcValue 检测值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContinueTime 持续时间，单位秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MetricID 指标ID
     * @param string $MetricDisplayName 指标展示名称（对外）
     * @param integer $Period 周期
     * @param integer $RuleID 规则ID
     * @param string $Unit 指标单位
     * @param integer $IsAdvanced 是否为高级指标，0：否；1：是
     * @param integer $IsOpen 是否开通高级指标，0：否；1：是
     * @param string $ProductId 产品ID
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
        if (array_key_exists("AlarmNotifyPeriod",$param) and $param["AlarmNotifyPeriod"] !== null) {
            $this->AlarmNotifyPeriod = $param["AlarmNotifyPeriod"];
        }

        if (array_key_exists("AlarmNotifyType",$param) and $param["AlarmNotifyType"] !== null) {
            $this->AlarmNotifyType = $param["AlarmNotifyType"];
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

        if (array_key_exists("MetricID",$param) and $param["MetricID"] !== null) {
            $this->MetricID = $param["MetricID"];
        }

        if (array_key_exists("MetricDisplayName",$param) and $param["MetricDisplayName"] !== null) {
            $this->MetricDisplayName = $param["MetricDisplayName"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("IsAdvanced",$param) and $param["IsAdvanced"] !== null) {
            $this->IsAdvanced = $param["IsAdvanced"];
        }

        if (array_key_exists("IsOpen",$param) and $param["IsOpen"] !== null) {
            $this->IsOpen = $param["IsOpen"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }
    }
}
