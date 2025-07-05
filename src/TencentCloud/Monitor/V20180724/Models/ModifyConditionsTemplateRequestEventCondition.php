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
 * ModifyConditionsTemplateRequestEventCondition
 *
 * @method string getAlarmNotifyPeriod() 获取告警通知周期
 * @method void setAlarmNotifyPeriod(string $AlarmNotifyPeriod) 设置告警通知周期
 * @method string getAlarmNotifyType() 获取告警通知方式
 * @method void setAlarmNotifyType(string $AlarmNotifyType) 设置告警通知方式
 * @method string getEventID() 获取事件ID
 * @method void setEventID(string $EventID) 设置事件ID
 * @method integer getRuleID() 获取规则ID
 * @method void setRuleID(integer $RuleID) 设置规则ID
 */
class ModifyConditionsTemplateRequestEventCondition extends AbstractModel
{
    /**
     * @var string 告警通知周期
     */
    public $AlarmNotifyPeriod;

    /**
     * @var string 告警通知方式
     */
    public $AlarmNotifyType;

    /**
     * @var string 事件ID
     */
    public $EventID;

    /**
     * @var integer 规则ID
     */
    public $RuleID;

    /**
     * @param string $AlarmNotifyPeriod 告警通知周期
     * @param string $AlarmNotifyType 告警通知方式
     * @param string $EventID 事件ID
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
        if (array_key_exists("AlarmNotifyPeriod",$param) and $param["AlarmNotifyPeriod"] !== null) {
            $this->AlarmNotifyPeriod = $param["AlarmNotifyPeriod"];
        }

        if (array_key_exists("AlarmNotifyType",$param) and $param["AlarmNotifyType"] !== null) {
            $this->AlarmNotifyType = $param["AlarmNotifyType"];
        }

        if (array_key_exists("EventID",$param) and $param["EventID"] !== null) {
            $this->EventID = $param["EventID"];
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }
    }
}
