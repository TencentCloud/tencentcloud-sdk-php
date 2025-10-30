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
 * ChannelDescribeRoles请求参数结构体
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
 * @method string getLimit() 获取指定每页返回的数据条数，和Offset参数配合使用，单页最大200。

注: `因为历史原因, 此字段为字符串类型`
 * @method void setLimit(string $Limit) 设置指定每页返回的数据条数，和Offset参数配合使用，单页最大200。

注: `因为历史原因, 此字段为字符串类型`
 * @method array getFilters() 获取查询的关键字段:
Key:"**RoleType**",Values:["**1**"]查询系统角色，
Key:"**RoleType**",Values:["**2**"]查询自定义角色
Key:"**RoleStatus**",Values:["**1**"]查询启用角色
Key:"**RoleStatus**",Values:["**2**"]查询禁用角色
Key:"**IsReturnPermissionGroup**"，Values:["**0**"]表示接口不返回角色对应的权限树字段
Key:"**IsReturnPermissionGroup**"，Values:["**1**"]表示接口返回角色对应的权限树字段

注: `同名字的Key的过滤条件会冲突, 只能填写一个`

 * @method void setFilters(array $Filters) 设置查询的关键字段:
Key:"**RoleType**",Values:["**1**"]查询系统角色，
Key:"**RoleType**",Values:["**2**"]查询自定义角色
Key:"**RoleStatus**",Values:["**1**"]查询启用角色
Key:"**RoleStatus**",Values:["**2**"]查询禁用角色
Key:"**IsReturnPermissionGroup**"，Values:["**0**"]表示接口不返回角色对应的权限树字段
Key:"**IsReturnPermissionGroup**"，Values:["**1**"]表示接口返回角色对应的权限树字段

注: `同名字的Key的过滤条件会冲突, 只能填写一个`

 * @method integer getOffset() 获取查询结果分页返回，指定从第几页返回数据，和Limit参数配合使用，最大2000条。

注：
1.`offset从0开始，即第一页为0。`
2.`默认从第一页返回。`
 * @method void setOffset(integer $Offset) 设置查询结果分页返回，指定从第几页返回数据，和Limit参数配合使用，最大2000条。

注：
1.`offset从0开始，即第一页为0。`
2.`默认从第一页返回。`
 * @method UserInfo getOperator() 获取操作人信息
 * @method void setOperator(UserInfo $Operator) 设置操作人信息
 */
class ChannelDescribeRolesRequest extends AbstractModel
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
     * @var string 指定每页返回的数据条数，和Offset参数配合使用，单页最大200。

注: `因为历史原因, 此字段为字符串类型`
     */
    public $Limit;

    /**
     * @var array 查询的关键字段:
Key:"**RoleType**",Values:["**1**"]查询系统角色，
Key:"**RoleType**",Values:["**2**"]查询自定义角色
Key:"**RoleStatus**",Values:["**1**"]查询启用角色
Key:"**RoleStatus**",Values:["**2**"]查询禁用角色
Key:"**IsReturnPermissionGroup**"，Values:["**0**"]表示接口不返回角色对应的权限树字段
Key:"**IsReturnPermissionGroup**"，Values:["**1**"]表示接口返回角色对应的权限树字段

注: `同名字的Key的过滤条件会冲突, 只能填写一个`

     */
    public $Filters;

    /**
     * @var integer 查询结果分页返回，指定从第几页返回数据，和Limit参数配合使用，最大2000条。

注：
1.`offset从0开始，即第一页为0。`
2.`默认从第一页返回。`
     */
    public $Offset;

    /**
     * @var UserInfo 操作人信息
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
     * @param string $Limit 指定每页返回的数据条数，和Offset参数配合使用，单页最大200。

注: `因为历史原因, 此字段为字符串类型`
     * @param array $Filters 查询的关键字段:
Key:"**RoleType**",Values:["**1**"]查询系统角色，
Key:"**RoleType**",Values:["**2**"]查询自定义角色
Key:"**RoleStatus**",Values:["**1**"]查询启用角色
Key:"**RoleStatus**",Values:["**2**"]查询禁用角色
Key:"**IsReturnPermissionGroup**"，Values:["**0**"]表示接口不返回角色对应的权限树字段
Key:"**IsReturnPermissionGroup**"，Values:["**1**"]表示接口返回角色对应的权限树字段

注: `同名字的Key的过滤条件会冲突, 只能填写一个`

     * @param integer $Offset 查询结果分页返回，指定从第几页返回数据，和Limit参数配合使用，最大2000条。

注：
1.`offset从0开始，即第一页为0。`
2.`默认从第一页返回。`
     * @param UserInfo $Operator 操作人信息
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
