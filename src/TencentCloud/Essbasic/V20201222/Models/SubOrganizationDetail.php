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
namespace TencentCloud\Essbasic\V20201222\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 此结构体 (SubOrganizationDetail) 用于描述子机构或子企业的详情信息。
 *
 * @method string getId() 获取组织ID
 * @method void setId(string $Id) 设置组织ID
 * @method string getName() 获取机构名称全称
 * @method void setName(string $Name) 设置机构名称全称
 * @method string getEmail() 获取机构电子邮箱
 * @method void setEmail(string $Email) 设置机构电子邮箱
 * @method string getIdCardType() 获取机构证件号码类型
 * @method void setIdCardType(string $IdCardType) 设置机构证件号码类型
 * @method string getIdCardNumber() 获取机构证件号码
 * @method void setIdCardNumber(string $IdCardNumber) 设置机构证件号码
 * @method string getOrganizationType() 获取机构类型
 * @method void setOrganizationType(string $OrganizationType) 设置机构类型
 * @method string getIdCardFileType() 获取机构证件文件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdCardFileType(string $IdCardFileType) 设置机构证件文件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBizLicenseFile() 获取机构证件照片文件，base64编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBizLicenseFile(string $BizLicenseFile) 设置机构证件照片文件，base64编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBizLicenseFileName() 获取机构证件照片文件名
 * @method void setBizLicenseFileName(string $BizLicenseFileName) 设置机构证件照片文件名
 * @method string getLegalName() 获取机构法人/经营者姓名
 * @method void setLegalName(string $LegalName) 设置机构法人/经营者姓名
 * @method string getLegalIdCardType() 获取机构法人/经营者证件类型
 * @method void setLegalIdCardType(string $LegalIdCardType) 设置机构法人/经营者证件类型
 * @method string getLegalIdCardNumber() 获取机构法人/经营者证件号码
 * @method void setLegalIdCardNumber(string $LegalIdCardNumber) 设置机构法人/经营者证件号码
 * @method string getLegalMobile() 获取机构法人/经营者/联系人手机号码
 * @method void setLegalMobile(string $LegalMobile) 设置机构法人/经营者/联系人手机号码
 * @method string getContactName() 获取组织联系人姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContactName(string $ContactName) 设置组织联系人姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVerifyStatus() 获取机构实名状态
 * @method void setVerifyStatus(string $VerifyStatus) 设置机构实名状态
 * @method integer getVerifiedOn() 获取机构通过实名时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVerifiedOn(integer $VerifiedOn) 设置机构通过实名时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreatedOn() 获取机构创建时间
 * @method void setCreatedOn(integer $CreatedOn) 设置机构创建时间
 * @method integer getUpdatedOn() 获取机构更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedOn(integer $UpdatedOn) 设置机构更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVerifyClientIp() 获取实名认证的客户端IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVerifyClientIp(string $VerifyClientIp) 设置实名认证的客户端IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVerifyServerIp() 获取实名认证的服务器IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVerifyServerIp(string $VerifyServerIp) 设置实名认证的服务器IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method Address getContactAddress() 获取企业联系地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContactAddress(Address $ContactAddress) 设置企业联系地址
注意：此字段可能返回 null，表示取不到有效值。
 */
class SubOrganizationDetail extends AbstractModel
{
    /**
     * @var string 组织ID
     */
    public $Id;

    /**
     * @var string 机构名称全称
     */
    public $Name;

    /**
     * @var string 机构电子邮箱
     */
    public $Email;

    /**
     * @var string 机构证件号码类型
     */
    public $IdCardType;

    /**
     * @var string 机构证件号码
     */
    public $IdCardNumber;

    /**
     * @var string 机构类型
     */
    public $OrganizationType;

    /**
     * @var string 机构证件文件类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdCardFileType;

    /**
     * @var string 机构证件照片文件，base64编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BizLicenseFile;

    /**
     * @var string 机构证件照片文件名
     */
    public $BizLicenseFileName;

    /**
     * @var string 机构法人/经营者姓名
     */
    public $LegalName;

    /**
     * @var string 机构法人/经营者证件类型
     */
    public $LegalIdCardType;

    /**
     * @var string 机构法人/经营者证件号码
     */
    public $LegalIdCardNumber;

    /**
     * @var string 机构法人/经营者/联系人手机号码
     */
    public $LegalMobile;

    /**
     * @var string 组织联系人姓名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContactName;

    /**
     * @var string 机构实名状态
     */
    public $VerifyStatus;

    /**
     * @var integer 机构通过实名时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VerifiedOn;

    /**
     * @var integer 机构创建时间
     */
    public $CreatedOn;

    /**
     * @var integer 机构更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedOn;

    /**
     * @var string 实名认证的客户端IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VerifyClientIp;

    /**
     * @var string 实名认证的服务器IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VerifyServerIp;

    /**
     * @var Address 企业联系地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContactAddress;

    /**
     * @param string $Id 组织ID
     * @param string $Name 机构名称全称
     * @param string $Email 机构电子邮箱
     * @param string $IdCardType 机构证件号码类型
     * @param string $IdCardNumber 机构证件号码
     * @param string $OrganizationType 机构类型
     * @param string $IdCardFileType 机构证件文件类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BizLicenseFile 机构证件照片文件，base64编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BizLicenseFileName 机构证件照片文件名
     * @param string $LegalName 机构法人/经营者姓名
     * @param string $LegalIdCardType 机构法人/经营者证件类型
     * @param string $LegalIdCardNumber 机构法人/经营者证件号码
     * @param string $LegalMobile 机构法人/经营者/联系人手机号码
     * @param string $ContactName 组织联系人姓名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VerifyStatus 机构实名状态
     * @param integer $VerifiedOn 机构通过实名时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreatedOn 机构创建时间
     * @param integer $UpdatedOn 机构更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VerifyClientIp 实名认证的客户端IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VerifyServerIp 实名认证的服务器IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param Address $ContactAddress 企业联系地址
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("IdCardType",$param) and $param["IdCardType"] !== null) {
            $this->IdCardType = $param["IdCardType"];
        }

        if (array_key_exists("IdCardNumber",$param) and $param["IdCardNumber"] !== null) {
            $this->IdCardNumber = $param["IdCardNumber"];
        }

        if (array_key_exists("OrganizationType",$param) and $param["OrganizationType"] !== null) {
            $this->OrganizationType = $param["OrganizationType"];
        }

        if (array_key_exists("IdCardFileType",$param) and $param["IdCardFileType"] !== null) {
            $this->IdCardFileType = $param["IdCardFileType"];
        }

        if (array_key_exists("BizLicenseFile",$param) and $param["BizLicenseFile"] !== null) {
            $this->BizLicenseFile = $param["BizLicenseFile"];
        }

        if (array_key_exists("BizLicenseFileName",$param) and $param["BizLicenseFileName"] !== null) {
            $this->BizLicenseFileName = $param["BizLicenseFileName"];
        }

        if (array_key_exists("LegalName",$param) and $param["LegalName"] !== null) {
            $this->LegalName = $param["LegalName"];
        }

        if (array_key_exists("LegalIdCardType",$param) and $param["LegalIdCardType"] !== null) {
            $this->LegalIdCardType = $param["LegalIdCardType"];
        }

        if (array_key_exists("LegalIdCardNumber",$param) and $param["LegalIdCardNumber"] !== null) {
            $this->LegalIdCardNumber = $param["LegalIdCardNumber"];
        }

        if (array_key_exists("LegalMobile",$param) and $param["LegalMobile"] !== null) {
            $this->LegalMobile = $param["LegalMobile"];
        }

        if (array_key_exists("ContactName",$param) and $param["ContactName"] !== null) {
            $this->ContactName = $param["ContactName"];
        }

        if (array_key_exists("VerifyStatus",$param) and $param["VerifyStatus"] !== null) {
            $this->VerifyStatus = $param["VerifyStatus"];
        }

        if (array_key_exists("VerifiedOn",$param) and $param["VerifiedOn"] !== null) {
            $this->VerifiedOn = $param["VerifiedOn"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("UpdatedOn",$param) and $param["UpdatedOn"] !== null) {
            $this->UpdatedOn = $param["UpdatedOn"];
        }

        if (array_key_exists("VerifyClientIp",$param) and $param["VerifyClientIp"] !== null) {
            $this->VerifyClientIp = $param["VerifyClientIp"];
        }

        if (array_key_exists("VerifyServerIp",$param) and $param["VerifyServerIp"] !== null) {
            $this->VerifyServerIp = $param["VerifyServerIp"];
        }

        if (array_key_exists("ContactAddress",$param) and $param["ContactAddress"] !== null) {
            $this->ContactAddress = new Address();
            $this->ContactAddress->deserialize($param["ContactAddress"]);
        }
    }
}
