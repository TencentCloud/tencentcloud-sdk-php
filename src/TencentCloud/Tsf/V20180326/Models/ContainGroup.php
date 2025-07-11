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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 部署组列表（应用下钻界面的）
 *
 * @method string getGroupId() 获取部署组ID
 * @method void setGroupId(string $GroupId) 设置部署组ID
 * @method string getGroupName() 获取分组名称
 * @method void setGroupName(string $GroupName) 设置分组名称
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getServer() 获取镜像server
 * @method void setServer(string $Server) 设置镜像server
 * @method string getRepoName() 获取镜像名，如/tsf/nginx
 * @method void setRepoName(string $RepoName) 设置镜像名，如/tsf/nginx
 * @method string getTagName() 获取镜像版本名称
 * @method void setTagName(string $TagName) 设置镜像版本名称
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getNamespaceId() 获取命名空间ID
 * @method void setNamespaceId(string $NamespaceId) 设置命名空间ID
 * @method string getNamespaceName() 获取命名空间名称
 * @method void setNamespaceName(string $NamespaceName) 设置命名空间名称
 * @method string getCpuRequest() 获取初始分配的 CPU 核数，对应 K8S request
 * @method void setCpuRequest(string $CpuRequest) 设置初始分配的 CPU 核数，对应 K8S request
 * @method string getCpuLimit() 获取最大分配的 CPU 核数，对应 K8S limit
 * @method void setCpuLimit(string $CpuLimit) 设置最大分配的 CPU 核数，对应 K8S limit
 * @method string getMemRequest() 获取初始分配的内存 MiB 数，对应 K8S request
 * @method void setMemRequest(string $MemRequest) 设置初始分配的内存 MiB 数，对应 K8S request
 * @method string getMemLimit() 获取最大分配的内存 MiB 数，对应 K8S limit
 * @method void setMemLimit(string $MemLimit) 设置最大分配的内存 MiB 数，对应 K8S limit
 * @method string getAlias() 获取部署组备注
 * @method void setAlias(string $Alias) 设置部署组备注
 * @method boolean getKubeInjectEnable() 获取KubeInjectEnable值
 * @method void setKubeInjectEnable(boolean $KubeInjectEnable) 设置KubeInjectEnable值
 * @method string getUpdatedTime() 获取更新时间
 * @method void setUpdatedTime(string $UpdatedTime) 设置更新时间
 */
class ContainGroup extends AbstractModel
{
    /**
     * @var string 部署组ID
     */
    public $GroupId;

    /**
     * @var string 分组名称
     */
    public $GroupName;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 镜像server
     */
    public $Server;

    /**
     * @var string 镜像名，如/tsf/nginx
     */
    public $RepoName;

    /**
     * @var string 镜像版本名称
     */
    public $TagName;

    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string 命名空间ID
     */
    public $NamespaceId;

    /**
     * @var string 命名空间名称
     */
    public $NamespaceName;

    /**
     * @var string 初始分配的 CPU 核数，对应 K8S request
     */
    public $CpuRequest;

    /**
     * @var string 最大分配的 CPU 核数，对应 K8S limit
     */
    public $CpuLimit;

    /**
     * @var string 初始分配的内存 MiB 数，对应 K8S request
     */
    public $MemRequest;

    /**
     * @var string 最大分配的内存 MiB 数，对应 K8S limit
     */
    public $MemLimit;

    /**
     * @var string 部署组备注
     */
    public $Alias;

    /**
     * @var boolean KubeInjectEnable值
     */
    public $KubeInjectEnable;

    /**
     * @var string 更新时间
     */
    public $UpdatedTime;

    /**
     * @param string $GroupId 部署组ID
     * @param string $GroupName 分组名称
     * @param string $CreateTime 创建时间
     * @param string $Server 镜像server
     * @param string $RepoName 镜像名，如/tsf/nginx
     * @param string $TagName 镜像版本名称
     * @param string $ClusterId 集群ID
     * @param string $ClusterName 集群名称
     * @param string $NamespaceId 命名空间ID
     * @param string $NamespaceName 命名空间名称
     * @param string $CpuRequest 初始分配的 CPU 核数，对应 K8S request
     * @param string $CpuLimit 最大分配的 CPU 核数，对应 K8S limit
     * @param string $MemRequest 初始分配的内存 MiB 数，对应 K8S request
     * @param string $MemLimit 最大分配的内存 MiB 数，对应 K8S limit
     * @param string $Alias 部署组备注
     * @param boolean $KubeInjectEnable KubeInjectEnable值
     * @param string $UpdatedTime 更新时间
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Server",$param) and $param["Server"] !== null) {
            $this->Server = $param["Server"];
        }

        if (array_key_exists("RepoName",$param) and $param["RepoName"] !== null) {
            $this->RepoName = $param["RepoName"];
        }

        if (array_key_exists("TagName",$param) and $param["TagName"] !== null) {
            $this->TagName = $param["TagName"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("CpuRequest",$param) and $param["CpuRequest"] !== null) {
            $this->CpuRequest = $param["CpuRequest"];
        }

        if (array_key_exists("CpuLimit",$param) and $param["CpuLimit"] !== null) {
            $this->CpuLimit = $param["CpuLimit"];
        }

        if (array_key_exists("MemRequest",$param) and $param["MemRequest"] !== null) {
            $this->MemRequest = $param["MemRequest"];
        }

        if (array_key_exists("MemLimit",$param) and $param["MemLimit"] !== null) {
            $this->MemLimit = $param["MemLimit"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("KubeInjectEnable",$param) and $param["KubeInjectEnable"] !== null) {
            $this->KubeInjectEnable = $param["KubeInjectEnable"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }
    }
}
