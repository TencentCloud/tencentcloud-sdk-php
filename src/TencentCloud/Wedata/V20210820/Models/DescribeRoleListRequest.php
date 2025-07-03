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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRoleList请求参数结构体
 *
 * @method boolean getShowAllRoles() 获取返回所有角色。
 * @method void setShowAllRoles(boolean $ShowAllRoles) 设置返回所有角色。
 * @method array getIncludeRoleTypes() 获取需要返回的角色类型(system,tenant,project)
 * @method void setIncludeRoleTypes(array $IncludeRoleTypes) 设置需要返回的角色类型(system,tenant,project)
 * @method boolean getDescribeMemberCount() 获取返回角色绑定人员统计，仅私有化版本支持
 * @method void setDescribeMemberCount(boolean $DescribeMemberCount) 设置返回角色绑定人员统计，仅私有化版本支持
 * @method boolean getDescribeOperator() 获取返回操作者信息，私有化多租户版本
 * @method void setDescribeOperator(boolean $DescribeOperator) 设置返回操作者信息，私有化多租户版本
 * @method boolean getDescribeSystemRoleOnly() 获取系统角色
 * @method void setDescribeSystemRoleOnly(boolean $DescribeSystemRoleOnly) 设置系统角色
 * @method boolean getDescribeCustomRoleOnly() 获取自定义角色
 * @method void setDescribeCustomRoleOnly(boolean $DescribeCustomRoleOnly) 设置自定义角色
 * @method boolean getDescribePrivileges() 获取查看权限
 * @method void setDescribePrivileges(boolean $DescribePrivileges) 设置查看权限
 * @method array getRoleIds() 获取筛选角色id
 * @method void setRoleIds(array $RoleIds) 设置筛选角色id
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method integer getPageNumber() 获取页码
 * @method void setPageNumber(integer $PageNumber) 设置页码
 * @method integer getPageSize() 获取分页信息
 * @method void setPageSize(integer $PageSize) 设置分页信息
 * @method array getFilters() 获取查询字段
 * @method void setFilters(array $Filters) 设置查询字段
 * @method array getOrderFields() 获取排序字段
 * @method void setOrderFields(array $OrderFields) 设置排序字段
 */
class DescribeRoleListRequest extends AbstractModel
{
    /**
     * @var boolean 返回所有角色。
     */
    public $ShowAllRoles;

    /**
     * @var array 需要返回的角色类型(system,tenant,project)
     */
    public $IncludeRoleTypes;

    /**
     * @var boolean 返回角色绑定人员统计，仅私有化版本支持
     */
    public $DescribeMemberCount;

    /**
     * @var boolean 返回操作者信息，私有化多租户版本
     */
    public $DescribeOperator;

    /**
     * @var boolean 系统角色
     */
    public $DescribeSystemRoleOnly;

    /**
     * @var boolean 自定义角色
     */
    public $DescribeCustomRoleOnly;

    /**
     * @var boolean 查看权限
     */
    public $DescribePrivileges;

    /**
     * @var array 筛选角色id
     */
    public $RoleIds;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var integer 页码
     */
    public $PageNumber;

    /**
     * @var integer 分页信息
     */
    public $PageSize;

    /**
     * @var array 查询字段
     */
    public $Filters;

    /**
     * @var array 排序字段
     */
    public $OrderFields;

    /**
     * @param boolean $ShowAllRoles 返回所有角色。
     * @param array $IncludeRoleTypes 需要返回的角色类型(system,tenant,project)
     * @param boolean $DescribeMemberCount 返回角色绑定人员统计，仅私有化版本支持
     * @param boolean $DescribeOperator 返回操作者信息，私有化多租户版本
     * @param boolean $DescribeSystemRoleOnly 系统角色
     * @param boolean $DescribeCustomRoleOnly 自定义角色
     * @param boolean $DescribePrivileges 查看权限
     * @param array $RoleIds 筛选角色id
     * @param string $ProjectId 项目id
     * @param integer $PageNumber 页码
     * @param integer $PageSize 分页信息
     * @param array $Filters 查询字段
     * @param array $OrderFields 排序字段
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
        if (array_key_exists("ShowAllRoles",$param) and $param["ShowAllRoles"] !== null) {
            $this->ShowAllRoles = $param["ShowAllRoles"];
        }

        if (array_key_exists("IncludeRoleTypes",$param) and $param["IncludeRoleTypes"] !== null) {
            $this->IncludeRoleTypes = $param["IncludeRoleTypes"];
        }

        if (array_key_exists("DescribeMemberCount",$param) and $param["DescribeMemberCount"] !== null) {
            $this->DescribeMemberCount = $param["DescribeMemberCount"];
        }

        if (array_key_exists("DescribeOperator",$param) and $param["DescribeOperator"] !== null) {
            $this->DescribeOperator = $param["DescribeOperator"];
        }

        if (array_key_exists("DescribeSystemRoleOnly",$param) and $param["DescribeSystemRoleOnly"] !== null) {
            $this->DescribeSystemRoleOnly = $param["DescribeSystemRoleOnly"];
        }

        if (array_key_exists("DescribeCustomRoleOnly",$param) and $param["DescribeCustomRoleOnly"] !== null) {
            $this->DescribeCustomRoleOnly = $param["DescribeCustomRoleOnly"];
        }

        if (array_key_exists("DescribePrivileges",$param) and $param["DescribePrivileges"] !== null) {
            $this->DescribePrivileges = $param["DescribePrivileges"];
        }

        if (array_key_exists("RoleIds",$param) and $param["RoleIds"] !== null) {
            $this->RoleIds = $param["RoleIds"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("OrderFields",$param) and $param["OrderFields"] !== null) {
            $this->OrderFields = [];
            foreach ($param["OrderFields"] as $key => $value){
                $obj = new OrderFields();
                $obj->deserialize($value);
                array_push($this->OrderFields, $obj);
            }
        }
    }
}
