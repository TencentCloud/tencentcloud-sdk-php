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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设备位置详情
 *
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method integer getCreateTime() 获取位置信息时间
 * @method void setCreateTime(integer $CreateTime) 设置位置信息时间
 * @method float getLongitude() 获取设备经度信息
 * @method void setLongitude(float $Longitude) 设置设备经度信息
 * @method float getLatitude() 获取设备纬度信息
 * @method void setLatitude(float $Latitude) 设置设备纬度信息
 */
class DevicePositionItem extends AbstractModel
{
    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var integer 位置信息时间
     */
    public $CreateTime;

    /**
     * @var float 设备经度信息
     */
    public $Longitude;

    /**
     * @var float 设备纬度信息
     */
    public $Latitude;

    /**
     * @param string $DeviceName 设备名称
     * @param integer $CreateTime 位置信息时间
     * @param float $Longitude 设备经度信息
     * @param float $Latitude 设备纬度信息
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
        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Longitude",$param) and $param["Longitude"] !== null) {
            $this->Longitude = $param["Longitude"];
        }

        if (array_key_exists("Latitude",$param) and $param["Latitude"] !== null) {
            $this->Latitude = $param["Latitude"];
        }
    }
}
