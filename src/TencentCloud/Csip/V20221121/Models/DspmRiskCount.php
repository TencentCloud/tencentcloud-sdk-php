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
 * Dspm 风险统计数
 *
 * @method integer getUnprocessedRisk() 获取待处理风险个数
 * @method void setUnprocessedRisk(integer $UnprocessedRisk) 设置待处理风险个数
 * @method integer getConfigurationRisk() 获取配置风险个数
 * @method void setConfigurationRisk(integer $ConfigurationRisk) 设置配置风险个数
 * @method integer getBaselineDeviation() 获取基线风险个数
 * @method void setBaselineDeviation(integer $BaselineDeviation) 设置基线风险个数
 * @method integer getLeakDetection() 获取泄露风险个数
 * @method void setLeakDetection(integer $LeakDetection) 设置泄露风险个数
 * @method integer getSQLBehaviorAnomaly() 获取SQL行为异常风险个数
 * @method void setSQLBehaviorAnomaly(integer $SQLBehaviorAnomaly) 设置SQL行为异常风险个数
 * @method integer getPermissionAnomaly() 获取权限异常风险个数
 * @method void setPermissionAnomaly(integer $PermissionAnomaly) 设置权限异常风险个数
 * @method integer getLoginBehaviorAnomaly() 获取登录行为异常风险个数
 * @method void setLoginBehaviorAnomaly(integer $LoginBehaviorAnomaly) 设置登录行为异常风险个数
 * @method integer getAttackSurfaceRisk() 获取攻击面风险个数
 * @method void setAttackSurfaceRisk(integer $AttackSurfaceRisk) 设置攻击面风险个数
 * @method integer getAccountSensitiveOperation() 获取账号敏感操作个数
 * @method void setAccountSensitiveOperation(integer $AccountSensitiveOperation) 设置账号敏感操作个数
 * @method integer getUnprocessedAlarm() 获取待处理告警个数
 * @method void setUnprocessedAlarm(integer $UnprocessedAlarm) 设置待处理告警个数
 * @method integer getNumOfNewAlarmEvent() 获取新增事件告警
 * @method void setNumOfNewAlarmEvent(integer $NumOfNewAlarmEvent) 设置新增事件告警
 * @method integer getNumOfNewConfigRisk() 获取新增配置风险
 * @method void setNumOfNewConfigRisk(integer $NumOfNewConfigRisk) 设置新增配置风险
 */
class DspmRiskCount extends AbstractModel
{
    /**
     * @var integer 待处理风险个数
     */
    public $UnprocessedRisk;

    /**
     * @var integer 配置风险个数
     * @deprecated
     */
    public $ConfigurationRisk;

    /**
     * @var integer 基线风险个数
     * @deprecated
     */
    public $BaselineDeviation;

    /**
     * @var integer 泄露风险个数
     * @deprecated
     */
    public $LeakDetection;

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
     * @var integer 攻击面风险个数
     */
    public $AttackSurfaceRisk;

    /**
     * @var integer 账号敏感操作个数
     */
    public $AccountSensitiveOperation;

    /**
     * @var integer 待处理告警个数
     */
    public $UnprocessedAlarm;

    /**
     * @var integer 新增事件告警
     */
    public $NumOfNewAlarmEvent;

    /**
     * @var integer 新增配置风险
     */
    public $NumOfNewConfigRisk;

    /**
     * @param integer $UnprocessedRisk 待处理风险个数
     * @param integer $ConfigurationRisk 配置风险个数
     * @param integer $BaselineDeviation 基线风险个数
     * @param integer $LeakDetection 泄露风险个数
     * @param integer $SQLBehaviorAnomaly SQL行为异常风险个数
     * @param integer $PermissionAnomaly 权限异常风险个数
     * @param integer $LoginBehaviorAnomaly 登录行为异常风险个数
     * @param integer $AttackSurfaceRisk 攻击面风险个数
     * @param integer $AccountSensitiveOperation 账号敏感操作个数
     * @param integer $UnprocessedAlarm 待处理告警个数
     * @param integer $NumOfNewAlarmEvent 新增事件告警
     * @param integer $NumOfNewConfigRisk 新增配置风险
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
        if (array_key_exists("UnprocessedRisk",$param) and $param["UnprocessedRisk"] !== null) {
            $this->UnprocessedRisk = $param["UnprocessedRisk"];
        }

        if (array_key_exists("ConfigurationRisk",$param) and $param["ConfigurationRisk"] !== null) {
            $this->ConfigurationRisk = $param["ConfigurationRisk"];
        }

        if (array_key_exists("BaselineDeviation",$param) and $param["BaselineDeviation"] !== null) {
            $this->BaselineDeviation = $param["BaselineDeviation"];
        }

        if (array_key_exists("LeakDetection",$param) and $param["LeakDetection"] !== null) {
            $this->LeakDetection = $param["LeakDetection"];
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

        if (array_key_exists("UnprocessedAlarm",$param) and $param["UnprocessedAlarm"] !== null) {
            $this->UnprocessedAlarm = $param["UnprocessedAlarm"];
        }

        if (array_key_exists("NumOfNewAlarmEvent",$param) and $param["NumOfNewAlarmEvent"] !== null) {
            $this->NumOfNewAlarmEvent = $param["NumOfNewAlarmEvent"];
        }

        if (array_key_exists("NumOfNewConfigRisk",$param) and $param["NumOfNewConfigRisk"] !== null) {
            $this->NumOfNewConfigRisk = $param["NumOfNewConfigRisk"];
        }
    }
}
