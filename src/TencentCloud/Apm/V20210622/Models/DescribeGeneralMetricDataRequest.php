<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method array getFilters() 获取要过滤的维度信息：
service_metric视图支持：service.name（服务名）、span.kind（客户端/服务端视角）为维度进行过滤，service.name（服务名）必填。
span.kind:
	server:服务端视角
	client:客户端视角
默认为服务端视角进行查询。
runtime_metric视图支持：service.name（服务名）维度进行过滤，service.name（服务名）必填。
sql_metric视图支持：service.name（服务名）、db.instance（数据库名称）、db.ip（数据库实例ip）维度进行过滤，查询service_slow_sql_count（慢sql）指标时service.name必填，查询sql_duration_avg（耗时）指标时db.instance（数据库名称）必填。
 * @method void setFilters(array $Filters) 设置要过滤的维度信息：
service_metric视图支持：service.name（服务名）、span.kind（客户端/服务端视角）为维度进行过滤，service.name（服务名）必填。
span.kind:
	server:服务端视角
	client:客户端视角
默认为服务端视角进行查询。
runtime_metric视图支持：service.name（服务名）维度进行过滤，service.name（服务名）必填。
sql_metric视图支持：service.name（服务名）、db.instance（数据库名称）、db.ip（数据库实例ip）维度进行过滤，查询service_slow_sql_count（慢sql）指标时service.name必填，查询sql_duration_avg（耗时）指标时db.instance（数据库名称）必填。
 * @method array getMetrics() 获取需要查询的指标，不可自定义输入。
service_metric视图支持：service_request_count（总请求）、service_duration（平均响应时间）、service_error_req_rate（平均错误率）、service_slow_call_count（慢调用）、service_error_request_count（异常数量）。
runtime_metric视图支持：service_gc_full_count（Full GC）。
sql_metric视图支持：service_slow_sql_count（慢sql）、sql_duration_avg（耗时）。
 * @method void setMetrics(array $Metrics) 设置需要查询的指标，不可自定义输入。
service_metric视图支持：service_request_count（总请求）、service_duration（平均响应时间）、service_error_req_rate（平均错误率）、service_slow_call_count（慢调用）、service_error_request_count（异常数量）。
runtime_metric视图支持：service_gc_full_count（Full GC）。
sql_metric视图支持：service_slow_sql_count（慢sql）、sql_duration_avg（耗时）。
 * @method string getInstanceId() 获取业务系统ID
 * @method void setInstanceId(string $InstanceId) 设置业务系统ID
 * @method string getViewName() 获取视图名称，不可自定义输入。支持：service_metric、runtime_metric、sql_metric。
 * @method void setViewName(string $ViewName) 设置视图名称，不可自定义输入。支持：service_metric、runtime_metric、sql_metric。
 * @method array getGroupBy() 获取聚合维度：
service_metric视图支持：service.name（服务名）、span.kind （客户端/服务端视角）维度进行聚合，service.name（服务名）必填。
runtime_metric视图支持：service.name（服务名）维度进行聚合，service.name（服务名）必填。
sql_metric视图支持：service.name（服务名）、db.statement（sql语句）维度进行聚合，查询service_slow_sql_count（慢sql）时service.name（服务名）必填，查询sql_duration_avg（耗时）指标时service.name（服务名）、db.statement（sql语句）必填。
 * @method void setGroupBy(array $GroupBy) 设置聚合维度：
service_metric视图支持：service.name（服务名）、span.kind （客户端/服务端视角）维度进行聚合，service.name（服务名）必填。
runtime_metric视图支持：service.name（服务名）维度进行聚合，service.name（服务名）必填。
sql_metric视图支持：service.name（服务名）、db.statement（sql语句）维度进行聚合，查询service_slow_sql_count（慢sql）时service.name（服务名）必填，查询sql_duration_avg（耗时）指标时service.name（服务名）、db.statement（sql语句）必填。
 * @method integer getStartTime() 获取起始时间的时间戳，单位为秒，只支持查询2天内最多1小时的指标数据。
 * @method void setStartTime(integer $StartTime) 设置起始时间的时间戳，单位为秒，只支持查询2天内最多1小时的指标数据。
 * @method integer getEndTime() 获取结束时间的时间戳，单位为秒，只支持查询2天内最多1小时的指标数据。
 * @method void setEndTime(integer $EndTime) 设置结束时间的时间戳，单位为秒，只支持查询2天内最多1小时的指标数据。
 * @method integer getPeriod() 获取聚合粒度，单位为秒，最小为60s，即一分钟的聚合粒度；如果为空或0则计算开始时间到截止时间的指标数据，上报其他值会报错。
 * @method void setPeriod(integer $Period) 设置聚合粒度，单位为秒，最小为60s，即一分钟的聚合粒度；如果为空或0则计算开始时间到截止时间的指标数据，上报其他值会报错。
 * @method OrderBy getOrderBy() 获取对查询指标进行排序：
service_metric视图支持：service_request_count（总请求）、service_duration（平均响应时间）、service_error_req_rate（平均错误率）、service_slow_call_count（慢调用）、service_error_request_count（异常数量）。
runtime_metric视图支持：service_gc_full_count（Full GC）。
sql_metric视图支持：service_slow_sql_count（慢sql）、sql_duration_avg（耗时）。
asc:对查询指标进行升序排序
desc：对查询指标进行降序排序
 * @method void setOrderBy(OrderBy $OrderBy) 设置对查询指标进行排序：
service_metric视图支持：service_request_count（总请求）、service_duration（平均响应时间）、service_error_req_rate（平均错误率）、service_slow_call_count（慢调用）、service_error_request_count（异常数量）。
runtime_metric视图支持：service_gc_full_count（Full GC）。
sql_metric视图支持：service_slow_sql_count（慢sql）、sql_duration_avg（耗时）。
asc:对查询指标进行升序排序
desc：对查询指标进行降序排序
 * @method integer getPageSize() 获取查询指标的限制条数，目前最多展示50条数据，PageSize取值为1-50，上送PageSize则根据PageSize的值展示限制条数。
 * @method void setPageSize(integer $PageSize) 设置查询指标的限制条数，目前最多展示50条数据，PageSize取值为1-50，上送PageSize则根据PageSize的值展示限制条数。
 */
class DescribeGeneralMetricDataRequest extends AbstractModel
{
    /**
     * @var array 要过滤的维度信息：
service_metric视图支持：service.name（服务名）、span.kind（客户端/服务端视角）为维度进行过滤，service.name（服务名）必填。
span.kind:
	server:服务端视角
	client:客户端视角
默认为服务端视角进行查询。
runtime_metric视图支持：service.name（服务名）维度进行过滤，service.name（服务名）必填。
sql_metric视图支持：service.name（服务名）、db.instance（数据库名称）、db.ip（数据库实例ip）维度进行过滤，查询service_slow_sql_count（慢sql）指标时service.name必填，查询sql_duration_avg（耗时）指标时db.instance（数据库名称）必填。
     */
    public $Filters;

    /**
     * @var array 需要查询的指标，不可自定义输入。
service_metric视图支持：service_request_count（总请求）、service_duration（平均响应时间）、service_error_req_rate（平均错误率）、service_slow_call_count（慢调用）、service_error_request_count（异常数量）。
runtime_metric视图支持：service_gc_full_count（Full GC）。
sql_metric视图支持：service_slow_sql_count（慢sql）、sql_duration_avg（耗时）。
     */
    public $Metrics;

    /**
     * @var string 业务系统ID
     */
    public $InstanceId;

    /**
     * @var string 视图名称，不可自定义输入。支持：service_metric、runtime_metric、sql_metric。
     */
    public $ViewName;

    /**
     * @var array 聚合维度：
service_metric视图支持：service.name（服务名）、span.kind （客户端/服务端视角）维度进行聚合，service.name（服务名）必填。
runtime_metric视图支持：service.name（服务名）维度进行聚合，service.name（服务名）必填。
sql_metric视图支持：service.name（服务名）、db.statement（sql语句）维度进行聚合，查询service_slow_sql_count（慢sql）时service.name（服务名）必填，查询sql_duration_avg（耗时）指标时service.name（服务名）、db.statement（sql语句）必填。
     */
    public $GroupBy;

    /**
     * @var integer 起始时间的时间戳，单位为秒，只支持查询2天内最多1小时的指标数据。
     */
    public $StartTime;

    /**
     * @var integer 结束时间的时间戳，单位为秒，只支持查询2天内最多1小时的指标数据。
     */
    public $EndTime;

    /**
     * @var integer 聚合粒度，单位为秒，最小为60s，即一分钟的聚合粒度；如果为空或0则计算开始时间到截止时间的指标数据，上报其他值会报错。
     */
    public $Period;

    /**
     * @var OrderBy 对查询指标进行排序：
service_metric视图支持：service_request_count（总请求）、service_duration（平均响应时间）、service_error_req_rate（平均错误率）、service_slow_call_count（慢调用）、service_error_request_count（异常数量）。
runtime_metric视图支持：service_gc_full_count（Full GC）。
sql_metric视图支持：service_slow_sql_count（慢sql）、sql_duration_avg（耗时）。
asc:对查询指标进行升序排序
desc：对查询指标进行降序排序
     */
    public $OrderBy;

    /**
     * @var integer 查询指标的限制条数，目前最多展示50条数据，PageSize取值为1-50，上送PageSize则根据PageSize的值展示限制条数。
     */
    public $PageSize;

    /**
     * @param array $Filters 要过滤的维度信息：
service_metric视图支持：service.name（服务名）、span.kind（客户端/服务端视角）为维度进行过滤，service.name（服务名）必填。
span.kind:
	server:服务端视角
	client:客户端视角
默认为服务端视角进行查询。
runtime_metric视图支持：service.name（服务名）维度进行过滤，service.name（服务名）必填。
sql_metric视图支持：service.name（服务名）、db.instance（数据库名称）、db.ip（数据库实例ip）维度进行过滤，查询service_slow_sql_count（慢sql）指标时service.name必填，查询sql_duration_avg（耗时）指标时db.instance（数据库名称）必填。
     * @param array $Metrics 需要查询的指标，不可自定义输入。
service_metric视图支持：service_request_count（总请求）、service_duration（平均响应时间）、service_error_req_rate（平均错误率）、service_slow_call_count（慢调用）、service_error_request_count（异常数量）。
runtime_metric视图支持：service_gc_full_count（Full GC）。
sql_metric视图支持：service_slow_sql_count（慢sql）、sql_duration_avg（耗时）。
     * @param string $InstanceId 业务系统ID
     * @param string $ViewName 视图名称，不可自定义输入。支持：service_metric、runtime_metric、sql_metric。
     * @param array $GroupBy 聚合维度：
service_metric视图支持：service.name（服务名）、span.kind （客户端/服务端视角）维度进行聚合，service.name（服务名）必填。
runtime_metric视图支持：service.name（服务名）维度进行聚合，service.name（服务名）必填。
sql_metric视图支持：service.name（服务名）、db.statement（sql语句）维度进行聚合，查询service_slow_sql_count（慢sql）时service.name（服务名）必填，查询sql_duration_avg（耗时）指标时service.name（服务名）、db.statement（sql语句）必填。
     * @param integer $StartTime 起始时间的时间戳，单位为秒，只支持查询2天内最多1小时的指标数据。
     * @param integer $EndTime 结束时间的时间戳，单位为秒，只支持查询2天内最多1小时的指标数据。
     * @param integer $Period 聚合粒度，单位为秒，最小为60s，即一分钟的聚合粒度；如果为空或0则计算开始时间到截止时间的指标数据，上报其他值会报错。
     * @param OrderBy $OrderBy 对查询指标进行排序：
service_metric视图支持：service_request_count（总请求）、service_duration（平均响应时间）、service_error_req_rate（平均错误率）、service_slow_call_count（慢调用）、service_error_request_count（异常数量）。
runtime_metric视图支持：service_gc_full_count（Full GC）。
sql_metric视图支持：service_slow_sql_count（慢sql）、sql_duration_avg（耗时）。
asc:对查询指标进行升序排序
desc：对查询指标进行降序排序
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new GeneralFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
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
