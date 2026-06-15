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
 * @method string getApplicationId() 获取<p>应用ID</p>
 * @method void setApplicationId(string $ApplicationId) 设置<p>应用ID</p>
 * @method ContainerGroupObservabilityConfig getObservabilityConfig() 获取<p>可观测配置</p>
 * @method void setObservabilityConfig(ContainerGroupObservabilityConfig $ObservabilityConfig) 设置<p>可观测配置</p>
 * @method string getClusterId() 获取<p>集群ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID</p>
 * @method string getGroupId() 获取<p>部署组ID，分组唯一标识</p>
 * @method void setGroupId(string $GroupId) 设置<p>部署组ID，分组唯一标识</p>
 * @method array getEnvs() 获取<p>业务容器的环境变量参数</p>
 * @method void setEnvs(array $Envs) 设置<p>业务容器的环境变量参数</p>
 * @method array getVolumeMountInfoList() 获取<p>业务容器的挂载信息</p>
 * @method void setVolumeMountInfoList(array $VolumeMountInfoList) 设置<p>业务容器的挂载信息</p>
 * @method array getLifeCycleHookList() 获取<p>业务主容器生命周期钩子列表</p>
 * @method void setLifeCycleHookList(array $LifeCycleHookList) 设置<p>业务主容器生命周期钩子列表</p>
 * @method array getAdditionalContainerList() 获取<p>附属容器列表</p>
 * @method void setAdditionalContainerList(array $AdditionalContainerList) 设置<p>附属容器列表</p>
 * @method array getVolumeInfoList() 获取<p>容器卷信息</p>
 * @method void setVolumeInfoList(array $VolumeInfoList) 设置<p>容器卷信息</p>
 * @method array getServiceSettingList() 获取<p>Service访问配置列表</p>
 * @method void setServiceSettingList(array $ServiceSettingList) 设置<p>Service访问配置列表</p>
 * @method string getAlias() 获取<p>备注</p>
 * @method void setAlias(string $Alias) 设置<p>备注</p>
 * @method string getGroupName() 获取<p>部署组名称</p>
 * @method void setGroupName(string $GroupName) 设置<p>部署组名称</p>
 * @method array getTags() 获取<p>标签列表</p>
 * @method void setTags(array $Tags) 设置<p>标签列表</p>
 * @method string getContainerKind() 获取<p>容器类型</p>
 * @method void setContainerKind(string $ContainerKind) 设置<p>容器类型</p>
 * @method string getServer() 获取<p>业务容器的 镜像Server ccr.ccs.tencentyun.com</p>
 * @method void setServer(string $Server) 设置<p>业务容器的 镜像Server ccr.ccs.tencentyun.com</p>
 * @method string getRepoName() 获取<p>业务容器的镜像名</p>
 * @method void setRepoName(string $RepoName) 设置<p>业务容器的镜像名</p>
 * @method string getRepoType() 获取<p>仓库类型</p>
 * @method void setRepoType(string $RepoType) 设置<p>仓库类型</p>
 * @method TcrRepoInfo getTcrRepoInfo() 获取<p>TCR仓库信息</p>
 * @method void setTcrRepoInfo(TcrRepoInfo $TcrRepoInfo) 设置<p>TCR仓库信息</p>
 * @method string getSecretName() 获取<p>容器访问凭证名称</p>
 * @method void setSecretName(string $SecretName) 设置<p>容器访问凭证名称</p>
 * @method string getTagName() 获取<p>业务容器的镜像版本号</p>
 * @method void setTagName(string $TagName) 设置<p>业务容器的镜像版本号</p>
 * @method HealthCheckSettings getHealthCheckSettings() 获取<p>健康检查</p>
 * @method void setHealthCheckSettings(HealthCheckSettings $HealthCheckSettings) 设置<p>健康检查</p>
 * @method string getCpuRequest() 获取<p>业务容器的 cpu  request</p>
 * @method void setCpuRequest(string $CpuRequest) 设置<p>业务容器的 cpu  request</p>
 * @method string getCpuLimit() 获取<p>业务容器的 cpu limit</p>
 * @method void setCpuLimit(string $CpuLimit) 设置<p>业务容器的 cpu limit</p>
 * @method string getMemRequest() 获取<p>业务容器的 mem request</p>
 * @method void setMemRequest(string $MemRequest) 设置<p>业务容器的 mem request</p>
 * @method string getMemLimit() 获取<p>业务容器的 mem limit</p>
 * @method void setMemLimit(string $MemLimit) 设置<p>业务容器的 mem limit</p>
 * @method string getJvmOpts() 获取<p>业务容器的 jvm 参数</p>
 * @method void setJvmOpts(string $JvmOpts) 设置<p>业务容器的 jvm 参数</p>
 * @method boolean getInitContainerEnable() 获取<p>是否为初始化容器 业务主容器不能为初始化容</p>
 * @method void setInitContainerEnable(boolean $InitContainerEnable) 设置<p>是否为初始化容器 业务主容器不能为初始化容</p>
 * @method boolean getPrivilegeContainerEnable() 获取<p>业务主容器是否为特权容器</p>
 * @method void setPrivilegeContainerEnable(boolean $PrivilegeContainerEnable) 设置<p>业务主容器是否为特权容器</p>
 * @method string getRunCommand() 获取<p>业务主容器运行命令(转base64)</p>
 * @method void setRunCommand(string $RunCommand) 设置<p>业务主容器运行命令(转base64)</p>
 * @method string getRunArg() 获取<p>业务主容器运行参数(转base64)</p>
 * @method void setRunArg(string $RunArg) 设置<p>业务主容器运行参数(转base64)</p>
 * @method integer getInstanceNum() 获取<p>实例数量</p>
 * @method void setInstanceNum(integer $InstanceNum) 设置<p>实例数量</p>
 * @method SchedulingStrategy getSchedulingStrategy() 获取<p>调度策略</p>
 * @method void setSchedulingStrategy(SchedulingStrategy $SchedulingStrategy) 设置<p>调度策略</p>
 * @method string getRestartPolicy() 获取<p>重启策略</p>
 * @method void setRestartPolicy(string $RestartPolicy) 设置<p>重启策略</p>
 * @method string getServiceSpecEncode() 获取<p>服务治理配置</p>
 * @method void setServiceSpecEncode(string $ServiceSpecEncode) 设置<p>服务治理配置</p>
 * @method string getIstioMemRequest() 获取<p>istio容器的 mem Request</p>
 * @method void setIstioMemRequest(string $IstioMemRequest) 设置<p>istio容器的 mem Request</p>
 * @method string getIstioCpuRequest() 获取<p>istio容器的 cpu Request</p>
 * @method void setIstioCpuRequest(string $IstioCpuRequest) 设置<p>istio容器的 cpu Request</p>
 * @method string getIstioMemLimit() 获取<p>istio容器的 mem Limit</p>
 * @method void setIstioMemLimit(string $IstioMemLimit) 设置<p>istio容器的 mem Limit</p>
 * @method string getIstioCpuLimit() 获取<p>istio容器的 cpu Limit</p>
 * @method void setIstioCpuLimit(string $IstioCpuLimit) 设置<p>istio容器的 cpu Limit</p>
 * @method ContainerGroupServiceGovernanceConfig getServiceGovernanceConfig() 获取<p>服务治理配置</p>
 * @method void setServiceGovernanceConfig(ContainerGroupServiceGovernanceConfig $ServiceGovernanceConfig) 设置<p>服务治理配置</p>
 * @method string getAgentMemRequest() 获取<p>agent容器的 mem Request</p>
 * @method void setAgentMemRequest(string $AgentMemRequest) 设置<p>agent容器的 mem Request</p>
 * @method string getAgentCpuRequest() 获取<p>agent容器的 cpu Request</p>
 * @method void setAgentCpuRequest(string $AgentCpuRequest) 设置<p>agent容器的 cpu Request</p>
 * @method string getAgentMemLimit() 获取<p>agent容器的 mem Limit</p>
 * @method void setAgentMemLimit(string $AgentMemLimit) 设置<p>agent容器的 mem Limit</p>
 * @method string getAgentCpuLimit() 获取<p>agent容器的 cpu Limit</p>
 * @method void setAgentCpuLimit(string $AgentCpuLimit) 设置<p>agent容器的 cpu Limit</p>
 * @method integer getUpdateType() 获取<p>发布策略(0表示快速更新，1表示滚动更新。默认值为0)</p>
 * @method void setUpdateType(integer $UpdateType) 设置<p>发布策略(0表示快速更新，1表示滚动更新。默认值为0)</p>
 * @method integer getUpdateIvl() 获取<p>更新间隔,单位秒</p>
 * @method void setUpdateIvl(integer $UpdateIvl) 设置<p>更新间隔,单位秒</p>
 * @method string getMaxSurge() 获取<p>对应更新策略和策略配置参数</p>
 * @method void setMaxSurge(string $MaxSurge) 设置<p>对应更新策略和策略配置参数</p>
 * @method string getMaxUnavailable() 获取<p>对应更新策略和策略配置参数</p>
 * @method void setMaxUnavailable(string $MaxUnavailable) 设置<p>对应更新策略和策略配置参数</p>
 * @method WarmupSetting getWarmupSetting() 获取<p>预热参数配置</p>
 * @method void setWarmupSetting(WarmupSetting $WarmupSetting) 设置<p>预热参数配置</p>
 * @method string getConfigTemplateId() 获取<p>配置模版ID</p>
 * @method void setConfigTemplateId(string $ConfigTemplateId) 设置<p>配置模版ID</p>
 * @method integer getConfigTemplateVersion() 获取<p>配置模版Version</p>
 * @method void setConfigTemplateVersion(integer $ConfigTemplateVersion) 设置<p>配置模版Version</p>
 * @method boolean getVolumeClean() 获取<p>是否清除数据卷信息</p>
 * @method void setVolumeClean(boolean $VolumeClean) 设置<p>是否清除数据卷信息</p>
 * @method string getNamespaceId() 获取<p>命名空间Id</p>
 * @method void setNamespaceId(string $NamespaceId) 设置<p>命名空间Id</p>
 * @method boolean getDeployAgent() 获取<p>是否部署agent容器</p>
 * @method void setDeployAgent(boolean $DeployAgent) 设置<p>是否部署agent容器</p>
 * @method array getAgentProfileList() 获取<p>javaagent信息: SERVICE_AGENT/OT_AGENT</p>
 * @method void setAgentProfileList(array $AgentProfileList) 设置<p>javaagent信息: SERVICE_AGENT/OT_AGENT</p>
 * @method boolean getServiceClean() 获取<p>是否清除Service信息</p>
 * @method void setServiceClean(boolean $ServiceClean) 设置<p>是否清除Service信息</p>
 * @method boolean getEnvClean() 获取<p>是否清除Env信息</p>
 * @method void setEnvClean(boolean $EnvClean) 设置<p>是否清除Env信息</p>
 * @method string getDeployDesc() 获取<p>本次部署的描述信息</p>
 * @method void setDeployDesc(string $DeployDesc) 设置<p>本次部署的描述信息</p>
 * @method string getK8sNamespaceName() 获取<p>k8s命名空间名称</p>
 * @method void setK8sNamespaceName(string $K8sNamespaceName) 设置<p>k8s命名空间名称</p>
 * @method boolean getStaticIpEnabled() 获取<p>是否启用静态IP</p>
 * @method void setStaticIpEnabled(boolean $StaticIpEnabled) 设置<p>是否启用静态IP</p>
 * @method string getPodManagementPolicyType() 获取<p>启动策略[OrderedReady/Parallel]</p>
 * @method void setPodManagementPolicyType(string $PodManagementPolicyType) 设置<p>启动策略[OrderedReady/Parallel]</p>
 * @method integer getPartition() 获取<p>滚动更新分区序号</p>
 * @method void setPartition(integer $Partition) 设置<p>滚动更新分区序号</p>
 * @method boolean getIncrementalDeployment() 获取<p>是否是增量部署，增量部署只运行增量覆盖一级参数，不支持对一级参数中的子参数进行增量更新，例如更新VolumeMountInfoList时必须传入VolumeMountInfoList更新后的全量参数</p>
 * @method void setIncrementalDeployment(boolean $IncrementalDeployment) 设置<p>是否是增量部署，增量部署只运行增量覆盖一级参数，不支持对一级参数中的子参数进行增量更新，例如更新VolumeMountInfoList时必须传入VolumeMountInfoList更新后的全量参数</p>
 * @method boolean getDoNotStart() 获取<p>是否不立即启动</p>
 * @method void setDoNotStart(boolean $DoNotStart) 设置<p>是否不立即启动</p>
 */
class DeployContainerApplicationRequest extends AbstractModel
{
    /**
     * @var string <p>应用ID</p>
     */
    public $ApplicationId;

    /**
     * @var ContainerGroupObservabilityConfig <p>可观测配置</p>
     */
    public $ObservabilityConfig;

    /**
     * @var string <p>集群ID</p>
     */
    public $ClusterId;

    /**
     * @var string <p>部署组ID，分组唯一标识</p>
     */
    public $GroupId;

    /**
     * @var array <p>业务容器的环境变量参数</p>
     */
    public $Envs;

    /**
     * @var array <p>业务容器的挂载信息</p>
     */
    public $VolumeMountInfoList;

    /**
     * @var array <p>业务主容器生命周期钩子列表</p>
     */
    public $LifeCycleHookList;

    /**
     * @var array <p>附属容器列表</p>
     */
    public $AdditionalContainerList;

    /**
     * @var array <p>容器卷信息</p>
     */
    public $VolumeInfoList;

    /**
     * @var array <p>Service访问配置列表</p>
     */
    public $ServiceSettingList;

    /**
     * @var string <p>备注</p>
     */
    public $Alias;

    /**
     * @var string <p>部署组名称</p>
     */
    public $GroupName;

    /**
     * @var array <p>标签列表</p>
     */
    public $Tags;

    /**
     * @var string <p>容器类型</p>
     */
    public $ContainerKind;

    /**
     * @var string <p>业务容器的 镜像Server ccr.ccs.tencentyun.com</p>
     */
    public $Server;

    /**
     * @var string <p>业务容器的镜像名</p>
     */
    public $RepoName;

    /**
     * @var string <p>仓库类型</p>
     */
    public $RepoType;

    /**
     * @var TcrRepoInfo <p>TCR仓库信息</p>
     */
    public $TcrRepoInfo;

    /**
     * @var string <p>容器访问凭证名称</p>
     */
    public $SecretName;

    /**
     * @var string <p>业务容器的镜像版本号</p>
     */
    public $TagName;

    /**
     * @var HealthCheckSettings <p>健康检查</p>
     */
    public $HealthCheckSettings;

    /**
     * @var string <p>业务容器的 cpu  request</p>
     */
    public $CpuRequest;

    /**
     * @var string <p>业务容器的 cpu limit</p>
     */
    public $CpuLimit;

    /**
     * @var string <p>业务容器的 mem request</p>
     */
    public $MemRequest;

    /**
     * @var string <p>业务容器的 mem limit</p>
     */
    public $MemLimit;

    /**
     * @var string <p>业务容器的 jvm 参数</p>
     */
    public $JvmOpts;

    /**
     * @var boolean <p>是否为初始化容器 业务主容器不能为初始化容</p>
     */
    public $InitContainerEnable;

    /**
     * @var boolean <p>业务主容器是否为特权容器</p>
     */
    public $PrivilegeContainerEnable;

    /**
     * @var string <p>业务主容器运行命令(转base64)</p>
     */
    public $RunCommand;

    /**
     * @var string <p>业务主容器运行参数(转base64)</p>
     */
    public $RunArg;

    /**
     * @var integer <p>实例数量</p>
     */
    public $InstanceNum;

    /**
     * @var SchedulingStrategy <p>调度策略</p>
     */
    public $SchedulingStrategy;

    /**
     * @var string <p>重启策略</p>
     */
    public $RestartPolicy;

    /**
     * @var string <p>服务治理配置</p>
     */
    public $ServiceSpecEncode;

    /**
     * @var string <p>istio容器的 mem Request</p>
     */
    public $IstioMemRequest;

    /**
     * @var string <p>istio容器的 cpu Request</p>
     */
    public $IstioCpuRequest;

    /**
     * @var string <p>istio容器的 mem Limit</p>
     */
    public $IstioMemLimit;

    /**
     * @var string <p>istio容器的 cpu Limit</p>
     */
    public $IstioCpuLimit;

    /**
     * @var ContainerGroupServiceGovernanceConfig <p>服务治理配置</p>
     */
    public $ServiceGovernanceConfig;

    /**
     * @var string <p>agent容器的 mem Request</p>
     */
    public $AgentMemRequest;

    /**
     * @var string <p>agent容器的 cpu Request</p>
     */
    public $AgentCpuRequest;

    /**
     * @var string <p>agent容器的 mem Limit</p>
     */
    public $AgentMemLimit;

    /**
     * @var string <p>agent容器的 cpu Limit</p>
     */
    public $AgentCpuLimit;

    /**
     * @var integer <p>发布策略(0表示快速更新，1表示滚动更新。默认值为0)</p>
     */
    public $UpdateType;

    /**
     * @var integer <p>更新间隔,单位秒</p>
     */
    public $UpdateIvl;

    /**
     * @var string <p>对应更新策略和策略配置参数</p>
     */
    public $MaxSurge;

    /**
     * @var string <p>对应更新策略和策略配置参数</p>
     */
    public $MaxUnavailable;

    /**
     * @var WarmupSetting <p>预热参数配置</p>
     */
    public $WarmupSetting;

    /**
     * @var string <p>配置模版ID</p>
     */
    public $ConfigTemplateId;

    /**
     * @var integer <p>配置模版Version</p>
     */
    public $ConfigTemplateVersion;

    /**
     * @var boolean <p>是否清除数据卷信息</p>
     */
    public $VolumeClean;

    /**
     * @var string <p>命名空间Id</p>
     */
    public $NamespaceId;

    /**
     * @var boolean <p>是否部署agent容器</p>
     */
    public $DeployAgent;

    /**
     * @var array <p>javaagent信息: SERVICE_AGENT/OT_AGENT</p>
     */
    public $AgentProfileList;

    /**
     * @var boolean <p>是否清除Service信息</p>
     */
    public $ServiceClean;

    /**
     * @var boolean <p>是否清除Env信息</p>
     */
    public $EnvClean;

    /**
     * @var string <p>本次部署的描述信息</p>
     */
    public $DeployDesc;

    /**
     * @var string <p>k8s命名空间名称</p>
     */
    public $K8sNamespaceName;

    /**
     * @var boolean <p>是否启用静态IP</p>
     */
    public $StaticIpEnabled;

    /**
     * @var string <p>启动策略[OrderedReady/Parallel]</p>
     */
    public $PodManagementPolicyType;

    /**
     * @var integer <p>滚动更新分区序号</p>
     */
    public $Partition;

    /**
     * @var boolean <p>是否是增量部署，增量部署只运行增量覆盖一级参数，不支持对一级参数中的子参数进行增量更新，例如更新VolumeMountInfoList时必须传入VolumeMountInfoList更新后的全量参数</p>
     */
    public $IncrementalDeployment;

    /**
     * @var boolean <p>是否不立即启动</p>
     */
    public $DoNotStart;

    /**
     * @param string $ApplicationId <p>应用ID</p>
     * @param ContainerGroupObservabilityConfig $ObservabilityConfig <p>可观测配置</p>
     * @param string $ClusterId <p>集群ID</p>
     * @param string $GroupId <p>部署组ID，分组唯一标识</p>
     * @param array $Envs <p>业务容器的环境变量参数</p>
     * @param array $VolumeMountInfoList <p>业务容器的挂载信息</p>
     * @param array $LifeCycleHookList <p>业务主容器生命周期钩子列表</p>
     * @param array $AdditionalContainerList <p>附属容器列表</p>
     * @param array $VolumeInfoList <p>容器卷信息</p>
     * @param array $ServiceSettingList <p>Service访问配置列表</p>
     * @param string $Alias <p>备注</p>
     * @param string $GroupName <p>部署组名称</p>
     * @param array $Tags <p>标签列表</p>
     * @param string $ContainerKind <p>容器类型</p>
     * @param string $Server <p>业务容器的 镜像Server ccr.ccs.tencentyun.com</p>
     * @param string $RepoName <p>业务容器的镜像名</p>
     * @param string $RepoType <p>仓库类型</p>
     * @param TcrRepoInfo $TcrRepoInfo <p>TCR仓库信息</p>
     * @param string $SecretName <p>容器访问凭证名称</p>
     * @param string $TagName <p>业务容器的镜像版本号</p>
     * @param HealthCheckSettings $HealthCheckSettings <p>健康检查</p>
     * @param string $CpuRequest <p>业务容器的 cpu  request</p>
     * @param string $CpuLimit <p>业务容器的 cpu limit</p>
     * @param string $MemRequest <p>业务容器的 mem request</p>
     * @param string $MemLimit <p>业务容器的 mem limit</p>
     * @param string $JvmOpts <p>业务容器的 jvm 参数</p>
     * @param boolean $InitContainerEnable <p>是否为初始化容器 业务主容器不能为初始化容</p>
     * @param boolean $PrivilegeContainerEnable <p>业务主容器是否为特权容器</p>
     * @param string $RunCommand <p>业务主容器运行命令(转base64)</p>
     * @param string $RunArg <p>业务主容器运行参数(转base64)</p>
     * @param integer $InstanceNum <p>实例数量</p>
     * @param SchedulingStrategy $SchedulingStrategy <p>调度策略</p>
     * @param string $RestartPolicy <p>重启策略</p>
     * @param string $ServiceSpecEncode <p>服务治理配置</p>
     * @param string $IstioMemRequest <p>istio容器的 mem Request</p>
     * @param string $IstioCpuRequest <p>istio容器的 cpu Request</p>
     * @param string $IstioMemLimit <p>istio容器的 mem Limit</p>
     * @param string $IstioCpuLimit <p>istio容器的 cpu Limit</p>
     * @param ContainerGroupServiceGovernanceConfig $ServiceGovernanceConfig <p>服务治理配置</p>
     * @param string $AgentMemRequest <p>agent容器的 mem Request</p>
     * @param string $AgentCpuRequest <p>agent容器的 cpu Request</p>
     * @param string $AgentMemLimit <p>agent容器的 mem Limit</p>
     * @param string $AgentCpuLimit <p>agent容器的 cpu Limit</p>
     * @param integer $UpdateType <p>发布策略(0表示快速更新，1表示滚动更新。默认值为0)</p>
     * @param integer $UpdateIvl <p>更新间隔,单位秒</p>
     * @param string $MaxSurge <p>对应更新策略和策略配置参数</p>
     * @param string $MaxUnavailable <p>对应更新策略和策略配置参数</p>
     * @param WarmupSetting $WarmupSetting <p>预热参数配置</p>
     * @param string $ConfigTemplateId <p>配置模版ID</p>
     * @param integer $ConfigTemplateVersion <p>配置模版Version</p>
     * @param boolean $VolumeClean <p>是否清除数据卷信息</p>
     * @param string $NamespaceId <p>命名空间Id</p>
     * @param boolean $DeployAgent <p>是否部署agent容器</p>
     * @param array $AgentProfileList <p>javaagent信息: SERVICE_AGENT/OT_AGENT</p>
     * @param boolean $ServiceClean <p>是否清除Service信息</p>
     * @param boolean $EnvClean <p>是否清除Env信息</p>
     * @param string $DeployDesc <p>本次部署的描述信息</p>
     * @param string $K8sNamespaceName <p>k8s命名空间名称</p>
     * @param boolean $StaticIpEnabled <p>是否启用静态IP</p>
     * @param string $PodManagementPolicyType <p>启动策略[OrderedReady/Parallel]</p>
     * @param integer $Partition <p>滚动更新分区序号</p>
     * @param boolean $IncrementalDeployment <p>是否是增量部署，增量部署只运行增量覆盖一级参数，不支持对一级参数中的子参数进行增量更新，例如更新VolumeMountInfoList时必须传入VolumeMountInfoList更新后的全量参数</p>
     * @param boolean $DoNotStart <p>是否不立即启动</p>
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

        if (array_key_exists("DoNotStart",$param) and $param["DoNotStart"] !== null) {
            $this->DoNotStart = $param["DoNotStart"];
        }
    }
}
