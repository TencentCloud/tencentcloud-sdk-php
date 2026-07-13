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
 * 查询策略输出的事件告警条件
 *
 * @method integer getEventId() 获取<p>事件id</p>
 * @method void setEventId(integer $EventId) 设置<p>事件id</p>
 * @method integer getRuleId() 获取<p>事件告警规则id</p>
 * @method void setRuleId(integer $RuleId) 设置<p>事件告警规则id</p>
 * @method string getEventShowName() 获取<p>事件名称</p>
 * @method void setEventShowName(string $EventShowName) 设置<p>事件名称</p>
 * @method integer getAlarmNotifyPeriod() 获取<p>告警发送周期单位秒。&lt;0 不触发, 0 只触发一次, &gt;0 每隔triggerTime秒触发一次</p>
 * @method void setAlarmNotifyPeriod(integer $AlarmNotifyPeriod) 设置<p>告警发送周期单位秒。&lt;0 不触发, 0 只触发一次, &gt;0 每隔triggerTime秒触发一次</p>
 * @method integer getAlarmNotifyType() 获取<p>告警发送收敛类型。0连续告警，1指数告警</p>
 * @method void setAlarmNotifyType(integer $AlarmNotifyType) 设置<p>告警发送收敛类型。0连续告警，1指数告警</p>
 */
class DescribePolicyGroupInfoEventCondition extends AbstractModel
{
    /**
     * @var integer <p>事件id</p>
     */
    public $EventId;

    /**
     * @var integer <p>事件告警规则id</p>
     */
    public $RuleId;

    /**
     * @var string <p>事件名称</p>
     */
    public $EventShowName;

    /**
     * @var integer <p>告警发送周期单位秒。&lt;0 不触发, 0 只触发一次, &gt;0 每隔triggerTime秒触发一次</p>
     */
    public $AlarmNotifyPeriod;

    /**
     * @var integer <p>告警发送收敛类型。0连续告警，1指数告警</p>
     */
    public $AlarmNotifyType;

    /**
     * @param integer $EventId <p>事件id</p>
     * @param integer $RuleId <p>事件告警规则id</p>
     * @param string $EventShowName <p>事件名称</p>
     * @param integer $AlarmNotifyPeriod <p>告警发送周期单位秒。&lt;0 不触发, 0 只触发一次, &gt;0 每隔triggerTime秒触发一次</p>
     * @param integer $AlarmNotifyType <p>告警发送收敛类型。0连续告警，1指数告警</p>
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
        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("EventShowName",$param) and $param["EventShowName"] !== null) {
            $this->EventShowName = $param["EventShowName"];
        }

        if (array_key_exists("AlarmNotifyPeriod",$param) and $param["AlarmNotifyPeriod"] !== null) {
            $this->AlarmNotifyPeriod = $param["AlarmNotifyPeriod"];
        }

        if (array_key_exists("AlarmNotifyType",$param) and $param["AlarmNotifyType"] !== null) {
            $this->AlarmNotifyType = $param["AlarmNotifyType"];
        }
    }
}
