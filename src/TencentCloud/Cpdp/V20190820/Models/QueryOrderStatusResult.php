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
 * 查询订单付款状态响应对象
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
 * @method string getTradeAccount() 获取交易帐号（银行卡号、支付宝帐号、微信帐号等，某些收单机构没有此数据）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTradeAccount(string $TradeAccount) 设置交易帐号（银行卡号、支付宝帐号、微信帐号等，某些收单机构没有此数据）
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
 * @method string getTradeQrcode() 获取二维码字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTradeQrcode(string $TradeQrcode) 设置二维码字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTradeTime() 获取开始交易时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTradeTime(string $TradeTime) 设置开始交易时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDiscountAmount() 获取折扣金额（以分为单位，没有小数点）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiscountAmount(string $DiscountAmount) 设置折扣金额（以分为单位，没有小数点）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMerchantNo() 获取商户号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMerchantNo(string $MerchantNo) 设置商户号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取订单备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置订单备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrderName() 获取订单标题
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrderName(string $OrderName) 设置订单标题
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOriginalAmount() 获取原始金额（以分为单位，没有小数点）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginalAmount(string $OriginalAmount) 设置原始金额（以分为单位，没有小数点）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getShopNo() 获取门店编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShopNo(string $ShopNo) 设置门店编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTradeResult() 获取收单机构原始交易数据，如果返回非标准json数据，请自行转换
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTradeResult(string $TradeResult) 设置收单机构原始交易数据，如果返回非标准json数据，请自行转换
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrderId() 获取订单流水号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrderId(string $OrderId) 设置订单流水号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrderType() 获取订单类型（1消费，2辙单）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrderType(string $OrderType) 设置订单类型（1消费，2辙单）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTradeNo() 获取收单机构交易号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTradeNo(string $TradeNo) 设置收单机构交易号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOriginalOrderNo() 获取原始订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginalOrderNo(string $OriginalOrderNo) 设置原始订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTag() 获取订单标记，订单附加数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTag(string $Tag) 设置订单标记，订单附加数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAddTime() 获取下单时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddTime(string $AddTime) 设置下单时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCashierId() 获取收银员编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCashierId(string $CashierId) 设置收银员编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCashierRealName() 获取收银员名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCashierRealName(string $CashierRealName) 设置收银员名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getShopFullName() 获取店铺全称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShopFullName(string $ShopFullName) 设置店铺全称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getShopName() 获取店铺名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShopName(string $ShopName) 设置店铺名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class QueryOrderStatusResult extends AbstractModel
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
     * @var string 交易帐号（银行卡号、支付宝帐号、微信帐号等，某些收单机构没有此数据）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TradeAccount;

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
     * @var string 二维码字符串
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TradeQrcode;

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
     * @var string 商户号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MerchantNo;

    /**
     * @var string 订单备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string 订单标题
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrderName;

    /**
     * @var string 原始金额（以分为单位，没有小数点）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginalAmount;

    /**
     * @var string 门店编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShopNo;

    /**
     * @var string 收单机构原始交易数据，如果返回非标准json数据，请自行转换
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TradeResult;

    /**
     * @var string 订单流水号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrderId;

    /**
     * @var string 订单类型（1消费，2辙单）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrderType;

    /**
     * @var string 收单机构交易号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TradeNo;

    /**
     * @var string 原始订单号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginalOrderNo;

    /**
     * @var string 订单标记，订单附加数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tag;

    /**
     * @var string 下单时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AddTime;

    /**
     * @var string 收银员编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CashierId;

    /**
     * @var string 收银员名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CashierRealName;

    /**
     * @var string 店铺全称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShopFullName;

    /**
     * @var string 店铺名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShopName;

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
     * @param string $TradeAccount 交易帐号（银行卡号、支付宝帐号、微信帐号等，某些收单机构没有此数据）
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
     * @param string $TradeQrcode 二维码字符串
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TradeTime 开始交易时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DiscountAmount 折扣金额（以分为单位，没有小数点）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MerchantNo 商户号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 订单备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrderName 订单标题
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OriginalAmount 原始金额（以分为单位，没有小数点）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ShopNo 门店编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TradeResult 收单机构原始交易数据，如果返回非标准json数据，请自行转换
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrderId 订单流水号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrderType 订单类型（1消费，2辙单）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TradeNo 收单机构交易号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OriginalOrderNo 原始订单号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Tag 订单标记，订单附加数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AddTime 下单时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CashierId 收银员编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CashierRealName 收银员名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ShopFullName 店铺全称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ShopName 店铺名称
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

        if (array_key_exists("TradeAccount",$param) and $param["TradeAccount"] !== null) {
            $this->TradeAccount = $param["TradeAccount"];
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

        if (array_key_exists("TradeQrcode",$param) and $param["TradeQrcode"] !== null) {
            $this->TradeQrcode = $param["TradeQrcode"];
        }

        if (array_key_exists("TradeTime",$param) and $param["TradeTime"] !== null) {
            $this->TradeTime = $param["TradeTime"];
        }

        if (array_key_exists("DiscountAmount",$param) and $param["DiscountAmount"] !== null) {
            $this->DiscountAmount = $param["DiscountAmount"];
        }

        if (array_key_exists("MerchantNo",$param) and $param["MerchantNo"] !== null) {
            $this->MerchantNo = $param["MerchantNo"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("OrderName",$param) and $param["OrderName"] !== null) {
            $this->OrderName = $param["OrderName"];
        }

        if (array_key_exists("OriginalAmount",$param) and $param["OriginalAmount"] !== null) {
            $this->OriginalAmount = $param["OriginalAmount"];
        }

        if (array_key_exists("ShopNo",$param) and $param["ShopNo"] !== null) {
            $this->ShopNo = $param["ShopNo"];
        }

        if (array_key_exists("TradeResult",$param) and $param["TradeResult"] !== null) {
            $this->TradeResult = $param["TradeResult"];
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("TradeNo",$param) and $param["TradeNo"] !== null) {
            $this->TradeNo = $param["TradeNo"];
        }

        if (array_key_exists("OriginalOrderNo",$param) and $param["OriginalOrderNo"] !== null) {
            $this->OriginalOrderNo = $param["OriginalOrderNo"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("CashierId",$param) and $param["CashierId"] !== null) {
            $this->CashierId = $param["CashierId"];
        }

        if (array_key_exists("CashierRealName",$param) and $param["CashierRealName"] !== null) {
            $this->CashierRealName = $param["CashierRealName"];
        }

        if (array_key_exists("ShopFullName",$param) and $param["ShopFullName"] !== null) {
            $this->ShopFullName = $param["ShopFullName"];
        }

        if (array_key_exists("ShopName",$param) and $param["ShopName"] !== null) {
            $this->ShopName = $param["ShopName"];
        }
    }
}
