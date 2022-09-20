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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDDoSPolicyHost请求参数结构体
 *
 * @method string getZoneId() 获取站点Id。
 * @method void setZoneId(string $ZoneId) 设置站点Id。
 * @method string getHost() 获取子域名/应用名。
 * @method void setHost(string $Host) 设置子域名/应用名。
 * @method string getAccelerateType() 获取加速开关，取值有：
<li>on：开启加速；</li>
<li>off：关闭加速。</li>
 * @method void setAccelerateType(string $AccelerateType) 设置加速开关，取值有：
<li>on：开启加速；</li>
<li>off：关闭加速。</li>
 * @method integer getPolicyId() 获取策略id。
 * @method void setPolicyId(integer $PolicyId) 设置策略id。
 * @method string getSecurityType() 获取安全开关，取值有：
<li>on：开启安全；</li>
<li>off：关闭安全。</li>
 * @method void setSecurityType(string $SecurityType) 设置安全开关，取值有：
<li>on：开启安全；</li>
<li>off：关闭安全。</li>
 */
class ModifyDDoSPolicyHostRequest extends AbstractModel
{
    /**
     * @var string 站点Id。
     */
    public $ZoneId;

    /**
     * @var string 子域名/应用名。
     */
    public $Host;

    /**
     * @var string 加速开关，取值有：
<li>on：开启加速；</li>
<li>off：关闭加速。</li>
     */
    public $AccelerateType;

    /**
     * @var integer 策略id。
     */
    public $PolicyId;

    /**
     * @var string 安全开关，取值有：
<li>on：开启安全；</li>
<li>off：关闭安全。</li>
     */
    public $SecurityType;

    /**
     * @param string $ZoneId 站点Id。
     * @param string $Host 子域名/应用名。
     * @param string $AccelerateType 加速开关，取值有：
<li>on：开启加速；</li>
<li>off：关闭加速。</li>
     * @param integer $PolicyId 策略id。
     * @param string $SecurityType 安全开关，取值有：
<li>on：开启安全；</li>
<li>off：关闭安全。</li>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("AccelerateType",$param) and $param["AccelerateType"] !== null) {
            $this->AccelerateType = $param["AccelerateType"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("SecurityType",$param) and $param["SecurityType"] !== null) {
            $this->SecurityType = $param["SecurityType"];
        }
    }
}
