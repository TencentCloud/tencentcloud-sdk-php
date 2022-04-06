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
 * Cvssv3.0详细信息。
 *
 * @method float getCVSS() 获取CVE评分。
 * @method void setCVSS(float $CVSS) 设置CVE评分。
 * @method string getAttackVector() 获取AttackVector 攻击途径。
取值范围：
<li>NETWORK 远程</li>
<li>ADJACENT_NETWORK 近邻</li>
<li>LOCAL 本地</li>
<li>PHYSICAL 物理</li>
 * @method void setAttackVector(string $AttackVector) 设置AttackVector 攻击途径。
取值范围：
<li>NETWORK 远程</li>
<li>ADJACENT_NETWORK 近邻</li>
<li>LOCAL 本地</li>
<li>PHYSICAL 物理</li>
 * @method string getAttackComplexity() 获取AttackComplexity 攻击复杂度。
取值范围：
<li>HIGH 高</li>
<li>LOW 低</li>
 * @method void setAttackComplexity(string $AttackComplexity) 设置AttackComplexity 攻击复杂度。
取值范围：
<li>HIGH 高</li>
<li>LOW 低</li>
 * @method string getPrivilegesRequired() 获取PrivilegesRequired 触发特权。
取值范围：
<li>HIGH 高</li>
<li>LOW 低</li>
<li>NONE 无</li>
 * @method void setPrivilegesRequired(string $PrivilegesRequired) 设置PrivilegesRequired 触发特权。
取值范围：
<li>HIGH 高</li>
<li>LOW 低</li>
<li>NONE 无</li>
 * @method string getUserInteraction() 获取UserInteraction 交互必要性。
取值范围：
<li>NONE 无</li>
<li>REQUIRED 需要</li>
 * @method void setUserInteraction(string $UserInteraction) 设置UserInteraction 交互必要性。
取值范围：
<li>NONE 无</li>
<li>REQUIRED 需要</li>
 * @method string getScope() 获取Scope 绕过安全边界。
取值范围：
<li>UNCHANGED 否</li>
<li>CHANGED 能</li>
 * @method void setScope(string $Scope) 设置Scope 绕过安全边界。
取值范围：
<li>UNCHANGED 否</li>
<li>CHANGED 能</li>
 * @method string getConImpact() 获取ConfidentialityImpact 机密性影响。
取值范围：
<li>NONE 无</li>
<li>LOW 低</li>
<li>HIGH 高</li>
 * @method void setConImpact(string $ConImpact) 设置ConfidentialityImpact 机密性影响。
取值范围：
<li>NONE 无</li>
<li>LOW 低</li>
<li>HIGH 高</li>
 * @method string getIntegrityImpact() 获取IntegrityImpact 完整性影响。
取值范围：
<li>NONE 无</li>
<li>LOW 低</li>
<li>HIGH 高</li>
 * @method void setIntegrityImpact(string $IntegrityImpact) 设置IntegrityImpact 完整性影响。
取值范围：
<li>NONE 无</li>
<li>LOW 低</li>
<li>HIGH 高</li>
 * @method string getAvailabilityImpact() 获取AvailabilityImpact 可用性影响。
取值范围：
<li>NONE 无</li>
<li>LOW 低</li>
<li>HIGH 高</li>
 * @method void setAvailabilityImpact(string $AvailabilityImpact) 设置AvailabilityImpact 可用性影响。
取值范围：
<li>NONE 无</li>
<li>LOW 低</li>
<li>HIGH 高</li>
 */
class CVSSV3Info extends AbstractModel
{
    /**
     * @var float CVE评分。
     */
    public $CVSS;

    /**
     * @var string AttackVector 攻击途径。
取值范围：
<li>NETWORK 远程</li>
<li>ADJACENT_NETWORK 近邻</li>
<li>LOCAL 本地</li>
<li>PHYSICAL 物理</li>
     */
    public $AttackVector;

    /**
     * @var string AttackComplexity 攻击复杂度。
取值范围：
<li>HIGH 高</li>
<li>LOW 低</li>
     */
    public $AttackComplexity;

    /**
     * @var string PrivilegesRequired 触发特权。
取值范围：
<li>HIGH 高</li>
<li>LOW 低</li>
<li>NONE 无</li>
     */
    public $PrivilegesRequired;

    /**
     * @var string UserInteraction 交互必要性。
取值范围：
<li>NONE 无</li>
<li>REQUIRED 需要</li>
     */
    public $UserInteraction;

    /**
     * @var string Scope 绕过安全边界。
取值范围：
<li>UNCHANGED 否</li>
<li>CHANGED 能</li>
     */
    public $Scope;

    /**
     * @var string ConfidentialityImpact 机密性影响。
取值范围：
<li>NONE 无</li>
<li>LOW 低</li>
<li>HIGH 高</li>
     */
    public $ConImpact;

    /**
     * @var string IntegrityImpact 完整性影响。
取值范围：
<li>NONE 无</li>
<li>LOW 低</li>
<li>HIGH 高</li>
     */
    public $IntegrityImpact;

    /**
     * @var string AvailabilityImpact 可用性影响。
取值范围：
<li>NONE 无</li>
<li>LOW 低</li>
<li>HIGH 高</li>
     */
    public $AvailabilityImpact;

    /**
     * @param float $CVSS CVE评分。
     * @param string $AttackVector AttackVector 攻击途径。
取值范围：
<li>NETWORK 远程</li>
<li>ADJACENT_NETWORK 近邻</li>
<li>LOCAL 本地</li>
<li>PHYSICAL 物理</li>
     * @param string $AttackComplexity AttackComplexity 攻击复杂度。
取值范围：
<li>HIGH 高</li>
<li>LOW 低</li>
     * @param string $PrivilegesRequired PrivilegesRequired 触发特权。
取值范围：
<li>HIGH 高</li>
<li>LOW 低</li>
<li>NONE 无</li>
     * @param string $UserInteraction UserInteraction 交互必要性。
取值范围：
<li>NONE 无</li>
<li>REQUIRED 需要</li>
     * @param string $Scope Scope 绕过安全边界。
取值范围：
<li>UNCHANGED 否</li>
<li>CHANGED 能</li>
     * @param string $ConImpact ConfidentialityImpact 机密性影响。
取值范围：
<li>NONE 无</li>
<li>LOW 低</li>
<li>HIGH 高</li>
     * @param string $IntegrityImpact IntegrityImpact 完整性影响。
取值范围：
<li>NONE 无</li>
<li>LOW 低</li>
<li>HIGH 高</li>
     * @param string $AvailabilityImpact AvailabilityImpact 可用性影响。
取值范围：
<li>NONE 无</li>
<li>LOW 低</li>
<li>HIGH 高</li>
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

        if (array_key_exists("AttackVector",$param) and $param["AttackVector"] !== null) {
            $this->AttackVector = $param["AttackVector"];
        }

        if (array_key_exists("AttackComplexity",$param) and $param["AttackComplexity"] !== null) {
            $this->AttackComplexity = $param["AttackComplexity"];
        }

        if (array_key_exists("PrivilegesRequired",$param) and $param["PrivilegesRequired"] !== null) {
            $this->PrivilegesRequired = $param["PrivilegesRequired"];
        }

        if (array_key_exists("UserInteraction",$param) and $param["UserInteraction"] !== null) {
            $this->UserInteraction = $param["UserInteraction"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
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
