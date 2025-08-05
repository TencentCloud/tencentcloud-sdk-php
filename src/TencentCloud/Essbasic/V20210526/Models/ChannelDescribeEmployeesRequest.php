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
 * ChannelDescribeEmployees请求参数结构体
 *
 * @method Agent getAgent() 获取关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li>
</ul>
第三方平台子客企业和员工必须已经经过实名认证
 * @method void setAgent(Agent $Agent) 设置关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li>
</ul>
第三方平台子客企业和员工必须已经经过实名认证
 * @method integer getLimit() 获取指定分页每页返回的数据条数，单页最大支持 20。
 * @method void setLimit(integer $Limit) 设置指定分页每页返回的数据条数，单页最大支持 20。
 * @method array getFilters() 获取查询的关键字段，支持Key-Values查询。可选键值如下：
<ul>
  <li>Key:**"Status"**，Values: **["IsVerified"]**, 查询已实名的员工</li>
  <li>Key:**"Status"**，Values: **["NotVerified"]**, 查询未实名的员工</li>
  <li>Key:**"Status"**，Values: **["QuiteJob"]**, 查询离职员工</li>
  <li>Key:**"ExcludeQuiteJob"**，Values: **["true"]**, 查询排除离职员工</li>
  <li>Key:**"StaffOpenId"**，Values: **["OpenId1","OpenId2",...]**, 根据第三方系统用户OpenId查询员工</li>
</ul>
注: `同名字的Key的过滤条件会冲突,  只能填写一个`
 * @method void setFilters(array $Filters) 设置查询的关键字段，支持Key-Values查询。可选键值如下：
<ul>
  <li>Key:**"Status"**，Values: **["IsVerified"]**, 查询已实名的员工</li>
  <li>Key:**"Status"**，Values: **["NotVerified"]**, 查询未实名的员工</li>
  <li>Key:**"Status"**，Values: **["QuiteJob"]**, 查询离职员工</li>
  <li>Key:**"ExcludeQuiteJob"**，Values: **["true"]**, 查询排除离职员工</li>
  <li>Key:**"StaffOpenId"**，Values: **["OpenId1","OpenId2",...]**, 根据第三方系统用户OpenId查询员工</li>
</ul>
注: `同名字的Key的过滤条件会冲突,  只能填写一个`
 * @method integer getOffset() 获取偏移量:从 0 开始，最大20000。
 * @method void setOffset(integer $Offset) 设置偏移量:从 0 开始，最大20000。
 * @method UserInfo getOperator() 获取暂未开放
 * @method void setOperator(UserInfo $Operator) 设置暂未开放
 */
class ChannelDescribeEmployeesRequest extends AbstractModel
{
    /**
     * @var Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li>
</ul>
第三方平台子客企业和员工必须已经经过实名认证
     */
    public $Agent;

    /**
     * @var integer 指定分页每页返回的数据条数，单页最大支持 20。
     */
    public $Limit;

    /**
     * @var array 查询的关键字段，支持Key-Values查询。可选键值如下：
<ul>
  <li>Key:**"Status"**，Values: **["IsVerified"]**, 查询已实名的员工</li>
  <li>Key:**"Status"**，Values: **["NotVerified"]**, 查询未实名的员工</li>
  <li>Key:**"Status"**，Values: **["QuiteJob"]**, 查询离职员工</li>
  <li>Key:**"ExcludeQuiteJob"**，Values: **["true"]**, 查询排除离职员工</li>
  <li>Key:**"StaffOpenId"**，Values: **["OpenId1","OpenId2",...]**, 根据第三方系统用户OpenId查询员工</li>
</ul>
注: `同名字的Key的过滤条件会冲突,  只能填写一个`
     */
    public $Filters;

    /**
     * @var integer 偏移量:从 0 开始，最大20000。
     */
    public $Offset;

    /**
     * @var UserInfo 暂未开放
     * @deprecated
     */
    public $Operator;

    /**
     * @param Agent $Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li>
</ul>
第三方平台子客企业和员工必须已经经过实名认证
     * @param integer $Limit 指定分页每页返回的数据条数，单页最大支持 20。
     * @param array $Filters 查询的关键字段，支持Key-Values查询。可选键值如下：
<ul>
  <li>Key:**"Status"**，Values: **["IsVerified"]**, 查询已实名的员工</li>
  <li>Key:**"Status"**，Values: **["NotVerified"]**, 查询未实名的员工</li>
  <li>Key:**"Status"**，Values: **["QuiteJob"]**, 查询离职员工</li>
  <li>Key:**"ExcludeQuiteJob"**，Values: **["true"]**, 查询排除离职员工</li>
  <li>Key:**"StaffOpenId"**，Values: **["OpenId1","OpenId2",...]**, 根据第三方系统用户OpenId查询员工</li>
</ul>
注: `同名字的Key的过滤条件会冲突,  只能填写一个`
     * @param integer $Offset 偏移量:从 0 开始，最大20000。
     * @param UserInfo $Operator 暂未开放
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }
    }
}
