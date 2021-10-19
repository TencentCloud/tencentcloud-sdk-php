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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 产品设备位置信息
 *
 * @method array getItems() 获取设备位置列表
 * @method void setItems(array $Items) 设置设备位置列表
 * @method string getProductId() 获取产品标识
 * @method void setProductId(string $ProductId) 设置产品标识
 * @method integer getTotal() 获取设备位置数量
 * @method void setTotal(integer $Total) 设置设备位置数量
 */
class ProductDevicesPositionItem extends AbstractModel
{
    /**
     * @var array 设备位置列表
     */
    public $Items;

    /**
     * @var string 产品标识
     */
    public $ProductId;

    /**
     * @var integer 设备位置数量
     */
    public $Total;

    /**
     * @param array $Items 设备位置列表
     * @param string $ProductId 产品标识
     * @param integer $Total 设备位置数量
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
        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new DevicePositionItem();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }
    }
}
