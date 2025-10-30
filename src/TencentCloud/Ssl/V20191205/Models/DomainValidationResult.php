<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 证书域名验证结果
 *
 * @method string getDomain() 获取证书绑定的域名。
 * @method void setDomain(string $Domain) 设置证书绑定的域名。
 * @method string getVerifyType() 获取域名验证类型。 取值为：DNS、FILE、DNS_AUTO、DNS_PROXY、FILE_PROXY
 * @method void setVerifyType(string $VerifyType) 设置域名验证类型。 取值为：DNS、FILE、DNS_AUTO、DNS_PROXY、FILE_PROXY
 * @method integer getLocalCheck() 获取腾讯云检测结果，取值：1（验证通过）； -1（被限频或者 txt record not found）；-2（txt record not match）；-3（ns record not found）；-4（file not found）；-5（file not match）；-6（cname record not found）；-7（cname record not match）；-8（ns record not found）-9（file not found）；-10（file not match）

 * @method void setLocalCheck(integer $LocalCheck) 设置腾讯云检测结果，取值：1（验证通过）； -1（被限频或者 txt record not found）；-2（txt record not match）；-3（ns record not found）；-4（file not found）；-5（file not match）；-6（cname record not found）；-7（cname record not match）；-8（ns record not found）-9（file not found）；-10（file not match）

 * @method integer getCaCheck() 获取CA检查结果。取值： -1（未检测通过）；2（检测通过）
 * @method void setCaCheck(integer $CaCheck) 设置CA检查结果。取值： -1（未检测通过）；2（检测通过）
 * @method string getLocalCheckFailReason() 获取检查失败原因。状态LocalCheck的具体描述
 * @method void setLocalCheckFailReason(string $LocalCheckFailReason) 设置检查失败原因。状态LocalCheck的具体描述
 * @method array getCheckValue() 获取检查到的值。
 * @method void setCheckValue(array $CheckValue) 设置检查到的值。
 * @method boolean getFrequently() 获取是否被限频拦截， 取值：false（未被限频）；true（被限频）
 * @method void setFrequently(boolean $Frequently) 设置是否被限频拦截， 取值：false（未被限频）；true（被限频）
 * @method boolean getIssued() 获取证书是否已经签发。取值： false（未签发）；true（已签发）
 * @method void setIssued(boolean $Issued) 设置证书是否已经签发。取值： false（未签发）；true（已签发）
 */
class DomainValidationResult extends AbstractModel
{
    /**
     * @var string 证书绑定的域名。
     */
    public $Domain;

    /**
     * @var string 域名验证类型。 取值为：DNS、FILE、DNS_AUTO、DNS_PROXY、FILE_PROXY
     */
    public $VerifyType;

    /**
     * @var integer 腾讯云检测结果，取值：1（验证通过）； -1（被限频或者 txt record not found）；-2（txt record not match）；-3（ns record not found）；-4（file not found）；-5（file not match）；-6（cname record not found）；-7（cname record not match）；-8（ns record not found）-9（file not found）；-10（file not match）

     */
    public $LocalCheck;

    /**
     * @var integer CA检查结果。取值： -1（未检测通过）；2（检测通过）
     */
    public $CaCheck;

    /**
     * @var string 检查失败原因。状态LocalCheck的具体描述
     */
    public $LocalCheckFailReason;

    /**
     * @var array 检查到的值。
     */
    public $CheckValue;

    /**
     * @var boolean 是否被限频拦截， 取值：false（未被限频）；true（被限频）
     */
    public $Frequently;

    /**
     * @var boolean 证书是否已经签发。取值： false（未签发）；true（已签发）
     */
    public $Issued;

    /**
     * @param string $Domain 证书绑定的域名。
     * @param string $VerifyType 域名验证类型。 取值为：DNS、FILE、DNS_AUTO、DNS_PROXY、FILE_PROXY
     * @param integer $LocalCheck 腾讯云检测结果，取值：1（验证通过）； -1（被限频或者 txt record not found）；-2（txt record not match）；-3（ns record not found）；-4（file not found）；-5（file not match）；-6（cname record not found）；-7（cname record not match）；-8（ns record not found）-9（file not found）；-10（file not match）

     * @param integer $CaCheck CA检查结果。取值： -1（未检测通过）；2（检测通过）
     * @param string $LocalCheckFailReason 检查失败原因。状态LocalCheck的具体描述
     * @param array $CheckValue 检查到的值。
     * @param boolean $Frequently 是否被限频拦截， 取值：false（未被限频）；true（被限频）
     * @param boolean $Issued 证书是否已经签发。取值： false（未签发）；true（已签发）
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("VerifyType",$param) and $param["VerifyType"] !== null) {
            $this->VerifyType = $param["VerifyType"];
        }

        if (array_key_exists("LocalCheck",$param) and $param["LocalCheck"] !== null) {
            $this->LocalCheck = $param["LocalCheck"];
        }

        if (array_key_exists("CaCheck",$param) and $param["CaCheck"] !== null) {
            $this->CaCheck = $param["CaCheck"];
        }

        if (array_key_exists("LocalCheckFailReason",$param) and $param["LocalCheckFailReason"] !== null) {
            $this->LocalCheckFailReason = $param["LocalCheckFailReason"];
        }

        if (array_key_exists("CheckValue",$param) and $param["CheckValue"] !== null) {
            $this->CheckValue = $param["CheckValue"];
        }

        if (array_key_exists("Frequently",$param) and $param["Frequently"] !== null) {
            $this->Frequently = $param["Frequently"];
        }

        if (array_key_exists("Issued",$param) and $param["Issued"] !== null) {
            $this->Issued = $param["Issued"];
        }
    }
}
