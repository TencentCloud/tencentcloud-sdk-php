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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群的节点信息
 *
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method string getPrivateIpAddresses() 获取内网ip地址
 * @method void setPrivateIpAddresses(string $PrivateIpAddresses) 设置内网ip地址
 * @method string getInstanceRole() 获取节点的角色，Master、Work等
 * @method void setInstanceRole(string $InstanceRole) 设置节点的角色，Master、Work等
 * @method string getInstanceState() 获取实例的状态（running 运行中，initializing 初始化中，failed 异常）
 * @method void setInstanceState(string $InstanceState) 设置实例的状态（running 运行中，initializing 初始化中，failed 异常）
 * @method string getNodeName() 获取节点名称
 * @method void setNodeName(string $NodeName) 设置节点名称
 * @method string getAgentStatus() 获取agent安装状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentStatus(string $AgentStatus) 设置agent安装状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublicIP() 获取公网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicIP(string $PublicIP) 设置公网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHostID() 获取节点ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostID(string $HostID) 设置节点ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMachineType() 获取主机类型(普通节点情况)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMachineType(string $MachineType) 设置主机类型(普通节点情况)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeType() 获取节点类型(
NORMAL: 普通节点
SUPER:超级节点
)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeType(string $NodeType) 设置节点类型(
NORMAL: 普通节点
SUPER:超级节点
)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUUID() 获取uuid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUUID(string $UUID) 设置uuid
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getChargeCoresCnt() 获取计费核数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChargeCoresCnt(integer $ChargeCoresCnt) 设置计费核数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDefendStatus() 获取防护状态:
已防护: Defended
未防护: UnDefended
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefendStatus(string $DefendStatus) 设置防护状态:
已防护: Defended
未防护: UnDefended
注意：此字段可能返回 null，表示取不到有效值。
 */
class ClusterNodeInfo extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var string 内网ip地址
     */
    public $PrivateIpAddresses;

    /**
     * @var string 节点的角色，Master、Work等
     */
    public $InstanceRole;

    /**
     * @var string 实例的状态（running 运行中，initializing 初始化中，failed 异常）
     */
    public $InstanceState;

    /**
     * @var string 节点名称
     */
    public $NodeName;

    /**
     * @var string agent安装状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentStatus;

    /**
     * @var string 公网ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicIP;

    /**
     * @var string 节点ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostID;

    /**
     * @var string 主机类型(普通节点情况)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MachineType;

    /**
     * @var string 节点类型(
NORMAL: 普通节点
SUPER:超级节点
)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeType;

    /**
     * @var string uuid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UUID;

    /**
     * @var integer 计费核数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChargeCoresCnt;

    /**
     * @var string 防护状态:
已防护: Defended
未防护: UnDefended
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefendStatus;

    /**
     * @param string $InstanceId 实例id
     * @param string $PrivateIpAddresses 内网ip地址
     * @param string $InstanceRole 节点的角色，Master、Work等
     * @param string $InstanceState 实例的状态（running 运行中，initializing 初始化中，failed 异常）
     * @param string $NodeName 节点名称
     * @param string $AgentStatus agent安装状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublicIP 公网ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HostID 节点ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MachineType 主机类型(普通节点情况)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeType 节点类型(
NORMAL: 普通节点
SUPER:超级节点
)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UUID uuid
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ChargeCoresCnt 计费核数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DefendStatus 防护状态:
已防护: Defended
未防护: UnDefended
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("PrivateIpAddresses",$param) and $param["PrivateIpAddresses"] !== null) {
            $this->PrivateIpAddresses = $param["PrivateIpAddresses"];
        }

        if (array_key_exists("InstanceRole",$param) and $param["InstanceRole"] !== null) {
            $this->InstanceRole = $param["InstanceRole"];
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("AgentStatus",$param) and $param["AgentStatus"] !== null) {
            $this->AgentStatus = $param["AgentStatus"];
        }

        if (array_key_exists("PublicIP",$param) and $param["PublicIP"] !== null) {
            $this->PublicIP = $param["PublicIP"];
        }

        if (array_key_exists("HostID",$param) and $param["HostID"] !== null) {
            $this->HostID = $param["HostID"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("UUID",$param) and $param["UUID"] !== null) {
            $this->UUID = $param["UUID"];
        }

        if (array_key_exists("ChargeCoresCnt",$param) and $param["ChargeCoresCnt"] !== null) {
            $this->ChargeCoresCnt = $param["ChargeCoresCnt"];
        }

        if (array_key_exists("DefendStatus",$param) and $param["DefendStatus"] !== null) {
            $this->DefendStatus = $param["DefendStatus"];
        }
    }
}
