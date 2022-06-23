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
 * CreateOpenBankExternalSubMerchantRegistration请求参数结构体
 *
 * @method string getOutRegistrationNo() 获取外部进件序列号。
 * @method void setOutRegistrationNo(string $OutRegistrationNo) 设置外部进件序列号。
 * @method string getChannelMerchantId() 获取渠道商户ID。
 * @method void setChannelMerchantId(string $ChannelMerchantId) 设置渠道商户ID。
 * @method string getOutSubMerchantId() 获取外部子商户ID,平台侧商户唯一ID。
 * @method void setOutSubMerchantId(string $OutSubMerchantId) 设置外部子商户ID,平台侧商户唯一ID。
 * @method string getChannelName() 获取渠道名称。详见附录-云企付枚举类说明-ChannelName。
__TENPAY__: 商企付
__WECHAT__: 微信支付
__ALIPAY__: 支付宝
 * @method void setChannelName(string $ChannelName) 设置渠道名称。详见附录-云企付枚举类说明-ChannelName。
__TENPAY__: 商企付
__WECHAT__: 微信支付
__ALIPAY__: 支付宝
 * @method string getPaymentMethod() 获取支付方式。详见附录-云企付枚举类说明-PaymentMethod。
__EBANK_PAYMENT__: ebank支付
__OPENBANK_PAYMENT__: openbank支付
 * @method void setPaymentMethod(string $PaymentMethod) 设置支付方式。详见附录-云企付枚举类说明-PaymentMethod。
__EBANK_PAYMENT__: ebank支付
__OPENBANK_PAYMENT__: openbank支付
 * @method string getBusinessLicenseNumber() 获取社会信用代码。
 * @method void setBusinessLicenseNumber(string $BusinessLicenseNumber) 设置社会信用代码。
 * @method string getOutSubMerchantName() 获取外部子商户名称。
 * @method void setOutSubMerchantName(string $OutSubMerchantName) 设置外部子商户名称。
 * @method string getLegalName() 获取法人姓名。
 * @method void setLegalName(string $LegalName) 设置法人姓名。
 * @method string getOutSubMerchantShortName() 获取外部子商户简称。
 * @method void setOutSubMerchantShortName(string $OutSubMerchantShortName) 设置外部子商户简称。
 * @method string getOutSubMerchantDescription() 获取外部子商户描述。
 * @method void setOutSubMerchantDescription(string $OutSubMerchantDescription) 设置外部子商户描述。
 * @method string getExternalSubMerchantRegistrationData() 获取第三方子商户进件信息，为JSON格式字符串。详情见附录-复杂类型。
 * @method void setExternalSubMerchantRegistrationData(string $ExternalSubMerchantRegistrationData) 设置第三方子商户进件信息，为JSON格式字符串。详情见附录-复杂类型。
 * @method string getNotifyUrl() 获取通知地址。
 * @method void setNotifyUrl(string $NotifyUrl) 设置通知地址。
 * @method string getEnvironment() 获取环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
 * @method void setEnvironment(string $Environment) 设置环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
 */
class CreateOpenBankExternalSubMerchantRegistrationRequest extends AbstractModel
{
    /**
     * @var string 外部进件序列号。
     */
    public $OutRegistrationNo;

    /**
     * @var string 渠道商户ID。
     */
    public $ChannelMerchantId;

    /**
     * @var string 外部子商户ID,平台侧商户唯一ID。
     */
    public $OutSubMerchantId;

    /**
     * @var string 渠道名称。详见附录-云企付枚举类说明-ChannelName。
__TENPAY__: 商企付
__WECHAT__: 微信支付
__ALIPAY__: 支付宝
     */
    public $ChannelName;

    /**
     * @var string 支付方式。详见附录-云企付枚举类说明-PaymentMethod。
__EBANK_PAYMENT__: ebank支付
__OPENBANK_PAYMENT__: openbank支付
     */
    public $PaymentMethod;

    /**
     * @var string 社会信用代码。
     */
    public $BusinessLicenseNumber;

    /**
     * @var string 外部子商户名称。
     */
    public $OutSubMerchantName;

    /**
     * @var string 法人姓名。
     */
    public $LegalName;

    /**
     * @var string 外部子商户简称。
     */
    public $OutSubMerchantShortName;

    /**
     * @var string 外部子商户描述。
     */
    public $OutSubMerchantDescription;

    /**
     * @var string 第三方子商户进件信息，为JSON格式字符串。详情见附录-复杂类型。
     */
    public $ExternalSubMerchantRegistrationData;

    /**
     * @var string 通知地址。
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
     * @param string $OutRegistrationNo 外部进件序列号。
     * @param string $ChannelMerchantId 渠道商户ID。
     * @param string $OutSubMerchantId 外部子商户ID,平台侧商户唯一ID。
     * @param string $ChannelName 渠道名称。详见附录-云企付枚举类说明-ChannelName。
__TENPAY__: 商企付
__WECHAT__: 微信支付
__ALIPAY__: 支付宝
     * @param string $PaymentMethod 支付方式。详见附录-云企付枚举类说明-PaymentMethod。
__EBANK_PAYMENT__: ebank支付
__OPENBANK_PAYMENT__: openbank支付
     * @param string $BusinessLicenseNumber 社会信用代码。
     * @param string $OutSubMerchantName 外部子商户名称。
     * @param string $LegalName 法人姓名。
     * @param string $OutSubMerchantShortName 外部子商户简称。
     * @param string $OutSubMerchantDescription 外部子商户描述。
     * @param string $ExternalSubMerchantRegistrationData 第三方子商户进件信息，为JSON格式字符串。详情见附录-复杂类型。
     * @param string $NotifyUrl 通知地址。
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
        if (array_key_exists("OutRegistrationNo",$param) and $param["OutRegistrationNo"] !== null) {
            $this->OutRegistrationNo = $param["OutRegistrationNo"];
        }

        if (array_key_exists("ChannelMerchantId",$param) and $param["ChannelMerchantId"] !== null) {
            $this->ChannelMerchantId = $param["ChannelMerchantId"];
        }

        if (array_key_exists("OutSubMerchantId",$param) and $param["OutSubMerchantId"] !== null) {
            $this->OutSubMerchantId = $param["OutSubMerchantId"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("PaymentMethod",$param) and $param["PaymentMethod"] !== null) {
            $this->PaymentMethod = $param["PaymentMethod"];
        }

        if (array_key_exists("BusinessLicenseNumber",$param) and $param["BusinessLicenseNumber"] !== null) {
            $this->BusinessLicenseNumber = $param["BusinessLicenseNumber"];
        }

        if (array_key_exists("OutSubMerchantName",$param) and $param["OutSubMerchantName"] !== null) {
            $this->OutSubMerchantName = $param["OutSubMerchantName"];
        }

        if (array_key_exists("LegalName",$param) and $param["LegalName"] !== null) {
            $this->LegalName = $param["LegalName"];
        }

        if (array_key_exists("OutSubMerchantShortName",$param) and $param["OutSubMerchantShortName"] !== null) {
            $this->OutSubMerchantShortName = $param["OutSubMerchantShortName"];
        }

        if (array_key_exists("OutSubMerchantDescription",$param) and $param["OutSubMerchantDescription"] !== null) {
            $this->OutSubMerchantDescription = $param["OutSubMerchantDescription"];
        }

        if (array_key_exists("ExternalSubMerchantRegistrationData",$param) and $param["ExternalSubMerchantRegistrationData"] !== null) {
            $this->ExternalSubMerchantRegistrationData = $param["ExternalSubMerchantRegistrationData"];
        }

        if (array_key_exists("NotifyUrl",$param) and $param["NotifyUrl"] !== null) {
            $this->NotifyUrl = $param["NotifyUrl"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }
    }
}
