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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Token Plan API Key 详情
 *
 * @method string getApiKeyId() 获取API Key ID。
 * @method void setApiKeyId(string $ApiKeyId) 设置API Key ID。
 * @method string getApiKey() 获取API Key 密钥值（脱敏）。
 * @method void setApiKey(string $ApiKey) 设置API Key 密钥值（脱敏）。
 * @method string getName() 获取API Key 名称。
 * @method void setName(string $Name) 设置API Key 名称。
 * @method string getTeamId() 获取所属套餐 ID。
 * @method void setTeamId(string $TeamId) 设置所属套餐 ID。
 * @method string getAppId() 获取账号APP ID。
 * @method void setAppId(string $AppId) 设置账号APP ID。
 * @method string getUin() 获取主账号 UIN。
 * @method void setUin(string $Uin) 设置主账号 UIN。
 * @method string getAllowedModels() 获取API Key 可用模型列表（JSON 数组字符串）。
 * @method void setAllowedModels(string $AllowedModels) 设置API Key 可用模型列表（JSON 数组字符串）。
 * @method string getStatus() 获取API Key 是否可用。取值：enable（启用）、disable（停用）。
 * @method void setStatus(string $Status) 设置API Key 是否可用。取值：enable（启用）、disable（停用）。
 * @method string getStopReason() 获取API Key 停用原因。取值：NORMAL（正常，默认值），QUOTA_EXHAUSTED（API Key额度包耗尽），ABNORMAL（异常，需人工介入）
 * @method void setStopReason(string $StopReason) 设置API Key 停用原因。取值：NORMAL（正常，默认值），QUOTA_EXHAUSTED（API Key额度包耗尽），ABNORMAL（异常，需人工介入）
 * @method string getUseStatus() 获取用户侧开关。取值：enable（启用）、disable（停用）。
 * @method void setUseStatus(string $UseStatus) 设置用户侧开关。取值：enable（启用）、disable（停用）。
 * @method integer getKeyVersion() 获取密钥版本号。
 * @method void setKeyVersion(integer $KeyVersion) 设置密钥版本号。
 * @method string getLastRotatedAt() 获取最近一次重置时间。（ISO 8601）
 * @method void setLastRotatedAt(string $LastRotatedAt) 设置最近一次重置时间。（ISO 8601）
 * @method string getCreator() 获取创建人，如果是子账号创建，则该值为子账号UIN。
 * @method void setCreator(string $Creator) 设置创建人，如果是子账号创建，则该值为子账号UIN。
 * @method string getCreatedAt() 获取创建时间。
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间。
 * @method string getUpdatedAt() 获取更新时间。
 * @method void setUpdatedAt(string $UpdatedAt) 设置更新时间。
 * @method integer getTPM() 获取TPM 限制（Tokens Per Minute）。
 * @method void setTPM(integer $TPM) 设置TPM 限制（Tokens Per Minute）。
 * @method string getProductType() 获取套餐类型。取值：enterprise（企业版专业套餐）、enterprise-auto（企业版轻享套餐）
 * @method void setProductType(string $ProductType) 设置套餐类型。取值：enterprise（企业版专业套餐）、enterprise-auto（企业版轻享套餐）
 */
class TokenPlanApiKeyInfo extends AbstractModel
{
    /**
     * @var string API Key ID。
     */
    public $ApiKeyId;

    /**
     * @var string API Key 密钥值（脱敏）。
     */
    public $ApiKey;

    /**
     * @var string API Key 名称。
     */
    public $Name;

    /**
     * @var string 所属套餐 ID。
     */
    public $TeamId;

    /**
     * @var string 账号APP ID。
     */
    public $AppId;

    /**
     * @var string 主账号 UIN。
     */
    public $Uin;

    /**
     * @var string API Key 可用模型列表（JSON 数组字符串）。
     */
    public $AllowedModels;

    /**
     * @var string API Key 是否可用。取值：enable（启用）、disable（停用）。
     */
    public $Status;

    /**
     * @var string API Key 停用原因。取值：NORMAL（正常，默认值），QUOTA_EXHAUSTED（API Key额度包耗尽），ABNORMAL（异常，需人工介入）
     */
    public $StopReason;

    /**
     * @var string 用户侧开关。取值：enable（启用）、disable（停用）。
     */
    public $UseStatus;

    /**
     * @var integer 密钥版本号。
     */
    public $KeyVersion;

    /**
     * @var string 最近一次重置时间。（ISO 8601）
     */
    public $LastRotatedAt;

    /**
     * @var string 创建人，如果是子账号创建，则该值为子账号UIN。
     */
    public $Creator;

    /**
     * @var string 创建时间。
     */
    public $CreatedAt;

    /**
     * @var string 更新时间。
     */
    public $UpdatedAt;

    /**
     * @var integer TPM 限制（Tokens Per Minute）。
     */
    public $TPM;

    /**
     * @var string 套餐类型。取值：enterprise（企业版专业套餐）、enterprise-auto（企业版轻享套餐）
     */
    public $ProductType;

    /**
     * @param string $ApiKeyId API Key ID。
     * @param string $ApiKey API Key 密钥值（脱敏）。
     * @param string $Name API Key 名称。
     * @param string $TeamId 所属套餐 ID。
     * @param string $AppId 账号APP ID。
     * @param string $Uin 主账号 UIN。
     * @param string $AllowedModels API Key 可用模型列表（JSON 数组字符串）。
     * @param string $Status API Key 是否可用。取值：enable（启用）、disable（停用）。
     * @param string $StopReason API Key 停用原因。取值：NORMAL（正常，默认值），QUOTA_EXHAUSTED（API Key额度包耗尽），ABNORMAL（异常，需人工介入）
     * @param string $UseStatus 用户侧开关。取值：enable（启用）、disable（停用）。
     * @param integer $KeyVersion 密钥版本号。
     * @param string $LastRotatedAt 最近一次重置时间。（ISO 8601）
     * @param string $Creator 创建人，如果是子账号创建，则该值为子账号UIN。
     * @param string $CreatedAt 创建时间。
     * @param string $UpdatedAt 更新时间。
     * @param integer $TPM TPM 限制（Tokens Per Minute）。
     * @param string $ProductType 套餐类型。取值：enterprise（企业版专业套餐）、enterprise-auto（企业版轻享套餐）
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
        if (array_key_exists("ApiKeyId",$param) and $param["ApiKeyId"] !== null) {
            $this->ApiKeyId = $param["ApiKeyId"];
        }

        if (array_key_exists("ApiKey",$param) and $param["ApiKey"] !== null) {
            $this->ApiKey = $param["ApiKey"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TeamId",$param) and $param["TeamId"] !== null) {
            $this->TeamId = $param["TeamId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("AllowedModels",$param) and $param["AllowedModels"] !== null) {
            $this->AllowedModels = $param["AllowedModels"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StopReason",$param) and $param["StopReason"] !== null) {
            $this->StopReason = $param["StopReason"];
        }

        if (array_key_exists("UseStatus",$param) and $param["UseStatus"] !== null) {
            $this->UseStatus = $param["UseStatus"];
        }

        if (array_key_exists("KeyVersion",$param) and $param["KeyVersion"] !== null) {
            $this->KeyVersion = $param["KeyVersion"];
        }

        if (array_key_exists("LastRotatedAt",$param) and $param["LastRotatedAt"] !== null) {
            $this->LastRotatedAt = $param["LastRotatedAt"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("TPM",$param) and $param["TPM"] !== null) {
            $this->TPM = $param["TPM"];
        }

        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            $this->ProductType = $param["ProductType"];
        }
    }
}
