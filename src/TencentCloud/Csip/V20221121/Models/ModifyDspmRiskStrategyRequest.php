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
 * ModifyDspmRiskStrategy请求参数结构体
 *
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method string getStrategyType() 获取<p>风险策略类型</p>
 * @method void setStrategyType(string $StrategyType) 设置<p>风险策略类型</p>
 * @method integer getIsEnabled() 获取<p>是否启用</p>
 * @method void setIsEnabled(integer $IsEnabled) 设置<p>是否启用</p>
 * @method string getRule() 获取<p>策略内容，如：{     ThresholdValue: &quot;100&quot; }</p>
 * @method void setRule(string $Rule) 设置<p>策略内容，如：{     ThresholdValue: &quot;100&quot; }</p>
 * @method string getRiskLevel() 获取<p>可选值：Info/Low/Medium/High</p>
 * @method void setRiskLevel(string $RiskLevel) 设置<p>可选值：Info/Low/Medium/High</p>
 * @method array getStrategyId() 获取<p>策略id</p>
 * @method void setStrategyId(array $StrategyId) 设置<p>策略id</p>
 * @method string getName() 获取<p>策略名</p>
 * @method void setName(string $Name) 设置<p>策略名</p>
 * @method string getDescription() 获取<p>策略描述</p>
 * @method void setDescription(string $Description) 设置<p>策略描述</p>
 * @method string getDbTypes() 获取<p>支持的数据库类型</p>
 * @method void setDbTypes(string $DbTypes) 设置<p>支持的数据库类型</p>
 */
class ModifyDspmRiskStrategyRequest extends AbstractModel
{
    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var string <p>风险策略类型</p>
     */
    public $StrategyType;

    /**
     * @var integer <p>是否启用</p>
     */
    public $IsEnabled;

    /**
     * @var string <p>策略内容，如：{     ThresholdValue: &quot;100&quot; }</p>
     */
    public $Rule;

    /**
     * @var string <p>可选值：Info/Low/Medium/High</p>
     */
    public $RiskLevel;

    /**
     * @var array <p>策略id</p>
     */
    public $StrategyId;

    /**
     * @var string <p>策略名</p>
     */
    public $Name;

    /**
     * @var string <p>策略描述</p>
     */
    public $Description;

    /**
     * @var string <p>支持的数据库类型</p>
     */
    public $DbTypes;

    /**
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param string $StrategyType <p>风险策略类型</p>
     * @param integer $IsEnabled <p>是否启用</p>
     * @param string $Rule <p>策略内容，如：{     ThresholdValue: &quot;100&quot; }</p>
     * @param string $RiskLevel <p>可选值：Info/Low/Medium/High</p>
     * @param array $StrategyId <p>策略id</p>
     * @param string $Name <p>策略名</p>
     * @param string $Description <p>策略描述</p>
     * @param string $DbTypes <p>支持的数据库类型</p>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("StrategyType",$param) and $param["StrategyType"] !== null) {
            $this->StrategyType = $param["StrategyType"];
        }

        if (array_key_exists("IsEnabled",$param) and $param["IsEnabled"] !== null) {
            $this->IsEnabled = $param["IsEnabled"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DbTypes",$param) and $param["DbTypes"] !== null) {
            $this->DbTypes = $param["DbTypes"];
        }
    }
}
