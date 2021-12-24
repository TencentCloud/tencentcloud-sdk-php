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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 边缘节点Pod信息
 *
 * @method string getName() 获取Pod名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置Pod名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取Pod状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置Pod状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeIp() 获取所在节点IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeIp(string $NodeIp) 设置所在节点IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIp() 获取实例IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIp(string $Ip) 设置实例IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCpuRequest() 获取CPU Request
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpuRequest(string $CpuRequest) 设置CPU Request
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMemoryRequest() 获取Memory Request
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemoryRequest(string $MemoryRequest) 设置Memory Request
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespace() 获取命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespace(string $Namespace) 设置命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkloadType() 获取工作负载类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkloadType(string $WorkloadType) 设置工作负载类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkloadName() 获取工作负载名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkloadName(string $WorkloadName) 设置工作负载名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRestartCount() 获取重启次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRestartCount(integer $RestartCount) 设置重启次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterID() 获取集群ID
 * @method void setClusterID(string $ClusterID) 设置集群ID
 */
class EdgeNodePodInfo extends AbstractModel
{
    /**
     * @var string Pod名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string Pod状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 所在节点IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeIp;

    /**
     * @var string 实例IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ip;

    /**
     * @var string CPU Request
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CpuRequest;

    /**
     * @var string Memory Request
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemoryRequest;

    /**
     * @var string 命名空间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Namespace;

    /**
     * @var string 工作负载类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkloadType;

    /**
     * @var string 工作负载名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkloadName;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var integer 重启次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RestartCount;

    /**
     * @var string 集群ID
     */
    public $ClusterID;

    /**
     * @param string $Name Pod名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status Pod状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeIp 所在节点IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Ip 实例IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CpuRequest CPU Request
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MemoryRequest Memory Request
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Namespace 命名空间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkloadType 工作负载类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkloadName 工作负载名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RestartCount 重启次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterID 集群ID
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("NodeIp",$param) and $param["NodeIp"] !== null) {
            $this->NodeIp = $param["NodeIp"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("CpuRequest",$param) and $param["CpuRequest"] !== null) {
            $this->CpuRequest = $param["CpuRequest"];
        }

        if (array_key_exists("MemoryRequest",$param) and $param["MemoryRequest"] !== null) {
            $this->MemoryRequest = $param["MemoryRequest"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("WorkloadType",$param) and $param["WorkloadType"] !== null) {
            $this->WorkloadType = $param["WorkloadType"];
        }

        if (array_key_exists("WorkloadName",$param) and $param["WorkloadName"] !== null) {
            $this->WorkloadName = $param["WorkloadName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("RestartCount",$param) and $param["RestartCount"] !== null) {
            $this->RestartCount = $param["RestartCount"];
        }

        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }
    }
}
