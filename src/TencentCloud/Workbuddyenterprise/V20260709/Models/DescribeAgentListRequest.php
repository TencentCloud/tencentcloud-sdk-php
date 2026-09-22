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
namespace TencentCloud\Workbuddyenterprise\V20260709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAgentList请求参数结构体
 *
 * @method integer getOffset() 获取偏移量，从 0 开始
 * @method void setOffset(integer $Offset) 设置偏移量，从 0 开始
 * @method integer getLimit() 获取返回数量，缺省为 20，最大 100
 * @method void setLimit(integer $Limit) 设置返回数量，缺省为 20，最大 100
 * @method array getFilters() 获取过滤条件数组，多个 Filter 之间为 AND 关系，同一 Filter 内多个 Values 为 OR 关系
 * @method void setFilters(array $Filters) 设置过滤条件数组，多个 Filter 之间为 AND 关系，同一 Filter 内多个 Values 为 OR 关系
 * @method string getSortBy() 获取排序字段
 * @method void setSortBy(string $SortBy) 设置排序字段
 * @method string getSortDirection() 获取排序方向：ASC / DESC
 * @method void setSortDirection(string $SortDirection) 设置排序方向：ASC / DESC
 */
class DescribeAgentListRequest extends AbstractModel
{
    /**
     * @var integer 偏移量，从 0 开始
     */
    public $Offset;

    /**
     * @var integer 返回数量，缺省为 20，最大 100
     */
    public $Limit;

    /**
     * @var array 过滤条件数组，多个 Filter 之间为 AND 关系，同一 Filter 内多个 Values 为 OR 关系
     */
    public $Filters;

    /**
     * @var string 排序字段
     */
    public $SortBy;

    /**
     * @var string 排序方向：ASC / DESC
     */
    public $SortDirection;

    /**
     * @param integer $Offset 偏移量，从 0 开始
     * @param integer $Limit 返回数量，缺省为 20，最大 100
     * @param array $Filters 过滤条件数组，多个 Filter 之间为 AND 关系，同一 Filter 内多个 Values 为 OR 关系
     * @param string $SortBy 排序字段
     * @param string $SortDirection 排序方向：ASC / DESC
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
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

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("SortDirection",$param) and $param["SortDirection"] !== null) {
            $this->SortDirection = $param["SortDirection"];
        }
    }
}
