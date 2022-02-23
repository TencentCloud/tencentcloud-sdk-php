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
 * 事件告警条件
 *
 * @method string getAlarmNotifyPeriod() 获取告警通知频率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmNotifyPeriod(string $AlarmNotifyPeriod) 设置告警通知频率
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlarmNotifyType() 获取重复通知策略预定义（0 - 只告警一次， 1 - 指数告警，2 - 连接告警）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmNotifyType(string $AlarmNotifyType) 设置重复通知策略预定义（0 - 只告警一次， 1 - 指数告警，2 - 连接告警）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventID() 获取事件ID
 * @method void setEventID(string $EventID) 设置事件ID
 * @method string getEventDisplayName() 获取事件展示名称（对外）
 * @method void setEventDisplayName(string $EventDisplayName) 设置事件展示名称（对外）
 * @method string getRuleID() 获取规则ID
 * @method void setRuleID(string $RuleID) 设置规则ID
 */
class EventCondition extends AbstractModel
{
    /**
     * @var string 告警通知频率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmNotifyPeriod;

    /**
     * @var string 重复通知策略预定义（0 - 只告警一次， 1 - 指数告警，2 - 连接告警）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmNotifyType;

    /**
     * @var string 事件ID
     */
    public $EventID;

    /**
     * @var string 事件展示名称（对外）
     */
    public $EventDisplayName;

    /**
     * @var string 规则ID
     */
    public $RuleID;

    /**
     * @param string $AlarmNotifyPeriod 告警通知频率
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlarmNotifyType 重复通知策略预定义（0 - 只告警一次， 1 - 指数告警，2 - 连接告警）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventID 事件ID
     * @param string $EventDisplayName 事件展示名称（对外）
     * @param string $RuleID 规则ID
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
    }
}
