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
 * 恶意请求事件信息
 *
 * @method integer getEventID() 获取事件ID
 * @method void setEventID(integer $EventID) 设置事件ID
 * @method string getEventType() 获取事件类型，恶意域名请求：DOMAIN，恶意IP请求：IP
 * @method void setEventType(string $EventType) 设置事件类型，恶意域名请求：DOMAIN，恶意IP请求：IP
 * @method string getAddress() 获取恶意请求域名/IP
 * @method void setAddress(string $Address) 设置恶意请求域名/IP
 * @method string getContainerID() 获取容器ID
 * @method void setContainerID(string $ContainerID) 设置容器ID
 * @method string getContainerName() 获取容器名称
 * @method void setContainerName(string $ContainerName) 设置容器名称
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
 * @method string getImageID() 获取镜像ID
 * @method void setImageID(string $ImageID) 设置镜像ID
 * @method string getImageName() 获取镜像名称
 * @method void setImageName(string $ImageName) 设置镜像名称
 * @method string getFoundTime() 获取首次发现时间
 * @method void setFoundTime(string $FoundTime) 设置首次发现时间
 * @method string getLatestFoundTime() 获取最近生成时间
 * @method void setLatestFoundTime(string $LatestFoundTime) 设置最近生成时间
 * @method string getEventStatus() 获取事件状态
EVENT_UNDEAL： 待处理
EVENT_DEALED：已处理
EVENT_IGNORE： 已忽略
EVENT_ADD_WHITE：已加白
 * @method void setEventStatus(string $EventStatus) 设置事件状态
EVENT_UNDEAL： 待处理
EVENT_DEALED：已处理
EVENT_IGNORE： 已忽略
EVENT_ADD_WHITE：已加白
 * @method integer getEventCount() 获取恶意请求次数
 * @method void setEventCount(integer $EventCount) 设置恶意请求次数
 * @method string getDescription() 获取事件描述
 * @method void setDescription(string $Description) 设置事件描述
 * @method string getSolution() 获取解决方案
 * @method void setSolution(string $Solution) 设置解决方案
 * @method string getCity() 获取恶意IP所属城市
 * @method void setCity(string $City) 设置恶意IP所属城市
 * @method string getHostName() 获取主机名称
 * @method void setHostName(string $HostName) 设置主机名称
 * @method string getHostID() 获取主机ID
 * @method void setHostID(string $HostID) 设置主机ID
 * @method string getHostIP() 获取内网IP
 * @method void setHostIP(string $HostIP) 设置内网IP
 * @method string getPublicIP() 获取外网IP
 * @method void setPublicIP(string $PublicIP) 设置外网IP
 * @method string getNodeType() 获取节点类型：NORMAL普通节点、SUPER超级节点
 * @method void setNodeType(string $NodeType) 设置节点类型：NORMAL普通节点、SUPER超级节点
 * @method string getNodeName() 获取节点名称
 * @method void setNodeName(string $NodeName) 设置节点名称
 * @method string getPodIP() 获取pod ip
 * @method void setPodIP(string $PodIP) 设置pod ip
 * @method string getPodName() 获取pod 名称
 * @method void setPodName(string $PodName) 设置pod 名称
 * @method string getClusterID() 获取集群ID
 * @method void setClusterID(string $ClusterID) 设置集群ID
 * @method string getNodeID() 获取节点id
 * @method void setNodeID(string $NodeID) 设置节点id
 * @method string getNodeUniqueID() 获取节点唯一id
 * @method void setNodeUniqueID(string $NodeUniqueID) 设置节点唯一id
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 */
class RiskDnsEventInfo extends AbstractModel
{
    /**
     * @var integer 事件ID
     */
    public $EventID;

    /**
     * @var string 事件类型，恶意域名请求：DOMAIN，恶意IP请求：IP
     */
    public $EventType;

    /**
     * @var string 恶意请求域名/IP
     */
    public $Address;

    /**
     * @var string 容器ID
     */
    public $ContainerID;

    /**
     * @var string 容器名称
     */
    public $ContainerName;

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
     * @var string 镜像ID
     */
    public $ImageID;

    /**
     * @var string 镜像名称
     */
    public $ImageName;

    /**
     * @var string 首次发现时间
     */
    public $FoundTime;

    /**
     * @var string 最近生成时间
     */
    public $LatestFoundTime;

    /**
     * @var string 事件状态
EVENT_UNDEAL： 待处理
EVENT_DEALED：已处理
EVENT_IGNORE： 已忽略
EVENT_ADD_WHITE：已加白
     */
    public $EventStatus;

    /**
     * @var integer 恶意请求次数
     */
    public $EventCount;

    /**
     * @var string 事件描述
     */
    public $Description;

    /**
     * @var string 解决方案
     */
    public $Solution;

    /**
     * @var string 恶意IP所属城市
     */
    public $City;

    /**
     * @var string 主机名称
     */
    public $HostName;

    /**
     * @var string 主机ID
     */
    public $HostID;

    /**
     * @var string 内网IP
     */
    public $HostIP;

    /**
     * @var string 外网IP
     */
    public $PublicIP;

    /**
     * @var string 节点类型：NORMAL普通节点、SUPER超级节点
     */
    public $NodeType;

    /**
     * @var string 节点名称
     */
    public $NodeName;

    /**
     * @var string pod ip
     */
    public $PodIP;

    /**
     * @var string pod 名称
     */
    public $PodName;

    /**
     * @var string 集群ID
     */
    public $ClusterID;

    /**
     * @var string 节点id
     */
    public $NodeID;

    /**
     * @var string 节点唯一id
     */
    public $NodeUniqueID;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @param integer $EventID 事件ID
     * @param string $EventType 事件类型，恶意域名请求：DOMAIN，恶意IP请求：IP
     * @param string $Address 恶意请求域名/IP
     * @param string $ContainerID 容器ID
     * @param string $ContainerName 容器名称
     * @param string $ContainerNetStatus 隔离状态
未隔离  	NORMAL
已隔离		ISOLATED
隔离中		ISOLATING
隔离失败	ISOLATE_FAILED
解除隔离中  RESTORING
解除隔离失败 RESTORE_FAILED
     * @param string $ContainerStatus 容器状态
正在运行: RUNNING
暂停: PAUSED
停止: STOPPED
已经创建: CREATED
已经销毁: DESTROYED
正在重启中: RESTARTING
迁移中: REMOVING
     * @param string $ContainerNetSubStatus 容器子状态
"AGENT_OFFLINE"       //Agent离线
"NODE_DESTROYED"      //节点已销毁
"CONTAINER_EXITED"    //容器已退出
"CONTAINER_DESTROYED" //容器已销毁
"SHARED_HOST"         // 容器与主机共享网络
"RESOURCE_LIMIT"      //隔离操作资源超限
"UNKNOW"              // 原因未知
     * @param string $ContainerIsolateOperationSrc 容器隔离操作来源
     * @param string $ImageID 镜像ID
     * @param string $ImageName 镜像名称
     * @param string $FoundTime 首次发现时间
     * @param string $LatestFoundTime 最近生成时间
     * @param string $EventStatus 事件状态
EVENT_UNDEAL： 待处理
EVENT_DEALED：已处理
EVENT_IGNORE： 已忽略
EVENT_ADD_WHITE：已加白
     * @param integer $EventCount 恶意请求次数
     * @param string $Description 事件描述
     * @param string $Solution 解决方案
     * @param string $City 恶意IP所属城市
     * @param string $HostName 主机名称
     * @param string $HostID 主机ID
     * @param string $HostIP 内网IP
     * @param string $PublicIP 外网IP
     * @param string $NodeType 节点类型：NORMAL普通节点、SUPER超级节点
     * @param string $NodeName 节点名称
     * @param string $PodIP pod ip
     * @param string $PodName pod 名称
     * @param string $ClusterID 集群ID
     * @param string $NodeID 节点id
     * @param string $NodeUniqueID 节点唯一id
     * @param string $ClusterName 集群名称
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
        if (array_key_exists("EventID",$param) and $param["EventID"] !== null) {
            $this->EventID = $param["EventID"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("ContainerID",$param) and $param["ContainerID"] !== null) {
            $this->ContainerID = $param["ContainerID"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("ContainerNetStatus",$param) and $param["ContainerNetStatus"] !== null) {
            $this->ContainerNetStatus = $param["ContainerNetStatus"];
        }

        if (array_key_exists("ContainerStatus",$param) and $param["ContainerStatus"] !== null) {
            $this->ContainerStatus = $param["ContainerStatus"];
        }

        if (array_key_exists("ContainerNetSubStatus",$param) and $param["ContainerNetSubStatus"] !== null) {
            $this->ContainerNetSubStatus = $param["ContainerNetSubStatus"];
        }

        if (array_key_exists("ContainerIsolateOperationSrc",$param) and $param["ContainerIsolateOperationSrc"] !== null) {
            $this->ContainerIsolateOperationSrc = $param["ContainerIsolateOperationSrc"];
        }

        if (array_key_exists("ImageID",$param) and $param["ImageID"] !== null) {
            $this->ImageID = $param["ImageID"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("FoundTime",$param) and $param["FoundTime"] !== null) {
            $this->FoundTime = $param["FoundTime"];
        }

        if (array_key_exists("LatestFoundTime",$param) and $param["LatestFoundTime"] !== null) {
            $this->LatestFoundTime = $param["LatestFoundTime"];
        }

        if (array_key_exists("EventStatus",$param) and $param["EventStatus"] !== null) {
            $this->EventStatus = $param["EventStatus"];
        }

        if (array_key_exists("EventCount",$param) and $param["EventCount"] !== null) {
            $this->EventCount = $param["EventCount"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Solution",$param) and $param["Solution"] !== null) {
            $this->Solution = $param["Solution"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostID",$param) and $param["HostID"] !== null) {
            $this->HostID = $param["HostID"];
        }

        if (array_key_exists("HostIP",$param) and $param["HostIP"] !== null) {
            $this->HostIP = $param["HostIP"];
        }

        if (array_key_exists("PublicIP",$param) and $param["PublicIP"] !== null) {
            $this->PublicIP = $param["PublicIP"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("PodIP",$param) and $param["PodIP"] !== null) {
            $this->PodIP = $param["PodIP"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("NodeID",$param) and $param["NodeID"] !== null) {
            $this->NodeID = $param["NodeID"];
        }

        if (array_key_exists("NodeUniqueID",$param) and $param["NodeUniqueID"] !== null) {
            $this->NodeUniqueID = $param["NodeUniqueID"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }
    }
}
