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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SubmitCertificateInformation请求参数结构体
 *
 * @method string getCertificateId() 获取待提交资料的付费证书 ID。
 * @method void setCertificateId(string $CertificateId) 设置待提交资料的付费证书 ID。
 * @method string getCsrType() 获取此字段必传。 CSR 生成方式， 取值为：
online：腾讯云提交的填写的参数信息生成CSR和私钥， 并由腾讯云加密存储
parse：自行生成CSR和私钥， 并通过上传CSR申请证书
 * @method void setCsrType(string $CsrType) 设置此字段必传。 CSR 生成方式， 取值为：
online：腾讯云提交的填写的参数信息生成CSR和私钥， 并由腾讯云加密存储
parse：自行生成CSR和私钥， 并通过上传CSR申请证书
 * @method string getCsrContent() 获取上传的 CSR 内容。
若CstType为parse， 则此字段必传。
 * @method void setCsrContent(string $CsrContent) 设置上传的 CSR 内容。
若CstType为parse， 则此字段必传。
 * @method string getCertificateDomain() 获取证书绑定的通用名称， 若是上传的CSR，则该域名需与CSR解析的通用名称一致
 * @method void setCertificateDomain(string $CertificateDomain) 设置证书绑定的通用名称， 若是上传的CSR，则该域名需与CSR解析的通用名称一致
 * @method array getDomainList() 获取证书绑定的其他域名， 单域名、泛域名证书无需提供。 多域名、多泛域名必填
 * @method void setDomainList(array $DomainList) 设置证书绑定的其他域名， 单域名、泛域名证书无需提供。 多域名、多泛域名必填
 * @method string getKeyPassword() 获取私钥密码， 目前仅使用在生成jks、pfx格式证书时密码； 其他格式私钥证书未加密	
 * @method void setKeyPassword(string $KeyPassword) 设置私钥密码， 目前仅使用在生成jks、pfx格式证书时密码； 其他格式私钥证书未加密	
 * @method string getOrganizationName() 获取字段必传， 公司名称。
 * @method void setOrganizationName(string $OrganizationName) 设置字段必传， 公司名称。
 * @method string getOrganizationDivision() 获取字段必传， 部门名称。
 * @method void setOrganizationDivision(string $OrganizationDivision) 设置字段必传， 部门名称。
 * @method string getOrganizationAddress() 获取字段必传， 公司详细地址。
 * @method void setOrganizationAddress(string $OrganizationAddress) 设置字段必传， 公司详细地址。
 * @method string getOrganizationCountry() 获取字段必传， 国家名称，传CN即可
 * @method void setOrganizationCountry(string $OrganizationCountry) 设置字段必传， 国家名称，传CN即可
 * @method string getOrganizationCity() 获取字段必传， 公司所在城市。
 * @method void setOrganizationCity(string $OrganizationCity) 设置字段必传， 公司所在城市。
 * @method string getOrganizationRegion() 获取字段必传， 公司所在省份。
 * @method void setOrganizationRegion(string $OrganizationRegion) 设置字段必传， 公司所在省份。
 * @method string getPostalCode() 获取公司邮编。
 * @method void setPostalCode(string $PostalCode) 设置公司邮编。
 * @method string getPhoneAreaCode() 获取字段必传， 公司座机区号。
 * @method void setPhoneAreaCode(string $PhoneAreaCode) 设置字段必传， 公司座机区号。
 * @method string getPhoneNumber() 获取字段必传， 公司座机号码。
 * @method void setPhoneNumber(string $PhoneNumber) 设置字段必传， 公司座机号码。
 * @method string getVerifyType() 获取证书验证方式。验证类型：DNS_AUTO = 自动DNS验证（仅支持在腾讯云解析且解析状态正常的域名使用该验证类型），DNS = 手动DNS验证，FILE = 文件验证。
 * @method void setVerifyType(string $VerifyType) 设置证书验证方式。验证类型：DNS_AUTO = 自动DNS验证（仅支持在腾讯云解析且解析状态正常的域名使用该验证类型），DNS = 手动DNS验证，FILE = 文件验证。
 * @method string getAdminFirstName() 获取字段必传，管理人名。
 * @method void setAdminFirstName(string $AdminFirstName) 设置字段必传，管理人名。
 * @method string getAdminLastName() 获取字段必传，管理人姓。
 * @method void setAdminLastName(string $AdminLastName) 设置字段必传，管理人姓。
 * @method string getAdminPhoneNum() 获取字段必传，管理人手机号码。
 * @method void setAdminPhoneNum(string $AdminPhoneNum) 设置字段必传，管理人手机号码。
 * @method string getAdminEmail() 获取字段必传，管理人邮箱地址。
 * @method void setAdminEmail(string $AdminEmail) 设置字段必传，管理人邮箱地址。
 * @method string getAdminPosition() 获取字段必传，管理人职位。
 * @method void setAdminPosition(string $AdminPosition) 设置字段必传，管理人职位。
 * @method string getContactFirstName() 获取字段必传，联系人名。
 * @method void setContactFirstName(string $ContactFirstName) 设置字段必传，联系人名。
 * @method string getContactLastName() 获取字段必传，联系人姓。
 * @method void setContactLastName(string $ContactLastName) 设置字段必传，联系人姓。
 * @method string getContactEmail() 获取字段必传，联系人邮箱地址。
 * @method void setContactEmail(string $ContactEmail) 设置字段必传，联系人邮箱地址。
 * @method string getContactNumber() 获取字段必传，联系人手机号码。
 * @method void setContactNumber(string $ContactNumber) 设置字段必传，联系人手机号码。
 * @method string getContactPosition() 获取字段必传，联系人职位。
 * @method void setContactPosition(string $ContactPosition) 设置字段必传，联系人职位。
 * @method boolean getIsDV() 获取是否DV证书。默认false
 * @method void setIsDV(boolean $IsDV) 设置是否DV证书。默认false
 */
class SubmitCertificateInformationRequest extends AbstractModel
{
    /**
     * @var string 待提交资料的付费证书 ID。
     */
    public $CertificateId;

    /**
     * @var string 此字段必传。 CSR 生成方式， 取值为：
online：腾讯云提交的填写的参数信息生成CSR和私钥， 并由腾讯云加密存储
parse：自行生成CSR和私钥， 并通过上传CSR申请证书
     */
    public $CsrType;

    /**
     * @var string 上传的 CSR 内容。
若CstType为parse， 则此字段必传。
     */
    public $CsrContent;

    /**
     * @var string 证书绑定的通用名称， 若是上传的CSR，则该域名需与CSR解析的通用名称一致
     */
    public $CertificateDomain;

    /**
     * @var array 证书绑定的其他域名， 单域名、泛域名证书无需提供。 多域名、多泛域名必填
     */
    public $DomainList;

    /**
     * @var string 私钥密码， 目前仅使用在生成jks、pfx格式证书时密码； 其他格式私钥证书未加密	
     */
    public $KeyPassword;

    /**
     * @var string 字段必传， 公司名称。
     */
    public $OrganizationName;

    /**
     * @var string 字段必传， 部门名称。
     */
    public $OrganizationDivision;

    /**
     * @var string 字段必传， 公司详细地址。
     */
    public $OrganizationAddress;

    /**
     * @var string 字段必传， 国家名称，传CN即可
     */
    public $OrganizationCountry;

    /**
     * @var string 字段必传， 公司所在城市。
     */
    public $OrganizationCity;

    /**
     * @var string 字段必传， 公司所在省份。
     */
    public $OrganizationRegion;

    /**
     * @var string 公司邮编。
     */
    public $PostalCode;

    /**
     * @var string 字段必传， 公司座机区号。
     */
    public $PhoneAreaCode;

    /**
     * @var string 字段必传， 公司座机号码。
     */
    public $PhoneNumber;

    /**
     * @var string 证书验证方式。验证类型：DNS_AUTO = 自动DNS验证（仅支持在腾讯云解析且解析状态正常的域名使用该验证类型），DNS = 手动DNS验证，FILE = 文件验证。
     */
    public $VerifyType;

    /**
     * @var string 字段必传，管理人名。
     */
    public $AdminFirstName;

    /**
     * @var string 字段必传，管理人姓。
     */
    public $AdminLastName;

    /**
     * @var string 字段必传，管理人手机号码。
     */
    public $AdminPhoneNum;

    /**
     * @var string 字段必传，管理人邮箱地址。
     */
    public $AdminEmail;

    /**
     * @var string 字段必传，管理人职位。
     */
    public $AdminPosition;

    /**
     * @var string 字段必传，联系人名。
     */
    public $ContactFirstName;

    /**
     * @var string 字段必传，联系人姓。
     */
    public $ContactLastName;

    /**
     * @var string 字段必传，联系人邮箱地址。
     */
    public $ContactEmail;

    /**
     * @var string 字段必传，联系人手机号码。
     */
    public $ContactNumber;

    /**
     * @var string 字段必传，联系人职位。
     */
    public $ContactPosition;

    /**
     * @var boolean 是否DV证书。默认false
     */
    public $IsDV;

    /**
     * @param string $CertificateId 待提交资料的付费证书 ID。
     * @param string $CsrType 此字段必传。 CSR 生成方式， 取值为：
online：腾讯云提交的填写的参数信息生成CSR和私钥， 并由腾讯云加密存储
parse：自行生成CSR和私钥， 并通过上传CSR申请证书
     * @param string $CsrContent 上传的 CSR 内容。
若CstType为parse， 则此字段必传。
     * @param string $CertificateDomain 证书绑定的通用名称， 若是上传的CSR，则该域名需与CSR解析的通用名称一致
     * @param array $DomainList 证书绑定的其他域名， 单域名、泛域名证书无需提供。 多域名、多泛域名必填
     * @param string $KeyPassword 私钥密码， 目前仅使用在生成jks、pfx格式证书时密码； 其他格式私钥证书未加密	
     * @param string $OrganizationName 字段必传， 公司名称。
     * @param string $OrganizationDivision 字段必传， 部门名称。
     * @param string $OrganizationAddress 字段必传， 公司详细地址。
     * @param string $OrganizationCountry 字段必传， 国家名称，传CN即可
     * @param string $OrganizationCity 字段必传， 公司所在城市。
     * @param string $OrganizationRegion 字段必传， 公司所在省份。
     * @param string $PostalCode 公司邮编。
     * @param string $PhoneAreaCode 字段必传， 公司座机区号。
     * @param string $PhoneNumber 字段必传， 公司座机号码。
     * @param string $VerifyType 证书验证方式。验证类型：DNS_AUTO = 自动DNS验证（仅支持在腾讯云解析且解析状态正常的域名使用该验证类型），DNS = 手动DNS验证，FILE = 文件验证。
     * @param string $AdminFirstName 字段必传，管理人名。
     * @param string $AdminLastName 字段必传，管理人姓。
     * @param string $AdminPhoneNum 字段必传，管理人手机号码。
     * @param string $AdminEmail 字段必传，管理人邮箱地址。
     * @param string $AdminPosition 字段必传，管理人职位。
     * @param string $ContactFirstName 字段必传，联系人名。
     * @param string $ContactLastName 字段必传，联系人姓。
     * @param string $ContactEmail 字段必传，联系人邮箱地址。
     * @param string $ContactNumber 字段必传，联系人手机号码。
     * @param string $ContactPosition 字段必传，联系人职位。
     * @param boolean $IsDV 是否DV证书。默认false
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
        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("CsrType",$param) and $param["CsrType"] !== null) {
            $this->CsrType = $param["CsrType"];
        }

        if (array_key_exists("CsrContent",$param) and $param["CsrContent"] !== null) {
            $this->CsrContent = $param["CsrContent"];
        }

        if (array_key_exists("CertificateDomain",$param) and $param["CertificateDomain"] !== null) {
            $this->CertificateDomain = $param["CertificateDomain"];
        }

        if (array_key_exists("DomainList",$param) and $param["DomainList"] !== null) {
            $this->DomainList = $param["DomainList"];
        }

        if (array_key_exists("KeyPassword",$param) and $param["KeyPassword"] !== null) {
            $this->KeyPassword = $param["KeyPassword"];
        }

        if (array_key_exists("OrganizationName",$param) and $param["OrganizationName"] !== null) {
            $this->OrganizationName = $param["OrganizationName"];
        }

        if (array_key_exists("OrganizationDivision",$param) and $param["OrganizationDivision"] !== null) {
            $this->OrganizationDivision = $param["OrganizationDivision"];
        }

        if (array_key_exists("OrganizationAddress",$param) and $param["OrganizationAddress"] !== null) {
            $this->OrganizationAddress = $param["OrganizationAddress"];
        }

        if (array_key_exists("OrganizationCountry",$param) and $param["OrganizationCountry"] !== null) {
            $this->OrganizationCountry = $param["OrganizationCountry"];
        }

        if (array_key_exists("OrganizationCity",$param) and $param["OrganizationCity"] !== null) {
            $this->OrganizationCity = $param["OrganizationCity"];
        }

        if (array_key_exists("OrganizationRegion",$param) and $param["OrganizationRegion"] !== null) {
            $this->OrganizationRegion = $param["OrganizationRegion"];
        }

        if (array_key_exists("PostalCode",$param) and $param["PostalCode"] !== null) {
            $this->PostalCode = $param["PostalCode"];
        }

        if (array_key_exists("PhoneAreaCode",$param) and $param["PhoneAreaCode"] !== null) {
            $this->PhoneAreaCode = $param["PhoneAreaCode"];
        }

        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }

        if (array_key_exists("VerifyType",$param) and $param["VerifyType"] !== null) {
            $this->VerifyType = $param["VerifyType"];
        }

        if (array_key_exists("AdminFirstName",$param) and $param["AdminFirstName"] !== null) {
            $this->AdminFirstName = $param["AdminFirstName"];
        }

        if (array_key_exists("AdminLastName",$param) and $param["AdminLastName"] !== null) {
            $this->AdminLastName = $param["AdminLastName"];
        }

        if (array_key_exists("AdminPhoneNum",$param) and $param["AdminPhoneNum"] !== null) {
            $this->AdminPhoneNum = $param["AdminPhoneNum"];
        }

        if (array_key_exists("AdminEmail",$param) and $param["AdminEmail"] !== null) {
            $this->AdminEmail = $param["AdminEmail"];
        }

        if (array_key_exists("AdminPosition",$param) and $param["AdminPosition"] !== null) {
            $this->AdminPosition = $param["AdminPosition"];
        }

        if (array_key_exists("ContactFirstName",$param) and $param["ContactFirstName"] !== null) {
            $this->ContactFirstName = $param["ContactFirstName"];
        }

        if (array_key_exists("ContactLastName",$param) and $param["ContactLastName"] !== null) {
            $this->ContactLastName = $param["ContactLastName"];
        }

        if (array_key_exists("ContactEmail",$param) and $param["ContactEmail"] !== null) {
            $this->ContactEmail = $param["ContactEmail"];
        }

        if (array_key_exists("ContactNumber",$param) and $param["ContactNumber"] !== null) {
            $this->ContactNumber = $param["ContactNumber"];
        }

        if (array_key_exists("ContactPosition",$param) and $param["ContactPosition"] !== null) {
            $this->ContactPosition = $param["ContactPosition"];
        }

        if (array_key_exists("IsDV",$param) and $param["IsDV"] !== null) {
            $this->IsDV = $param["IsDV"];
        }
    }
}
