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
 * 事件告警条件
 *
 * @method string getAlarmNotifyPeriod() 获取<p>告警通知频率</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmNotifyPeriod(string $AlarmNotifyPeriod) 设置<p>告警通知频率</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlarmNotifyType() 获取<p>重复通知策略预定义（0 - 只告警一次， 1 - 指数告警，2 - 连接告警）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmNotifyType(string $AlarmNotifyType) 设置<p>重复通知策略预定义（0 - 只告警一次， 1 - 指数告警，2 - 连接告警）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventID() 获取<p>事件ID</p>
 * @method void setEventID(string $EventID) 设置<p>事件ID</p>
 * @method string getEventDisplayName() 获取<p>事件展示名称（对外）</p>
 * @method void setEventDisplayName(string $EventDisplayName) 设置<p>事件展示名称（对外）</p>
 * @method string getRuleID() 获取<p>规则ID</p>
 * @method void setRuleID(string $RuleID) 设置<p>规则ID</p>
 * @method string getMetricName() 获取<p>指标名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetricName(string $MetricName) 设置<p>指标名</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class EventCondition extends AbstractModel
{
    /**
     * @var string <p>告警通知频率</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmNotifyPeriod;

    /**
     * @var string <p>重复通知策略预定义（0 - 只告警一次， 1 - 指数告警，2 - 连接告警）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmNotifyType;

    /**
     * @var string <p>事件ID</p>
     */
    public $EventID;

    /**
     * @var string <p>事件展示名称（对外）</p>
     */
    public $EventDisplayName;

    /**
     * @var string <p>规则ID</p>
     */
    public $RuleID;

    /**
     * @var string <p>指标名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetricName;

    /**
     * @param string $AlarmNotifyPeriod <p>告警通知频率</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlarmNotifyType <p>重复通知策略预定义（0 - 只告警一次， 1 - 指数告警，2 - 连接告警）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventID <p>事件ID</p>
     * @param string $EventDisplayName <p>事件展示名称（对外）</p>
     * @param string $RuleID <p>规则ID</p>
     * @param string $MetricName <p>指标名</p>
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

        if (array_key_exists("EventID",$param) and $param["EventID"] !== null) {
            $this->EventID = $param["EventID"];
        }

        if (array_key_exists("EventDisplayName",$param) and $param["EventDisplayName"] !== null) {
            $this->EventDisplayName = $param["EventDisplayName"];
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }
    }
}
