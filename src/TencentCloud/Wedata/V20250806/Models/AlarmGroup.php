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
 * 告警规则接收人配置
 *
 * @method array getAlarmEscalationRecipientIds() 获取告警升级人ID列表
若告警接收人或上级升级人未在告警间隔时间内确认告警，则会发送告警给下一级升级人。
 * @method void setAlarmEscalationRecipientIds(array $AlarmEscalationRecipientIds) 设置告警升级人ID列表
若告警接收人或上级升级人未在告警间隔时间内确认告警，则会发送告警给下一级升级人。
 * @method integer getAlarmEscalationInterval() 获取告警升级间隔
 * @method void setAlarmEscalationInterval(integer $AlarmEscalationInterval) 设置告警升级间隔
 * @method NotificationFatigue getNotificationFatigue() 获取告警通知疲劳配置
 * @method void setNotificationFatigue(NotificationFatigue $NotificationFatigue) 设置告警通知疲劳配置
 * @method array getAlarmWays() 获取告警渠道 1.邮件，2.短信，3.微信，4.语音，5.企业微信，6.Http，7.企业微信群 8 飞书群 9 钉钉群 10 Slack群 11 Teams群（默认1.邮件） 7.企业微信群 8 飞书群 9 钉钉群 10 Slack群 11 Teams群 只能选择一个渠道
 * @method void setAlarmWays(array $AlarmWays) 设置告警渠道 1.邮件，2.短信，3.微信，4.语音，5.企业微信，6.Http，7.企业微信群 8 飞书群 9 钉钉群 10 Slack群 11 Teams群（默认1.邮件） 7.企业微信群 8 飞书群 9 钉钉群 10 Slack群 11 Teams群 只能选择一个渠道
 * @method array getWebHooks() 获取企业微信群/飞书群/钉钉群 /Slack群/Teams群的webhook地址列表
 * @method void setWebHooks(array $WebHooks) 设置企业微信群/飞书群/钉钉群 /Slack群/Teams群的webhook地址列表
 * @method integer getAlarmRecipientType() 获取告警接收人类型：1.指定人员，2.任务责任人，3.值班表（默认1.指定人员）
 * @method void setAlarmRecipientType(integer $AlarmRecipientType) 设置告警接收人类型：1.指定人员，2.任务责任人，3.值班表（默认1.指定人员）
 * @method array getAlarmRecipientIds() 获取根据AlarmRecipientType的类型该列表具有不同的业务id 1（指定人员）: 告警接收人id列表 2（任务责任人）：无需配置 3（值班表）：值班表id列表
 * @method void setAlarmRecipientIds(array $AlarmRecipientIds) 设置根据AlarmRecipientType的类型该列表具有不同的业务id 1（指定人员）: 告警接收人id列表 2（任务责任人）：无需配置 3（值班表）：值班表id列表
 */
class AlarmGroup extends AbstractModel
{
    /**
     * @var array 告警升级人ID列表
若告警接收人或上级升级人未在告警间隔时间内确认告警，则会发送告警给下一级升级人。
     */
    public $AlarmEscalationRecipientIds;

    /**
     * @var integer 告警升级间隔
     */
    public $AlarmEscalationInterval;

    /**
     * @var NotificationFatigue 告警通知疲劳配置
     */
    public $NotificationFatigue;

    /**
     * @var array 告警渠道 1.邮件，2.短信，3.微信，4.语音，5.企业微信，6.Http，7.企业微信群 8 飞书群 9 钉钉群 10 Slack群 11 Teams群（默认1.邮件） 7.企业微信群 8 飞书群 9 钉钉群 10 Slack群 11 Teams群 只能选择一个渠道
     */
    public $AlarmWays;

    /**
     * @var array 企业微信群/飞书群/钉钉群 /Slack群/Teams群的webhook地址列表
     */
    public $WebHooks;

    /**
     * @var integer 告警接收人类型：1.指定人员，2.任务责任人，3.值班表（默认1.指定人员）
     */
    public $AlarmRecipientType;

    /**
     * @var array 根据AlarmRecipientType的类型该列表具有不同的业务id 1（指定人员）: 告警接收人id列表 2（任务责任人）：无需配置 3（值班表）：值班表id列表
     */
    public $AlarmRecipientIds;

    /**
     * @param array $AlarmEscalationRecipientIds 告警升级人ID列表
若告警接收人或上级升级人未在告警间隔时间内确认告警，则会发送告警给下一级升级人。
     * @param integer $AlarmEscalationInterval 告警升级间隔
     * @param NotificationFatigue $NotificationFatigue 告警通知疲劳配置
     * @param array $AlarmWays 告警渠道 1.邮件，2.短信，3.微信，4.语音，5.企业微信，6.Http，7.企业微信群 8 飞书群 9 钉钉群 10 Slack群 11 Teams群（默认1.邮件） 7.企业微信群 8 飞书群 9 钉钉群 10 Slack群 11 Teams群 只能选择一个渠道
     * @param array $WebHooks 企业微信群/飞书群/钉钉群 /Slack群/Teams群的webhook地址列表
     * @param integer $AlarmRecipientType 告警接收人类型：1.指定人员，2.任务责任人，3.值班表（默认1.指定人员）
     * @param array $AlarmRecipientIds 根据AlarmRecipientType的类型该列表具有不同的业务id 1（指定人员）: 告警接收人id列表 2（任务责任人）：无需配置 3（值班表）：值班表id列表
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

        if (array_key_exists("AlarmWays",$param) and $param["AlarmWays"] !== null) {
            $this->AlarmWays = $param["AlarmWays"];
        }

        if (array_key_exists("WebHooks",$param) and $param["WebHooks"] !== null) {
            $this->WebHooks = [];
            foreach ($param["WebHooks"] as $key => $value){
                $obj = new AlarmWayWebHook();
                $obj->deserialize($value);
                array_push($this->WebHooks, $obj);
            }
        }

        if (array_key_exists("AlarmRecipientType",$param) and $param["AlarmRecipientType"] !== null) {
            $this->AlarmRecipientType = $param["AlarmRecipientType"];
        }

        if (array_key_exists("AlarmRecipientIds",$param) and $param["AlarmRecipientIds"] !== null) {
            $this->AlarmRecipientIds = $param["AlarmRecipientIds"];
        }
    }
}
