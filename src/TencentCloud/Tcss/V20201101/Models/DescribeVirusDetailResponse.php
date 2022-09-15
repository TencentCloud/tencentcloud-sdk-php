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
 * DescribeVirusDetail返回参数结构体
 *
 * @method string getImageId() 获取镜像ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageId(string $ImageId) 设置镜像ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImageName() 获取镜像名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageName(string $ImageName) 设置镜像名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSize() 获取木马文件大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSize(integer $Size) 设置木马文件大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFilePath() 获取木马文件路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFilePath(string $FilePath) 设置木马文件路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyTime() 获取最近生成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyTime(string $ModifyTime) 设置最近生成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVirusName() 获取病毒名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVirusName(string $VirusName) 设置病毒名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRiskLevel() 获取风险等级 RISK_CRITICAL, RISK_HIGH, RISK_MEDIUM, RISK_LOW, RISK_NOTICE。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskLevel(string $RiskLevel) 设置风险等级 RISK_CRITICAL, RISK_HIGH, RISK_MEDIUM, RISK_LOW, RISK_NOTICE。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContainerName() 获取容器名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainerName(string $ContainerName) 设置容器名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContainerId() 获取容器id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainerId(string $ContainerId) 设置容器id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHostName() 获取主机名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostName(string $HostName) 设置主机名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHostId() 获取主机id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostId(string $HostId) 设置主机id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProcessName() 获取进程名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessName(string $ProcessName) 设置进程名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProcessPath() 获取进程路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessPath(string $ProcessPath) 设置进程路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProcessMd5() 获取进程md5
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessMd5(string $ProcessMd5) 设置进程md5
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProcessId() 获取进程id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessId(integer $ProcessId) 设置进程id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProcessArgv() 获取进程参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessArgv(string $ProcessArgv) 设置进程参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProcessChan() 获取进程链
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessChan(string $ProcessChan) 设置进程链
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProcessAccountGroup() 获取进程组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessAccountGroup(string $ProcessAccountGroup) 设置进程组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProcessStartAccount() 获取进程启动用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessStartAccount(string $ProcessStartAccount) 设置进程启动用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProcessFileAuthority() 获取进程文件权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessFileAuthority(string $ProcessFileAuthority) 设置进程文件权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSourceType() 获取来源：0：一键扫描， 1：定时扫描 2：实时监控
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceType(integer $SourceType) 设置来源：0：一键扫描， 1：定时扫描 2：实时监控
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPodName() 获取集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPodName(string $PodName) 设置集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHarmDescribe() 获取事件描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHarmDescribe(string $HarmDescribe) 设置事件描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSuggestScheme() 获取建议方案
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuggestScheme(string $SuggestScheme) 设置建议方案
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMark() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMark(string $Mark) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileName() 获取风险文件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileName(string $FileName) 设置风险文件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileMd5() 获取文件MD5
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileMd5(string $FileMd5) 设置文件MD5
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventType() 获取事件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventType(string $EventType) 设置事件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取DEAL_NONE:文件待处理
DEAL_IGNORE:已经忽略
DEAL_ADD_WHITELIST:加白
DEAL_DEL:文件已经删除
DEAL_ISOLATE:已经隔离
DEAL_ISOLATING:隔离中
DEAL_ISOLATE_FAILED:隔离失败
DEAL_RECOVERING:恢复中
DEAL_RECOVER_FAILED: 恢复失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置DEAL_NONE:文件待处理
DEAL_IGNORE:已经忽略
DEAL_ADD_WHITELIST:加白
DEAL_DEL:文件已经删除
DEAL_ISOLATE:已经隔离
DEAL_ISOLATING:隔离中
DEAL_ISOLATE_FAILED:隔离失败
DEAL_RECOVERING:恢复中
DEAL_RECOVER_FAILED: 恢复失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubStatus() 获取失败子状态:
FILE_NOT_FOUND:文件不存在
FILE_ABNORMAL:文件异常
FILE_ABNORMAL_DEAL_RECOVER:恢复文件时，文件异常
BACKUP_FILE_NOT_FOUND:备份文件不存在
CONTAINER_NOT_FOUND_DEAL_ISOLATE:隔离时，容器不存在
CONTAINER_NOT_FOUND_DEAL_RECOVER:恢复时，容器不存在
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubStatus(string $SubStatus) 设置失败子状态:
FILE_NOT_FOUND:文件不存在
FILE_ABNORMAL:文件异常
FILE_ABNORMAL_DEAL_RECOVER:恢复文件时，文件异常
BACKUP_FILE_NOT_FOUND:备份文件不存在
CONTAINER_NOT_FOUND_DEAL_ISOLATE:隔离时，容器不存在
CONTAINER_NOT_FOUND_DEAL_RECOVER:恢复时，容器不存在
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHostIP() 获取内网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostIP(string $HostIP) 设置内网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClientIP() 获取外网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientIP(string $ClientIP) 设置外网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPProcessStartUser() 获取父进程启动用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPProcessStartUser(string $PProcessStartUser) 设置父进程启动用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPProcessUserGroup() 获取父进程用户组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPProcessUserGroup(string $PProcessUserGroup) 设置父进程用户组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPProcessPath() 获取父进程路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPProcessPath(string $PProcessPath) 设置父进程路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPProcessParam() 获取父进程命令行参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPProcessParam(string $PProcessParam) 设置父进程命令行参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAncestorProcessStartUser() 获取祖先进程启动用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAncestorProcessStartUser(string $AncestorProcessStartUser) 设置祖先进程启动用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAncestorProcessUserGroup() 获取祖先进程用户组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAncestorProcessUserGroup(string $AncestorProcessUserGroup) 设置祖先进程用户组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAncestorProcessPath() 获取祖先进程路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAncestorProcessPath(string $AncestorProcessPath) 设置祖先进程路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAncestorProcessParam() 获取祖先进程命令行参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAncestorProcessParam(string $AncestorProcessParam) 设置祖先进程命令行参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperationTime() 获取事件最后一次处理的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperationTime(string $OperationTime) 设置事件最后一次处理的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContainerNetStatus() 获取容器隔离状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainerNetStatus(string $ContainerNetStatus) 设置容器隔离状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContainerNetSubStatus() 获取容器隔离子状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainerNetSubStatus(string $ContainerNetSubStatus) 设置容器隔离子状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContainerIsolateOperationSrc() 获取容器隔离操作来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainerIsolateOperationSrc(string $ContainerIsolateOperationSrc) 设置容器隔离操作来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCheckPlatform() 获取检测平台
1: 云查杀引擎
2: tav
3: binaryAi
4: 异常行为
5: 威胁情报
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckPlatform(array $CheckPlatform) 设置检测平台
1: 云查杀引擎
2: tav
3: binaryAi
4: 异常行为
5: 威胁情报
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVirusDetailResponse extends AbstractModel
{
    /**
     * @var string 镜像ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageId;

    /**
     * @var string 镜像名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageName;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer 木马文件大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Size;

    /**
     * @var string 木马文件路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FilePath;

    /**
     * @var string 最近生成时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyTime;

    /**
     * @var string 病毒名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VirusName;

    /**
     * @var string 风险等级 RISK_CRITICAL, RISK_HIGH, RISK_MEDIUM, RISK_LOW, RISK_NOTICE。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskLevel;

    /**
     * @var string 容器名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContainerName;

    /**
     * @var string 容器id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContainerId;

    /**
     * @var string 主机名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostName;

    /**
     * @var string 主机id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostId;

    /**
     * @var string 进程名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessName;

    /**
     * @var string 进程路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessPath;

    /**
     * @var string 进程md5
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessMd5;

    /**
     * @var integer 进程id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessId;

    /**
     * @var string 进程参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessArgv;

    /**
     * @var string 进程链
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessChan;

    /**
     * @var string 进程组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessAccountGroup;

    /**
     * @var string 进程启动用户
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessStartAccount;

    /**
     * @var string 进程文件权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessFileAuthority;

    /**
     * @var integer 来源：0：一键扫描， 1：定时扫描 2：实时监控
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceType;

    /**
     * @var string 集群名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PodName;

    /**
     * @var array 标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 事件描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HarmDescribe;

    /**
     * @var string 建议方案
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuggestScheme;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mark;

    /**
     * @var string 风险文件名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileName;

    /**
     * @var string 文件MD5
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileMd5;

    /**
     * @var string 事件类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventType;

    /**
     * @var string DEAL_NONE:文件待处理
DEAL_IGNORE:已经忽略
DEAL_ADD_WHITELIST:加白
DEAL_DEL:文件已经删除
DEAL_ISOLATE:已经隔离
DEAL_ISOLATING:隔离中
DEAL_ISOLATE_FAILED:隔离失败
DEAL_RECOVERING:恢复中
DEAL_RECOVER_FAILED: 恢复失败
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 失败子状态:
FILE_NOT_FOUND:文件不存在
FILE_ABNORMAL:文件异常
FILE_ABNORMAL_DEAL_RECOVER:恢复文件时，文件异常
BACKUP_FILE_NOT_FOUND:备份文件不存在
CONTAINER_NOT_FOUND_DEAL_ISOLATE:隔离时，容器不存在
CONTAINER_NOT_FOUND_DEAL_RECOVER:恢复时，容器不存在
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubStatus;

    /**
     * @var string 内网ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostIP;

    /**
     * @var string 外网ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientIP;

    /**
     * @var string 父进程启动用户
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PProcessStartUser;

    /**
     * @var string 父进程用户组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PProcessUserGroup;

    /**
     * @var string 父进程路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PProcessPath;

    /**
     * @var string 父进程命令行参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PProcessParam;

    /**
     * @var string 祖先进程启动用户
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AncestorProcessStartUser;

    /**
     * @var string 祖先进程用户组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AncestorProcessUserGroup;

    /**
     * @var string 祖先进程路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AncestorProcessPath;

    /**
     * @var string 祖先进程命令行参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AncestorProcessParam;

    /**
     * @var string 事件最后一次处理的时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperationTime;

    /**
     * @var string 容器隔离状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContainerNetStatus;

    /**
     * @var string 容器隔离子状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContainerNetSubStatus;

    /**
     * @var string 容器隔离操作来源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContainerIsolateOperationSrc;

    /**
     * @var array 检测平台
1: 云查杀引擎
2: tav
3: binaryAi
4: 异常行为
5: 威胁情报
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckPlatform;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ImageId 镜像ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImageName 镜像名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Size 木马文件大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FilePath 木马文件路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyTime 最近生成时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VirusName 病毒名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RiskLevel 风险等级 RISK_CRITICAL, RISK_HIGH, RISK_MEDIUM, RISK_LOW, RISK_NOTICE。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContainerName 容器名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContainerId 容器id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HostName 主机名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HostId 主机id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProcessName 进程名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProcessPath 进程路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProcessMd5 进程md5
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProcessId 进程id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProcessArgv 进程参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProcessChan 进程链
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProcessAccountGroup 进程组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProcessStartAccount 进程启动用户
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProcessFileAuthority 进程文件权限
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SourceType 来源：0：一键扫描， 1：定时扫描 2：实时监控
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PodName 集群名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HarmDescribe 事件描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SuggestScheme 建议方案
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Mark 备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileName 风险文件名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileMd5 文件MD5
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventType 事件类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status DEAL_NONE:文件待处理
DEAL_IGNORE:已经忽略
DEAL_ADD_WHITELIST:加白
DEAL_DEL:文件已经删除
DEAL_ISOLATE:已经隔离
DEAL_ISOLATING:隔离中
DEAL_ISOLATE_FAILED:隔离失败
DEAL_RECOVERING:恢复中
DEAL_RECOVER_FAILED: 恢复失败
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubStatus 失败子状态:
FILE_NOT_FOUND:文件不存在
FILE_ABNORMAL:文件异常
FILE_ABNORMAL_DEAL_RECOVER:恢复文件时，文件异常
BACKUP_FILE_NOT_FOUND:备份文件不存在
CONTAINER_NOT_FOUND_DEAL_ISOLATE:隔离时，容器不存在
CONTAINER_NOT_FOUND_DEAL_RECOVER:恢复时，容器不存在
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HostIP 内网ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClientIP 外网ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PProcessStartUser 父进程启动用户
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PProcessUserGroup 父进程用户组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PProcessPath 父进程路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PProcessParam 父进程命令行参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AncestorProcessStartUser 祖先进程启动用户
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AncestorProcessUserGroup 祖先进程用户组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AncestorProcessPath 祖先进程路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AncestorProcessParam 祖先进程命令行参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OperationTime 事件最后一次处理的时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContainerNetStatus 容器隔离状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContainerNetSubStatus 容器隔离子状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContainerIsolateOperationSrc 容器隔离操作来源
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CheckPlatform 检测平台
1: 云查杀引擎
2: tav
3: binaryAi
4: 异常行为
5: 威胁情报
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("VirusName",$param) and $param["VirusName"] !== null) {
            $this->VirusName = $param["VirusName"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("ContainerId",$param) and $param["ContainerId"] !== null) {
            $this->ContainerId = $param["ContainerId"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostId",$param) and $param["HostId"] !== null) {
            $this->HostId = $param["HostId"];
        }

        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("ProcessPath",$param) and $param["ProcessPath"] !== null) {
            $this->ProcessPath = $param["ProcessPath"];
        }

        if (array_key_exists("ProcessMd5",$param) and $param["ProcessMd5"] !== null) {
            $this->ProcessMd5 = $param["ProcessMd5"];
        }

        if (array_key_exists("ProcessId",$param) and $param["ProcessId"] !== null) {
            $this->ProcessId = $param["ProcessId"];
        }

        if (array_key_exists("ProcessArgv",$param) and $param["ProcessArgv"] !== null) {
            $this->ProcessArgv = $param["ProcessArgv"];
        }

        if (array_key_exists("ProcessChan",$param) and $param["ProcessChan"] !== null) {
            $this->ProcessChan = $param["ProcessChan"];
        }

        if (array_key_exists("ProcessAccountGroup",$param) and $param["ProcessAccountGroup"] !== null) {
            $this->ProcessAccountGroup = $param["ProcessAccountGroup"];
        }

        if (array_key_exists("ProcessStartAccount",$param) and $param["ProcessStartAccount"] !== null) {
            $this->ProcessStartAccount = $param["ProcessStartAccount"];
        }

        if (array_key_exists("ProcessFileAuthority",$param) and $param["ProcessFileAuthority"] !== null) {
            $this->ProcessFileAuthority = $param["ProcessFileAuthority"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("HarmDescribe",$param) and $param["HarmDescribe"] !== null) {
            $this->HarmDescribe = $param["HarmDescribe"];
        }

        if (array_key_exists("SuggestScheme",$param) and $param["SuggestScheme"] !== null) {
            $this->SuggestScheme = $param["SuggestScheme"];
        }

        if (array_key_exists("Mark",$param) and $param["Mark"] !== null) {
            $this->Mark = $param["Mark"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileMd5",$param) and $param["FileMd5"] !== null) {
            $this->FileMd5 = $param["FileMd5"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SubStatus",$param) and $param["SubStatus"] !== null) {
            $this->SubStatus = $param["SubStatus"];
        }

        if (array_key_exists("HostIP",$param) and $param["HostIP"] !== null) {
            $this->HostIP = $param["HostIP"];
        }

        if (array_key_exists("ClientIP",$param) and $param["ClientIP"] !== null) {
            $this->ClientIP = $param["ClientIP"];
        }

        if (array_key_exists("PProcessStartUser",$param) and $param["PProcessStartUser"] !== null) {
            $this->PProcessStartUser = $param["PProcessStartUser"];
        }

        if (array_key_exists("PProcessUserGroup",$param) and $param["PProcessUserGroup"] !== null) {
            $this->PProcessUserGroup = $param["PProcessUserGroup"];
        }

        if (array_key_exists("PProcessPath",$param) and $param["PProcessPath"] !== null) {
            $this->PProcessPath = $param["PProcessPath"];
        }

        if (array_key_exists("PProcessParam",$param) and $param["PProcessParam"] !== null) {
            $this->PProcessParam = $param["PProcessParam"];
        }

        if (array_key_exists("AncestorProcessStartUser",$param) and $param["AncestorProcessStartUser"] !== null) {
            $this->AncestorProcessStartUser = $param["AncestorProcessStartUser"];
        }

        if (array_key_exists("AncestorProcessUserGroup",$param) and $param["AncestorProcessUserGroup"] !== null) {
            $this->AncestorProcessUserGroup = $param["AncestorProcessUserGroup"];
        }

        if (array_key_exists("AncestorProcessPath",$param) and $param["AncestorProcessPath"] !== null) {
            $this->AncestorProcessPath = $param["AncestorProcessPath"];
        }

        if (array_key_exists("AncestorProcessParam",$param) and $param["AncestorProcessParam"] !== null) {
            $this->AncestorProcessParam = $param["AncestorProcessParam"];
        }

        if (array_key_exists("OperationTime",$param) and $param["OperationTime"] !== null) {
            $this->OperationTime = $param["OperationTime"];
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

        if (array_key_exists("CheckPlatform",$param) and $param["CheckPlatform"] !== null) {
            $this->CheckPlatform = $param["CheckPlatform"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
