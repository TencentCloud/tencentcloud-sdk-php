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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 企业认证信息参数， 需要保证这些参数跟营业执照中的信息一致。
 *
 * @method string getOrganizationName() 获取组织机构名称。
请确认该名称与企业营业执照中注册的名称一致。
如果名称中包含英文括号()，请使用中文括号（）代替。
 * @method void setOrganizationName(string $OrganizationName) 设置组织机构名称。
请确认该名称与企业营业执照中注册的名称一致。
如果名称中包含英文括号()，请使用中文括号（）代替。
 * @method string getOrganizationOpenId() 获取机构在贵司业务系统中的唯一标识，用于与腾讯电子签企业账号进行映射，确保在同一应用内不会出现重复。
该标识最大长度为64位字符串，仅支持包含26个英文字母和数字0-9的字符。
 * @method void setOrganizationOpenId(string $OrganizationOpenId) 设置机构在贵司业务系统中的唯一标识，用于与腾讯电子签企业账号进行映射，确保在同一应用内不会出现重复。
该标识最大长度为64位字符串，仅支持包含26个英文字母和数字0-9的字符。
 * @method string getOpenId() 获取员工在贵司业务系统中的唯一身份标识，用于与腾讯电子签账号进行映射，确保在同一应用内不会出现重复。
该标识最大长度为64位字符串，仅支持包含26个英文字母和数字0-9的字符。
 * @method void setOpenId(string $OpenId) 设置员工在贵司业务系统中的唯一身份标识，用于与腾讯电子签账号进行映射，确保在同一应用内不会出现重复。
该标识最大长度为64位字符串，仅支持包含26个英文字母和数字0-9的字符。
 * @method string getUniformSocialCreditCode() 获取组织机构企业统一社会信用代码。
请确认该企业统一社会信用代码与企业营业执照中注册的统一社会信用代码一致。
 * @method void setUniformSocialCreditCode(string $UniformSocialCreditCode) 设置组织机构企业统一社会信用代码。
请确认该企业统一社会信用代码与企业营业执照中注册的统一社会信用代码一致。
 * @method string getLegalName() 获取组织机构法人的姓名。
请确认该企业统一社会信用代码与企业营业执照中注册的法人姓名一致。
 * @method void setLegalName(string $LegalName) 设置组织机构法人的姓名。
请确认该企业统一社会信用代码与企业营业执照中注册的法人姓名一致。
 * @method string getAddress() 获取组织机构企业注册地址。
请确认该企业注册地址与企业营业执照中注册的地址一致。
 * @method void setAddress(string $Address) 设置组织机构企业注册地址。
请确认该企业注册地址与企业营业执照中注册的地址一致。
 * @method string getAdminName() 获取组织机构超管姓名。
在注册流程中，必须是超管本人进行操作。
如果法人作为超管管理组织机构,超管姓名就是法人姓名
 * @method void setAdminName(string $AdminName) 设置组织机构超管姓名。
在注册流程中，必须是超管本人进行操作。
如果法人作为超管管理组织机构,超管姓名就是法人姓名
 * @method string getAdminMobile() 获取组织机构超管手机号。
在注册流程中，这个手机号必须跟操作人在电子签注册的个人手机号一致。
 * @method void setAdminMobile(string $AdminMobile) 设置组织机构超管手机号。
在注册流程中，这个手机号必须跟操作人在电子签注册的个人手机号一致。
 * @method array getAuthorizationTypes() 获取可选的此企业允许的授权方式, 可以设置的方式有:
1：上传授权书
2：法人授权超管
5：授权书+对公打款


注:
`1. 当前仅支持一种认证方式`
`2. 如果当前的企业类型是政府/事业单位, 则只支持上传授权书+对公打款`
`3. 如果当前操作人是法人,则是法人认证`
 * @method void setAuthorizationTypes(array $AuthorizationTypes) 设置可选的此企业允许的授权方式, 可以设置的方式有:
1：上传授权书
2：法人授权超管
5：授权书+对公打款


注:
`1. 当前仅支持一种认证方式`
`2. 如果当前的企业类型是政府/事业单位, 则只支持上传授权书+对公打款`
`3. 如果当前操作人是法人,则是法人认证`
 * @method string getAdminIdCardType() 获取经办人的证件类型，支持以下类型
<ul><li>ID_CARD : 中国大陆居民身份证  (默认值)</li>
<li>HONGKONG_AND_MACAO : 中国港澳居民来往内地通行证</li>
<li>HONGKONG_MACAO_AND_TAIWAN : 中国港澳台居民居住证(格式同中国大陆居民身份证)</li></ul>

 * @method void setAdminIdCardType(string $AdminIdCardType) 设置经办人的证件类型，支持以下类型
<ul><li>ID_CARD : 中国大陆居民身份证  (默认值)</li>
<li>HONGKONG_AND_MACAO : 中国港澳居民来往内地通行证</li>
<li>HONGKONG_MACAO_AND_TAIWAN : 中国港澳台居民居住证(格式同中国大陆居民身份证)</li></ul>

 * @method string getAdminIdCardNumber() 获取经办人的证件号
 * @method void setAdminIdCardNumber(string $AdminIdCardNumber) 设置经办人的证件号
 * @method string getBusinessLicense() 获取营业执照正面照(PNG或JPG) base64格式, 大小不超过5M
 * @method void setBusinessLicense(string $BusinessLicense) 设置营业执照正面照(PNG或JPG) base64格式, 大小不超过5M
 * @method array getPowerOfAttorneys() 获取授权书(PNG或JPG或PDF) base64格式, 大小不超过8M 。
p.s. 如果上传授权书 ，需遵循以下条件
1. 超管的信息（超管姓名，超管身份证，超管手机号）必须为必填参数。
2. 超管的个人身份必须在电子签已经实名。
2. 认证方式AuthorizationTypes必须只能是上传授权书方式 

 * @method void setPowerOfAttorneys(array $PowerOfAttorneys) 设置授权书(PNG或JPG或PDF) base64格式, 大小不超过8M 。
p.s. 如果上传授权书 ，需遵循以下条件
1. 超管的信息（超管姓名，超管身份证，超管手机号）必须为必填参数。
2. 超管的个人身份必须在电子签已经实名。
2. 认证方式AuthorizationTypes必须只能是上传授权书方式 

 * @method string getAutoJumpUrl() 获取认证完之后的H5页面的跳转链接，最大长度1000个字符。链接类型请参考 [跳转电子签H5](https://qian.tencent.com/developers/company/openqianh5/)
 * @method void setAutoJumpUrl(string $AutoJumpUrl) 设置认证完之后的H5页面的跳转链接，最大长度1000个字符。链接类型请参考 [跳转电子签H5](https://qian.tencent.com/developers/company/openqianh5/)
 */
class RegistrationOrganizationInfo extends AbstractModel
{
    /**
     * @var string 组织机构名称。
请确认该名称与企业营业执照中注册的名称一致。
如果名称中包含英文括号()，请使用中文括号（）代替。
     */
    public $OrganizationName;

    /**
     * @var string 机构在贵司业务系统中的唯一标识，用于与腾讯电子签企业账号进行映射，确保在同一应用内不会出现重复。
该标识最大长度为64位字符串，仅支持包含26个英文字母和数字0-9的字符。
     */
    public $OrganizationOpenId;

    /**
     * @var string 员工在贵司业务系统中的唯一身份标识，用于与腾讯电子签账号进行映射，确保在同一应用内不会出现重复。
该标识最大长度为64位字符串，仅支持包含26个英文字母和数字0-9的字符。
     */
    public $OpenId;

    /**
     * @var string 组织机构企业统一社会信用代码。
请确认该企业统一社会信用代码与企业营业执照中注册的统一社会信用代码一致。
     */
    public $UniformSocialCreditCode;

    /**
     * @var string 组织机构法人的姓名。
请确认该企业统一社会信用代码与企业营业执照中注册的法人姓名一致。
     */
    public $LegalName;

    /**
     * @var string 组织机构企业注册地址。
请确认该企业注册地址与企业营业执照中注册的地址一致。
     */
    public $Address;

    /**
     * @var string 组织机构超管姓名。
在注册流程中，必须是超管本人进行操作。
如果法人作为超管管理组织机构,超管姓名就是法人姓名
     */
    public $AdminName;

    /**
     * @var string 组织机构超管手机号。
在注册流程中，这个手机号必须跟操作人在电子签注册的个人手机号一致。
     */
    public $AdminMobile;

    /**
     * @var array 可选的此企业允许的授权方式, 可以设置的方式有:
1：上传授权书
2：法人授权超管
5：授权书+对公打款


注:
`1. 当前仅支持一种认证方式`
`2. 如果当前的企业类型是政府/事业单位, 则只支持上传授权书+对公打款`
`3. 如果当前操作人是法人,则是法人认证`
     */
    public $AuthorizationTypes;

    /**
     * @var string 经办人的证件类型，支持以下类型
<ul><li>ID_CARD : 中国大陆居民身份证  (默认值)</li>
<li>HONGKONG_AND_MACAO : 中国港澳居民来往内地通行证</li>
<li>HONGKONG_MACAO_AND_TAIWAN : 中国港澳台居民居住证(格式同中国大陆居民身份证)</li></ul>

     */
    public $AdminIdCardType;

    /**
     * @var string 经办人的证件号
     */
    public $AdminIdCardNumber;

    /**
     * @var string 营业执照正面照(PNG或JPG) base64格式, 大小不超过5M
     */
    public $BusinessLicense;

    /**
     * @var array 授权书(PNG或JPG或PDF) base64格式, 大小不超过8M 。
p.s. 如果上传授权书 ，需遵循以下条件
1. 超管的信息（超管姓名，超管身份证，超管手机号）必须为必填参数。
2. 超管的个人身份必须在电子签已经实名。
2. 认证方式AuthorizationTypes必须只能是上传授权书方式 

     */
    public $PowerOfAttorneys;

    /**
     * @var string 认证完之后的H5页面的跳转链接，最大长度1000个字符。链接类型请参考 [跳转电子签H5](https://qian.tencent.com/developers/company/openqianh5/)
     */
    public $AutoJumpUrl;

    /**
     * @param string $OrganizationName 组织机构名称。
请确认该名称与企业营业执照中注册的名称一致。
如果名称中包含英文括号()，请使用中文括号（）代替。
     * @param string $OrganizationOpenId 机构在贵司业务系统中的唯一标识，用于与腾讯电子签企业账号进行映射，确保在同一应用内不会出现重复。
该标识最大长度为64位字符串，仅支持包含26个英文字母和数字0-9的字符。
     * @param string $OpenId 员工在贵司业务系统中的唯一身份标识，用于与腾讯电子签账号进行映射，确保在同一应用内不会出现重复。
该标识最大长度为64位字符串，仅支持包含26个英文字母和数字0-9的字符。
     * @param string $UniformSocialCreditCode 组织机构企业统一社会信用代码。
请确认该企业统一社会信用代码与企业营业执照中注册的统一社会信用代码一致。
     * @param string $LegalName 组织机构法人的姓名。
请确认该企业统一社会信用代码与企业营业执照中注册的法人姓名一致。
     * @param string $Address 组织机构企业注册地址。
请确认该企业注册地址与企业营业执照中注册的地址一致。
     * @param string $AdminName 组织机构超管姓名。
在注册流程中，必须是超管本人进行操作。
如果法人作为超管管理组织机构,超管姓名就是法人姓名
     * @param string $AdminMobile 组织机构超管手机号。
在注册流程中，这个手机号必须跟操作人在电子签注册的个人手机号一致。
     * @param array $AuthorizationTypes 可选的此企业允许的授权方式, 可以设置的方式有:
1：上传授权书
2：法人授权超管
5：授权书+对公打款


注:
`1. 当前仅支持一种认证方式`
`2. 如果当前的企业类型是政府/事业单位, 则只支持上传授权书+对公打款`
`3. 如果当前操作人是法人,则是法人认证`
     * @param string $AdminIdCardType 经办人的证件类型，支持以下类型
<ul><li>ID_CARD : 中国大陆居民身份证  (默认值)</li>
<li>HONGKONG_AND_MACAO : 中国港澳居民来往内地通行证</li>
<li>HONGKONG_MACAO_AND_TAIWAN : 中国港澳台居民居住证(格式同中国大陆居民身份证)</li></ul>

     * @param string $AdminIdCardNumber 经办人的证件号
     * @param string $BusinessLicense 营业执照正面照(PNG或JPG) base64格式, 大小不超过5M
     * @param array $PowerOfAttorneys 授权书(PNG或JPG或PDF) base64格式, 大小不超过8M 。
p.s. 如果上传授权书 ，需遵循以下条件
1. 超管的信息（超管姓名，超管身份证，超管手机号）必须为必填参数。
2. 超管的个人身份必须在电子签已经实名。
2. 认证方式AuthorizationTypes必须只能是上传授权书方式 

     * @param string $AutoJumpUrl 认证完之后的H5页面的跳转链接，最大长度1000个字符。链接类型请参考 [跳转电子签H5](https://qian.tencent.com/developers/company/openqianh5/)
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
        if (array_key_exists("OrganizationName",$param) and $param["OrganizationName"] !== null) {
            $this->OrganizationName = $param["OrganizationName"];
        }

        if (array_key_exists("OrganizationOpenId",$param) and $param["OrganizationOpenId"] !== null) {
            $this->OrganizationOpenId = $param["OrganizationOpenId"];
        }

        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }

        if (array_key_exists("UniformSocialCreditCode",$param) and $param["UniformSocialCreditCode"] !== null) {
            $this->UniformSocialCreditCode = $param["UniformSocialCreditCode"];
        }

        if (array_key_exists("LegalName",$param) and $param["LegalName"] !== null) {
            $this->LegalName = $param["LegalName"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("AdminName",$param) and $param["AdminName"] !== null) {
            $this->AdminName = $param["AdminName"];
        }

        if (array_key_exists("AdminMobile",$param) and $param["AdminMobile"] !== null) {
            $this->AdminMobile = $param["AdminMobile"];
        }

        if (array_key_exists("AuthorizationTypes",$param) and $param["AuthorizationTypes"] !== null) {
            $this->AuthorizationTypes = $param["AuthorizationTypes"];
        }

        if (array_key_exists("AdminIdCardType",$param) and $param["AdminIdCardType"] !== null) {
            $this->AdminIdCardType = $param["AdminIdCardType"];
        }

        if (array_key_exists("AdminIdCardNumber",$param) and $param["AdminIdCardNumber"] !== null) {
            $this->AdminIdCardNumber = $param["AdminIdCardNumber"];
        }

        if (array_key_exists("BusinessLicense",$param) and $param["BusinessLicense"] !== null) {
            $this->BusinessLicense = $param["BusinessLicense"];
        }

        if (array_key_exists("PowerOfAttorneys",$param) and $param["PowerOfAttorneys"] !== null) {
            $this->PowerOfAttorneys = $param["PowerOfAttorneys"];
        }

        if (array_key_exists("AutoJumpUrl",$param) and $param["AutoJumpUrl"] !== null) {
            $this->AutoJumpUrl = $param["AutoJumpUrl"];
        }
    }
}
