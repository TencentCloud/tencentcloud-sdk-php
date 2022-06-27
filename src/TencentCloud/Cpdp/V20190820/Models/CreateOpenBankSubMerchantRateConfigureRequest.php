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
 * CreateOpenBankSubMerchantRateConfigure请求参数结构体
 *
 * @method string getChannelRegistrationNo() 获取渠道进件序列号。
填写子商户进件返回的渠道进件编号。
 * @method void setChannelRegistrationNo(string $ChannelRegistrationNo) 设置渠道进件序列号。
填写子商户进件返回的渠道进件编号。
 * @method string getOutProductFeeNo() 获取外部产品费率申请序列号。
 * @method void setOutProductFeeNo(string $OutProductFeeNo) 设置外部产品费率申请序列号。
 * @method string getChannelMerchantId() 获取渠道商户ID。
 * @method void setChannelMerchantId(string $ChannelMerchantId) 设置渠道商户ID。
 * @method string getChannelSubMerchantId() 获取渠道子商户ID。
 * @method void setChannelSubMerchantId(string $ChannelSubMerchantId) 设置渠道子商户ID。
 * @method string getChannelName() 获取渠道名称。详见附录-云企付枚举类说明-ChannelName。
 * @method void setChannelName(string $ChannelName) 设置渠道名称。详见附录-云企付枚举类说明-ChannelName。
 * @method string getPayType() 获取支付类型。
SWIPE:刷卡
SCAN:扫码
WAP:WAP
PUBLIC:公众号支付
SDK:SDK
MINI_PROGRAM:小程序
注意：HELIPAY渠道传SDK。
 * @method void setPayType(string $PayType) 设置支付类型。
SWIPE:刷卡
SCAN:扫码
WAP:WAP
PUBLIC:公众号支付
SDK:SDK
MINI_PROGRAM:小程序
注意：HELIPAY渠道传SDK。
 * @method string getPayChannel() 获取支付渠道。
ALIPAY：支付宝 
WXPAY：微信支付 
UNIONPAY：银联
 * @method void setPayChannel(string $PayChannel) 设置支付渠道。
ALIPAY：支付宝 
WXPAY：微信支付 
UNIONPAY：银联
 * @method string getFeeMode() 获取计费模式。
SINGLE：按单笔金额计费
RATIO：按单笔费率计费 
RANGE：按分段区间计费
 * @method void setFeeMode(string $FeeMode) 设置计费模式。
SINGLE：按单笔金额计费
RATIO：按单笔费率计费 
RANGE：按分段区间计费
 * @method integer getFeeValue() 获取费用值，单位（0.01%或分）。
 * @method void setFeeValue(integer $FeeValue) 设置费用值，单位（0.01%或分）。
 * @method string getPaymentMethod() 获取支付方式。详见附录-云企付枚举类说明-PaymentMethod。
HELIPAY渠道不需要传入。
 * @method void setPaymentMethod(string $PaymentMethod) 设置支付方式。详见附录-云企付枚举类说明-PaymentMethod。
HELIPAY渠道不需要传入。
 * @method integer getMinFee() 获取最低收费金额，单位（分）。
 * @method void setMinFee(integer $MinFee) 设置最低收费金额，单位（分）。
 * @method integer getMaxFee() 获取最高收费金额，单位（分）。
 * @method void setMaxFee(integer $MaxFee) 设置最高收费金额，单位（分）。
 * @method string getNotifyUrl() 获取通知地址。
 * @method void setNotifyUrl(string $NotifyUrl) 设置通知地址。
 * @method array getFeeRangeList() 获取分段计费区间列表。
 * @method void setFeeRangeList(array $FeeRangeList) 设置分段计费区间列表。
 * @method string getEnvironment() 获取环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
 * @method void setEnvironment(string $Environment) 设置环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
 */
class CreateOpenBankSubMerchantRateConfigureRequest extends AbstractModel
{
    /**
     * @var string 渠道进件序列号。
填写子商户进件返回的渠道进件编号。
     */
    public $ChannelRegistrationNo;

    /**
     * @var string 外部产品费率申请序列号。
     */
    public $OutProductFeeNo;

    /**
     * @var string 渠道商户ID。
     */
    public $ChannelMerchantId;

    /**
     * @var string 渠道子商户ID。
     */
    public $ChannelSubMerchantId;

    /**
     * @var string 渠道名称。详见附录-云企付枚举类说明-ChannelName。
     */
    public $ChannelName;

    /**
     * @var string 支付类型。
SWIPE:刷卡
SCAN:扫码
WAP:WAP
PUBLIC:公众号支付
SDK:SDK
MINI_PROGRAM:小程序
注意：HELIPAY渠道传SDK。
     */
    public $PayType;

    /**
     * @var string 支付渠道。
ALIPAY：支付宝 
WXPAY：微信支付 
UNIONPAY：银联
     */
    public $PayChannel;

    /**
     * @var string 计费模式。
SINGLE：按单笔金额计费
RATIO：按单笔费率计费 
RANGE：按分段区间计费
     */
    public $FeeMode;

    /**
     * @var integer 费用值，单位（0.01%或分）。
     */
    public $FeeValue;

    /**
     * @var string 支付方式。详见附录-云企付枚举类说明-PaymentMethod。
HELIPAY渠道不需要传入。
     */
    public $PaymentMethod;

    /**
     * @var integer 最低收费金额，单位（分）。
     */
    public $MinFee;

    /**
     * @var integer 最高收费金额，单位（分）。
     */
    public $MaxFee;

    /**
     * @var string 通知地址。
     */
    public $NotifyUrl;

    /**
     * @var array 分段计费区间列表。
     */
    public $FeeRangeList;

    /**
     * @var string 环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
     */
    public $Environment;

    /**
     * @param string $ChannelRegistrationNo 渠道进件序列号。
填写子商户进件返回的渠道进件编号。
     * @param string $OutProductFeeNo 外部产品费率申请序列号。
     * @param string $ChannelMerchantId 渠道商户ID。
     * @param string $ChannelSubMerchantId 渠道子商户ID。
     * @param string $ChannelName 渠道名称。详见附录-云企付枚举类说明-ChannelName。
     * @param string $PayType 支付类型。
SWIPE:刷卡
SCAN:扫码
WAP:WAP
PUBLIC:公众号支付
SDK:SDK
MINI_PROGRAM:小程序
注意：HELIPAY渠道传SDK。
     * @param string $PayChannel 支付渠道。
ALIPAY：支付宝 
WXPAY：微信支付 
UNIONPAY：银联
     * @param string $FeeMode 计费模式。
SINGLE：按单笔金额计费
RATIO：按单笔费率计费 
RANGE：按分段区间计费
     * @param integer $FeeValue 费用值，单位（0.01%或分）。
     * @param string $PaymentMethod 支付方式。详见附录-云企付枚举类说明-PaymentMethod。
HELIPAY渠道不需要传入。
     * @param integer $MinFee 最低收费金额，单位（分）。
     * @param integer $MaxFee 最高收费金额，单位（分）。
     * @param string $NotifyUrl 通知地址。
     * @param array $FeeRangeList 分段计费区间列表。
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
        if (array_key_exists("ChannelRegistrationNo",$param) and $param["ChannelRegistrationNo"] !== null) {
            $this->ChannelRegistrationNo = $param["ChannelRegistrationNo"];
        }

        if (array_key_exists("OutProductFeeNo",$param) and $param["OutProductFeeNo"] !== null) {
            $this->OutProductFeeNo = $param["OutProductFeeNo"];
        }

        if (array_key_exists("ChannelMerchantId",$param) and $param["ChannelMerchantId"] !== null) {
            $this->ChannelMerchantId = $param["ChannelMerchantId"];
        }

        if (array_key_exists("ChannelSubMerchantId",$param) and $param["ChannelSubMerchantId"] !== null) {
            $this->ChannelSubMerchantId = $param["ChannelSubMerchantId"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }

        if (array_key_exists("PayChannel",$param) and $param["PayChannel"] !== null) {
            $this->PayChannel = $param["PayChannel"];
        }

        if (array_key_exists("FeeMode",$param) and $param["FeeMode"] !== null) {
            $this->FeeMode = $param["FeeMode"];
        }

        if (array_key_exists("FeeValue",$param) and $param["FeeValue"] !== null) {
            $this->FeeValue = $param["FeeValue"];
        }

        if (array_key_exists("PaymentMethod",$param) and $param["PaymentMethod"] !== null) {
            $this->PaymentMethod = $param["PaymentMethod"];
        }

        if (array_key_exists("MinFee",$param) and $param["MinFee"] !== null) {
            $this->MinFee = $param["MinFee"];
        }

        if (array_key_exists("MaxFee",$param) and $param["MaxFee"] !== null) {
            $this->MaxFee = $param["MaxFee"];
        }

        if (array_key_exists("NotifyUrl",$param) and $param["NotifyUrl"] !== null) {
            $this->NotifyUrl = $param["NotifyUrl"];
        }

        if (array_key_exists("FeeRangeList",$param) and $param["FeeRangeList"] !== null) {
            $this->FeeRangeList = [];
            foreach ($param["FeeRangeList"] as $key => $value){
                $obj = new FeeRangInfo();
                $obj->deserialize($value);
                array_push($this->FeeRangeList, $obj);
            }
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }
    }
}
