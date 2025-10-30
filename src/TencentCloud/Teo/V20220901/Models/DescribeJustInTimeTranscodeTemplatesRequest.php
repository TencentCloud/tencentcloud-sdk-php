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
 * DescribeJustInTimeTranscodeTemplates请求参数结构体
 *
 * @method string getZoneId() 获取站点ID。
 * @method void setZoneId(string $ZoneId) 设置站点ID。
 * @method array getFilters() 获取过滤条件，Filters 的上限为 20，Filters.Values 的上限为 20。该参数不填写时，默认返回当前 ZoneId 下有权限的即时转码模板。详细的过滤条件如下：<li>template-name：按照模版名批量进行过滤。例如：mytemplate；</li><li>template-type：按照模板类型批量进行过滤。例如：preset 或 custom。</li><li>template-id：按照模板 ID 批量进行过滤。例如：C1LZ7982VgTpYhJ7M。</li>默认为空。
 * @method void setFilters(array $Filters) 设置过滤条件，Filters 的上限为 20，Filters.Values 的上限为 20。该参数不填写时，默认返回当前 ZoneId 下有权限的即时转码模板。详细的过滤条件如下：<li>template-name：按照模版名批量进行过滤。例如：mytemplate；</li><li>template-type：按照模板类型批量进行过滤。例如：preset 或 custom。</li><li>template-id：按照模板 ID 批量进行过滤。例如：C1LZ7982VgTpYhJ7M。</li>默认为空。
 * @method string getSortBy() 获取排序字段，取值有：<li>createTime：模板创建时间。</li>默认值为：createTime。
 * @method void setSortBy(string $SortBy) 设置排序字段，取值有：<li>createTime：模板创建时间。</li>默认值为：createTime。
 * @method string getSortOrder() 获取排序方式，取值有：<li>asc：升序方式；</li><li>desc：降序方式。</li>默认值为：desc。
 * @method void setSortOrder(string $SortOrder) 设置排序方式，取值有：<li>asc：升序方式；</li><li>desc：降序方式。</li>默认值为：desc。
 * @method integer getOffset() 获取分页偏移量，默认值：0。
 * @method void setOffset(integer $Offset) 设置分页偏移量，默认值：0。
 * @method integer getLimit() 获取返回记录条数，默认值：20，最大值：1000。
 * @method void setLimit(integer $Limit) 设置返回记录条数，默认值：20，最大值：1000。
 */
class DescribeJustInTimeTranscodeTemplatesRequest extends AbstractModel
{
    /**
     * @var string 站点ID。
     */
    public $ZoneId;

    /**
     * @var array 过滤条件，Filters 的上限为 20，Filters.Values 的上限为 20。该参数不填写时，默认返回当前 ZoneId 下有权限的即时转码模板。详细的过滤条件如下：<li>template-name：按照模版名批量进行过滤。例如：mytemplate；</li><li>template-type：按照模板类型批量进行过滤。例如：preset 或 custom。</li><li>template-id：按照模板 ID 批量进行过滤。例如：C1LZ7982VgTpYhJ7M。</li>默认为空。
     */
    public $Filters;

    /**
     * @var string 排序字段，取值有：<li>createTime：模板创建时间。</li>默认值为：createTime。
     */
    public $SortBy;

    /**
     * @var string 排序方式，取值有：<li>asc：升序方式；</li><li>desc：降序方式。</li>默认值为：desc。
     */
    public $SortOrder;

    /**
     * @var integer 分页偏移量，默认值：0。
     */
    public $Offset;

    /**
     * @var integer 返回记录条数，默认值：20，最大值：1000。
     */
    public $Limit;

    /**
     * @param string $ZoneId 站点ID。
     * @param array $Filters 过滤条件，Filters 的上限为 20，Filters.Values 的上限为 20。该参数不填写时，默认返回当前 ZoneId 下有权限的即时转码模板。详细的过滤条件如下：<li>template-name：按照模版名批量进行过滤。例如：mytemplate；</li><li>template-type：按照模板类型批量进行过滤。例如：preset 或 custom。</li><li>template-id：按照模板 ID 批量进行过滤。例如：C1LZ7982VgTpYhJ7M。</li>默认为空。
     * @param string $SortBy 排序字段，取值有：<li>createTime：模板创建时间。</li>默认值为：createTime。
     * @param string $SortOrder 排序方式，取值有：<li>asc：升序方式；</li><li>desc：降序方式。</li>默认值为：desc。
     * @param integer $Offset 分页偏移量，默认值：0。
     * @param integer $Limit 返回记录条数，默认值：20，最大值：1000。
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

        if (array_key_exists("SortOrder",$param) and $param["SortOrder"] !== null) {
            $this->SortOrder = $param["SortOrder"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
