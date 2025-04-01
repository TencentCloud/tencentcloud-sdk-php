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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNatGatewayFlowMonitorDetail请求参数结构体
 *
 * @method string getTimePoint() 获取时间点。表示要查询的时刻。聚合粒度为60、300时，会查询最近一个整分钟开始的聚合周期；聚合粒度为3600时，会查询最近一个整点开始的聚合周期；聚合粒度为86400时，会查询最近一个整天开始的聚合周期。形如：`2019-03-24T10:51:23+08:00`。
 * @method void setTimePoint(string $TimePoint) 设置时间点。表示要查询的时刻。聚合粒度为60、300时，会查询最近一个整分钟开始的聚合周期；聚合粒度为3600时，会查询最近一个整点开始的聚合周期；聚合粒度为86400时，会查询最近一个整天开始的聚合周期。形如：`2019-03-24T10:51:23+08:00`。
 * @method string getNatGatewayId() 获取NAT网关的ID，形如：`nat-ig8xpno8`。
 * @method void setNatGatewayId(string $NatGatewayId) 设置NAT网关的ID，形如：`nat-ig8xpno8`。
 * @method integer getTopN() 获取展示排序靠前的数据。默认值：10，表示默认展示排序前 10 的数据。最大值：100。
 * @method void setTopN(integer $TopN) 设置展示排序靠前的数据。默认值：10，表示默认展示排序前 10 的数据。最大值：100。
 * @method string getOrderField() 获取排序字段。支持：入包量`InPkg`、出包量`OutPkg`、入流量`InTraffic`、出流量`OutTraffic`，标准型nat额外支持 并发连接数`ConcurrentConnectionCount` 、新建连接速率`NewConnectionRate`。默认值`OutTraffic`。
 * @method void setOrderField(string $OrderField) 设置排序字段。支持：入包量`InPkg`、出包量`OutPkg`、入流量`InTraffic`、出流量`OutTraffic`，标准型nat额外支持 并发连接数`ConcurrentConnectionCount` 、新建连接速率`NewConnectionRate`。默认值`OutTraffic`。
 * @method integer getAggregationTimeRange() 获取聚合时间粒度。支持：60、300、3600、86400，即按照1分钟、5分钟、1小时、1天进行聚合查询。
 * @method void setAggregationTimeRange(integer $AggregationTimeRange) 设置聚合时间粒度。支持：60、300、3600、86400，即按照1分钟、5分钟、1小时、1天进行聚合查询。
 * @method boolean getAllMetricMode() 获取是否查询全部指标。默认值：True，表示查询全部指标。
 * @method void setAllMetricMode(boolean $AllMetricMode) 设置是否查询全部指标。默认值：True，表示查询全部指标。
 */
class DescribeNatGatewayFlowMonitorDetailRequest extends AbstractModel
{
    /**
     * @var string 时间点。表示要查询的时刻。聚合粒度为60、300时，会查询最近一个整分钟开始的聚合周期；聚合粒度为3600时，会查询最近一个整点开始的聚合周期；聚合粒度为86400时，会查询最近一个整天开始的聚合周期。形如：`2019-03-24T10:51:23+08:00`。
     */
    public $TimePoint;

    /**
     * @var string NAT网关的ID，形如：`nat-ig8xpno8`。
     */
    public $NatGatewayId;

    /**
     * @var integer 展示排序靠前的数据。默认值：10，表示默认展示排序前 10 的数据。最大值：100。
     */
    public $TopN;

    /**
     * @var string 排序字段。支持：入包量`InPkg`、出包量`OutPkg`、入流量`InTraffic`、出流量`OutTraffic`，标准型nat额外支持 并发连接数`ConcurrentConnectionCount` 、新建连接速率`NewConnectionRate`。默认值`OutTraffic`。
     */
    public $OrderField;

    /**
     * @var integer 聚合时间粒度。支持：60、300、3600、86400，即按照1分钟、5分钟、1小时、1天进行聚合查询。
     */
    public $AggregationTimeRange;

    /**
     * @var boolean 是否查询全部指标。默认值：True，表示查询全部指标。
     */
    public $AllMetricMode;

    /**
     * @param string $TimePoint 时间点。表示要查询的时刻。聚合粒度为60、300时，会查询最近一个整分钟开始的聚合周期；聚合粒度为3600时，会查询最近一个整点开始的聚合周期；聚合粒度为86400时，会查询最近一个整天开始的聚合周期。形如：`2019-03-24T10:51:23+08:00`。
     * @param string $NatGatewayId NAT网关的ID，形如：`nat-ig8xpno8`。
     * @param integer $TopN 展示排序靠前的数据。默认值：10，表示默认展示排序前 10 的数据。最大值：100。
     * @param string $OrderField 排序字段。支持：入包量`InPkg`、出包量`OutPkg`、入流量`InTraffic`、出流量`OutTraffic`，标准型nat额外支持 并发连接数`ConcurrentConnectionCount` 、新建连接速率`NewConnectionRate`。默认值`OutTraffic`。
     * @param integer $AggregationTimeRange 聚合时间粒度。支持：60、300、3600、86400，即按照1分钟、5分钟、1小时、1天进行聚合查询。
     * @param boolean $AllMetricMode 是否查询全部指标。默认值：True，表示查询全部指标。
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
        if (array_key_exists("TimePoint",$param) and $param["TimePoint"] !== null) {
            $this->TimePoint = $param["TimePoint"];
        }

        if (array_key_exists("NatGatewayId",$param) and $param["NatGatewayId"] !== null) {
            $this->NatGatewayId = $param["NatGatewayId"];
        }

        if (array_key_exists("TopN",$param) and $param["TopN"] !== null) {
            $this->TopN = $param["TopN"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("AggregationTimeRange",$param) and $param["AggregationTimeRange"] !== null) {
            $this->AggregationTimeRange = $param["AggregationTimeRange"];
        }

        if (array_key_exists("AllMetricMode",$param) and $param["AllMetricMode"] !== null) {
            $this->AllMetricMode = $param["AllMetricMode"];
        }
    }
}
