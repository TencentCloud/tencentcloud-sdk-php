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
 * ListWorkspaceUsers请求参数结构体
 *
 * @method string getWorkspaceId() 获取<p>工作空间ID</p>
 * @method void setWorkspaceId(string $WorkspaceId) 设置<p>工作空间ID</p>
 * @method string getUserKeyword() 获取<p>用户名称或 UIN 模糊匹配</p>
 * @method void setUserKeyword(string $UserKeyword) 设置<p>用户名称或 UIN 模糊匹配</p>
 * @method array getRoleIds() 获取<p>角色ID列表，过滤角色关联的用户；可通过 ListWorkspaceRoles 接口获取</p>
 * @method void setRoleIds(array $RoleIds) 设置<p>角色ID列表，过滤角色关联的用户；可通过 ListWorkspaceRoles 接口获取</p>
 * @method array getUserUins() 获取<p>用户UIN列表，按UIN精确筛选</p>
 * @method void setUserUins(array $UserUins) 设置<p>用户UIN列表，按UIN精确筛选</p>
 * @method array getOrderBys() 获取<p>排序字段列表，如 [{Name: CreateTime, Direction: DESC}]；传入单个即单字段排序，默认按创建时间降序</p>
 * @method void setOrderBys(array $OrderBys) 设置<p>排序字段列表，如 [{Name: CreateTime, Direction: DESC}]；传入单个即单字段排序，默认按创建时间降序</p>
 * @method integer getPageNumber() 获取<p>页码，默认1，从1开始；小于1时按1处理</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>页码，默认1，从1开始；小于1时按1处理</p>
 * @method integer getPageSize() 获取<p>每页条数，默认10，取值范围为 [1,100]，越界时自动收敛到边界值</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页条数，默认10，取值范围为 [1,100]，越界时自动收敛到边界值</p>
 * @method string getExtendInfo() 获取<p>扩展信息（首次请求为空，翻页请求带响应中的ExtendInfo。连续翻页且item涉及权限过滤等场景，用于定位下次offset）</p>
 * @method void setExtendInfo(string $ExtendInfo) 设置<p>扩展信息（首次请求为空，翻页请求带响应中的ExtendInfo。连续翻页且item涉及权限过滤等场景，用于定位下次offset）</p>
 */
class ListWorkspaceUsersRequest extends AbstractModel
{
    /**
     * @var string <p>工作空间ID</p>
     */
    public $WorkspaceId;

    /**
     * @var string <p>用户名称或 UIN 模糊匹配</p>
     */
    public $UserKeyword;

    /**
     * @var array <p>角色ID列表，过滤角色关联的用户；可通过 ListWorkspaceRoles 接口获取</p>
     */
    public $RoleIds;

    /**
     * @var array <p>用户UIN列表，按UIN精确筛选</p>
     */
    public $UserUins;

    /**
     * @var array <p>排序字段列表，如 [{Name: CreateTime, Direction: DESC}]；传入单个即单字段排序，默认按创建时间降序</p>
     */
    public $OrderBys;

    /**
     * @var integer <p>页码，默认1，从1开始；小于1时按1处理</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>每页条数，默认10，取值范围为 [1,100]，越界时自动收敛到边界值</p>
     */
    public $PageSize;

    /**
     * @var string <p>扩展信息（首次请求为空，翻页请求带响应中的ExtendInfo。连续翻页且item涉及权限过滤等场景，用于定位下次offset）</p>
     */
    public $ExtendInfo;

    /**
     * @param string $WorkspaceId <p>工作空间ID</p>
     * @param string $UserKeyword <p>用户名称或 UIN 模糊匹配</p>
     * @param array $RoleIds <p>角色ID列表，过滤角色关联的用户；可通过 ListWorkspaceRoles 接口获取</p>
     * @param array $UserUins <p>用户UIN列表，按UIN精确筛选</p>
     * @param array $OrderBys <p>排序字段列表，如 [{Name: CreateTime, Direction: DESC}]；传入单个即单字段排序，默认按创建时间降序</p>
     * @param integer $PageNumber <p>页码，默认1，从1开始；小于1时按1处理</p>
     * @param integer $PageSize <p>每页条数，默认10，取值范围为 [1,100]，越界时自动收敛到边界值</p>
     * @param string $ExtendInfo <p>扩展信息（首次请求为空，翻页请求带响应中的ExtendInfo。连续翻页且item涉及权限过滤等场景，用于定位下次offset）</p>
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

        if (array_key_exists("UserKeyword",$param) and $param["UserKeyword"] !== null) {
            $this->UserKeyword = $param["UserKeyword"];
        }

        if (array_key_exists("RoleIds",$param) and $param["RoleIds"] !== null) {
            $this->RoleIds = $param["RoleIds"];
        }

        if (array_key_exists("UserUins",$param) and $param["UserUins"] !== null) {
            $this->UserUins = $param["UserUins"];
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

        if (array_key_exists("ExtendInfo",$param) and $param["ExtendInfo"] !== null) {
            $this->ExtendInfo = $param["ExtendInfo"];
        }
    }
}
