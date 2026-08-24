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
 * CreateDspmRiskStrategy请求参数结构体
 *
 * @method string getName() 获取<p>策略名</p>
 * @method void setName(string $Name) 设置<p>策略名</p>
 * @method string getRule() 获取<p>策略规则，JSON 字符串</p>
 * @method void setRule(string $Rule) 设置<p>策略规则，JSON 字符串</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method string getEnName() 获取<p>英文策略名</p>
 * @method void setEnName(string $EnName) 设置<p>英文策略名</p>
 * @method string getDescription() 获取<p>策略描述</p>
 * @method void setDescription(string $Description) 设置<p>策略描述</p>
 * @method string getEnDescription() 获取<p>英文策略描述</p>
 * @method void setEnDescription(string $EnDescription) 设置<p>英文策略描述</p>
 * @method string getRiskLevel() 获取<p>风险等级，可选值：Info/Low/Medium/High。不传默认 Medium</p>
 * @method void setRiskLevel(string $RiskLevel) 设置<p>风险等级，可选值：Info/Low/Medium/High。不传默认 Medium</p>
 * @method integer getIsEnabled() 获取<p>是否启用。0-禁用，1-启用，不传默认启用</p>
 * @method void setIsEnabled(integer $IsEnabled) 设置<p>是否启用。0-禁用，1-启用，不传默认启用</p>
 * @method string getRiskType() 获取<p>风险类型。当前仅支持 alarm，不传默认 alarm</p>
 * @method void setRiskType(string $RiskType) 设置<p>风险类型。当前仅支持 alarm，不传默认 alarm</p>
 * @method string getStrategyCategory() 获取<p>策略类别。当前仅支持 SQLOperationAnomaly，不传默认 SQLOperationAnomaly</p>
 * @method void setStrategyCategory(string $StrategyCategory) 设置<p>策略类别。当前仅支持 SQLOperationAnomaly，不传默认 SQLOperationAnomaly</p>
 */
class CreateDspmRiskStrategyRequest extends AbstractModel
{
    /**
     * @var string <p>策略名</p>
     */
    public $Name;

    /**
     * @var string <p>策略规则，JSON 字符串</p>
     */
    public $Rule;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var string <p>英文策略名</p>
     */
    public $EnName;

    /**
     * @var string <p>策略描述</p>
     */
    public $Description;

    /**
     * @var string <p>英文策略描述</p>
     */
    public $EnDescription;

    /**
     * @var string <p>风险等级，可选值：Info/Low/Medium/High。不传默认 Medium</p>
     */
    public $RiskLevel;

    /**
     * @var integer <p>是否启用。0-禁用，1-启用，不传默认启用</p>
     */
    public $IsEnabled;

    /**
     * @var string <p>风险类型。当前仅支持 alarm，不传默认 alarm</p>
     */
    public $RiskType;

    /**
     * @var string <p>策略类别。当前仅支持 SQLOperationAnomaly，不传默认 SQLOperationAnomaly</p>
     */
    public $StrategyCategory;

    /**
     * @param string $Name <p>策略名</p>
     * @param string $Rule <p>策略规则，JSON 字符串</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param string $EnName <p>英文策略名</p>
     * @param string $Description <p>策略描述</p>
     * @param string $EnDescription <p>英文策略描述</p>
     * @param string $RiskLevel <p>风险等级，可选值：Info/Low/Medium/High。不传默认 Medium</p>
     * @param integer $IsEnabled <p>是否启用。0-禁用，1-启用，不传默认启用</p>
     * @param string $RiskType <p>风险类型。当前仅支持 alarm，不传默认 alarm</p>
     * @param string $StrategyCategory <p>策略类别。当前仅支持 SQLOperationAnomaly，不传默认 SQLOperationAnomaly</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("EnName",$param) and $param["EnName"] !== null) {
            $this->EnName = $param["EnName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("EnDescription",$param) and $param["EnDescription"] !== null) {
            $this->EnDescription = $param["EnDescription"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("IsEnabled",$param) and $param["IsEnabled"] !== null) {
            $this->IsEnabled = $param["IsEnabled"];
        }

        if (array_key_exists("RiskType",$param) and $param["RiskType"] !== null) {
            $this->RiskType = $param["RiskType"];
        }

        if (array_key_exists("StrategyCategory",$param) and $param["StrategyCategory"] !== null) {
            $this->StrategyCategory = $param["StrategyCategory"];
        }
    }
}
