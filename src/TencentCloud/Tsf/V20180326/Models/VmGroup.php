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
 * @method string getGroupResourceType() 获取<p>部署组资源类型</p>
 * @method void setGroupResourceType(string $GroupResourceType) 设置<p>部署组资源类型</p>
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
     * @var string <p>部署组资源类型</p>
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
     * @param string $GroupResourceType <p>部署组资源类型</p>
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
    }
}
