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
 * 表示检测失败的资产的信息。
 *
 * @method integer getCustomerAssetId() 获取客户资产的ID。
 * @method void setCustomerAssetId(integer $CustomerAssetId) 设置客户资产的ID。
 * @method string getAssetType() 获取资产类别。
 * @method void setAssetType(string $AssetType) 设置资产类别。
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
 * @method string getAssetName() 获取资产的名称。
 * @method void setAssetName(string $AssetName) 设置资产的名称。
 * @method string getFailureReason() 获取资产检测失败的原因。
 * @method void setFailureReason(string $FailureReason) 设置资产检测失败的原因。
 * @method string getSuggestion() 获取检测失败的处理建议。
 * @method void setSuggestion(string $Suggestion) 设置检测失败的处理建议。
 * @method string getCheckTime() 获取检测的时间。
 * @method void setCheckTime(string $CheckTime) 设置检测的时间。
 */
class ComplianceScanFailedAsset extends AbstractModel
{
    /**
     * @var integer 客户资产的ID。
     */
    public $CustomerAssetId;

    /**
     * @var string 资产类别。
     */
    public $AssetType;

    /**
     * @var string 检测状态
CHECK_INIT, 待检测
CHECK_RUNNING, 检测中
CHECK_FINISHED, 检测完成
CHECK_FAILED, 检测失败
     */
    public $CheckStatus;

    /**
     * @var string 资产的名称。
     */
    public $AssetName;

    /**
     * @var string 资产检测失败的原因。
     */
    public $FailureReason;

    /**
     * @var string 检测失败的处理建议。
     */
    public $Suggestion;

    /**
     * @var string 检测的时间。
     */
    public $CheckTime;

    /**
     * @param integer $CustomerAssetId 客户资产的ID。
     * @param string $AssetType 资产类别。
     * @param string $CheckStatus 检测状态
CHECK_INIT, 待检测
CHECK_RUNNING, 检测中
CHECK_FINISHED, 检测完成
CHECK_FAILED, 检测失败
     * @param string $AssetName 资产的名称。
     * @param string $FailureReason 资产检测失败的原因。
     * @param string $Suggestion 检测失败的处理建议。
     * @param string $CheckTime 检测的时间。
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
        if (array_key_exists("CustomerAssetId",$param) and $param["CustomerAssetId"] !== null) {
            $this->CustomerAssetId = $param["CustomerAssetId"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("CheckStatus",$param) and $param["CheckStatus"] !== null) {
            $this->CheckStatus = $param["CheckStatus"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("FailureReason",$param) and $param["FailureReason"] !== null) {
            $this->FailureReason = $param["FailureReason"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("CheckTime",$param) and $param["CheckTime"] !== null) {
            $this->CheckTime = $param["CheckTime"];
        }
    }
}
