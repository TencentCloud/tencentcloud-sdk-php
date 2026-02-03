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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 该地域实例规格信息
 *
 * @method integer getCpu() 获取cpu核数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpu(integer $Cpu) 设置cpu核数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMemory() 获取内存大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemory(integer $Memory) 设置内存大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMinStorageSize() 获取最小存储大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMinStorageSize(integer $MinStorageSize) 设置最小存储大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxStorageSize() 获取最大存储大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxStorageSize(integer $MaxStorageSize) 设置最大存储大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getHasStock() 获取是否有库存
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHasStock(boolean $HasStock) 设置是否有库存
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceType() 获取实例类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceType(string $InstanceType) 设置实例类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStorageType() 获取存储类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageType(string $StorageType) 设置存储类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMinReplicaNum() 获取最小副本数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMinReplicaNum(integer $MinReplicaNum) 设置最小副本数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxReplicaNum() 获取最大副本数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxReplicaNum(integer $MaxReplicaNum) 设置最大副本数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getZoneStockInfos() 获取可用区库存信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneStockInfos(array $ZoneStockInfos) 设置可用区库存信息列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class RegionInstanceSpecInfo extends AbstractModel
{
    /**
     * @var integer cpu核数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cpu;

    /**
     * @var integer 内存大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Memory;

    /**
     * @var integer 最小存储大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MinStorageSize;

    /**
     * @var integer 最大存储大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxStorageSize;

    /**
     * @var boolean 是否有库存
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HasStock;

    /**
     * @var string 实例类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceType;

    /**
     * @var string 存储类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageType;

    /**
     * @var integer 最小副本数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MinReplicaNum;

    /**
     * @var integer 最大副本数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxReplicaNum;

    /**
     * @var array 可用区库存信息列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneStockInfos;

    /**
     * @param integer $Cpu cpu核数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Memory 内存大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MinStorageSize 最小存储大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxStorageSize 最大存储大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $HasStock 是否有库存
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceType 实例类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StorageType 存储类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MinReplicaNum 最小副本数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxReplicaNum 最大副本数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ZoneStockInfos 可用区库存信息列表
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
        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("MinStorageSize",$param) and $param["MinStorageSize"] !== null) {
            $this->MinStorageSize = $param["MinStorageSize"];
        }

        if (array_key_exists("MaxStorageSize",$param) and $param["MaxStorageSize"] !== null) {
            $this->MaxStorageSize = $param["MaxStorageSize"];
        }

        if (array_key_exists("HasStock",$param) and $param["HasStock"] !== null) {
            $this->HasStock = $param["HasStock"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("MinReplicaNum",$param) and $param["MinReplicaNum"] !== null) {
            $this->MinReplicaNum = $param["MinReplicaNum"];
        }

        if (array_key_exists("MaxReplicaNum",$param) and $param["MaxReplicaNum"] !== null) {
            $this->MaxReplicaNum = $param["MaxReplicaNum"];
        }

        if (array_key_exists("ZoneStockInfos",$param) and $param["ZoneStockInfos"] !== null) {
            $this->ZoneStockInfos = [];
            foreach ($param["ZoneStockInfos"] as $key => $value){
                $obj = new ZoneStockInfo4Libra();
                $obj->deserialize($value);
                array_push($this->ZoneStockInfos, $obj);
            }
        }
    }
}
