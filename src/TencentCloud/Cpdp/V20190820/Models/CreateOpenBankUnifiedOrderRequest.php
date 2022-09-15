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
 * CreateOpenBankUnifiedOrder请求参数结构体
 *
 * @method string getChannelMerchantId() 获取渠道商户号。
 * @method void setChannelMerchantId(string $ChannelMerchantId) 设置渠道商户号。
 * @method string getChannelName() 获取渠道名称。
 * @method void setChannelName(string $ChannelName) 设置渠道名称。
 * @method string getPayType() 获取支付产品类型。
被扫（扫码）：SWIPE, 主扫（刷卡）：SCAN, 
H5：WAP, 公众号：PUBLIC, 
APP-SDK：SDK, 小程序：MINI_PROGRAM, 
快捷支付：QUICK, 网银支付：ONLINE_BANK。
 * @method void setPayType(string $PayType) 设置支付产品类型。
被扫（扫码）：SWIPE, 主扫（刷卡）：SCAN, 
H5：WAP, 公众号：PUBLIC, 
APP-SDK：SDK, 小程序：MINI_PROGRAM, 
快捷支付：QUICK, 网银支付：ONLINE_BANK。
 * @method string getOutOrderId() 获取外部商户订单号。
只能是数字、大小写字母，且在同一个接入平台下唯一。
 * @method void setOutOrderId(string $OutOrderId) 设置外部商户订单号。
只能是数字、大小写字母，且在同一个接入平台下唯一。
 * @method integer getTotalAmount() 获取交易金额，单位分。
 * @method void setTotalAmount(integer $TotalAmount) 设置交易金额，单位分。
 * @method string getCurrency() 获取币种。固定：CNY。
 * @method void setCurrency(string $Currency) 设置币种。固定：CNY。
 * @method string getChannelSubMerchantId() 获取渠道子商户号。
 * @method void setChannelSubMerchantId(string $ChannelSubMerchantId) 设置渠道子商户号。
 * @method string getPayChannel() 获取实际支付渠道。没有则无需填写。如
支付宝 ALIPAY
微信支付 WXPAY
银联 UNIONPAY
一般在间连模式下使用。
 * @method void setPayChannel(string $PayChannel) 设置实际支付渠道。没有则无需填写。如
支付宝 ALIPAY
微信支付 WXPAY
银联 UNIONPAY
一般在间连模式下使用。
 * @method OpenBankSceneInfo getSceneInfo() 获取设备信息。
 * @method void setSceneInfo(OpenBankSceneInfo $SceneInfo) 设置设备信息。
 * @method array getProfitShareInfoList() 获取分账信息列表。
 * @method void setProfitShareInfoList(array $ProfitShareInfoList) 设置分账信息列表。
 * @method string getOrderSubject() 获取订单标题。
 * @method void setOrderSubject(string $OrderSubject) 设置订单标题。
 * @method string getGoodsDetail() 获取商品信息。
 * @method void setGoodsDetail(string $GoodsDetail) 设置商品信息。
 * @method string getExpireTime() 获取超时时间。
 * @method void setExpireTime(string $ExpireTime) 设置超时时间。
 * @method string getNotifyUrl() 获取支付成功回调地址。
 * @method void setNotifyUrl(string $NotifyUrl) 设置支付成功回调地址。
 * @method string getFrontUrl() 获取支付成功前端跳转URL。
 * @method void setFrontUrl(string $FrontUrl) 设置支付成功前端跳转URL。
 * @method string getAttachment() 获取订单附加信息，查询或者回调的时候原样返回。
 * @method void setAttachment(string $Attachment) 设置订单附加信息，查询或者回调的时候原样返回。
 * @method string getExternalPaymentData() 获取第三方渠道扩展字段。见附录-复杂类型。
未作特殊说明，则无需传入。
 * @method void setExternalPaymentData(string $ExternalPaymentData) 设置第三方渠道扩展字段。见附录-复杂类型。
未作特殊说明，则无需传入。
 * @method string getRemark() 获取备注。
 * @method void setRemark(string $Remark) 设置备注。
 * @method OpenBankStoreInfo getStoreInfo() 获取门店信息。
 * @method void setStoreInfo(OpenBankStoreInfo $StoreInfo) 设置门店信息。
 * @method OpenBankPayLimitInfo getPayLimitInfo() 获取支付限制。
 * @method void setPayLimitInfo(OpenBankPayLimitInfo $PayLimitInfo) 设置支付限制。
 * @method string getEnvironment() 获取环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
 * @method void setEnvironment(string $Environment) 设置环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
 */
class CreateOpenBankUnifiedOrderRequest extends AbstractModel
{
    /**
     * @var string 渠道商户号。
     */
    public $ChannelMerchantId;

    /**
     * @var string 渠道名称。
     */
    public $ChannelName;

    /**
     * @var string 支付产品类型。
被扫（扫码）：SWIPE, 主扫（刷卡）：SCAN, 
H5：WAP, 公众号：PUBLIC, 
APP-SDK：SDK, 小程序：MINI_PROGRAM, 
快捷支付：QUICK, 网银支付：ONLINE_BANK。
     */
    public $PayType;

    /**
     * @var string 外部商户订单号。
只能是数字、大小写字母，且在同一个接入平台下唯一。
     */
    public $OutOrderId;

    /**
     * @var integer 交易金额，单位分。
     */
    public $TotalAmount;

    /**
     * @var string 币种。固定：CNY。
     */
    public $Currency;

    /**
     * @var string 渠道子商户号。
     */
    public $ChannelSubMerchantId;

    /**
     * @var string 实际支付渠道。没有则无需填写。如
支付宝 ALIPAY
微信支付 WXPAY
银联 UNIONPAY
一般在间连模式下使用。
     */
    public $PayChannel;

    /**
     * @var OpenBankSceneInfo 设备信息。
     */
    public $SceneInfo;

    /**
     * @var array 分账信息列表。
     */
    public $ProfitShareInfoList;

    /**
     * @var string 订单标题。
     */
    public $OrderSubject;

    /**
     * @var string 商品信息。
     */
    public $GoodsDetail;

    /**
     * @var string 超时时间。
     */
    public $ExpireTime;

    /**
     * @var string 支付成功回调地址。
     */
    public $NotifyUrl;

    /**
     * @var string 支付成功前端跳转URL。
     */
    public $FrontUrl;

    /**
     * @var string 订单附加信息，查询或者回调的时候原样返回。
     */
    public $Attachment;

    /**
     * @var string 第三方渠道扩展字段。见附录-复杂类型。
未作特殊说明，则无需传入。
     */
    public $ExternalPaymentData;

    /**
     * @var string 备注。
     */
    public $Remark;

    /**
     * @var OpenBankStoreInfo 门店信息。
     */
    public $StoreInfo;

    /**
     * @var OpenBankPayLimitInfo 支付限制。
     */
    public $PayLimitInfo;

    /**
     * @var string 环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
     */
    public $Environment;

    /**
     * @param string $ChannelMerchantId 渠道商户号。
     * @param string $ChannelName 渠道名称。
     * @param string $PayType 支付产品类型。
被扫（扫码）：SWIPE, 主扫（刷卡）：SCAN, 
H5：WAP, 公众号：PUBLIC, 
APP-SDK：SDK, 小程序：MINI_PROGRAM, 
快捷支付：QUICK, 网银支付：ONLINE_BANK。
     * @param string $OutOrderId 外部商户订单号。
只能是数字、大小写字母，且在同一个接入平台下唯一。
     * @param integer $TotalAmount 交易金额，单位分。
     * @param string $Currency 币种。固定：CNY。
     * @param string $ChannelSubMerchantId 渠道子商户号。
     * @param string $PayChannel 实际支付渠道。没有则无需填写。如
支付宝 ALIPAY
微信支付 WXPAY
银联 UNIONPAY
一般在间连模式下使用。
     * @param OpenBankSceneInfo $SceneInfo 设备信息。
     * @param array $ProfitShareInfoList 分账信息列表。
     * @param string $OrderSubject 订单标题。
     * @param string $GoodsDetail 商品信息。
     * @param string $ExpireTime 超时时间。
     * @param string $NotifyUrl 支付成功回调地址。
     * @param string $FrontUrl 支付成功前端跳转URL。
     * @param string $Attachment 订单附加信息，查询或者回调的时候原样返回。
     * @param string $ExternalPaymentData 第三方渠道扩展字段。见附录-复杂类型。
未作特殊说明，则无需传入。
     * @param string $Remark 备注。
     * @param OpenBankStoreInfo $StoreInfo 门店信息。
     * @param OpenBankPayLimitInfo $PayLimitInfo 支付限制。
     * @param string $Environment 环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
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

        if (array_key_exists("PayChannel",$param) and $param["PayChannel"] !== null) {
            $this->PayChannel = $param["PayChannel"];
        }

        if (array_key_exists("SceneInfo",$param) and $param["SceneInfo"] !== null) {
            $this->SceneInfo = new OpenBankSceneInfo();
            $this->SceneInfo->deserialize($param["SceneInfo"]);
        }

        if (array_key_exists("ProfitShareInfoList",$param) and $param["ProfitShareInfoList"] !== null) {
            $this->ProfitShareInfoList = [];
            foreach ($param["ProfitShareInfoList"] as $key => $value){
                $obj = new OpenBankProfitShareInfo();
                $obj->deserialize($value);
                array_push($this->ProfitShareInfoList, $obj);
            }
        }

        if (array_key_exists("OrderSubject",$param) and $param["OrderSubject"] !== null) {
            $this->OrderSubject = $param["OrderSubject"];
        }

        if (array_key_exists("GoodsDetail",$param) and $param["GoodsDetail"] !== null) {
            $this->GoodsDetail = $param["GoodsDetail"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("NotifyUrl",$param) and $param["NotifyUrl"] !== null) {
            $this->NotifyUrl = $param["NotifyUrl"];
        }

        if (array_key_exists("FrontUrl",$param) and $param["FrontUrl"] !== null) {
            $this->FrontUrl = $param["FrontUrl"];
        }

        if (array_key_exists("Attachment",$param) and $param["Attachment"] !== null) {
            $this->Attachment = $param["Attachment"];
        }

        if (array_key_exists("ExternalPaymentData",$param) and $param["ExternalPaymentData"] !== null) {
            $this->ExternalPaymentData = $param["ExternalPaymentData"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("StoreInfo",$param) and $param["StoreInfo"] !== null) {
            $this->StoreInfo = new OpenBankStoreInfo();
            $this->StoreInfo->deserialize($param["StoreInfo"]);
        }

        if (array_key_exists("PayLimitInfo",$param) and $param["PayLimitInfo"] !== null) {
            $this->PayLimitInfo = new OpenBankPayLimitInfo();
            $this->PayLimitInfo->deserialize($param["PayLimitInfo"]);
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }
    }
}
