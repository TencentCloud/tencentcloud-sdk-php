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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 订单退款响应对象
 *
 * @method string getOrderNo() 获取付款订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrderNo(string $OrderNo) 设置付款订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeveloperNo() 获取开发者流水号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeveloperNo(string $DeveloperNo) 设置开发者流水号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTradeDiscountAmount() 获取交易优惠金额（免充值券）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTradeDiscountAmount(string $TradeDiscountAmount) 设置交易优惠金额（免充值券）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayName() 获取付款方式名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayName(string $PayName) 设置付款方式名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrderMerchantId() 获取商户流水号（从1开始自增长不重复）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrderMerchantId(string $OrderMerchantId) 设置商户流水号（从1开始自增长不重复）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTradeAmount() 获取实际交易金额（以分为单位，没有小数点）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTradeAmount(string $TradeAmount) 设置实际交易金额（以分为单位，没有小数点）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCurrencySign() 获取币种签名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurrencySign(string $CurrencySign) 设置币种签名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTradePayTime() 获取付款完成时间（以收单机构为准）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTradePayTime(string $TradePayTime) 设置付款完成时间（以收单机构为准）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getShopOrderId() 获取门店流水号（从1开始自增长不重复）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShopOrderId(string $ShopOrderId) 设置门店流水号（从1开始自增长不重复）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayTag() 获取支付标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayTag(string $PayTag) 设置支付标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取订单状态（1交易成功，2待支付，4已取消，9等待用户输入密码确认
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置订单状态（1交易成功，2待支付，4已取消，9等待用户输入密码确认
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrderCurrency() 获取币种代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrderCurrency(string $OrderCurrency) 设置币种代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTradeTime() 获取开始交易时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTradeTime(string $TradeTime) 设置开始交易时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDiscountAmount() 获取折扣金额（以分为单位，没有小数点）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiscountAmount(string $DiscountAmount) 设置折扣金额（以分为单位，没有小数点）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOriginalOrderNo() 获取原始订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginalOrderNo(string $OriginalOrderNo) 设置原始订单号
注意：此字段可能返回 null，表示取不到有效值。
 */
class RefundOrderResult extends AbstractModel
{
    /**
     * @var string 付款订单号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrderNo;

    /**
     * @var string 开发者流水号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeveloperNo;

    /**
     * @var string 交易优惠金额（免充值券）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TradeDiscountAmount;

    /**
     * @var string 付款方式名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayName;

    /**
     * @var string 商户流水号（从1开始自增长不重复）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrderMerchantId;

    /**
     * @var string 实际交易金额（以分为单位，没有小数点）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TradeAmount;

    /**
     * @var string 币种签名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CurrencySign;

    /**
     * @var string 付款完成时间（以收单机构为准）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TradePayTime;

    /**
     * @var string 门店流水号（从1开始自增长不重复）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShopOrderId;

    /**
     * @var string 支付标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayTag;

    /**
     * @var string 订单状态（1交易成功，2待支付，4已取消，9等待用户输入密码确认
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 币种代码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrderCurrency;

    /**
     * @var string 开始交易时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TradeTime;

    /**
     * @var string 折扣金额（以分为单位，没有小数点）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiscountAmount;

    /**
     * @var string 原始订单号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginalOrderNo;

    /**
     * @param string $OrderNo 付款订单号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeveloperNo 开发者流水号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TradeDiscountAmount 交易优惠金额（免充值券）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PayName 付款方式名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrderMerchantId 商户流水号（从1开始自增长不重复）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TradeAmount 实际交易金额（以分为单位，没有小数点）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CurrencySign 币种签名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TradePayTime 付款完成时间（以收单机构为准）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ShopOrderId 门店流水号（从1开始自增长不重复）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PayTag 支付标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 订单状态（1交易成功，2待支付，4已取消，9等待用户输入密码确认
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrderCurrency 币种代码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TradeTime 开始交易时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DiscountAmount 折扣金额（以分为单位，没有小数点）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OriginalOrderNo 原始订单号
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
        if (array_key_exists("OrderNo",$param) and $param["OrderNo"] !== null) {
            $this->OrderNo = $param["OrderNo"];
        }

        if (array_key_exists("DeveloperNo",$param) and $param["DeveloperNo"] !== null) {
            $this->DeveloperNo = $param["DeveloperNo"];
        }

        if (array_key_exists("TradeDiscountAmount",$param) and $param["TradeDiscountAmount"] !== null) {
            $this->TradeDiscountAmount = $param["TradeDiscountAmount"];
        }

        if (array_key_exists("PayName",$param) and $param["PayName"] !== null) {
            $this->PayName = $param["PayName"];
        }

        if (array_key_exists("OrderMerchantId",$param) and $param["OrderMerchantId"] !== null) {
            $this->OrderMerchantId = $param["OrderMerchantId"];
        }

        if (array_key_exists("TradeAmount",$param) and $param["TradeAmount"] !== null) {
            $this->TradeAmount = $param["TradeAmount"];
        }

        if (array_key_exists("CurrencySign",$param) and $param["CurrencySign"] !== null) {
            $this->CurrencySign = $param["CurrencySign"];
        }

        if (array_key_exists("TradePayTime",$param) and $param["TradePayTime"] !== null) {
            $this->TradePayTime = $param["TradePayTime"];
        }

        if (array_key_exists("ShopOrderId",$param) and $param["ShopOrderId"] !== null) {
            $this->ShopOrderId = $param["ShopOrderId"];
        }

        if (array_key_exists("PayTag",$param) and $param["PayTag"] !== null) {
            $this->PayTag = $param["PayTag"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OrderCurrency",$param) and $param["OrderCurrency"] !== null) {
            $this->OrderCurrency = $param["OrderCurrency"];
        }

        if (array_key_exists("TradeTime",$param) and $param["TradeTime"] !== null) {
            $this->TradeTime = $param["TradeTime"];
        }

        if (array_key_exists("DiscountAmount",$param) and $param["DiscountAmount"] !== null) {
            $this->DiscountAmount = $param["DiscountAmount"];
        }

        if (array_key_exists("OriginalOrderNo",$param) and $param["OriginalOrderNo"] !== null) {
            $this->OriginalOrderNo = $param["OriginalOrderNo"];
        }
    }
}
