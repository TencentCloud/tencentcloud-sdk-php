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
 * QueryOpenBankVerificationOrder请求参数结构体
 *
 * @method string getChannelMerchantId() 获取云企付渠道商户号。外部接入平台入驻云企付平台后下发。
 * @method void setChannelMerchantId(string $ChannelMerchantId) 设置云企付渠道商户号。外部接入平台入驻云企付平台后下发。
 * @method string getChannelVerificationId() 获取云企付渠道核销订单号。与OutVerificationId不能同时为空。
 * @method void setChannelVerificationId(string $ChannelVerificationId) 设置云企付渠道核销订单号。与OutVerificationId不能同时为空。
 * @method string getOutVerificationId() 获取外部核销申请订单号。与ChannelVerificationId不能同时为空。
 * @method void setOutVerificationId(string $OutVerificationId) 设置外部核销申请订单号。与ChannelVerificationId不能同时为空。
 * @method string getEnvironment() 获取环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
 * @method void setEnvironment(string $Environment) 设置环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
 */
class QueryOpenBankVerificationOrderRequest extends AbstractModel
{
    /**
     * @var string 云企付渠道商户号。外部接入平台入驻云企付平台后下发。
     */
    public $ChannelMerchantId;

    /**
     * @var string 云企付渠道核销订单号。与OutVerificationId不能同时为空。
     */
    public $ChannelVerificationId;

    /**
     * @var string 外部核销申请订单号。与ChannelVerificationId不能同时为空。
     */
    public $OutVerificationId;

    /**
     * @var string 环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
     */
    public $Environment;

    /**
     * @param string $ChannelMerchantId 云企付渠道商户号。外部接入平台入驻云企付平台后下发。
     * @param string $ChannelVerificationId 云企付渠道核销订单号。与OutVerificationId不能同时为空。
     * @param string $OutVerificationId 外部核销申请订单号。与ChannelVerificationId不能同时为空。
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

        if (array_key_exists("ChannelVerificationId",$param) and $param["ChannelVerificationId"] !== null) {
            $this->ChannelVerificationId = $param["ChannelVerificationId"];
        }

        if (array_key_exists("OutVerificationId",$param) and $param["OutVerificationId"] !== null) {
            $this->OutVerificationId = $param["OutVerificationId"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }
    }
}
