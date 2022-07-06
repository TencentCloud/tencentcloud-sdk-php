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
 * 容器运行时安全访问控制事件信息
 *
 * @method string getProcessName() 获取进程名称
 * @method void setProcessName(string $ProcessName) 设置进程名称
 * @method string getMatchRuleName() 获取命中规则名称
 * @method void setMatchRuleName(string $MatchRuleName) 设置命中规则名称
 * @method string getFoundTime() 获取生成时间
 * @method void setFoundTime(string $FoundTime) 设置生成时间
 * @method string getContainerName() 获取容器名
 * @method void setContainerName(string $ContainerName) 设置容器名
 * @method string getImageName() 获取镜像名
 * @method void setImageName(string $ImageName) 设置镜像名
 * @method string getBehavior() 获取动作执行结果，   BEHAVIOR_NONE: 无
    BEHAVIOR_ALERT: 告警
    BEHAVIOR_RELEASE：放行
    BEHAVIOR_HOLDUP_FAILED:拦截失败
    BEHAVIOR_HOLDUP_SUCCESSED：拦截失败
 * @method void setBehavior(string $Behavior) 设置动作执行结果，   BEHAVIOR_NONE: 无
    BEHAVIOR_ALERT: 告警
    BEHAVIOR_RELEASE：放行
    BEHAVIOR_HOLDUP_FAILED:拦截失败
    BEHAVIOR_HOLDUP_SUCCESSED：拦截失败
 * @method string getStatus() 获取状态0:未处理  “EVENT_UNDEAL”:事件未处理
    "EVENT_DEALED":事件已经处理
    "EVENT_INGNORE"：事件已经忽略
 * @method void setStatus(string $Status) 设置状态0:未处理  “EVENT_UNDEAL”:事件未处理
    "EVENT_DEALED":事件已经处理
    "EVENT_INGNORE"：事件已经忽略
 * @method string getId() 获取事件记录的唯一id
 * @method void setId(string $Id) 设置事件记录的唯一id
 * @method string getFileName() 获取文件名称
 * @method void setFileName(string $FileName) 设置文件名称
 * @method string getEventType() 获取事件类型， FILE_ABNORMAL_READ:文件异常读取
 * @method void setEventType(string $EventType) 设置事件类型， FILE_ABNORMAL_READ:文件异常读取
 * @method string getImageId() 获取镜像id, 用于跳转
 * @method void setImageId(string $ImageId) 设置镜像id, 用于跳转
 * @method string getContainerId() 获取容器id, 用于跳转
 * @method void setContainerId(string $ContainerId) 设置容器id, 用于跳转
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
 * @method string getMatchFilePath() 获取命中规则文件信息
 * @method void setMatchFilePath(string $MatchFilePath) 设置命中规则文件信息
 * @method string getFilePath() 获取文件路径，包含名字
 * @method void setFilePath(string $FilePath) 设置文件路径，包含名字
 * @method boolean getRuleExist() 获取规则是否存在
 * @method void setRuleExist(boolean $RuleExist) 设置规则是否存在
 * @method integer getEventCount() 获取事件数量
 * @method void setEventCount(integer $EventCount) 设置事件数量
 * @method string getLatestFoundTime() 获取最近生成时间
 * @method void setLatestFoundTime(string $LatestFoundTime) 设置最近生成时间
 * @method string getRuleId() 获取规则组id
 * @method void setRuleId(string $RuleId) 设置规则组id
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
class AccessControlEventInfo extends AbstractModel
{
    /**
     * @var string 进程名称
     */
    public $ProcessName;

    /**
     * @var string 命中规则名称
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
     * @var string 动作执行结果，   BEHAVIOR_NONE: 无
    BEHAVIOR_ALERT: 告警
    BEHAVIOR_RELEASE：放行
    BEHAVIOR_HOLDUP_FAILED:拦截失败
    BEHAVIOR_HOLDUP_SUCCESSED：拦截失败
     */
    public $Behavior;

    /**
     * @var string 状态0:未处理  “EVENT_UNDEAL”:事件未处理
    "EVENT_DEALED":事件已经处理
    "EVENT_INGNORE"：事件已经忽略
     */
    public $Status;

    /**
     * @var string 事件记录的唯一id
     */
    public $Id;

    /**
     * @var string 文件名称
     */
    public $FileName;

    /**
     * @var string 事件类型， FILE_ABNORMAL_READ:文件异常读取
     */
    public $EventType;

    /**
     * @var string 镜像id, 用于跳转
     */
    public $ImageId;

    /**
     * @var string 容器id, 用于跳转
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
     * @var string 命中规则文件信息
     */
    public $MatchFilePath;

    /**
     * @var string 文件路径，包含名字
     */
    public $FilePath;

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
     * @var string 规则组id
     */
    public $RuleId;

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
     * @param string $MatchRuleName 命中规则名称
     * @param string $FoundTime 生成时间
     * @param string $ContainerName 容器名
     * @param string $ImageName 镜像名
     * @param string $Behavior 动作执行结果，   BEHAVIOR_NONE: 无
    BEHAVIOR_ALERT: 告警
    BEHAVIOR_RELEASE：放行
    BEHAVIOR_HOLDUP_FAILED:拦截失败
    BEHAVIOR_HOLDUP_SUCCESSED：拦截失败
     * @param string $Status 状态0:未处理  “EVENT_UNDEAL”:事件未处理
    "EVENT_DEALED":事件已经处理
    "EVENT_INGNORE"：事件已经忽略
     * @param string $Id 事件记录的唯一id
     * @param string $FileName 文件名称
     * @param string $EventType 事件类型， FILE_ABNORMAL_READ:文件异常读取
     * @param string $ImageId 镜像id, 用于跳转
     * @param string $ContainerId 容器id, 用于跳转
     * @param string $Solution 事件解决方案
     * @param string $Description 事件详细描述
     * @param string $MatchRuleId 命中策略id
     * @param string $MatchAction 命中规则行为：
RULE_MODE_RELEASE 放行
RULE_MODE_ALERT  告警
RULE_MODE_HOLDUP 拦截
     * @param string $MatchProcessPath 命中规则进程信息
     * @param string $MatchFilePath 命中规则文件信息
     * @param string $FilePath 文件路径，包含名字
     * @param boolean $RuleExist 规则是否存在
     * @param integer $EventCount 事件数量
     * @param string $LatestFoundTime 最近生成时间
     * @param string $RuleId 规则组id
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

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
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

        if (array_key_exists("MatchFilePath",$param) and $param["MatchFilePath"] !== null) {
            $this->MatchFilePath = $param["MatchFilePath"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
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
