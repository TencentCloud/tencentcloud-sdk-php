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
 * 部署组
 *
 * @method string getGroupId() 获取部署组ID
 * @method void setGroupId(string $GroupId) 设置部署组ID
 * @method string getGroupName() 获取部署组名称
 * @method void setGroupName(string $GroupName) 设置部署组名称
 * @method string getApplicationId() 获取应用ID
 * @method void setApplicationId(string $ApplicationId) 设置应用ID
 * @method string getApplicationName() 获取应用名称
 * @method void setApplicationName(string $ApplicationName) 设置应用名称
 * @method string getApplicationType() 获取应用类型
 * @method void setApplicationType(string $ApplicationType) 设置应用类型
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getClusterType() 获取集群类型
 * @method void setClusterType(string $ClusterType) 设置集群类型
 * @method string getNamespaceId() 获取命名空间ID
 * @method void setNamespaceId(string $NamespaceId) 设置命名空间ID
 * @method string getNamespaceName() 获取命名空间名称
 * @method void setNamespaceName(string $NamespaceName) 设置命名空间名称
 * @method string getStartupParameters() 获取启动参数
 * @method void setStartupParameters(string $StartupParameters) 设置启动参数
 * @method string getGroupResourceType() 获取部署组资源类型
 * @method void setGroupResourceType(string $GroupResourceType) 设置部署组资源类型
 * @method string getAppMicroServiceType() 获取应用微服务类型
 * @method void setAppMicroServiceType(string $AppMicroServiceType) 设置应用微服务类型
 * @method string getK8sNamespaceName() 获取k8s 命名空间名称
 * @method void setK8sNamespaceName(string $K8sNamespaceName) 设置k8s 命名空间名称
 */
class SimpleGroup extends AbstractModel
{
    /**
     * @var string 部署组ID
     */
    public $GroupId;

    /**
     * @var string 部署组名称
     */
    public $GroupName;

    /**
     * @var string 应用ID
     */
    public $ApplicationId;

    /**
     * @var string 应用名称
     */
    public $ApplicationName;

    /**
     * @var string 应用类型
     */
    public $ApplicationType;

    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string 集群类型
     */
    public $ClusterType;

    /**
     * @var string 命名空间ID
     */
    public $NamespaceId;

    /**
     * @var string 命名空间名称
     */
    public $NamespaceName;

    /**
     * @var string 启动参数
     */
    public $StartupParameters;

    /**
     * @var string 部署组资源类型
     */
    public $GroupResourceType;

    /**
     * @var string 应用微服务类型
     */
    public $AppMicroServiceType;

    /**
     * @var string k8s 命名空间名称
     */
    public $K8sNamespaceName;

    /**
     * @param string $GroupId 部署组ID
     * @param string $GroupName 部署组名称
     * @param string $ApplicationId 应用ID
     * @param string $ApplicationName 应用名称
     * @param string $ApplicationType 应用类型
     * @param string $ClusterId 集群ID
     * @param string $ClusterName 集群名称
     * @param string $ClusterType 集群类型
     * @param string $NamespaceId 命名空间ID
     * @param string $NamespaceName 命名空间名称
     * @param string $StartupParameters 启动参数
     * @param string $GroupResourceType 部署组资源类型
     * @param string $AppMicroServiceType 应用微服务类型
     * @param string $K8sNamespaceName k8s 命名空间名称
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

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("ApplicationType",$param) and $param["ApplicationType"] !== null) {
            $this->ApplicationType = $param["ApplicationType"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("StartupParameters",$param) and $param["StartupParameters"] !== null) {
            $this->StartupParameters = $param["StartupParameters"];
        }

        if (array_key_exists("GroupResourceType",$param) and $param["GroupResourceType"] !== null) {
            $this->GroupResourceType = $param["GroupResourceType"];
        }

        if (array_key_exists("AppMicroServiceType",$param) and $param["AppMicroServiceType"] !== null) {
            $this->AppMicroServiceType = $param["AppMicroServiceType"];
        }

        if (array_key_exists("K8sNamespaceName",$param) and $param["K8sNamespaceName"] !== null) {
            $this->K8sNamespaceName = $param["K8sNamespaceName"];
        }
    }
}
