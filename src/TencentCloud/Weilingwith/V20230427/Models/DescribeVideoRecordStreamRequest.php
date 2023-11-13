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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVideoRecordStream请求参数结构体
 *
 * @method string getWID() 获取设备唯一标识
 * @method void setWID(string $WID) 设置设备唯一标识
 * @method string getProtocol() 获取枚举如下：
flvsh
rtmp
hls
webrtc
raw (视频原始帧)
 * @method void setProtocol(string $Protocol) 设置枚举如下：
flvsh
rtmp
hls
webrtc
raw (视频原始帧)
 * @method integer getStartTime() 获取开始时间（精确到毫秒）
 * @method void setStartTime(integer $StartTime) 设置开始时间（精确到毫秒）
 * @method integer getEndTime() 获取结束时间（精确到毫秒）
 * @method void setEndTime(integer $EndTime) 设置结束时间（精确到毫秒）
 * @method float getPlayBackRate() 获取倍速 0.5、1、2、4
 * @method void setPlayBackRate(float $PlayBackRate) 设置倍速 0.5、1、2、4
 * @method integer getWorkspaceId() 获取工作空间id
 * @method void setWorkspaceId(integer $WorkspaceId) 设置工作空间id
 * @method string getApplicationToken() 获取应用token
 * @method void setApplicationToken(string $ApplicationToken) 设置应用token
 * @method string getStream() 获取流的唯一标识，播放链接尾缀
 * @method void setStream(string $Stream) 设置流的唯一标识，播放链接尾缀
 * @method string getEnv() 获取公有云私有化项目传0或者不传；混合云项目一般传空间id
 * @method void setEnv(string $Env) 设置公有云私有化项目传0或者不传；混合云项目一般传空间id
 */
class DescribeVideoRecordStreamRequest extends AbstractModel
{
    /**
     * @var string 设备唯一标识
     */
    public $WID;

    /**
     * @var string 枚举如下：
flvsh
rtmp
hls
webrtc
raw (视频原始帧)
     */
    public $Protocol;

    /**
     * @var integer 开始时间（精确到毫秒）
     */
    public $StartTime;

    /**
     * @var integer 结束时间（精确到毫秒）
     */
    public $EndTime;

    /**
     * @var float 倍速 0.5、1、2、4
     */
    public $PlayBackRate;

    /**
     * @var integer 工作空间id
     */
    public $WorkspaceId;

    /**
     * @var string 应用token
     */
    public $ApplicationToken;

    /**
     * @var string 流的唯一标识，播放链接尾缀
     */
    public $Stream;

    /**
     * @var string 公有云私有化项目传0或者不传；混合云项目一般传空间id
     */
    public $Env;

    /**
     * @param string $WID 设备唯一标识
     * @param string $Protocol 枚举如下：
flvsh
rtmp
hls
webrtc
raw (视频原始帧)
     * @param integer $StartTime 开始时间（精确到毫秒）
     * @param integer $EndTime 结束时间（精确到毫秒）
     * @param float $PlayBackRate 倍速 0.5、1、2、4
     * @param integer $WorkspaceId 工作空间id
     * @param string $ApplicationToken 应用token
     * @param string $Stream 流的唯一标识，播放链接尾缀
     * @param string $Env 公有云私有化项目传0或者不传；混合云项目一般传空间id
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
        if (array_key_exists("WID",$param) and $param["WID"] !== null) {
            $this->WID = $param["WID"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("PlayBackRate",$param) and $param["PlayBackRate"] !== null) {
            $this->PlayBackRate = $param["PlayBackRate"];
        }

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("ApplicationToken",$param) and $param["ApplicationToken"] !== null) {
            $this->ApplicationToken = $param["ApplicationToken"];
        }

        if (array_key_exists("Stream",$param) and $param["Stream"] !== null) {
            $this->Stream = $param["Stream"];
        }

        if (array_key_exists("Env",$param) and $param["Env"] !== null) {
            $this->Env = $param["Env"];
        }
    }
}
