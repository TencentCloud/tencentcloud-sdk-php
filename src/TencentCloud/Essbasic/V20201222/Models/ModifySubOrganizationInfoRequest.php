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
 * ModifySubOrganizationInfo请求参数结构体
 *
 * @method Caller getCaller() 获取调用方信息，该接口 SubOrganizationId 字段与 OpenId 字段二者至少需要传入一个，全部传入时则使用 SubOrganizationId 信息
 * @method void setCaller(Caller $Caller) 设置调用方信息，该接口 SubOrganizationId 字段与 OpenId 字段二者至少需要传入一个，全部传入时则使用 SubOrganizationId 信息
 * @method string getOpenId() 获取机构在第三方的唯一标识，32位定长字符串，与 Caller 中 SubOrgnizationId 二者至少需要传入一个，全部传入时则使用 SubOrganizationId 信息
 * @method void setOpenId(string $OpenId) 设置机构在第三方的唯一标识，32位定长字符串，与 Caller 中 SubOrgnizationId 二者至少需要传入一个，全部传入时则使用 SubOrganizationId 信息
 * @method string getName() 获取机构名称全称，修改后机构状态将变为未实名，需要调用实名接口重新实名。
 * @method void setName(string $Name) 设置机构名称全称，修改后机构状态将变为未实名，需要调用实名接口重新实名。
 * @method string getOrganizationType() 获取机构类型可选值：
1. ENTERPRISE - 企业；
2. INDIVIDUALBIZ - 个体工商户；
3. PUBLICINSTITUTION - 政府/事业单位
4. OTHERS - 其他组织
 * @method void setOrganizationType(string $OrganizationType) 设置机构类型可选值：
1. ENTERPRISE - 企业；
2. INDIVIDUALBIZ - 个体工商户；
3. PUBLICINSTITUTION - 政府/事业单位
4. OTHERS - 其他组织
 * @method string getBizLicenseFile() 获取机构证件照片文件，base64编码。支持jpg，jpeg，png格式；如果传值，则重新上传文件后，机构状态将变为未实名，需要调用实名接口重新实名。
 * @method void setBizLicenseFile(string $BizLicenseFile) 设置机构证件照片文件，base64编码。支持jpg，jpeg，png格式；如果传值，则重新上传文件后，机构状态将变为未实名，需要调用实名接口重新实名。
 * @method string getBizLicenseFileName() 获取机构证件照片文件名
 * @method void setBizLicenseFileName(string $BizLicenseFileName) 设置机构证件照片文件名
 * @method string getLegalName() 获取机构法人/经营者姓名
 * @method void setLegalName(string $LegalName) 设置机构法人/经营者姓名
 * @method string getLegalIdCardType() 获取机构法人/经营者证件类型，可选值：ID_CARD - 居民身份证。OrganizationType 为 ENTERPRISE、INDIVIDUALBIZ 时，此项必填，其他情况选填。
 * @method void setLegalIdCardType(string $LegalIdCardType) 设置机构法人/经营者证件类型，可选值：ID_CARD - 居民身份证。OrganizationType 为 ENTERPRISE、INDIVIDUALBIZ 时，此项必填，其他情况选填。
 * @method string getLegalIdCardNumber() 获取机构法人/经营者证件号码。OrganizationType 为 ENTERPRISE、INDIVIDUALBIZ 时，此项必填，其他情况选填
 * @method void setLegalIdCardNumber(string $LegalIdCardNumber) 设置机构法人/经营者证件号码。OrganizationType 为 ENTERPRISE、INDIVIDUALBIZ 时，此项必填，其他情况选填
 * @method string getLegalMobile() 获取机构法人/经营者/联系人手机号码
 * @method void setLegalMobile(string $LegalMobile) 设置机构法人/经营者/联系人手机号码
 * @method string getContactName() 获取组织联系人姓名
 * @method void setContactName(string $ContactName) 设置组织联系人姓名
 * @method Address getContactAddress() 获取企业联系地址
 * @method void setContactAddress(Address $ContactAddress) 设置企业联系地址
 * @method string getEmail() 获取机构电子邮箱
 * @method void setEmail(string $Email) 设置机构电子邮箱
 */
class ModifySubOrganizationInfoRequest extends AbstractModel
{
    /**
     * @var Caller 调用方信息，该接口 SubOrganizationId 字段与 OpenId 字段二者至少需要传入一个，全部传入时则使用 SubOrganizationId 信息
     */
    public $Caller;

    /**
     * @var string 机构在第三方的唯一标识，32位定长字符串，与 Caller 中 SubOrgnizationId 二者至少需要传入一个，全部传入时则使用 SubOrganizationId 信息
     */
    public $OpenId;

    /**
     * @var string 机构名称全称，修改后机构状态将变为未实名，需要调用实名接口重新实名。
     */
    public $Name;

    /**
     * @var string 机构类型可选值：
1. ENTERPRISE - 企业；
2. INDIVIDUALBIZ - 个体工商户；
3. PUBLICINSTITUTION - 政府/事业单位
4. OTHERS - 其他组织
     */
    public $OrganizationType;

    /**
     * @var string 机构证件照片文件，base64编码。支持jpg，jpeg，png格式；如果传值，则重新上传文件后，机构状态将变为未实名，需要调用实名接口重新实名。
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
     * @var string 机构法人/经营者证件类型，可选值：ID_CARD - 居民身份证。OrganizationType 为 ENTERPRISE、INDIVIDUALBIZ 时，此项必填，其他情况选填。
     */
    public $LegalIdCardType;

    /**
     * @var string 机构法人/经营者证件号码。OrganizationType 为 ENTERPRISE、INDIVIDUALBIZ 时，此项必填，其他情况选填
     */
    public $LegalIdCardNumber;

    /**
     * @var string 机构法人/经营者/联系人手机号码
     */
    public $LegalMobile;

    /**
     * @var string 组织联系人姓名
     */
    public $ContactName;

    /**
     * @var Address 企业联系地址
     */
    public $ContactAddress;

    /**
     * @var string 机构电子邮箱
     */
    public $Email;

    /**
     * @param Caller $Caller 调用方信息，该接口 SubOrganizationId 字段与 OpenId 字段二者至少需要传入一个，全部传入时则使用 SubOrganizationId 信息
     * @param string $OpenId 机构在第三方的唯一标识，32位定长字符串，与 Caller 中 SubOrgnizationId 二者至少需要传入一个，全部传入时则使用 SubOrganizationId 信息
     * @param string $Name 机构名称全称，修改后机构状态将变为未实名，需要调用实名接口重新实名。
     * @param string $OrganizationType 机构类型可选值：
1. ENTERPRISE - 企业；
2. INDIVIDUALBIZ - 个体工商户；
3. PUBLICINSTITUTION - 政府/事业单位
4. OTHERS - 其他组织
     * @param string $BizLicenseFile 机构证件照片文件，base64编码。支持jpg，jpeg，png格式；如果传值，则重新上传文件后，机构状态将变为未实名，需要调用实名接口重新实名。
     * @param string $BizLicenseFileName 机构证件照片文件名
     * @param string $LegalName 机构法人/经营者姓名
     * @param string $LegalIdCardType 机构法人/经营者证件类型，可选值：ID_CARD - 居民身份证。OrganizationType 为 ENTERPRISE、INDIVIDUALBIZ 时，此项必填，其他情况选填。
     * @param string $LegalIdCardNumber 机构法人/经营者证件号码。OrganizationType 为 ENTERPRISE、INDIVIDUALBIZ 时，此项必填，其他情况选填
     * @param string $LegalMobile 机构法人/经营者/联系人手机号码
     * @param string $ContactName 组织联系人姓名
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

        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("OrganizationType",$param) and $param["OrganizationType"] !== null) {
            $this->OrganizationType = $param["OrganizationType"];
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

        if (array_key_exists("ContactAddress",$param) and $param["ContactAddress"] !== null) {
            $this->ContactAddress = new Address();
            $this->ContactAddress->deserialize($param["ContactAddress"]);
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }
    }
}
