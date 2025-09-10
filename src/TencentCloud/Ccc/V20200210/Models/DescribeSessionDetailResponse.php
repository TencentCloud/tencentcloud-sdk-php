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
 * @method string getCaller() 获取主叫号码
 * @method void setCaller(string $Caller) 设置主叫号码
 * @method string getCallee() 获取被叫号码
 * @method void setCallee(string $Callee) 设置被叫号码
 * @method integer getCallType() 获取通话类型 1 呼出 2 呼入 3 音频呼入 5 预测式外呼 6 内线呼叫
 * @method void setCallType(integer $CallType) 设置通话类型 1 呼出 2 呼入 3 音频呼入 5 预测式外呼 6 内线呼叫
 * @method integer getStartTimeStamp() 获取开始时间戳，Unix 秒级时间戳
 * @method void setStartTimeStamp(integer $StartTimeStamp) 设置开始时间戳，Unix 秒级时间戳
 * @method integer getRingTimestamp() 获取振铃时间戳，UNIX 秒级时间戳
 * @method void setRingTimestamp(integer $RingTimestamp) 设置振铃时间戳，UNIX 秒级时间戳
 * @method integer getAcceptTimestamp() 获取接听时间戳，UNIX 秒级时间戳
 * @method void setAcceptTimestamp(integer $AcceptTimestamp) 设置接听时间戳，UNIX 秒级时间戳
 * @method integer getEndedTimestamp() 获取结束时间戳，UNIX 秒级时间戳
 * @method void setEndedTimestamp(integer $EndedTimestamp) 设置结束时间戳，UNIX 秒级时间戳
 * @method integer getQueuedTimestamp() 获取进入排队时间，Unix 秒级时间戳
 * @method void setQueuedTimestamp(integer $QueuedTimestamp) 设置进入排队时间，Unix 秒级时间戳
 * @method string getStaffUserId() 获取座席账号
 * @method void setStaffUserId(string $StaffUserId) 设置座席账号
 * @method integer getEndStatus() 获取参考 DescribeTelCdr 接口 EndStatus 字段
 * @method void setEndStatus(integer $EndStatus) 设置参考 DescribeTelCdr 接口 EndStatus 字段
 * @method integer getQueuedSkillGroupId() 获取排队技能组 ID
 * @method void setQueuedSkillGroupId(integer $QueuedSkillGroupId) 设置排队技能组 ID
 * @method string getQueuedSkillGroupName() 获取排队技能组名称
 * @method void setQueuedSkillGroupName(string $QueuedSkillGroupName) 设置排队技能组名称
 * @method string getRecordURL() 获取录音链接，带鉴权和有效期，获取之后请在短时间内拉取，不要持久化此链接
 * @method void setRecordURL(string $RecordURL) 设置录音链接，带鉴权和有效期，获取之后请在短时间内拉取，不要持久化此链接
 * @method string getCustomRecordURL() 获取录音转存第三方 COS 链接
 * @method void setCustomRecordURL(string $CustomRecordURL) 设置录音转存第三方 COS 链接
 * @method string getAsrURL() 获取录音文本信息链接，带鉴权和有效期，获取之后请在短时间内拉取，不要持久化此链接
 * @method void setAsrURL(string $AsrURL) 设置录音文本信息链接，带鉴权和有效期，获取之后请在短时间内拉取，不要持久化此链接
 * @method array getVoicemailRecordURL() 获取语音留言录音链接
 * @method void setVoicemailRecordURL(array $VoicemailRecordURL) 设置语音留言录音链接
 * @method array getVoicemailAsrURL() 获取语音留言录音文本信息链接，需在控制台购买离线语音识别套餐包并开启离线语音识别开关
 * @method void setVoicemailAsrURL(array $VoicemailAsrURL) 设置语音留言录音文本信息链接，需在控制台购买离线语音识别套餐包并开启离线语音识别开关
 * @method array getIVRKeyPressed() 获取IVR 按键信息
 * @method void setIVRKeyPressed(array $IVRKeyPressed) 设置IVR 按键信息
 * @method array getPostIVRKeyPressed() 获取满意度按键信息
 * @method void setPostIVRKeyPressed(array $PostIVRKeyPressed) 设置满意度按键信息
 * @method string getHungUpSide() 获取挂机方 seat 座席 user 用户 system 系统
 * @method void setHungUpSide(string $HungUpSide) 设置挂机方 seat 座席 user 用户 system 系统
 * @method string getUUI() 获取客户自定义数据（User-to-User Interface）
 * @method void setUUI(string $UUI) 设置客户自定义数据（User-to-User Interface）
 * @method array getEvents() 获取通话中的事件列表
 * @method void setEvents(array $Events) 设置通话中的事件列表
 * @method array getServeParticipants() 获取服务参与者列表
 * @method void setServeParticipants(array $ServeParticipants) 设置服务参与者列表
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSessionDetailResponse extends AbstractModel
{
    /**
     * @var string 主叫号码
     */
    public $Caller;

    /**
     * @var string 被叫号码
     */
    public $Callee;

    /**
     * @var integer 通话类型 1 呼出 2 呼入 3 音频呼入 5 预测式外呼 6 内线呼叫
     */
    public $CallType;

    /**
     * @var integer 开始时间戳，Unix 秒级时间戳
     */
    public $StartTimeStamp;

    /**
     * @var integer 振铃时间戳，UNIX 秒级时间戳
     */
    public $RingTimestamp;

    /**
     * @var integer 接听时间戳，UNIX 秒级时间戳
     */
    public $AcceptTimestamp;

    /**
     * @var integer 结束时间戳，UNIX 秒级时间戳
     */
    public $EndedTimestamp;

    /**
     * @var integer 进入排队时间，Unix 秒级时间戳
     */
    public $QueuedTimestamp;

    /**
     * @var string 座席账号
     */
    public $StaffUserId;

    /**
     * @var integer 参考 DescribeTelCdr 接口 EndStatus 字段
     */
    public $EndStatus;

    /**
     * @var integer 排队技能组 ID
     */
    public $QueuedSkillGroupId;

    /**
     * @var string 排队技能组名称
     */
    public $QueuedSkillGroupName;

    /**
     * @var string 录音链接，带鉴权和有效期，获取之后请在短时间内拉取，不要持久化此链接
     */
    public $RecordURL;

    /**
     * @var string 录音转存第三方 COS 链接
     */
    public $CustomRecordURL;

    /**
     * @var string 录音文本信息链接，带鉴权和有效期，获取之后请在短时间内拉取，不要持久化此链接
     */
    public $AsrURL;

    /**
     * @var array 语音留言录音链接
     */
    public $VoicemailRecordURL;

    /**
     * @var array 语音留言录音文本信息链接，需在控制台购买离线语音识别套餐包并开启离线语音识别开关
     */
    public $VoicemailAsrURL;

    /**
     * @var array IVR 按键信息
     */
    public $IVRKeyPressed;

    /**
     * @var array 满意度按键信息
     */
    public $PostIVRKeyPressed;

    /**
     * @var string 挂机方 seat 座席 user 用户 system 系统
     */
    public $HungUpSide;

    /**
     * @var string 客户自定义数据（User-to-User Interface）
     */
    public $UUI;

    /**
     * @var array 通话中的事件列表
     */
    public $Events;

    /**
     * @var array 服务参与者列表
     */
    public $ServeParticipants;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Caller 主叫号码
     * @param string $Callee 被叫号码
     * @param integer $CallType 通话类型 1 呼出 2 呼入 3 音频呼入 5 预测式外呼 6 内线呼叫
     * @param integer $StartTimeStamp 开始时间戳，Unix 秒级时间戳
     * @param integer $RingTimestamp 振铃时间戳，UNIX 秒级时间戳
     * @param integer $AcceptTimestamp 接听时间戳，UNIX 秒级时间戳
     * @param integer $EndedTimestamp 结束时间戳，UNIX 秒级时间戳
     * @param integer $QueuedTimestamp 进入排队时间，Unix 秒级时间戳
     * @param string $StaffUserId 座席账号
     * @param integer $EndStatus 参考 DescribeTelCdr 接口 EndStatus 字段
     * @param integer $QueuedSkillGroupId 排队技能组 ID
     * @param string $QueuedSkillGroupName 排队技能组名称
     * @param string $RecordURL 录音链接，带鉴权和有效期，获取之后请在短时间内拉取，不要持久化此链接
     * @param string $CustomRecordURL 录音转存第三方 COS 链接
     * @param string $AsrURL 录音文本信息链接，带鉴权和有效期，获取之后请在短时间内拉取，不要持久化此链接
     * @param array $VoicemailRecordURL 语音留言录音链接
     * @param array $VoicemailAsrURL 语音留言录音文本信息链接，需在控制台购买离线语音识别套餐包并开启离线语音识别开关
     * @param array $IVRKeyPressed IVR 按键信息
     * @param array $PostIVRKeyPressed 满意度按键信息
     * @param string $HungUpSide 挂机方 seat 座席 user 用户 system 系统
     * @param string $UUI 客户自定义数据（User-to-User Interface）
     * @param array $Events 通话中的事件列表
     * @param array $ServeParticipants 服务参与者列表
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
