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
 * @method string getInstanceId() 获取<p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/product/236/15872">DescribeDBInstances</a> 接口获取。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/product/236/15872">DescribeDBInstances</a> 接口获取。</p>
 * @method float getDstCpu() 获取<p>目标实例 CPU 的核数。为保证传入值有效，请使用 <a href="https://cloud.tencent.com/document/product/236/80281">DescribeCdbZoneConfig</a> 获取实例可售卖的 CPU 值范围。</p>
 * @method void setDstCpu(float $DstCpu) 设置<p>目标实例 CPU 的核数。为保证传入值有效，请使用 <a href="https://cloud.tencent.com/document/product/236/80281">DescribeCdbZoneConfig</a> 获取实例可售卖的 CPU 值范围。</p>
 * @method integer getDstMemory() 获取<p>目标实例内存大小，单位：MB。为保证传入值有效，请使用 <a href="https://cloud.tencent.com/document/product/236/80281">DescribeCdbZoneConfig</a> 获取实例可售卖的内存大小范围。</p>
 * @method void setDstMemory(integer $DstMemory) 设置<p>目标实例内存大小，单位：MB。为保证传入值有效，请使用 <a href="https://cloud.tencent.com/document/product/236/80281">DescribeCdbZoneConfig</a> 获取实例可售卖的内存大小范围。</p>
 * @method integer getDstDisk() 获取<p>目标实例磁盘大小，单位：GB。为保证传入值有效，请使用 <a href="https://cloud.tencent.com/document/product/236/80281">DescribeCdbZoneConfig</a> 获取实例可售卖的磁盘大小范围。</p>
 * @method void setDstDisk(integer $DstDisk) 设置<p>目标实例磁盘大小，单位：GB。为保证传入值有效，请使用 <a href="https://cloud.tencent.com/document/product/236/80281">DescribeCdbZoneConfig</a> 获取实例可售卖的磁盘大小范围。</p>
 * @method string getDstVersion() 获取<p>目标实例数据库版本。可选值：5.6，5.7，8.0。</p>
 * @method void setDstVersion(string $DstVersion) 设置<p>目标实例数据库版本。可选值：5.6，5.7，8.0。</p>
 * @method integer getDstDeployMode() 获取<p>目标实例部署模型。默认为0，支持值包括：0 - 表示单可用区，1 - 表示多可用区。</p>
 * @method void setDstDeployMode(integer $DstDeployMode) 设置<p>目标实例部署模型。默认为0，支持值包括：0 - 表示单可用区，1 - 表示多可用区。</p>
 * @method integer getDstProtectMode() 获取<p>目标实例复制类型，支持值包括：0 - 表示异步复制，1 - 表示半同步复制，2 - 表示强同步复制。</p>
 * @method void setDstProtectMode(integer $DstProtectMode) 设置<p>目标实例复制类型，支持值包括：0 - 表示异步复制，1 - 表示半同步复制，2 - 表示强同步复制。</p>
 * @method integer getDstSlaveZone() 获取<p>目标实例备机1可用区 ID。可使用 <a href="https://cloud.tencent.com/document/product/236/80281">DescribeCdbZoneConfig</a> 获取可用区 ID。</p>
 * @method void setDstSlaveZone(integer $DstSlaveZone) 设置<p>目标实例备机1可用区 ID。可使用 <a href="https://cloud.tencent.com/document/product/236/80281">DescribeCdbZoneConfig</a> 获取可用区 ID。</p>
 * @method integer getDstBackupZone() 获取<p>目标实例备机2可用区 ID。可使用 <a href="https://cloud.tencent.com/document/product/236/80281">DescribeCdbZoneConfig</a> 获取可用区 ID。</p>
 * @method void setDstBackupZone(integer $DstBackupZone) 设置<p>目标实例备机2可用区 ID。可使用 <a href="https://cloud.tencent.com/document/product/236/80281">DescribeCdbZoneConfig</a> 获取可用区 ID。</p>
 * @method string getDstCdbType() 获取<p>目标实例类型。支持值包括：&quot;CUSTOM&quot; - 通用型实例，&quot;EXCLUSIVE&quot; - 独享型实例，&quot;ONTKE&quot; - ONTKE 单节点实例，&quot;CLOUD_NATIVE_CLUSTER&quot; - 云盘版标准型，&quot;CLOUD_NATIVE_CLUSTER_EXCLUSIVE&quot; - 云盘版加强型。</p>
 * @method void setDstCdbType(string $DstCdbType) 设置<p>目标实例类型。支持值包括：&quot;CUSTOM&quot; - 通用型实例，&quot;EXCLUSIVE&quot; - 独享型实例，&quot;ONTKE&quot; - ONTKE 单节点实例，&quot;CLOUD_NATIVE_CLUSTER&quot; - 云盘版标准型，&quot;CLOUD_NATIVE_CLUSTER_EXCLUSIVE&quot; - 云盘版加强型。</p>
 * @method integer getDstZoneId() 获取<p>目标实例主可用区 ID。可使用 <a href="https://cloud.tencent.com/document/product/236/80281">DescribeCdbZoneConfig</a> 获取可用区 ID。</p>
 * @method void setDstZoneId(integer $DstZoneId) 设置<p>目标实例主可用区 ID。可使用 <a href="https://cloud.tencent.com/document/product/236/80281">DescribeCdbZoneConfig</a> 获取可用区 ID。</p>
 * @method NodeDistribution getNodeDistribution() 获取<p>独享集群 CDB 实例的节点分布情况。</p>
 * @method void setNodeDistribution(NodeDistribution $NodeDistribution) 设置<p>独享集群 CDB 实例的节点分布情况。</p>
 * @method ClusterTopology getClusterTopology() 获取<p>云盘版的节点拓扑配置。Nodeld 信息可通过 <a href="https://cloud.tencent.com/document/api/236/105116">DescribeClusterInfo</a> 接口获取。</p>
 * @method void setClusterTopology(ClusterTopology $ClusterTopology) 设置<p>云盘版的节点拓扑配置。Nodeld 信息可通过 <a href="https://cloud.tencent.com/document/api/236/105116">DescribeClusterInfo</a> 接口获取。</p>
 */
class DescribeInstanceUpgradeTypeRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/product/236/15872">DescribeDBInstances</a> 接口获取。</p>
     */
    public $InstanceId;

    /**
     * @var float <p>目标实例 CPU 的核数。为保证传入值有效，请使用 <a href="https://cloud.tencent.com/document/product/236/80281">DescribeCdbZoneConfig</a> 获取实例可售卖的 CPU 值范围。</p>
     */
    public $DstCpu;

    /**
     * @var integer <p>目标实例内存大小，单位：MB。为保证传入值有效，请使用 <a href="https://cloud.tencent.com/document/product/236/80281">DescribeCdbZoneConfig</a> 获取实例可售卖的内存大小范围。</p>
     */
    public $DstMemory;

    /**
     * @var integer <p>目标实例磁盘大小，单位：GB。为保证传入值有效，请使用 <a href="https://cloud.tencent.com/document/product/236/80281">DescribeCdbZoneConfig</a> 获取实例可售卖的磁盘大小范围。</p>
     */
    public $DstDisk;

    /**
     * @var string <p>目标实例数据库版本。可选值：5.6，5.7，8.0。</p>
     */
    public $DstVersion;

    /**
     * @var integer <p>目标实例部署模型。默认为0，支持值包括：0 - 表示单可用区，1 - 表示多可用区。</p>
     */
    public $DstDeployMode;

    /**
     * @var integer <p>目标实例复制类型，支持值包括：0 - 表示异步复制，1 - 表示半同步复制，2 - 表示强同步复制。</p>
     */
    public $DstProtectMode;

    /**
     * @var integer <p>目标实例备机1可用区 ID。可使用 <a href="https://cloud.tencent.com/document/product/236/80281">DescribeCdbZoneConfig</a> 获取可用区 ID。</p>
     */
    public $DstSlaveZone;

    /**
     * @var integer <p>目标实例备机2可用区 ID。可使用 <a href="https://cloud.tencent.com/document/product/236/80281">DescribeCdbZoneConfig</a> 获取可用区 ID。</p>
     */
    public $DstBackupZone;

    /**
     * @var string <p>目标实例类型。支持值包括：&quot;CUSTOM&quot; - 通用型实例，&quot;EXCLUSIVE&quot; - 独享型实例，&quot;ONTKE&quot; - ONTKE 单节点实例，&quot;CLOUD_NATIVE_CLUSTER&quot; - 云盘版标准型，&quot;CLOUD_NATIVE_CLUSTER_EXCLUSIVE&quot; - 云盘版加强型。</p>
     */
    public $DstCdbType;

    /**
     * @var integer <p>目标实例主可用区 ID。可使用 <a href="https://cloud.tencent.com/document/product/236/80281">DescribeCdbZoneConfig</a> 获取可用区 ID。</p>
     */
    public $DstZoneId;

    /**
     * @var NodeDistribution <p>独享集群 CDB 实例的节点分布情况。</p>
     */
    public $NodeDistribution;

    /**
     * @var ClusterTopology <p>云盘版的节点拓扑配置。Nodeld 信息可通过 <a href="https://cloud.tencent.com/document/api/236/105116">DescribeClusterInfo</a> 接口获取。</p>
     */
    public $ClusterTopology;

    /**
     * @param string $InstanceId <p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/product/236/15872">DescribeDBInstances</a> 接口获取。</p>
     * @param float $DstCpu <p>目标实例 CPU 的核数。为保证传入值有效，请使用 <a href="https://cloud.tencent.com/document/product/236/80281">DescribeCdbZoneConfig</a> 获取实例可售卖的 CPU 值范围。</p>
     * @param integer $DstMemory <p>目标实例内存大小，单位：MB。为保证传入值有效，请使用 <a href="https://cloud.tencent.com/document/product/236/80281">DescribeCdbZoneConfig</a> 获取实例可售卖的内存大小范围。</p>
     * @param integer $DstDisk <p>目标实例磁盘大小，单位：GB。为保证传入值有效，请使用 <a href="https://cloud.tencent.com/document/product/236/80281">DescribeCdbZoneConfig</a> 获取实例可售卖的磁盘大小范围。</p>
     * @param string $DstVersion <p>目标实例数据库版本。可选值：5.6，5.7，8.0。</p>
     * @param integer $DstDeployMode <p>目标实例部署模型。默认为0，支持值包括：0 - 表示单可用区，1 - 表示多可用区。</p>
     * @param integer $DstProtectMode <p>目标实例复制类型，支持值包括：0 - 表示异步复制，1 - 表示半同步复制，2 - 表示强同步复制。</p>
     * @param integer $DstSlaveZone <p>目标实例备机1可用区 ID。可使用 <a href="https://cloud.tencent.com/document/product/236/80281">DescribeCdbZoneConfig</a> 获取可用区 ID。</p>
     * @param integer $DstBackupZone <p>目标实例备机2可用区 ID。可使用 <a href="https://cloud.tencent.com/document/product/236/80281">DescribeCdbZoneConfig</a> 获取可用区 ID。</p>
     * @param string $DstCdbType <p>目标实例类型。支持值包括：&quot;CUSTOM&quot; - 通用型实例，&quot;EXCLUSIVE&quot; - 独享型实例，&quot;ONTKE&quot; - ONTKE 单节点实例，&quot;CLOUD_NATIVE_CLUSTER&quot; - 云盘版标准型，&quot;CLOUD_NATIVE_CLUSTER_EXCLUSIVE&quot; - 云盘版加强型。</p>
     * @param integer $DstZoneId <p>目标实例主可用区 ID。可使用 <a href="https://cloud.tencent.com/document/product/236/80281">DescribeCdbZoneConfig</a> 获取可用区 ID。</p>
     * @param NodeDistribution $NodeDistribution <p>独享集群 CDB 实例的节点分布情况。</p>
     * @param ClusterTopology $ClusterTopology <p>云盘版的节点拓扑配置。Nodeld 信息可通过 <a href="https://cloud.tencent.com/document/api/236/105116">DescribeClusterInfo</a> 接口获取。</p>
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
