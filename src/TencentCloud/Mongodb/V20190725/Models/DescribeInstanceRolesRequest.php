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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceRoles请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例id</p>
 * @method string getDatabase() 获取<p>数据库名，为空则查询所有数据库的角色</p>
 * @method void setDatabase(string $Database) 设置<p>数据库名，为空则查询所有数据库的角色</p>
 * @method array getRoleType() 获取<p>角色类型：builtin_database-内置数据库角色，builtin_cluster-内置集群角色，custom-自定义角色，为空则查询所有</p>
 * @method void setRoleType(array $RoleType) 设置<p>角色类型：builtin_database-内置数据库角色，builtin_cluster-内置集群角色，custom-自定义角色，为空则查询所有</p>
 * @method string getRoleName() 获取<p>角色名称，为空则查询所有角色</p>
 * @method void setRoleName(string $RoleName) 设置<p>角色名称，为空则查询所有角色</p>
 * @method string getSearchKey() 获取<p>通用搜索关键字，模糊匹配继承角色和权限相关数据库名、角色名、Action名等</p>
 * @method void setSearchKey(string $SearchKey) 设置<p>通用搜索关键字，模糊匹配继承角色和权限相关数据库名、角色名、Action名等</p>
 * @method string getOrderBy() 获取<p>排序字段，支持：RoleName，默认为 RoleName</p>
 * @method void setOrderBy(string $OrderBy) 设置<p>排序字段，支持：RoleName，默认为 RoleName</p>
 * @method string getOrderType() 获取<p>排序方式：asc-升序，desc-降序，默认为 asc</p>
 * @method void setOrderType(string $OrderType) 设置<p>排序方式：asc-升序，desc-降序，默认为 asc</p>
 * @method integer getOffset() 获取<p>分页偏移量，默认为 0</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量，默认为 0</p>
 * @method integer getLimit() 获取<p>每页数量，默认为 20，最大 100</p>
 * @method void setLimit(integer $Limit) 设置<p>每页数量，默认为 20，最大 100</p>
 */
class DescribeInstanceRolesRequest extends AbstractModel
{
    /**
     * @var string <p>实例id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>数据库名，为空则查询所有数据库的角色</p>
     */
    public $Database;

    /**
     * @var array <p>角色类型：builtin_database-内置数据库角色，builtin_cluster-内置集群角色，custom-自定义角色，为空则查询所有</p>
     */
    public $RoleType;

    /**
     * @var string <p>角色名称，为空则查询所有角色</p>
     */
    public $RoleName;

    /**
     * @var string <p>通用搜索关键字，模糊匹配继承角色和权限相关数据库名、角色名、Action名等</p>
     */
    public $SearchKey;

    /**
     * @var string <p>排序字段，支持：RoleName，默认为 RoleName</p>
     */
    public $OrderBy;

    /**
     * @var string <p>排序方式：asc-升序，desc-降序，默认为 asc</p>
     */
    public $OrderType;

    /**
     * @var integer <p>分页偏移量，默认为 0</p>
     */
    public $Offset;

    /**
     * @var integer <p>每页数量，默认为 20，最大 100</p>
     */
    public $Limit;

    /**
     * @param string $InstanceId <p>实例id</p>
     * @param string $Database <p>数据库名，为空则查询所有数据库的角色</p>
     * @param array $RoleType <p>角色类型：builtin_database-内置数据库角色，builtin_cluster-内置集群角色，custom-自定义角色，为空则查询所有</p>
     * @param string $RoleName <p>角色名称，为空则查询所有角色</p>
     * @param string $SearchKey <p>通用搜索关键字，模糊匹配继承角色和权限相关数据库名、角色名、Action名等</p>
     * @param string $OrderBy <p>排序字段，支持：RoleName，默认为 RoleName</p>
     * @param string $OrderType <p>排序方式：asc-升序，desc-降序，默认为 asc</p>
     * @param integer $Offset <p>分页偏移量，默认为 0</p>
     * @param integer $Limit <p>每页数量，默认为 20，最大 100</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("RoleType",$param) and $param["RoleType"] !== null) {
            $this->RoleType = $param["RoleType"];
        }

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
