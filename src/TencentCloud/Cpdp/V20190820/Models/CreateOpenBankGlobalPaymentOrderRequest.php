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
 * CreateOpenBankGlobalPaymentOrder请求参数结构体
 *
 * @method string getChannelMerchantId() 获取渠道商户号
 * @method void setChannelMerchantId(string $ChannelMerchantId) 设置渠道商户号
 * @method string getChannelName() 获取渠道名称
 * @method void setChannelName(string $ChannelName) 设置渠道名称
 * @method string getPayType() 获取付款方式
 * @method void setPayType(string $PayType) 设置付款方式
 * @method string getOutOrderId() 获取外部商户订单号,只能是数字、大小写字母，且在同一个接入平台下唯一
 * @method void setOutOrderId(string $OutOrderId) 设置外部商户订单号,只能是数字、大小写字母，且在同一个接入平台下唯一
 * @method integer getTotalAmount() 获取付款金额，单位分
 * @method void setTotalAmount(integer $TotalAmount) 设置付款金额，单位分
 * @method string getCurrency() 获取支付币种，参考附录：货币代码
 * @method void setCurrency(string $Currency) 设置支付币种，参考附录：货币代码
 * @method string getChannelSubMerchantId() 获取渠道子商户号
 * @method void setChannelSubMerchantId(string $ChannelSubMerchantId) 设置渠道子商户号
 * @method string getNotifyUrl() 获取支付成功回调地址。
 * @method void setNotifyUrl(string $NotifyUrl) 设置支付成功回调地址。
 * @method string getFrontUrl() 获取前端跳转地址。通联支付成功后，支付网关跳回商户的地址
 * @method void setFrontUrl(string $FrontUrl) 设置前端跳转地址。通联支付成功后，支付网关跳回商户的地址
 * @method string getFrontLanguage() 获取网站语言。收银台显示语言，见附录网站语言
 * @method void setFrontLanguage(string $FrontLanguage) 设置网站语言。收银台显示语言，见附录网站语言
 * @method string getRemark() 获取付款备注
 * @method void setRemark(string $Remark) 设置付款备注
 * @method string getExternalPaymentData() 获取第三方拓展信息信息
 * @method void setExternalPaymentData(string $ExternalPaymentData) 设置第三方拓展信息信息
 * @method array getGoodsInfos() 获取商品信息
 * @method void setGoodsInfos(array $GoodsInfos) 设置商品信息
 * @method OpenBankShippingInfo getShippingInfo() 获取邮寄信息
 * @method void setShippingInfo(OpenBankShippingInfo $ShippingInfo) 设置邮寄信息
 * @method OpenBankBillingInfo getBillingInfo() 获取账单信息
 * @method void setBillingInfo(OpenBankBillingInfo $BillingInfo) 设置账单信息
 * @method string getEnvironment() 获取环境类型
__release__:生产环境
__sandbox__:沙箱环境
缺省默认为生产环境
 * @method void setEnvironment(string $Environment) 设置环境类型
__release__:生产环境
__sandbox__:沙箱环境
缺省默认为生产环境
 */
class CreateOpenBankGlobalPaymentOrderRequest extends AbstractModel
{
    /**
     * @var string 渠道商户号
     */
    public $ChannelMerchantId;

    /**
     * @var string 渠道名称
     */
    public $ChannelName;

    /**
     * @var string 付款方式
     */
    public $PayType;

    /**
     * @var string 外部商户订单号,只能是数字、大小写字母，且在同一个接入平台下唯一
     */
    public $OutOrderId;

    /**
     * @var integer 付款金额，单位分
     */
    public $TotalAmount;

    /**
     * @var string 支付币种，参考附录：货币代码
     */
    public $Currency;

    /**
     * @var string 渠道子商户号
     */
    public $ChannelSubMerchantId;

    /**
     * @var string 支付成功回调地址。
     */
    public $NotifyUrl;

    /**
     * @var string 前端跳转地址。通联支付成功后，支付网关跳回商户的地址
     */
    public $FrontUrl;

    /**
     * @var string 网站语言。收银台显示语言，见附录网站语言
     */
    public $FrontLanguage;

    /**
     * @var string 付款备注
     */
    public $Remark;

    /**
     * @var string 第三方拓展信息信息
     */
    public $ExternalPaymentData;

    /**
     * @var array 商品信息
     */
    public $GoodsInfos;

    /**
     * @var OpenBankShippingInfo 邮寄信息
     */
    public $ShippingInfo;

    /**
     * @var OpenBankBillingInfo 账单信息
     */
    public $BillingInfo;

    /**
     * @var string 环境类型
__release__:生产环境
__sandbox__:沙箱环境
缺省默认为生产环境
     */
    public $Environment;

    /**
     * @param string $ChannelMerchantId 渠道商户号
     * @param string $ChannelName 渠道名称
     * @param string $PayType 付款方式
     * @param string $OutOrderId 外部商户订单号,只能是数字、大小写字母，且在同一个接入平台下唯一
     * @param integer $TotalAmount 付款金额，单位分
     * @param string $Currency 支付币种，参考附录：货币代码
     * @param string $ChannelSubMerchantId 渠道子商户号
     * @param string $NotifyUrl 支付成功回调地址。
     * @param string $FrontUrl 前端跳转地址。通联支付成功后，支付网关跳回商户的地址
     * @param string $FrontLanguage 网站语言。收银台显示语言，见附录网站语言
     * @param string $Remark 付款备注
     * @param string $ExternalPaymentData 第三方拓展信息信息
     * @param array $GoodsInfos 商品信息
     * @param OpenBankShippingInfo $ShippingInfo 邮寄信息
     * @param OpenBankBillingInfo $BillingInfo 账单信息
     * @param string $Environment 环境类型
__release__:生产环境
__sandbox__:沙箱环境
缺省默认为生产环境
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
        if (array_key_exists("ChannelMerchantId",$param) and $param["ChannelMerchantId"] !== null) {
            $this->ChannelMerchantId = $param["ChannelMerchantId"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }

        if (array_key_exists("OutOrderId",$param) and $param["OutOrderId"] !== null) {
            $this->OutOrderId = $param["OutOrderId"];
        }

        if (array_key_exists("TotalAmount",$param) and $param["TotalAmount"] !== null) {
            $this->TotalAmount = $param["TotalAmount"];
        }

        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }

        if (array_key_exists("ChannelSubMerchantId",$param) and $param["ChannelSubMerchantId"] !== null) {
            $this->ChannelSubMerchantId = $param["ChannelSubMerchantId"];
        }

        if (array_key_exists("NotifyUrl",$param) and $param["NotifyUrl"] !== null) {
            $this->NotifyUrl = $param["NotifyUrl"];
        }

        if (array_key_exists("FrontUrl",$param) and $param["FrontUrl"] !== null) {
            $this->FrontUrl = $param["FrontUrl"];
        }

        if (array_key_exists("FrontLanguage",$param) and $param["FrontLanguage"] !== null) {
            $this->FrontLanguage = $param["FrontLanguage"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ExternalPaymentData",$param) and $param["ExternalPaymentData"] !== null) {
            $this->ExternalPaymentData = $param["ExternalPaymentData"];
        }

        if (array_key_exists("GoodsInfos",$param) and $param["GoodsInfos"] !== null) {
            $this->GoodsInfos = [];
            foreach ($param["GoodsInfos"] as $key => $value){
                $obj = new OpenBankGoodsInfo();
                $obj->deserialize($value);
                array_push($this->GoodsInfos, $obj);
            }
        }

        if (array_key_exists("ShippingInfo",$param) and $param["ShippingInfo"] !== null) {
            $this->ShippingInfo = new OpenBankShippingInfo();
            $this->ShippingInfo->deserialize($param["ShippingInfo"]);
        }

        if (array_key_exists("BillingInfo",$param) and $param["BillingInfo"] !== null) {
            $this->BillingInfo = new OpenBankBillingInfo();
            $this->BillingInfo->deserialize($param["BillingInfo"]);
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }
    }
}
