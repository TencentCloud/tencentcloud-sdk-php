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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警信息
 *
 * @method integer getAlarmMessageId() 获取告警消息Id
 * @method void setAlarmMessageId(integer $AlarmMessageId) 设置告警消息Id
 * @method string getAlarmTime() 获取告警时间，同一条告警可能发送多次，只显示最新的告警时间
 * @method void setAlarmTime(string $AlarmTime) 设置告警时间，同一条告警可能发送多次，只显示最新的告警时间
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method string getTaskId() 获取任务Id
 * @method void setTaskId(string $TaskId) 设置任务Id
 * @method string getCurRunDate() 获取任务的实例数据时间
 * @method void setCurRunDate(string $CurRunDate) 设置任务的实例数据时间
 * @method string getAlarmReason() 获取告警原因
 * @method void setAlarmReason(string $AlarmReason) 设置告警原因
 * @method integer getAlarmLevel() 获取告警级别，1.普通， 2.重要，3.紧急
 * @method void setAlarmLevel(integer $AlarmLevel) 设置告警级别，1.普通， 2.重要，3.紧急
 * @method string getAlarmRuleId() 获取告警规则Id
 * @method void setAlarmRuleId(string $AlarmRuleId) 设置告警规则Id
 * @method array getAlarmWays() 获取告警渠道 1.邮件，2.短信，3.微信，4.语音，5.企业微信，6.Http，7.企业微信群， 8.飞书群，9.钉钉群，10.Slack群,11.Teams群（默认1.邮件），7.企业微信群，8.飞书群，9.钉钉群，10.Slack群，11.Teams群 
 * @method void setAlarmWays(array $AlarmWays) 设置告警渠道 1.邮件，2.短信，3.微信，4.语音，5.企业微信，6.Http，7.企业微信群， 8.飞书群，9.钉钉群，10.Slack群,11.Teams群（默认1.邮件），7.企业微信群，8.飞书群，9.钉钉群，10.Slack群，11.Teams群 
 * @method array getAlarmRecipients() 获取告警接收人
 * @method void setAlarmRecipients(array $AlarmRecipients) 设置告警接收人
 */
class AlarmMessage extends AbstractModel
{
    /**
     * @var integer 告警消息Id
     */
    public $AlarmMessageId;

    /**
     * @var string 告警时间，同一条告警可能发送多次，只显示最新的告警时间
     */
    public $AlarmTime;

    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var string 任务Id
     */
    public $TaskId;

    /**
     * @var string 任务的实例数据时间
     */
    public $CurRunDate;

    /**
     * @var string 告警原因
     */
    public $AlarmReason;

    /**
     * @var integer 告警级别，1.普通， 2.重要，3.紧急
     */
    public $AlarmLevel;

    /**
     * @var string 告警规则Id
     */
    public $AlarmRuleId;

    /**
     * @var array 告警渠道 1.邮件，2.短信，3.微信，4.语音，5.企业微信，6.Http，7.企业微信群， 8.飞书群，9.钉钉群，10.Slack群,11.Teams群（默认1.邮件），7.企业微信群，8.飞书群，9.钉钉群，10.Slack群，11.Teams群 
     */
    public $AlarmWays;

    /**
     * @var array 告警接收人
     */
    public $AlarmRecipients;

    /**
     * @param integer $AlarmMessageId 告警消息Id
     * @param string $AlarmTime 告警时间，同一条告警可能发送多次，只显示最新的告警时间
     * @param string $TaskName 任务名称
     * @param string $TaskId 任务Id
     * @param string $CurRunDate 任务的实例数据时间
     * @param string $AlarmReason 告警原因
     * @param integer $AlarmLevel 告警级别，1.普通， 2.重要，3.紧急
     * @param string $AlarmRuleId 告警规则Id
     * @param array $AlarmWays 告警渠道 1.邮件，2.短信，3.微信，4.语音，5.企业微信，6.Http，7.企业微信群， 8.飞书群，9.钉钉群，10.Slack群,11.Teams群（默认1.邮件），7.企业微信群，8.飞书群，9.钉钉群，10.Slack群，11.Teams群 
     * @param array $AlarmRecipients 告警接收人
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
        if (array_key_exists("AlarmMessageId",$param) and $param["AlarmMessageId"] !== null) {
            $this->AlarmMessageId = $param["AlarmMessageId"];
        }

        if (array_key_exists("AlarmTime",$param) and $param["AlarmTime"] !== null) {
            $this->AlarmTime = $param["AlarmTime"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("CurRunDate",$param) and $param["CurRunDate"] !== null) {
            $this->CurRunDate = $param["CurRunDate"];
        }

        if (array_key_exists("AlarmReason",$param) and $param["AlarmReason"] !== null) {
            $this->AlarmReason = $param["AlarmReason"];
        }

        if (array_key_exists("AlarmLevel",$param) and $param["AlarmLevel"] !== null) {
            $this->AlarmLevel = $param["AlarmLevel"];
        }

        if (array_key_exists("AlarmRuleId",$param) and $param["AlarmRuleId"] !== null) {
            $this->AlarmRuleId = $param["AlarmRuleId"];
        }

        if (array_key_exists("AlarmWays",$param) and $param["AlarmWays"] !== null) {
            $this->AlarmWays = $param["AlarmWays"];
        }

        if (array_key_exists("AlarmRecipients",$param) and $param["AlarmRecipients"] !== null) {
            $this->AlarmRecipients = $param["AlarmRecipients"];
        }
    }
}
