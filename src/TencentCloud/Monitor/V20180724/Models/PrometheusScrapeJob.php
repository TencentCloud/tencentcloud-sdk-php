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
 * Prometheus 抓取任务
 *
 * @method string getName() 获取任务名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置任务名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAgentId() 获取Agent ID
 * @method void setAgentId(string $AgentId) 设置Agent ID
 * @method string getJobId() 获取任务 ID
 * @method void setJobId(string $JobId) 设置任务 ID
 * @method string getConfig() 获取配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfig(string $Config) 设置配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class PrometheusScrapeJob extends AbstractModel
{
    /**
     * @var string 任务名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string Agent ID
     */
    public $AgentId;

    /**
     * @var string 任务 ID
     */
    public $JobId;

    /**
     * @var string 配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Config;

    /**
     * @param string $Name 任务名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AgentId Agent ID
     * @param string $JobId 任务 ID
     * @param string $Config 配置
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
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
