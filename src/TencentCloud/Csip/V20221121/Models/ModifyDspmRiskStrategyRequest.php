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
 * @method array getMemberId() 获取集团账号的成员id
 * @method void setMemberId(array $MemberId) 设置集团账号的成员id
 * @method string getStrategyType() 获取风险策略类型
 * @method void setStrategyType(string $StrategyType) 设置风险策略类型
 * @method integer getIsEnabled() 获取是否启用
 * @method void setIsEnabled(integer $IsEnabled) 设置是否启用
 * @method string getRule() 获取策略内容，如：{     ThresholdValue: "100" }
 * @method void setRule(string $Rule) 设置策略内容，如：{     ThresholdValue: "100" }
 * @method string getRiskLevel() 获取可选值：Info/Low/Medium/High
 * @method void setRiskLevel(string $RiskLevel) 设置可选值：Info/Low/Medium/High
 * @method array getStrategyId() 获取策略id
 * @method void setStrategyId(array $StrategyId) 设置策略id
 */
class ModifyDspmRiskStrategyRequest extends AbstractModel
{
    /**
     * @var array 集团账号的成员id
     */
    public $MemberId;

    /**
     * @var string 风险策略类型
     */
    public $StrategyType;

    /**
     * @var integer 是否启用
     */
    public $IsEnabled;

    /**
     * @var string 策略内容，如：{     ThresholdValue: "100" }
     */
    public $Rule;

    /**
     * @var string 可选值：Info/Low/Medium/High
     */
    public $RiskLevel;

    /**
     * @var array 策略id
     */
    public $StrategyId;

    /**
     * @param array $MemberId 集团账号的成员id
     * @param string $StrategyType 风险策略类型
     * @param integer $IsEnabled 是否启用
     * @param string $Rule 策略内容，如：{     ThresholdValue: "100" }
     * @param string $RiskLevel 可选值：Info/Low/Medium/High
     * @param array $StrategyId 策略id
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
    }
}
