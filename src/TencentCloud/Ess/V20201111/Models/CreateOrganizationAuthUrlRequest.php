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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateOrganizationAuthUrl请求参数结构体
 *
 * @method UserInfo getOperator() 获取操作人信息
 * @method void setOperator(UserInfo $Operator) 设置操作人信息
 * @method array getAuthorizationTypes() 获取指定授权方式 支持多选:
1-上传授权书方式
2- 法人授权方式
3- 法人身份认证方式
 * @method void setAuthorizationTypes(array $AuthorizationTypes) 设置指定授权方式 支持多选:
1-上传授权书方式
2- 法人授权方式
3- 法人身份认证方式
 * @method string getOrganizationName() 获取企业名称
EndPointType=“H5”或者"SHORT_H5"时，该参数必填

 * @method void setOrganizationName(string $OrganizationName) 设置企业名称
EndPointType=“H5”或者"SHORT_H5"时，该参数必填

 * @method string getUniformSocialCreditCode() 获取企业统一社会信用代码
 * @method void setUniformSocialCreditCode(string $UniformSocialCreditCode) 设置企业统一社会信用代码
 * @method string getLegalName() 获取法人姓名
 * @method void setLegalName(string $LegalName) 设置法人姓名
 * @method string getAutoJumpUrl() 获取认证完成跳转链接
 * @method void setAutoJumpUrl(string $AutoJumpUrl) 设置认证完成跳转链接
 * @method string getOrganizationAddress() 获取营业执照企业地址
示例：xx省xx市xx县/区xx街道
 * @method void setOrganizationAddress(string $OrganizationAddress) 设置营业执照企业地址
示例：xx省xx市xx县/区xx街道
 * @method string getAdminName() 获取认证人姓名
 * @method void setAdminName(string $AdminName) 设置认证人姓名
 * @method string getAdminMobile() 获取认证人手机号
 * @method void setAdminMobile(string $AdminMobile) 设置认证人手机号
 * @method string getAdminIdCardNumber() 获取认证人身份证号
 * @method void setAdminIdCardNumber(string $AdminIdCardNumber) 设置认证人身份证号
 * @method string getAdminIdCardType() 获取认证人证件类型
支持以下类型
<ul><li>ID_CARD : 居民身份证  (默认值)</li>
<li>HONGKONG_AND_MACAO : 港澳居民来往内地通行证</li>
<li>HONGKONG_MACAO_AND_TAIWAN : 港澳台居民居住证(格式同居民身份证)</li></ul>

 * @method void setAdminIdCardType(string $AdminIdCardType) 设置认证人证件类型
支持以下类型
<ul><li>ID_CARD : 居民身份证  (默认值)</li>
<li>HONGKONG_AND_MACAO : 港澳居民来往内地通行证</li>
<li>HONGKONG_MACAO_AND_TAIWAN : 港澳台居民居住证(格式同居民身份证)</li></ul>

 * @method boolean getUniformSocialCreditCodeSame() 获取营业执照的社会信用代码保持一致
false 关闭-默认
true 开启
 * @method void setUniformSocialCreditCodeSame(boolean $UniformSocialCreditCodeSame) 设置营业执照的社会信用代码保持一致
false 关闭-默认
true 开启
 * @method boolean getLegalNameSame() 获取法人姓名保持一致
false 关闭-默认
true 开启
 * @method void setLegalNameSame(boolean $LegalNameSame) 设置法人姓名保持一致
false 关闭-默认
true 开启
 * @method boolean getAdminNameSame() 获取认证人姓名一致
false 关闭-默认
true 开启
注意：
开启后在认证过程前会校验拦截
 * @method void setAdminNameSame(boolean $AdminNameSame) 设置认证人姓名一致
false 关闭-默认
true 开启
注意：
开启后在认证过程前会校验拦截
 * @method boolean getAdminIdCardNumberSame() 获取认证人居民身份证件号一致
false 关闭-默认
true 开启
注意：
开启后在认证过程前会校验拦截
 * @method void setAdminIdCardNumberSame(boolean $AdminIdCardNumberSame) 设置认证人居民身份证件号一致
false 关闭-默认
true 开启
注意：
开启后在认证过程前会校验拦截
 * @method boolean getAdminMobileSame() 获取认证人手机号一致
false 关闭-默认
true 开启
注意：
开启后在认证过程前会校验拦截
 * @method void setAdminMobileSame(boolean $AdminMobileSame) 设置认证人手机号一致
false 关闭-默认
true 开启
注意：
开启后在认证过程前会校验拦截
 * @method boolean getOrganizationNameSame() 获取企业名称保持一致
false 关闭-默认
true 开启
 * @method void setOrganizationNameSame(boolean $OrganizationNameSame) 设置企业名称保持一致
false 关闭-默认
true 开启
 * @method string getBusinessLicense() 获取营业执照正面照(PNG或JPG) base64格式, 大小不超过5M
 * @method void setBusinessLicense(string $BusinessLicense) 设置营业执照正面照(PNG或JPG) base64格式, 大小不超过5M
 * @method string getEndpoint() 获取跳转链接类型：
"PC"-PC端认证链接 
"APP"-全屏或半屏跳转小程序链接
“H5”-H5页面认证链接 "SHORT_H5"- H5认证短链
"SHORT_URL"- 跳转小程序短链	
 * @method void setEndpoint(string $Endpoint) 设置跳转链接类型：
"PC"-PC端认证链接 
"APP"-全屏或半屏跳转小程序链接
“H5”-H5页面认证链接 "SHORT_H5"- H5认证短链
"SHORT_URL"- 跳转小程序短链	
 */
class CreateOrganizationAuthUrlRequest extends AbstractModel
{
    /**
     * @var UserInfo 操作人信息
     */
    public $Operator;

    /**
     * @var array 指定授权方式 支持多选:
1-上传授权书方式
2- 法人授权方式
3- 法人身份认证方式
     */
    public $AuthorizationTypes;

    /**
     * @var string 企业名称
EndPointType=“H5”或者"SHORT_H5"时，该参数必填

     */
    public $OrganizationName;

    /**
     * @var string 企业统一社会信用代码
     */
    public $UniformSocialCreditCode;

    /**
     * @var string 法人姓名
     */
    public $LegalName;

    /**
     * @var string 认证完成跳转链接
     */
    public $AutoJumpUrl;

    /**
     * @var string 营业执照企业地址
示例：xx省xx市xx县/区xx街道
     */
    public $OrganizationAddress;

    /**
     * @var string 认证人姓名
     */
    public $AdminName;

    /**
     * @var string 认证人手机号
     */
    public $AdminMobile;

    /**
     * @var string 认证人身份证号
     */
    public $AdminIdCardNumber;

    /**
     * @var string 认证人证件类型
支持以下类型
<ul><li>ID_CARD : 居民身份证  (默认值)</li>
<li>HONGKONG_AND_MACAO : 港澳居民来往内地通行证</li>
<li>HONGKONG_MACAO_AND_TAIWAN : 港澳台居民居住证(格式同居民身份证)</li></ul>

     */
    public $AdminIdCardType;

    /**
     * @var boolean 营业执照的社会信用代码保持一致
false 关闭-默认
true 开启
     */
    public $UniformSocialCreditCodeSame;

    /**
     * @var boolean 法人姓名保持一致
false 关闭-默认
true 开启
     */
    public $LegalNameSame;

    /**
     * @var boolean 认证人姓名一致
false 关闭-默认
true 开启
注意：
开启后在认证过程前会校验拦截
     */
    public $AdminNameSame;

    /**
     * @var boolean 认证人居民身份证件号一致
false 关闭-默认
true 开启
注意：
开启后在认证过程前会校验拦截
     */
    public $AdminIdCardNumberSame;

    /**
     * @var boolean 认证人手机号一致
false 关闭-默认
true 开启
注意：
开启后在认证过程前会校验拦截
     */
    public $AdminMobileSame;

    /**
     * @var boolean 企业名称保持一致
false 关闭-默认
true 开启
     */
    public $OrganizationNameSame;

    /**
     * @var string 营业执照正面照(PNG或JPG) base64格式, 大小不超过5M
     */
    public $BusinessLicense;

    /**
     * @var string 跳转链接类型：
"PC"-PC端认证链接 
"APP"-全屏或半屏跳转小程序链接
“H5”-H5页面认证链接 "SHORT_H5"- H5认证短链
"SHORT_URL"- 跳转小程序短链	
     */
    public $Endpoint;

    /**
     * @param UserInfo $Operator 操作人信息
     * @param array $AuthorizationTypes 指定授权方式 支持多选:
1-上传授权书方式
2- 法人授权方式
3- 法人身份认证方式
     * @param string $OrganizationName 企业名称
EndPointType=“H5”或者"SHORT_H5"时，该参数必填

     * @param string $UniformSocialCreditCode 企业统一社会信用代码
     * @param string $LegalName 法人姓名
     * @param string $AutoJumpUrl 认证完成跳转链接
     * @param string $OrganizationAddress 营业执照企业地址
示例：xx省xx市xx县/区xx街道
     * @param string $AdminName 认证人姓名
     * @param string $AdminMobile 认证人手机号
     * @param string $AdminIdCardNumber 认证人身份证号
     * @param string $AdminIdCardType 认证人证件类型
支持以下类型
<ul><li>ID_CARD : 居民身份证  (默认值)</li>
<li>HONGKONG_AND_MACAO : 港澳居民来往内地通行证</li>
<li>HONGKONG_MACAO_AND_TAIWAN : 港澳台居民居住证(格式同居民身份证)</li></ul>

     * @param boolean $UniformSocialCreditCodeSame 营业执照的社会信用代码保持一致
false 关闭-默认
true 开启
     * @param boolean $LegalNameSame 法人姓名保持一致
false 关闭-默认
true 开启
     * @param boolean $AdminNameSame 认证人姓名一致
false 关闭-默认
true 开启
注意：
开启后在认证过程前会校验拦截
     * @param boolean $AdminIdCardNumberSame 认证人居民身份证件号一致
false 关闭-默认
true 开启
注意：
开启后在认证过程前会校验拦截
     * @param boolean $AdminMobileSame 认证人手机号一致
false 关闭-默认
true 开启
注意：
开启后在认证过程前会校验拦截
     * @param boolean $OrganizationNameSame 企业名称保持一致
false 关闭-默认
true 开启
     * @param string $BusinessLicense 营业执照正面照(PNG或JPG) base64格式, 大小不超过5M
     * @param string $Endpoint 跳转链接类型：
"PC"-PC端认证链接 
"APP"-全屏或半屏跳转小程序链接
“H5”-H5页面认证链接 "SHORT_H5"- H5认证短链
"SHORT_URL"- 跳转小程序短链	
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("AuthorizationTypes",$param) and $param["AuthorizationTypes"] !== null) {
            $this->AuthorizationTypes = $param["AuthorizationTypes"];
        }

        if (array_key_exists("OrganizationName",$param) and $param["OrganizationName"] !== null) {
            $this->OrganizationName = $param["OrganizationName"];
        }

        if (array_key_exists("UniformSocialCreditCode",$param) and $param["UniformSocialCreditCode"] !== null) {
            $this->UniformSocialCreditCode = $param["UniformSocialCreditCode"];
        }

        if (array_key_exists("LegalName",$param) and $param["LegalName"] !== null) {
            $this->LegalName = $param["LegalName"];
        }

        if (array_key_exists("AutoJumpUrl",$param) and $param["AutoJumpUrl"] !== null) {
            $this->AutoJumpUrl = $param["AutoJumpUrl"];
        }

        if (array_key_exists("OrganizationAddress",$param) and $param["OrganizationAddress"] !== null) {
            $this->OrganizationAddress = $param["OrganizationAddress"];
        }

        if (array_key_exists("AdminName",$param) and $param["AdminName"] !== null) {
            $this->AdminName = $param["AdminName"];
        }

        if (array_key_exists("AdminMobile",$param) and $param["AdminMobile"] !== null) {
            $this->AdminMobile = $param["AdminMobile"];
        }

        if (array_key_exists("AdminIdCardNumber",$param) and $param["AdminIdCardNumber"] !== null) {
            $this->AdminIdCardNumber = $param["AdminIdCardNumber"];
        }

        if (array_key_exists("AdminIdCardType",$param) and $param["AdminIdCardType"] !== null) {
            $this->AdminIdCardType = $param["AdminIdCardType"];
        }

        if (array_key_exists("UniformSocialCreditCodeSame",$param) and $param["UniformSocialCreditCodeSame"] !== null) {
            $this->UniformSocialCreditCodeSame = $param["UniformSocialCreditCodeSame"];
        }

        if (array_key_exists("LegalNameSame",$param) and $param["LegalNameSame"] !== null) {
            $this->LegalNameSame = $param["LegalNameSame"];
        }

        if (array_key_exists("AdminNameSame",$param) and $param["AdminNameSame"] !== null) {
            $this->AdminNameSame = $param["AdminNameSame"];
        }

        if (array_key_exists("AdminIdCardNumberSame",$param) and $param["AdminIdCardNumberSame"] !== null) {
            $this->AdminIdCardNumberSame = $param["AdminIdCardNumberSame"];
        }

        if (array_key_exists("AdminMobileSame",$param) and $param["AdminMobileSame"] !== null) {
            $this->AdminMobileSame = $param["AdminMobileSame"];
        }

        if (array_key_exists("OrganizationNameSame",$param) and $param["OrganizationNameSame"] !== null) {
            $this->OrganizationNameSame = $param["OrganizationNameSame"];
        }

        if (array_key_exists("BusinessLicense",$param) and $param["BusinessLicense"] !== null) {
            $this->BusinessLicense = $param["BusinessLicense"];
        }

        if (array_key_exists("Endpoint",$param) and $param["Endpoint"] !== null) {
            $this->Endpoint = $param["Endpoint"];
        }
    }
}
