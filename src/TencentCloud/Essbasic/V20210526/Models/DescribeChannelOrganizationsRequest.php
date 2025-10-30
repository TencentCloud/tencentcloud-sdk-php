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
 * @method Agent getAgent() 获取关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。

渠道应用标识: Agent.AppId
第三方平台子客企业标识: Agent.ProxyOrganizationOpenId
第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId

第三方平台子客企业和员工必须已经经过实名认证
 * @method void setAgent(Agent $Agent) 设置关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。

渠道应用标识: Agent.AppId
第三方平台子客企业标识: Agent.ProxyOrganizationOpenId
第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId

第三方平台子客企业和员工必须已经经过实名认证
 * @method integer getLimit() 获取指定分页每页返回的数据条数，单页最大支持 200。
 * @method void setLimit(integer $Limit) 设置指定分页每页返回的数据条数，单页最大支持 200。
 * @method string getOrganizationOpenId() 获取该字段是指第三方平台子客企业的唯一标识，用于查询单独某个子客的企业数据。

**注**：`如果需要批量查询本应用下的所有企业的信息，则该字段不需要赋值`
 * @method void setOrganizationOpenId(string $OrganizationOpenId) 设置该字段是指第三方平台子客企业的唯一标识，用于查询单独某个子客的企业数据。

**注**：`如果需要批量查询本应用下的所有企业的信息，则该字段不需要赋值`
 * @method array getAuthorizationStatusList() 获取可以按照当前企业的认证状态进行过滤。可值如下：
<ul><li>**"UNVERIFIED"**： 未认证的企业</li>
  <li>**"VERIFYINGLEGALPENDINGAUTHORIZATION"**： 认证中待法人授权的企业</li>
  <li>**"VERIFYINGAUTHORIZATIONFILEPENDING"**： 认证中授权书审核中的企业</li>
  <li>**"VERIFYINGAUTHORIZATIONFILEREJECT"**： 认证中授权书已驳回的企业</li>
  <li>**"VERIFYING"**： 认证进行中的企业</li>
  <li>**"VERIFIED"**： 已认证完成的企业</li></ul>
 * @method void setAuthorizationStatusList(array $AuthorizationStatusList) 设置可以按照当前企业的认证状态进行过滤。可值如下：
<ul><li>**"UNVERIFIED"**： 未认证的企业</li>
  <li>**"VERIFYINGLEGALPENDINGAUTHORIZATION"**： 认证中待法人授权的企业</li>
  <li>**"VERIFYINGAUTHORIZATIONFILEPENDING"**： 认证中授权书审核中的企业</li>
  <li>**"VERIFYINGAUTHORIZATIONFILEREJECT"**： 认证中授权书已驳回的企业</li>
  <li>**"VERIFYING"**： 认证进行中的企业</li>
  <li>**"VERIFIED"**： 已认证完成的企业</li></ul>
 * @method integer getOffset() 获取指定分页返回第几页的数据，如果不传默认返回第一页。 页码从 0 开始，即首页为 0，最大20000。
 * @method void setOffset(integer $Offset) 设置指定分页返回第几页的数据，如果不传默认返回第一页。 页码从 0 开始，即首页为 0，最大20000。
 */
class DescribeChannelOrganizationsRequest extends AbstractModel
{
    /**
     * @var Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。

渠道应用标识: Agent.AppId
第三方平台子客企业标识: Agent.ProxyOrganizationOpenId
第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId

第三方平台子客企业和员工必须已经经过实名认证
     */
    public $Agent;

    /**
     * @var integer 指定分页每页返回的数据条数，单页最大支持 200。
     */
    public $Limit;

    /**
     * @var string 该字段是指第三方平台子客企业的唯一标识，用于查询单独某个子客的企业数据。

**注**：`如果需要批量查询本应用下的所有企业的信息，则该字段不需要赋值`
     */
    public $OrganizationOpenId;

    /**
     * @var array 可以按照当前企业的认证状态进行过滤。可值如下：
<ul><li>**"UNVERIFIED"**： 未认证的企业</li>
  <li>**"VERIFYINGLEGALPENDINGAUTHORIZATION"**： 认证中待法人授权的企业</li>
  <li>**"VERIFYINGAUTHORIZATIONFILEPENDING"**： 认证中授权书审核中的企业</li>
  <li>**"VERIFYINGAUTHORIZATIONFILEREJECT"**： 认证中授权书已驳回的企业</li>
  <li>**"VERIFYING"**： 认证进行中的企业</li>
  <li>**"VERIFIED"**： 已认证完成的企业</li></ul>
     */
    public $AuthorizationStatusList;

    /**
     * @var integer 指定分页返回第几页的数据，如果不传默认返回第一页。 页码从 0 开始，即首页为 0，最大20000。
     */
    public $Offset;

    /**
     * @param Agent $Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。

渠道应用标识: Agent.AppId
第三方平台子客企业标识: Agent.ProxyOrganizationOpenId
第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId

第三方平台子客企业和员工必须已经经过实名认证
     * @param integer $Limit 指定分页每页返回的数据条数，单页最大支持 200。
     * @param string $OrganizationOpenId 该字段是指第三方平台子客企业的唯一标识，用于查询单独某个子客的企业数据。

**注**：`如果需要批量查询本应用下的所有企业的信息，则该字段不需要赋值`
     * @param array $AuthorizationStatusList 可以按照当前企业的认证状态进行过滤。可值如下：
<ul><li>**"UNVERIFIED"**： 未认证的企业</li>
  <li>**"VERIFYINGLEGALPENDINGAUTHORIZATION"**： 认证中待法人授权的企业</li>
  <li>**"VERIFYINGAUTHORIZATIONFILEPENDING"**： 认证中授权书审核中的企业</li>
  <li>**"VERIFYINGAUTHORIZATIONFILEREJECT"**： 认证中授权书已驳回的企业</li>
  <li>**"VERIFYING"**： 认证进行中的企业</li>
  <li>**"VERIFIED"**： 已认证完成的企业</li></ul>
     * @param integer $Offset 指定分页返回第几页的数据，如果不传默认返回第一页。 页码从 0 开始，即首页为 0，最大20000。
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
