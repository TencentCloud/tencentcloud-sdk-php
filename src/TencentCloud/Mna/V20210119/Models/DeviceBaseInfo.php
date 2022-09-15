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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设备的基本信息
 *
 * @method string getDeviceId() 获取设备唯一ID
 * @method void setDeviceId(string $DeviceId) 设置设备唯一ID
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getCreateTime() 获取设备创建的时间，单位：ms
 * @method void setCreateTime(string $CreateTime) 设置设备创建的时间，单位：ms
 * @method string getLastTime() 获取设备最后在线时间，单位：ms
 * @method void setLastTime(string $LastTime) 设置设备最后在线时间，单位：ms
 * @method string getRemark() 获取设备的备注
 * @method void setRemark(string $Remark) 设置设备的备注
 */
class DeviceBaseInfo extends AbstractModel
{
    /**
     * @var string 设备唯一ID
     */
    public $DeviceId;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string 设备创建的时间，单位：ms
     */
    public $CreateTime;

    /**
     * @var string 设备最后在线时间，单位：ms
     */
    public $LastTime;

    /**
     * @var string 设备的备注
     */
    public $Remark;

    /**
     * @param string $DeviceId 设备唯一ID
     * @param string $DeviceName 设备名称
     * @param string $CreateTime 设备创建的时间，单位：ms
     * @param string $LastTime 设备最后在线时间，单位：ms
     * @param string $Remark 设备的备注
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("LastTime",$param) and $param["LastTime"] !== null) {
            $this->LastTime = $param["LastTime"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
