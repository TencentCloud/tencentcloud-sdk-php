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
 * 订单支付响应对象
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
 * @method string getWechatAppId() 获取微信返回调起小程序/原生JS支付的appid参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWechatAppId(string $WechatAppId) 设置微信返回调起小程序/原生JS支付的appid参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWechatTimeStamp() 获取微信返回调起小程序/原生JS支付的timeStamp参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWechatTimeStamp(string $WechatTimeStamp) 设置微信返回调起小程序/原生JS支付的timeStamp参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWechatNonceStr() 获取微信返回调起小程序/原生JS支付的nonceStr参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWechatNonceStr(string $WechatNonceStr) 设置微信返回调起小程序/原生JS支付的nonceStr参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWechatSignType() 获取微信返回调起小程序/原生JS支付的signType参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWechatSignType(string $WechatSignType) 设置微信返回调起小程序/原生JS支付的signType参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWechatPackage() 获取微信返回调起小程序/原生JS支付的package参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWechatPackage(string $WechatPackage) 设置微信返回调起小程序/原生JS支付的package参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWechatPaySign() 获取微信返回调起小程序/原生JS支付的paySign参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWechatPaySign(string $WechatPaySign) 设置微信返回调起小程序/原生JS支付的paySign参数
注意：此字段可能返回 null，表示取不到有效值。
 */
class PayOrderResult extends AbstractModel
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
     * @var string 微信返回调起小程序/原生JS支付的appid参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WechatAppId;

    /**
     * @var string 微信返回调起小程序/原生JS支付的timeStamp参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WechatTimeStamp;

    /**
     * @var string 微信返回调起小程序/原生JS支付的nonceStr参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WechatNonceStr;

    /**
     * @var string 微信返回调起小程序/原生JS支付的signType参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WechatSignType;

    /**
     * @var string 微信返回调起小程序/原生JS支付的package参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WechatPackage;

    /**
     * @var string 微信返回调起小程序/原生JS支付的paySign参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WechatPaySign;

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
     * @param string $WechatAppId 微信返回调起小程序/原生JS支付的appid参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WechatTimeStamp 微信返回调起小程序/原生JS支付的timeStamp参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WechatNonceStr 微信返回调起小程序/原生JS支付的nonceStr参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WechatSignType 微信返回调起小程序/原生JS支付的signType参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WechatPackage 微信返回调起小程序/原生JS支付的package参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WechatPaySign 微信返回调起小程序/原生JS支付的paySign参数
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

        if (array_key_exists("WechatAppId",$param) and $param["WechatAppId"] !== null) {
            $this->WechatAppId = $param["WechatAppId"];
        }

        if (array_key_exists("WechatTimeStamp",$param) and $param["WechatTimeStamp"] !== null) {
            $this->WechatTimeStamp = $param["WechatTimeStamp"];
        }

        if (array_key_exists("WechatNonceStr",$param) and $param["WechatNonceStr"] !== null) {
            $this->WechatNonceStr = $param["WechatNonceStr"];
        }

        if (array_key_exists("WechatSignType",$param) and $param["WechatSignType"] !== null) {
            $this->WechatSignType = $param["WechatSignType"];
        }

        if (array_key_exists("WechatPackage",$param) and $param["WechatPackage"] !== null) {
            $this->WechatPackage = $param["WechatPackage"];
        }

        if (array_key_exists("WechatPaySign",$param) and $param["WechatPaySign"] !== null) {
            $this->WechatPaySign = $param["WechatPaySign"];
        }
    }
}
