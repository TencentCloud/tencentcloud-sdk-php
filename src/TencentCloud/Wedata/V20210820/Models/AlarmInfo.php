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
 * 任务告警信息
 *
 * @method string getTaskIds() 获取关联任务id
 * @method void setTaskIds(string $TaskIds) 设置关联任务id
 * @method string getAlarmType() 获取告警类别；failure表示失败告警；overtime表示超时告警
 * @method void setAlarmType(string $AlarmType) 设置告警类别；failure表示失败告警；overtime表示超时告警
 * @method string getAlarmWay() 获取告警方式；SMS表示短信；Email表示邮件；HTTP 表示接口方式；Wechat表示微信方式
 * @method void setAlarmWay(string $AlarmWay) 设置告警方式；SMS表示短信；Email表示邮件；HTTP 表示接口方式；Wechat表示微信方式
 * @method string getAlarmRecipient() 获取告警接收人，多个告警接收人以;分割
 * @method void setAlarmRecipient(string $AlarmRecipient) 设置告警接收人，多个告警接收人以;分割
 * @method string getAlarmRecipientId() 获取告警接收人id，多个告警接收人id以;分割
 * @method void setAlarmRecipientId(string $AlarmRecipientId) 设置告警接收人id，多个告警接收人id以;分割
 * @method integer getHours() 获取预计运行的小时，取值范围0-23
 * @method void setHours(integer $Hours) 设置预计运行的小时，取值范围0-23
 * @method integer getMinutes() 获取预计运行分钟，取值范围0-59
 * @method void setMinutes(integer $Minutes) 设置预计运行分钟，取值范围0-59
 * @method integer getTriggerType() 获取告警出发时机；1表示第一次运行失败；2表示所有重试完成后失败；
 * @method void setTriggerType(integer $TriggerType) 设置告警出发时机；1表示第一次运行失败；2表示所有重试完成后失败；
 * @method string getAlarmId() 获取告警信息id
 * @method void setAlarmId(string $AlarmId) 设置告警信息id
 * @method integer getStatus() 获取告警状态设置；1表示可用；0表示不可用，默认可用
 * @method void setStatus(integer $Status) 设置告警状态设置；1表示可用；0表示不可用，默认可用
 */
class AlarmInfo extends AbstractModel
{
    /**
     * @var string 关联任务id
     */
    public $TaskIds;

    /**
     * @var string 告警类别；failure表示失败告警；overtime表示超时告警
     */
    public $AlarmType;

    /**
     * @var string 告警方式；SMS表示短信；Email表示邮件；HTTP 表示接口方式；Wechat表示微信方式
     */
    public $AlarmWay;

    /**
     * @var string 告警接收人，多个告警接收人以;分割
     */
    public $AlarmRecipient;

    /**
     * @var string 告警接收人id，多个告警接收人id以;分割
     */
    public $AlarmRecipientId;

    /**
     * @var integer 预计运行的小时，取值范围0-23
     */
    public $Hours;

    /**
     * @var integer 预计运行分钟，取值范围0-59
     */
    public $Minutes;

    /**
     * @var integer 告警出发时机；1表示第一次运行失败；2表示所有重试完成后失败；
     */
    public $TriggerType;

    /**
     * @var string 告警信息id
     */
    public $AlarmId;

    /**
     * @var integer 告警状态设置；1表示可用；0表示不可用，默认可用
     */
    public $Status;

    /**
     * @param string $TaskIds 关联任务id
     * @param string $AlarmType 告警类别；failure表示失败告警；overtime表示超时告警
     * @param string $AlarmWay 告警方式；SMS表示短信；Email表示邮件；HTTP 表示接口方式；Wechat表示微信方式
     * @param string $AlarmRecipient 告警接收人，多个告警接收人以;分割
     * @param string $AlarmRecipientId 告警接收人id，多个告警接收人id以;分割
     * @param integer $Hours 预计运行的小时，取值范围0-23
     * @param integer $Minutes 预计运行分钟，取值范围0-59
     * @param integer $TriggerType 告警出发时机；1表示第一次运行失败；2表示所有重试完成后失败；
     * @param string $AlarmId 告警信息id
     * @param integer $Status 告警状态设置；1表示可用；0表示不可用，默认可用
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
        if (array_key_exists("TaskIds",$param) and $param["TaskIds"] !== null) {
            $this->TaskIds = $param["TaskIds"];
        }

        if (array_key_exists("AlarmType",$param) and $param["AlarmType"] !== null) {
            $this->AlarmType = $param["AlarmType"];
        }

        if (array_key_exists("AlarmWay",$param) and $param["AlarmWay"] !== null) {
            $this->AlarmWay = $param["AlarmWay"];
        }

        if (array_key_exists("AlarmRecipient",$param) and $param["AlarmRecipient"] !== null) {
            $this->AlarmRecipient = $param["AlarmRecipient"];
        }

        if (array_key_exists("AlarmRecipientId",$param) and $param["AlarmRecipientId"] !== null) {
            $this->AlarmRecipientId = $param["AlarmRecipientId"];
        }

        if (array_key_exists("Hours",$param) and $param["Hours"] !== null) {
            $this->Hours = $param["Hours"];
        }

        if (array_key_exists("Minutes",$param) and $param["Minutes"] !== null) {
            $this->Minutes = $param["Minutes"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("AlarmId",$param) and $param["AlarmId"] !== null) {
            $this->AlarmId = $param["AlarmId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
