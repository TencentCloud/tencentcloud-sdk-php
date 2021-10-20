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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 价格信息
 *
 * @method InstancePrice getInstancePrice() 获取实例价格。
 * @method void setInstancePrice(InstancePrice $InstancePrice) 设置实例价格。
 * @method array getDataDiskPrices() 获取数据盘价格。
 * @method void setDataDiskPrices(array $DataDiskPrices) 设置数据盘价格。
 */
class Price extends AbstractModel
{
    /**
     * @var InstancePrice 实例价格。
     */
    public $InstancePrice;

    /**
     * @var array 数据盘价格。
     */
    public $DataDiskPrices;

    /**
     * @param InstancePrice $InstancePrice 实例价格。
     * @param array $DataDiskPrices 数据盘价格。
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
        if (array_key_exists("InstancePrice",$param) and $param["InstancePrice"] !== null) {
            $this->InstancePrice = new InstancePrice();
            $this->InstancePrice->deserialize($param["InstancePrice"]);
        }

        if (array_key_exists("DataDiskPrices",$param) and $param["DataDiskPrices"] !== null) {
            $this->DataDiskPrices = [];
            foreach ($param["DataDiskPrices"] as $key => $value){
                $obj = new DataDiskPrice();
                $obj->deserialize($value);
                array_push($this->DataDiskPrices, $obj);
            }
        }
    }
}
