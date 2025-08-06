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
 * 风险规则
 *
 * @method string getRuleID() 获取风险检查项ID
 * @method void setRuleID(string $RuleID) 设置风险检查项ID
 * @method string getProvider() 获取云厂商名称
 * @method void setProvider(string $Provider) 设置云厂商名称
 * @method string getInstanceType() 获取实例类型
 * @method void setInstanceType(string $InstanceType) 设置实例类型
 * @method string getRiskTitle() 获取风险名称
 * @method void setRiskTitle(string $RiskTitle) 设置风险名称
 * @method string getCheckType() 获取检查类型
 * @method void setCheckType(string $CheckType) 设置检查类型
 * @method string getRiskLevel() 获取风险等级
 * @method void setRiskLevel(string $RiskLevel) 设置风险等级
 * @method string getRiskInfluence() 获取风险危害
 * @method void setRiskInfluence(string $RiskInfluence) 设置风险危害
 * @method string getRiskFixAdvance() 获取风险修复指引报告链接
 * @method void setRiskFixAdvance(string $RiskFixAdvance) 设置风险修复指引报告链接
 * @method string getDispositionType() 获取边界管控
 * @method void setDispositionType(string $DispositionType) 设置边界管控
 */
class RiskRuleInfo extends AbstractModel
{
    /**
     * @var string 风险检查项ID
     */
    public $RuleID;

    /**
     * @var string 云厂商名称
     */
    public $Provider;

    /**
     * @var string 实例类型
     */
    public $InstanceType;

    /**
     * @var string 风险名称
     */
    public $RiskTitle;

    /**
     * @var string 检查类型
     */
    public $CheckType;

    /**
     * @var string 风险等级
     */
    public $RiskLevel;

    /**
     * @var string 风险危害
     */
    public $RiskInfluence;

    /**
     * @var string 风险修复指引报告链接
     */
    public $RiskFixAdvance;

    /**
     * @var string 边界管控
     */
    public $DispositionType;

    /**
     * @param string $RuleID 风险检查项ID
     * @param string $Provider 云厂商名称
     * @param string $InstanceType 实例类型
     * @param string $RiskTitle 风险名称
     * @param string $CheckType 检查类型
     * @param string $RiskLevel 风险等级
     * @param string $RiskInfluence 风险危害
     * @param string $RiskFixAdvance 风险修复指引报告链接
     * @param string $DispositionType 边界管控
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
        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("RiskTitle",$param) and $param["RiskTitle"] !== null) {
            $this->RiskTitle = $param["RiskTitle"];
        }

        if (array_key_exists("CheckType",$param) and $param["CheckType"] !== null) {
            $this->CheckType = $param["CheckType"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("RiskInfluence",$param) and $param["RiskInfluence"] !== null) {
            $this->RiskInfluence = $param["RiskInfluence"];
        }

        if (array_key_exists("RiskFixAdvance",$param) and $param["RiskFixAdvance"] !== null) {
            $this->RiskFixAdvance = $param["RiskFixAdvance"];
        }

        if (array_key_exists("DispositionType",$param) and $param["DispositionType"] !== null) {
            $this->DispositionType = $param["DispositionType"];
        }
    }
}
