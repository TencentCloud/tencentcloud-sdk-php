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
 * 修改告警策略组传入的事件告警条件
 *
 * @method integer getEventId() 获取事件id
 * @method void setEventId(integer $EventId) 设置事件id
 * @method integer getAlarmNotifyType() 获取告警发送收敛类型。0连续告警，1指数告警
 * @method void setAlarmNotifyType(integer $AlarmNotifyType) 设置告警发送收敛类型。0连续告警，1指数告警
 * @method integer getAlarmNotifyPeriod() 获取告警发送周期单位秒。<0 不触发, 0 只触发一次, >0 每隔triggerTime秒触发一次
 * @method void setAlarmNotifyPeriod(integer $AlarmNotifyPeriod) 设置告警发送周期单位秒。<0 不触发, 0 只触发一次, >0 每隔triggerTime秒触发一次
 * @method integer getRuleId() 获取规则id，不填表示新增，填写了ruleId表示在已存在的规则基础上进行修改
 * @method void setRuleId(integer $RuleId) 设置规则id，不填表示新增，填写了ruleId表示在已存在的规则基础上进行修改
 */
class ModifyPolicyGroupEventCondition extends AbstractModel
{
    /**
     * @var integer 事件id
     */
    public $EventId;

    /**
     * @var integer 告警发送收敛类型。0连续告警，1指数告警
     */
    public $AlarmNotifyType;

    /**
     * @var integer 告警发送周期单位秒。<0 不触发, 0 只触发一次, >0 每隔triggerTime秒触发一次
     */
    public $AlarmNotifyPeriod;

    /**
     * @var integer 规则id，不填表示新增，填写了ruleId表示在已存在的规则基础上进行修改
     */
    public $RuleId;

    /**
     * @param integer $EventId 事件id
     * @param integer $AlarmNotifyType 告警发送收敛类型。0连续告警，1指数告警
     * @param integer $AlarmNotifyPeriod 告警发送周期单位秒。<0 不触发, 0 只触发一次, >0 每隔triggerTime秒触发一次
     * @param integer $RuleId 规则id，不填表示新增，填写了ruleId表示在已存在的规则基础上进行修改
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
        if (array_key_exists('EventId',$param) and $param['EventId'] !== null) {
            $this->EventId = $param['EventId'];
        }

        if (array_key_exists('AlarmNotifyType',$param) and $param['AlarmNotifyType'] !== null) {
            $this->AlarmNotifyType = $param['AlarmNotifyType'];
        }

        if (array_key_exists('AlarmNotifyPeriod',$param) and $param['AlarmNotifyPeriod'] !== null) {
            $this->AlarmNotifyPeriod = $param['AlarmNotifyPeriod'];
        }

        if (array_key_exists('RuleId',$param) and $param['RuleId'] !== null) {
            $this->RuleId = $param['RuleId'];
        }
    }
}
