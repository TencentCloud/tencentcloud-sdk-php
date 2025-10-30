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
 * CheckMigrateCluster请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
 * @method integer getCpu() 获取实例 CPU 核数。当 InstanceId 为主实例时必传。
 * @method void setCpu(integer $Cpu) 设置实例 CPU 核数。当 InstanceId 为主实例时必传。
 * @method integer getMemory() 获取实例内存大小，单位：MB。当 InstanceId 为主实例时必传。
 * @method void setMemory(integer $Memory) 设置实例内存大小，单位：MB。当 InstanceId 为主实例时必传。
 * @method integer getVolume() 获取实例硬盘大小，单位：GB。
 * @method void setVolume(integer $Volume) 设置实例硬盘大小，单位：GB。
 * @method string getDiskType() 获取磁盘类型。 CLOUD_SSD: SSD 云硬盘; CLOUD_HSSD: 增强型 SSD 云硬盘。
 * @method void setDiskType(string $DiskType) 设置磁盘类型。 CLOUD_SSD: SSD 云硬盘; CLOUD_HSSD: 增强型 SSD 云硬盘。
 * @method ClusterTopology getClusterTopology() 获取云盘版节点拓扑配置。当 InstanceId 为主实例时必传。
 * @method void setClusterTopology(ClusterTopology $ClusterTopology) 设置云盘版节点拓扑配置。当 InstanceId 为主实例时必传。
 * @method string getDeviceType() 获取迁移实例类型。支持值包括： "CLOUD_NATIVE_CLUSTER" - 标准型云盘版实例， "CLOUD_NATIVE_CLUSTER_EXCLUSIVE" - 加强型云盘版实例。
 * @method void setDeviceType(string $DeviceType) 设置迁移实例类型。支持值包括： "CLOUD_NATIVE_CLUSTER" - 标准型云盘版实例， "CLOUD_NATIVE_CLUSTER_EXCLUSIVE" - 加强型云盘版实例。
 * @method array getRoInfo() 获取只读实例信息。
 * @method void setRoInfo(array $RoInfo) 设置只读实例信息。
 */
class CheckMigrateClusterRequest extends AbstractModel
{
    /**
     * @var string 实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
     */
    public $InstanceId;

    /**
     * @var integer 实例 CPU 核数。当 InstanceId 为主实例时必传。
     */
    public $Cpu;

    /**
     * @var integer 实例内存大小，单位：MB。当 InstanceId 为主实例时必传。
     */
    public $Memory;

    /**
     * @var integer 实例硬盘大小，单位：GB。
     */
    public $Volume;

    /**
     * @var string 磁盘类型。 CLOUD_SSD: SSD 云硬盘; CLOUD_HSSD: 增强型 SSD 云硬盘。
     */
    public $DiskType;

    /**
     * @var ClusterTopology 云盘版节点拓扑配置。当 InstanceId 为主实例时必传。
     */
    public $ClusterTopology;

    /**
     * @var string 迁移实例类型。支持值包括： "CLOUD_NATIVE_CLUSTER" - 标准型云盘版实例， "CLOUD_NATIVE_CLUSTER_EXCLUSIVE" - 加强型云盘版实例。
     */
    public $DeviceType;

    /**
     * @var array 只读实例信息。
     */
    public $RoInfo;

    /**
     * @param string $InstanceId 实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
     * @param integer $Cpu 实例 CPU 核数。当 InstanceId 为主实例时必传。
     * @param integer $Memory 实例内存大小，单位：MB。当 InstanceId 为主实例时必传。
     * @param integer $Volume 实例硬盘大小，单位：GB。
     * @param string $DiskType 磁盘类型。 CLOUD_SSD: SSD 云硬盘; CLOUD_HSSD: 增强型 SSD 云硬盘。
     * @param ClusterTopology $ClusterTopology 云盘版节点拓扑配置。当 InstanceId 为主实例时必传。
     * @param string $DeviceType 迁移实例类型。支持值包括： "CLOUD_NATIVE_CLUSTER" - 标准型云盘版实例， "CLOUD_NATIVE_CLUSTER_EXCLUSIVE" - 加强型云盘版实例。
     * @param array $RoInfo 只读实例信息。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
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

        if (array_key_exists("ClusterTopology",$param) and $param["ClusterTopology"] !== null) {
            $this->ClusterTopology = new ClusterTopology();
            $this->ClusterTopology->deserialize($param["ClusterTopology"]);
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("RoInfo",$param) and $param["RoInfo"] !== null) {
            $this->RoInfo = [];
            foreach ($param["RoInfo"] as $key => $value){
                $obj = new MigrateClusterRoInfo();
                $obj->deserialize($value);
                array_push($this->RoInfo, $obj);
            }
        }
    }
}
