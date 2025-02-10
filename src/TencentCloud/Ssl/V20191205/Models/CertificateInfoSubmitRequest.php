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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CertificateInfoSubmit请求参数结构体
 *
 * @method string getCertId() 获取证书 ID。
 * @method void setCertId(string $CertId) 设置证书 ID。
 * @method string getGenCsrType() 获取CSR 生成方式：online = 在线生成, upload = 手动上传。
 * @method void setGenCsrType(string $GenCsrType) 设置CSR 生成方式：online = 在线生成, upload = 手动上传。
 * @method string getCertCommonName() 获取绑定证书的主域名。
 * @method void setCertCommonName(string $CertCommonName) 设置绑定证书的主域名。
 * @method integer getCompanyType() 获取组织信息类型：1，个人； 2， 公司； 
 * @method void setCompanyType(integer $CompanyType) 设置组织信息类型：1，个人； 2， 公司； 
 * @method string getOrgIdType() 获取公司证件类型（）
 * @method void setOrgIdType(string $OrgIdType) 设置公司证件类型（）
 * @method string getOrgIdNumber() 获取公司证件号码
 * @method void setOrgIdNumber(string $OrgIdNumber) 设置公司证件号码
 * @method string getAdminIdType() 获取管理人证件类型
 * @method void setAdminIdType(string $AdminIdType) 设置管理人证件类型
 * @method string getAdminIdNumber() 获取管理人证件号码
 * @method void setAdminIdNumber(string $AdminIdNumber) 设置管理人证件号码
 * @method string getTechIdType() 获取联系人证件类型
 * @method void setTechIdType(string $TechIdType) 设置联系人证件类型
 * @method string getTechIdNumber() 获取联系人证件号码
 * @method void setTechIdNumber(string $TechIdNumber) 设置联系人证件号码
 * @method string getCompanyId() 获取公司ID
 * @method void setCompanyId(string $CompanyId) 设置公司ID
 * @method string getCsr() 获取上传的 CSR 内容。如果GenCsrType为upload则该字段必传
 * @method void setCsr(string $Csr) 设置上传的 CSR 内容。如果GenCsrType为upload则该字段必传
 * @method array getDnsNames() 获取域名数组（多域名证书可以上传）。
 * @method void setDnsNames(array $DnsNames) 设置域名数组（多域名证书可以上传）。
 * @method string getKeyPass() 获取私钥密码（非必填）。
 * @method void setKeyPass(string $KeyPass) 设置私钥密码（非必填）。
 * @method string getOrgOrganization() 获取公司名称。
 * @method void setOrgOrganization(string $OrgOrganization) 设置公司名称。
 * @method string getOrgDivision() 获取部门名称。
 * @method void setOrgDivision(string $OrgDivision) 设置部门名称。
 * @method string getOrgAddress() 获取公司详细地址。
 * @method void setOrgAddress(string $OrgAddress) 设置公司详细地址。
 * @method string getOrgCountry() 获取国家名称，如中国：CN 。
 * @method void setOrgCountry(string $OrgCountry) 设置国家名称，如中国：CN 。
 * @method string getOrgCity() 获取公司所在城市。
 * @method void setOrgCity(string $OrgCity) 设置公司所在城市。
 * @method string getOrgRegion() 获取公司所在省份。
 * @method void setOrgRegion(string $OrgRegion) 设置公司所在省份。
 * @method string getOrgPhoneArea() 获取公司座机区号。
 * @method void setOrgPhoneArea(string $OrgPhoneArea) 设置公司座机区号。
 * @method string getOrgPhoneNumber() 获取公司座机号码。
 * @method void setOrgPhoneNumber(string $OrgPhoneNumber) 设置公司座机号码。
 * @method string getVerifyType() 获取证书验证方式。验证类型：DNS_AUTO = 自动DNS验证（仅支持在腾讯云解析且解析状态正常的域名使用该验证类型），DNS = 手动DNS验证，FILE = 文件验证。
 * @method void setVerifyType(string $VerifyType) 设置证书验证方式。验证类型：DNS_AUTO = 自动DNS验证（仅支持在腾讯云解析且解析状态正常的域名使用该验证类型），DNS = 手动DNS验证，FILE = 文件验证。
 * @method string getAdminFirstName() 获取管理人名。
 * @method void setAdminFirstName(string $AdminFirstName) 设置管理人名。
 * @method string getAdminLastName() 获取管理人姓。
 * @method void setAdminLastName(string $AdminLastName) 设置管理人姓。
 * @method string getAdminPhone() 获取管理人手机号码。
 * @method void setAdminPhone(string $AdminPhone) 设置管理人手机号码。
 * @method string getAdminEmail() 获取管理人邮箱地址。
 * @method void setAdminEmail(string $AdminEmail) 设置管理人邮箱地址。
 * @method string getAdminTitle() 获取管理人职位。
 * @method void setAdminTitle(string $AdminTitle) 设置管理人职位。
 * @method string getTechFirstName() 获取联系人名。
 * @method void setTechFirstName(string $TechFirstName) 设置联系人名。
 * @method string getTechLastName() 获取联系人姓。
 * @method void setTechLastName(string $TechLastName) 设置联系人姓。
 * @method string getContactEmail() 获取联系人邮箱地址。
 * @method void setContactEmail(string $ContactEmail) 设置联系人邮箱地址。
 * @method integer getAutoRenewFlag() 获取是否开启自动续费： 0， 不开启；  1， 开启； 默认为0
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置是否开启自动续费： 0， 不开启；  1， 开启； 默认为0
 * @method string getCsrKeyParameter() 获取证书加密参数
 * @method void setCsrKeyParameter(string $CsrKeyParameter) 设置证书加密参数
 * @method string getCsrEncryptAlgo() 获取证书加密方式
 * @method void setCsrEncryptAlgo(string $CsrEncryptAlgo) 设置证书加密方式
 * @method string getManagerId() 获取管理人ID
 * @method void setManagerId(string $ManagerId) 设置管理人ID
 * @method string getTechPhone() 获取联系人电话
 * @method void setTechPhone(string $TechPhone) 设置联系人电话
 * @method string getTechEmail() 获取联系人邮箱
 * @method void setTechEmail(string $TechEmail) 设置联系人邮箱
 * @method string getTechTitle() 获取联系人职位
 * @method void setTechTitle(string $TechTitle) 设置联系人职位
 */
class CertificateInfoSubmitRequest extends AbstractModel
{
    /**
     * @var string 证书 ID。
     */
    public $CertId;

    /**
     * @var string CSR 生成方式：online = 在线生成, upload = 手动上传。
     */
    public $GenCsrType;

    /**
     * @var string 绑定证书的主域名。
     */
    public $CertCommonName;

    /**
     * @var integer 组织信息类型：1，个人； 2， 公司； 
     */
    public $CompanyType;

    /**
     * @var string 公司证件类型（）
     */
    public $OrgIdType;

    /**
     * @var string 公司证件号码
     */
    public $OrgIdNumber;

    /**
     * @var string 管理人证件类型
     */
    public $AdminIdType;

    /**
     * @var string 管理人证件号码
     */
    public $AdminIdNumber;

    /**
     * @var string 联系人证件类型
     */
    public $TechIdType;

    /**
     * @var string 联系人证件号码
     */
    public $TechIdNumber;

    /**
     * @var string 公司ID
     */
    public $CompanyId;

    /**
     * @var string 上传的 CSR 内容。如果GenCsrType为upload则该字段必传
     */
    public $Csr;

    /**
     * @var array 域名数组（多域名证书可以上传）。
     */
    public $DnsNames;

    /**
     * @var string 私钥密码（非必填）。
     */
    public $KeyPass;

    /**
     * @var string 公司名称。
     */
    public $OrgOrganization;

    /**
     * @var string 部门名称。
     */
    public $OrgDivision;

    /**
     * @var string 公司详细地址。
     */
    public $OrgAddress;

    /**
     * @var string 国家名称，如中国：CN 。
     */
    public $OrgCountry;

    /**
     * @var string 公司所在城市。
     */
    public $OrgCity;

    /**
     * @var string 公司所在省份。
     */
    public $OrgRegion;

    /**
     * @var string 公司座机区号。
     */
    public $OrgPhoneArea;

    /**
     * @var string 公司座机号码。
     */
    public $OrgPhoneNumber;

    /**
     * @var string 证书验证方式。验证类型：DNS_AUTO = 自动DNS验证（仅支持在腾讯云解析且解析状态正常的域名使用该验证类型），DNS = 手动DNS验证，FILE = 文件验证。
     */
    public $VerifyType;

    /**
     * @var string 管理人名。
     */
    public $AdminFirstName;

    /**
     * @var string 管理人姓。
     */
    public $AdminLastName;

    /**
     * @var string 管理人手机号码。
     */
    public $AdminPhone;

    /**
     * @var string 管理人邮箱地址。
     */
    public $AdminEmail;

    /**
     * @var string 管理人职位。
     */
    public $AdminTitle;

    /**
     * @var string 联系人名。
     */
    public $TechFirstName;

    /**
     * @var string 联系人姓。
     */
    public $TechLastName;

    /**
     * @var string 联系人邮箱地址。
     */
    public $ContactEmail;

    /**
     * @var integer 是否开启自动续费： 0， 不开启；  1， 开启； 默认为0
     */
    public $AutoRenewFlag;

    /**
     * @var string 证书加密参数
     */
    public $CsrKeyParameter;

    /**
     * @var string 证书加密方式
     */
    public $CsrEncryptAlgo;

    /**
     * @var string 管理人ID
     */
    public $ManagerId;

    /**
     * @var string 联系人电话
     */
    public $TechPhone;

    /**
     * @var string 联系人邮箱
     */
    public $TechEmail;

    /**
     * @var string 联系人职位
     */
    public $TechTitle;

    /**
     * @param string $CertId 证书 ID。
     * @param string $GenCsrType CSR 生成方式：online = 在线生成, upload = 手动上传。
     * @param string $CertCommonName 绑定证书的主域名。
     * @param integer $CompanyType 组织信息类型：1，个人； 2， 公司； 
     * @param string $OrgIdType 公司证件类型（）
     * @param string $OrgIdNumber 公司证件号码
     * @param string $AdminIdType 管理人证件类型
     * @param string $AdminIdNumber 管理人证件号码
     * @param string $TechIdType 联系人证件类型
     * @param string $TechIdNumber 联系人证件号码
     * @param string $CompanyId 公司ID
     * @param string $Csr 上传的 CSR 内容。如果GenCsrType为upload则该字段必传
     * @param array $DnsNames 域名数组（多域名证书可以上传）。
     * @param string $KeyPass 私钥密码（非必填）。
     * @param string $OrgOrganization 公司名称。
     * @param string $OrgDivision 部门名称。
     * @param string $OrgAddress 公司详细地址。
     * @param string $OrgCountry 国家名称，如中国：CN 。
     * @param string $OrgCity 公司所在城市。
     * @param string $OrgRegion 公司所在省份。
     * @param string $OrgPhoneArea 公司座机区号。
     * @param string $OrgPhoneNumber 公司座机号码。
     * @param string $VerifyType 证书验证方式。验证类型：DNS_AUTO = 自动DNS验证（仅支持在腾讯云解析且解析状态正常的域名使用该验证类型），DNS = 手动DNS验证，FILE = 文件验证。
     * @param string $AdminFirstName 管理人名。
     * @param string $AdminLastName 管理人姓。
     * @param string $AdminPhone 管理人手机号码。
     * @param string $AdminEmail 管理人邮箱地址。
     * @param string $AdminTitle 管理人职位。
     * @param string $TechFirstName 联系人名。
     * @param string $TechLastName 联系人姓。
     * @param string $ContactEmail 联系人邮箱地址。
     * @param integer $AutoRenewFlag 是否开启自动续费： 0， 不开启；  1， 开启； 默认为0
     * @param string $CsrKeyParameter 证书加密参数
     * @param string $CsrEncryptAlgo 证书加密方式
     * @param string $ManagerId 管理人ID
     * @param string $TechPhone 联系人电话
     * @param string $TechEmail 联系人邮箱
     * @param string $TechTitle 联系人职位
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
        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("GenCsrType",$param) and $param["GenCsrType"] !== null) {
            $this->GenCsrType = $param["GenCsrType"];
        }

        if (array_key_exists("CertCommonName",$param) and $param["CertCommonName"] !== null) {
            $this->CertCommonName = $param["CertCommonName"];
        }

        if (array_key_exists("CompanyType",$param) and $param["CompanyType"] !== null) {
            $this->CompanyType = $param["CompanyType"];
        }

        if (array_key_exists("OrgIdType",$param) and $param["OrgIdType"] !== null) {
            $this->OrgIdType = $param["OrgIdType"];
        }

        if (array_key_exists("OrgIdNumber",$param) and $param["OrgIdNumber"] !== null) {
            $this->OrgIdNumber = $param["OrgIdNumber"];
        }

        if (array_key_exists("AdminIdType",$param) and $param["AdminIdType"] !== null) {
            $this->AdminIdType = $param["AdminIdType"];
        }

        if (array_key_exists("AdminIdNumber",$param) and $param["AdminIdNumber"] !== null) {
            $this->AdminIdNumber = $param["AdminIdNumber"];
        }

        if (array_key_exists("TechIdType",$param) and $param["TechIdType"] !== null) {
            $this->TechIdType = $param["TechIdType"];
        }

        if (array_key_exists("TechIdNumber",$param) and $param["TechIdNumber"] !== null) {
            $this->TechIdNumber = $param["TechIdNumber"];
        }

        if (array_key_exists("CompanyId",$param) and $param["CompanyId"] !== null) {
            $this->CompanyId = $param["CompanyId"];
        }

        if (array_key_exists("Csr",$param) and $param["Csr"] !== null) {
            $this->Csr = $param["Csr"];
        }

        if (array_key_exists("DnsNames",$param) and $param["DnsNames"] !== null) {
            $this->DnsNames = $param["DnsNames"];
        }

        if (array_key_exists("KeyPass",$param) and $param["KeyPass"] !== null) {
            $this->KeyPass = $param["KeyPass"];
        }

        if (array_key_exists("OrgOrganization",$param) and $param["OrgOrganization"] !== null) {
            $this->OrgOrganization = $param["OrgOrganization"];
        }

        if (array_key_exists("OrgDivision",$param) and $param["OrgDivision"] !== null) {
            $this->OrgDivision = $param["OrgDivision"];
        }

        if (array_key_exists("OrgAddress",$param) and $param["OrgAddress"] !== null) {
            $this->OrgAddress = $param["OrgAddress"];
        }

        if (array_key_exists("OrgCountry",$param) and $param["OrgCountry"] !== null) {
            $this->OrgCountry = $param["OrgCountry"];
        }

        if (array_key_exists("OrgCity",$param) and $param["OrgCity"] !== null) {
            $this->OrgCity = $param["OrgCity"];
        }

        if (array_key_exists("OrgRegion",$param) and $param["OrgRegion"] !== null) {
            $this->OrgRegion = $param["OrgRegion"];
        }

        if (array_key_exists("OrgPhoneArea",$param) and $param["OrgPhoneArea"] !== null) {
            $this->OrgPhoneArea = $param["OrgPhoneArea"];
        }

        if (array_key_exists("OrgPhoneNumber",$param) and $param["OrgPhoneNumber"] !== null) {
            $this->OrgPhoneNumber = $param["OrgPhoneNumber"];
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

        if (array_key_exists("AdminPhone",$param) and $param["AdminPhone"] !== null) {
            $this->AdminPhone = $param["AdminPhone"];
        }

        if (array_key_exists("AdminEmail",$param) and $param["AdminEmail"] !== null) {
            $this->AdminEmail = $param["AdminEmail"];
        }

        if (array_key_exists("AdminTitle",$param) and $param["AdminTitle"] !== null) {
            $this->AdminTitle = $param["AdminTitle"];
        }

        if (array_key_exists("TechFirstName",$param) and $param["TechFirstName"] !== null) {
            $this->TechFirstName = $param["TechFirstName"];
        }

        if (array_key_exists("TechLastName",$param) and $param["TechLastName"] !== null) {
            $this->TechLastName = $param["TechLastName"];
        }

        if (array_key_exists("ContactEmail",$param) and $param["ContactEmail"] !== null) {
            $this->ContactEmail = $param["ContactEmail"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("CsrKeyParameter",$param) and $param["CsrKeyParameter"] !== null) {
            $this->CsrKeyParameter = $param["CsrKeyParameter"];
        }

        if (array_key_exists("CsrEncryptAlgo",$param) and $param["CsrEncryptAlgo"] !== null) {
            $this->CsrEncryptAlgo = $param["CsrEncryptAlgo"];
        }

        if (array_key_exists("ManagerId",$param) and $param["ManagerId"] !== null) {
            $this->ManagerId = $param["ManagerId"];
        }

        if (array_key_exists("TechPhone",$param) and $param["TechPhone"] !== null) {
            $this->TechPhone = $param["TechPhone"];
        }

        if (array_key_exists("TechEmail",$param) and $param["TechEmail"] !== null) {
            $this->TechEmail = $param["TechEmail"];
        }

        if (array_key_exists("TechTitle",$param) and $param["TechTitle"] !== null) {
            $this->TechTitle = $param["TechTitle"];
        }
    }
}
