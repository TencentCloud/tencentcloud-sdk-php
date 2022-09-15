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
 * 容器逃逸事件列表
 *
 * @method string getEventType() 获取事件类型
   ESCAPE_HOST_ACESS_FILE:宿主机文件访问逃逸
   ESCAPE_MOUNT_NAMESPACE:MountNamespace逃逸
   ESCAPE_PRIVILEDGE:程序提权逃逸
   ESCAPE_PRIVILEDGE_CONTAINER_START:特权容器启动逃逸
   ESCAPE_MOUNT_SENSITIVE_PTAH:敏感路径挂载
   ESCAPE_SYSCALL:Syscall逃逸
 * @method void setEventType(string $EventType) 设置事件类型
   ESCAPE_HOST_ACESS_FILE:宿主机文件访问逃逸
   ESCAPE_MOUNT_NAMESPACE:MountNamespace逃逸
   ESCAPE_PRIVILEDGE:程序提权逃逸
   ESCAPE_PRIVILEDGE_CONTAINER_START:特权容器启动逃逸
   ESCAPE_MOUNT_SENSITIVE_PTAH:敏感路径挂载
   ESCAPE_SYSCALL:Syscall逃逸
 * @method string getContainerName() 获取容器名
 * @method void setContainerName(string $ContainerName) 设置容器名
 * @method string getImageName() 获取镜像名
 * @method void setImageName(string $ImageName) 设置镜像名
 * @method string getStatus() 获取状态，EVENT_UNDEAL:未处理，EVENT_DEALED:已处理，EVENT_INGNORE:忽略
 * @method void setStatus(string $Status) 设置状态，EVENT_UNDEAL:未处理，EVENT_DEALED:已处理，EVENT_INGNORE:忽略
 * @method string getEventId() 获取事件记录的唯一id
 * @method void setEventId(string $EventId) 设置事件记录的唯一id
 * @method string getNodeName() 获取节点名称
 * @method void setNodeName(string $NodeName) 设置节点名称
 * @method string getPodName() 获取pod(实例)的名字
 * @method void setPodName(string $PodName) 设置pod(实例)的名字
 * @method string getFoundTime() 获取生成时间
 * @method void setFoundTime(string $FoundTime) 设置生成时间
 * @method string getEventName() 获取事件名字，
宿主机文件访问逃逸、
Syscall逃逸、
MountNamespace逃逸、
程序提权逃逸、
特权容器启动逃逸、
敏感路径挂载
 * @method void setEventName(string $EventName) 设置事件名字，
宿主机文件访问逃逸、
Syscall逃逸、
MountNamespace逃逸、
程序提权逃逸、
特权容器启动逃逸、
敏感路径挂载
 * @method string getImageId() 获取镜像id，用于跳转
 * @method void setImageId(string $ImageId) 设置镜像id，用于跳转
 * @method string getContainerId() 获取容器id，用于跳转
 * @method void setContainerId(string $ContainerId) 设置容器id，用于跳转
 * @method string getSolution() 获取事件解决方案
 * @method void setSolution(string $Solution) 设置事件解决方案
 * @method string getDescription() 获取事件描述
 * @method void setDescription(string $Description) 设置事件描述
 * @method integer getEventCount() 获取事件数量
 * @method void setEventCount(integer $EventCount) 设置事件数量
 * @method string getLatestFoundTime() 获取最近生成时间
 * @method void setLatestFoundTime(string $LatestFoundTime) 设置最近生成时间
 * @method string getNodeIP() 获取节点IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeIP(string $NodeIP) 设置节点IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHostID() 获取主机IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostID(string $HostID) 设置主机IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContainerNetStatus() 获取网络状态
未隔离  	NORMAL
已隔离		ISOLATED
隔离中		ISOLATING
隔离失败	ISOLATE_FAILED
解除隔离中  RESTORING
解除隔离失败 RESTORE_FAILED
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainerNetStatus(string $ContainerNetStatus) 设置网络状态
未隔离  	NORMAL
已隔离		ISOLATED
隔离中		ISOLATING
隔离失败	ISOLATE_FAILED
解除隔离中  RESTORING
解除隔离失败 RESTORE_FAILED
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContainerNetSubStatus() 获取容器子状态
"AGENT_OFFLINE"       //Agent离线
"NODE_DESTROYED"      //节点已销毁
"CONTAINER_EXITED"    //容器已退出
"CONTAINER_DESTROYED" //容器已销毁
"SHARED_HOST"         // 容器与主机共享网络
"RESOURCE_LIMIT"      //隔离操作资源超限
"UNKNOW"              // 原因未知
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainerNetSubStatus(string $ContainerNetSubStatus) 设置容器子状态
"AGENT_OFFLINE"       //Agent离线
"NODE_DESTROYED"      //节点已销毁
"CONTAINER_EXITED"    //容器已退出
"CONTAINER_DESTROYED" //容器已销毁
"SHARED_HOST"         // 容器与主机共享网络
"RESOURCE_LIMIT"      //隔离操作资源超限
"UNKNOW"              // 原因未知
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContainerIsolateOperationSrc() 获取容器隔离操作来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainerIsolateOperationSrc(string $ContainerIsolateOperationSrc) 设置容器隔离操作来源
注意：此字段可能返回 null，表示取不到有效值。
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
 */
class EscapeEventInfo extends AbstractModel
{
    /**
     * @var string 事件类型
   ESCAPE_HOST_ACESS_FILE:宿主机文件访问逃逸
   ESCAPE_MOUNT_NAMESPACE:MountNamespace逃逸
   ESCAPE_PRIVILEDGE:程序提权逃逸
   ESCAPE_PRIVILEDGE_CONTAINER_START:特权容器启动逃逸
   ESCAPE_MOUNT_SENSITIVE_PTAH:敏感路径挂载
   ESCAPE_SYSCALL:Syscall逃逸
     */
    public $EventType;

    /**
     * @var string 容器名
     */
    public $ContainerName;

    /**
     * @var string 镜像名
     */
    public $ImageName;

    /**
     * @var string 状态，EVENT_UNDEAL:未处理，EVENT_DEALED:已处理，EVENT_INGNORE:忽略
     */
    public $Status;

    /**
     * @var string 事件记录的唯一id
     */
    public $EventId;

    /**
     * @var string 节点名称
     */
    public $NodeName;

    /**
     * @var string pod(实例)的名字
     */
    public $PodName;

    /**
     * @var string 生成时间
     */
    public $FoundTime;

    /**
     * @var string 事件名字，
宿主机文件访问逃逸、
Syscall逃逸、
MountNamespace逃逸、
程序提权逃逸、
特权容器启动逃逸、
敏感路径挂载
     */
    public $EventName;

    /**
     * @var string 镜像id，用于跳转
     */
    public $ImageId;

    /**
     * @var string 容器id，用于跳转
     */
    public $ContainerId;

    /**
     * @var string 事件解决方案
     */
    public $Solution;

    /**
     * @var string 事件描述
     */
    public $Description;

    /**
     * @var integer 事件数量
     */
    public $EventCount;

    /**
     * @var string 最近生成时间
     */
    public $LatestFoundTime;

    /**
     * @var string 节点IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeIP;

    /**
     * @var string 主机IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostID;

    /**
     * @var string 网络状态
未隔离  	NORMAL
已隔离		ISOLATED
隔离中		ISOLATING
隔离失败	ISOLATE_FAILED
解除隔离中  RESTORING
解除隔离失败 RESTORE_FAILED
注意：此字段可能返回 null，表示取不到有效值。
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
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContainerNetSubStatus;

    /**
     * @var string 容器隔离操作来源
注意：此字段可能返回 null，表示取不到有效值。
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
     * @param string $EventType 事件类型
   ESCAPE_HOST_ACESS_FILE:宿主机文件访问逃逸
   ESCAPE_MOUNT_NAMESPACE:MountNamespace逃逸
   ESCAPE_PRIVILEDGE:程序提权逃逸
   ESCAPE_PRIVILEDGE_CONTAINER_START:特权容器启动逃逸
   ESCAPE_MOUNT_SENSITIVE_PTAH:敏感路径挂载
   ESCAPE_SYSCALL:Syscall逃逸
     * @param string $ContainerName 容器名
     * @param string $ImageName 镜像名
     * @param string $Status 状态，EVENT_UNDEAL:未处理，EVENT_DEALED:已处理，EVENT_INGNORE:忽略
     * @param string $EventId 事件记录的唯一id
     * @param string $NodeName 节点名称
     * @param string $PodName pod(实例)的名字
     * @param string $FoundTime 生成时间
     * @param string $EventName 事件名字，
宿主机文件访问逃逸、
Syscall逃逸、
MountNamespace逃逸、
程序提权逃逸、
特权容器启动逃逸、
敏感路径挂载
     * @param string $ImageId 镜像id，用于跳转
     * @param string $ContainerId 容器id，用于跳转
     * @param string $Solution 事件解决方案
     * @param string $Description 事件描述
     * @param integer $EventCount 事件数量
     * @param string $LatestFoundTime 最近生成时间
     * @param string $NodeIP 节点IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HostID 主机IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContainerNetStatus 网络状态
未隔离  	NORMAL
已隔离		ISOLATED
隔离中		ISOLATING
隔离失败	ISOLATE_FAILED
解除隔离中  RESTORING
解除隔离失败 RESTORE_FAILED
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContainerNetSubStatus 容器子状态
"AGENT_OFFLINE"       //Agent离线
"NODE_DESTROYED"      //节点已销毁
"CONTAINER_EXITED"    //容器已退出
"CONTAINER_DESTROYED" //容器已销毁
"SHARED_HOST"         // 容器与主机共享网络
"RESOURCE_LIMIT"      //隔离操作资源超限
"UNKNOW"              // 原因未知
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContainerIsolateOperationSrc 容器隔离操作来源
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContainerStatus 容器状态
正在运行: RUNNING
暂停: PAUSED
停止: STOPPED
已经创建: CREATED
已经销毁: DESTROYED
正在重启中: RESTARTING
迁移中: REMOVING
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
        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("FoundTime",$param) and $param["FoundTime"] !== null) {
            $this->FoundTime = $param["FoundTime"];
        }

        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("ContainerId",$param) and $param["ContainerId"] !== null) {
            $this->ContainerId = $param["ContainerId"];
        }

        if (array_key_exists("Solution",$param) and $param["Solution"] !== null) {
            $this->Solution = $param["Solution"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("EventCount",$param) and $param["EventCount"] !== null) {
            $this->EventCount = $param["EventCount"];
        }

        if (array_key_exists("LatestFoundTime",$param) and $param["LatestFoundTime"] !== null) {
            $this->LatestFoundTime = $param["LatestFoundTime"];
        }

        if (array_key_exists("NodeIP",$param) and $param["NodeIP"] !== null) {
            $this->NodeIP = $param["NodeIP"];
        }

        if (array_key_exists("HostID",$param) and $param["HostID"] !== null) {
            $this->HostID = $param["HostID"];
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
    }
}
