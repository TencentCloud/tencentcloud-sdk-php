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
 * ControlHomePosition请求参数结构体
 *
 * @method string getChannelId() 获取通道ID
 * @method void setChannelId(string $ChannelId) 设置通道ID
 * @method string getDeviceId() 获取设备Id
 * @method void setDeviceId(string $DeviceId) 设置设备Id
 * @method integer getEnable() 获取看守位使能 0-停用看守位 1-启用看守位
 * @method void setEnable(integer $Enable) 设置看守位使能 0-停用看守位 1-启用看守位
 * @method integer getPresetId() 获取预置位编码 范围1-8，启用看守位时必填
 * @method void setPresetId(integer $PresetId) 设置预置位编码 范围1-8，启用看守位时必填
 * @method integer getResetTime() 获取看守位自动归位时间， 启用看守位时必填
 * @method void setResetTime(integer $ResetTime) 设置看守位自动归位时间， 启用看守位时必填
 */
class ControlHomePositionRequest extends AbstractModel
{
    /**
     * @var string 通道ID
     */
    public $ChannelId;

    /**
     * @var string 设备Id
     */
    public $DeviceId;

    /**
     * @var integer 看守位使能 0-停用看守位 1-启用看守位
     */
    public $Enable;

    /**
     * @var integer 预置位编码 范围1-8，启用看守位时必填
     */
    public $PresetId;

    /**
     * @var integer 看守位自动归位时间， 启用看守位时必填
     */
    public $ResetTime;

    /**
     * @param string $ChannelId 通道ID
     * @param string $DeviceId 设备Id
     * @param integer $Enable 看守位使能 0-停用看守位 1-启用看守位
     * @param integer $PresetId 预置位编码 范围1-8，启用看守位时必填
     * @param integer $ResetTime 看守位自动归位时间， 启用看守位时必填
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

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("PresetId",$param) and $param["PresetId"] !== null) {
            $this->PresetId = $param["PresetId"];
        }

        if (array_key_exists("ResetTime",$param) and $param["ResetTime"] !== null) {
            $this->ResetTime = $param["ResetTime"];
        }
    }
}
