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
 * ListConsoleUsers请求参数结构体
 *
 * @method integer getPageNumber() 获取<p>页码，从1开始，默认1</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>页码，从1开始，默认1</p>
 * @method integer getPageSize() 获取<p>每页大小，默认10，最小10，最大200</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页大小，默认10，最小10，最大200</p>
 * @method string getUserKeyword() 获取<p>用户名称与 UIN 模糊匹配</p>
 * @method void setUserKeyword(string $UserKeyword) 设置<p>用户名称与 UIN 模糊匹配</p>
 * @method array getRoleIds() 获取<p>用于过滤角色关联的用户</p><p>枚举值：</p><ul><li>2001： 控制台管理员</li><li>2002： 控制台成员</li></ul>
 * @method void setRoleIds(array $RoleIds) 设置<p>用于过滤角色关联的用户</p><p>枚举值：</p><ul><li>2001： 控制台管理员</li><li>2002： 控制台成员</li></ul>
 * @method array getOrderBys() 获取<p>多字段排序，如 [{Name: &#39;CreateTime&#39;, Direction: &#39;Desc&#39;}, {Name: &#39;UserName&#39;, Direction: &#39;Asc&#39;}]，默认按创建时间降序</p>
 * @method void setOrderBys(array $OrderBys) 设置<p>多字段排序，如 [{Name: &#39;CreateTime&#39;, Direction: &#39;Desc&#39;}, {Name: &#39;UserName&#39;, Direction: &#39;Asc&#39;}]，默认按创建时间降序</p>
 */
class ListConsoleUsersRequest extends AbstractModel
{
    /**
     * @var integer <p>页码，从1开始，默认1</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>每页大小，默认10，最小10，最大200</p>
     */
    public $PageSize;

    /**
     * @var string <p>用户名称与 UIN 模糊匹配</p>
     */
    public $UserKeyword;

    /**
     * @var array <p>用于过滤角色关联的用户</p><p>枚举值：</p><ul><li>2001： 控制台管理员</li><li>2002： 控制台成员</li></ul>
     */
    public $RoleIds;

    /**
     * @var array <p>多字段排序，如 [{Name: &#39;CreateTime&#39;, Direction: &#39;Desc&#39;}, {Name: &#39;UserName&#39;, Direction: &#39;Asc&#39;}]，默认按创建时间降序</p>
     */
    public $OrderBys;

    /**
     * @param integer $PageNumber <p>页码，从1开始，默认1</p>
     * @param integer $PageSize <p>每页大小，默认10，最小10，最大200</p>
     * @param string $UserKeyword <p>用户名称与 UIN 模糊匹配</p>
     * @param array $RoleIds <p>用于过滤角色关联的用户</p><p>枚举值：</p><ul><li>2001： 控制台管理员</li><li>2002： 控制台成员</li></ul>
     * @param array $OrderBys <p>多字段排序，如 [{Name: &#39;CreateTime&#39;, Direction: &#39;Desc&#39;}, {Name: &#39;UserName&#39;, Direction: &#39;Asc&#39;}]，默认按创建时间降序</p>
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("UserKeyword",$param) and $param["UserKeyword"] !== null) {
            $this->UserKeyword = $param["UserKeyword"];
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
    }
}
