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
 * Dspm 风险分组策略
 *
 * @method string getStrategyType() 获取<p>策略类型</p>
 * @method void setStrategyType(string $StrategyType) 设置<p>策略类型</p>
 * @method string getName() 获取<p>策略名</p>
 * @method void setName(string $Name) 设置<p>策略名</p>
 * @method string getStrategyCategory() 获取<p>策略类型</p>
 * @method void setStrategyCategory(string $StrategyCategory) 设置<p>策略类型</p>
 * @method integer getIsEnabled() 获取<p>是否启用。0-禁用 1-启用</p>
 * @method void setIsEnabled(integer $IsEnabled) 设置<p>是否启用。0-禁用 1-启用</p>
 * @method integer getHitCount() 获取<p>命中次数</p>
 * @method void setHitCount(integer $HitCount) 设置<p>命中次数</p>
 * @method string getRiskType() 获取<p>风险类型。risk-风险；alarm-告警。</p>
 * @method void setRiskType(string $RiskType) 设置<p>风险类型。risk-风险；alarm-告警。</p>
 * @method array getStrategyList() 获取<p>策略列表</p>
 * @method void setStrategyList(array $StrategyList) 设置<p>策略列表</p>
 * @method string getRuleSource() 获取<p>规则来源</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleSource(string $RuleSource) 设置<p>规则来源</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class DspmRiskStrategyGroup extends AbstractModel
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
     * @var integer <p>命中次数</p>
     */
    public $HitCount;

    /**
     * @var string <p>风险类型。risk-风险；alarm-告警。</p>
     */
    public $RiskType;

    /**
     * @var array <p>策略列表</p>
     */
    public $StrategyList;

    /**
     * @var string <p>规则来源</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleSource;

    /**
     * @param string $StrategyType <p>策略类型</p>
     * @param string $Name <p>策略名</p>
     * @param string $StrategyCategory <p>策略类型</p>
     * @param integer $IsEnabled <p>是否启用。0-禁用 1-启用</p>
     * @param integer $HitCount <p>命中次数</p>
     * @param string $RiskType <p>风险类型。risk-风险；alarm-告警。</p>
     * @param array $StrategyList <p>策略列表</p>
     * @param string $RuleSource <p>规则来源</p>
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("HitCount",$param) and $param["HitCount"] !== null) {
            $this->HitCount = $param["HitCount"];
        }

        if (array_key_exists("RiskType",$param) and $param["RiskType"] !== null) {
            $this->RiskType = $param["RiskType"];
        }

        if (array_key_exists("StrategyList",$param) and $param["StrategyList"] !== null) {
            $this->StrategyList = [];
            foreach ($param["StrategyList"] as $key => $value){
                $obj = new DspmRiskStrategy();
                $obj->deserialize($value);
                array_push($this->StrategyList, $obj);
            }
        }

        if (array_key_exists("RuleSource",$param) and $param["RuleSource"] !== null) {
            $this->RuleSource = $param["RuleSource"];
        }
    }
}
