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
 * 容器安全运行时高危系统调用信息
 *
 * @method string getProcessName() 获取进程名称
 * @method void setProcessName(string $ProcessName) 设置进程名称
 * @method string getProcessPath() 获取进程路径
 * @method void setProcessPath(string $ProcessPath) 设置进程路径
 * @method string getImageId() 获取镜像id
 * @method void setImageId(string $ImageId) 设置镜像id
 * @method string getContainerId() 获取容器id
 * @method void setContainerId(string $ContainerId) 设置容器id
 * @method string getImageName() 获取镜像名
 * @method void setImageName(string $ImageName) 设置镜像名
 * @method string getContainerName() 获取容器名
 * @method void setContainerName(string $ContainerName) 设置容器名
 * @method string getFoundTime() 获取生成时间
 * @method void setFoundTime(string $FoundTime) 设置生成时间
 * @method string getSolution() 获取事件解决方案
 * @method void setSolution(string $Solution) 设置事件解决方案
 * @method string getDescription() 获取事件详细描述
 * @method void setDescription(string $Description) 设置事件详细描述
 * @method string getSyscallName() 获取系统调用名称
 * @method void setSyscallName(string $SyscallName) 设置系统调用名称
 * @method string getStatus() 获取状态，EVENT_UNDEAL:事件未处理
    EVENT_DEALED:事件已经处理
    EVENT_INGNORE：事件已经忽略
    EVENT_ADD_WHITE：时间已经加白
 * @method void setStatus(string $Status) 设置状态，EVENT_UNDEAL:事件未处理
    EVENT_DEALED:事件已经处理
    EVENT_INGNORE：事件已经忽略
    EVENT_ADD_WHITE：时间已经加白
 * @method string getEventId() 获取事件id
 * @method void setEventId(string $EventId) 设置事件id
 * @method string getNodeName() 获取节点名称
 * @method void setNodeName(string $NodeName) 设置节点名称
 * @method string getPodName() 获取pod(实例)的名字
 * @method void setPodName(string $PodName) 设置pod(实例)的名字
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method boolean getRuleExist() 获取系统监控名称是否存在
 * @method void setRuleExist(boolean $RuleExist) 设置系统监控名称是否存在
 * @method integer getEventCount() 获取事件数量
 * @method void setEventCount(integer $EventCount) 设置事件数量
 * @method string getLatestFoundTime() 获取最近生成时间
 * @method void setLatestFoundTime(string $LatestFoundTime) 设置最近生成时间
 * @method string getContainerNetStatus() 获取网络状态
未隔离  	NORMAL
已隔离		ISOLATED
隔离中		ISOLATING
隔离失败	ISOLATE_FAILED
解除隔离中  RESTORING
解除隔离失败 RESTORE_FAILED
 * @method void setContainerNetStatus(string $ContainerNetStatus) 设置网络状态
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
 */
class RiskSyscallEventInfo extends AbstractModel
{
    /**
     * @var string 进程名称
     */
    public $ProcessName;

    /**
     * @var string 进程路径
     */
    public $ProcessPath;

    /**
     * @var string 镜像id
     */
    public $ImageId;

    /**
     * @var string 容器id
     */
    public $ContainerId;

    /**
     * @var string 镜像名
     */
    public $ImageName;

    /**
     * @var string 容器名
     */
    public $ContainerName;

    /**
     * @var string 生成时间
     */
    public $FoundTime;

    /**
     * @var string 事件解决方案
     */
    public $Solution;

    /**
     * @var string 事件详细描述
     */
    public $Description;

    /**
     * @var string 系统调用名称
     */
    public $SyscallName;

    /**
     * @var string 状态，EVENT_UNDEAL:事件未处理
    EVENT_DEALED:事件已经处理
    EVENT_INGNORE：事件已经忽略
    EVENT_ADD_WHITE：时间已经加白
     */
    public $Status;

    /**
     * @var string 事件id
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
     * @var string 备注
     */
    public $Remark;

    /**
     * @var boolean 系统监控名称是否存在
     */
    public $RuleExist;

    /**
     * @var integer 事件数量
     */
    public $EventCount;

    /**
     * @var string 最近生成时间
     */
    public $LatestFoundTime;

    /**
     * @var string 网络状态
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
     * @param string $ProcessName 进程名称
     * @param string $ProcessPath 进程路径
     * @param string $ImageId 镜像id
     * @param string $ContainerId 容器id
     * @param string $ImageName 镜像名
     * @param string $ContainerName 容器名
     * @param string $FoundTime 生成时间
     * @param string $Solution 事件解决方案
     * @param string $Description 事件详细描述
     * @param string $SyscallName 系统调用名称
     * @param string $Status 状态，EVENT_UNDEAL:事件未处理
    EVENT_DEALED:事件已经处理
    EVENT_INGNORE：事件已经忽略
    EVENT_ADD_WHITE：时间已经加白
     * @param string $EventId 事件id
     * @param string $NodeName 节点名称
     * @param string $PodName pod(实例)的名字
     * @param string $Remark 备注
     * @param boolean $RuleExist 系统监控名称是否存在
     * @param integer $EventCount 事件数量
     * @param string $LatestFoundTime 最近生成时间
     * @param string $ContainerNetStatus 网络状态
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
        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("ProcessPath",$param) and $param["ProcessPath"] !== null) {
            $this->ProcessPath = $param["ProcessPath"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("ContainerId",$param) and $param["ContainerId"] !== null) {
            $this->ContainerId = $param["ContainerId"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("FoundTime",$param) and $param["FoundTime"] !== null) {
            $this->FoundTime = $param["FoundTime"];
        }

        if (array_key_exists("Solution",$param) and $param["Solution"] !== null) {
            $this->Solution = $param["Solution"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("SyscallName",$param) and $param["SyscallName"] !== null) {
            $this->SyscallName = $param["SyscallName"];
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

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("RuleExist",$param) and $param["RuleExist"] !== null) {
            $this->RuleExist = $param["RuleExist"];
        }

        if (array_key_exists("EventCount",$param) and $param["EventCount"] !== null) {
            $this->EventCount = $param["EventCount"];
        }

        if (array_key_exists("LatestFoundTime",$param) and $param["LatestFoundTime"] !== null) {
            $this->LatestFoundTime = $param["LatestFoundTime"];
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
