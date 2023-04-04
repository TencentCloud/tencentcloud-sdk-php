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
 * @method Agent getAgent() 获取应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 必填。
 * @method void setAgent(Agent $Agent) 设置应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 必填。
 * @method integer getOffset() 获取查询起始偏移，最大2000
 * @method void setOffset(integer $Offset) 设置查询起始偏移，最大2000
 * @method string getLimit() 获取查询数量，最大200
 * @method void setLimit(string $Limit) 设置查询数量，最大200
 * @method UserInfo getOperator() 获取操作人信息
 * @method void setOperator(UserInfo $Operator) 设置操作人信息
 * @method array getFilters() 获取查询的关键字段:
Key:"RoleType",Vales:["1"]查询系统角色，Values:["2]查询自定义角色
Key:"RoleStatus",Values:["1"]查询启用角色，Values:["2"]查询禁用角色
 * @method void setFilters(array $Filters) 设置查询的关键字段:
Key:"RoleType",Vales:["1"]查询系统角色，Values:["2]查询自定义角色
Key:"RoleStatus",Values:["1"]查询启用角色，Values:["2"]查询禁用角色
 */
class ChannelDescribeRolesRequest extends AbstractModel
{
    /**
     * @var Agent 应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 必填。
     */
    public $Agent;

    /**
     * @var integer 查询起始偏移，最大2000
     */
    public $Offset;

    /**
     * @var string 查询数量，最大200
     */
    public $Limit;

    /**
     * @var UserInfo 操作人信息
     */
    public $Operator;

    /**
     * @var array 查询的关键字段:
Key:"RoleType",Vales:["1"]查询系统角色，Values:["2]查询自定义角色
Key:"RoleStatus",Values:["1"]查询启用角色，Values:["2"]查询禁用角色
     */
    public $Filters;

    /**
     * @param Agent $Agent 应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 必填。
     * @param integer $Offset 查询起始偏移，最大2000
     * @param string $Limit 查询数量，最大200
     * @param UserInfo $Operator 操作人信息
     * @param array $Filters 查询的关键字段:
Key:"RoleType",Vales:["1"]查询系统角色，Values:["2]查询自定义角色
Key:"RoleStatus",Values:["1"]查询启用角色，Values:["2"]查询禁用角色
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
