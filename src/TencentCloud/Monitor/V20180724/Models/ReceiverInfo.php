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
 * 接收人信息
 *
 * @method integer getStartTime() 获取<p>告警时间段开始时间。范围[0,86400)，作为 UNIX 时间戳转成北京时间后去掉日期，例如7200表示&quot;10:0:0&quot;</p>
 * @method void setStartTime(integer $StartTime) 设置<p>告警时间段开始时间。范围[0,86400)，作为 UNIX 时间戳转成北京时间后去掉日期，例如7200表示&quot;10:0:0&quot;</p>
 * @method integer getEndTime() 获取<p>告警时间段结束时间。含义同StartTime</p>
 * @method void setEndTime(integer $EndTime) 设置<p>告警时间段结束时间。含义同StartTime</p>
 * @method array getNotifyWay() 获取<p>告警通知方式。可选 &quot;SMS&quot;,&quot;SITE&quot;,&quot;EMAIL&quot;,&quot;CALL&quot;,&quot;WECHAT&quot;</p>
 * @method void setNotifyWay(array $NotifyWay) 设置<p>告警通知方式。可选 &quot;SMS&quot;,&quot;SITE&quot;,&quot;EMAIL&quot;,&quot;CALL&quot;,&quot;WECHAT&quot;</p>
 * @method string getReceiverType() 获取<p>接收人类型。“group” 或 “user”</p>
 * @method void setReceiverType(string $ReceiverType) 设置<p>接收人类型。“group” 或 “user”</p>
 * @method integer getId() 获取<p>ReceiverId</p>
 * @method void setId(integer $Id) 设置<p>ReceiverId</p>
 * @method array getSendFor() 获取<p>电话告警通知时机。可选&quot;OCCUR&quot;(告警时通知),&quot;RECOVER&quot;(恢复时通知)</p>
 * @method void setSendFor(array $SendFor) 设置<p>电话告警通知时机。可选&quot;OCCUR&quot;(告警时通知),&quot;RECOVER&quot;(恢复时通知)</p>
 * @method array getUidList() 获取<p>电话告警接收者 UID</p>
 * @method void setUidList(array $UidList) 设置<p>电话告警接收者 UID</p>
 * @method integer getRoundNumber() 获取<p>电话告警轮数</p>
 * @method void setRoundNumber(integer $RoundNumber) 设置<p>电话告警轮数</p>
 * @method integer getPersonInterval() 获取<p>电话告警对个人间隔（秒）</p>
 * @method void setPersonInterval(integer $PersonInterval) 设置<p>电话告警对个人间隔（秒）</p>
 * @method integer getRoundInterval() 获取<p>电话告警每轮间隔（秒）</p>
 * @method void setRoundInterval(integer $RoundInterval) 设置<p>电话告警每轮间隔（秒）</p>
 * @method array getRecoverNotify() 获取<p>恢复通知方式。可选&quot;SMS&quot;</p>
 * @method void setRecoverNotify(array $RecoverNotify) 设置<p>恢复通知方式。可选&quot;SMS&quot;</p>
 * @method integer getNeedSendNotice() 获取<p>是否需要电话告警触达提示。0不需要，1需要</p>
 * @method void setNeedSendNotice(integer $NeedSendNotice) 设置<p>是否需要电话告警触达提示。0不需要，1需要</p>
 * @method array getReceiverGroupList() 获取<p>接收组列表。通过平台接口查询到的接收组 ID 列表</p>
 * @method void setReceiverGroupList(array $ReceiverGroupList) 设置<p>接收组列表。通过平台接口查询到的接收组 ID 列表</p>
 * @method array getReceiverUserList() 获取<p>接收人列表。通过平台接口查询到的接收人 ID 列表</p>
 * @method void setReceiverUserList(array $ReceiverUserList) 设置<p>接收人列表。通过平台接口查询到的接收人 ID 列表</p>
 * @method string getReceiveLanguage() 获取<p>告警接收语言，枚举值（zh-CN，en-US）</p>
 * @method void setReceiveLanguage(string $ReceiveLanguage) 设置<p>告警接收语言，枚举值（zh-CN，en-US）</p>
 */
class ReceiverInfo extends AbstractModel
{
    /**
     * @var integer <p>告警时间段开始时间。范围[0,86400)，作为 UNIX 时间戳转成北京时间后去掉日期，例如7200表示&quot;10:0:0&quot;</p>
     */
    public $StartTime;

    /**
     * @var integer <p>告警时间段结束时间。含义同StartTime</p>
     */
    public $EndTime;

    /**
     * @var array <p>告警通知方式。可选 &quot;SMS&quot;,&quot;SITE&quot;,&quot;EMAIL&quot;,&quot;CALL&quot;,&quot;WECHAT&quot;</p>
     */
    public $NotifyWay;

    /**
     * @var string <p>接收人类型。“group” 或 “user”</p>
     */
    public $ReceiverType;

    /**
     * @var integer <p>ReceiverId</p>
     */
    public $Id;

    /**
     * @var array <p>电话告警通知时机。可选&quot;OCCUR&quot;(告警时通知),&quot;RECOVER&quot;(恢复时通知)</p>
     */
    public $SendFor;

    /**
     * @var array <p>电话告警接收者 UID</p>
     */
    public $UidList;

    /**
     * @var integer <p>电话告警轮数</p>
     */
    public $RoundNumber;

    /**
     * @var integer <p>电话告警对个人间隔（秒）</p>
     */
    public $PersonInterval;

    /**
     * @var integer <p>电话告警每轮间隔（秒）</p>
     */
    public $RoundInterval;

    /**
     * @var array <p>恢复通知方式。可选&quot;SMS&quot;</p>
     */
    public $RecoverNotify;

    /**
     * @var integer <p>是否需要电话告警触达提示。0不需要，1需要</p>
     */
    public $NeedSendNotice;

    /**
     * @var array <p>接收组列表。通过平台接口查询到的接收组 ID 列表</p>
     */
    public $ReceiverGroupList;

    /**
     * @var array <p>接收人列表。通过平台接口查询到的接收人 ID 列表</p>
     */
    public $ReceiverUserList;

    /**
     * @var string <p>告警接收语言，枚举值（zh-CN，en-US）</p>
     */
    public $ReceiveLanguage;

    /**
     * @param integer $StartTime <p>告警时间段开始时间。范围[0,86400)，作为 UNIX 时间戳转成北京时间后去掉日期，例如7200表示&quot;10:0:0&quot;</p>
     * @param integer $EndTime <p>告警时间段结束时间。含义同StartTime</p>
     * @param array $NotifyWay <p>告警通知方式。可选 &quot;SMS&quot;,&quot;SITE&quot;,&quot;EMAIL&quot;,&quot;CALL&quot;,&quot;WECHAT&quot;</p>
     * @param string $ReceiverType <p>接收人类型。“group” 或 “user”</p>
     * @param integer $Id <p>ReceiverId</p>
     * @param array $SendFor <p>电话告警通知时机。可选&quot;OCCUR&quot;(告警时通知),&quot;RECOVER&quot;(恢复时通知)</p>
     * @param array $UidList <p>电话告警接收者 UID</p>
     * @param integer $RoundNumber <p>电话告警轮数</p>
     * @param integer $PersonInterval <p>电话告警对个人间隔（秒）</p>
     * @param integer $RoundInterval <p>电话告警每轮间隔（秒）</p>
     * @param array $RecoverNotify <p>恢复通知方式。可选&quot;SMS&quot;</p>
     * @param integer $NeedSendNotice <p>是否需要电话告警触达提示。0不需要，1需要</p>
     * @param array $ReceiverGroupList <p>接收组列表。通过平台接口查询到的接收组 ID 列表</p>
     * @param array $ReceiverUserList <p>接收人列表。通过平台接口查询到的接收人 ID 列表</p>
     * @param string $ReceiveLanguage <p>告警接收语言，枚举值（zh-CN，en-US）</p>
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
