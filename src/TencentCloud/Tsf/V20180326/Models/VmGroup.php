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
 * 虚拟机部署组信息
 *
 * @method string getGroupId() 获取<p>部署组ID</p>
 * @method void setGroupId(string $GroupId) 设置<p>部署组ID</p>
 * @method string getGroupName() 获取<p>部署组名称</p>
 * @method void setGroupName(string $GroupName) 设置<p>部署组名称</p>
 * @method string getGroupStatus() 获取<p>部署组状态</p>
 * @method void setGroupStatus(string $GroupStatus) 设置<p>部署组状态</p>
 * @method string getPackageId() 获取<p>程序包ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageId(string $PackageId) 设置<p>程序包ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPackageName() 获取<p>程序包名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageName(string $PackageName) 设置<p>程序包名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPackageVersion() 获取<p>程序包版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageVersion(string $PackageVersion) 设置<p>程序包版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取<p>集群ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID</p>
 * @method string getClusterName() 获取<p>集群名称</p>
 * @method void setClusterName(string $ClusterName) 设置<p>集群名称</p>
 * @method string getNamespaceId() 获取<p>命名空间ID</p>
 * @method void setNamespaceId(string $NamespaceId) 设置<p>命名空间ID</p>
 * @method string getNamespaceName() 获取<p>命名空间名称</p>
 * @method void setNamespaceName(string $NamespaceName) 设置<p>命名空间名称</p>
 * @method string getApplicationId() 获取<p>应用ID</p>
 * @method void setApplicationId(string $ApplicationId) 设置<p>应用ID</p>
 * @method string getApplicationName() 获取<p>应用名称</p>
 * @method void setApplicationName(string $ApplicationName) 设置<p>应用名称</p>
 * @method integer getInstanceCount() 获取<p>部署组机器数目</p>
 * @method void setInstanceCount(integer $InstanceCount) 设置<p>部署组机器数目</p>
 * @method integer getRunInstanceCount() 获取<p>部署组运行中机器数目</p>
 * @method void setRunInstanceCount(integer $RunInstanceCount) 设置<p>部署组运行中机器数目</p>
 * @method string getStartupParameters() 获取<p>部署组启动参数信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartupParameters(string $StartupParameters) 设置<p>部署组启动参数信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>部署组创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>部署组创建时间</p>
 * @method string getUpdateTime() 获取<p>部署组更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>部署组更新时间</p>
 * @method integer getOffInstanceCount() 获取<p>部署组停止机器数目</p>
 * @method void setOffInstanceCount(integer $OffInstanceCount) 设置<p>部署组停止机器数目</p>
 * @method string getGroupDesc() 获取<p>部署组描述信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupDesc(string $GroupDesc) 设置<p>部署组描述信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMicroserviceType() 获取<p>微服务类型</p>
 * @method void setMicroserviceType(string $MicroserviceType) 设置<p>微服务类型</p>
 * @method string getApplicationType() 获取<p>应用类型</p>
 * @method void setApplicationType(string $ApplicationType) 设置<p>应用类型</p>
 * @method string getGroupResourceType() 获取<p>部署组资源类型</p><p>枚举值：</p><ul><li>GW： 网关</li><li>DEF： 普通业务部署组</li><li>SVL： Serverless</li></ul>
 * @method void setGroupResourceType(string $GroupResourceType) 设置<p>部署组资源类型</p><p>枚举值：</p><ul><li>GW： 网关</li><li>DEF： 普通业务部署组</li><li>SVL： Serverless</li></ul>
 * @method integer getUpdatedTime() 获取<p>部署组更新时间戳</p>
 * @method void setUpdatedTime(integer $UpdatedTime) 设置<p>部署组更新时间戳</p>
 * @method string getDeployDesc() 获取<p>部署应用描述信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeployDesc(string $DeployDesc) 设置<p>部署应用描述信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateType() 获取<p>滚动发布的更新方式</p>
 * @method void setUpdateType(integer $UpdateType) 设置<p>滚动发布的更新方式</p>
 * @method boolean getDeployBetaEnable() 获取<p>发布是否启用beta批次</p>
 * @method void setDeployBetaEnable(boolean $DeployBetaEnable) 设置<p>发布是否启用beta批次</p>
 * @method array getDeployBatch() 获取<p>滚动发布的批次比例列表</p>
 * @method void setDeployBatch(array $DeployBatch) 设置<p>滚动发布的批次比例列表</p>
 * @method string getDeployExeMode() 获取<p>滚动发布的批次执行方式</p>
 * @method void setDeployExeMode(string $DeployExeMode) 设置<p>滚动发布的批次执行方式</p>
 * @method integer getDeployWaitTime() 获取<p>滚动发布的每个批次的等待时间</p>
 * @method void setDeployWaitTime(integer $DeployWaitTime) 设置<p>滚动发布的每个批次的等待时间</p>
 * @method boolean getEnableHealthCheck() 获取<p>是否开启了健康检查</p>
 * @method void setEnableHealthCheck(boolean $EnableHealthCheck) 设置<p>是否开启了健康检查</p>
 * @method HealthCheckSettings getHealthCheckSettings() 获取<p>健康检查配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHealthCheckSettings(HealthCheckSettings $HealthCheckSettings) 设置<p>健康检查配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPackageType() 获取<p>程序包类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageType(string $PackageType) 设置<p>程序包类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartScript() 获取<p>启动脚本 base64编码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartScript(string $StartScript) 设置<p>启动脚本 base64编码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStopScript() 获取<p>停止脚本 base64编码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStopScript(string $StopScript) 设置<p>停止脚本 base64编码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlias() 获取<p>部署组备注</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlias(string $Alias) 设置<p>部署组备注</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAgentProfileList() 获取<p>javaagent信息</p>
 * @method void setAgentProfileList(array $AgentProfileList) 设置<p>javaagent信息</p>
 * @method WarmupSetting getWarmupSetting() 获取<p>预热属性配置</p>
 * @method void setWarmupSetting(WarmupSetting $WarmupSetting) 设置<p>预热属性配置</p>
 * @method GatewayConfig getGatewayConfig() 获取<p>Envoy网关配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGatewayConfig(GatewayConfig $GatewayConfig) 设置<p>Envoy网关配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableBatchHealthCheck() 获取<p>批次是否开启健康检查</p>
 * @method void setEnableBatchHealthCheck(boolean $EnableBatchHealthCheck) 设置<p>批次是否开启健康检查</p>
 * @method boolean getFilebeatCgroupEnable() 获取<p>是否开启cgroup控制内存cpu</p>
 * @method void setFilebeatCgroupEnable(boolean $FilebeatCgroupEnable) 设置<p>是否开启cgroup控制内存cpu</p>
 * @method float getFilebeatMaxCpu() 获取<p>filebeat使用cpu上限</p>
 * @method void setFilebeatMaxCpu(float $FilebeatMaxCpu) 设置<p>filebeat使用cpu上限</p>
 * @method integer getFilebeatMaxMem() 获取<p>filebeat使用内存上限</p>
 * @method void setFilebeatMaxMem(integer $FilebeatMaxMem) 设置<p>filebeat使用内存上限</p>
 * @method string getRepositoryId() 获取<p>仓库ID</p>
 * @method void setRepositoryId(string $RepositoryId) 设置<p>仓库ID</p>
 * @method string getRepositoryName() 获取<p>仓库名称</p>
 * @method void setRepositoryName(string $RepositoryName) 设置<p>仓库名称</p>
 * @method string getRepositoryType() 获取<p>仓库类型</p>
 * @method void setRepositoryType(string $RepositoryType) 设置<p>仓库类型</p>
 * @method boolean getLivenessAutoRestart() 获取<p>是否自动重启</p>
 * @method void setLivenessAutoRestart(boolean $LivenessAutoRestart) 设置<p>是否自动重启</p>
 * @method string getMeshSidecarVersion() 获取<p>Mesh Sidecar 数据面版本通道</p><p>枚举值：</p><ul><li>stable： 稳定版</li><li>release： 最新版</li></ul>
 * @method void setMeshSidecarVersion(string $MeshSidecarVersion) 设置<p>Mesh Sidecar 数据面版本通道</p><p>枚举值：</p><ul><li>stable： 稳定版</li><li>release： 最新版</li></ul>
 * @method string getBusinessLogConfigIdList() 获取<p>业务日志配置 ID 列表</p>
 * @method void setBusinessLogConfigIdList(string $BusinessLogConfigIdList) 设置<p>业务日志配置 ID 列表</p>
 * @method string getBusinessLogDeliveryConfigIdList() 获取<p>业务系统 ID</p>
 * @method void setBusinessLogDeliveryConfigIdList(string $BusinessLogDeliveryConfigIdList) 设置<p>业务系统 ID</p>
 * @method string getBusinessSystemId() 获取<p>String型普通说明场景</p>
 * @method void setBusinessSystemId(string $BusinessSystemId) 设置<p>String型普通说明场景</p>
 * @method string getBusinessSystemName() 获取<p>业务系统名称</p>
 * @method void setBusinessSystemName(string $BusinessSystemName) 设置<p>业务系统名称</p>
 * @method string getClsMachineGroupId() 获取<p>CLS 机器组 ID</p>
 * @method void setClsMachineGroupId(string $ClsMachineGroupId) 设置<p>CLS 机器组 ID</p>
 * @method boolean getEnableGovernance() 获取<p>是否开启服务治理</p>
 * @method void setEnableGovernance(boolean $EnableGovernance) 设置<p>是否开启服务治理</p>
 * @method boolean getEnableTelemetry() 获取<p>是否开启可观测</p>
 * @method void setEnableTelemetry(boolean $EnableTelemetry) 设置<p>是否开启可观测</p>
 * @method boolean getEnableTelemetryAgent() 获取<p>是否开启 OT Agent</p>
 * @method void setEnableTelemetryAgent(boolean $EnableTelemetryAgent) 设置<p>是否开启 OT Agent</p>
 * @method boolean getEnabledUnit() 获取<p>是否开启单元化</p>
 * @method void setEnabledUnit(boolean $EnabledUnit) 设置<p>是否开启单元化</p>
 * @method array getExclusiveInstances() 获取<p>独享注册中心/配置中心实例列表</p>
 * @method void setExclusiveInstances(array $ExclusiveInstances) 设置<p>独享注册中心/配置中心实例列表</p>
 * @method string getFrameworkType() 获取<p>框架接入类型</p>
 * @method void setFrameworkType(string $FrameworkType) 设置<p>框架接入类型</p>
 * @method string getGovernanceType() 获取<p>服务治理实例模式</p>
 * @method void setGovernanceType(string $GovernanceType) 设置<p>服务治理实例模式</p>
 * @method array getInstanceIdList() 获取<p>部署组关联实例 ID 列表</p>
 * @method void setInstanceIdList(array $InstanceIdList) 设置<p>部署组关联实例 ID 列表</p>
 * @method string getIsStop() 获取<p>部署组是否处于停止状态</p>
 * @method void setIsStop(string $IsStop) 设置<p>部署组是否处于停止状态</p>
 * @method string getK8sNamespaceName() 获取<p>K8s 命名空间名称</p>
 * @method void setK8sNamespaceName(string $K8sNamespaceName) 设置<p>K8s 命名空间名称</p>
 * @method string getLanguage() 获取<p>请求语言</p>
 * @method void setLanguage(string $Language) 设置<p>请求语言</p>
 * @method string getMicroserviceSubType() 获取<p>微服务子类型</p>
 * @method void setMicroserviceSubType(string $MicroserviceSubType) 设置<p>微服务子类型</p>
 * @method string getNonInvasiveType() 获取<p>非侵入接入子类型</p>
 * @method void setNonInvasiveType(string $NonInvasiveType) 设置<p>非侵入接入子类型</p>
 * @method string getPreStopScript() 获取<p>预停止脚本内容</p>
 * @method void setPreStopScript(string $PreStopScript) 设置<p>预停止脚本内容</p>
 * @method string getRealNamespaceName() 获取<p>实际使用的 K8s 命名空间名称</p>
 * @method void setRealNamespaceName(string $RealNamespaceName) 设置<p>实际使用的 K8s 命名空间名称</p>
 * @method array getServiceConfigList() 获取<p>Mesh 服务端口与健康检查配置列表</p>
 * @method void setServiceConfigList(array $ServiceConfigList) 设置<p>Mesh 服务端口与健康检查配置列表</p>
 * @method ServiceGovernanceConfig getServiceGovernanceConfig() 获取<p>服务治理配置聚合对象</p>
 * @method void setServiceGovernanceConfig(ServiceGovernanceConfig $ServiceGovernanceConfig) 设置<p>服务治理配置聚合对象</p>
 * @method array getTags() 获取<p>部署组标签列表</p>
 * @method void setTags(array $Tags) 设置<p>部署组标签列表</p>
 * @method string getTapmOtAgentVersion() 获取<p>Tapm OT Agent 版本</p>
 * @method void setTapmOtAgentVersion(string $TapmOtAgentVersion) 设置<p>Tapm OT Agent 版本</p>
 * @method string getUnitEnvType() 获取<p>单元环境类型</p>
 * @method void setUnitEnvType(string $UnitEnvType) 设置<p>单元环境类型</p>
 * @method string getUnitId() 获取<p>单元 ID</p>
 * @method void setUnitId(string $UnitId) 设置<p>单元 ID</p>
 * @method string getUnitName() 获取<p>单元类型</p>
 * @method void setUnitName(string $UnitName) 设置<p>单元类型</p>
 * @method string getUnitType() 获取<p>部署组资源类型</p>
 * @method void setUnitType(string $UnitType) 设置<p>部署组资源类型</p>
 */
class VmGroup extends AbstractModel
{
    /**
     * @var string <p>部署组ID</p>
     */
    public $GroupId;

    /**
     * @var string <p>部署组名称</p>
     */
    public $GroupName;

    /**
     * @var string <p>部署组状态</p>
     */
    public $GroupStatus;

    /**
     * @var string <p>程序包ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageId;

    /**
     * @var string <p>程序包名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageName;

    /**
     * @var string <p>程序包版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageVersion;

    /**
     * @var string <p>集群ID</p>
     */
    public $ClusterId;

    /**
     * @var string <p>集群名称</p>
     */
    public $ClusterName;

    /**
     * @var string <p>命名空间ID</p>
     */
    public $NamespaceId;

    /**
     * @var string <p>命名空间名称</p>
     */
    public $NamespaceName;

    /**
     * @var string <p>应用ID</p>
     */
    public $ApplicationId;

    /**
     * @var string <p>应用名称</p>
     */
    public $ApplicationName;

    /**
     * @var integer <p>部署组机器数目</p>
     */
    public $InstanceCount;

    /**
     * @var integer <p>部署组运行中机器数目</p>
     */
    public $RunInstanceCount;

    /**
     * @var string <p>部署组启动参数信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartupParameters;

    /**
     * @var string <p>部署组创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>部署组更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var integer <p>部署组停止机器数目</p>
     */
    public $OffInstanceCount;

    /**
     * @var string <p>部署组描述信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupDesc;

    /**
     * @var string <p>微服务类型</p>
     */
    public $MicroserviceType;

    /**
     * @var string <p>应用类型</p>
     */
    public $ApplicationType;

    /**
     * @var string <p>部署组资源类型</p><p>枚举值：</p><ul><li>GW： 网关</li><li>DEF： 普通业务部署组</li><li>SVL： Serverless</li></ul>
     */
    public $GroupResourceType;

    /**
     * @var integer <p>部署组更新时间戳</p>
     */
    public $UpdatedTime;

    /**
     * @var string <p>部署应用描述信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeployDesc;

    /**
     * @var integer <p>滚动发布的更新方式</p>
     */
    public $UpdateType;

    /**
     * @var boolean <p>发布是否启用beta批次</p>
     */
    public $DeployBetaEnable;

    /**
     * @var array <p>滚动发布的批次比例列表</p>
     */
    public $DeployBatch;

    /**
     * @var string <p>滚动发布的批次执行方式</p>
     */
    public $DeployExeMode;

    /**
     * @var integer <p>滚动发布的每个批次的等待时间</p>
     */
    public $DeployWaitTime;

    /**
     * @var boolean <p>是否开启了健康检查</p>
     */
    public $EnableHealthCheck;

    /**
     * @var HealthCheckSettings <p>健康检查配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HealthCheckSettings;

    /**
     * @var string <p>程序包类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageType;

    /**
     * @var string <p>启动脚本 base64编码</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartScript;

    /**
     * @var string <p>停止脚本 base64编码</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StopScript;

    /**
     * @var string <p>部署组备注</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Alias;

    /**
     * @var array <p>javaagent信息</p>
     */
    public $AgentProfileList;

    /**
     * @var WarmupSetting <p>预热属性配置</p>
     */
    public $WarmupSetting;

    /**
     * @var GatewayConfig <p>Envoy网关配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GatewayConfig;

    /**
     * @var boolean <p>批次是否开启健康检查</p>
     */
    public $EnableBatchHealthCheck;

    /**
     * @var boolean <p>是否开启cgroup控制内存cpu</p>
     */
    public $FilebeatCgroupEnable;

    /**
     * @var float <p>filebeat使用cpu上限</p>
     */
    public $FilebeatMaxCpu;

    /**
     * @var integer <p>filebeat使用内存上限</p>
     */
    public $FilebeatMaxMem;

    /**
     * @var string <p>仓库ID</p>
     */
    public $RepositoryId;

    /**
     * @var string <p>仓库名称</p>
     */
    public $RepositoryName;

    /**
     * @var string <p>仓库类型</p>
     */
    public $RepositoryType;

    /**
     * @var boolean <p>是否自动重启</p>
     */
    public $LivenessAutoRestart;

    /**
     * @var string <p>Mesh Sidecar 数据面版本通道</p><p>枚举值：</p><ul><li>stable： 稳定版</li><li>release： 最新版</li></ul>
     */
    public $MeshSidecarVersion;

    /**
     * @var string <p>业务日志配置 ID 列表</p>
     */
    public $BusinessLogConfigIdList;

    /**
     * @var string <p>业务系统 ID</p>
     */
    public $BusinessLogDeliveryConfigIdList;

    /**
     * @var string <p>String型普通说明场景</p>
     */
    public $BusinessSystemId;

    /**
     * @var string <p>业务系统名称</p>
     */
    public $BusinessSystemName;

    /**
     * @var string <p>CLS 机器组 ID</p>
     */
    public $ClsMachineGroupId;

    /**
     * @var boolean <p>是否开启服务治理</p>
     */
    public $EnableGovernance;

    /**
     * @var boolean <p>是否开启可观测</p>
     */
    public $EnableTelemetry;

    /**
     * @var boolean <p>是否开启 OT Agent</p>
     */
    public $EnableTelemetryAgent;

    /**
     * @var boolean <p>是否开启单元化</p>
     */
    public $EnabledUnit;

    /**
     * @var array <p>独享注册中心/配置中心实例列表</p>
     */
    public $ExclusiveInstances;

    /**
     * @var string <p>框架接入类型</p>
     */
    public $FrameworkType;

    /**
     * @var string <p>服务治理实例模式</p>
     */
    public $GovernanceType;

    /**
     * @var array <p>部署组关联实例 ID 列表</p>
     */
    public $InstanceIdList;

    /**
     * @var string <p>部署组是否处于停止状态</p>
     */
    public $IsStop;

    /**
     * @var string <p>K8s 命名空间名称</p>
     */
    public $K8sNamespaceName;

    /**
     * @var string <p>请求语言</p>
     */
    public $Language;

    /**
     * @var string <p>微服务子类型</p>
     */
    public $MicroserviceSubType;

    /**
     * @var string <p>非侵入接入子类型</p>
     */
    public $NonInvasiveType;

    /**
     * @var string <p>预停止脚本内容</p>
     */
    public $PreStopScript;

    /**
     * @var string <p>实际使用的 K8s 命名空间名称</p>
     */
    public $RealNamespaceName;

    /**
     * @var array <p>Mesh 服务端口与健康检查配置列表</p>
     */
    public $ServiceConfigList;

    /**
     * @var ServiceGovernanceConfig <p>服务治理配置聚合对象</p>
     */
    public $ServiceGovernanceConfig;

    /**
     * @var array <p>部署组标签列表</p>
     */
    public $Tags;

    /**
     * @var string <p>Tapm OT Agent 版本</p>
     */
    public $TapmOtAgentVersion;

    /**
     * @var string <p>单元环境类型</p>
     */
    public $UnitEnvType;

    /**
     * @var string <p>单元 ID</p>
     */
    public $UnitId;

    /**
     * @var string <p>单元类型</p>
     */
    public $UnitName;

    /**
     * @var string <p>部署组资源类型</p>
     */
    public $UnitType;

    /**
     * @param string $GroupId <p>部署组ID</p>
     * @param string $GroupName <p>部署组名称</p>
     * @param string $GroupStatus <p>部署组状态</p>
     * @param string $PackageId <p>程序包ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PackageName <p>程序包名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PackageVersion <p>程序包版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId <p>集群ID</p>
     * @param string $ClusterName <p>集群名称</p>
     * @param string $NamespaceId <p>命名空间ID</p>
     * @param string $NamespaceName <p>命名空间名称</p>
     * @param string $ApplicationId <p>应用ID</p>
     * @param string $ApplicationName <p>应用名称</p>
     * @param integer $InstanceCount <p>部署组机器数目</p>
     * @param integer $RunInstanceCount <p>部署组运行中机器数目</p>
     * @param string $StartupParameters <p>部署组启动参数信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>部署组创建时间</p>
     * @param string $UpdateTime <p>部署组更新时间</p>
     * @param integer $OffInstanceCount <p>部署组停止机器数目</p>
     * @param string $GroupDesc <p>部署组描述信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MicroserviceType <p>微服务类型</p>
     * @param string $ApplicationType <p>应用类型</p>
     * @param string $GroupResourceType <p>部署组资源类型</p><p>枚举值：</p><ul><li>GW： 网关</li><li>DEF： 普通业务部署组</li><li>SVL： Serverless</li></ul>
     * @param integer $UpdatedTime <p>部署组更新时间戳</p>
     * @param string $DeployDesc <p>部署应用描述信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateType <p>滚动发布的更新方式</p>
     * @param boolean $DeployBetaEnable <p>发布是否启用beta批次</p>
     * @param array $DeployBatch <p>滚动发布的批次比例列表</p>
     * @param string $DeployExeMode <p>滚动发布的批次执行方式</p>
     * @param integer $DeployWaitTime <p>滚动发布的每个批次的等待时间</p>
     * @param boolean $EnableHealthCheck <p>是否开启了健康检查</p>
     * @param HealthCheckSettings $HealthCheckSettings <p>健康检查配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PackageType <p>程序包类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartScript <p>启动脚本 base64编码</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StopScript <p>停止脚本 base64编码</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Alias <p>部署组备注</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AgentProfileList <p>javaagent信息</p>
     * @param WarmupSetting $WarmupSetting <p>预热属性配置</p>
     * @param GatewayConfig $GatewayConfig <p>Envoy网关配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableBatchHealthCheck <p>批次是否开启健康检查</p>
     * @param boolean $FilebeatCgroupEnable <p>是否开启cgroup控制内存cpu</p>
     * @param float $FilebeatMaxCpu <p>filebeat使用cpu上限</p>
     * @param integer $FilebeatMaxMem <p>filebeat使用内存上限</p>
     * @param string $RepositoryId <p>仓库ID</p>
     * @param string $RepositoryName <p>仓库名称</p>
     * @param string $RepositoryType <p>仓库类型</p>
     * @param boolean $LivenessAutoRestart <p>是否自动重启</p>
     * @param string $MeshSidecarVersion <p>Mesh Sidecar 数据面版本通道</p><p>枚举值：</p><ul><li>stable： 稳定版</li><li>release： 最新版</li></ul>
     * @param string $BusinessLogConfigIdList <p>业务日志配置 ID 列表</p>
     * @param string $BusinessLogDeliveryConfigIdList <p>业务系统 ID</p>
     * @param string $BusinessSystemId <p>String型普通说明场景</p>
     * @param string $BusinessSystemName <p>业务系统名称</p>
     * @param string $ClsMachineGroupId <p>CLS 机器组 ID</p>
     * @param boolean $EnableGovernance <p>是否开启服务治理</p>
     * @param boolean $EnableTelemetry <p>是否开启可观测</p>
     * @param boolean $EnableTelemetryAgent <p>是否开启 OT Agent</p>
     * @param boolean $EnabledUnit <p>是否开启单元化</p>
     * @param array $ExclusiveInstances <p>独享注册中心/配置中心实例列表</p>
     * @param string $FrameworkType <p>框架接入类型</p>
     * @param string $GovernanceType <p>服务治理实例模式</p>
     * @param array $InstanceIdList <p>部署组关联实例 ID 列表</p>
     * @param string $IsStop <p>部署组是否处于停止状态</p>
     * @param string $K8sNamespaceName <p>K8s 命名空间名称</p>
     * @param string $Language <p>请求语言</p>
     * @param string $MicroserviceSubType <p>微服务子类型</p>
     * @param string $NonInvasiveType <p>非侵入接入子类型</p>
     * @param string $PreStopScript <p>预停止脚本内容</p>
     * @param string $RealNamespaceName <p>实际使用的 K8s 命名空间名称</p>
     * @param array $ServiceConfigList <p>Mesh 服务端口与健康检查配置列表</p>
     * @param ServiceGovernanceConfig $ServiceGovernanceConfig <p>服务治理配置聚合对象</p>
     * @param array $Tags <p>部署组标签列表</p>
     * @param string $TapmOtAgentVersion <p>Tapm OT Agent 版本</p>
     * @param string $UnitEnvType <p>单元环境类型</p>
     * @param string $UnitId <p>单元 ID</p>
     * @param string $UnitName <p>单元类型</p>
     * @param string $UnitType <p>部署组资源类型</p>
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

        if (array_key_exists("GroupStatus",$param) and $param["GroupStatus"] !== null) {
            $this->GroupStatus = $param["GroupStatus"];
        }

        if (array_key_exists("PackageId",$param) and $param["PackageId"] !== null) {
            $this->PackageId = $param["PackageId"];
        }

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }

        if (array_key_exists("PackageVersion",$param) and $param["PackageVersion"] !== null) {
            $this->PackageVersion = $param["PackageVersion"];
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

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("RunInstanceCount",$param) and $param["RunInstanceCount"] !== null) {
            $this->RunInstanceCount = $param["RunInstanceCount"];
        }

        if (array_key_exists("StartupParameters",$param) and $param["StartupParameters"] !== null) {
            $this->StartupParameters = $param["StartupParameters"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("OffInstanceCount",$param) and $param["OffInstanceCount"] !== null) {
            $this->OffInstanceCount = $param["OffInstanceCount"];
        }

        if (array_key_exists("GroupDesc",$param) and $param["GroupDesc"] !== null) {
            $this->GroupDesc = $param["GroupDesc"];
        }

        if (array_key_exists("MicroserviceType",$param) and $param["MicroserviceType"] !== null) {
            $this->MicroserviceType = $param["MicroserviceType"];
        }

        if (array_key_exists("ApplicationType",$param) and $param["ApplicationType"] !== null) {
            $this->ApplicationType = $param["ApplicationType"];
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

        if (array_key_exists("UpdateType",$param) and $param["UpdateType"] !== null) {
            $this->UpdateType = $param["UpdateType"];
        }

        if (array_key_exists("DeployBetaEnable",$param) and $param["DeployBetaEnable"] !== null) {
            $this->DeployBetaEnable = $param["DeployBetaEnable"];
        }

        if (array_key_exists("DeployBatch",$param) and $param["DeployBatch"] !== null) {
            $this->DeployBatch = $param["DeployBatch"];
        }

        if (array_key_exists("DeployExeMode",$param) and $param["DeployExeMode"] !== null) {
            $this->DeployExeMode = $param["DeployExeMode"];
        }

        if (array_key_exists("DeployWaitTime",$param) and $param["DeployWaitTime"] !== null) {
            $this->DeployWaitTime = $param["DeployWaitTime"];
        }

        if (array_key_exists("EnableHealthCheck",$param) and $param["EnableHealthCheck"] !== null) {
            $this->EnableHealthCheck = $param["EnableHealthCheck"];
        }

        if (array_key_exists("HealthCheckSettings",$param) and $param["HealthCheckSettings"] !== null) {
            $this->HealthCheckSettings = new HealthCheckSettings();
            $this->HealthCheckSettings->deserialize($param["HealthCheckSettings"]);
        }

        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("StartScript",$param) and $param["StartScript"] !== null) {
            $this->StartScript = $param["StartScript"];
        }

        if (array_key_exists("StopScript",$param) and $param["StopScript"] !== null) {
            $this->StopScript = $param["StopScript"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("AgentProfileList",$param) and $param["AgentProfileList"] !== null) {
            $this->AgentProfileList = [];
            foreach ($param["AgentProfileList"] as $key => $value){
                $obj = new AgentProfile();
                $obj->deserialize($value);
                array_push($this->AgentProfileList, $obj);
            }
        }

        if (array_key_exists("WarmupSetting",$param) and $param["WarmupSetting"] !== null) {
            $this->WarmupSetting = new WarmupSetting();
            $this->WarmupSetting->deserialize($param["WarmupSetting"]);
        }

        if (array_key_exists("GatewayConfig",$param) and $param["GatewayConfig"] !== null) {
            $this->GatewayConfig = new GatewayConfig();
            $this->GatewayConfig->deserialize($param["GatewayConfig"]);
        }

        if (array_key_exists("EnableBatchHealthCheck",$param) and $param["EnableBatchHealthCheck"] !== null) {
            $this->EnableBatchHealthCheck = $param["EnableBatchHealthCheck"];
        }

        if (array_key_exists("FilebeatCgroupEnable",$param) and $param["FilebeatCgroupEnable"] !== null) {
            $this->FilebeatCgroupEnable = $param["FilebeatCgroupEnable"];
        }

        if (array_key_exists("FilebeatMaxCpu",$param) and $param["FilebeatMaxCpu"] !== null) {
            $this->FilebeatMaxCpu = $param["FilebeatMaxCpu"];
        }

        if (array_key_exists("FilebeatMaxMem",$param) and $param["FilebeatMaxMem"] !== null) {
            $this->FilebeatMaxMem = $param["FilebeatMaxMem"];
        }

        if (array_key_exists("RepositoryId",$param) and $param["RepositoryId"] !== null) {
            $this->RepositoryId = $param["RepositoryId"];
        }

        if (array_key_exists("RepositoryName",$param) and $param["RepositoryName"] !== null) {
            $this->RepositoryName = $param["RepositoryName"];
        }

        if (array_key_exists("RepositoryType",$param) and $param["RepositoryType"] !== null) {
            $this->RepositoryType = $param["RepositoryType"];
        }

        if (array_key_exists("LivenessAutoRestart",$param) and $param["LivenessAutoRestart"] !== null) {
            $this->LivenessAutoRestart = $param["LivenessAutoRestart"];
        }

        if (array_key_exists("MeshSidecarVersion",$param) and $param["MeshSidecarVersion"] !== null) {
            $this->MeshSidecarVersion = $param["MeshSidecarVersion"];
        }

        if (array_key_exists("BusinessLogConfigIdList",$param) and $param["BusinessLogConfigIdList"] !== null) {
            $this->BusinessLogConfigIdList = $param["BusinessLogConfigIdList"];
        }

        if (array_key_exists("BusinessLogDeliveryConfigIdList",$param) and $param["BusinessLogDeliveryConfigIdList"] !== null) {
            $this->BusinessLogDeliveryConfigIdList = $param["BusinessLogDeliveryConfigIdList"];
        }

        if (array_key_exists("BusinessSystemId",$param) and $param["BusinessSystemId"] !== null) {
            $this->BusinessSystemId = $param["BusinessSystemId"];
        }

        if (array_key_exists("BusinessSystemName",$param) and $param["BusinessSystemName"] !== null) {
            $this->BusinessSystemName = $param["BusinessSystemName"];
        }

        if (array_key_exists("ClsMachineGroupId",$param) and $param["ClsMachineGroupId"] !== null) {
            $this->ClsMachineGroupId = $param["ClsMachineGroupId"];
        }

        if (array_key_exists("EnableGovernance",$param) and $param["EnableGovernance"] !== null) {
            $this->EnableGovernance = $param["EnableGovernance"];
        }

        if (array_key_exists("EnableTelemetry",$param) and $param["EnableTelemetry"] !== null) {
            $this->EnableTelemetry = $param["EnableTelemetry"];
        }

        if (array_key_exists("EnableTelemetryAgent",$param) and $param["EnableTelemetryAgent"] !== null) {
            $this->EnableTelemetryAgent = $param["EnableTelemetryAgent"];
        }

        if (array_key_exists("EnabledUnit",$param) and $param["EnabledUnit"] !== null) {
            $this->EnabledUnit = $param["EnabledUnit"];
        }

        if (array_key_exists("ExclusiveInstances",$param) and $param["ExclusiveInstances"] !== null) {
            $this->ExclusiveInstances = [];
            foreach ($param["ExclusiveInstances"] as $key => $value){
                $obj = new ExclusiveInstance();
                $obj->deserialize($value);
                array_push($this->ExclusiveInstances, $obj);
            }
        }

        if (array_key_exists("FrameworkType",$param) and $param["FrameworkType"] !== null) {
            $this->FrameworkType = $param["FrameworkType"];
        }

        if (array_key_exists("GovernanceType",$param) and $param["GovernanceType"] !== null) {
            $this->GovernanceType = $param["GovernanceType"];
        }

        if (array_key_exists("InstanceIdList",$param) and $param["InstanceIdList"] !== null) {
            $this->InstanceIdList = $param["InstanceIdList"];
        }

        if (array_key_exists("IsStop",$param) and $param["IsStop"] !== null) {
            $this->IsStop = $param["IsStop"];
        }

        if (array_key_exists("K8sNamespaceName",$param) and $param["K8sNamespaceName"] !== null) {
            $this->K8sNamespaceName = $param["K8sNamespaceName"];
        }

        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }

        if (array_key_exists("MicroserviceSubType",$param) and $param["MicroserviceSubType"] !== null) {
            $this->MicroserviceSubType = $param["MicroserviceSubType"];
        }

        if (array_key_exists("NonInvasiveType",$param) and $param["NonInvasiveType"] !== null) {
            $this->NonInvasiveType = $param["NonInvasiveType"];
        }

        if (array_key_exists("PreStopScript",$param) and $param["PreStopScript"] !== null) {
            $this->PreStopScript = $param["PreStopScript"];
        }

        if (array_key_exists("RealNamespaceName",$param) and $param["RealNamespaceName"] !== null) {
            $this->RealNamespaceName = $param["RealNamespaceName"];
        }

        if (array_key_exists("ServiceConfigList",$param) and $param["ServiceConfigList"] !== null) {
            $this->ServiceConfigList = [];
            foreach ($param["ServiceConfigList"] as $key => $value){
                $obj = new ServiceConfig();
                $obj->deserialize($value);
                array_push($this->ServiceConfigList, $obj);
            }
        }

        if (array_key_exists("ServiceGovernanceConfig",$param) and $param["ServiceGovernanceConfig"] !== null) {
            $this->ServiceGovernanceConfig = new ServiceGovernanceConfig();
            $this->ServiceGovernanceConfig->deserialize($param["ServiceGovernanceConfig"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("TapmOtAgentVersion",$param) and $param["TapmOtAgentVersion"] !== null) {
            $this->TapmOtAgentVersion = $param["TapmOtAgentVersion"];
        }

        if (array_key_exists("UnitEnvType",$param) and $param["UnitEnvType"] !== null) {
            $this->UnitEnvType = $param["UnitEnvType"];
        }

        if (array_key_exists("UnitId",$param) and $param["UnitId"] !== null) {
            $this->UnitId = $param["UnitId"];
        }

        if (array_key_exists("UnitName",$param) and $param["UnitName"] !== null) {
            $this->UnitName = $param["UnitName"];
        }

        if (array_key_exists("UnitType",$param) and $param["UnitType"] !== null) {
            $this->UnitType = $param["UnitType"];
        }
    }
}
