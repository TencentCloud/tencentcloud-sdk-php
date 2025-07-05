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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 一键迁移集群版只读实例信息
 *
 * @method string getRoInstanceId() 获取只读实例名称
 * @method void setRoInstanceId(string $RoInstanceId) 设置只读实例名称
 * @method integer getCpu() 获取只读实例CPU核数
 * @method void setCpu(integer $Cpu) 设置只读实例CPU核数
 * @method integer getMemory() 获取只读实例内存大小，单位：MB
 * @method void setMemory(integer $Memory) 设置只读实例内存大小，单位：MB
 * @method integer getVolume() 获取只读实例硬盘大小，单位：GB
 * @method void setVolume(integer $Volume) 设置只读实例硬盘大小，单位：GB
 * @method string getDiskType() 获取磁盘类型。 CLOUD_SSD: SSD云硬盘; CLOUD_HSSD: 增强型SSD云硬盘
 * @method void setDiskType(string $DiskType) 设置磁盘类型。 CLOUD_SSD: SSD云硬盘; CLOUD_HSSD: 增强型SSD云硬盘
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method string getDeviceType() 获取迁移实例类型。支持值包括： "CLOUD_NATIVE_CLUSTER" - 标准型集群版实例， "CLOUD_NATIVE_CLUSTER_EXCLUSIVE" - 加强型集群版实例。
 * @method void setDeviceType(string $DeviceType) 设置迁移实例类型。支持值包括： "CLOUD_NATIVE_CLUSTER" - 标准型集群版实例， "CLOUD_NATIVE_CLUSTER_EXCLUSIVE" - 加强型集群版实例。
 * @method string getRoGroupId() 获取只读实例所在ro组，例：cdbrg-xxx
 * @method void setRoGroupId(string $RoGroupId) 设置只读实例所在ro组，例：cdbrg-xxx
 * @method array getSrcAlarmPolicyList() 获取实例当前告警策略id数组
 * @method void setSrcAlarmPolicyList(array $SrcAlarmPolicyList) 设置实例当前告警策略id数组
 */
class MigrateClusterRoInfo extends AbstractModel
{
    /**
     * @var string 只读实例名称
     */
    public $RoInstanceId;

    /**
     * @var integer 只读实例CPU核数
     */
    public $Cpu;

    /**
     * @var integer 只读实例内存大小，单位：MB
     */
    public $Memory;

    /**
     * @var integer 只读实例硬盘大小，单位：GB
     */
    public $Volume;

    /**
     * @var string 磁盘类型。 CLOUD_SSD: SSD云硬盘; CLOUD_HSSD: 增强型SSD云硬盘
     */
    public $DiskType;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var string 迁移实例类型。支持值包括： "CLOUD_NATIVE_CLUSTER" - 标准型集群版实例， "CLOUD_NATIVE_CLUSTER_EXCLUSIVE" - 加强型集群版实例。
     */
    public $DeviceType;

    /**
     * @var string 只读实例所在ro组，例：cdbrg-xxx
     */
    public $RoGroupId;

    /**
     * @var array 实例当前告警策略id数组
     */
    public $SrcAlarmPolicyList;

    /**
     * @param string $RoInstanceId 只读实例名称
     * @param integer $Cpu 只读实例CPU核数
     * @param integer $Memory 只读实例内存大小，单位：MB
     * @param integer $Volume 只读实例硬盘大小，单位：GB
     * @param string $DiskType 磁盘类型。 CLOUD_SSD: SSD云硬盘; CLOUD_HSSD: 增强型SSD云硬盘
     * @param string $Zone 可用区
     * @param string $DeviceType 迁移实例类型。支持值包括： "CLOUD_NATIVE_CLUSTER" - 标准型集群版实例， "CLOUD_NATIVE_CLUSTER_EXCLUSIVE" - 加强型集群版实例。
     * @param string $RoGroupId 只读实例所在ro组，例：cdbrg-xxx
     * @param array $SrcAlarmPolicyList 实例当前告警策略id数组
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
        if (array_key_exists("RoInstanceId",$param) and $param["RoInstanceId"] !== null) {
            $this->RoInstanceId = $param["RoInstanceId"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("RoGroupId",$param) and $param["RoGroupId"] !== null) {
            $this->RoGroupId = $param["RoGroupId"];
        }

        if (array_key_exists("SrcAlarmPolicyList",$param) and $param["SrcAlarmPolicyList"] !== null) {
            $this->SrcAlarmPolicyList = $param["SrcAlarmPolicyList"];
        }
    }
}
