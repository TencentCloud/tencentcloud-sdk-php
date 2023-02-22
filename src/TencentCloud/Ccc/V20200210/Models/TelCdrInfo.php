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
 * @method integer getDuration() 获取通话时长
 * @method void setDuration(integer $Duration) 设置通话时长
 * @method string getRecordURL() 获取录音信息
 * @method void setRecordURL(string $RecordURL) 设置录音信息
 * @method SeatUserInfo getSeatUser() 获取坐席信息
 * @method void setSeatUser(SeatUserInfo $SeatUser) 设置坐席信息
 * @method integer getEndStatus() 获取EndStatus与EndStatusString一一对应，具体枚举如下：

**场景	         EndStatus	EndStatusString	状态说明**

电话呼入&呼出	1	        ok	                        正常结束

电话呼入&呼出	0	        error	                系统错误

电话呼入	             102	        ivrGiveUp	        IVR 期间用户放弃

电话呼入	             103	        waitingGiveUp	       会话排队期间用户放弃

电话呼入	             104	        ringingGiveUp	       会话振铃期间用户放弃

电话呼入	             105	        noSeatOnline	       无坐席在线

电话呼入              106	       notWorkTime	       非工作时间   

电话呼入	            107	       ivrEnd	               IVR 后直接结束

电话呼入	            100	      CallinBlockedContact  呼入黑名单 

电话呼出               2	              unconnected	未接通
                         
电话呼出             201            unknown	未知状态

电话呼出            203	    userReject	拒接挂断

电话呼出	          204	    powerOff	关机

电话呼出           205            numberNotExist	空号

电话呼出	         206	           busy	通话中

电话呼出   	 207	           outOfCredit	欠费

电话呼出	         208	           operatorError	运营商线路异常

电话呼出         	209	           callerCancel	主叫取消

电话呼出	        210	           notInService	不在服务区

 * @method void setEndStatus(integer $EndStatus) 设置EndStatus与EndStatusString一一对应，具体枚举如下：

**场景	         EndStatus	EndStatusString	状态说明**

电话呼入&呼出	1	        ok	                        正常结束

电话呼入&呼出	0	        error	                系统错误

电话呼入	             102	        ivrGiveUp	        IVR 期间用户放弃

电话呼入	             103	        waitingGiveUp	       会话排队期间用户放弃

电话呼入	             104	        ringingGiveUp	       会话振铃期间用户放弃

电话呼入	             105	        noSeatOnline	       无坐席在线

电话呼入              106	       notWorkTime	       非工作时间   

电话呼入	            107	       ivrEnd	               IVR 后直接结束

电话呼入	            100	      CallinBlockedContact  呼入黑名单 

电话呼出               2	              unconnected	未接通
                         
电话呼出             201            unknown	未知状态

电话呼出            203	    userReject	拒接挂断

电话呼出	          204	    powerOff	关机

电话呼出           205            numberNotExist	空号

电话呼出	         206	           busy	通话中

电话呼出   	 207	           outOfCredit	欠费

电话呼出	         208	           operatorError	运营商线路异常

电话呼出         	209	           callerCancel	主叫取消

电话呼出	        210	           notInService	不在服务区

 * @method string getSkillGroup() 获取技能组名称
 * @method void setSkillGroup(string $SkillGroup) 设置技能组名称
 * @method string getCallerLocation() 获取主叫归属地
 * @method void setCallerLocation(string $CallerLocation) 设置主叫归属地
 * @method integer getIVRDuration() 获取IVR 阶段耗时
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIVRDuration(integer $IVRDuration) 设置IVR 阶段耗时
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRingTimestamp() 获取振铃时间戳，UNIX 秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRingTimestamp(integer $RingTimestamp) 设置振铃时间戳，UNIX 秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAcceptTimestamp() 获取接听时间戳，UNIX 秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAcceptTimestamp(integer $AcceptTimestamp) 设置接听时间戳，UNIX 秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEndedTimestamp() 获取结束时间戳，UNIX 秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndedTimestamp(integer $EndedTimestamp) 设置结束时间戳，UNIX 秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getIVRKeyPressed() 获取IVR 按键信息 ，e.g. ["1","2","3"]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIVRKeyPressed(array $IVRKeyPressed) 设置IVR 按键信息 ，e.g. ["1","2","3"]
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHungUpSide() 获取挂机方 seat 坐席 user 用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHungUpSide(string $HungUpSide) 设置挂机方 seat 坐席 user 用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getServeParticipants() 获取服务参与者列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServeParticipants(array $ServeParticipants) 设置服务参与者列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSkillGroupId() 获取技能组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSkillGroupId(integer $SkillGroupId) 设置技能组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndStatusString() 获取EndStatus与EndStatusString一一对应，具体枚举如下：

**场景	         EndStatus	EndStatusString	状态说明**

电话呼入&呼出	1	        ok	                        正常结束

电话呼入&呼出	0	        error	                系统错误

电话呼入	             102	        ivrGiveUp	        IVR 期间用户放弃

电话呼入	             103	        waitingGiveUp	       会话排队期间用户放弃

电话呼入	             104	        ringingGiveUp	       会话振铃期间用户放弃

电话呼入	             105	        noSeatOnline	       无坐席在线

电话呼入              106	       notWorkTime	       非工作时间   

电话呼入	            107	       ivrEnd	               IVR 后直接结束

电话呼入	            100	      CallinBlockedContact  呼入黑名单 

电话呼出               2	              unconnected	未接通
                         
电话呼出             201            unknown	未知状态
听
电话呼出            203	    userReject	拒接挂断

电话呼出	          204	    powerOff	关机

电话呼出           205            numberNotExist	空号

电话呼出	         206	           busy	通话中

电话呼出   	 207	           outOfCredit	欠费

电话呼出	         208	           operatorError	运营商线路异常

电话呼出         	209	           callerCancel	主叫取消

电话呼出	        210	           notInService	不在服务区


注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndStatusString(string $EndStatusString) 设置EndStatus与EndStatusString一一对应，具体枚举如下：

**场景	         EndStatus	EndStatusString	状态说明**

电话呼入&呼出	1	        ok	                        正常结束

电话呼入&呼出	0	        error	                系统错误

电话呼入	             102	        ivrGiveUp	        IVR 期间用户放弃

电话呼入	             103	        waitingGiveUp	       会话排队期间用户放弃

电话呼入	             104	        ringingGiveUp	       会话振铃期间用户放弃

电话呼入	             105	        noSeatOnline	       无坐席在线

电话呼入              106	       notWorkTime	       非工作时间   

电话呼入	            107	       ivrEnd	               IVR 后直接结束

电话呼入	            100	      CallinBlockedContact  呼入黑名单 

电话呼出               2	              unconnected	未接通
                         
电话呼出             201            unknown	未知状态
听
电话呼出            203	    userReject	拒接挂断

电话呼出	          204	    powerOff	关机

电话呼出           205            numberNotExist	空号

电话呼出	         206	           busy	通话中

电话呼出   	 207	           outOfCredit	欠费

电话呼出	         208	           operatorError	运营商线路异常

电话呼出         	209	           callerCancel	主叫取消

电话呼出	        210	           notInService	不在服务区


注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStartTimestamp() 获取会话开始时间戳，UNIX 秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTimestamp(integer $StartTimestamp) 设置会话开始时间戳，UNIX 秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getQueuedTimestamp() 获取进入排队时间，Unix 秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueuedTimestamp(integer $QueuedTimestamp) 设置进入排队时间，Unix 秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPostIVRKeyPressed() 获取后置IVR按键信息（e.g. [{"Key":"1","Label":"非常满意"}]）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPostIVRKeyPressed(array $PostIVRKeyPressed) 设置后置IVR按键信息（e.g. [{"Key":"1","Label":"非常满意"}]）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getQueuedSkillGroupId() 获取排队技能组Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueuedSkillGroupId(integer $QueuedSkillGroupId) 设置排队技能组Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSessionId() 获取会话 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSessionId(string $SessionId) 设置会话 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtectedCaller() 获取主叫号码保护ID，开启号码保护映射功能时有效，且Caller字段置空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtectedCaller(string $ProtectedCaller) 设置主叫号码保护ID，开启号码保护映射功能时有效，且Caller字段置空
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtectedCallee() 获取被叫号码保护ID，开启号码保护映射功能时有效，且Callee字段置空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtectedCallee(string $ProtectedCallee) 设置被叫号码保护ID，开启号码保护映射功能时有效，且Callee字段置空
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUui() 获取客户自定义数据（User-to-User Interface）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUui(string $Uui) 设置客户自定义数据（User-to-User Interface）
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getIVRKeyPressedEx() 获取IVR按键信息（e.g. [{"Key":"1","Label":"非常满意"}]）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIVRKeyPressedEx(array $IVRKeyPressedEx) 设置IVR按键信息（e.g. [{"Key":"1","Label":"非常满意"}]）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAsrUrl() 获取获取录音ASR文本信息地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAsrUrl(string $AsrUrl) 设置获取录音ASR文本信息地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCustomRecordURL() 获取录音转存第三方COS地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomRecordURL(string $CustomRecordURL) 设置录音转存第三方COS地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQueuedSkillGroupName() 获取排队技能组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueuedSkillGroupName(string $QueuedSkillGroupName) 设置排队技能组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVoicemailRecordURL() 获取通话中语音留言录音URL
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVoicemailRecordURL(array $VoicemailRecordURL) 设置通话中语音留言录音URL
注意：此字段可能返回 null，表示取不到有效值。
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
     * @var integer 通话时长
     */
    public $Duration;

    /**
     * @var string 录音信息
     */
    public $RecordURL;

    /**
     * @var SeatUserInfo 坐席信息
     */
    public $SeatUser;

    /**
     * @var integer EndStatus与EndStatusString一一对应，具体枚举如下：

**场景	         EndStatus	EndStatusString	状态说明**

电话呼入&呼出	1	        ok	                        正常结束

电话呼入&呼出	0	        error	                系统错误

电话呼入	             102	        ivrGiveUp	        IVR 期间用户放弃

电话呼入	             103	        waitingGiveUp	       会话排队期间用户放弃

电话呼入	             104	        ringingGiveUp	       会话振铃期间用户放弃

电话呼入	             105	        noSeatOnline	       无坐席在线

电话呼入              106	       notWorkTime	       非工作时间   

电话呼入	            107	       ivrEnd	               IVR 后直接结束

电话呼入	            100	      CallinBlockedContact  呼入黑名单 

电话呼出               2	              unconnected	未接通
                         
电话呼出             201            unknown	未知状态

电话呼出            203	    userReject	拒接挂断

电话呼出	          204	    powerOff	关机

电话呼出           205            numberNotExist	空号

电话呼出	         206	           busy	通话中

电话呼出   	 207	           outOfCredit	欠费

电话呼出	         208	           operatorError	运营商线路异常

电话呼出         	209	           callerCancel	主叫取消

电话呼出	        210	           notInService	不在服务区

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
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IVRDuration;

    /**
     * @var integer 振铃时间戳，UNIX 秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RingTimestamp;

    /**
     * @var integer 接听时间戳，UNIX 秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AcceptTimestamp;

    /**
     * @var integer 结束时间戳，UNIX 秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndedTimestamp;

    /**
     * @var array IVR 按键信息 ，e.g. ["1","2","3"]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IVRKeyPressed;

    /**
     * @var string 挂机方 seat 坐席 user 用户
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HungUpSide;

    /**
     * @var array 服务参与者列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServeParticipants;

    /**
     * @var integer 技能组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SkillGroupId;

    /**
     * @var string EndStatus与EndStatusString一一对应，具体枚举如下：

**场景	         EndStatus	EndStatusString	状态说明**

电话呼入&呼出	1	        ok	                        正常结束

电话呼入&呼出	0	        error	                系统错误

电话呼入	             102	        ivrGiveUp	        IVR 期间用户放弃

电话呼入	             103	        waitingGiveUp	       会话排队期间用户放弃

电话呼入	             104	        ringingGiveUp	       会话振铃期间用户放弃

电话呼入	             105	        noSeatOnline	       无坐席在线

电话呼入              106	       notWorkTime	       非工作时间   

电话呼入	            107	       ivrEnd	               IVR 后直接结束

电话呼入	            100	      CallinBlockedContact  呼入黑名单 

电话呼出               2	              unconnected	未接通
                         
电话呼出             201            unknown	未知状态
听
电话呼出            203	    userReject	拒接挂断

电话呼出	          204	    powerOff	关机

电话呼出           205            numberNotExist	空号

电话呼出	         206	           busy	通话中

电话呼出   	 207	           outOfCredit	欠费

电话呼出	         208	           operatorError	运营商线路异常

电话呼出         	209	           callerCancel	主叫取消

电话呼出	        210	           notInService	不在服务区


注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndStatusString;

    /**
     * @var integer 会话开始时间戳，UNIX 秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTimestamp;

    /**
     * @var integer 进入排队时间，Unix 秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueuedTimestamp;

    /**
     * @var array 后置IVR按键信息（e.g. [{"Key":"1","Label":"非常满意"}]）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PostIVRKeyPressed;

    /**
     * @var integer 排队技能组Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueuedSkillGroupId;

    /**
     * @var string 会话 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SessionId;

    /**
     * @var string 主叫号码保护ID，开启号码保护映射功能时有效，且Caller字段置空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProtectedCaller;

    /**
     * @var string 被叫号码保护ID，开启号码保护映射功能时有效，且Callee字段置空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProtectedCallee;

    /**
     * @var string 客户自定义数据（User-to-User Interface）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uui;

    /**
     * @var array IVR按键信息（e.g. [{"Key":"1","Label":"非常满意"}]）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IVRKeyPressedEx;

    /**
     * @var string 获取录音ASR文本信息地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AsrUrl;

    /**
     * @var string 录音转存第三方COS地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomRecordURL;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string 排队技能组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueuedSkillGroupName;

    /**
     * @var array 通话中语音留言录音URL
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VoicemailRecordURL;

    /**
     * @param string $Caller 主叫号码
     * @param string $Callee 被叫号码
     * @param integer $Time 呼叫发起时间戳，Unix 时间戳
     * @param integer $Direction 呼入呼出方向 0 呼入 1 呼出
     * @param integer $Duration 通话时长
     * @param string $RecordURL 录音信息
     * @param SeatUserInfo $SeatUser 坐席信息
     * @param integer $EndStatus EndStatus与EndStatusString一一对应，具体枚举如下：

**场景	         EndStatus	EndStatusString	状态说明**

电话呼入&呼出	1	        ok	                        正常结束

电话呼入&呼出	0	        error	                系统错误

电话呼入	             102	        ivrGiveUp	        IVR 期间用户放弃

电话呼入	             103	        waitingGiveUp	       会话排队期间用户放弃

电话呼入	             104	        ringingGiveUp	       会话振铃期间用户放弃

电话呼入	             105	        noSeatOnline	       无坐席在线

电话呼入              106	       notWorkTime	       非工作时间   

电话呼入	            107	       ivrEnd	               IVR 后直接结束

电话呼入	            100	      CallinBlockedContact  呼入黑名单 

电话呼出               2	              unconnected	未接通
                         
电话呼出             201            unknown	未知状态

电话呼出            203	    userReject	拒接挂断

电话呼出	          204	    powerOff	关机

电话呼出           205            numberNotExist	空号

电话呼出	         206	           busy	通话中

电话呼出   	 207	           outOfCredit	欠费

电话呼出	         208	           operatorError	运营商线路异常

电话呼出         	209	           callerCancel	主叫取消

电话呼出	        210	           notInService	不在服务区

     * @param string $SkillGroup 技能组名称
     * @param string $CallerLocation 主叫归属地
     * @param integer $IVRDuration IVR 阶段耗时
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RingTimestamp 振铃时间戳，UNIX 秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AcceptTimestamp 接听时间戳，UNIX 秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EndedTimestamp 结束时间戳，UNIX 秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $IVRKeyPressed IVR 按键信息 ，e.g. ["1","2","3"]
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HungUpSide 挂机方 seat 坐席 user 用户
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ServeParticipants 服务参与者列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SkillGroupId 技能组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndStatusString EndStatus与EndStatusString一一对应，具体枚举如下：

**场景	         EndStatus	EndStatusString	状态说明**

电话呼入&呼出	1	        ok	                        正常结束

电话呼入&呼出	0	        error	                系统错误

电话呼入	             102	        ivrGiveUp	        IVR 期间用户放弃

电话呼入	             103	        waitingGiveUp	       会话排队期间用户放弃

电话呼入	             104	        ringingGiveUp	       会话振铃期间用户放弃

电话呼入	             105	        noSeatOnline	       无坐席在线

电话呼入              106	       notWorkTime	       非工作时间   

电话呼入	            107	       ivrEnd	               IVR 后直接结束

电话呼入	            100	      CallinBlockedContact  呼入黑名单 

电话呼出               2	              unconnected	未接通
                         
电话呼出             201            unknown	未知状态
听
电话呼出            203	    userReject	拒接挂断

电话呼出	          204	    powerOff	关机

电话呼出           205            numberNotExist	空号

电话呼出	         206	           busy	通话中

电话呼出   	 207	           outOfCredit	欠费

电话呼出	         208	           operatorError	运营商线路异常

电话呼出         	209	           callerCancel	主叫取消

电话呼出	        210	           notInService	不在服务区


注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StartTimestamp 会话开始时间戳，UNIX 秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $QueuedTimestamp 进入排队时间，Unix 秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PostIVRKeyPressed 后置IVR按键信息（e.g. [{"Key":"1","Label":"非常满意"}]）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $QueuedSkillGroupId 排队技能组Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SessionId 会话 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProtectedCaller 主叫号码保护ID，开启号码保护映射功能时有效，且Caller字段置空
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProtectedCallee 被叫号码保护ID，开启号码保护映射功能时有效，且Callee字段置空
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uui 客户自定义数据（User-to-User Interface）
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $IVRKeyPressedEx IVR按键信息（e.g. [{"Key":"1","Label":"非常满意"}]）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AsrUrl 获取录音ASR文本信息地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CustomRecordURL 录音转存第三方COS地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QueuedSkillGroupName 排队技能组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $VoicemailRecordURL 通话中语音留言录音URL
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

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("RecordURL",$param) and $param["RecordURL"] !== null) {
            $this->RecordURL = $param["RecordURL"];
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
    }
}
