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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePrometheusScrapeJob请求参数结构体
 *
 * @method string getInstanceId() 获取Prometheus 实例 ID，例如：prom-abcd1234
 * @method void setInstanceId(string $InstanceId) 设置Prometheus 实例 ID，例如：prom-abcd1234
 * @method string getAgentId() 获取Agent ID，例如：agent-abcd1234，可在控制台 Agent 管理中获取
 * @method void setAgentId(string $AgentId) 设置Agent ID，例如：agent-abcd1234，可在控制台 Agent 管理中获取
 * @method string getConfig() 获取抓取任务配置，格式：job_name:xx
 * @method void setConfig(string $Config) 设置抓取任务配置，格式：job_name:xx
 */
class CreatePrometheusScrapeJobRequest extends AbstractModel
{
    /**
     * @var string Prometheus 实例 ID，例如：prom-abcd1234
     */
    public $InstanceId;

    /**
     * @var string Agent ID，例如：agent-abcd1234，可在控制台 Agent 管理中获取
     */
    public $AgentId;

    /**
     * @var string 抓取任务配置，格式：job_name:xx
     */
    public $Config;

    /**
     * @param string $InstanceId Prometheus 实例 ID，例如：prom-abcd1234
     * @param string $AgentId Agent ID，例如：agent-abcd1234，可在控制台 Agent 管理中获取
     * @param string $Config 抓取任务配置，格式：job_name:xx
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

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }
    }
}
