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
 * 返回订单信息
 *
 * @method string getAppId() 获取米大师分配的支付主MidasAppId
 * @method void setAppId(string $AppId) 设置米大师分配的支付主MidasAppId
 * @method string getOutTradeNo() 获取开发者支付订单号
 * @method void setOutTradeNo(string $OutTradeNo) 设置开发者支付订单号
 * @method array getSubOrderList() 获取调用下单接口传进来的子单列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubOrderList(array $SubOrderList) 设置调用下单接口传进来的子单列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTransactionId() 获取调用下单接口获取的米大师交易订单号
 * @method void setTransactionId(string $TransactionId) 设置调用下单接口获取的米大师交易订单号
 * @method string getUserId() 获取用户Id
 * @method void setUserId(string $UserId) 设置用户Id
 * @method string getChannel() 获取支付渠道
wechat:微信支付
 * @method void setChannel(string $Channel) 设置支付渠道
wechat:微信支付
 * @method string getProductId() 获取物品Id
 * @method void setProductId(string $ProductId) 设置物品Id
 * @method string getMetadata() 获取发货标识，由开发者在调用下单接口的时候传入
 * @method void setMetadata(string $Metadata) 设置发货标识，由开发者在调用下单接口的时候传入
 * @method string getCurrencyType() 获取ISO货币代码
 * @method void setCurrencyType(string $CurrencyType) 设置ISO货币代码
 * @method integer getAmt() 获取支付金额，单位：分
 * @method void setAmt(integer $Amt) 设置支付金额，单位：分
 * @method string getOrderState() 获取订单状态
0:初始状态，获取米大师交易订单成功
1:拉起米大师支付页面成功，用户未支付
2:用户支付成功，正在发货
3:用户支付成功，发货失败
4:用户支付成功，发货成功
5:关单中
6:已关单
 * @method void setOrderState(string $OrderState) 设置订单状态
0:初始状态，获取米大师交易订单成功
1:拉起米大师支付页面成功，用户未支付
2:用户支付成功，正在发货
3:用户支付成功，发货失败
4:用户支付成功，发货成功
5:关单中
6:已关单
 * @method string getOrderTime() 获取下单时间，unix时间戳
 * @method void setOrderTime(string $OrderTime) 设置下单时间，unix时间戳
 * @method string getPayTime() 获取支付时间，unix时间戳
 * @method void setPayTime(string $PayTime) 设置支付时间，unix时间戳
 * @method string getCallBackTime() 获取支付回调时间，unix时间戳
 * @method void setCallBackTime(string $CallBackTime) 设置支付回调时间，unix时间戳
 * @method string getChannelExternalOrderId() 获取支付机构订单号
 * @method void setChannelExternalOrderId(string $ChannelExternalOrderId) 设置支付机构订单号
 * @method string getChannelOrderId() 获取米大师内部渠道订单号
 * @method void setChannelOrderId(string $ChannelOrderId) 设置米大师内部渠道订单号
 * @method string getRefundFlag() 获取是否曾退款
 * @method void setRefundFlag(string $RefundFlag) 设置是否曾退款
 * @method string getCashAmt() 获取用户支付金额
 * @method void setCashAmt(string $CashAmt) 设置用户支付金额
 * @method string getCouponAmt() 获取抵扣券金额
 * @method void setCouponAmt(string $CouponAmt) 设置抵扣券金额
 * @method string getProductName() 获取商品名称
 * @method void setProductName(string $ProductName) 设置商品名称
 * @method CloudSettleInfo getSettleInfo() 获取结算信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSettleInfo(CloudSettleInfo $SettleInfo) 设置结算信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAttachmentInfoList() 获取附加项信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttachmentInfoList(array $AttachmentInfoList) 设置附加项信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getChannelExternalUserInfoList() 获取渠道方返回的用户信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelExternalUserInfoList(array $ChannelExternalUserInfoList) 设置渠道方返回的用户信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExternalReturnPromptGroupList() 获取渠道扩展促销列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternalReturnPromptGroupList(array $ExternalReturnPromptGroupList) 设置渠道扩展促销列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSceneInfo() 获取场景扩展信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSceneInfo(string $SceneInfo) 设置场景扩展信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubAppId() 获取子应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubAppId(string $SubAppId) 设置子应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayScene() 获取支付场景
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayScene(string $PayScene) 设置支付场景
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPaymentMethod() 获取支付方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPaymentMethod(string $PaymentMethod) 设置支付方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalPlatformIncome() 获取平台应收金额
单位：分，需要注意的是，TotalAmt=TotalPlatformIncome+TotalMchIncome
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalPlatformIncome(integer $TotalPlatformIncome) 设置平台应收金额
单位：分，需要注意的是，TotalAmt=TotalPlatformIncome+TotalMchIncome
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalMchIncome() 获取商户应收金额
单位：分，需要注意的是，TotalAmt=TotalPlatformIncome+TotalMchIncome
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalMchIncome(integer $TotalMchIncome) 设置商户应收金额
单位：分，需要注意的是，TotalAmt=TotalPlatformIncome+TotalMchIncome
注意：此字段可能返回 null，表示取不到有效值。
 */
class CloudOrderReturn extends AbstractModel
{
    /**
     * @var string 米大师分配的支付主MidasAppId
     */
    public $AppId;

    /**
     * @var string 开发者支付订单号
     */
    public $OutTradeNo;

    /**
     * @var array 调用下单接口传进来的子单列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubOrderList;

    /**
     * @var string 调用下单接口获取的米大师交易订单号
     */
    public $TransactionId;

    /**
     * @var string 用户Id
     */
    public $UserId;

    /**
     * @var string 支付渠道
wechat:微信支付
     */
    public $Channel;

    /**
     * @var string 物品Id
     */
    public $ProductId;

    /**
     * @var string 发货标识，由开发者在调用下单接口的时候传入
     */
    public $Metadata;

    /**
     * @var string ISO货币代码
     */
    public $CurrencyType;

    /**
     * @var integer 支付金额，单位：分
     */
    public $Amt;

    /**
     * @var string 订单状态
0:初始状态，获取米大师交易订单成功
1:拉起米大师支付页面成功，用户未支付
2:用户支付成功，正在发货
3:用户支付成功，发货失败
4:用户支付成功，发货成功
5:关单中
6:已关单
     */
    public $OrderState;

    /**
     * @var string 下单时间，unix时间戳
     */
    public $OrderTime;

    /**
     * @var string 支付时间，unix时间戳
     */
    public $PayTime;

    /**
     * @var string 支付回调时间，unix时间戳
     */
    public $CallBackTime;

    /**
     * @var string 支付机构订单号
     */
    public $ChannelExternalOrderId;

    /**
     * @var string 米大师内部渠道订单号
     */
    public $ChannelOrderId;

    /**
     * @var string 是否曾退款
     */
    public $RefundFlag;

    /**
     * @var string 用户支付金额
     */
    public $CashAmt;

    /**
     * @var string 抵扣券金额
     */
    public $CouponAmt;

    /**
     * @var string 商品名称
     */
    public $ProductName;

    /**
     * @var CloudSettleInfo 结算信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SettleInfo;

    /**
     * @var array 附加项信息列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttachmentInfoList;

    /**
     * @var array 渠道方返回的用户信息列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelExternalUserInfoList;

    /**
     * @var array 渠道扩展促销列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExternalReturnPromptGroupList;

    /**
     * @var string 场景扩展信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SceneInfo;

    /**
     * @var string 子应用ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubAppId;

    /**
     * @var string 支付场景
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayScene;

    /**
     * @var string 支付方式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PaymentMethod;

    /**
     * @var integer 平台应收金额
单位：分，需要注意的是，TotalAmt=TotalPlatformIncome+TotalMchIncome
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalPlatformIncome;

    /**
     * @var integer 商户应收金额
单位：分，需要注意的是，TotalAmt=TotalPlatformIncome+TotalMchIncome
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalMchIncome;

    /**
     * @param string $AppId 米大师分配的支付主MidasAppId
     * @param string $OutTradeNo 开发者支付订单号
     * @param array $SubOrderList 调用下单接口传进来的子单列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TransactionId 调用下单接口获取的米大师交易订单号
     * @param string $UserId 用户Id
     * @param string $Channel 支付渠道
wechat:微信支付
     * @param string $ProductId 物品Id
     * @param string $Metadata 发货标识，由开发者在调用下单接口的时候传入
     * @param string $CurrencyType ISO货币代码
     * @param integer $Amt 支付金额，单位：分
     * @param string $OrderState 订单状态
0:初始状态，获取米大师交易订单成功
1:拉起米大师支付页面成功，用户未支付
2:用户支付成功，正在发货
3:用户支付成功，发货失败
4:用户支付成功，发货成功
5:关单中
6:已关单
     * @param string $OrderTime 下单时间，unix时间戳
     * @param string $PayTime 支付时间，unix时间戳
     * @param string $CallBackTime 支付回调时间，unix时间戳
     * @param string $ChannelExternalOrderId 支付机构订单号
     * @param string $ChannelOrderId 米大师内部渠道订单号
     * @param string $RefundFlag 是否曾退款
     * @param string $CashAmt 用户支付金额
     * @param string $CouponAmt 抵扣券金额
     * @param string $ProductName 商品名称
     * @param CloudSettleInfo $SettleInfo 结算信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AttachmentInfoList 附加项信息列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ChannelExternalUserInfoList 渠道方返回的用户信息列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ExternalReturnPromptGroupList 渠道扩展促销列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SceneInfo 场景扩展信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubAppId 子应用ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PayScene 支付场景
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PaymentMethod 支付方式
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalPlatformIncome 平台应收金额
单位：分，需要注意的是，TotalAmt=TotalPlatformIncome+TotalMchIncome
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalMchIncome 商户应收金额
单位：分，需要注意的是，TotalAmt=TotalPlatformIncome+TotalMchIncome
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("OutTradeNo",$param) and $param["OutTradeNo"] !== null) {
            $this->OutTradeNo = $param["OutTradeNo"];
        }

        if (array_key_exists("SubOrderList",$param) and $param["SubOrderList"] !== null) {
            $this->SubOrderList = [];
            foreach ($param["SubOrderList"] as $key => $value){
                $obj = new CloudSubOrderReturn();
                $obj->deserialize($value);
                array_push($this->SubOrderList, $obj);
            }
        }

        if (array_key_exists("TransactionId",$param) and $param["TransactionId"] !== null) {
            $this->TransactionId = $param["TransactionId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = $param["Metadata"];
        }

        if (array_key_exists("CurrencyType",$param) and $param["CurrencyType"] !== null) {
            $this->CurrencyType = $param["CurrencyType"];
        }

        if (array_key_exists("Amt",$param) and $param["Amt"] !== null) {
            $this->Amt = $param["Amt"];
        }

        if (array_key_exists("OrderState",$param) and $param["OrderState"] !== null) {
            $this->OrderState = $param["OrderState"];
        }

        if (array_key_exists("OrderTime",$param) and $param["OrderTime"] !== null) {
            $this->OrderTime = $param["OrderTime"];
        }

        if (array_key_exists("PayTime",$param) and $param["PayTime"] !== null) {
            $this->PayTime = $param["PayTime"];
        }

        if (array_key_exists("CallBackTime",$param) and $param["CallBackTime"] !== null) {
            $this->CallBackTime = $param["CallBackTime"];
        }

        if (array_key_exists("ChannelExternalOrderId",$param) and $param["ChannelExternalOrderId"] !== null) {
            $this->ChannelExternalOrderId = $param["ChannelExternalOrderId"];
        }

        if (array_key_exists("ChannelOrderId",$param) and $param["ChannelOrderId"] !== null) {
            $this->ChannelOrderId = $param["ChannelOrderId"];
        }

        if (array_key_exists("RefundFlag",$param) and $param["RefundFlag"] !== null) {
            $this->RefundFlag = $param["RefundFlag"];
        }

        if (array_key_exists("CashAmt",$param) and $param["CashAmt"] !== null) {
            $this->CashAmt = $param["CashAmt"];
        }

        if (array_key_exists("CouponAmt",$param) and $param["CouponAmt"] !== null) {
            $this->CouponAmt = $param["CouponAmt"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("SettleInfo",$param) and $param["SettleInfo"] !== null) {
            $this->SettleInfo = new CloudSettleInfo();
            $this->SettleInfo->deserialize($param["SettleInfo"]);
        }

        if (array_key_exists("AttachmentInfoList",$param) and $param["AttachmentInfoList"] !== null) {
            $this->AttachmentInfoList = [];
            foreach ($param["AttachmentInfoList"] as $key => $value){
                $obj = new CloudAttachmentInfo();
                $obj->deserialize($value);
                array_push($this->AttachmentInfoList, $obj);
            }
        }

        if (array_key_exists("ChannelExternalUserInfoList",$param) and $param["ChannelExternalUserInfoList"] !== null) {
            $this->ChannelExternalUserInfoList = [];
            foreach ($param["ChannelExternalUserInfoList"] as $key => $value){
                $obj = new CloudChannelExternalUserInfo();
                $obj->deserialize($value);
                array_push($this->ChannelExternalUserInfoList, $obj);
            }
        }

        if (array_key_exists("ExternalReturnPromptGroupList",$param) and $param["ExternalReturnPromptGroupList"] !== null) {
            $this->ExternalReturnPromptGroupList = [];
            foreach ($param["ExternalReturnPromptGroupList"] as $key => $value){
                $obj = new CloudExternalPromptGroup();
                $obj->deserialize($value);
                array_push($this->ExternalReturnPromptGroupList, $obj);
            }
        }

        if (array_key_exists("SceneInfo",$param) and $param["SceneInfo"] !== null) {
            $this->SceneInfo = $param["SceneInfo"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("PayScene",$param) and $param["PayScene"] !== null) {
            $this->PayScene = $param["PayScene"];
        }

        if (array_key_exists("PaymentMethod",$param) and $param["PaymentMethod"] !== null) {
            $this->PaymentMethod = $param["PaymentMethod"];
        }

        if (array_key_exists("TotalPlatformIncome",$param) and $param["TotalPlatformIncome"] !== null) {
            $this->TotalPlatformIncome = $param["TotalPlatformIncome"];
        }

        if (array_key_exists("TotalMchIncome",$param) and $param["TotalMchIncome"] !== null) {
            $this->TotalMchIncome = $param["TotalMchIncome"];
        }
    }
}
