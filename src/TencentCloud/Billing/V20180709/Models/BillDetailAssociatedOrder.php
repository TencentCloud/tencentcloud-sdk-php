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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 明细账单关联单据信息
 *
 * @method string getPrepayPurchase() 获取新购订单
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrepayPurchase(string $PrepayPurchase) 设置新购订单
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPrepayRenew() 获取续费订单
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrepayRenew(string $PrepayRenew) 设置续费订单
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPrepayModifyUp() 获取升配订单
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrepayModifyUp(string $PrepayModifyUp) 设置升配订单
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReverseOrder() 获取冲销订单
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReverseOrder(string $ReverseOrder) 设置冲销订单
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNewOrder() 获取优惠调整后订单
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNewOrder(string $NewOrder) 设置优惠调整后订单
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOriginal() 获取优惠调整前订单
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginal(string $Original) 设置优惠调整前订单
注意：此字段可能返回 null，表示取不到有效值。
 */
class BillDetailAssociatedOrder extends AbstractModel
{
    /**
     * @var string 新购订单
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrepayPurchase;

    /**
     * @var string 续费订单
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrepayRenew;

    /**
     * @var string 升配订单
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrepayModifyUp;

    /**
     * @var string 冲销订单
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReverseOrder;

    /**
     * @var string 优惠调整后订单
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NewOrder;

    /**
     * @var string 优惠调整前订单
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Original;

    /**
     * @param string $PrepayPurchase 新购订单
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PrepayRenew 续费订单
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PrepayModifyUp 升配订单
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReverseOrder 冲销订单
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NewOrder 优惠调整后订单
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Original 优惠调整前订单
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("PrepayPurchase",$param) and $param["PrepayPurchase"] !== null) {
            $this->PrepayPurchase = $param["PrepayPurchase"];
        }

        if (array_key_exists("PrepayRenew",$param) and $param["PrepayRenew"] !== null) {
            $this->PrepayRenew = $param["PrepayRenew"];
        }

        if (array_key_exists("PrepayModifyUp",$param) and $param["PrepayModifyUp"] !== null) {
            $this->PrepayModifyUp = $param["PrepayModifyUp"];
        }

        if (array_key_exists("ReverseOrder",$param) and $param["ReverseOrder"] !== null) {
            $this->ReverseOrder = $param["ReverseOrder"];
        }

        if (array_key_exists("NewOrder",$param) and $param["NewOrder"] !== null) {
            $this->NewOrder = $param["NewOrder"];
        }

        if (array_key_exists("Original",$param) and $param["Original"] !== null) {
            $this->Original = $param["Original"];
        }
    }
}
