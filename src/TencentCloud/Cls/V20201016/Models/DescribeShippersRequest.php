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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeShippers请求参数结构体
 *
 * @method array getFilters() 获取- shipperName：按照【投递规则名称】进行过滤。
    类型：String。
    必选：否
- shipperId：按照【投递规则ID】进行过滤。
    类型：String。
    必选：否
- topicId：按照【日志主题】进行过滤。
    类型：String。
    必选：否
- taskStatus：按照【任务运行状态】进行过滤。 支持`0`：停止，`1`：运行中，`2`：异常
    类型：String
    必选：否

每次请求的Filters的上限为10，Filter.Values的上限为10。
 * @method void setFilters(array $Filters) 设置- shipperName：按照【投递规则名称】进行过滤。
    类型：String。
    必选：否
- shipperId：按照【投递规则ID】进行过滤。
    类型：String。
    必选：否
- topicId：按照【日志主题】进行过滤。
    类型：String。
    必选：否
- taskStatus：按照【任务运行状态】进行过滤。 支持`0`：停止，`1`：运行中，`2`：异常
    类型：String
    必选：否

每次请求的Filters的上限为10，Filter.Values的上限为10。
 * @method integer getOffset() 获取分页的偏移量，默认值为0
 * @method void setOffset(integer $Offset) 设置分页的偏移量，默认值为0
 * @method integer getLimit() 获取分页单页的限制数目，默认值为20，最大值100
 * @method void setLimit(integer $Limit) 设置分页单页的限制数目，默认值为20，最大值100
 * @method integer getPreciseSearch() 获取控制Filters相关字段是否为精确匹配。  0: 默认值，shipperName模糊匹配 1: shipperName 精确匹配
 * @method void setPreciseSearch(integer $PreciseSearch) 设置控制Filters相关字段是否为精确匹配。  0: 默认值，shipperName模糊匹配 1: shipperName 精确匹配
 */
class DescribeShippersRequest extends AbstractModel
{
    /**
     * @var array - shipperName：按照【投递规则名称】进行过滤。
    类型：String。
    必选：否
- shipperId：按照【投递规则ID】进行过滤。
    类型：String。
    必选：否
- topicId：按照【日志主题】进行过滤。
    类型：String。
    必选：否
- taskStatus：按照【任务运行状态】进行过滤。 支持`0`：停止，`1`：运行中，`2`：异常
    类型：String
    必选：否

每次请求的Filters的上限为10，Filter.Values的上限为10。
     */
    public $Filters;

    /**
     * @var integer 分页的偏移量，默认值为0
     */
    public $Offset;

    /**
     * @var integer 分页单页的限制数目，默认值为20，最大值100
     */
    public $Limit;

    /**
     * @var integer 控制Filters相关字段是否为精确匹配。  0: 默认值，shipperName模糊匹配 1: shipperName 精确匹配
     */
    public $PreciseSearch;

    /**
     * @param array $Filters - shipperName：按照【投递规则名称】进行过滤。
    类型：String。
    必选：否
- shipperId：按照【投递规则ID】进行过滤。
    类型：String。
    必选：否
- topicId：按照【日志主题】进行过滤。
    类型：String。
    必选：否
- taskStatus：按照【任务运行状态】进行过滤。 支持`0`：停止，`1`：运行中，`2`：异常
    类型：String
    必选：否

每次请求的Filters的上限为10，Filter.Values的上限为10。
     * @param integer $Offset 分页的偏移量，默认值为0
     * @param integer $Limit 分页单页的限制数目，默认值为20，最大值100
     * @param integer $PreciseSearch 控制Filters相关字段是否为精确匹配。  0: 默认值，shipperName模糊匹配 1: shipperName 精确匹配
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("PreciseSearch",$param) and $param["PreciseSearch"] !== null) {
            $this->PreciseSearch = $param["PreciseSearch"];
        }
    }
}
