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
 * Notebook列表元素
 *
 * @method string getId() 获取notebook ID
 * @method void setId(string $Id) 设置notebook ID
 * @method string getName() 获取notebook 名称
 * @method void setName(string $Name) 设置notebook 名称
 * @method string getChargeType() 获取计费模式
 * @method void setChargeType(string $ChargeType) 设置计费模式
 * @method ResourceConf getResourceConf() 获取资源配置
 * @method void setResourceConf(ResourceConf $ResourceConf) 设置资源配置
 * @method string getResourceGroupId() 获取预付费资源组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupId(string $ResourceGroupId) 设置预付费资源组
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVolumeSizeInGB() 获取存储卷大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVolumeSizeInGB(integer $VolumeSizeInGB) 设置存储卷大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBillingInfos() 获取计费金额信息，eg：2.00元/小时 (for后付费)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBillingInfos(array $BillingInfos) 设置计费金额信息，eg：2.00元/小时 (for后付费)
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取标签配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getStartTime() 获取启动时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置启动时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method integer getRuntimeInSeconds() 获取运行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuntimeInSeconds(integer $RuntimeInSeconds) 设置运行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChargeStatus() 获取计费状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChargeStatus(string $ChargeStatus) 设置计费状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 * @method string getFailureReason() 获取错误原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailureReason(string $FailureReason) 设置错误原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPodName() 获取Pod名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPodName(string $PodName) 设置Pod名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceTypeAlias() 获取后付费资源规格名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceTypeAlias(string $InstanceTypeAlias) 设置后付费资源规格名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroupName() 获取预付费资源组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupName(string $ResourceGroupName) 设置预付费资源组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAutoStopping() 获取是否自动终止
 * @method void setAutoStopping(boolean $AutoStopping) 设置是否自动终止
 * @method integer getAutomaticStopTime() 获取自动停止时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutomaticStopTime(integer $AutomaticStopTime) 设置自动停止时间
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
 * @method string getMessage() 获取notebook 信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置notebook 信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getUserTypes() 获取notebook用户类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserTypes(array $UserTypes) 设置notebook用户类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method SSHConfig getSSHConfig() 获取SSH配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSSHConfig(SSHConfig $SSHConfig) 设置SSH配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method GooseFS getVolumeSourceGooseFS() 获取GooseFS存储配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVolumeSourceGooseFS(GooseFS $VolumeSourceGooseFS) 设置GooseFS存储配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class NotebookSetItem extends AbstractModel
{
    /**
     * @var string notebook ID
     */
    public $Id;

    /**
     * @var string notebook 名称
     */
    public $Name;

    /**
     * @var string 计费模式
     */
    public $ChargeType;

    /**
     * @var ResourceConf 资源配置
     */
    public $ResourceConf;

    /**
     * @var string 预付费资源组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupId;

    /**
     * @var integer 存储卷大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VolumeSizeInGB;

    /**
     * @var array 计费金额信息，eg：2.00元/小时 (for后付费)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BillingInfos;

    /**
     * @var array 标签配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 启动时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var integer 运行时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuntimeInSeconds;

    /**
     * @var string 计费状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChargeStatus;

    /**
     * @var string 状态
     */
    public $Status;

    /**
     * @var string 错误原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailureReason;

    /**
     * @var string 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string Pod名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PodName;

    /**
     * @var string 后付费资源规格名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceTypeAlias;

    /**
     * @var string 预付费资源组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupName;

    /**
     * @var boolean 是否自动终止
     */
    public $AutoStopping;

    /**
     * @var integer 自动停止时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutomaticStopTime;

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
     * @var string notebook 信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var array notebook用户类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserTypes;

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
     * @param string $Id notebook ID
     * @param string $Name notebook 名称
     * @param string $ChargeType 计费模式
     * @param ResourceConf $ResourceConf 资源配置
     * @param string $ResourceGroupId 预付费资源组
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VolumeSizeInGB 存储卷大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BillingInfos 计费金额信息，eg：2.00元/小时 (for后付费)
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 标签配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
     * @param string $StartTime 启动时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
     * @param integer $RuntimeInSeconds 运行时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChargeStatus 计费状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 状态
     * @param string $FailureReason 错误原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PodName Pod名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceTypeAlias 后付费资源规格名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroupName 预付费资源组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AutoStopping 是否自动终止
     * @param integer $AutomaticStopTime 自动停止时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VolumeSourceType 存储的类型。取值包含： 
    FREE:        预付费的免费存储
    CLOUD_PREMIUM： 高性能云硬盘
    CLOUD_SSD： SSD云硬盘
    CFS:     CFS存储，包含NFS和turbo
注意：此字段可能返回 null，表示取不到有效值。
     * @param CFSConfig $VolumeSourceCFS CFS存储的配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message notebook 信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $UserTypes notebook用户类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param SSHConfig $SSHConfig SSH配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param GooseFS $VolumeSourceGooseFS GooseFS存储配置
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

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("ResourceConf",$param) and $param["ResourceConf"] !== null) {
            $this->ResourceConf = new ResourceConf();
            $this->ResourceConf->deserialize($param["ResourceConf"]);
        }

        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
        }

        if (array_key_exists("VolumeSizeInGB",$param) and $param["VolumeSizeInGB"] !== null) {
            $this->VolumeSizeInGB = $param["VolumeSizeInGB"];
        }

        if (array_key_exists("BillingInfos",$param) and $param["BillingInfos"] !== null) {
            $this->BillingInfos = $param["BillingInfos"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("RuntimeInSeconds",$param) and $param["RuntimeInSeconds"] !== null) {
            $this->RuntimeInSeconds = $param["RuntimeInSeconds"];
        }

        if (array_key_exists("ChargeStatus",$param) and $param["ChargeStatus"] !== null) {
            $this->ChargeStatus = $param["ChargeStatus"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FailureReason",$param) and $param["FailureReason"] !== null) {
            $this->FailureReason = $param["FailureReason"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("InstanceTypeAlias",$param) and $param["InstanceTypeAlias"] !== null) {
            $this->InstanceTypeAlias = $param["InstanceTypeAlias"];
        }

        if (array_key_exists("ResourceGroupName",$param) and $param["ResourceGroupName"] !== null) {
            $this->ResourceGroupName = $param["ResourceGroupName"];
        }

        if (array_key_exists("AutoStopping",$param) and $param["AutoStopping"] !== null) {
            $this->AutoStopping = $param["AutoStopping"];
        }

        if (array_key_exists("AutomaticStopTime",$param) and $param["AutomaticStopTime"] !== null) {
            $this->AutomaticStopTime = $param["AutomaticStopTime"];
        }

        if (array_key_exists("VolumeSourceType",$param) and $param["VolumeSourceType"] !== null) {
            $this->VolumeSourceType = $param["VolumeSourceType"];
        }

        if (array_key_exists("VolumeSourceCFS",$param) and $param["VolumeSourceCFS"] !== null) {
            $this->VolumeSourceCFS = new CFSConfig();
            $this->VolumeSourceCFS->deserialize($param["VolumeSourceCFS"]);
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("UserTypes",$param) and $param["UserTypes"] !== null) {
            $this->UserTypes = $param["UserTypes"];
        }

        if (array_key_exists("SSHConfig",$param) and $param["SSHConfig"] !== null) {
            $this->SSHConfig = new SSHConfig();
            $this->SSHConfig->deserialize($param["SSHConfig"]);
        }

        if (array_key_exists("VolumeSourceGooseFS",$param) and $param["VolumeSourceGooseFS"] !== null) {
            $this->VolumeSourceGooseFS = new GooseFS();
            $this->VolumeSourceGooseFS->deserialize($param["VolumeSourceGooseFS"]);
        }
    }
}
