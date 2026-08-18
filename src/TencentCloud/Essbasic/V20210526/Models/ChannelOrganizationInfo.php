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
 * @method string getOrganizationId() 获取<p>电子签平台给企业分配的ID（在不同应用下同一个企业会分配通用的ID）</p>
 * @method void setOrganizationId(string $OrganizationId) 设置<p>电子签平台给企业分配的ID（在不同应用下同一个企业会分配通用的ID）</p>
 * @method string getOrganizationOpenId() 获取<p>第三方平台子客企业的唯一标识</p>
 * @method void setOrganizationOpenId(string $OrganizationOpenId) 设置<p>第三方平台子客企业的唯一标识</p>
 * @method string getOrganizationName() 获取<p>第三方平台子客企业名称</p>
 * @method void setOrganizationName(string $OrganizationName) 设置<p>第三方平台子客企业名称</p>
 * @method string getUnifiedSocialCreditCode() 获取<p>企业的统一社会信用代码</p>
 * @method void setUnifiedSocialCreditCode(string $UnifiedSocialCreditCode) 设置<p>企业的统一社会信用代码</p>
 * @method string getLegalName() 获取<p>企业法定代表人的姓名</p>
 * @method void setLegalName(string $LegalName) 设置<p>企业法定代表人的姓名</p>
 * @method string getLegalOpenId() 获取<p>企业法定代表人作为第三方平台子客企业员工的唯一标识</p>
 * @method void setLegalOpenId(string $LegalOpenId) 设置<p>企业法定代表人作为第三方平台子客企业员工的唯一标识</p>
 * @method string getAdminName() 获取<p>企业超级管理员的姓名</p>
 * @method void setAdminName(string $AdminName) 设置<p>企业超级管理员的姓名</p>
 * @method string getAdminOpenId() 获取<p>企业超级管理员作为第三方平台子客企业员工的唯一标识</p>
 * @method void setAdminOpenId(string $AdminOpenId) 设置<p>企业超级管理员作为第三方平台子客企业员工的唯一标识</p>
 * @method string getAdminMobile() 获取<p>企业超级管理员的手机号码<br><strong>注</strong>：<code>手机号码脱敏（隐藏部分用*替代）</code></p>
 * @method void setAdminMobile(string $AdminMobile) 设置<p>企业超级管理员的手机号码<br><strong>注</strong>：<code>手机号码脱敏（隐藏部分用*替代）</code></p>
 * @method string getAuthorizationStatus() 获取<p>企业认证状态枚举值及说明如下：</p><table>  <thead>    <tr>      <th>枚举值</th>      <th>说明</th>    </tr>  </thead>  <tbody>    <tr>      <td><code>UNVERIFIED</code></td>      <td>企业未认证</td>    </tr>    <tr>      <td><code>VERIFYING</code></td>      <td>企业认证中，还未选择授权方式</td>    </tr>    <tr>      <td><code>VERIFYINGLEGALPENDINGAUTHORIZATION</code></td>      <td>企业认证中，待法人授权或法人认证</td>    </tr>    <tr>      <td><code>VERIFYINGAUTHORIZATIONFILEPENDING</code></td>      <td>企业认证中，已上传授权书，授权书待审核</td>    </tr>    <tr>      <td><code>VERIFYINGAUTHORIZATIONFILEREJECT</code></td>      <td>企业认证中，授权书审核被驳回</td>    </tr>    <tr>      <td><code>VERIFIED</code></td>      <td>企业已认证成功</td>    </tr>  </tbody></table><p>企业认证流程的典型流转路径如下：</p><pre><code>UNVERIFIED → VERIFYING（提交企业信息，选择授权方式）                ├─ 法人授权 → VERIFYINGLEGALPENDINGAUTHORIZATION → VERIFIED                ├─ 法人认证 → VERIFYINGLEGALPENDINGAUTHORIZATION → VERIFIED                └─ 授权书 → VERIFYINGAUTHORIZATIONFILEPENDING                              ├─ 审核通过 → VERIFIED                              └─ 审核驳回 → VERIFYINGAUTHORIZATIONFILEREJECT</code></pre><p>枚举值：</p><ul><li>UNVERIFIED： 企业未认证</li><li>VERIFYING： 企业认证中，还未选择授权方式</li><li>VERIFYINGLEGALPENDINGAUTHORIZATION： 企业认证中，待法人授权或法人认证</li><li>VERIFYINGAUTHORIZATIONFILEPENDING： 企业认证中，已上传授权书，授权书待审核</li><li>VERIFYINGAUTHORIZATIONFILEREJECT： 企业认证中，授权书审核被驳回</li><li>VERIFIED： 企业已认证成功</li></ul>
 * @method void setAuthorizationStatus(string $AuthorizationStatus) 设置<p>企业认证状态枚举值及说明如下：</p><table>  <thead>    <tr>      <th>枚举值</th>      <th>说明</th>    </tr>  </thead>  <tbody>    <tr>      <td><code>UNVERIFIED</code></td>      <td>企业未认证</td>    </tr>    <tr>      <td><code>VERIFYING</code></td>      <td>企业认证中，还未选择授权方式</td>    </tr>    <tr>      <td><code>VERIFYINGLEGALPENDINGAUTHORIZATION</code></td>      <td>企业认证中，待法人授权或法人认证</td>    </tr>    <tr>      <td><code>VERIFYINGAUTHORIZATIONFILEPENDING</code></td>      <td>企业认证中，已上传授权书，授权书待审核</td>    </tr>    <tr>      <td><code>VERIFYINGAUTHORIZATIONFILEREJECT</code></td>      <td>企业认证中，授权书审核被驳回</td>    </tr>    <tr>      <td><code>VERIFIED</code></td>      <td>企业已认证成功</td>    </tr>  </tbody></table><p>企业认证流程的典型流转路径如下：</p><pre><code>UNVERIFIED → VERIFYING（提交企业信息，选择授权方式）                ├─ 法人授权 → VERIFYINGLEGALPENDINGAUTHORIZATION → VERIFIED                ├─ 法人认证 → VERIFYINGLEGALPENDINGAUTHORIZATION → VERIFIED                └─ 授权书 → VERIFYINGAUTHORIZATIONFILEPENDING                              ├─ 审核通过 → VERIFIED                              └─ 审核驳回 → VERIFYINGAUTHORIZATIONFILEREJECT</code></pre><p>枚举值：</p><ul><li>UNVERIFIED： 企业未认证</li><li>VERIFYING： 企业认证中，还未选择授权方式</li><li>VERIFYINGLEGALPENDINGAUTHORIZATION： 企业认证中，待法人授权或法人认证</li><li>VERIFYINGAUTHORIZATIONFILEPENDING： 企业认证中，已上传授权书，授权书待审核</li><li>VERIFYINGAUTHORIZATIONFILEREJECT： 企业认证中，授权书审核被驳回</li><li>VERIFIED： 企业已认证成功</li></ul>
 * @method string getAuthorizationType() 获取<p>企业认证方式字段。值如下：</p><ul>  <li>**"AuthorizationInit"**： 暂未选择授权方式</li>  <li>**"AuthorizationFile"**： 授权书</li>  <li>**"AuthorizationLegalPerson"**： 法人授权超管</li>  <li>**"AuthorizationLegalIdentity"**： 法人直接认证</li></ul>
 * @method void setAuthorizationType(string $AuthorizationType) 设置<p>企业认证方式字段。值如下：</p><ul>  <li>**"AuthorizationInit"**： 暂未选择授权方式</li>  <li>**"AuthorizationFile"**： 授权书</li>  <li>**"AuthorizationLegalPerson"**： 法人授权超管</li>  <li>**"AuthorizationLegalIdentity"**： 法人直接认证</li></ul>
 * @method integer getActiveStatus() 获取<p>子企业激活状态。值如下：</p><ul>  <li>**0**： 未激活</li>  <li>**1**： 已激活</li></ul>
 * @method void setActiveStatus(integer $ActiveStatus) 设置<p>子企业激活状态。值如下：</p><ul>  <li>**0**： 未激活</li>  <li>**1**： 已激活</li></ul>
 * @method integer getLicenseExpireTime() 获取<p>账号到期时间，时间戳</p>
 * @method void setLicenseExpireTime(integer $LicenseExpireTime) 设置<p>账号到期时间，时间戳</p>
 * @method boolean getHasSubmittedAuthInfo() 获取<p>是否已提交企业认证信息</p><p>默认值：false</p><p>此参数表示客户是否已提交企业信息。如图所示，在点击提交按钮之前，该字段为 <code>false</code>；点击提交按钮之后，该字段变为 <code>true</code>。</p><img src="https://qcloudimg.tencent-cloud.cn/raw/548d838430b60e797dbfba80cb4a3ef7.png" alt="企业信息提交状态示意图"><p><strong>注意：</strong>该字段并非在变为 <code>true</code> 后就不再变化。任何导致当前认证记录失效的操作都会将其重置为 <code>false</code>，包括但不限于：重新提交企业信息、审核被拒绝后重新上传企业信息等操作。</p>
 * @method void setHasSubmittedAuthInfo(boolean $HasSubmittedAuthInfo) 设置<p>是否已提交企业认证信息</p><p>默认值：false</p><p>此参数表示客户是否已提交企业信息。如图所示，在点击提交按钮之前，该字段为 <code>false</code>；点击提交按钮之后，该字段变为 <code>true</code>。</p><img src="https://qcloudimg.tencent-cloud.cn/raw/548d838430b60e797dbfba80cb4a3ef7.png" alt="企业信息提交状态示意图"><p><strong>注意：</strong>该字段并非在变为 <code>true</code> 后就不再变化。任何导致当前认证记录失效的操作都会将其重置为 <code>false</code>，包括但不限于：重新提交企业信息、审核被拒绝后重新上传企业信息等操作。</p>
 */
class ChannelOrganizationInfo extends AbstractModel
{
    /**
     * @var string <p>电子签平台给企业分配的ID（在不同应用下同一个企业会分配通用的ID）</p>
     */
    public $OrganizationId;

    /**
     * @var string <p>第三方平台子客企业的唯一标识</p>
     */
    public $OrganizationOpenId;

    /**
     * @var string <p>第三方平台子客企业名称</p>
     */
    public $OrganizationName;

    /**
     * @var string <p>企业的统一社会信用代码</p>
     */
    public $UnifiedSocialCreditCode;

    /**
     * @var string <p>企业法定代表人的姓名</p>
     */
    public $LegalName;

    /**
     * @var string <p>企业法定代表人作为第三方平台子客企业员工的唯一标识</p>
     */
    public $LegalOpenId;

    /**
     * @var string <p>企业超级管理员的姓名</p>
     */
    public $AdminName;

    /**
     * @var string <p>企业超级管理员作为第三方平台子客企业员工的唯一标识</p>
     */
    public $AdminOpenId;

    /**
     * @var string <p>企业超级管理员的手机号码<br><strong>注</strong>：<code>手机号码脱敏（隐藏部分用*替代）</code></p>
     */
    public $AdminMobile;

    /**
     * @var string <p>企业认证状态枚举值及说明如下：</p><table>  <thead>    <tr>      <th>枚举值</th>      <th>说明</th>    </tr>  </thead>  <tbody>    <tr>      <td><code>UNVERIFIED</code></td>      <td>企业未认证</td>    </tr>    <tr>      <td><code>VERIFYING</code></td>      <td>企业认证中，还未选择授权方式</td>    </tr>    <tr>      <td><code>VERIFYINGLEGALPENDINGAUTHORIZATION</code></td>      <td>企业认证中，待法人授权或法人认证</td>    </tr>    <tr>      <td><code>VERIFYINGAUTHORIZATIONFILEPENDING</code></td>      <td>企业认证中，已上传授权书，授权书待审核</td>    </tr>    <tr>      <td><code>VERIFYINGAUTHORIZATIONFILEREJECT</code></td>      <td>企业认证中，授权书审核被驳回</td>    </tr>    <tr>      <td><code>VERIFIED</code></td>      <td>企业已认证成功</td>    </tr>  </tbody></table><p>企业认证流程的典型流转路径如下：</p><pre><code>UNVERIFIED → VERIFYING（提交企业信息，选择授权方式）                ├─ 法人授权 → VERIFYINGLEGALPENDINGAUTHORIZATION → VERIFIED                ├─ 法人认证 → VERIFYINGLEGALPENDINGAUTHORIZATION → VERIFIED                └─ 授权书 → VERIFYINGAUTHORIZATIONFILEPENDING                              ├─ 审核通过 → VERIFIED                              └─ 审核驳回 → VERIFYINGAUTHORIZATIONFILEREJECT</code></pre><p>枚举值：</p><ul><li>UNVERIFIED： 企业未认证</li><li>VERIFYING： 企业认证中，还未选择授权方式</li><li>VERIFYINGLEGALPENDINGAUTHORIZATION： 企业认证中，待法人授权或法人认证</li><li>VERIFYINGAUTHORIZATIONFILEPENDING： 企业认证中，已上传授权书，授权书待审核</li><li>VERIFYINGAUTHORIZATIONFILEREJECT： 企业认证中，授权书审核被驳回</li><li>VERIFIED： 企业已认证成功</li></ul>
     */
    public $AuthorizationStatus;

    /**
     * @var string <p>企业认证方式字段。值如下：</p><ul>  <li>**"AuthorizationInit"**： 暂未选择授权方式</li>  <li>**"AuthorizationFile"**： 授权书</li>  <li>**"AuthorizationLegalPerson"**： 法人授权超管</li>  <li>**"AuthorizationLegalIdentity"**： 法人直接认证</li></ul>
     */
    public $AuthorizationType;

    /**
     * @var integer <p>子企业激活状态。值如下：</p><ul>  <li>**0**： 未激活</li>  <li>**1**： 已激活</li></ul>
     */
    public $ActiveStatus;

    /**
     * @var integer <p>账号到期时间，时间戳</p>
     */
    public $LicenseExpireTime;

    /**
     * @var boolean <p>是否已提交企业认证信息</p><p>默认值：false</p><p>此参数表示客户是否已提交企业信息。如图所示，在点击提交按钮之前，该字段为 <code>false</code>；点击提交按钮之后，该字段变为 <code>true</code>。</p><img src="https://qcloudimg.tencent-cloud.cn/raw/548d838430b60e797dbfba80cb4a3ef7.png" alt="企业信息提交状态示意图"><p><strong>注意：</strong>该字段并非在变为 <code>true</code> 后就不再变化。任何导致当前认证记录失效的操作都会将其重置为 <code>false</code>，包括但不限于：重新提交企业信息、审核被拒绝后重新上传企业信息等操作。</p>
     */
    public $HasSubmittedAuthInfo;

    /**
     * @param string $OrganizationId <p>电子签平台给企业分配的ID（在不同应用下同一个企业会分配通用的ID）</p>
     * @param string $OrganizationOpenId <p>第三方平台子客企业的唯一标识</p>
     * @param string $OrganizationName <p>第三方平台子客企业名称</p>
     * @param string $UnifiedSocialCreditCode <p>企业的统一社会信用代码</p>
     * @param string $LegalName <p>企业法定代表人的姓名</p>
     * @param string $LegalOpenId <p>企业法定代表人作为第三方平台子客企业员工的唯一标识</p>
     * @param string $AdminName <p>企业超级管理员的姓名</p>
     * @param string $AdminOpenId <p>企业超级管理员作为第三方平台子客企业员工的唯一标识</p>
     * @param string $AdminMobile <p>企业超级管理员的手机号码<br><strong>注</strong>：<code>手机号码脱敏（隐藏部分用*替代）</code></p>
     * @param string $AuthorizationStatus <p>企业认证状态枚举值及说明如下：</p><table>  <thead>    <tr>      <th>枚举值</th>      <th>说明</th>    </tr>  </thead>  <tbody>    <tr>      <td><code>UNVERIFIED</code></td>      <td>企业未认证</td>    </tr>    <tr>      <td><code>VERIFYING</code></td>      <td>企业认证中，还未选择授权方式</td>    </tr>    <tr>      <td><code>VERIFYINGLEGALPENDINGAUTHORIZATION</code></td>      <td>企业认证中，待法人授权或法人认证</td>    </tr>    <tr>      <td><code>VERIFYINGAUTHORIZATIONFILEPENDING</code></td>      <td>企业认证中，已上传授权书，授权书待审核</td>    </tr>    <tr>      <td><code>VERIFYINGAUTHORIZATIONFILEREJECT</code></td>      <td>企业认证中，授权书审核被驳回</td>    </tr>    <tr>      <td><code>VERIFIED</code></td>      <td>企业已认证成功</td>    </tr>  </tbody></table><p>企业认证流程的典型流转路径如下：</p><pre><code>UNVERIFIED → VERIFYING（提交企业信息，选择授权方式）                ├─ 法人授权 → VERIFYINGLEGALPENDINGAUTHORIZATION → VERIFIED                ├─ 法人认证 → VERIFYINGLEGALPENDINGAUTHORIZATION → VERIFIED                └─ 授权书 → VERIFYINGAUTHORIZATIONFILEPENDING                              ├─ 审核通过 → VERIFIED                              └─ 审核驳回 → VERIFYINGAUTHORIZATIONFILEREJECT</code></pre><p>枚举值：</p><ul><li>UNVERIFIED： 企业未认证</li><li>VERIFYING： 企业认证中，还未选择授权方式</li><li>VERIFYINGLEGALPENDINGAUTHORIZATION： 企业认证中，待法人授权或法人认证</li><li>VERIFYINGAUTHORIZATIONFILEPENDING： 企业认证中，已上传授权书，授权书待审核</li><li>VERIFYINGAUTHORIZATIONFILEREJECT： 企业认证中，授权书审核被驳回</li><li>VERIFIED： 企业已认证成功</li></ul>
     * @param string $AuthorizationType <p>企业认证方式字段。值如下：</p><ul>  <li>**"AuthorizationInit"**： 暂未选择授权方式</li>  <li>**"AuthorizationFile"**： 授权书</li>  <li>**"AuthorizationLegalPerson"**： 法人授权超管</li>  <li>**"AuthorizationLegalIdentity"**： 法人直接认证</li></ul>
     * @param integer $ActiveStatus <p>子企业激活状态。值如下：</p><ul>  <li>**0**： 未激活</li>  <li>**1**： 已激活</li></ul>
     * @param integer $LicenseExpireTime <p>账号到期时间，时间戳</p>
     * @param boolean $HasSubmittedAuthInfo <p>是否已提交企业认证信息</p><p>默认值：false</p><p>此参数表示客户是否已提交企业信息。如图所示，在点击提交按钮之前，该字段为 <code>false</code>；点击提交按钮之后，该字段变为 <code>true</code>。</p><img src="https://qcloudimg.tencent-cloud.cn/raw/548d838430b60e797dbfba80cb4a3ef7.png" alt="企业信息提交状态示意图"><p><strong>注意：</strong>该字段并非在变为 <code>true</code> 后就不再变化。任何导致当前认证记录失效的操作都会将其重置为 <code>false</code>，包括但不限于：重新提交企业信息、审核被拒绝后重新上传企业信息等操作。</p>
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

        if (array_key_exists("HasSubmittedAuthInfo",$param) and $param["HasSubmittedAuthInfo"] !== null) {
            $this->HasSubmittedAuthInfo = $param["HasSubmittedAuthInfo"];
        }
    }
}
