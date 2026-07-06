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
 * 风险分类统计项
 *
 * @method string getCategoryId() 获取风险大类ID
 * @method void setCategoryId(string $CategoryId) 设置风险大类ID
 * @method string getCategoryName() 获取风险大类名称
 * @method void setCategoryName(string $CategoryName) 设置风险大类名称
 * @method string getSubcategoryId() 获取风险子类ID
 * @method void setSubcategoryId(string $SubcategoryId) 设置风险子类ID
 * @method string getSubcategoryName() 获取风险子类名称
 * @method void setSubcategoryName(string $SubcategoryName) 设置风险子类名称
 * @method integer getRiskLevel() 获取风险等级(0-低危,1-中危,2-高危)
 * @method void setRiskLevel(integer $RiskLevel) 设置风险等级(0-低危,1-中危,2-高危)
 * @method string getRiskLevelName() 获取风险等级名称(低/中/高)
 * @method void setRiskLevelName(string $RiskLevelName) 设置风险等级名称(低/中/高)
 * @method string getDescription() 获取风险描述
 * @method void setDescription(string $Description) 设置风险描述
 * @method string getSuggestion() 获取处置建议
 * @method void setSuggestion(string $Suggestion) 设置处置建议
 * @method integer getRuleCount() 获取该类风险的规则数量
 * @method void setRuleCount(integer $RuleCount) 设置该类风险的规则数量
 * @method integer getTreatedCount() 获取已处置数量
 * @method void setTreatedCount(integer $TreatedCount) 设置已处置数量
 * @method integer getIgnoredCount() 获取已忽略数量
 * @method void setIgnoredCount(integer $IgnoredCount) 设置已忽略数量
 * @method integer getUntreatedCount() 获取待整改数量
 * @method void setUntreatedCount(integer $UntreatedCount) 设置待整改数量
 * @method integer getDisposalRate() 获取整改率(百分比字符串)
 * @method void setDisposalRate(integer $DisposalRate) 设置整改率(百分比字符串)
 * @method integer getHasRisk() 获取是否有未处理风险
-1: 未体检
0: 无风险
1: 有风险
 * @method void setHasRisk(integer $HasRisk) 设置是否有未处理风险
-1: 未体检
0: 无风险
1: 有风险
 * @method string getRemediationStatus() 获取整改状态：
Completed： 已整改完成（整改率 100%）
Incomplete： 未整改完成（整改率 < 100%）
-：未体检/无数据
 * @method void setRemediationStatus(string $RemediationStatus) 设置整改状态：
Completed： 已整改完成（整改率 100%）
Incomplete： 未整改完成（整改率 < 100%）
-：未体检/无数据
 */
class RiskCategoryItem extends AbstractModel
{
    /**
     * @var string 风险大类ID
     */
    public $CategoryId;

    /**
     * @var string 风险大类名称
     */
    public $CategoryName;

    /**
     * @var string 风险子类ID
     */
    public $SubcategoryId;

    /**
     * @var string 风险子类名称
     */
    public $SubcategoryName;

    /**
     * @var integer 风险等级(0-低危,1-中危,2-高危)
     */
    public $RiskLevel;

    /**
     * @var string 风险等级名称(低/中/高)
     */
    public $RiskLevelName;

    /**
     * @var string 风险描述
     */
    public $Description;

    /**
     * @var string 处置建议
     */
    public $Suggestion;

    /**
     * @var integer 该类风险的规则数量
     */
    public $RuleCount;

    /**
     * @var integer 已处置数量
     */
    public $TreatedCount;

    /**
     * @var integer 已忽略数量
     */
    public $IgnoredCount;

    /**
     * @var integer 待整改数量
     */
    public $UntreatedCount;

    /**
     * @var integer 整改率(百分比字符串)
     */
    public $DisposalRate;

    /**
     * @var integer 是否有未处理风险
-1: 未体检
0: 无风险
1: 有风险
     */
    public $HasRisk;

    /**
     * @var string 整改状态：
Completed： 已整改完成（整改率 100%）
Incomplete： 未整改完成（整改率 < 100%）
-：未体检/无数据
     */
    public $RemediationStatus;

    /**
     * @param string $CategoryId 风险大类ID
     * @param string $CategoryName 风险大类名称
     * @param string $SubcategoryId 风险子类ID
     * @param string $SubcategoryName 风险子类名称
     * @param integer $RiskLevel 风险等级(0-低危,1-中危,2-高危)
     * @param string $RiskLevelName 风险等级名称(低/中/高)
     * @param string $Description 风险描述
     * @param string $Suggestion 处置建议
     * @param integer $RuleCount 该类风险的规则数量
     * @param integer $TreatedCount 已处置数量
     * @param integer $IgnoredCount 已忽略数量
     * @param integer $UntreatedCount 待整改数量
     * @param integer $DisposalRate 整改率(百分比字符串)
     * @param integer $HasRisk 是否有未处理风险
-1: 未体检
0: 无风险
1: 有风险
     * @param string $RemediationStatus 整改状态：
Completed： 已整改完成（整改率 100%）
Incomplete： 未整改完成（整改率 < 100%）
-：未体检/无数据
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
        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("CategoryName",$param) and $param["CategoryName"] !== null) {
            $this->CategoryName = $param["CategoryName"];
        }

        if (array_key_exists("SubcategoryId",$param) and $param["SubcategoryId"] !== null) {
            $this->SubcategoryId = $param["SubcategoryId"];
        }

        if (array_key_exists("SubcategoryName",$param) and $param["SubcategoryName"] !== null) {
            $this->SubcategoryName = $param["SubcategoryName"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("RiskLevelName",$param) and $param["RiskLevelName"] !== null) {
            $this->RiskLevelName = $param["RiskLevelName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("RuleCount",$param) and $param["RuleCount"] !== null) {
            $this->RuleCount = $param["RuleCount"];
        }

        if (array_key_exists("TreatedCount",$param) and $param["TreatedCount"] !== null) {
            $this->TreatedCount = $param["TreatedCount"];
        }

        if (array_key_exists("IgnoredCount",$param) and $param["IgnoredCount"] !== null) {
            $this->IgnoredCount = $param["IgnoredCount"];
        }

        if (array_key_exists("UntreatedCount",$param) and $param["UntreatedCount"] !== null) {
            $this->UntreatedCount = $param["UntreatedCount"];
        }

        if (array_key_exists("DisposalRate",$param) and $param["DisposalRate"] !== null) {
            $this->DisposalRate = $param["DisposalRate"];
        }

        if (array_key_exists("HasRisk",$param) and $param["HasRisk"] !== null) {
            $this->HasRisk = $param["HasRisk"];
        }

        if (array_key_exists("RemediationStatus",$param) and $param["RemediationStatus"] !== null) {
            $this->RemediationStatus = $param["RemediationStatus"];
        }
    }
}
