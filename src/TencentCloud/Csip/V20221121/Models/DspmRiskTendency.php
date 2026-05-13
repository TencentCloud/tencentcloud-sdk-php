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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Dspm风险趋势
 *
 * @method string getDate() 获取日期
 * @method void setDate(string $Date) 设置日期
 * @method integer getUncontrolledAccount() 获取未管控账号个数
 * @method void setUncontrolledAccount(integer $UncontrolledAccount) 设置未管控账号个数
 * @method integer getConfigurationRisk() 获取配置风险个数
 * @method void setConfigurationRisk(integer $ConfigurationRisk) 设置配置风险个数
 * @method integer getBaselineRisk() 获取基线风险个数
 * @method void setBaselineRisk(integer $BaselineRisk) 设置基线风险个数
 * @method integer getLeakDetectionRisk() 获取泄露风险个数
 * @method void setLeakDetectionRisk(integer $LeakDetectionRisk) 设置泄露风险个数
 * @method integer getSQLBehaviorAnomaly() 获取SQL行为异常风险个数
 * @method void setSQLBehaviorAnomaly(integer $SQLBehaviorAnomaly) 设置SQL行为异常风险个数
 * @method integer getPermissionAnomaly() 获取权限异常风险个数
 * @method void setPermissionAnomaly(integer $PermissionAnomaly) 设置权限异常风险个数
 * @method integer getLoginBehaviorAnomaly() 获取登录行为异常风险个数
 * @method void setLoginBehaviorAnomaly(integer $LoginBehaviorAnomaly) 设置登录行为异常风险个数
 * @method integer getAttackSurfaceRisk() 获取攻击面风险风险个数
 * @method void setAttackSurfaceRisk(integer $AttackSurfaceRisk) 设置攻击面风险风险个数
 * @method integer getAccountSensitiveOperation() 获取账号敏感操作个数
 * @method void setAccountSensitiveOperation(integer $AccountSensitiveOperation) 设置账号敏感操作个数
 */
class DspmRiskTendency extends AbstractModel
{
    /**
     * @var string 日期
     */
    public $Date;

    /**
     * @var integer 未管控账号个数
     */
    public $UncontrolledAccount;

    /**
     * @var integer 配置风险个数
     * @deprecated
     */
    public $ConfigurationRisk;

    /**
     * @var integer 基线风险个数
     * @deprecated
     */
    public $BaselineRisk;

    /**
     * @var integer 泄露风险个数
     * @deprecated
     */
    public $LeakDetectionRisk;

    /**
     * @var integer SQL行为异常风险个数
     */
    public $SQLBehaviorAnomaly;

    /**
     * @var integer 权限异常风险个数
     */
    public $PermissionAnomaly;

    /**
     * @var integer 登录行为异常风险个数
     */
    public $LoginBehaviorAnomaly;

    /**
     * @var integer 攻击面风险风险个数
     */
    public $AttackSurfaceRisk;

    /**
     * @var integer 账号敏感操作个数
     */
    public $AccountSensitiveOperation;

    /**
     * @param string $Date 日期
     * @param integer $UncontrolledAccount 未管控账号个数
     * @param integer $ConfigurationRisk 配置风险个数
     * @param integer $BaselineRisk 基线风险个数
     * @param integer $LeakDetectionRisk 泄露风险个数
     * @param integer $SQLBehaviorAnomaly SQL行为异常风险个数
     * @param integer $PermissionAnomaly 权限异常风险个数
     * @param integer $LoginBehaviorAnomaly 登录行为异常风险个数
     * @param integer $AttackSurfaceRisk 攻击面风险风险个数
     * @param integer $AccountSensitiveOperation 账号敏感操作个数
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
        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("UncontrolledAccount",$param) and $param["UncontrolledAccount"] !== null) {
            $this->UncontrolledAccount = $param["UncontrolledAccount"];
        }

        if (array_key_exists("ConfigurationRisk",$param) and $param["ConfigurationRisk"] !== null) {
            $this->ConfigurationRisk = $param["ConfigurationRisk"];
        }

        if (array_key_exists("BaselineRisk",$param) and $param["BaselineRisk"] !== null) {
            $this->BaselineRisk = $param["BaselineRisk"];
        }

        if (array_key_exists("LeakDetectionRisk",$param) and $param["LeakDetectionRisk"] !== null) {
            $this->LeakDetectionRisk = $param["LeakDetectionRisk"];
        }

        if (array_key_exists("SQLBehaviorAnomaly",$param) and $param["SQLBehaviorAnomaly"] !== null) {
            $this->SQLBehaviorAnomaly = $param["SQLBehaviorAnomaly"];
        }

        if (array_key_exists("PermissionAnomaly",$param) and $param["PermissionAnomaly"] !== null) {
            $this->PermissionAnomaly = $param["PermissionAnomaly"];
        }

        if (array_key_exists("LoginBehaviorAnomaly",$param) and $param["LoginBehaviorAnomaly"] !== null) {
            $this->LoginBehaviorAnomaly = $param["LoginBehaviorAnomaly"];
        }

        if (array_key_exists("AttackSurfaceRisk",$param) and $param["AttackSurfaceRisk"] !== null) {
            $this->AttackSurfaceRisk = $param["AttackSurfaceRisk"];
        }

        if (array_key_exists("AccountSensitiveOperation",$param) and $param["AccountSensitiveOperation"] !== null) {
            $this->AccountSensitiveOperation = $param["AccountSensitiveOperation"];
        }
    }
}
