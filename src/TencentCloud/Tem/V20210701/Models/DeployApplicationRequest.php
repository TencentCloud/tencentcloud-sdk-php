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
 * DeployApplication请求参数结构体
 *
 * @method string getApplicationId() 获取应用ID
 * @method void setApplicationId(string $ApplicationId) 设置应用ID
 * @method integer getInitPodNum() 获取初始化 pod 数
 * @method void setInitPodNum(integer $InitPodNum) 设置初始化 pod 数
 * @method float getCpuSpec() 获取cpu规格
 * @method void setCpuSpec(float $CpuSpec) 设置cpu规格
 * @method float getMemorySpec() 获取内存规格
 * @method void setMemorySpec(float $MemorySpec) 设置内存规格
 * @method string getEnvironmentId() 获取环境ID
 * @method void setEnvironmentId(string $EnvironmentId) 设置环境ID
 * @method string getImgRepo() 获取镜像仓库
 * @method void setImgRepo(string $ImgRepo) 设置镜像仓库
 * @method string getVersionDesc() 获取版本描述信息
 * @method void setVersionDesc(string $VersionDesc) 设置版本描述信息
 * @method string getJvmOpts() 获取启动参数
 * @method void setJvmOpts(string $JvmOpts) 设置启动参数
 * @method EsInfo getEsInfo() 获取弹性伸缩配置（已废弃，请使用HorizontalAutoscaler设置弹性策略）
 * @method void setEsInfo(EsInfo $EsInfo) 设置弹性伸缩配置（已废弃，请使用HorizontalAutoscaler设置弹性策略）
 * @method array getEnvConf() 获取环境变量配置
 * @method void setEnvConf(array $EnvConf) 设置环境变量配置
 * @method array getLogConfs() 获取日志配置
 * @method void setLogConfs(array $LogConfs) 设置日志配置
 * @method array getStorageConfs() 获取数据卷配置
 * @method void setStorageConfs(array $StorageConfs) 设置数据卷配置
 * @method array getStorageMountConfs() 获取数据卷挂载配置
 * @method void setStorageMountConfs(array $StorageMountConfs) 设置数据卷挂载配置
 * @method string getDeployMode() 获取部署类型。
- JAR：通过 jar 包部署
- WAR：通过 war 包部署
- IMAGE：通过镜像部署
 * @method void setDeployMode(string $DeployMode) 设置部署类型。
- JAR：通过 jar 包部署
- WAR：通过 war 包部署
- IMAGE：通过镜像部署
 * @method string getDeployVersion() 获取部署类型为 IMAGE 时，该参数表示镜像 tag。
部署类型为 JAR/WAR 时，该参数表示包版本号。
 * @method void setDeployVersion(string $DeployVersion) 设置部署类型为 IMAGE 时，该参数表示镜像 tag。
部署类型为 JAR/WAR 时，该参数表示包版本号。
 * @method string getPkgName() 获取包名。使用 JAR 包或者 WAR 包部署的时候必填。
 * @method void setPkgName(string $PkgName) 设置包名。使用 JAR 包或者 WAR 包部署的时候必填。
 * @method string getJdkVersion() 获取JDK 版本。
- KONA:8：使用 kona jdk 8。
- OPEN:8：使用 open jdk 8。
- KONA:11：使用 kona jdk 11。
- OPEN:11：使用 open jdk 11。
 * @method void setJdkVersion(string $JdkVersion) 设置JDK 版本。
- KONA:8：使用 kona jdk 8。
- OPEN:8：使用 open jdk 8。
- KONA:11：使用 kona jdk 11。
- OPEN:11：使用 open jdk 11。
 * @method array getSecurityGroupIds() 获取安全组ID s
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置安全组ID s
 * @method LogOutputConf getLogOutputConf() 获取日志输出配置
 * @method void setLogOutputConf(LogOutputConf $LogOutputConf) 设置日志输出配置
 * @method integer getSourceChannel() 获取来源渠道
 * @method void setSourceChannel(integer $SourceChannel) 设置来源渠道
 * @method string getDescription() 获取版本描述
 * @method void setDescription(string $Description) 设置版本描述
 * @method string getImageCommand() 获取镜像命令
 * @method void setImageCommand(string $ImageCommand) 设置镜像命令
 * @method array getImageArgs() 获取镜像命令参数
 * @method void setImageArgs(array $ImageArgs) 设置镜像命令参数
 * @method boolean getUseRegistryDefaultConfig() 获取是否添加默认注册中心配置
 * @method void setUseRegistryDefaultConfig(boolean $UseRegistryDefaultConfig) 设置是否添加默认注册中心配置
 * @method array getSettingConfs() 获取挂载配置信息
 * @method void setSettingConfs(array $SettingConfs) 设置挂载配置信息
 * @method EksService getService() 获取应用访问设置
 * @method void setService(EksService $Service) 设置应用访问设置
 * @method string getVersionId() 获取要回滚到的历史版本id
 * @method void setVersionId(string $VersionId) 设置要回滚到的历史版本id
 * @method string getPostStart() 获取启动后执行的脚本
 * @method void setPostStart(string $PostStart) 设置启动后执行的脚本
 * @method string getPreStop() 获取停止前执行的脚本
 * @method void setPreStop(string $PreStop) 设置停止前执行的脚本
 * @method HealthCheckConfig getLiveness() 获取存活探针配置
 * @method void setLiveness(HealthCheckConfig $Liveness) 设置存活探针配置
 * @method HealthCheckConfig getReadiness() 获取就绪探针配置
 * @method void setReadiness(HealthCheckConfig $Readiness) 设置就绪探针配置
 * @method DeployStrategyConf getDeployStrategyConf() 获取分批发布策略配置
 * @method void setDeployStrategyConf(DeployStrategyConf $DeployStrategyConf) 设置分批发布策略配置
 * @method array getHorizontalAutoscaler() 获取弹性策略（已弃用，请使用弹性伸缩策略组合相关接口）
 * @method void setHorizontalAutoscaler(array $HorizontalAutoscaler) 设置弹性策略（已弃用，请使用弹性伸缩策略组合相关接口）
 * @method array getCronHorizontalAutoscaler() 获取定时弹性策略（已弃用，请使用弹性伸缩策略组合相关接口）
 * @method void setCronHorizontalAutoscaler(array $CronHorizontalAutoscaler) 设置定时弹性策略（已弃用，请使用弹性伸缩策略组合相关接口）
 * @method integer getLogEnable() 获取是否启用log，1为启用，0为不启用
 * @method void setLogEnable(integer $LogEnable) 设置是否启用log，1为启用，0为不启用
 * @method boolean getConfEdited() 获取（除开镜像配置）配置是否修改
 * @method void setConfEdited(boolean $ConfEdited) 设置（除开镜像配置）配置是否修改
 * @method boolean getSpeedUp() 获取是否开启应用加速
 * @method void setSpeedUp(boolean $SpeedUp) 设置是否开启应用加速
 * @method HealthCheckConfig getStartupProbe() 获取启动探针配置
 * @method void setStartupProbe(HealthCheckConfig $StartupProbe) 设置启动探针配置
 * @method string getOsFlavour() 获取操作系统版本；
当选择openjdk时，可选参数：
- ALPINE
- CENTOS
当选择konajdk时，可选参数：
- ALPINE
- TENCENTOS
 * @method void setOsFlavour(string $OsFlavour) 设置操作系统版本；
当选择openjdk时，可选参数：
- ALPINE
- CENTOS
当选择konajdk时，可选参数：
- ALPINE
- TENCENTOS
 * @method EnablePrometheusConf getEnablePrometheusConf() 获取metrics业务指标监控配置
 * @method void setEnablePrometheusConf(EnablePrometheusConf $EnablePrometheusConf) 设置metrics业务指标监控配置
 * @method integer getEnableTracing() 获取1：开始自动apm采集（skywalking）；
0：关闭apm采集；
 * @method void setEnableTracing(integer $EnableTracing) 设置1：开始自动apm采集（skywalking）；
0：关闭apm采集；
 * @method integer getEnableMetrics() 获取1：开始自动metrics采集（open-telemetry）；
0：关闭metrics采集；
 * @method void setEnableMetrics(integer $EnableMetrics) 设置1：开始自动metrics采集（open-telemetry）；
0：关闭metrics采集；
 * @method string getTcrInstanceId() 获取镜像部署时，选择的tcr实例id
 * @method void setTcrInstanceId(string $TcrInstanceId) 设置镜像部署时，选择的tcr实例id
 * @method string getRepoServer() 获取镜像部署时，选择的镜像服务器地址
 * @method void setRepoServer(string $RepoServer) 设置镜像部署时，选择的镜像服务器地址
 * @method integer getRepoType() 获取镜像部署时，仓库类型：0：个人仓库；1：企业版；2：公共仓库；3：tem托管仓库；4：demo仓库
 * @method void setRepoType(integer $RepoType) 设置镜像部署时，仓库类型：0：个人仓库；1：企业版；2：公共仓库；3：tem托管仓库；4：demo仓库
 */
class DeployApplicationRequest extends AbstractModel
{
    /**
     * @var string 应用ID
     */
    public $ApplicationId;

    /**
     * @var integer 初始化 pod 数
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
     * @var string 环境ID
     */
    public $EnvironmentId;

    /**
     * @var string 镜像仓库
     */
    public $ImgRepo;

    /**
     * @var string 版本描述信息
     */
    public $VersionDesc;

    /**
     * @var string 启动参数
     */
    public $JvmOpts;

    /**
     * @var EsInfo 弹性伸缩配置（已废弃，请使用HorizontalAutoscaler设置弹性策略）
     */
    public $EsInfo;

    /**
     * @var array 环境变量配置
     */
    public $EnvConf;

    /**
     * @var array 日志配置
     */
    public $LogConfs;

    /**
     * @var array 数据卷配置
     */
    public $StorageConfs;

    /**
     * @var array 数据卷挂载配置
     */
    public $StorageMountConfs;

    /**
     * @var string 部署类型。
- JAR：通过 jar 包部署
- WAR：通过 war 包部署
- IMAGE：通过镜像部署
     */
    public $DeployMode;

    /**
     * @var string 部署类型为 IMAGE 时，该参数表示镜像 tag。
部署类型为 JAR/WAR 时，该参数表示包版本号。
     */
    public $DeployVersion;

    /**
     * @var string 包名。使用 JAR 包或者 WAR 包部署的时候必填。
     */
    public $PkgName;

    /**
     * @var string JDK 版本。
- KONA:8：使用 kona jdk 8。
- OPEN:8：使用 open jdk 8。
- KONA:11：使用 kona jdk 11。
- OPEN:11：使用 open jdk 11。
     */
    public $JdkVersion;

    /**
     * @var array 安全组ID s
     */
    public $SecurityGroupIds;

    /**
     * @var LogOutputConf 日志输出配置
     */
    public $LogOutputConf;

    /**
     * @var integer 来源渠道
     */
    public $SourceChannel;

    /**
     * @var string 版本描述
     */
    public $Description;

    /**
     * @var string 镜像命令
     */
    public $ImageCommand;

    /**
     * @var array 镜像命令参数
     */
    public $ImageArgs;

    /**
     * @var boolean 是否添加默认注册中心配置
     */
    public $UseRegistryDefaultConfig;

    /**
     * @var array 挂载配置信息
     */
    public $SettingConfs;

    /**
     * @var EksService 应用访问设置
     */
    public $Service;

    /**
     * @var string 要回滚到的历史版本id
     */
    public $VersionId;

    /**
     * @var string 启动后执行的脚本
     */
    public $PostStart;

    /**
     * @var string 停止前执行的脚本
     */
    public $PreStop;

    /**
     * @var HealthCheckConfig 存活探针配置
     */
    public $Liveness;

    /**
     * @var HealthCheckConfig 就绪探针配置
     */
    public $Readiness;

    /**
     * @var DeployStrategyConf 分批发布策略配置
     */
    public $DeployStrategyConf;

    /**
     * @var array 弹性策略（已弃用，请使用弹性伸缩策略组合相关接口）
     */
    public $HorizontalAutoscaler;

    /**
     * @var array 定时弹性策略（已弃用，请使用弹性伸缩策略组合相关接口）
     */
    public $CronHorizontalAutoscaler;

    /**
     * @var integer 是否启用log，1为启用，0为不启用
     */
    public $LogEnable;

    /**
     * @var boolean （除开镜像配置）配置是否修改
     */
    public $ConfEdited;

    /**
     * @var boolean 是否开启应用加速
     */
    public $SpeedUp;

    /**
     * @var HealthCheckConfig 启动探针配置
     */
    public $StartupProbe;

    /**
     * @var string 操作系统版本；
当选择openjdk时，可选参数：
- ALPINE
- CENTOS
当选择konajdk时，可选参数：
- ALPINE
- TENCENTOS
     */
    public $OsFlavour;

    /**
     * @var EnablePrometheusConf metrics业务指标监控配置
     */
    public $EnablePrometheusConf;

    /**
     * @var integer 1：开始自动apm采集（skywalking）；
0：关闭apm采集；
     */
    public $EnableTracing;

    /**
     * @var integer 1：开始自动metrics采集（open-telemetry）；
0：关闭metrics采集；
     */
    public $EnableMetrics;

    /**
     * @var string 镜像部署时，选择的tcr实例id
     */
    public $TcrInstanceId;

    /**
     * @var string 镜像部署时，选择的镜像服务器地址
     */
    public $RepoServer;

    /**
     * @var integer 镜像部署时，仓库类型：0：个人仓库；1：企业版；2：公共仓库；3：tem托管仓库；4：demo仓库
     */
    public $RepoType;

    /**
     * @param string $ApplicationId 应用ID
     * @param integer $InitPodNum 初始化 pod 数
     * @param float $CpuSpec cpu规格
     * @param float $MemorySpec 内存规格
     * @param string $EnvironmentId 环境ID
     * @param string $ImgRepo 镜像仓库
     * @param string $VersionDesc 版本描述信息
     * @param string $JvmOpts 启动参数
     * @param EsInfo $EsInfo 弹性伸缩配置（已废弃，请使用HorizontalAutoscaler设置弹性策略）
     * @param array $EnvConf 环境变量配置
     * @param array $LogConfs 日志配置
     * @param array $StorageConfs 数据卷配置
     * @param array $StorageMountConfs 数据卷挂载配置
     * @param string $DeployMode 部署类型。
- JAR：通过 jar 包部署
- WAR：通过 war 包部署
- IMAGE：通过镜像部署
     * @param string $DeployVersion 部署类型为 IMAGE 时，该参数表示镜像 tag。
部署类型为 JAR/WAR 时，该参数表示包版本号。
     * @param string $PkgName 包名。使用 JAR 包或者 WAR 包部署的时候必填。
     * @param string $JdkVersion JDK 版本。
- KONA:8：使用 kona jdk 8。
- OPEN:8：使用 open jdk 8。
- KONA:11：使用 kona jdk 11。
- OPEN:11：使用 open jdk 11。
     * @param array $SecurityGroupIds 安全组ID s
     * @param LogOutputConf $LogOutputConf 日志输出配置
     * @param integer $SourceChannel 来源渠道
     * @param string $Description 版本描述
     * @param string $ImageCommand 镜像命令
     * @param array $ImageArgs 镜像命令参数
     * @param boolean $UseRegistryDefaultConfig 是否添加默认注册中心配置
     * @param array $SettingConfs 挂载配置信息
     * @param EksService $Service 应用访问设置
     * @param string $VersionId 要回滚到的历史版本id
     * @param string $PostStart 启动后执行的脚本
     * @param string $PreStop 停止前执行的脚本
     * @param HealthCheckConfig $Liveness 存活探针配置
     * @param HealthCheckConfig $Readiness 就绪探针配置
     * @param DeployStrategyConf $DeployStrategyConf 分批发布策略配置
     * @param array $HorizontalAutoscaler 弹性策略（已弃用，请使用弹性伸缩策略组合相关接口）
     * @param array $CronHorizontalAutoscaler 定时弹性策略（已弃用，请使用弹性伸缩策略组合相关接口）
     * @param integer $LogEnable 是否启用log，1为启用，0为不启用
     * @param boolean $ConfEdited （除开镜像配置）配置是否修改
     * @param boolean $SpeedUp 是否开启应用加速
     * @param HealthCheckConfig $StartupProbe 启动探针配置
     * @param string $OsFlavour 操作系统版本；
当选择openjdk时，可选参数：
- ALPINE
- CENTOS
当选择konajdk时，可选参数：
- ALPINE
- TENCENTOS
     * @param EnablePrometheusConf $EnablePrometheusConf metrics业务指标监控配置
     * @param integer $EnableTracing 1：开始自动apm采集（skywalking）；
0：关闭apm采集；
     * @param integer $EnableMetrics 1：开始自动metrics采集（open-telemetry）；
0：关闭metrics采集；
     * @param string $TcrInstanceId 镜像部署时，选择的tcr实例id
     * @param string $RepoServer 镜像部署时，选择的镜像服务器地址
     * @param integer $RepoType 镜像部署时，仓库类型：0：个人仓库；1：企业版；2：公共仓库；3：tem托管仓库；4：demo仓库
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

        if (array_key_exists("InitPodNum",$param) and $param["InitPodNum"] !== null) {
            $this->InitPodNum = $param["InitPodNum"];
        }

        if (array_key_exists("CpuSpec",$param) and $param["CpuSpec"] !== null) {
            $this->CpuSpec = $param["CpuSpec"];
        }

        if (array_key_exists("MemorySpec",$param) and $param["MemorySpec"] !== null) {
            $this->MemorySpec = $param["MemorySpec"];
        }

        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("ImgRepo",$param) and $param["ImgRepo"] !== null) {
            $this->ImgRepo = $param["ImgRepo"];
        }

        if (array_key_exists("VersionDesc",$param) and $param["VersionDesc"] !== null) {
            $this->VersionDesc = $param["VersionDesc"];
        }

        if (array_key_exists("JvmOpts",$param) and $param["JvmOpts"] !== null) {
            $this->JvmOpts = $param["JvmOpts"];
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

        if (array_key_exists("LogConfs",$param) and $param["LogConfs"] !== null) {
            $this->LogConfs = $param["LogConfs"];
        }

        if (array_key_exists("StorageConfs",$param) and $param["StorageConfs"] !== null) {
            $this->StorageConfs = [];
            foreach ($param["StorageConfs"] as $key => $value){
                $obj = new StorageConf();
                $obj->deserialize($value);
                array_push($this->StorageConfs, $obj);
            }
        }

        if (array_key_exists("StorageMountConfs",$param) and $param["StorageMountConfs"] !== null) {
            $this->StorageMountConfs = [];
            foreach ($param["StorageMountConfs"] as $key => $value){
                $obj = new StorageMountConf();
                $obj->deserialize($value);
                array_push($this->StorageMountConfs, $obj);
            }
        }

        if (array_key_exists("DeployMode",$param) and $param["DeployMode"] !== null) {
            $this->DeployMode = $param["DeployMode"];
        }

        if (array_key_exists("DeployVersion",$param) and $param["DeployVersion"] !== null) {
            $this->DeployVersion = $param["DeployVersion"];
        }

        if (array_key_exists("PkgName",$param) and $param["PkgName"] !== null) {
            $this->PkgName = $param["PkgName"];
        }

        if (array_key_exists("JdkVersion",$param) and $param["JdkVersion"] !== null) {
            $this->JdkVersion = $param["JdkVersion"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("LogOutputConf",$param) and $param["LogOutputConf"] !== null) {
            $this->LogOutputConf = new LogOutputConf();
            $this->LogOutputConf->deserialize($param["LogOutputConf"]);
        }

        if (array_key_exists("SourceChannel",$param) and $param["SourceChannel"] !== null) {
            $this->SourceChannel = $param["SourceChannel"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
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

        if (array_key_exists("SettingConfs",$param) and $param["SettingConfs"] !== null) {
            $this->SettingConfs = [];
            foreach ($param["SettingConfs"] as $key => $value){
                $obj = new MountedSettingConf();
                $obj->deserialize($value);
                array_push($this->SettingConfs, $obj);
            }
        }

        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = new EksService();
            $this->Service->deserialize($param["Service"]);
        }

        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
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

        if (array_key_exists("DeployStrategyConf",$param) and $param["DeployStrategyConf"] !== null) {
            $this->DeployStrategyConf = new DeployStrategyConf();
            $this->DeployStrategyConf->deserialize($param["DeployStrategyConf"]);
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

        if (array_key_exists("LogEnable",$param) and $param["LogEnable"] !== null) {
            $this->LogEnable = $param["LogEnable"];
        }

        if (array_key_exists("ConfEdited",$param) and $param["ConfEdited"] !== null) {
            $this->ConfEdited = $param["ConfEdited"];
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

        if (array_key_exists("EnablePrometheusConf",$param) and $param["EnablePrometheusConf"] !== null) {
            $this->EnablePrometheusConf = new EnablePrometheusConf();
            $this->EnablePrometheusConf->deserialize($param["EnablePrometheusConf"]);
        }

        if (array_key_exists("EnableTracing",$param) and $param["EnableTracing"] !== null) {
            $this->EnableTracing = $param["EnableTracing"];
        }

        if (array_key_exists("EnableMetrics",$param) and $param["EnableMetrics"] !== null) {
            $this->EnableMetrics = $param["EnableMetrics"];
        }

        if (array_key_exists("TcrInstanceId",$param) and $param["TcrInstanceId"] !== null) {
            $this->TcrInstanceId = $param["TcrInstanceId"];
        }

        if (array_key_exists("RepoServer",$param) and $param["RepoServer"] !== null) {
            $this->RepoServer = $param["RepoServer"];
        }

        if (array_key_exists("RepoType",$param) and $param["RepoType"] !== null) {
            $this->RepoType = $param["RepoType"];
        }
    }
}
