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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于联通性检测主机信息
 *
 * @method string getHostId() 获取<p>主机id</p>
 * @method void setHostId(string $HostId) 设置<p>主机id</p>
 * @method string getHostIp() 获取<p>主机ip</p>
 * @method void setHostIp(string $HostIp) 设置<p>主机ip</p>
 * @method string getHostName() 获取<p>主机名</p>
 * @method void setHostName(string $HostName) 设置<p>主机名</p>
 * @method string getDockerVersion() 获取<p>docker版本</p>
 * @method void setDockerVersion(string $DockerVersion) 设置<p>docker版本</p>
 * @method string getDockerFileSystemDriver() 获取<p>docker文件系统类型</p>
 * @method void setDockerFileSystemDriver(string $DockerFileSystemDriver) 设置<p>docker文件系统类型</p>
 * @method string getStatus() 获取<p>状态</p>
 * @method void setStatus(string $Status) 设置<p>状态</p>
 * @method boolean getIsContainerd() 获取<p>是否是容器</p>
 * @method void setIsContainerd(boolean $IsContainerd) 设置<p>是否是容器</p>
 * @method string getMachineType() 获取<p>主机类型</p>
 * @method void setMachineType(string $MachineType) 设置<p>主机类型</p>
 * @method string getPublicIp() 获取<p>公网ip</p>
 * @method void setPublicIp(string $PublicIp) 设置<p>公网ip</p>
 * @method string getUuid() 获取<p>主机UUID</p>
 * @method void setUuid(string $Uuid) 设置<p>主机UUID</p>
 * @method string getInstanceId() 获取<p>实例id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例id</p>
 * @method integer getHostRegionId() 获取<p>主机所在region id</p>
 * @method void setHostRegionId(integer $HostRegionId) 设置<p>主机所在region id</p>
 * @method string getHostRegion() 获取<p>主机所在地域</p>
 * @method void setHostRegion(string $HostRegion) 设置<p>主机所在地域</p>
 * @method ProjectInfo getProject() 获取<p>集群所属项目</p>
 * @method void setProject(ProjectInfo $Project) 设置<p>集群所属项目</p>
 * @method array getTags() 获取<p>集群标签</p>
 * @method void setTags(array $Tags) 设置<p>集群标签</p>
 * @method string getClusterId() 获取<p>集群id</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群id</p>
 * @method string getClusterName() 获取<p>集群名</p>
 * @method void setClusterName(string $ClusterName) 设置<p>集群名</p>
 */
class CheckConnectivityHostInfo extends AbstractModel
{
    /**
     * @var string <p>主机id</p>
     */
    public $HostId;

    /**
     * @var string <p>主机ip</p>
     */
    public $HostIp;

    /**
     * @var string <p>主机名</p>
     */
    public $HostName;

    /**
     * @var string <p>docker版本</p>
     */
    public $DockerVersion;

    /**
     * @var string <p>docker文件系统类型</p>
     */
    public $DockerFileSystemDriver;

    /**
     * @var string <p>状态</p>
     */
    public $Status;

    /**
     * @var boolean <p>是否是容器</p>
     */
    public $IsContainerd;

    /**
     * @var string <p>主机类型</p>
     */
    public $MachineType;

    /**
     * @var string <p>公网ip</p>
     */
    public $PublicIp;

    /**
     * @var string <p>主机UUID</p>
     */
    public $Uuid;

    /**
     * @var string <p>实例id</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>主机所在region id</p>
     */
    public $HostRegionId;

    /**
     * @var string <p>主机所在地域</p>
     */
    public $HostRegion;

    /**
     * @var ProjectInfo <p>集群所属项目</p>
     */
    public $Project;

    /**
     * @var array <p>集群标签</p>
     */
    public $Tags;

    /**
     * @var string <p>集群id</p>
     */
    public $ClusterId;

    /**
     * @var string <p>集群名</p>
     */
    public $ClusterName;

    /**
     * @param string $HostId <p>主机id</p>
     * @param string $HostIp <p>主机ip</p>
     * @param string $HostName <p>主机名</p>
     * @param string $DockerVersion <p>docker版本</p>
     * @param string $DockerFileSystemDriver <p>docker文件系统类型</p>
     * @param string $Status <p>状态</p>
     * @param boolean $IsContainerd <p>是否是容器</p>
     * @param string $MachineType <p>主机类型</p>
     * @param string $PublicIp <p>公网ip</p>
     * @param string $Uuid <p>主机UUID</p>
     * @param string $InstanceId <p>实例id</p>
     * @param integer $HostRegionId <p>主机所在region id</p>
     * @param string $HostRegion <p>主机所在地域</p>
     * @param ProjectInfo $Project <p>集群所属项目</p>
     * @param array $Tags <p>集群标签</p>
     * @param string $ClusterId <p>集群id</p>
     * @param string $ClusterName <p>集群名</p>
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
        if (array_key_exists("HostId",$param) and $param["HostId"] !== null) {
            $this->HostId = $param["HostId"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("DockerVersion",$param) and $param["DockerVersion"] !== null) {
            $this->DockerVersion = $param["DockerVersion"];
        }

        if (array_key_exists("DockerFileSystemDriver",$param) and $param["DockerFileSystemDriver"] !== null) {
            $this->DockerFileSystemDriver = $param["DockerFileSystemDriver"];
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

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("HostRegionId",$param) and $param["HostRegionId"] !== null) {
            $this->HostRegionId = $param["HostRegionId"];
        }

        if (array_key_exists("HostRegion",$param) and $param["HostRegion"] !== null) {
            $this->HostRegion = $param["HostRegion"];
        }

        if (array_key_exists("Project",$param) and $param["Project"] !== null) {
            $this->Project = new ProjectInfo();
            $this->Project->deserialize($param["Project"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tags();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }
    }
}
