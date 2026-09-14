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
 * @method Agent getAgent() 获取<p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li></ul>第三方平台子客企业和员工必须已经经过实名认证
 * @method void setAgent(Agent $Agent) 设置<p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li></ul>第三方平台子客企业和员工必须已经经过实名认证
 * @method string getLimit() 获取<p>指定每页返回的数据条数，和Offset参数配合使用，单页最大200。</p><p>注: <code>因为历史原因, 此字段为字符串类型</code></p>
 * @method void setLimit(string $Limit) 设置<p>指定每页返回的数据条数，和Offset参数配合使用，单页最大200。</p><p>注: <code>因为历史原因, 此字段为字符串类型</code></p>
 * @method array getFilters() 获取<p>查询的关键字段:<br>Key:&quot;<strong>RoleType</strong>&quot;,Values:[&quot;<strong>1</strong>&quot;]查询系统角色，<br>Key:&quot;<strong>RoleType</strong>&quot;,Values:[&quot;<strong>2</strong>&quot;]查询自定义角色<br>Key:&quot;<strong>RoleStatus</strong>&quot;,Values:[&quot;<strong>1</strong>&quot;]查询启用角色<br>Key:&quot;<strong>RoleStatus</strong>&quot;,Values:[&quot;<strong>2</strong>&quot;]查询禁用角色<br>Key:&quot;<strong>IsReturnPermissionGroup</strong>&quot;，Values:[&quot;<strong>0</strong>&quot;]表示接口不返回角色对应的权限树字段<br>Key:&quot;<strong>IsReturnPermissionGroup</strong>&quot;，Values:[&quot;<strong>1</strong>&quot;]表示接口返回角色对应的权限树字段</p><p>注: <code>同名字的Key的过滤条件会冲突, 只能填写一个</code></p>
 * @method void setFilters(array $Filters) 设置<p>查询的关键字段:<br>Key:&quot;<strong>RoleType</strong>&quot;,Values:[&quot;<strong>1</strong>&quot;]查询系统角色，<br>Key:&quot;<strong>RoleType</strong>&quot;,Values:[&quot;<strong>2</strong>&quot;]查询自定义角色<br>Key:&quot;<strong>RoleStatus</strong>&quot;,Values:[&quot;<strong>1</strong>&quot;]查询启用角色<br>Key:&quot;<strong>RoleStatus</strong>&quot;,Values:[&quot;<strong>2</strong>&quot;]查询禁用角色<br>Key:&quot;<strong>IsReturnPermissionGroup</strong>&quot;，Values:[&quot;<strong>0</strong>&quot;]表示接口不返回角色对应的权限树字段<br>Key:&quot;<strong>IsReturnPermissionGroup</strong>&quot;，Values:[&quot;<strong>1</strong>&quot;]表示接口返回角色对应的权限树字段</p><p>注: <code>同名字的Key的过滤条件会冲突, 只能填写一个</code></p>
 * @method integer getOffset() 获取<p>查询结果分页返回，指定从第几页返回数据，和Limit参数配合使用，最大2000条。</p><p>注：<br>1.<code>offset从0开始，即第一页为0。</code><br>2.<code>默认从第一页返回。</code></p>
 * @method void setOffset(integer $Offset) 设置<p>查询结果分页返回，指定从第几页返回数据，和Limit参数配合使用，最大2000条。</p><p>注：<br>1.<code>offset从0开始，即第一页为0。</code><br>2.<code>默认从第一页返回。</code></p>
 * @method UserInfo getOperator() 获取<p>操作人信息</p>
 * @method void setOperator(UserInfo $Operator) 设置<p>操作人信息</p>
 */
class ChannelDescribeRolesRequest extends AbstractModel
{
    /**
     * @var Agent <p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li></ul>第三方平台子客企业和员工必须已经经过实名认证
     */
    public $Agent;

    /**
     * @var string <p>指定每页返回的数据条数，和Offset参数配合使用，单页最大200。</p><p>注: <code>因为历史原因, 此字段为字符串类型</code></p>
     */
    public $Limit;

    /**
     * @var array <p>查询的关键字段:<br>Key:&quot;<strong>RoleType</strong>&quot;,Values:[&quot;<strong>1</strong>&quot;]查询系统角色，<br>Key:&quot;<strong>RoleType</strong>&quot;,Values:[&quot;<strong>2</strong>&quot;]查询自定义角色<br>Key:&quot;<strong>RoleStatus</strong>&quot;,Values:[&quot;<strong>1</strong>&quot;]查询启用角色<br>Key:&quot;<strong>RoleStatus</strong>&quot;,Values:[&quot;<strong>2</strong>&quot;]查询禁用角色<br>Key:&quot;<strong>IsReturnPermissionGroup</strong>&quot;，Values:[&quot;<strong>0</strong>&quot;]表示接口不返回角色对应的权限树字段<br>Key:&quot;<strong>IsReturnPermissionGroup</strong>&quot;，Values:[&quot;<strong>1</strong>&quot;]表示接口返回角色对应的权限树字段</p><p>注: <code>同名字的Key的过滤条件会冲突, 只能填写一个</code></p>
     */
    public $Filters;

    /**
     * @var integer <p>查询结果分页返回，指定从第几页返回数据，和Limit参数配合使用，最大2000条。</p><p>注：<br>1.<code>offset从0开始，即第一页为0。</code><br>2.<code>默认从第一页返回。</code></p>
     */
    public $Offset;

    /**
     * @var UserInfo <p>操作人信息</p>
     * @deprecated
     */
    public $Operator;

    /**
     * @param Agent $Agent <p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li></ul>第三方平台子客企业和员工必须已经经过实名认证
     * @param string $Limit <p>指定每页返回的数据条数，和Offset参数配合使用，单页最大200。</p><p>注: <code>因为历史原因, 此字段为字符串类型</code></p>
     * @param array $Filters <p>查询的关键字段:<br>Key:&quot;<strong>RoleType</strong>&quot;,Values:[&quot;<strong>1</strong>&quot;]查询系统角色，<br>Key:&quot;<strong>RoleType</strong>&quot;,Values:[&quot;<strong>2</strong>&quot;]查询自定义角色<br>Key:&quot;<strong>RoleStatus</strong>&quot;,Values:[&quot;<strong>1</strong>&quot;]查询启用角色<br>Key:&quot;<strong>RoleStatus</strong>&quot;,Values:[&quot;<strong>2</strong>&quot;]查询禁用角色<br>Key:&quot;<strong>IsReturnPermissionGroup</strong>&quot;，Values:[&quot;<strong>0</strong>&quot;]表示接口不返回角色对应的权限树字段<br>Key:&quot;<strong>IsReturnPermissionGroup</strong>&quot;，Values:[&quot;<strong>1</strong>&quot;]表示接口返回角色对应的权限树字段</p><p>注: <code>同名字的Key的过滤条件会冲突, 只能填写一个</code></p>
     * @param integer $Offset <p>查询结果分页返回，指定从第几页返回数据，和Limit参数配合使用，最大2000条。</p><p>注：<br>1.<code>offset从0开始，即第一页为0。</code><br>2.<code>默认从第一页返回。</code></p>
     * @param UserInfo $Operator <p>操作人信息</p>
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
