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
namespace TencentCloud\Iot\V20180123\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设备
 *
 * @method string getProductId() 获取产品Id
 * @method void setProductId(string $ProductId) 设置产品Id
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getDeviceSecret() 获取设备密钥
 * @method void setDeviceSecret(string $DeviceSecret) 设置设备密钥
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getDeviceInfo() 获取设备信息（json）
 * @method void setDeviceInfo(string $DeviceInfo) 设置设备信息（json）
 */
class Device extends AbstractModel
{
    /**
     * @var string 产品Id
     */
    public $ProductId;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string 设备密钥
     */
    public $DeviceSecret;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 设备信息（json）
     */
    public $DeviceInfo;

    /**
     * @param string $ProductId 产品Id
     * @param string $DeviceName 设备名称
     * @param string $DeviceSecret 设备密钥
     * @param string $UpdateTime 更新时间
     * @param string $CreateTime 创建时间
     * @param string $DeviceInfo 设备信息（json）
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
        if (array_key_exists('ProductId',$param) and $param['ProductId'] !== null) {
            $this->ProductId = $param['ProductId'];
        }

        if (array_key_exists('DeviceName',$param) and $param['DeviceName'] !== null) {
            $this->DeviceName = $param['DeviceName'];
        }

        if (array_key_exists('DeviceSecret',$param) and $param['DeviceSecret'] !== null) {
            $this->DeviceSecret = $param['DeviceSecret'];
        }

        if (array_key_exists('UpdateTime',$param) and $param['UpdateTime'] !== null) {
            $this->UpdateTime = $param['UpdateTime'];
        }

        if (array_key_exists('CreateTime',$param) and $param['CreateTime'] !== null) {
            $this->CreateTime = $param['CreateTime'];
        }

        if (array_key_exists('DeviceInfo',$param) and $param['DeviceInfo'] !== null) {
            $this->DeviceInfo = $param['DeviceInfo'];
        }
    }
}
