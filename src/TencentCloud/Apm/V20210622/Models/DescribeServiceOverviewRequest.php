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
 * DescribeServiceOverview请求参数结构体
 *
 * @method string getInstanceId() 获取业务系统 ID
 * @method void setInstanceId(string $InstanceId) 设置业务系统 ID
 * @method array getMetrics() 获取指标列表
 * @method void setMetrics(array $Metrics) 设置指标列表
 * @method integer getStartTime() 获取开始时间（单位：秒）
 * @method void setStartTime(integer $StartTime) 设置开始时间（单位：秒）
 * @method integer getEndTime() 获取结束时间（单位：秒）
 * @method void setEndTime(integer $EndTime) 设置结束时间（单位：秒）
 * @method array getGroupBy() 获取聚合维度
 * @method void setGroupBy(array $GroupBy) 设置聚合维度
 * @method array getFilters() 获取过滤条件
 * @method void setFilters(array $Filters) 设置过滤条件
 * @method OrderBy getOrderBy() 获取排序方式
Value 填写：
- asc：对查询指标进行升序排序
- desc：对查询指标进行降序排序
 * @method void setOrderBy(OrderBy $OrderBy) 设置排序方式
Value 填写：
- asc：对查询指标进行升序排序
- desc：对查询指标进行降序排序
 * @method integer getLimit() 获取每页大小
 * @method void setLimit(integer $Limit) 设置每页大小
 * @method integer getOffset() 获取分页起始点
 * @method void setOffset(integer $Offset) 设置分页起始点
 */
class DescribeServiceOverviewRequest extends AbstractModel
{
    /**
     * @var string 业务系统 ID
     */
    public $InstanceId;

    /**
     * @var array 指标列表
     */
    public $Metrics;

    /**
     * @var integer 开始时间（单位：秒）
     */
    public $StartTime;

    /**
     * @var integer 结束时间（单位：秒）
     */
    public $EndTime;

    /**
     * @var array 聚合维度
     */
    public $GroupBy;

    /**
     * @var array 过滤条件
     */
    public $Filters;

    /**
     * @var OrderBy 排序方式
Value 填写：
- asc：对查询指标进行升序排序
- desc：对查询指标进行降序排序
     */
    public $OrderBy;

    /**
     * @var integer 每页大小
     */
    public $Limit;

    /**
     * @var integer 分页起始点
     */
    public $Offset;

    /**
     * @param string $InstanceId 业务系统 ID
     * @param array $Metrics 指标列表
     * @param integer $StartTime 开始时间（单位：秒）
     * @param integer $EndTime 结束时间（单位：秒）
     * @param array $GroupBy 聚合维度
     * @param array $Filters 过滤条件
     * @param OrderBy $OrderBy 排序方式
Value 填写：
- asc：对查询指标进行升序排序
- desc：对查询指标进行降序排序
     * @param integer $Limit 每页大小
     * @param integer $Offset 分页起始点
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Metrics",$param) and $param["Metrics"] !== null) {
            $this->Metrics = [];
            foreach ($param["Metrics"] as $key => $value){
                $obj = new QueryMetricItem();
                $obj->deserialize($value);
                array_push($this->Metrics, $obj);
            }
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("GroupBy",$param) and $param["GroupBy"] !== null) {
            $this->GroupBy = $param["GroupBy"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = new OrderBy();
            $this->OrderBy->deserialize($param["OrderBy"]);
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
