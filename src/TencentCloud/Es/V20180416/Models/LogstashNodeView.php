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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Logstash节点维度视图数据
 *
 * @method string getNodeId() 获取节点ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeId(string $NodeId) 设置节点ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeIp() 获取节点IP	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeIp(string $NodeIp) 设置节点IP	
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeHttpIp() 获取节点HTTP IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeHttpIp(string $NodeHttpIp) 设置节点HTTP IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZone() 获取可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZone(string $Zone) 设置可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDiskSize() 获取节点总磁盘大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskSize(integer $DiskSize) 设置节点总磁盘大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getDiskUsage() 获取磁盘使用率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskUsage(float $DiskUsage) 设置磁盘使用率
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMemSize() 获取节点内存大小，单位GB
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemSize(integer $MemSize) 设置节点内存大小，单位GB
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getMemUsage() 获取内存使用率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemUsage(float $MemUsage) 设置内存使用率
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getJvmMemUsage() 获取JVM内存使用率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJvmMemUsage(float $JvmMemUsage) 设置JVM内存使用率
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCpuNum() 获取节点cpu个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpuNum(integer $CpuNum) 设置节点cpu个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getCpuUsage() 获取cpu使用率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpuUsage(float $CpuUsage) 设置cpu使用率
注意：此字段可能返回 null，表示取不到有效值。
 */
class LogstashNodeView extends AbstractModel
{
    /**
     * @var string 节点ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeId;

    /**
     * @var string 节点IP	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeIp;

    /**
     * @var string 节点HTTP IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeHttpIp;

    /**
     * @var string 可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Zone;

    /**
     * @var integer 节点总磁盘大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskSize;

    /**
     * @var float 磁盘使用率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskUsage;

    /**
     * @var integer 节点内存大小，单位GB
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemSize;

    /**
     * @var float 内存使用率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemUsage;

    /**
     * @var float JVM内存使用率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JvmMemUsage;

    /**
     * @var integer 节点cpu个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CpuNum;

    /**
     * @var float cpu使用率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CpuUsage;

    /**
     * @param string $NodeId 节点ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeIp 节点IP	
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeHttpIp 节点HTTP IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Zone 可用区
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DiskSize 节点总磁盘大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $DiskUsage 磁盘使用率
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MemSize 节点内存大小，单位GB
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $MemUsage 内存使用率
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $JvmMemUsage JVM内存使用率
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CpuNum 节点cpu个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $CpuUsage cpu使用率
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
        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("NodeIp",$param) and $param["NodeIp"] !== null) {
            $this->NodeIp = $param["NodeIp"];
        }

        if (array_key_exists("NodeHttpIp",$param) and $param["NodeHttpIp"] !== null) {
            $this->NodeHttpIp = $param["NodeHttpIp"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("DiskUsage",$param) and $param["DiskUsage"] !== null) {
            $this->DiskUsage = $param["DiskUsage"];
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("MemUsage",$param) and $param["MemUsage"] !== null) {
            $this->MemUsage = $param["MemUsage"];
        }

        if (array_key_exists("JvmMemUsage",$param) and $param["JvmMemUsage"] !== null) {
            $this->JvmMemUsage = $param["JvmMemUsage"];
        }

        if (array_key_exists("CpuNum",$param) and $param["CpuNum"] !== null) {
            $this->CpuNum = $param["CpuNum"];
        }

        if (array_key_exists("CpuUsage",$param) and $param["CpuUsage"] !== null) {
            $this->CpuUsage = $param["CpuUsage"];
        }
    }
}
