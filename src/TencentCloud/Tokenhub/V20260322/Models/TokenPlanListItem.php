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
 * Token Plan 套餐列表项
 *
 * @method string getTeamId() 获取<p>套餐 ID。</p>
 * @method void setTeamId(string $TeamId) 设置<p>套餐 ID。</p>
 * @method string getProductType() 获取<p>套餐类型。取值：enterprise（企业版专业套餐）、enterprise-auto（企业版轻享套餐）</p>
 * @method void setProductType(string $ProductType) 设置<p>套餐类型。取值：enterprise（企业版专业套餐）、enterprise-auto（企业版轻享套餐）</p>
 * @method string getName() 获取<p>套餐名称。最大 128 字符。</p>
 * @method void setName(string $Name) 设置<p>套餐名称。最大 128 字符。</p>
 * @method string getAppId() 获取<p>账号 APP ID。</p>
 * @method void setAppId(string $AppId) 设置<p>账号 APP ID。</p>
 * @method string getUin() 获取<p>主账号 UIN。</p>
 * @method void setUin(string $Uin) 设置<p>主账号 UIN。</p>
 * @method string getStatus() 获取<p>套餐状态。取值：enable（启用）、disable（停用）。</p>
 * @method void setStatus(string $Status) 设置<p>套餐状态。取值：enable（启用）、disable（停用）。</p>
 * @method string getStopReason() 获取<p>套餐关停原因。取值：NORMAL（正常）、ISOLATED（隔离/欠费）、FROZEN（冻结）、EXHAUSTED（额度耗尽）、DESTROYED（已销毁）</p>
 * @method void setStopReason(string $StopReason) 设置<p>套餐关停原因。取值：NORMAL（正常）、ISOLATED（隔离/欠费）、FROZEN（冻结）、EXHAUSTED（额度耗尽）、DESTROYED（已销毁）</p>
 * @method integer getApiKeyMax() 获取<p>可创建 API Key 上限。</p>
 * @method void setApiKeyMax(integer $ApiKeyMax) 设置<p>可创建 API Key 上限。</p>
 * @method integer getApiKeyCount() 获取<p>当前已创建的 APIKey 数量</p>
 * @method void setApiKeyCount(integer $ApiKeyCount) 设置<p>当前已创建的 APIKey 数量</p>
 * @method string getPrepayResourceID() 获取<p>云计费预付费资源包 ID。</p>
 * @method void setPrepayResourceID(string $PrepayResourceID) 设置<p>云计费预付费资源包 ID。</p>
 * @method string getCreator() 获取<p>创建人。若为子账号创建的套餐，则该值为子账号UIN。</p>
 * @method void setCreator(string $Creator) 设置<p>创建人。若为子账号创建的套餐，则该值为子账号UIN。</p>
 * @method string getCreatedAt() 获取<p>创建时间。</p>
 * @method void setCreatedAt(string $CreatedAt) 设置<p>创建时间。</p>
 * @method string getUpdatedAt() 获取<p>更新时间。</p>
 * @method void setUpdatedAt(string $UpdatedAt) 设置<p>更新时间。</p>
 * @method TokenPlanPackageInfo getPackageInfo() 获取<p>套餐包基本信息。</p>
 * @method void setPackageInfo(TokenPlanPackageInfo $PackageInfo) 设置<p>套餐包基本信息。</p>
 * @method integer getAutoRenewFlag() 获取<p>是否开启自动续费。取值：0（未开启），1（开启）</p>
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置<p>是否开启自动续费。取值：0（未开启），1（开启）</p>
 */
class TokenPlanListItem extends AbstractModel
{
    /**
     * @var string <p>套餐 ID。</p>
     */
    public $TeamId;

    /**
     * @var string <p>套餐类型。取值：enterprise（企业版专业套餐）、enterprise-auto（企业版轻享套餐）</p>
     */
    public $ProductType;

    /**
     * @var string <p>套餐名称。最大 128 字符。</p>
     */
    public $Name;

    /**
     * @var string <p>账号 APP ID。</p>
     */
    public $AppId;

    /**
     * @var string <p>主账号 UIN。</p>
     */
    public $Uin;

    /**
     * @var string <p>套餐状态。取值：enable（启用）、disable（停用）。</p>
     */
    public $Status;

    /**
     * @var string <p>套餐关停原因。取值：NORMAL（正常）、ISOLATED（隔离/欠费）、FROZEN（冻结）、EXHAUSTED（额度耗尽）、DESTROYED（已销毁）</p>
     */
    public $StopReason;

    /**
     * @var integer <p>可创建 API Key 上限。</p>
     */
    public $ApiKeyMax;

    /**
     * @var integer <p>当前已创建的 APIKey 数量</p>
     */
    public $ApiKeyCount;

    /**
     * @var string <p>云计费预付费资源包 ID。</p>
     */
    public $PrepayResourceID;

    /**
     * @var string <p>创建人。若为子账号创建的套餐，则该值为子账号UIN。</p>
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
     * @var TokenPlanPackageInfo <p>套餐包基本信息。</p>
     */
    public $PackageInfo;

    /**
     * @var integer <p>是否开启自动续费。取值：0（未开启），1（开启）</p>
     */
    public $AutoRenewFlag;

    /**
     * @param string $TeamId <p>套餐 ID。</p>
     * @param string $ProductType <p>套餐类型。取值：enterprise（企业版专业套餐）、enterprise-auto（企业版轻享套餐）</p>
     * @param string $Name <p>套餐名称。最大 128 字符。</p>
     * @param string $AppId <p>账号 APP ID。</p>
     * @param string $Uin <p>主账号 UIN。</p>
     * @param string $Status <p>套餐状态。取值：enable（启用）、disable（停用）。</p>
     * @param string $StopReason <p>套餐关停原因。取值：NORMAL（正常）、ISOLATED（隔离/欠费）、FROZEN（冻结）、EXHAUSTED（额度耗尽）、DESTROYED（已销毁）</p>
     * @param integer $ApiKeyMax <p>可创建 API Key 上限。</p>
     * @param integer $ApiKeyCount <p>当前已创建的 APIKey 数量</p>
     * @param string $PrepayResourceID <p>云计费预付费资源包 ID。</p>
     * @param string $Creator <p>创建人。若为子账号创建的套餐，则该值为子账号UIN。</p>
     * @param string $CreatedAt <p>创建时间。</p>
     * @param string $UpdatedAt <p>更新时间。</p>
     * @param TokenPlanPackageInfo $PackageInfo <p>套餐包基本信息。</p>
     * @param integer $AutoRenewFlag <p>是否开启自动续费。取值：0（未开启），1（开启）</p>
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
        if (array_key_exists("TeamId",$param) and $param["TeamId"] !== null) {
            $this->TeamId = $param["TeamId"];
        }

        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            $this->ProductType = $param["ProductType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StopReason",$param) and $param["StopReason"] !== null) {
            $this->StopReason = $param["StopReason"];
        }

        if (array_key_exists("ApiKeyMax",$param) and $param["ApiKeyMax"] !== null) {
            $this->ApiKeyMax = $param["ApiKeyMax"];
        }

        if (array_key_exists("ApiKeyCount",$param) and $param["ApiKeyCount"] !== null) {
            $this->ApiKeyCount = $param["ApiKeyCount"];
        }

        if (array_key_exists("PrepayResourceID",$param) and $param["PrepayResourceID"] !== null) {
            $this->PrepayResourceID = $param["PrepayResourceID"];
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

        if (array_key_exists("PackageInfo",$param) and $param["PackageInfo"] !== null) {
            $this->PackageInfo = new TokenPlanPackageInfo();
            $this->PackageInfo->deserialize($param["PackageInfo"]);
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }
    }
}
