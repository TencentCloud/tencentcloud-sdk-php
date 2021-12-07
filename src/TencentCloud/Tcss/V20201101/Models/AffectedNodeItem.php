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
 * 受影响的节点类型结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getClusterName() 获取集群名字
 * @method void setClusterName(string $ClusterName) 设置集群名字
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method string getPrivateIpAddresses() 获取内网ip地址
 * @method void setPrivateIpAddresses(string $PrivateIpAddresses) 设置内网ip地址
 * @method string getInstanceRole() 获取节点的角色，Master、Work等
 * @method void setInstanceRole(string $InstanceRole) 设置节点的角色，Master、Work等
 * @method string getClusterVersion() 获取k8s版本
 * @method void setClusterVersion(string $ClusterVersion) 设置k8s版本
 * @method string getContainerRuntime() 获取运行时组件,docker或者containerd
 * @method void setContainerRuntime(string $ContainerRuntime) 设置运行时组件,docker或者containerd
 * @method string getRegion() 获取区域
 * @method void setRegion(string $Region) 设置区域
 * @method string getVerifyInfo() 获取检查结果的验证信息
 * @method void setVerifyInfo(string $VerifyInfo) 设置检查结果的验证信息
 */
class AffectedNodeItem extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 集群名字
     */
    public $ClusterName;

    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var string 内网ip地址
     */
    public $PrivateIpAddresses;

    /**
     * @var string 节点的角色，Master、Work等
     */
    public $InstanceRole;

    /**
     * @var string k8s版本
     */
    public $ClusterVersion;

    /**
     * @var string 运行时组件,docker或者containerd
     */
    public $ContainerRuntime;

    /**
     * @var string 区域
     */
    public $Region;

    /**
     * @var string 检查结果的验证信息
     */
    public $VerifyInfo;

    /**
     * @param string $ClusterId 集群ID
     * @param string $ClusterName 集群名字
     * @param string $InstanceId 实例id
     * @param string $PrivateIpAddresses 内网ip地址
     * @param string $InstanceRole 节点的角色，Master、Work等
     * @param string $ClusterVersion k8s版本
     * @param string $ContainerRuntime 运行时组件,docker或者containerd
     * @param string $Region 区域
     * @param string $VerifyInfo 检查结果的验证信息
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("PrivateIpAddresses",$param) and $param["PrivateIpAddresses"] !== null) {
            $this->PrivateIpAddresses = $param["PrivateIpAddresses"];
        }

        if (array_key_exists("InstanceRole",$param) and $param["InstanceRole"] !== null) {
            $this->InstanceRole = $param["InstanceRole"];
        }

        if (array_key_exists("ClusterVersion",$param) and $param["ClusterVersion"] !== null) {
            $this->ClusterVersion = $param["ClusterVersion"];
        }

        if (array_key_exists("ContainerRuntime",$param) and $param["ContainerRuntime"] !== null) {
            $this->ContainerRuntime = $param["ContainerRuntime"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("VerifyInfo",$param) and $param["VerifyInfo"] !== null) {
            $this->VerifyInfo = $param["VerifyInfo"];
        }
    }
}
