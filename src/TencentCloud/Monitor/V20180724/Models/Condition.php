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
 * 告警条件
 *
 * @method integer getAlarmNotifyPeriod() 获取<p>告警通知频率</p>
 * @method void setAlarmNotifyPeriod(integer $AlarmNotifyPeriod) 设置<p>告警通知频率</p>
 * @method integer getAlarmNotifyType() 获取<p>重复通知策略预定义（0 - 只告警一次， 1 - 指数告警，2 - 连接告警）</p>
 * @method void setAlarmNotifyType(integer $AlarmNotifyType) 设置<p>重复通知策略预定义（0 - 只告警一次， 1 - 指数告警，2 - 连接告警）</p>
 * @method string getCalcType() 获取<p>检测方式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCalcType(string $CalcType) 设置<p>检测方式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCalcValue() 获取<p>检测值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCalcValue(string $CalcValue) 设置<p>检测值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContinueTime() 获取<p>持续时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContinueTime(string $ContinueTime) 设置<p>持续时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMetricID() 获取<p>指标ID</p>
 * @method void setMetricID(integer $MetricID) 设置<p>指标ID</p>
 * @method string getMetricDisplayName() 获取<p>指标展示名称（对外）</p>
 * @method void setMetricDisplayName(string $MetricDisplayName) 设置<p>指标展示名称（对外）</p>
 * @method integer getPeriod() 获取<p>周期</p>
 * @method void setPeriod(integer $Period) 设置<p>周期</p>
 * @method integer getRuleID() 获取<p>规则ID</p>
 * @method void setRuleID(integer $RuleID) 设置<p>规则ID</p>
 * @method string getUnit() 获取<p>指标单位</p>
 * @method void setUnit(string $Unit) 设置<p>指标单位</p>
 * @method integer getIsAdvanced() 获取<p>是否为高级指标，0：否；1：是</p>
 * @method void setIsAdvanced(integer $IsAdvanced) 设置<p>是否为高级指标，0：否；1：是</p>
 * @method integer getIsOpen() 获取<p>是否开通高级指标，0：否；1：是</p>
 * @method void setIsOpen(integer $IsOpen) 设置<p>是否开通高级指标，0：否；1：是</p>
 * @method string getProductId() 获取<p>产品ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductId(string $ProductId) 设置<p>产品ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method AlarmHierarchicalValue getHierarchicalValue() 获取<p>告警分级阈值配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHierarchicalValue(AlarmHierarchicalValue $HierarchicalValue) 设置<p>告警分级阈值配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleType() 获取<p>指标类型，用于区分动态指标</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleType(string $RuleType) 设置<p>指标类型，用于区分动态指标</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class Condition extends AbstractModel
{
    /**
     * @var integer <p>告警通知频率</p>
     */
    public $AlarmNotifyPeriod;

    /**
     * @var integer <p>重复通知策略预定义（0 - 只告警一次， 1 - 指数告警，2 - 连接告警）</p>
     */
    public $AlarmNotifyType;

    /**
     * @var string <p>检测方式</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CalcType;

    /**
     * @var string <p>检测值</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CalcValue;

    /**
     * @var string <p>持续时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContinueTime;

    /**
     * @var integer <p>指标ID</p>
     */
    public $MetricID;

    /**
     * @var string <p>指标展示名称（对外）</p>
     */
    public $MetricDisplayName;

    /**
     * @var integer <p>周期</p>
     */
    public $Period;

    /**
     * @var integer <p>规则ID</p>
     */
    public $RuleID;

    /**
     * @var string <p>指标单位</p>
     */
    public $Unit;

    /**
     * @var integer <p>是否为高级指标，0：否；1：是</p>
     */
    public $IsAdvanced;

    /**
     * @var integer <p>是否开通高级指标，0：否；1：是</p>
     */
    public $IsOpen;

    /**
     * @var string <p>产品ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductId;

    /**
     * @var AlarmHierarchicalValue <p>告警分级阈值配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HierarchicalValue;

    /**
     * @var string <p>指标类型，用于区分动态指标</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleType;

    /**
     * @param integer $AlarmNotifyPeriod <p>告警通知频率</p>
     * @param integer $AlarmNotifyType <p>重复通知策略预定义（0 - 只告警一次， 1 - 指数告警，2 - 连接告警）</p>
     * @param string $CalcType <p>检测方式</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CalcValue <p>检测值</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContinueTime <p>持续时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MetricID <p>指标ID</p>
     * @param string $MetricDisplayName <p>指标展示名称（对外）</p>
     * @param integer $Period <p>周期</p>
     * @param integer $RuleID <p>规则ID</p>
     * @param string $Unit <p>指标单位</p>
     * @param integer $IsAdvanced <p>是否为高级指标，0：否；1：是</p>
     * @param integer $IsOpen <p>是否开通高级指标，0：否；1：是</p>
     * @param string $ProductId <p>产品ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param AlarmHierarchicalValue $HierarchicalValue <p>告警分级阈值配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleType <p>指标类型，用于区分动态指标</p>
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

        if (array_key_exists("HierarchicalValue",$param) and $param["HierarchicalValue"] !== null) {
            $this->HierarchicalValue = new AlarmHierarchicalValue();
            $this->HierarchicalValue->deserialize($param["HierarchicalValue"]);
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }
    }
}
