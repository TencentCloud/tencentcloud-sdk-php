<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getInstanceId() 获取实例ID，格式如：cdb-c1nl9rpv 或者 cdbro-c1nl9rpv
 * @method void setInstanceId(string $instanceId) 设置实例ID，格式如：cdb-c1nl9rpv 或者 cdbro-c1nl9rpv
 * @method integer getPeriod() 获取监控统计周期，单位秒，支持值包括 60, 300, 3600, 86400
 * @method void setPeriod(integer $period) 设置监控统计周期，单位秒，支持值包括 60, 300, 3600, 86400
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $startTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $endTime) 设置结束时间
 * @method array getMetrics() 获取主机的监控指标，对于主实例、灾备实例和只读实例，该字段表示主机的监控信息
 * @method void setMetrics(array $metrics) 设置主机的监控指标，对于主实例、灾备实例和只读实例，该字段表示主机的监控信息
 * @method array getSlaveMetrics() 获取从机的监控指标，对于主实例和灾备实例，该字段表示从机的监控信息；只读实例该值必须为空；对于 metrics 和 slaveMetrics，至少有一个参数不为空
 * @method void setSlaveMetrics(array $slaveMetrics) 设置从机的监控指标，对于主实例和灾备实例，该字段表示从机的监控信息；只读实例该值必须为空；对于 metrics 和 slaveMetrics，至少有一个参数不为空
 */

/**
 *DescribeMonitorData请求参数结构体
 */
class DescribeMonitorDataRequest extends AbstractModel
{
    /**
     * @var string 实例ID，格式如：cdb-c1nl9rpv 或者 cdbro-c1nl9rpv
     */
    public $instanceId;

    /**
     * @var integer 监控统计周期，单位秒，支持值包括 60, 300, 3600, 86400
     */
    public $period;

    /**
     * @var string 开始时间
     */
    public $startTime;

    /**
     * @var string 结束时间
     */
    public $endTime;

    /**
     * @var array 主机的监控指标，对于主实例、灾备实例和只读实例，该字段表示主机的监控信息
     */
    public $metrics;

    /**
     * @var array 从机的监控指标，对于主实例和灾备实例，该字段表示从机的监控信息；只读实例该值必须为空；对于 metrics 和 slaveMetrics，至少有一个参数不为空
     */
    public $slaveMetrics;
    /**
     * @param string $instanceId 实例ID，格式如：cdb-c1nl9rpv 或者 cdbro-c1nl9rpv
     * @param integer $period 监控统计周期，单位秒，支持值包括 60, 300, 3600, 86400
     * @param string $startTime 开始时间
     * @param string $endTime 结束时间
     * @param array $metrics 主机的监控指标，对于主实例、灾备实例和只读实例，该字段表示主机的监控信息
     * @param array $slaveMetrics 从机的监控指标，对于主实例和灾备实例，该字段表示从机的监控信息；只读实例该值必须为空；对于 metrics 和 slaveMetrics，至少有一个参数不为空
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->instanceId = $param["InstanceId"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->period = $param["Period"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->startTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->endTime = $param["EndTime"];
        }

        if (array_key_exists("Metrics",$param) and $param["Metrics"] !== null) {
            $this->metrics = $param["Metrics"];
        }

        if (array_key_exists("SlaveMetrics",$param) and $param["SlaveMetrics"] !== null) {
            $this->slaveMetrics = $param["SlaveMetrics"];
        }
    }
}
