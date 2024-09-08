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

<ul>
<li><strong>1</strong>:上传授权书方式</li>
<li><strong>2</strong>: 法人授权方式</li>
<li><strong>3</strong>: 法人身份认证方式</li>
</ul>
 * @method void setAuthorizationTypes(array $AuthorizationTypes) 设置指定授权方式 支持多选:

<ul>
<li><strong>1</strong>:上传授权书方式</li>
<li><strong>2</strong>: 法人授权方式</li>
<li><strong>3</strong>: 法人身份认证方式</li>
</ul>
 * @method string getOrganizationName() 获取认证企业名称，请确认该名称与企业营业执照中注册的名称一致。

注：

1. `如果名称中包含英文括号()，请使用中文括号（）代替。`

2. `EndPointType=“H5”或者"SHORT_H5"时，该参数必填`

 * @method void setOrganizationName(string $OrganizationName) 设置认证企业名称，请确认该名称与企业营业执照中注册的名称一致。

注：

1. `如果名称中包含英文括号()，请使用中文括号（）代替。`

2. `EndPointType=“H5”或者"SHORT_H5"时，该参数必填`

 * @method string getUniformSocialCreditCode() 获取企业统一社会信用代码
 * @method void setUniformSocialCreditCode(string $UniformSocialCreditCode) 设置企业统一社会信用代码
 * @method string getLegalName() 获取企业法人的姓名
 * @method void setLegalName(string $LegalName) 设置企业法人的姓名
 * @method string getAutoJumpUrl() 获取认证完成跳回的链接，最长500个字符
 * @method void setAutoJumpUrl(string $AutoJumpUrl) 设置认证完成跳回的链接，最长500个字符
 * @method string getOrganizationAddress() 获取营业执照企业地址
 * @method void setOrganizationAddress(string $OrganizationAddress) 设置营业执照企业地址
 * @method string getAdminName() 获取认证人姓名
 * @method void setAdminName(string $AdminName) 设置认证人姓名
 * @method string getAdminMobile() 获取认证人手机号
 * @method void setAdminMobile(string $AdminMobile) 设置认证人手机号
 * @method string getAdminIdCardNumber() 获取认证人身份证号
 * @method void setAdminIdCardNumber(string $AdminIdCardNumber) 设置认证人身份证号
 * @method string getAdminIdCardType() 获取认证人证件类型， 支持以下类型
<ul><li><b>ID_CARD</b> : 中国大陆居民身份证  (默认值)</li>
<li><b>HONGKONG_AND_MACAO</b>  : 港澳居民来往内地通行证</li>
<li><b>HONGKONG_MACAO_AND_TAIWAN</b>  : 港澳台居民居住证(格式同居民身份证)</li></ul>

 * @method void setAdminIdCardType(string $AdminIdCardType) 设置认证人证件类型， 支持以下类型
<ul><li><b>ID_CARD</b> : 中国大陆居民身份证  (默认值)</li>
<li><b>HONGKONG_AND_MACAO</b>  : 港澳居民来往内地通行证</li>
<li><b>HONGKONG_MACAO_AND_TAIWAN</b>  : 港澳台居民居住证(格式同居民身份证)</li></ul>

 * @method boolean getUniformSocialCreditCodeSame() 获取对方打开链接认证时，对方填写的营业执照的社会信用代码是否与接口上传上来的要保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>
 * @method void setUniformSocialCreditCodeSame(boolean $UniformSocialCreditCodeSame) 设置对方打开链接认证时，对方填写的营业执照的社会信用代码是否与接口上传上来的要保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>
 * @method boolean getLegalNameSame() 获取对方打开链接认证时，法人姓名是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>
 * @method void setLegalNameSame(boolean $LegalNameSame) 设置对方打开链接认证时，法人姓名是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>
 * @method boolean getAdminNameSame() 获取对方打开链接认证时，认证人姓名是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>
 * @method void setAdminNameSame(boolean $AdminNameSame) 设置对方打开链接认证时，认证人姓名是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>
 * @method boolean getAdminIdCardNumberSame() 获取对方打开链接认证时，认证人居民身份证件号是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>
 * @method void setAdminIdCardNumberSame(boolean $AdminIdCardNumberSame) 设置对方打开链接认证时，认证人居民身份证件号是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>
 * @method boolean getAdminMobileSame() 获取对方打开链接认证时，认证人手机号是否要与接口传递上来的保持一致。<ul>
<li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li>
<li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li>
</ul>
 * @method void setAdminMobileSame(boolean $AdminMobileSame) 设置对方打开链接认证时，认证人手机号是否要与接口传递上来的保持一致。<ul>
<li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li>
<li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li>
</ul>
 * @method boolean getOrganizationNameSame() 获取对方打开链接认证时，企业名称是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>
 * @method void setOrganizationNameSame(boolean $OrganizationNameSame) 设置对方打开链接认证时，企业名称是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>
 * @method string getBusinessLicense() 获取营业执照正面照（支持PNG或JPG格式）需以base64格式提供，且文件大小不得超过5MB。
 * @method void setBusinessLicense(string $BusinessLicense) 设置营业执照正面照（支持PNG或JPG格式）需以base64格式提供，且文件大小不得超过5MB。
 * @method string getEndpoint() 获取跳转链接类型：

<ul>
<li><b>PC</b>：适用于PC端的认证链接</li>
<li><b>APP</b>：用于全屏或半屏跳转的小程序链接</li>
<li><b>SHORT_URL</b>：跳转小程序的链接的短链形式</li>
<li><b>H5</b>：适用于H5页面的认证链接</li>
<li><b>SHORT_H5</b>：H5认证链接的短链形式</li>
</ul>

 * @method void setEndpoint(string $Endpoint) 设置跳转链接类型：

<ul>
<li><b>PC</b>：适用于PC端的认证链接</li>
<li><b>APP</b>：用于全屏或半屏跳转的小程序链接</li>
<li><b>SHORT_URL</b>：跳转小程序的链接的短链形式</li>
<li><b>H5</b>：适用于H5页面的认证链接</li>
<li><b>SHORT_H5</b>：H5认证链接的短链形式</li>
</ul>
 */
class CreateOrganizationAuthUrlRequest extends AbstractModel
{
    /**
     * @var UserInfo 操作人信息
     */
    public $Operator;

    /**
     * @var array 指定授权方式 支持多选:

<ul>
<li><strong>1</strong>:上传授权书方式</li>
<li><strong>2</strong>: 法人授权方式</li>
<li><strong>3</strong>: 法人身份认证方式</li>
</ul>
     */
    public $AuthorizationTypes;

    /**
     * @var string 认证企业名称，请确认该名称与企业营业执照中注册的名称一致。

注：

1. `如果名称中包含英文括号()，请使用中文括号（）代替。`

2. `EndPointType=“H5”或者"SHORT_H5"时，该参数必填`

     */
    public $OrganizationName;

    /**
     * @var string 企业统一社会信用代码
     */
    public $UniformSocialCreditCode;

    /**
     * @var string 企业法人的姓名
     */
    public $LegalName;

    /**
     * @var string 认证完成跳回的链接，最长500个字符
     */
    public $AutoJumpUrl;

    /**
     * @var string 营业执照企业地址
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
     * @var string 认证人证件类型， 支持以下类型
<ul><li><b>ID_CARD</b> : 中国大陆居民身份证  (默认值)</li>
<li><b>HONGKONG_AND_MACAO</b>  : 港澳居民来往内地通行证</li>
<li><b>HONGKONG_MACAO_AND_TAIWAN</b>  : 港澳台居民居住证(格式同居民身份证)</li></ul>

     */
    public $AdminIdCardType;

    /**
     * @var boolean 对方打开链接认证时，对方填写的营业执照的社会信用代码是否与接口上传上来的要保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>
     */
    public $UniformSocialCreditCodeSame;

    /**
     * @var boolean 对方打开链接认证时，法人姓名是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>
     */
    public $LegalNameSame;

    /**
     * @var boolean 对方打开链接认证时，认证人姓名是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>
     */
    public $AdminNameSame;

    /**
     * @var boolean 对方打开链接认证时，认证人居民身份证件号是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>
     */
    public $AdminIdCardNumberSame;

    /**
     * @var boolean 对方打开链接认证时，认证人手机号是否要与接口传递上来的保持一致。<ul>
<li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li>
<li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li>
</ul>
     */
    public $AdminMobileSame;

    /**
     * @var boolean 对方打开链接认证时，企业名称是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>
     */
    public $OrganizationNameSame;

    /**
     * @var string 营业执照正面照（支持PNG或JPG格式）需以base64格式提供，且文件大小不得超过5MB。
     */
    public $BusinessLicense;

    /**
     * @var string 跳转链接类型：

<ul>
<li><b>PC</b>：适用于PC端的认证链接</li>
<li><b>APP</b>：用于全屏或半屏跳转的小程序链接</li>
<li><b>SHORT_URL</b>：跳转小程序的链接的短链形式</li>
<li><b>H5</b>：适用于H5页面的认证链接</li>
<li><b>SHORT_H5</b>：H5认证链接的短链形式</li>
</ul>

     */
    public $Endpoint;

    /**
     * @param UserInfo $Operator 操作人信息
     * @param array $AuthorizationTypes 指定授权方式 支持多选:

<ul>
<li><strong>1</strong>:上传授权书方式</li>
<li><strong>2</strong>: 法人授权方式</li>
<li><strong>3</strong>: 法人身份认证方式</li>
</ul>
     * @param string $OrganizationName 认证企业名称，请确认该名称与企业营业执照中注册的名称一致。

注：

1. `如果名称中包含英文括号()，请使用中文括号（）代替。`

2. `EndPointType=“H5”或者"SHORT_H5"时，该参数必填`

     * @param string $UniformSocialCreditCode 企业统一社会信用代码
     * @param string $LegalName 企业法人的姓名
     * @param string $AutoJumpUrl 认证完成跳回的链接，最长500个字符
     * @param string $OrganizationAddress 营业执照企业地址
     * @param string $AdminName 认证人姓名
     * @param string $AdminMobile 认证人手机号
     * @param string $AdminIdCardNumber 认证人身份证号
     * @param string $AdminIdCardType 认证人证件类型， 支持以下类型
<ul><li><b>ID_CARD</b> : 中国大陆居民身份证  (默认值)</li>
<li><b>HONGKONG_AND_MACAO</b>  : 港澳居民来往内地通行证</li>
<li><b>HONGKONG_MACAO_AND_TAIWAN</b>  : 港澳台居民居住证(格式同居民身份证)</li></ul>

     * @param boolean $UniformSocialCreditCodeSame 对方打开链接认证时，对方填写的营业执照的社会信用代码是否与接口上传上来的要保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>
     * @param boolean $LegalNameSame 对方打开链接认证时，法人姓名是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>
     * @param boolean $AdminNameSame 对方打开链接认证时，认证人姓名是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>
     * @param boolean $AdminIdCardNumberSame 对方打开链接认证时，认证人居民身份证件号是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>
     * @param boolean $AdminMobileSame 对方打开链接认证时，认证人手机号是否要与接口传递上来的保持一致。<ul>
<li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li>
<li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li>
</ul>
     * @param boolean $OrganizationNameSame 对方打开链接认证时，企业名称是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>
     * @param string $BusinessLicense 营业执照正面照（支持PNG或JPG格式）需以base64格式提供，且文件大小不得超过5MB。
     * @param string $Endpoint 跳转链接类型：

<ul>
<li><b>PC</b>：适用于PC端的认证链接</li>
<li><b>APP</b>：用于全屏或半屏跳转的小程序链接</li>
<li><b>SHORT_URL</b>：跳转小程序的链接的短链形式</li>
<li><b>H5</b>：适用于H5页面的认证链接</li>
<li><b>SHORT_H5</b>：H5认证链接的短链形式</li>
</ul>
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
