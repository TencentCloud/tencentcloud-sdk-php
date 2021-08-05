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
 * CreateOrder请求参数结构体
 *
 * @method string getChannelCode() 获取渠道编号。ZSB2B：招商银行B2B。
 * @method void setChannelCode(string $ChannelCode) 设置渠道编号。ZSB2B：招商银行B2B。
 * @method string getMerchantAppId() 获取进件成功后返给商户方的 AppId。
 * @method void setMerchantAppId(string $MerchantAppId) 设置进件成功后返给商户方的 AppId。
 * @method string getAmount() 获取交易金额。单位：元
 * @method void setAmount(string $Amount) 设置交易金额。单位：元
 * @method string getTraceNo() 获取商户流水号。商户唯一订单号由字母或数字组成。
 * @method void setTraceNo(string $TraceNo) 设置商户流水号。商户唯一订单号由字母或数字组成。
 * @method string getNotifyUrl() 获取通知地址。商户接收交易结果的通知地址。
 * @method void setNotifyUrl(string $NotifyUrl) 设置通知地址。商户接收交易结果的通知地址。
 * @method string getReturnUrl() 获取返回地址。支付成功后，页面将跳 转返回到商户的该地址。
 * @method void setReturnUrl(string $ReturnUrl) 设置返回地址。支付成功后，页面将跳 转返回到商户的该地址。
 */
class CreateOrderRequest extends AbstractModel
{
    /**
     * @var string 渠道编号。ZSB2B：招商银行B2B。
     */
    public $ChannelCode;

    /**
     * @var string 进件成功后返给商户方的 AppId。
     */
    public $MerchantAppId;

    /**
     * @var string 交易金额。单位：元
     */
    public $Amount;

    /**
     * @var string 商户流水号。商户唯一订单号由字母或数字组成。
     */
    public $TraceNo;

    /**
     * @var string 通知地址。商户接收交易结果的通知地址。
     */
    public $NotifyUrl;

    /**
     * @var string 返回地址。支付成功后，页面将跳 转返回到商户的该地址。
     */
    public $ReturnUrl;

    /**
     * @param string $ChannelCode 渠道编号。ZSB2B：招商银行B2B。
     * @param string $MerchantAppId 进件成功后返给商户方的 AppId。
     * @param string $Amount 交易金额。单位：元
     * @param string $TraceNo 商户流水号。商户唯一订单号由字母或数字组成。
     * @param string $NotifyUrl 通知地址。商户接收交易结果的通知地址。
     * @param string $ReturnUrl 返回地址。支付成功后，页面将跳 转返回到商户的该地址。
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
        if (array_key_exists("ChannelCode",$param) and $param["ChannelCode"] !== null) {
            $this->ChannelCode = $param["ChannelCode"];
        }

        if (array_key_exists("MerchantAppId",$param) and $param["MerchantAppId"] !== null) {
            $this->MerchantAppId = $param["MerchantAppId"];
        }

        if (array_key_exists("Amount",$param) and $param["Amount"] !== null) {
            $this->Amount = $param["Amount"];
        }

        if (array_key_exists("TraceNo",$param) and $param["TraceNo"] !== null) {
            $this->TraceNo = $param["TraceNo"];
        }

        if (array_key_exists("NotifyUrl",$param) and $param["NotifyUrl"] !== null) {
            $this->NotifyUrl = $param["NotifyUrl"];
        }

        if (array_key_exists("ReturnUrl",$param) and $param["ReturnUrl"] !== null) {
            $this->ReturnUrl = $param["ReturnUrl"];
        }
    }
}
