<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 表示一条检测项对应的汇总信息。
 *
 * @method integer getCustomerPolicyItemId() 获取为客户分配的唯一的检测项的ID。
 * @method void setCustomerPolicyItemId(integer $CustomerPolicyItemId) 设置为客户分配的唯一的检测项的ID。
 * @method integer getBasePolicyItemId() 获取检测项的原始ID。
 * @method void setBasePolicyItemId(integer $BasePolicyItemId) 设置检测项的原始ID。
 * @method string getName() 获取检测项的名称。
 * @method void setName(string $Name) 设置检测项的名称。
 * @method string getCategory() 获取检测项所属的类型，枚举字符串。
 * @method void setCategory(string $Category) 设置检测项所属的类型，枚举字符串。
 * @method string getBenchmarkStandardName() 获取所属的合规标准
 * @method void setBenchmarkStandardName(string $BenchmarkStandardName) 设置所属的合规标准
 * @method string getRiskLevel() 获取威胁等级。RISK_CRITICAL, RISK_HIGH, RISK_MEDIUM, RISK_LOW, RISK_NOTICE。
 * @method void setRiskLevel(string $RiskLevel) 设置威胁等级。RISK_CRITICAL, RISK_HIGH, RISK_MEDIUM, RISK_LOW, RISK_NOTICE。
 * @method string getAssetType() 获取检测项所属的资产类型
 * @method void setAssetType(string $AssetType) 设置检测项所属的资产类型
 * @method string getLastCheckTime() 获取最近检测的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastCheckTime(string $LastCheckTime) 设置最近检测的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCheckStatus() 获取检测状态

CHECK_INIT, 待检测

CHECK_RUNNING, 检测中

CHECK_FINISHED, 检测完成

CHECK_FAILED, 检测失败
 * @method void setCheckStatus(string $CheckStatus) 设置检测状态

CHECK_INIT, 待检测

CHECK_RUNNING, 检测中

CHECK_FINISHED, 检测完成

CHECK_FAILED, 检测失败
 * @method string getCheckResult() 获取检测结果。RESULT_PASSED: 通过

RESULT_FAILED: 未通过
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckResult(string $CheckResult) 设置检测结果。RESULT_PASSED: 通过

RESULT_FAILED: 未通过
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPassedAssetCount() 获取通过检测的资产的数目
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPassedAssetCount(integer $PassedAssetCount) 设置通过检测的资产的数目
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFailedAssetCount() 获取未通过检测的资产的数目
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailedAssetCount(integer $FailedAssetCount) 设置未通过检测的资产的数目
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWhitelistId() 获取检测项对应的白名单项的ID。如果存在且非0，表示检测项被用户忽略。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWhitelistId(integer $WhitelistId) 设置检测项对应的白名单项的ID。如果存在且非0，表示检测项被用户忽略。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFixSuggestion() 获取处理建议。
 * @method void setFixSuggestion(string $FixSuggestion) 设置处理建议。
 * @method integer getBenchmarkStandardId() 获取所属的合规标准的ID
 * @method void setBenchmarkStandardId(integer $BenchmarkStandardId) 设置所属的合规标准的ID
 * @method string getApplicableVersion() 获取检测项适用的版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicableVersion(string $ApplicableVersion) 设置检测项适用的版本
注意：此字段可能返回 null，表示取不到有效值。
 */
class CompliancePolicyItemSummary extends AbstractModel
{
    /**
     * @var integer 为客户分配的唯一的检测项的ID。
     */
    public $CustomerPolicyItemId;

    /**
     * @var integer 检测项的原始ID。
     */
    public $BasePolicyItemId;

    /**
     * @var string 检测项的名称。
     */
    public $Name;

    /**
     * @var string 检测项所属的类型，枚举字符串。
     */
    public $Category;

    /**
     * @var string 所属的合规标准
     */
    public $BenchmarkStandardName;

    /**
     * @var string 威胁等级。RISK_CRITICAL, RISK_HIGH, RISK_MEDIUM, RISK_LOW, RISK_NOTICE。
     */
    public $RiskLevel;

    /**
     * @var string 检测项所属的资产类型
     */
    public $AssetType;

    /**
     * @var string 最近检测的时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastCheckTime;

    /**
     * @var string 检测状态

CHECK_INIT, 待检测

CHECK_RUNNING, 检测中

CHECK_FINISHED, 检测完成

CHECK_FAILED, 检测失败
     */
    public $CheckStatus;

    /**
     * @var string 检测结果。RESULT_PASSED: 通过

RESULT_FAILED: 未通过
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckResult;

    /**
     * @var integer 通过检测的资产的数目
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PassedAssetCount;

    /**
     * @var integer 未通过检测的资产的数目
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailedAssetCount;

    /**
     * @var integer 检测项对应的白名单项的ID。如果存在且非0，表示检测项被用户忽略。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WhitelistId;

    /**
     * @var string 处理建议。
     */
    public $FixSuggestion;

    /**
     * @var integer 所属的合规标准的ID
     */
    public $BenchmarkStandardId;

    /**
     * @var string 检测项适用的版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicableVersion;

    /**
     * @param integer $CustomerPolicyItemId 为客户分配的唯一的检测项的ID。
     * @param integer $BasePolicyItemId 检测项的原始ID。
     * @param string $Name 检测项的名称。
     * @param string $Category 检测项所属的类型，枚举字符串。
     * @param string $BenchmarkStandardName 所属的合规标准
     * @param string $RiskLevel 威胁等级。RISK_CRITICAL, RISK_HIGH, RISK_MEDIUM, RISK_LOW, RISK_NOTICE。
     * @param string $AssetType 检测项所属的资产类型
     * @param string $LastCheckTime 最近检测的时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CheckStatus 检测状态

CHECK_INIT, 待检测

CHECK_RUNNING, 检测中

CHECK_FINISHED, 检测完成

CHECK_FAILED, 检测失败
     * @param string $CheckResult 检测结果。RESULT_PASSED: 通过

RESULT_FAILED: 未通过
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PassedAssetCount 通过检测的资产的数目
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FailedAssetCount 未通过检测的资产的数目
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WhitelistId 检测项对应的白名单项的ID。如果存在且非0，表示检测项被用户忽略。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FixSuggestion 处理建议。
     * @param integer $BenchmarkStandardId 所属的合规标准的ID
     * @param string $ApplicableVersion 检测项适用的版本
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
        if (array_key_exists("CustomerPolicyItemId",$param) and $param["CustomerPolicyItemId"] !== null) {
            $this->CustomerPolicyItemId = $param["CustomerPolicyItemId"];
        }

        if (array_key_exists("BasePolicyItemId",$param) and $param["BasePolicyItemId"] !== null) {
            $this->BasePolicyItemId = $param["BasePolicyItemId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("BenchmarkStandardName",$param) and $param["BenchmarkStandardName"] !== null) {
            $this->BenchmarkStandardName = $param["BenchmarkStandardName"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("LastCheckTime",$param) and $param["LastCheckTime"] !== null) {
            $this->LastCheckTime = $param["LastCheckTime"];
        }

        if (array_key_exists("CheckStatus",$param) and $param["CheckStatus"] !== null) {
            $this->CheckStatus = $param["CheckStatus"];
        }

        if (array_key_exists("CheckResult",$param) and $param["CheckResult"] !== null) {
            $this->CheckResult = $param["CheckResult"];
        }

        if (array_key_exists("PassedAssetCount",$param) and $param["PassedAssetCount"] !== null) {
            $this->PassedAssetCount = $param["PassedAssetCount"];
        }

        if (array_key_exists("FailedAssetCount",$param) and $param["FailedAssetCount"] !== null) {
            $this->FailedAssetCount = $param["FailedAssetCount"];
        }

        if (array_key_exists("WhitelistId",$param) and $param["WhitelistId"] !== null) {
            $this->WhitelistId = $param["WhitelistId"];
        }

        if (array_key_exists("FixSuggestion",$param) and $param["FixSuggestion"] !== null) {
            $this->FixSuggestion = $param["FixSuggestion"];
        }

        if (array_key_exists("BenchmarkStandardId",$param) and $param["BenchmarkStandardId"] !== null) {
            $this->BenchmarkStandardId = $param["BenchmarkStandardId"];
        }

        if (array_key_exists("ApplicableVersion",$param) and $param["ApplicableVersion"] !== null) {
            $this->ApplicableVersion = $param["ApplicableVersion"];
        }
    }
}
