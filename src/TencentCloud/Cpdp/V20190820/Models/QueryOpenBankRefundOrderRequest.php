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
 * QueryOpenBankRefundOrder请求参数结构体
 *
 * @method string getChannelMerchantId() 获取渠道商户号。
 * @method void setChannelMerchantId(string $ChannelMerchantId) 设置渠道商户号。
 * @method string getOutRefundId() 获取外部商户退单号，与渠道退款单号二者选填其一。
 * @method void setOutRefundId(string $OutRefundId) 设置外部商户退单号，与渠道退款单号二者选填其一。
 * @method string getChannelRefundId() 获取渠道退款订单号，与外部商户退款单号二者选填其一。
 * @method void setChannelRefundId(string $ChannelRefundId) 设置渠道退款订单号，与外部商户退款单号二者选填其一。
 * @method string getEnvironment() 获取环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
 * @method void setEnvironment(string $Environment) 设置环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
 */
class QueryOpenBankRefundOrderRequest extends AbstractModel
{
    /**
     * @var string 渠道商户号。
     */
    public $ChannelMerchantId;

    /**
     * @var string 外部商户退单号，与渠道退款单号二者选填其一。
     */
    public $OutRefundId;

    /**
     * @var string 渠道退款订单号，与外部商户退款单号二者选填其一。
     */
    public $ChannelRefundId;

    /**
     * @var string 环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
     */
    public $Environment;

    /**
     * @param string $ChannelMerchantId 渠道商户号。
     * @param string $OutRefundId 外部商户退单号，与渠道退款单号二者选填其一。
     * @param string $ChannelRefundId 渠道退款订单号，与外部商户退款单号二者选填其一。
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

        if (array_key_exists("OutRefundId",$param) and $param["OutRefundId"] !== null) {
            $this->OutRefundId = $param["OutRefundId"];
        }

        if (array_key_exists("ChannelRefundId",$param) and $param["ChannelRefundId"] !== null) {
            $this->ChannelRefundId = $param["ChannelRefundId"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }
    }
}
