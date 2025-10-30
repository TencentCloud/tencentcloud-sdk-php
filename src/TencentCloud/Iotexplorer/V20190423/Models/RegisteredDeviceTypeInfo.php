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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 已注册设备类型信息
 *
 * @method integer getNormalDeviceNum() 获取已注册设备数
 * @method void setNormalDeviceNum(integer $NormalDeviceNum) 设置已注册设备数
 * @method integer getGatewayDeviceNum() 获取已注册网关数
 * @method void setGatewayDeviceNum(integer $GatewayDeviceNum) 设置已注册网关数
 * @method integer getSubDeviceNum() 获取已注册子设备数
 * @method void setSubDeviceNum(integer $SubDeviceNum) 设置已注册子设备数
 * @method integer getVideoDeviceNum() 获取已注册视频设备数
 * @method void setVideoDeviceNum(integer $VideoDeviceNum) 设置已注册视频设备数
 */
class RegisteredDeviceTypeInfo extends AbstractModel
{
    /**
     * @var integer 已注册设备数
     */
    public $NormalDeviceNum;

    /**
     * @var integer 已注册网关数
     */
    public $GatewayDeviceNum;

    /**
     * @var integer 已注册子设备数
     */
    public $SubDeviceNum;

    /**
     * @var integer 已注册视频设备数
     */
    public $VideoDeviceNum;

    /**
     * @param integer $NormalDeviceNum 已注册设备数
     * @param integer $GatewayDeviceNum 已注册网关数
     * @param integer $SubDeviceNum 已注册子设备数
     * @param integer $VideoDeviceNum 已注册视频设备数
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
        if (array_key_exists("NormalDeviceNum",$param) and $param["NormalDeviceNum"] !== null) {
            $this->NormalDeviceNum = $param["NormalDeviceNum"];
        }

        if (array_key_exists("GatewayDeviceNum",$param) and $param["GatewayDeviceNum"] !== null) {
            $this->GatewayDeviceNum = $param["GatewayDeviceNum"];
        }

        if (array_key_exists("SubDeviceNum",$param) and $param["SubDeviceNum"] !== null) {
            $this->SubDeviceNum = $param["SubDeviceNum"];
        }

        if (array_key_exists("VideoDeviceNum",$param) and $param["VideoDeviceNum"] !== null) {
            $this->VideoDeviceNum = $param["VideoDeviceNum"];
        }
    }
}
