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
 * 渠道企业信息
 *
 * @method string getOrganizationId() 获取电子签企业Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrganizationId(string $OrganizationId) 设置电子签企业Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrganizationOpenId() 获取电子签企业OpenId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrganizationOpenId(string $OrganizationOpenId) 设置电子签企业OpenId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrganizationName() 获取企业名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrganizationName(string $OrganizationName) 设置企业名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUnifiedSocialCreditCode() 获取企业信用代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnifiedSocialCreditCode(string $UnifiedSocialCreditCode) 设置企业信用代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLegalName() 获取法人姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLegalName(string $LegalName) 设置法人姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLegalOpenId() 获取法人OpenId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLegalOpenId(string $LegalOpenId) 设置法人OpenId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAdminName() 获取超管姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdminName(string $AdminName) 设置超管姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAdminOpenId() 获取超管OpenId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdminOpenId(string $AdminOpenId) 设置超管OpenId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAdminMobile() 获取超管手机号，脱敏后返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdminMobile(string $AdminMobile) 设置超管手机号，脱敏后返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAuthorizationStatus() 获取企业认证状态字段。值如下：
<ul>
  <li>**"UNVERIFIED"**： 未认证的企业</li>
  <li>**"VERIFYINGLEGALPENDINGAUTHORIZATION"**： 认证中待法人授权的企业</li>
  <li>**"VERIFYINGAUTHORIZATIONFILEPENDING"**： 认证中授权书审核中的企业</li>
  <li>**"VERIFYINGAUTHORIZATIONFILEREJECT"**： 认证中授权书已驳回的企业</li>
  <li>**"VERIFYING"**： 认证中的企业</li>
  <li>**"VERIFIED"**： 已认证的企业</li>
</ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthorizationStatus(string $AuthorizationStatus) 设置企业认证状态字段。值如下：
<ul>
  <li>**"UNVERIFIED"**： 未认证的企业</li>
  <li>**"VERIFYINGLEGALPENDINGAUTHORIZATION"**： 认证中待法人授权的企业</li>
  <li>**"VERIFYINGAUTHORIZATIONFILEPENDING"**： 认证中授权书审核中的企业</li>
  <li>**"VERIFYINGAUTHORIZATIONFILEREJECT"**： 认证中授权书已驳回的企业</li>
  <li>**"VERIFYING"**： 认证中的企业</li>
  <li>**"VERIFIED"**： 已认证的企业</li>
</ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAuthorizationType() 获取企业认证方式字段。值如下：
<ul>
  <li>**"AuthorizationInit"**： 暂未选择授权方式</li>
  <li>**"AuthorizationFile"**： 授权书</li>
  <li>**"AuthorizationLegalPerson"**： 法人授权超管</li>
  <li>**"AuthorizationLegalIdentity"**： 法人直接认证</li>
</ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthorizationType(string $AuthorizationType) 设置企业认证方式字段。值如下：
<ul>
  <li>**"AuthorizationInit"**： 暂未选择授权方式</li>
  <li>**"AuthorizationFile"**： 授权书</li>
  <li>**"AuthorizationLegalPerson"**： 法人授权超管</li>
  <li>**"AuthorizationLegalIdentity"**： 法人直接认证</li>
</ul>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ChannelOrganizationInfo extends AbstractModel
{
    /**
     * @var string 电子签企业Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrganizationId;

    /**
     * @var string 电子签企业OpenId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrganizationOpenId;

    /**
     * @var string 企业名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrganizationName;

    /**
     * @var string 企业信用代码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnifiedSocialCreditCode;

    /**
     * @var string 法人姓名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LegalName;

    /**
     * @var string 法人OpenId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LegalOpenId;

    /**
     * @var string 超管姓名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdminName;

    /**
     * @var string 超管OpenId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdminOpenId;

    /**
     * @var string 超管手机号，脱敏后返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdminMobile;

    /**
     * @var string 企业认证状态字段。值如下：
<ul>
  <li>**"UNVERIFIED"**： 未认证的企业</li>
  <li>**"VERIFYINGLEGALPENDINGAUTHORIZATION"**： 认证中待法人授权的企业</li>
  <li>**"VERIFYINGAUTHORIZATIONFILEPENDING"**： 认证中授权书审核中的企业</li>
  <li>**"VERIFYINGAUTHORIZATIONFILEREJECT"**： 认证中授权书已驳回的企业</li>
  <li>**"VERIFYING"**： 认证中的企业</li>
  <li>**"VERIFIED"**： 已认证的企业</li>
</ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthorizationStatus;

    /**
     * @var string 企业认证方式字段。值如下：
<ul>
  <li>**"AuthorizationInit"**： 暂未选择授权方式</li>
  <li>**"AuthorizationFile"**： 授权书</li>
  <li>**"AuthorizationLegalPerson"**： 法人授权超管</li>
  <li>**"AuthorizationLegalIdentity"**： 法人直接认证</li>
</ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthorizationType;

    /**
     * @param string $OrganizationId 电子签企业Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrganizationOpenId 电子签企业OpenId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrganizationName 企业名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UnifiedSocialCreditCode 企业信用代码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LegalName 法人姓名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LegalOpenId 法人OpenId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AdminName 超管姓名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AdminOpenId 超管OpenId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AdminMobile 超管手机号，脱敏后返回
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AuthorizationStatus 企业认证状态字段。值如下：
<ul>
  <li>**"UNVERIFIED"**： 未认证的企业</li>
  <li>**"VERIFYINGLEGALPENDINGAUTHORIZATION"**： 认证中待法人授权的企业</li>
  <li>**"VERIFYINGAUTHORIZATIONFILEPENDING"**： 认证中授权书审核中的企业</li>
  <li>**"VERIFYINGAUTHORIZATIONFILEREJECT"**： 认证中授权书已驳回的企业</li>
  <li>**"VERIFYING"**： 认证中的企业</li>
  <li>**"VERIFIED"**： 已认证的企业</li>
</ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AuthorizationType 企业认证方式字段。值如下：
<ul>
  <li>**"AuthorizationInit"**： 暂未选择授权方式</li>
  <li>**"AuthorizationFile"**： 授权书</li>
  <li>**"AuthorizationLegalPerson"**： 法人授权超管</li>
  <li>**"AuthorizationLegalIdentity"**： 法人直接认证</li>
</ul>
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
        if (array_key_exists("OrganizationId",$param) and $param["OrganizationId"] !== null) {
            $this->OrganizationId = $param["OrganizationId"];
        }

        if (array_key_exists("OrganizationOpenId",$param) and $param["OrganizationOpenId"] !== null) {
            $this->OrganizationOpenId = $param["OrganizationOpenId"];
        }

        if (array_key_exists("OrganizationName",$param) and $param["OrganizationName"] !== null) {
            $this->OrganizationName = $param["OrganizationName"];
        }

        if (array_key_exists("UnifiedSocialCreditCode",$param) and $param["UnifiedSocialCreditCode"] !== null) {
            $this->UnifiedSocialCreditCode = $param["UnifiedSocialCreditCode"];
        }

        if (array_key_exists("LegalName",$param) and $param["LegalName"] !== null) {
            $this->LegalName = $param["LegalName"];
        }

        if (array_key_exists("LegalOpenId",$param) and $param["LegalOpenId"] !== null) {
            $this->LegalOpenId = $param["LegalOpenId"];
        }

        if (array_key_exists("AdminName",$param) and $param["AdminName"] !== null) {
            $this->AdminName = $param["AdminName"];
        }

        if (array_key_exists("AdminOpenId",$param) and $param["AdminOpenId"] !== null) {
            $this->AdminOpenId = $param["AdminOpenId"];
        }

        if (array_key_exists("AdminMobile",$param) and $param["AdminMobile"] !== null) {
            $this->AdminMobile = $param["AdminMobile"];
        }

        if (array_key_exists("AuthorizationStatus",$param) and $param["AuthorizationStatus"] !== null) {
            $this->AuthorizationStatus = $param["AuthorizationStatus"];
        }

        if (array_key_exists("AuthorizationType",$param) and $param["AuthorizationType"] !== null) {
            $this->AuthorizationType = $param["AuthorizationType"];
        }
    }
}
