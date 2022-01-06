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
 * ControlPreset请求参数结构体
 *
 * @method string getChannelId() 获取通道ID
 * @method void setChannelId(string $ChannelId) 设置通道ID
 * @method string getCommand() 获取控制命令：
Set-设置当前位置为预置位
Del-删除指定的预置位
Call-调用指定的预置位
 * @method void setCommand(string $Command) 设置控制命令：
Set-设置当前位置为预置位
Del-删除指定的预置位
Call-调用指定的预置位
 * @method integer getPresetId() 获取预置位编码 范围1-8
 * @method void setPresetId(integer $PresetId) 设置预置位编码 范围1-8
 * @method string getDeviceId() 获取设备Id
 * @method void setDeviceId(string $DeviceId) 设置设备Id
 */
class ControlPresetRequest extends AbstractModel
{
    /**
     * @var string 通道ID
     */
    public $ChannelId;

    /**
     * @var string 控制命令：
Set-设置当前位置为预置位
Del-删除指定的预置位
Call-调用指定的预置位
     */
    public $Command;

    /**
     * @var integer 预置位编码 范围1-8
     */
    public $PresetId;

    /**
     * @var string 设备Id
     */
    public $DeviceId;

    /**
     * @param string $ChannelId 通道ID
     * @param string $Command 控制命令：
Set-设置当前位置为预置位
Del-删除指定的预置位
Call-调用指定的预置位
     * @param integer $PresetId 预置位编码 范围1-8
     * @param string $DeviceId 设备Id
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
        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("PresetId",$param) and $param["PresetId"] !== null) {
            $this->PresetId = $param["PresetId"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }
    }
}
