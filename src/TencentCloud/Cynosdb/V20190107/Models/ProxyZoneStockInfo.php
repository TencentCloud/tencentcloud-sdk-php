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
 * 数据库代理规格
 *
 * @method string getRegion() 获取<p>地域</p>
 * @method void setRegion(string $Region) 设置<p>地域</p>
 * @method string getZone() 获取<p>可用区</p>
 * @method void setZone(string $Zone) 设置<p>可用区</p>
 * @method integer getCpuStock() 获取<p>CPU库存</p><p>该字段不作为发货是否有资源的判断标准，资源请参考CheckProxyStockInfos</p>
 * @method void setCpuStock(integer $CpuStock) 设置<p>CPU库存</p><p>该字段不作为发货是否有资源的判断标准，资源请参考CheckProxyStockInfos</p>
 * @method integer getMemStock() 获取<p>内存库存</p><p>该字段不作为发货是否有资源的判断标准，资源请参考CheckProxyStockInfos</p>
 * @method void setMemStock(integer $MemStock) 设置<p>内存库存</p><p>该字段不作为发货是否有资源的判断标准，资源请参考CheckProxyStockInfos</p>
 */
class ProxyZoneStockInfo extends AbstractModel
{
    /**
     * @var string <p>地域</p>
     */
    public $Region;

    /**
     * @var string <p>可用区</p>
     */
    public $Zone;

    /**
     * @var integer <p>CPU库存</p><p>该字段不作为发货是否有资源的判断标准，资源请参考CheckProxyStockInfos</p>
     */
    public $CpuStock;

    /**
     * @var integer <p>内存库存</p><p>该字段不作为发货是否有资源的判断标准，资源请参考CheckProxyStockInfos</p>
     */
    public $MemStock;

    /**
     * @param string $Region <p>地域</p>
     * @param string $Zone <p>可用区</p>
     * @param integer $CpuStock <p>CPU库存</p><p>该字段不作为发货是否有资源的判断标准，资源请参考CheckProxyStockInfos</p>
     * @param integer $MemStock <p>内存库存</p><p>该字段不作为发货是否有资源的判断标准，资源请参考CheckProxyStockInfos</p>
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("CpuStock",$param) and $param["CpuStock"] !== null) {
            $this->CpuStock = $param["CpuStock"];
        }

        if (array_key_exists("MemStock",$param) and $param["MemStock"] !== null) {
            $this->MemStock = $param["MemStock"];
        }
    }
}
