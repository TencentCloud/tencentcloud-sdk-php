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
 * @method void setId(integer $Id) 设置事件ID
 * @method string getQuuid() 获取服务器quuid
 * @method void setQuuid(string $Quuid) 设置服务器quuid
 * @method string getAlias() 获取服务器名称
 * @method void setAlias(string $Alias) 设置服务器名称
 * @method string getHostIp() 获取服务器IP
 * @method void setHostIp(string $HostIp) 设置服务器IP
 * @method integer getType() 获取内存马类型  0:Filter型 1:Listener型 2:Servlet型 3:Interceptors型 4:Agent型 5:其他
 * @method void setType(integer $Type) 设置内存马类型  0:Filter型 1:Listener型 2:Servlet型 3:Interceptors型 4:Agent型 5:其他
 * @method string getDescription() 获取说明
 * @method void setDescription(string $Description) 设置说明
 * @method string getCreateTime() 获取首次发现时间
 * @method void setCreateTime(string $CreateTime) 设置首次发现时间
 * @method string getRecentFoundTime() 获取最近检测时间
 * @method void setRecentFoundTime(string $RecentFoundTime) 设置最近检测时间
 * @method integer getStatus() 获取处理状态  0 -- 待处理 1 -- 已加白 2 -- 已删除 3 - 已忽略  4 - 已手动处理
 * @method void setStatus(integer $Status) 设置处理状态  0 -- 待处理 1 -- 已加白 2 -- 已删除 3 - 已忽略  4 - 已手动处理
 * @method string getMd5() 获取类文件md5
 * @method void setMd5(string $Md5) 设置类文件md5
 * @method string getClassName() 获取类名
 * @method void setClassName(string $ClassName) 设置类名
 * @method string getSuperClassName() 获取父类名
 * @method void setSuperClassName(string $SuperClassName) 设置父类名
 * @method string getInterfaces() 获取继承的接口
 * @method void setInterfaces(string $Interfaces) 设置继承的接口
 * @method string getAnnotations() 获取注释
 * @method void setAnnotations(string $Annotations) 设置注释
 * @method string getLoaderClassName() 获取所属的类加载器
 * @method void setLoaderClassName(string $LoaderClassName) 设置所属的类加载器
 * @method integer getPid() 获取进程pid
 * @method void setPid(integer $Pid) 设置进程pid
 * @method string getExe() 获取java进程路径
 * @method void setExe(string $Exe) 设置java进程路径
 * @method string getArgs() 获取java进程命令行参数
 * @method void setArgs(string $Args) 设置java进程命令行参数
 * @method string getNodeName() 获取节点名称
 * @method void setNodeName(string $NodeName) 设置节点名称
 * @method string getNodeId() 获取节点id
 * @method void setNodeId(string $NodeId) 设置节点id
 * @method string getContainerName() 获取容器名称
 * @method void setContainerName(string $ContainerName) 设置容器名称
 * @method string getContainerId() 获取容器id
 * @method void setContainerId(string $ContainerId) 设置容器id
 * @method string getContainerStatus() 获取容器运行状态
 * @method void setContainerStatus(string $ContainerStatus) 设置容器运行状态
 * @method string getContainerNetStatus() 获取容器隔离状态
 * @method void setContainerNetStatus(string $ContainerNetStatus) 设置容器隔离状态
 * @method string getImageId() 获取镜像ID
 * @method void setImageId(string $ImageId) 设置镜像ID
 * @method string getImageName() 获取镜像名称
 * @method void setImageName(string $ImageName) 设置镜像名称
 * @method string getPodName() 获取pod名称
 * @method void setPodName(string $PodName) 设置pod名称
 * @method string getPodIp() 获取podip
 * @method void setPodIp(string $PodIp) 设置podip
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getClusterId() 获取集群id
 * @method void setClusterId(string $ClusterId) 设置集群id
 * @method string getInstanceID() 获取和节点id一样，前端可以不用这个
 * @method void setInstanceID(string $InstanceID) 设置和节点id一样，前端可以不用这个
 * @method string getHostInnerIP() 获取服务器内网ip
 * @method void setHostInnerIP(string $HostInnerIP) 设置服务器内网ip
 * @method string getHostPublicIP() 获取服务器外网ip
 * @method void setHostPublicIP(string $HostPublicIP) 设置服务器外网ip
 * @method string getNodeType() 获取普通节点：NORMAL
超级节点：SUPER
 * @method void setNodeType(string $NodeType) 设置普通节点：NORMAL
超级节点：SUPER
 * @method string getNodeUniqueID() 获取超级节点唯一id
 * @method void setNodeUniqueID(string $NodeUniqueID) 设置超级节点唯一id
 */
class RaspMemShellEvent extends AbstractModel
{
    /**
     * @var integer 事件ID
     */
    public $Id;

    /**
     * @var string 服务器quuid
     */
    public $Quuid;

    /**
     * @var string 服务器名称
     */
    public $Alias;

    /**
     * @var string 服务器IP
     */
    public $HostIp;

    /**
     * @var integer 内存马类型  0:Filter型 1:Listener型 2:Servlet型 3:Interceptors型 4:Agent型 5:其他
     */
    public $Type;

    /**
     * @var string 说明
     */
    public $Description;

    /**
     * @var string 首次发现时间
     */
    public $CreateTime;

    /**
     * @var string 最近检测时间
     */
    public $RecentFoundTime;

    /**
     * @var integer 处理状态  0 -- 待处理 1 -- 已加白 2 -- 已删除 3 - 已忽略  4 - 已手动处理
     */
    public $Status;

    /**
     * @var string 类文件md5
     */
    public $Md5;

    /**
     * @var string 类名
     */
    public $ClassName;

    /**
     * @var string 父类名
     */
    public $SuperClassName;

    /**
     * @var string 继承的接口
     */
    public $Interfaces;

    /**
     * @var string 注释
     */
    public $Annotations;

    /**
     * @var string 所属的类加载器
     */
    public $LoaderClassName;

    /**
     * @var integer 进程pid
     */
    public $Pid;

    /**
     * @var string java进程路径
     */
    public $Exe;

    /**
     * @var string java进程命令行参数
     */
    public $Args;

    /**
     * @var string 节点名称
     */
    public $NodeName;

    /**
     * @var string 节点id
     */
    public $NodeId;

    /**
     * @var string 容器名称
     */
    public $ContainerName;

    /**
     * @var string 容器id
     */
    public $ContainerId;

    /**
     * @var string 容器运行状态
     */
    public $ContainerStatus;

    /**
     * @var string 容器隔离状态
     */
    public $ContainerNetStatus;

    /**
     * @var string 镜像ID
     */
    public $ImageId;

    /**
     * @var string 镜像名称
     */
    public $ImageName;

    /**
     * @var string pod名称
     */
    public $PodName;

    /**
     * @var string podip
     */
    public $PodIp;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string 集群id
     */
    public $ClusterId;

    /**
     * @var string 和节点id一样，前端可以不用这个
     */
    public $InstanceID;

    /**
     * @var string 服务器内网ip
     */
    public $HostInnerIP;

    /**
     * @var string 服务器外网ip
     */
    public $HostPublicIP;

    /**
     * @var string 普通节点：NORMAL
超级节点：SUPER
     */
    public $NodeType;

    /**
     * @var string 超级节点唯一id
     */
    public $NodeUniqueID;

    /**
     * @param integer $Id 事件ID
     * @param string $Quuid 服务器quuid
     * @param string $Alias 服务器名称
     * @param string $HostIp 服务器IP
     * @param integer $Type 内存马类型  0:Filter型 1:Listener型 2:Servlet型 3:Interceptors型 4:Agent型 5:其他
     * @param string $Description 说明
     * @param string $CreateTime 首次发现时间
     * @param string $RecentFoundTime 最近检测时间
     * @param integer $Status 处理状态  0 -- 待处理 1 -- 已加白 2 -- 已删除 3 - 已忽略  4 - 已手动处理
     * @param string $Md5 类文件md5
     * @param string $ClassName 类名
     * @param string $SuperClassName 父类名
     * @param string $Interfaces 继承的接口
     * @param string $Annotations 注释
     * @param string $LoaderClassName 所属的类加载器
     * @param integer $Pid 进程pid
     * @param string $Exe java进程路径
     * @param string $Args java进程命令行参数
     * @param string $NodeName 节点名称
     * @param string $NodeId 节点id
     * @param string $ContainerName 容器名称
     * @param string $ContainerId 容器id
     * @param string $ContainerStatus 容器运行状态
     * @param string $ContainerNetStatus 容器隔离状态
     * @param string $ImageId 镜像ID
     * @param string $ImageName 镜像名称
     * @param string $PodName pod名称
     * @param string $PodIp podip
     * @param string $ClusterName 集群名称
     * @param string $ClusterId 集群id
     * @param string $InstanceID 和节点id一样，前端可以不用这个
     * @param string $HostInnerIP 服务器内网ip
     * @param string $HostPublicIP 服务器外网ip
     * @param string $NodeType 普通节点：NORMAL
超级节点：SUPER
     * @param string $NodeUniqueID 超级节点唯一id
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

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RecentFoundTime",$param) and $param["RecentFoundTime"] !== null) {
            $this->RecentFoundTime = $param["RecentFoundTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Md5",$param) and $param["Md5"] !== null) {
            $this->Md5 = $param["Md5"];
        }

        if (array_key_exists("ClassName",$param) and $param["ClassName"] !== null) {
            $this->ClassName = $param["ClassName"];
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

        if (array_key_exists("LoaderClassName",$param) and $param["LoaderClassName"] !== null) {
            $this->LoaderClassName = $param["LoaderClassName"];
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

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("HostInnerIP",$param) and $param["HostInnerIP"] !== null) {
            $this->HostInnerIP = $param["HostInnerIP"];
        }

        if (array_key_exists("HostPublicIP",$param) and $param["HostPublicIP"] !== null) {
            $this->HostPublicIP = $param["HostPublicIP"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("NodeUniqueID",$param) and $param["NodeUniqueID"] !== null) {
            $this->NodeUniqueID = $param["NodeUniqueID"];
        }
    }
}
