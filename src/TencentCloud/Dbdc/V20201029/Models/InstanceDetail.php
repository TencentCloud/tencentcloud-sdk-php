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
 * 集群容量信息。
 *
 * @method integer getStatus() 获取集群状态，0：运行中，1：不在运行
 * @method void setStatus(integer $Status) 设置集群状态，0：运行中，1：不在运行
 * @method float getReadWriteTotalLeaveMemory() 获取读写集群剩余内存容量，单位GB
 * @method void setReadWriteTotalLeaveMemory(float $ReadWriteTotalLeaveMemory) 设置读写集群剩余内存容量，单位GB
 * @method float getReadWriteTotalLeaveDisk() 获取读写集群剩余磁盘容量，单位GB
 * @method void setReadWriteTotalLeaveDisk(float $ReadWriteTotalLeaveDisk) 设置读写集群剩余磁盘容量，单位GB
 * @method float getReadWriteTotalMemory() 获取读写集群总内存容量，单位GB
 * @method void setReadWriteTotalMemory(float $ReadWriteTotalMemory) 设置读写集群总内存容量，单位GB
 * @method float getReadWriteTotalDisk() 获取读写集群总磁盘容量，单位GB
 * @method void setReadWriteTotalDisk(float $ReadWriteTotalDisk) 设置读写集群总磁盘容量，单位GB
 * @method float getReadOnlyTotalLeaveMemory() 获取只读集群剩余内存容量，单位GB
 * @method void setReadOnlyTotalLeaveMemory(float $ReadOnlyTotalLeaveMemory) 设置只读集群剩余内存容量，单位GB
 * @method float getReadOnlyTotalLeaveDisk() 获取只读集群剩余磁盘容量，单位GB
 * @method void setReadOnlyTotalLeaveDisk(float $ReadOnlyTotalLeaveDisk) 设置只读集群剩余磁盘容量，单位GB
 * @method float getReadOnlyTotalMemory() 获取只读集群总内存容量，单位GB
 * @method void setReadOnlyTotalMemory(float $ReadOnlyTotalMemory) 设置只读集群总内存容量，单位GB
 * @method float getReadOnlyTotalDisk() 获取只读集群总磁盘容量，单位GB
 * @method void setReadOnlyTotalDisk(float $ReadOnlyTotalDisk) 设置只读集群总磁盘容量，单位GB
 * @method array getInstanceDeviceInfos() 获取集群设备详情
 * @method void setInstanceDeviceInfos(array $InstanceDeviceInfos) 设置集群设备详情
 */
class InstanceDetail extends AbstractModel
{
    /**
     * @var integer 集群状态，0：运行中，1：不在运行
     */
    public $Status;

    /**
     * @var float 读写集群剩余内存容量，单位GB
     */
    public $ReadWriteTotalLeaveMemory;

    /**
     * @var float 读写集群剩余磁盘容量，单位GB
     */
    public $ReadWriteTotalLeaveDisk;

    /**
     * @var float 读写集群总内存容量，单位GB
     */
    public $ReadWriteTotalMemory;

    /**
     * @var float 读写集群总磁盘容量，单位GB
     */
    public $ReadWriteTotalDisk;

    /**
     * @var float 只读集群剩余内存容量，单位GB
     */
    public $ReadOnlyTotalLeaveMemory;

    /**
     * @var float 只读集群剩余磁盘容量，单位GB
     */
    public $ReadOnlyTotalLeaveDisk;

    /**
     * @var float 只读集群总内存容量，单位GB
     */
    public $ReadOnlyTotalMemory;

    /**
     * @var float 只读集群总磁盘容量，单位GB
     */
    public $ReadOnlyTotalDisk;

    /**
     * @var array 集群设备详情
     */
    public $InstanceDeviceInfos;

    /**
     * @param integer $Status 集群状态，0：运行中，1：不在运行
     * @param float $ReadWriteTotalLeaveMemory 读写集群剩余内存容量，单位GB
     * @param float $ReadWriteTotalLeaveDisk 读写集群剩余磁盘容量，单位GB
     * @param float $ReadWriteTotalMemory 读写集群总内存容量，单位GB
     * @param float $ReadWriteTotalDisk 读写集群总磁盘容量，单位GB
     * @param float $ReadOnlyTotalLeaveMemory 只读集群剩余内存容量，单位GB
     * @param float $ReadOnlyTotalLeaveDisk 只读集群剩余磁盘容量，单位GB
     * @param float $ReadOnlyTotalMemory 只读集群总内存容量，单位GB
     * @param float $ReadOnlyTotalDisk 只读集群总磁盘容量，单位GB
     * @param array $InstanceDeviceInfos 集群设备详情
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ReadWriteTotalLeaveMemory",$param) and $param["ReadWriteTotalLeaveMemory"] !== null) {
            $this->ReadWriteTotalLeaveMemory = $param["ReadWriteTotalLeaveMemory"];
        }

        if (array_key_exists("ReadWriteTotalLeaveDisk",$param) and $param["ReadWriteTotalLeaveDisk"] !== null) {
            $this->ReadWriteTotalLeaveDisk = $param["ReadWriteTotalLeaveDisk"];
        }

        if (array_key_exists("ReadWriteTotalMemory",$param) and $param["ReadWriteTotalMemory"] !== null) {
            $this->ReadWriteTotalMemory = $param["ReadWriteTotalMemory"];
        }

        if (array_key_exists("ReadWriteTotalDisk",$param) and $param["ReadWriteTotalDisk"] !== null) {
            $this->ReadWriteTotalDisk = $param["ReadWriteTotalDisk"];
        }

        if (array_key_exists("ReadOnlyTotalLeaveMemory",$param) and $param["ReadOnlyTotalLeaveMemory"] !== null) {
            $this->ReadOnlyTotalLeaveMemory = $param["ReadOnlyTotalLeaveMemory"];
        }

        if (array_key_exists("ReadOnlyTotalLeaveDisk",$param) and $param["ReadOnlyTotalLeaveDisk"] !== null) {
            $this->ReadOnlyTotalLeaveDisk = $param["ReadOnlyTotalLeaveDisk"];
        }

        if (array_key_exists("ReadOnlyTotalMemory",$param) and $param["ReadOnlyTotalMemory"] !== null) {
            $this->ReadOnlyTotalMemory = $param["ReadOnlyTotalMemory"];
        }

        if (array_key_exists("ReadOnlyTotalDisk",$param) and $param["ReadOnlyTotalDisk"] !== null) {
            $this->ReadOnlyTotalDisk = $param["ReadOnlyTotalDisk"];
        }

        if (array_key_exists("InstanceDeviceInfos",$param) and $param["InstanceDeviceInfos"] !== null) {
            $this->InstanceDeviceInfos = [];
            foreach ($param["InstanceDeviceInfos"] as $key => $value){
                $obj = new InstanceDeviceInfo();
                $obj->deserialize($value);
                array_push($this->InstanceDeviceInfos, $obj);
            }
        }
    }
}
