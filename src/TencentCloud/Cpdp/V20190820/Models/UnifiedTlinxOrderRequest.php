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
 * UnifiedTlinxOrder请求参数结构体
 *
 * @method string getDeveloperNo() 获取开发者流水号
 * @method void setDeveloperNo(string $DeveloperNo) 设置开发者流水号
 * @method string getOpenId() 获取收单系统分配的开放ID
 * @method void setOpenId(string $OpenId) 设置收单系统分配的开放ID
 * @method string getNotifyUrl() 获取交易结果异步通知url地址
 * @method void setNotifyUrl(string $NotifyUrl) 设置交易结果异步通知url地址
 * @method string getOpenKey() 获取收单系统分配的密钥
 * @method void setOpenKey(string $OpenKey) 设置收单系统分配的密钥
 * @method string getPayTag() 获取支付标签
 * @method void setPayTag(string $PayTag) 设置支付标签
 * @method string getTradeAmount() 获取实际交易金额（以分为单位，没有小数点）
 * @method void setTradeAmount(string $TradeAmount) 设置实际交易金额（以分为单位，没有小数点）
 * @method string getRemark() 获取订单备注
 * @method void setRemark(string $Remark) 设置订单备注
 * @method string getTag() 获取订单标记，订单附加数据。
 * @method void setTag(string $Tag) 设置订单标记，订单附加数据。
 * @method string getIgnoreAmount() 获取抹零金额（以分为单位，没有小数点）
 * @method void setIgnoreAmount(string $IgnoreAmount) 设置抹零金额（以分为单位，没有小数点）
 * @method string getAuthCode() 获取条码支付的授权码（条码抢扫手机扫到的一串数字）
 * @method void setAuthCode(string $AuthCode) 设置条码支付的授权码（条码抢扫手机扫到的一串数字）
 * @method string getOriginalAmount() 获取原始交易金额（以分为单位，没有小数点）
 * @method void setOriginalAmount(string $OriginalAmount) 设置原始交易金额（以分为单位，没有小数点）
 * @method string getOrderName() 获取订单名称（描述）
 * @method void setOrderName(string $OrderName) 设置订单名称（描述）
 * @method string getJumpUrl() 获取公众号支付时，支付成功后跳转url地址
 * @method void setJumpUrl(string $JumpUrl) 设置公众号支付时，支付成功后跳转url地址
 * @method string getProfile() 获取沙箱环境填sandbox，正式环境不填
 * @method void setProfile(string $Profile) 设置沙箱环境填sandbox，正式环境不填
 * @method string getTradeResult() 获取收单机构原始交易报文，请转换为json
 * @method void setTradeResult(string $TradeResult) 设置收单机构原始交易报文，请转换为json
 * @method string getTradeAccount() 获取交易帐号（银行卡号）
 * @method void setTradeAccount(string $TradeAccount) 设置交易帐号（银行卡号）
 * @method string getTradeNo() 获取交易号（收单机构交易号）
 * @method void setTradeNo(string $TradeNo) 设置交易号（收单机构交易号）
 * @method string getDiscountAmount() 获取折扣金额（以分为单位，没有小数点）
 * @method void setDiscountAmount(string $DiscountAmount) 设置折扣金额（以分为单位，没有小数点）
 * @method string getPayName() 获取付款方式名称(当PayTag为Diy时，PayName不能为空)
 * @method void setPayName(string $PayName) 设置付款方式名称(当PayTag为Diy时，PayName不能为空)
 * @method string getRoyalty() 获取0-不分账，1-需分账。为1时标记为待分账订单，待分账订单不会进行清算。不传默认为不分账。
 * @method void setRoyalty(string $Royalty) 设置0-不分账，1-需分账。为1时标记为待分账订单，待分账订单不会进行清算。不传默认为不分账。
 */
class UnifiedTlinxOrderRequest extends AbstractModel
{
    /**
     * @var string 开发者流水号
     */
    public $DeveloperNo;

    /**
     * @var string 收单系统分配的开放ID
     */
    public $OpenId;

    /**
     * @var string 交易结果异步通知url地址
     */
    public $NotifyUrl;

    /**
     * @var string 收单系统分配的密钥
     */
    public $OpenKey;

    /**
     * @var string 支付标签
     */
    public $PayTag;

    /**
     * @var string 实际交易金额（以分为单位，没有小数点）
     */
    public $TradeAmount;

    /**
     * @var string 订单备注
     */
    public $Remark;

    /**
     * @var string 订单标记，订单附加数据。
     */
    public $Tag;

    /**
     * @var string 抹零金额（以分为单位，没有小数点）
     */
    public $IgnoreAmount;

    /**
     * @var string 条码支付的授权码（条码抢扫手机扫到的一串数字）
     */
    public $AuthCode;

    /**
     * @var string 原始交易金额（以分为单位，没有小数点）
     */
    public $OriginalAmount;

    /**
     * @var string 订单名称（描述）
     */
    public $OrderName;

    /**
     * @var string 公众号支付时，支付成功后跳转url地址
     */
    public $JumpUrl;

    /**
     * @var string 沙箱环境填sandbox，正式环境不填
     */
    public $Profile;

    /**
     * @var string 收单机构原始交易报文，请转换为json
     */
    public $TradeResult;

    /**
     * @var string 交易帐号（银行卡号）
     */
    public $TradeAccount;

    /**
     * @var string 交易号（收单机构交易号）
     */
    public $TradeNo;

    /**
     * @var string 折扣金额（以分为单位，没有小数点）
     */
    public $DiscountAmount;

    /**
     * @var string 付款方式名称(当PayTag为Diy时，PayName不能为空)
     */
    public $PayName;

    /**
     * @var string 0-不分账，1-需分账。为1时标记为待分账订单，待分账订单不会进行清算。不传默认为不分账。
     */
    public $Royalty;

    /**
     * @param string $DeveloperNo 开发者流水号
     * @param string $OpenId 收单系统分配的开放ID
     * @param string $NotifyUrl 交易结果异步通知url地址
     * @param string $OpenKey 收单系统分配的密钥
     * @param string $PayTag 支付标签
     * @param string $TradeAmount 实际交易金额（以分为单位，没有小数点）
     * @param string $Remark 订单备注
     * @param string $Tag 订单标记，订单附加数据。
     * @param string $IgnoreAmount 抹零金额（以分为单位，没有小数点）
     * @param string $AuthCode 条码支付的授权码（条码抢扫手机扫到的一串数字）
     * @param string $OriginalAmount 原始交易金额（以分为单位，没有小数点）
     * @param string $OrderName 订单名称（描述）
     * @param string $JumpUrl 公众号支付时，支付成功后跳转url地址
     * @param string $Profile 沙箱环境填sandbox，正式环境不填
     * @param string $TradeResult 收单机构原始交易报文，请转换为json
     * @param string $TradeAccount 交易帐号（银行卡号）
     * @param string $TradeNo 交易号（收单机构交易号）
     * @param string $DiscountAmount 折扣金额（以分为单位，没有小数点）
     * @param string $PayName 付款方式名称(当PayTag为Diy时，PayName不能为空)
     * @param string $Royalty 0-不分账，1-需分账。为1时标记为待分账订单，待分账订单不会进行清算。不传默认为不分账。
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
        if (array_key_exists("DeveloperNo",$param) and $param["DeveloperNo"] !== null) {
            $this->DeveloperNo = $param["DeveloperNo"];
        }

        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }

        if (array_key_exists("NotifyUrl",$param) and $param["NotifyUrl"] !== null) {
            $this->NotifyUrl = $param["NotifyUrl"];
        }

        if (array_key_exists("OpenKey",$param) and $param["OpenKey"] !== null) {
            $this->OpenKey = $param["OpenKey"];
        }

        if (array_key_exists("PayTag",$param) and $param["PayTag"] !== null) {
            $this->PayTag = $param["PayTag"];
        }

        if (array_key_exists("TradeAmount",$param) and $param["TradeAmount"] !== null) {
            $this->TradeAmount = $param["TradeAmount"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("IgnoreAmount",$param) and $param["IgnoreAmount"] !== null) {
            $this->IgnoreAmount = $param["IgnoreAmount"];
        }

        if (array_key_exists("AuthCode",$param) and $param["AuthCode"] !== null) {
            $this->AuthCode = $param["AuthCode"];
        }

        if (array_key_exists("OriginalAmount",$param) and $param["OriginalAmount"] !== null) {
            $this->OriginalAmount = $param["OriginalAmount"];
        }

        if (array_key_exists("OrderName",$param) and $param["OrderName"] !== null) {
            $this->OrderName = $param["OrderName"];
        }

        if (array_key_exists("JumpUrl",$param) and $param["JumpUrl"] !== null) {
            $this->JumpUrl = $param["JumpUrl"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }

        if (array_key_exists("TradeResult",$param) and $param["TradeResult"] !== null) {
            $this->TradeResult = $param["TradeResult"];
        }

        if (array_key_exists("TradeAccount",$param) and $param["TradeAccount"] !== null) {
            $this->TradeAccount = $param["TradeAccount"];
        }

        if (array_key_exists("TradeNo",$param) and $param["TradeNo"] !== null) {
            $this->TradeNo = $param["TradeNo"];
        }

        if (array_key_exists("DiscountAmount",$param) and $param["DiscountAmount"] !== null) {
            $this->DiscountAmount = $param["DiscountAmount"];
        }

        if (array_key_exists("PayName",$param) and $param["PayName"] !== null) {
            $this->PayName = $param["PayName"];
        }

        if (array_key_exists("Royalty",$param) and $param["Royalty"] !== null) {
            $this->Royalty = $param["Royalty"];
        }
    }
}
