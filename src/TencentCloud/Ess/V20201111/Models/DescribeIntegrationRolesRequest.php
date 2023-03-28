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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIntegrationRoles请求参数结构体
 *
 * @method UserInfo getOperator() 获取操作人信息
 * @method void setOperator(UserInfo $Operator) 设置操作人信息
 * @method integer getLimit() 获取返回最大数量，最大为200
 * @method void setLimit(integer $Limit) 设置返回最大数量，最大为200
 * @method Agent getAgent() 获取代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
 * @method void setAgent(Agent $Agent) 设置代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
 * @method array getFilters() 获取查询的关键字段:
Key:"RoleType",Vales:["1"]查询系统角色，Values:["2]查询自定义角色
Key:"RoleStatus",Values:["1"]查询启用角色，Values:["2"]查询禁用角色
Key:"IsGroupRole"，Values:["0"],查询非集团角色，Values:["1"]表示查询集团角色
 * @method void setFilters(array $Filters) 设置查询的关键字段:
Key:"RoleType",Vales:["1"]查询系统角色，Values:["2]查询自定义角色
Key:"RoleStatus",Values:["1"]查询启用角色，Values:["2"]查询禁用角色
Key:"IsGroupRole"，Values:["0"],查询非集团角色，Values:["1"]表示查询集团角色
 * @method integer getOffset() 获取偏移量，默认为0，最大为2000
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0，最大为2000
 */
class DescribeIntegrationRolesRequest extends AbstractModel
{
    /**
     * @var UserInfo 操作人信息
     */
    public $Operator;

    /**
     * @var integer 返回最大数量，最大为200
     */
    public $Limit;

    /**
     * @var Agent 代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
     */
    public $Agent;

    /**
     * @var array 查询的关键字段:
Key:"RoleType",Vales:["1"]查询系统角色，Values:["2]查询自定义角色
Key:"RoleStatus",Values:["1"]查询启用角色，Values:["2"]查询禁用角色
Key:"IsGroupRole"，Values:["0"],查询非集团角色，Values:["1"]表示查询集团角色
     */
    public $Filters;

    /**
     * @var integer 偏移量，默认为0，最大为2000
     */
    public $Offset;

    /**
     * @param UserInfo $Operator 操作人信息
     * @param integer $Limit 返回最大数量，最大为200
     * @param Agent $Agent 代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
     * @param array $Filters 查询的关键字段:
Key:"RoleType",Vales:["1"]查询系统角色，Values:["2]查询自定义角色
Key:"RoleStatus",Values:["1"]查询启用角色，Values:["2"]查询禁用角色
Key:"IsGroupRole"，Values:["0"],查询非集团角色，Values:["1"]表示查询集团角色
     * @param integer $Offset 偏移量，默认为0，最大为2000
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
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
    }
}
