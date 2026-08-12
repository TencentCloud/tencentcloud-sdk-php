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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 订单信息
 *
 * @method string getOrderId() 获取<p>订单ID</p>
 * @method void setOrderId(string $OrderId) 设置<p>订单ID</p>
 * @method Amount getAmount() 获取<p>订单金额</p>
 * @method void setAmount(Amount $Amount) 设置<p>订单金额</p>
 * @method array getItems() 获取<p>商品信息</p>
 * @method void setItems(array $Items) 设置<p>商品信息</p>
 * @method Delivery getDelivery() 获取<p>物流信息</p>
 * @method void setDelivery(Delivery $Delivery) 设置<p>物流信息</p>
 */
class Order extends AbstractModel
{
    /**
     * @var string <p>订单ID</p>
     */
    public $OrderId;

    /**
     * @var Amount <p>订单金额</p>
     */
    public $Amount;

    /**
     * @var array <p>商品信息</p>
     */
    public $Items;

    /**
     * @var Delivery <p>物流信息</p>
     */
    public $Delivery;

    /**
     * @param string $OrderId <p>订单ID</p>
     * @param Amount $Amount <p>订单金额</p>
     * @param array $Items <p>商品信息</p>
     * @param Delivery $Delivery <p>物流信息</p>
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
        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("Amount",$param) and $param["Amount"] !== null) {
            $this->Amount = new Amount();
            $this->Amount->deserialize($param["Amount"]);
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new Item();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("Delivery",$param) and $param["Delivery"] !== null) {
            $this->Delivery = new Delivery();
            $this->Delivery->deserialize($param["Delivery"]);
        }
    }
}
