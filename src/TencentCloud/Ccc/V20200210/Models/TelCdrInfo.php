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
 * 电话话单信息
 *
 * @method string getCaller() 获取<p>主叫号码</p>
 * @method void setCaller(string $Caller) 设置<p>主叫号码</p>
 * @method string getCallee() 获取<p>被叫号码</p>
 * @method void setCallee(string $Callee) 设置<p>被叫号码</p>
 * @method integer getTime() 获取<p>呼叫发起时间戳，Unix 时间戳</p>
 * @method void setTime(integer $Time) 设置<p>呼叫发起时间戳，Unix 时间戳</p>
 * @method integer getDirection() 获取<p>呼入呼出方向 0 呼入 1 呼出</p>
 * @method void setDirection(integer $Direction) 设置<p>呼入呼出方向 0 呼入 1 呼出</p>
 * @method integer getCallType() 获取<p>通话类型 1 呼出 2 呼入 3 音频呼入 5 预测式外呼 6 内线呼叫</p>
 * @method void setCallType(integer $CallType) 设置<p>通话类型 1 呼出 2 呼入 3 音频呼入 5 预测式外呼 6 内线呼叫</p>
 * @method integer getDuration() 获取<p>通话时长</p>
 * @method void setDuration(integer $Duration) 设置<p>通话时长</p>
 * @method string getRecordURL() 获取<p>录音信息</p>
 * @method void setRecordURL(string $RecordURL) 设置<p>录音信息</p>
 * @method string getRecordId() 获取<p>录音 ID</p>
 * @method void setRecordId(string $RecordId) 设置<p>录音 ID</p>
 * @method SeatUserInfo getSeatUser() 获取<p>座席信息</p>
 * @method void setSeatUser(SeatUserInfo $SeatUser) 设置<p>座席信息</p>
 * @method integer getEndStatus() 获取<p>EndStatus与EndStatusString一一对应，具体枚举如下：</p><p><strong>场景             EndStatus    EndStatusString    状态说明</strong></p><p>电话呼入&amp;呼出    1            ok                            <strong>正常通话</strong></p><p>电话呼入                 102            ivrGiveUp            <strong>IVR期间用户放弃</strong></p><p>电话呼入                 103            waitingGiveUp           <strong>排队时用户放弃</strong></p><p>电话呼入                 104            ringingGiveUp           <strong>振铃时用户放弃</strong></p><p>电话呼入                 105            noSeatOnline           <strong>无座席在线</strong></p><p>电话呼入              106           notWorkTime           <strong>非工作时间</strong>   </p><p>电话呼入                107           ivrEnd                   <strong>IVR全自动结束(无人工介入)</strong></p><p>电话呼入                100          blackList <strong>黑名单(系统侧)</strong></p><p>电话呼出             108            restrictedCallee    <strong>全局外呼风险号码拦截(系统侧)</strong></p><p>电话呼出             109            tooManyRequest        <strong>外呼频控拦截(系统侧)</strong></p><p>电话呼出             110            restrictedArea        <strong>外呼地域拦截(系统侧)</strong></p><p>电话呼出             111            restrictedTime    <strong>外呼时段拦截(系统侧)</strong></p><p>电话呼出             202            notAnswer     <strong>被叫未接听</strong></p><p>电话呼出            203        userReject    <strong>被叫拒接挂断</strong></p><p>电话呼出              204        powerOff    <strong>被叫关机</strong></p><p>电话呼出           205            numberNotExist    <strong>被叫空号</strong></p><p>电话呼出             206               busy    <strong>被叫忙</strong></p><p>电话呼出               207               outOfCredit    <strong>被叫欠费</strong></p><p>电话呼出             208               operatorError    <strong>运营商线路异常</strong></p><p>电话呼出             209               callerCancel    <strong>主叫取消</strong></p><p>电话呼出            210               notInService    <strong>被叫不在服务区</strong></p><p>电话呼入&amp;呼出    211    clientError    <strong>座席客户端错误</strong></p><p>电话呼出        212     carrierBlocked      <strong>运营商拦截</strong></p><p>电话呼出        213     callReminder      <strong>提示来电提醒</strong></p><p>电话呼出        215     numberInvalid      <strong>被叫号码无效</strong></p><p>电话呼出        216     callRestricted      <strong>提示呼叫受限</strong></p><p>电话呼出        217     calleeRestricted      <strong>被叫黑名单受限</strong></p><p>电话呼出        218     areaRestricted      <strong>被叫区域受限</strong></p><p>电话呼出        219     promptCallForwarding      <strong>提示呼叫转移</strong></p><p>电话呼出        220     callerCancelWhileRing      <strong>振铃中主叫取消</strong></p><p>电话呼出        221     callerCancelWithoutRing      <strong>未振铃被叫号码异常</strong></p><p>电话呼出        222     voiceMailReached      <strong>语音信箱挂断</strong></p><p>音频呼入        501     callConflict      <strong>VoIP用户呼叫冲突终止</strong></p><p>音频呼入        502     clientTimeout      <strong>VoIP用户客户端超时</strong></p><p>音频呼入        503     voipClientError      <strong>VoIP用户客户端错误</strong></p><p>中文详情<a href="https://www.tencentcloud.com/zh/document/product/1229/71847">参考</a></p><p>英文详情<a href="https://www.tencentcloud.com/document/product/1229/71847?lang=en">参考</a></p>
 * @method void setEndStatus(integer $EndStatus) 设置<p>EndStatus与EndStatusString一一对应，具体枚举如下：</p><p><strong>场景             EndStatus    EndStatusString    状态说明</strong></p><p>电话呼入&amp;呼出    1            ok                            <strong>正常通话</strong></p><p>电话呼入                 102            ivrGiveUp            <strong>IVR期间用户放弃</strong></p><p>电话呼入                 103            waitingGiveUp           <strong>排队时用户放弃</strong></p><p>电话呼入                 104            ringingGiveUp           <strong>振铃时用户放弃</strong></p><p>电话呼入                 105            noSeatOnline           <strong>无座席在线</strong></p><p>电话呼入              106           notWorkTime           <strong>非工作时间</strong>   </p><p>电话呼入                107           ivrEnd                   <strong>IVR全自动结束(无人工介入)</strong></p><p>电话呼入                100          blackList <strong>黑名单(系统侧)</strong></p><p>电话呼出             108            restrictedCallee    <strong>全局外呼风险号码拦截(系统侧)</strong></p><p>电话呼出             109            tooManyRequest        <strong>外呼频控拦截(系统侧)</strong></p><p>电话呼出             110            restrictedArea        <strong>外呼地域拦截(系统侧)</strong></p><p>电话呼出             111            restrictedTime    <strong>外呼时段拦截(系统侧)</strong></p><p>电话呼出             202            notAnswer     <strong>被叫未接听</strong></p><p>电话呼出            203        userReject    <strong>被叫拒接挂断</strong></p><p>电话呼出              204        powerOff    <strong>被叫关机</strong></p><p>电话呼出           205            numberNotExist    <strong>被叫空号</strong></p><p>电话呼出             206               busy    <strong>被叫忙</strong></p><p>电话呼出               207               outOfCredit    <strong>被叫欠费</strong></p><p>电话呼出             208               operatorError    <strong>运营商线路异常</strong></p><p>电话呼出             209               callerCancel    <strong>主叫取消</strong></p><p>电话呼出            210               notInService    <strong>被叫不在服务区</strong></p><p>电话呼入&amp;呼出    211    clientError    <strong>座席客户端错误</strong></p><p>电话呼出        212     carrierBlocked      <strong>运营商拦截</strong></p><p>电话呼出        213     callReminder      <strong>提示来电提醒</strong></p><p>电话呼出        215     numberInvalid      <strong>被叫号码无效</strong></p><p>电话呼出        216     callRestricted      <strong>提示呼叫受限</strong></p><p>电话呼出        217     calleeRestricted      <strong>被叫黑名单受限</strong></p><p>电话呼出        218     areaRestricted      <strong>被叫区域受限</strong></p><p>电话呼出        219     promptCallForwarding      <strong>提示呼叫转移</strong></p><p>电话呼出        220     callerCancelWhileRing      <strong>振铃中主叫取消</strong></p><p>电话呼出        221     callerCancelWithoutRing      <strong>未振铃被叫号码异常</strong></p><p>电话呼出        222     voiceMailReached      <strong>语音信箱挂断</strong></p><p>音频呼入        501     callConflict      <strong>VoIP用户呼叫冲突终止</strong></p><p>音频呼入        502     clientTimeout      <strong>VoIP用户客户端超时</strong></p><p>音频呼入        503     voipClientError      <strong>VoIP用户客户端错误</strong></p><p>中文详情<a href="https://www.tencentcloud.com/zh/document/product/1229/71847">参考</a></p><p>英文详情<a href="https://www.tencentcloud.com/document/product/1229/71847?lang=en">参考</a></p>
 * @method string getSkillGroup() 获取<p>技能组名称</p>
 * @method void setSkillGroup(string $SkillGroup) 设置<p>技能组名称</p>
 * @method string getCallerLocation() 获取<p>主叫归属地</p>
 * @method void setCallerLocation(string $CallerLocation) 设置<p>主叫归属地</p>
 * @method integer getIVRDuration() 获取<p>IVR 阶段耗时</p>
 * @method void setIVRDuration(integer $IVRDuration) 设置<p>IVR 阶段耗时</p>
 * @method integer getRingTimestamp() 获取<p>振铃时间戳，UNIX 秒级时间戳</p>
 * @method void setRingTimestamp(integer $RingTimestamp) 设置<p>振铃时间戳，UNIX 秒级时间戳</p>
 * @method integer getAcceptTimestamp() 获取<p>接听时间戳，UNIX 秒级时间戳</p>
 * @method void setAcceptTimestamp(integer $AcceptTimestamp) 设置<p>接听时间戳，UNIX 秒级时间戳</p>
 * @method integer getEndedTimestamp() 获取<p>结束时间戳，UNIX 秒级时间戳</p>
 * @method void setEndedTimestamp(integer $EndedTimestamp) 设置<p>结束时间戳，UNIX 秒级时间戳</p>
 * @method array getIVRKeyPressed() 获取<p>IVR 按键信息 ，e.g. [&quot;1&quot;,&quot;2&quot;,&quot;3&quot;]</p>
 * @method void setIVRKeyPressed(array $IVRKeyPressed) 设置<p>IVR 按键信息 ，e.g. [&quot;1&quot;,&quot;2&quot;,&quot;3&quot;]</p>
 * @method array getIVRKeyPressedEx() 获取<p>IVR按键信息（e.g.xa0[{&quot;Key&quot;:&quot;1&quot;,&quot;Label&quot;:&quot;非常满意&quot;}]）</p>
 * @method void setIVRKeyPressedEx(array $IVRKeyPressedEx) 设置<p>IVR按键信息（e.g.xa0[{&quot;Key&quot;:&quot;1&quot;,&quot;Label&quot;:&quot;非常满意&quot;}]）</p>
 * @method string getHungUpSide() 获取<p>挂机方 seat 座席 user 用户 system 系统</p>
 * @method void setHungUpSide(string $HungUpSide) 设置<p>挂机方 seat 座席 user 用户 system 系统</p>
 * @method array getServeParticipants() 获取<p>服务参与者列表</p>
 * @method void setServeParticipants(array $ServeParticipants) 设置<p>服务参与者列表</p>
 * @method integer getSkillGroupId() 获取<p>技能组ID</p>
 * @method void setSkillGroupId(integer $SkillGroupId) 设置<p>技能组ID</p>
 * @method string getEndStatusString() 获取<p>参考 EndStatus 字段</p>
 * @method void setEndStatusString(string $EndStatusString) 设置<p>参考 EndStatus 字段</p>
 * @method integer getStartTimestamp() 获取<p>会话开始时间戳，UNIX 秒级时间戳</p>
 * @method void setStartTimestamp(integer $StartTimestamp) 设置<p>会话开始时间戳，UNIX 秒级时间戳</p>
 * @method integer getQueuedTimestamp() 获取<p>进入排队时间，Unix 秒级时间戳</p>
 * @method void setQueuedTimestamp(integer $QueuedTimestamp) 设置<p>进入排队时间，Unix 秒级时间戳</p>
 * @method array getPostIVRKeyPressed() 获取<p>后置IVR按键信息（e.g.xa0[{&quot;Key&quot;:&quot;1&quot;,&quot;Label&quot;:&quot;非常满意&quot;}]）</p>
 * @method void setPostIVRKeyPressed(array $PostIVRKeyPressed) 设置<p>后置IVR按键信息（e.g.xa0[{&quot;Key&quot;:&quot;1&quot;,&quot;Label&quot;:&quot;非常满意&quot;}]）</p>
 * @method array getPostIVRKeyPressedEx() 获取<p>满意度按键信息 Key 为 noInput 表示进入满意度但无按键</p>
 * @method void setPostIVRKeyPressedEx(array $PostIVRKeyPressedEx) 设置<p>满意度按键信息 Key 为 noInput 表示进入满意度但无按键</p>
 * @method integer getQueuedSkillGroupId() 获取<p>排队技能组Id</p>
 * @method void setQueuedSkillGroupId(integer $QueuedSkillGroupId) 设置<p>排队技能组Id</p>
 * @method string getSessionId() 获取<p>会话 ID</p>
 * @method void setSessionId(string $SessionId) 设置<p>会话 ID</p>
 * @method string getProtectedCaller() 获取<p>主叫号码保护ID，开启号码保护映射功能时有效，且Caller字段置空</p>
 * @method void setProtectedCaller(string $ProtectedCaller) 设置<p>主叫号码保护ID，开启号码保护映射功能时有效，且Caller字段置空</p>
 * @method string getProtectedCallee() 获取<p>被叫号码保护ID，开启号码保护映射功能时有效，且Callee字段置空</p>
 * @method void setProtectedCallee(string $ProtectedCallee) 设置<p>被叫号码保护ID，开启号码保护映射功能时有效，且Callee字段置空</p>
 * @method string getUui() 获取<p>客户自定义数据（User-to-User Interface）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUui(string $Uui) 设置<p>客户自定义数据（User-to-User Interface）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUUI() 获取<p>客户自定义数据（User-to-User Interface）</p>
 * @method void setUUI(string $UUI) 设置<p>客户自定义数据（User-to-User Interface）</p>
 * @method string getAsrUrl() 获取<p>获取录音ASR文本信息地址</p>
 * @method void setAsrUrl(string $AsrUrl) 设置<p>获取录音ASR文本信息地址</p>
 * @method string getAsrStatus() 获取<p>AsrUrl的状态：Complete<br>已完成;<br>Processing<br>正在生成中;<br>NotExists<br>无记录(未开启生成离线asr或者无套餐包)</p>
 * @method void setAsrStatus(string $AsrStatus) 设置<p>AsrUrl的状态：Complete<br>已完成;<br>Processing<br>正在生成中;<br>NotExists<br>无记录(未开启生成离线asr或者无套餐包)</p>
 * @method string getCustomRecordURL() 获取<p>录音转存第三方COS地址</p>
 * @method void setCustomRecordURL(string $CustomRecordURL) 设置<p>录音转存第三方COS地址</p>
 * @method string getRemark() 获取<p>备注</p>
 * @method void setRemark(string $Remark) 设置<p>备注</p>
 * @method string getQueuedSkillGroupName() 获取<p>排队技能组名称</p>
 * @method void setQueuedSkillGroupName(string $QueuedSkillGroupName) 设置<p>排队技能组名称</p>
 * @method array getVoicemailRecordURL() 获取<p>通话中语音留言录音URL</p>
 * @method void setVoicemailRecordURL(array $VoicemailRecordURL) 设置<p>通话中语音留言录音URL</p>
 * @method array getVoicemailAsrURL() 获取<p>通话中语音留言ASR文本信息地址</p>
 * @method void setVoicemailAsrURL(array $VoicemailAsrURL) 设置<p>通话中语音留言ASR文本信息地址</p>
 * @method integer getAIAgentId() 获取<p>如果是智能体相关通话，这里是智能体 ID</p>
 * @method void setAIAgentId(integer $AIAgentId) 设置<p>如果是智能体相关通话，这里是智能体 ID</p>
 * @method string getAIAgentName() 获取<p>如果是智能体相关通话，这里是智能体名称</p>
 * @method void setAIAgentName(string $AIAgentName) 设置<p>如果是智能体相关通话，这里是智能体名称</p>
 * @method integer getSysHangupReason() 获取<p>接通后系统挂断原因，枚举类似</p>
 * @method void setSysHangupReason(integer $SysHangupReason) 设置<p>接通后系统挂断原因，枚举类似</p>
 * @method string getSysHangupReasonString() 获取<p>接通后系统挂断原因，文字描述信息</p>
 * @method void setSysHangupReasonString(string $SysHangupReasonString) 设置<p>接通后系统挂断原因，文字描述信息</p>
 */
class TelCdrInfo extends AbstractModel
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
     * @var integer <p>呼叫发起时间戳，Unix 时间戳</p>
     */
    public $Time;

    /**
     * @var integer <p>呼入呼出方向 0 呼入 1 呼出</p>
     */
    public $Direction;

    /**
     * @var integer <p>通话类型 1 呼出 2 呼入 3 音频呼入 5 预测式外呼 6 内线呼叫</p>
     */
    public $CallType;

    /**
     * @var integer <p>通话时长</p>
     */
    public $Duration;

    /**
     * @var string <p>录音信息</p>
     */
    public $RecordURL;

    /**
     * @var string <p>录音 ID</p>
     */
    public $RecordId;

    /**
     * @var SeatUserInfo <p>座席信息</p>
     */
    public $SeatUser;

    /**
     * @var integer <p>EndStatus与EndStatusString一一对应，具体枚举如下：</p><p><strong>场景             EndStatus    EndStatusString    状态说明</strong></p><p>电话呼入&amp;呼出    1            ok                            <strong>正常通话</strong></p><p>电话呼入                 102            ivrGiveUp            <strong>IVR期间用户放弃</strong></p><p>电话呼入                 103            waitingGiveUp           <strong>排队时用户放弃</strong></p><p>电话呼入                 104            ringingGiveUp           <strong>振铃时用户放弃</strong></p><p>电话呼入                 105            noSeatOnline           <strong>无座席在线</strong></p><p>电话呼入              106           notWorkTime           <strong>非工作时间</strong>   </p><p>电话呼入                107           ivrEnd                   <strong>IVR全自动结束(无人工介入)</strong></p><p>电话呼入                100          blackList <strong>黑名单(系统侧)</strong></p><p>电话呼出             108            restrictedCallee    <strong>全局外呼风险号码拦截(系统侧)</strong></p><p>电话呼出             109            tooManyRequest        <strong>外呼频控拦截(系统侧)</strong></p><p>电话呼出             110            restrictedArea        <strong>外呼地域拦截(系统侧)</strong></p><p>电话呼出             111            restrictedTime    <strong>外呼时段拦截(系统侧)</strong></p><p>电话呼出             202            notAnswer     <strong>被叫未接听</strong></p><p>电话呼出            203        userReject    <strong>被叫拒接挂断</strong></p><p>电话呼出              204        powerOff    <strong>被叫关机</strong></p><p>电话呼出           205            numberNotExist    <strong>被叫空号</strong></p><p>电话呼出             206               busy    <strong>被叫忙</strong></p><p>电话呼出               207               outOfCredit    <strong>被叫欠费</strong></p><p>电话呼出             208               operatorError    <strong>运营商线路异常</strong></p><p>电话呼出             209               callerCancel    <strong>主叫取消</strong></p><p>电话呼出            210               notInService    <strong>被叫不在服务区</strong></p><p>电话呼入&amp;呼出    211    clientError    <strong>座席客户端错误</strong></p><p>电话呼出        212     carrierBlocked      <strong>运营商拦截</strong></p><p>电话呼出        213     callReminder      <strong>提示来电提醒</strong></p><p>电话呼出        215     numberInvalid      <strong>被叫号码无效</strong></p><p>电话呼出        216     callRestricted      <strong>提示呼叫受限</strong></p><p>电话呼出        217     calleeRestricted      <strong>被叫黑名单受限</strong></p><p>电话呼出        218     areaRestricted      <strong>被叫区域受限</strong></p><p>电话呼出        219     promptCallForwarding      <strong>提示呼叫转移</strong></p><p>电话呼出        220     callerCancelWhileRing      <strong>振铃中主叫取消</strong></p><p>电话呼出        221     callerCancelWithoutRing      <strong>未振铃被叫号码异常</strong></p><p>电话呼出        222     voiceMailReached      <strong>语音信箱挂断</strong></p><p>音频呼入        501     callConflict      <strong>VoIP用户呼叫冲突终止</strong></p><p>音频呼入        502     clientTimeout      <strong>VoIP用户客户端超时</strong></p><p>音频呼入        503     voipClientError      <strong>VoIP用户客户端错误</strong></p><p>中文详情<a href="https://www.tencentcloud.com/zh/document/product/1229/71847">参考</a></p><p>英文详情<a href="https://www.tencentcloud.com/document/product/1229/71847?lang=en">参考</a></p>
     */
    public $EndStatus;

    /**
     * @var string <p>技能组名称</p>
     */
    public $SkillGroup;

    /**
     * @var string <p>主叫归属地</p>
     */
    public $CallerLocation;

    /**
     * @var integer <p>IVR 阶段耗时</p>
     */
    public $IVRDuration;

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
     * @var array <p>IVR 按键信息 ，e.g. [&quot;1&quot;,&quot;2&quot;,&quot;3&quot;]</p>
     * @deprecated
     */
    public $IVRKeyPressed;

    /**
     * @var array <p>IVR按键信息（e.g.xa0[{&quot;Key&quot;:&quot;1&quot;,&quot;Label&quot;:&quot;非常满意&quot;}]）</p>
     */
    public $IVRKeyPressedEx;

    /**
     * @var string <p>挂机方 seat 座席 user 用户 system 系统</p>
     */
    public $HungUpSide;

    /**
     * @var array <p>服务参与者列表</p>
     */
    public $ServeParticipants;

    /**
     * @var integer <p>技能组ID</p>
     */
    public $SkillGroupId;

    /**
     * @var string <p>参考 EndStatus 字段</p>
     */
    public $EndStatusString;

    /**
     * @var integer <p>会话开始时间戳，UNIX 秒级时间戳</p>
     */
    public $StartTimestamp;

    /**
     * @var integer <p>进入排队时间，Unix 秒级时间戳</p>
     */
    public $QueuedTimestamp;

    /**
     * @var array <p>后置IVR按键信息（e.g.xa0[{&quot;Key&quot;:&quot;1&quot;,&quot;Label&quot;:&quot;非常满意&quot;}]）</p>
     * @deprecated
     */
    public $PostIVRKeyPressed;

    /**
     * @var array <p>满意度按键信息 Key 为 noInput 表示进入满意度但无按键</p>
     */
    public $PostIVRKeyPressedEx;

    /**
     * @var integer <p>排队技能组Id</p>
     */
    public $QueuedSkillGroupId;

    /**
     * @var string <p>会话 ID</p>
     */
    public $SessionId;

    /**
     * @var string <p>主叫号码保护ID，开启号码保护映射功能时有效，且Caller字段置空</p>
     */
    public $ProtectedCaller;

    /**
     * @var string <p>被叫号码保护ID，开启号码保护映射功能时有效，且Callee字段置空</p>
     */
    public $ProtectedCallee;

    /**
     * @var string <p>客户自定义数据（User-to-User Interface）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $Uui;

    /**
     * @var string <p>客户自定义数据（User-to-User Interface）</p>
     */
    public $UUI;

    /**
     * @var string <p>获取录音ASR文本信息地址</p>
     */
    public $AsrUrl;

    /**
     * @var string <p>AsrUrl的状态：Complete<br>已完成;<br>Processing<br>正在生成中;<br>NotExists<br>无记录(未开启生成离线asr或者无套餐包)</p>
     */
    public $AsrStatus;

    /**
     * @var string <p>录音转存第三方COS地址</p>
     */
    public $CustomRecordURL;

    /**
     * @var string <p>备注</p>
     */
    public $Remark;

    /**
     * @var string <p>排队技能组名称</p>
     */
    public $QueuedSkillGroupName;

    /**
     * @var array <p>通话中语音留言录音URL</p>
     */
    public $VoicemailRecordURL;

    /**
     * @var array <p>通话中语音留言ASR文本信息地址</p>
     */
    public $VoicemailAsrURL;

    /**
     * @var integer <p>如果是智能体相关通话，这里是智能体 ID</p>
     */
    public $AIAgentId;

    /**
     * @var string <p>如果是智能体相关通话，这里是智能体名称</p>
     */
    public $AIAgentName;

    /**
     * @var integer <p>接通后系统挂断原因，枚举类似</p>
     */
    public $SysHangupReason;

    /**
     * @var string <p>接通后系统挂断原因，文字描述信息</p>
     */
    public $SysHangupReasonString;

    /**
     * @param string $Caller <p>主叫号码</p>
     * @param string $Callee <p>被叫号码</p>
     * @param integer $Time <p>呼叫发起时间戳，Unix 时间戳</p>
     * @param integer $Direction <p>呼入呼出方向 0 呼入 1 呼出</p>
     * @param integer $CallType <p>通话类型 1 呼出 2 呼入 3 音频呼入 5 预测式外呼 6 内线呼叫</p>
     * @param integer $Duration <p>通话时长</p>
     * @param string $RecordURL <p>录音信息</p>
     * @param string $RecordId <p>录音 ID</p>
     * @param SeatUserInfo $SeatUser <p>座席信息</p>
     * @param integer $EndStatus <p>EndStatus与EndStatusString一一对应，具体枚举如下：</p><p><strong>场景             EndStatus    EndStatusString    状态说明</strong></p><p>电话呼入&amp;呼出    1            ok                            <strong>正常通话</strong></p><p>电话呼入                 102            ivrGiveUp            <strong>IVR期间用户放弃</strong></p><p>电话呼入                 103            waitingGiveUp           <strong>排队时用户放弃</strong></p><p>电话呼入                 104            ringingGiveUp           <strong>振铃时用户放弃</strong></p><p>电话呼入                 105            noSeatOnline           <strong>无座席在线</strong></p><p>电话呼入              106           notWorkTime           <strong>非工作时间</strong>   </p><p>电话呼入                107           ivrEnd                   <strong>IVR全自动结束(无人工介入)</strong></p><p>电话呼入                100          blackList <strong>黑名单(系统侧)</strong></p><p>电话呼出             108            restrictedCallee    <strong>全局外呼风险号码拦截(系统侧)</strong></p><p>电话呼出             109            tooManyRequest        <strong>外呼频控拦截(系统侧)</strong></p><p>电话呼出             110            restrictedArea        <strong>外呼地域拦截(系统侧)</strong></p><p>电话呼出             111            restrictedTime    <strong>外呼时段拦截(系统侧)</strong></p><p>电话呼出             202            notAnswer     <strong>被叫未接听</strong></p><p>电话呼出            203        userReject    <strong>被叫拒接挂断</strong></p><p>电话呼出              204        powerOff    <strong>被叫关机</strong></p><p>电话呼出           205            numberNotExist    <strong>被叫空号</strong></p><p>电话呼出             206               busy    <strong>被叫忙</strong></p><p>电话呼出               207               outOfCredit    <strong>被叫欠费</strong></p><p>电话呼出             208               operatorError    <strong>运营商线路异常</strong></p><p>电话呼出             209               callerCancel    <strong>主叫取消</strong></p><p>电话呼出            210               notInService    <strong>被叫不在服务区</strong></p><p>电话呼入&amp;呼出    211    clientError    <strong>座席客户端错误</strong></p><p>电话呼出        212     carrierBlocked      <strong>运营商拦截</strong></p><p>电话呼出        213     callReminder      <strong>提示来电提醒</strong></p><p>电话呼出        215     numberInvalid      <strong>被叫号码无效</strong></p><p>电话呼出        216     callRestricted      <strong>提示呼叫受限</strong></p><p>电话呼出        217     calleeRestricted      <strong>被叫黑名单受限</strong></p><p>电话呼出        218     areaRestricted      <strong>被叫区域受限</strong></p><p>电话呼出        219     promptCallForwarding      <strong>提示呼叫转移</strong></p><p>电话呼出        220     callerCancelWhileRing      <strong>振铃中主叫取消</strong></p><p>电话呼出        221     callerCancelWithoutRing      <strong>未振铃被叫号码异常</strong></p><p>电话呼出        222     voiceMailReached      <strong>语音信箱挂断</strong></p><p>音频呼入        501     callConflict      <strong>VoIP用户呼叫冲突终止</strong></p><p>音频呼入        502     clientTimeout      <strong>VoIP用户客户端超时</strong></p><p>音频呼入        503     voipClientError      <strong>VoIP用户客户端错误</strong></p><p>中文详情<a href="https://www.tencentcloud.com/zh/document/product/1229/71847">参考</a></p><p>英文详情<a href="https://www.tencentcloud.com/document/product/1229/71847?lang=en">参考</a></p>
     * @param string $SkillGroup <p>技能组名称</p>
     * @param string $CallerLocation <p>主叫归属地</p>
     * @param integer $IVRDuration <p>IVR 阶段耗时</p>
     * @param integer $RingTimestamp <p>振铃时间戳，UNIX 秒级时间戳</p>
     * @param integer $AcceptTimestamp <p>接听时间戳，UNIX 秒级时间戳</p>
     * @param integer $EndedTimestamp <p>结束时间戳，UNIX 秒级时间戳</p>
     * @param array $IVRKeyPressed <p>IVR 按键信息 ，e.g. [&quot;1&quot;,&quot;2&quot;,&quot;3&quot;]</p>
     * @param array $IVRKeyPressedEx <p>IVR按键信息（e.g.xa0[{&quot;Key&quot;:&quot;1&quot;,&quot;Label&quot;:&quot;非常满意&quot;}]）</p>
     * @param string $HungUpSide <p>挂机方 seat 座席 user 用户 system 系统</p>
     * @param array $ServeParticipants <p>服务参与者列表</p>
     * @param integer $SkillGroupId <p>技能组ID</p>
     * @param string $EndStatusString <p>参考 EndStatus 字段</p>
     * @param integer $StartTimestamp <p>会话开始时间戳，UNIX 秒级时间戳</p>
     * @param integer $QueuedTimestamp <p>进入排队时间，Unix 秒级时间戳</p>
     * @param array $PostIVRKeyPressed <p>后置IVR按键信息（e.g.xa0[{&quot;Key&quot;:&quot;1&quot;,&quot;Label&quot;:&quot;非常满意&quot;}]）</p>
     * @param array $PostIVRKeyPressedEx <p>满意度按键信息 Key 为 noInput 表示进入满意度但无按键</p>
     * @param integer $QueuedSkillGroupId <p>排队技能组Id</p>
     * @param string $SessionId <p>会话 ID</p>
     * @param string $ProtectedCaller <p>主叫号码保护ID，开启号码保护映射功能时有效，且Caller字段置空</p>
     * @param string $ProtectedCallee <p>被叫号码保护ID，开启号码保护映射功能时有效，且Callee字段置空</p>
     * @param string $Uui <p>客户自定义数据（User-to-User Interface）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UUI <p>客户自定义数据（User-to-User Interface）</p>
     * @param string $AsrUrl <p>获取录音ASR文本信息地址</p>
     * @param string $AsrStatus <p>AsrUrl的状态：Complete<br>已完成;<br>Processing<br>正在生成中;<br>NotExists<br>无记录(未开启生成离线asr或者无套餐包)</p>
     * @param string $CustomRecordURL <p>录音转存第三方COS地址</p>
     * @param string $Remark <p>备注</p>
     * @param string $QueuedSkillGroupName <p>排队技能组名称</p>
     * @param array $VoicemailRecordURL <p>通话中语音留言录音URL</p>
     * @param array $VoicemailAsrURL <p>通话中语音留言ASR文本信息地址</p>
     * @param integer $AIAgentId <p>如果是智能体相关通话，这里是智能体 ID</p>
     * @param string $AIAgentName <p>如果是智能体相关通话，这里是智能体名称</p>
     * @param integer $SysHangupReason <p>接通后系统挂断原因，枚举类似</p>
     * @param string $SysHangupReasonString <p>接通后系统挂断原因，文字描述信息</p>
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

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("CallType",$param) and $param["CallType"] !== null) {
            $this->CallType = $param["CallType"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("RecordURL",$param) and $param["RecordURL"] !== null) {
            $this->RecordURL = $param["RecordURL"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("SeatUser",$param) and $param["SeatUser"] !== null) {
            $this->SeatUser = new SeatUserInfo();
            $this->SeatUser->deserialize($param["SeatUser"]);
        }

        if (array_key_exists("EndStatus",$param) and $param["EndStatus"] !== null) {
            $this->EndStatus = $param["EndStatus"];
        }

        if (array_key_exists("SkillGroup",$param) and $param["SkillGroup"] !== null) {
            $this->SkillGroup = $param["SkillGroup"];
        }

        if (array_key_exists("CallerLocation",$param) and $param["CallerLocation"] !== null) {
            $this->CallerLocation = $param["CallerLocation"];
        }

        if (array_key_exists("IVRDuration",$param) and $param["IVRDuration"] !== null) {
            $this->IVRDuration = $param["IVRDuration"];
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

        if (array_key_exists("IVRKeyPressed",$param) and $param["IVRKeyPressed"] !== null) {
            $this->IVRKeyPressed = $param["IVRKeyPressed"];
        }

        if (array_key_exists("IVRKeyPressedEx",$param) and $param["IVRKeyPressedEx"] !== null) {
            $this->IVRKeyPressedEx = [];
            foreach ($param["IVRKeyPressedEx"] as $key => $value){
                $obj = new IVRKeyPressedElement();
                $obj->deserialize($value);
                array_push($this->IVRKeyPressedEx, $obj);
            }
        }

        if (array_key_exists("HungUpSide",$param) and $param["HungUpSide"] !== null) {
            $this->HungUpSide = $param["HungUpSide"];
        }

        if (array_key_exists("ServeParticipants",$param) and $param["ServeParticipants"] !== null) {
            $this->ServeParticipants = [];
            foreach ($param["ServeParticipants"] as $key => $value){
                $obj = new ServeParticipant();
                $obj->deserialize($value);
                array_push($this->ServeParticipants, $obj);
            }
        }

        if (array_key_exists("SkillGroupId",$param) and $param["SkillGroupId"] !== null) {
            $this->SkillGroupId = $param["SkillGroupId"];
        }

        if (array_key_exists("EndStatusString",$param) and $param["EndStatusString"] !== null) {
            $this->EndStatusString = $param["EndStatusString"];
        }

        if (array_key_exists("StartTimestamp",$param) and $param["StartTimestamp"] !== null) {
            $this->StartTimestamp = $param["StartTimestamp"];
        }

        if (array_key_exists("QueuedTimestamp",$param) and $param["QueuedTimestamp"] !== null) {
            $this->QueuedTimestamp = $param["QueuedTimestamp"];
        }

        if (array_key_exists("PostIVRKeyPressed",$param) and $param["PostIVRKeyPressed"] !== null) {
            $this->PostIVRKeyPressed = [];
            foreach ($param["PostIVRKeyPressed"] as $key => $value){
                $obj = new IVRKeyPressedElement();
                $obj->deserialize($value);
                array_push($this->PostIVRKeyPressed, $obj);
            }
        }

        if (array_key_exists("PostIVRKeyPressedEx",$param) and $param["PostIVRKeyPressedEx"] !== null) {
            $this->PostIVRKeyPressedEx = [];
            foreach ($param["PostIVRKeyPressedEx"] as $key => $value){
                $obj = new IVRKeyPressedElement();
                $obj->deserialize($value);
                array_push($this->PostIVRKeyPressedEx, $obj);
            }
        }

        if (array_key_exists("QueuedSkillGroupId",$param) and $param["QueuedSkillGroupId"] !== null) {
            $this->QueuedSkillGroupId = $param["QueuedSkillGroupId"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("ProtectedCaller",$param) and $param["ProtectedCaller"] !== null) {
            $this->ProtectedCaller = $param["ProtectedCaller"];
        }

        if (array_key_exists("ProtectedCallee",$param) and $param["ProtectedCallee"] !== null) {
            $this->ProtectedCallee = $param["ProtectedCallee"];
        }

        if (array_key_exists("Uui",$param) and $param["Uui"] !== null) {
            $this->Uui = $param["Uui"];
        }

        if (array_key_exists("UUI",$param) and $param["UUI"] !== null) {
            $this->UUI = $param["UUI"];
        }

        if (array_key_exists("AsrUrl",$param) and $param["AsrUrl"] !== null) {
            $this->AsrUrl = $param["AsrUrl"];
        }

        if (array_key_exists("AsrStatus",$param) and $param["AsrStatus"] !== null) {
            $this->AsrStatus = $param["AsrStatus"];
        }

        if (array_key_exists("CustomRecordURL",$param) and $param["CustomRecordURL"] !== null) {
            $this->CustomRecordURL = $param["CustomRecordURL"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("QueuedSkillGroupName",$param) and $param["QueuedSkillGroupName"] !== null) {
            $this->QueuedSkillGroupName = $param["QueuedSkillGroupName"];
        }

        if (array_key_exists("VoicemailRecordURL",$param) and $param["VoicemailRecordURL"] !== null) {
            $this->VoicemailRecordURL = $param["VoicemailRecordURL"];
        }

        if (array_key_exists("VoicemailAsrURL",$param) and $param["VoicemailAsrURL"] !== null) {
            $this->VoicemailAsrURL = $param["VoicemailAsrURL"];
        }

        if (array_key_exists("AIAgentId",$param) and $param["AIAgentId"] !== null) {
            $this->AIAgentId = $param["AIAgentId"];
        }

        if (array_key_exists("AIAgentName",$param) and $param["AIAgentName"] !== null) {
            $this->AIAgentName = $param["AIAgentName"];
        }

        if (array_key_exists("SysHangupReason",$param) and $param["SysHangupReason"] !== null) {
            $this->SysHangupReason = $param["SysHangupReason"];
        }

        if (array_key_exists("SysHangupReasonString",$param) and $param["SysHangupReasonString"] !== null) {
            $this->SysHangupReasonString = $param["SysHangupReasonString"];
        }
    }
}
