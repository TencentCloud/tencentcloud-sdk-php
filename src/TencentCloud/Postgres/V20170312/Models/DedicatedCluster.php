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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 专属集群相关信息，用于查询用户的专属集群列表
 *
 * @method string getDedicatedClusterId() 获取专属集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDedicatedClusterId(string $DedicatedClusterId) 设置专属集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取专属集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置专属集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZone() 获取专属集群所在可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZone(string $Zone) 设置专属集群所在可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getStandbyDedicatedClusterSet() 获取灾备集群
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStandbyDedicatedClusterSet(array $StandbyDedicatedClusterSet) 设置灾备集群
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstanceCount() 获取实例数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceCount(integer $InstanceCount) 设置实例数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCpuTotal() 获取Cpu总量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpuTotal(integer $CpuTotal) 设置Cpu总量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCpuAvailable() 获取Cpu可用数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpuAvailable(integer $CpuAvailable) 设置Cpu可用数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMemTotal() 获取内存总量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemTotal(integer $MemTotal) 设置内存总量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMemAvailable() 获取内存可用量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemAvailable(integer $MemAvailable) 设置内存可用量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDiskTotal() 获取磁盘总量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskTotal(integer $DiskTotal) 设置磁盘总量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDiskAvailable() 获取磁盘可用量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskAvailable(integer $DiskAvailable) 设置磁盘可用量
注意：此字段可能返回 null，表示取不到有效值。
 */
class DedicatedCluster extends AbstractModel
{
    /**
     * @var string 专属集群ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DedicatedClusterId;

    /**
     * @var string 专属集群名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 专属集群所在可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Zone;

    /**
     * @var array 灾备集群
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StandbyDedicatedClusterSet;

    /**
     * @var integer 实例数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceCount;

    /**
     * @var integer Cpu总量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CpuTotal;

    /**
     * @var integer Cpu可用数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CpuAvailable;

    /**
     * @var integer 内存总量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemTotal;

    /**
     * @var integer 内存可用量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemAvailable;

    /**
     * @var integer 磁盘总量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskTotal;

    /**
     * @var integer 磁盘可用量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskAvailable;

    /**
     * @param string $DedicatedClusterId 专属集群ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 专属集群名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Zone 专属集群所在可用区
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $StandbyDedicatedClusterSet 灾备集群
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstanceCount 实例数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CpuTotal Cpu总量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CpuAvailable Cpu可用数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MemTotal 内存总量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MemAvailable 内存可用量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DiskTotal 磁盘总量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DiskAvailable 磁盘可用量
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("DedicatedClusterId",$param) and $param["DedicatedClusterId"] !== null) {
            $this->DedicatedClusterId = $param["DedicatedClusterId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("StandbyDedicatedClusterSet",$param) and $param["StandbyDedicatedClusterSet"] !== null) {
            $this->StandbyDedicatedClusterSet = $param["StandbyDedicatedClusterSet"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("CpuTotal",$param) and $param["CpuTotal"] !== null) {
            $this->CpuTotal = $param["CpuTotal"];
        }

        if (array_key_exists("CpuAvailable",$param) and $param["CpuAvailable"] !== null) {
            $this->CpuAvailable = $param["CpuAvailable"];
        }

        if (array_key_exists("MemTotal",$param) and $param["MemTotal"] !== null) {
            $this->MemTotal = $param["MemTotal"];
        }

        if (array_key_exists("MemAvailable",$param) and $param["MemAvailable"] !== null) {
            $this->MemAvailable = $param["MemAvailable"];
        }

        if (array_key_exists("DiskTotal",$param) and $param["DiskTotal"] !== null) {
            $this->DiskTotal = $param["DiskTotal"];
        }

        if (array_key_exists("DiskAvailable",$param) and $param["DiskAvailable"] !== null) {
            $this->DiskAvailable = $param["DiskAvailable"];
        }
    }
}
