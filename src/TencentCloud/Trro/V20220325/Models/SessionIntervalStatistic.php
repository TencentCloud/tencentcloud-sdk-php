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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单位时间间隔的会话统计数据
 *
 * @method integer getActiveFieldDeviceNum() 获取活跃现场设备数
 * @method void setActiveFieldDeviceNum(integer $ActiveFieldDeviceNum) 设置活跃现场设备数
 * @method integer getActiveRemoteDeviceNum() 获取活跃远端设备数
 * @method void setActiveRemoteDeviceNum(integer $ActiveRemoteDeviceNum) 设置活跃远端设备数
 * @method integer getSessionNum() 获取会话数量
 * @method void setSessionNum(integer $SessionNum) 设置会话数量
 * @method integer getTotalDuration() 获取会话时长，单位：分钟
 * @method void setTotalDuration(integer $TotalDuration) 设置会话时长，单位：分钟
 * @method integer getStartTime() 获取时间戳，单位：秒
 * @method void setStartTime(integer $StartTime) 设置时间戳，单位：秒
 * @method integer getEndTime() 获取时间戳，单位：秒
 * @method void setEndTime(integer $EndTime) 设置时间戳，单位：秒
 * @method integer getNotBadSessionRatio() 获取优良会话占比，单位：%
 * @method void setNotBadSessionRatio(integer $NotBadSessionRatio) 设置优良会话占比，单位：%
 */
class SessionIntervalStatistic extends AbstractModel
{
    /**
     * @var integer 活跃现场设备数
     */
    public $ActiveFieldDeviceNum;

    /**
     * @var integer 活跃远端设备数
     */
    public $ActiveRemoteDeviceNum;

    /**
     * @var integer 会话数量
     */
    public $SessionNum;

    /**
     * @var integer 会话时长，单位：分钟
     */
    public $TotalDuration;

    /**
     * @var integer 时间戳，单位：秒
     */
    public $StartTime;

    /**
     * @var integer 时间戳，单位：秒
     */
    public $EndTime;

    /**
     * @var integer 优良会话占比，单位：%
     */
    public $NotBadSessionRatio;

    /**
     * @param integer $ActiveFieldDeviceNum 活跃现场设备数
     * @param integer $ActiveRemoteDeviceNum 活跃远端设备数
     * @param integer $SessionNum 会话数量
     * @param integer $TotalDuration 会话时长，单位：分钟
     * @param integer $StartTime 时间戳，单位：秒
     * @param integer $EndTime 时间戳，单位：秒
     * @param integer $NotBadSessionRatio 优良会话占比，单位：%
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
        if (array_key_exists("ActiveFieldDeviceNum",$param) and $param["ActiveFieldDeviceNum"] !== null) {
            $this->ActiveFieldDeviceNum = $param["ActiveFieldDeviceNum"];
        }

        if (array_key_exists("ActiveRemoteDeviceNum",$param) and $param["ActiveRemoteDeviceNum"] !== null) {
            $this->ActiveRemoteDeviceNum = $param["ActiveRemoteDeviceNum"];
        }

        if (array_key_exists("SessionNum",$param) and $param["SessionNum"] !== null) {
            $this->SessionNum = $param["SessionNum"];
        }

        if (array_key_exists("TotalDuration",$param) and $param["TotalDuration"] !== null) {
            $this->TotalDuration = $param["TotalDuration"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("NotBadSessionRatio",$param) and $param["NotBadSessionRatio"] !== null) {
            $this->NotBadSessionRatio = $param["NotBadSessionRatio"];
        }
    }
}
