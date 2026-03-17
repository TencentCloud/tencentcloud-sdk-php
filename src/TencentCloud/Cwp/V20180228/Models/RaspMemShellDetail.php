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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * java内存马事件信息
 *
 * @method integer getId() 获取事件ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置事件ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQuuid() 获取服务器quuid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuuid(string $Quuid) 设置服务器quuid
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlias() 获取服务器名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlias(string $Alias) 设置服务器名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceID() 获取实例id
 * @method void setInstanceID(string $InstanceID) 设置实例id
 * @method string getPrivateIp() 获取内网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivateIp(string $PrivateIp) 设置内网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublicIp() 获取公网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicIp(string $PublicIp) 设置公网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getHostTags() 获取主机tag
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostTags(array $HostTags) 设置主机tag
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getType() 获取内存马类型  0:Filter型 1:Listener型 2:Servlet型 3:Interceptors型 4:Agent型 5:其他
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(integer $Type) 设置内存马类型  0:Filter型 1:Listener型 2:Servlet型 3:Interceptors型 4:Agent型 5:其他
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取处理状态  0 -- 待处理 1 -- 已加白 2 -- 已删除 3 - 已忽略  4 - 已手动处理
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置处理状态  0 -- 待处理 1 -- 已加白 2 -- 已删除 3 - 已忽略  4 - 已手动处理
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClassLoaderName() 获取所属的类加载器
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClassLoaderName(string $ClassLoaderName) 设置所属的类加载器
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSuperClassName() 获取父类名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuperClassName(string $SuperClassName) 设置父类名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInterfaces() 获取继承的接口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInterfaces(string $Interfaces) 设置继承的接口
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAnnotations() 获取注释
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnnotations(string $Annotations) 设置注释
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClassName() 获取类名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClassName(string $ClassName) 设置类名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMd5() 获取类文件md5
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMd5(string $Md5) 设置类文件md5
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPid() 获取进程pid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPid(integer $Pid) 设置进程pid
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExe() 获取java进程路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExe(string $Exe) 设置java进程路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getArgs() 获取java进程命令行参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setArgs(string $Args) 设置java进程命令行参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClassContent() 获取java内存马二进制代码(base64)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClassContent(string $ClassContent) 设置java内存马二进制代码(base64)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClassContentPretty() 获取java内存马反编译代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClassContentPretty(string $ClassContentPretty) 设置java内存马反编译代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventDescription() 获取事件描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventDescription(string $EventDescription) 设置事件描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSecurityAdvice() 获取安全建议
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecurityAdvice(string $SecurityAdvice) 设置安全建议
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取首次发现时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置首次发现时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRecentFoundTime() 获取最近检测时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecentFoundTime(string $RecentFoundTime) 设置最近检测时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeName() 获取节点名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeName(string $NodeName) 设置节点名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeId() 获取节点id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeId(string $NodeId) 设置节点id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContainerName() 获取容器名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainerName(string $ContainerName) 设置容器名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContainerId() 获取容器id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainerId(string $ContainerId) 设置容器id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContainerStatus() 获取容器运行状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainerStatus(string $ContainerStatus) 设置容器运行状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContainerNetStatus() 获取容器隔离状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainerNetStatus(string $ContainerNetStatus) 设置容器隔离状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImageId() 获取镜像ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageId(string $ImageId) 设置镜像ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImageName() 获取镜像名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageName(string $ImageName) 设置镜像名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPodName() 获取pod名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPodName(string $PodName) 设置pod名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPodIp() 获取podip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPodIp(string $PodIp) 设置podip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterName() 获取集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterName(string $ClusterName) 设置集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取集群id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置集群id
注意：此字段可能返回 null，表示取不到有效值。
 */
class RaspMemShellDetail extends AbstractModel
{
    /**
     * @var integer 事件ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 服务器quuid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Quuid;

    /**
     * @var string 服务器名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Alias;

    /**
     * @var string 实例id
     */
    public $InstanceID;

    /**
     * @var string 内网ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrivateIp;

    /**
     * @var string 公网ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicIp;

    /**
     * @var array 主机tag
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostTags;

    /**
     * @var integer 内存马类型  0:Filter型 1:Listener型 2:Servlet型 3:Interceptors型 4:Agent型 5:其他
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var integer 处理状态  0 -- 待处理 1 -- 已加白 2 -- 已删除 3 - 已忽略  4 - 已手动处理
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 所属的类加载器
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClassLoaderName;

    /**
     * @var string 父类名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuperClassName;

    /**
     * @var string 继承的接口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Interfaces;

    /**
     * @var string 注释
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Annotations;

    /**
     * @var string 类名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClassName;

    /**
     * @var string 类文件md5
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Md5;

    /**
     * @var integer 进程pid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Pid;

    /**
     * @var string java进程路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Exe;

    /**
     * @var string java进程命令行参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Args;

    /**
     * @var string java内存马二进制代码(base64)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClassContent;

    /**
     * @var string java内存马反编译代码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClassContentPretty;

    /**
     * @var string 事件描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventDescription;

    /**
     * @var string 安全建议
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecurityAdvice;

    /**
     * @var string 首次发现时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 最近检测时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecentFoundTime;

    /**
     * @var string 节点名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeName;

    /**
     * @var string 节点id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeId;

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
     * @var string 容器运行状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContainerStatus;

    /**
     * @var string 容器隔离状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContainerNetStatus;

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
     * @var string pod名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PodName;

    /**
     * @var string podip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PodIp;

    /**
     * @var string 集群名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterName;

    /**
     * @var string 集群id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @param integer $Id 事件ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Quuid 服务器quuid
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Alias 服务器名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceID 实例id
     * @param string $PrivateIp 内网ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublicIp 公网ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $HostTags 主机tag
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Type 内存马类型  0:Filter型 1:Listener型 2:Servlet型 3:Interceptors型 4:Agent型 5:其他
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 处理状态  0 -- 待处理 1 -- 已加白 2 -- 已删除 3 - 已忽略  4 - 已手动处理
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClassLoaderName 所属的类加载器
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SuperClassName 父类名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Interfaces 继承的接口
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Annotations 注释
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClassName 类名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Md5 类文件md5
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Pid 进程pid
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Exe java进程路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Args java进程命令行参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClassContent java内存马二进制代码(base64)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClassContentPretty java内存马反编译代码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventDescription 事件描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SecurityAdvice 安全建议
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 首次发现时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RecentFoundTime 最近检测时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeName 节点名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeId 节点id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContainerName 容器名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContainerId 容器id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContainerStatus 容器运行状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContainerNetStatus 容器隔离状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImageId 镜像ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImageName 镜像名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PodName pod名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PodIp podip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterName 集群名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId 集群id
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("HostTags",$param) and $param["HostTags"] !== null) {
            $this->HostTags = $param["HostTags"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ClassLoaderName",$param) and $param["ClassLoaderName"] !== null) {
            $this->ClassLoaderName = $param["ClassLoaderName"];
        }

        if (array_key_exists("SuperClassName",$param) and $param["SuperClassName"] !== null) {
            $this->SuperClassName = $param["SuperClassName"];
        }

        if (array_key_exists("Interfaces",$param) and $param["Interfaces"] !== null) {
            $this->Interfaces = $param["Interfaces"];
        }

        if (array_key_exists("Annotations",$param) and $param["Annotations"] !== null) {
            $this->Annotations = $param["Annotations"];
        }

        if (array_key_exists("ClassName",$param) and $param["ClassName"] !== null) {
            $this->ClassName = $param["ClassName"];
        }

        if (array_key_exists("Md5",$param) and $param["Md5"] !== null) {
            $this->Md5 = $param["Md5"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("Exe",$param) and $param["Exe"] !== null) {
            $this->Exe = $param["Exe"];
        }

        if (array_key_exists("Args",$param) and $param["Args"] !== null) {
            $this->Args = $param["Args"];
        }

        if (array_key_exists("ClassContent",$param) and $param["ClassContent"] !== null) {
            $this->ClassContent = $param["ClassContent"];
        }

        if (array_key_exists("ClassContentPretty",$param) and $param["ClassContentPretty"] !== null) {
            $this->ClassContentPretty = $param["ClassContentPretty"];
        }

        if (array_key_exists("EventDescription",$param) and $param["EventDescription"] !== null) {
            $this->EventDescription = $param["EventDescription"];
        }

        if (array_key_exists("SecurityAdvice",$param) and $param["SecurityAdvice"] !== null) {
            $this->SecurityAdvice = $param["SecurityAdvice"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RecentFoundTime",$param) and $param["RecentFoundTime"] !== null) {
            $this->RecentFoundTime = $param["RecentFoundTime"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("ContainerId",$param) and $param["ContainerId"] !== null) {
            $this->ContainerId = $param["ContainerId"];
        }

        if (array_key_exists("ContainerStatus",$param) and $param["ContainerStatus"] !== null) {
            $this->ContainerStatus = $param["ContainerStatus"];
        }

        if (array_key_exists("ContainerNetStatus",$param) and $param["ContainerNetStatus"] !== null) {
            $this->ContainerNetStatus = $param["ContainerNetStatus"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("PodIp",$param) and $param["PodIp"] !== null) {
            $this->PodIp = $param["PodIp"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }
    }
}
