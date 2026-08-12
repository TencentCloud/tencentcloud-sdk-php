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
 * 创建订单事件详情
 *
 * @method string getOrderId() 获取<p>订单ID</p>
 * @method void setOrderId(string $OrderId) 设置<p>订单ID</p>
 * @method Amount getAmount() 获取<p>订单金额</p>
 * @method void setAmount(Amount $Amount) 设置<p>订单金额</p>
 * @method Merchant getMerchant() 获取<p>商家信息</p>
 * @method void setMerchant(Merchant $Merchant) 设置<p>商家信息</p>
 * @method Billing getBilling() 获取<p>账单信息</p>
 * @method void setBilling(Billing $Billing) 设置<p>账单信息</p>
 * @method array getItems() 获取<p>商品信息</p>
 * @method void setItems(array $Items) 设置<p>商品信息</p>
 * @method Delivery getDelivery() 获取<p>物流信息</p>
 * @method void setDelivery(Delivery $Delivery) 设置<p>物流信息</p>
 * @method array getPromotions() 获取<p>营销活动信息</p>
 * @method void setPromotions(array $Promotions) 设置<p>营销活动信息</p>
 * @method array getCust() 获取<p>与RCE约定的定制化信息，为K:V 格式的对象数组，示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
 * @method void setCust(array $Cust) 设置<p>与RCE约定的定制化信息，为K:V 格式的对象数组，示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
 */
class CreateOrderEvent extends AbstractModel
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
     * @var Merchant <p>商家信息</p>
     */
    public $Merchant;

    /**
     * @var Billing <p>账单信息</p>
     */
    public $Billing;

    /**
     * @var array <p>商品信息</p>
     */
    public $Items;

    /**
     * @var Delivery <p>物流信息</p>
     */
    public $Delivery;

    /**
     * @var array <p>营销活动信息</p>
     */
    public $Promotions;

    /**
     * @var array <p>与RCE约定的定制化信息，为K:V 格式的对象数组，示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
     */
    public $Cust;

    /**
     * @param string $OrderId <p>订单ID</p>
     * @param Amount $Amount <p>订单金额</p>
     * @param Merchant $Merchant <p>商家信息</p>
     * @param Billing $Billing <p>账单信息</p>
     * @param array $Items <p>商品信息</p>
     * @param Delivery $Delivery <p>物流信息</p>
     * @param array $Promotions <p>营销活动信息</p>
     * @param array $Cust <p>与RCE约定的定制化信息，为K:V 格式的对象数组，示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
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

        if (array_key_exists("Merchant",$param) and $param["Merchant"] !== null) {
            $this->Merchant = new Merchant();
            $this->Merchant->deserialize($param["Merchant"]);
        }

        if (array_key_exists("Billing",$param) and $param["Billing"] !== null) {
            $this->Billing = new Billing();
            $this->Billing->deserialize($param["Billing"]);
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

        if (array_key_exists("Promotions",$param) and $param["Promotions"] !== null) {
            $this->Promotions = [];
            foreach ($param["Promotions"] as $key => $value){
                $obj = new Promotion();
                $obj->deserialize($value);
                array_push($this->Promotions, $obj);
            }
        }

        if (array_key_exists("Cust",$param) and $param["Cust"] !== null) {
            $this->Cust = [];
            foreach ($param["Cust"] as $key => $value){
                $obj = new Cust();
                $obj->deserialize($value);
                array_push($this->Cust, $obj);
            }
        }
    }
}
