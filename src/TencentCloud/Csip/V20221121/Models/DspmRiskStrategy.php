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
 * Dspm 风险策略
 *
 * @method string getStrategyType() 获取<p>策略类型</p>
 * @method void setStrategyType(string $StrategyType) 设置<p>策略类型</p>
 * @method string getName() 获取<p>策略名</p>
 * @method void setName(string $Name) 设置<p>策略名</p>
 * @method string getStrategyCategory() 获取<p>策略类型</p>
 * @method void setStrategyCategory(string $StrategyCategory) 设置<p>策略类型</p>
 * @method integer getIsEnabled() 获取<p>是否启用。0-禁用 1-启用</p>
 * @method void setIsEnabled(integer $IsEnabled) 设置<p>是否启用。0-禁用 1-启用</p>
 * @method string getRiskLevel() 获取<p>风险等级。</p>
 * @method void setRiskLevel(string $RiskLevel) 设置<p>风险等级。</p>
 * @method string getRule() 获取<p>策略规则</p>
 * @method void setRule(string $Rule) 设置<p>策略规则</p>
 * @method string getRemark() 获取<p>备注</p>
 * @method void setRemark(string $Remark) 设置<p>备注</p>
 * @method string getDescription() 获取<p>策略内容</p>
 * @method void setDescription(string $Description) 设置<p>策略内容</p>
 * @method integer getHitCount() 获取<p>命中次数</p>
 * @method void setHitCount(integer $HitCount) 设置<p>命中次数</p>
 * @method string getRiskType() 获取<p>风险类型。risk-风险；alarm-告警。</p>
 * @method void setRiskType(string $RiskType) 设置<p>风险类型。risk-风险；alarm-告警。</p>
 * @method integer getAppId() 获取<p>资产所属账号app id</p>
 * @method void setAppId(integer $AppId) 设置<p>资产所属账号app id</p>
 * @method string getNickName() 获取<p>账号昵称</p>
 * @method void setNickName(string $NickName) 设置<p>账号昵称</p>
 * @method string getUin() 获取<p>资产所属账号uin</p>
 * @method void setUin(string $Uin) 设置<p>资产所属账号uin</p>
 * @method integer getStrategyId() 获取<p>策略id</p>
 * @method void setStrategyId(integer $StrategyId) 设置<p>策略id</p>
 * @method string getRuleSource() 获取<p>规则来源</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleSource(string $RuleSource) 设置<p>规则来源</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAssetTypes() 获取<p>支持的资产类型</p>
 * @method void setAssetTypes(array $AssetTypes) 设置<p>支持的资产类型</p>
 * @method string getRiskDescription() 获取<p>风险描述</p>
 * @method void setRiskDescription(string $RiskDescription) 设置<p>风险描述</p>
 */
class DspmRiskStrategy extends AbstractModel
{
    /**
     * @var string <p>策略类型</p>
     */
    public $StrategyType;

    /**
     * @var string <p>策略名</p>
     */
    public $Name;

    /**
     * @var string <p>策略类型</p>
     */
    public $StrategyCategory;

    /**
     * @var integer <p>是否启用。0-禁用 1-启用</p>
     */
    public $IsEnabled;

    /**
     * @var string <p>风险等级。</p>
     */
    public $RiskLevel;

    /**
     * @var string <p>策略规则</p>
     */
    public $Rule;

    /**
     * @var string <p>备注</p>
     */
    public $Remark;

    /**
     * @var string <p>策略内容</p>
     */
    public $Description;

    /**
     * @var integer <p>命中次数</p>
     */
    public $HitCount;

    /**
     * @var string <p>风险类型。risk-风险；alarm-告警。</p>
     */
    public $RiskType;

    /**
     * @var integer <p>资产所属账号app id</p>
     */
    public $AppId;

    /**
     * @var string <p>账号昵称</p>
     */
    public $NickName;

    /**
     * @var string <p>资产所属账号uin</p>
     */
    public $Uin;

    /**
     * @var integer <p>策略id</p>
     */
    public $StrategyId;

    /**
     * @var string <p>规则来源</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleSource;

    /**
     * @var array <p>支持的资产类型</p>
     */
    public $AssetTypes;

    /**
     * @var string <p>风险描述</p>
     */
    public $RiskDescription;

    /**
     * @param string $StrategyType <p>策略类型</p>
     * @param string $Name <p>策略名</p>
     * @param string $StrategyCategory <p>策略类型</p>
     * @param integer $IsEnabled <p>是否启用。0-禁用 1-启用</p>
     * @param string $RiskLevel <p>风险等级。</p>
     * @param string $Rule <p>策略规则</p>
     * @param string $Remark <p>备注</p>
     * @param string $Description <p>策略内容</p>
     * @param integer $HitCount <p>命中次数</p>
     * @param string $RiskType <p>风险类型。risk-风险；alarm-告警。</p>
     * @param integer $AppId <p>资产所属账号app id</p>
     * @param string $NickName <p>账号昵称</p>
     * @param string $Uin <p>资产所属账号uin</p>
     * @param integer $StrategyId <p>策略id</p>
     * @param string $RuleSource <p>规则来源</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AssetTypes <p>支持的资产类型</p>
     * @param string $RiskDescription <p>风险描述</p>
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
        if (array_key_exists("StrategyType",$param) and $param["StrategyType"] !== null) {
            $this->StrategyType = $param["StrategyType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("StrategyCategory",$param) and $param["StrategyCategory"] !== null) {
            $this->StrategyCategory = $param["StrategyCategory"];
        }

        if (array_key_exists("IsEnabled",$param) and $param["IsEnabled"] !== null) {
            $this->IsEnabled = $param["IsEnabled"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("HitCount",$param) and $param["HitCount"] !== null) {
            $this->HitCount = $param["HitCount"];
        }

        if (array_key_exists("RiskType",$param) and $param["RiskType"] !== null) {
            $this->RiskType = $param["RiskType"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("RuleSource",$param) and $param["RuleSource"] !== null) {
            $this->RuleSource = $param["RuleSource"];
        }

        if (array_key_exists("AssetTypes",$param) and $param["AssetTypes"] !== null) {
            $this->AssetTypes = $param["AssetTypes"];
        }

        if (array_key_exists("RiskDescription",$param) and $param["RiskDescription"] !== null) {
            $this->RiskDescription = $param["RiskDescription"];
        }
    }
}
