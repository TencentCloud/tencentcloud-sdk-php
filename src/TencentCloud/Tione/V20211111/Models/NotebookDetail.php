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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 类型NotebookDetail
 *
 * @method string getId() 获取notebook  ID
 * @method void setId(string $Id) 设置notebook  ID
 * @method string getName() 获取notebook 名称
 * @method void setName(string $Name) 设置notebook 名称
 * @method string getLifecycleScriptId() 获取生命周期脚本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLifecycleScriptId(string $LifecycleScriptId) 设置生命周期脚本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPodName() 获取Pod-Name
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPodName(string $PodName) 设置Pod-Name
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取Update-Time
 * @method void setUpdateTime(string $UpdateTime) 设置Update-Time
 * @method boolean getDirectInternetAccess() 获取是否访问公网
 * @method void setDirectInternetAccess(boolean $DirectInternetAccess) 设置是否访问公网
 * @method string getResourceGroupId() 获取预付费专用资源组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupId(string $ResourceGroupId) 设置预付费专用资源组
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取标签配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAutoStopping() 获取是否自动停止
 * @method void setAutoStopping(boolean $AutoStopping) 设置是否自动停止
 * @method array getAdditionalCodeRepoIds() 获取其他GIT存储库，最多3个，单个
长度不超过512字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdditionalCodeRepoIds(array $AdditionalCodeRepoIds) 设置其他GIT存储库，最多3个，单个
长度不超过512字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAutomaticStopTime() 获取自动停止时间，单位小时
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutomaticStopTime(integer $AutomaticStopTime) 设置自动停止时间，单位小时
注意：此字段可能返回 null，表示取不到有效值。
 * @method ResourceConf getResourceConf() 获取资源配置
 * @method void setResourceConf(ResourceConf $ResourceConf) 设置资源配置
 * @method string getDefaultCodeRepoId() 获取默认GIT存储库，长度不超过512字符
 * @method void setDefaultCodeRepoId(string $DefaultCodeRepoId) 设置默认GIT存储库，长度不超过512字符
 * @method string getEndTime() 获取训练输出
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置训练输出
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getLogEnable() 获取是否上报日志
 * @method void setLogEnable(boolean $LogEnable) 设置是否上报日志
 * @method LogConfig getLogConfig() 获取日志配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogConfig(LogConfig $LogConfig) 设置日志配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取VPC ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置VPC ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取任务状态
 * @method void setStatus(string $Status) 设置任务状态
 * @method integer getRuntimeInSeconds() 获取运行时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuntimeInSeconds(integer $RuntimeInSeconds) 设置运行时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getStartTime() 获取训练开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置训练开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChargeStatus() 获取计费状态，eg：BILLING计费中，ARREARS_STOP欠费停止，NOT_BILLING不在计费中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChargeStatus(string $ChargeStatus) 设置计费状态，eg：BILLING计费中，ARREARS_STOP欠费停止，NOT_BILLING不在计费中
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getRootAccess() 获取是否ROOT权限
 * @method void setRootAccess(boolean $RootAccess) 设置是否ROOT权限
 * @method array getBillingInfos() 获取计贺金额信息，eg:2.00元/小时
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBillingInfos(array $BillingInfos) 设置计贺金额信息，eg:2.00元/小时
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVolumeSizeInGB() 获取存储卷大小 （单位时GB，最小10GB，必须是10G的倍数）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVolumeSizeInGB(integer $VolumeSizeInGB) 设置存储卷大小 （单位时GB，最小10GB，必须是10G的倍数）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFailureReason() 获取失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailureReason(string $FailureReason) 设置失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChargeType() 获取计算资源付费模式 (- PREPAID：预付费，即包年包月 - POSTPAID_BY_HOUR：按小时后付费)
 * @method void setChargeType(string $ChargeType) 设置计算资源付费模式 (- PREPAID：预付费，即包年包月 - POSTPAID_BY_HOUR：按小时后付费)
 * @method string getInstanceTypeAlias() 获取后付费资源规格说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceTypeAlias(string $InstanceTypeAlias) 设置后付费资源规格说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroupName() 获取预付费资源组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupName(string $ResourceGroupName) 设置预付费资源组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVolumeSourceType() 获取存储的类型。取值包含： 
    FREE:        预付费的免费存储
    CLOUD_PREMIUM： 高性能云硬盘
    CLOUD_SSD： SSD云硬盘
    CFS:     CFS存储，包含NFS和turbo
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVolumeSourceType(string $VolumeSourceType) 设置存储的类型。取值包含： 
    FREE:        预付费的免费存储
    CLOUD_PREMIUM： 高性能云硬盘
    CLOUD_SSD： SSD云硬盘
    CFS:     CFS存储，包含NFS和turbo
注意：此字段可能返回 null，表示取不到有效值。
 * @method CFSConfig getVolumeSourceCFS() 获取CFS存储的配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVolumeSourceCFS(CFSConfig $VolumeSourceCFS) 设置CFS存储的配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDataConfigs() 获取数据配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataConfigs(array $DataConfigs) 设置数据配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取notebook 信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置notebook 信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataSource() 获取数据源来源，eg：WeData_HDFS
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataSource(string $DataSource) 设置数据源来源，eg：WeData_HDFS
注意：此字段可能返回 null，表示取不到有效值。
 * @method ImageInfo getImageInfo() 获取镜像信息
 * @method void setImageInfo(ImageInfo $ImageInfo) 设置镜像信息
 * @method string getImageType() 获取镜像类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageType(string $ImageType) 设置镜像类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method SSHConfig getSSHConfig() 获取SSH配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSSHConfig(SSHConfig $SSHConfig) 设置SSH配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method GooseFS getVolumeSourceGooseFS() 获取GooseFS存储配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVolumeSourceGooseFS(GooseFS $VolumeSourceGooseFS) 设置GooseFS存储配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubUin() 获取子用户ID
 * @method void setSubUin(string $SubUin) 设置子用户ID
 * @method string getResourceGroupInstanceId() 获取调度节点ID
 * @method void setResourceGroupInstanceId(string $ResourceGroupInstanceId) 设置调度节点ID
 * @method string getSubUinName() 获取子用户名称
 * @method void setSubUinName(string $SubUinName) 设置子用户名称
 * @method string getJobCreateTime() 获取任务实例创建时间
 * @method void setJobCreateTime(string $JobCreateTime) 设置任务实例创建时间
 * @method string getAppId() 获取Appid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(string $AppId) 设置Appid
注意：此字段可能返回 null，表示取不到有效值。
 */
class NotebookDetail extends AbstractModel
{
    /**
     * @var string notebook  ID
     */
    public $Id;

    /**
     * @var string notebook 名称
     */
    public $Name;

    /**
     * @var string 生命周期脚本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LifecycleScriptId;

    /**
     * @var string Pod-Name
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PodName;

    /**
     * @var string Update-Time
     */
    public $UpdateTime;

    /**
     * @var boolean 是否访问公网
     */
    public $DirectInternetAccess;

    /**
     * @var string 预付费专用资源组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupId;

    /**
     * @var array 标签配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var boolean 是否自动停止
     */
    public $AutoStopping;

    /**
     * @var array 其他GIT存储库，最多3个，单个
长度不超过512字符
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdditionalCodeRepoIds;

    /**
     * @var integer 自动停止时间，单位小时
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutomaticStopTime;

    /**
     * @var ResourceConf 资源配置
     */
    public $ResourceConf;

    /**
     * @var string 默认GIT存储库，长度不超过512字符
     */
    public $DefaultCodeRepoId;

    /**
     * @var string 训练输出
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var boolean 是否上报日志
     */
    public $LogEnable;

    /**
     * @var LogConfig 日志配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogConfig;

    /**
     * @var string VPC ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string 子网ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var string 任务状态
     */
    public $Status;

    /**
     * @var integer 运行时长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuntimeInSeconds;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 训练开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 计费状态，eg：BILLING计费中，ARREARS_STOP欠费停止，NOT_BILLING不在计费中
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChargeStatus;

    /**
     * @var boolean 是否ROOT权限
     */
    public $RootAccess;

    /**
     * @var array 计贺金额信息，eg:2.00元/小时
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BillingInfos;

    /**
     * @var integer 存储卷大小 （单位时GB，最小10GB，必须是10G的倍数）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VolumeSizeInGB;

    /**
     * @var string 失败原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailureReason;

    /**
     * @var string 计算资源付费模式 (- PREPAID：预付费，即包年包月 - POSTPAID_BY_HOUR：按小时后付费)
     */
    public $ChargeType;

    /**
     * @var string 后付费资源规格说明
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceTypeAlias;

    /**
     * @var string 预付费资源组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupName;

    /**
     * @var string 存储的类型。取值包含： 
    FREE:        预付费的免费存储
    CLOUD_PREMIUM： 高性能云硬盘
    CLOUD_SSD： SSD云硬盘
    CFS:     CFS存储，包含NFS和turbo
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VolumeSourceType;

    /**
     * @var CFSConfig CFS存储的配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VolumeSourceCFS;

    /**
     * @var array 数据配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataConfigs;

    /**
     * @var string notebook 信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var string 数据源来源，eg：WeData_HDFS
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataSource;

    /**
     * @var ImageInfo 镜像信息
     */
    public $ImageInfo;

    /**
     * @var string 镜像类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageType;

    /**
     * @var SSHConfig SSH配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SSHConfig;

    /**
     * @var GooseFS GooseFS存储配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VolumeSourceGooseFS;

    /**
     * @var string 子用户ID
     */
    public $SubUin;

    /**
     * @var string 调度节点ID
     */
    public $ResourceGroupInstanceId;

    /**
     * @var string 子用户名称
     */
    public $SubUinName;

    /**
     * @var string 任务实例创建时间
     */
    public $JobCreateTime;

    /**
     * @var string Appid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @param string $Id notebook  ID
     * @param string $Name notebook 名称
     * @param string $LifecycleScriptId 生命周期脚本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PodName Pod-Name
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime Update-Time
     * @param boolean $DirectInternetAccess 是否访问公网
     * @param string $ResourceGroupId 预付费专用资源组
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 标签配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AutoStopping 是否自动停止
     * @param array $AdditionalCodeRepoIds 其他GIT存储库，最多3个，单个
长度不超过512字符
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AutomaticStopTime 自动停止时间，单位小时
注意：此字段可能返回 null，表示取不到有效值。
     * @param ResourceConf $ResourceConf 资源配置
     * @param string $DefaultCodeRepoId 默认GIT存储库，长度不超过512字符
     * @param string $EndTime 训练输出
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $LogEnable 是否上报日志
     * @param LogConfig $LogConfig 日志配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId VPC ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId 子网ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 任务状态
     * @param integer $RuntimeInSeconds 运行时长
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
     * @param string $StartTime 训练开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChargeStatus 计费状态，eg：BILLING计费中，ARREARS_STOP欠费停止，NOT_BILLING不在计费中
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $RootAccess 是否ROOT权限
     * @param array $BillingInfos 计贺金额信息，eg:2.00元/小时
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VolumeSizeInGB 存储卷大小 （单位时GB，最小10GB，必须是10G的倍数）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FailureReason 失败原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChargeType 计算资源付费模式 (- PREPAID：预付费，即包年包月 - POSTPAID_BY_HOUR：按小时后付费)
     * @param string $InstanceTypeAlias 后付费资源规格说明
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroupName 预付费资源组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VolumeSourceType 存储的类型。取值包含： 
    FREE:        预付费的免费存储
    CLOUD_PREMIUM： 高性能云硬盘
    CLOUD_SSD： SSD云硬盘
    CFS:     CFS存储，包含NFS和turbo
注意：此字段可能返回 null，表示取不到有效值。
     * @param CFSConfig $VolumeSourceCFS CFS存储的配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DataConfigs 数据配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message notebook 信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataSource 数据源来源，eg：WeData_HDFS
注意：此字段可能返回 null，表示取不到有效值。
     * @param ImageInfo $ImageInfo 镜像信息
     * @param string $ImageType 镜像类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param SSHConfig $SSHConfig SSH配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param GooseFS $VolumeSourceGooseFS GooseFS存储配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubUin 子用户ID
     * @param string $ResourceGroupInstanceId 调度节点ID
     * @param string $SubUinName 子用户名称
     * @param string $JobCreateTime 任务实例创建时间
     * @param string $AppId Appid
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
    }
}
