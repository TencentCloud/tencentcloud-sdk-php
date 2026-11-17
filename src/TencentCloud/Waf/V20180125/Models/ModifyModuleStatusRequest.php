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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyModuleStatus请求参数结构体
 *
 * @method string getDomain() 获取<p>需要设置的domain</p>
 * @method void setDomain(string $Domain) 设置<p>需要设置的domain</p>
 * @method integer getWebSecurity() 获取<p>Web 安全模块开关，0或1</p>
 * @method void setWebSecurity(integer $WebSecurity) 设置<p>Web 安全模块开关，0或1</p>
 * @method integer getAccessControl() 获取<p>访问控制模块开关，0或者1</p>
 * @method void setAccessControl(integer $AccessControl) 设置<p>访问控制模块开关，0或者1</p>
 * @method integer getCcProtection() 获取<p>CC模块开关，0或者1</p>
 * @method void setCcProtection(integer $CcProtection) 设置<p>CC模块开关，0或者1</p>
 * @method integer getApiProtection() 获取<p>API安全模块开关，0或者1</p>
 * @method void setApiProtection(integer $ApiProtection) 设置<p>API安全模块开关，0或者1</p>
 * @method integer getApiDetect() 获取<p>API安全检测开关，0关闭1开启</p>
 * @method void setApiDetect(integer $ApiDetect) 设置<p>API安全检测开关，0关闭1开启</p>
 * @method integer getAntiTamper() 获取<p>防篡改模块开关，0或者1</p>
 * @method void setAntiTamper(integer $AntiTamper) 设置<p>防篡改模块开关，0或者1</p>
 * @method integer getAntiLeakage() 获取<p>防泄漏模块开关，0或者1</p>
 * @method void setAntiLeakage(integer $AntiLeakage) 设置<p>防泄漏模块开关，0或者1</p>
 * @method integer getRateLimit() 获取<p>限流模块开关，0或1</p>
 * @method void setRateLimit(integer $RateLimit) 设置<p>限流模块开关，0或1</p>
 * @method integer getGzipAnalysis() 获取<p>gzip 开关</p>
 * @method void setGzipAnalysis(integer $GzipAnalysis) 设置<p>gzip 开关</p>
 */
class ModifyModuleStatusRequest extends AbstractModel
{
    /**
     * @var string <p>需要设置的domain</p>
     */
    public $Domain;

    /**
     * @var integer <p>Web 安全模块开关，0或1</p>
     */
    public $WebSecurity;

    /**
     * @var integer <p>访问控制模块开关，0或者1</p>
     */
    public $AccessControl;

    /**
     * @var integer <p>CC模块开关，0或者1</p>
     */
    public $CcProtection;

    /**
     * @var integer <p>API安全模块开关，0或者1</p>
     */
    public $ApiProtection;

    /**
     * @var integer <p>API安全检测开关，0关闭1开启</p>
     */
    public $ApiDetect;

    /**
     * @var integer <p>防篡改模块开关，0或者1</p>
     */
    public $AntiTamper;

    /**
     * @var integer <p>防泄漏模块开关，0或者1</p>
     */
    public $AntiLeakage;

    /**
     * @var integer <p>限流模块开关，0或1</p>
     */
    public $RateLimit;

    /**
     * @var integer <p>gzip 开关</p>
     */
    public $GzipAnalysis;

    /**
     * @param string $Domain <p>需要设置的domain</p>
     * @param integer $WebSecurity <p>Web 安全模块开关，0或1</p>
     * @param integer $AccessControl <p>访问控制模块开关，0或者1</p>
     * @param integer $CcProtection <p>CC模块开关，0或者1</p>
     * @param integer $ApiProtection <p>API安全模块开关，0或者1</p>
     * @param integer $ApiDetect <p>API安全检测开关，0关闭1开启</p>
     * @param integer $AntiTamper <p>防篡改模块开关，0或者1</p>
     * @param integer $AntiLeakage <p>防泄漏模块开关，0或者1</p>
     * @param integer $RateLimit <p>限流模块开关，0或1</p>
     * @param integer $GzipAnalysis <p>gzip 开关</p>
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

        if (array_key_exists("ApiDetect",$param) and $param["ApiDetect"] !== null) {
            $this->ApiDetect = $param["ApiDetect"];
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

        if (array_key_exists("GzipAnalysis",$param) and $param["GzipAnalysis"] !== null) {
            $this->GzipAnalysis = $param["GzipAnalysis"];
        }
    }
}
