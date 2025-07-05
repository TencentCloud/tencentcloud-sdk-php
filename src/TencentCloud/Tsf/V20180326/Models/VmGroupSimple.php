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
 * 虚拟机部署组列表简要字段
 *
 * @method string getGroupId() 获取部署组ID
 * @method void setGroupId(string $GroupId) 设置部署组ID
 * @method string getGroupName() 获取部署组名称
 * @method void setGroupName(string $GroupName) 设置部署组名称
 * @method string getApplicationType() 获取应用类型
 * @method void setApplicationType(string $ApplicationType) 设置应用类型
 * @method string getGroupDesc() 获取部署组描述
 * @method void setGroupDesc(string $GroupDesc) 设置部署组描述
 * @method string getUpdateTime() 获取部署组更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置部署组更新时间
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getStartupParameters() 获取部署组启动参数
 * @method void setStartupParameters(string $StartupParameters) 设置部署组启动参数
 * @method string getNamespaceId() 获取命名空间ID
 * @method void setNamespaceId(string $NamespaceId) 设置命名空间ID
 * @method string getCreateTime() 获取部署组创建时间
 * @method void setCreateTime(string $CreateTime) 设置部署组创建时间
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getApplicationId() 获取应用ID
 * @method void setApplicationId(string $ApplicationId) 设置应用ID
 * @method string getApplicationName() 获取应用名称
 * @method void setApplicationName(string $ApplicationName) 设置应用名称
 * @method string getNamespaceName() 获取命名空间名称
 * @method void setNamespaceName(string $NamespaceName) 设置命名空间名称
 * @method string getMicroserviceType() 获取应用微服务类型
 * @method void setMicroserviceType(string $MicroserviceType) 设置应用微服务类型
 * @method string getGroupResourceType() 获取部署组资源类型
 * @method void setGroupResourceType(string $GroupResourceType) 设置部署组资源类型
 * @method integer getUpdatedTime() 获取部署组更新时间戳
 * @method void setUpdatedTime(integer $UpdatedTime) 设置部署组更新时间戳
 * @method string getDeployDesc() 获取部署应用描述信息
 * @method void setDeployDesc(string $DeployDesc) 设置部署应用描述信息
 * @method string getAlias() 获取部署组备注
 * @method void setAlias(string $Alias) 设置部署组备注
 */
class VmGroupSimple extends AbstractModel
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
     * @var string 应用类型
     */
    public $ApplicationType;

    /**
     * @var string 部署组描述
     */
    public $GroupDesc;

    /**
     * @var string 部署组更新时间
     */
    public $UpdateTime;

    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 部署组启动参数
     */
    public $StartupParameters;

    /**
     * @var string 命名空间ID
     */
    public $NamespaceId;

    /**
     * @var string 部署组创建时间
     */
    public $CreateTime;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string 应用ID
     */
    public $ApplicationId;

    /**
     * @var string 应用名称
     */
    public $ApplicationName;

    /**
     * @var string 命名空间名称
     */
    public $NamespaceName;

    /**
     * @var string 应用微服务类型
     */
    public $MicroserviceType;

    /**
     * @var string 部署组资源类型
     */
    public $GroupResourceType;

    /**
     * @var integer 部署组更新时间戳
     */
    public $UpdatedTime;

    /**
     * @var string 部署应用描述信息
     */
    public $DeployDesc;

    /**
     * @var string 部署组备注
     */
    public $Alias;

    /**
     * @param string $GroupId 部署组ID
     * @param string $GroupName 部署组名称
     * @param string $ApplicationType 应用类型
     * @param string $GroupDesc 部署组描述
     * @param string $UpdateTime 部署组更新时间
     * @param string $ClusterId 集群ID
     * @param string $StartupParameters 部署组启动参数
     * @param string $NamespaceId 命名空间ID
     * @param string $CreateTime 部署组创建时间
     * @param string $ClusterName 集群名称
     * @param string $ApplicationId 应用ID
     * @param string $ApplicationName 应用名称
     * @param string $NamespaceName 命名空间名称
     * @param string $MicroserviceType 应用微服务类型
     * @param string $GroupResourceType 部署组资源类型
     * @param integer $UpdatedTime 部署组更新时间戳
     * @param string $DeployDesc 部署应用描述信息
     * @param string $Alias 部署组备注
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

        if (array_key_exists("ApplicationType",$param) and $param["ApplicationType"] !== null) {
            $this->ApplicationType = $param["ApplicationType"];
        }

        if (array_key_exists("GroupDesc",$param) and $param["GroupDesc"] !== null) {
            $this->GroupDesc = $param["GroupDesc"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("StartupParameters",$param) and $param["StartupParameters"] !== null) {
            $this->StartupParameters = $param["StartupParameters"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("MicroserviceType",$param) and $param["MicroserviceType"] !== null) {
            $this->MicroserviceType = $param["MicroserviceType"];
        }

        if (array_key_exists("GroupResourceType",$param) and $param["GroupResourceType"] !== null) {
            $this->GroupResourceType = $param["GroupResourceType"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }

        if (array_key_exists("DeployDesc",$param) and $param["DeployDesc"] !== null) {
            $this->DeployDesc = $param["DeployDesc"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }
    }
}
