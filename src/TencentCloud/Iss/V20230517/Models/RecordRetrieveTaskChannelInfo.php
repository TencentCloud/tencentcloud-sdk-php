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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 取回任务通道信息
 *
 * @method string getDeviceId() 获取设备通道所属的设备ID
 * @method void setDeviceId(string $DeviceId) 设置设备通道所属的设备ID
 * @method string getDeviceName() 获取设备通道所属的设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备通道所属的设备名称
 * @method string getChannelId() 获取设备通道ID
 * @method void setChannelId(string $ChannelId) 设置设备通道ID
 * @method string getChannelName() 获取设备通道名称 
 * @method void setChannelName(string $ChannelName) 设置设备通道名称 
 * @method integer getStatus() 获取任务状态，0:已取回，1:取回中，2:待取回, 3:无归档录像
 * @method void setStatus(integer $Status) 设置任务状态，0:已取回，1:取回中，2:待取回, 3:无归档录像
 */
class RecordRetrieveTaskChannelInfo extends AbstractModel
{
    /**
     * @var string 设备通道所属的设备ID
     */
    public $DeviceId;

    /**
     * @var string 设备通道所属的设备名称
     */
    public $DeviceName;

    /**
     * @var string 设备通道ID
     */
    public $ChannelId;

    /**
     * @var string 设备通道名称 
     */
    public $ChannelName;

    /**
     * @var integer 任务状态，0:已取回，1:取回中，2:待取回, 3:无归档录像
     */
    public $Status;

    /**
     * @param string $DeviceId 设备通道所属的设备ID
     * @param string $DeviceName 设备通道所属的设备名称
     * @param string $ChannelId 设备通道ID
     * @param string $ChannelName 设备通道名称 
     * @param integer $Status 任务状态，0:已取回，1:取回中，2:待取回, 3:无归档录像
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
        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
