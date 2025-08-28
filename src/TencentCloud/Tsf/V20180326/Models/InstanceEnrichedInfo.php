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
 * 包含虚拟机所在TSF中的位置信息
 *
 * @method string getInstanceId() 获取机器ID
 * @method void setInstanceId(string $InstanceId) 设置机器ID
 * @method string getInstanceName() 获取机器名称
 * @method void setInstanceName(string $InstanceName) 设置机器名称
 * @method string getLanIp() 获取机器内网IP
 * @method void setLanIp(string $LanIp) 设置机器内网IP
 * @method string getWanIp() 获取机器外网IP
 * @method void setWanIp(string $WanIp) 设置机器外网IP
 * @method string getVpcId() 获取机器所在VPC
 * @method void setVpcId(string $VpcId) 设置机器所在VPC
 * @method string getInstanceStatus() 获取机器运行状态，枚举值为：
- `Pending`: 准备中
-  `Running`: 运行中
-  `Stopped`: 已停止
-  `Rebooting`: 重启中
-  `Starting`: 启动中
-  `Stopping`: 停止中
-  `Abnormal`: 异常
-  `Unknown`: 未知
-  `Offline`: 离线 
 * @method void setInstanceStatus(string $InstanceStatus) 设置机器运行状态，枚举值为：
- `Pending`: 准备中
-  `Running`: 运行中
-  `Stopped`: 已停止
-  `Rebooting`: 重启中
-  `Starting`: 启动中
-  `Stopping`: 停止中
-  `Abnormal`: 异常
-  `Unknown`: 未知
-  `Offline`: 离线 
 * @method string getInstanceAvailableStatus() 获取机器可用状态（表示机器上的Agent在线）
 * @method void setInstanceAvailableStatus(string $InstanceAvailableStatus) 设置机器可用状态（表示机器上的Agent在线）
 * @method string getApplicationId() 获取应用ID
 * @method void setApplicationId(string $ApplicationId) 设置应用ID
 * @method string getApplicationName() 获取应用名称
 * @method void setApplicationName(string $ApplicationName) 设置应用名称
 * @method string getApplicationType() 获取应用类型，C表示容器应用，V表示虚拟机应用
 * @method void setApplicationType(string $ApplicationType) 设置应用类型，C表示容器应用，V表示虚拟机应用
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getClusterType() 获取集群类型，C表示容器集群，V表示虚拟机集群
 * @method void setClusterType(string $ClusterType) 设置集群类型，C表示容器集群，V表示虚拟机集群
 * @method string getNamespaceId() 获取命名空间ID
 * @method void setNamespaceId(string $NamespaceId) 设置命名空间ID
 * @method string getNamespaceName() 获取命名空间名称
 * @method void setNamespaceName(string $NamespaceName) 设置命名空间名称
 * @method string getGroupId() 获取机器所在部署组ID
 * @method void setGroupId(string $GroupId) 设置机器所在部署组ID
 * @method string getGroupName() 获取部署组名称
 * @method void setGroupName(string $GroupName) 设置部署组名称
 */
class InstanceEnrichedInfo extends AbstractModel
{
    /**
     * @var string 机器ID
     */
    public $InstanceId;

    /**
     * @var string 机器名称
     */
    public $InstanceName;

    /**
     * @var string 机器内网IP
     */
    public $LanIp;

    /**
     * @var string 机器外网IP
     */
    public $WanIp;

    /**
     * @var string 机器所在VPC
     */
    public $VpcId;

    /**
     * @var string 机器运行状态，枚举值为：
- `Pending`: 准备中
-  `Running`: 运行中
-  `Stopped`: 已停止
-  `Rebooting`: 重启中
-  `Starting`: 启动中
-  `Stopping`: 停止中
-  `Abnormal`: 异常
-  `Unknown`: 未知
-  `Offline`: 离线 
     */
    public $InstanceStatus;

    /**
     * @var string 机器可用状态（表示机器上的Agent在线）
     */
    public $InstanceAvailableStatus;

    /**
     * @var string 应用ID
     */
    public $ApplicationId;

    /**
     * @var string 应用名称
     */
    public $ApplicationName;

    /**
     * @var string 应用类型，C表示容器应用，V表示虚拟机应用
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
     * @var string 集群类型，C表示容器集群，V表示虚拟机集群
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
     * @var string 机器所在部署组ID
     */
    public $GroupId;

    /**
     * @var string 部署组名称
     */
    public $GroupName;

    /**
     * @param string $InstanceId 机器ID
     * @param string $InstanceName 机器名称
     * @param string $LanIp 机器内网IP
     * @param string $WanIp 机器外网IP
     * @param string $VpcId 机器所在VPC
     * @param string $InstanceStatus 机器运行状态，枚举值为：
- `Pending`: 准备中
-  `Running`: 运行中
-  `Stopped`: 已停止
-  `Rebooting`: 重启中
-  `Starting`: 启动中
-  `Stopping`: 停止中
-  `Abnormal`: 异常
-  `Unknown`: 未知
-  `Offline`: 离线 
     * @param string $InstanceAvailableStatus 机器可用状态（表示机器上的Agent在线）
     * @param string $ApplicationId 应用ID
     * @param string $ApplicationName 应用名称
     * @param string $ApplicationType 应用类型，C表示容器应用，V表示虚拟机应用
     * @param string $ClusterId 集群ID
     * @param string $ClusterName 集群名称
     * @param string $ClusterType 集群类型，C表示容器集群，V表示虚拟机集群
     * @param string $NamespaceId 命名空间ID
     * @param string $NamespaceName 命名空间名称
     * @param string $GroupId 机器所在部署组ID
     * @param string $GroupName 部署组名称
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("LanIp",$param) and $param["LanIp"] !== null) {
            $this->LanIp = $param["LanIp"];
        }

        if (array_key_exists("WanIp",$param) and $param["WanIp"] !== null) {
            $this->WanIp = $param["WanIp"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("InstanceAvailableStatus",$param) and $param["InstanceAvailableStatus"] !== null) {
            $this->InstanceAvailableStatus = $param["InstanceAvailableStatus"];
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

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }
    }
}
