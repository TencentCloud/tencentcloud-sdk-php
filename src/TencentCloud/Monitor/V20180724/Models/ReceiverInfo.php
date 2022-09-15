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
 * 接收人信息
 *
 * @method integer getStartTime() 获取告警时间段开始时间。范围[0,86400)，作为 UNIX 时间戳转成北京时间后去掉日期，例如7200表示"10:0:0"
 * @method void setStartTime(integer $StartTime) 设置告警时间段开始时间。范围[0,86400)，作为 UNIX 时间戳转成北京时间后去掉日期，例如7200表示"10:0:0"
 * @method integer getEndTime() 获取告警时间段结束时间。含义同StartTime
 * @method void setEndTime(integer $EndTime) 设置告警时间段结束时间。含义同StartTime
 * @method array getNotifyWay() 获取告警通知方式。可选 "SMS","SITE","EMAIL","CALL","WECHAT"
 * @method void setNotifyWay(array $NotifyWay) 设置告警通知方式。可选 "SMS","SITE","EMAIL","CALL","WECHAT"
 * @method string getReceiverType() 获取接收人类型。“group” 或 “user”
 * @method void setReceiverType(string $ReceiverType) 设置接收人类型。“group” 或 “user”
 * @method integer getId() 获取ReceiverId
 * @method void setId(integer $Id) 设置ReceiverId
 * @method array getSendFor() 获取电话告警通知时机。可选"OCCUR"(告警时通知),"RECOVER"(恢复时通知)
 * @method void setSendFor(array $SendFor) 设置电话告警通知时机。可选"OCCUR"(告警时通知),"RECOVER"(恢复时通知)
 * @method array getUidList() 获取电话告警接收者 UID
 * @method void setUidList(array $UidList) 设置电话告警接收者 UID
 * @method integer getRoundNumber() 获取电话告警轮数
 * @method void setRoundNumber(integer $RoundNumber) 设置电话告警轮数
 * @method integer getPersonInterval() 获取电话告警对个人间隔（秒）
 * @method void setPersonInterval(integer $PersonInterval) 设置电话告警对个人间隔（秒）
 * @method integer getRoundInterval() 获取电话告警每轮间隔（秒）
 * @method void setRoundInterval(integer $RoundInterval) 设置电话告警每轮间隔（秒）
 * @method array getRecoverNotify() 获取恢复通知方式。可选"SMS"
 * @method void setRecoverNotify(array $RecoverNotify) 设置恢复通知方式。可选"SMS"
 * @method integer getNeedSendNotice() 获取是否需要电话告警触达提示。0不需要，1需要
 * @method void setNeedSendNotice(integer $NeedSendNotice) 设置是否需要电话告警触达提示。0不需要，1需要
 * @method array getReceiverGroupList() 获取接收组列表。通过平台接口查询到的接收组 ID 列表
 * @method void setReceiverGroupList(array $ReceiverGroupList) 设置接收组列表。通过平台接口查询到的接收组 ID 列表
 * @method array getReceiverUserList() 获取接收人列表。通过平台接口查询到的接收人 ID 列表
 * @method void setReceiverUserList(array $ReceiverUserList) 设置接收人列表。通过平台接口查询到的接收人 ID 列表
 * @method string getReceiveLanguage() 获取告警接收语言，枚举值（zh-CN，en-US）
 * @method void setReceiveLanguage(string $ReceiveLanguage) 设置告警接收语言，枚举值（zh-CN，en-US）
 */
class ReceiverInfo extends AbstractModel
{
    /**
     * @var integer 告警时间段开始时间。范围[0,86400)，作为 UNIX 时间戳转成北京时间后去掉日期，例如7200表示"10:0:0"
     */
    public $StartTime;

    /**
     * @var integer 告警时间段结束时间。含义同StartTime
     */
    public $EndTime;

    /**
     * @var array 告警通知方式。可选 "SMS","SITE","EMAIL","CALL","WECHAT"
     */
    public $NotifyWay;

    /**
     * @var string 接收人类型。“group” 或 “user”
     */
    public $ReceiverType;

    /**
     * @var integer ReceiverId
     */
    public $Id;

    /**
     * @var array 电话告警通知时机。可选"OCCUR"(告警时通知),"RECOVER"(恢复时通知)
     */
    public $SendFor;

    /**
     * @var array 电话告警接收者 UID
     */
    public $UidList;

    /**
     * @var integer 电话告警轮数
     */
    public $RoundNumber;

    /**
     * @var integer 电话告警对个人间隔（秒）
     */
    public $PersonInterval;

    /**
     * @var integer 电话告警每轮间隔（秒）
     */
    public $RoundInterval;

    /**
     * @var array 恢复通知方式。可选"SMS"
     */
    public $RecoverNotify;

    /**
     * @var integer 是否需要电话告警触达提示。0不需要，1需要
     */
    public $NeedSendNotice;

    /**
     * @var array 接收组列表。通过平台接口查询到的接收组 ID 列表
     */
    public $ReceiverGroupList;

    /**
     * @var array 接收人列表。通过平台接口查询到的接收人 ID 列表
     */
    public $ReceiverUserList;

    /**
     * @var string 告警接收语言，枚举值（zh-CN，en-US）
     */
    public $ReceiveLanguage;

    /**
     * @param integer $StartTime 告警时间段开始时间。范围[0,86400)，作为 UNIX 时间戳转成北京时间后去掉日期，例如7200表示"10:0:0"
     * @param integer $EndTime 告警时间段结束时间。含义同StartTime
     * @param array $NotifyWay 告警通知方式。可选 "SMS","SITE","EMAIL","CALL","WECHAT"
     * @param string $ReceiverType 接收人类型。“group” 或 “user”
     * @param integer $Id ReceiverId
     * @param array $SendFor 电话告警通知时机。可选"OCCUR"(告警时通知),"RECOVER"(恢复时通知)
     * @param array $UidList 电话告警接收者 UID
     * @param integer $RoundNumber 电话告警轮数
     * @param integer $PersonInterval 电话告警对个人间隔（秒）
     * @param integer $RoundInterval 电话告警每轮间隔（秒）
     * @param array $RecoverNotify 恢复通知方式。可选"SMS"
     * @param integer $NeedSendNotice 是否需要电话告警触达提示。0不需要，1需要
     * @param array $ReceiverGroupList 接收组列表。通过平台接口查询到的接收组 ID 列表
     * @param array $ReceiverUserList 接收人列表。通过平台接口查询到的接收人 ID 列表
     * @param string $ReceiveLanguage 告警接收语言，枚举值（zh-CN，en-US）
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("NotifyWay",$param) and $param["NotifyWay"] !== null) {
            $this->NotifyWay = $param["NotifyWay"];
        }

        if (array_key_exists("ReceiverType",$param) and $param["ReceiverType"] !== null) {
            $this->ReceiverType = $param["ReceiverType"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("SendFor",$param) and $param["SendFor"] !== null) {
            $this->SendFor = $param["SendFor"];
        }

        if (array_key_exists("UidList",$param) and $param["UidList"] !== null) {
            $this->UidList = $param["UidList"];
        }

        if (array_key_exists("RoundNumber",$param) and $param["RoundNumber"] !== null) {
            $this->RoundNumber = $param["RoundNumber"];
        }

        if (array_key_exists("PersonInterval",$param) and $param["PersonInterval"] !== null) {
            $this->PersonInterval = $param["PersonInterval"];
        }

        if (array_key_exists("RoundInterval",$param) and $param["RoundInterval"] !== null) {
            $this->RoundInterval = $param["RoundInterval"];
        }

        if (array_key_exists("RecoverNotify",$param) and $param["RecoverNotify"] !== null) {
            $this->RecoverNotify = $param["RecoverNotify"];
        }

        if (array_key_exists("NeedSendNotice",$param) and $param["NeedSendNotice"] !== null) {
            $this->NeedSendNotice = $param["NeedSendNotice"];
        }

        if (array_key_exists("ReceiverGroupList",$param) and $param["ReceiverGroupList"] !== null) {
            $this->ReceiverGroupList = $param["ReceiverGroupList"];
        }

        if (array_key_exists("ReceiverUserList",$param) and $param["ReceiverUserList"] !== null) {
            $this->ReceiverUserList = $param["ReceiverUserList"];
        }

        if (array_key_exists("ReceiveLanguage",$param) and $param["ReceiveLanguage"] !== null) {
            $this->ReceiveLanguage = $param["ReceiveLanguage"];
        }
    }
}
