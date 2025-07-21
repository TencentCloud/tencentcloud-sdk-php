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
namespace TencentCloud\Ctsdb\V20230202\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例规格信息(influxdb)
 *
 * @method integer getPayMode() 获取1：包年包月、2：按小时计费
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayMode(integer $PayMode) 设置1：包年包月、2：按小时计费
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRequestUnit() 获取请求单元，为0则表示走资源配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestUnit(integer $RequestUnit) 设置请求单元，为0则表示走资源配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getCpuLimit() 获取CPU 核数最大限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpuLimit(float $CpuLimit) 设置CPU 核数最大限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getMemoryLimit() 获取内存 最大限制(Gi)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemoryLimit(float $MemoryLimit) 设置内存 最大限制(Gi)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDiskLimit() 获取磁盘 最大限制(Gi)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskLimit(integer $DiskLimit) 设置磁盘 最大限制(Gi)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getShards() 获取业务分片数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShards(integer $Shards) 设置业务分片数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReplicas() 获取业务节点数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplicas(integer $Replicas) 设置业务节点数
注意：此字段可能返回 null，表示取不到有效值。
 */
class Spec extends AbstractModel
{
    /**
     * @var integer 1：包年包月、2：按小时计费
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayMode;

    /**
     * @var integer 请求单元，为0则表示走资源配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestUnit;

    /**
     * @var float CPU 核数最大限制
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CpuLimit;

    /**
     * @var float 内存 最大限制(Gi)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemoryLimit;

    /**
     * @var integer 磁盘 最大限制(Gi)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskLimit;

    /**
     * @var integer 业务分片数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Shards;

    /**
     * @var integer 业务节点数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Replicas;

    /**
     * @param integer $PayMode 1：包年包月、2：按小时计费
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RequestUnit 请求单元，为0则表示走资源配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $CpuLimit CPU 核数最大限制
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $MemoryLimit 内存 最大限制(Gi)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DiskLimit 磁盘 最大限制(Gi)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Shards 业务分片数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Replicas 业务节点数
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
        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("RequestUnit",$param) and $param["RequestUnit"] !== null) {
            $this->RequestUnit = $param["RequestUnit"];
        }

        if (array_key_exists("CpuLimit",$param) and $param["CpuLimit"] !== null) {
            $this->CpuLimit = $param["CpuLimit"];
        }

        if (array_key_exists("MemoryLimit",$param) and $param["MemoryLimit"] !== null) {
            $this->MemoryLimit = $param["MemoryLimit"];
        }

        if (array_key_exists("DiskLimit",$param) and $param["DiskLimit"] !== null) {
            $this->DiskLimit = $param["DiskLimit"];
        }

        if (array_key_exists("Shards",$param) and $param["Shards"] !== null) {
            $this->Shards = $param["Shards"];
        }

        if (array_key_exists("Replicas",$param) and $param["Replicas"] !== null) {
            $this->Replicas = $param["Replicas"];
        }
    }
}
