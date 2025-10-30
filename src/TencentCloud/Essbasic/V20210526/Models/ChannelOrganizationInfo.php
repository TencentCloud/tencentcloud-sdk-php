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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 渠道企业信息
 *
 * @method string getOrganizationId() 获取电子签平台给企业分配的ID（在不同应用下同一个企业会分配通用的ID）
 * @method void setOrganizationId(string $OrganizationId) 设置电子签平台给企业分配的ID（在不同应用下同一个企业会分配通用的ID）
 * @method string getOrganizationOpenId() 获取第三方平台子客企业的唯一标识
 * @method void setOrganizationOpenId(string $OrganizationOpenId) 设置第三方平台子客企业的唯一标识
 * @method string getOrganizationName() 获取第三方平台子客企业名称
 * @method void setOrganizationName(string $OrganizationName) 设置第三方平台子客企业名称
 * @method string getUnifiedSocialCreditCode() 获取企业的统一社会信用代码
 * @method void setUnifiedSocialCreditCode(string $UnifiedSocialCreditCode) 设置企业的统一社会信用代码
 * @method string getLegalName() 获取企业法定代表人的姓名
 * @method void setLegalName(string $LegalName) 设置企业法定代表人的姓名
 * @method string getLegalOpenId() 获取企业法定代表人作为第三方平台子客企业员工的唯一标识
 * @method void setLegalOpenId(string $LegalOpenId) 设置企业法定代表人作为第三方平台子客企业员工的唯一标识
 * @method string getAdminName() 获取企业超级管理员的姓名
 * @method void setAdminName(string $AdminName) 设置企业超级管理员的姓名
 * @method string getAdminOpenId() 获取企业超级管理员作为第三方平台子客企业员工的唯一标识
 * @method void setAdminOpenId(string $AdminOpenId) 设置企业超级管理员作为第三方平台子客企业员工的唯一标识
 * @method string getAdminMobile() 获取企业超级管理员的手机号码
**注**：`手机号码脱敏（隐藏部分用*替代）`
 * @method void setAdminMobile(string $AdminMobile) 设置企业超级管理员的手机号码
**注**：`手机号码脱敏（隐藏部分用*替代）`
 * @method string getAuthorizationStatus() 获取企业认证状态字段。值如下：
<ul>
  <li>**"UNVERIFIED"**： 未认证的企业</li>
  <li>**"VERIFYINGLEGALPENDINGAUTHORIZATION"**： 认证中待法人授权的企业</li>
  <li>**"VERIFYINGAUTHORIZATIONFILEPENDING"**： 认证中授权书审核中的企业</li>
  <li>**"VERIFYINGAUTHORIZATIONFILEREJECT"**： 认证中授权书已驳回的企业</li>
  <li>**"VERIFYING"**： 认证中的企业</li>
  <li>**"VERIFIED"**： 已认证的企业</li>
</ul>
 * @method void setAuthorizationStatus(string $AuthorizationStatus) 设置企业认证状态字段。值如下：
<ul>
  <li>**"UNVERIFIED"**： 未认证的企业</li>
  <li>**"VERIFYINGLEGALPENDINGAUTHORIZATION"**： 认证中待法人授权的企业</li>
  <li>**"VERIFYINGAUTHORIZATIONFILEPENDING"**： 认证中授权书审核中的企业</li>
  <li>**"VERIFYINGAUTHORIZATIONFILEREJECT"**： 认证中授权书已驳回的企业</li>
  <li>**"VERIFYING"**： 认证中的企业</li>
  <li>**"VERIFIED"**： 已认证的企业</li>
</ul>
 * @method string getAuthorizationType() 获取企业认证方式字段。值如下：
<ul>
  <li>**"AuthorizationInit"**： 暂未选择授权方式</li>
  <li>**"AuthorizationFile"**： 授权书</li>
  <li>**"AuthorizationLegalPerson"**： 法人授权超管</li>
  <li>**"AuthorizationLegalIdentity"**： 法人直接认证</li>
</ul>
 * @method void setAuthorizationType(string $AuthorizationType) 设置企业认证方式字段。值如下：
<ul>
  <li>**"AuthorizationInit"**： 暂未选择授权方式</li>
  <li>**"AuthorizationFile"**： 授权书</li>
  <li>**"AuthorizationLegalPerson"**： 法人授权超管</li>
  <li>**"AuthorizationLegalIdentity"**： 法人直接认证</li>
</ul>
 * @method integer getActiveStatus() 获取子企业激活状态。值如下：
<ul>
  <li>**0**： 未激活</li>
  <li>**1**： 已激活</li>
</ul>
 * @method void setActiveStatus(integer $ActiveStatus) 设置子企业激活状态。值如下：
<ul>
  <li>**0**： 未激活</li>
  <li>**1**： 已激活</li>
</ul>
 * @method integer getLicenseExpireTime() 获取账号到期时间，时间戳
 * @method void setLicenseExpireTime(integer $LicenseExpireTime) 设置账号到期时间，时间戳
 */
class ChannelOrganizationInfo extends AbstractModel
{
    /**
     * @var string 电子签平台给企业分配的ID（在不同应用下同一个企业会分配通用的ID）
     */
    public $OrganizationId;

    /**
     * @var string 第三方平台子客企业的唯一标识
     */
    public $OrganizationOpenId;

    /**
     * @var string 第三方平台子客企业名称
     */
    public $OrganizationName;

    /**
     * @var string 企业的统一社会信用代码
     */
    public $UnifiedSocialCreditCode;

    /**
     * @var string 企业法定代表人的姓名
     */
    public $LegalName;

    /**
     * @var string 企业法定代表人作为第三方平台子客企业员工的唯一标识
     */
    public $LegalOpenId;

    /**
     * @var string 企业超级管理员的姓名
     */
    public $AdminName;

    /**
     * @var string 企业超级管理员作为第三方平台子客企业员工的唯一标识
     */
    public $AdminOpenId;

    /**
     * @var string 企业超级管理员的手机号码
**注**：`手机号码脱敏（隐藏部分用*替代）`
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
     */
    public $AuthorizationType;

    /**
     * @var integer 子企业激活状态。值如下：
<ul>
  <li>**0**： 未激活</li>
  <li>**1**： 已激活</li>
</ul>
     */
    public $ActiveStatus;

    /**
     * @var integer 账号到期时间，时间戳
     */
    public $LicenseExpireTime;

    /**
     * @param string $OrganizationId 电子签平台给企业分配的ID（在不同应用下同一个企业会分配通用的ID）
     * @param string $OrganizationOpenId 第三方平台子客企业的唯一标识
     * @param string $OrganizationName 第三方平台子客企业名称
     * @param string $UnifiedSocialCreditCode 企业的统一社会信用代码
     * @param string $LegalName 企业法定代表人的姓名
     * @param string $LegalOpenId 企业法定代表人作为第三方平台子客企业员工的唯一标识
     * @param string $AdminName 企业超级管理员的姓名
     * @param string $AdminOpenId 企业超级管理员作为第三方平台子客企业员工的唯一标识
     * @param string $AdminMobile 企业超级管理员的手机号码
**注**：`手机号码脱敏（隐藏部分用*替代）`
     * @param string $AuthorizationStatus 企业认证状态字段。值如下：
<ul>
  <li>**"UNVERIFIED"**： 未认证的企业</li>
  <li>**"VERIFYINGLEGALPENDINGAUTHORIZATION"**： 认证中待法人授权的企业</li>
  <li>**"VERIFYINGAUTHORIZATIONFILEPENDING"**： 认证中授权书审核中的企业</li>
  <li>**"VERIFYINGAUTHORIZATIONFILEREJECT"**： 认证中授权书已驳回的企业</li>
  <li>**"VERIFYING"**： 认证中的企业</li>
  <li>**"VERIFIED"**： 已认证的企业</li>
</ul>
     * @param string $AuthorizationType 企业认证方式字段。值如下：
<ul>
  <li>**"AuthorizationInit"**： 暂未选择授权方式</li>
  <li>**"AuthorizationFile"**： 授权书</li>
  <li>**"AuthorizationLegalPerson"**： 法人授权超管</li>
  <li>**"AuthorizationLegalIdentity"**： 法人直接认证</li>
</ul>
     * @param integer $ActiveStatus 子企业激活状态。值如下：
<ul>
  <li>**0**： 未激活</li>
  <li>**1**： 已激活</li>
</ul>
     * @param integer $LicenseExpireTime 账号到期时间，时间戳
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

        if (array_key_exists("ActiveStatus",$param) and $param["ActiveStatus"] !== null) {
            $this->ActiveStatus = $param["ActiveStatus"];
        }

        if (array_key_exists("LicenseExpireTime",$param) and $param["LicenseExpireTime"] !== null) {
            $this->LicenseExpireTime = $param["LicenseExpireTime"];
        }
    }
}
