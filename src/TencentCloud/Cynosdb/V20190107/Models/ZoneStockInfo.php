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
 * 可用区库存信息
 *
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method boolean getHasStock() 获取是否有库存
 * @method void setHasStock(boolean $HasStock) 设置是否有库存
 * @method integer getStockCount() 获取库存数量
 * @method void setStockCount(integer $StockCount) 设置库存数量
 * @method array getSlaveZoneStockInfos() 获取备可用区库存信息
 * @method void setSlaveZoneStockInfos(array $SlaveZoneStockInfos) 设置备可用区库存信息
 */
class ZoneStockInfo extends AbstractModel
{
    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var boolean 是否有库存
     */
    public $HasStock;

    /**
     * @var integer 库存数量
     */
    public $StockCount;

    /**
     * @var array 备可用区库存信息
     */
    public $SlaveZoneStockInfos;

    /**
     * @param string $Zone 可用区
     * @param boolean $HasStock 是否有库存
     * @param integer $StockCount 库存数量
     * @param array $SlaveZoneStockInfos 备可用区库存信息
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("HasStock",$param) and $param["HasStock"] !== null) {
            $this->HasStock = $param["HasStock"];
        }

        if (array_key_exists("StockCount",$param) and $param["StockCount"] !== null) {
            $this->StockCount = $param["StockCount"];
        }

        if (array_key_exists("SlaveZoneStockInfos",$param) and $param["SlaveZoneStockInfos"] !== null) {
            $this->SlaveZoneStockInfos = [];
            foreach ($param["SlaveZoneStockInfos"] as $key => $value){
                $obj = new SlaveZoneStockInfo();
                $obj->deserialize($value);
                array_push($this->SlaveZoneStockInfos, $obj);
            }
        }
    }
}
