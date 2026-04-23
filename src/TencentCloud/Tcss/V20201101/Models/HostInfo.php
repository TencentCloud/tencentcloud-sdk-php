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
 * 容器安全主机列表
 *
 * @method string getHostID() 获取<p>主机id</p>
 * @method void setHostID(string $HostID) 设置<p>主机id</p>
 * @method string getHostIP() 获取<p>主机ip即内网ip</p>
 * @method void setHostIP(string $HostIP) 设置<p>主机ip即内网ip</p>
 * @method string getHostName() 获取<p>主机名称</p>
 * @method void setHostName(string $HostName) 设置<p>主机名称</p>
 * @method string getGroup() 获取<p>业务组</p>
 * @method void setGroup(string $Group) 设置<p>业务组</p>
 * @method string getDockerVersion() 获取<p>docker 版本</p>
 * @method void setDockerVersion(string $DockerVersion) 设置<p>docker 版本</p>
 * @method string getDockerFileSystemDriver() 获取<p>docker 文件系统类型</p>
 * @method void setDockerFileSystemDriver(string $DockerFileSystemDriver) 设置<p>docker 文件系统类型</p>
 * @method integer getImageCnt() 获取<p>镜像个数</p>
 * @method void setImageCnt(integer $ImageCnt) 设置<p>镜像个数</p>
 * @method integer getContainerCnt() 获取<p>容器个数</p>
 * @method void setContainerCnt(integer $ContainerCnt) 设置<p>容器个数</p>
 * @method string getStatus() 获取<p>agent运行状态</p>
 * @method void setStatus(string $Status) 设置<p>agent运行状态</p>
 * @method boolean getIsContainerd() 获取<p>是否是Containerd</p>
 * @method void setIsContainerd(boolean $IsContainerd) 设置<p>是否是Containerd</p>
 * @method string getMachineType() 获取<p>主机来源：[&quot;CVM&quot;, &quot;ECM&quot;, &quot;LH&quot;, &quot;BM&quot;]  中的之一为腾讯云服务器；[&quot;Other&quot;]之一非腾讯云服务器；</p>
 * @method void setMachineType(string $MachineType) 设置<p>主机来源：[&quot;CVM&quot;, &quot;ECM&quot;, &quot;LH&quot;, &quot;BM&quot;]  中的之一为腾讯云服务器；[&quot;Other&quot;]之一非腾讯云服务器；</p>
 * @method string getPublicIp() 获取<p>外网ip</p>
 * @method void setPublicIp(string $PublicIp) 设置<p>外网ip</p>
 * @method string getUuid() 获取<p>主机uuid</p>
 * @method void setUuid(string $Uuid) 设置<p>主机uuid</p>
 * @method string getInstanceID() 获取<p>主机实例ID</p>
 * @method void setInstanceID(string $InstanceID) 设置<p>主机实例ID</p>
 * @method integer getRegionID() 获取<p>地域ID</p>
 * @method void setRegionID(integer $RegionID) 设置<p>地域ID</p>
 * @method ProjectInfo getProject() 获取<p>所属项目</p>
 * @method void setProject(ProjectInfo $Project) 设置<p>所属项目</p>
 * @method array getTags() 获取<p>标签</p>
 * @method void setTags(array $Tags) 设置<p>标签</p>
 * @method string getClusterID() 获取<p>集群id</p>
 * @method void setClusterID(string $ClusterID) 设置<p>集群id</p>
 * @method string getClusterName() 获取<p>集群名称</p>
 * @method void setClusterName(string $ClusterName) 设置<p>集群名称</p>
 * @method string getClusterAccessedStatus() 获取<p>集群接入状态</p>
 * @method void setClusterAccessedStatus(string $ClusterAccessedStatus) 设置<p>集群接入状态</p>
 * @method string getClusterAccessedSubStatus() 获取<p>集群接入子状态</p><p>枚举值：</p><ul><li>AccessedSubNone： 无</li><li>AccessedSubUninstallException： 卸载异常</li><li>AccessedSubTimeout： 接入超时</li><li>AccessedSubUninstallTimeout： 卸载超时</li><li>AccessedSubResourceException： 集群组件检查异常-Deployment/DaemonSet等异常</li><li>AccessedSubCAMPermissionDenied： CAM权限不够</li></ul>
 * @method void setClusterAccessedSubStatus(string $ClusterAccessedSubStatus) 设置<p>集群接入子状态</p><p>枚举值：</p><ul><li>AccessedSubNone： 无</li><li>AccessedSubUninstallException： 卸载异常</li><li>AccessedSubTimeout： 接入超时</li><li>AccessedSubUninstallTimeout： 卸载超时</li><li>AccessedSubResourceException： 集群组件检查异常-Deployment/DaemonSet等异常</li><li>AccessedSubCAMPermissionDenied： CAM权限不够</li></ul>
 * @method string getClusterAccessedErrorReason() 获取<p>失败具体原因描述</p>
 * @method void setClusterAccessedErrorReason(string $ClusterAccessedErrorReason) 设置<p>失败具体原因描述</p>
 * @method integer getChargeCoresCnt() 获取<p>计费核数</p>
 * @method void setChargeCoresCnt(integer $ChargeCoresCnt) 设置<p>计费核数</p>
 * @method string getDefendStatus() 获取<p>防护状态:<br>已防护: Defended<br>未防护: UnDefended</p>
 * @method void setDefendStatus(string $DefendStatus) 设置<p>防护状态:<br>已防护: Defended<br>未防护: UnDefended</p>
 * @method integer getCoresCnt() 获取<p>核数</p>
 * @method void setCoresCnt(integer $CoresCnt) 设置<p>核数</p>
 * @method string getLastOnlineTime() 获取<p>最近在线时间</p>
 * @method void setLastOnlineTime(string $LastOnlineTime) 设置<p>最近在线时间</p>
 */
class HostInfo extends AbstractModel
{
    /**
     * @var string <p>主机id</p>
     */
    public $HostID;

    /**
     * @var string <p>主机ip即内网ip</p>
     */
    public $HostIP;

    /**
     * @var string <p>主机名称</p>
     */
    public $HostName;

    /**
     * @var string <p>业务组</p>
     */
    public $Group;

    /**
     * @var string <p>docker 版本</p>
     */
    public $DockerVersion;

    /**
     * @var string <p>docker 文件系统类型</p>
     */
    public $DockerFileSystemDriver;

    /**
     * @var integer <p>镜像个数</p>
     */
    public $ImageCnt;

    /**
     * @var integer <p>容器个数</p>
     */
    public $ContainerCnt;

    /**
     * @var string <p>agent运行状态</p>
     */
    public $Status;

    /**
     * @var boolean <p>是否是Containerd</p>
     */
    public $IsContainerd;

    /**
     * @var string <p>主机来源：[&quot;CVM&quot;, &quot;ECM&quot;, &quot;LH&quot;, &quot;BM&quot;]  中的之一为腾讯云服务器；[&quot;Other&quot;]之一非腾讯云服务器；</p>
     */
    public $MachineType;

    /**
     * @var string <p>外网ip</p>
     */
    public $PublicIp;

    /**
     * @var string <p>主机uuid</p>
     */
    public $Uuid;

    /**
     * @var string <p>主机实例ID</p>
     */
    public $InstanceID;

    /**
     * @var integer <p>地域ID</p>
     */
    public $RegionID;

    /**
     * @var ProjectInfo <p>所属项目</p>
     */
    public $Project;

    /**
     * @var array <p>标签</p>
     */
    public $Tags;

    /**
     * @var string <p>集群id</p>
     */
    public $ClusterID;

    /**
     * @var string <p>集群名称</p>
     */
    public $ClusterName;

    /**
     * @var string <p>集群接入状态</p>
     */
    public $ClusterAccessedStatus;

    /**
     * @var string <p>集群接入子状态</p><p>枚举值：</p><ul><li>AccessedSubNone： 无</li><li>AccessedSubUninstallException： 卸载异常</li><li>AccessedSubTimeout： 接入超时</li><li>AccessedSubUninstallTimeout： 卸载超时</li><li>AccessedSubResourceException： 集群组件检查异常-Deployment/DaemonSet等异常</li><li>AccessedSubCAMPermissionDenied： CAM权限不够</li></ul>
     */
    public $ClusterAccessedSubStatus;

    /**
     * @var string <p>失败具体原因描述</p>
     */
    public $ClusterAccessedErrorReason;

    /**
     * @var integer <p>计费核数</p>
     */
    public $ChargeCoresCnt;

    /**
     * @var string <p>防护状态:<br>已防护: Defended<br>未防护: UnDefended</p>
     */
    public $DefendStatus;

    /**
     * @var integer <p>核数</p>
     */
    public $CoresCnt;

    /**
     * @var string <p>最近在线时间</p>
     */
    public $LastOnlineTime;

    /**
     * @param string $HostID <p>主机id</p>
     * @param string $HostIP <p>主机ip即内网ip</p>
     * @param string $HostName <p>主机名称</p>
     * @param string $Group <p>业务组</p>
     * @param string $DockerVersion <p>docker 版本</p>
     * @param string $DockerFileSystemDriver <p>docker 文件系统类型</p>
     * @param integer $ImageCnt <p>镜像个数</p>
     * @param integer $ContainerCnt <p>容器个数</p>
     * @param string $Status <p>agent运行状态</p>
     * @param boolean $IsContainerd <p>是否是Containerd</p>
     * @param string $MachineType <p>主机来源：[&quot;CVM&quot;, &quot;ECM&quot;, &quot;LH&quot;, &quot;BM&quot;]  中的之一为腾讯云服务器；[&quot;Other&quot;]之一非腾讯云服务器；</p>
     * @param string $PublicIp <p>外网ip</p>
     * @param string $Uuid <p>主机uuid</p>
     * @param string $InstanceID <p>主机实例ID</p>
     * @param integer $RegionID <p>地域ID</p>
     * @param ProjectInfo $Project <p>所属项目</p>
     * @param array $Tags <p>标签</p>
     * @param string $ClusterID <p>集群id</p>
     * @param string $ClusterName <p>集群名称</p>
     * @param string $ClusterAccessedStatus <p>集群接入状态</p>
     * @param string $ClusterAccessedSubStatus <p>集群接入子状态</p><p>枚举值：</p><ul><li>AccessedSubNone： 无</li><li>AccessedSubUninstallException： 卸载异常</li><li>AccessedSubTimeout： 接入超时</li><li>AccessedSubUninstallTimeout： 卸载超时</li><li>AccessedSubResourceException： 集群组件检查异常-Deployment/DaemonSet等异常</li><li>AccessedSubCAMPermissionDenied： CAM权限不够</li></ul>
     * @param string $ClusterAccessedErrorReason <p>失败具体原因描述</p>
     * @param integer $ChargeCoresCnt <p>计费核数</p>
     * @param string $DefendStatus <p>防护状态:<br>已防护: Defended<br>未防护: UnDefended</p>
     * @param integer $CoresCnt <p>核数</p>
     * @param string $LastOnlineTime <p>最近在线时间</p>
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
        if (array_key_exists("HostID",$param) and $param["HostID"] !== null) {
            $this->HostID = $param["HostID"];
        }

        if (array_key_exists("HostIP",$param) and $param["HostIP"] !== null) {
            $this->HostIP = $param["HostIP"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }

        if (array_key_exists("DockerVersion",$param) and $param["DockerVersion"] !== null) {
            $this->DockerVersion = $param["DockerVersion"];
        }

        if (array_key_exists("DockerFileSystemDriver",$param) and $param["DockerFileSystemDriver"] !== null) {
            $this->DockerFileSystemDriver = $param["DockerFileSystemDriver"];
        }

        if (array_key_exists("ImageCnt",$param) and $param["ImageCnt"] !== null) {
            $this->ImageCnt = $param["ImageCnt"];
        }

        if (array_key_exists("ContainerCnt",$param) and $param["ContainerCnt"] !== null) {
            $this->ContainerCnt = $param["ContainerCnt"];
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

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
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

        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterAccessedStatus",$param) and $param["ClusterAccessedStatus"] !== null) {
            $this->ClusterAccessedStatus = $param["ClusterAccessedStatus"];
        }

        if (array_key_exists("ClusterAccessedSubStatus",$param) and $param["ClusterAccessedSubStatus"] !== null) {
            $this->ClusterAccessedSubStatus = $param["ClusterAccessedSubStatus"];
        }

        if (array_key_exists("ClusterAccessedErrorReason",$param) and $param["ClusterAccessedErrorReason"] !== null) {
            $this->ClusterAccessedErrorReason = $param["ClusterAccessedErrorReason"];
        }

        if (array_key_exists("ChargeCoresCnt",$param) and $param["ChargeCoresCnt"] !== null) {
            $this->ChargeCoresCnt = $param["ChargeCoresCnt"];
        }

        if (array_key_exists("DefendStatus",$param) and $param["DefendStatus"] !== null) {
            $this->DefendStatus = $param["DefendStatus"];
        }

        if (array_key_exists("CoresCnt",$param) and $param["CoresCnt"] !== null) {
            $this->CoresCnt = $param["CoresCnt"];
        }

        if (array_key_exists("LastOnlineTime",$param) and $param["LastOnlineTime"] !== null) {
            $this->LastOnlineTime = $param["LastOnlineTime"];
        }
    }
}
