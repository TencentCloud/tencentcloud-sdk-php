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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeJobList请求参数结构体
 *
 * @method integer getPage() 获取<p>页码，从1开始，默认为1.</p>
 * @method void setPage(integer $Page) 设置<p>页码，从1开始，默认为1.</p>
 * @method integer getPageSize() 获取<p>每页返回数量，默认为10.</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页返回数量，默认为10.</p>
 * @method array getFilters() 获取<p>高级过滤条件列表，元素 Name 为过滤字段名（PascalCase，可用字段与操作符约束见各接口 Filters 说明），Values 为过滤值列表；未列入白名单或非 PascalCase 的 Name 报 InvalidParameter。</p>
 * @method void setFilters(array $Filters) 设置<p>高级过滤条件列表，元素 Name 为过滤字段名（PascalCase，可用字段与操作符约束见各接口 Filters 说明），Values 为过滤值列表；未列入白名单或非 PascalCase 的 Name 报 InvalidParameter。</p>
 * @method array getSortFields() 获取<p>排序字段列表，元素 Field 为排序字段名（PascalCase，与响应字段命名对齐，可用字段见各接口 SortFields 说明），Order 为排序方向（ASC/DESC，不传默认 DESC）；未列入白名单或非 PascalCase 的 Field 报 InvalidParameter。</p>
 * @method void setSortFields(array $SortFields) 设置<p>排序字段列表，元素 Field 为排序字段名（PascalCase，与响应字段命名对齐，可用字段见各接口 SortFields 说明），Order 为排序方向（ASC/DESC，不传默认 DESC）；未列入白名单或非 PascalCase 的 Field 报 InvalidParameter。</p>
 * @method integer getCreateTimeStart() 获取<p>创建时间下限（Unix 毫秒时间戳）。</p>
 * @method void setCreateTimeStart(integer $CreateTimeStart) 设置<p>创建时间下限（Unix 毫秒时间戳）。</p>
 * @method integer getCreateTimeEnd() 获取<p>创建时间上限（Unix 毫秒时间戳）。</p>
 * @method void setCreateTimeEnd(integer $CreateTimeEnd) 设置<p>创建时间上限（Unix 毫秒时间戳）。</p>
 */
class DescribeJobListRequest extends AbstractModel
{
    /**
     * @var integer <p>页码，从1开始，默认为1.</p>
     */
    public $Page;

    /**
     * @var integer <p>每页返回数量，默认为10.</p>
     */
    public $PageSize;

    /**
     * @var array <p>高级过滤条件列表，元素 Name 为过滤字段名（PascalCase，可用字段与操作符约束见各接口 Filters 说明），Values 为过滤值列表；未列入白名单或非 PascalCase 的 Name 报 InvalidParameter。</p>
     */
    public $Filters;

    /**
     * @var array <p>排序字段列表，元素 Field 为排序字段名（PascalCase，与响应字段命名对齐，可用字段见各接口 SortFields 说明），Order 为排序方向（ASC/DESC，不传默认 DESC）；未列入白名单或非 PascalCase 的 Field 报 InvalidParameter。</p>
     */
    public $SortFields;

    /**
     * @var integer <p>创建时间下限（Unix 毫秒时间戳）。</p>
     */
    public $CreateTimeStart;

    /**
     * @var integer <p>创建时间上限（Unix 毫秒时间戳）。</p>
     */
    public $CreateTimeEnd;

    /**
     * @param integer $Page <p>页码，从1开始，默认为1.</p>
     * @param integer $PageSize <p>每页返回数量，默认为10.</p>
     * @param array $Filters <p>高级过滤条件列表，元素 Name 为过滤字段名（PascalCase，可用字段与操作符约束见各接口 Filters 说明），Values 为过滤值列表；未列入白名单或非 PascalCase 的 Name 报 InvalidParameter。</p>
     * @param array $SortFields <p>排序字段列表，元素 Field 为排序字段名（PascalCase，与响应字段命名对齐，可用字段见各接口 SortFields 说明），Order 为排序方向（ASC/DESC，不传默认 DESC）；未列入白名单或非 PascalCase 的 Field 报 InvalidParameter。</p>
     * @param integer $CreateTimeStart <p>创建时间下限（Unix 毫秒时间戳）。</p>
     * @param integer $CreateTimeEnd <p>创建时间上限（Unix 毫秒时间戳）。</p>
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
        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("SortFields",$param) and $param["SortFields"] !== null) {
            $this->SortFields = [];
            foreach ($param["SortFields"] as $key => $value){
                $obj = new SortField();
                $obj->deserialize($value);
                array_push($this->SortFields, $obj);
            }
        }

        if (array_key_exists("CreateTimeStart",$param) and $param["CreateTimeStart"] !== null) {
            $this->CreateTimeStart = $param["CreateTimeStart"];
        }

        if (array_key_exists("CreateTimeEnd",$param) and $param["CreateTimeEnd"] !== null) {
            $this->CreateTimeEnd = $param["CreateTimeEnd"];
        }
    }
}
