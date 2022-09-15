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
 * VerifyOpenBankAccount请求参数结构体
 *
 * @method string getChannelMerchantId() 获取渠道商户号。外部接入平台入驻云企付平台下发
 * @method void setChannelMerchantId(string $ChannelMerchantId) 设置渠道商户号。外部接入平台入驻云企付平台下发
 * @method string getChannelName() 获取渠道名称。详见附录-云企付枚举类说明-ChannelName。
__TENPAY__: 商企付
 * @method void setChannelName(string $ChannelName) 设置渠道名称。详见附录-云企付枚举类说明-ChannelName。
__TENPAY__: 商企付
 * @method OpenBankPayeeInfo getPayeeInfo() 获取收款方信息。
 * @method void setPayeeInfo(OpenBankPayeeInfo $PayeeInfo) 设置收款方信息。
 * @method string getNotifyUrl() 获取通知地址，如www.test.com。
 * @method void setNotifyUrl(string $NotifyUrl) 设置通知地址，如www.test.com。
 * @method string getEnvironment() 获取环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
 * @method void setEnvironment(string $Environment) 设置环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
 */
class VerifyOpenBankAccountRequest extends AbstractModel
{
    /**
     * @var string 渠道商户号。外部接入平台入驻云企付平台下发
     */
    public $ChannelMerchantId;

    /**
     * @var string 渠道名称。详见附录-云企付枚举类说明-ChannelName。
__TENPAY__: 商企付
     */
    public $ChannelName;

    /**
     * @var OpenBankPayeeInfo 收款方信息。
     */
    public $PayeeInfo;

    /**
     * @var string 通知地址，如www.test.com。
     */
    public $NotifyUrl;

    /**
     * @var string 环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
     */
    public $Environment;

    /**
     * @param string $ChannelMerchantId 渠道商户号。外部接入平台入驻云企付平台下发
     * @param string $ChannelName 渠道名称。详见附录-云企付枚举类说明-ChannelName。
__TENPAY__: 商企付
     * @param OpenBankPayeeInfo $PayeeInfo 收款方信息。
     * @param string $NotifyUrl 通知地址，如www.test.com。
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

        if (array_key_exists("PayeeInfo",$param) and $param["PayeeInfo"] !== null) {
            $this->PayeeInfo = new OpenBankPayeeInfo();
            $this->PayeeInfo->deserialize($param["PayeeInfo"]);
        }

        if (array_key_exists("NotifyUrl",$param) and $param["NotifyUrl"] !== null) {
            $this->NotifyUrl = $param["NotifyUrl"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }
    }
}
