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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEdgeKVNamespaces请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method integer getOffset() 获取分页查询偏移量。默认值：0。
 * @method void setOffset(integer $Offset) 设置分页查询偏移量。默认值：0。
 * @method integer getLimit() 获取分页查询限制数目。默认值：20，最大值：1000。
 * @method void setLimit(integer $Limit) 设置分页查询限制数目。默认值：20，最大值：1000。
 * @method string getSortBy() 获取排序依据，取值有：
<li>created-on：创建时间；</li>
<li>updated-on：更新时间。</li>
默认值为 created-on。
 * @method void setSortBy(string $SortBy) 设置排序依据，取值有：
<li>created-on：创建时间；</li>
<li>updated-on：更新时间。</li>
默认值为 created-on。
 * @method string getSortOrder() 获取列表排序方式，取值有：
<li>asc：升序排列；</li>
<li>desc：降序排列。</li>
默认值为 desc。

 * @method void setSortOrder(string $SortOrder) 设置列表排序方式，取值有：
<li>asc：升序排列；</li>
<li>desc：降序排列。</li>
默认值为 desc。

 * @method array getFilters() 获取过滤条件，Filters.Values 的上限为 20。该参数不填写时，返回站点 ID 下全部 KV 命名空间。详细的过滤条件如下：
<li>namespace：按照 KV 命名空间名称进行过滤，支持模糊查询；</li>
<li>remark：按照命名空间描述进行过滤，支持模糊查询。</li>

 * @method void setFilters(array $Filters) 设置过滤条件，Filters.Values 的上限为 20。该参数不填写时，返回站点 ID 下全部 KV 命名空间。详细的过滤条件如下：
<li>namespace：按照 KV 命名空间名称进行过滤，支持模糊查询；</li>
<li>remark：按照命名空间描述进行过滤，支持模糊查询。</li>
 */
class DescribeEdgeKVNamespacesRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var integer 分页查询偏移量。默认值：0。
     */
    public $Offset;

    /**
     * @var integer 分页查询限制数目。默认值：20，最大值：1000。
     */
    public $Limit;

    /**
     * @var string 排序依据，取值有：
<li>created-on：创建时间；</li>
<li>updated-on：更新时间。</li>
默认值为 created-on。
     */
    public $SortBy;

    /**
     * @var string 列表排序方式，取值有：
<li>asc：升序排列；</li>
<li>desc：降序排列。</li>
默认值为 desc。

     */
    public $SortOrder;

    /**
     * @var array 过滤条件，Filters.Values 的上限为 20。该参数不填写时，返回站点 ID 下全部 KV 命名空间。详细的过滤条件如下：
<li>namespace：按照 KV 命名空间名称进行过滤，支持模糊查询；</li>
<li>remark：按照命名空间描述进行过滤，支持模糊查询。</li>

     */
    public $Filters;

    /**
     * @param string $ZoneId 站点 ID。
     * @param integer $Offset 分页查询偏移量。默认值：0。
     * @param integer $Limit 分页查询限制数目。默认值：20，最大值：1000。
     * @param string $SortBy 排序依据，取值有：
<li>created-on：创建时间；</li>
<li>updated-on：更新时间。</li>
默认值为 created-on。
     * @param string $SortOrder 列表排序方式，取值有：
<li>asc：升序排列；</li>
<li>desc：降序排列。</li>
默认值为 desc。

     * @param array $Filters 过滤条件，Filters.Values 的上限为 20。该参数不填写时，返回站点 ID 下全部 KV 命名空间。详细的过滤条件如下：
<li>namespace：按照 KV 命名空间名称进行过滤，支持模糊查询；</li>
<li>remark：按照命名空间描述进行过滤，支持模糊查询。</li>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("SortOrder",$param) and $param["SortOrder"] !== null) {
            $this->SortOrder = $param["SortOrder"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AdvancedFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
