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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 版本信息
 *
 * @method string getVersionId() 获取主键
 * @method void setVersionId(string $VersionId) 设置主键
 * @method string getApplicationId() 获取服务id
 * @method void setApplicationId(string $ApplicationId) 设置服务id
 * @method string getDeployMode() 获取部署方式
 * @method void setDeployMode(string $DeployMode) 设置部署方式
 * @method string getJdkVersion() 获取jdk版本
 * @method void setJdkVersion(string $JdkVersion) 设置jdk版本
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method string getDeployVersion() 获取部署版本
 * @method void setDeployVersion(string $DeployVersion) 设置部署版本
 * @method string getPublishMode() 获取发布方式
 * @method void setPublishMode(string $PublishMode) 设置发布方式
 * @method string getJvmOpts() 获取启动参数
 * @method void setJvmOpts(string $JvmOpts) 设置启动参数
 * @method integer getInitPodNum() 获取初始实例
 * @method void setInitPodNum(integer $InitPodNum) 设置初始实例
 * @method float getCpuSpec() 获取cpu规格
 * @method void setCpuSpec(float $CpuSpec) 设置cpu规格
 * @method float getMemorySpec() 获取内存规格
 * @method void setMemorySpec(float $MemorySpec) 设置内存规格
 * @method string getImgRepo() 获取镜像路径
 * @method void setImgRepo(string $ImgRepo) 设置镜像路径
 * @method string getImgName() 获取镜像名称
 * @method void setImgName(string $ImgName) 设置镜像名称
 * @method string getImgVersion() 获取镜像版本
 * @method void setImgVersion(string $ImgVersion) 设置镜像版本
 * @method EsInfo getEsInfo() 获取弹性配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEsInfo(EsInfo $EsInfo) 设置弹性配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEnvConf() 获取环境配置
 * @method void setEnvConf(array $EnvConf) 设置环境配置
 * @method array getStorageConfs() 获取存储配置
 * @method void setStorageConfs(array $StorageConfs) 设置存储配置
 * @method string getStatus() 获取运行状态
 * @method void setStatus(string $Status) 设置运行状态
 * @method string getVpc() 获取私有网络
 * @method void setVpc(string $Vpc) 设置私有网络
 * @method string getSubnetId() 获取子网网络
 * @method void setSubnetId(string $SubnetId) 设置子网网络
 * @method string getCreateDate() 获取创建时间
 * @method void setCreateDate(string $CreateDate) 设置创建时间
 * @method string getModifyDate() 获取修改时间
 * @method void setModifyDate(string $ModifyDate) 设置修改时间
 * @method array getStorageMountConfs() 获取挂载配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageMountConfs(array $StorageMountConfs) 设置挂载配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersionName() 获取版本名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionName(string $VersionName) 设置版本名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method LogOutputConf getLogOutputConf() 获取日志输出配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogOutputConf(LogOutputConf $LogOutputConf) 设置日志输出配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationName() 获取服务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationName(string $ApplicationName) 设置服务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationDescription() 获取服务描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationDescription(string $ApplicationDescription) 设置服务描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnvironmentName() 获取环境名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnvironmentName(string $EnvironmentName) 设置环境名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnvironmentId() 获取环境ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnvironmentId(string $EnvironmentId) 设置环境ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublicDomain() 获取公网地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicDomain(string $PublicDomain) 设置公网地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnablePublicAccess() 获取是否开通公网访问
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnablePublicAccess(boolean $EnablePublicAccess) 设置是否开通公网访问
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCurrentInstances() 获取现有的实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurrentInstances(integer $CurrentInstances) 设置现有的实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExpectedInstances() 获取期望的实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpectedInstances(integer $ExpectedInstances) 设置期望的实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCodingLanguage() 获取编程语言
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodingLanguage(string $CodingLanguage) 设置编程语言
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPkgName() 获取程序包名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPkgName(string $PkgName) 设置程序包名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEsEnable() 获取是否启用弹性伸缩
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEsEnable(integer $EsEnable) 设置是否启用弹性伸缩
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEsStrategy() 获取弹性策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEsStrategy(integer $EsStrategy) 设置弹性策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImageTag() 获取镜像tag
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageTag(string $ImageTag) 设置镜像tag
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLogEnable() 获取是否启用log
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogEnable(integer $LogEnable) 设置是否启用log
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMinAliveInstances() 获取最小实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMinAliveInstances(string $MinAliveInstances) 设置最小实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSecurityGroupIds() 获取安全组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置安全组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImageCommand() 获取镜像命令
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageCommand(string $ImageCommand) 设置镜像命令
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getImageArgs() 获取镜像命令参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageArgs(array $ImageArgs) 设置镜像命令参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getUseRegistryDefaultConfig() 获取是否使用默认注册中心配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUseRegistryDefaultConfig(boolean $UseRegistryDefaultConfig) 设置是否使用默认注册中心配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method EksService getService() 获取eks 访问设置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setService(EksService $Service) 设置eks 访问设置
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSettingConfs() 获取挂载配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSettingConfs(array $SettingConfs) 设置挂载配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLogConfs() 获取log path数组信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogConfs(array $LogConfs) 设置log path数组信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPostStart() 获取启动后立即执行的脚本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPostStart(string $PostStart) 设置启动后立即执行的脚本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPreStop() 获取停止前执行的脚本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPreStop(string $PreStop) 设置停止前执行的脚本
注意：此字段可能返回 null，表示取不到有效值。
 * @method HealthCheckConfig getLiveness() 获取存活探针配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLiveness(HealthCheckConfig $Liveness) 设置存活探针配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method HealthCheckConfig getReadiness() 获取就绪探针配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReadiness(HealthCheckConfig $Readiness) 设置就绪探针配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getHorizontalAutoscaler() 获取弹性策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHorizontalAutoscaler(array $HorizontalAutoscaler) 设置弹性策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCronHorizontalAutoscaler() 获取定时弹性策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCronHorizontalAutoscaler(array $CronHorizontalAutoscaler) 设置定时弹性策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getZones() 获取应用实际可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZones(array $Zones) 设置应用实际可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastDeployDate() 获取最新部署时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastDeployDate(string $LastDeployDate) 设置最新部署时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastDeploySuccessDate() 获取最新部署成功时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastDeploySuccessDate(string $LastDeploySuccessDate) 设置最新部署成功时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNodeInfos() 获取应用所在node信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeInfos(array $NodeInfos) 设置应用所在node信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getImageType() 获取image类型 -0 为demo -1为正常image
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageType(integer $ImageType) 设置image类型 -0 为demo -1为正常image
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEnableTracing() 获取是否启用调用链组件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableTracing(integer $EnableTracing) 设置是否启用调用链组件
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEnableTracingReport() 获取是否开启调用链上报，只有 EnableTracing=1 时生效（参数已弃用）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableTracingReport(integer $EnableTracingReport) 设置是否开启调用链上报，只有 EnableTracing=1 时生效（参数已弃用）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRepoType() 获取镜像类型：0-个人镜像、1-企业镜像、2-公有镜像
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRepoType(integer $RepoType) 设置镜像类型：0-个人镜像、1-企业镜像、2-公有镜像
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBatchDeployStatus() 获取分批发布子状态：batch_updating、batch_updating_waiting_confirm
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBatchDeployStatus(string $BatchDeployStatus) 设置分批发布子状态：batch_updating、batch_updating_waiting_confirm
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApmInstanceId() 获取APM 资源 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApmInstanceId(string $ApmInstanceId) 设置APM 资源 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method WorkloadInfo getWorkloadInfo() 获取工作负载信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkloadInfo(WorkloadInfo $WorkloadInfo) 设置工作负载信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSpeedUp() 获取是否启用应用加速
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpeedUp(boolean $SpeedUp) 设置是否启用应用加速
注意：此字段可能返回 null，表示取不到有效值。
 * @method HealthCheckConfig getStartupProbe() 获取启动检测探针配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartupProbe(HealthCheckConfig $StartupProbe) 设置启动检测探针配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOsFlavour() 获取操作系统版本，可选参数：
- ALPINE
- CENTOS
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOsFlavour(string $OsFlavour) 设置操作系统版本，可选参数：
- ALPINE
- CENTOS
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRepoServer() 获取镜像仓库server
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRepoServer(string $RepoServer) 设置镜像仓库server
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getUnderDeploying() 获取是否正在发布中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnderDeploying(boolean $UnderDeploying) 设置是否正在发布中
注意：此字段可能返回 null，表示取不到有效值。
 * @method EnablePrometheusConf getEnablePrometheusConf() 获取监控业务指标监控
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnablePrometheusConf(EnablePrometheusConf $EnablePrometheusConf) 设置监控业务指标监控
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getStoppedManually() 获取是否为手动停止
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStoppedManually(boolean $StoppedManually) 设置是否为手动停止
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTcrInstanceId() 获取tcr实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTcrInstanceId(string $TcrInstanceId) 设置tcr实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEnableMetrics() 获取1：开始自动metrics采集（open-telemetry）；
0：关闭metrics采集；
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableMetrics(integer $EnableMetrics) 设置1：开始自动metrics采集（open-telemetry）；
0：关闭metrics采集；
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppId() 获取用户AppId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(string $AppId) 设置用户AppId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubAccountUin() 获取用户SubAccountUin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubAccountUin(string $SubAccountUin) 设置用户SubAccountUin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUin() 获取用户Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUin(string $Uin) 设置用户Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupId() 获取应用分组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupId(string $GroupId) 设置应用分组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEnableRegistry() 获取是否启用注册中心
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableRegistry(integer $EnableRegistry) 设置是否启用注册中心
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAutoscalerList() 获取弹性伸缩数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoscalerList(array $AutoscalerList) 设置弹性伸缩数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifier() 获取修改人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifier(string $Modifier) 设置修改人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreator() 获取创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreator(string $Creator) 设置创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method DeployStrategyConf getDeployStrategyConf() 获取部署策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeployStrategyConf(DeployStrategyConf $DeployStrategyConf) 设置部署策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method DescribeRunPodPage getPodList() 获取实例列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPodList(DescribeRunPodPage $PodList) 设置实例列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getConfEdited() 获取发布时配置是否有修改
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfEdited(boolean $ConfEdited) 设置发布时配置是否有修改
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPreStopEncoded() 获取是否编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPreStopEncoded(string $PreStopEncoded) 设置是否编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPostStartEncoded() 获取是否编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPostStartEncoded(string $PostStartEncoded) 设置是否编码
注意：此字段可能返回 null，表示取不到有效值。
 */
class TemServiceVersionInfo extends AbstractModel
{
    /**
     * @var string 主键
     */
    public $VersionId;

    /**
     * @var string 服务id
     */
    public $ApplicationId;

    /**
     * @var string 部署方式
     */
    public $DeployMode;

    /**
     * @var string jdk版本
     */
    public $JdkVersion;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var string 部署版本
     */
    public $DeployVersion;

    /**
     * @var string 发布方式
     */
    public $PublishMode;

    /**
     * @var string 启动参数
     */
    public $JvmOpts;

    /**
     * @var integer 初始实例
     */
    public $InitPodNum;

    /**
     * @var float cpu规格
     */
    public $CpuSpec;

    /**
     * @var float 内存规格
     */
    public $MemorySpec;

    /**
     * @var string 镜像路径
     */
    public $ImgRepo;

    /**
     * @var string 镜像名称
     */
    public $ImgName;

    /**
     * @var string 镜像版本
     */
    public $ImgVersion;

    /**
     * @var EsInfo 弹性配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EsInfo;

    /**
     * @var array 环境配置
     */
    public $EnvConf;

    /**
     * @var array 存储配置
     */
    public $StorageConfs;

    /**
     * @var string 运行状态
     */
    public $Status;

    /**
     * @var string 私有网络
     */
    public $Vpc;

    /**
     * @var string 子网网络
     */
    public $SubnetId;

    /**
     * @var string 创建时间
     */
    public $CreateDate;

    /**
     * @var string 修改时间
     */
    public $ModifyDate;

    /**
     * @var array 挂载配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageMountConfs;

    /**
     * @var string 版本名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionName;

    /**
     * @var LogOutputConf 日志输出配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogOutputConf;

    /**
     * @var string 服务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationName;

    /**
     * @var string 服务描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationDescription;

    /**
     * @var string 环境名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnvironmentName;

    /**
     * @var string 环境ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnvironmentId;

    /**
     * @var string 公网地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicDomain;

    /**
     * @var boolean 是否开通公网访问
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnablePublicAccess;

    /**
     * @var integer 现有的实例
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CurrentInstances;

    /**
     * @var integer 期望的实例
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpectedInstances;

    /**
     * @var string 编程语言
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CodingLanguage;

    /**
     * @var string 程序包名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PkgName;

    /**
     * @var integer 是否启用弹性伸缩
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EsEnable;

    /**
     * @var integer 弹性策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EsStrategy;

    /**
     * @var string 镜像tag
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageTag;

    /**
     * @var integer 是否启用log
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogEnable;

    /**
     * @var string 最小实例数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MinAliveInstances;

    /**
     * @var array 安全组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecurityGroupIds;

    /**
     * @var string 镜像命令
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageCommand;

    /**
     * @var array 镜像命令参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageArgs;

    /**
     * @var boolean 是否使用默认注册中心配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UseRegistryDefaultConfig;

    /**
     * @var EksService eks 访问设置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Service;

    /**
     * @var array 挂载配置信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SettingConfs;

    /**
     * @var array log path数组信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogConfs;

    /**
     * @var string 启动后立即执行的脚本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PostStart;

    /**
     * @var string 停止前执行的脚本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PreStop;

    /**
     * @var HealthCheckConfig 存活探针配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Liveness;

    /**
     * @var HealthCheckConfig 就绪探针配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Readiness;

    /**
     * @var array 弹性策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HorizontalAutoscaler;

    /**
     * @var array 定时弹性策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CronHorizontalAutoscaler;

    /**
     * @var array 应用实际可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Zones;

    /**
     * @var string 最新部署时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastDeployDate;

    /**
     * @var string 最新部署成功时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastDeploySuccessDate;

    /**
     * @var array 应用所在node信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeInfos;

    /**
     * @var integer image类型 -0 为demo -1为正常image
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageType;

    /**
     * @var integer 是否启用调用链组件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableTracing;

    /**
     * @var integer 是否开启调用链上报，只有 EnableTracing=1 时生效（参数已弃用）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableTracingReport;

    /**
     * @var integer 镜像类型：0-个人镜像、1-企业镜像、2-公有镜像
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RepoType;

    /**
     * @var string 分批发布子状态：batch_updating、batch_updating_waiting_confirm
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BatchDeployStatus;

    /**
     * @var string APM 资源 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApmInstanceId;

    /**
     * @var WorkloadInfo 工作负载信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkloadInfo;

    /**
     * @var boolean 是否启用应用加速
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpeedUp;

    /**
     * @var HealthCheckConfig 启动检测探针配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartupProbe;

    /**
     * @var string 操作系统版本，可选参数：
- ALPINE
- CENTOS
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OsFlavour;

    /**
     * @var string 镜像仓库server
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RepoServer;

    /**
     * @var boolean 是否正在发布中
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnderDeploying;

    /**
     * @var EnablePrometheusConf 监控业务指标监控
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnablePrometheusConf;

    /**
     * @var boolean 是否为手动停止
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StoppedManually;

    /**
     * @var string tcr实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TcrInstanceId;

    /**
     * @var integer 1：开始自动metrics采集（open-telemetry）；
0：关闭metrics采集；
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableMetrics;

    /**
     * @var string 用户AppId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string 用户SubAccountUin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubAccountUin;

    /**
     * @var string 用户Uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uin;

    /**
     * @var string 地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string 应用分组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupId;

    /**
     * @var integer 是否启用注册中心
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableRegistry;

    /**
     * @var array 弹性伸缩数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoscalerList;

    /**
     * @var string 修改人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Modifier;

    /**
     * @var string 创建人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Creator;

    /**
     * @var DeployStrategyConf 部署策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeployStrategyConf;

    /**
     * @var DescribeRunPodPage 实例列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PodList;

    /**
     * @var boolean 发布时配置是否有修改
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfEdited;

    /**
     * @var array 标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 是否编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PreStopEncoded;

    /**
     * @var string 是否编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PostStartEncoded;

    /**
     * @param string $VersionId 主键
     * @param string $ApplicationId 服务id
     * @param string $DeployMode 部署方式
     * @param string $JdkVersion jdk版本
     * @param string $Description 描述
     * @param string $DeployVersion 部署版本
     * @param string $PublishMode 发布方式
     * @param string $JvmOpts 启动参数
     * @param integer $InitPodNum 初始实例
     * @param float $CpuSpec cpu规格
     * @param float $MemorySpec 内存规格
     * @param string $ImgRepo 镜像路径
     * @param string $ImgName 镜像名称
     * @param string $ImgVersion 镜像版本
     * @param EsInfo $EsInfo 弹性配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $EnvConf 环境配置
     * @param array $StorageConfs 存储配置
     * @param string $Status 运行状态
     * @param string $Vpc 私有网络
     * @param string $SubnetId 子网网络
     * @param string $CreateDate 创建时间
     * @param string $ModifyDate 修改时间
     * @param array $StorageMountConfs 挂载配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VersionName 版本名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param LogOutputConf $LogOutputConf 日志输出配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationName 服务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationDescription 服务描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EnvironmentName 环境名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EnvironmentId 环境ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublicDomain 公网地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnablePublicAccess 是否开通公网访问
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CurrentInstances 现有的实例
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExpectedInstances 期望的实例
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CodingLanguage 编程语言
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PkgName 程序包名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EsEnable 是否启用弹性伸缩
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EsStrategy 弹性策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImageTag 镜像tag
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LogEnable 是否启用log
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MinAliveInstances 最小实例数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SecurityGroupIds 安全组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImageCommand 镜像命令
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ImageArgs 镜像命令参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $UseRegistryDefaultConfig 是否使用默认注册中心配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param EksService $Service eks 访问设置
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SettingConfs 挂载配置信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LogConfs log path数组信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PostStart 启动后立即执行的脚本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PreStop 停止前执行的脚本
注意：此字段可能返回 null，表示取不到有效值。
     * @param HealthCheckConfig $Liveness 存活探针配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param HealthCheckConfig $Readiness 就绪探针配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $HorizontalAutoscaler 弹性策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CronHorizontalAutoscaler 定时弹性策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Zones 应用实际可用区
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastDeployDate 最新部署时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastDeploySuccessDate 最新部署成功时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NodeInfos 应用所在node信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ImageType image类型 -0 为demo -1为正常image
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EnableTracing 是否启用调用链组件
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EnableTracingReport 是否开启调用链上报，只有 EnableTracing=1 时生效（参数已弃用）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RepoType 镜像类型：0-个人镜像、1-企业镜像、2-公有镜像
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BatchDeployStatus 分批发布子状态：batch_updating、batch_updating_waiting_confirm
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApmInstanceId APM 资源 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param WorkloadInfo $WorkloadInfo 工作负载信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SpeedUp 是否启用应用加速
注意：此字段可能返回 null，表示取不到有效值。
     * @param HealthCheckConfig $StartupProbe 启动检测探针配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OsFlavour 操作系统版本，可选参数：
- ALPINE
- CENTOS
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RepoServer 镜像仓库server
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $UnderDeploying 是否正在发布中
注意：此字段可能返回 null，表示取不到有效值。
     * @param EnablePrometheusConf $EnablePrometheusConf 监控业务指标监控
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $StoppedManually 是否为手动停止
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TcrInstanceId tcr实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EnableMetrics 1：开始自动metrics采集（open-telemetry）；
0：关闭metrics采集；
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppId 用户AppId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubAccountUin 用户SubAccountUin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uin 用户Uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupId 应用分组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EnableRegistry 是否启用注册中心
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AutoscalerList 弹性伸缩数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Modifier 修改人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Creator 创建人
注意：此字段可能返回 null，表示取不到有效值。
     * @param DeployStrategyConf $DeployStrategyConf 部署策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param DescribeRunPodPage $PodList 实例列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ConfEdited 发布时配置是否有修改
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PreStopEncoded 是否编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PostStartEncoded 是否编码
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
        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("DeployMode",$param) and $param["DeployMode"] !== null) {
            $this->DeployMode = $param["DeployMode"];
        }

        if (array_key_exists("JdkVersion",$param) and $param["JdkVersion"] !== null) {
            $this->JdkVersion = $param["JdkVersion"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DeployVersion",$param) and $param["DeployVersion"] !== null) {
            $this->DeployVersion = $param["DeployVersion"];
        }

        if (array_key_exists("PublishMode",$param) and $param["PublishMode"] !== null) {
            $this->PublishMode = $param["PublishMode"];
        }

        if (array_key_exists("JvmOpts",$param) and $param["JvmOpts"] !== null) {
            $this->JvmOpts = $param["JvmOpts"];
        }

        if (array_key_exists("InitPodNum",$param) and $param["InitPodNum"] !== null) {
            $this->InitPodNum = $param["InitPodNum"];
        }

        if (array_key_exists("CpuSpec",$param) and $param["CpuSpec"] !== null) {
            $this->CpuSpec = $param["CpuSpec"];
        }

        if (array_key_exists("MemorySpec",$param) and $param["MemorySpec"] !== null) {
            $this->MemorySpec = $param["MemorySpec"];
        }

        if (array_key_exists("ImgRepo",$param) and $param["ImgRepo"] !== null) {
            $this->ImgRepo = $param["ImgRepo"];
        }

        if (array_key_exists("ImgName",$param) and $param["ImgName"] !== null) {
            $this->ImgName = $param["ImgName"];
        }

        if (array_key_exists("ImgVersion",$param) and $param["ImgVersion"] !== null) {
            $this->ImgVersion = $param["ImgVersion"];
        }

        if (array_key_exists("EsInfo",$param) and $param["EsInfo"] !== null) {
            $this->EsInfo = new EsInfo();
            $this->EsInfo->deserialize($param["EsInfo"]);
        }

        if (array_key_exists("EnvConf",$param) and $param["EnvConf"] !== null) {
            $this->EnvConf = [];
            foreach ($param["EnvConf"] as $key => $value){
                $obj = new Pair();
                $obj->deserialize($value);
                array_push($this->EnvConf, $obj);
            }
        }

        if (array_key_exists("StorageConfs",$param) and $param["StorageConfs"] !== null) {
            $this->StorageConfs = [];
            foreach ($param["StorageConfs"] as $key => $value){
                $obj = new StorageConf();
                $obj->deserialize($value);
                array_push($this->StorageConfs, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Vpc",$param) and $param["Vpc"] !== null) {
            $this->Vpc = $param["Vpc"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("CreateDate",$param) and $param["CreateDate"] !== null) {
            $this->CreateDate = $param["CreateDate"];
        }

        if (array_key_exists("ModifyDate",$param) and $param["ModifyDate"] !== null) {
            $this->ModifyDate = $param["ModifyDate"];
        }

        if (array_key_exists("StorageMountConfs",$param) and $param["StorageMountConfs"] !== null) {
            $this->StorageMountConfs = [];
            foreach ($param["StorageMountConfs"] as $key => $value){
                $obj = new StorageMountConf();
                $obj->deserialize($value);
                array_push($this->StorageMountConfs, $obj);
            }
        }

        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("LogOutputConf",$param) and $param["LogOutputConf"] !== null) {
            $this->LogOutputConf = new LogOutputConf();
            $this->LogOutputConf->deserialize($param["LogOutputConf"]);
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("ApplicationDescription",$param) and $param["ApplicationDescription"] !== null) {
            $this->ApplicationDescription = $param["ApplicationDescription"];
        }

        if (array_key_exists("EnvironmentName",$param) and $param["EnvironmentName"] !== null) {
            $this->EnvironmentName = $param["EnvironmentName"];
        }

        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("PublicDomain",$param) and $param["PublicDomain"] !== null) {
            $this->PublicDomain = $param["PublicDomain"];
        }

        if (array_key_exists("EnablePublicAccess",$param) and $param["EnablePublicAccess"] !== null) {
            $this->EnablePublicAccess = $param["EnablePublicAccess"];
        }

        if (array_key_exists("CurrentInstances",$param) and $param["CurrentInstances"] !== null) {
            $this->CurrentInstances = $param["CurrentInstances"];
        }

        if (array_key_exists("ExpectedInstances",$param) and $param["ExpectedInstances"] !== null) {
            $this->ExpectedInstances = $param["ExpectedInstances"];
        }

        if (array_key_exists("CodingLanguage",$param) and $param["CodingLanguage"] !== null) {
            $this->CodingLanguage = $param["CodingLanguage"];
        }

        if (array_key_exists("PkgName",$param) and $param["PkgName"] !== null) {
            $this->PkgName = $param["PkgName"];
        }

        if (array_key_exists("EsEnable",$param) and $param["EsEnable"] !== null) {
            $this->EsEnable = $param["EsEnable"];
        }

        if (array_key_exists("EsStrategy",$param) and $param["EsStrategy"] !== null) {
            $this->EsStrategy = $param["EsStrategy"];
        }

        if (array_key_exists("ImageTag",$param) and $param["ImageTag"] !== null) {
            $this->ImageTag = $param["ImageTag"];
        }

        if (array_key_exists("LogEnable",$param) and $param["LogEnable"] !== null) {
            $this->LogEnable = $param["LogEnable"];
        }

        if (array_key_exists("MinAliveInstances",$param) and $param["MinAliveInstances"] !== null) {
            $this->MinAliveInstances = $param["MinAliveInstances"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("ImageCommand",$param) and $param["ImageCommand"] !== null) {
            $this->ImageCommand = $param["ImageCommand"];
        }

        if (array_key_exists("ImageArgs",$param) and $param["ImageArgs"] !== null) {
            $this->ImageArgs = $param["ImageArgs"];
        }

        if (array_key_exists("UseRegistryDefaultConfig",$param) and $param["UseRegistryDefaultConfig"] !== null) {
            $this->UseRegistryDefaultConfig = $param["UseRegistryDefaultConfig"];
        }

        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = new EksService();
            $this->Service->deserialize($param["Service"]);
        }

        if (array_key_exists("SettingConfs",$param) and $param["SettingConfs"] !== null) {
            $this->SettingConfs = [];
            foreach ($param["SettingConfs"] as $key => $value){
                $obj = new MountedSettingConf();
                $obj->deserialize($value);
                array_push($this->SettingConfs, $obj);
            }
        }

        if (array_key_exists("LogConfs",$param) and $param["LogConfs"] !== null) {
            $this->LogConfs = $param["LogConfs"];
        }

        if (array_key_exists("PostStart",$param) and $param["PostStart"] !== null) {
            $this->PostStart = $param["PostStart"];
        }

        if (array_key_exists("PreStop",$param) and $param["PreStop"] !== null) {
            $this->PreStop = $param["PreStop"];
        }

        if (array_key_exists("Liveness",$param) and $param["Liveness"] !== null) {
            $this->Liveness = new HealthCheckConfig();
            $this->Liveness->deserialize($param["Liveness"]);
        }

        if (array_key_exists("Readiness",$param) and $param["Readiness"] !== null) {
            $this->Readiness = new HealthCheckConfig();
            $this->Readiness->deserialize($param["Readiness"]);
        }

        if (array_key_exists("HorizontalAutoscaler",$param) and $param["HorizontalAutoscaler"] !== null) {
            $this->HorizontalAutoscaler = [];
            foreach ($param["HorizontalAutoscaler"] as $key => $value){
                $obj = new HorizontalAutoscaler();
                $obj->deserialize($value);
                array_push($this->HorizontalAutoscaler, $obj);
            }
        }

        if (array_key_exists("CronHorizontalAutoscaler",$param) and $param["CronHorizontalAutoscaler"] !== null) {
            $this->CronHorizontalAutoscaler = [];
            foreach ($param["CronHorizontalAutoscaler"] as $key => $value){
                $obj = new CronHorizontalAutoscaler();
                $obj->deserialize($value);
                array_push($this->CronHorizontalAutoscaler, $obj);
            }
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("LastDeployDate",$param) and $param["LastDeployDate"] !== null) {
            $this->LastDeployDate = $param["LastDeployDate"];
        }

        if (array_key_exists("LastDeploySuccessDate",$param) and $param["LastDeploySuccessDate"] !== null) {
            $this->LastDeploySuccessDate = $param["LastDeploySuccessDate"];
        }

        if (array_key_exists("NodeInfos",$param) and $param["NodeInfos"] !== null) {
            $this->NodeInfos = [];
            foreach ($param["NodeInfos"] as $key => $value){
                $obj = new NodeInfo();
                $obj->deserialize($value);
                array_push($this->NodeInfos, $obj);
            }
        }

        if (array_key_exists("ImageType",$param) and $param["ImageType"] !== null) {
            $this->ImageType = $param["ImageType"];
        }

        if (array_key_exists("EnableTracing",$param) and $param["EnableTracing"] !== null) {
            $this->EnableTracing = $param["EnableTracing"];
        }

        if (array_key_exists("EnableTracingReport",$param) and $param["EnableTracingReport"] !== null) {
            $this->EnableTracingReport = $param["EnableTracingReport"];
        }

        if (array_key_exists("RepoType",$param) and $param["RepoType"] !== null) {
            $this->RepoType = $param["RepoType"];
        }

        if (array_key_exists("BatchDeployStatus",$param) and $param["BatchDeployStatus"] !== null) {
            $this->BatchDeployStatus = $param["BatchDeployStatus"];
        }

        if (array_key_exists("ApmInstanceId",$param) and $param["ApmInstanceId"] !== null) {
            $this->ApmInstanceId = $param["ApmInstanceId"];
        }

        if (array_key_exists("WorkloadInfo",$param) and $param["WorkloadInfo"] !== null) {
            $this->WorkloadInfo = new WorkloadInfo();
            $this->WorkloadInfo->deserialize($param["WorkloadInfo"]);
        }

        if (array_key_exists("SpeedUp",$param) and $param["SpeedUp"] !== null) {
            $this->SpeedUp = $param["SpeedUp"];
        }

        if (array_key_exists("StartupProbe",$param) and $param["StartupProbe"] !== null) {
            $this->StartupProbe = new HealthCheckConfig();
            $this->StartupProbe->deserialize($param["StartupProbe"]);
        }

        if (array_key_exists("OsFlavour",$param) and $param["OsFlavour"] !== null) {
            $this->OsFlavour = $param["OsFlavour"];
        }

        if (array_key_exists("RepoServer",$param) and $param["RepoServer"] !== null) {
            $this->RepoServer = $param["RepoServer"];
        }

        if (array_key_exists("UnderDeploying",$param) and $param["UnderDeploying"] !== null) {
            $this->UnderDeploying = $param["UnderDeploying"];
        }

        if (array_key_exists("EnablePrometheusConf",$param) and $param["EnablePrometheusConf"] !== null) {
            $this->EnablePrometheusConf = new EnablePrometheusConf();
            $this->EnablePrometheusConf->deserialize($param["EnablePrometheusConf"]);
        }

        if (array_key_exists("StoppedManually",$param) and $param["StoppedManually"] !== null) {
            $this->StoppedManually = $param["StoppedManually"];
        }

        if (array_key_exists("TcrInstanceId",$param) and $param["TcrInstanceId"] !== null) {
            $this->TcrInstanceId = $param["TcrInstanceId"];
        }

        if (array_key_exists("EnableMetrics",$param) and $param["EnableMetrics"] !== null) {
            $this->EnableMetrics = $param["EnableMetrics"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("EnableRegistry",$param) and $param["EnableRegistry"] !== null) {
            $this->EnableRegistry = $param["EnableRegistry"];
        }

        if (array_key_exists("AutoscalerList",$param) and $param["AutoscalerList"] !== null) {
            $this->AutoscalerList = [];
            foreach ($param["AutoscalerList"] as $key => $value){
                $obj = new Autoscaler();
                $obj->deserialize($value);
                array_push($this->AutoscalerList, $obj);
            }
        }

        if (array_key_exists("Modifier",$param) and $param["Modifier"] !== null) {
            $this->Modifier = $param["Modifier"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("DeployStrategyConf",$param) and $param["DeployStrategyConf"] !== null) {
            $this->DeployStrategyConf = new DeployStrategyConf();
            $this->DeployStrategyConf->deserialize($param["DeployStrategyConf"]);
        }

        if (array_key_exists("PodList",$param) and $param["PodList"] !== null) {
            $this->PodList = new DescribeRunPodPage();
            $this->PodList->deserialize($param["PodList"]);
        }

        if (array_key_exists("ConfEdited",$param) and $param["ConfEdited"] !== null) {
            $this->ConfEdited = $param["ConfEdited"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("PreStopEncoded",$param) and $param["PreStopEncoded"] !== null) {
            $this->PreStopEncoded = $param["PreStopEncoded"];
        }

        if (array_key_exists("PostStartEncoded",$param) and $param["PostStartEncoded"] !== null) {
            $this->PostStartEncoded = $param["PostStartEncoded"];
        }
    }
}
