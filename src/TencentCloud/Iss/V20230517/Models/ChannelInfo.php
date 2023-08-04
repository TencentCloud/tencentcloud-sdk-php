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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 通道及通道所属设备信息
 *
 * @method string getDeviceId() 获取通道所属的设备ID
 * @method void setDeviceId(string $DeviceId) 设置通道所属的设备ID
 * @method string getChannelId() 获取设备通道ID，一个设备通道只允许被一个上云计划添加
 * @method void setChannelId(string $ChannelId) 设置设备通道ID，一个设备通道只允许被一个上云计划添加
 */
class ChannelInfo extends AbstractModel
{
    /**
     * @var string 通道所属的设备ID
     */
    public $DeviceId;

    /**
     * @var string 设备通道ID，一个设备通道只允许被一个上云计划添加
     */
    public $ChannelId;

    /**
     * @param string $DeviceId 通道所属的设备ID
     * @param string $ChannelId 设备通道ID，一个设备通道只允许被一个上云计划添加
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

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }
    }
}
