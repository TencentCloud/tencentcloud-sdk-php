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
 * DescribeInstanceUpgradeType请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
 * @method float getDstCpu() 获取目标实例 CPU 的核数。为保证传入值有效，请使用 [DescribeCdbZoneConfig](https://cloud.tencent.com/document/product/236/80281) 获取实例可售卖的 CPU 值范围。
 * @method void setDstCpu(float $DstCpu) 设置目标实例 CPU 的核数。为保证传入值有效，请使用 [DescribeCdbZoneConfig](https://cloud.tencent.com/document/product/236/80281) 获取实例可售卖的 CPU 值范围。
 * @method integer getDstMemory() 获取目标实例内存大小，单位：MB。为保证传入值有效，请使用 [DescribeCdbZoneConfig](https://cloud.tencent.com/document/product/236/80281) 获取实例可售卖的内存大小范围。
 * @method void setDstMemory(integer $DstMemory) 设置目标实例内存大小，单位：MB。为保证传入值有效，请使用 [DescribeCdbZoneConfig](https://cloud.tencent.com/document/product/236/80281) 获取实例可售卖的内存大小范围。
 * @method integer getDstDisk() 获取目标实例磁盘大小，单位：GB。为保证传入值有效，请使用 [DescribeCdbZoneConfig](https://cloud.tencent.com/document/product/236/80281) 获取实例可售卖的磁盘大小范围。
 * @method void setDstDisk(integer $DstDisk) 设置目标实例磁盘大小，单位：GB。为保证传入值有效，请使用 [DescribeCdbZoneConfig](https://cloud.tencent.com/document/product/236/80281) 获取实例可售卖的磁盘大小范围。
 * @method string getDstVersion() 获取目标实例数据库版本。可选值：5.6，5.7，8.0。
 * @method void setDstVersion(string $DstVersion) 设置目标实例数据库版本。可选值：5.6，5.7，8.0。
 * @method integer getDstDeployMode() 获取目标实例部署模型。默认为0，支持值包括：0 - 表示单可用区，1 - 表示多可用区。
 * @method void setDstDeployMode(integer $DstDeployMode) 设置目标实例部署模型。默认为0，支持值包括：0 - 表示单可用区，1 - 表示多可用区。
 * @method integer getDstProtectMode() 获取目标实例复制类型，支持值包括：0 - 表示异步复制，1 - 表示半同步复制，2 - 表示强同步复制。
 * @method void setDstProtectMode(integer $DstProtectMode) 设置目标实例复制类型，支持值包括：0 - 表示异步复制，1 - 表示半同步复制，2 - 表示强同步复制。
 * @method integer getDstSlaveZone() 获取目标实例备机1可用区 ID。可使用 [DescribeCdbZoneConfig](https://cloud.tencent.com/document/product/236/80281) 获取可用区 ID。
 * @method void setDstSlaveZone(integer $DstSlaveZone) 设置目标实例备机1可用区 ID。可使用 [DescribeCdbZoneConfig](https://cloud.tencent.com/document/product/236/80281) 获取可用区 ID。
 * @method integer getDstBackupZone() 获取目标实例备机2可用区 ID。可使用 [DescribeCdbZoneConfig](https://cloud.tencent.com/document/product/236/80281) 获取可用区 ID。
 * @method void setDstBackupZone(integer $DstBackupZone) 设置目标实例备机2可用区 ID。可使用 [DescribeCdbZoneConfig](https://cloud.tencent.com/document/product/236/80281) 获取可用区 ID。
 * @method string getDstCdbType() 获取目标实例类型。支持值包括："CUSTOM" - 通用型实例，"EXCLUSIVE" - 独享型实例，"ONTKE" - ONTKE 单节点实例，"CLOUD_NATIVE_CLUSTER" - 云盘版标准型，"CLOUD_NATIVE_CLUSTER_EXCLUSIVE" - 云盘版加强型。
 * @method void setDstCdbType(string $DstCdbType) 设置目标实例类型。支持值包括："CUSTOM" - 通用型实例，"EXCLUSIVE" - 独享型实例，"ONTKE" - ONTKE 单节点实例，"CLOUD_NATIVE_CLUSTER" - 云盘版标准型，"CLOUD_NATIVE_CLUSTER_EXCLUSIVE" - 云盘版加强型。
 * @method integer getDstZoneId() 获取目标实例主可用区 ID。可使用 [DescribeCdbZoneConfig](https://cloud.tencent.com/document/product/236/80281) 获取可用区 ID。
 * @method void setDstZoneId(integer $DstZoneId) 设置目标实例主可用区 ID。可使用 [DescribeCdbZoneConfig](https://cloud.tencent.com/document/product/236/80281) 获取可用区 ID。
 * @method NodeDistribution getNodeDistribution() 获取独享集群 CDB 实例的节点分布情况。
 * @method void setNodeDistribution(NodeDistribution $NodeDistribution) 设置独享集群 CDB 实例的节点分布情况。
 * @method ClusterTopology getClusterTopology() 获取集群版的节点拓扑配置。Nodeld信息可通过 [DescribeClusterInfo](https://cloud.tencent.com/document/api/236/105116) 接口获取。
 * @method void setClusterTopology(ClusterTopology $ClusterTopology) 设置集群版的节点拓扑配置。Nodeld信息可通过 [DescribeClusterInfo](https://cloud.tencent.com/document/api/236/105116) 接口获取。
 */
class DescribeInstanceUpgradeTypeRequest extends AbstractModel
{
    /**
     * @var string 实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
     */
    public $InstanceId;

    /**
     * @var float 目标实例 CPU 的核数。为保证传入值有效，请使用 [DescribeCdbZoneConfig](https://cloud.tencent.com/document/product/236/80281) 获取实例可售卖的 CPU 值范围。
     */
    public $DstCpu;

    /**
     * @var integer 目标实例内存大小，单位：MB。为保证传入值有效，请使用 [DescribeCdbZoneConfig](https://cloud.tencent.com/document/product/236/80281) 获取实例可售卖的内存大小范围。
     */
    public $DstMemory;

    /**
     * @var integer 目标实例磁盘大小，单位：GB。为保证传入值有效，请使用 [DescribeCdbZoneConfig](https://cloud.tencent.com/document/product/236/80281) 获取实例可售卖的磁盘大小范围。
     */
    public $DstDisk;

    /**
     * @var string 目标实例数据库版本。可选值：5.6，5.7，8.0。
     */
    public $DstVersion;

    /**
     * @var integer 目标实例部署模型。默认为0，支持值包括：0 - 表示单可用区，1 - 表示多可用区。
     */
    public $DstDeployMode;

    /**
     * @var integer 目标实例复制类型，支持值包括：0 - 表示异步复制，1 - 表示半同步复制，2 - 表示强同步复制。
     */
    public $DstProtectMode;

    /**
     * @var integer 目标实例备机1可用区 ID。可使用 [DescribeCdbZoneConfig](https://cloud.tencent.com/document/product/236/80281) 获取可用区 ID。
     */
    public $DstSlaveZone;

    /**
     * @var integer 目标实例备机2可用区 ID。可使用 [DescribeCdbZoneConfig](https://cloud.tencent.com/document/product/236/80281) 获取可用区 ID。
     */
    public $DstBackupZone;

    /**
     * @var string 目标实例类型。支持值包括："CUSTOM" - 通用型实例，"EXCLUSIVE" - 独享型实例，"ONTKE" - ONTKE 单节点实例，"CLOUD_NATIVE_CLUSTER" - 云盘版标准型，"CLOUD_NATIVE_CLUSTER_EXCLUSIVE" - 云盘版加强型。
     */
    public $DstCdbType;

    /**
     * @var integer 目标实例主可用区 ID。可使用 [DescribeCdbZoneConfig](https://cloud.tencent.com/document/product/236/80281) 获取可用区 ID。
     */
    public $DstZoneId;

    /**
     * @var NodeDistribution 独享集群 CDB 实例的节点分布情况。
     */
    public $NodeDistribution;

    /**
     * @var ClusterTopology 集群版的节点拓扑配置。Nodeld信息可通过 [DescribeClusterInfo](https://cloud.tencent.com/document/api/236/105116) 接口获取。
     */
    public $ClusterTopology;

    /**
     * @param string $InstanceId 实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
     * @param float $DstCpu 目标实例 CPU 的核数。为保证传入值有效，请使用 [DescribeCdbZoneConfig](https://cloud.tencent.com/document/product/236/80281) 获取实例可售卖的 CPU 值范围。
     * @param integer $DstMemory 目标实例内存大小，单位：MB。为保证传入值有效，请使用 [DescribeCdbZoneConfig](https://cloud.tencent.com/document/product/236/80281) 获取实例可售卖的内存大小范围。
     * @param integer $DstDisk 目标实例磁盘大小，单位：GB。为保证传入值有效，请使用 [DescribeCdbZoneConfig](https://cloud.tencent.com/document/product/236/80281) 获取实例可售卖的磁盘大小范围。
     * @param string $DstVersion 目标实例数据库版本。可选值：5.6，5.7，8.0。
     * @param integer $DstDeployMode 目标实例部署模型。默认为0，支持值包括：0 - 表示单可用区，1 - 表示多可用区。
     * @param integer $DstProtectMode 目标实例复制类型，支持值包括：0 - 表示异步复制，1 - 表示半同步复制，2 - 表示强同步复制。
     * @param integer $DstSlaveZone 目标实例备机1可用区 ID。可使用 [DescribeCdbZoneConfig](https://cloud.tencent.com/document/product/236/80281) 获取可用区 ID。
     * @param integer $DstBackupZone 目标实例备机2可用区 ID。可使用 [DescribeCdbZoneConfig](https://cloud.tencent.com/document/product/236/80281) 获取可用区 ID。
     * @param string $DstCdbType 目标实例类型。支持值包括："CUSTOM" - 通用型实例，"EXCLUSIVE" - 独享型实例，"ONTKE" - ONTKE 单节点实例，"CLOUD_NATIVE_CLUSTER" - 云盘版标准型，"CLOUD_NATIVE_CLUSTER_EXCLUSIVE" - 云盘版加强型。
     * @param integer $DstZoneId 目标实例主可用区 ID。可使用 [DescribeCdbZoneConfig](https://cloud.tencent.com/document/product/236/80281) 获取可用区 ID。
     * @param NodeDistribution $NodeDistribution 独享集群 CDB 实例的节点分布情况。
     * @param ClusterTopology $ClusterTopology 集群版的节点拓扑配置。Nodeld信息可通过 [DescribeClusterInfo](https://cloud.tencent.com/document/api/236/105116) 接口获取。
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

        if (array_key_exists("DstCpu",$param) and $param["DstCpu"] !== null) {
            $this->DstCpu = $param["DstCpu"];
        }

        if (array_key_exists("DstMemory",$param) and $param["DstMemory"] !== null) {
            $this->DstMemory = $param["DstMemory"];
        }

        if (array_key_exists("DstDisk",$param) and $param["DstDisk"] !== null) {
            $this->DstDisk = $param["DstDisk"];
        }

        if (array_key_exists("DstVersion",$param) and $param["DstVersion"] !== null) {
            $this->DstVersion = $param["DstVersion"];
        }

        if (array_key_exists("DstDeployMode",$param) and $param["DstDeployMode"] !== null) {
            $this->DstDeployMode = $param["DstDeployMode"];
        }

        if (array_key_exists("DstProtectMode",$param) and $param["DstProtectMode"] !== null) {
            $this->DstProtectMode = $param["DstProtectMode"];
        }

        if (array_key_exists("DstSlaveZone",$param) and $param["DstSlaveZone"] !== null) {
            $this->DstSlaveZone = $param["DstSlaveZone"];
        }

        if (array_key_exists("DstBackupZone",$param) and $param["DstBackupZone"] !== null) {
            $this->DstBackupZone = $param["DstBackupZone"];
        }

        if (array_key_exists("DstCdbType",$param) and $param["DstCdbType"] !== null) {
            $this->DstCdbType = $param["DstCdbType"];
        }

        if (array_key_exists("DstZoneId",$param) and $param["DstZoneId"] !== null) {
            $this->DstZoneId = $param["DstZoneId"];
        }

        if (array_key_exists("NodeDistribution",$param) and $param["NodeDistribution"] !== null) {
            $this->NodeDistribution = new NodeDistribution();
            $this->NodeDistribution->deserialize($param["NodeDistribution"]);
        }

        if (array_key_exists("ClusterTopology",$param) and $param["ClusterTopology"] !== null) {
            $this->ClusterTopology = new ClusterTopology();
            $this->ClusterTopology->deserialize($param["ClusterTopology"]);
        }
    }
}
