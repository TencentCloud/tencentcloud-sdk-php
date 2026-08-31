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
 * @method integer getAlarmMessageId() 获取<p>告警消息Id</p>
 * @method void setAlarmMessageId(integer $AlarmMessageId) 设置<p>告警消息Id</p>
 * @method string getAlarmTime() 获取<p>告警时间，同一条告警可能发送多次，只显示最新的告警时间</p>
 * @method void setAlarmTime(string $AlarmTime) 设置<p>告警时间，同一条告警可能发送多次，只显示最新的告警时间</p>
 * @method string getTaskName() 获取<p>任务名称</p>
 * @method void setTaskName(string $TaskName) 设置<p>任务名称</p>
 * @method string getTaskId() 获取<p>任务Id</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务Id</p>
 * @method string getCurRunDate() 获取<p>任务的实例数据时间</p>
 * @method void setCurRunDate(string $CurRunDate) 设置<p>任务的实例数据时间</p>
 * @method string getAlarmReason() 获取<p>告警原因</p>
 * @method void setAlarmReason(string $AlarmReason) 设置<p>告警原因</p>
 * @method integer getAlarmLevel() 获取<p>告警级别，1.普通， 2.重要，3.紧急</p>
 * @method void setAlarmLevel(integer $AlarmLevel) 设置<p>告警级别，1.普通， 2.重要，3.紧急</p>
 * @method string getAlarmRuleId() 获取<p>告警规则Id</p>
 * @method void setAlarmRuleId(string $AlarmRuleId) 设置<p>告警规则Id</p>
 * @method array getAlarmWays() 获取<p>告警渠道 1.邮件，2.短信，3.微信，4.语音，5.企业微信，6.Http，7.企业微信群， 8.飞书群，9.钉钉群，10.Slack群,11.Teams群（默认1.邮件），7.企业微信群，8.飞书群，9.钉钉群，10.Slack群，11.Teams群</p>
 * @method void setAlarmWays(array $AlarmWays) 设置<p>告警渠道 1.邮件，2.短信，3.微信，4.语音，5.企业微信，6.Http，7.企业微信群， 8.飞书群，9.钉钉群，10.Slack群,11.Teams群（默认1.邮件），7.企业微信群，8.飞书群，9.钉钉群，10.Slack群，11.Teams群</p>
 * @method array getAlarmRecipients() 获取<p>告警接收人</p>
 * @method void setAlarmRecipients(array $AlarmRecipients) 设置<p>告警接收人</p>
 * @method array getCustomEmails() 获取<p>自定义邮箱列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomEmails(array $CustomEmails) 设置<p>自定义邮箱列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class AlarmMessage extends AbstractModel
{
    /**
     * @var integer <p>告警消息Id</p>
     */
    public $AlarmMessageId;

    /**
     * @var string <p>告警时间，同一条告警可能发送多次，只显示最新的告警时间</p>
     */
    public $AlarmTime;

    /**
     * @var string <p>任务名称</p>
     */
    public $TaskName;

    /**
     * @var string <p>任务Id</p>
     */
    public $TaskId;

    /**
     * @var string <p>任务的实例数据时间</p>
     */
    public $CurRunDate;

    /**
     * @var string <p>告警原因</p>
     */
    public $AlarmReason;

    /**
     * @var integer <p>告警级别，1.普通， 2.重要，3.紧急</p>
     */
    public $AlarmLevel;

    /**
     * @var string <p>告警规则Id</p>
     */
    public $AlarmRuleId;

    /**
     * @var array <p>告警渠道 1.邮件，2.短信，3.微信，4.语音，5.企业微信，6.Http，7.企业微信群， 8.飞书群，9.钉钉群，10.Slack群,11.Teams群（默认1.邮件），7.企业微信群，8.飞书群，9.钉钉群，10.Slack群，11.Teams群</p>
     */
    public $AlarmWays;

    /**
     * @var array <p>告警接收人</p>
     */
    public $AlarmRecipients;

    /**
     * @var array <p>自定义邮箱列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomEmails;

    /**
     * @param integer $AlarmMessageId <p>告警消息Id</p>
     * @param string $AlarmTime <p>告警时间，同一条告警可能发送多次，只显示最新的告警时间</p>
     * @param string $TaskName <p>任务名称</p>
     * @param string $TaskId <p>任务Id</p>
     * @param string $CurRunDate <p>任务的实例数据时间</p>
     * @param string $AlarmReason <p>告警原因</p>
     * @param integer $AlarmLevel <p>告警级别，1.普通， 2.重要，3.紧急</p>
     * @param string $AlarmRuleId <p>告警规则Id</p>
     * @param array $AlarmWays <p>告警渠道 1.邮件，2.短信，3.微信，4.语音，5.企业微信，6.Http，7.企业微信群， 8.飞书群，9.钉钉群，10.Slack群,11.Teams群（默认1.邮件），7.企业微信群，8.飞书群，9.钉钉群，10.Slack群，11.Teams群</p>
     * @param array $AlarmRecipients <p>告警接收人</p>
     * @param array $CustomEmails <p>自定义邮箱列表</p>
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

        if (array_key_exists("CustomEmails",$param) and $param["CustomEmails"] !== null) {
            $this->CustomEmails = $param["CustomEmails"];
        }
    }
}
