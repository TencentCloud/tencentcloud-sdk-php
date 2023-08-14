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
 * DescribeRiskDnsEventDetail返回参数结构体
 *
 * @method integer getEventID() 获取事件ID
 * @method void setEventID(integer $EventID) 设置事件ID
 * @method string getEventType() 获取事件类型，恶意域名请求：DOMAIN，恶意IP请求：IP
 * @method void setEventType(string $EventType) 设置事件类型，恶意域名请求：DOMAIN，恶意IP请求：IP
 * @method integer getEventCount() 获取恶意请求次数
 * @method void setEventCount(integer $EventCount) 设置恶意请求次数
 * @method string getFoundTime() 获取首次发现时间
 * @method void setFoundTime(string $FoundTime) 设置首次发现时间
 * @method string getLatestFoundTime() 获取最近生成时间
 * @method void setLatestFoundTime(string $LatestFoundTime) 设置最近生成时间
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
 * @method string getHostName() 获取主机名称
 * @method void setHostName(string $HostName) 设置主机名称
 * @method string getHostIP() 获取内网IP
 * @method void setHostIP(string $HostIP) 设置内网IP
 * @method string getPublicIP() 获取外网IP
 * @method void setPublicIP(string $PublicIP) 设置外网IP
 * @method string getPodName() 获取节点名称
 * @method void setPodName(string $PodName) 设置节点名称
 * @method string getDescription() 获取事件描述
 * @method void setDescription(string $Description) 设置事件描述
 * @method string getSolution() 获取解决方案
 * @method void setSolution(string $Solution) 设置解决方案
 * @method array getReference() 获取参考链接
 * @method void setReference(array $Reference) 设置参考链接
 * @method string getAddress() 获取恶意域名或IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddress(string $Address) 设置恶意域名或IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCity() 获取恶意IP所属城市
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCity(string $City) 设置恶意IP所属城市
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMatchRuleType() 获取命中规则类型
SYSTEM：系统规则
 USER：用户自定义
 * @method void setMatchRuleType(string $MatchRuleType) 设置命中规则类型
SYSTEM：系统规则
 USER：用户自定义
 * @method string getFeatureLabel() 获取标签特征
 * @method void setFeatureLabel(string $FeatureLabel) 设置标签特征
 * @method string getProcessAuthority() 获取进程权限
 * @method void setProcessAuthority(string $ProcessAuthority) 设置进程权限
 * @method string getProcessMd5() 获取进程md5
 * @method void setProcessMd5(string $ProcessMd5) 设置进程md5
 * @method string getProcessStartUser() 获取进程启动用户
 * @method void setProcessStartUser(string $ProcessStartUser) 设置进程启动用户
 * @method string getProcessUserGroup() 获取进程用户组
 * @method void setProcessUserGroup(string $ProcessUserGroup) 设置进程用户组
 * @method string getProcessPath() 获取进程路径
 * @method void setProcessPath(string $ProcessPath) 设置进程路径
 * @method string getProcessTree() 获取进程树
 * @method void setProcessTree(string $ProcessTree) 设置进程树
 * @method string getProcessParam() 获取进程命令行参数
 * @method void setProcessParam(string $ProcessParam) 设置进程命令行参数
 * @method string getParentProcessStartUser() 获取父进程启动用户
 * @method void setParentProcessStartUser(string $ParentProcessStartUser) 设置父进程启动用户
 * @method string getParentProcessUserGroup() 获取父进程用户组
 * @method void setParentProcessUserGroup(string $ParentProcessUserGroup) 设置父进程用户组
 * @method string getParentProcessPath() 获取父进程路径
 * @method void setParentProcessPath(string $ParentProcessPath) 设置父进程路径
 * @method string getParentProcessParam() 获取父进程命令行参数
 * @method void setParentProcessParam(string $ParentProcessParam) 设置父进程命令行参数
 * @method string getAncestorProcessStartUser() 获取祖先进程启动用户
 * @method void setAncestorProcessStartUser(string $AncestorProcessStartUser) 设置祖先进程启动用户
 * @method string getAncestorProcessUserGroup() 获取祖先进程用户组
 * @method void setAncestorProcessUserGroup(string $AncestorProcessUserGroup) 设置祖先进程用户组
 * @method string getAncestorProcessPath() 获取祖先进程路径
 * @method void setAncestorProcessPath(string $AncestorProcessPath) 设置祖先进程路径
 * @method string getAncestorProcessParam() 获取祖先进程命令行参数
 * @method void setAncestorProcessParam(string $AncestorProcessParam) 设置祖先进程命令行参数
 * @method string getHostID() 获取主机ID
 * @method void setHostID(string $HostID) 设置主机ID
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
 * @method string getOperationTime() 获取操作时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperationTime(string $OperationTime) 设置操作时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method string getNodeType() 获取节点类型
 * @method void setNodeType(string $NodeType) 设置节点类型
 * @method string getNodeName() 获取节点名称
 * @method void setNodeName(string $NodeName) 设置节点名称
 * @method string getNodeSubNetID() 获取节点子网ID
 * @method void setNodeSubNetID(string $NodeSubNetID) 设置节点子网ID
 * @method string getNodeSubNetName() 获取节点子网名称
 * @method void setNodeSubNetName(string $NodeSubNetName) 设置节点子网名称
 * @method string getNodeSubNetCIDR() 获取节点子网网段
 * @method void setNodeSubNetCIDR(string $NodeSubNetCIDR) 设置节点子网网段
 * @method string getClusterID() 获取集群ID
 * @method void setClusterID(string $ClusterID) 设置集群ID
 * @method string getPodIP() 获取podip
 * @method void setPodIP(string $PodIP) 设置podip
 * @method string getPodStatus() 获取pod状态
 * @method void setPodStatus(string $PodStatus) 设置pod状态
 * @method string getNodeUniqueID() 获取节点唯一id
 * @method void setNodeUniqueID(string $NodeUniqueID) 设置节点唯一id
 * @method string getNodeID() 获取节点ID名称
 * @method void setNodeID(string $NodeID) 设置节点ID名称
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRiskDnsEventDetailResponse extends AbstractModel
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
     * @var integer 恶意请求次数
     */
    public $EventCount;

    /**
     * @var string 首次发现时间
     */
    public $FoundTime;

    /**
     * @var string 最近生成时间
     */
    public $LatestFoundTime;

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
     * @var string 主机名称
     */
    public $HostName;

    /**
     * @var string 内网IP
     */
    public $HostIP;

    /**
     * @var string 外网IP
     */
    public $PublicIP;

    /**
     * @var string 节点名称
     */
    public $PodName;

    /**
     * @var string 事件描述
     */
    public $Description;

    /**
     * @var string 解决方案
     */
    public $Solution;

    /**
     * @var array 参考链接
     */
    public $Reference;

    /**
     * @var string 恶意域名或IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Address;

    /**
     * @var string 恶意IP所属城市
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $City;

    /**
     * @var string 命中规则类型
SYSTEM：系统规则
 USER：用户自定义
     */
    public $MatchRuleType;

    /**
     * @var string 标签特征
     */
    public $FeatureLabel;

    /**
     * @var string 进程权限
     */
    public $ProcessAuthority;

    /**
     * @var string 进程md5
     */
    public $ProcessMd5;

    /**
     * @var string 进程启动用户
     */
    public $ProcessStartUser;

    /**
     * @var string 进程用户组
     */
    public $ProcessUserGroup;

    /**
     * @var string 进程路径
     */
    public $ProcessPath;

    /**
     * @var string 进程树
     */
    public $ProcessTree;

    /**
     * @var string 进程命令行参数
     */
    public $ProcessParam;

    /**
     * @var string 父进程启动用户
     */
    public $ParentProcessStartUser;

    /**
     * @var string 父进程用户组
     */
    public $ParentProcessUserGroup;

    /**
     * @var string 父进程路径
     */
    public $ParentProcessPath;

    /**
     * @var string 父进程命令行参数
     */
    public $ParentProcessParam;

    /**
     * @var string 祖先进程启动用户
     */
    public $AncestorProcessStartUser;

    /**
     * @var string 祖先进程用户组
     */
    public $AncestorProcessUserGroup;

    /**
     * @var string 祖先进程路径
     */
    public $AncestorProcessPath;

    /**
     * @var string 祖先进程命令行参数
     */
    public $AncestorProcessParam;

    /**
     * @var string 主机ID
     */
    public $HostID;

    /**
     * @var string 事件状态
EVENT_UNDEAL： 待处理
EVENT_DEALED：已处理
EVENT_IGNORE： 已忽略
EVENT_ADD_WHITE：已加白
     */
    public $EventStatus;

    /**
     * @var string 操作时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperationTime;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var string 节点类型
     */
    public $NodeType;

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
     * @var string 集群ID
     */
    public $ClusterID;

    /**
     * @var string podip
     */
    public $PodIP;

    /**
     * @var string pod状态
     */
    public $PodStatus;

    /**
     * @var string 节点唯一id
     */
    public $NodeUniqueID;

    /**
     * @var string 节点ID名称
     */
    public $NodeID;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $EventID 事件ID
     * @param string $EventType 事件类型，恶意域名请求：DOMAIN，恶意IP请求：IP
     * @param integer $EventCount 恶意请求次数
     * @param string $FoundTime 首次发现时间
     * @param string $LatestFoundTime 最近生成时间
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
     * @param string $HostName 主机名称
     * @param string $HostIP 内网IP
     * @param string $PublicIP 外网IP
     * @param string $PodName 节点名称
     * @param string $Description 事件描述
     * @param string $Solution 解决方案
     * @param array $Reference 参考链接
     * @param string $Address 恶意域名或IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $City 恶意IP所属城市
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MatchRuleType 命中规则类型
SYSTEM：系统规则
 USER：用户自定义
     * @param string $FeatureLabel 标签特征
     * @param string $ProcessAuthority 进程权限
     * @param string $ProcessMd5 进程md5
     * @param string $ProcessStartUser 进程启动用户
     * @param string $ProcessUserGroup 进程用户组
     * @param string $ProcessPath 进程路径
     * @param string $ProcessTree 进程树
     * @param string $ProcessParam 进程命令行参数
     * @param string $ParentProcessStartUser 父进程启动用户
     * @param string $ParentProcessUserGroup 父进程用户组
     * @param string $ParentProcessPath 父进程路径
     * @param string $ParentProcessParam 父进程命令行参数
     * @param string $AncestorProcessStartUser 祖先进程启动用户
     * @param string $AncestorProcessUserGroup 祖先进程用户组
     * @param string $AncestorProcessPath 祖先进程路径
     * @param string $AncestorProcessParam 祖先进程命令行参数
     * @param string $HostID 主机ID
     * @param string $EventStatus 事件状态
EVENT_UNDEAL： 待处理
EVENT_DEALED：已处理
EVENT_IGNORE： 已忽略
EVENT_ADD_WHITE：已加白
     * @param string $OperationTime 操作时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 备注
     * @param string $NodeType 节点类型
     * @param string $NodeName 节点名称
     * @param string $NodeSubNetID 节点子网ID
     * @param string $NodeSubNetName 节点子网名称
     * @param string $NodeSubNetCIDR 节点子网网段
     * @param string $ClusterID 集群ID
     * @param string $PodIP podip
     * @param string $PodStatus pod状态
     * @param string $NodeUniqueID 节点唯一id
     * @param string $NodeID 节点ID名称
     * @param string $ClusterName 集群名称
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
        if (array_key_exists("EventID",$param) and $param["EventID"] !== null) {
            $this->EventID = $param["EventID"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("EventCount",$param) and $param["EventCount"] !== null) {
            $this->EventCount = $param["EventCount"];
        }

        if (array_key_exists("FoundTime",$param) and $param["FoundTime"] !== null) {
            $this->FoundTime = $param["FoundTime"];
        }

        if (array_key_exists("LatestFoundTime",$param) and $param["LatestFoundTime"] !== null) {
            $this->LatestFoundTime = $param["LatestFoundTime"];
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

        if (array_key_exists("Solution",$param) and $param["Solution"] !== null) {
            $this->Solution = $param["Solution"];
        }

        if (array_key_exists("Reference",$param) and $param["Reference"] !== null) {
            $this->Reference = $param["Reference"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("MatchRuleType",$param) and $param["MatchRuleType"] !== null) {
            $this->MatchRuleType = $param["MatchRuleType"];
        }

        if (array_key_exists("FeatureLabel",$param) and $param["FeatureLabel"] !== null) {
            $this->FeatureLabel = $param["FeatureLabel"];
        }

        if (array_key_exists("ProcessAuthority",$param) and $param["ProcessAuthority"] !== null) {
            $this->ProcessAuthority = $param["ProcessAuthority"];
        }

        if (array_key_exists("ProcessMd5",$param) and $param["ProcessMd5"] !== null) {
            $this->ProcessMd5 = $param["ProcessMd5"];
        }

        if (array_key_exists("ProcessStartUser",$param) and $param["ProcessStartUser"] !== null) {
            $this->ProcessStartUser = $param["ProcessStartUser"];
        }

        if (array_key_exists("ProcessUserGroup",$param) and $param["ProcessUserGroup"] !== null) {
            $this->ProcessUserGroup = $param["ProcessUserGroup"];
        }

        if (array_key_exists("ProcessPath",$param) and $param["ProcessPath"] !== null) {
            $this->ProcessPath = $param["ProcessPath"];
        }

        if (array_key_exists("ProcessTree",$param) and $param["ProcessTree"] !== null) {
            $this->ProcessTree = $param["ProcessTree"];
        }

        if (array_key_exists("ProcessParam",$param) and $param["ProcessParam"] !== null) {
            $this->ProcessParam = $param["ProcessParam"];
        }

        if (array_key_exists("ParentProcessStartUser",$param) and $param["ParentProcessStartUser"] !== null) {
            $this->ParentProcessStartUser = $param["ParentProcessStartUser"];
        }

        if (array_key_exists("ParentProcessUserGroup",$param) and $param["ParentProcessUserGroup"] !== null) {
            $this->ParentProcessUserGroup = $param["ParentProcessUserGroup"];
        }

        if (array_key_exists("ParentProcessPath",$param) and $param["ParentProcessPath"] !== null) {
            $this->ParentProcessPath = $param["ParentProcessPath"];
        }

        if (array_key_exists("ParentProcessParam",$param) and $param["ParentProcessParam"] !== null) {
            $this->ParentProcessParam = $param["ParentProcessParam"];
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

        if (array_key_exists("HostID",$param) and $param["HostID"] !== null) {
            $this->HostID = $param["HostID"];
        }

        if (array_key_exists("EventStatus",$param) and $param["EventStatus"] !== null) {
            $this->EventStatus = $param["EventStatus"];
        }

        if (array_key_exists("OperationTime",$param) and $param["OperationTime"] !== null) {
            $this->OperationTime = $param["OperationTime"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
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

        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("PodIP",$param) and $param["PodIP"] !== null) {
            $this->PodIP = $param["PodIP"];
        }

        if (array_key_exists("PodStatus",$param) and $param["PodStatus"] !== null) {
            $this->PodStatus = $param["PodStatus"];
        }

        if (array_key_exists("NodeUniqueID",$param) and $param["NodeUniqueID"] !== null) {
            $this->NodeUniqueID = $param["NodeUniqueID"];
        }

        if (array_key_exists("NodeID",$param) and $param["NodeID"] !== null) {
            $this->NodeID = $param["NodeID"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
