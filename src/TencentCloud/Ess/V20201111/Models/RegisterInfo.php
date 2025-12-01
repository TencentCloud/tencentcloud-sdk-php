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
 * 创建合同，若对方签署人的企业信息还未在腾讯电子签注册。则在进行引导企业注册时控制企业填写的信息。
具体可查看[视频](https://qian.tencent.com/developers/video/?menu=scene&id=6)
 *
 * @method string getLegalName() 获取法人姓名
 * @method void setLegalName(string $LegalName) 设置法人姓名
 * @method string getUscc() 获取社会统一信用代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUscc(string $Uscc) 设置社会统一信用代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUnifiedSocialCreditCode() 获取社会统一信用代码
 * @method void setUnifiedSocialCreditCode(string $UnifiedSocialCreditCode) 设置社会统一信用代码
 * @method string getOrganizationAddress() 获取组织机构企业注册地址。 请确认该企业注册地址与企业营业执照中注册的地址一致。
 * @method void setOrganizationAddress(string $OrganizationAddress) 设置组织机构企业注册地址。 请确认该企业注册地址与企业营业执照中注册的地址一致。
 * @method array getAuthorizationTypes() 获取指定企业认证的授权方式 支持多选:

<ul>
<li><strong>2</strong>: 法人授权方式</li>
<li><strong>5</strong>: 授权书+对公打款方式</li>
</ul>
 * @method void setAuthorizationTypes(array $AuthorizationTypes) 设置指定企业认证的授权方式 支持多选:

<ul>
<li><strong>2</strong>: 法人授权方式</li>
<li><strong>5</strong>: 授权书+对公打款方式</li>
</ul>
 * @method integer getAuthorizationType() 获取指定企业认证的授权方式:

<ul>
<li><strong>2</strong>: 法人授权方式</li>
<li><strong>5</strong>: 授权书+对公打款方式</li>
</ul>
 * @method void setAuthorizationType(integer $AuthorizationType) 设置指定企业认证的授权方式:

<ul>
<li><strong>2</strong>: 法人授权方式</li>
<li><strong>5</strong>: 授权书+对公打款方式</li>
</ul>
 * @method array getAuthorizationMethods() 获取指定企业认证的授权方式 支持多选:

<ul>
<li><strong>1</strong>: 上传营业执照</li>
<li><strong>2</strong>: 腾讯云快速认证</li>
<li><strong>3</strong>: 腾讯商户号授权<font color="red">（仅支持小程序端）</font></li>
</ul>
 * @method void setAuthorizationMethods(array $AuthorizationMethods) 设置指定企业认证的授权方式 支持多选:

<ul>
<li><strong>1</strong>: 上传营业执照</li>
<li><strong>2</strong>: 腾讯云快速认证</li>
<li><strong>3</strong>: 腾讯商户号授权<font color="red">（仅支持小程序端）</font></li>
</ul>
 * @method string getOrganizationIdCardType() 获取企业证照类型：

USCC :(默认)工商组织营业执照
PRACTICELICENSEOFMEDICALINSTITUTION :医疗机构执业许可证
 * @method void setOrganizationIdCardType(string $OrganizationIdCardType) 设置企业证照类型：

USCC :(默认)工商组织营业执照
PRACTICELICENSEOFMEDICALINSTITUTION :医疗机构执业许可证
 * @method RegisterInfoOption getRegisterInfoOption() 获取企业创建时候的个性化参数。
其中，包括一下内容：
LegalNameSame  是否可以编辑法人。
UnifiedSocialCreditCodeSame  是否可以编辑证件号码。
OrganizationIdCardTypeSame  是否可以更改证照类型。
 * @method void setRegisterInfoOption(RegisterInfoOption $RegisterInfoOption) 设置企业创建时候的个性化参数。
其中，包括一下内容：
LegalNameSame  是否可以编辑法人。
UnifiedSocialCreditCodeSame  是否可以编辑证件号码。
OrganizationIdCardTypeSame  是否可以更改证照类型。
 */
class RegisterInfo extends AbstractModel
{
    /**
     * @var string 法人姓名
     */
    public $LegalName;

    /**
     * @var string 社会统一信用代码
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $Uscc;

    /**
     * @var string 社会统一信用代码
     */
    public $UnifiedSocialCreditCode;

    /**
     * @var string 组织机构企业注册地址。 请确认该企业注册地址与企业营业执照中注册的地址一致。
     */
    public $OrganizationAddress;

    /**
     * @var array 指定企业认证的授权方式 支持多选:

<ul>
<li><strong>2</strong>: 法人授权方式</li>
<li><strong>5</strong>: 授权书+对公打款方式</li>
</ul>
     */
    public $AuthorizationTypes;

    /**
     * @var integer 指定企业认证的授权方式:

<ul>
<li><strong>2</strong>: 法人授权方式</li>
<li><strong>5</strong>: 授权书+对公打款方式</li>
</ul>
     * @deprecated
     */
    public $AuthorizationType;

    /**
     * @var array 指定企业认证的授权方式 支持多选:

<ul>
<li><strong>1</strong>: 上传营业执照</li>
<li><strong>2</strong>: 腾讯云快速认证</li>
<li><strong>3</strong>: 腾讯商户号授权<font color="red">（仅支持小程序端）</font></li>
</ul>
     */
    public $AuthorizationMethods;

    /**
     * @var string 企业证照类型：

USCC :(默认)工商组织营业执照
PRACTICELICENSEOFMEDICALINSTITUTION :医疗机构执业许可证
     */
    public $OrganizationIdCardType;

    /**
     * @var RegisterInfoOption 企业创建时候的个性化参数。
其中，包括一下内容：
LegalNameSame  是否可以编辑法人。
UnifiedSocialCreditCodeSame  是否可以编辑证件号码。
OrganizationIdCardTypeSame  是否可以更改证照类型。
     */
    public $RegisterInfoOption;

    /**
     * @param string $LegalName 法人姓名
     * @param string $Uscc 社会统一信用代码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UnifiedSocialCreditCode 社会统一信用代码
     * @param string $OrganizationAddress 组织机构企业注册地址。 请确认该企业注册地址与企业营业执照中注册的地址一致。
     * @param array $AuthorizationTypes 指定企业认证的授权方式 支持多选:

<ul>
<li><strong>2</strong>: 法人授权方式</li>
<li><strong>5</strong>: 授权书+对公打款方式</li>
</ul>
     * @param integer $AuthorizationType 指定企业认证的授权方式:

<ul>
<li><strong>2</strong>: 法人授权方式</li>
<li><strong>5</strong>: 授权书+对公打款方式</li>
</ul>
     * @param array $AuthorizationMethods 指定企业认证的授权方式 支持多选:

<ul>
<li><strong>1</strong>: 上传营业执照</li>
<li><strong>2</strong>: 腾讯云快速认证</li>
<li><strong>3</strong>: 腾讯商户号授权<font color="red">（仅支持小程序端）</font></li>
</ul>
     * @param string $OrganizationIdCardType 企业证照类型：

USCC :(默认)工商组织营业执照
PRACTICELICENSEOFMEDICALINSTITUTION :医疗机构执业许可证
     * @param RegisterInfoOption $RegisterInfoOption 企业创建时候的个性化参数。
其中，包括一下内容：
LegalNameSame  是否可以编辑法人。
UnifiedSocialCreditCodeSame  是否可以编辑证件号码。
OrganizationIdCardTypeSame  是否可以更改证照类型。
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
        if (array_key_exists("LegalName",$param) and $param["LegalName"] !== null) {
            $this->LegalName = $param["LegalName"];
        }

        if (array_key_exists("Uscc",$param) and $param["Uscc"] !== null) {
            $this->Uscc = $param["Uscc"];
        }

        if (array_key_exists("UnifiedSocialCreditCode",$param) and $param["UnifiedSocialCreditCode"] !== null) {
            $this->UnifiedSocialCreditCode = $param["UnifiedSocialCreditCode"];
        }

        if (array_key_exists("OrganizationAddress",$param) and $param["OrganizationAddress"] !== null) {
            $this->OrganizationAddress = $param["OrganizationAddress"];
        }

        if (array_key_exists("AuthorizationTypes",$param) and $param["AuthorizationTypes"] !== null) {
            $this->AuthorizationTypes = $param["AuthorizationTypes"];
        }

        if (array_key_exists("AuthorizationType",$param) and $param["AuthorizationType"] !== null) {
            $this->AuthorizationType = $param["AuthorizationType"];
        }

        if (array_key_exists("AuthorizationMethods",$param) and $param["AuthorizationMethods"] !== null) {
            $this->AuthorizationMethods = $param["AuthorizationMethods"];
        }

        if (array_key_exists("OrganizationIdCardType",$param) and $param["OrganizationIdCardType"] !== null) {
            $this->OrganizationIdCardType = $param["OrganizationIdCardType"];
        }

        if (array_key_exists("RegisterInfoOption",$param) and $param["RegisterInfoOption"] !== null) {
            $this->RegisterInfoOption = new RegisterInfoOption();
            $this->RegisterInfoOption->deserialize($param["RegisterInfoOption"]);
        }
    }
}
