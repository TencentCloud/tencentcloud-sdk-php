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
 * DescribeModuleStatus返回参数结构体
 *
 * @method integer getWebSecurity() 获取<p>WEB安全规则是否开启</p>
 * @method void setWebSecurity(integer $WebSecurity) 设置<p>WEB安全规则是否开启</p>
 * @method integer getAccessControl() 获取<p>访问控制规则是否开启</p>
 * @method void setAccessControl(integer $AccessControl) 设置<p>访问控制规则是否开启</p>
 * @method integer getCcProtection() 获取<p>CC防护是否开启</p>
 * @method void setCcProtection(integer $CcProtection) 设置<p>CC防护是否开启</p>
 * @method integer getAntiTamper() 获取<p>网页防篡改是否开启</p>
 * @method void setAntiTamper(integer $AntiTamper) 设置<p>网页防篡改是否开启</p>
 * @method integer getAntiLeakage() 获取<p>信息防泄漏是否开启</p>
 * @method void setAntiLeakage(integer $AntiLeakage) 设置<p>信息防泄漏是否开启</p>
 * @method integer getApiProtection() 获取<p>API安全是否开启</p>
 * @method void setApiProtection(integer $ApiProtection) 设置<p>API安全是否开启</p>
 * @method integer getApiDetect() 获取<p>API安全检测开关是否开启</p>
 * @method void setApiDetect(integer $ApiDetect) 设置<p>API安全检测开关是否开启</p>
 * @method integer getRateLimit() 获取<p>限流模块开关，0表示关闭，1表示开启</p>
 * @method void setRateLimit(integer $RateLimit) 设置<p>限流模块开关，0表示关闭，1表示开启</p>
 * @method integer getGzipAnalysis() 获取<p>gzip 开关</p>
 * @method void setGzipAnalysis(integer $GzipAnalysis) 设置<p>gzip 开关</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeModuleStatusResponse extends AbstractModel
{
    /**
     * @var integer <p>WEB安全规则是否开启</p>
     */
    public $WebSecurity;

    /**
     * @var integer <p>访问控制规则是否开启</p>
     */
    public $AccessControl;

    /**
     * @var integer <p>CC防护是否开启</p>
     */
    public $CcProtection;

    /**
     * @var integer <p>网页防篡改是否开启</p>
     */
    public $AntiTamper;

    /**
     * @var integer <p>信息防泄漏是否开启</p>
     */
    public $AntiLeakage;

    /**
     * @var integer <p>API安全是否开启</p>
     */
    public $ApiProtection;

    /**
     * @var integer <p>API安全检测开关是否开启</p>
     */
    public $ApiDetect;

    /**
     * @var integer <p>限流模块开关，0表示关闭，1表示开启</p>
     */
    public $RateLimit;

    /**
     * @var integer <p>gzip 开关</p>
     */
    public $GzipAnalysis;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $WebSecurity <p>WEB安全规则是否开启</p>
     * @param integer $AccessControl <p>访问控制规则是否开启</p>
     * @param integer $CcProtection <p>CC防护是否开启</p>
     * @param integer $AntiTamper <p>网页防篡改是否开启</p>
     * @param integer $AntiLeakage <p>信息防泄漏是否开启</p>
     * @param integer $ApiProtection <p>API安全是否开启</p>
     * @param integer $ApiDetect <p>API安全检测开关是否开启</p>
     * @param integer $RateLimit <p>限流模块开关，0表示关闭，1表示开启</p>
     * @param integer $GzipAnalysis <p>gzip 开关</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("ApiDetect",$param) and $param["ApiDetect"] !== null) {
            $this->ApiDetect = $param["ApiDetect"];
        }

        if (array_key_exists("RateLimit",$param) and $param["RateLimit"] !== null) {
            $this->RateLimit = $param["RateLimit"];
        }

        if (array_key_exists("GzipAnalysis",$param) and $param["GzipAnalysis"] !== null) {
            $this->GzipAnalysis = $param["GzipAnalysis"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
