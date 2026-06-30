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
 * 2018版策略模板列表接收人信息
 *
 * @method integer getEndTime() 获取<p>有效时段结束时间</p>
 * @method void setEndTime(integer $EndTime) 设置<p>有效时段结束时间</p>
 * @method integer getNeedSendNotice() 获取<p>是否需要发送通知</p>
 * @method void setNeedSendNotice(integer $NeedSendNotice) 设置<p>是否需要发送通知</p>
 * @method array getNotifyWay() 获取<p>告警接收渠道</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNotifyWay(array $NotifyWay) 设置<p>告警接收渠道</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPersonInterval() 获取<p>电话告警对个人间隔（秒）</p>
 * @method void setPersonInterval(integer $PersonInterval) 设置<p>电话告警对个人间隔（秒）</p>
 * @method array getReceiverGroupList() 获取<p>消息接收组列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReceiverGroupList(array $ReceiverGroupList) 设置<p>消息接收组列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReceiverType() 获取<p>接受者类型</p>
 * @method void setReceiverType(string $ReceiverType) 设置<p>接受者类型</p>
 * @method array getReceiverUserList() 获取<p>接收人列表。通过平台接口查询到的接收人id列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReceiverUserList(array $ReceiverUserList) 设置<p>接收人列表。通过平台接口查询到的接收人id列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRecoverNotify() 获取<p>告警恢复通知方式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecoverNotify(array $RecoverNotify) 设置<p>告警恢复通知方式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRoundInterval() 获取<p>电话告警每轮间隔（秒）</p>
 * @method void setRoundInterval(integer $RoundInterval) 设置<p>电话告警每轮间隔（秒）</p>
 * @method integer getRoundNumber() 获取<p>电话告警轮数</p>
 * @method void setRoundNumber(integer $RoundNumber) 设置<p>电话告警轮数</p>
 * @method array getSendFor() 获取<p>电话告警通知时机。可选&quot;OCCUR&quot;(告警时通知),&quot;RECOVER&quot;(恢复时通知)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSendFor(array $SendFor) 设置<p>电话告警通知时机。可选&quot;OCCUR&quot;(告警时通知),&quot;RECOVER&quot;(恢复时通知)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStartTime() 获取<p>有效时段开始时间</p>
 * @method void setStartTime(integer $StartTime) 设置<p>有效时段开始时间</p>
 * @method array getUIDList() 获取<p>电话告警接收者uid</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUIDList(array $UIDList) 设置<p>电话告警接收者uid</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class PolicyGroupReceiverInfo extends AbstractModel
{
    /**
     * @var integer <p>有效时段结束时间</p>
     */
    public $EndTime;

    /**
     * @var integer <p>是否需要发送通知</p>
     */
    public $NeedSendNotice;

    /**
     * @var array <p>告警接收渠道</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NotifyWay;

    /**
     * @var integer <p>电话告警对个人间隔（秒）</p>
     */
    public $PersonInterval;

    /**
     * @var array <p>消息接收组列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReceiverGroupList;

    /**
     * @var string <p>接受者类型</p>
     */
    public $ReceiverType;

    /**
     * @var array <p>接收人列表。通过平台接口查询到的接收人id列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReceiverUserList;

    /**
     * @var array <p>告警恢复通知方式</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecoverNotify;

    /**
     * @var integer <p>电话告警每轮间隔（秒）</p>
     */
    public $RoundInterval;

    /**
     * @var integer <p>电话告警轮数</p>
     */
    public $RoundNumber;

    /**
     * @var array <p>电话告警通知时机。可选&quot;OCCUR&quot;(告警时通知),&quot;RECOVER&quot;(恢复时通知)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SendFor;

    /**
     * @var integer <p>有效时段开始时间</p>
     */
    public $StartTime;

    /**
     * @var array <p>电话告警接收者uid</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UIDList;

    /**
     * @param integer $EndTime <p>有效时段结束时间</p>
     * @param integer $NeedSendNotice <p>是否需要发送通知</p>
     * @param array $NotifyWay <p>告警接收渠道</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PersonInterval <p>电话告警对个人间隔（秒）</p>
     * @param array $ReceiverGroupList <p>消息接收组列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReceiverType <p>接受者类型</p>
     * @param array $ReceiverUserList <p>接收人列表。通过平台接口查询到的接收人id列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RecoverNotify <p>告警恢复通知方式</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RoundInterval <p>电话告警每轮间隔（秒）</p>
     * @param integer $RoundNumber <p>电话告警轮数</p>
     * @param array $SendFor <p>电话告警通知时机。可选&quot;OCCUR&quot;(告警时通知),&quot;RECOVER&quot;(恢复时通知)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StartTime <p>有效时段开始时间</p>
     * @param array $UIDList <p>电话告警接收者uid</p>
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
