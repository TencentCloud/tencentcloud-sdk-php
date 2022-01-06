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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCurrentDeviceData返回参数结构体
 *
 * @method integer getChannels() 获取通道数
 * @method void setChannels(integer $Channels) 设置通道数
 * @method integer getDevices() 获取设备数
 * @method void setDevices(integer $Devices) 设置设备数
 * @method integer getOnlineChannels() 获取在线通道数
 * @method void setOnlineChannels(integer $OnlineChannels) 设置在线通道数
 * @method integer getOnlineDevices() 获取在线设备数
 * @method void setOnlineDevices(integer $OnlineDevices) 设置在线设备数
 * @method integer getRecordingChannels() 获取正在录制通道数
 * @method void setRecordingChannels(integer $RecordingChannels) 设置正在录制通道数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCurrentDeviceDataResponse extends AbstractModel
{
    /**
     * @var integer 通道数
     */
    public $Channels;

    /**
     * @var integer 设备数
     */
    public $Devices;

    /**
     * @var integer 在线通道数
     */
    public $OnlineChannels;

    /**
     * @var integer 在线设备数
     */
    public $OnlineDevices;

    /**
     * @var integer 正在录制通道数
     */
    public $RecordingChannels;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Channels 通道数
     * @param integer $Devices 设备数
     * @param integer $OnlineChannels 在线通道数
     * @param integer $OnlineDevices 在线设备数
     * @param integer $RecordingChannels 正在录制通道数
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Channels",$param) and $param["Channels"] !== null) {
            $this->Channels = $param["Channels"];
        }

        if (array_key_exists("Devices",$param) and $param["Devices"] !== null) {
            $this->Devices = $param["Devices"];
        }

        if (array_key_exists("OnlineChannels",$param) and $param["OnlineChannels"] !== null) {
            $this->OnlineChannels = $param["OnlineChannels"];
        }

        if (array_key_exists("OnlineDevices",$param) and $param["OnlineDevices"] !== null) {
            $this->OnlineDevices = $param["OnlineDevices"];
        }

        if (array_key_exists("RecordingChannels",$param) and $param["RecordingChannels"] !== null) {
            $this->RecordingChannels = $param["RecordingChannels"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
