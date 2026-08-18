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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeConsumptionDetailList请求参数结构体
 *
 * @method TimeRange getTimeRange() 获取<p>查询时间范围（Unix 秒）</p>
 * @method void setTimeRange(TimeRange $TimeRange) 设置<p>查询时间范围（Unix 秒）</p>
 * @method ViewScope getViewScope() 获取<p>视图范围：企业视图 / 空间视图</p>
 * @method void setViewScope(ViewScope $ViewScope) 设置<p>视图范围：企业视图 / 空间视图</p>
 * @method array getFilterList() 获取<p>扩展过滤。Filter 组合规则：多项 AND，同项 value_list OR。支持 Name：metric_source_type（METRIC_SOURCE_TYPE_* 或整数）、source_ids（多选来源ID）、resource_id/source_id（单选来源ID，source_ids 未传时生效）、space_id、user_id</p>
 * @method void setFilterList(array $FilterList) 设置<p>扩展过滤。Filter 组合规则：多项 AND，同项 value_list OR。支持 Name：metric_source_type（METRIC_SOURCE_TYPE_* 或整数）、source_ids（多选来源ID）、resource_id/source_id（单选来源ID，source_ids 未传时生效）、space_id、user_id</p>
 * @method integer getPageNumber() 获取<p>页码，从 0 开始</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>页码，从 0 开始</p>
 * @method integer getPageSize() 获取<p>每页数量，最大 100</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页数量，最大 100</p>
 */
class DescribeConsumptionDetailListRequest extends AbstractModel
{
    /**
     * @var TimeRange <p>查询时间范围（Unix 秒）</p>
     */
    public $TimeRange;

    /**
     * @var ViewScope <p>视图范围：企业视图 / 空间视图</p>
     */
    public $ViewScope;

    /**
     * @var array <p>扩展过滤。Filter 组合规则：多项 AND，同项 value_list OR。支持 Name：metric_source_type（METRIC_SOURCE_TYPE_* 或整数）、source_ids（多选来源ID）、resource_id/source_id（单选来源ID，source_ids 未传时生效）、space_id、user_id</p>
     */
    public $FilterList;

    /**
     * @var integer <p>页码，从 0 开始</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>每页数量，最大 100</p>
     */
    public $PageSize;

    /**
     * @param TimeRange $TimeRange <p>查询时间范围（Unix 秒）</p>
     * @param ViewScope $ViewScope <p>视图范围：企业视图 / 空间视图</p>
     * @param array $FilterList <p>扩展过滤。Filter 组合规则：多项 AND，同项 value_list OR。支持 Name：metric_source_type（METRIC_SOURCE_TYPE_* 或整数）、source_ids（多选来源ID）、resource_id/source_id（单选来源ID，source_ids 未传时生效）、space_id、user_id</p>
     * @param integer $PageNumber <p>页码，从 0 开始</p>
     * @param integer $PageSize <p>每页数量，最大 100</p>
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
        if (array_key_exists("TimeRange",$param) and $param["TimeRange"] !== null) {
            $this->TimeRange = new TimeRange();
            $this->TimeRange->deserialize($param["TimeRange"]);
        }

        if (array_key_exists("ViewScope",$param) and $param["ViewScope"] !== null) {
            $this->ViewScope = new ViewScope();
            $this->ViewScope->deserialize($param["ViewScope"]);
        }

        if (array_key_exists("FilterList",$param) and $param["FilterList"] !== null) {
            $this->FilterList = [];
            foreach ($param["FilterList"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->FilterList, $obj);
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
