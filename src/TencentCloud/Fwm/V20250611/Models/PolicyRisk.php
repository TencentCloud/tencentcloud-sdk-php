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
namespace TencentCloud\Fwm\V20250611\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 策略风险
 *
 * @method string getId() 获取问题对应的唯一uuid
 * @method void setId(string $Id) 设置问题对应的唯一uuid
 * @method string getRiskCategory() 获取风险大类
 * @method void setRiskCategory(string $RiskCategory) 设置风险大类
 * @method string getRiskSubCategory() 获取风险子类
 * @method void setRiskSubCategory(string $RiskSubCategory) 设置风险子类
 * @method string getRuleType() 获取规则分类
 * @method void setRuleType(string $RuleType) 设置规则分类
 * @method integer getRiskLevel() 获取风险等级，0：低风险
1：中风险
2：高风险
 * @method void setRiskLevel(integer $RiskLevel) 设置风险等级，0：低风险
1：中风险
2：高风险
 * @method string getProduct() 获取安全组
 * @method void setProduct(string $Product) 设置安全组
 * @method array getSgRuleId() 获取风险包含的企业安全组规则ID
 * @method void setSgRuleId(array $SgRuleId) 设置风险包含的企业安全组规则ID
 * @method integer getRuleCount() 获取风险包含安全组ID内的问题规则数
 * @method void setRuleCount(integer $RuleCount) 设置风险包含安全组ID内的问题规则数
 * @method array getSgId() 获取风险包含的安全组ID
 * @method void setSgId(array $SgId) 设置风险包含的安全组ID
 * @method string getRiskFeature() 获取风险特征
 * @method void setRiskFeature(string $RiskFeature) 设置风险特征
 * @method string getSuggestion() 获取处置建议
 * @method void setSuggestion(string $Suggestion) 设置处置建议
 * @method integer getStatus() 获取处置状态，0：未处理，1：已处理，2：忽略
 * @method void setStatus(integer $Status) 设置处置状态，0：未处理，1：已处理，2：忽略
 * @method string getFoundTime() 获取发现时间
 * @method void setFoundTime(string $FoundTime) 设置发现时间
 * @method string getDisposalTime() 获取处置时间
 * @method void setDisposalTime(string $DisposalTime) 设置处置时间
 * @method string getRegion() 获取安全组地域
 * @method void setRegion(string $Region) 设置安全组地域
 * @method string getDirection() 获取Ingress入站，Egress出站
 * @method void setDirection(string $Direction) 设置Ingress入站，Egress出站
 * @method string getRiskReason() 获取风险原因
 * @method void setRiskReason(string $RiskReason) 设置风险原因
 */
class PolicyRisk extends AbstractModel
{
    /**
     * @var string 问题对应的唯一uuid
     */
    public $Id;

    /**
     * @var string 风险大类
     */
    public $RiskCategory;

    /**
     * @var string 风险子类
     */
    public $RiskSubCategory;

    /**
     * @var string 规则分类
     */
    public $RuleType;

    /**
     * @var integer 风险等级，0：低风险
1：中风险
2：高风险
     */
    public $RiskLevel;

    /**
     * @var string 安全组
     */
    public $Product;

    /**
     * @var array 风险包含的企业安全组规则ID
     */
    public $SgRuleId;

    /**
     * @var integer 风险包含安全组ID内的问题规则数
     */
    public $RuleCount;

    /**
     * @var array 风险包含的安全组ID
     */
    public $SgId;

    /**
     * @var string 风险特征
     */
    public $RiskFeature;

    /**
     * @var string 处置建议
     */
    public $Suggestion;

    /**
     * @var integer 处置状态，0：未处理，1：已处理，2：忽略
     */
    public $Status;

    /**
     * @var string 发现时间
     */
    public $FoundTime;

    /**
     * @var string 处置时间
     */
    public $DisposalTime;

    /**
     * @var string 安全组地域
     */
    public $Region;

    /**
     * @var string Ingress入站，Egress出站
     */
    public $Direction;

    /**
     * @var string 风险原因
     */
    public $RiskReason;

    /**
     * @param string $Id 问题对应的唯一uuid
     * @param string $RiskCategory 风险大类
     * @param string $RiskSubCategory 风险子类
     * @param string $RuleType 规则分类
     * @param integer $RiskLevel 风险等级，0：低风险
1：中风险
2：高风险
     * @param string $Product 安全组
     * @param array $SgRuleId 风险包含的企业安全组规则ID
     * @param integer $RuleCount 风险包含安全组ID内的问题规则数
     * @param array $SgId 风险包含的安全组ID
     * @param string $RiskFeature 风险特征
     * @param string $Suggestion 处置建议
     * @param integer $Status 处置状态，0：未处理，1：已处理，2：忽略
     * @param string $FoundTime 发现时间
     * @param string $DisposalTime 处置时间
     * @param string $Region 安全组地域
     * @param string $Direction Ingress入站，Egress出站
     * @param string $RiskReason 风险原因
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("RiskCategory",$param) and $param["RiskCategory"] !== null) {
            $this->RiskCategory = $param["RiskCategory"];
        }

        if (array_key_exists("RiskSubCategory",$param) and $param["RiskSubCategory"] !== null) {
            $this->RiskSubCategory = $param["RiskSubCategory"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("SgRuleId",$param) and $param["SgRuleId"] !== null) {
            $this->SgRuleId = $param["SgRuleId"];
        }

        if (array_key_exists("RuleCount",$param) and $param["RuleCount"] !== null) {
            $this->RuleCount = $param["RuleCount"];
        }

        if (array_key_exists("SgId",$param) and $param["SgId"] !== null) {
            $this->SgId = $param["SgId"];
        }

        if (array_key_exists("RiskFeature",$param) and $param["RiskFeature"] !== null) {
            $this->RiskFeature = $param["RiskFeature"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FoundTime",$param) and $param["FoundTime"] !== null) {
            $this->FoundTime = $param["FoundTime"];
        }

        if (array_key_exists("DisposalTime",$param) and $param["DisposalTime"] !== null) {
            $this->DisposalTime = $param["DisposalTime"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("RiskReason",$param) and $param["RiskReason"] !== null) {
            $this->RiskReason = $param["RiskReason"];
        }
    }
}
