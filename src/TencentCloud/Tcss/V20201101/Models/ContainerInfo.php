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
 * 容器列表集合
 *
 * @method string getContainerID() 获取容器id
 * @method void setContainerID(string $ContainerID) 设置容器id
 * @method string getContainerName() 获取容器名称
 * @method void setContainerName(string $ContainerName) 设置容器名称
 * @method string getStatus() 获取容器运行状态
 * @method void setStatus(string $Status) 设置容器运行状态
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getRunAs() 获取运行用户
 * @method void setRunAs(string $RunAs) 设置运行用户
 * @method string getCmd() 获取命令行
 * @method void setCmd(string $Cmd) 设置命令行
 * @method integer getCPUUsage() 获取CPU使用率 *1000
 * @method void setCPUUsage(integer $CPUUsage) 设置CPU使用率 *1000
 * @method integer getRamUsage() 获取内存使用 kb
 * @method void setRamUsage(integer $RamUsage) 设置内存使用 kb
 * @method string getImageName() 获取镜像名称
 * @method void setImageName(string $ImageName) 设置镜像名称
 * @method string getImageID() 获取镜像id
 * @method void setImageID(string $ImageID) 设置镜像id
 * @method string getPOD() 获取镜像id
 * @method void setPOD(string $POD) 设置镜像id
 * @method string getHostID() 获取主机id
 * @method void setHostID(string $HostID) 设置主机id
 * @method string getHostIP() 获取主机ip
 * @method void setHostIP(string $HostIP) 设置主机ip
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getHostName() 获取主机名称
 * @method void setHostName(string $HostName) 设置主机名称
 * @method string getPublicIp() 获取外网ip
 * @method void setPublicIp(string $PublicIp) 设置外网ip
 * @method string getNetStatus() 获取网络状态
未隔离  	NORMAL
已隔离		ISOLATED
隔离中		ISOLATING
隔离失败	ISOLATE_FAILED
解除隔离中  RESTORING
解除隔离失败 RESTORE_FAILED
 * @method void setNetStatus(string $NetStatus) 设置网络状态
未隔离  	NORMAL
已隔离		ISOLATED
隔离中		ISOLATING
隔离失败	ISOLATE_FAILED
解除隔离中  RESTORING
解除隔离失败 RESTORE_FAILED
 * @method string getNetSubStatus() 获取网络子状态
 * @method void setNetSubStatus(string $NetSubStatus) 设置网络子状态
 * @method string getIsolateSource() 获取隔离来源
 * @method void setIsolateSource(string $IsolateSource) 设置隔离来源
 * @method string getIsolateTime() 获取隔离时间
 * @method void setIsolateTime(string $IsolateTime) 设置隔离时间
 * @method string getNodeID() 获取超级节点id
 * @method void setNodeID(string $NodeID) 设置超级节点id
 * @method string getPodIP() 获取podip
 * @method void setPodIP(string $PodIP) 设置podip
 * @method string getPodName() 获取pod名称
 * @method void setPodName(string $PodName) 设置pod名称
 * @method string getNodeType() 获取节点类型:节点类型：NORMAL普通节点、SUPER超级节点
 * @method void setNodeType(string $NodeType) 设置节点类型:节点类型：NORMAL普通节点、SUPER超级节点
 * @method string getNodeUniqueID() 获取超级节点唯一id
 * @method void setNodeUniqueID(string $NodeUniqueID) 设置超级节点唯一id
 * @method integer getPodCpu() 获取所属Pod的CPU
 * @method void setPodCpu(integer $PodCpu) 设置所属Pod的CPU
 * @method integer getPodMem() 获取所属Pod的内存
 * @method void setPodMem(integer $PodMem) 设置所属Pod的内存
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getClusterID() 获取集群ID
 * @method void setClusterID(string $ClusterID) 设置集群ID
 * @method string getPodUid() 获取pod uid
 * @method void setPodUid(string $PodUid) 设置pod uid
 */
class ContainerInfo extends AbstractModel
{
    /**
     * @var string 容器id
     */
    public $ContainerID;

    /**
     * @var string 容器名称
     */
    public $ContainerName;

    /**
     * @var string 容器运行状态
     */
    public $Status;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 运行用户
     */
    public $RunAs;

    /**
     * @var string 命令行
     */
    public $Cmd;

    /**
     * @var integer CPU使用率 *1000
     */
    public $CPUUsage;

    /**
     * @var integer 内存使用 kb
     */
    public $RamUsage;

    /**
     * @var string 镜像名称
     */
    public $ImageName;

    /**
     * @var string 镜像id
     */
    public $ImageID;

    /**
     * @var string 镜像id
     */
    public $POD;

    /**
     * @var string 主机id
     */
    public $HostID;

    /**
     * @var string 主机ip
     */
    public $HostIP;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 主机名称
     */
    public $HostName;

    /**
     * @var string 外网ip
     */
    public $PublicIp;

    /**
     * @var string 网络状态
未隔离  	NORMAL
已隔离		ISOLATED
隔离中		ISOLATING
隔离失败	ISOLATE_FAILED
解除隔离中  RESTORING
解除隔离失败 RESTORE_FAILED
     */
    public $NetStatus;

    /**
     * @var string 网络子状态
     */
    public $NetSubStatus;

    /**
     * @var string 隔离来源
     */
    public $IsolateSource;

    /**
     * @var string 隔离时间
     */
    public $IsolateTime;

    /**
     * @var string 超级节点id
     */
    public $NodeID;

    /**
     * @var string podip
     */
    public $PodIP;

    /**
     * @var string pod名称
     */
    public $PodName;

    /**
     * @var string 节点类型:节点类型：NORMAL普通节点、SUPER超级节点
     */
    public $NodeType;

    /**
     * @var string 超级节点唯一id
     */
    public $NodeUniqueID;

    /**
     * @var integer 所属Pod的CPU
     */
    public $PodCpu;

    /**
     * @var integer 所属Pod的内存
     */
    public $PodMem;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string 集群ID
     */
    public $ClusterID;

    /**
     * @var string pod uid
     */
    public $PodUid;

    /**
     * @param string $ContainerID 容器id
     * @param string $ContainerName 容器名称
     * @param string $Status 容器运行状态
     * @param string $CreateTime 创建时间
     * @param string $RunAs 运行用户
     * @param string $Cmd 命令行
     * @param integer $CPUUsage CPU使用率 *1000
     * @param integer $RamUsage 内存使用 kb
     * @param string $ImageName 镜像名称
     * @param string $ImageID 镜像id
     * @param string $POD 镜像id
     * @param string $HostID 主机id
     * @param string $HostIP 主机ip
     * @param string $UpdateTime 更新时间
     * @param string $HostName 主机名称
     * @param string $PublicIp 外网ip
     * @param string $NetStatus 网络状态
未隔离  	NORMAL
已隔离		ISOLATED
隔离中		ISOLATING
隔离失败	ISOLATE_FAILED
解除隔离中  RESTORING
解除隔离失败 RESTORE_FAILED
     * @param string $NetSubStatus 网络子状态
     * @param string $IsolateSource 隔离来源
     * @param string $IsolateTime 隔离时间
     * @param string $NodeID 超级节点id
     * @param string $PodIP podip
     * @param string $PodName pod名称
     * @param string $NodeType 节点类型:节点类型：NORMAL普通节点、SUPER超级节点
     * @param string $NodeUniqueID 超级节点唯一id
     * @param integer $PodCpu 所属Pod的CPU
     * @param integer $PodMem 所属Pod的内存
     * @param string $ClusterName 集群名称
     * @param string $ClusterID 集群ID
     * @param string $PodUid pod uid
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
        if (array_key_exists("ContainerID",$param) and $param["ContainerID"] !== null) {
            $this->ContainerID = $param["ContainerID"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RunAs",$param) and $param["RunAs"] !== null) {
            $this->RunAs = $param["RunAs"];
        }

        if (array_key_exists("Cmd",$param) and $param["Cmd"] !== null) {
            $this->Cmd = $param["Cmd"];
        }

        if (array_key_exists("CPUUsage",$param) and $param["CPUUsage"] !== null) {
            $this->CPUUsage = $param["CPUUsage"];
        }

        if (array_key_exists("RamUsage",$param) and $param["RamUsage"] !== null) {
            $this->RamUsage = $param["RamUsage"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ImageID",$param) and $param["ImageID"] !== null) {
            $this->ImageID = $param["ImageID"];
        }

        if (array_key_exists("POD",$param) and $param["POD"] !== null) {
            $this->POD = $param["POD"];
        }

        if (array_key_exists("HostID",$param) and $param["HostID"] !== null) {
            $this->HostID = $param["HostID"];
        }

        if (array_key_exists("HostIP",$param) and $param["HostIP"] !== null) {
            $this->HostIP = $param["HostIP"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("NetStatus",$param) and $param["NetStatus"] !== null) {
            $this->NetStatus = $param["NetStatus"];
        }

        if (array_key_exists("NetSubStatus",$param) and $param["NetSubStatus"] !== null) {
            $this->NetSubStatus = $param["NetSubStatus"];
        }

        if (array_key_exists("IsolateSource",$param) and $param["IsolateSource"] !== null) {
            $this->IsolateSource = $param["IsolateSource"];
        }

        if (array_key_exists("IsolateTime",$param) and $param["IsolateTime"] !== null) {
            $this->IsolateTime = $param["IsolateTime"];
        }

        if (array_key_exists("NodeID",$param) and $param["NodeID"] !== null) {
            $this->NodeID = $param["NodeID"];
        }

        if (array_key_exists("PodIP",$param) and $param["PodIP"] !== null) {
            $this->PodIP = $param["PodIP"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("NodeUniqueID",$param) and $param["NodeUniqueID"] !== null) {
            $this->NodeUniqueID = $param["NodeUniqueID"];
        }

        if (array_key_exists("PodCpu",$param) and $param["PodCpu"] !== null) {
            $this->PodCpu = $param["PodCpu"];
        }

        if (array_key_exists("PodMem",$param) and $param["PodMem"] !== null) {
            $this->PodMem = $param["PodMem"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("PodUid",$param) and $param["PodUid"] !== null) {
            $this->PodUid = $param["PodUid"];
        }
    }
}
