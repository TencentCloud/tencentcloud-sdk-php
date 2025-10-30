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
 * serverless规格
 *
 * @method float getMinCpu() 获取cpu最小值
 * @method void setMinCpu(float $MinCpu) 设置cpu最小值
 * @method float getMaxCpu() 获取cpu最大值
 * @method void setMaxCpu(float $MaxCpu) 设置cpu最大值
 * @method integer getMaxStorageSize() 获取最大存储空间
 * @method void setMaxStorageSize(integer $MaxStorageSize) 设置最大存储空间
 * @method integer getIsDefault() 获取是否为默认规格
 * @method void setIsDefault(integer $IsDefault) 设置是否为默认规格
 * @method boolean getHasStock() 获取是否有库存
 * @method void setHasStock(boolean $HasStock) 设置是否有库存
 * @method integer getStockCount() 获取库存数量
 * @method void setStockCount(integer $StockCount) 设置库存数量
 * @method array getZoneStockInfos() 获取可用区库存信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneStockInfos(array $ZoneStockInfos) 设置可用区库存信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class ServerlessSpec extends AbstractModel
{
    /**
     * @var float cpu最小值
     */
    public $MinCpu;

    /**
     * @var float cpu最大值
     */
    public $MaxCpu;

    /**
     * @var integer 最大存储空间
     */
    public $MaxStorageSize;

    /**
     * @var integer 是否为默认规格
     */
    public $IsDefault;

    /**
     * @var boolean 是否有库存
     */
    public $HasStock;

    /**
     * @var integer 库存数量
     */
    public $StockCount;

    /**
     * @var array 可用区库存信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneStockInfos;

    /**
     * @param float $MinCpu cpu最小值
     * @param float $MaxCpu cpu最大值
     * @param integer $MaxStorageSize 最大存储空间
     * @param integer $IsDefault 是否为默认规格
     * @param boolean $HasStock 是否有库存
     * @param integer $StockCount 库存数量
     * @param array $ZoneStockInfos 可用区库存信息
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
        if (array_key_exists("MinCpu",$param) and $param["MinCpu"] !== null) {
            $this->MinCpu = $param["MinCpu"];
        }

        if (array_key_exists("MaxCpu",$param) and $param["MaxCpu"] !== null) {
            $this->MaxCpu = $param["MaxCpu"];
        }

        if (array_key_exists("MaxStorageSize",$param) and $param["MaxStorageSize"] !== null) {
            $this->MaxStorageSize = $param["MaxStorageSize"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("HasStock",$param) and $param["HasStock"] !== null) {
            $this->HasStock = $param["HasStock"];
        }

        if (array_key_exists("StockCount",$param) and $param["StockCount"] !== null) {
            $this->StockCount = $param["StockCount"];
        }

        if (array_key_exists("ZoneStockInfos",$param) and $param["ZoneStockInfos"] !== null) {
            $this->ZoneStockInfos = [];
            foreach ($param["ZoneStockInfos"] as $key => $value){
                $obj = new ServerlessZoneStockInfo();
                $obj->deserialize($value);
                array_push($this->ZoneStockInfos, $obj);
            }
        }
    }
}
