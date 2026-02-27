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
 * DescribeApmSQLInjectionDetail请求参数结构体
 *
 * @method string getInstanceId() 获取业务系统 ID
 * @method void setInstanceId(string $InstanceId) 设置业务系统 ID
 * @method integer getLimit() 获取限制
 * @method void setLimit(integer $Limit) 设置限制
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getStartTime() 获取秒级时间戳
 * @method void setStartTime(integer $StartTime) 设置秒级时间戳
 * @method integer getEndTime() 获取秒级时间戳
 * @method void setEndTime(integer $EndTime) 设置秒级时间戳
 * @method OrderBy getOrderBy() 获取排序
 * @method void setOrderBy(OrderBy $OrderBy) 设置排序
 * @method array getFilters() 获取查询过滤条件
 * @method void setFilters(array $Filters) 设置查询过滤条件
 * @method array getGroupBy() 获取聚合维度
 * @method void setGroupBy(array $GroupBy) 设置聚合维度
 * @method array getMetrics() 获取指标列表
 * @method void setMetrics(array $Metrics) 设置指标列表
 */
class DescribeApmSQLInjectionDetailRequest extends AbstractModel
{
    /**
     * @var string 业务系统 ID
     */
    public $InstanceId;

    /**
     * @var integer 限制
     */
    public $Limit;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 秒级时间戳
     */
    public $StartTime;

    /**
     * @var integer 秒级时间戳
     */
    public $EndTime;

    /**
     * @var OrderBy 排序
     */
    public $OrderBy;

    /**
     * @var array 查询过滤条件
     */
    public $Filters;

    /**
     * @var array 聚合维度
     */
    public $GroupBy;

    /**
     * @var array 指标列表
     */
    public $Metrics;

    /**
     * @param string $InstanceId 业务系统 ID
     * @param integer $Limit 限制
     * @param integer $Offset 偏移量
     * @param integer $StartTime 秒级时间戳
     * @param integer $EndTime 秒级时间戳
     * @param OrderBy $OrderBy 排序
     * @param array $Filters 查询过滤条件
     * @param array $GroupBy 聚合维度
     * @param array $Metrics 指标列表
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

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = new OrderBy();
            $this->OrderBy->deserialize($param["OrderBy"]);
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("GroupBy",$param) and $param["GroupBy"] !== null) {
            $this->GroupBy = $param["GroupBy"];
        }

        if (array_key_exists("Metrics",$param) and $param["Metrics"] !== null) {
            $this->Metrics = [];
            foreach ($param["Metrics"] as $key => $value){
                $obj = new QueryMetricItem();
                $obj->deserialize($value);
                array_push($this->Metrics, $obj);
            }
        }
    }
}
