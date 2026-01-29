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
namespace TencentCloud\Cloudapp\V20220530\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 表示应用实例的软件授权，包含颁发信息、激活信息等内容。
 *
 * @method string getLicenseId() 获取<p>License ID</p>
 * @method void setLicenseId(string $LicenseId) 设置<p>License ID</p>
 * @method string getLicenseMode() 获取<p>软件授权模式。<table><thead><tr><th>枚举值</th><th>说明</th></tr></thead><tbody><tr><td>Permanent</td><td>永久授权。该授权不受有效期限制。</td></tr><tr><td>Subscription</td><td>订阅授权。授权如果过了有效期，则会进入过期状态。</td></tr><tr><td>Accept</td><td>验收期授权。用于需要验收的软件处于验收期间的授权，授权如果过了验收有效期，则会进入过期状态。</td></tr></tbody></table></p>
 * @method void setLicenseMode(string $LicenseMode) 设置<p>软件授权模式。<table><thead><tr><th>枚举值</th><th>说明</th></tr></thead><tbody><tr><td>Permanent</td><td>永久授权。该授权不受有效期限制。</td></tr><tr><td>Subscription</td><td>订阅授权。授权如果过了有效期，则会进入过期状态。</td></tr><tr><td>Accept</td><td>验收期授权。用于需要验收的软件处于验收期间的授权，授权如果过了验收有效期，则会进入过期状态。</td></tr></tbody></table></p>
 * @method string getLicenseStatus() 获取<p>软件的授权状态。<table><thead><tr><th>枚举值</th><th>说明</th></tr></thead><tbody><tr><td>Issued</td><td>已颁发，等待激活。一般来说，如果软件已经在运行，不会出现该状态。</td></tr><tr><td>Active</td><td>授权在有效期内，这是软件运行期间最常见的状态。</td></tr><tr><td>Expired</td><td>授权已过期。订阅类的软件授权有有效期，如果服务器时间已晚于有效期，则会进入过期状态。</td></tr><tr><td>Isolated</td><td>授权已隔离。有截止日期的授权，当用户授权到期时，先进入此状态，用户可以去续费，超过7天不续费则授权进入Destroyed状态。</td></tr><tr><td>Destroyed</td><td>授权已失效/销毁。用户如果退货软件，则授权会自动失效。</td></tr></tbody></table></p>
 * @method void setLicenseStatus(string $LicenseStatus) 设置<p>软件的授权状态。<table><thead><tr><th>枚举值</th><th>说明</th></tr></thead><tbody><tr><td>Issued</td><td>已颁发，等待激活。一般来说，如果软件已经在运行，不会出现该状态。</td></tr><tr><td>Active</td><td>授权在有效期内，这是软件运行期间最常见的状态。</td></tr><tr><td>Expired</td><td>授权已过期。订阅类的软件授权有有效期，如果服务器时间已晚于有效期，则会进入过期状态。</td></tr><tr><td>Isolated</td><td>授权已隔离。有截止日期的授权，当用户授权到期时，先进入此状态，用户可以去续费，超过7天不续费则授权进入Destroyed状态。</td></tr><tr><td>Destroyed</td><td>授权已失效/销毁。用户如果退货软件，则授权会自动失效。</td></tr></tbody></table></p>
 * @method integer getProviderId() 获取<p>软件供应方 ID。</p>
 * @method void setProviderId(integer $ProviderId) 设置<p>软件供应方 ID。</p>
 * @method string getSoftwarePackageId() 获取<p>软件包 ID。</p>
 * @method void setSoftwarePackageId(string $SoftwarePackageId) 设置<p>软件包 ID。</p>
 * @method string getSoftwarePackageVersion() 获取<p>软件包版本。</p>
 * @method void setSoftwarePackageVersion(string $SoftwarePackageVersion) 设置<p>软件包版本。</p>
 * @method string getAuthorizedUserUin() 获取<p>被授权的用户 UIN。</p>
 * @method void setAuthorizedUserUin(string $AuthorizedUserUin) 设置<p>被授权的用户 UIN。</p>
 * @method string getAuthorizedCloudappId() 获取<p>被授权的应用实例 ID。</p>
 * @method void setAuthorizedCloudappId(string $AuthorizedCloudappId) 设置<p>被授权的应用实例 ID。</p>
 * @method string getAuthorizedCloudappRoleId() 获取<p>被授权的角色 ID。</p>
 * @method void setAuthorizedCloudappRoleId(string $AuthorizedCloudappRoleId) 设置<p>被授权的角色 ID。</p>
 * @method array getAuthorizedSpecification() 获取<p>被授权的软件规格，具体字段请参考结构SaleParam</p>
 * @method void setAuthorizedSpecification(array $AuthorizedSpecification) 设置<p>被授权的软件规格，具体字段请参考结构SaleParam</p>
 * @method integer getBillingMode() 获取<p>被授权的软件的计费模式。<table><thead><tr><th>枚举值</th><th>说明</th></tr></thead><tbody><tr><td>1</td><td>线上计费，软件的授权从腾讯云线上购买，支持续费、退款等操作。</td></tr><tr><td>2</td><td>线下计费，软件的授权线下签订合同购买，定向客户交付，无法从线上续费和退款。</td></tr><tr><td>4</td><td>免费</td></tr></tbody></table></p>
 * @method void setBillingMode(integer $BillingMode) 设置<p>被授权的软件的计费模式。<table><thead><tr><th>枚举值</th><th>说明</th></tr></thead><tbody><tr><td>1</td><td>线上计费，软件的授权从腾讯云线上购买，支持续费、退款等操作。</td></tr><tr><td>2</td><td>线下计费，软件的授权线下签订合同购买，定向客户交付，无法从线上续费和退款。</td></tr><tr><td>4</td><td>免费</td></tr></tbody></table></p>
 * @method integer getLifeSpan() 获取<p>授权时长（单位由LifeSpanUnit确定，枚举值有Y年/M月/D日三种）</p>
 * @method void setLifeSpan(integer $LifeSpan) 设置<p>授权时长（单位由LifeSpanUnit确定，枚举值有Y年/M月/D日三种）</p>
 * @method string getIssueDate() 获取<p>授权颁发时间。</p>
 * @method void setIssueDate(string $IssueDate) 设置<p>授权颁发时间。</p>
 * @method string getActivationDate() 获取<p>授权激活时间，如从未激活则返回 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActivationDate(string $ActivationDate) 设置<p>授权激活时间，如从未激活则返回 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpirationDate() 获取<p>授权过期时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpirationDate(string $ExpirationDate) 设置<p>授权过期时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLifeSpanUnit() 获取<p>授权时长单位，枚举值有Y年/M月/D日三种</p>
 * @method void setLifeSpanUnit(string $LifeSpanUnit) 设置<p>授权时长单位，枚举值有Y年/M月/D日三种</p>
 * @method string getLicenseType() 获取<p>授权的类型：Standard正式版/Development开发版/Trial体验版</p>
 * @method void setLicenseType(string $LicenseType) 设置<p>授权的类型：Standard正式版/Development开发版/Trial体验版</p>
 * @method string getLicenseLevel() 获取<p>授权的层级：Master 主授权；Child 子授权/增强型授权</p>
 * @method void setLicenseLevel(string $LicenseLevel) 设置<p>授权的层级：Master 主授权；Child 子授权/增强型授权</p>
 * @method LicenseData getLicenseData() 获取<p>License 内容信息</p>
 * @method void setLicenseData(LicenseData $LicenseData) 设置<p>License 内容信息</p>
 * @method string getIssueURL() 获取<p>License 颁发地址</p>
 * @method void setIssueURL(string $IssueURL) 设置<p>License 颁发地址</p>
 * @method string getProviderUin() 获取<p>商品供应商 UIN</p>
 * @method void setProviderUin(string $ProviderUin) 设置<p>商品供应商 UIN</p>
 * @method string getCreateSource() 获取<p>License 创建来源 ID</p>
 * @method void setCreateSource(string $CreateSource) 设置<p>License 创建来源 ID</p>
 */
class License extends AbstractModel
{
    /**
     * @var string <p>License ID</p>
     */
    public $LicenseId;

    /**
     * @var string <p>软件授权模式。<table><thead><tr><th>枚举值</th><th>说明</th></tr></thead><tbody><tr><td>Permanent</td><td>永久授权。该授权不受有效期限制。</td></tr><tr><td>Subscription</td><td>订阅授权。授权如果过了有效期，则会进入过期状态。</td></tr><tr><td>Accept</td><td>验收期授权。用于需要验收的软件处于验收期间的授权，授权如果过了验收有效期，则会进入过期状态。</td></tr></tbody></table></p>
     */
    public $LicenseMode;

    /**
     * @var string <p>软件的授权状态。<table><thead><tr><th>枚举值</th><th>说明</th></tr></thead><tbody><tr><td>Issued</td><td>已颁发，等待激活。一般来说，如果软件已经在运行，不会出现该状态。</td></tr><tr><td>Active</td><td>授权在有效期内，这是软件运行期间最常见的状态。</td></tr><tr><td>Expired</td><td>授权已过期。订阅类的软件授权有有效期，如果服务器时间已晚于有效期，则会进入过期状态。</td></tr><tr><td>Isolated</td><td>授权已隔离。有截止日期的授权，当用户授权到期时，先进入此状态，用户可以去续费，超过7天不续费则授权进入Destroyed状态。</td></tr><tr><td>Destroyed</td><td>授权已失效/销毁。用户如果退货软件，则授权会自动失效。</td></tr></tbody></table></p>
     */
    public $LicenseStatus;

    /**
     * @var integer <p>软件供应方 ID。</p>
     */
    public $ProviderId;

    /**
     * @var string <p>软件包 ID。</p>
     */
    public $SoftwarePackageId;

    /**
     * @var string <p>软件包版本。</p>
     */
    public $SoftwarePackageVersion;

    /**
     * @var string <p>被授权的用户 UIN。</p>
     */
    public $AuthorizedUserUin;

    /**
     * @var string <p>被授权的应用实例 ID。</p>
     */
    public $AuthorizedCloudappId;

    /**
     * @var string <p>被授权的角色 ID。</p>
     */
    public $AuthorizedCloudappRoleId;

    /**
     * @var array <p>被授权的软件规格，具体字段请参考结构SaleParam</p>
     */
    public $AuthorizedSpecification;

    /**
     * @var integer <p>被授权的软件的计费模式。<table><thead><tr><th>枚举值</th><th>说明</th></tr></thead><tbody><tr><td>1</td><td>线上计费，软件的授权从腾讯云线上购买，支持续费、退款等操作。</td></tr><tr><td>2</td><td>线下计费，软件的授权线下签订合同购买，定向客户交付，无法从线上续费和退款。</td></tr><tr><td>4</td><td>免费</td></tr></tbody></table></p>
     */
    public $BillingMode;

    /**
     * @var integer <p>授权时长（单位由LifeSpanUnit确定，枚举值有Y年/M月/D日三种）</p>
     */
    public $LifeSpan;

    /**
     * @var string <p>授权颁发时间。</p>
     */
    public $IssueDate;

    /**
     * @var string <p>授权激活时间，如从未激活则返回 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActivationDate;

    /**
     * @var string <p>授权过期时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpirationDate;

    /**
     * @var string <p>授权时长单位，枚举值有Y年/M月/D日三种</p>
     */
    public $LifeSpanUnit;

    /**
     * @var string <p>授权的类型：Standard正式版/Development开发版/Trial体验版</p>
     */
    public $LicenseType;

    /**
     * @var string <p>授权的层级：Master 主授权；Child 子授权/增强型授权</p>
     */
    public $LicenseLevel;

    /**
     * @var LicenseData <p>License 内容信息</p>
     */
    public $LicenseData;

    /**
     * @var string <p>License 颁发地址</p>
     */
    public $IssueURL;

    /**
     * @var string <p>商品供应商 UIN</p>
     */
    public $ProviderUin;

    /**
     * @var string <p>License 创建来源 ID</p>
     */
    public $CreateSource;

    /**
     * @param string $LicenseId <p>License ID</p>
     * @param string $LicenseMode <p>软件授权模式。<table><thead><tr><th>枚举值</th><th>说明</th></tr></thead><tbody><tr><td>Permanent</td><td>永久授权。该授权不受有效期限制。</td></tr><tr><td>Subscription</td><td>订阅授权。授权如果过了有效期，则会进入过期状态。</td></tr><tr><td>Accept</td><td>验收期授权。用于需要验收的软件处于验收期间的授权，授权如果过了验收有效期，则会进入过期状态。</td></tr></tbody></table></p>
     * @param string $LicenseStatus <p>软件的授权状态。<table><thead><tr><th>枚举值</th><th>说明</th></tr></thead><tbody><tr><td>Issued</td><td>已颁发，等待激活。一般来说，如果软件已经在运行，不会出现该状态。</td></tr><tr><td>Active</td><td>授权在有效期内，这是软件运行期间最常见的状态。</td></tr><tr><td>Expired</td><td>授权已过期。订阅类的软件授权有有效期，如果服务器时间已晚于有效期，则会进入过期状态。</td></tr><tr><td>Isolated</td><td>授权已隔离。有截止日期的授权，当用户授权到期时，先进入此状态，用户可以去续费，超过7天不续费则授权进入Destroyed状态。</td></tr><tr><td>Destroyed</td><td>授权已失效/销毁。用户如果退货软件，则授权会自动失效。</td></tr></tbody></table></p>
     * @param integer $ProviderId <p>软件供应方 ID。</p>
     * @param string $SoftwarePackageId <p>软件包 ID。</p>
     * @param string $SoftwarePackageVersion <p>软件包版本。</p>
     * @param string $AuthorizedUserUin <p>被授权的用户 UIN。</p>
     * @param string $AuthorizedCloudappId <p>被授权的应用实例 ID。</p>
     * @param string $AuthorizedCloudappRoleId <p>被授权的角色 ID。</p>
     * @param array $AuthorizedSpecification <p>被授权的软件规格，具体字段请参考结构SaleParam</p>
     * @param integer $BillingMode <p>被授权的软件的计费模式。<table><thead><tr><th>枚举值</th><th>说明</th></tr></thead><tbody><tr><td>1</td><td>线上计费，软件的授权从腾讯云线上购买，支持续费、退款等操作。</td></tr><tr><td>2</td><td>线下计费，软件的授权线下签订合同购买，定向客户交付，无法从线上续费和退款。</td></tr><tr><td>4</td><td>免费</td></tr></tbody></table></p>
     * @param integer $LifeSpan <p>授权时长（单位由LifeSpanUnit确定，枚举值有Y年/M月/D日三种）</p>
     * @param string $IssueDate <p>授权颁发时间。</p>
     * @param string $ActivationDate <p>授权激活时间，如从未激活则返回 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpirationDate <p>授权过期时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LifeSpanUnit <p>授权时长单位，枚举值有Y年/M月/D日三种</p>
     * @param string $LicenseType <p>授权的类型：Standard正式版/Development开发版/Trial体验版</p>
     * @param string $LicenseLevel <p>授权的层级：Master 主授权；Child 子授权/增强型授权</p>
     * @param LicenseData $LicenseData <p>License 内容信息</p>
     * @param string $IssueURL <p>License 颁发地址</p>
     * @param string $ProviderUin <p>商品供应商 UIN</p>
     * @param string $CreateSource <p>License 创建来源 ID</p>
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
        if (array_key_exists("LicenseId",$param) and $param["LicenseId"] !== null) {
            $this->LicenseId = $param["LicenseId"];
        }

        if (array_key_exists("LicenseMode",$param) and $param["LicenseMode"] !== null) {
            $this->LicenseMode = $param["LicenseMode"];
        }

        if (array_key_exists("LicenseStatus",$param) and $param["LicenseStatus"] !== null) {
            $this->LicenseStatus = $param["LicenseStatus"];
        }

        if (array_key_exists("ProviderId",$param) and $param["ProviderId"] !== null) {
            $this->ProviderId = $param["ProviderId"];
        }

        if (array_key_exists("SoftwarePackageId",$param) and $param["SoftwarePackageId"] !== null) {
            $this->SoftwarePackageId = $param["SoftwarePackageId"];
        }

        if (array_key_exists("SoftwarePackageVersion",$param) and $param["SoftwarePackageVersion"] !== null) {
            $this->SoftwarePackageVersion = $param["SoftwarePackageVersion"];
        }

        if (array_key_exists("AuthorizedUserUin",$param) and $param["AuthorizedUserUin"] !== null) {
            $this->AuthorizedUserUin = $param["AuthorizedUserUin"];
        }

        if (array_key_exists("AuthorizedCloudappId",$param) and $param["AuthorizedCloudappId"] !== null) {
            $this->AuthorizedCloudappId = $param["AuthorizedCloudappId"];
        }

        if (array_key_exists("AuthorizedCloudappRoleId",$param) and $param["AuthorizedCloudappRoleId"] !== null) {
            $this->AuthorizedCloudappRoleId = $param["AuthorizedCloudappRoleId"];
        }

        if (array_key_exists("AuthorizedSpecification",$param) and $param["AuthorizedSpecification"] !== null) {
            $this->AuthorizedSpecification = [];
            foreach ($param["AuthorizedSpecification"] as $key => $value){
                $obj = new SaleParam();
                $obj->deserialize($value);
                array_push($this->AuthorizedSpecification, $obj);
            }
        }

        if (array_key_exists("BillingMode",$param) and $param["BillingMode"] !== null) {
            $this->BillingMode = $param["BillingMode"];
        }

        if (array_key_exists("LifeSpan",$param) and $param["LifeSpan"] !== null) {
            $this->LifeSpan = $param["LifeSpan"];
        }

        if (array_key_exists("IssueDate",$param) and $param["IssueDate"] !== null) {
            $this->IssueDate = $param["IssueDate"];
        }

        if (array_key_exists("ActivationDate",$param) and $param["ActivationDate"] !== null) {
            $this->ActivationDate = $param["ActivationDate"];
        }

        if (array_key_exists("ExpirationDate",$param) and $param["ExpirationDate"] !== null) {
            $this->ExpirationDate = $param["ExpirationDate"];
        }

        if (array_key_exists("LifeSpanUnit",$param) and $param["LifeSpanUnit"] !== null) {
            $this->LifeSpanUnit = $param["LifeSpanUnit"];
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("LicenseLevel",$param) and $param["LicenseLevel"] !== null) {
            $this->LicenseLevel = $param["LicenseLevel"];
        }

        if (array_key_exists("LicenseData",$param) and $param["LicenseData"] !== null) {
            $this->LicenseData = new LicenseData();
            $this->LicenseData->deserialize($param["LicenseData"]);
        }

        if (array_key_exists("IssueURL",$param) and $param["IssueURL"] !== null) {
            $this->IssueURL = $param["IssueURL"];
        }

        if (array_key_exists("ProviderUin",$param) and $param["ProviderUin"] !== null) {
            $this->ProviderUin = $param["ProviderUin"];
        }

        if (array_key_exists("CreateSource",$param) and $param["CreateSource"] !== null) {
            $this->CreateSource = $param["CreateSource"];
        }
    }
}
