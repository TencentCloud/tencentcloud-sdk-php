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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterVpcFwSwitchs请求参数结构体
 *
 * @method string getIndex() 获取<p>需要查询的索引，特定场景使用，可不填</p>
 * @method void setIndex(string $Index) 设置<p>需要查询的索引，特定场景使用，可不填</p>
 * @method array getFilters() 获取<p>过滤条件组合</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件组合</p>
 * @method integer getLimit() 获取<p>每页条数</p>
 * @method void setLimit(integer $Limit) 设置<p>每页条数</p>
 * @method integer getOffset() 获取<p>偏移值</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移值</p>
 * @method string getStartTime() 获取<p>检索的起始时间，可不传</p>
 * @method void setStartTime(string $StartTime) 设置<p>检索的起始时间，可不传</p>
 * @method string getEndTime() 获取<p>检索的截止时间，可不传</p>
 * @method void setEndTime(string $EndTime) 设置<p>检索的截止时间，可不传</p>
 * @method string getOrder() 获取<p>desc：降序；asc：升序。根据By字段的值进行排序，这里传参的话则By也必须有值</p>
 * @method void setOrder(string $Order) 设置<p>desc：降序；asc：升序。根据By字段的值进行排序，这里传参的话则By也必须有值</p>
 * @method string getBy() 获取<p>排序所用到的字段</p>
 * @method void setBy(string $By) 设置<p>排序所用到的字段</p>
 */
class DescribeClusterVpcFwSwitchsRequest extends AbstractModel
{
    /**
     * @var string <p>需要查询的索引，特定场景使用，可不填</p>
     */
    public $Index;

    /**
     * @var array <p>过滤条件组合</p>
     */
    public $Filters;

    /**
     * @var integer <p>每页条数</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移值</p>
     */
    public $Offset;

    /**
     * @var string <p>检索的起始时间，可不传</p>
     */
    public $StartTime;

    /**
     * @var string <p>检索的截止时间，可不传</p>
     */
    public $EndTime;

    /**
     * @var string <p>desc：降序；asc：升序。根据By字段的值进行排序，这里传参的话则By也必须有值</p>
     */
    public $Order;

    /**
     * @var string <p>排序所用到的字段</p>
     */
    public $By;

    /**
     * @param string $Index <p>需要查询的索引，特定场景使用，可不填</p>
     * @param array $Filters <p>过滤条件组合</p>
     * @param integer $Limit <p>每页条数</p>
     * @param integer $Offset <p>偏移值</p>
     * @param string $StartTime <p>检索的起始时间，可不传</p>
     * @param string $EndTime <p>检索的截止时间，可不传</p>
     * @param string $Order <p>desc：降序；asc：升序。根据By字段的值进行排序，这里传参的话则By也必须有值</p>
     * @param string $By <p>排序所用到的字段</p>
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
        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new CommonFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
