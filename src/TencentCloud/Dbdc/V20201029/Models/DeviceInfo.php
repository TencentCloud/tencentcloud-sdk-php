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
namespace TencentCloud\Dbdc\V20201029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设备信息
 *
 * @method integer getDeviceId() 获取设备ID
 * @method void setDeviceId(integer $DeviceId) 设置设备ID
 * @method string getDeviceNo() 获取设备No
 * @method void setDeviceNo(string $DeviceNo) 设置设备No
 * @method string getDevClass() 获取设备类型
 * @method void setDevClass(string $DevClass) 设置设备类型
 * @method float getMaxMemory() 获取设备总内存，单位GB
 * @method void setMaxMemory(float $MaxMemory) 设置设备总内存，单位GB
 * @method float getMaxDisk() 获取设备总磁盘，单位GB
 * @method void setMaxDisk(float $MaxDisk) 设置设备总磁盘，单位GB
 * @method float getRestMemory() 获取设备剩余内存，单位GB
 * @method void setRestMemory(float $RestMemory) 设置设备剩余内存，单位GB
 * @method float getRestDisk() 获取设备剩余磁盘，单位GB
 * @method void setRestDisk(float $RestDisk) 设置设备剩余磁盘，单位GB
 * @method integer getRawDeviceNum() 获取设备机器个数
 * @method void setRawDeviceNum(integer $RawDeviceNum) 设置设备机器个数
 * @method integer getInstanceNum() 获取数据库实例个数
 * @method void setInstanceNum(integer $InstanceNum) 设置数据库实例个数
 */
class DeviceInfo extends AbstractModel
{
    /**
     * @var integer 设备ID
     */
    public $DeviceId;

    /**
     * @var string 设备No
     */
    public $DeviceNo;

    /**
     * @var string 设备类型
     */
    public $DevClass;

    /**
     * @var float 设备总内存，单位GB
     */
    public $MaxMemory;

    /**
     * @var float 设备总磁盘，单位GB
     */
    public $MaxDisk;

    /**
     * @var float 设备剩余内存，单位GB
     */
    public $RestMemory;

    /**
     * @var float 设备剩余磁盘，单位GB
     */
    public $RestDisk;

    /**
     * @var integer 设备机器个数
     */
    public $RawDeviceNum;

    /**
     * @var integer 数据库实例个数
     */
    public $InstanceNum;

    /**
     * @param integer $DeviceId 设备ID
     * @param string $DeviceNo 设备No
     * @param string $DevClass 设备类型
     * @param float $MaxMemory 设备总内存，单位GB
     * @param float $MaxDisk 设备总磁盘，单位GB
     * @param float $RestMemory 设备剩余内存，单位GB
     * @param float $RestDisk 设备剩余磁盘，单位GB
     * @param integer $RawDeviceNum 设备机器个数
     * @param integer $InstanceNum 数据库实例个数
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

        if (array_key_exists("DeviceNo",$param) and $param["DeviceNo"] !== null) {
            $this->DeviceNo = $param["DeviceNo"];
        }

        if (array_key_exists("DevClass",$param) and $param["DevClass"] !== null) {
            $this->DevClass = $param["DevClass"];
        }

        if (array_key_exists("MaxMemory",$param) and $param["MaxMemory"] !== null) {
            $this->MaxMemory = $param["MaxMemory"];
        }

        if (array_key_exists("MaxDisk",$param) and $param["MaxDisk"] !== null) {
            $this->MaxDisk = $param["MaxDisk"];
        }

        if (array_key_exists("RestMemory",$param) and $param["RestMemory"] !== null) {
            $this->RestMemory = $param["RestMemory"];
        }

        if (array_key_exists("RestDisk",$param) and $param["RestDisk"] !== null) {
            $this->RestDisk = $param["RestDisk"];
        }

        if (array_key_exists("RawDeviceNum",$param) and $param["RawDeviceNum"] !== null) {
            $this->RawDeviceNum = $param["RawDeviceNum"];
        }

        if (array_key_exists("InstanceNum",$param) and $param["InstanceNum"] !== null) {
            $this->InstanceNum = $param["InstanceNum"];
        }
    }
}
