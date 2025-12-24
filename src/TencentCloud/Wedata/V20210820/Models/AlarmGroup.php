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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警分组信息
 *
 * @method array getAlarmWays() 获取告警方式,1.邮件，2.短信，3.微信，4.语音，5.企业微信，6.Http，7.企业微信群；告警方式code列表（默认1.邮件）
 * @method void setAlarmWays(array $AlarmWays) 设置告警方式,1.邮件，2.短信，3.微信，4.语音，5.企业微信，6.Http，7.企业微信群；告警方式code列表（默认1.邮件）
 * @method integer getAlarmRecipientType() 获取告警接收人类型：1.指定人员，2.任务责任人，3.值班表（默认1.指定人员）
 * @method void setAlarmRecipientType(integer $AlarmRecipientType) 设置告警接收人类型：1.指定人员，2.任务责任人，3.值班表（默认1.指定人员）
 * @method array getAlarmRecipients() 获取告警接收人
 * @method void setAlarmRecipients(array $AlarmRecipients) 设置告警接收人
 * @method array getAlarmRecipientIds() 获取告警接收人ID
 * @method void setAlarmRecipientIds(array $AlarmRecipientIds) 设置告警接收人ID
 * @method array getAlarmEscalationRecipients() 获取告警升级人
 * @method void setAlarmEscalationRecipients(array $AlarmEscalationRecipients) 设置告警升级人
 * @method array getAlarmEscalationRecipientIds() 获取告警升级人ID
 * @method void setAlarmEscalationRecipientIds(array $AlarmEscalationRecipientIds) 设置告警升级人ID
 * @method integer getAlarmEscalationInterval() 获取告警升级间隔
 * @method void setAlarmEscalationInterval(integer $AlarmEscalationInterval) 设置告警升级间隔
 * @method NotificationFatigue getNotificationFatigue() 获取告警通知疲劳度配置。
 * @method void setNotificationFatigue(NotificationFatigue $NotificationFatigue) 设置告警通知疲劳度配置。
 * @method string getAlarmMessageRule() 获取告警渠道规则 json 格式
 * @method void setAlarmMessageRule(string $AlarmMessageRule) 设置告警渠道规则 json 格式
 */
class AlarmGroup extends AbstractModel
{
    /**
     * @var array 告警方式,1.邮件，2.短信，3.微信，4.语音，5.企业微信，6.Http，7.企业微信群；告警方式code列表（默认1.邮件）
     */
    public $AlarmWays;

    /**
     * @var integer 告警接收人类型：1.指定人员，2.任务责任人，3.值班表（默认1.指定人员）
     */
    public $AlarmRecipientType;

    /**
     * @var array 告警接收人
     */
    public $AlarmRecipients;

    /**
     * @var array 告警接收人ID
     */
    public $AlarmRecipientIds;

    /**
     * @var array 告警升级人
     */
    public $AlarmEscalationRecipients;

    /**
     * @var array 告警升级人ID
     */
    public $AlarmEscalationRecipientIds;

    /**
     * @var integer 告警升级间隔
     */
    public $AlarmEscalationInterval;

    /**
     * @var NotificationFatigue 告警通知疲劳度配置。
     */
    public $NotificationFatigue;

    /**
     * @var string 告警渠道规则 json 格式
     */
    public $AlarmMessageRule;

    /**
     * @param array $AlarmWays 告警方式,1.邮件，2.短信，3.微信，4.语音，5.企业微信，6.Http，7.企业微信群；告警方式code列表（默认1.邮件）
     * @param integer $AlarmRecipientType 告警接收人类型：1.指定人员，2.任务责任人，3.值班表（默认1.指定人员）
     * @param array $AlarmRecipients 告警接收人
     * @param array $AlarmRecipientIds 告警接收人ID
     * @param array $AlarmEscalationRecipients 告警升级人
     * @param array $AlarmEscalationRecipientIds 告警升级人ID
     * @param integer $AlarmEscalationInterval 告警升级间隔
     * @param NotificationFatigue $NotificationFatigue 告警通知疲劳度配置。
     * @param string $AlarmMessageRule 告警渠道规则 json 格式
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
        if (array_key_exists("AlarmWays",$param) and $param["AlarmWays"] !== null) {
            $this->AlarmWays = $param["AlarmWays"];
        }

        if (array_key_exists("AlarmRecipientType",$param) and $param["AlarmRecipientType"] !== null) {
            $this->AlarmRecipientType = $param["AlarmRecipientType"];
        }

        if (array_key_exists("AlarmRecipients",$param) and $param["AlarmRecipients"] !== null) {
            $this->AlarmRecipients = $param["AlarmRecipients"];
        }

        if (array_key_exists("AlarmRecipientIds",$param) and $param["AlarmRecipientIds"] !== null) {
            $this->AlarmRecipientIds = $param["AlarmRecipientIds"];
        }

        if (array_key_exists("AlarmEscalationRecipients",$param) and $param["AlarmEscalationRecipients"] !== null) {
            $this->AlarmEscalationRecipients = $param["AlarmEscalationRecipients"];
        }

        if (array_key_exists("AlarmEscalationRecipientIds",$param) and $param["AlarmEscalationRecipientIds"] !== null) {
            $this->AlarmEscalationRecipientIds = $param["AlarmEscalationRecipientIds"];
        }

        if (array_key_exists("AlarmEscalationInterval",$param) and $param["AlarmEscalationInterval"] !== null) {
            $this->AlarmEscalationInterval = $param["AlarmEscalationInterval"];
        }

        if (array_key_exists("NotificationFatigue",$param) and $param["NotificationFatigue"] !== null) {
            $this->NotificationFatigue = new NotificationFatigue();
            $this->NotificationFatigue->deserialize($param["NotificationFatigue"]);
        }

        if (array_key_exists("AlarmMessageRule",$param) and $param["AlarmMessageRule"] !== null) {
            $this->AlarmMessageRule = $param["AlarmMessageRule"];
        }
    }
}
