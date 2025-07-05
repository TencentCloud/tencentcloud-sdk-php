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
 * 分实例价格
 *
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method ItemPrice getInstancePrice() 获取实例价格详情
 * @method void setInstancePrice(ItemPrice $InstancePrice) 设置实例价格详情
 * @method ItemPrice getCloudDiskPrice() 获取磁盘价格详情
 * @method void setCloudDiskPrice(ItemPrice $CloudDiskPrice) 设置磁盘价格详情
 * @method ItemPrice getInstanceTotalPrice() 获取该实例的总价钱
 * @method void setInstanceTotalPrice(ItemPrice $InstanceTotalPrice) 设置该实例的总价钱
 */
class ItemPriceDetail extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var ItemPrice 实例价格详情
     */
    public $InstancePrice;

    /**
     * @var ItemPrice 磁盘价格详情
     */
    public $CloudDiskPrice;

    /**
     * @var ItemPrice 该实例的总价钱
     */
    public $InstanceTotalPrice;

    /**
     * @param string $InstanceId 实例id
     * @param ItemPrice $InstancePrice 实例价格详情
     * @param ItemPrice $CloudDiskPrice 磁盘价格详情
     * @param ItemPrice $InstanceTotalPrice 该实例的总价钱
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstancePrice",$param) and $param["InstancePrice"] !== null) {
            $this->InstancePrice = new ItemPrice();
            $this->InstancePrice->deserialize($param["InstancePrice"]);
        }

        if (array_key_exists("CloudDiskPrice",$param) and $param["CloudDiskPrice"] !== null) {
            $this->CloudDiskPrice = new ItemPrice();
            $this->CloudDiskPrice->deserialize($param["CloudDiskPrice"]);
        }

        if (array_key_exists("InstanceTotalPrice",$param) and $param["InstanceTotalPrice"] !== null) {
            $this->InstanceTotalPrice = new ItemPrice();
            $this->InstanceTotalPrice->deserialize($param["InstanceTotalPrice"]);
        }
    }
}
