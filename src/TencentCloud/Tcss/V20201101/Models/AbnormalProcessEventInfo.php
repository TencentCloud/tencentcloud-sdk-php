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
 * 容器运行时安全异常进程信息
 *
 * @method string getProcessPath() 获取进程目录
 * @method void setProcessPath(string $ProcessPath) 设置进程目录
 * @method string getEventType() 获取事件类型，MALICE_PROCESS_START:恶意进程启动
 * @method void setEventType(string $EventType) 设置事件类型，MALICE_PROCESS_START:恶意进程启动
 * @method string getMatchRuleName() 获取命中规则名称，PROXY_TOOL：代理软件，TRANSFER_CONTROL：横向渗透，ATTACK_CMD：恶意命令，REVERSE_SHELL：反弹shell，FILELESS：无文件程序执行，RISK_CMD：高危命令，ABNORMAL_CHILD_PROC：敏感服务异常子进程启动，USER_DEFINED_RULE：用户自定义规则
 * @method void setMatchRuleName(string $MatchRuleName) 设置命中规则名称，PROXY_TOOL：代理软件，TRANSFER_CONTROL：横向渗透，ATTACK_CMD：恶意命令，REVERSE_SHELL：反弹shell，FILELESS：无文件程序执行，RISK_CMD：高危命令，ABNORMAL_CHILD_PROC：敏感服务异常子进程启动，USER_DEFINED_RULE：用户自定义规则
 * @method string getFoundTime() 获取生成时间
 * @method void setFoundTime(string $FoundTime) 设置生成时间
 * @method string getContainerName() 获取容器名
 * @method void setContainerName(string $ContainerName) 设置容器名
 * @method string getImageName() 获取镜像名
 * @method void setImageName(string $ImageName) 设置镜像名
 * @method string getBehavior() 获取动作执行结果，    BEHAVIOR_NONE: 无
    BEHAVIOR_ALERT: 告警
    BEHAVIOR_RELEASE：放行
    BEHAVIOR_HOLDUP_FAILED:拦截失败
    BEHAVIOR_HOLDUP_SUCCESSED：拦截失败
 * @method void setBehavior(string $Behavior) 设置动作执行结果，    BEHAVIOR_NONE: 无
    BEHAVIOR_ALERT: 告警
    BEHAVIOR_RELEASE：放行
    BEHAVIOR_HOLDUP_FAILED:拦截失败
    BEHAVIOR_HOLDUP_SUCCESSED：拦截失败
 * @method string getStatus() 获取状态，EVENT_UNDEAL:事件未处理
    EVENT_DEALED:事件已经处理
    EVENT_INGNORE：事件已经忽略
 * @method void setStatus(string $Status) 设置状态，EVENT_UNDEAL:事件未处理
    EVENT_DEALED:事件已经处理
    EVENT_INGNORE：事件已经忽略
 * @method string getId() 获取事件记录的唯一id
 * @method void setId(string $Id) 设置事件记录的唯一id
 * @method string getImageId() 获取镜像id，用于跳转
 * @method void setImageId(string $ImageId) 设置镜像id，用于跳转
 * @method string getContainerId() 获取容器id，用于跳转
 * @method void setContainerId(string $ContainerId) 设置容器id，用于跳转
 * @method string getSolution() 获取事件解决方案
 * @method void setSolution(string $Solution) 设置事件解决方案
 * @method string getDescription() 获取事件详细描述
 * @method void setDescription(string $Description) 设置事件详细描述
 * @method string getMatchRuleId() 获取命中策略id
 * @method void setMatchRuleId(string $MatchRuleId) 设置命中策略id
 * @method string getMatchAction() 获取命中规则行为：
RULE_MODE_RELEASE 放行
RULE_MODE_ALERT  告警
RULE_MODE_HOLDUP 拦截
 * @method void setMatchAction(string $MatchAction) 设置命中规则行为：
RULE_MODE_RELEASE 放行
RULE_MODE_ALERT  告警
RULE_MODE_HOLDUP 拦截
 * @method string getMatchProcessPath() 获取命中规则进程信息
 * @method void setMatchProcessPath(string $MatchProcessPath) 设置命中规则进程信息
 * @method boolean getRuleExist() 获取规则是否存在
 * @method void setRuleExist(boolean $RuleExist) 设置规则是否存在
 * @method integer getEventCount() 获取事件数量
 * @method void setEventCount(integer $EventCount) 设置事件数量
 * @method string getLatestFoundTime() 获取最近生成时间
 * @method void setLatestFoundTime(string $LatestFoundTime) 设置最近生成时间
 * @method string getRuleId() 获取规则组Id
 * @method void setRuleId(string $RuleId) 设置规则组Id
 * @method string getMatchGroupName() 获取命中策略名称：SYSTEM_DEFINED_RULE （系统策略）或  用户自定义的策略名字
 * @method void setMatchGroupName(string $MatchGroupName) 设置命中策略名称：SYSTEM_DEFINED_RULE （系统策略）或  用户自定义的策略名字
 * @method string getMatchRuleLevel() 获取命中规则等级，HIGH：高危，MIDDLE：中危，LOW：低危。
 * @method void setMatchRuleLevel(string $MatchRuleLevel) 设置命中规则等级，HIGH：高危，MIDDLE：中危，LOW：低危。
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
 * @method string getClusterID() 获取集群ID
 * @method void setClusterID(string $ClusterID) 设置集群ID
 * @method string getNodeType() 获取节点类型：NORMAL普通节点、SUPER超级节点
 * @method void setNodeType(string $NodeType) 设置节点类型：NORMAL普通节点、SUPER超级节点
 * @method string getPodName() 获取pod 名称
 * @method void setPodName(string $PodName) 设置pod 名称
 * @method string getPodIP() 获取pod ip
 * @method void setPodIP(string $PodIP) 设置pod ip
 * @method string getNodeUniqueID() 获取集群id
 * @method void setNodeUniqueID(string $NodeUniqueID) 设置集群id
 * @method string getPublicIP() 获取节点公网ip
 * @method void setPublicIP(string $PublicIP) 设置节点公网ip
 * @method string getNodeName() 获取节点名称
 * @method void setNodeName(string $NodeName) 设置节点名称
 * @method string getNodeID() 获取节点id
 * @method void setNodeID(string $NodeID) 设置节点id
 * @method string getHostID() 获取uuid
 * @method void setHostID(string $HostID) 设置uuid
 * @method string getHostIP() 获取节点内网ip
 * @method void setHostIP(string $HostIP) 设置节点内网ip
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 */
class AbnormalProcessEventInfo extends AbstractModel
{
    /**
     * @var string 进程目录
     */
    public $ProcessPath;

    /**
     * @var string 事件类型，MALICE_PROCESS_START:恶意进程启动
     */
    public $EventType;

    /**
     * @var string 命中规则名称，PROXY_TOOL：代理软件，TRANSFER_CONTROL：横向渗透，ATTACK_CMD：恶意命令，REVERSE_SHELL：反弹shell，FILELESS：无文件程序执行，RISK_CMD：高危命令，ABNORMAL_CHILD_PROC：敏感服务异常子进程启动，USER_DEFINED_RULE：用户自定义规则
     */
    public $MatchRuleName;

    /**
     * @var string 生成时间
     */
    public $FoundTime;

    /**
     * @var string 容器名
     */
    public $ContainerName;

    /**
     * @var string 镜像名
     */
    public $ImageName;

    /**
     * @var string 动作执行结果，    BEHAVIOR_NONE: 无
    BEHAVIOR_ALERT: 告警
    BEHAVIOR_RELEASE：放行
    BEHAVIOR_HOLDUP_FAILED:拦截失败
    BEHAVIOR_HOLDUP_SUCCESSED：拦截失败
     */
    public $Behavior;

    /**
     * @var string 状态，EVENT_UNDEAL:事件未处理
    EVENT_DEALED:事件已经处理
    EVENT_INGNORE：事件已经忽略
     */
    public $Status;

    /**
     * @var string 事件记录的唯一id
     */
    public $Id;

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
     * @var string 事件详细描述
     */
    public $Description;

    /**
     * @var string 命中策略id
     */
    public $MatchRuleId;

    /**
     * @var string 命中规则行为：
RULE_MODE_RELEASE 放行
RULE_MODE_ALERT  告警
RULE_MODE_HOLDUP 拦截
     */
    public $MatchAction;

    /**
     * @var string 命中规则进程信息
     */
    public $MatchProcessPath;

    /**
     * @var boolean 规则是否存在
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
     * @var string 规则组Id
     */
    public $RuleId;

    /**
     * @var string 命中策略名称：SYSTEM_DEFINED_RULE （系统策略）或  用户自定义的策略名字
     */
    public $MatchGroupName;

    /**
     * @var string 命中规则等级，HIGH：高危，MIDDLE：中危，LOW：低危。
     */
    public $MatchRuleLevel;

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
     * @var string 集群ID
     */
    public $ClusterID;

    /**
     * @var string 节点类型：NORMAL普通节点、SUPER超级节点
     */
    public $NodeType;

    /**
     * @var string pod 名称
     */
    public $PodName;

    /**
     * @var string pod ip
     */
    public $PodIP;

    /**
     * @var string 集群id
     */
    public $NodeUniqueID;

    /**
     * @var string 节点公网ip
     */
    public $PublicIP;

    /**
     * @var string 节点名称
     */
    public $NodeName;

    /**
     * @var string 节点id
     */
    public $NodeID;

    /**
     * @var string uuid
     */
    public $HostID;

    /**
     * @var string 节点内网ip
     */
    public $HostIP;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @param string $ProcessPath 进程目录
     * @param string $EventType 事件类型，MALICE_PROCESS_START:恶意进程启动
     * @param string $MatchRuleName 命中规则名称，PROXY_TOOL：代理软件，TRANSFER_CONTROL：横向渗透，ATTACK_CMD：恶意命令，REVERSE_SHELL：反弹shell，FILELESS：无文件程序执行，RISK_CMD：高危命令，ABNORMAL_CHILD_PROC：敏感服务异常子进程启动，USER_DEFINED_RULE：用户自定义规则
     * @param string $FoundTime 生成时间
     * @param string $ContainerName 容器名
     * @param string $ImageName 镜像名
     * @param string $Behavior 动作执行结果，    BEHAVIOR_NONE: 无
    BEHAVIOR_ALERT: 告警
    BEHAVIOR_RELEASE：放行
    BEHAVIOR_HOLDUP_FAILED:拦截失败
    BEHAVIOR_HOLDUP_SUCCESSED：拦截失败
     * @param string $Status 状态，EVENT_UNDEAL:事件未处理
    EVENT_DEALED:事件已经处理
    EVENT_INGNORE：事件已经忽略
     * @param string $Id 事件记录的唯一id
     * @param string $ImageId 镜像id，用于跳转
     * @param string $ContainerId 容器id，用于跳转
     * @param string $Solution 事件解决方案
     * @param string $Description 事件详细描述
     * @param string $MatchRuleId 命中策略id
     * @param string $MatchAction 命中规则行为：
RULE_MODE_RELEASE 放行
RULE_MODE_ALERT  告警
RULE_MODE_HOLDUP 拦截
     * @param string $MatchProcessPath 命中规则进程信息
     * @param boolean $RuleExist 规则是否存在
     * @param integer $EventCount 事件数量
     * @param string $LatestFoundTime 最近生成时间
     * @param string $RuleId 规则组Id
     * @param string $MatchGroupName 命中策略名称：SYSTEM_DEFINED_RULE （系统策略）或  用户自定义的策略名字
     * @param string $MatchRuleLevel 命中规则等级，HIGH：高危，MIDDLE：中危，LOW：低危。
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
     * @param string $ClusterID 集群ID
     * @param string $NodeType 节点类型：NORMAL普通节点、SUPER超级节点
     * @param string $PodName pod 名称
     * @param string $PodIP pod ip
     * @param string $NodeUniqueID 集群id
     * @param string $PublicIP 节点公网ip
     * @param string $NodeName 节点名称
     * @param string $NodeID 节点id
     * @param string $HostID uuid
     * @param string $HostIP 节点内网ip
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
        if (array_key_exists("ProcessPath",$param) and $param["ProcessPath"] !== null) {
            $this->ProcessPath = $param["ProcessPath"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("MatchRuleName",$param) and $param["MatchRuleName"] !== null) {
            $this->MatchRuleName = $param["MatchRuleName"];
        }

        if (array_key_exists("FoundTime",$param) and $param["FoundTime"] !== null) {
            $this->FoundTime = $param["FoundTime"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("Behavior",$param) and $param["Behavior"] !== null) {
            $this->Behavior = $param["Behavior"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
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

        if (array_key_exists("MatchRuleId",$param) and $param["MatchRuleId"] !== null) {
            $this->MatchRuleId = $param["MatchRuleId"];
        }

        if (array_key_exists("MatchAction",$param) and $param["MatchAction"] !== null) {
            $this->MatchAction = $param["MatchAction"];
        }

        if (array_key_exists("MatchProcessPath",$param) and $param["MatchProcessPath"] !== null) {
            $this->MatchProcessPath = $param["MatchProcessPath"];
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

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("MatchGroupName",$param) and $param["MatchGroupName"] !== null) {
            $this->MatchGroupName = $param["MatchGroupName"];
        }

        if (array_key_exists("MatchRuleLevel",$param) and $param["MatchRuleLevel"] !== null) {
            $this->MatchRuleLevel = $param["MatchRuleLevel"];
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

        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("PodIP",$param) and $param["PodIP"] !== null) {
            $this->PodIP = $param["PodIP"];
        }

        if (array_key_exists("NodeUniqueID",$param) and $param["NodeUniqueID"] !== null) {
            $this->NodeUniqueID = $param["NodeUniqueID"];
        }

        if (array_key_exists("PublicIP",$param) and $param["PublicIP"] !== null) {
            $this->PublicIP = $param["PublicIP"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("NodeID",$param) and $param["NodeID"] !== null) {
            $this->NodeID = $param["NodeID"];
        }

        if (array_key_exists("HostID",$param) and $param["HostID"] !== null) {
            $this->HostID = $param["HostID"];
        }

        if (array_key_exists("HostIP",$param) and $param["HostIP"] !== null) {
            $this->HostIP = $param["HostIP"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }
    }
}
