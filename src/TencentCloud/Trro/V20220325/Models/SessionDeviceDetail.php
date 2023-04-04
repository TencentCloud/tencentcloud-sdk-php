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
 * 会话数据详单（按设备区分）
 *
 * @method string getDeviceType() 获取设备类型：field或remote
 * @method void setDeviceType(string $DeviceType) 设置设备类型：field或remote
 * @method integer getStartTime() 获取起始点位时间，单位：秒
 * @method void setStartTime(integer $StartTime) 设置起始点位时间，单位：秒
 * @method integer getEndTime() 获取结束点位时间，单位：秒
 * @method void setEndTime(integer $EndTime) 设置结束点位时间，单位：秒
 * @method string getSessionId() 获取会话ID
 * @method void setSessionId(string $SessionId) 设置会话ID
 * @method array getRate() 获取码率，单位：kbps
 * @method void setRate(array $Rate) 设置码率，单位：kbps
 * @method array getFps() 获取帧率
 * @method void setFps(array $Fps) 设置帧率
 * @method array getLost() 获取丢包率，单位：%
 * @method void setLost(array $Lost) 设置丢包率，单位：%
 * @method array getNetworkLatency() 获取网络时延，单位：ms
 * @method void setNetworkLatency(array $NetworkLatency) 设置网络时延，单位：ms
 * @method array getVideoLatency() 获取视频时延，单位：ms
 * @method void setVideoLatency(array $VideoLatency) 设置视频时延，单位：ms
 * @method array getCpuUsed() 获取CPU使用率，单位：%
 * @method void setCpuUsed(array $CpuUsed) 设置CPU使用率，单位：%
 * @method array getMemUsed() 获取内存使用率，单位：%
 * @method void setMemUsed(array $MemUsed) 设置内存使用率，单位：%
 * @method array getTimeOffset() 获取时间偏移量，单位：秒
 * @method void setTimeOffset(array $TimeOffset) 设置时间偏移量，单位：秒
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getDeviceId() 获取设备ID
 * @method void setDeviceId(string $DeviceId) 设置设备ID
 */
class SessionDeviceDetail extends AbstractModel
{
    /**
     * @var string 设备类型：field或remote
     */
    public $DeviceType;

    /**
     * @var integer 起始点位时间，单位：秒
     */
    public $StartTime;

    /**
     * @var integer 结束点位时间，单位：秒
     */
    public $EndTime;

    /**
     * @var string 会话ID
     */
    public $SessionId;

    /**
     * @var array 码率，单位：kbps
     */
    public $Rate;

    /**
     * @var array 帧率
     */
    public $Fps;

    /**
     * @var array 丢包率，单位：%
     */
    public $Lost;

    /**
     * @var array 网络时延，单位：ms
     */
    public $NetworkLatency;

    /**
     * @var array 视频时延，单位：ms
     */
    public $VideoLatency;

    /**
     * @var array CPU使用率，单位：%
     */
    public $CpuUsed;

    /**
     * @var array 内存使用率，单位：%
     */
    public $MemUsed;

    /**
     * @var array 时间偏移量，单位：秒
     */
    public $TimeOffset;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 设备ID
     */
    public $DeviceId;

    /**
     * @param string $DeviceType 设备类型：field或remote
     * @param integer $StartTime 起始点位时间，单位：秒
     * @param integer $EndTime 结束点位时间，单位：秒
     * @param string $SessionId 会话ID
     * @param array $Rate 码率，单位：kbps
     * @param array $Fps 帧率
     * @param array $Lost 丢包率，单位：%
     * @param array $NetworkLatency 网络时延，单位：ms
     * @param array $VideoLatency 视频时延，单位：ms
     * @param array $CpuUsed CPU使用率，单位：%
     * @param array $MemUsed 内存使用率，单位：%
     * @param array $TimeOffset 时间偏移量，单位：秒
     * @param string $ProjectId 项目ID
     * @param string $DeviceId 设备ID
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
        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("Rate",$param) and $param["Rate"] !== null) {
            $this->Rate = $param["Rate"];
        }

        if (array_key_exists("Fps",$param) and $param["Fps"] !== null) {
            $this->Fps = $param["Fps"];
        }

        if (array_key_exists("Lost",$param) and $param["Lost"] !== null) {
            $this->Lost = $param["Lost"];
        }

        if (array_key_exists("NetworkLatency",$param) and $param["NetworkLatency"] !== null) {
            $this->NetworkLatency = $param["NetworkLatency"];
        }

        if (array_key_exists("VideoLatency",$param) and $param["VideoLatency"] !== null) {
            $this->VideoLatency = $param["VideoLatency"];
        }

        if (array_key_exists("CpuUsed",$param) and $param["CpuUsed"] !== null) {
            $this->CpuUsed = $param["CpuUsed"];
        }

        if (array_key_exists("MemUsed",$param) and $param["MemUsed"] !== null) {
            $this->MemUsed = $param["MemUsed"];
        }

        if (array_key_exists("TimeOffset",$param) and $param["TimeOffset"] !== null) {
            $this->TimeOffset = $param["TimeOffset"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }
    }
}
