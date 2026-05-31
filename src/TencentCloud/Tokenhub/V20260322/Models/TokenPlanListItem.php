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
 * @method string getTeamId() 获取套餐 ID。
 * @method void setTeamId(string $TeamId) 设置套餐 ID。
 * @method string getProductType() 获取套餐类型。取值：enterprise（企业版专业套餐）、enterprise-auto（企业版轻享套餐）
 * @method void setProductType(string $ProductType) 设置套餐类型。取值：enterprise（企业版专业套餐）、enterprise-auto（企业版轻享套餐）
 * @method string getName() 获取套餐名称。最大 128 字符。
 * @method void setName(string $Name) 设置套餐名称。最大 128 字符。
 * @method string getAppId() 获取账号 APP ID。
 * @method void setAppId(string $AppId) 设置账号 APP ID。
 * @method string getUin() 获取主账号 UIN。
 * @method void setUin(string $Uin) 设置主账号 UIN。
 * @method string getStatus() 获取套餐状态。取值：enable（启用）、disable（停用）。
 * @method void setStatus(string $Status) 设置套餐状态。取值：enable（启用）、disable（停用）。
 * @method string getStopReason() 获取套餐关停原因。取值：NORMAL（正常）、ISOLATED（隔离/欠费）、FROZEN（冻结）、EXHAUSTED（额度耗尽）、DESTROYED（已销毁）
 * @method void setStopReason(string $StopReason) 设置套餐关停原因。取值：NORMAL（正常）、ISOLATED（隔离/欠费）、FROZEN（冻结）、EXHAUSTED（额度耗尽）、DESTROYED（已销毁）
 * @method integer getApiKeyMax() 获取可创建 API Key 上限。
 * @method void setApiKeyMax(integer $ApiKeyMax) 设置可创建 API Key 上限。
 * @method string getPrepayResourceID() 获取云计费预付费资源包 ID。
 * @method void setPrepayResourceID(string $PrepayResourceID) 设置云计费预付费资源包 ID。
 * @method string getCreator() 获取创建人。若为子账号创建的套餐，则该值为子账号UIN。
 * @method void setCreator(string $Creator) 设置创建人。若为子账号创建的套餐，则该值为子账号UIN。
 * @method string getCreatedAt() 获取创建时间。
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间。
 * @method string getUpdatedAt() 获取更新时间。
 * @method void setUpdatedAt(string $UpdatedAt) 设置更新时间。
 * @method TokenPlanPackageInfo getPackageInfo() 获取套餐包基本信息。
 * @method void setPackageInfo(TokenPlanPackageInfo $PackageInfo) 设置套餐包基本信息。
 * @method integer getAutoRenewFlag() 获取是否开启自动续费。取值：0（未开启），1（开启）
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置是否开启自动续费。取值：0（未开启），1（开启）
 */
class TokenPlanListItem extends AbstractModel
{
    /**
     * @var string 套餐 ID。
     */
    public $TeamId;

    /**
     * @var string 套餐类型。取值：enterprise（企业版专业套餐）、enterprise-auto（企业版轻享套餐）
     */
    public $ProductType;

    /**
     * @var string 套餐名称。最大 128 字符。
     */
    public $Name;

    /**
     * @var string 账号 APP ID。
     */
    public $AppId;

    /**
     * @var string 主账号 UIN。
     */
    public $Uin;

    /**
     * @var string 套餐状态。取值：enable（启用）、disable（停用）。
     */
    public $Status;

    /**
     * @var string 套餐关停原因。取值：NORMAL（正常）、ISOLATED（隔离/欠费）、FROZEN（冻结）、EXHAUSTED（额度耗尽）、DESTROYED（已销毁）
     */
    public $StopReason;

    /**
     * @var integer 可创建 API Key 上限。
     */
    public $ApiKeyMax;

    /**
     * @var string 云计费预付费资源包 ID。
     */
    public $PrepayResourceID;

    /**
     * @var string 创建人。若为子账号创建的套餐，则该值为子账号UIN。
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
     * @var TokenPlanPackageInfo 套餐包基本信息。
     */
    public $PackageInfo;

    /**
     * @var integer 是否开启自动续费。取值：0（未开启），1（开启）
     */
    public $AutoRenewFlag;

    /**
     * @param string $TeamId 套餐 ID。
     * @param string $ProductType 套餐类型。取值：enterprise（企业版专业套餐）、enterprise-auto（企业版轻享套餐）
     * @param string $Name 套餐名称。最大 128 字符。
     * @param string $AppId 账号 APP ID。
     * @param string $Uin 主账号 UIN。
     * @param string $Status 套餐状态。取值：enable（启用）、disable（停用）。
     * @param string $StopReason 套餐关停原因。取值：NORMAL（正常）、ISOLATED（隔离/欠费）、FROZEN（冻结）、EXHAUSTED（额度耗尽）、DESTROYED（已销毁）
     * @param integer $ApiKeyMax 可创建 API Key 上限。
     * @param string $PrepayResourceID 云计费预付费资源包 ID。
     * @param string $Creator 创建人。若为子账号创建的套餐，则该值为子账号UIN。
     * @param string $CreatedAt 创建时间。
     * @param string $UpdatedAt 更新时间。
     * @param TokenPlanPackageInfo $PackageInfo 套餐包基本信息。
     * @param integer $AutoRenewFlag 是否开启自动续费。取值：0（未开启），1（开启）
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
