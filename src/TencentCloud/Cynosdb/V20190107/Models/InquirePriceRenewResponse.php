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
 * InquirePriceRenew返回参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method array getInstanceIds() 获取实例ID列表
 * @method void setInstanceIds(array $InstanceIds) 设置实例ID列表
 * @method array getPrices() 获取对应的询价结果数组
 * @method void setPrices(array $Prices) 设置对应的询价结果数组
 * @method integer getInstanceRealTotalPrice() 获取续费计算节点的总价格
 * @method void setInstanceRealTotalPrice(integer $InstanceRealTotalPrice) 设置续费计算节点的总价格
 * @method integer getStorageRealTotalPrice() 获取续费存储节点的总价格
 * @method void setStorageRealTotalPrice(integer $StorageRealTotalPrice) 设置续费存储节点的总价格
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class InquirePriceRenewResponse extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var array 实例ID列表
     */
    public $InstanceIds;

    /**
     * @var array 对应的询价结果数组
     */
    public $Prices;

    /**
     * @var integer 续费计算节点的总价格
     */
    public $InstanceRealTotalPrice;

    /**
     * @var integer 续费存储节点的总价格
     */
    public $StorageRealTotalPrice;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ClusterId 集群ID
     * @param array $InstanceIds 实例ID列表
     * @param array $Prices 对应的询价结果数组
     * @param integer $InstanceRealTotalPrice 续费计算节点的总价格
     * @param integer $StorageRealTotalPrice 续费存储节点的总价格
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("Prices",$param) and $param["Prices"] !== null) {
            $this->Prices = [];
            foreach ($param["Prices"] as $key => $value){
                $obj = new TradePrice();
                $obj->deserialize($value);
                array_push($this->Prices, $obj);
            }
        }

        if (array_key_exists("InstanceRealTotalPrice",$param) and $param["InstanceRealTotalPrice"] !== null) {
            $this->InstanceRealTotalPrice = $param["InstanceRealTotalPrice"];
        }

        if (array_key_exists("StorageRealTotalPrice",$param) and $param["StorageRealTotalPrice"] !== null) {
            $this->StorageRealTotalPrice = $param["StorageRealTotalPrice"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
