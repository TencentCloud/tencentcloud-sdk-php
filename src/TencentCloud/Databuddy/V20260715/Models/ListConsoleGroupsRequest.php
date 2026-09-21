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
 * ListConsoleGroups请求参数结构体
 *
 * @method integer getPageNumber() 获取<p>页码，从1开始，默认1</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>页码，从1开始，默认1</p>
 * @method integer getPageSize() 获取<p>每页大小，默认10，最小10，最大200</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页大小，默认10，最小10，最大200</p>
 * @method array getGroupIds() 获取<p>通过用户组 ID 批量查询</p>
 * @method void setGroupIds(array $GroupIds) 设置<p>通过用户组 ID 批量查询</p>
 * @method string getGroupKeyword() 获取<p>用户组名称模糊匹配</p>
 * @method void setGroupKeyword(string $GroupKeyword) 设置<p>用户组名称模糊匹配</p>
 * @method array getOrderBys() 获取<p>多字段排序，如 [{Name: &#39;CreateTime&#39;, Direction: &#39;Desc&#39;}, {Name: &#39;UserName&#39;, Direction: &#39;Asc&#39;}]，默认按创建时间降序</p>
 * @method void setOrderBys(array $OrderBys) 设置<p>多字段排序，如 [{Name: &#39;CreateTime&#39;, Direction: &#39;Desc&#39;}, {Name: &#39;UserName&#39;, Direction: &#39;Asc&#39;}]，默认按创建时间降序</p>
 */
class ListConsoleGroupsRequest extends AbstractModel
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
     * @var array <p>通过用户组 ID 批量查询</p>
     */
    public $GroupIds;

    /**
     * @var string <p>用户组名称模糊匹配</p>
     */
    public $GroupKeyword;

    /**
     * @var array <p>多字段排序，如 [{Name: &#39;CreateTime&#39;, Direction: &#39;Desc&#39;}, {Name: &#39;UserName&#39;, Direction: &#39;Asc&#39;}]，默认按创建时间降序</p>
     */
    public $OrderBys;

    /**
     * @param integer $PageNumber <p>页码，从1开始，默认1</p>
     * @param integer $PageSize <p>每页大小，默认10，最小10，最大200</p>
     * @param array $GroupIds <p>通过用户组 ID 批量查询</p>
     * @param string $GroupKeyword <p>用户组名称模糊匹配</p>
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

        if (array_key_exists("GroupIds",$param) and $param["GroupIds"] !== null) {
            $this->GroupIds = $param["GroupIds"];
        }

        if (array_key_exists("GroupKeyword",$param) and $param["GroupKeyword"] !== null) {
            $this->GroupKeyword = $param["GroupKeyword"];
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
