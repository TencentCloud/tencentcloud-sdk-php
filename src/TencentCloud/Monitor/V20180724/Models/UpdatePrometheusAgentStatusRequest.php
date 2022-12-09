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
 * UpdatePrometheusAgentStatus请求参数结构体
 *
 * @method string getInstanceId() 获取Prometheus 实例 ID，例如：prom-abcd1234
 * @method void setInstanceId(string $InstanceId) 设置Prometheus 实例 ID，例如：prom-abcd1234
 * @method array getAgentIds() 获取Agent ID 列表，例如：agent-abcd1234，可在控制台 Agent 管理中获取
 * @method void setAgentIds(array $AgentIds) 设置Agent ID 列表，例如：agent-abcd1234，可在控制台 Agent 管理中获取
 * @method integer getStatus() 获取要更新的状态
<li> 1= 开启 </li>
<li> 2= 关闭 </li>
 * @method void setStatus(integer $Status) 设置要更新的状态
<li> 1= 开启 </li>
<li> 2= 关闭 </li>
 */
class UpdatePrometheusAgentStatusRequest extends AbstractModel
{
    /**
     * @var string Prometheus 实例 ID，例如：prom-abcd1234
     */
    public $InstanceId;

    /**
     * @var array Agent ID 列表，例如：agent-abcd1234，可在控制台 Agent 管理中获取
     */
    public $AgentIds;

    /**
     * @var integer 要更新的状态
<li> 1= 开启 </li>
<li> 2= 关闭 </li>
     */
    public $Status;

    /**
     * @param string $InstanceId Prometheus 实例 ID，例如：prom-abcd1234
     * @param array $AgentIds Agent ID 列表，例如：agent-abcd1234，可在控制台 Agent 管理中获取
     * @param integer $Status 要更新的状态
<li> 1= 开启 </li>
<li> 2= 关闭 </li>
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

        if (array_key_exists("AgentIds",$param) and $param["AgentIds"] !== null) {
            $this->AgentIds = $param["AgentIds"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
