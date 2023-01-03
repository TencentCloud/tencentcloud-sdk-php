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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例可售卖规格详细信息，创建实例时Cpu/Memory确定实例规格，存储可选大小为[MinStorageSize,MaxStorageSize]
 *
 * @method integer getCpu() 获取实例CPU，单位：核
 * @method void setCpu(integer $Cpu) 设置实例CPU，单位：核
 * @method integer getMemory() 获取实例内存，单位：GB
 * @method void setMemory(integer $Memory) 设置实例内存，单位：GB
 * @method integer getMaxStorageSize() 获取实例最大可用存储，单位：GB
 * @method void setMaxStorageSize(integer $MaxStorageSize) 设置实例最大可用存储，单位：GB
 * @method integer getMinStorageSize() 获取实例最小可用存储，单位：GB
 * @method void setMinStorageSize(integer $MinStorageSize) 设置实例最小可用存储，单位：GB
 * @method boolean getHasStock() 获取是否有库存
 * @method void setHasStock(boolean $HasStock) 设置是否有库存
 * @method string getMachineType() 获取机器类型
 * @method void setMachineType(string $MachineType) 设置机器类型
 * @method integer getMaxIops() 获取最大IOPS
 * @method void setMaxIops(integer $MaxIops) 设置最大IOPS
 * @method integer getMaxIoBandWidth() 获取最大IO带宽
 * @method void setMaxIoBandWidth(integer $MaxIoBandWidth) 设置最大IO带宽
 * @method array getZoneStockInfos() 获取地域库存信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneStockInfos(array $ZoneStockInfos) 设置地域库存信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStockCount() 获取库存数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStockCount(integer $StockCount) 设置库存数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceSpec extends AbstractModel
{
    /**
     * @var integer 实例CPU，单位：核
     */
    public $Cpu;

    /**
     * @var integer 实例内存，单位：GB
     */
    public $Memory;

    /**
     * @var integer 实例最大可用存储，单位：GB
     */
    public $MaxStorageSize;

    /**
     * @var integer 实例最小可用存储，单位：GB
     */
    public $MinStorageSize;

    /**
     * @var boolean 是否有库存
     */
    public $HasStock;

    /**
     * @var string 机器类型
     */
    public $MachineType;

    /**
     * @var integer 最大IOPS
     */
    public $MaxIops;

    /**
     * @var integer 最大IO带宽
     */
    public $MaxIoBandWidth;

    /**
     * @var array 地域库存信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneStockInfos;

    /**
     * @var integer 库存数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StockCount;

    /**
     * @param integer $Cpu 实例CPU，单位：核
     * @param integer $Memory 实例内存，单位：GB
     * @param integer $MaxStorageSize 实例最大可用存储，单位：GB
     * @param integer $MinStorageSize 实例最小可用存储，单位：GB
     * @param boolean $HasStock 是否有库存
     * @param string $MachineType 机器类型
     * @param integer $MaxIops 最大IOPS
     * @param integer $MaxIoBandWidth 最大IO带宽
     * @param array $ZoneStockInfos 地域库存信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StockCount 库存数量
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

        if (array_key_exists("MaxStorageSize",$param) and $param["MaxStorageSize"] !== null) {
            $this->MaxStorageSize = $param["MaxStorageSize"];
        }

        if (array_key_exists("MinStorageSize",$param) and $param["MinStorageSize"] !== null) {
            $this->MinStorageSize = $param["MinStorageSize"];
        }

        if (array_key_exists("HasStock",$param) and $param["HasStock"] !== null) {
            $this->HasStock = $param["HasStock"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("MaxIops",$param) and $param["MaxIops"] !== null) {
            $this->MaxIops = $param["MaxIops"];
        }

        if (array_key_exists("MaxIoBandWidth",$param) and $param["MaxIoBandWidth"] !== null) {
            $this->MaxIoBandWidth = $param["MaxIoBandWidth"];
        }

        if (array_key_exists("ZoneStockInfos",$param) and $param["ZoneStockInfos"] !== null) {
            $this->ZoneStockInfos = [];
            foreach ($param["ZoneStockInfos"] as $key => $value){
                $obj = new ZoneStockInfo();
                $obj->deserialize($value);
                array_push($this->ZoneStockInfos, $obj);
            }
        }

        if (array_key_exists("StockCount",$param) and $param["StockCount"] !== null) {
            $this->StockCount = $param["StockCount"];
        }
    }
}
