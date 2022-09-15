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
 * RefundCloudOrder请求参数结构体
 *
 * @method string getMidasAppId() 获取米大师分配的支付主MidasAppId
 * @method void setMidasAppId(string $MidasAppId) 设置米大师分配的支付主MidasAppId
 * @method string getUserId() 获取用户Id，长度不小于5位，仅支持字母和数字的组合
 * @method void setUserId(string $UserId) 设置用户Id，长度不小于5位，仅支持字母和数字的组合
 * @method string getRefundId() 获取退款订单号，仅支持数字、字母、下划线（_）、横杠字符（-）、点（.）的组合
 * @method void setRefundId(string $RefundId) 设置退款订单号，仅支持数字、字母、下划线（_）、横杠字符（-）、点（.）的组合
 * @method integer getTotalRefundAmt() 获取退款金额，单位：分
当该字段为空或者为0时，系统会默认使用订单当实付金额作为退款金额
 * @method void setTotalRefundAmt(integer $TotalRefundAmt) 设置退款金额，单位：分
当该字段为空或者为0时，系统会默认使用订单当实付金额作为退款金额
 * @method string getOutTradeNo() 获取商品订单，仅支持数字、字母、下划线（_）、横杠字符（-）、点（.）的组合
 * @method void setOutTradeNo(string $OutTradeNo) 设置商品订单，仅支持数字、字母、下划线（_）、横杠字符（-）、点（.）的组合
 * @method string getMidasEnvironment() 获取环境类型
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
 * @method void setMidasEnvironment(string $MidasEnvironment) 设置环境类型
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
 * @method integer getPlatformRefundAmt() 获取平台应收金额，单位：分
 * @method void setPlatformRefundAmt(integer $PlatformRefundAmt) 设置平台应收金额，单位：分
 * @method integer getMchRefundAmt() 获取结算应收金额，单位：分
 * @method void setMchRefundAmt(integer $MchRefundAmt) 设置结算应收金额，单位：分
 * @method array getSubOrderRefundList() 获取支持多个子订单批量退款单个子订单退款支持传SubOutTradeNo
也支持传SubOrderRefundList，都传的时候以SubOrderRefundList为准。
如果传了子单退款细节，外部不需要再传退款金额，平台应退，商户应退金额
 * @method void setSubOrderRefundList(array $SubOrderRefundList) 设置支持多个子订单批量退款单个子订单退款支持传SubOutTradeNo
也支持传SubOrderRefundList，都传的时候以SubOrderRefundList为准。
如果传了子单退款细节，外部不需要再传退款金额，平台应退，商户应退金额
 * @method string getChannelOrderId() 获取渠道订单号，当出现重复支付时，可以将重复支付订单的渠道订单号传入，以进行退款（注意：目前该重复支付订单的渠道订单号仅能通过米大师内部获取），更多重复支付订单退款说明，请参考[重复支付订单退款说明](https://dev.tke.midas.qq.com/juxin-doc-next/apidocs/receive-order/Refund.html#%E9%87%8D%E5%A4%8D%E6%94%AF%E4%BB%98%E8%AE%A2%E5%8D%95%E9%80%80%E6%AC%BE%E8%AF%B4%E6%98%8E)
 * @method void setChannelOrderId(string $ChannelOrderId) 设置渠道订单号，当出现重复支付时，可以将重复支付订单的渠道订单号传入，以进行退款（注意：目前该重复支付订单的渠道订单号仅能通过米大师内部获取），更多重复支付订单退款说明，请参考[重复支付订单退款说明](https://dev.tke.midas.qq.com/juxin-doc-next/apidocs/receive-order/Refund.html#%E9%87%8D%E5%A4%8D%E6%94%AF%E4%BB%98%E8%AE%A2%E5%8D%95%E9%80%80%E6%AC%BE%E8%AF%B4%E6%98%8E)
 * @method string getRefundNotifyUrl() 获取通知地址
 * @method void setRefundNotifyUrl(string $RefundNotifyUrl) 设置通知地址
 * @method string getMetadata() 获取透传字段，退款成功回调透传给应用，用于开发者透传自定义内容
 * @method void setMetadata(string $Metadata) 设置透传字段，退款成功回调透传给应用，用于开发者透传自定义内容
 * @method string getExternalRefundPromptGroupList() 获取渠道扩展退款促销列表，可将各个渠道的退款促销信息放于该列表
 * @method void setExternalRefundPromptGroupList(string $ExternalRefundPromptGroupList) 设置渠道扩展退款促销列表，可将各个渠道的退款促销信息放于该列表
 */
class RefundCloudOrderRequest extends AbstractModel
{
    /**
     * @var string 米大师分配的支付主MidasAppId
     */
    public $MidasAppId;

    /**
     * @var string 用户Id，长度不小于5位，仅支持字母和数字的组合
     */
    public $UserId;

    /**
     * @var string 退款订单号，仅支持数字、字母、下划线（_）、横杠字符（-）、点（.）的组合
     */
    public $RefundId;

    /**
     * @var integer 退款金额，单位：分
当该字段为空或者为0时，系统会默认使用订单当实付金额作为退款金额
     */
    public $TotalRefundAmt;

    /**
     * @var string 商品订单，仅支持数字、字母、下划线（_）、横杠字符（-）、点（.）的组合
     */
    public $OutTradeNo;

    /**
     * @var string 环境类型
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
     */
    public $MidasEnvironment;

    /**
     * @var integer 平台应收金额，单位：分
     */
    public $PlatformRefundAmt;

    /**
     * @var integer 结算应收金额，单位：分
     */
    public $MchRefundAmt;

    /**
     * @var array 支持多个子订单批量退款单个子订单退款支持传SubOutTradeNo
也支持传SubOrderRefundList，都传的时候以SubOrderRefundList为准。
如果传了子单退款细节，外部不需要再传退款金额，平台应退，商户应退金额
     */
    public $SubOrderRefundList;

    /**
     * @var string 渠道订单号，当出现重复支付时，可以将重复支付订单的渠道订单号传入，以进行退款（注意：目前该重复支付订单的渠道订单号仅能通过米大师内部获取），更多重复支付订单退款说明，请参考[重复支付订单退款说明](https://dev.tke.midas.qq.com/juxin-doc-next/apidocs/receive-order/Refund.html#%E9%87%8D%E5%A4%8D%E6%94%AF%E4%BB%98%E8%AE%A2%E5%8D%95%E9%80%80%E6%AC%BE%E8%AF%B4%E6%98%8E)
     */
    public $ChannelOrderId;

    /**
     * @var string 通知地址
     */
    public $RefundNotifyUrl;

    /**
     * @var string 透传字段，退款成功回调透传给应用，用于开发者透传自定义内容
     */
    public $Metadata;

    /**
     * @var string 渠道扩展退款促销列表，可将各个渠道的退款促销信息放于该列表
     */
    public $ExternalRefundPromptGroupList;

    /**
     * @param string $MidasAppId 米大师分配的支付主MidasAppId
     * @param string $UserId 用户Id，长度不小于5位，仅支持字母和数字的组合
     * @param string $RefundId 退款订单号，仅支持数字、字母、下划线（_）、横杠字符（-）、点（.）的组合
     * @param integer $TotalRefundAmt 退款金额，单位：分
当该字段为空或者为0时，系统会默认使用订单当实付金额作为退款金额
     * @param string $OutTradeNo 商品订单，仅支持数字、字母、下划线（_）、横杠字符（-）、点（.）的组合
     * @param string $MidasEnvironment 环境类型
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
     * @param integer $PlatformRefundAmt 平台应收金额，单位：分
     * @param integer $MchRefundAmt 结算应收金额，单位：分
     * @param array $SubOrderRefundList 支持多个子订单批量退款单个子订单退款支持传SubOutTradeNo
也支持传SubOrderRefundList，都传的时候以SubOrderRefundList为准。
如果传了子单退款细节，外部不需要再传退款金额，平台应退，商户应退金额
     * @param string $ChannelOrderId 渠道订单号，当出现重复支付时，可以将重复支付订单的渠道订单号传入，以进行退款（注意：目前该重复支付订单的渠道订单号仅能通过米大师内部获取），更多重复支付订单退款说明，请参考[重复支付订单退款说明](https://dev.tke.midas.qq.com/juxin-doc-next/apidocs/receive-order/Refund.html#%E9%87%8D%E5%A4%8D%E6%94%AF%E4%BB%98%E8%AE%A2%E5%8D%95%E9%80%80%E6%AC%BE%E8%AF%B4%E6%98%8E)
     * @param string $RefundNotifyUrl 通知地址
     * @param string $Metadata 透传字段，退款成功回调透传给应用，用于开发者透传自定义内容
     * @param string $ExternalRefundPromptGroupList 渠道扩展退款促销列表，可将各个渠道的退款促销信息放于该列表
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
        if (array_key_exists("MidasAppId",$param) and $param["MidasAppId"] !== null) {
            $this->MidasAppId = $param["MidasAppId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("RefundId",$param) and $param["RefundId"] !== null) {
            $this->RefundId = $param["RefundId"];
        }

        if (array_key_exists("TotalRefundAmt",$param) and $param["TotalRefundAmt"] !== null) {
            $this->TotalRefundAmt = $param["TotalRefundAmt"];
        }

        if (array_key_exists("OutTradeNo",$param) and $param["OutTradeNo"] !== null) {
            $this->OutTradeNo = $param["OutTradeNo"];
        }

        if (array_key_exists("MidasEnvironment",$param) and $param["MidasEnvironment"] !== null) {
            $this->MidasEnvironment = $param["MidasEnvironment"];
        }

        if (array_key_exists("PlatformRefundAmt",$param) and $param["PlatformRefundAmt"] !== null) {
            $this->PlatformRefundAmt = $param["PlatformRefundAmt"];
        }

        if (array_key_exists("MchRefundAmt",$param) and $param["MchRefundAmt"] !== null) {
            $this->MchRefundAmt = $param["MchRefundAmt"];
        }

        if (array_key_exists("SubOrderRefundList",$param) and $param["SubOrderRefundList"] !== null) {
            $this->SubOrderRefundList = [];
            foreach ($param["SubOrderRefundList"] as $key => $value){
                $obj = new CloudSubOrderRefund();
                $obj->deserialize($value);
                array_push($this->SubOrderRefundList, $obj);
            }
        }

        if (array_key_exists("ChannelOrderId",$param) and $param["ChannelOrderId"] !== null) {
            $this->ChannelOrderId = $param["ChannelOrderId"];
        }

        if (array_key_exists("RefundNotifyUrl",$param) and $param["RefundNotifyUrl"] !== null) {
            $this->RefundNotifyUrl = $param["RefundNotifyUrl"];
        }

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = $param["Metadata"];
        }

        if (array_key_exists("ExternalRefundPromptGroupList",$param) and $param["ExternalRefundPromptGroupList"] !== null) {
            $this->ExternalRefundPromptGroupList = $param["ExternalRefundPromptGroupList"];
        }
    }
}
