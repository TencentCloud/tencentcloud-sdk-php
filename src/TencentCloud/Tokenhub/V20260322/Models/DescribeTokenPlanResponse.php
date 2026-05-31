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
 * DescribeTokenPlan返回参数结构体
 *
 * @method string getTeamId() 获取套餐 ID。
 * @method void setTeamId(string $TeamId) 设置套餐 ID。
 * @method string getName() 获取套餐名称。
 * @method void setName(string $Name) 设置套餐名称。
 * @method string getAppId() 获取主账号 APP ID。
 * @method void setAppId(string $AppId) 设置主账号 APP ID。
 * @method string getUin() 获取主账号 UIN。
 * @method void setUin(string $Uin) 设置主账号 UIN。
 * @method string getStatus() 获取状态。取值：enable（启用）、disable（停用）。
 * @method void setStatus(string $Status) 设置状态。取值：enable（启用）、disable（停用）。
 * @method string getStopReason() 获取关停原因。取值：取值：NORMAL（套餐正常）、ISOLATED（隔离/欠费）、FROZEN（冻结）、EXHAUSTED（额度耗尽）、DESTROYED（已销毁）。
 * @method void setStopReason(string $StopReason) 设置关停原因。取值：取值：NORMAL（套餐正常）、ISOLATED（隔离/欠费）、FROZEN（冻结）、EXHAUSTED（额度耗尽）、DESTROYED（已销毁）。
 * @method integer getApiKeyMax() 获取可创建APIKey 上限。
 * @method void setApiKeyMax(integer $ApiKeyMax) 设置可创建APIKey 上限。
 * @method string getPrepayResourceID() 获取云计费预付费资源包 ID。
 * @method void setPrepayResourceID(string $PrepayResourceID) 设置云计费预付费资源包 ID。
 * @method string getCreator() 获取创建人，子账号创建的套餐将展示子账号UIN。
 * @method void setCreator(string $Creator) 设置创建人，子账号创建的套餐将展示子账号UIN。
 * @method string getCreatedAt() 获取创建时间。
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间。
 * @method string getUpdatedAt() 获取更新时间。
 * @method void setUpdatedAt(string $UpdatedAt) 设置更新时间。
 * @method TokenPlanPackageInfo getPackageInfo() 获取套餐包基本信息
 * @method void setPackageInfo(TokenPlanPackageInfo $PackageInfo) 设置套餐包基本信息
 * @method integer getAutoRenewFlag() 获取自动续费标识。取值：0（手动续费）、1（自动续费）、2（明确不自动续费）。未绑定预付费资源时不返回。
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费标识。取值：0（手动续费）、1（自动续费）、2（明确不自动续费）。未绑定预付费资源时不返回。
 * @method integer getApiKeyCount() 获取当前已创建的 API Key 数量
 * @method void setApiKeyCount(integer $ApiKeyCount) 设置当前已创建的 API Key 数量
 * @method TokenSummary getTokenSummary() 获取当前周期 Token 用量明细
 * @method void setTokenSummary(TokenSummary $TokenSummary) 设置当前周期 Token 用量明细
 * @method string getProductType() 获取套餐类型。取值：enterprise（企业版专业套餐）、enterprise-auto（企业版轻享套餐）
 * @method void setProductType(string $ProductType) 设置套餐类型。取值：enterprise（企业版专业套餐）、enterprise-auto（企业版轻享套餐）
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTokenPlanResponse extends AbstractModel
{
    /**
     * @var string 套餐 ID。
     */
    public $TeamId;

    /**
     * @var string 套餐名称。
     */
    public $Name;

    /**
     * @var string 主账号 APP ID。
     */
    public $AppId;

    /**
     * @var string 主账号 UIN。
     */
    public $Uin;

    /**
     * @var string 状态。取值：enable（启用）、disable（停用）。
     */
    public $Status;

    /**
     * @var string 关停原因。取值：取值：NORMAL（套餐正常）、ISOLATED（隔离/欠费）、FROZEN（冻结）、EXHAUSTED（额度耗尽）、DESTROYED（已销毁）。
     */
    public $StopReason;

    /**
     * @var integer 可创建APIKey 上限。
     */
    public $ApiKeyMax;

    /**
     * @var string 云计费预付费资源包 ID。
     */
    public $PrepayResourceID;

    /**
     * @var string 创建人，子账号创建的套餐将展示子账号UIN。
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
     * @var TokenPlanPackageInfo 套餐包基本信息
     */
    public $PackageInfo;

    /**
     * @var integer 自动续费标识。取值：0（手动续费）、1（自动续费）、2（明确不自动续费）。未绑定预付费资源时不返回。
     */
    public $AutoRenewFlag;

    /**
     * @var integer 当前已创建的 API Key 数量
     */
    public $ApiKeyCount;

    /**
     * @var TokenSummary 当前周期 Token 用量明细
     */
    public $TokenSummary;

    /**
     * @var string 套餐类型。取值：enterprise（企业版专业套餐）、enterprise-auto（企业版轻享套餐）
     */
    public $ProductType;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TeamId 套餐 ID。
     * @param string $Name 套餐名称。
     * @param string $AppId 主账号 APP ID。
     * @param string $Uin 主账号 UIN。
     * @param string $Status 状态。取值：enable（启用）、disable（停用）。
     * @param string $StopReason 关停原因。取值：取值：NORMAL（套餐正常）、ISOLATED（隔离/欠费）、FROZEN（冻结）、EXHAUSTED（额度耗尽）、DESTROYED（已销毁）。
     * @param integer $ApiKeyMax 可创建APIKey 上限。
     * @param string $PrepayResourceID 云计费预付费资源包 ID。
     * @param string $Creator 创建人，子账号创建的套餐将展示子账号UIN。
     * @param string $CreatedAt 创建时间。
     * @param string $UpdatedAt 更新时间。
     * @param TokenPlanPackageInfo $PackageInfo 套餐包基本信息
     * @param integer $AutoRenewFlag 自动续费标识。取值：0（手动续费）、1（自动续费）、2（明确不自动续费）。未绑定预付费资源时不返回。
     * @param integer $ApiKeyCount 当前已创建的 API Key 数量
     * @param TokenSummary $TokenSummary 当前周期 Token 用量明细
     * @param string $ProductType 套餐类型。取值：enterprise（企业版专业套餐）、enterprise-auto（企业版轻享套餐）
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("ApiKeyCount",$param) and $param["ApiKeyCount"] !== null) {
            $this->ApiKeyCount = $param["ApiKeyCount"];
        }

        if (array_key_exists("TokenSummary",$param) and $param["TokenSummary"] !== null) {
            $this->TokenSummary = new TokenSummary();
            $this->TokenSummary->deserialize($param["TokenSummary"]);
        }

        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            $this->ProductType = $param["ProductType"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
