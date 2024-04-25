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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyModuleStatus请求参数结构体
 *
 * @method string getDomain() 获取需要设置的domain
 * @method void setDomain(string $Domain) 设置需要设置的domain
 * @method integer getWebSecurity() 获取Web 安全模块开关，0或1
 * @method void setWebSecurity(integer $WebSecurity) 设置Web 安全模块开关，0或1
 * @method integer getAccessControl() 获取访问控制模块开关，0或者1
 * @method void setAccessControl(integer $AccessControl) 设置访问控制模块开关，0或者1
 * @method integer getCcProtection() 获取CC模块开关，0或者1
 * @method void setCcProtection(integer $CcProtection) 设置CC模块开关，0或者1
 * @method integer getApiProtection() 获取API安全模块开关，0或者1
 * @method void setApiProtection(integer $ApiProtection) 设置API安全模块开关，0或者1
 * @method integer getAntiTamper() 获取防篡改模块开关，0或者1
 * @method void setAntiTamper(integer $AntiTamper) 设置防篡改模块开关，0或者1
 * @method integer getAntiLeakage() 获取防泄漏模块开关，0或者1
 * @method void setAntiLeakage(integer $AntiLeakage) 设置防泄漏模块开关，0或者1
 * @method integer getRateLimit() 获取限流模块开关，0或1
 * @method void setRateLimit(integer $RateLimit) 设置限流模块开关，0或1
 */
class ModifyModuleStatusRequest extends AbstractModel
{
    /**
     * @var string 需要设置的domain
     */
    public $Domain;

    /**
     * @var integer Web 安全模块开关，0或1
     */
    public $WebSecurity;

    /**
     * @var integer 访问控制模块开关，0或者1
     */
    public $AccessControl;

    /**
     * @var integer CC模块开关，0或者1
     */
    public $CcProtection;

    /**
     * @var integer API安全模块开关，0或者1
     */
    public $ApiProtection;

    /**
     * @var integer 防篡改模块开关，0或者1
     */
    public $AntiTamper;

    /**
     * @var integer 防泄漏模块开关，0或者1
     */
    public $AntiLeakage;

    /**
     * @var integer 限流模块开关，0或1
     */
    public $RateLimit;

    /**
     * @param string $Domain 需要设置的domain
     * @param integer $WebSecurity Web 安全模块开关，0或1
     * @param integer $AccessControl 访问控制模块开关，0或者1
     * @param integer $CcProtection CC模块开关，0或者1
     * @param integer $ApiProtection API安全模块开关，0或者1
     * @param integer $AntiTamper 防篡改模块开关，0或者1
     * @param integer $AntiLeakage 防泄漏模块开关，0或者1
     * @param integer $RateLimit 限流模块开关，0或1
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

        if (array_key_exists("WebSecurity",$param) and $param["WebSecurity"] !== null) {
            $this->WebSecurity = $param["WebSecurity"];
        }

        if (array_key_exists("AccessControl",$param) and $param["AccessControl"] !== null) {
            $this->AccessControl = $param["AccessControl"];
        }

        if (array_key_exists("CcProtection",$param) and $param["CcProtection"] !== null) {
            $this->CcProtection = $param["CcProtection"];
        }

        if (array_key_exists("ApiProtection",$param) and $param["ApiProtection"] !== null) {
            $this->ApiProtection = $param["ApiProtection"];
        }

        if (array_key_exists("AntiTamper",$param) and $param["AntiTamper"] !== null) {
            $this->AntiTamper = $param["AntiTamper"];
        }

        if (array_key_exists("AntiLeakage",$param) and $param["AntiLeakage"] !== null) {
            $this->AntiLeakage = $param["AntiLeakage"];
        }

        if (array_key_exists("RateLimit",$param) and $param["RateLimit"] !== null) {
            $this->RateLimit = $param["RateLimit"];
        }
    }
}
