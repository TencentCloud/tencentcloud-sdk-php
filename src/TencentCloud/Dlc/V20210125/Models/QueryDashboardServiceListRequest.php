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
 * QueryDashboardServiceList请求参数结构体
 *
 * @method integer getPage() 获取<p>页码（默认1）</p>
 * @method void setPage(integer $Page) 设置<p>页码（默认1）</p>
 * @method integer getPageSize() 获取<p>每页数量（默认20）</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页数量（默认20）</p>
 * @method array getFilters() 获取<p>过滤条件。支持的过滤字段：Keyword（服务名称/模型名称模糊搜索）、Status（服务状态精确匹配，如 Running）、Engine（推理引擎匹配，如 vllm，用于 LLM 推理专项 tab，只要服务有至少一个 deployment 的 engine 匹配即返回）、ResourcePartitionId（资源分区精确匹配）</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件。支持的过滤字段：Keyword（服务名称/模型名称模糊搜索）、Status（服务状态精确匹配，如 Running）、Engine（推理引擎匹配，如 vllm，用于 LLM 推理专项 tab，只要服务有至少一个 deployment 的 engine 匹配即返回）、ResourcePartitionId（资源分区精确匹配）</p>
 * @method array getSortFields() 获取<p>排序字段列表（全局排序，支持按指标字段排序）</p>
 * @method void setSortFields(array $SortFields) 设置<p>排序字段列表（全局排序，支持按指标字段排序）</p>
 */
class QueryDashboardServiceListRequest extends AbstractModel
{
    /**
     * @var integer <p>页码（默认1）</p>
     */
    public $Page;

    /**
     * @var integer <p>每页数量（默认20）</p>
     */
    public $PageSize;

    /**
     * @var array <p>过滤条件。支持的过滤字段：Keyword（服务名称/模型名称模糊搜索）、Status（服务状态精确匹配，如 Running）、Engine（推理引擎匹配，如 vllm，用于 LLM 推理专项 tab，只要服务有至少一个 deployment 的 engine 匹配即返回）、ResourcePartitionId（资源分区精确匹配）</p>
     */
    public $Filters;

    /**
     * @var array <p>排序字段列表（全局排序，支持按指标字段排序）</p>
     */
    public $SortFields;

    /**
     * @param integer $Page <p>页码（默认1）</p>
     * @param integer $PageSize <p>每页数量（默认20）</p>
     * @param array $Filters <p>过滤条件。支持的过滤字段：Keyword（服务名称/模型名称模糊搜索）、Status（服务状态精确匹配，如 Running）、Engine（推理引擎匹配，如 vllm，用于 LLM 推理专项 tab，只要服务有至少一个 deployment 的 engine 匹配即返回）、ResourcePartitionId（资源分区精确匹配）</p>
     * @param array $SortFields <p>排序字段列表（全局排序，支持按指标字段排序）</p>
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
    }
}
