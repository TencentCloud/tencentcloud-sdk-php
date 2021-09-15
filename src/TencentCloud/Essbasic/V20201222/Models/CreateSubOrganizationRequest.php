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
 * CreateSubOrganization请求参数结构体
 *
 * @method Caller getCaller() 获取调用方信息
 * @method void setCaller(Caller $Caller) 设置调用方信息
 * @method string getIdCardType() 获取机构证件号码类型可选值：
1. USCC - 统一社会信用代码
2. BIZREGISTNO - 营业执照注册号
 * @method void setIdCardType(string $IdCardType) 设置机构证件号码类型可选值：
1. USCC - 统一社会信用代码
2. BIZREGISTNO - 营业执照注册号
 * @method string getIdCardNumber() 获取机构证件号码
 * @method void setIdCardNumber(string $IdCardNumber) 设置机构证件号码
 * @method string getOrganizationType() 获取机构类型可选值：
1. ENTERPRISE - 企业
2. INDIVIDUALBIZ - 个体工商户
3. PUBLICINSTITUTION - 政府/事业单位
4. OTHERS - 其他组织
 * @method void setOrganizationType(string $OrganizationType) 设置机构类型可选值：
1. ENTERPRISE - 企业
2. INDIVIDUALBIZ - 个体工商户
3. PUBLICINSTITUTION - 政府/事业单位
4. OTHERS - 其他组织
 * @method string getLegalName() 获取机构法人/经营者姓名
 * @method void setLegalName(string $LegalName) 设置机构法人/经营者姓名
 * @method string getLegalIdCardType() 获取机构法人/经营者证件类型可选值：
1. ID_CARD - 居民身份证
2. PASSPORT - 护照
3. MAINLAND_TRAVEL_PERMIT_FOR_HONGKONG_AND_MACAO_RESIDENTS - 港澳居民来往内地通行证
4. MAINLAND_TRAVEL_PERMIT_FOR_TAIWAN_RESIDENTS - 台湾居民来往大陆通行证
5. HOUSEHOLD_REGISTER - 户口本
6. TEMP_ID_CARD - 临时居民身份证
 * @method void setLegalIdCardType(string $LegalIdCardType) 设置机构法人/经营者证件类型可选值：
1. ID_CARD - 居民身份证
2. PASSPORT - 护照
3. MAINLAND_TRAVEL_PERMIT_FOR_HONGKONG_AND_MACAO_RESIDENTS - 港澳居民来往内地通行证
4. MAINLAND_TRAVEL_PERMIT_FOR_TAIWAN_RESIDENTS - 台湾居民来往大陆通行证
5. HOUSEHOLD_REGISTER - 户口本
6. TEMP_ID_CARD - 临时居民身份证
 * @method string getLegalIdCardNumber() 获取机构法人/经营者证件号码；
OrganizationType 为 ENTERPRISE时，INDIVIDUALBIZ 时必填，其他情况选填
 * @method void setLegalIdCardNumber(string $LegalIdCardNumber) 设置机构法人/经营者证件号码；
OrganizationType 为 ENTERPRISE时，INDIVIDUALBIZ 时必填，其他情况选填
 * @method string getName() 获取机构名称全称
 * @method void setName(string $Name) 设置机构名称全称
 * @method string getOpenId() 获取机构在第三方的唯一标识，32位以内标识符
 * @method void setOpenId(string $OpenId) 设置机构在第三方的唯一标识，32位以内标识符
 * @method boolean getUseOpenId() 获取是否使用OpenId作为数据主键，如果为true，请确保OpenId在当前应用号唯一
 * @method void setUseOpenId(boolean $UseOpenId) 设置是否使用OpenId作为数据主键，如果为true，请确保OpenId在当前应用号唯一
 * @method string getIdCardFileType() 获取机构证件文件类型可选值：
1. USCCFILE - 统一社会信用代码证书
2. LICENSEFILE - 营业执照
 * @method void setIdCardFileType(string $IdCardFileType) 设置机构证件文件类型可选值：
1. USCCFILE - 统一社会信用代码证书
2. LICENSEFILE - 营业执照
 * @method string getBizLicenseFile() 获取机构证件照片文件，base64编码，支持jpg、jpeg、png格式
 * @method void setBizLicenseFile(string $BizLicenseFile) 设置机构证件照片文件，base64编码，支持jpg、jpeg、png格式
 * @method string getBizLicenseFileName() 获取机构证件照片文件名
 * @method void setBizLicenseFileName(string $BizLicenseFileName) 设置机构证件照片文件名
 * @method string getLegalMobile() 获取机构法人/经营者/联系人手机号码
 * @method void setLegalMobile(string $LegalMobile) 设置机构法人/经营者/联系人手机号码
 * @method string getContactName() 获取组织联系人姓名
 * @method void setContactName(string $ContactName) 设置组织联系人姓名
 * @method string getVerifyClientIp() 获取实名认证的客户端IP
 * @method void setVerifyClientIp(string $VerifyClientIp) 设置实名认证的客户端IP
 * @method string getVerifyServerIp() 获取实名认证的服务器IP
 * @method void setVerifyServerIp(string $VerifyServerIp) 设置实名认证的服务器IP
 * @method Address getContactAddress() 获取企业联系地址
 * @method void setContactAddress(Address $ContactAddress) 设置企业联系地址
 * @method string getEmail() 获取机构电子邮箱
 * @method void setEmail(string $Email) 设置机构电子邮箱
 */
class CreateSubOrganizationRequest extends AbstractModel
{
    /**
     * @var Caller 调用方信息
     */
    public $Caller;

    /**
     * @var string 机构证件号码类型可选值：
1. USCC - 统一社会信用代码
2. BIZREGISTNO - 营业执照注册号
     */
    public $IdCardType;

    /**
     * @var string 机构证件号码
     */
    public $IdCardNumber;

    /**
     * @var string 机构类型可选值：
1. ENTERPRISE - 企业
2. INDIVIDUALBIZ - 个体工商户
3. PUBLICINSTITUTION - 政府/事业单位
4. OTHERS - 其他组织
     */
    public $OrganizationType;

    /**
     * @var string 机构法人/经营者姓名
     */
    public $LegalName;

    /**
     * @var string 机构法人/经营者证件类型可选值：
1. ID_CARD - 居民身份证
2. PASSPORT - 护照
3. MAINLAND_TRAVEL_PERMIT_FOR_HONGKONG_AND_MACAO_RESIDENTS - 港澳居民来往内地通行证
4. MAINLAND_TRAVEL_PERMIT_FOR_TAIWAN_RESIDENTS - 台湾居民来往大陆通行证
5. HOUSEHOLD_REGISTER - 户口本
6. TEMP_ID_CARD - 临时居民身份证
     */
    public $LegalIdCardType;

    /**
     * @var string 机构法人/经营者证件号码；
OrganizationType 为 ENTERPRISE时，INDIVIDUALBIZ 时必填，其他情况选填
     */
    public $LegalIdCardNumber;

    /**
     * @var string 机构名称全称
     */
    public $Name;

    /**
     * @var string 机构在第三方的唯一标识，32位以内标识符
     */
    public $OpenId;

    /**
     * @var boolean 是否使用OpenId作为数据主键，如果为true，请确保OpenId在当前应用号唯一
     */
    public $UseOpenId;

    /**
     * @var string 机构证件文件类型可选值：
1. USCCFILE - 统一社会信用代码证书
2. LICENSEFILE - 营业执照
     */
    public $IdCardFileType;

    /**
     * @var string 机构证件照片文件，base64编码，支持jpg、jpeg、png格式
     */
    public $BizLicenseFile;

    /**
     * @var string 机构证件照片文件名
     */
    public $BizLicenseFileName;

    /**
     * @var string 机构法人/经营者/联系人手机号码
     */
    public $LegalMobile;

    /**
     * @var string 组织联系人姓名
     */
    public $ContactName;

    /**
     * @var string 实名认证的客户端IP
     */
    public $VerifyClientIp;

    /**
     * @var string 实名认证的服务器IP
     */
    public $VerifyServerIp;

    /**
     * @var Address 企业联系地址
     */
    public $ContactAddress;

    /**
     * @var string 机构电子邮箱
     */
    public $Email;

    /**
     * @param Caller $Caller 调用方信息
     * @param string $IdCardType 机构证件号码类型可选值：
1. USCC - 统一社会信用代码
2. BIZREGISTNO - 营业执照注册号
     * @param string $IdCardNumber 机构证件号码
     * @param string $OrganizationType 机构类型可选值：
1. ENTERPRISE - 企业
2. INDIVIDUALBIZ - 个体工商户
3. PUBLICINSTITUTION - 政府/事业单位
4. OTHERS - 其他组织
     * @param string $LegalName 机构法人/经营者姓名
     * @param string $LegalIdCardType 机构法人/经营者证件类型可选值：
1. ID_CARD - 居民身份证
2. PASSPORT - 护照
3. MAINLAND_TRAVEL_PERMIT_FOR_HONGKONG_AND_MACAO_RESIDENTS - 港澳居民来往内地通行证
4. MAINLAND_TRAVEL_PERMIT_FOR_TAIWAN_RESIDENTS - 台湾居民来往大陆通行证
5. HOUSEHOLD_REGISTER - 户口本
6. TEMP_ID_CARD - 临时居民身份证
     * @param string $LegalIdCardNumber 机构法人/经营者证件号码；
OrganizationType 为 ENTERPRISE时，INDIVIDUALBIZ 时必填，其他情况选填
     * @param string $Name 机构名称全称
     * @param string $OpenId 机构在第三方的唯一标识，32位以内标识符
     * @param boolean $UseOpenId 是否使用OpenId作为数据主键，如果为true，请确保OpenId在当前应用号唯一
     * @param string $IdCardFileType 机构证件文件类型可选值：
1. USCCFILE - 统一社会信用代码证书
2. LICENSEFILE - 营业执照
     * @param string $BizLicenseFile 机构证件照片文件，base64编码，支持jpg、jpeg、png格式
     * @param string $BizLicenseFileName 机构证件照片文件名
     * @param string $LegalMobile 机构法人/经营者/联系人手机号码
     * @param string $ContactName 组织联系人姓名
     * @param string $VerifyClientIp 实名认证的客户端IP
     * @param string $VerifyServerIp 实名认证的服务器IP
     * @param Address $ContactAddress 企业联系地址
     * @param string $Email 机构电子邮箱
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
        if (array_key_exists("Caller",$param) and $param["Caller"] !== null) {
            $this->Caller = new Caller();
            $this->Caller->deserialize($param["Caller"]);
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

        if (array_key_exists("LegalName",$param) and $param["LegalName"] !== null) {
            $this->LegalName = $param["LegalName"];
        }

        if (array_key_exists("LegalIdCardType",$param) and $param["LegalIdCardType"] !== null) {
            $this->LegalIdCardType = $param["LegalIdCardType"];
        }

        if (array_key_exists("LegalIdCardNumber",$param) and $param["LegalIdCardNumber"] !== null) {
            $this->LegalIdCardNumber = $param["LegalIdCardNumber"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }

        if (array_key_exists("UseOpenId",$param) and $param["UseOpenId"] !== null) {
            $this->UseOpenId = $param["UseOpenId"];
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

        if (array_key_exists("LegalMobile",$param) and $param["LegalMobile"] !== null) {
            $this->LegalMobile = $param["LegalMobile"];
        }

        if (array_key_exists("ContactName",$param) and $param["ContactName"] !== null) {
            $this->ContactName = $param["ContactName"];
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

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }
    }
}
