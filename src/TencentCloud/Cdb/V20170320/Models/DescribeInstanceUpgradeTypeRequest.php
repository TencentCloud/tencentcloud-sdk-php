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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceUpgradeType请求参数结构体
 *
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method float getDstCpu() 获取目标实例cpu
 * @method void setDstCpu(float $DstCpu) 设置目标实例cpu
 * @method integer getDstMemory() 获取目标实例内存
 * @method void setDstMemory(integer $DstMemory) 设置目标实例内存
 * @method integer getDstDisk() 获取目标实例磁盘
 * @method void setDstDisk(integer $DstDisk) 设置目标实例磁盘
 * @method string getDstVersion() 获取目标实例版本
 * @method void setDstVersion(string $DstVersion) 设置目标实例版本
 * @method integer getDstDeployMode() 获取目标实例部署模型
 * @method void setDstDeployMode(integer $DstDeployMode) 设置目标实例部署模型
 * @method integer getDstProtectMode() 获取目标实例复制类型
 * @method void setDstProtectMode(integer $DstProtectMode) 设置目标实例复制类型
 * @method integer getDstSlaveZone() 获取目标实例备机1可用区
 * @method void setDstSlaveZone(integer $DstSlaveZone) 设置目标实例备机1可用区
 * @method integer getDstBackupZone() 获取目标实例备机2可用区
 * @method void setDstBackupZone(integer $DstBackupZone) 设置目标实例备机2可用区
 * @method string getDstCdbType() 获取目标实例类型
 * @method void setDstCdbType(string $DstCdbType) 设置目标实例类型
 * @method integer getDstZoneId() 获取目标实例主可用区
 * @method void setDstZoneId(integer $DstZoneId) 设置目标实例主可用区
 * @method NodeDistribution getNodeDistribution() 获取独享集群CDB实例的节点分布情况
 * @method void setNodeDistribution(NodeDistribution $NodeDistribution) 设置独享集群CDB实例的节点分布情况
 * @method ClusterTopology getClusterTopology() 获取集群版的节点拓扑配置
 * @method void setClusterTopology(ClusterTopology $ClusterTopology) 设置集群版的节点拓扑配置
 */
class DescribeInstanceUpgradeTypeRequest extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var float 目标实例cpu
     */
    public $DstCpu;

    /**
     * @var integer 目标实例内存
     */
    public $DstMemory;

    /**
     * @var integer 目标实例磁盘
     */
    public $DstDisk;

    /**
     * @var string 目标实例版本
     */
    public $DstVersion;

    /**
     * @var integer 目标实例部署模型
     */
    public $DstDeployMode;

    /**
     * @var integer 目标实例复制类型
     */
    public $DstProtectMode;

    /**
     * @var integer 目标实例备机1可用区
     */
    public $DstSlaveZone;

    /**
     * @var integer 目标实例备机2可用区
     */
    public $DstBackupZone;

    /**
     * @var string 目标实例类型
     */
    public $DstCdbType;

    /**
     * @var integer 目标实例主可用区
     */
    public $DstZoneId;

    /**
     * @var NodeDistribution 独享集群CDB实例的节点分布情况
     */
    public $NodeDistribution;

    /**
     * @var ClusterTopology 集群版的节点拓扑配置
     */
    public $ClusterTopology;

    /**
     * @param string $InstanceId 实例id
     * @param float $DstCpu 目标实例cpu
     * @param integer $DstMemory 目标实例内存
     * @param integer $DstDisk 目标实例磁盘
     * @param string $DstVersion 目标实例版本
     * @param integer $DstDeployMode 目标实例部署模型
     * @param integer $DstProtectMode 目标实例复制类型
     * @param integer $DstSlaveZone 目标实例备机1可用区
     * @param integer $DstBackupZone 目标实例备机2可用区
     * @param string $DstCdbType 目标实例类型
     * @param integer $DstZoneId 目标实例主可用区
     * @param NodeDistribution $NodeDistribution 独享集群CDB实例的节点分布情况
     * @param ClusterTopology $ClusterTopology 集群版的节点拓扑配置
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
