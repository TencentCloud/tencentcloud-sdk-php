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
 * 2018版策略模板列表接收人信息
 *
 * @method integer getEndTime() 获取有效时段结束时间
 * @method void setEndTime(integer $EndTime) 设置有效时段结束时间
 * @method integer getNeedSendNotice() 获取是否需要发送通知
 * @method void setNeedSendNotice(integer $NeedSendNotice) 设置是否需要发送通知
 * @method array getNotifyWay() 获取告警接收渠道
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNotifyWay(array $NotifyWay) 设置告警接收渠道
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPersonInterval() 获取电话告警对个人间隔（秒）
 * @method void setPersonInterval(integer $PersonInterval) 设置电话告警对个人间隔（秒）
 * @method array getReceiverGroupList() 获取消息接收组列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReceiverGroupList(array $ReceiverGroupList) 设置消息接收组列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReceiverType() 获取接受者类型
 * @method void setReceiverType(string $ReceiverType) 设置接受者类型
 * @method array getReceiverUserList() 获取接收人列表。通过平台接口查询到的接收人id列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReceiverUserList(array $ReceiverUserList) 设置接收人列表。通过平台接口查询到的接收人id列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRecoverNotify() 获取告警恢复通知方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecoverNotify(array $RecoverNotify) 设置告警恢复通知方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRoundInterval() 获取电话告警每轮间隔（秒）
 * @method void setRoundInterval(integer $RoundInterval) 设置电话告警每轮间隔（秒）
 * @method integer getRoundNumber() 获取电话告警轮数
 * @method void setRoundNumber(integer $RoundNumber) 设置电话告警轮数
 * @method array getSendFor() 获取电话告警通知时机。可选"OCCUR"(告警时通知),"RECOVER"(恢复时通知)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSendFor(array $SendFor) 设置电话告警通知时机。可选"OCCUR"(告警时通知),"RECOVER"(恢复时通知)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStartTime() 获取有效时段开始时间
 * @method void setStartTime(integer $StartTime) 设置有效时段开始时间
 * @method array getUIDList() 获取电话告警接收者uid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUIDList(array $UIDList) 设置电话告警接收者uid
注意：此字段可能返回 null，表示取不到有效值。
 */
class PolicyGroupReceiverInfo extends AbstractModel
{
    /**
     * @var integer 有效时段结束时间
     */
    public $EndTime;

    /**
     * @var integer 是否需要发送通知
     */
    public $NeedSendNotice;

    /**
     * @var array 告警接收渠道
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NotifyWay;

    /**
     * @var integer 电话告警对个人间隔（秒）
     */
    public $PersonInterval;

    /**
     * @var array 消息接收组列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReceiverGroupList;

    /**
     * @var string 接受者类型
     */
    public $ReceiverType;

    /**
     * @var array 接收人列表。通过平台接口查询到的接收人id列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReceiverUserList;

    /**
     * @var array 告警恢复通知方式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecoverNotify;

    /**
     * @var integer 电话告警每轮间隔（秒）
     */
    public $RoundInterval;

    /**
     * @var integer 电话告警轮数
     */
    public $RoundNumber;

    /**
     * @var array 电话告警通知时机。可选"OCCUR"(告警时通知),"RECOVER"(恢复时通知)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SendFor;

    /**
     * @var integer 有效时段开始时间
     */
    public $StartTime;

    /**
     * @var array 电话告警接收者uid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UIDList;

    /**
     * @param integer $EndTime 有效时段结束时间
     * @param integer $NeedSendNotice 是否需要发送通知
     * @param array $NotifyWay 告警接收渠道
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PersonInterval 电话告警对个人间隔（秒）
     * @param array $ReceiverGroupList 消息接收组列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReceiverType 接受者类型
     * @param array $ReceiverUserList 接收人列表。通过平台接口查询到的接收人id列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RecoverNotify 告警恢复通知方式
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RoundInterval 电话告警每轮间隔（秒）
     * @param integer $RoundNumber 电话告警轮数
     * @param array $SendFor 电话告警通知时机。可选"OCCUR"(告警时通知),"RECOVER"(恢复时通知)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StartTime 有效时段开始时间
     * @param array $UIDList 电话告警接收者uid
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
        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("NeedSendNotice",$param) and $param["NeedSendNotice"] !== null) {
            $this->NeedSendNotice = $param["NeedSendNotice"];
        }

        if (array_key_exists("NotifyWay",$param) and $param["NotifyWay"] !== null) {
            $this->NotifyWay = $param["NotifyWay"];
        }

        if (array_key_exists("PersonInterval",$param) and $param["PersonInterval"] !== null) {
            $this->PersonInterval = $param["PersonInterval"];
        }

        if (array_key_exists("ReceiverGroupList",$param) and $param["ReceiverGroupList"] !== null) {
            $this->ReceiverGroupList = $param["ReceiverGroupList"];
        }

        if (array_key_exists("ReceiverType",$param) and $param["ReceiverType"] !== null) {
            $this->ReceiverType = $param["ReceiverType"];
        }

        if (array_key_exists("ReceiverUserList",$param) and $param["ReceiverUserList"] !== null) {
            $this->ReceiverUserList = $param["ReceiverUserList"];
        }

        if (array_key_exists("RecoverNotify",$param) and $param["RecoverNotify"] !== null) {
            $this->RecoverNotify = $param["RecoverNotify"];
        }

        if (array_key_exists("RoundInterval",$param) and $param["RoundInterval"] !== null) {
            $this->RoundInterval = $param["RoundInterval"];
        }

        if (array_key_exists("RoundNumber",$param) and $param["RoundNumber"] !== null) {
            $this->RoundNumber = $param["RoundNumber"];
        }

        if (array_key_exists("SendFor",$param) and $param["SendFor"] !== null) {
            $this->SendFor = $param["SendFor"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("UIDList",$param) and $param["UIDList"] !== null) {
            $this->UIDList = $param["UIDList"];
        }
    }
}
