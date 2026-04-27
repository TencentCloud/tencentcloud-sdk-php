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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 类型NotebookDetail
 *
 * @method string getId() 获取<p>notebook  ID</p>
 * @method void setId(string $Id) 设置<p>notebook  ID</p>
 * @method string getName() 获取<p>notebook 名称</p>
 * @method void setName(string $Name) 设置<p>notebook 名称</p>
 * @method string getLifecycleScriptId() 获取<p>生命周期脚本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLifecycleScriptId(string $LifecycleScriptId) 设置<p>生命周期脚本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPodName() 获取<p>Pod-Name</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPodName(string $PodName) 设置<p>Pod-Name</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取<p>Update-Time</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>Update-Time</p>
 * @method boolean getDirectInternetAccess() 获取<p>是否访问公网</p>
 * @method void setDirectInternetAccess(boolean $DirectInternetAccess) 设置<p>是否访问公网</p>
 * @method string getResourceGroupId() 获取<p>预付费专用资源组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupId(string $ResourceGroupId) 设置<p>预付费专用资源组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取<p>标签配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置<p>标签配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAutoStopping() 获取<p>是否自动停止</p>
 * @method void setAutoStopping(boolean $AutoStopping) 设置<p>是否自动停止</p>
 * @method array getAdditionalCodeRepoIds() 获取<p>其他GIT存储库，最多3个，单个<br>长度不超过512字符</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdditionalCodeRepoIds(array $AdditionalCodeRepoIds) 设置<p>其他GIT存储库，最多3个，单个<br>长度不超过512字符</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAutomaticStopTime() 获取<p>自动停止时间，单位小时</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutomaticStopTime(integer $AutomaticStopTime) 设置<p>自动停止时间，单位小时</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ResourceConf getResourceConf() 获取<p>资源配置</p>
 * @method void setResourceConf(ResourceConf $ResourceConf) 设置<p>资源配置</p>
 * @method string getDefaultCodeRepoId() 获取<p>默认GIT存储库，长度不超过512字符</p>
 * @method void setDefaultCodeRepoId(string $DefaultCodeRepoId) 设置<p>默认GIT存储库，长度不超过512字符</p>
 * @method string getEndTime() 获取<p>训练输出</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置<p>训练输出</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getLogEnable() 获取<p>是否上报日志</p>
 * @method void setLogEnable(boolean $LogEnable) 设置<p>是否上报日志</p>
 * @method LogConfig getLogConfig() 获取<p>日志配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogConfig(LogConfig $LogConfig) 设置<p>日志配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取<p>VPC ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置<p>VPC ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取<p>子网ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置<p>子网ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>任务状态</p>
 * @method void setStatus(string $Status) 设置<p>任务状态</p>
 * @method integer getRuntimeInSeconds() 获取<p>运行时长</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuntimeInSeconds(integer $RuntimeInSeconds) 设置<p>运行时长</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getStartTime() 获取<p>训练开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置<p>训练开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChargeStatus() 获取<p>计费状态，eg：BILLING计费中，ARREARS_STOP欠费停止，NOT_BILLING不在计费中</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChargeStatus(string $ChargeStatus) 设置<p>计费状态，eg：BILLING计费中，ARREARS_STOP欠费停止，NOT_BILLING不在计费中</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getRootAccess() 获取<p>是否ROOT权限</p>
 * @method void setRootAccess(boolean $RootAccess) 设置<p>是否ROOT权限</p>
 * @method array getBillingInfos() 获取<p>计贺金额信息，eg:2.00元/小时</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBillingInfos(array $BillingInfos) 设置<p>计贺金额信息，eg:2.00元/小时</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVolumeSizeInGB() 获取<p>存储卷大小 （单位时GB，最小10GB，必须是10G的倍数）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVolumeSizeInGB(integer $VolumeSizeInGB) 设置<p>存储卷大小 （单位时GB，最小10GB，必须是10G的倍数）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFailureReason() 获取<p>失败原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailureReason(string $FailureReason) 设置<p>失败原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChargeType() 获取<p>计算资源付费模式 (- PREPAID：预付费，即包年包月 - POSTPAID_BY_HOUR：按小时后付费)</p>
 * @method void setChargeType(string $ChargeType) 设置<p>计算资源付费模式 (- PREPAID：预付费，即包年包月 - POSTPAID_BY_HOUR：按小时后付费)</p>
 * @method string getInstanceTypeAlias() 获取<p>后付费资源规格说明</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceTypeAlias(string $InstanceTypeAlias) 设置<p>后付费资源规格说明</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroupName() 获取<p>预付费资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupName(string $ResourceGroupName) 设置<p>预付费资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVolumeSourceType() 获取<p>存储的类型。取值包含：<br>    FREE:        预付费的免费存储<br>    CLOUD_PREMIUM： 高性能云硬盘<br>    CLOUD_SSD： SSD云硬盘<br>    CFS:     CFS存储，包含NFS和turbo</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVolumeSourceType(string $VolumeSourceType) 设置<p>存储的类型。取值包含：<br>    FREE:        预付费的免费存储<br>    CLOUD_PREMIUM： 高性能云硬盘<br>    CLOUD_SSD： SSD云硬盘<br>    CFS:     CFS存储，包含NFS和turbo</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method CFSConfig getVolumeSourceCFS() 获取<p>CFS存储的配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVolumeSourceCFS(CFSConfig $VolumeSourceCFS) 设置<p>CFS存储的配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDataConfigs() 获取<p>数据配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataConfigs(array $DataConfigs) 设置<p>数据配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取<p>notebook 信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置<p>notebook 信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataSource() 获取<p>数据源来源，eg：WeData_HDFS</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataSource(string $DataSource) 设置<p>数据源来源，eg：WeData_HDFS</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ImageInfo getImageInfo() 获取<p>镜像信息</p>
 * @method void setImageInfo(ImageInfo $ImageInfo) 设置<p>镜像信息</p>
 * @method string getImageType() 获取<p>镜像类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageType(string $ImageType) 设置<p>镜像类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method SSHConfig getSSHConfig() 获取<p>SSH配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSSHConfig(SSHConfig $SSHConfig) 设置<p>SSH配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method GooseFS getVolumeSourceGooseFS() 获取<p>GooseFS存储配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVolumeSourceGooseFS(GooseFS $VolumeSourceGooseFS) 设置<p>GooseFS存储配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubUin() 获取<p>子用户ID</p>
 * @method void setSubUin(string $SubUin) 设置<p>子用户ID</p>
 * @method string getResourceGroupInstanceId() 获取<p>调度节点ID</p>
 * @method void setResourceGroupInstanceId(string $ResourceGroupInstanceId) 设置<p>调度节点ID</p>
 * @method string getSubUinName() 获取<p>子用户名称</p>
 * @method void setSubUinName(string $SubUinName) 设置<p>子用户名称</p>
 * @method string getJobCreateTime() 获取<p>任务实例创建时间</p>
 * @method void setJobCreateTime(string $JobCreateTime) 设置<p>任务实例创建时间</p>
 * @method string getAppId() 获取<p>Appid</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(string $AppId) 设置<p>Appid</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取<p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method OperatorInfo getLatestOperatorInfo() 获取<p>最后操作者信息</p>
 * @method void setLatestOperatorInfo(OperatorInfo $LatestOperatorInfo) 设置<p>最后操作者信息</p>
 */
class NotebookDetail extends AbstractModel
{
    /**
     * @var string <p>notebook  ID</p>
     */
    public $Id;

    /**
     * @var string <p>notebook 名称</p>
     */
    public $Name;

    /**
     * @var string <p>生命周期脚本</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LifecycleScriptId;

    /**
     * @var string <p>Pod-Name</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PodName;

    /**
     * @var string <p>Update-Time</p>
     */
    public $UpdateTime;

    /**
     * @var boolean <p>是否访问公网</p>
     */
    public $DirectInternetAccess;

    /**
     * @var string <p>预付费专用资源组</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupId;

    /**
     * @var array <p>标签配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var boolean <p>是否自动停止</p>
     */
    public $AutoStopping;

    /**
     * @var array <p>其他GIT存储库，最多3个，单个<br>长度不超过512字符</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdditionalCodeRepoIds;

    /**
     * @var integer <p>自动停止时间，单位小时</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutomaticStopTime;

    /**
     * @var ResourceConf <p>资源配置</p>
     */
    public $ResourceConf;

    /**
     * @var string <p>默认GIT存储库，长度不超过512字符</p>
     */
    public $DefaultCodeRepoId;

    /**
     * @var string <p>训练输出</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var boolean <p>是否上报日志</p>
     */
    public $LogEnable;

    /**
     * @var LogConfig <p>日志配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogConfig;

    /**
     * @var string <p>VPC ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string <p>子网ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var string <p>任务状态</p>
     */
    public $Status;

    /**
     * @var integer <p>运行时长</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuntimeInSeconds;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>训练开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string <p>计费状态，eg：BILLING计费中，ARREARS_STOP欠费停止，NOT_BILLING不在计费中</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChargeStatus;

    /**
     * @var boolean <p>是否ROOT权限</p>
     */
    public $RootAccess;

    /**
     * @var array <p>计贺金额信息，eg:2.00元/小时</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BillingInfos;

    /**
     * @var integer <p>存储卷大小 （单位时GB，最小10GB，必须是10G的倍数）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VolumeSizeInGB;

    /**
     * @var string <p>失败原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailureReason;

    /**
     * @var string <p>计算资源付费模式 (- PREPAID：预付费，即包年包月 - POSTPAID_BY_HOUR：按小时后付费)</p>
     */
    public $ChargeType;

    /**
     * @var string <p>后付费资源规格说明</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceTypeAlias;

    /**
     * @var string <p>预付费资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupName;

    /**
     * @var string <p>存储的类型。取值包含：<br>    FREE:        预付费的免费存储<br>    CLOUD_PREMIUM： 高性能云硬盘<br>    CLOUD_SSD： SSD云硬盘<br>    CFS:     CFS存储，包含NFS和turbo</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VolumeSourceType;

    /**
     * @var CFSConfig <p>CFS存储的配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VolumeSourceCFS;

    /**
     * @var array <p>数据配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataConfigs;

    /**
     * @var string <p>notebook 信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var string <p>数据源来源，eg：WeData_HDFS</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataSource;

    /**
     * @var ImageInfo <p>镜像信息</p>
     */
    public $ImageInfo;

    /**
     * @var string <p>镜像类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageType;

    /**
     * @var SSHConfig <p>SSH配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SSHConfig;

    /**
     * @var GooseFS <p>GooseFS存储配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VolumeSourceGooseFS;

    /**
     * @var string <p>子用户ID</p>
     */
    public $SubUin;

    /**
     * @var string <p>调度节点ID</p>
     */
    public $ResourceGroupInstanceId;

    /**
     * @var string <p>子用户名称</p>
     */
    public $SubUinName;

    /**
     * @var string <p>任务实例创建时间</p>
     */
    public $JobCreateTime;

    /**
     * @var string <p>Appid</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string <p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var OperatorInfo <p>最后操作者信息</p>
     */
    public $LatestOperatorInfo;

    /**
     * @param string $Id <p>notebook  ID</p>
     * @param string $Name <p>notebook 名称</p>
     * @param string $LifecycleScriptId <p>生命周期脚本</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PodName <p>Pod-Name</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime <p>Update-Time</p>
     * @param boolean $DirectInternetAccess <p>是否访问公网</p>
     * @param string $ResourceGroupId <p>预付费专用资源组</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags <p>标签配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AutoStopping <p>是否自动停止</p>
     * @param array $AdditionalCodeRepoIds <p>其他GIT存储库，最多3个，单个<br>长度不超过512字符</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AutomaticStopTime <p>自动停止时间，单位小时</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ResourceConf $ResourceConf <p>资源配置</p>
     * @param string $DefaultCodeRepoId <p>默认GIT存储库，长度不超过512字符</p>
     * @param string $EndTime <p>训练输出</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $LogEnable <p>是否上报日志</p>
     * @param LogConfig $LogConfig <p>日志配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId <p>VPC ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId <p>子网ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>任务状态</p>
     * @param integer $RuntimeInSeconds <p>运行时长</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>创建时间</p>
     * @param string $StartTime <p>训练开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChargeStatus <p>计费状态，eg：BILLING计费中，ARREARS_STOP欠费停止，NOT_BILLING不在计费中</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $RootAccess <p>是否ROOT权限</p>
     * @param array $BillingInfos <p>计贺金额信息，eg:2.00元/小时</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VolumeSizeInGB <p>存储卷大小 （单位时GB，最小10GB，必须是10G的倍数）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FailureReason <p>失败原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChargeType <p>计算资源付费模式 (- PREPAID：预付费，即包年包月 - POSTPAID_BY_HOUR：按小时后付费)</p>
     * @param string $InstanceTypeAlias <p>后付费资源规格说明</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroupName <p>预付费资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VolumeSourceType <p>存储的类型。取值包含：<br>    FREE:        预付费的免费存储<br>    CLOUD_PREMIUM： 高性能云硬盘<br>    CLOUD_SSD： SSD云硬盘<br>    CFS:     CFS存储，包含NFS和turbo</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param CFSConfig $VolumeSourceCFS <p>CFS存储的配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DataConfigs <p>数据配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message <p>notebook 信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataSource <p>数据源来源，eg：WeData_HDFS</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ImageInfo $ImageInfo <p>镜像信息</p>
     * @param string $ImageType <p>镜像类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param SSHConfig $SSHConfig <p>SSH配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param GooseFS $VolumeSourceGooseFS <p>GooseFS存储配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubUin <p>子用户ID</p>
     * @param string $ResourceGroupInstanceId <p>调度节点ID</p>
     * @param string $SubUinName <p>子用户名称</p>
     * @param string $JobCreateTime <p>任务实例创建时间</p>
     * @param string $AppId <p>Appid</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description <p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param OperatorInfo $LatestOperatorInfo <p>最后操作者信息</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("LifecycleScriptId",$param) and $param["LifecycleScriptId"] !== null) {
            $this->LifecycleScriptId = $param["LifecycleScriptId"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("DirectInternetAccess",$param) and $param["DirectInternetAccess"] !== null) {
            $this->DirectInternetAccess = $param["DirectInternetAccess"];
        }

        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("AutoStopping",$param) and $param["AutoStopping"] !== null) {
            $this->AutoStopping = $param["AutoStopping"];
        }

        if (array_key_exists("AdditionalCodeRepoIds",$param) and $param["AdditionalCodeRepoIds"] !== null) {
            $this->AdditionalCodeRepoIds = $param["AdditionalCodeRepoIds"];
        }

        if (array_key_exists("AutomaticStopTime",$param) and $param["AutomaticStopTime"] !== null) {
            $this->AutomaticStopTime = $param["AutomaticStopTime"];
        }

        if (array_key_exists("ResourceConf",$param) and $param["ResourceConf"] !== null) {
            $this->ResourceConf = new ResourceConf();
            $this->ResourceConf->deserialize($param["ResourceConf"]);
        }

        if (array_key_exists("DefaultCodeRepoId",$param) and $param["DefaultCodeRepoId"] !== null) {
            $this->DefaultCodeRepoId = $param["DefaultCodeRepoId"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("LogEnable",$param) and $param["LogEnable"] !== null) {
            $this->LogEnable = $param["LogEnable"];
        }

        if (array_key_exists("LogConfig",$param) and $param["LogConfig"] !== null) {
            $this->LogConfig = new LogConfig();
            $this->LogConfig->deserialize($param["LogConfig"]);
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RuntimeInSeconds",$param) and $param["RuntimeInSeconds"] !== null) {
            $this->RuntimeInSeconds = $param["RuntimeInSeconds"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("ChargeStatus",$param) and $param["ChargeStatus"] !== null) {
            $this->ChargeStatus = $param["ChargeStatus"];
        }

        if (array_key_exists("RootAccess",$param) and $param["RootAccess"] !== null) {
            $this->RootAccess = $param["RootAccess"];
        }

        if (array_key_exists("BillingInfos",$param) and $param["BillingInfos"] !== null) {
            $this->BillingInfos = $param["BillingInfos"];
        }

        if (array_key_exists("VolumeSizeInGB",$param) and $param["VolumeSizeInGB"] !== null) {
            $this->VolumeSizeInGB = $param["VolumeSizeInGB"];
        }

        if (array_key_exists("FailureReason",$param) and $param["FailureReason"] !== null) {
            $this->FailureReason = $param["FailureReason"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("InstanceTypeAlias",$param) and $param["InstanceTypeAlias"] !== null) {
            $this->InstanceTypeAlias = $param["InstanceTypeAlias"];
        }

        if (array_key_exists("ResourceGroupName",$param) and $param["ResourceGroupName"] !== null) {
            $this->ResourceGroupName = $param["ResourceGroupName"];
        }

        if (array_key_exists("VolumeSourceType",$param) and $param["VolumeSourceType"] !== null) {
            $this->VolumeSourceType = $param["VolumeSourceType"];
        }

        if (array_key_exists("VolumeSourceCFS",$param) and $param["VolumeSourceCFS"] !== null) {
            $this->VolumeSourceCFS = new CFSConfig();
            $this->VolumeSourceCFS->deserialize($param["VolumeSourceCFS"]);
        }

        if (array_key_exists("DataConfigs",$param) and $param["DataConfigs"] !== null) {
            $this->DataConfigs = [];
            foreach ($param["DataConfigs"] as $key => $value){
                $obj = new DataConfig();
                $obj->deserialize($value);
                array_push($this->DataConfigs, $obj);
            }
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("DataSource",$param) and $param["DataSource"] !== null) {
            $this->DataSource = $param["DataSource"];
        }

        if (array_key_exists("ImageInfo",$param) and $param["ImageInfo"] !== null) {
            $this->ImageInfo = new ImageInfo();
            $this->ImageInfo->deserialize($param["ImageInfo"]);
        }

        if (array_key_exists("ImageType",$param) and $param["ImageType"] !== null) {
            $this->ImageType = $param["ImageType"];
        }

        if (array_key_exists("SSHConfig",$param) and $param["SSHConfig"] !== null) {
            $this->SSHConfig = new SSHConfig();
            $this->SSHConfig->deserialize($param["SSHConfig"]);
        }

        if (array_key_exists("VolumeSourceGooseFS",$param) and $param["VolumeSourceGooseFS"] !== null) {
            $this->VolumeSourceGooseFS = new GooseFS();
            $this->VolumeSourceGooseFS->deserialize($param["VolumeSourceGooseFS"]);
        }

        if (array_key_exists("SubUin",$param) and $param["SubUin"] !== null) {
            $this->SubUin = $param["SubUin"];
        }

        if (array_key_exists("ResourceGroupInstanceId",$param) and $param["ResourceGroupInstanceId"] !== null) {
            $this->ResourceGroupInstanceId = $param["ResourceGroupInstanceId"];
        }

        if (array_key_exists("SubUinName",$param) and $param["SubUinName"] !== null) {
            $this->SubUinName = $param["SubUinName"];
        }

        if (array_key_exists("JobCreateTime",$param) and $param["JobCreateTime"] !== null) {
            $this->JobCreateTime = $param["JobCreateTime"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("LatestOperatorInfo",$param) and $param["LatestOperatorInfo"] !== null) {
            $this->LatestOperatorInfo = new OperatorInfo();
            $this->LatestOperatorInfo->deserialize($param["LatestOperatorInfo"]);
        }
    }
}
