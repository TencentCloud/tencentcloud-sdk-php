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
 * QueryOpenBankPaymentOrder请求参数结构体
 *
 * @method string getChannelMerchantId() 获取渠道商户号。外部接入平台入驻云企付平台下发。
 * @method void setChannelMerchantId(string $ChannelMerchantId) 设置渠道商户号。外部接入平台入驻云企付平台下发。
 * @method string getOutOrderId() 获取外部商户订单号。与ChannelOrderId不能同时为空。若传空串即表示忽略该参数。
 * @method void setOutOrderId(string $OutOrderId) 设置外部商户订单号。与ChannelOrderId不能同时为空。若传空串即表示忽略该参数。
 * @method string getChannelOrderId() 获取云平台订单号。与OutOrderId不能同时为空。若调用下单接口时，发生异常，无法取到ChannelOrderId，传空串即可
 * @method void setChannelOrderId(string $ChannelOrderId) 设置云平台订单号。与OutOrderId不能同时为空。若调用下单接口时，发生异常，无法取到ChannelOrderId，传空串即可
 * @method string getEnvironment() 获取接入环境。沙箱环境填 sandbox。缺省默认调用生产环境。
 * @method void setEnvironment(string $Environment) 设置接入环境。沙箱环境填 sandbox。缺省默认调用生产环境。
 */
class QueryOpenBankPaymentOrderRequest extends AbstractModel
{
    /**
     * @var string 渠道商户号。外部接入平台入驻云企付平台下发。
     */
    public $ChannelMerchantId;

    /**
     * @var string 外部商户订单号。与ChannelOrderId不能同时为空。若传空串即表示忽略该参数。
     */
    public $OutOrderId;

    /**
     * @var string 云平台订单号。与OutOrderId不能同时为空。若调用下单接口时，发生异常，无法取到ChannelOrderId，传空串即可
     */
    public $ChannelOrderId;

    /**
     * @var string 接入环境。沙箱环境填 sandbox。缺省默认调用生产环境。
     */
    public $Environment;

    /**
     * @param string $ChannelMerchantId 渠道商户号。外部接入平台入驻云企付平台下发。
     * @param string $OutOrderId 外部商户订单号。与ChannelOrderId不能同时为空。若传空串即表示忽略该参数。
     * @param string $ChannelOrderId 云平台订单号。与OutOrderId不能同时为空。若调用下单接口时，发生异常，无法取到ChannelOrderId，传空串即可
     * @param string $Environment 接入环境。沙箱环境填 sandbox。缺省默认调用生产环境。
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

        if (array_key_exists("OutOrderId",$param) and $param["OutOrderId"] !== null) {
            $this->OutOrderId = $param["OutOrderId"];
        }

        if (array_key_exists("ChannelOrderId",$param) and $param["ChannelOrderId"] !== null) {
            $this->ChannelOrderId = $param["ChannelOrderId"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }
    }
}
