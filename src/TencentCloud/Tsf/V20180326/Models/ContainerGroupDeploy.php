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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取部署组
 *
 * @method string getGroupId() 获取部署组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupId(string $GroupId) 设置部署组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupName() 获取分组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupName(string $GroupName) 设置分组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstanceNum() 获取实例总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceNum(integer $InstanceNum) 设置实例总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCurrentNum() 获取已启动实例总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurrentNum(integer $CurrentNum) 设置已启动实例总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServer() 获取镜像server
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServer(string $Server) 设置镜像server
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReponame() 获取镜像名，如/tsf/nginx
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReponame(string $Reponame) 设置镜像名，如/tsf/nginx
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTagName() 获取镜像版本名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagName(string $TagName) 设置镜像版本名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCpuRequest() 获取业务容器初始分配的 CPU 核数，对应 K8S request
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpuRequest(string $CpuRequest) 设置业务容器初始分配的 CPU 核数，对应 K8S request
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCpuLimit() 获取业务容器最大分配的 CPU 核数，对应 K8S limit
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpuLimit(string $CpuLimit) 设置业务容器最大分配的 CPU 核数，对应 K8S limit
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMemRequest() 获取业务容器初始分配的内存 MiB 数，对应 K8S request
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemRequest(string $MemRequest) 设置业务容器初始分配的内存 MiB 数，对应 K8S request
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMemLimit() 获取业务容器最大分配的内存 MiB 数，对应 K8S limit
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemLimit(string $MemLimit) 设置业务容器最大分配的内存 MiB 数，对应 K8S limit
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAccessType() 获取0:公网 1:集群内访问 2：NodePort
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessType(integer $AccessType) 设置0:公网 1:集群内访问 2：NodePort
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProtocolPorts() 获取端口映射
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtocolPorts(array $ProtocolPorts) 设置端口映射
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateType() 获取更新方式：0:快速更新 1:滚动更新
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateType(integer $UpdateType) 设置更新方式：0:快速更新 1:滚动更新
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateIvl() 获取更新间隔,单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateIvl(integer $UpdateIvl) 设置更新间隔,单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJvmOpts() 获取jvm参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJvmOpts(string $JvmOpts) 设置jvm参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取子网id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置子网id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAgentCpuRequest() 获取agent容器初始分配的 CPU 核数，对应 K8S request
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentCpuRequest(string $AgentCpuRequest) 设置agent容器初始分配的 CPU 核数，对应 K8S request
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAgentCpuLimit() 获取agent容器最大分配的 CPU 核数，对应 K8S limit
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentCpuLimit(string $AgentCpuLimit) 设置agent容器最大分配的 CPU 核数，对应 K8S limit
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAgentMemRequest() 获取agent容器初始分配的内存 MiB 数，对应 K8S request
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentMemRequest(string $AgentMemRequest) 设置agent容器初始分配的内存 MiB 数，对应 K8S request
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAgentMemLimit() 获取agent容器最大分配的内存 MiB 数，对应 K8S limit
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentMemLimit(string $AgentMemLimit) 设置agent容器最大分配的内存 MiB 数，对应 K8S limit
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIstioCpuRequest() 获取istioproxy容器初始分配的 CPU 核数，对应 K8S request
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIstioCpuRequest(string $IstioCpuRequest) 设置istioproxy容器初始分配的 CPU 核数，对应 K8S request
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIstioCpuLimit() 获取istioproxy容器最大分配的 CPU 核数，对应 K8S limit
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIstioCpuLimit(string $IstioCpuLimit) 设置istioproxy容器最大分配的 CPU 核数，对应 K8S limit
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIstioMemRequest() 获取istioproxy容器初始分配的内存 MiB 数，对应 K8S request
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIstioMemRequest(string $IstioMemRequest) 设置istioproxy容器初始分配的内存 MiB 数，对应 K8S request
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIstioMemLimit() 获取istioproxy容器最大分配的内存 MiB 数，对应 K8S limit
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIstioMemLimit(string $IstioMemLimit) 设置istioproxy容器最大分配的内存 MiB 数，对应 K8S limit
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEnvs() 获取部署组的环境变量数组，这里没有展示 tsf 使用的环境变量，只展示了用户设置的环境变量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnvs(array $Envs) 设置部署组的环境变量数组，这里没有展示 tsf 使用的环境变量，只展示了用户设置的环境变量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method HealthCheckSettings getHealthCheckSettings() 获取健康检查配置信息，若不指定该参数，则默认不设置健康检查。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHealthCheckSettings(HealthCheckSettings $HealthCheckSettings) 设置健康检查配置信息，若不指定该参数，则默认不设置健康检查。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDeployAgent() 获取是否部署Agent容器
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeployAgent(boolean $DeployAgent) 设置是否部署Agent容器
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlias() 获取部署组备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlias(string $Alias) 设置部署组备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDisableService() 获取是否创建 k8s service
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisableService(boolean $DisableService) 设置是否创建 k8s service
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getHeadlessService() 获取service 是否为 headless 类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeadlessService(boolean $HeadlessService) 设置service 是否为 headless 类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method TcrRepoInfo getTcrRepoInfo() 获取TcrRepoInfo值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTcrRepoInfo(TcrRepoInfo $TcrRepoInfo) 设置TcrRepoInfo值
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVolumeInfos() 获取数据卷信息，list
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVolumeInfos(array $VolumeInfos) 设置数据卷信息，list
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVolumeMountInfos() 获取数据卷挂载信息，list
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVolumeMountInfos(array $VolumeMountInfos) 设置数据卷挂载信息，list
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getKubeInjectEnable() 获取KubeInjectEnable值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKubeInjectEnable(boolean $KubeInjectEnable) 设置KubeInjectEnable值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRepoType() 获取仓库类型 (person, tcr)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRepoType(string $RepoType) 设置仓库类型 (person, tcr)
注意：此字段可能返回 null，表示取不到有效值。
 * @method WarmupSetting getWarmupSetting() 获取预热配置设置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWarmupSetting(WarmupSetting $WarmupSetting) 设置预热配置设置
注意：此字段可能返回 null，表示取不到有效值。
 * @method GatewayConfig getGatewayConfig() 获取Envoy网关服务配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGatewayConfig(GatewayConfig $GatewayConfig) 设置Envoy网关服务配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class ContainerGroupDeploy extends AbstractModel
{
    /**
     * @var string 部署组id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupId;

    /**
     * @var string 分组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupName;

    /**
     * @var integer 实例总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceNum;

    /**
     * @var integer 已启动实例总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CurrentNum;

    /**
     * @var string 镜像server
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Server;

    /**
     * @var string 镜像名，如/tsf/nginx
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Reponame;

    /**
     * @var string 镜像版本名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagName;

    /**
     * @var string 业务容器初始分配的 CPU 核数，对应 K8S request
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CpuRequest;

    /**
     * @var string 业务容器最大分配的 CPU 核数，对应 K8S limit
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CpuLimit;

    /**
     * @var string 业务容器初始分配的内存 MiB 数，对应 K8S request
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemRequest;

    /**
     * @var string 业务容器最大分配的内存 MiB 数，对应 K8S limit
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemLimit;

    /**
     * @var integer 0:公网 1:集群内访问 2：NodePort
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessType;

    /**
     * @var array 端口映射
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProtocolPorts;

    /**
     * @var integer 更新方式：0:快速更新 1:滚动更新
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateType;

    /**
     * @var integer 更新间隔,单位秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateIvl;

    /**
     * @var string jvm参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JvmOpts;

    /**
     * @var string 子网id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var string agent容器初始分配的 CPU 核数，对应 K8S request
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentCpuRequest;

    /**
     * @var string agent容器最大分配的 CPU 核数，对应 K8S limit
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentCpuLimit;

    /**
     * @var string agent容器初始分配的内存 MiB 数，对应 K8S request
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentMemRequest;

    /**
     * @var string agent容器最大分配的内存 MiB 数，对应 K8S limit
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentMemLimit;

    /**
     * @var string istioproxy容器初始分配的 CPU 核数，对应 K8S request
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IstioCpuRequest;

    /**
     * @var string istioproxy容器最大分配的 CPU 核数，对应 K8S limit
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IstioCpuLimit;

    /**
     * @var string istioproxy容器初始分配的内存 MiB 数，对应 K8S request
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IstioMemRequest;

    /**
     * @var string istioproxy容器最大分配的内存 MiB 数，对应 K8S limit
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IstioMemLimit;

    /**
     * @var array 部署组的环境变量数组，这里没有展示 tsf 使用的环境变量，只展示了用户设置的环境变量。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Envs;

    /**
     * @var HealthCheckSettings 健康检查配置信息，若不指定该参数，则默认不设置健康检查。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HealthCheckSettings;

    /**
     * @var boolean 是否部署Agent容器
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeployAgent;

    /**
     * @var string 部署组备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Alias;

    /**
     * @var boolean 是否创建 k8s service
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisableService;

    /**
     * @var boolean service 是否为 headless 类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HeadlessService;

    /**
     * @var TcrRepoInfo TcrRepoInfo值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TcrRepoInfo;

    /**
     * @var array 数据卷信息，list
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VolumeInfos;

    /**
     * @var array 数据卷挂载信息，list
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VolumeMountInfos;

    /**
     * @var boolean KubeInjectEnable值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KubeInjectEnable;

    /**
     * @var string 仓库类型 (person, tcr)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RepoType;

    /**
     * @var WarmupSetting 预热配置设置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WarmupSetting;

    /**
     * @var GatewayConfig Envoy网关服务配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GatewayConfig;

    /**
     * @param string $GroupId 部署组id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupName 分组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstanceNum 实例总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CurrentNum 已启动实例总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Server 镜像server
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Reponame 镜像名，如/tsf/nginx
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TagName 镜像版本名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CpuRequest 业务容器初始分配的 CPU 核数，对应 K8S request
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CpuLimit 业务容器最大分配的 CPU 核数，对应 K8S limit
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MemRequest 业务容器初始分配的内存 MiB 数，对应 K8S request
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MemLimit 业务容器最大分配的内存 MiB 数，对应 K8S limit
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AccessType 0:公网 1:集群内访问 2：NodePort
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ProtocolPorts 端口映射
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateType 更新方式：0:快速更新 1:滚动更新
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateIvl 更新间隔,单位秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JvmOpts jvm参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId 子网id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AgentCpuRequest agent容器初始分配的 CPU 核数，对应 K8S request
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AgentCpuLimit agent容器最大分配的 CPU 核数，对应 K8S limit
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AgentMemRequest agent容器初始分配的内存 MiB 数，对应 K8S request
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AgentMemLimit agent容器最大分配的内存 MiB 数，对应 K8S limit
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IstioCpuRequest istioproxy容器初始分配的 CPU 核数，对应 K8S request
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IstioCpuLimit istioproxy容器最大分配的 CPU 核数，对应 K8S limit
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IstioMemRequest istioproxy容器初始分配的内存 MiB 数，对应 K8S request
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IstioMemLimit istioproxy容器最大分配的内存 MiB 数，对应 K8S limit
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Envs 部署组的环境变量数组，这里没有展示 tsf 使用的环境变量，只展示了用户设置的环境变量。
注意：此字段可能返回 null，表示取不到有效值。
     * @param HealthCheckSettings $HealthCheckSettings 健康检查配置信息，若不指定该参数，则默认不设置健康检查。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $DeployAgent 是否部署Agent容器
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Alias 部署组备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $DisableService 是否创建 k8s service
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $HeadlessService service 是否为 headless 类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param TcrRepoInfo $TcrRepoInfo TcrRepoInfo值
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $VolumeInfos 数据卷信息，list
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $VolumeMountInfos 数据卷挂载信息，list
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $KubeInjectEnable KubeInjectEnable值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RepoType 仓库类型 (person, tcr)
注意：此字段可能返回 null，表示取不到有效值。
     * @param WarmupSetting $WarmupSetting 预热配置设置
注意：此字段可能返回 null，表示取不到有效值。
     * @param GatewayConfig $GatewayConfig Envoy网关服务配置
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("InstanceNum",$param) and $param["InstanceNum"] !== null) {
            $this->InstanceNum = $param["InstanceNum"];
        }

        if (array_key_exists("CurrentNum",$param) and $param["CurrentNum"] !== null) {
            $this->CurrentNum = $param["CurrentNum"];
        }

        if (array_key_exists("Server",$param) and $param["Server"] !== null) {
            $this->Server = $param["Server"];
        }

        if (array_key_exists("Reponame",$param) and $param["Reponame"] !== null) {
            $this->Reponame = $param["Reponame"];
        }

        if (array_key_exists("TagName",$param) and $param["TagName"] !== null) {
            $this->TagName = $param["TagName"];
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

        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("ProtocolPorts",$param) and $param["ProtocolPorts"] !== null) {
            $this->ProtocolPorts = [];
            foreach ($param["ProtocolPorts"] as $key => $value){
                $obj = new ProtocolPort();
                $obj->deserialize($value);
                array_push($this->ProtocolPorts, $obj);
            }
        }

        if (array_key_exists("UpdateType",$param) and $param["UpdateType"] !== null) {
            $this->UpdateType = $param["UpdateType"];
        }

        if (array_key_exists("UpdateIvl",$param) and $param["UpdateIvl"] !== null) {
            $this->UpdateIvl = $param["UpdateIvl"];
        }

        if (array_key_exists("JvmOpts",$param) and $param["JvmOpts"] !== null) {
            $this->JvmOpts = $param["JvmOpts"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("AgentCpuRequest",$param) and $param["AgentCpuRequest"] !== null) {
            $this->AgentCpuRequest = $param["AgentCpuRequest"];
        }

        if (array_key_exists("AgentCpuLimit",$param) and $param["AgentCpuLimit"] !== null) {
            $this->AgentCpuLimit = $param["AgentCpuLimit"];
        }

        if (array_key_exists("AgentMemRequest",$param) and $param["AgentMemRequest"] !== null) {
            $this->AgentMemRequest = $param["AgentMemRequest"];
        }

        if (array_key_exists("AgentMemLimit",$param) and $param["AgentMemLimit"] !== null) {
            $this->AgentMemLimit = $param["AgentMemLimit"];
        }

        if (array_key_exists("IstioCpuRequest",$param) and $param["IstioCpuRequest"] !== null) {
            $this->IstioCpuRequest = $param["IstioCpuRequest"];
        }

        if (array_key_exists("IstioCpuLimit",$param) and $param["IstioCpuLimit"] !== null) {
            $this->IstioCpuLimit = $param["IstioCpuLimit"];
        }

        if (array_key_exists("IstioMemRequest",$param) and $param["IstioMemRequest"] !== null) {
            $this->IstioMemRequest = $param["IstioMemRequest"];
        }

        if (array_key_exists("IstioMemLimit",$param) and $param["IstioMemLimit"] !== null) {
            $this->IstioMemLimit = $param["IstioMemLimit"];
        }

        if (array_key_exists("Envs",$param) and $param["Envs"] !== null) {
            $this->Envs = [];
            foreach ($param["Envs"] as $key => $value){
                $obj = new Env();
                $obj->deserialize($value);
                array_push($this->Envs, $obj);
            }
        }

        if (array_key_exists("HealthCheckSettings",$param) and $param["HealthCheckSettings"] !== null) {
            $this->HealthCheckSettings = new HealthCheckSettings();
            $this->HealthCheckSettings->deserialize($param["HealthCheckSettings"]);
        }

        if (array_key_exists("DeployAgent",$param) and $param["DeployAgent"] !== null) {
            $this->DeployAgent = $param["DeployAgent"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("DisableService",$param) and $param["DisableService"] !== null) {
            $this->DisableService = $param["DisableService"];
        }

        if (array_key_exists("HeadlessService",$param) and $param["HeadlessService"] !== null) {
            $this->HeadlessService = $param["HeadlessService"];
        }

        if (array_key_exists("TcrRepoInfo",$param) and $param["TcrRepoInfo"] !== null) {
            $this->TcrRepoInfo = new TcrRepoInfo();
            $this->TcrRepoInfo->deserialize($param["TcrRepoInfo"]);
        }

        if (array_key_exists("VolumeInfos",$param) and $param["VolumeInfos"] !== null) {
            $this->VolumeInfos = [];
            foreach ($param["VolumeInfos"] as $key => $value){
                $obj = new VolumeInfo();
                $obj->deserialize($value);
                array_push($this->VolumeInfos, $obj);
            }
        }

        if (array_key_exists("VolumeMountInfos",$param) and $param["VolumeMountInfos"] !== null) {
            $this->VolumeMountInfos = [];
            foreach ($param["VolumeMountInfos"] as $key => $value){
                $obj = new VolumeMountInfo();
                $obj->deserialize($value);
                array_push($this->VolumeMountInfos, $obj);
            }
        }

        if (array_key_exists("KubeInjectEnable",$param) and $param["KubeInjectEnable"] !== null) {
            $this->KubeInjectEnable = $param["KubeInjectEnable"];
        }

        if (array_key_exists("RepoType",$param) and $param["RepoType"] !== null) {
            $this->RepoType = $param["RepoType"];
        }

        if (array_key_exists("WarmupSetting",$param) and $param["WarmupSetting"] !== null) {
            $this->WarmupSetting = new WarmupSetting();
            $this->WarmupSetting->deserialize($param["WarmupSetting"]);
        }

        if (array_key_exists("GatewayConfig",$param) and $param["GatewayConfig"] !== null) {
            $this->GatewayConfig = new GatewayConfig();
            $this->GatewayConfig->deserialize($param["GatewayConfig"]);
        }
    }
}
