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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListWorkspaceGroups请求参数结构体
 *
 * @method string getWorkspaceId() 获取<p>工作空间ID</p>
 * @method void setWorkspaceId(string $WorkspaceId) 设置<p>工作空间ID</p>
 * @method array getGroupIds() 获取<p>通过用户组ID批量查询；用户组ID可通过 ListWorkspaceGroups 接口获取</p>
 * @method void setGroupIds(array $GroupIds) 设置<p>通过用户组ID批量查询；用户组ID可通过 ListWorkspaceGroups 接口获取</p>
 * @method string getGroupKeyword() 获取<p>用户组名称模糊匹配</p>
 * @method void setGroupKeyword(string $GroupKeyword) 设置<p>用户组名称模糊匹配</p>
 * @method array getRoleIds() 获取<p>用于过滤角色关联的用户组；可通过 ListWorkspaceRoles 接口获取</p>
 * @method void setRoleIds(array $RoleIds) 设置<p>用于过滤角色关联的用户组；可通过 ListWorkspaceRoles 接口获取</p>
 * @method array getOrderBys() 获取<p>多字段排序，如 [{Name: 'CreateTime', Direction: 'Desc'}]；传入单个即单字段排序，默认按创建时间降序</p>
 * @method void setOrderBys(array $OrderBys) 设置<p>多字段排序，如 [{Name: 'CreateTime', Direction: 'Desc'}]；传入单个即单字段排序，默认按创建时间降序</p>
 * @method integer getPageNumber() 获取<p>页码，从1开始，默认1；小于1时按1处理</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>页码，从1开始，默认1；小于1时按1处理</p>
 * @method integer getPageSize() 获取<p>每页大小，默认10，取值范围为 [1,100]，越界时自动收敛到边界值</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页大小，默认10，取值范围为 [1,100]，越界时自动收敛到边界值</p>
 * @method string getGroupType() 获取<p>用户组类型筛选。取值为枚举数值的字符串形式："0"=控制台系统类型（包含全部user）、"1"=控制台自定义类型、"2"=工作空间系统类型（包含工作空间全部user）、"3"=工作空间自定义类型</p>
 * @method void setGroupType(string $GroupType) 设置<p>用户组类型筛选。取值为枚举数值的字符串形式："0"=控制台系统类型（包含全部user）、"1"=控制台自定义类型、"2"=工作空间系统类型（包含工作空间全部user）、"3"=工作空间自定义类型</p>
 */
class ListWorkspaceGroupsRequest extends AbstractModel
{
    /**
     * @var string <p>工作空间ID</p>
     */
    public $WorkspaceId;

    /**
     * @var array <p>通过用户组ID批量查询；用户组ID可通过 ListWorkspaceGroups 接口获取</p>
     */
    public $GroupIds;

    /**
     * @var string <p>用户组名称模糊匹配</p>
     */
    public $GroupKeyword;

    /**
     * @var array <p>用于过滤角色关联的用户组；可通过 ListWorkspaceRoles 接口获取</p>
     */
    public $RoleIds;

    /**
     * @var array <p>多字段排序，如 [{Name: 'CreateTime', Direction: 'Desc'}]；传入单个即单字段排序，默认按创建时间降序</p>
     */
    public $OrderBys;

    /**
     * @var integer <p>页码，从1开始，默认1；小于1时按1处理</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>每页大小，默认10，取值范围为 [1,100]，越界时自动收敛到边界值</p>
     */
    public $PageSize;

    /**
     * @var string <p>用户组类型筛选。取值为枚举数值的字符串形式："0"=控制台系统类型（包含全部user）、"1"=控制台自定义类型、"2"=工作空间系统类型（包含工作空间全部user）、"3"=工作空间自定义类型</p>
     */
    public $GroupType;

    /**
     * @param string $WorkspaceId <p>工作空间ID</p>
     * @param array $GroupIds <p>通过用户组ID批量查询；用户组ID可通过 ListWorkspaceGroups 接口获取</p>
     * @param string $GroupKeyword <p>用户组名称模糊匹配</p>
     * @param array $RoleIds <p>用于过滤角色关联的用户组；可通过 ListWorkspaceRoles 接口获取</p>
     * @param array $OrderBys <p>多字段排序，如 [{Name: 'CreateTime', Direction: 'Desc'}]；传入单个即单字段排序，默认按创建时间降序</p>
     * @param integer $PageNumber <p>页码，从1开始，默认1；小于1时按1处理</p>
     * @param integer $PageSize <p>每页大小，默认10，取值范围为 [1,100]，越界时自动收敛到边界值</p>
     * @param string $GroupType <p>用户组类型筛选。取值为枚举数值的字符串形式："0"=控制台系统类型（包含全部user）、"1"=控制台自定义类型、"2"=工作空间系统类型（包含工作空间全部user）、"3"=工作空间自定义类型</p>
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
        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("GroupIds",$param) and $param["GroupIds"] !== null) {
            $this->GroupIds = $param["GroupIds"];
        }

        if (array_key_exists("GroupKeyword",$param) and $param["GroupKeyword"] !== null) {
            $this->GroupKeyword = $param["GroupKeyword"];
        }

        if (array_key_exists("RoleIds",$param) and $param["RoleIds"] !== null) {
            $this->RoleIds = $param["RoleIds"];
        }

        if (array_key_exists("OrderBys",$param) and $param["OrderBys"] !== null) {
            $this->OrderBys = [];
            foreach ($param["OrderBys"] as $key => $value){
                $obj = new OrderBy();
                $obj->deserialize($value);
                array_push($this->OrderBys, $obj);
            }
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }
    }
}
