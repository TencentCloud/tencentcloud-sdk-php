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
 * @method string getCaller() 获取主叫号码
 * @method void setCaller(string $Caller) 设置主叫号码
 * @method string getCallee() 获取被叫号码
 * @method void setCallee(string $Callee) 设置被叫号码
 * @method integer getTime() 获取呼叫发起时间戳，Unix 时间戳
 * @method void setTime(integer $Time) 设置呼叫发起时间戳，Unix 时间戳
 * @method integer getDirection() 获取呼入呼出方向 0 呼入 1 呼出
 * @method void setDirection(integer $Direction) 设置呼入呼出方向 0 呼入 1 呼出
 * @method integer getCallType() 获取通话类型 1 呼出 2 呼入 3 音频呼入 5 预测式外呼 6 内线呼叫
 * @method void setCallType(integer $CallType) 设置通话类型 1 呼出 2 呼入 3 音频呼入 5 预测式外呼 6 内线呼叫
 * @method integer getDuration() 获取通话时长
 * @method void setDuration(integer $Duration) 设置通话时长
 * @method string getRecordURL() 获取录音信息
 * @method void setRecordURL(string $RecordURL) 设置录音信息
 * @method string getRecordId() 获取录音 ID
 * @method void setRecordId(string $RecordId) 设置录音 ID
 * @method SeatUserInfo getSeatUser() 获取座席信息
 * @method void setSeatUser(SeatUserInfo $SeatUser) 设置座席信息
 * @method integer getEndStatus() 获取EndStatus与EndStatusString一一对应，具体枚举如下：

**场景	         EndStatus	EndStatusString	状态说明**

电话呼入&呼出	1	        ok	                        **正常通话**

电话呼入	             102	        ivrGiveUp	        **IVR期间用户放弃**

电话呼入	             103	        waitingGiveUp	       **排队时用户放弃**

电话呼入	             104	        ringingGiveUp	       **振铃时用户放弃**

电话呼入	             105	        noSeatOnline	       **无座席在线**

电话呼入              106	       notWorkTime	       **非工作时间**   

电话呼入	            107	       ivrEnd	               **IVR全自动结束(无人工介入)**

电话呼入	            100	      blackList **黑名单(系统侧)**

电话呼出             108	        restrictedCallee	**全局外呼风险号码拦截(系统侧)**

电话呼出             109	        tooManyRequest	    **外呼频控拦截(系统侧)**

电话呼出             110	        restrictedArea	    **外呼地域拦截(系统侧)**

电话呼出             111	        restrictedTime	**外呼时段拦截(系统侧)**
                         
电话呼出             202            notAnswer	 **被叫未接听**

电话呼出            203	    userReject	**被叫拒接挂断**

电话呼出	          204	    powerOff	**被叫关机**

电话呼出           205            numberNotExist	**被叫空号**

电话呼出	         206	           busy	**被叫忙**

电话呼出   	        207	           outOfCredit	**被叫欠费**

电话呼出	         208	           operatorError	**运营商线路异常**

电话呼出         	209	           callerCancel	**主叫取消**

电话呼出	        210	           notInService	**被叫不在服务区**

电话呼入&呼出	211    clientError    **座席客户端错误**

电话呼出        212     carrierBlocked      **运营商拦截**

电话呼出        213     callReminder      **提示来电提醒**

电话呼出        215     numberInvalid      **被叫号码无效**

电话呼出        216     callRestricted      **提示呼叫受限**

电话呼出        217     calleeRestricted      **被叫黑名单受限**

电话呼出        218     areaRestricted      **被叫区域受限**

电话呼出        219     promptCallForwarding      **提示呼叫转移**

电话呼出        220     callerCancelWhileRing      **振铃中主叫取消**

电话呼出        221     callerCancelWithoutRing      **未振铃被叫号码异常**

电话呼出        222     voiceMailReached      **语音信箱挂断**

音频呼入        501     callConflict      **VoIP用户呼叫冲突终止**

音频呼入        502     clientTimeout      **VoIP用户客户端超时**

音频呼入        503     voipClientError      **VoIP用户客户端错误**

中文详情[参考](https://www.tencentcloud.com/zh/document/product/1229/71847)

英文详情[参考](https://www.tencentcloud.com/document/product/1229/71847?lang=en)
 * @method void setEndStatus(integer $EndStatus) 设置EndStatus与EndStatusString一一对应，具体枚举如下：

**场景	         EndStatus	EndStatusString	状态说明**

电话呼入&呼出	1	        ok	                        **正常通话**

电话呼入	             102	        ivrGiveUp	        **IVR期间用户放弃**

电话呼入	             103	        waitingGiveUp	       **排队时用户放弃**

电话呼入	             104	        ringingGiveUp	       **振铃时用户放弃**

电话呼入	             105	        noSeatOnline	       **无座席在线**

电话呼入              106	       notWorkTime	       **非工作时间**   

电话呼入	            107	       ivrEnd	               **IVR全自动结束(无人工介入)**

电话呼入	            100	      blackList **黑名单(系统侧)**

电话呼出             108	        restrictedCallee	**全局外呼风险号码拦截(系统侧)**

电话呼出             109	        tooManyRequest	    **外呼频控拦截(系统侧)**

电话呼出             110	        restrictedArea	    **外呼地域拦截(系统侧)**

电话呼出             111	        restrictedTime	**外呼时段拦截(系统侧)**
                         
电话呼出             202            notAnswer	 **被叫未接听**

电话呼出            203	    userReject	**被叫拒接挂断**

电话呼出	          204	    powerOff	**被叫关机**

电话呼出           205            numberNotExist	**被叫空号**

电话呼出	         206	           busy	**被叫忙**

电话呼出   	        207	           outOfCredit	**被叫欠费**

电话呼出	         208	           operatorError	**运营商线路异常**

电话呼出         	209	           callerCancel	**主叫取消**

电话呼出	        210	           notInService	**被叫不在服务区**

电话呼入&呼出	211    clientError    **座席客户端错误**

电话呼出        212     carrierBlocked      **运营商拦截**

电话呼出        213     callReminder      **提示来电提醒**

电话呼出        215     numberInvalid      **被叫号码无效**

电话呼出        216     callRestricted      **提示呼叫受限**

电话呼出        217     calleeRestricted      **被叫黑名单受限**

电话呼出        218     areaRestricted      **被叫区域受限**

电话呼出        219     promptCallForwarding      **提示呼叫转移**

电话呼出        220     callerCancelWhileRing      **振铃中主叫取消**

电话呼出        221     callerCancelWithoutRing      **未振铃被叫号码异常**

电话呼出        222     voiceMailReached      **语音信箱挂断**

音频呼入        501     callConflict      **VoIP用户呼叫冲突终止**

音频呼入        502     clientTimeout      **VoIP用户客户端超时**

音频呼入        503     voipClientError      **VoIP用户客户端错误**

中文详情[参考](https://www.tencentcloud.com/zh/document/product/1229/71847)

英文详情[参考](https://www.tencentcloud.com/document/product/1229/71847?lang=en)
 * @method string getSkillGroup() 获取技能组名称
 * @method void setSkillGroup(string $SkillGroup) 设置技能组名称
 * @method string getCallerLocation() 获取主叫归属地
 * @method void setCallerLocation(string $CallerLocation) 设置主叫归属地
 * @method integer getIVRDuration() 获取IVR 阶段耗时
 * @method void setIVRDuration(integer $IVRDuration) 设置IVR 阶段耗时
 * @method integer getRingTimestamp() 获取振铃时间戳，UNIX 秒级时间戳
 * @method void setRingTimestamp(integer $RingTimestamp) 设置振铃时间戳，UNIX 秒级时间戳
 * @method integer getAcceptTimestamp() 获取接听时间戳，UNIX 秒级时间戳
 * @method void setAcceptTimestamp(integer $AcceptTimestamp) 设置接听时间戳，UNIX 秒级时间戳
 * @method integer getEndedTimestamp() 获取结束时间戳，UNIX 秒级时间戳
 * @method void setEndedTimestamp(integer $EndedTimestamp) 设置结束时间戳，UNIX 秒级时间戳
 * @method array getIVRKeyPressed() 获取IVR 按键信息 ，e.g. ["1","2","3"]
 * @method void setIVRKeyPressed(array $IVRKeyPressed) 设置IVR 按键信息 ，e.g. ["1","2","3"]
 * @method string getHungUpSide() 获取挂机方 seat 座席 user 用户 system 系统
 * @method void setHungUpSide(string $HungUpSide) 设置挂机方 seat 座席 user 用户 system 系统
 * @method array getServeParticipants() 获取服务参与者列表
 * @method void setServeParticipants(array $ServeParticipants) 设置服务参与者列表
 * @method integer getSkillGroupId() 获取技能组ID
 * @method void setSkillGroupId(integer $SkillGroupId) 设置技能组ID
 * @method string getEndStatusString() 获取参考 EndStatus 字段
 * @method void setEndStatusString(string $EndStatusString) 设置参考 EndStatus 字段
 * @method integer getStartTimestamp() 获取会话开始时间戳，UNIX 秒级时间戳
 * @method void setStartTimestamp(integer $StartTimestamp) 设置会话开始时间戳，UNIX 秒级时间戳
 * @method integer getQueuedTimestamp() 获取进入排队时间，Unix 秒级时间戳
 * @method void setQueuedTimestamp(integer $QueuedTimestamp) 设置进入排队时间，Unix 秒级时间戳
 * @method array getPostIVRKeyPressed() 获取后置IVR按键信息（e.g. [{"Key":"1","Label":"非常满意"}]）
 * @method void setPostIVRKeyPressed(array $PostIVRKeyPressed) 设置后置IVR按键信息（e.g. [{"Key":"1","Label":"非常满意"}]）
 * @method integer getQueuedSkillGroupId() 获取排队技能组Id
 * @method void setQueuedSkillGroupId(integer $QueuedSkillGroupId) 设置排队技能组Id
 * @method string getSessionId() 获取会话 ID
 * @method void setSessionId(string $SessionId) 设置会话 ID
 * @method string getProtectedCaller() 获取主叫号码保护ID，开启号码保护映射功能时有效，且Caller字段置空
 * @method void setProtectedCaller(string $ProtectedCaller) 设置主叫号码保护ID，开启号码保护映射功能时有效，且Caller字段置空
 * @method string getProtectedCallee() 获取被叫号码保护ID，开启号码保护映射功能时有效，且Callee字段置空
 * @method void setProtectedCallee(string $ProtectedCallee) 设置被叫号码保护ID，开启号码保护映射功能时有效，且Callee字段置空
 * @method string getUui() 获取客户自定义数据（User-to-User Interface）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUui(string $Uui) 设置客户自定义数据（User-to-User Interface）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUUI() 获取客户自定义数据（User-to-User Interface）
 * @method void setUUI(string $UUI) 设置客户自定义数据（User-to-User Interface）
 * @method array getIVRKeyPressedEx() 获取IVR按键信息（e.g. [{"Key":"1","Label":"非常满意"}]）
 * @method void setIVRKeyPressedEx(array $IVRKeyPressedEx) 设置IVR按键信息（e.g. [{"Key":"1","Label":"非常满意"}]）
 * @method string getAsrUrl() 获取获取录音ASR文本信息地址
 * @method void setAsrUrl(string $AsrUrl) 设置获取录音ASR文本信息地址
 * @method string getAsrStatus() 获取AsrUrl的状态：Complete
已完成;
Processing
正在生成中;
NotExists
无记录(未开启生成离线asr或者无套餐包)
 * @method void setAsrStatus(string $AsrStatus) 设置AsrUrl的状态：Complete
已完成;
Processing
正在生成中;
NotExists
无记录(未开启生成离线asr或者无套餐包)
 * @method string getCustomRecordURL() 获取录音转存第三方COS地址
 * @method void setCustomRecordURL(string $CustomRecordURL) 设置录音转存第三方COS地址
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method string getQueuedSkillGroupName() 获取排队技能组名称
 * @method void setQueuedSkillGroupName(string $QueuedSkillGroupName) 设置排队技能组名称
 * @method array getVoicemailRecordURL() 获取通话中语音留言录音URL
 * @method void setVoicemailRecordURL(array $VoicemailRecordURL) 设置通话中语音留言录音URL
 * @method array getVoicemailAsrURL() 获取通话中语音留言ASR文本信息地址
 * @method void setVoicemailAsrURL(array $VoicemailAsrURL) 设置通话中语音留言ASR文本信息地址
 * @method integer getAIAgentId() 获取如果是智能体相关通话，这里是智能体 ID
 * @method void setAIAgentId(integer $AIAgentId) 设置如果是智能体相关通话，这里是智能体 ID
 * @method string getAIAgentName() 获取如果是智能体相关通话，这里是智能体名称
 * @method void setAIAgentName(string $AIAgentName) 设置如果是智能体相关通话，这里是智能体名称
 */
class TelCdrInfo extends AbstractModel
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
     * @var integer 呼叫发起时间戳，Unix 时间戳
     */
    public $Time;

    /**
     * @var integer 呼入呼出方向 0 呼入 1 呼出
     */
    public $Direction;

    /**
     * @var integer 通话类型 1 呼出 2 呼入 3 音频呼入 5 预测式外呼 6 内线呼叫
     */
    public $CallType;

    /**
     * @var integer 通话时长
     */
    public $Duration;

    /**
     * @var string 录音信息
     */
    public $RecordURL;

    /**
     * @var string 录音 ID
     */
    public $RecordId;

    /**
     * @var SeatUserInfo 座席信息
     */
    public $SeatUser;

    /**
     * @var integer EndStatus与EndStatusString一一对应，具体枚举如下：

**场景	         EndStatus	EndStatusString	状态说明**

电话呼入&呼出	1	        ok	                        **正常通话**

电话呼入	             102	        ivrGiveUp	        **IVR期间用户放弃**

电话呼入	             103	        waitingGiveUp	       **排队时用户放弃**

电话呼入	             104	        ringingGiveUp	       **振铃时用户放弃**

电话呼入	             105	        noSeatOnline	       **无座席在线**

电话呼入              106	       notWorkTime	       **非工作时间**   

电话呼入	            107	       ivrEnd	               **IVR全自动结束(无人工介入)**

电话呼入	            100	      blackList **黑名单(系统侧)**

电话呼出             108	        restrictedCallee	**全局外呼风险号码拦截(系统侧)**

电话呼出             109	        tooManyRequest	    **外呼频控拦截(系统侧)**

电话呼出             110	        restrictedArea	    **外呼地域拦截(系统侧)**

电话呼出             111	        restrictedTime	**外呼时段拦截(系统侧)**
                         
电话呼出             202            notAnswer	 **被叫未接听**

电话呼出            203	    userReject	**被叫拒接挂断**

电话呼出	          204	    powerOff	**被叫关机**

电话呼出           205            numberNotExist	**被叫空号**

电话呼出	         206	           busy	**被叫忙**

电话呼出   	        207	           outOfCredit	**被叫欠费**

电话呼出	         208	           operatorError	**运营商线路异常**

电话呼出         	209	           callerCancel	**主叫取消**

电话呼出	        210	           notInService	**被叫不在服务区**

电话呼入&呼出	211    clientError    **座席客户端错误**

电话呼出        212     carrierBlocked      **运营商拦截**

电话呼出        213     callReminder      **提示来电提醒**

电话呼出        215     numberInvalid      **被叫号码无效**

电话呼出        216     callRestricted      **提示呼叫受限**

电话呼出        217     calleeRestricted      **被叫黑名单受限**

电话呼出        218     areaRestricted      **被叫区域受限**

电话呼出        219     promptCallForwarding      **提示呼叫转移**

电话呼出        220     callerCancelWhileRing      **振铃中主叫取消**

电话呼出        221     callerCancelWithoutRing      **未振铃被叫号码异常**

电话呼出        222     voiceMailReached      **语音信箱挂断**

音频呼入        501     callConflict      **VoIP用户呼叫冲突终止**

音频呼入        502     clientTimeout      **VoIP用户客户端超时**

音频呼入        503     voipClientError      **VoIP用户客户端错误**

中文详情[参考](https://www.tencentcloud.com/zh/document/product/1229/71847)

英文详情[参考](https://www.tencentcloud.com/document/product/1229/71847?lang=en)
     */
    public $EndStatus;

    /**
     * @var string 技能组名称
     */
    public $SkillGroup;

    /**
     * @var string 主叫归属地
     */
    public $CallerLocation;

    /**
     * @var integer IVR 阶段耗时
     */
    public $IVRDuration;

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
     * @var array IVR 按键信息 ，e.g. ["1","2","3"]
     */
    public $IVRKeyPressed;

    /**
     * @var string 挂机方 seat 座席 user 用户 system 系统
     */
    public $HungUpSide;

    /**
     * @var array 服务参与者列表
     */
    public $ServeParticipants;

    /**
     * @var integer 技能组ID
     */
    public $SkillGroupId;

    /**
     * @var string 参考 EndStatus 字段
     */
    public $EndStatusString;

    /**
     * @var integer 会话开始时间戳，UNIX 秒级时间戳
     */
    public $StartTimestamp;

    /**
     * @var integer 进入排队时间，Unix 秒级时间戳
     */
    public $QueuedTimestamp;

    /**
     * @var array 后置IVR按键信息（e.g. [{"Key":"1","Label":"非常满意"}]）
     */
    public $PostIVRKeyPressed;

    /**
     * @var integer 排队技能组Id
     */
    public $QueuedSkillGroupId;

    /**
     * @var string 会话 ID
     */
    public $SessionId;

    /**
     * @var string 主叫号码保护ID，开启号码保护映射功能时有效，且Caller字段置空
     */
    public $ProtectedCaller;

    /**
     * @var string 被叫号码保护ID，开启号码保护映射功能时有效，且Callee字段置空
     */
    public $ProtectedCallee;

    /**
     * @var string 客户自定义数据（User-to-User Interface）
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $Uui;

    /**
     * @var string 客户自定义数据（User-to-User Interface）
     */
    public $UUI;

    /**
     * @var array IVR按键信息（e.g. [{"Key":"1","Label":"非常满意"}]）
     */
    public $IVRKeyPressedEx;

    /**
     * @var string 获取录音ASR文本信息地址
     */
    public $AsrUrl;

    /**
     * @var string AsrUrl的状态：Complete
已完成;
Processing
正在生成中;
NotExists
无记录(未开启生成离线asr或者无套餐包)
     */
    public $AsrStatus;

    /**
     * @var string 录音转存第三方COS地址
     */
    public $CustomRecordURL;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var string 排队技能组名称
     */
    public $QueuedSkillGroupName;

    /**
     * @var array 通话中语音留言录音URL
     */
    public $VoicemailRecordURL;

    /**
     * @var array 通话中语音留言ASR文本信息地址
     */
    public $VoicemailAsrURL;

    /**
     * @var integer 如果是智能体相关通话，这里是智能体 ID
     */
    public $AIAgentId;

    /**
     * @var string 如果是智能体相关通话，这里是智能体名称
     */
    public $AIAgentName;

    /**
     * @param string $Caller 主叫号码
     * @param string $Callee 被叫号码
     * @param integer $Time 呼叫发起时间戳，Unix 时间戳
     * @param integer $Direction 呼入呼出方向 0 呼入 1 呼出
     * @param integer $CallType 通话类型 1 呼出 2 呼入 3 音频呼入 5 预测式外呼 6 内线呼叫
     * @param integer $Duration 通话时长
     * @param string $RecordURL 录音信息
     * @param string $RecordId 录音 ID
     * @param SeatUserInfo $SeatUser 座席信息
     * @param integer $EndStatus EndStatus与EndStatusString一一对应，具体枚举如下：

**场景	         EndStatus	EndStatusString	状态说明**

电话呼入&呼出	1	        ok	                        **正常通话**

电话呼入	             102	        ivrGiveUp	        **IVR期间用户放弃**

电话呼入	             103	        waitingGiveUp	       **排队时用户放弃**

电话呼入	             104	        ringingGiveUp	       **振铃时用户放弃**

电话呼入	             105	        noSeatOnline	       **无座席在线**

电话呼入              106	       notWorkTime	       **非工作时间**   

电话呼入	            107	       ivrEnd	               **IVR全自动结束(无人工介入)**

电话呼入	            100	      blackList **黑名单(系统侧)**

电话呼出             108	        restrictedCallee	**全局外呼风险号码拦截(系统侧)**

电话呼出             109	        tooManyRequest	    **外呼频控拦截(系统侧)**

电话呼出             110	        restrictedArea	    **外呼地域拦截(系统侧)**

电话呼出             111	        restrictedTime	**外呼时段拦截(系统侧)**
                         
电话呼出             202            notAnswer	 **被叫未接听**

电话呼出            203	    userReject	**被叫拒接挂断**

电话呼出	          204	    powerOff	**被叫关机**

电话呼出           205            numberNotExist	**被叫空号**

电话呼出	         206	           busy	**被叫忙**

电话呼出   	        207	           outOfCredit	**被叫欠费**

电话呼出	         208	           operatorError	**运营商线路异常**

电话呼出         	209	           callerCancel	**主叫取消**

电话呼出	        210	           notInService	**被叫不在服务区**

电话呼入&呼出	211    clientError    **座席客户端错误**

电话呼出        212     carrierBlocked      **运营商拦截**

电话呼出        213     callReminder      **提示来电提醒**

电话呼出        215     numberInvalid      **被叫号码无效**

电话呼出        216     callRestricted      **提示呼叫受限**

电话呼出        217     calleeRestricted      **被叫黑名单受限**

电话呼出        218     areaRestricted      **被叫区域受限**

电话呼出        219     promptCallForwarding      **提示呼叫转移**

电话呼出        220     callerCancelWhileRing      **振铃中主叫取消**

电话呼出        221     callerCancelWithoutRing      **未振铃被叫号码异常**

电话呼出        222     voiceMailReached      **语音信箱挂断**

音频呼入        501     callConflict      **VoIP用户呼叫冲突终止**

音频呼入        502     clientTimeout      **VoIP用户客户端超时**

音频呼入        503     voipClientError      **VoIP用户客户端错误**

中文详情[参考](https://www.tencentcloud.com/zh/document/product/1229/71847)

英文详情[参考](https://www.tencentcloud.com/document/product/1229/71847?lang=en)
     * @param string $SkillGroup 技能组名称
     * @param string $CallerLocation 主叫归属地
     * @param integer $IVRDuration IVR 阶段耗时
     * @param integer $RingTimestamp 振铃时间戳，UNIX 秒级时间戳
     * @param integer $AcceptTimestamp 接听时间戳，UNIX 秒级时间戳
     * @param integer $EndedTimestamp 结束时间戳，UNIX 秒级时间戳
     * @param array $IVRKeyPressed IVR 按键信息 ，e.g. ["1","2","3"]
     * @param string $HungUpSide 挂机方 seat 座席 user 用户 system 系统
     * @param array $ServeParticipants 服务参与者列表
     * @param integer $SkillGroupId 技能组ID
     * @param string $EndStatusString 参考 EndStatus 字段
     * @param integer $StartTimestamp 会话开始时间戳，UNIX 秒级时间戳
     * @param integer $QueuedTimestamp 进入排队时间，Unix 秒级时间戳
     * @param array $PostIVRKeyPressed 后置IVR按键信息（e.g. [{"Key":"1","Label":"非常满意"}]）
     * @param integer $QueuedSkillGroupId 排队技能组Id
     * @param string $SessionId 会话 ID
     * @param string $ProtectedCaller 主叫号码保护ID，开启号码保护映射功能时有效，且Caller字段置空
     * @param string $ProtectedCallee 被叫号码保护ID，开启号码保护映射功能时有效，且Callee字段置空
     * @param string $Uui 客户自定义数据（User-to-User Interface）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UUI 客户自定义数据（User-to-User Interface）
     * @param array $IVRKeyPressedEx IVR按键信息（e.g. [{"Key":"1","Label":"非常满意"}]）
     * @param string $AsrUrl 获取录音ASR文本信息地址
     * @param string $AsrStatus AsrUrl的状态：Complete
已完成;
Processing
正在生成中;
NotExists
无记录(未开启生成离线asr或者无套餐包)
     * @param string $CustomRecordURL 录音转存第三方COS地址
     * @param string $Remark 备注
     * @param string $QueuedSkillGroupName 排队技能组名称
     * @param array $VoicemailRecordURL 通话中语音留言录音URL
     * @param array $VoicemailAsrURL 通话中语音留言ASR文本信息地址
     * @param integer $AIAgentId 如果是智能体相关通话，这里是智能体 ID
     * @param string $AIAgentName 如果是智能体相关通话，这里是智能体名称
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

        if (array_key_exists("IVRKeyPressedEx",$param) and $param["IVRKeyPressedEx"] !== null) {
            $this->IVRKeyPressedEx = [];
            foreach ($param["IVRKeyPressedEx"] as $key => $value){
                $obj = new IVRKeyPressedElement();
                $obj->deserialize($value);
                array_push($this->IVRKeyPressedEx, $obj);
            }
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
    }
}
