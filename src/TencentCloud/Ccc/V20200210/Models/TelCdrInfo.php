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
 * @method integer getEndStatus() 获取结束状态 0 未知 1 正常通话 2 未接通
 * @method void setEndStatus(integer $EndStatus) 设置结束状态 0 未知 1 正常通话 2 未接通
 * @method string getSkillGroup() 获取技能组
 * @method void setSkillGroup(string $SkillGroup) 设置技能组
 * @method string getCallerLocation() 获取主叫归属地
 * @method void setCallerLocation(string $CallerLocation) 设置主叫归属地
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
     * @var integer 结束状态 0 未知 1 正常通话 2 未接通
     */
    public $EndStatus;

    /**
     * @var string 技能组
     */
    public $SkillGroup;

    /**
     * @var string 主叫归属地
     */
    public $CallerLocation;

    /**
     * @param string $Caller 主叫号码
     * @param string $Callee 被叫号码
     * @param integer $Time 呼叫发起时间戳，Unix 时间戳
     * @param integer $Direction 呼入呼出方向 0 呼入 1 呼出
     * @param integer $Duration 通话时长
     * @param string $RecordURL 录音信息
     * @param SeatUserInfo $SeatUser 坐席信息
     * @param integer $EndStatus 结束状态 0 未知 1 正常通话 2 未接通
     * @param string $SkillGroup 技能组
     * @param string $CallerLocation 主叫归属地
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
    }
}
