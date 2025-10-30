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
 * DeployContainerApplication请求参数结构体
 *
 * @method string getApplicationId() 获取应用ID
 * @method void setApplicationId(string $ApplicationId) 设置应用ID
 * @method ContainerGroupObservabilityConfig getObservabilityConfig() 获取可观测配置
 * @method void setObservabilityConfig(ContainerGroupObservabilityConfig $ObservabilityConfig) 设置可观测配置
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getGroupId() 获取部署组ID，分组唯一标识
 * @method void setGroupId(string $GroupId) 设置部署组ID，分组唯一标识
 * @method array getEnvs() 获取业务容器的环境变量参数
 * @method void setEnvs(array $Envs) 设置业务容器的环境变量参数
 * @method array getVolumeMountInfoList() 获取业务容器的挂载信息
 * @method void setVolumeMountInfoList(array $VolumeMountInfoList) 设置业务容器的挂载信息
 * @method array getLifeCycleHookList() 获取业务主容器生命周期钩子列表
 * @method void setLifeCycleHookList(array $LifeCycleHookList) 设置业务主容器生命周期钩子列表
 * @method array getAdditionalContainerList() 获取附属容器列表
 * @method void setAdditionalContainerList(array $AdditionalContainerList) 设置附属容器列表
 * @method array getVolumeInfoList() 获取容器卷信息
 * @method void setVolumeInfoList(array $VolumeInfoList) 设置容器卷信息
 * @method array getServiceSettingList() 获取Service访问配置列表
 * @method void setServiceSettingList(array $ServiceSettingList) 设置Service访问配置列表
 * @method string getAlias() 获取备注
 * @method void setAlias(string $Alias) 设置备注
 * @method string getGroupName() 获取部署组名称
 * @method void setGroupName(string $GroupName) 设置部署组名称
 * @method array getTags() 获取标签列表
 * @method void setTags(array $Tags) 设置标签列表
 * @method string getContainerKind() 获取容器类型
 * @method void setContainerKind(string $ContainerKind) 设置容器类型
 * @method string getServer() 获取业务容器的 镜像Server ccr.ccs.tencentyun.com
 * @method void setServer(string $Server) 设置业务容器的 镜像Server ccr.ccs.tencentyun.com
 * @method string getRepoName() 获取业务容器的镜像名
 * @method void setRepoName(string $RepoName) 设置业务容器的镜像名
 * @method string getRepoType() 获取仓库类型
 * @method void setRepoType(string $RepoType) 设置仓库类型
 * @method TcrRepoInfo getTcrRepoInfo() 获取TCR仓库信息
 * @method void setTcrRepoInfo(TcrRepoInfo $TcrRepoInfo) 设置TCR仓库信息
 * @method string getSecretName() 获取容器访问凭证名称
 * @method void setSecretName(string $SecretName) 设置容器访问凭证名称
 * @method string getTagName() 获取业务容器的镜像版本号
 * @method void setTagName(string $TagName) 设置业务容器的镜像版本号
 * @method HealthCheckSettings getHealthCheckSettings() 获取健康检查
 * @method void setHealthCheckSettings(HealthCheckSettings $HealthCheckSettings) 设置健康检查
 * @method string getCpuRequest() 获取业务容器的 cpu  request
 * @method void setCpuRequest(string $CpuRequest) 设置业务容器的 cpu  request
 * @method string getCpuLimit() 获取业务容器的 cpu limit
 * @method void setCpuLimit(string $CpuLimit) 设置业务容器的 cpu limit
 * @method string getMemRequest() 获取业务容器的 mem request
 * @method void setMemRequest(string $MemRequest) 设置业务容器的 mem request
 * @method string getMemLimit() 获取业务容器的 mem limit
 * @method void setMemLimit(string $MemLimit) 设置业务容器的 mem limit
 * @method string getJvmOpts() 获取业务容器的 jvm 参数
 * @method void setJvmOpts(string $JvmOpts) 设置业务容器的 jvm 参数
 * @method boolean getInitContainerEnable() 获取是否为初始化容器 业务主容器不能为初始化容
 * @method void setInitContainerEnable(boolean $InitContainerEnable) 设置是否为初始化容器 业务主容器不能为初始化容
 * @method boolean getPrivilegeContainerEnable() 获取业务主容器是否为特权容器
 * @method void setPrivilegeContainerEnable(boolean $PrivilegeContainerEnable) 设置业务主容器是否为特权容器
 * @method string getRunCommand() 获取业务主容器运行命令(转base64)
 * @method void setRunCommand(string $RunCommand) 设置业务主容器运行命令(转base64)
 * @method string getRunArg() 获取业务主容器运行参数(转base64)
 * @method void setRunArg(string $RunArg) 设置业务主容器运行参数(转base64)
 * @method integer getInstanceNum() 获取实例数量
 * @method void setInstanceNum(integer $InstanceNum) 设置实例数量
 * @method SchedulingStrategy getSchedulingStrategy() 获取调度策略
 * @method void setSchedulingStrategy(SchedulingStrategy $SchedulingStrategy) 设置调度策略
 * @method string getRestartPolicy() 获取重启策略
 * @method void setRestartPolicy(string $RestartPolicy) 设置重启策略
 * @method string getServiceSpecEncode() 获取服务治理配置
 * @method void setServiceSpecEncode(string $ServiceSpecEncode) 设置服务治理配置
 * @method string getIstioMemRequest() 获取istio容器的 mem Request
 * @method void setIstioMemRequest(string $IstioMemRequest) 设置istio容器的 mem Request
 * @method string getIstioCpuRequest() 获取 istio容器的 cpu Request
 * @method void setIstioCpuRequest(string $IstioCpuRequest) 设置 istio容器的 cpu Request
 * @method string getIstioMemLimit() 获取istio容器的 mem Limit
 * @method void setIstioMemLimit(string $IstioMemLimit) 设置istio容器的 mem Limit
 * @method string getIstioCpuLimit() 获取istio容器的 cpu Limit
 * @method void setIstioCpuLimit(string $IstioCpuLimit) 设置istio容器的 cpu Limit
 * @method ContainerGroupServiceGovernanceConfig getServiceGovernanceConfig() 获取服务治理配置
 * @method void setServiceGovernanceConfig(ContainerGroupServiceGovernanceConfig $ServiceGovernanceConfig) 设置服务治理配置
 * @method string getAgentMemRequest() 获取agent容器的 mem Request
 * @method void setAgentMemRequest(string $AgentMemRequest) 设置agent容器的 mem Request
 * @method string getAgentCpuRequest() 获取agent容器的 cpu Request
 * @method void setAgentCpuRequest(string $AgentCpuRequest) 设置agent容器的 cpu Request
 * @method string getAgentMemLimit() 获取agent容器的 mem Limit
 * @method void setAgentMemLimit(string $AgentMemLimit) 设置agent容器的 mem Limit
 * @method string getAgentCpuLimit() 获取agent容器的 cpu Limit
 * @method void setAgentCpuLimit(string $AgentCpuLimit) 设置agent容器的 cpu Limit
 * @method integer getUpdateType() 获取发布策略(0表示快速更新，1表示滚动更新。默认值为0)
 * @method void setUpdateType(integer $UpdateType) 设置发布策略(0表示快速更新，1表示滚动更新。默认值为0)
 * @method integer getUpdateIvl() 获取更新间隔,单位秒
 * @method void setUpdateIvl(integer $UpdateIvl) 设置更新间隔,单位秒
 * @method string getMaxSurge() 获取对应更新策略和策略配置参数
 * @method void setMaxSurge(string $MaxSurge) 设置对应更新策略和策略配置参数
 * @method string getMaxUnavailable() 获取对应更新策略和策略配置参数
 * @method void setMaxUnavailable(string $MaxUnavailable) 设置对应更新策略和策略配置参数
 * @method WarmupSetting getWarmupSetting() 获取预热参数配置
 * @method void setWarmupSetting(WarmupSetting $WarmupSetting) 设置预热参数配置
 * @method string getConfigTemplateId() 获取配置模版ID
 * @method void setConfigTemplateId(string $ConfigTemplateId) 设置配置模版ID
 * @method integer getConfigTemplateVersion() 获取配置模版Version
 * @method void setConfigTemplateVersion(integer $ConfigTemplateVersion) 设置配置模版Version
 * @method boolean getVolumeClean() 获取是否清除数据卷信息
 * @method void setVolumeClean(boolean $VolumeClean) 设置是否清除数据卷信息
 * @method string getNamespaceId() 获取命名空间Id
 * @method void setNamespaceId(string $NamespaceId) 设置命名空间Id
 * @method boolean getDeployAgent() 获取是否部署agent容器
 * @method void setDeployAgent(boolean $DeployAgent) 设置是否部署agent容器
 * @method array getAgentProfileList() 获取javaagent信息: SERVICE_AGENT/OT_AGENT
 * @method void setAgentProfileList(array $AgentProfileList) 设置javaagent信息: SERVICE_AGENT/OT_AGENT
 * @method boolean getServiceClean() 获取是否清除Service信息
 * @method void setServiceClean(boolean $ServiceClean) 设置是否清除Service信息
 * @method boolean getEnvClean() 获取是否清除Env信息
 * @method void setEnvClean(boolean $EnvClean) 设置是否清除Env信息
 * @method string getDeployDesc() 获取本次部署的描述信息
 * @method void setDeployDesc(string $DeployDesc) 设置本次部署的描述信息
 * @method string getK8sNamespaceName() 获取k8s命名空间名称
 * @method void setK8sNamespaceName(string $K8sNamespaceName) 设置k8s命名空间名称
 * @method boolean getStaticIpEnabled() 获取是否启用静态IP
 * @method void setStaticIpEnabled(boolean $StaticIpEnabled) 设置是否启用静态IP
 * @method string getPodManagementPolicyType() 获取启动策略[OrderedReady/Parallel]
 * @method void setPodManagementPolicyType(string $PodManagementPolicyType) 设置启动策略[OrderedReady/Parallel]
 * @method integer getPartition() 获取滚动更新分区序号
 * @method void setPartition(integer $Partition) 设置滚动更新分区序号
 * @method boolean getIncrementalDeployment() 获取是否是增量部署，增量部署只运行增量覆盖一级参数，不支持对一级参数中的子参数进行增量更新，例如更新VolumeMountInfoList时必须传入VolumeMountInfoList更新后的全量参数
 * @method void setIncrementalDeployment(boolean $IncrementalDeployment) 设置是否是增量部署，增量部署只运行增量覆盖一级参数，不支持对一级参数中的子参数进行增量更新，例如更新VolumeMountInfoList时必须传入VolumeMountInfoList更新后的全量参数
 */
class DeployContainerApplicationRequest extends AbstractModel
{
    /**
     * @var string 应用ID
     */
    public $ApplicationId;

    /**
     * @var ContainerGroupObservabilityConfig 可观测配置
     */
    public $ObservabilityConfig;

    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 部署组ID，分组唯一标识
     */
    public $GroupId;

    /**
     * @var array 业务容器的环境变量参数
     */
    public $Envs;

    /**
     * @var array 业务容器的挂载信息
     */
    public $VolumeMountInfoList;

    /**
     * @var array 业务主容器生命周期钩子列表
     */
    public $LifeCycleHookList;

    /**
     * @var array 附属容器列表
     */
    public $AdditionalContainerList;

    /**
     * @var array 容器卷信息
     */
    public $VolumeInfoList;

    /**
     * @var array Service访问配置列表
     */
    public $ServiceSettingList;

    /**
     * @var string 备注
     */
    public $Alias;

    /**
     * @var string 部署组名称
     */
    public $GroupName;

    /**
     * @var array 标签列表
     */
    public $Tags;

    /**
     * @var string 容器类型
     */
    public $ContainerKind;

    /**
     * @var string 业务容器的 镜像Server ccr.ccs.tencentyun.com
     */
    public $Server;

    /**
     * @var string 业务容器的镜像名
     */
    public $RepoName;

    /**
     * @var string 仓库类型
     */
    public $RepoType;

    /**
     * @var TcrRepoInfo TCR仓库信息
     */
    public $TcrRepoInfo;

    /**
     * @var string 容器访问凭证名称
     */
    public $SecretName;

    /**
     * @var string 业务容器的镜像版本号
     */
    public $TagName;

    /**
     * @var HealthCheckSettings 健康检查
     */
    public $HealthCheckSettings;

    /**
     * @var string 业务容器的 cpu  request
     */
    public $CpuRequest;

    /**
     * @var string 业务容器的 cpu limit
     */
    public $CpuLimit;

    /**
     * @var string 业务容器的 mem request
     */
    public $MemRequest;

    /**
     * @var string 业务容器的 mem limit
     */
    public $MemLimit;

    /**
     * @var string 业务容器的 jvm 参数
     */
    public $JvmOpts;

    /**
     * @var boolean 是否为初始化容器 业务主容器不能为初始化容
     */
    public $InitContainerEnable;

    /**
     * @var boolean 业务主容器是否为特权容器
     */
    public $PrivilegeContainerEnable;

    /**
     * @var string 业务主容器运行命令(转base64)
     */
    public $RunCommand;

    /**
     * @var string 业务主容器运行参数(转base64)
     */
    public $RunArg;

    /**
     * @var integer 实例数量
     */
    public $InstanceNum;

    /**
     * @var SchedulingStrategy 调度策略
     */
    public $SchedulingStrategy;

    /**
     * @var string 重启策略
     */
    public $RestartPolicy;

    /**
     * @var string 服务治理配置
     */
    public $ServiceSpecEncode;

    /**
     * @var string istio容器的 mem Request
     */
    public $IstioMemRequest;

    /**
     * @var string  istio容器的 cpu Request
     */
    public $IstioCpuRequest;

    /**
     * @var string istio容器的 mem Limit
     */
    public $IstioMemLimit;

    /**
     * @var string istio容器的 cpu Limit
     */
    public $IstioCpuLimit;

    /**
     * @var ContainerGroupServiceGovernanceConfig 服务治理配置
     */
    public $ServiceGovernanceConfig;

    /**
     * @var string agent容器的 mem Request
     */
    public $AgentMemRequest;

    /**
     * @var string agent容器的 cpu Request
     */
    public $AgentCpuRequest;

    /**
     * @var string agent容器的 mem Limit
     */
    public $AgentMemLimit;

    /**
     * @var string agent容器的 cpu Limit
     */
    public $AgentCpuLimit;

    /**
     * @var integer 发布策略(0表示快速更新，1表示滚动更新。默认值为0)
     */
    public $UpdateType;

    /**
     * @var integer 更新间隔,单位秒
     */
    public $UpdateIvl;

    /**
     * @var string 对应更新策略和策略配置参数
     */
    public $MaxSurge;

    /**
     * @var string 对应更新策略和策略配置参数
     */
    public $MaxUnavailable;

    /**
     * @var WarmupSetting 预热参数配置
     */
    public $WarmupSetting;

    /**
     * @var string 配置模版ID
     */
    public $ConfigTemplateId;

    /**
     * @var integer 配置模版Version
     */
    public $ConfigTemplateVersion;

    /**
     * @var boolean 是否清除数据卷信息
     */
    public $VolumeClean;

    /**
     * @var string 命名空间Id
     */
    public $NamespaceId;

    /**
     * @var boolean 是否部署agent容器
     */
    public $DeployAgent;

    /**
     * @var array javaagent信息: SERVICE_AGENT/OT_AGENT
     */
    public $AgentProfileList;

    /**
     * @var boolean 是否清除Service信息
     */
    public $ServiceClean;

    /**
     * @var boolean 是否清除Env信息
     */
    public $EnvClean;

    /**
     * @var string 本次部署的描述信息
     */
    public $DeployDesc;

    /**
     * @var string k8s命名空间名称
     */
    public $K8sNamespaceName;

    /**
     * @var boolean 是否启用静态IP
     */
    public $StaticIpEnabled;

    /**
     * @var string 启动策略[OrderedReady/Parallel]
     */
    public $PodManagementPolicyType;

    /**
     * @var integer 滚动更新分区序号
     */
    public $Partition;

    /**
     * @var boolean 是否是增量部署，增量部署只运行增量覆盖一级参数，不支持对一级参数中的子参数进行增量更新，例如更新VolumeMountInfoList时必须传入VolumeMountInfoList更新后的全量参数
     */
    public $IncrementalDeployment;

    /**
     * @param string $ApplicationId 应用ID
     * @param ContainerGroupObservabilityConfig $ObservabilityConfig 可观测配置
     * @param string $ClusterId 集群ID
     * @param string $GroupId 部署组ID，分组唯一标识
     * @param array $Envs 业务容器的环境变量参数
     * @param array $VolumeMountInfoList 业务容器的挂载信息
     * @param array $LifeCycleHookList 业务主容器生命周期钩子列表
     * @param array $AdditionalContainerList 附属容器列表
     * @param array $VolumeInfoList 容器卷信息
     * @param array $ServiceSettingList Service访问配置列表
     * @param string $Alias 备注
     * @param string $GroupName 部署组名称
     * @param array $Tags 标签列表
     * @param string $ContainerKind 容器类型
     * @param string $Server 业务容器的 镜像Server ccr.ccs.tencentyun.com
     * @param string $RepoName 业务容器的镜像名
     * @param string $RepoType 仓库类型
     * @param TcrRepoInfo $TcrRepoInfo TCR仓库信息
     * @param string $SecretName 容器访问凭证名称
     * @param string $TagName 业务容器的镜像版本号
     * @param HealthCheckSettings $HealthCheckSettings 健康检查
     * @param string $CpuRequest 业务容器的 cpu  request
     * @param string $CpuLimit 业务容器的 cpu limit
     * @param string $MemRequest 业务容器的 mem request
     * @param string $MemLimit 业务容器的 mem limit
     * @param string $JvmOpts 业务容器的 jvm 参数
     * @param boolean $InitContainerEnable 是否为初始化容器 业务主容器不能为初始化容
     * @param boolean $PrivilegeContainerEnable 业务主容器是否为特权容器
     * @param string $RunCommand 业务主容器运行命令(转base64)
     * @param string $RunArg 业务主容器运行参数(转base64)
     * @param integer $InstanceNum 实例数量
     * @param SchedulingStrategy $SchedulingStrategy 调度策略
     * @param string $RestartPolicy 重启策略
     * @param string $ServiceSpecEncode 服务治理配置
     * @param string $IstioMemRequest istio容器的 mem Request
     * @param string $IstioCpuRequest  istio容器的 cpu Request
     * @param string $IstioMemLimit istio容器的 mem Limit
     * @param string $IstioCpuLimit istio容器的 cpu Limit
     * @param ContainerGroupServiceGovernanceConfig $ServiceGovernanceConfig 服务治理配置
     * @param string $AgentMemRequest agent容器的 mem Request
     * @param string $AgentCpuRequest agent容器的 cpu Request
     * @param string $AgentMemLimit agent容器的 mem Limit
     * @param string $AgentCpuLimit agent容器的 cpu Limit
     * @param integer $UpdateType 发布策略(0表示快速更新，1表示滚动更新。默认值为0)
     * @param integer $UpdateIvl 更新间隔,单位秒
     * @param string $MaxSurge 对应更新策略和策略配置参数
     * @param string $MaxUnavailable 对应更新策略和策略配置参数
     * @param WarmupSetting $WarmupSetting 预热参数配置
     * @param string $ConfigTemplateId 配置模版ID
     * @param integer $ConfigTemplateVersion 配置模版Version
     * @param boolean $VolumeClean 是否清除数据卷信息
     * @param string $NamespaceId 命名空间Id
     * @param boolean $DeployAgent 是否部署agent容器
     * @param array $AgentProfileList javaagent信息: SERVICE_AGENT/OT_AGENT
     * @param boolean $ServiceClean 是否清除Service信息
     * @param boolean $EnvClean 是否清除Env信息
     * @param string $DeployDesc 本次部署的描述信息
     * @param string $K8sNamespaceName k8s命名空间名称
     * @param boolean $StaticIpEnabled 是否启用静态IP
     * @param string $PodManagementPolicyType 启动策略[OrderedReady/Parallel]
     * @param integer $Partition 滚动更新分区序号
     * @param boolean $IncrementalDeployment 是否是增量部署，增量部署只运行增量覆盖一级参数，不支持对一级参数中的子参数进行增量更新，例如更新VolumeMountInfoList时必须传入VolumeMountInfoList更新后的全量参数
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ObservabilityConfig",$param) and $param["ObservabilityConfig"] !== null) {
            $this->ObservabilityConfig = new ContainerGroupObservabilityConfig();
            $this->ObservabilityConfig->deserialize($param["ObservabilityConfig"]);
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Envs",$param) and $param["Envs"] !== null) {
            $this->Envs = [];
            foreach ($param["Envs"] as $key => $value){
                $obj = new Env();
                $obj->deserialize($value);
                array_push($this->Envs, $obj);
            }
        }

        if (array_key_exists("VolumeMountInfoList",$param) and $param["VolumeMountInfoList"] !== null) {
            $this->VolumeMountInfoList = [];
            foreach ($param["VolumeMountInfoList"] as $key => $value){
                $obj = new VolumeMountInfo();
                $obj->deserialize($value);
                array_push($this->VolumeMountInfoList, $obj);
            }
        }

        if (array_key_exists("LifeCycleHookList",$param) and $param["LifeCycleHookList"] !== null) {
            $this->LifeCycleHookList = [];
            foreach ($param["LifeCycleHookList"] as $key => $value){
                $obj = new LifeCycleHook();
                $obj->deserialize($value);
                array_push($this->LifeCycleHookList, $obj);
            }
        }

        if (array_key_exists("AdditionalContainerList",$param) and $param["AdditionalContainerList"] !== null) {
            $this->AdditionalContainerList = [];
            foreach ($param["AdditionalContainerList"] as $key => $value){
                $obj = new ContainerInfo();
                $obj->deserialize($value);
                array_push($this->AdditionalContainerList, $obj);
            }
        }

        if (array_key_exists("VolumeInfoList",$param) and $param["VolumeInfoList"] !== null) {
            $this->VolumeInfoList = [];
            foreach ($param["VolumeInfoList"] as $key => $value){
                $obj = new VolumeInfo();
                $obj->deserialize($value);
                array_push($this->VolumeInfoList, $obj);
            }
        }

        if (array_key_exists("ServiceSettingList",$param) and $param["ServiceSettingList"] !== null) {
            $this->ServiceSettingList = [];
            foreach ($param["ServiceSettingList"] as $key => $value){
                $obj = new ServiceSetting();
                $obj->deserialize($value);
                array_push($this->ServiceSettingList, $obj);
            }
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ContainerKind",$param) and $param["ContainerKind"] !== null) {
            $this->ContainerKind = $param["ContainerKind"];
        }

        if (array_key_exists("Server",$param) and $param["Server"] !== null) {
            $this->Server = $param["Server"];
        }

        if (array_key_exists("RepoName",$param) and $param["RepoName"] !== null) {
            $this->RepoName = $param["RepoName"];
        }

        if (array_key_exists("RepoType",$param) and $param["RepoType"] !== null) {
            $this->RepoType = $param["RepoType"];
        }

        if (array_key_exists("TcrRepoInfo",$param) and $param["TcrRepoInfo"] !== null) {
            $this->TcrRepoInfo = new TcrRepoInfo();
            $this->TcrRepoInfo->deserialize($param["TcrRepoInfo"]);
        }

        if (array_key_exists("SecretName",$param) and $param["SecretName"] !== null) {
            $this->SecretName = $param["SecretName"];
        }

        if (array_key_exists("TagName",$param) and $param["TagName"] !== null) {
            $this->TagName = $param["TagName"];
        }

        if (array_key_exists("HealthCheckSettings",$param) and $param["HealthCheckSettings"] !== null) {
            $this->HealthCheckSettings = new HealthCheckSettings();
            $this->HealthCheckSettings->deserialize($param["HealthCheckSettings"]);
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

        if (array_key_exists("JvmOpts",$param) and $param["JvmOpts"] !== null) {
            $this->JvmOpts = $param["JvmOpts"];
        }

        if (array_key_exists("InitContainerEnable",$param) and $param["InitContainerEnable"] !== null) {
            $this->InitContainerEnable = $param["InitContainerEnable"];
        }

        if (array_key_exists("PrivilegeContainerEnable",$param) and $param["PrivilegeContainerEnable"] !== null) {
            $this->PrivilegeContainerEnable = $param["PrivilegeContainerEnable"];
        }

        if (array_key_exists("RunCommand",$param) and $param["RunCommand"] !== null) {
            $this->RunCommand = $param["RunCommand"];
        }

        if (array_key_exists("RunArg",$param) and $param["RunArg"] !== null) {
            $this->RunArg = $param["RunArg"];
        }

        if (array_key_exists("InstanceNum",$param) and $param["InstanceNum"] !== null) {
            $this->InstanceNum = $param["InstanceNum"];
        }

        if (array_key_exists("SchedulingStrategy",$param) and $param["SchedulingStrategy"] !== null) {
            $this->SchedulingStrategy = new SchedulingStrategy();
            $this->SchedulingStrategy->deserialize($param["SchedulingStrategy"]);
        }

        if (array_key_exists("RestartPolicy",$param) and $param["RestartPolicy"] !== null) {
            $this->RestartPolicy = $param["RestartPolicy"];
        }

        if (array_key_exists("ServiceSpecEncode",$param) and $param["ServiceSpecEncode"] !== null) {
            $this->ServiceSpecEncode = $param["ServiceSpecEncode"];
        }

        if (array_key_exists("IstioMemRequest",$param) and $param["IstioMemRequest"] !== null) {
            $this->IstioMemRequest = $param["IstioMemRequest"];
        }

        if (array_key_exists("IstioCpuRequest",$param) and $param["IstioCpuRequest"] !== null) {
            $this->IstioCpuRequest = $param["IstioCpuRequest"];
        }

        if (array_key_exists("IstioMemLimit",$param) and $param["IstioMemLimit"] !== null) {
            $this->IstioMemLimit = $param["IstioMemLimit"];
        }

        if (array_key_exists("IstioCpuLimit",$param) and $param["IstioCpuLimit"] !== null) {
            $this->IstioCpuLimit = $param["IstioCpuLimit"];
        }

        if (array_key_exists("ServiceGovernanceConfig",$param) and $param["ServiceGovernanceConfig"] !== null) {
            $this->ServiceGovernanceConfig = new ContainerGroupServiceGovernanceConfig();
            $this->ServiceGovernanceConfig->deserialize($param["ServiceGovernanceConfig"]);
        }

        if (array_key_exists("AgentMemRequest",$param) and $param["AgentMemRequest"] !== null) {
            $this->AgentMemRequest = $param["AgentMemRequest"];
        }

        if (array_key_exists("AgentCpuRequest",$param) and $param["AgentCpuRequest"] !== null) {
            $this->AgentCpuRequest = $param["AgentCpuRequest"];
        }

        if (array_key_exists("AgentMemLimit",$param) and $param["AgentMemLimit"] !== null) {
            $this->AgentMemLimit = $param["AgentMemLimit"];
        }

        if (array_key_exists("AgentCpuLimit",$param) and $param["AgentCpuLimit"] !== null) {
            $this->AgentCpuLimit = $param["AgentCpuLimit"];
        }

        if (array_key_exists("UpdateType",$param) and $param["UpdateType"] !== null) {
            $this->UpdateType = $param["UpdateType"];
        }

        if (array_key_exists("UpdateIvl",$param) and $param["UpdateIvl"] !== null) {
            $this->UpdateIvl = $param["UpdateIvl"];
        }

        if (array_key_exists("MaxSurge",$param) and $param["MaxSurge"] !== null) {
            $this->MaxSurge = $param["MaxSurge"];
        }

        if (array_key_exists("MaxUnavailable",$param) and $param["MaxUnavailable"] !== null) {
            $this->MaxUnavailable = $param["MaxUnavailable"];
        }

        if (array_key_exists("WarmupSetting",$param) and $param["WarmupSetting"] !== null) {
            $this->WarmupSetting = new WarmupSetting();
            $this->WarmupSetting->deserialize($param["WarmupSetting"]);
        }

        if (array_key_exists("ConfigTemplateId",$param) and $param["ConfigTemplateId"] !== null) {
            $this->ConfigTemplateId = $param["ConfigTemplateId"];
        }

        if (array_key_exists("ConfigTemplateVersion",$param) and $param["ConfigTemplateVersion"] !== null) {
            $this->ConfigTemplateVersion = $param["ConfigTemplateVersion"];
        }

        if (array_key_exists("VolumeClean",$param) and $param["VolumeClean"] !== null) {
            $this->VolumeClean = $param["VolumeClean"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("DeployAgent",$param) and $param["DeployAgent"] !== null) {
            $this->DeployAgent = $param["DeployAgent"];
        }

        if (array_key_exists("AgentProfileList",$param) and $param["AgentProfileList"] !== null) {
            $this->AgentProfileList = [];
            foreach ($param["AgentProfileList"] as $key => $value){
                $obj = new AgentProfile();
                $obj->deserialize($value);
                array_push($this->AgentProfileList, $obj);
            }
        }

        if (array_key_exists("ServiceClean",$param) and $param["ServiceClean"] !== null) {
            $this->ServiceClean = $param["ServiceClean"];
        }

        if (array_key_exists("EnvClean",$param) and $param["EnvClean"] !== null) {
            $this->EnvClean = $param["EnvClean"];
        }

        if (array_key_exists("DeployDesc",$param) and $param["DeployDesc"] !== null) {
            $this->DeployDesc = $param["DeployDesc"];
        }

        if (array_key_exists("K8sNamespaceName",$param) and $param["K8sNamespaceName"] !== null) {
            $this->K8sNamespaceName = $param["K8sNamespaceName"];
        }

        if (array_key_exists("StaticIpEnabled",$param) and $param["StaticIpEnabled"] !== null) {
            $this->StaticIpEnabled = $param["StaticIpEnabled"];
        }

        if (array_key_exists("PodManagementPolicyType",$param) and $param["PodManagementPolicyType"] !== null) {
            $this->PodManagementPolicyType = $param["PodManagementPolicyType"];
        }

        if (array_key_exists("Partition",$param) and $param["Partition"] !== null) {
            $this->Partition = $param["Partition"];
        }

        if (array_key_exists("IncrementalDeployment",$param) and $param["IncrementalDeployment"] !== null) {
            $this->IncrementalDeployment = $param["IncrementalDeployment"];
        }
    }
}
