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
 * @method integer getUnprocessedRisk() 获取<p>待处理风险个数</p>
 * @method void setUnprocessedRisk(integer $UnprocessedRisk) 设置<p>待处理风险个数</p>
 * @method integer getConfigurationRisk() 获取<p>配置风险个数</p>
 * @method void setConfigurationRisk(integer $ConfigurationRisk) 设置<p>配置风险个数</p>
 * @method integer getBaselineDeviation() 获取<p>基线风险个数</p>
 * @method void setBaselineDeviation(integer $BaselineDeviation) 设置<p>基线风险个数</p>
 * @method integer getLeakDetection() 获取<p>泄露风险个数</p>
 * @method void setLeakDetection(integer $LeakDetection) 设置<p>泄露风险个数</p>
 * @method integer getSQLBehaviorAnomaly() 获取<p>SQL行为异常风险个数</p>
 * @method void setSQLBehaviorAnomaly(integer $SQLBehaviorAnomaly) 设置<p>SQL行为异常风险个数</p>
 * @method integer getPermissionAnomaly() 获取<p>权限异常风险个数</p>
 * @method void setPermissionAnomaly(integer $PermissionAnomaly) 设置<p>权限异常风险个数</p>
 * @method integer getLoginBehaviorAnomaly() 获取<p>登录行为异常风险个数</p>
 * @method void setLoginBehaviorAnomaly(integer $LoginBehaviorAnomaly) 设置<p>登录行为异常风险个数</p>
 * @method integer getAttackSurfaceRisk() 获取<p>攻击面风险个数</p>
 * @method void setAttackSurfaceRisk(integer $AttackSurfaceRisk) 设置<p>攻击面风险个数</p>
 * @method integer getAccountSensitiveOperation() 获取<p>账号敏感操作个数</p>
 * @method void setAccountSensitiveOperation(integer $AccountSensitiveOperation) 设置<p>账号敏感操作个数</p>
 * @method integer getUnprocessedAlarm() 获取<p>待处理告警个数</p>
 * @method void setUnprocessedAlarm(integer $UnprocessedAlarm) 设置<p>待处理告警个数</p>
 * @method integer getNumOfNewAlarmEvent() 获取<p>新增事件告警</p>
 * @method void setNumOfNewAlarmEvent(integer $NumOfNewAlarmEvent) 设置<p>新增事件告警</p>
 * @method integer getNumOfNewConfigRisk() 获取<p>新增配置风险</p>
 * @method void setNumOfNewConfigRisk(integer $NumOfNewConfigRisk) 设置<p>新增配置风险</p>
 * @method integer getAccountRisk() 获取<p>账号风险条数</p>
 * @method void setAccountRisk(integer $AccountRisk) 设置<p>账号风险条数</p>
 * @method integer getConfigRisk() 获取<p>配置风险条数</p>
 * @method void setConfigRisk(integer $ConfigRisk) 设置<p>配置风险条数</p>
 */
class DspmRiskCount extends AbstractModel
{
    /**
     * @var integer <p>待处理风险个数</p>
     */
    public $UnprocessedRisk;

    /**
     * @var integer <p>配置风险个数</p>
     * @deprecated
     */
    public $ConfigurationRisk;

    /**
     * @var integer <p>基线风险个数</p>
     * @deprecated
     */
    public $BaselineDeviation;

    /**
     * @var integer <p>泄露风险个数</p>
     * @deprecated
     */
    public $LeakDetection;

    /**
     * @var integer <p>SQL行为异常风险个数</p>
     */
    public $SQLBehaviorAnomaly;

    /**
     * @var integer <p>权限异常风险个数</p>
     */
    public $PermissionAnomaly;

    /**
     * @var integer <p>登录行为异常风险个数</p>
     */
    public $LoginBehaviorAnomaly;

    /**
     * @var integer <p>攻击面风险个数</p>
     */
    public $AttackSurfaceRisk;

    /**
     * @var integer <p>账号敏感操作个数</p>
     */
    public $AccountSensitiveOperation;

    /**
     * @var integer <p>待处理告警个数</p>
     */
    public $UnprocessedAlarm;

    /**
     * @var integer <p>新增事件告警</p>
     */
    public $NumOfNewAlarmEvent;

    /**
     * @var integer <p>新增配置风险</p>
     */
    public $NumOfNewConfigRisk;

    /**
     * @var integer <p>账号风险条数</p>
     */
    public $AccountRisk;

    /**
     * @var integer <p>配置风险条数</p>
     */
    public $ConfigRisk;

    /**
     * @param integer $UnprocessedRisk <p>待处理风险个数</p>
     * @param integer $ConfigurationRisk <p>配置风险个数</p>
     * @param integer $BaselineDeviation <p>基线风险个数</p>
     * @param integer $LeakDetection <p>泄露风险个数</p>
     * @param integer $SQLBehaviorAnomaly <p>SQL行为异常风险个数</p>
     * @param integer $PermissionAnomaly <p>权限异常风险个数</p>
     * @param integer $LoginBehaviorAnomaly <p>登录行为异常风险个数</p>
     * @param integer $AttackSurfaceRisk <p>攻击面风险个数</p>
     * @param integer $AccountSensitiveOperation <p>账号敏感操作个数</p>
     * @param integer $UnprocessedAlarm <p>待处理告警个数</p>
     * @param integer $NumOfNewAlarmEvent <p>新增事件告警</p>
     * @param integer $NumOfNewConfigRisk <p>新增配置风险</p>
     * @param integer $AccountRisk <p>账号风险条数</p>
     * @param integer $ConfigRisk <p>配置风险条数</p>
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

        if (array_key_exists("AccountRisk",$param) and $param["AccountRisk"] !== null) {
            $this->AccountRisk = $param["AccountRisk"];
        }

        if (array_key_exists("ConfigRisk",$param) and $param["ConfigRisk"] !== null) {
            $this->ConfigRisk = $param["ConfigRisk"];
        }
    }
}
