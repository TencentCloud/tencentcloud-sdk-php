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
 * 漏洞防御事件详情
 *
 * @method string getCVEID() 获取漏洞CVEID
 * @method void setCVEID(string $CVEID) 设置漏洞CVEID
 * @method string getVulName() 获取漏洞名称
 * @method void setVulName(string $VulName) 设置漏洞名称
 * @method string getPocID() 获取漏洞PocID
 * @method void setPocID(string $PocID) 设置漏洞PocID
 * @method string getEventType() 获取入侵状态
 * @method void setEventType(string $EventType) 设置入侵状态
 * @method string getSourceIP() 获取攻击源IP
 * @method void setSourceIP(string $SourceIP) 设置攻击源IP
 * @method string getCity() 获取攻击源ip地址所在城市
 * @method void setCity(string $City) 设置攻击源ip地址所在城市
 * @method integer getEventCount() 获取事件数量
 * @method void setEventCount(integer $EventCount) 设置事件数量
 * @method string getContainerID() 获取容器ID
 * @method void setContainerID(string $ContainerID) 设置容器ID
 * @method string getContainerName() 获取容器名称
 * @method void setContainerName(string $ContainerName) 设置容器名称
 * @method string getImageID() 获取镜像ID
 * @method void setImageID(string $ImageID) 设置镜像ID
 * @method string getImageName() 获取镜像名称
 * @method void setImageName(string $ImageName) 设置镜像名称
 * @method string getStatus() 获取处理状态
 * @method void setStatus(string $Status) 设置处理状态
 * @method array getSourcePort() 获取攻击源端口
 * @method void setSourcePort(array $SourcePort) 设置攻击源端口
 * @method integer getEventID() 获取事件ID
 * @method void setEventID(integer $EventID) 设置事件ID
 * @method string getHostName() 获取主机名称/超级节点名称
 * @method void setHostName(string $HostName) 设置主机名称/超级节点名称
 * @method string getHostIP() 获取主机内网IP
 * @method void setHostIP(string $HostIP) 设置主机内网IP
 * @method string getPublicIP() 获取主机外网IP
 * @method void setPublicIP(string $PublicIP) 设置主机外网IP
 * @method string getPodName() 获取Pod名称
 * @method void setPodName(string $PodName) 设置Pod名称
 * @method string getDescription() 获取危害描述
 * @method void setDescription(string $Description) 设置危害描述
 * @method string getOfficialSolution() 获取修复建议
 * @method void setOfficialSolution(string $OfficialSolution) 设置修复建议
 * @method string getNetworkPayload() 获取攻击包
 * @method void setNetworkPayload(string $NetworkPayload) 设置攻击包
 * @method integer getPID() 获取进程PID
 * @method void setPID(integer $PID) 设置进程PID
 * @method string getMainClass() 获取进程主类名
 * @method void setMainClass(string $MainClass) 设置进程主类名
 * @method string getStackTrace() 获取堆栈信息
 * @method void setStackTrace(string $StackTrace) 设置堆栈信息
 * @method string getServerAccount() 获取监听账号
 * @method void setServerAccount(string $ServerAccount) 设置监听账号
 * @method string getServerPort() 获取监听端口
 * @method void setServerPort(string $ServerPort) 设置监听端口
 * @method string getServerExe() 获取进程路径
 * @method void setServerExe(string $ServerExe) 设置进程路径
 * @method string getServerArg() 获取进程命令行参数
 * @method void setServerArg(string $ServerArg) 设置进程命令行参数
 * @method string getQUUID() 获取主机QUUID/超级节点ID
 * @method void setQUUID(string $QUUID) 设置主机QUUID/超级节点ID
 * @method string getContainerNetStatus() 获取隔离状态
未隔离  	NORMAL
已隔离		ISOLATED
隔离中		ISOLATING
隔离失败	ISOLATE_FAILED
解除隔离中  RESTORING
解除隔离失败 RESTORE_FAILED
 * @method void setContainerNetStatus(string $ContainerNetStatus) 设置隔离状态
未隔离  	NORMAL
已隔离		ISOLATED
隔离中		ISOLATING
隔离失败	ISOLATE_FAILED
解除隔离中  RESTORING
解除隔离失败 RESTORE_FAILED
 * @method string getContainerNetSubStatus() 获取容器子状态
"AGENT_OFFLINE"       //Agent离线
	"NODE_DESTROYED"      //节点已销毁
	"CONTAINER_EXITED"    //容器已退出
	"CONTAINER_DESTROYED" //容器已销毁
	"SHARED_HOST"         // 容器与主机共享网络
	"RESOURCE_LIMIT"      //隔离操作资源超限
	"UNKNOW"              // 原因未知
 * @method void setContainerNetSubStatus(string $ContainerNetSubStatus) 设置容器子状态
"AGENT_OFFLINE"       //Agent离线
	"NODE_DESTROYED"      //节点已销毁
	"CONTAINER_EXITED"    //容器已退出
	"CONTAINER_DESTROYED" //容器已销毁
	"SHARED_HOST"         // 容器与主机共享网络
	"RESOURCE_LIMIT"      //隔离操作资源超限
	"UNKNOW"              // 原因未知
 * @method string getContainerIsolateOperationSrc() 获取容器隔离操作来源
 * @method void setContainerIsolateOperationSrc(string $ContainerIsolateOperationSrc) 设置容器隔离操作来源
 * @method string getContainerStatus() 获取容器状态
正在运行: RUNNING
暂停: PAUSED
停止: STOPPED
已经创建: CREATED
已经销毁: DESTROYED
正在重启中: RESTARTING
迁移中: REMOVING
 * @method void setContainerStatus(string $ContainerStatus) 设置容器状态
正在运行: RUNNING
暂停: PAUSED
停止: STOPPED
已经创建: CREATED
已经销毁: DESTROYED
正在重启中: RESTARTING
迁移中: REMOVING
 * @method string getJNDIUrl() 获取接口Url
 * @method void setJNDIUrl(string $JNDIUrl) 设置接口Url
 * @method array getRaspDetail() 获取rasp detail
 * @method void setRaspDetail(array $RaspDetail) 设置rasp detail
 * @method string getNodeSubNetName() 获取超级节点子网名称
 * @method void setNodeSubNetName(string $NodeSubNetName) 设置超级节点子网名称
 * @method string getNodeSubNetCIDR() 获取超级节点子网网段
 * @method void setNodeSubNetCIDR(string $NodeSubNetCIDR) 设置超级节点子网网段
 * @method string getPodIP() 获取pod ip
 * @method void setPodIP(string $PodIP) 设置pod ip
 * @method string getNodeType() 获取节点类型[NORMAL:普通节点|SUPER:超级节点]
 * @method void setNodeType(string $NodeType) 设置节点类型[NORMAL:普通节点|SUPER:超级节点]
 * @method string getNodeID() 获取超级节点ID
 * @method void setNodeID(string $NodeID) 设置超级节点ID
 * @method string getNodeUniqueID() 获取超级节点唯一ID
 * @method void setNodeUniqueID(string $NodeUniqueID) 设置超级节点唯一ID
 * @method string getNodeSubNetID() 获取超级节点子网ID
 * @method void setNodeSubNetID(string $NodeSubNetID) 设置超级节点子网ID
 * @method string getClusterID() 获取集群ID
 * @method void setClusterID(string $ClusterID) 设置集群ID
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getNamespace() 获取Namespace
 * @method void setNamespace(string $Namespace) 设置Namespace
 * @method string getWorkloadType() 获取工作负载
 * @method void setWorkloadType(string $WorkloadType) 设置工作负载
 */
class VulDefenceEventDetail extends AbstractModel
{
    /**
     * @var string 漏洞CVEID
     */
    public $CVEID;

    /**
     * @var string 漏洞名称
     */
    public $VulName;

    /**
     * @var string 漏洞PocID
     */
    public $PocID;

    /**
     * @var string 入侵状态
     */
    public $EventType;

    /**
     * @var string 攻击源IP
     */
    public $SourceIP;

    /**
     * @var string 攻击源ip地址所在城市
     */
    public $City;

    /**
     * @var integer 事件数量
     */
    public $EventCount;

    /**
     * @var string 容器ID
     */
    public $ContainerID;

    /**
     * @var string 容器名称
     */
    public $ContainerName;

    /**
     * @var string 镜像ID
     */
    public $ImageID;

    /**
     * @var string 镜像名称
     */
    public $ImageName;

    /**
     * @var string 处理状态
     */
    public $Status;

    /**
     * @var array 攻击源端口
     */
    public $SourcePort;

    /**
     * @var integer 事件ID
     */
    public $EventID;

    /**
     * @var string 主机名称/超级节点名称
     */
    public $HostName;

    /**
     * @var string 主机内网IP
     */
    public $HostIP;

    /**
     * @var string 主机外网IP
     */
    public $PublicIP;

    /**
     * @var string Pod名称
     */
    public $PodName;

    /**
     * @var string 危害描述
     */
    public $Description;

    /**
     * @var string 修复建议
     */
    public $OfficialSolution;

    /**
     * @var string 攻击包
     */
    public $NetworkPayload;

    /**
     * @var integer 进程PID
     */
    public $PID;

    /**
     * @var string 进程主类名
     */
    public $MainClass;

    /**
     * @var string 堆栈信息
     */
    public $StackTrace;

    /**
     * @var string 监听账号
     */
    public $ServerAccount;

    /**
     * @var string 监听端口
     */
    public $ServerPort;

    /**
     * @var string 进程路径
     */
    public $ServerExe;

    /**
     * @var string 进程命令行参数
     */
    public $ServerArg;

    /**
     * @var string 主机QUUID/超级节点ID
     */
    public $QUUID;

    /**
     * @var string 隔离状态
未隔离  	NORMAL
已隔离		ISOLATED
隔离中		ISOLATING
隔离失败	ISOLATE_FAILED
解除隔离中  RESTORING
解除隔离失败 RESTORE_FAILED
     */
    public $ContainerNetStatus;

    /**
     * @var string 容器子状态
"AGENT_OFFLINE"       //Agent离线
	"NODE_DESTROYED"      //节点已销毁
	"CONTAINER_EXITED"    //容器已退出
	"CONTAINER_DESTROYED" //容器已销毁
	"SHARED_HOST"         // 容器与主机共享网络
	"RESOURCE_LIMIT"      //隔离操作资源超限
	"UNKNOW"              // 原因未知
     */
    public $ContainerNetSubStatus;

    /**
     * @var string 容器隔离操作来源
     */
    public $ContainerIsolateOperationSrc;

    /**
     * @var string 容器状态
正在运行: RUNNING
暂停: PAUSED
停止: STOPPED
已经创建: CREATED
已经销毁: DESTROYED
正在重启中: RESTARTING
迁移中: REMOVING
     */
    public $ContainerStatus;

    /**
     * @var string 接口Url
     */
    public $JNDIUrl;

    /**
     * @var array rasp detail
     */
    public $RaspDetail;

    /**
     * @var string 超级节点子网名称
     */
    public $NodeSubNetName;

    /**
     * @var string 超级节点子网网段
     */
    public $NodeSubNetCIDR;

    /**
     * @var string pod ip
     */
    public $PodIP;

    /**
     * @var string 节点类型[NORMAL:普通节点|SUPER:超级节点]
     */
    public $NodeType;

    /**
     * @var string 超级节点ID
     */
    public $NodeID;

    /**
     * @var string 超级节点唯一ID
     */
    public $NodeUniqueID;

    /**
     * @var string 超级节点子网ID
     */
    public $NodeSubNetID;

    /**
     * @var string 集群ID
     */
    public $ClusterID;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string Namespace
     */
    public $Namespace;

    /**
     * @var string 工作负载
     */
    public $WorkloadType;

    /**
     * @param string $CVEID 漏洞CVEID
     * @param string $VulName 漏洞名称
     * @param string $PocID 漏洞PocID
     * @param string $EventType 入侵状态
     * @param string $SourceIP 攻击源IP
     * @param string $City 攻击源ip地址所在城市
     * @param integer $EventCount 事件数量
     * @param string $ContainerID 容器ID
     * @param string $ContainerName 容器名称
     * @param string $ImageID 镜像ID
     * @param string $ImageName 镜像名称
     * @param string $Status 处理状态
     * @param array $SourcePort 攻击源端口
     * @param integer $EventID 事件ID
     * @param string $HostName 主机名称/超级节点名称
     * @param string $HostIP 主机内网IP
     * @param string $PublicIP 主机外网IP
     * @param string $PodName Pod名称
     * @param string $Description 危害描述
     * @param string $OfficialSolution 修复建议
     * @param string $NetworkPayload 攻击包
     * @param integer $PID 进程PID
     * @param string $MainClass 进程主类名
     * @param string $StackTrace 堆栈信息
     * @param string $ServerAccount 监听账号
     * @param string $ServerPort 监听端口
     * @param string $ServerExe 进程路径
     * @param string $ServerArg 进程命令行参数
     * @param string $QUUID 主机QUUID/超级节点ID
     * @param string $ContainerNetStatus 隔离状态
未隔离  	NORMAL
已隔离		ISOLATED
隔离中		ISOLATING
隔离失败	ISOLATE_FAILED
解除隔离中  RESTORING
解除隔离失败 RESTORE_FAILED
     * @param string $ContainerNetSubStatus 容器子状态
"AGENT_OFFLINE"       //Agent离线
	"NODE_DESTROYED"      //节点已销毁
	"CONTAINER_EXITED"    //容器已退出
	"CONTAINER_DESTROYED" //容器已销毁
	"SHARED_HOST"         // 容器与主机共享网络
	"RESOURCE_LIMIT"      //隔离操作资源超限
	"UNKNOW"              // 原因未知
     * @param string $ContainerIsolateOperationSrc 容器隔离操作来源
     * @param string $ContainerStatus 容器状态
正在运行: RUNNING
暂停: PAUSED
停止: STOPPED
已经创建: CREATED
已经销毁: DESTROYED
正在重启中: RESTARTING
迁移中: REMOVING
     * @param string $JNDIUrl 接口Url
     * @param array $RaspDetail rasp detail
     * @param string $NodeSubNetName 超级节点子网名称
     * @param string $NodeSubNetCIDR 超级节点子网网段
     * @param string $PodIP pod ip
     * @param string $NodeType 节点类型[NORMAL:普通节点|SUPER:超级节点]
     * @param string $NodeID 超级节点ID
     * @param string $NodeUniqueID 超级节点唯一ID
     * @param string $NodeSubNetID 超级节点子网ID
     * @param string $ClusterID 集群ID
     * @param string $ClusterName 集群名称
     * @param string $Namespace Namespace
     * @param string $WorkloadType 工作负载
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
        if (array_key_exists("CVEID",$param) and $param["CVEID"] !== null) {
            $this->CVEID = $param["CVEID"];
        }

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("PocID",$param) and $param["PocID"] !== null) {
            $this->PocID = $param["PocID"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("SourceIP",$param) and $param["SourceIP"] !== null) {
            $this->SourceIP = $param["SourceIP"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("EventCount",$param) and $param["EventCount"] !== null) {
            $this->EventCount = $param["EventCount"];
        }

        if (array_key_exists("ContainerID",$param) and $param["ContainerID"] !== null) {
            $this->ContainerID = $param["ContainerID"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("ImageID",$param) and $param["ImageID"] !== null) {
            $this->ImageID = $param["ImageID"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SourcePort",$param) and $param["SourcePort"] !== null) {
            $this->SourcePort = $param["SourcePort"];
        }

        if (array_key_exists("EventID",$param) and $param["EventID"] !== null) {
            $this->EventID = $param["EventID"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostIP",$param) and $param["HostIP"] !== null) {
            $this->HostIP = $param["HostIP"];
        }

        if (array_key_exists("PublicIP",$param) and $param["PublicIP"] !== null) {
            $this->PublicIP = $param["PublicIP"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("OfficialSolution",$param) and $param["OfficialSolution"] !== null) {
            $this->OfficialSolution = $param["OfficialSolution"];
        }

        if (array_key_exists("NetworkPayload",$param) and $param["NetworkPayload"] !== null) {
            $this->NetworkPayload = $param["NetworkPayload"];
        }

        if (array_key_exists("PID",$param) and $param["PID"] !== null) {
            $this->PID = $param["PID"];
        }

        if (array_key_exists("MainClass",$param) and $param["MainClass"] !== null) {
            $this->MainClass = $param["MainClass"];
        }

        if (array_key_exists("StackTrace",$param) and $param["StackTrace"] !== null) {
            $this->StackTrace = $param["StackTrace"];
        }

        if (array_key_exists("ServerAccount",$param) and $param["ServerAccount"] !== null) {
            $this->ServerAccount = $param["ServerAccount"];
        }

        if (array_key_exists("ServerPort",$param) and $param["ServerPort"] !== null) {
            $this->ServerPort = $param["ServerPort"];
        }

        if (array_key_exists("ServerExe",$param) and $param["ServerExe"] !== null) {
            $this->ServerExe = $param["ServerExe"];
        }

        if (array_key_exists("ServerArg",$param) and $param["ServerArg"] !== null) {
            $this->ServerArg = $param["ServerArg"];
        }

        if (array_key_exists("QUUID",$param) and $param["QUUID"] !== null) {
            $this->QUUID = $param["QUUID"];
        }

        if (array_key_exists("ContainerNetStatus",$param) and $param["ContainerNetStatus"] !== null) {
            $this->ContainerNetStatus = $param["ContainerNetStatus"];
        }

        if (array_key_exists("ContainerNetSubStatus",$param) and $param["ContainerNetSubStatus"] !== null) {
            $this->ContainerNetSubStatus = $param["ContainerNetSubStatus"];
        }

        if (array_key_exists("ContainerIsolateOperationSrc",$param) and $param["ContainerIsolateOperationSrc"] !== null) {
            $this->ContainerIsolateOperationSrc = $param["ContainerIsolateOperationSrc"];
        }

        if (array_key_exists("ContainerStatus",$param) and $param["ContainerStatus"] !== null) {
            $this->ContainerStatus = $param["ContainerStatus"];
        }

        if (array_key_exists("JNDIUrl",$param) and $param["JNDIUrl"] !== null) {
            $this->JNDIUrl = $param["JNDIUrl"];
        }

        if (array_key_exists("RaspDetail",$param) and $param["RaspDetail"] !== null) {
            $this->RaspDetail = [];
            foreach ($param["RaspDetail"] as $key => $value){
                $obj = new RaspInfo();
                $obj->deserialize($value);
                array_push($this->RaspDetail, $obj);
            }
        }

        if (array_key_exists("NodeSubNetName",$param) and $param["NodeSubNetName"] !== null) {
            $this->NodeSubNetName = $param["NodeSubNetName"];
        }

        if (array_key_exists("NodeSubNetCIDR",$param) and $param["NodeSubNetCIDR"] !== null) {
            $this->NodeSubNetCIDR = $param["NodeSubNetCIDR"];
        }

        if (array_key_exists("PodIP",$param) and $param["PodIP"] !== null) {
            $this->PodIP = $param["PodIP"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("NodeID",$param) and $param["NodeID"] !== null) {
            $this->NodeID = $param["NodeID"];
        }

        if (array_key_exists("NodeUniqueID",$param) and $param["NodeUniqueID"] !== null) {
            $this->NodeUniqueID = $param["NodeUniqueID"];
        }

        if (array_key_exists("NodeSubNetID",$param) and $param["NodeSubNetID"] !== null) {
            $this->NodeSubNetID = $param["NodeSubNetID"];
        }

        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("WorkloadType",$param) and $param["WorkloadType"] !== null) {
            $this->WorkloadType = $param["WorkloadType"];
        }
    }
}
