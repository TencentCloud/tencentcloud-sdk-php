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
 * ChannelDescribeRoles请求参数结构体
 *
 * @method Agent getAgent() 获取应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 必填。
 * @method void setAgent(Agent $Agent) 设置应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 必填。
 * @method string getLimit() 获取指定每页多少条数据，单页最大200
 * @method void setLimit(string $Limit) 设置指定每页多少条数据，单页最大200
 * @method array getFilters() 获取查询的关键字段:
Key:"RoleType",Values:["1"]查询系统角色，Values:["2"]查询自定义角色
Key:"RoleStatus",Values:["1"]查询启用角色，Values:["2"]查询禁用角色
Key:"IsReturnPermissionGroup"，Values:["0"]:表示接口不返回角色对应的权限树字段，Values:["1"]表示接口返回角色对应的权限树字段
 * @method void setFilters(array $Filters) 设置查询的关键字段:
Key:"RoleType",Values:["1"]查询系统角色，Values:["2"]查询自定义角色
Key:"RoleStatus",Values:["1"]查询启用角色，Values:["2"]查询禁用角色
Key:"IsReturnPermissionGroup"，Values:["0"]:表示接口不返回角色对应的权限树字段，Values:["1"]表示接口返回角色对应的权限树字段
 * @method integer getOffset() 获取查询结果分页返回，此处指定第几页，如果不传默认从第一页返回。页码从 0 开始，即首页为 0，最大2000
 * @method void setOffset(integer $Offset) 设置查询结果分页返回，此处指定第几页，如果不传默认从第一页返回。页码从 0 开始，即首页为 0，最大2000
 * @method UserInfo getOperator() 获取操作人信息
 * @method void setOperator(UserInfo $Operator) 设置操作人信息
 */
class ChannelDescribeRolesRequest extends AbstractModel
{
    /**
     * @var Agent 应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 必填。
     */
    public $Agent;

    /**
     * @var string 指定每页多少条数据，单页最大200
     */
    public $Limit;

    /**
     * @var array 查询的关键字段:
Key:"RoleType",Values:["1"]查询系统角色，Values:["2"]查询自定义角色
Key:"RoleStatus",Values:["1"]查询启用角色，Values:["2"]查询禁用角色
Key:"IsReturnPermissionGroup"，Values:["0"]:表示接口不返回角色对应的权限树字段，Values:["1"]表示接口返回角色对应的权限树字段
     */
    public $Filters;

    /**
     * @var integer 查询结果分页返回，此处指定第几页，如果不传默认从第一页返回。页码从 0 开始，即首页为 0，最大2000
     */
    public $Offset;

    /**
     * @var UserInfo 操作人信息
     * @deprecated
     */
    public $Operator;

    /**
     * @param Agent $Agent 应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 必填。
     * @param string $Limit 指定每页多少条数据，单页最大200
     * @param array $Filters 查询的关键字段:
Key:"RoleType",Values:["1"]查询系统角色，Values:["2"]查询自定义角色
Key:"RoleStatus",Values:["1"]查询启用角色，Values:["2"]查询禁用角色
Key:"IsReturnPermissionGroup"，Values:["0"]:表示接口不返回角色对应的权限树字段，Values:["1"]表示接口返回角色对应的权限树字段
     * @param integer $Offset 查询结果分页返回，此处指定第几页，如果不传默认从第一页返回。页码从 0 开始，即首页为 0，最大2000
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
