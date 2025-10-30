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
namespace TencentCloud\Hai\V20230812\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 费用数据结构体
 *
 * @method ItemPrice getInstancePrice() 获取实例价格信息
 * @method void setInstancePrice(ItemPrice $InstancePrice) 设置实例价格信息
 * @method ItemPrice getCloudDiskPrice() 获取云盘价格信息
 * @method void setCloudDiskPrice(ItemPrice $CloudDiskPrice) 设置云盘价格信息
 * @method array getPriceDetailSet() 获取分实例价格
 * @method void setPriceDetailSet(array $PriceDetailSet) 设置分实例价格
 */
class Price extends AbstractModel
{
    /**
     * @var ItemPrice 实例价格信息
     */
    public $InstancePrice;

    /**
     * @var ItemPrice 云盘价格信息
     */
    public $CloudDiskPrice;

    /**
     * @var array 分实例价格
     */
    public $PriceDetailSet;

    /**
     * @param ItemPrice $InstancePrice 实例价格信息
     * @param ItemPrice $CloudDiskPrice 云盘价格信息
     * @param array $PriceDetailSet 分实例价格
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
            $this->InstancePrice = new ItemPrice();
            $this->InstancePrice->deserialize($param["InstancePrice"]);
        }

        if (array_key_exists("CloudDiskPrice",$param) and $param["CloudDiskPrice"] !== null) {
            $this->CloudDiskPrice = new ItemPrice();
            $this->CloudDiskPrice->deserialize($param["CloudDiskPrice"]);
        }

        if (array_key_exists("PriceDetailSet",$param) and $param["PriceDetailSet"] !== null) {
            $this->PriceDetailSet = [];
            foreach ($param["PriceDetailSet"] as $key => $value){
                $obj = new ItemPriceDetail();
                $obj->deserialize($value);
                array_push($this->PriceDetailSet, $obj);
            }
        }
    }
}
