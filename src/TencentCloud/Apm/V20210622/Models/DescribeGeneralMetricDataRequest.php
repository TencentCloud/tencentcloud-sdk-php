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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGeneralMetricData请求参数结构体
 *
 * @method array getMetrics() 获取需要查询的指标名称，不可自定义输入，[详情请见。](https://cloud.tencent.com/document/product/248/101681)
 * @method void setMetrics(array $Metrics) 设置需要查询的指标名称，不可自定义输入，[详情请见。](https://cloud.tencent.com/document/product/248/101681)
 * @method string getInstanceId() 获取业务系统 ID
 * @method void setInstanceId(string $InstanceId) 设置业务系统 ID
 * @method string getViewName() 获取视图名称，不可自定义输入。[详情请见。](https://cloud.tencent.com/document/product/248/101681)
 * @method void setViewName(string $ViewName) 设置视图名称，不可自定义输入。[详情请见。](https://cloud.tencent.com/document/product/248/101681)
 * @method array getFilters() 获取要过滤的维度信息，不同视图有对应的指标维度，[详情请见。](https://cloud.tencent.com/document/product/248/101681)
 * @method void setFilters(array $Filters) 设置要过滤的维度信息，不同视图有对应的指标维度，[详情请见。](https://cloud.tencent.com/document/product/248/101681)
 * @method array getGroupBy() 获取聚合维度，不同视图有对应的指标维度，[详情请见。](https://cloud.tencent.com/document/product/248/101681)
 * @method void setGroupBy(array $GroupBy) 设置聚合维度，不同视图有对应的指标维度，[详情请见。](https://cloud.tencent.com/document/product/248/101681)
 * @method integer getStartTime() 获取起始时间的时间戳，支持查询30天内的指标数据。（单位：秒）
 * @method void setStartTime(integer $StartTime) 设置起始时间的时间戳，支持查询30天内的指标数据。（单位：秒）
 * @method integer getEndTime() 获取结束时间的时间戳，支持查询30天内的指标数据。（单位：秒）
 * @method void setEndTime(integer $EndTime) 设置结束时间的时间戳，支持查询30天内的指标数据。（单位：秒）
 * @method integer getPeriod() 获取是否按固定时间跨度聚合，填入1及大于1的值按1处理，不填按0处理。
- 填入0，则计算开始时间到截止时间的指标数据。
- 填入1，则会按照开始时间到截止时间的时间跨度选择聚合粒度：
 - 时间跨度 (0,12) 小时，则按一分钟粒度聚合。
 - 时间跨度 [12,48] 小时，则按五分钟粒度聚合。
 - 时间跨度 (48, +∞) 小时，则按一小时粒度聚合。
 * @method void setPeriod(integer $Period) 设置是否按固定时间跨度聚合，填入1及大于1的值按1处理，不填按0处理。
- 填入0，则计算开始时间到截止时间的指标数据。
- 填入1，则会按照开始时间到截止时间的时间跨度选择聚合粒度：
 - 时间跨度 (0,12) 小时，则按一分钟粒度聚合。
 - 时间跨度 [12,48] 小时，则按五分钟粒度聚合。
 - 时间跨度 (48, +∞) 小时，则按一小时粒度聚合。
 * @method OrderBy getOrderBy() 获取对查询指标进行排序：
Key 填写云 API 指标名称，[详情请见。](https://cloud.tencent.com/document/product/248/101681)
Value 填写排序方式：     
- asc：对查询指标进行升序排序
- desc：对查询指标进行降序排序
 * @method void setOrderBy(OrderBy $OrderBy) 设置对查询指标进行排序：
Key 填写云 API 指标名称，[详情请见。](https://cloud.tencent.com/document/product/248/101681)
Value 填写排序方式：     
- asc：对查询指标进行升序排序
- desc：对查询指标进行降序排序
 * @method integer getPageSize() 获取查询指标的限制条数，目前最多展示50条数据，PageSize取值为1-50，上送PageSize则根据PageSize的值展示限制条数。
 * @method void setPageSize(integer $PageSize) 设置查询指标的限制条数，目前最多展示50条数据，PageSize取值为1-50，上送PageSize则根据PageSize的值展示限制条数。
 */
class DescribeGeneralMetricDataRequest extends AbstractModel
{
    /**
     * @var array 需要查询的指标名称，不可自定义输入，[详情请见。](https://cloud.tencent.com/document/product/248/101681)
     */
    public $Metrics;

    /**
     * @var string 业务系统 ID
     */
    public $InstanceId;

    /**
     * @var string 视图名称，不可自定义输入。[详情请见。](https://cloud.tencent.com/document/product/248/101681)
     */
    public $ViewName;

    /**
     * @var array 要过滤的维度信息，不同视图有对应的指标维度，[详情请见。](https://cloud.tencent.com/document/product/248/101681)
     */
    public $Filters;

    /**
     * @var array 聚合维度，不同视图有对应的指标维度，[详情请见。](https://cloud.tencent.com/document/product/248/101681)
     */
    public $GroupBy;

    /**
     * @var integer 起始时间的时间戳，支持查询30天内的指标数据。（单位：秒）
     */
    public $StartTime;

    /**
     * @var integer 结束时间的时间戳，支持查询30天内的指标数据。（单位：秒）
     */
    public $EndTime;

    /**
     * @var integer 是否按固定时间跨度聚合，填入1及大于1的值按1处理，不填按0处理。
- 填入0，则计算开始时间到截止时间的指标数据。
- 填入1，则会按照开始时间到截止时间的时间跨度选择聚合粒度：
 - 时间跨度 (0,12) 小时，则按一分钟粒度聚合。
 - 时间跨度 [12,48] 小时，则按五分钟粒度聚合。
 - 时间跨度 (48, +∞) 小时，则按一小时粒度聚合。
     */
    public $Period;

    /**
     * @var OrderBy 对查询指标进行排序：
Key 填写云 API 指标名称，[详情请见。](https://cloud.tencent.com/document/product/248/101681)
Value 填写排序方式：     
- asc：对查询指标进行升序排序
- desc：对查询指标进行降序排序
     */
    public $OrderBy;

    /**
     * @var integer 查询指标的限制条数，目前最多展示50条数据，PageSize取值为1-50，上送PageSize则根据PageSize的值展示限制条数。
     */
    public $PageSize;

    /**
     * @param array $Metrics 需要查询的指标名称，不可自定义输入，[详情请见。](https://cloud.tencent.com/document/product/248/101681)
     * @param string $InstanceId 业务系统 ID
     * @param string $ViewName 视图名称，不可自定义输入。[详情请见。](https://cloud.tencent.com/document/product/248/101681)
     * @param array $Filters 要过滤的维度信息，不同视图有对应的指标维度，[详情请见。](https://cloud.tencent.com/document/product/248/101681)
     * @param array $GroupBy 聚合维度，不同视图有对应的指标维度，[详情请见。](https://cloud.tencent.com/document/product/248/101681)
     * @param integer $StartTime 起始时间的时间戳，支持查询30天内的指标数据。（单位：秒）
     * @param integer $EndTime 结束时间的时间戳，支持查询30天内的指标数据。（单位：秒）
     * @param integer $Period 是否按固定时间跨度聚合，填入1及大于1的值按1处理，不填按0处理。
- 填入0，则计算开始时间到截止时间的指标数据。
- 填入1，则会按照开始时间到截止时间的时间跨度选择聚合粒度：
 - 时间跨度 (0,12) 小时，则按一分钟粒度聚合。
 - 时间跨度 [12,48] 小时，则按五分钟粒度聚合。
 - 时间跨度 (48, +∞) 小时，则按一小时粒度聚合。
     * @param OrderBy $OrderBy 对查询指标进行排序：
Key 填写云 API 指标名称，[详情请见。](https://cloud.tencent.com/document/product/248/101681)
Value 填写排序方式：     
- asc：对查询指标进行升序排序
- desc：对查询指标进行降序排序
     * @param integer $PageSize 查询指标的限制条数，目前最多展示50条数据，PageSize取值为1-50，上送PageSize则根据PageSize的值展示限制条数。
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
        if (array_key_exists("Metrics",$param) and $param["Metrics"] !== null) {
            $this->Metrics = $param["Metrics"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ViewName",$param) and $param["ViewName"] !== null) {
            $this->ViewName = $param["ViewName"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new GeneralFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("GroupBy",$param) and $param["GroupBy"] !== null) {
            $this->GroupBy = $param["GroupBy"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = new OrderBy();
            $this->OrderBy->deserialize($param["OrderBy"]);
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
