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
 * DescribeChannelOrganizations请求参数结构体
 *
 * @method Agent getAgent() 获取<p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><p>渠道应用标识: Agent.AppId<br>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId<br>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</p><p>第三方平台子客企业和员工必须已经经过实名认证</p>
 * @method void setAgent(Agent $Agent) 设置<p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><p>渠道应用标识: Agent.AppId<br>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId<br>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</p><p>第三方平台子客企业和员工必须已经经过实名认证</p>
 * @method integer getLimit() 获取<p>指定分页每页返回的数据条数，单页最大支持 200。</p>
 * @method void setLimit(integer $Limit) 设置<p>指定分页每页返回的数据条数，单页最大支持 200。</p>
 * @method string getOrganizationOpenId() 获取<p>该字段是指第三方平台子客企业的唯一标识，用于查询单独某个子客的企业数据。</p><p><strong>注</strong>：<code>如果需要批量查询本应用下的所有企业的信息，则该字段不需要赋值</code></p>
 * @method void setOrganizationOpenId(string $OrganizationOpenId) 设置<p>该字段是指第三方平台子客企业的唯一标识，用于查询单独某个子客的企业数据。</p><p><strong>注</strong>：<code>如果需要批量查询本应用下的所有企业的信息，则该字段不需要赋值</code></p>
 * @method array getAuthorizationStatusList() 获取<p>可以按照当前企业的认证状态进行过滤。可值如下：</p><ul><li>**"UNVERIFIED"**： 未认证的企业</li>  <li>**"VERIFYINGLEGALPENDINGAUTHORIZATION"**： 认证中待法人授权的企业</li>  <li>**"VERIFYINGAUTHORIZATIONFILEPENDING"**： 认证中授权书审核中的企业</li>  <li>**"VERIFYINGAUTHORIZATIONFILEREJECT"**： 认证中授权书已驳回的企业</li>  <li>**"VERIFYING"**： 认证进行中的企业</li>  <li>**"VERIFIED"**： 已认证完成的企业</li></ul>
 * @method void setAuthorizationStatusList(array $AuthorizationStatusList) 设置<p>可以按照当前企业的认证状态进行过滤。可值如下：</p><ul><li>**"UNVERIFIED"**： 未认证的企业</li>  <li>**"VERIFYINGLEGALPENDINGAUTHORIZATION"**： 认证中待法人授权的企业</li>  <li>**"VERIFYINGAUTHORIZATIONFILEPENDING"**： 认证中授权书审核中的企业</li>  <li>**"VERIFYINGAUTHORIZATIONFILEREJECT"**： 认证中授权书已驳回的企业</li>  <li>**"VERIFYING"**： 认证进行中的企业</li>  <li>**"VERIFIED"**： 已认证完成的企业</li></ul>
 * @method integer getOffset() 获取<p>偏移量:从 0 开始，最大20000。</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量:从 0 开始，最大20000。</p>
 */
class DescribeChannelOrganizationsRequest extends AbstractModel
{
    /**
     * @var Agent <p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><p>渠道应用标识: Agent.AppId<br>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId<br>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</p><p>第三方平台子客企业和员工必须已经经过实名认证</p>
     */
    public $Agent;

    /**
     * @var integer <p>指定分页每页返回的数据条数，单页最大支持 200。</p>
     */
    public $Limit;

    /**
     * @var string <p>该字段是指第三方平台子客企业的唯一标识，用于查询单独某个子客的企业数据。</p><p><strong>注</strong>：<code>如果需要批量查询本应用下的所有企业的信息，则该字段不需要赋值</code></p>
     */
    public $OrganizationOpenId;

    /**
     * @var array <p>可以按照当前企业的认证状态进行过滤。可值如下：</p><ul><li>**"UNVERIFIED"**： 未认证的企业</li>  <li>**"VERIFYINGLEGALPENDINGAUTHORIZATION"**： 认证中待法人授权的企业</li>  <li>**"VERIFYINGAUTHORIZATIONFILEPENDING"**： 认证中授权书审核中的企业</li>  <li>**"VERIFYINGAUTHORIZATIONFILEREJECT"**： 认证中授权书已驳回的企业</li>  <li>**"VERIFYING"**： 认证进行中的企业</li>  <li>**"VERIFIED"**： 已认证完成的企业</li></ul>
     */
    public $AuthorizationStatusList;

    /**
     * @var integer <p>偏移量:从 0 开始，最大20000。</p>
     */
    public $Offset;

    /**
     * @param Agent $Agent <p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><p>渠道应用标识: Agent.AppId<br>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId<br>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</p><p>第三方平台子客企业和员工必须已经经过实名认证</p>
     * @param integer $Limit <p>指定分页每页返回的数据条数，单页最大支持 200。</p>
     * @param string $OrganizationOpenId <p>该字段是指第三方平台子客企业的唯一标识，用于查询单独某个子客的企业数据。</p><p><strong>注</strong>：<code>如果需要批量查询本应用下的所有企业的信息，则该字段不需要赋值</code></p>
     * @param array $AuthorizationStatusList <p>可以按照当前企业的认证状态进行过滤。可值如下：</p><ul><li>**"UNVERIFIED"**： 未认证的企业</li>  <li>**"VERIFYINGLEGALPENDINGAUTHORIZATION"**： 认证中待法人授权的企业</li>  <li>**"VERIFYINGAUTHORIZATIONFILEPENDING"**： 认证中授权书审核中的企业</li>  <li>**"VERIFYINGAUTHORIZATIONFILEREJECT"**： 认证中授权书已驳回的企业</li>  <li>**"VERIFYING"**： 认证进行中的企业</li>  <li>**"VERIFIED"**： 已认证完成的企业</li></ul>
     * @param integer $Offset <p>偏移量:从 0 开始，最大20000。</p>
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
        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrganizationOpenId",$param) and $param["OrganizationOpenId"] !== null) {
            $this->OrganizationOpenId = $param["OrganizationOpenId"];
        }

        if (array_key_exists("AuthorizationStatusList",$param) and $param["AuthorizationStatusList"] !== null) {
            $this->AuthorizationStatusList = $param["AuthorizationStatusList"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
