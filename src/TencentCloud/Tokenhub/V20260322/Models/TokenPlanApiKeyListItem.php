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
 * Token Plan API Key 列表项
 *
 * @method string getApiKeyId() 获取<p>API Key ID。</p>
 * @method void setApiKeyId(string $ApiKeyId) 设置<p>API Key ID。</p>
 * @method string getApiKey() 获取<p>API Key 密钥值（脱敏）。</p>
 * @method void setApiKey(string $ApiKey) 设置<p>API Key 密钥值（脱敏）。</p>
 * @method string getName() 获取<p>API Key 名称。</p>
 * @method void setName(string $Name) 设置<p>API Key 名称。</p>
 * @method string getTeamId() 获取<p>所属套餐 ID。</p>
 * @method void setTeamId(string $TeamId) 设置<p>所属套餐 ID。</p>
 * @method string getAppId() 获取<p>账号APP ID。</p>
 * @method void setAppId(string $AppId) 设置<p>账号APP ID。</p>
 * @method string getUin() 获取<p>主账号 UIN。最大 128 字符。</p>
 * @method void setUin(string $Uin) 设置<p>主账号 UIN。最大 128 字符。</p>
 * @method string getAllowedModels() 获取<p>API Key 可用模型列表（JSON 数组字符串）。</p>
 * @method void setAllowedModels(string $AllowedModels) 设置<p>API Key 可用模型列表（JSON 数组字符串）。</p>
 * @method string getStatus() 获取<p>API Key 是否可用。取值：enable（启用）、disable（停用）。</p>
 * @method void setStatus(string $Status) 设置<p>API Key 是否可用。取值：enable（启用）、disable（停用）。</p>
 * @method string getStopReason() 获取<p>API Key 停用原因。取值：NORMAL（正常，默认值），QUOTA_EXHAUSTED（API Key额度包耗尽），ABNORMAL（异常，需人工介入）</p>
 * @method void setStopReason(string $StopReason) 设置<p>API Key 停用原因。取值：NORMAL（正常，默认值），QUOTA_EXHAUSTED（API Key额度包耗尽），ABNORMAL（异常，需人工介入）</p>
 * @method string getUseStatus() 获取<p>用户侧开关。取值：enable（启用）、disable（停用）。</p>
 * @method void setUseStatus(string $UseStatus) 设置<p>用户侧开关。取值：enable（启用）、disable（停用）。</p>
 * @method integer getKeyVersion() 获取<p>密钥版本号。</p>
 * @method void setKeyVersion(integer $KeyVersion) 设置<p>密钥版本号。</p>
 * @method string getLastRotatedAt() 获取<p>最近一次重置时间。（ISO 8601）</p>
 * @method void setLastRotatedAt(string $LastRotatedAt) 设置<p>最近一次重置时间。（ISO 8601）</p>
 * @method string getCreator() 获取<p>创建人，如果是子账号创建，则该值为子账号UIN。</p>
 * @method void setCreator(string $Creator) 设置<p>创建人，如果是子账号创建，则该值为子账号UIN。</p>
 * @method string getCreatedAt() 获取<p>创建时间。</p>
 * @method void setCreatedAt(string $CreatedAt) 设置<p>创建时间。</p>
 * @method string getUpdatedAt() 获取<p>更新时间。</p>
 * @method void setUpdatedAt(string $UpdatedAt) 设置<p>更新时间。</p>
 * @method SubPackageBalance getBalance() 获取<p>API Key 额度用量信息</p>
 * @method void setBalance(SubPackageBalance $Balance) 设置<p>API Key 额度用量信息</p>
 * @method string getProductType() 获取<p>套餐类型。取值：enterprise（企业版专业套餐）、enterprise-auto（企业版轻享套餐）。</p>
 * @method void setProductType(string $ProductType) 设置<p>套餐类型。取值：enterprise（企业版专业套餐）、enterprise-auto（企业版轻享套餐）。</p>
 * @method array getIpWhitelist() 获取<p>IP 白名单列表。支持 IPv4 单地址与 IPv4 CIDR 格式，空数组表示不限制。</p>
 * @method void setIpWhitelist(array $IpWhitelist) 设置<p>IP 白名单列表。支持 IPv4 单地址与 IPv4 CIDR 格式，空数组表示不限制。</p>
 * @method boolean getOverageEnabled() 获取<p>是否开启超额按量计费。开启后，若 APIKey 用量达到总额度上限，并且使用的模型已开启按量计费，将自动切换至按量计费模式；未开启时用量达上限后调用报错。</p>
 * @method void setOverageEnabled(boolean $OverageEnabled) 设置<p>是否开启超额按量计费。开启后，若 APIKey 用量达到总额度上限，并且使用的模型已开启按量计费，将自动切换至按量计费模式；未开启时用量达上限后调用报错。</p>
 */
class TokenPlanApiKeyListItem extends AbstractModel
{
    /**
     * @var string <p>API Key ID。</p>
     */
    public $ApiKeyId;

    /**
     * @var string <p>API Key 密钥值（脱敏）。</p>
     */
    public $ApiKey;

    /**
     * @var string <p>API Key 名称。</p>
     */
    public $Name;

    /**
     * @var string <p>所属套餐 ID。</p>
     */
    public $TeamId;

    /**
     * @var string <p>账号APP ID。</p>
     */
    public $AppId;

    /**
     * @var string <p>主账号 UIN。最大 128 字符。</p>
     */
    public $Uin;

    /**
     * @var string <p>API Key 可用模型列表（JSON 数组字符串）。</p>
     */
    public $AllowedModels;

    /**
     * @var string <p>API Key 是否可用。取值：enable（启用）、disable（停用）。</p>
     */
    public $Status;

    /**
     * @var string <p>API Key 停用原因。取值：NORMAL（正常，默认值），QUOTA_EXHAUSTED（API Key额度包耗尽），ABNORMAL（异常，需人工介入）</p>
     */
    public $StopReason;

    /**
     * @var string <p>用户侧开关。取值：enable（启用）、disable（停用）。</p>
     */
    public $UseStatus;

    /**
     * @var integer <p>密钥版本号。</p>
     */
    public $KeyVersion;

    /**
     * @var string <p>最近一次重置时间。（ISO 8601）</p>
     */
    public $LastRotatedAt;

    /**
     * @var string <p>创建人，如果是子账号创建，则该值为子账号UIN。</p>
     */
    public $Creator;

    /**
     * @var string <p>创建时间。</p>
     */
    public $CreatedAt;

    /**
     * @var string <p>更新时间。</p>
     */
    public $UpdatedAt;

    /**
     * @var SubPackageBalance <p>API Key 额度用量信息</p>
     */
    public $Balance;

    /**
     * @var string <p>套餐类型。取值：enterprise（企业版专业套餐）、enterprise-auto（企业版轻享套餐）。</p>
     */
    public $ProductType;

    /**
     * @var array <p>IP 白名单列表。支持 IPv4 单地址与 IPv4 CIDR 格式，空数组表示不限制。</p>
     */
    public $IpWhitelist;

    /**
     * @var boolean <p>是否开启超额按量计费。开启后，若 APIKey 用量达到总额度上限，并且使用的模型已开启按量计费，将自动切换至按量计费模式；未开启时用量达上限后调用报错。</p>
     */
    public $OverageEnabled;

    /**
     * @param string $ApiKeyId <p>API Key ID。</p>
     * @param string $ApiKey <p>API Key 密钥值（脱敏）。</p>
     * @param string $Name <p>API Key 名称。</p>
     * @param string $TeamId <p>所属套餐 ID。</p>
     * @param string $AppId <p>账号APP ID。</p>
     * @param string $Uin <p>主账号 UIN。最大 128 字符。</p>
     * @param string $AllowedModels <p>API Key 可用模型列表（JSON 数组字符串）。</p>
     * @param string $Status <p>API Key 是否可用。取值：enable（启用）、disable（停用）。</p>
     * @param string $StopReason <p>API Key 停用原因。取值：NORMAL（正常，默认值），QUOTA_EXHAUSTED（API Key额度包耗尽），ABNORMAL（异常，需人工介入）</p>
     * @param string $UseStatus <p>用户侧开关。取值：enable（启用）、disable（停用）。</p>
     * @param integer $KeyVersion <p>密钥版本号。</p>
     * @param string $LastRotatedAt <p>最近一次重置时间。（ISO 8601）</p>
     * @param string $Creator <p>创建人，如果是子账号创建，则该值为子账号UIN。</p>
     * @param string $CreatedAt <p>创建时间。</p>
     * @param string $UpdatedAt <p>更新时间。</p>
     * @param SubPackageBalance $Balance <p>API Key 额度用量信息</p>
     * @param string $ProductType <p>套餐类型。取值：enterprise（企业版专业套餐）、enterprise-auto（企业版轻享套餐）。</p>
     * @param array $IpWhitelist <p>IP 白名单列表。支持 IPv4 单地址与 IPv4 CIDR 格式，空数组表示不限制。</p>
     * @param boolean $OverageEnabled <p>是否开启超额按量计费。开启后，若 APIKey 用量达到总额度上限，并且使用的模型已开启按量计费，将自动切换至按量计费模式；未开启时用量达上限后调用报错。</p>
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

        if (array_key_exists("Balance",$param) and $param["Balance"] !== null) {
            $this->Balance = new SubPackageBalance();
            $this->Balance->deserialize($param["Balance"]);
        }

        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            $this->ProductType = $param["ProductType"];
        }

        if (array_key_exists("IpWhitelist",$param) and $param["IpWhitelist"] !== null) {
            $this->IpWhitelist = $param["IpWhitelist"];
        }

        if (array_key_exists("OverageEnabled",$param) and $param["OverageEnabled"] !== null) {
            $this->OverageEnabled = $param["OverageEnabled"];
        }
    }
}
