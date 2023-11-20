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
 * DescribeModuleStatus返回参数结构体
 *
 * @method integer getWebSecurity() 获取WEB安全规则是否开启
 * @method void setWebSecurity(integer $WebSecurity) 设置WEB安全规则是否开启
 * @method integer getAccessControl() 获取访问控制规则是否开启
 * @method void setAccessControl(integer $AccessControl) 设置访问控制规则是否开启
 * @method integer getCcProtection() 获取CC防护是否开启
 * @method void setCcProtection(integer $CcProtection) 设置CC防护是否开启
 * @method integer getAntiTamper() 获取网页防篡改是否开启
 * @method void setAntiTamper(integer $AntiTamper) 设置网页防篡改是否开启
 * @method integer getAntiLeakage() 获取信息防泄漏是否开启
 * @method void setAntiLeakage(integer $AntiLeakage) 设置信息防泄漏是否开启
 * @method integer getApiProtection() 获取API安全是否开启
 * @method void setApiProtection(integer $ApiProtection) 设置API安全是否开启
 * @method integer getRateLimit() 获取限流模块开关
 * @method void setRateLimit(integer $RateLimit) 设置限流模块开关
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeModuleStatusResponse extends AbstractModel
{
    /**
     * @var integer WEB安全规则是否开启
     */
    public $WebSecurity;

    /**
     * @var integer 访问控制规则是否开启
     */
    public $AccessControl;

    /**
     * @var integer CC防护是否开启
     */
    public $CcProtection;

    /**
     * @var integer 网页防篡改是否开启
     */
    public $AntiTamper;

    /**
     * @var integer 信息防泄漏是否开启
     */
    public $AntiLeakage;

    /**
     * @var integer API安全是否开启
     */
    public $ApiProtection;

    /**
     * @var integer 限流模块开关
     */
    public $RateLimit;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $WebSecurity WEB安全规则是否开启
     * @param integer $AccessControl 访问控制规则是否开启
     * @param integer $CcProtection CC防护是否开启
     * @param integer $AntiTamper 网页防篡改是否开启
     * @param integer $AntiLeakage 信息防泄漏是否开启
     * @param integer $ApiProtection API安全是否开启
     * @param integer $RateLimit 限流模块开关
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("WebSecurity",$param) and $param["WebSecurity"] !== null) {
            $this->WebSecurity = $param["WebSecurity"];
        }

        if (array_key_exists("AccessControl",$param) and $param["AccessControl"] !== null) {
            $this->AccessControl = $param["AccessControl"];
        }

        if (array_key_exists("CcProtection",$param) and $param["CcProtection"] !== null) {
            $this->CcProtection = $param["CcProtection"];
        }

        if (array_key_exists("AntiTamper",$param) and $param["AntiTamper"] !== null) {
            $this->AntiTamper = $param["AntiTamper"];
        }

        if (array_key_exists("AntiLeakage",$param) and $param["AntiLeakage"] !== null) {
            $this->AntiLeakage = $param["AntiLeakage"];
        }

        if (array_key_exists("ApiProtection",$param) and $param["ApiProtection"] !== null) {
            $this->ApiProtection = $param["ApiProtection"];
        }

        if (array_key_exists("RateLimit",$param) and $param["RateLimit"] !== null) {
            $this->RateLimit = $param["RateLimit"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
