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
 * 容器运行时安全异常进程信息
 *
 * @method string getProcessPath() 获取<p>进程目录</p>
 * @method void setProcessPath(string $ProcessPath) 设置<p>进程目录</p>
 * @method string getEventType() 获取<p>事件类型，MALICE_PROCESS_START:恶意进程启动</p>
 * @method void setEventType(string $EventType) 设置<p>事件类型，MALICE_PROCESS_START:恶意进程启动</p>
 * @method string getMatchRuleName() 获取<p>命中规则名称，PROXY_TOOL：代理软件，TRANSFER_CONTROL：横向渗透，ATTACK_CMD：恶意命令，REVERSE_SHELL：反弹shell，FILELESS：无文件程序执行，RISK_CMD：高危命令，ABNORMAL_CHILD_PROC：敏感服务异常子进程启动，USER_DEFINED_RULE：用户自定义规则</p>
 * @method void setMatchRuleName(string $MatchRuleName) 设置<p>命中规则名称，PROXY_TOOL：代理软件，TRANSFER_CONTROL：横向渗透，ATTACK_CMD：恶意命令，REVERSE_SHELL：反弹shell，FILELESS：无文件程序执行，RISK_CMD：高危命令，ABNORMAL_CHILD_PROC：敏感服务异常子进程启动，USER_DEFINED_RULE：用户自定义规则</p>
 * @method string getFoundTime() 获取<p>生成时间</p>
 * @method void setFoundTime(string $FoundTime) 设置<p>生成时间</p>
 * @method string getContainerName() 获取<p>容器名</p>
 * @method void setContainerName(string $ContainerName) 设置<p>容器名</p>
 * @method string getImageName() 获取<p>镜像名</p>
 * @method void setImageName(string $ImageName) 设置<p>镜像名</p>
 * @method string getBehavior() 获取<p>动作执行结果，    BEHAVIOR_NONE: 无<br>    BEHAVIOR_ALERT: 告警<br>    BEHAVIOR_RELEASE：放行<br>    BEHAVIOR_HOLDUP_FAILED:拦截失败<br>    BEHAVIOR_HOLDUP_SUCCESSED：拦截失败</p>
 * @method void setBehavior(string $Behavior) 设置<p>动作执行结果，    BEHAVIOR_NONE: 无<br>    BEHAVIOR_ALERT: 告警<br>    BEHAVIOR_RELEASE：放行<br>    BEHAVIOR_HOLDUP_FAILED:拦截失败<br>    BEHAVIOR_HOLDUP_SUCCESSED：拦截失败</p>
 * @method string getStatus() 获取<p>状态，EVENT_UNDEAL:事件未处理<br>    EVENT_DEALED:事件已经处理<br>    EVENT_INGNORE：事件已经忽略</p>
 * @method void setStatus(string $Status) 设置<p>状态，EVENT_UNDEAL:事件未处理<br>    EVENT_DEALED:事件已经处理<br>    EVENT_INGNORE：事件已经忽略</p>
 * @method string getId() 获取<p>事件记录的唯一id</p>
 * @method void setId(string $Id) 设置<p>事件记录的唯一id</p>
 * @method string getImageId() 获取<p>镜像id，用于跳转</p>
 * @method void setImageId(string $ImageId) 设置<p>镜像id，用于跳转</p>
 * @method string getContainerId() 获取<p>容器id，用于跳转</p>
 * @method void setContainerId(string $ContainerId) 设置<p>容器id，用于跳转</p>
 * @method string getSolution() 获取<p>事件解决方案</p>
 * @method void setSolution(string $Solution) 设置<p>事件解决方案</p>
 * @method string getDescription() 获取<p>事件详细描述</p>
 * @method void setDescription(string $Description) 设置<p>事件详细描述</p>
 * @method string getMatchRuleId() 获取<p>命中策略id</p>
 * @method void setMatchRuleId(string $MatchRuleId) 设置<p>命中策略id</p>
 * @method string getMatchAction() 获取<p>命中规则行为：<br>RULE_MODE_RELEASE 放行<br>RULE_MODE_ALERT  告警<br>RULE_MODE_HOLDUP 拦截</p>
 * @method void setMatchAction(string $MatchAction) 设置<p>命中规则行为：<br>RULE_MODE_RELEASE 放行<br>RULE_MODE_ALERT  告警<br>RULE_MODE_HOLDUP 拦截</p>
 * @method string getMatchProcessPath() 获取<p>命中规则进程信息</p>
 * @method void setMatchProcessPath(string $MatchProcessPath) 设置<p>命中规则进程信息</p>
 * @method boolean getRuleExist() 获取<p>规则是否存在</p>
 * @method void setRuleExist(boolean $RuleExist) 设置<p>规则是否存在</p>
 * @method integer getEventCount() 获取<p>事件数量</p>
 * @method void setEventCount(integer $EventCount) 设置<p>事件数量</p>
 * @method string getLatestFoundTime() 获取<p>最近生成时间</p>
 * @method void setLatestFoundTime(string $LatestFoundTime) 设置<p>最近生成时间</p>
 * @method string getRuleId() 获取<p>规则组Id</p>
 * @method void setRuleId(string $RuleId) 设置<p>规则组Id</p>
 * @method string getMatchGroupName() 获取<p>命中策略名称：SYSTEM_DEFINED_RULE （系统策略）或  用户自定义的策略名字</p>
 * @method void setMatchGroupName(string $MatchGroupName) 设置<p>命中策略名称：SYSTEM_DEFINED_RULE （系统策略）或  用户自定义的策略名字</p>
 * @method string getMatchRuleLevel() 获取<p>命中规则等级，HIGH：高危，MIDDLE：中危，LOW：低危。</p>
 * @method void setMatchRuleLevel(string $MatchRuleLevel) 设置<p>命中规则等级，HIGH：高危，MIDDLE：中危，LOW：低危。</p>
 * @method string getContainerNetStatus() 获取<p>网络状态<br>未隔离      NORMAL<br>已隔离        ISOLATED<br>隔离中        ISOLATING<br>隔离失败    ISOLATE_FAILED<br>解除隔离中  RESTORING<br>解除隔离失败 RESTORE_FAILED</p>
 * @method void setContainerNetStatus(string $ContainerNetStatus) 设置<p>网络状态<br>未隔离      NORMAL<br>已隔离        ISOLATED<br>隔离中        ISOLATING<br>隔离失败    ISOLATE_FAILED<br>解除隔离中  RESTORING<br>解除隔离失败 RESTORE_FAILED</p>
 * @method string getContainerNetSubStatus() 获取<p>容器子状态<br>&quot;AGENT_OFFLINE&quot;       //Agent离线<br>&quot;NODE_DESTROYED&quot;      //节点已销毁<br>&quot;CONTAINER_EXITED&quot;    //容器已退出<br>&quot;CONTAINER_DESTROYED&quot; //容器已销毁<br>&quot;SHARED_HOST&quot;         // 容器与主机共享网络<br>&quot;RESOURCE_LIMIT&quot;      //隔离操作资源超限<br>&quot;UNKNOW&quot;              // 原因未知</p>
 * @method void setContainerNetSubStatus(string $ContainerNetSubStatus) 设置<p>容器子状态<br>&quot;AGENT_OFFLINE&quot;       //Agent离线<br>&quot;NODE_DESTROYED&quot;      //节点已销毁<br>&quot;CONTAINER_EXITED&quot;    //容器已退出<br>&quot;CONTAINER_DESTROYED&quot; //容器已销毁<br>&quot;SHARED_HOST&quot;         // 容器与主机共享网络<br>&quot;RESOURCE_LIMIT&quot;      //隔离操作资源超限<br>&quot;UNKNOW&quot;              // 原因未知</p>
 * @method string getContainerIsolateOperationSrc() 获取<p>容器隔离操作来源</p>
 * @method void setContainerIsolateOperationSrc(string $ContainerIsolateOperationSrc) 设置<p>容器隔离操作来源</p>
 * @method string getContainerStatus() 获取<p>容器状态<br>正在运行: RUNNING<br>暂停: PAUSED<br>停止: STOPPED<br>已经创建: CREATED<br>已经销毁: DESTROYED<br>正在重启中: RESTARTING<br>迁移中: REMOVING</p>
 * @method void setContainerStatus(string $ContainerStatus) 设置<p>容器状态<br>正在运行: RUNNING<br>暂停: PAUSED<br>停止: STOPPED<br>已经创建: CREATED<br>已经销毁: DESTROYED<br>正在重启中: RESTARTING<br>迁移中: REMOVING</p>
 * @method string getClusterID() 获取<p>集群ID</p>
 * @method void setClusterID(string $ClusterID) 设置<p>集群ID</p>
 * @method string getNodeType() 获取<p>节点类型：NORMAL普通节点、SUPER超级节点</p>
 * @method void setNodeType(string $NodeType) 设置<p>节点类型：NORMAL普通节点、SUPER超级节点</p>
 * @method string getPodName() 获取<p>pod 名称</p>
 * @method void setPodName(string $PodName) 设置<p>pod 名称</p>
 * @method string getPodIP() 获取<p>pod ip</p>
 * @method void setPodIP(string $PodIP) 设置<p>pod ip</p>
 * @method string getNodeUniqueID() 获取<p>集群id</p>
 * @method void setNodeUniqueID(string $NodeUniqueID) 设置<p>集群id</p>
 * @method string getPublicIP() 获取<p>节点公网ip</p>
 * @method void setPublicIP(string $PublicIP) 设置<p>节点公网ip</p>
 * @method string getNodeName() 获取<p>节点名称</p>
 * @method void setNodeName(string $NodeName) 设置<p>节点名称</p>
 * @method string getNodeID() 获取<p>节点id</p>
 * @method void setNodeID(string $NodeID) 设置<p>节点id</p>
 * @method string getHostID() 获取<p>uuid</p>
 * @method void setHostID(string $HostID) 设置<p>uuid</p>
 * @method string getHostIP() 获取<p>节点内网ip</p>
 * @method void setHostIP(string $HostIP) 设置<p>节点内网ip</p>
 * @method string getClusterName() 获取<p>集群名称</p>
 * @method void setClusterName(string $ClusterName) 设置<p>集群名称</p>
 * @method string getCmdLine() 获取<p>命令行参数</p>
 * @method void setCmdLine(string $CmdLine) 设置<p>命令行参数</p>
 */
class AbnormalProcessEventInfo extends AbstractModel
{
    /**
     * @var string <p>进程目录</p>
     */
    public $ProcessPath;

    /**
     * @var string <p>事件类型，MALICE_PROCESS_START:恶意进程启动</p>
     */
    public $EventType;

    /**
     * @var string <p>命中规则名称，PROXY_TOOL：代理软件，TRANSFER_CONTROL：横向渗透，ATTACK_CMD：恶意命令，REVERSE_SHELL：反弹shell，FILELESS：无文件程序执行，RISK_CMD：高危命令，ABNORMAL_CHILD_PROC：敏感服务异常子进程启动，USER_DEFINED_RULE：用户自定义规则</p>
     */
    public $MatchRuleName;

    /**
     * @var string <p>生成时间</p>
     */
    public $FoundTime;

    /**
     * @var string <p>容器名</p>
     */
    public $ContainerName;

    /**
     * @var string <p>镜像名</p>
     */
    public $ImageName;

    /**
     * @var string <p>动作执行结果，    BEHAVIOR_NONE: 无<br>    BEHAVIOR_ALERT: 告警<br>    BEHAVIOR_RELEASE：放行<br>    BEHAVIOR_HOLDUP_FAILED:拦截失败<br>    BEHAVIOR_HOLDUP_SUCCESSED：拦截失败</p>
     */
    public $Behavior;

    /**
     * @var string <p>状态，EVENT_UNDEAL:事件未处理<br>    EVENT_DEALED:事件已经处理<br>    EVENT_INGNORE：事件已经忽略</p>
     */
    public $Status;

    /**
     * @var string <p>事件记录的唯一id</p>
     */
    public $Id;

    /**
     * @var string <p>镜像id，用于跳转</p>
     */
    public $ImageId;

    /**
     * @var string <p>容器id，用于跳转</p>
     */
    public $ContainerId;

    /**
     * @var string <p>事件解决方案</p>
     */
    public $Solution;

    /**
     * @var string <p>事件详细描述</p>
     */
    public $Description;

    /**
     * @var string <p>命中策略id</p>
     */
    public $MatchRuleId;

    /**
     * @var string <p>命中规则行为：<br>RULE_MODE_RELEASE 放行<br>RULE_MODE_ALERT  告警<br>RULE_MODE_HOLDUP 拦截</p>
     */
    public $MatchAction;

    /**
     * @var string <p>命中规则进程信息</p>
     */
    public $MatchProcessPath;

    /**
     * @var boolean <p>规则是否存在</p>
     */
    public $RuleExist;

    /**
     * @var integer <p>事件数量</p>
     */
    public $EventCount;

    /**
     * @var string <p>最近生成时间</p>
     */
    public $LatestFoundTime;

    /**
     * @var string <p>规则组Id</p>
     */
    public $RuleId;

    /**
     * @var string <p>命中策略名称：SYSTEM_DEFINED_RULE （系统策略）或  用户自定义的策略名字</p>
     */
    public $MatchGroupName;

    /**
     * @var string <p>命中规则等级，HIGH：高危，MIDDLE：中危，LOW：低危。</p>
     */
    public $MatchRuleLevel;

    /**
     * @var string <p>网络状态<br>未隔离      NORMAL<br>已隔离        ISOLATED<br>隔离中        ISOLATING<br>隔离失败    ISOLATE_FAILED<br>解除隔离中  RESTORING<br>解除隔离失败 RESTORE_FAILED</p>
     */
    public $ContainerNetStatus;

    /**
     * @var string <p>容器子状态<br>&quot;AGENT_OFFLINE&quot;       //Agent离线<br>&quot;NODE_DESTROYED&quot;      //节点已销毁<br>&quot;CONTAINER_EXITED&quot;    //容器已退出<br>&quot;CONTAINER_DESTROYED&quot; //容器已销毁<br>&quot;SHARED_HOST&quot;         // 容器与主机共享网络<br>&quot;RESOURCE_LIMIT&quot;      //隔离操作资源超限<br>&quot;UNKNOW&quot;              // 原因未知</p>
     */
    public $ContainerNetSubStatus;

    /**
     * @var string <p>容器隔离操作来源</p>
     */
    public $ContainerIsolateOperationSrc;

    /**
     * @var string <p>容器状态<br>正在运行: RUNNING<br>暂停: PAUSED<br>停止: STOPPED<br>已经创建: CREATED<br>已经销毁: DESTROYED<br>正在重启中: RESTARTING<br>迁移中: REMOVING</p>
     */
    public $ContainerStatus;

    /**
     * @var string <p>集群ID</p>
     */
    public $ClusterID;

    /**
     * @var string <p>节点类型：NORMAL普通节点、SUPER超级节点</p>
     */
    public $NodeType;

    /**
     * @var string <p>pod 名称</p>
     */
    public $PodName;

    /**
     * @var string <p>pod ip</p>
     */
    public $PodIP;

    /**
     * @var string <p>集群id</p>
     */
    public $NodeUniqueID;

    /**
     * @var string <p>节点公网ip</p>
     */
    public $PublicIP;

    /**
     * @var string <p>节点名称</p>
     */
    public $NodeName;

    /**
     * @var string <p>节点id</p>
     */
    public $NodeID;

    /**
     * @var string <p>uuid</p>
     */
    public $HostID;

    /**
     * @var string <p>节点内网ip</p>
     */
    public $HostIP;

    /**
     * @var string <p>集群名称</p>
     */
    public $ClusterName;

    /**
     * @var string <p>命令行参数</p>
     */
    public $CmdLine;

    /**
     * @param string $ProcessPath <p>进程目录</p>
     * @param string $EventType <p>事件类型，MALICE_PROCESS_START:恶意进程启动</p>
     * @param string $MatchRuleName <p>命中规则名称，PROXY_TOOL：代理软件，TRANSFER_CONTROL：横向渗透，ATTACK_CMD：恶意命令，REVERSE_SHELL：反弹shell，FILELESS：无文件程序执行，RISK_CMD：高危命令，ABNORMAL_CHILD_PROC：敏感服务异常子进程启动，USER_DEFINED_RULE：用户自定义规则</p>
     * @param string $FoundTime <p>生成时间</p>
     * @param string $ContainerName <p>容器名</p>
     * @param string $ImageName <p>镜像名</p>
     * @param string $Behavior <p>动作执行结果，    BEHAVIOR_NONE: 无<br>    BEHAVIOR_ALERT: 告警<br>    BEHAVIOR_RELEASE：放行<br>    BEHAVIOR_HOLDUP_FAILED:拦截失败<br>    BEHAVIOR_HOLDUP_SUCCESSED：拦截失败</p>
     * @param string $Status <p>状态，EVENT_UNDEAL:事件未处理<br>    EVENT_DEALED:事件已经处理<br>    EVENT_INGNORE：事件已经忽略</p>
     * @param string $Id <p>事件记录的唯一id</p>
     * @param string $ImageId <p>镜像id，用于跳转</p>
     * @param string $ContainerId <p>容器id，用于跳转</p>
     * @param string $Solution <p>事件解决方案</p>
     * @param string $Description <p>事件详细描述</p>
     * @param string $MatchRuleId <p>命中策略id</p>
     * @param string $MatchAction <p>命中规则行为：<br>RULE_MODE_RELEASE 放行<br>RULE_MODE_ALERT  告警<br>RULE_MODE_HOLDUP 拦截</p>
     * @param string $MatchProcessPath <p>命中规则进程信息</p>
     * @param boolean $RuleExist <p>规则是否存在</p>
     * @param integer $EventCount <p>事件数量</p>
     * @param string $LatestFoundTime <p>最近生成时间</p>
     * @param string $RuleId <p>规则组Id</p>
     * @param string $MatchGroupName <p>命中策略名称：SYSTEM_DEFINED_RULE （系统策略）或  用户自定义的策略名字</p>
     * @param string $MatchRuleLevel <p>命中规则等级，HIGH：高危，MIDDLE：中危，LOW：低危。</p>
     * @param string $ContainerNetStatus <p>网络状态<br>未隔离      NORMAL<br>已隔离        ISOLATED<br>隔离中        ISOLATING<br>隔离失败    ISOLATE_FAILED<br>解除隔离中  RESTORING<br>解除隔离失败 RESTORE_FAILED</p>
     * @param string $ContainerNetSubStatus <p>容器子状态<br>&quot;AGENT_OFFLINE&quot;       //Agent离线<br>&quot;NODE_DESTROYED&quot;      //节点已销毁<br>&quot;CONTAINER_EXITED&quot;    //容器已退出<br>&quot;CONTAINER_DESTROYED&quot; //容器已销毁<br>&quot;SHARED_HOST&quot;         // 容器与主机共享网络<br>&quot;RESOURCE_LIMIT&quot;      //隔离操作资源超限<br>&quot;UNKNOW&quot;              // 原因未知</p>
     * @param string $ContainerIsolateOperationSrc <p>容器隔离操作来源</p>
     * @param string $ContainerStatus <p>容器状态<br>正在运行: RUNNING<br>暂停: PAUSED<br>停止: STOPPED<br>已经创建: CREATED<br>已经销毁: DESTROYED<br>正在重启中: RESTARTING<br>迁移中: REMOVING</p>
     * @param string $ClusterID <p>集群ID</p>
     * @param string $NodeType <p>节点类型：NORMAL普通节点、SUPER超级节点</p>
     * @param string $PodName <p>pod 名称</p>
     * @param string $PodIP <p>pod ip</p>
     * @param string $NodeUniqueID <p>集群id</p>
     * @param string $PublicIP <p>节点公网ip</p>
     * @param string $NodeName <p>节点名称</p>
     * @param string $NodeID <p>节点id</p>
     * @param string $HostID <p>uuid</p>
     * @param string $HostIP <p>节点内网ip</p>
     * @param string $ClusterName <p>集群名称</p>
     * @param string $CmdLine <p>命令行参数</p>
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

        if (array_key_exists("CmdLine",$param) and $param["CmdLine"] !== null) {
            $this->CmdLine = $param["CmdLine"];
        }
    }
}
