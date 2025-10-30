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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBPerfTimeSeries请求参数结构体
 *
 * @method string getInstanceId() 获取需要获取性能趋势的实例ID。
 * @method void setInstanceId(string $InstanceId) 设置需要获取性能趋势的实例ID。
 * @method string getStartTime() 获取开始时间。
 * @method void setStartTime(string $StartTime) 设置开始时间。
 * @method string getEndTime() 获取结束时间。
 * @method void setEndTime(string $EndTime) 设置结束时间。
 * @method string getMetric() 获取指标名称，多个指标之间用逗号分隔。
 * @method void setMetric(string $Metric) 设置指标名称，多个指标之间用逗号分隔。
 * @method string getProduct() 获取服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 TDSQL-C for MySQL，"redis" - 云数据库 Redis，"mongodb" - 云数据库 MongoDB
 * @method void setProduct(string $Product) 设置服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 TDSQL-C for MySQL，"redis" - 云数据库 Redis，"mongodb" - 云数据库 MongoDB
 * @method string getClusterId() 获取需要获取性能趋势的集群ID。
 * @method void setClusterId(string $ClusterId) 设置需要获取性能趋势的集群ID。
 * @method integer getPeriod() 获取性能数据统计粒度。
 * @method void setPeriod(integer $Period) 设置性能数据统计粒度。
 * @method string getInstanceNodeId() 获取实列节点ID。
 * @method void setInstanceNodeId(string $InstanceNodeId) 设置实列节点ID。
 * @method string getInstanceProxyId() 获取实列代理ID。
 * @method void setInstanceProxyId(string $InstanceProxyId) 设置实列代理ID。
 * @method string getProxyId() 获取代理节点ID。
 * @method void setProxyId(string $ProxyId) 设置代理节点ID。
 */
class DescribeDBPerfTimeSeriesRequest extends AbstractModel
{
    /**
     * @var string 需要获取性能趋势的实例ID。
     */
    public $InstanceId;

    /**
     * @var string 开始时间。
     */
    public $StartTime;

    /**
     * @var string 结束时间。
     */
    public $EndTime;

    /**
     * @var string 指标名称，多个指标之间用逗号分隔。
     */
    public $Metric;

    /**
     * @var string 服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 TDSQL-C for MySQL，"redis" - 云数据库 Redis，"mongodb" - 云数据库 MongoDB
     */
    public $Product;

    /**
     * @var string 需要获取性能趋势的集群ID。
     */
    public $ClusterId;

    /**
     * @var integer 性能数据统计粒度。
     */
    public $Period;

    /**
     * @var string 实列节点ID。
     */
    public $InstanceNodeId;

    /**
     * @var string 实列代理ID。
     */
    public $InstanceProxyId;

    /**
     * @var string 代理节点ID。
     */
    public $ProxyId;

    /**
     * @param string $InstanceId 需要获取性能趋势的实例ID。
     * @param string $StartTime 开始时间。
     * @param string $EndTime 结束时间。
     * @param string $Metric 指标名称，多个指标之间用逗号分隔。
     * @param string $Product 服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 TDSQL-C for MySQL，"redis" - 云数据库 Redis，"mongodb" - 云数据库 MongoDB
     * @param string $ClusterId 需要获取性能趋势的集群ID。
     * @param integer $Period 性能数据统计粒度。
     * @param string $InstanceNodeId 实列节点ID。
     * @param string $InstanceProxyId 实列代理ID。
     * @param string $ProxyId 代理节点ID。
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("InstanceNodeId",$param) and $param["InstanceNodeId"] !== null) {
            $this->InstanceNodeId = $param["InstanceNodeId"];
        }

        if (array_key_exists("InstanceProxyId",$param) and $param["InstanceProxyId"] !== null) {
            $this->InstanceProxyId = $param["InstanceProxyId"];
        }

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }
    }
}
