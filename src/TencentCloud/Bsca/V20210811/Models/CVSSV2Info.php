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
namespace TencentCloud\Bsca\V20210811\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CVSSv2.0详细信息。
 *
 * @method float getCVSS() 获取CVE评分。
 * @method void setCVSS(float $CVSS) 设置CVE评分。
 * @method string getAccessVector() 获取AccessVector 攻击途径。
取值范围：
<li>NETWORK 远程</li>
<li>ADJACENT_NETWORK 近邻</li>
<li>LOCAL 本地</li>
 * @method void setAccessVector(string $AccessVector) 设置AccessVector 攻击途径。
取值范围：
<li>NETWORK 远程</li>
<li>ADJACENT_NETWORK 近邻</li>
<li>LOCAL 本地</li>
 * @method string getAccessComplexity() 获取AccessComplexity 攻击复杂度。
取值范围：
<li>HIGH 高</li>
<li>MEDIUM 中</li>
<li>LOW 低</li>
 * @method void setAccessComplexity(string $AccessComplexity) 设置AccessComplexity 攻击复杂度。
取值范围：
<li>HIGH 高</li>
<li>MEDIUM 中</li>
<li>LOW 低</li>
 * @method string getAuthentication() 获取Authentication 身份验证。
取值范围：
<li>MULTIPLE 多系统认证</li>
<li>SINGLE 单系统认证</li>
<li>NONE 无</li>
 * @method void setAuthentication(string $Authentication) 设置Authentication 身份验证。
取值范围：
<li>MULTIPLE 多系统认证</li>
<li>SINGLE 单系统认证</li>
<li>NONE 无</li>
 * @method string getConImpact() 获取ConfidentialityImpact 机密性影响。
取值范围：
<li>NONE 无</li>
<li>PARTIAL 部分</li>
<li>COMPLETE 完整</li>
 * @method void setConImpact(string $ConImpact) 设置ConfidentialityImpact 机密性影响。
取值范围：
<li>NONE 无</li>
<li>PARTIAL 部分</li>
<li>COMPLETE 完整</li>
 * @method string getIntegrityImpact() 获取IntegrityImpact 完整性影响。
取值范围：
<li>NONE 无</li>
<li>PARTIAL 部分</li>
<li>COMPLETE 完整</li>
 * @method void setIntegrityImpact(string $IntegrityImpact) 设置IntegrityImpact 完整性影响。
取值范围：
<li>NONE 无</li>
<li>PARTIAL 部分</li>
<li>COMPLETE 完整</li>
 * @method string getAvailabilityImpact() 获取AvailabilityImpact 可用性影响。
取值范围：
<li>NONE 无</li>
<li>PARTIAL 部分</li>
<li>COMPLETE 完整</li>
 * @method void setAvailabilityImpact(string $AvailabilityImpact) 设置AvailabilityImpact 可用性影响。
取值范围：
<li>NONE 无</li>
<li>PARTIAL 部分</li>
<li>COMPLETE 完整</li>
 */
class CVSSV2Info extends AbstractModel
{
    /**
     * @var float CVE评分。
     */
    public $CVSS;

    /**
     * @var string AccessVector 攻击途径。
取值范围：
<li>NETWORK 远程</li>
<li>ADJACENT_NETWORK 近邻</li>
<li>LOCAL 本地</li>
     */
    public $AccessVector;

    /**
     * @var string AccessComplexity 攻击复杂度。
取值范围：
<li>HIGH 高</li>
<li>MEDIUM 中</li>
<li>LOW 低</li>
     */
    public $AccessComplexity;

    /**
     * @var string Authentication 身份验证。
取值范围：
<li>MULTIPLE 多系统认证</li>
<li>SINGLE 单系统认证</li>
<li>NONE 无</li>
     */
    public $Authentication;

    /**
     * @var string ConfidentialityImpact 机密性影响。
取值范围：
<li>NONE 无</li>
<li>PARTIAL 部分</li>
<li>COMPLETE 完整</li>
     */
    public $ConImpact;

    /**
     * @var string IntegrityImpact 完整性影响。
取值范围：
<li>NONE 无</li>
<li>PARTIAL 部分</li>
<li>COMPLETE 完整</li>
     */
    public $IntegrityImpact;

    /**
     * @var string AvailabilityImpact 可用性影响。
取值范围：
<li>NONE 无</li>
<li>PARTIAL 部分</li>
<li>COMPLETE 完整</li>
     */
    public $AvailabilityImpact;

    /**
     * @param float $CVSS CVE评分。
     * @param string $AccessVector AccessVector 攻击途径。
取值范围：
<li>NETWORK 远程</li>
<li>ADJACENT_NETWORK 近邻</li>
<li>LOCAL 本地</li>
     * @param string $AccessComplexity AccessComplexity 攻击复杂度。
取值范围：
<li>HIGH 高</li>
<li>MEDIUM 中</li>
<li>LOW 低</li>
     * @param string $Authentication Authentication 身份验证。
取值范围：
<li>MULTIPLE 多系统认证</li>
<li>SINGLE 单系统认证</li>
<li>NONE 无</li>
     * @param string $ConImpact ConfidentialityImpact 机密性影响。
取值范围：
<li>NONE 无</li>
<li>PARTIAL 部分</li>
<li>COMPLETE 完整</li>
     * @param string $IntegrityImpact IntegrityImpact 完整性影响。
取值范围：
<li>NONE 无</li>
<li>PARTIAL 部分</li>
<li>COMPLETE 完整</li>
     * @param string $AvailabilityImpact AvailabilityImpact 可用性影响。
取值范围：
<li>NONE 无</li>
<li>PARTIAL 部分</li>
<li>COMPLETE 完整</li>
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
        if (array_key_exists("CVSS",$param) and $param["CVSS"] !== null) {
            $this->CVSS = $param["CVSS"];
        }

        if (array_key_exists("AccessVector",$param) and $param["AccessVector"] !== null) {
            $this->AccessVector = $param["AccessVector"];
        }

        if (array_key_exists("AccessComplexity",$param) and $param["AccessComplexity"] !== null) {
            $this->AccessComplexity = $param["AccessComplexity"];
        }

        if (array_key_exists("Authentication",$param) and $param["Authentication"] !== null) {
            $this->Authentication = $param["Authentication"];
        }

        if (array_key_exists("ConImpact",$param) and $param["ConImpact"] !== null) {
            $this->ConImpact = $param["ConImpact"];
        }

        if (array_key_exists("IntegrityImpact",$param) and $param["IntegrityImpact"] !== null) {
            $this->IntegrityImpact = $param["IntegrityImpact"];
        }

        if (array_key_exists("AvailabilityImpact",$param) and $param["AvailabilityImpact"] !== null) {
            $this->AvailabilityImpact = $param["AvailabilityImpact"];
        }
    }
}
