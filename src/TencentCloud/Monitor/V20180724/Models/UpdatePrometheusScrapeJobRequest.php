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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdatePrometheusScrapeJob请求参数结构体
 *
 * @method string getInstanceId() 获取Prometheus 实例 ID(可通过 DescribePrometheusInstances 接口获取)
 * @method void setInstanceId(string $InstanceId) 设置Prometheus 实例 ID(可通过 DescribePrometheusInstances 接口获取)
 * @method string getAgentId() 获取Agent ID(可通过DescribePrometheusAgents 接口获取)
 * @method void setAgentId(string $AgentId) 设置Agent ID(可通过DescribePrometheusAgents 接口获取)
 * @method string getJobId() 获取抓取任务 ID(可通过 DescribePrometheusScrapeJobs 接口获取)
 * @method void setJobId(string $JobId) 设置抓取任务 ID(可通过 DescribePrometheusScrapeJobs 接口获取)
 * @method string getConfig() 获取抓取任务配置
 * @method void setConfig(string $Config) 设置抓取任务配置
 */
class UpdatePrometheusScrapeJobRequest extends AbstractModel
{
    /**
     * @var string Prometheus 实例 ID(可通过 DescribePrometheusInstances 接口获取)
     */
    public $InstanceId;

    /**
     * @var string Agent ID(可通过DescribePrometheusAgents 接口获取)
     */
    public $AgentId;

    /**
     * @var string 抓取任务 ID(可通过 DescribePrometheusScrapeJobs 接口获取)
     */
    public $JobId;

    /**
     * @var string 抓取任务配置
     */
    public $Config;

    /**
     * @param string $InstanceId Prometheus 实例 ID(可通过 DescribePrometheusInstances 接口获取)
     * @param string $AgentId Agent ID(可通过DescribePrometheusAgents 接口获取)
     * @param string $JobId 抓取任务 ID(可通过 DescribePrometheusScrapeJobs 接口获取)
     * @param string $Config 抓取任务配置
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

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }
    }
}
