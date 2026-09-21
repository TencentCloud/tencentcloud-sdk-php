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
 * ListConsoleGroupUsers请求参数结构体
 *
 * @method string getGroupId() 获取<p>用户组 ID</p>
 * @method void setGroupId(string $GroupId) 设置<p>用户组 ID</p>
 * @method string getUserKeyword() 获取<p>用户名称或 UIN 模糊匹配</p>
 * @method void setUserKeyword(string $UserKeyword) 设置<p>用户名称或 UIN 模糊匹配</p>
 * @method array getUserUins() 获取<p>通过 UIN 批量查询用户信息</p>
 * @method void setUserUins(array $UserUins) 设置<p>通过 UIN 批量查询用户信息</p>
 * @method array getOrderBys() 获取<p>多字段排序，如 [{Name: &#39;CreateTime&#39;, Direction: &#39;DESC&#39;}, {Name: &#39;UserName&#39;, Direction: &#39;ASC&#39;}]，默认按创建时间降序</p>
 * @method void setOrderBys(array $OrderBys) 设置<p>多字段排序，如 [{Name: &#39;CreateTime&#39;, Direction: &#39;DESC&#39;}, {Name: &#39;UserName&#39;, Direction: &#39;ASC&#39;}]，默认按创建时间降序</p>
 * @method integer getPageNumber() 获取<p>页码，从1开始，默认1</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>页码，从1开始，默认1</p>
 * @method integer getPageSize() 获取<p>每页大小，默认10，最小10，最大200</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页大小，默认10，最小10，最大200</p>
 */
class ListConsoleGroupUsersRequest extends AbstractModel
{
    /**
     * @var string <p>用户组 ID</p>
     */
    public $GroupId;

    /**
     * @var string <p>用户名称或 UIN 模糊匹配</p>
     */
    public $UserKeyword;

    /**
     * @var array <p>通过 UIN 批量查询用户信息</p>
     */
    public $UserUins;

    /**
     * @var array <p>多字段排序，如 [{Name: &#39;CreateTime&#39;, Direction: &#39;DESC&#39;}, {Name: &#39;UserName&#39;, Direction: &#39;ASC&#39;}]，默认按创建时间降序</p>
     */
    public $OrderBys;

    /**
     * @var integer <p>页码，从1开始，默认1</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>每页大小，默认10，最小10，最大200</p>
     */
    public $PageSize;

    /**
     * @param string $GroupId <p>用户组 ID</p>
     * @param string $UserKeyword <p>用户名称或 UIN 模糊匹配</p>
     * @param array $UserUins <p>通过 UIN 批量查询用户信息</p>
     * @param array $OrderBys <p>多字段排序，如 [{Name: &#39;CreateTime&#39;, Direction: &#39;DESC&#39;}, {Name: &#39;UserName&#39;, Direction: &#39;ASC&#39;}]，默认按创建时间降序</p>
     * @param integer $PageNumber <p>页码，从1开始，默认1</p>
     * @param integer $PageSize <p>每页大小，默认10，最小10，最大200</p>
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("UserKeyword",$param) and $param["UserKeyword"] !== null) {
            $this->UserKeyword = $param["UserKeyword"];
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
    }
}
