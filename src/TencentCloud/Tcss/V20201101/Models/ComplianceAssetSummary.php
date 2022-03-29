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
 * 表示一类资产的总览信息。
 *
 * @method string getAssetType() 获取资产类别。
 * @method void setAssetType(string $AssetType) 设置资产类别。
 * @method boolean getIsCustomerFirstCheck() 获取是否为客户的首次检测。与CheckStatus配合使用。
 * @method void setIsCustomerFirstCheck(boolean $IsCustomerFirstCheck) 设置是否为客户的首次检测。与CheckStatus配合使用。
 * @method string getCheckStatus() 获取检测状态

CHECK_UNINIT, 用户未启用此功能

CHECK_INIT, 待检测

CHECK_RUNNING, 检测中

CHECK_FINISHED, 检测完成

CHECK_FAILED, 检测失败
 * @method void setCheckStatus(string $CheckStatus) 设置检测状态

CHECK_UNINIT, 用户未启用此功能

CHECK_INIT, 待检测

CHECK_RUNNING, 检测中

CHECK_FINISHED, 检测完成

CHECK_FAILED, 检测失败
 * @method float getCheckProgress() 获取此类别的检测进度，为 0~100 的数。若未在检测中，无此字段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckProgress(float $CheckProgress) 设置此类别的检测进度，为 0~100 的数。若未在检测中，无此字段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPassedPolicyItemCount() 获取此类资产通过的检测项的数目。
 * @method void setPassedPolicyItemCount(integer $PassedPolicyItemCount) 设置此类资产通过的检测项的数目。
 * @method integer getFailedPolicyItemCount() 获取此类资产未通过的检测的数目。
 * @method void setFailedPolicyItemCount(integer $FailedPolicyItemCount) 设置此类资产未通过的检测的数目。
 * @method integer getFailedCriticalPolicyItemCount() 获取此类资产下未通过的严重级别的检测项的数目。
 * @method void setFailedCriticalPolicyItemCount(integer $FailedCriticalPolicyItemCount) 设置此类资产下未通过的严重级别的检测项的数目。
 * @method integer getFailedHighRiskPolicyItemCount() 获取此类资产下未通过的高危检测项的数目。
 * @method void setFailedHighRiskPolicyItemCount(integer $FailedHighRiskPolicyItemCount) 设置此类资产下未通过的高危检测项的数目。
 * @method integer getFailedMediumRiskPolicyItemCount() 获取此类资产下未通过的中危检测项的数目。
 * @method void setFailedMediumRiskPolicyItemCount(integer $FailedMediumRiskPolicyItemCount) 设置此类资产下未通过的中危检测项的数目。
 * @method integer getFailedLowRiskPolicyItemCount() 获取此类资产下未通过的低危检测项的数目。
 * @method void setFailedLowRiskPolicyItemCount(integer $FailedLowRiskPolicyItemCount) 设置此类资产下未通过的低危检测项的数目。
 * @method integer getNoticePolicyItemCount() 获取此类资产下提示级别的检测项的数目。
 * @method void setNoticePolicyItemCount(integer $NoticePolicyItemCount) 设置此类资产下提示级别的检测项的数目。
 * @method integer getPassedAssetCount() 获取通过检测的资产的数目。
 * @method void setPassedAssetCount(integer $PassedAssetCount) 设置通过检测的资产的数目。
 * @method integer getFailedAssetCount() 获取未通过检测的资产的数目。
 * @method void setFailedAssetCount(integer $FailedAssetCount) 设置未通过检测的资产的数目。
 * @method float getAssetPassedRate() 获取此类资产的合规率，0~100的数。
 * @method void setAssetPassedRate(float $AssetPassedRate) 设置此类资产的合规率，0~100的数。
 * @method integer getScanFailedAssetCount() 获取检测失败的资产的数目。
 * @method void setScanFailedAssetCount(integer $ScanFailedAssetCount) 设置检测失败的资产的数目。
 * @method float getCheckCostTime() 获取上次检测的耗时，单位为秒。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckCostTime(float $CheckCostTime) 设置上次检测的耗时，单位为秒。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastCheckTime() 获取上次检测的时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastCheckTime(string $LastCheckTime) 设置上次检测的时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method CompliancePeriodTaskRule getPeriodRule() 获取定时检测规则。
 * @method void setPeriodRule(CompliancePeriodTaskRule $PeriodRule) 设置定时检测规则。
 * @method integer getOpenPolicyItemCount() 获取已开启的检查项总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOpenPolicyItemCount(integer $OpenPolicyItemCount) 设置已开启的检查项总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIgnoredPolicyItemCount() 获取已忽略的检查项总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIgnoredPolicyItemCount(integer $IgnoredPolicyItemCount) 设置已忽略的检查项总数
注意：此字段可能返回 null，表示取不到有效值。
 */
class ComplianceAssetSummary extends AbstractModel
{
    /**
     * @var string 资产类别。
     */
    public $AssetType;

    /**
     * @var boolean 是否为客户的首次检测。与CheckStatus配合使用。
     */
    public $IsCustomerFirstCheck;

    /**
     * @var string 检测状态

CHECK_UNINIT, 用户未启用此功能

CHECK_INIT, 待检测

CHECK_RUNNING, 检测中

CHECK_FINISHED, 检测完成

CHECK_FAILED, 检测失败
     */
    public $CheckStatus;

    /**
     * @var float 此类别的检测进度，为 0~100 的数。若未在检测中，无此字段。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckProgress;

    /**
     * @var integer 此类资产通过的检测项的数目。
     */
    public $PassedPolicyItemCount;

    /**
     * @var integer 此类资产未通过的检测的数目。
     */
    public $FailedPolicyItemCount;

    /**
     * @var integer 此类资产下未通过的严重级别的检测项的数目。
     */
    public $FailedCriticalPolicyItemCount;

    /**
     * @var integer 此类资产下未通过的高危检测项的数目。
     */
    public $FailedHighRiskPolicyItemCount;

    /**
     * @var integer 此类资产下未通过的中危检测项的数目。
     */
    public $FailedMediumRiskPolicyItemCount;

    /**
     * @var integer 此类资产下未通过的低危检测项的数目。
     */
    public $FailedLowRiskPolicyItemCount;

    /**
     * @var integer 此类资产下提示级别的检测项的数目。
     */
    public $NoticePolicyItemCount;

    /**
     * @var integer 通过检测的资产的数目。
     */
    public $PassedAssetCount;

    /**
     * @var integer 未通过检测的资产的数目。
     */
    public $FailedAssetCount;

    /**
     * @var float 此类资产的合规率，0~100的数。
     */
    public $AssetPassedRate;

    /**
     * @var integer 检测失败的资产的数目。
     */
    public $ScanFailedAssetCount;

    /**
     * @var float 上次检测的耗时，单位为秒。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckCostTime;

    /**
     * @var string 上次检测的时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastCheckTime;

    /**
     * @var CompliancePeriodTaskRule 定时检测规则。
     */
    public $PeriodRule;

    /**
     * @var integer 已开启的检查项总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OpenPolicyItemCount;

    /**
     * @var integer 已忽略的检查项总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IgnoredPolicyItemCount;

    /**
     * @param string $AssetType 资产类别。
     * @param boolean $IsCustomerFirstCheck 是否为客户的首次检测。与CheckStatus配合使用。
     * @param string $CheckStatus 检测状态

CHECK_UNINIT, 用户未启用此功能

CHECK_INIT, 待检测

CHECK_RUNNING, 检测中

CHECK_FINISHED, 检测完成

CHECK_FAILED, 检测失败
     * @param float $CheckProgress 此类别的检测进度，为 0~100 的数。若未在检测中，无此字段。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PassedPolicyItemCount 此类资产通过的检测项的数目。
     * @param integer $FailedPolicyItemCount 此类资产未通过的检测的数目。
     * @param integer $FailedCriticalPolicyItemCount 此类资产下未通过的严重级别的检测项的数目。
     * @param integer $FailedHighRiskPolicyItemCount 此类资产下未通过的高危检测项的数目。
     * @param integer $FailedMediumRiskPolicyItemCount 此类资产下未通过的中危检测项的数目。
     * @param integer $FailedLowRiskPolicyItemCount 此类资产下未通过的低危检测项的数目。
     * @param integer $NoticePolicyItemCount 此类资产下提示级别的检测项的数目。
     * @param integer $PassedAssetCount 通过检测的资产的数目。
     * @param integer $FailedAssetCount 未通过检测的资产的数目。
     * @param float $AssetPassedRate 此类资产的合规率，0~100的数。
     * @param integer $ScanFailedAssetCount 检测失败的资产的数目。
     * @param float $CheckCostTime 上次检测的耗时，单位为秒。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastCheckTime 上次检测的时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param CompliancePeriodTaskRule $PeriodRule 定时检测规则。
     * @param integer $OpenPolicyItemCount 已开启的检查项总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IgnoredPolicyItemCount 已忽略的检查项总数
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
        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("IsCustomerFirstCheck",$param) and $param["IsCustomerFirstCheck"] !== null) {
            $this->IsCustomerFirstCheck = $param["IsCustomerFirstCheck"];
        }

        if (array_key_exists("CheckStatus",$param) and $param["CheckStatus"] !== null) {
            $this->CheckStatus = $param["CheckStatus"];
        }

        if (array_key_exists("CheckProgress",$param) and $param["CheckProgress"] !== null) {
            $this->CheckProgress = $param["CheckProgress"];
        }

        if (array_key_exists("PassedPolicyItemCount",$param) and $param["PassedPolicyItemCount"] !== null) {
            $this->PassedPolicyItemCount = $param["PassedPolicyItemCount"];
        }

        if (array_key_exists("FailedPolicyItemCount",$param) and $param["FailedPolicyItemCount"] !== null) {
            $this->FailedPolicyItemCount = $param["FailedPolicyItemCount"];
        }

        if (array_key_exists("FailedCriticalPolicyItemCount",$param) and $param["FailedCriticalPolicyItemCount"] !== null) {
            $this->FailedCriticalPolicyItemCount = $param["FailedCriticalPolicyItemCount"];
        }

        if (array_key_exists("FailedHighRiskPolicyItemCount",$param) and $param["FailedHighRiskPolicyItemCount"] !== null) {
            $this->FailedHighRiskPolicyItemCount = $param["FailedHighRiskPolicyItemCount"];
        }

        if (array_key_exists("FailedMediumRiskPolicyItemCount",$param) and $param["FailedMediumRiskPolicyItemCount"] !== null) {
            $this->FailedMediumRiskPolicyItemCount = $param["FailedMediumRiskPolicyItemCount"];
        }

        if (array_key_exists("FailedLowRiskPolicyItemCount",$param) and $param["FailedLowRiskPolicyItemCount"] !== null) {
            $this->FailedLowRiskPolicyItemCount = $param["FailedLowRiskPolicyItemCount"];
        }

        if (array_key_exists("NoticePolicyItemCount",$param) and $param["NoticePolicyItemCount"] !== null) {
            $this->NoticePolicyItemCount = $param["NoticePolicyItemCount"];
        }

        if (array_key_exists("PassedAssetCount",$param) and $param["PassedAssetCount"] !== null) {
            $this->PassedAssetCount = $param["PassedAssetCount"];
        }

        if (array_key_exists("FailedAssetCount",$param) and $param["FailedAssetCount"] !== null) {
            $this->FailedAssetCount = $param["FailedAssetCount"];
        }

        if (array_key_exists("AssetPassedRate",$param) and $param["AssetPassedRate"] !== null) {
            $this->AssetPassedRate = $param["AssetPassedRate"];
        }

        if (array_key_exists("ScanFailedAssetCount",$param) and $param["ScanFailedAssetCount"] !== null) {
            $this->ScanFailedAssetCount = $param["ScanFailedAssetCount"];
        }

        if (array_key_exists("CheckCostTime",$param) and $param["CheckCostTime"] !== null) {
            $this->CheckCostTime = $param["CheckCostTime"];
        }

        if (array_key_exists("LastCheckTime",$param) and $param["LastCheckTime"] !== null) {
            $this->LastCheckTime = $param["LastCheckTime"];
        }

        if (array_key_exists("PeriodRule",$param) and $param["PeriodRule"] !== null) {
            $this->PeriodRule = new CompliancePeriodTaskRule();
            $this->PeriodRule->deserialize($param["PeriodRule"]);
        }

        if (array_key_exists("OpenPolicyItemCount",$param) and $param["OpenPolicyItemCount"] !== null) {
            $this->OpenPolicyItemCount = $param["OpenPolicyItemCount"];
        }

        if (array_key_exists("IgnoredPolicyItemCount",$param) and $param["IgnoredPolicyItemCount"] !== null) {
            $this->IgnoredPolicyItemCount = $param["IgnoredPolicyItemCount"];
        }
    }
}
