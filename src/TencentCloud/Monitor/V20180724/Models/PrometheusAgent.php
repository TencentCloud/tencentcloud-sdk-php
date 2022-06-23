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
 * prometheus agent
 *
 * @method string getName() 获取Agent 名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置Agent 名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAgentId() 获取Agent ID
 * @method void setAgentId(string $AgentId) 设置Agent ID
 * @method string getInstanceId() 获取实例 ID
 * @method void setInstanceId(string $InstanceId) 设置实例 ID
 * @method string getIpv4() 获取Agent IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpv4(string $Ipv4) 设置Agent IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHeartbeatTime() 获取心跳时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeartbeatTime(string $HeartbeatTime) 设置心跳时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastError() 获取最近一次错误
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastError(string $LastError) 设置最近一次错误
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAgentVersion() 获取Agent 版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentVersion(string $AgentVersion) 设置Agent 版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取Agent 状态
 * @method void setStatus(integer $Status) 设置Agent 状态
 */
class PrometheusAgent extends AbstractModel
{
    /**
     * @var string Agent 名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string Agent ID
     */
    public $AgentId;

    /**
     * @var string 实例 ID
     */
    public $InstanceId;

    /**
     * @var string Agent IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ipv4;

    /**
     * @var string 心跳时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HeartbeatTime;

    /**
     * @var string 最近一次错误
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastError;

    /**
     * @var string Agent 版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentVersion;

    /**
     * @var integer Agent 状态
     */
    public $Status;

    /**
     * @param string $Name Agent 名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AgentId Agent ID
     * @param string $InstanceId 实例 ID
     * @param string $Ipv4 Agent IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HeartbeatTime 心跳时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastError 最近一次错误
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AgentVersion Agent 版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status Agent 状态
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

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Ipv4",$param) and $param["Ipv4"] !== null) {
            $this->Ipv4 = $param["Ipv4"];
        }

        if (array_key_exists("HeartbeatTime",$param) and $param["HeartbeatTime"] !== null) {
            $this->HeartbeatTime = $param["HeartbeatTime"];
        }

        if (array_key_exists("LastError",$param) and $param["LastError"] !== null) {
            $this->LastError = $param["LastError"];
        }

        if (array_key_exists("AgentVersion",$param) and $param["AgentVersion"] !== null) {
            $this->AgentVersion = $param["AgentVersion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
