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
 * @method float getMinCpu() 获取<p>cpu最小值</p>
 * @method void setMinCpu(float $MinCpu) 设置<p>cpu最小值</p>
 * @method float getMaxCpu() 获取<p>cpu最大值</p>
 * @method void setMaxCpu(float $MaxCpu) 设置<p>cpu最大值</p>
 * @method integer getMaxStorageSize() 获取<p>最大存储空间</p>
 * @method void setMaxStorageSize(integer $MaxStorageSize) 设置<p>最大存储空间</p>
 * @method integer getIsDefault() 获取<p>是否为默认规格</p>
 * @method void setIsDefault(integer $IsDefault) 设置<p>是否为默认规格</p>
 * @method boolean getHasStock() 获取<p>是否有库存</p>
 * @method void setHasStock(boolean $HasStock) 设置<p>是否有库存</p>
 * @method integer getStockCount() 获取<p>库存数量</p>
 * @method void setStockCount(integer $StockCount) 设置<p>库存数量</p>
 * @method array getZoneStockInfos() 获取<p>可用区库存信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneStockInfos(array $ZoneStockInfos) 设置<p>可用区库存信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ServerlessSpec extends AbstractModel
{
    /**
     * @var float <p>cpu最小值</p>
     */
    public $MinCpu;

    /**
     * @var float <p>cpu最大值</p>
     */
    public $MaxCpu;

    /**
     * @var integer <p>最大存储空间</p>
     */
    public $MaxStorageSize;

    /**
     * @var integer <p>是否为默认规格</p>
     */
    public $IsDefault;

    /**
     * @var boolean <p>是否有库存</p>
     */
    public $HasStock;

    /**
     * @var integer <p>库存数量</p>
     */
    public $StockCount;

    /**
     * @var array <p>可用区库存信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneStockInfos;

    /**
     * @param float $MinCpu <p>cpu最小值</p>
     * @param float $MaxCpu <p>cpu最大值</p>
     * @param integer $MaxStorageSize <p>最大存储空间</p>
     * @param integer $IsDefault <p>是否为默认规格</p>
     * @param boolean $HasStock <p>是否有库存</p>
     * @param integer $StockCount <p>库存数量</p>
     * @param array $ZoneStockInfos <p>可用区库存信息</p>
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
