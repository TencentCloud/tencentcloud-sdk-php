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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSessionDetail返回参数结构体
 *
 * @method string getCaller() 获取<p>主叫号码</p>
 * @method void setCaller(string $Caller) 设置<p>主叫号码</p>
 * @method string getCallee() 获取<p>被叫号码</p>
 * @method void setCallee(string $Callee) 设置<p>被叫号码</p>
 * @method integer getCallType() 获取<p>通话类型 1 呼出 2 呼入 3 音频呼入 5 预测式外呼 6 内线呼叫</p>
 * @method void setCallType(integer $CallType) 设置<p>通话类型 1 呼出 2 呼入 3 音频呼入 5 预测式外呼 6 内线呼叫</p>
 * @method integer getStartTimeStamp() 获取<p>开始时间戳，Unix 秒级时间戳</p>
 * @method void setStartTimeStamp(integer $StartTimeStamp) 设置<p>开始时间戳，Unix 秒级时间戳</p>
 * @method integer getRingTimestamp() 获取<p>振铃时间戳，UNIX 秒级时间戳</p>
 * @method void setRingTimestamp(integer $RingTimestamp) 设置<p>振铃时间戳，UNIX 秒级时间戳</p>
 * @method integer getAcceptTimestamp() 获取<p>接听时间戳，UNIX 秒级时间戳</p>
 * @method void setAcceptTimestamp(integer $AcceptTimestamp) 设置<p>接听时间戳，UNIX 秒级时间戳</p>
 * @method integer getEndedTimestamp() 获取<p>结束时间戳，UNIX 秒级时间戳</p>
 * @method void setEndedTimestamp(integer $EndedTimestamp) 设置<p>结束时间戳，UNIX 秒级时间戳</p>
 * @method integer getQueuedTimestamp() 获取<p>进入排队时间，Unix 秒级时间戳</p>
 * @method void setQueuedTimestamp(integer $QueuedTimestamp) 设置<p>进入排队时间，Unix 秒级时间戳</p>
 * @method string getStaffUserId() 获取<p>座席账号</p>
 * @method void setStaffUserId(string $StaffUserId) 设置<p>座席账号</p>
 * @method integer getEndStatus() 获取<p>参考 DescribeTelCdr 接口 EndStatus 字段</p>
 * @method void setEndStatus(integer $EndStatus) 设置<p>参考 DescribeTelCdr 接口 EndStatus 字段</p>
 * @method integer getQueuedSkillGroupId() 获取<p>排队技能组 ID</p>
 * @method void setQueuedSkillGroupId(integer $QueuedSkillGroupId) 设置<p>排队技能组 ID</p>
 * @method string getQueuedSkillGroupName() 获取<p>排队技能组名称</p>
 * @method void setQueuedSkillGroupName(string $QueuedSkillGroupName) 设置<p>排队技能组名称</p>
 * @method string getRecordURL() 获取<p>录音链接，带鉴权和有效期，获取之后请在24 小时内拉取，不要持久化此链接。如此链接已过期，请重新调用此接口获取新的链接</p>
 * @method void setRecordURL(string $RecordURL) 设置<p>录音链接，带鉴权和有效期，获取之后请在24 小时内拉取，不要持久化此链接。如此链接已过期，请重新调用此接口获取新的链接</p>
 * @method string getCustomRecordURL() 获取<p>录音转存第三方 COS 链接</p>
 * @method void setCustomRecordURL(string $CustomRecordURL) 设置<p>录音转存第三方 COS 链接</p>
 * @method string getAsrURL() 获取<p>录音文本信息链接，带鉴权和有效期，获取之后请在24 小时拉取，不要持久化此链接。如此链接已过期，请重新调用此接口获取新的链接</p>
 * @method void setAsrURL(string $AsrURL) 设置<p>录音文本信息链接，带鉴权和有效期，获取之后请在24 小时拉取，不要持久化此链接。如此链接已过期，请重新调用此接口获取新的链接</p>
 * @method array getVoicemailRecordURL() 获取<p>语音留言录音链接</p>
 * @method void setVoicemailRecordURL(array $VoicemailRecordURL) 设置<p>语音留言录音链接</p>
 * @method array getVoicemailAsrURL() 获取<p>语音留言录音文本信息链接，需在控制台购买离线语音识别套餐包并开启离线语音识别开关</p>
 * @method void setVoicemailAsrURL(array $VoicemailAsrURL) 设置<p>语音留言录音文本信息链接，需在控制台购买离线语音识别套餐包并开启离线语音识别开关</p>
 * @method array getIVRKeyPressed() 获取<p>IVR 按键信息</p>
 * @method void setIVRKeyPressed(array $IVRKeyPressed) 设置<p>IVR 按键信息</p>
 * @method array getPostIVRKeyPressed() 获取<p>满意度按键信息</p>
 * @method void setPostIVRKeyPressed(array $PostIVRKeyPressed) 设置<p>满意度按键信息</p>
 * @method string getHungUpSide() 获取<p>挂机方 seat 座席 user 用户 system 系统</p>
 * @method void setHungUpSide(string $HungUpSide) 设置<p>挂机方 seat 座席 user 用户 system 系统</p>
 * @method string getUUI() 获取<p>客户自定义数据（User-to-User Interface）</p>
 * @method void setUUI(string $UUI) 设置<p>客户自定义数据（User-to-User Interface）</p>
 * @method array getEvents() 获取<p>通话中的事件列表</p>
 * @method void setEvents(array $Events) 设置<p>通话中的事件列表</p>
 * @method array getServeParticipants() 获取<p>服务参与者列表</p>
 * @method void setServeParticipants(array $ServeParticipants) 设置<p>服务参与者列表</p>
 * @method integer getSysHangupReason() 获取<p>接通后系统挂断原因状态码</p><p><a href="https://cloud.tencent.com/document/product/679/123938">详见</a></p>
 * @method void setSysHangupReason(integer $SysHangupReason) 设置<p>接通后系统挂断原因状态码</p><p><a href="https://cloud.tencent.com/document/product/679/123938">详见</a></p>
 * @method string getSysHangupReasonString() 获取<p>接通后系统挂断原因</p><p><a href="https://cloud.tencent.com/document/product/679/123938">详见</a></p>
 * @method void setSysHangupReasonString(string $SysHangupReasonString) 设置<p>接通后系统挂断原因</p><p><a href="https://cloud.tencent.com/document/product/679/123938">详见</a></p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSessionDetailResponse extends AbstractModel
{
    /**
     * @var string <p>主叫号码</p>
     */
    public $Caller;

    /**
     * @var string <p>被叫号码</p>
     */
    public $Callee;

    /**
     * @var integer <p>通话类型 1 呼出 2 呼入 3 音频呼入 5 预测式外呼 6 内线呼叫</p>
     */
    public $CallType;

    /**
     * @var integer <p>开始时间戳，Unix 秒级时间戳</p>
     */
    public $StartTimeStamp;

    /**
     * @var integer <p>振铃时间戳，UNIX 秒级时间戳</p>
     */
    public $RingTimestamp;

    /**
     * @var integer <p>接听时间戳，UNIX 秒级时间戳</p>
     */
    public $AcceptTimestamp;

    /**
     * @var integer <p>结束时间戳，UNIX 秒级时间戳</p>
     */
    public $EndedTimestamp;

    /**
     * @var integer <p>进入排队时间，Unix 秒级时间戳</p>
     */
    public $QueuedTimestamp;

    /**
     * @var string <p>座席账号</p>
     */
    public $StaffUserId;

    /**
     * @var integer <p>参考 DescribeTelCdr 接口 EndStatus 字段</p>
     */
    public $EndStatus;

    /**
     * @var integer <p>排队技能组 ID</p>
     */
    public $QueuedSkillGroupId;

    /**
     * @var string <p>排队技能组名称</p>
     */
    public $QueuedSkillGroupName;

    /**
     * @var string <p>录音链接，带鉴权和有效期，获取之后请在24 小时内拉取，不要持久化此链接。如此链接已过期，请重新调用此接口获取新的链接</p>
     */
    public $RecordURL;

    /**
     * @var string <p>录音转存第三方 COS 链接</p>
     */
    public $CustomRecordURL;

    /**
     * @var string <p>录音文本信息链接，带鉴权和有效期，获取之后请在24 小时拉取，不要持久化此链接。如此链接已过期，请重新调用此接口获取新的链接</p>
     */
    public $AsrURL;

    /**
     * @var array <p>语音留言录音链接</p>
     */
    public $VoicemailRecordURL;

    /**
     * @var array <p>语音留言录音文本信息链接，需在控制台购买离线语音识别套餐包并开启离线语音识别开关</p>
     */
    public $VoicemailAsrURL;

    /**
     * @var array <p>IVR 按键信息</p>
     */
    public $IVRKeyPressed;

    /**
     * @var array <p>满意度按键信息</p>
     */
    public $PostIVRKeyPressed;

    /**
     * @var string <p>挂机方 seat 座席 user 用户 system 系统</p>
     */
    public $HungUpSide;

    /**
     * @var string <p>客户自定义数据（User-to-User Interface）</p>
     */
    public $UUI;

    /**
     * @var array <p>通话中的事件列表</p>
     */
    public $Events;

    /**
     * @var array <p>服务参与者列表</p>
     */
    public $ServeParticipants;

    /**
     * @var integer <p>接通后系统挂断原因状态码</p><p><a href="https://cloud.tencent.com/document/product/679/123938">详见</a></p>
     */
    public $SysHangupReason;

    /**
     * @var string <p>接通后系统挂断原因</p><p><a href="https://cloud.tencent.com/document/product/679/123938">详见</a></p>
     */
    public $SysHangupReasonString;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Caller <p>主叫号码</p>
     * @param string $Callee <p>被叫号码</p>
     * @param integer $CallType <p>通话类型 1 呼出 2 呼入 3 音频呼入 5 预测式外呼 6 内线呼叫</p>
     * @param integer $StartTimeStamp <p>开始时间戳，Unix 秒级时间戳</p>
     * @param integer $RingTimestamp <p>振铃时间戳，UNIX 秒级时间戳</p>
     * @param integer $AcceptTimestamp <p>接听时间戳，UNIX 秒级时间戳</p>
     * @param integer $EndedTimestamp <p>结束时间戳，UNIX 秒级时间戳</p>
     * @param integer $QueuedTimestamp <p>进入排队时间，Unix 秒级时间戳</p>
     * @param string $StaffUserId <p>座席账号</p>
     * @param integer $EndStatus <p>参考 DescribeTelCdr 接口 EndStatus 字段</p>
     * @param integer $QueuedSkillGroupId <p>排队技能组 ID</p>
     * @param string $QueuedSkillGroupName <p>排队技能组名称</p>
     * @param string $RecordURL <p>录音链接，带鉴权和有效期，获取之后请在24 小时内拉取，不要持久化此链接。如此链接已过期，请重新调用此接口获取新的链接</p>
     * @param string $CustomRecordURL <p>录音转存第三方 COS 链接</p>
     * @param string $AsrURL <p>录音文本信息链接，带鉴权和有效期，获取之后请在24 小时拉取，不要持久化此链接。如此链接已过期，请重新调用此接口获取新的链接</p>
     * @param array $VoicemailRecordURL <p>语音留言录音链接</p>
     * @param array $VoicemailAsrURL <p>语音留言录音文本信息链接，需在控制台购买离线语音识别套餐包并开启离线语音识别开关</p>
     * @param array $IVRKeyPressed <p>IVR 按键信息</p>
     * @param array $PostIVRKeyPressed <p>满意度按键信息</p>
     * @param string $HungUpSide <p>挂机方 seat 座席 user 用户 system 系统</p>
     * @param string $UUI <p>客户自定义数据（User-to-User Interface）</p>
     * @param array $Events <p>通话中的事件列表</p>
     * @param array $ServeParticipants <p>服务参与者列表</p>
     * @param integer $SysHangupReason <p>接通后系统挂断原因状态码</p><p><a href="https://cloud.tencent.com/document/product/679/123938">详见</a></p>
     * @param string $SysHangupReasonString <p>接通后系统挂断原因</p><p><a href="https://cloud.tencent.com/document/product/679/123938">详见</a></p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Caller",$param) and $param["Caller"] !== null) {
            $this->Caller = $param["Caller"];
        }

        if (array_key_exists("Callee",$param) and $param["Callee"] !== null) {
            $this->Callee = $param["Callee"];
        }

        if (array_key_exists("CallType",$param) and $param["CallType"] !== null) {
            $this->CallType = $param["CallType"];
        }

        if (array_key_exists("StartTimeStamp",$param) and $param["StartTimeStamp"] !== null) {
            $this->StartTimeStamp = $param["StartTimeStamp"];
        }

        if (array_key_exists("RingTimestamp",$param) and $param["RingTimestamp"] !== null) {
            $this->RingTimestamp = $param["RingTimestamp"];
        }

        if (array_key_exists("AcceptTimestamp",$param) and $param["AcceptTimestamp"] !== null) {
            $this->AcceptTimestamp = $param["AcceptTimestamp"];
        }

        if (array_key_exists("EndedTimestamp",$param) and $param["EndedTimestamp"] !== null) {
            $this->EndedTimestamp = $param["EndedTimestamp"];
        }

        if (array_key_exists("QueuedTimestamp",$param) and $param["QueuedTimestamp"] !== null) {
            $this->QueuedTimestamp = $param["QueuedTimestamp"];
        }

        if (array_key_exists("StaffUserId",$param) and $param["StaffUserId"] !== null) {
            $this->StaffUserId = $param["StaffUserId"];
        }

        if (array_key_exists("EndStatus",$param) and $param["EndStatus"] !== null) {
            $this->EndStatus = $param["EndStatus"];
        }

        if (array_key_exists("QueuedSkillGroupId",$param) and $param["QueuedSkillGroupId"] !== null) {
            $this->QueuedSkillGroupId = $param["QueuedSkillGroupId"];
        }

        if (array_key_exists("QueuedSkillGroupName",$param) and $param["QueuedSkillGroupName"] !== null) {
            $this->QueuedSkillGroupName = $param["QueuedSkillGroupName"];
        }

        if (array_key_exists("RecordURL",$param) and $param["RecordURL"] !== null) {
            $this->RecordURL = $param["RecordURL"];
        }

        if (array_key_exists("CustomRecordURL",$param) and $param["CustomRecordURL"] !== null) {
            $this->CustomRecordURL = $param["CustomRecordURL"];
        }

        if (array_key_exists("AsrURL",$param) and $param["AsrURL"] !== null) {
            $this->AsrURL = $param["AsrURL"];
        }

        if (array_key_exists("VoicemailRecordURL",$param) and $param["VoicemailRecordURL"] !== null) {
            $this->VoicemailRecordURL = $param["VoicemailRecordURL"];
        }

        if (array_key_exists("VoicemailAsrURL",$param) and $param["VoicemailAsrURL"] !== null) {
            $this->VoicemailAsrURL = $param["VoicemailAsrURL"];
        }

        if (array_key_exists("IVRKeyPressed",$param) and $param["IVRKeyPressed"] !== null) {
            $this->IVRKeyPressed = [];
            foreach ($param["IVRKeyPressed"] as $key => $value){
                $obj = new IVRKeyPressedElement();
                $obj->deserialize($value);
                array_push($this->IVRKeyPressed, $obj);
            }
        }

        if (array_key_exists("PostIVRKeyPressed",$param) and $param["PostIVRKeyPressed"] !== null) {
            $this->PostIVRKeyPressed = [];
            foreach ($param["PostIVRKeyPressed"] as $key => $value){
                $obj = new IVRKeyPressedElement();
                $obj->deserialize($value);
                array_push($this->PostIVRKeyPressed, $obj);
            }
        }

        if (array_key_exists("HungUpSide",$param) and $param["HungUpSide"] !== null) {
            $this->HungUpSide = $param["HungUpSide"];
        }

        if (array_key_exists("UUI",$param) and $param["UUI"] !== null) {
            $this->UUI = $param["UUI"];
        }

        if (array_key_exists("Events",$param) and $param["Events"] !== null) {
            $this->Events = [];
            foreach ($param["Events"] as $key => $value){
                $obj = new SessionEvent();
                $obj->deserialize($value);
                array_push($this->Events, $obj);
            }
        }

        if (array_key_exists("ServeParticipants",$param) and $param["ServeParticipants"] !== null) {
            $this->ServeParticipants = [];
            foreach ($param["ServeParticipants"] as $key => $value){
                $obj = new ServeParticipant();
                $obj->deserialize($value);
                array_push($this->ServeParticipants, $obj);
            }
        }

        if (array_key_exists("SysHangupReason",$param) and $param["SysHangupReason"] !== null) {
            $this->SysHangupReason = $param["SysHangupReason"];
        }

        if (array_key_exists("SysHangupReasonString",$param) and $param["SysHangupReasonString"] !== null) {
            $this->SysHangupReasonString = $param["SysHangupReasonString"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
