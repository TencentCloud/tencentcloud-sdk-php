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
 * DescribeAssetHostDetail返回参数结构体
 *
 * @method string getUUID() 获取容器安全uuid
 * @method void setUUID(string $UUID) 设置容器安全uuid
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getHostName() 获取主机名
 * @method void setHostName(string $HostName) 设置主机名
 * @method string getGroup() 获取主机分组
 * @method void setGroup(string $Group) 设置主机分组
 * @method string getHostIP() 获取主机IP
 * @method void setHostIP(string $HostIP) 设置主机IP
 * @method string getOsName() 获取操作系统
 * @method void setOsName(string $OsName) 设置操作系统
 * @method string getAgentVersion() 获取agent版本
 * @method void setAgentVersion(string $AgentVersion) 设置agent版本
 * @method string getKernelVersion() 获取内核版本
 * @method void setKernelVersion(string $KernelVersion) 设置内核版本
 * @method string getDockerVersion() 获取docker版本
 * @method void setDockerVersion(string $DockerVersion) 设置docker版本
 * @method string getDockerAPIVersion() 获取docker api版本
 * @method void setDockerAPIVersion(string $DockerAPIVersion) 设置docker api版本
 * @method string getDockerGoVersion() 获取docker go 版本
 * @method void setDockerGoVersion(string $DockerGoVersion) 设置docker go 版本
 * @method string getDockerFileSystemDriver() 获取docker 文件系统类型
 * @method void setDockerFileSystemDriver(string $DockerFileSystemDriver) 设置docker 文件系统类型
 * @method string getDockerRootDir() 获取docker root 目录
 * @method void setDockerRootDir(string $DockerRootDir) 设置docker root 目录
 * @method integer getImageCnt() 获取镜像数
 * @method void setImageCnt(integer $ImageCnt) 设置镜像数
 * @method integer getContainerCnt() 获取容器数
 * @method void setContainerCnt(integer $ContainerCnt) 设置容器数
 * @method string getK8sMasterIP() 获取k8s IP
 * @method void setK8sMasterIP(string $K8sMasterIP) 设置k8s IP
 * @method string getK8sVersion() 获取k8s version
 * @method void setK8sVersion(string $K8sVersion) 设置k8s version
 * @method string getKubeProxyVersion() 获取kube proxy
 * @method void setKubeProxyVersion(string $KubeProxyVersion) 设置kube proxy
 * @method string getStatus() 获取"UNINSTALL"："未安装","OFFLINE"："离线", "ONLINE"："防护中
 * @method void setStatus(string $Status) 设置"UNINSTALL"："未安装","OFFLINE"："离线", "ONLINE"："防护中
 * @method boolean getIsContainerd() 获取是否Containerd
 * @method void setIsContainerd(boolean $IsContainerd) 设置是否Containerd
 * @method string getMachineType() 获取主机来源;"TENCENTCLOUD":"腾讯云服务器","OTHERCLOUD":"非腾讯云服务器"
 * @method void setMachineType(string $MachineType) 设置主机来源;"TENCENTCLOUD":"腾讯云服务器","OTHERCLOUD":"非腾讯云服务器"
 * @method string getPublicIp() 获取外网ip
 * @method void setPublicIp(string $PublicIp) 设置外网ip
 * @method string getInstanceID() 获取主机实例ID
 * @method void setInstanceID(string $InstanceID) 设置主机实例ID
 * @method integer getRegionID() 获取地域ID
 * @method void setRegionID(integer $RegionID) 设置地域ID
 * @method ProjectInfo getProject() 获取所属项目
 * @method void setProject(ProjectInfo $Project) 设置所属项目
 * @method array getTags() 获取标签
 * @method void setTags(array $Tags) 设置标签
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAssetHostDetailResponse extends AbstractModel
{
    /**
     * @var string 容器安全uuid
     */
    public $UUID;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 主机名
     */
    public $HostName;

    /**
     * @var string 主机分组
     */
    public $Group;

    /**
     * @var string 主机IP
     */
    public $HostIP;

    /**
     * @var string 操作系统
     */
    public $OsName;

    /**
     * @var string agent版本
     */
    public $AgentVersion;

    /**
     * @var string 内核版本
     */
    public $KernelVersion;

    /**
     * @var string docker版本
     */
    public $DockerVersion;

    /**
     * @var string docker api版本
     */
    public $DockerAPIVersion;

    /**
     * @var string docker go 版本
     */
    public $DockerGoVersion;

    /**
     * @var string docker 文件系统类型
     */
    public $DockerFileSystemDriver;

    /**
     * @var string docker root 目录
     */
    public $DockerRootDir;

    /**
     * @var integer 镜像数
     */
    public $ImageCnt;

    /**
     * @var integer 容器数
     */
    public $ContainerCnt;

    /**
     * @var string k8s IP
     */
    public $K8sMasterIP;

    /**
     * @var string k8s version
     */
    public $K8sVersion;

    /**
     * @var string kube proxy
     */
    public $KubeProxyVersion;

    /**
     * @var string "UNINSTALL"："未安装","OFFLINE"："离线", "ONLINE"："防护中
     */
    public $Status;

    /**
     * @var boolean 是否Containerd
     */
    public $IsContainerd;

    /**
     * @var string 主机来源;"TENCENTCLOUD":"腾讯云服务器","OTHERCLOUD":"非腾讯云服务器"
     */
    public $MachineType;

    /**
     * @var string 外网ip
     */
    public $PublicIp;

    /**
     * @var string 主机实例ID
     */
    public $InstanceID;

    /**
     * @var integer 地域ID
     */
    public $RegionID;

    /**
     * @var ProjectInfo 所属项目
     */
    public $Project;

    /**
     * @var array 标签
     */
    public $Tags;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $UUID 容器安全uuid
     * @param string $UpdateTime 更新时间
     * @param string $HostName 主机名
     * @param string $Group 主机分组
     * @param string $HostIP 主机IP
     * @param string $OsName 操作系统
     * @param string $AgentVersion agent版本
     * @param string $KernelVersion 内核版本
     * @param string $DockerVersion docker版本
     * @param string $DockerAPIVersion docker api版本
     * @param string $DockerGoVersion docker go 版本
     * @param string $DockerFileSystemDriver docker 文件系统类型
     * @param string $DockerRootDir docker root 目录
     * @param integer $ImageCnt 镜像数
     * @param integer $ContainerCnt 容器数
     * @param string $K8sMasterIP k8s IP
     * @param string $K8sVersion k8s version
     * @param string $KubeProxyVersion kube proxy
     * @param string $Status "UNINSTALL"："未安装","OFFLINE"："离线", "ONLINE"："防护中
     * @param boolean $IsContainerd 是否Containerd
     * @param string $MachineType 主机来源;"TENCENTCLOUD":"腾讯云服务器","OTHERCLOUD":"非腾讯云服务器"
     * @param string $PublicIp 外网ip
     * @param string $InstanceID 主机实例ID
     * @param integer $RegionID 地域ID
     * @param ProjectInfo $Project 所属项目
     * @param array $Tags 标签
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
        if (array_key_exists("UUID",$param) and $param["UUID"] !== null) {
            $this->UUID = $param["UUID"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }

        if (array_key_exists("HostIP",$param) and $param["HostIP"] !== null) {
            $this->HostIP = $param["HostIP"];
        }

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("AgentVersion",$param) and $param["AgentVersion"] !== null) {
            $this->AgentVersion = $param["AgentVersion"];
        }

        if (array_key_exists("KernelVersion",$param) and $param["KernelVersion"] !== null) {
            $this->KernelVersion = $param["KernelVersion"];
        }

        if (array_key_exists("DockerVersion",$param) and $param["DockerVersion"] !== null) {
            $this->DockerVersion = $param["DockerVersion"];
        }

        if (array_key_exists("DockerAPIVersion",$param) and $param["DockerAPIVersion"] !== null) {
            $this->DockerAPIVersion = $param["DockerAPIVersion"];
        }

        if (array_key_exists("DockerGoVersion",$param) and $param["DockerGoVersion"] !== null) {
            $this->DockerGoVersion = $param["DockerGoVersion"];
        }

        if (array_key_exists("DockerFileSystemDriver",$param) and $param["DockerFileSystemDriver"] !== null) {
            $this->DockerFileSystemDriver = $param["DockerFileSystemDriver"];
        }

        if (array_key_exists("DockerRootDir",$param) and $param["DockerRootDir"] !== null) {
            $this->DockerRootDir = $param["DockerRootDir"];
        }

        if (array_key_exists("ImageCnt",$param) and $param["ImageCnt"] !== null) {
            $this->ImageCnt = $param["ImageCnt"];
        }

        if (array_key_exists("ContainerCnt",$param) and $param["ContainerCnt"] !== null) {
            $this->ContainerCnt = $param["ContainerCnt"];
        }

        if (array_key_exists("K8sMasterIP",$param) and $param["K8sMasterIP"] !== null) {
            $this->K8sMasterIP = $param["K8sMasterIP"];
        }

        if (array_key_exists("K8sVersion",$param) and $param["K8sVersion"] !== null) {
            $this->K8sVersion = $param["K8sVersion"];
        }

        if (array_key_exists("KubeProxyVersion",$param) and $param["KubeProxyVersion"] !== null) {
            $this->KubeProxyVersion = $param["KubeProxyVersion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IsContainerd",$param) and $param["IsContainerd"] !== null) {
            $this->IsContainerd = $param["IsContainerd"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("RegionID",$param) and $param["RegionID"] !== null) {
            $this->RegionID = $param["RegionID"];
        }

        if (array_key_exists("Project",$param) and $param["Project"] !== null) {
            $this->Project = new ProjectInfo();
            $this->Project->deserialize($param["Project"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
