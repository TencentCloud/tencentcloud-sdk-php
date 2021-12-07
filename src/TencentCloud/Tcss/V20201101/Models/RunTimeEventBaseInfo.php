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
 * 运行时安全事件基本信息
 *
 * @method string getEventId() 获取事件唯一ID
 * @method void setEventId(string $EventId) 设置事件唯一ID
 * @method string getFoundTime() 获取事件发现时间
 * @method void setFoundTime(string $FoundTime) 设置事件发现时间
 * @method string getContainerId() 获取容器id
 * @method void setContainerId(string $ContainerId) 设置容器id
 * @method string getContainerName() 获取容器名称
 * @method void setContainerName(string $ContainerName) 设置容器名称
 * @method string getImageId() 获取镜像id
 * @method void setImageId(string $ImageId) 设置镜像id
 * @method string getImageName() 获取镜像名称
 * @method void setImageName(string $ImageName) 设置镜像名称
 * @method string getNodeName() 获取节点名称
 * @method void setNodeName(string $NodeName) 设置节点名称
 * @method string getPodName() 获取Pod名称
 * @method void setPodName(string $PodName) 设置Pod名称
 * @method string getStatus() 获取状态， “EVENT_UNDEAL”:事件未处理
    "EVENT_DEALED":事件已经处理
    "EVENT_INGNORE"：事件已经忽略
 * @method void setStatus(string $Status) 设置状态， “EVENT_UNDEAL”:事件未处理
    "EVENT_DEALED":事件已经处理
    "EVENT_INGNORE"：事件已经忽略
 * @method string getEventName() 获取事件名称：
宿主机文件访问逃逸、
Syscall逃逸、
MountNamespace逃逸、
程序提权逃逸、
特权容器启动逃逸、
敏感路径挂载
恶意进程启动
文件篡改
 * @method void setEventName(string $EventName) 设置事件名称：
宿主机文件访问逃逸、
Syscall逃逸、
MountNamespace逃逸、
程序提权逃逸、
特权容器启动逃逸、
敏感路径挂载
恶意进程启动
文件篡改
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
 * @method integer getEventCount() 获取事件数量
 * @method void setEventCount(integer $EventCount) 设置事件数量
 * @method string getLatestFoundTime() 获取最近生成时间
 * @method void setLatestFoundTime(string $LatestFoundTime) 设置最近生成时间
 */
class RunTimeEventBaseInfo extends AbstractModel
{
    /**
     * @var string 事件唯一ID
     */
    public $EventId;

    /**
     * @var string 事件发现时间
     */
    public $FoundTime;

    /**
     * @var string 容器id
     */
    public $ContainerId;

    /**
     * @var string 容器名称
     */
    public $ContainerName;

    /**
     * @var string 镜像id
     */
    public $ImageId;

    /**
     * @var string 镜像名称
     */
    public $ImageName;

    /**
     * @var string 节点名称
     */
    public $NodeName;

    /**
     * @var string Pod名称
     */
    public $PodName;

    /**
     * @var string 状态， “EVENT_UNDEAL”:事件未处理
    "EVENT_DEALED":事件已经处理
    "EVENT_INGNORE"：事件已经忽略
     */
    public $Status;

    /**
     * @var string 事件名称：
宿主机文件访问逃逸、
Syscall逃逸、
MountNamespace逃逸、
程序提权逃逸、
特权容器启动逃逸、
敏感路径挂载
恶意进程启动
文件篡改
     */
    public $EventName;

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
     * @var integer 事件数量
     */
    public $EventCount;

    /**
     * @var string 最近生成时间
     */
    public $LatestFoundTime;

    /**
     * @param string $EventId 事件唯一ID
     * @param string $FoundTime 事件发现时间
     * @param string $ContainerId 容器id
     * @param string $ContainerName 容器名称
     * @param string $ImageId 镜像id
     * @param string $ImageName 镜像名称
     * @param string $NodeName 节点名称
     * @param string $PodName Pod名称
     * @param string $Status 状态， “EVENT_UNDEAL”:事件未处理
    "EVENT_DEALED":事件已经处理
    "EVENT_INGNORE"：事件已经忽略
     * @param string $EventName 事件名称：
宿主机文件访问逃逸、
Syscall逃逸、
MountNamespace逃逸、
程序提权逃逸、
特权容器启动逃逸、
敏感路径挂载
恶意进程启动
文件篡改
     * @param string $EventType 事件类型
   ESCAPE_HOST_ACESS_FILE:宿主机文件访问逃逸
   ESCAPE_MOUNT_NAMESPACE:MountNamespace逃逸
   ESCAPE_PRIVILEDGE:程序提权逃逸
   ESCAPE_PRIVILEDGE_CONTAINER_START:特权容器启动逃逸
   ESCAPE_MOUNT_SENSITIVE_PTAH:敏感路径挂载
   ESCAPE_SYSCALL:Syscall逃逸
     * @param integer $EventCount 事件数量
     * @param string $LatestFoundTime 最近生成时间
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
        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("FoundTime",$param) and $param["FoundTime"] !== null) {
            $this->FoundTime = $param["FoundTime"];
        }

        if (array_key_exists("ContainerId",$param) and $param["ContainerId"] !== null) {
            $this->ContainerId = $param["ContainerId"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("EventCount",$param) and $param["EventCount"] !== null) {
            $this->EventCount = $param["EventCount"];
        }

        if (array_key_exists("LatestFoundTime",$param) and $param["LatestFoundTime"] !== null) {
            $this->LatestFoundTime = $param["LatestFoundTime"];
        }
    }
}
