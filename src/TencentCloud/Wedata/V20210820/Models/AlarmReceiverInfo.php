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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警接收人详情
 *
 * @method string getAlarmId() 获取告警ID
 * @method void setAlarmId(string $AlarmId) 设置告警ID
 * @method string getAlarmReceiver() 获取告警接收人ID
 * @method void setAlarmReceiver(string $AlarmReceiver) 设置告警接收人ID
 * @method integer getEmail() 获取邮件，0：未设置，1：成功，2：失败
 * @method void setEmail(integer $Email) 设置邮件，0：未设置，1：成功，2：失败
 * @method integer getSms() 获取短信，0：未设置，1：成功，2：失败
 * @method void setSms(integer $Sms) 设置短信，0：未设置，1：成功，2：失败
 * @method integer getWechat() 获取微信，0：未设置，1：成功，2：失败
 * @method void setWechat(integer $Wechat) 设置微信，0：未设置，1：成功，2：失败
 * @method integer getVoice() 获取电话，0：未设置，1：成功，2：失败
 * @method void setVoice(integer $Voice) 设置电话，0：未设置，1：成功，2：失败
 * @method integer getWecom() 获取企业微信，0：未设置，1：成功，2：失败
 * @method void setWecom(integer $Wecom) 设置企业微信，0：未设置，1：成功，2：失败
 * @method integer getHttp() 获取http，0：未设置，1：成功，2：失败
 * @method void setHttp(integer $Http) 设置http，0：未设置，1：成功，2：失败
 */
class AlarmReceiverInfo extends AbstractModel
{
    /**
     * @var string 告警ID
     */
    public $AlarmId;

    /**
     * @var string 告警接收人ID
     */
    public $AlarmReceiver;

    /**
     * @var integer 邮件，0：未设置，1：成功，2：失败
     */
    public $Email;

    /**
     * @var integer 短信，0：未设置，1：成功，2：失败
     */
    public $Sms;

    /**
     * @var integer 微信，0：未设置，1：成功，2：失败
     */
    public $Wechat;

    /**
     * @var integer 电话，0：未设置，1：成功，2：失败
     */
    public $Voice;

    /**
     * @var integer 企业微信，0：未设置，1：成功，2：失败
     */
    public $Wecom;

    /**
     * @var integer http，0：未设置，1：成功，2：失败
     */
    public $Http;

    /**
     * @param string $AlarmId 告警ID
     * @param string $AlarmReceiver 告警接收人ID
     * @param integer $Email 邮件，0：未设置，1：成功，2：失败
     * @param integer $Sms 短信，0：未设置，1：成功，2：失败
     * @param integer $Wechat 微信，0：未设置，1：成功，2：失败
     * @param integer $Voice 电话，0：未设置，1：成功，2：失败
     * @param integer $Wecom 企业微信，0：未设置，1：成功，2：失败
     * @param integer $Http http，0：未设置，1：成功，2：失败
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
        if (array_key_exists("AlarmId",$param) and $param["AlarmId"] !== null) {
            $this->AlarmId = $param["AlarmId"];
        }

        if (array_key_exists("AlarmReceiver",$param) and $param["AlarmReceiver"] !== null) {
            $this->AlarmReceiver = $param["AlarmReceiver"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("Sms",$param) and $param["Sms"] !== null) {
            $this->Sms = $param["Sms"];
        }

        if (array_key_exists("Wechat",$param) and $param["Wechat"] !== null) {
            $this->Wechat = $param["Wechat"];
        }

        if (array_key_exists("Voice",$param) and $param["Voice"] !== null) {
            $this->Voice = $param["Voice"];
        }

        if (array_key_exists("Wecom",$param) and $param["Wecom"] !== null) {
            $this->Wecom = $param["Wecom"];
        }

        if (array_key_exists("Http",$param) and $param["Http"] !== null) {
            $this->Http = $param["Http"];
        }
    }
}
