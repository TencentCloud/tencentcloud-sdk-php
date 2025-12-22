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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateOrganizationAuthUrl请求参数结构体
 *
 * @method UserInfo getOperator() 获取操作人信息
 * @method void setOperator(UserInfo $Operator) 设置操作人信息
 * @method array getAuthorizationTypes() 获取指定授权方式 支持多选:

<ul>
<li><strong>2</strong>: 法人授权方式</li>
<li><strong>5</strong>: 授权书+对公打款方式</li>
</ul>
 * @method void setAuthorizationTypes(array $AuthorizationTypes) 设置指定授权方式 支持多选:

<ul>
<li><strong>2</strong>: 法人授权方式</li>
<li><strong>5</strong>: 授权书+对公打款方式</li>
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
 * @method string getAutoJumpUrl() 获取<font color="red">即将废弃</font>，入参请使用JumpEvents。
认证完成跳回的链接，最长500个字符。

 * @method void setAutoJumpUrl(string $AutoJumpUrl) 设置<font color="red">即将废弃</font>，入参请使用JumpEvents。
认证完成跳回的链接，最长500个字符。

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
<li><b>HONGKONG_AND_MACAO</b>  : 中国港澳居民来往内地通行证</li>
<li><b>HONGKONG_MACAO_AND_TAIWAN</b>  : 中国港澳台居民居住证(格式同中国大陆居民身份证)</li></ul>

 * @method void setAdminIdCardType(string $AdminIdCardType) 设置认证人证件类型， 支持以下类型
<ul><li><b>ID_CARD</b> : 中国大陆居民身份证  (默认值)</li>
<li><b>HONGKONG_AND_MACAO</b>  : 中国港澳居民来往内地通行证</li>
<li><b>HONGKONG_MACAO_AND_TAIWAN</b>  : 中国港澳台居民居住证(格式同中国大陆居民身份证)</li></ul>

 * @method boolean getUniformSocialCreditCodeSame() 获取对方打开链接认证时，对方填写的营业执照的社会信用代码是否与接口上传上来的要保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>
 * @method void setUniformSocialCreditCodeSame(boolean $UniformSocialCreditCodeSame) 设置对方打开链接认证时，对方填写的营业执照的社会信用代码是否与接口上传上来的要保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>
 * @method boolean getLegalNameSame() 获取对方打开链接认证时，法人姓名是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>

p.s. 仅在法人姓名不为空时有效
 * @method void setLegalNameSame(boolean $LegalNameSame) 设置对方打开链接认证时，法人姓名是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>

p.s. 仅在法人姓名不为空时有效
 * @method boolean getAdminNameSame() 获取对方打开链接认证时，认证人姓名是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>

p.s. 仅在认证人姓名不为空时有效
 * @method void setAdminNameSame(boolean $AdminNameSame) 设置对方打开链接认证时，认证人姓名是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>

p.s. 仅在认证人姓名不为空时有效
 * @method boolean getAdminIdCardNumberSame() 获取对方打开链接认证时，认证人居民身份证件号是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>

p.s. 仅在认证人身份证号不为空时有效

 * @method void setAdminIdCardNumberSame(boolean $AdminIdCardNumberSame) 设置对方打开链接认证时，认证人居民身份证件号是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>

p.s. 仅在认证人身份证号不为空时有效

 * @method boolean getAdminMobileSame() 获取对方打开链接认证时，认证人手机号是否要与接口传递上来的保持一致。<ul>
<li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li>
<li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li>
</ul>

p.s. 仅在认证人手机号不为空时有效
 * @method void setAdminMobileSame(boolean $AdminMobileSame) 设置对方打开链接认证时，认证人手机号是否要与接口传递上来的保持一致。<ul>
<li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li>
<li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li>
</ul>

p.s. 仅在认证人手机号不为空时有效
 * @method boolean getOrganizationNameSame() 获取对方打开链接认证时，企业名称是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>


p.s. 仅在企业名称不为空时有效
 * @method void setOrganizationNameSame(boolean $OrganizationNameSame) 设置对方打开链接认证时，企业名称是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>


p.s. 仅在企业名称不为空时有效
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

 * @method array getInitialization() 获取指定企业初始化引导，现在可以配置如下的选项：

<b>1</b>: 启用此选项后，在企业认证的最终步骤将添加创建印章的引导。如下图的位置
![image](https://qcloudimg.tencent-cloud.cn/raw/88e0b45095a5c589de8995462ad755dc.jpg)
 * @method void setInitialization(array $Initialization) 设置指定企业初始化引导，现在可以配置如下的选项：

<b>1</b>: 启用此选项后，在企业认证的最终步骤将添加创建印章的引导。如下图的位置
![image](https://qcloudimg.tencent-cloud.cn/raw/88e0b45095a5c589de8995462ad755dc.jpg)
 * @method array getPowerOfAttorneys() 获取授权书(PNG或JPG或PDF) base64格式, 大小不超过8M 。 
授权书可以通过接口[生成企业授权书](https://qian.tencent.com/developers/companyApis/organizations/CreateOrganizationAuthFile) 来获得。
p.s. 如果上传授权书 ，需遵循以下条件 
1.  超管的信息（超管姓名，超管手机号）必须为必填参数。
2.  认证方式AuthorizationTypes必须只能是上传授权书方式 
 * @method void setPowerOfAttorneys(array $PowerOfAttorneys) 设置授权书(PNG或JPG或PDF) base64格式, 大小不超过8M 。 
授权书可以通过接口[生成企业授权书](https://qian.tencent.com/developers/companyApis/organizations/CreateOrganizationAuthFile) 来获得。
p.s. 如果上传授权书 ，需遵循以下条件 
1.  超管的信息（超管姓名，超管手机号）必须为必填参数。
2.  认证方式AuthorizationTypes必须只能是上传授权书方式 
 * @method string getUserData() 获取调用方自定义的个性化字段(可自定义此名称)，并以base64方式编码，支持的最大数据大小为 4096长度。

在. 企业引导企业实名认证后回调中，该字段的信息将原封不动地透传给贵方。回调的相关说明可参考开发者中心的<a href="https://qian.tencent.com/developers/company/callback_types_staffs" target="_blank">回调通知</a>模块。
 * @method void setUserData(string $UserData) 设置调用方自定义的个性化字段(可自定义此名称)，并以base64方式编码，支持的最大数据大小为 4096长度。

在. 企业引导企业实名认证后回调中，该字段的信息将原封不动地透传给贵方。回调的相关说明可参考开发者中心的<a href="https://qian.tencent.com/developers/company/callback_types_staffs" target="_blank">回调通知</a>模块。
 * @method string getBankAccountNumber() 获取组织机构对公打款账号，账户名跟企业名称一致。

p.s.
只有认证方式是授权书+对公打款时才生效。
 * @method void setBankAccountNumber(string $BankAccountNumber) 设置组织机构对公打款账号，账户名跟企业名称一致。

p.s.
只有认证方式是授权书+对公打款时才生效。
 * @method boolean getBankAccountNumberSame() 获取对方打开链接认证时，对公打款账号是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>


p.s. 仅在对公打款不为空时有效
 * @method void setBankAccountNumberSame(boolean $BankAccountNumberSame) 设置对方打开链接认证时，对公打款账号是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>


p.s. 仅在对公打款不为空时有效
 * @method array getJumpEvents() 获取跳转事件，其中包括认证期间收录，授权书审核，企业认证的回跳事件。
p.s.
Endpoint如果是APP 类型，请传递JumpUrl为<font color="red">"true" </font>
如果 Endpoint 是 H5 类型，请参考文档跳转电子签H5 

p.s. 如果Endpoint是 APP，传递的跳转地址无效，不会进行跳转，仅会进行回跳。
 * @method void setJumpEvents(array $JumpEvents) 设置跳转事件，其中包括认证期间收录，授权书审核，企业认证的回跳事件。
p.s.
Endpoint如果是APP 类型，请传递JumpUrl为<font color="red">"true" </font>
如果 Endpoint 是 H5 类型，请参考文档跳转电子签H5 

p.s. 如果Endpoint是 APP，传递的跳转地址无效，不会进行跳转，仅会进行回跳。
 * @method string getOrganizationIdCardType() 获取企业证照类型：<ul><li> **USCC** :(默认)工商组织营业执照</li><li> **PRACTICELICENSEOFMEDICALINSTITUTION** :医疗机构执业许可证</li><li> **CLINICFILLINGCERTIFICATE** :诊所备案证</li></ul>

注意 ：
如果企业证照类型是医疗机构执业许可证或者诊所备案证，则参数设置企业授权方式(AuthorizationTypes)和企业认证方式(AuthorizationMethods)都无效.
医疗机构执业许可证和诊所备案证的企业授权方式  仅有授权书的方式。企业认证仅有上传营业执照的方式。
 * @method void setOrganizationIdCardType(string $OrganizationIdCardType) 设置企业证照类型：<ul><li> **USCC** :(默认)工商组织营业执照</li><li> **PRACTICELICENSEOFMEDICALINSTITUTION** :医疗机构执业许可证</li><li> **CLINICFILLINGCERTIFICATE** :诊所备案证</li></ul>

注意 ：
如果企业证照类型是医疗机构执业许可证或者诊所备案证，则参数设置企业授权方式(AuthorizationTypes)和企业认证方式(AuthorizationMethods)都无效.
医疗机构执业许可证和诊所备案证的企业授权方式  仅有授权书的方式。企业认证仅有上传营业执照的方式。
 * @method boolean getOrganizationIdCardTypeSame() 获取是否允许编辑企业注册时的证照类型

true:不允许编辑。

false:允许编辑（默认值）。


注意：
入参中的OrganizationIdCardType值不为空的时候，才可设置为不可编辑。
 * @method void setOrganizationIdCardTypeSame(boolean $OrganizationIdCardTypeSame) 设置是否允许编辑企业注册时的证照类型

true:不允许编辑。

false:允许编辑（默认值）。


注意：
入参中的OrganizationIdCardType值不为空的时候，才可设置为不可编辑。
 * @method array getAuthorizationMethod() 获取指定企业认证的授权方式 支持多选:

<ul>
<li><strong>1</strong>: 上传营业执照</li>
<li><strong>2</strong>: 腾讯云快速认证</li>
<li><strong>3</strong>: 腾讯商户号授权<font color="red">（仅支持小程序端）</font></li>
</ul>

注意：
1.如果没有指定，则默认是1,仅有上传营业执照。
2.H5 仅支持上传营业执照。
 * @method void setAuthorizationMethod(array $AuthorizationMethod) 设置指定企业认证的授权方式 支持多选:

<ul>
<li><strong>1</strong>: 上传营业执照</li>
<li><strong>2</strong>: 腾讯云快速认证</li>
<li><strong>3</strong>: 腾讯商户号授权<font color="red">（仅支持小程序端）</font></li>
</ul>

注意：
1.如果没有指定，则默认是1,仅有上传营业执照。
2.H5 仅支持上传营业执照。
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
<li><strong>2</strong>: 法人授权方式</li>
<li><strong>5</strong>: 授权书+对公打款方式</li>
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
     * @var string <font color="red">即将废弃</font>，入参请使用JumpEvents。
认证完成跳回的链接，最长500个字符。

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
<li><b>HONGKONG_AND_MACAO</b>  : 中国港澳居民来往内地通行证</li>
<li><b>HONGKONG_MACAO_AND_TAIWAN</b>  : 中国港澳台居民居住证(格式同中国大陆居民身份证)</li></ul>

     */
    public $AdminIdCardType;

    /**
     * @var boolean 对方打开链接认证时，对方填写的营业执照的社会信用代码是否与接口上传上来的要保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>
     */
    public $UniformSocialCreditCodeSame;

    /**
     * @var boolean 对方打开链接认证时，法人姓名是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>

p.s. 仅在法人姓名不为空时有效
     */
    public $LegalNameSame;

    /**
     * @var boolean 对方打开链接认证时，认证人姓名是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>

p.s. 仅在认证人姓名不为空时有效
     */
    public $AdminNameSame;

    /**
     * @var boolean 对方打开链接认证时，认证人居民身份证件号是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>

p.s. 仅在认证人身份证号不为空时有效

     */
    public $AdminIdCardNumberSame;

    /**
     * @var boolean 对方打开链接认证时，认证人手机号是否要与接口传递上来的保持一致。<ul>
<li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li>
<li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li>
</ul>

p.s. 仅在认证人手机号不为空时有效
     */
    public $AdminMobileSame;

    /**
     * @var boolean 对方打开链接认证时，企业名称是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>


p.s. 仅在企业名称不为空时有效
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
     * @var array 指定企业初始化引导，现在可以配置如下的选项：

<b>1</b>: 启用此选项后，在企业认证的最终步骤将添加创建印章的引导。如下图的位置
![image](https://qcloudimg.tencent-cloud.cn/raw/88e0b45095a5c589de8995462ad755dc.jpg)
     */
    public $Initialization;

    /**
     * @var array 授权书(PNG或JPG或PDF) base64格式, 大小不超过8M 。 
授权书可以通过接口[生成企业授权书](https://qian.tencent.com/developers/companyApis/organizations/CreateOrganizationAuthFile) 来获得。
p.s. 如果上传授权书 ，需遵循以下条件 
1.  超管的信息（超管姓名，超管手机号）必须为必填参数。
2.  认证方式AuthorizationTypes必须只能是上传授权书方式 
     */
    public $PowerOfAttorneys;

    /**
     * @var string 调用方自定义的个性化字段(可自定义此名称)，并以base64方式编码，支持的最大数据大小为 4096长度。

在. 企业引导企业实名认证后回调中，该字段的信息将原封不动地透传给贵方。回调的相关说明可参考开发者中心的<a href="https://qian.tencent.com/developers/company/callback_types_staffs" target="_blank">回调通知</a>模块。
     */
    public $UserData;

    /**
     * @var string 组织机构对公打款账号，账户名跟企业名称一致。

p.s.
只有认证方式是授权书+对公打款时才生效。
     */
    public $BankAccountNumber;

    /**
     * @var boolean 对方打开链接认证时，对公打款账号是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>


p.s. 仅在对公打款不为空时有效
     */
    public $BankAccountNumberSame;

    /**
     * @var array 跳转事件，其中包括认证期间收录，授权书审核，企业认证的回跳事件。
p.s.
Endpoint如果是APP 类型，请传递JumpUrl为<font color="red">"true" </font>
如果 Endpoint 是 H5 类型，请参考文档跳转电子签H5 

p.s. 如果Endpoint是 APP，传递的跳转地址无效，不会进行跳转，仅会进行回跳。
     */
    public $JumpEvents;

    /**
     * @var string 企业证照类型：<ul><li> **USCC** :(默认)工商组织营业执照</li><li> **PRACTICELICENSEOFMEDICALINSTITUTION** :医疗机构执业许可证</li><li> **CLINICFILLINGCERTIFICATE** :诊所备案证</li></ul>

注意 ：
如果企业证照类型是医疗机构执业许可证或者诊所备案证，则参数设置企业授权方式(AuthorizationTypes)和企业认证方式(AuthorizationMethods)都无效.
医疗机构执业许可证和诊所备案证的企业授权方式  仅有授权书的方式。企业认证仅有上传营业执照的方式。
     */
    public $OrganizationIdCardType;

    /**
     * @var boolean 是否允许编辑企业注册时的证照类型

true:不允许编辑。

false:允许编辑（默认值）。


注意：
入参中的OrganizationIdCardType值不为空的时候，才可设置为不可编辑。
     */
    public $OrganizationIdCardTypeSame;

    /**
     * @var array 指定企业认证的授权方式 支持多选:

<ul>
<li><strong>1</strong>: 上传营业执照</li>
<li><strong>2</strong>: 腾讯云快速认证</li>
<li><strong>3</strong>: 腾讯商户号授权<font color="red">（仅支持小程序端）</font></li>
</ul>

注意：
1.如果没有指定，则默认是1,仅有上传营业执照。
2.H5 仅支持上传营业执照。
     */
    public $AuthorizationMethod;

    /**
     * @param UserInfo $Operator 操作人信息
     * @param array $AuthorizationTypes 指定授权方式 支持多选:

<ul>
<li><strong>2</strong>: 法人授权方式</li>
<li><strong>5</strong>: 授权书+对公打款方式</li>
</ul>
     * @param string $OrganizationName 认证企业名称，请确认该名称与企业营业执照中注册的名称一致。

注：

1. `如果名称中包含英文括号()，请使用中文括号（）代替。`

2. `EndPointType=“H5”或者"SHORT_H5"时，该参数必填`

     * @param string $UniformSocialCreditCode 企业统一社会信用代码
     * @param string $LegalName 企业法人的姓名
     * @param string $AutoJumpUrl <font color="red">即将废弃</font>，入参请使用JumpEvents。
认证完成跳回的链接，最长500个字符。

     * @param string $OrganizationAddress 营业执照企业地址
     * @param string $AdminName 认证人姓名
     * @param string $AdminMobile 认证人手机号
     * @param string $AdminIdCardNumber 认证人身份证号
     * @param string $AdminIdCardType 认证人证件类型， 支持以下类型
<ul><li><b>ID_CARD</b> : 中国大陆居民身份证  (默认值)</li>
<li><b>HONGKONG_AND_MACAO</b>  : 中国港澳居民来往内地通行证</li>
<li><b>HONGKONG_MACAO_AND_TAIWAN</b>  : 中国港澳台居民居住证(格式同中国大陆居民身份证)</li></ul>

     * @param boolean $UniformSocialCreditCodeSame 对方打开链接认证时，对方填写的营业执照的社会信用代码是否与接口上传上来的要保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>
     * @param boolean $LegalNameSame 对方打开链接认证时，法人姓名是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>

p.s. 仅在法人姓名不为空时有效
     * @param boolean $AdminNameSame 对方打开链接认证时，认证人姓名是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>

p.s. 仅在认证人姓名不为空时有效
     * @param boolean $AdminIdCardNumberSame 对方打开链接认证时，认证人居民身份证件号是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>

p.s. 仅在认证人身份证号不为空时有效

     * @param boolean $AdminMobileSame 对方打开链接认证时，认证人手机号是否要与接口传递上来的保持一致。<ul>
<li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li>
<li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li>
</ul>

p.s. 仅在认证人手机号不为空时有效
     * @param boolean $OrganizationNameSame 对方打开链接认证时，企业名称是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>


p.s. 仅在企业名称不为空时有效
     * @param string $BusinessLicense 营业执照正面照（支持PNG或JPG格式）需以base64格式提供，且文件大小不得超过5MB。
     * @param string $Endpoint 跳转链接类型：

<ul>
<li><b>PC</b>：适用于PC端的认证链接</li>
<li><b>APP</b>：用于全屏或半屏跳转的小程序链接</li>
<li><b>SHORT_URL</b>：跳转小程序的链接的短链形式</li>
<li><b>H5</b>：适用于H5页面的认证链接</li>
<li><b>SHORT_H5</b>：H5认证链接的短链形式</li>
</ul>

     * @param array $Initialization 指定企业初始化引导，现在可以配置如下的选项：

<b>1</b>: 启用此选项后，在企业认证的最终步骤将添加创建印章的引导。如下图的位置
![image](https://qcloudimg.tencent-cloud.cn/raw/88e0b45095a5c589de8995462ad755dc.jpg)
     * @param array $PowerOfAttorneys 授权书(PNG或JPG或PDF) base64格式, 大小不超过8M 。 
授权书可以通过接口[生成企业授权书](https://qian.tencent.com/developers/companyApis/organizations/CreateOrganizationAuthFile) 来获得。
p.s. 如果上传授权书 ，需遵循以下条件 
1.  超管的信息（超管姓名，超管手机号）必须为必填参数。
2.  认证方式AuthorizationTypes必须只能是上传授权书方式 
     * @param string $UserData 调用方自定义的个性化字段(可自定义此名称)，并以base64方式编码，支持的最大数据大小为 4096长度。

在. 企业引导企业实名认证后回调中，该字段的信息将原封不动地透传给贵方。回调的相关说明可参考开发者中心的<a href="https://qian.tencent.com/developers/company/callback_types_staffs" target="_blank">回调通知</a>模块。
     * @param string $BankAccountNumber 组织机构对公打款账号，账户名跟企业名称一致。

p.s.
只有认证方式是授权书+对公打款时才生效。
     * @param boolean $BankAccountNumberSame 对方打开链接认证时，对公打款账号是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>


p.s. 仅在对公打款不为空时有效
     * @param array $JumpEvents 跳转事件，其中包括认证期间收录，授权书审核，企业认证的回跳事件。
p.s.
Endpoint如果是APP 类型，请传递JumpUrl为<font color="red">"true" </font>
如果 Endpoint 是 H5 类型，请参考文档跳转电子签H5 

p.s. 如果Endpoint是 APP，传递的跳转地址无效，不会进行跳转，仅会进行回跳。
     * @param string $OrganizationIdCardType 企业证照类型：<ul><li> **USCC** :(默认)工商组织营业执照</li><li> **PRACTICELICENSEOFMEDICALINSTITUTION** :医疗机构执业许可证</li><li> **CLINICFILLINGCERTIFICATE** :诊所备案证</li></ul>

注意 ：
如果企业证照类型是医疗机构执业许可证或者诊所备案证，则参数设置企业授权方式(AuthorizationTypes)和企业认证方式(AuthorizationMethods)都无效.
医疗机构执业许可证和诊所备案证的企业授权方式  仅有授权书的方式。企业认证仅有上传营业执照的方式。
     * @param boolean $OrganizationIdCardTypeSame 是否允许编辑企业注册时的证照类型

true:不允许编辑。

false:允许编辑（默认值）。


注意：
入参中的OrganizationIdCardType值不为空的时候，才可设置为不可编辑。
     * @param array $AuthorizationMethod 指定企业认证的授权方式 支持多选:

<ul>
<li><strong>1</strong>: 上传营业执照</li>
<li><strong>2</strong>: 腾讯云快速认证</li>
<li><strong>3</strong>: 腾讯商户号授权<font color="red">（仅支持小程序端）</font></li>
</ul>

注意：
1.如果没有指定，则默认是1,仅有上传营业执照。
2.H5 仅支持上传营业执照。
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

        if (array_key_exists("Initialization",$param) and $param["Initialization"] !== null) {
            $this->Initialization = $param["Initialization"];
        }

        if (array_key_exists("PowerOfAttorneys",$param) and $param["PowerOfAttorneys"] !== null) {
            $this->PowerOfAttorneys = $param["PowerOfAttorneys"];
        }

        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
        }

        if (array_key_exists("BankAccountNumber",$param) and $param["BankAccountNumber"] !== null) {
            $this->BankAccountNumber = $param["BankAccountNumber"];
        }

        if (array_key_exists("BankAccountNumberSame",$param) and $param["BankAccountNumberSame"] !== null) {
            $this->BankAccountNumberSame = $param["BankAccountNumberSame"];
        }

        if (array_key_exists("JumpEvents",$param) and $param["JumpEvents"] !== null) {
            $this->JumpEvents = [];
            foreach ($param["JumpEvents"] as $key => $value){
                $obj = new JumpEvent();
                $obj->deserialize($value);
                array_push($this->JumpEvents, $obj);
            }
        }

        if (array_key_exists("OrganizationIdCardType",$param) and $param["OrganizationIdCardType"] !== null) {
            $this->OrganizationIdCardType = $param["OrganizationIdCardType"];
        }

        if (array_key_exists("OrganizationIdCardTypeSame",$param) and $param["OrganizationIdCardTypeSame"] !== null) {
            $this->OrganizationIdCardTypeSame = $param["OrganizationIdCardTypeSame"];
        }

        if (array_key_exists("AuthorizationMethod",$param) and $param["AuthorizationMethod"] !== null) {
            $this->AuthorizationMethod = $param["AuthorizationMethod"];
        }
    }
}
