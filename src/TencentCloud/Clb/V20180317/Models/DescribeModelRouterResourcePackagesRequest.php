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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeModelRouterResourcePackages请求参数结构体
 *
 * @method array getModelRouterResourcePackageIds() 获取<p>模型路由资源包Id。</p>
 * @method void setModelRouterResourcePackageIds(array $ModelRouterResourcePackageIds) 设置<p>模型路由资源包Id。</p>
 * @method integer getOffset() 获取<p>数据偏移量。</p><p>默认值：0</p>
 * @method void setOffset(integer $Offset) 设置<p>数据偏移量。</p><p>默认值：0</p>
 * @method integer getLimit() 获取<p>返回的数量，最大值为100。</p><p>取值范围：[1, 100]</p><p>默认值：20</p>
 * @method void setLimit(integer $Limit) 设置<p>返回的数量，最大值为100。</p><p>取值范围：[1, 100]</p><p>默认值：20</p>
 * @method string getOrderBy() 获取<p>排序参数，支持以下字段：&quot;buyTime&quot;, &quot;startTime&quot;, &quot;endTime&quot;</p>
 * @method void setOrderBy(string $OrderBy) 设置<p>排序参数，支持以下字段：&quot;buyTime&quot;, &quot;startTime&quot;, &quot;endTime&quot;</p>
 * @method string getSortBy() 获取<p>排序方式：asc，desc，默认asc</p>
 * @method void setSortBy(string $SortBy) 设置<p>排序方式：asc，desc，默认asc</p>
 * @method array getFilters() 获取<p>查询的过滤条件。</p><p>每次请求的Filters的上限为10，Filter.Values的上限为100。 Filter.Name和Filter.Values皆为必填项。详细的过滤条件如下： status - Integer - 是否必填：否 - 状态：0-有效 1-已退款 2-已过期 3-已用完。 effect_time_start - String - 是否必填：否 - 生效起始时间,YYYY-MM-DD HH:MM:SS格式。 effect_time_end - String - 是否必填：否 - 生效截止时间。 expire_time_start - String - 是否必填：否 - 失效起始时间。 expire_time_end - String - 是否必填：否 - 失效截止时间。</p>
 * @method void setFilters(array $Filters) 设置<p>查询的过滤条件。</p><p>每次请求的Filters的上限为10，Filter.Values的上限为100。 Filter.Name和Filter.Values皆为必填项。详细的过滤条件如下： status - Integer - 是否必填：否 - 状态：0-有效 1-已退款 2-已过期 3-已用完。 effect_time_start - String - 是否必填：否 - 生效起始时间,YYYY-MM-DD HH:MM:SS格式。 effect_time_end - String - 是否必填：否 - 生效截止时间。 expire_time_start - String - 是否必填：否 - 失效起始时间。 expire_time_end - String - 是否必填：否 - 失效截止时间。</p>
 */
class DescribeModelRouterResourcePackagesRequest extends AbstractModel
{
    /**
     * @var array <p>模型路由资源包Id。</p>
     */
    public $ModelRouterResourcePackageIds;

    /**
     * @var integer <p>数据偏移量。</p><p>默认值：0</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回的数量，最大值为100。</p><p>取值范围：[1, 100]</p><p>默认值：20</p>
     */
    public $Limit;

    /**
     * @var string <p>排序参数，支持以下字段：&quot;buyTime&quot;, &quot;startTime&quot;, &quot;endTime&quot;</p>
     */
    public $OrderBy;

    /**
     * @var string <p>排序方式：asc，desc，默认asc</p>
     */
    public $SortBy;

    /**
     * @var array <p>查询的过滤条件。</p><p>每次请求的Filters的上限为10，Filter.Values的上限为100。 Filter.Name和Filter.Values皆为必填项。详细的过滤条件如下： status - Integer - 是否必填：否 - 状态：0-有效 1-已退款 2-已过期 3-已用完。 effect_time_start - String - 是否必填：否 - 生效起始时间,YYYY-MM-DD HH:MM:SS格式。 effect_time_end - String - 是否必填：否 - 生效截止时间。 expire_time_start - String - 是否必填：否 - 失效起始时间。 expire_time_end - String - 是否必填：否 - 失效截止时间。</p>
     */
    public $Filters;

    /**
     * @param array $ModelRouterResourcePackageIds <p>模型路由资源包Id。</p>
     * @param integer $Offset <p>数据偏移量。</p><p>默认值：0</p>
     * @param integer $Limit <p>返回的数量，最大值为100。</p><p>取值范围：[1, 100]</p><p>默认值：20</p>
     * @param string $OrderBy <p>排序参数，支持以下字段：&quot;buyTime&quot;, &quot;startTime&quot;, &quot;endTime&quot;</p>
     * @param string $SortBy <p>排序方式：asc，desc，默认asc</p>
     * @param array $Filters <p>查询的过滤条件。</p><p>每次请求的Filters的上限为10，Filter.Values的上限为100。 Filter.Name和Filter.Values皆为必填项。详细的过滤条件如下： status - Integer - 是否必填：否 - 状态：0-有效 1-已退款 2-已过期 3-已用完。 effect_time_start - String - 是否必填：否 - 生效起始时间,YYYY-MM-DD HH:MM:SS格式。 effect_time_end - String - 是否必填：否 - 生效截止时间。 expire_time_start - String - 是否必填：否 - 失效起始时间。 expire_time_end - String - 是否必填：否 - 失效截止时间。</p>
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
        if (array_key_exists("ModelRouterResourcePackageIds",$param) and $param["ModelRouterResourcePackageIds"] !== null) {
            $this->ModelRouterResourcePackageIds = $param["ModelRouterResourcePackageIds"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
