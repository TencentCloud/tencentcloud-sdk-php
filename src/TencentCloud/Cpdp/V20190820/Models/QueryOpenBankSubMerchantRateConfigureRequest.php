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
 * QueryOpenBankSubMerchantRateConfigure请求参数结构体
 *
 * @method string getChannelRegistrationNo() 获取渠道进件序列号。
 * @method void setChannelRegistrationNo(string $ChannelRegistrationNo) 设置渠道进件序列号。
 * @method string getChannelMerchantId() 获取渠道商户ID。
 * @method void setChannelMerchantId(string $ChannelMerchantId) 设置渠道商户ID。
 * @method string getChannelSubMerchantId() 获取渠道子商户ID。
 * @method void setChannelSubMerchantId(string $ChannelSubMerchantId) 设置渠道子商户ID。
 * @method string getChannelName() 获取渠道名称。详见附录-云企付枚举类说明-ChannelName。
TENPAY: 商企付
WECHAT: 微信支付
ALIPAY: 支付宝
HELIPAY:合利宝
 * @method void setChannelName(string $ChannelName) 设置渠道名称。详见附录-云企付枚举类说明-ChannelName。
TENPAY: 商企付
WECHAT: 微信支付
ALIPAY: 支付宝
HELIPAY:合利宝
 * @method string getChannelProductFeeNo() 获取渠道产品费率序列号。与外部产品费率序列号二者选填其一。
 * @method void setChannelProductFeeNo(string $ChannelProductFeeNo) 设置渠道产品费率序列号。与外部产品费率序列号二者选填其一。
 * @method string getOutProductFeeNo() 获取外部产品费率序列号。与渠道产品费率序列号二者选填其一。
 * @method void setOutProductFeeNo(string $OutProductFeeNo) 设置外部产品费率序列号。与渠道产品费率序列号二者选填其一。
 * @method string getEnvironment() 获取环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
 * @method void setEnvironment(string $Environment) 设置环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
 */
class QueryOpenBankSubMerchantRateConfigureRequest extends AbstractModel
{
    /**
     * @var string 渠道进件序列号。
     */
    public $ChannelRegistrationNo;

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
TENPAY: 商企付
WECHAT: 微信支付
ALIPAY: 支付宝
HELIPAY:合利宝
     */
    public $ChannelName;

    /**
     * @var string 渠道产品费率序列号。与外部产品费率序列号二者选填其一。
     */
    public $ChannelProductFeeNo;

    /**
     * @var string 外部产品费率序列号。与渠道产品费率序列号二者选填其一。
     */
    public $OutProductFeeNo;

    /**
     * @var string 环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
     */
    public $Environment;

    /**
     * @param string $ChannelRegistrationNo 渠道进件序列号。
     * @param string $ChannelMerchantId 渠道商户ID。
     * @param string $ChannelSubMerchantId 渠道子商户ID。
     * @param string $ChannelName 渠道名称。详见附录-云企付枚举类说明-ChannelName。
TENPAY: 商企付
WECHAT: 微信支付
ALIPAY: 支付宝
HELIPAY:合利宝
     * @param string $ChannelProductFeeNo 渠道产品费率序列号。与外部产品费率序列号二者选填其一。
     * @param string $OutProductFeeNo 外部产品费率序列号。与渠道产品费率序列号二者选填其一。
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

        if (array_key_exists("ChannelMerchantId",$param) and $param["ChannelMerchantId"] !== null) {
            $this->ChannelMerchantId = $param["ChannelMerchantId"];
        }

        if (array_key_exists("ChannelSubMerchantId",$param) and $param["ChannelSubMerchantId"] !== null) {
            $this->ChannelSubMerchantId = $param["ChannelSubMerchantId"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("ChannelProductFeeNo",$param) and $param["ChannelProductFeeNo"] !== null) {
            $this->ChannelProductFeeNo = $param["ChannelProductFeeNo"];
        }

        if (array_key_exists("OutProductFeeNo",$param) and $param["OutProductFeeNo"] !== null) {
            $this->OutProductFeeNo = $param["OutProductFeeNo"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }
    }
}
