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
 * DescribeMetricTopProxies请求参数结构体
 *
 * @method string getStartTime() 获取开始时间，如“2021-05-27 00:00:00”，支持的最早查询时间为当前时间的前30天。
 * @method void setStartTime(string $StartTime) 设置开始时间，如“2021-05-27 00:00:00”，支持的最早查询时间为当前时间的前30天。
 * @method string getEndTime() 获取结束时间，如“2021-05-27 01:00:00”，支持的最早查询时间为当前时间的前30天。
 * @method void setEndTime(string $EndTime) 设置结束时间，如“2021-05-27 01:00:00”，支持的最早查询时间为当前时间的前30天。
 * @method string getInstanceId() 获取实例ID列表。可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。
 * @method void setInstanceId(string $InstanceId) 设置实例ID列表。可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。
 * @method string getProduct() 获取服务产品类型，支持值包括："mysql" - 云数据库 MySQL，"redis" - 云数据库 Redis，"mariadb"-数据库mariadb    默认为"mysql"。
 * @method void setProduct(string $Product) 设置服务产品类型，支持值包括："mysql" - 云数据库 MySQL，"redis" - 云数据库 Redis，"mariadb"-数据库mariadb    默认为"mysql"。
 * @method string getMetric() 获取指标 eg: cpu_util, connections
 * @method void setMetric(string $Metric) 设置指标 eg: cpu_util, connections
 * @method integer getLimit() 获取默认前20条
 * @method void setLimit(integer $Limit) 设置默认前20条
 */
class DescribeMetricTopProxiesRequest extends AbstractModel
{
    /**
     * @var string 开始时间，如“2021-05-27 00:00:00”，支持的最早查询时间为当前时间的前30天。
     */
    public $StartTime;

    /**
     * @var string 结束时间，如“2021-05-27 01:00:00”，支持的最早查询时间为当前时间的前30天。
     */
    public $EndTime;

    /**
     * @var string 实例ID列表。可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。
     */
    public $InstanceId;

    /**
     * @var string 服务产品类型，支持值包括："mysql" - 云数据库 MySQL，"redis" - 云数据库 Redis，"mariadb"-数据库mariadb    默认为"mysql"。
     */
    public $Product;

    /**
     * @var string 指标 eg: cpu_util, connections
     */
    public $Metric;

    /**
     * @var integer 默认前20条
     */
    public $Limit;

    /**
     * @param string $StartTime 开始时间，如“2021-05-27 00:00:00”，支持的最早查询时间为当前时间的前30天。
     * @param string $EndTime 结束时间，如“2021-05-27 01:00:00”，支持的最早查询时间为当前时间的前30天。
     * @param string $InstanceId 实例ID列表。可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。
     * @param string $Product 服务产品类型，支持值包括："mysql" - 云数据库 MySQL，"redis" - 云数据库 Redis，"mariadb"-数据库mariadb    默认为"mysql"。
     * @param string $Metric 指标 eg: cpu_util, connections
     * @param integer $Limit 默认前20条
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
