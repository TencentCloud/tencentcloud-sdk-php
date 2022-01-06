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
 * ModifyPreset请求参数结构体
 *
 * @method string getChannelId() 获取通道ID
 * @method void setChannelId(string $ChannelId) 设置通道ID
 * @method integer getPresetId() 获取预置位编码 范围1-8
 * @method void setPresetId(integer $PresetId) 设置预置位编码 范围1-8
 * @method string getPresetName() 获取预制位名称
 * @method void setPresetName(string $PresetName) 设置预制位名称
 * @method string getDeviceId() 获取设备Id
 * @method void setDeviceId(string $DeviceId) 设置设备Id
 */
class ModifyPresetRequest extends AbstractModel
{
    /**
     * @var string 通道ID
     */
    public $ChannelId;

    /**
     * @var integer 预置位编码 范围1-8
     */
    public $PresetId;

    /**
     * @var string 预制位名称
     */
    public $PresetName;

    /**
     * @var string 设备Id
     */
    public $DeviceId;

    /**
     * @param string $ChannelId 通道ID
     * @param integer $PresetId 预置位编码 范围1-8
     * @param string $PresetName 预制位名称
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

        if (array_key_exists("PresetId",$param) and $param["PresetId"] !== null) {
            $this->PresetId = $param["PresetId"];
        }

        if (array_key_exists("PresetName",$param) and $param["PresetName"] !== null) {
            $this->PresetName = $param["PresetName"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }
    }
}
