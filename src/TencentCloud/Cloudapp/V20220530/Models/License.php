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
namespace TencentCloud\Cloudapp\V20220530\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 表示应用实例的软件授权，包含颁发信息、激活信息等内容。
 *
 * @method string getLicenseId() 获取License ID
 * @method void setLicenseId(string $LicenseId) 设置License ID
 * @method string getLicenseMode() 获取软件授权模式。<table><thead><tr><th>枚举值</th><th>说明</th></tr></thead><tbody><tr><td>Permanent</td><td>永久授权。该授权不受有效期限制。</td></tr><tr><td>Subscription</td><td>订阅授权。授权如果过了有效期，则会进入过期状态。</td></tr><tr><td>Accept</td><td>验收期授权。用于需要验收的软件处于验收期间的授权，授权如果过了验收有效期，则会进入过期状态。</td></tr></tbody></table>
 * @method void setLicenseMode(string $LicenseMode) 设置软件授权模式。<table><thead><tr><th>枚举值</th><th>说明</th></tr></thead><tbody><tr><td>Permanent</td><td>永久授权。该授权不受有效期限制。</td></tr><tr><td>Subscription</td><td>订阅授权。授权如果过了有效期，则会进入过期状态。</td></tr><tr><td>Accept</td><td>验收期授权。用于需要验收的软件处于验收期间的授权，授权如果过了验收有效期，则会进入过期状态。</td></tr></tbody></table>
 * @method string getLicenseStatus() 获取软件的授权状态。<table><thead><tr><th>枚举值</th><th>说明</th></tr></thead><tbody><tr><td>Issued</td><td>已颁发，等待激活。一般来说，如果软件已经在运行，不会出现该状态。</td></tr><tr><td>Active</td><td>授权在有效期内，这是软件运行期间最常见的状态。</td></tr><tr><td>Expired</td><td>授权已过期。订阅类的软件授权有有效期，如果服务器时间已晚于有效期，则会进入过期状态。</td></tr><tr><td>Isolated</td><td>授权已隔离。有截止日期的授权，当用户授权到期时，先进入此状态，用户可以去续费，超过7天不续费则授权进入Destroyed状态。</td></tr><tr><td>Destroyed</td><td>授权已失效/销毁。用户如果退货软件，则授权会自动失效。</td></tr></tbody></table>
 * @method void setLicenseStatus(string $LicenseStatus) 设置软件的授权状态。<table><thead><tr><th>枚举值</th><th>说明</th></tr></thead><tbody><tr><td>Issued</td><td>已颁发，等待激活。一般来说，如果软件已经在运行，不会出现该状态。</td></tr><tr><td>Active</td><td>授权在有效期内，这是软件运行期间最常见的状态。</td></tr><tr><td>Expired</td><td>授权已过期。订阅类的软件授权有有效期，如果服务器时间已晚于有效期，则会进入过期状态。</td></tr><tr><td>Isolated</td><td>授权已隔离。有截止日期的授权，当用户授权到期时，先进入此状态，用户可以去续费，超过7天不续费则授权进入Destroyed状态。</td></tr><tr><td>Destroyed</td><td>授权已失效/销毁。用户如果退货软件，则授权会自动失效。</td></tr></tbody></table>
 * @method integer getProviderId() 获取软件供应方 ID。
 * @method void setProviderId(integer $ProviderId) 设置软件供应方 ID。
 * @method string getSoftwarePackageId() 获取软件包 ID。
 * @method void setSoftwarePackageId(string $SoftwarePackageId) 设置软件包 ID。
 * @method string getSoftwarePackageVersion() 获取软件包版本。
 * @method void setSoftwarePackageVersion(string $SoftwarePackageVersion) 设置软件包版本。
 * @method string getAuthorizedUserUin() 获取被授权的用户 UIN。
 * @method void setAuthorizedUserUin(string $AuthorizedUserUin) 设置被授权的用户 UIN。
 * @method string getAuthorizedCloudappId() 获取被授权的应用实例 ID。
 * @method void setAuthorizedCloudappId(string $AuthorizedCloudappId) 设置被授权的应用实例 ID。
 * @method string getAuthorizedCloudappRoleId() 获取被授权的角色 ID。
 * @method void setAuthorizedCloudappRoleId(string $AuthorizedCloudappRoleId) 设置被授权的角色 ID。
 * @method array getAuthorizedSpecification() 获取被授权的软件规格，具体字段请参考结构SaleParam
 * @method void setAuthorizedSpecification(array $AuthorizedSpecification) 设置被授权的软件规格，具体字段请参考结构SaleParam
 * @method integer getBillingMode() 获取被授权的软件的计费模式。<table><thead><tr><th>枚举值</th><th>说明</th></tr></thead><tbody><tr><td>1</td><td>线上计费，软件的授权从腾讯云线上购买，支持续费、退款等操作。</td></tr><tr><td>2</td><td>线下计费，软件的授权线下签订合同购买，定向客户交付，无法从线上续费和退款。</td></tr><tr><td>4</td><td>免费</td></tr></tbody></table>
 * @method void setBillingMode(integer $BillingMode) 设置被授权的软件的计费模式。<table><thead><tr><th>枚举值</th><th>说明</th></tr></thead><tbody><tr><td>1</td><td>线上计费，软件的授权从腾讯云线上购买，支持续费、退款等操作。</td></tr><tr><td>2</td><td>线下计费，软件的授权线下签订合同购买，定向客户交付，无法从线上续费和退款。</td></tr><tr><td>4</td><td>免费</td></tr></tbody></table>
 * @method integer getLifeSpan() 获取授权时长（单位由LifeSpanUnit确定，枚举值有Y年/M月/D日三种）
 * @method void setLifeSpan(integer $LifeSpan) 设置授权时长（单位由LifeSpanUnit确定，枚举值有Y年/M月/D日三种）
 * @method string getIssueDate() 获取授权颁发时间。
 * @method void setIssueDate(string $IssueDate) 设置授权颁发时间。
 * @method string getActivationDate() 获取授权激活时间，如从未激活则返回 null。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActivationDate(string $ActivationDate) 设置授权激活时间，如从未激活则返回 null。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpirationDate() 获取授权过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpirationDate(string $ExpirationDate) 设置授权过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLifeSpanUnit() 获取授权时长单位，枚举值有Y年/M月/D日三种
 * @method void setLifeSpanUnit(string $LifeSpanUnit) 设置授权时长单位，枚举值有Y年/M月/D日三种
 * @method string getLicenseType() 获取授权的类型：Standard正式版/Development开发版/Trial体验版
 * @method void setLicenseType(string $LicenseType) 设置授权的类型：Standard正式版/Development开发版/Trial体验版
 */
class License extends AbstractModel
{
    /**
     * @var string License ID
     */
    public $LicenseId;

    /**
     * @var string 软件授权模式。<table><thead><tr><th>枚举值</th><th>说明</th></tr></thead><tbody><tr><td>Permanent</td><td>永久授权。该授权不受有效期限制。</td></tr><tr><td>Subscription</td><td>订阅授权。授权如果过了有效期，则会进入过期状态。</td></tr><tr><td>Accept</td><td>验收期授权。用于需要验收的软件处于验收期间的授权，授权如果过了验收有效期，则会进入过期状态。</td></tr></tbody></table>
     */
    public $LicenseMode;

    /**
     * @var string 软件的授权状态。<table><thead><tr><th>枚举值</th><th>说明</th></tr></thead><tbody><tr><td>Issued</td><td>已颁发，等待激活。一般来说，如果软件已经在运行，不会出现该状态。</td></tr><tr><td>Active</td><td>授权在有效期内，这是软件运行期间最常见的状态。</td></tr><tr><td>Expired</td><td>授权已过期。订阅类的软件授权有有效期，如果服务器时间已晚于有效期，则会进入过期状态。</td></tr><tr><td>Isolated</td><td>授权已隔离。有截止日期的授权，当用户授权到期时，先进入此状态，用户可以去续费，超过7天不续费则授权进入Destroyed状态。</td></tr><tr><td>Destroyed</td><td>授权已失效/销毁。用户如果退货软件，则授权会自动失效。</td></tr></tbody></table>
     */
    public $LicenseStatus;

    /**
     * @var integer 软件供应方 ID。
     */
    public $ProviderId;

    /**
     * @var string 软件包 ID。
     */
    public $SoftwarePackageId;

    /**
     * @var string 软件包版本。
     */
    public $SoftwarePackageVersion;

    /**
     * @var string 被授权的用户 UIN。
     */
    public $AuthorizedUserUin;

    /**
     * @var string 被授权的应用实例 ID。
     */
    public $AuthorizedCloudappId;

    /**
     * @var string 被授权的角色 ID。
     */
    public $AuthorizedCloudappRoleId;

    /**
     * @var array 被授权的软件规格，具体字段请参考结构SaleParam
     */
    public $AuthorizedSpecification;

    /**
     * @var integer 被授权的软件的计费模式。<table><thead><tr><th>枚举值</th><th>说明</th></tr></thead><tbody><tr><td>1</td><td>线上计费，软件的授权从腾讯云线上购买，支持续费、退款等操作。</td></tr><tr><td>2</td><td>线下计费，软件的授权线下签订合同购买，定向客户交付，无法从线上续费和退款。</td></tr><tr><td>4</td><td>免费</td></tr></tbody></table>
     */
    public $BillingMode;

    /**
     * @var integer 授权时长（单位由LifeSpanUnit确定，枚举值有Y年/M月/D日三种）
     */
    public $LifeSpan;

    /**
     * @var string 授权颁发时间。
     */
    public $IssueDate;

    /**
     * @var string 授权激活时间，如从未激活则返回 null。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActivationDate;

    /**
     * @var string 授权过期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpirationDate;

    /**
     * @var string 授权时长单位，枚举值有Y年/M月/D日三种
     */
    public $LifeSpanUnit;

    /**
     * @var string 授权的类型：Standard正式版/Development开发版/Trial体验版
     */
    public $LicenseType;

    /**
     * @param string $LicenseId License ID
     * @param string $LicenseMode 软件授权模式。<table><thead><tr><th>枚举值</th><th>说明</th></tr></thead><tbody><tr><td>Permanent</td><td>永久授权。该授权不受有效期限制。</td></tr><tr><td>Subscription</td><td>订阅授权。授权如果过了有效期，则会进入过期状态。</td></tr><tr><td>Accept</td><td>验收期授权。用于需要验收的软件处于验收期间的授权，授权如果过了验收有效期，则会进入过期状态。</td></tr></tbody></table>
     * @param string $LicenseStatus 软件的授权状态。<table><thead><tr><th>枚举值</th><th>说明</th></tr></thead><tbody><tr><td>Issued</td><td>已颁发，等待激活。一般来说，如果软件已经在运行，不会出现该状态。</td></tr><tr><td>Active</td><td>授权在有效期内，这是软件运行期间最常见的状态。</td></tr><tr><td>Expired</td><td>授权已过期。订阅类的软件授权有有效期，如果服务器时间已晚于有效期，则会进入过期状态。</td></tr><tr><td>Isolated</td><td>授权已隔离。有截止日期的授权，当用户授权到期时，先进入此状态，用户可以去续费，超过7天不续费则授权进入Destroyed状态。</td></tr><tr><td>Destroyed</td><td>授权已失效/销毁。用户如果退货软件，则授权会自动失效。</td></tr></tbody></table>
     * @param integer $ProviderId 软件供应方 ID。
     * @param string $SoftwarePackageId 软件包 ID。
     * @param string $SoftwarePackageVersion 软件包版本。
     * @param string $AuthorizedUserUin 被授权的用户 UIN。
     * @param string $AuthorizedCloudappId 被授权的应用实例 ID。
     * @param string $AuthorizedCloudappRoleId 被授权的角色 ID。
     * @param array $AuthorizedSpecification 被授权的软件规格，具体字段请参考结构SaleParam
     * @param integer $BillingMode 被授权的软件的计费模式。<table><thead><tr><th>枚举值</th><th>说明</th></tr></thead><tbody><tr><td>1</td><td>线上计费，软件的授权从腾讯云线上购买，支持续费、退款等操作。</td></tr><tr><td>2</td><td>线下计费，软件的授权线下签订合同购买，定向客户交付，无法从线上续费和退款。</td></tr><tr><td>4</td><td>免费</td></tr></tbody></table>
     * @param integer $LifeSpan 授权时长（单位由LifeSpanUnit确定，枚举值有Y年/M月/D日三种）
     * @param string $IssueDate 授权颁发时间。
     * @param string $ActivationDate 授权激活时间，如从未激活则返回 null。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpirationDate 授权过期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LifeSpanUnit 授权时长单位，枚举值有Y年/M月/D日三种
     * @param string $LicenseType 授权的类型：Standard正式版/Development开发版/Trial体验版
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
    }
}
