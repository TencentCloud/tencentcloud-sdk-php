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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群的pod详细信息
 *
 * @method string getPodName() 获取Pod名称.
 * @method void setPodName(string $PodName) 设置Pod名称.
 * @method string getStatus() 获取Pod状态
 * @method void setStatus(string $Status) 设置Pod状态
 * @method string getPodIP() 获取Pod IP
 * @method void setPodIP(string $PodIP) 设置Pod IP
 * @method string getNodeLanIP() 获取节点内网Ip
 * @method void setNodeLanIP(string $NodeLanIP) 设置节点内网Ip
 * @method string getWorkloadName() 获取所属的工作负载名字
 * @method void setWorkloadName(string $WorkloadName) 设置所属的工作负载名字
 * @method string getWorkloadKind() 获取所属工作负载类型
 * @method void setWorkloadKind(string $WorkloadKind) 设置所属工作负载类型
 * @method string getClusterName() 获取所属集群名字
 * @method void setClusterName(string $ClusterName) 设置所属集群名字
 * @method string getClusterId() 获取所属集群ID
 * @method void setClusterId(string $ClusterId) 设置所属集群ID
 * @method string getNamespace() 获取所属命名空间
 * @method void setNamespace(string $Namespace) 设置所属命名空间
 * @method string getRegion() 获取所属地域
 * @method void setRegion(string $Region) 设置所属地域
 * @method string getAge() 获取运行时间
 * @method void setAge(string $Age) 设置运行时间
 * @method string getStartTime() 获取创建时间
 * @method void setStartTime(string $StartTime) 设置创建时间
 * @method integer getRestarts() 获取重启次数
 * @method void setRestarts(integer $Restarts) 设置重启次数
 * @method string getServiceName() 获取关联的service名字
 * @method void setServiceName(string $ServiceName) 设置关联的service名字
 * @method integer getServiceCount() 获取关联的service数量
 * @method void setServiceCount(integer $ServiceCount) 设置关联的service数量
 * @method string getContainerName() 获取关联的容器名字
 * @method void setContainerName(string $ContainerName) 设置关联的容器名字
 * @method integer getContainerCount() 获取关联的容器数量
 * @method void setContainerCount(integer $ContainerCount) 设置关联的容器数量
 * @method integer getCPU() 获取CPU占用率
 * @method void setCPU(integer $CPU) 设置CPU占用率
 * @method integer getMemory() 获取内存占用量
 * @method void setMemory(integer $Memory) 设置内存占用量
 * @method string getLabels() 获取Pod标签
 * @method void setLabels(string $Labels) 设置Pod标签
 * @method string getClusterStatus() 获取集群状态
 * @method void setClusterStatus(string $ClusterStatus) 设置集群状态
 * @method string getWorkloadLabels() 获取工作负载标签
 * @method void setWorkloadLabels(string $WorkloadLabels) 设置工作负载标签
 * @method string getContainerId() 获取容器Id
 * @method void setContainerId(string $ContainerId) 设置容器Id
 * @method string getHostName() 获取主机名称
 * @method void setHostName(string $HostName) 设置主机名称
 * @method string getHostId() 获取主机Id
 * @method void setHostId(string $HostId) 设置主机Id
 * @method string getClusterType() 获取集群类型
 * @method void setClusterType(string $ClusterType) 设置集群类型
 * @method string getNodeName() 获取节点名称
 * @method void setNodeName(string $NodeName) 设置节点名称
 * @method string getNodeType() 获取NORMAL：普通节点 SUPER：超级节点
 * @method void setNodeType(string $NodeType) 设置NORMAL：普通节点 SUPER：超级节点
 * @method integer getChargeCoresCnt() 获取计费核数
 * @method void setChargeCoresCnt(integer $ChargeCoresCnt) 设置计费核数
 */
class ClusterPodInfo extends AbstractModel
{
    /**
     * @var string Pod名称.
     */
    public $PodName;

    /**
     * @var string Pod状态
     */
    public $Status;

    /**
     * @var string Pod IP
     */
    public $PodIP;

    /**
     * @var string 节点内网Ip
     */
    public $NodeLanIP;

    /**
     * @var string 所属的工作负载名字
     */
    public $WorkloadName;

    /**
     * @var string 所属工作负载类型
     */
    public $WorkloadKind;

    /**
     * @var string 所属集群名字
     */
    public $ClusterName;

    /**
     * @var string 所属集群ID
     */
    public $ClusterId;

    /**
     * @var string 所属命名空间
     */
    public $Namespace;

    /**
     * @var string 所属地域
     */
    public $Region;

    /**
     * @var string 运行时间
     */
    public $Age;

    /**
     * @var string 创建时间
     */
    public $StartTime;

    /**
     * @var integer 重启次数
     */
    public $Restarts;

    /**
     * @var string 关联的service名字
     */
    public $ServiceName;

    /**
     * @var integer 关联的service数量
     */
    public $ServiceCount;

    /**
     * @var string 关联的容器名字
     */
    public $ContainerName;

    /**
     * @var integer 关联的容器数量
     */
    public $ContainerCount;

    /**
     * @var integer CPU占用率
     */
    public $CPU;

    /**
     * @var integer 内存占用量
     */
    public $Memory;

    /**
     * @var string Pod标签
     */
    public $Labels;

    /**
     * @var string 集群状态
     */
    public $ClusterStatus;

    /**
     * @var string 工作负载标签
     */
    public $WorkloadLabels;

    /**
     * @var string 容器Id
     */
    public $ContainerId;

    /**
     * @var string 主机名称
     */
    public $HostName;

    /**
     * @var string 主机Id
     */
    public $HostId;

    /**
     * @var string 集群类型
     */
    public $ClusterType;

    /**
     * @var string 节点名称
     */
    public $NodeName;

    /**
     * @var string NORMAL：普通节点 SUPER：超级节点
     */
    public $NodeType;

    /**
     * @var integer 计费核数
     */
    public $ChargeCoresCnt;

    /**
     * @param string $PodName Pod名称.
     * @param string $Status Pod状态
     * @param string $PodIP Pod IP
     * @param string $NodeLanIP 节点内网Ip
     * @param string $WorkloadName 所属的工作负载名字
     * @param string $WorkloadKind 所属工作负载类型
     * @param string $ClusterName 所属集群名字
     * @param string $ClusterId 所属集群ID
     * @param string $Namespace 所属命名空间
     * @param string $Region 所属地域
     * @param string $Age 运行时间
     * @param string $StartTime 创建时间
     * @param integer $Restarts 重启次数
     * @param string $ServiceName 关联的service名字
     * @param integer $ServiceCount 关联的service数量
     * @param string $ContainerName 关联的容器名字
     * @param integer $ContainerCount 关联的容器数量
     * @param integer $CPU CPU占用率
     * @param integer $Memory 内存占用量
     * @param string $Labels Pod标签
     * @param string $ClusterStatus 集群状态
     * @param string $WorkloadLabels 工作负载标签
     * @param string $ContainerId 容器Id
     * @param string $HostName 主机名称
     * @param string $HostId 主机Id
     * @param string $ClusterType 集群类型
     * @param string $NodeName 节点名称
     * @param string $NodeType NORMAL：普通节点 SUPER：超级节点
     * @param integer $ChargeCoresCnt 计费核数
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
        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PodIP",$param) and $param["PodIP"] !== null) {
            $this->PodIP = $param["PodIP"];
        }

        if (array_key_exists("NodeLanIP",$param) and $param["NodeLanIP"] !== null) {
            $this->NodeLanIP = $param["NodeLanIP"];
        }

        if (array_key_exists("WorkloadName",$param) and $param["WorkloadName"] !== null) {
            $this->WorkloadName = $param["WorkloadName"];
        }

        if (array_key_exists("WorkloadKind",$param) and $param["WorkloadKind"] !== null) {
            $this->WorkloadKind = $param["WorkloadKind"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Age",$param) and $param["Age"] !== null) {
            $this->Age = $param["Age"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Restarts",$param) and $param["Restarts"] !== null) {
            $this->Restarts = $param["Restarts"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("ServiceCount",$param) and $param["ServiceCount"] !== null) {
            $this->ServiceCount = $param["ServiceCount"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("ContainerCount",$param) and $param["ContainerCount"] !== null) {
            $this->ContainerCount = $param["ContainerCount"];
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = $param["Labels"];
        }

        if (array_key_exists("ClusterStatus",$param) and $param["ClusterStatus"] !== null) {
            $this->ClusterStatus = $param["ClusterStatus"];
        }

        if (array_key_exists("WorkloadLabels",$param) and $param["WorkloadLabels"] !== null) {
            $this->WorkloadLabels = $param["WorkloadLabels"];
        }

        if (array_key_exists("ContainerId",$param) and $param["ContainerId"] !== null) {
            $this->ContainerId = $param["ContainerId"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostId",$param) and $param["HostId"] !== null) {
            $this->HostId = $param["HostId"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("ChargeCoresCnt",$param) and $param["ChargeCoresCnt"] !== null) {
            $this->ChargeCoresCnt = $param["ChargeCoresCnt"];
        }
    }
}
