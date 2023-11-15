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
 * DescribeVideoLiveStream请求参数结构体
 *
 * @method string getWID() 获取设备的唯一标识

 * @method void setWID(string $WID) 设置设备的唯一标识

 * @method string getProtocol() 获取枚举如下：
flv
rtmp
hls
webrtc
raw (视频原始帧)
 * @method void setProtocol(string $Protocol) 设置枚举如下：
flv
rtmp
hls
webrtc
raw (视频原始帧)
 * @method integer getWorkspaceId() 获取工作空间Id
 * @method void setWorkspaceId(integer $WorkspaceId) 设置工作空间Id
 * @method string getApplicationToken() 获取应用token
 * @method void setApplicationToken(string $ApplicationToken) 设置应用token
 * @method integer getStreamId() 获取主码流传0，子码流传1，默认主码流

 * @method void setStreamId(integer $StreamId) 设置主码流传0，子码流传1，默认主码流

 * @method string getEnv() 获取设备所在环境，公有云私有化项目传0或者不传，混合云项目一般传空间id
 * @method void setEnv(string $Env) 设置设备所在环境，公有云私有化项目传0或者不传，混合云项目一般传空间id
 */
class DescribeVideoLiveStreamRequest extends AbstractModel
{
    /**
     * @var string 设备的唯一标识

     */
    public $WID;

    /**
     * @var string 枚举如下：
flv
rtmp
hls
webrtc
raw (视频原始帧)
     */
    public $Protocol;

    /**
     * @var integer 工作空间Id
     */
    public $WorkspaceId;

    /**
     * @var string 应用token
     */
    public $ApplicationToken;

    /**
     * @var integer 主码流传0，子码流传1，默认主码流

     */
    public $StreamId;

    /**
     * @var string 设备所在环境，公有云私有化项目传0或者不传，混合云项目一般传空间id
     */
    public $Env;

    /**
     * @param string $WID 设备的唯一标识

     * @param string $Protocol 枚举如下：
flv
rtmp
hls
webrtc
raw (视频原始帧)
     * @param integer $WorkspaceId 工作空间Id
     * @param string $ApplicationToken 应用token
     * @param integer $StreamId 主码流传0，子码流传1，默认主码流

     * @param string $Env 设备所在环境，公有云私有化项目传0或者不传，混合云项目一般传空间id
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

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("ApplicationToken",$param) and $param["ApplicationToken"] !== null) {
            $this->ApplicationToken = $param["ApplicationToken"];
        }

        if (array_key_exists("StreamId",$param) and $param["StreamId"] !== null) {
            $this->StreamId = $param["StreamId"];
        }

        if (array_key_exists("Env",$param) and $param["Env"] !== null) {
            $this->Env = $param["Env"];
        }
    }
}
