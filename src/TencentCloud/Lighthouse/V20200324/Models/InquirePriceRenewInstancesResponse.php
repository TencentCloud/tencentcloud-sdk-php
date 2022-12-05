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
 * InquirePriceRenewInstances返回参数结构体
 *
 * @method Price getPrice() 获取询价信息。默认为列表中第一个实例的价格信息。
 * @method void setPrice(Price $Price) 设置询价信息。默认为列表中第一个实例的价格信息。
 * @method array getDataDiskPriceSet() 获取数据盘价格信息列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataDiskPriceSet(array $DataDiskPriceSet) 设置数据盘价格信息列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInstancePriceDetailSet() 获取待续费实例价格列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstancePriceDetailSet(array $InstancePriceDetailSet) 设置待续费实例价格列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method TotalPrice getTotalPrice() 获取总计价格。
 * @method void setTotalPrice(TotalPrice $TotalPrice) 设置总计价格。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class InquirePriceRenewInstancesResponse extends AbstractModel
{
    /**
     * @var Price 询价信息。默认为列表中第一个实例的价格信息。
     */
    public $Price;

    /**
     * @var array 数据盘价格信息列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataDiskPriceSet;

    /**
     * @var array 待续费实例价格列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstancePriceDetailSet;

    /**
     * @var TotalPrice 总计价格。
     */
    public $TotalPrice;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param Price $Price 询价信息。默认为列表中第一个实例的价格信息。
     * @param array $DataDiskPriceSet 数据盘价格信息列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $InstancePriceDetailSet 待续费实例价格列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param TotalPrice $TotalPrice 总计价格。
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
        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = new Price();
            $this->Price->deserialize($param["Price"]);
        }

        if (array_key_exists("DataDiskPriceSet",$param) and $param["DataDiskPriceSet"] !== null) {
            $this->DataDiskPriceSet = [];
            foreach ($param["DataDiskPriceSet"] as $key => $value){
                $obj = new DataDiskPrice();
                $obj->deserialize($value);
                array_push($this->DataDiskPriceSet, $obj);
            }
        }

        if (array_key_exists("InstancePriceDetailSet",$param) and $param["InstancePriceDetailSet"] !== null) {
            $this->InstancePriceDetailSet = [];
            foreach ($param["InstancePriceDetailSet"] as $key => $value){
                $obj = new InstancePriceDetail();
                $obj->deserialize($value);
                array_push($this->InstancePriceDetailSet, $obj);
            }
        }

        if (array_key_exists("TotalPrice",$param) and $param["TotalPrice"] !== null) {
            $this->TotalPrice = new TotalPrice();
            $this->TotalPrice->deserialize($param["TotalPrice"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
