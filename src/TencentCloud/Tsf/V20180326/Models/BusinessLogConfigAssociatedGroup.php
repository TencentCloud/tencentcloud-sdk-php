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
 * 业务日志配置关联部署组信息
 *
 * @method string getGroupId() 获取部署组ID
 * @method void setGroupId(string $GroupId) 设置部署组ID
 * @method string getGroupName() 获取部署组名称
 * @method void setGroupName(string $GroupName) 设置部署组名称
 * @method string getApplicationId() 获取部署组所属应用ID
 * @method void setApplicationId(string $ApplicationId) 设置部署组所属应用ID
 * @method string getApplicationName() 获取部署组所属应用名称
 * @method void setApplicationName(string $ApplicationName) 设置部署组所属应用名称
 * @method string getApplicationType() 获取部署组所属应用类型，C：容器应用，V：虚拟机应用
 * @method void setApplicationType(string $ApplicationType) 设置部署组所属应用类型，C：容器应用，V：虚拟机应用
 * @method string getNamespaceId() 获取部署组所属命名空间ID
 * @method void setNamespaceId(string $NamespaceId) 设置部署组所属命名空间ID
 * @method string getNamespaceName() 获取部署组所属命名空间名称
 * @method void setNamespaceName(string $NamespaceName) 设置部署组所属命名空间名称
 * @method string getClusterId() 获取部署组所属集群ID
 * @method void setClusterId(string $ClusterId) 设置部署组所属集群ID
 * @method string getClusterName() 获取部署组所属集群名称
 * @method void setClusterName(string $ClusterName) 设置部署组所属集群名称
 * @method string getClusterType() 获取部署组所属集群类型，C：容器集群，V：虚拟机集群
 * @method void setClusterType(string $ClusterType) 设置部署组所属集群类型，C：容器集群，V：虚拟机集群
 * @method string getAssociatedTime() 获取部署组关联日志配置时间，格式yyyy-MM-dd HH:mm:ss
 * @method void setAssociatedTime(string $AssociatedTime) 设置部署组关联日志配置时间，格式yyyy-MM-dd HH:mm:ss
 */
class BusinessLogConfigAssociatedGroup extends AbstractModel
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
     * @var string 部署组所属应用ID
     */
    public $ApplicationId;

    /**
     * @var string 部署组所属应用名称
     */
    public $ApplicationName;

    /**
     * @var string 部署组所属应用类型，C：容器应用，V：虚拟机应用
     */
    public $ApplicationType;

    /**
     * @var string 部署组所属命名空间ID
     */
    public $NamespaceId;

    /**
     * @var string 部署组所属命名空间名称
     */
    public $NamespaceName;

    /**
     * @var string 部署组所属集群ID
     */
    public $ClusterId;

    /**
     * @var string 部署组所属集群名称
     */
    public $ClusterName;

    /**
     * @var string 部署组所属集群类型，C：容器集群，V：虚拟机集群
     */
    public $ClusterType;

    /**
     * @var string 部署组关联日志配置时间，格式yyyy-MM-dd HH:mm:ss
     */
    public $AssociatedTime;

    /**
     * @param string $GroupId 部署组ID
     * @param string $GroupName 部署组名称
     * @param string $ApplicationId 部署组所属应用ID
     * @param string $ApplicationName 部署组所属应用名称
     * @param string $ApplicationType 部署组所属应用类型，C：容器应用，V：虚拟机应用
     * @param string $NamespaceId 部署组所属命名空间ID
     * @param string $NamespaceName 部署组所属命名空间名称
     * @param string $ClusterId 部署组所属集群ID
     * @param string $ClusterName 部署组所属集群名称
     * @param string $ClusterType 部署组所属集群类型，C：容器集群，V：虚拟机集群
     * @param string $AssociatedTime 部署组关联日志配置时间，格式yyyy-MM-dd HH:mm:ss
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

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
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

        if (array_key_exists("AssociatedTime",$param) and $param["AssociatedTime"] !== null) {
            $this->AssociatedTime = $param["AssociatedTime"];
        }
    }
}
