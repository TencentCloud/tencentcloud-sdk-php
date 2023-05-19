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
 * DescribeAssetContainerDetail返回参数结构体
 *
 * @method string getHostID() 获取主机id
 * @method void setHostID(string $HostID) 设置主机id
 * @method string getHostIP() 获取主机ip
 * @method void setHostIP(string $HostIP) 设置主机ip
 * @method string getContainerName() 获取容器名称
 * @method void setContainerName(string $ContainerName) 设置容器名称
 * @method string getStatus() 获取运行状态
 * @method void setStatus(string $Status) 设置运行状态
 * @method string getRunAs() 获取运行账户
 * @method void setRunAs(string $RunAs) 设置运行账户
 * @method string getCmd() 获取命令行
 * @method void setCmd(string $Cmd) 设置命令行
 * @method integer getCPUUsage() 获取CPU使用率 * 1000
 * @method void setCPUUsage(integer $CPUUsage) 设置CPU使用率 * 1000
 * @method integer getRamUsage() 获取内存使用 KB
 * @method void setRamUsage(integer $RamUsage) 设置内存使用 KB
 * @method string getImageName() 获取镜像名
 * @method void setImageName(string $ImageName) 设置镜像名
 * @method string getImageID() 获取镜像ID
 * @method void setImageID(string $ImageID) 设置镜像ID
 * @method string getPOD() 获取归属POD
 * @method void setPOD(string $POD) 设置归属POD
 * @method string getK8sMaster() 获取k8s 主节点
 * @method void setK8sMaster(string $K8sMaster) 设置k8s 主节点
 * @method integer getProcessCnt() 获取容器内进程数
 * @method void setProcessCnt(integer $ProcessCnt) 设置容器内进程数
 * @method integer getPortCnt() 获取容器内端口数
 * @method void setPortCnt(integer $PortCnt) 设置容器内端口数
 * @method integer getComponentCnt() 获取组件数
 * @method void setComponentCnt(integer $ComponentCnt) 设置组件数
 * @method integer getAppCnt() 获取app数
 * @method void setAppCnt(integer $AppCnt) 设置app数
 * @method integer getWebServiceCnt() 获取websvc数
 * @method void setWebServiceCnt(integer $WebServiceCnt) 设置websvc数
 * @method array getMounts() 获取挂载
 * @method void setMounts(array $Mounts) 设置挂载
 * @method ContainerNetwork getNetwork() 获取容器网络信息
 * @method void setNetwork(ContainerNetwork $Network) 设置容器网络信息
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getImageCreateTime() 获取镜像创建时间
 * @method void setImageCreateTime(string $ImageCreateTime) 设置镜像创建时间
 * @method integer getImageSize() 获取镜像大小
 * @method void setImageSize(integer $ImageSize) 设置镜像大小
 * @method string getHostStatus() 获取主机状态 offline,online,pause
 * @method void setHostStatus(string $HostStatus) 设置主机状态 offline,online,pause
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
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsolateSource(string $IsolateSource) 设置隔离来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIsolateTime() 获取隔离时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsolateTime(string $IsolateTime) 设置隔离时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeID() 获取节点ID
 * @method void setNodeID(string $NodeID) 设置节点ID
 * @method string getNodeName() 获取节点名称
 * @method void setNodeName(string $NodeName) 设置节点名称
 * @method string getNodeSubNetID() 获取节点子网ID
 * @method void setNodeSubNetID(string $NodeSubNetID) 设置节点子网ID
 * @method string getNodeSubNetName() 获取节点子网名称
 * @method void setNodeSubNetName(string $NodeSubNetName) 设置节点子网名称
 * @method string getNodeSubNetCIDR() 获取节点子网网段
 * @method void setNodeSubNetCIDR(string $NodeSubNetCIDR) 设置节点子网网段
 * @method string getPodName() 获取pod名称
 * @method void setPodName(string $PodName) 设置pod名称
 * @method string getPodIP() 获取pod ip
 * @method void setPodIP(string $PodIP) 设置pod ip
 * @method string getPodStatus() 获取pod状态
 * @method void setPodStatus(string $PodStatus) 设置pod状态
 * @method string getClusterID() 获取集群ID
 * @method void setClusterID(string $ClusterID) 设置集群ID
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getNodeType() 获取节点类型:NORMAL: 普通节点(默认值) SUPER: 超级节点
 * @method void setNodeType(string $NodeType) 设置节点类型:NORMAL: 普通节点(默认值) SUPER: 超级节点
 * @method string getNodeUniqueID() 获取超级节点唯一id
 * @method void setNodeUniqueID(string $NodeUniqueID) 设置超级节点唯一id
 * @method string getPublicIP() 获取外网ip
 * @method void setPublicIP(string $PublicIP) 设置外网ip
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAssetContainerDetailResponse extends AbstractModel
{
    /**
     * @var string 主机id
     */
    public $HostID;

    /**
     * @var string 主机ip
     */
    public $HostIP;

    /**
     * @var string 容器名称
     */
    public $ContainerName;

    /**
     * @var string 运行状态
     */
    public $Status;

    /**
     * @var string 运行账户
     */
    public $RunAs;

    /**
     * @var string 命令行
     */
    public $Cmd;

    /**
     * @var integer CPU使用率 * 1000
     */
    public $CPUUsage;

    /**
     * @var integer 内存使用 KB
     */
    public $RamUsage;

    /**
     * @var string 镜像名
     */
    public $ImageName;

    /**
     * @var string 镜像ID
     */
    public $ImageID;

    /**
     * @var string 归属POD
     */
    public $POD;

    /**
     * @var string k8s 主节点
     */
    public $K8sMaster;

    /**
     * @var integer 容器内进程数
     */
    public $ProcessCnt;

    /**
     * @var integer 容器内端口数
     */
    public $PortCnt;

    /**
     * @var integer 组件数
     */
    public $ComponentCnt;

    /**
     * @var integer app数
     */
    public $AppCnt;

    /**
     * @var integer websvc数
     */
    public $WebServiceCnt;

    /**
     * @var array 挂载
     */
    public $Mounts;

    /**
     * @var ContainerNetwork 容器网络信息
     */
    public $Network;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 镜像创建时间
     */
    public $ImageCreateTime;

    /**
     * @var integer 镜像大小
     */
    public $ImageSize;

    /**
     * @var string 主机状态 offline,online,pause
     */
    public $HostStatus;

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
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsolateSource;

    /**
     * @var string 隔离时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsolateTime;

    /**
     * @var string 节点ID
     */
    public $NodeID;

    /**
     * @var string 节点名称
     */
    public $NodeName;

    /**
     * @var string 节点子网ID
     */
    public $NodeSubNetID;

    /**
     * @var string 节点子网名称
     */
    public $NodeSubNetName;

    /**
     * @var string 节点子网网段
     */
    public $NodeSubNetCIDR;

    /**
     * @var string pod名称
     */
    public $PodName;

    /**
     * @var string pod ip
     */
    public $PodIP;

    /**
     * @var string pod状态
     */
    public $PodStatus;

    /**
     * @var string 集群ID
     */
    public $ClusterID;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string 节点类型:NORMAL: 普通节点(默认值) SUPER: 超级节点
     */
    public $NodeType;

    /**
     * @var string 超级节点唯一id
     */
    public $NodeUniqueID;

    /**
     * @var string 外网ip
     */
    public $PublicIP;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $HostID 主机id
     * @param string $HostIP 主机ip
     * @param string $ContainerName 容器名称
     * @param string $Status 运行状态
     * @param string $RunAs 运行账户
     * @param string $Cmd 命令行
     * @param integer $CPUUsage CPU使用率 * 1000
     * @param integer $RamUsage 内存使用 KB
     * @param string $ImageName 镜像名
     * @param string $ImageID 镜像ID
     * @param string $POD 归属POD
     * @param string $K8sMaster k8s 主节点
     * @param integer $ProcessCnt 容器内进程数
     * @param integer $PortCnt 容器内端口数
     * @param integer $ComponentCnt 组件数
     * @param integer $AppCnt app数
     * @param integer $WebServiceCnt websvc数
     * @param array $Mounts 挂载
     * @param ContainerNetwork $Network 容器网络信息
     * @param string $CreateTime 创建时间
     * @param string $ImageCreateTime 镜像创建时间
     * @param integer $ImageSize 镜像大小
     * @param string $HostStatus 主机状态 offline,online,pause
     * @param string $NetStatus 网络状态
未隔离  	NORMAL
已隔离		ISOLATED
隔离中		ISOLATING
隔离失败	ISOLATE_FAILED
解除隔离中  RESTORING
解除隔离失败 RESTORE_FAILED
     * @param string $NetSubStatus 网络子状态
     * @param string $IsolateSource 隔离来源
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IsolateTime 隔离时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeID 节点ID
     * @param string $NodeName 节点名称
     * @param string $NodeSubNetID 节点子网ID
     * @param string $NodeSubNetName 节点子网名称
     * @param string $NodeSubNetCIDR 节点子网网段
     * @param string $PodName pod名称
     * @param string $PodIP pod ip
     * @param string $PodStatus pod状态
     * @param string $ClusterID 集群ID
     * @param string $ClusterName 集群名称
     * @param string $NodeType 节点类型:NORMAL: 普通节点(默认值) SUPER: 超级节点
     * @param string $NodeUniqueID 超级节点唯一id
     * @param string $PublicIP 外网ip
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("HostID",$param) and $param["HostID"] !== null) {
            $this->HostID = $param["HostID"];
        }

        if (array_key_exists("HostIP",$param) and $param["HostIP"] !== null) {
            $this->HostIP = $param["HostIP"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
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

        if (array_key_exists("K8sMaster",$param) and $param["K8sMaster"] !== null) {
            $this->K8sMaster = $param["K8sMaster"];
        }

        if (array_key_exists("ProcessCnt",$param) and $param["ProcessCnt"] !== null) {
            $this->ProcessCnt = $param["ProcessCnt"];
        }

        if (array_key_exists("PortCnt",$param) and $param["PortCnt"] !== null) {
            $this->PortCnt = $param["PortCnt"];
        }

        if (array_key_exists("ComponentCnt",$param) and $param["ComponentCnt"] !== null) {
            $this->ComponentCnt = $param["ComponentCnt"];
        }

        if (array_key_exists("AppCnt",$param) and $param["AppCnt"] !== null) {
            $this->AppCnt = $param["AppCnt"];
        }

        if (array_key_exists("WebServiceCnt",$param) and $param["WebServiceCnt"] !== null) {
            $this->WebServiceCnt = $param["WebServiceCnt"];
        }

        if (array_key_exists("Mounts",$param) and $param["Mounts"] !== null) {
            $this->Mounts = [];
            foreach ($param["Mounts"] as $key => $value){
                $obj = new ContainerMount();
                $obj->deserialize($value);
                array_push($this->Mounts, $obj);
            }
        }

        if (array_key_exists("Network",$param) and $param["Network"] !== null) {
            $this->Network = new ContainerNetwork();
            $this->Network->deserialize($param["Network"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ImageCreateTime",$param) and $param["ImageCreateTime"] !== null) {
            $this->ImageCreateTime = $param["ImageCreateTime"];
        }

        if (array_key_exists("ImageSize",$param) and $param["ImageSize"] !== null) {
            $this->ImageSize = $param["ImageSize"];
        }

        if (array_key_exists("HostStatus",$param) and $param["HostStatus"] !== null) {
            $this->HostStatus = $param["HostStatus"];
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

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("NodeSubNetID",$param) and $param["NodeSubNetID"] !== null) {
            $this->NodeSubNetID = $param["NodeSubNetID"];
        }

        if (array_key_exists("NodeSubNetName",$param) and $param["NodeSubNetName"] !== null) {
            $this->NodeSubNetName = $param["NodeSubNetName"];
        }

        if (array_key_exists("NodeSubNetCIDR",$param) and $param["NodeSubNetCIDR"] !== null) {
            $this->NodeSubNetCIDR = $param["NodeSubNetCIDR"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("PodIP",$param) and $param["PodIP"] !== null) {
            $this->PodIP = $param["PodIP"];
        }

        if (array_key_exists("PodStatus",$param) and $param["PodStatus"] !== null) {
            $this->PodStatus = $param["PodStatus"];
        }

        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("NodeUniqueID",$param) and $param["NodeUniqueID"] !== null) {
            $this->NodeUniqueID = $param["NodeUniqueID"];
        }

        if (array_key_exists("PublicIP",$param) and $param["PublicIP"] !== null) {
            $this->PublicIP = $param["PublicIP"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
