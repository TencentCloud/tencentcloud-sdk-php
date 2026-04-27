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
 * Notebook列表元素
 *
 * @method string getId() 获取<p>notebook ID</p>
 * @method void setId(string $Id) 设置<p>notebook ID</p>
 * @method string getName() 获取<p>notebook 名称</p>
 * @method void setName(string $Name) 设置<p>notebook 名称</p>
 * @method string getChargeType() 获取<p>计费模式</p>
 * @method void setChargeType(string $ChargeType) 设置<p>计费模式</p>
 * @method ResourceConf getResourceConf() 获取<p>资源配置</p>
 * @method void setResourceConf(ResourceConf $ResourceConf) 设置<p>资源配置</p>
 * @method string getResourceGroupId() 获取<p>预付费资源组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupId(string $ResourceGroupId) 设置<p>预付费资源组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVolumeSizeInGB() 获取<p>存储卷大小</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVolumeSizeInGB(integer $VolumeSizeInGB) 设置<p>存储卷大小</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBillingInfos() 获取<p>计费金额信息，eg：2.00元/小时 (for后付费)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBillingInfos(array $BillingInfos) 设置<p>计费金额信息，eg：2.00元/小时 (for后付费)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取<p>标签配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置<p>标签配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getStartTime() 获取<p>启动时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置<p>启动时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
 * @method integer getRuntimeInSeconds() 获取<p>运行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuntimeInSeconds(integer $RuntimeInSeconds) 设置<p>运行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChargeStatus() 获取<p>计费状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChargeStatus(string $ChargeStatus) 设置<p>计费状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>状态</p>
 * @method void setStatus(string $Status) 设置<p>状态</p>
 * @method string getFailureReason() 获取<p>错误原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailureReason(string $FailureReason) 设置<p>错误原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取<p>结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置<p>结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPodName() 获取<p>Pod名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPodName(string $PodName) 设置<p>Pod名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceTypeAlias() 获取<p>后付费资源规格名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceTypeAlias(string $InstanceTypeAlias) 设置<p>后付费资源规格名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroupName() 获取<p>预付费资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupName(string $ResourceGroupName) 设置<p>预付费资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAutoStopping() 获取<p>是否自动终止</p>
 * @method void setAutoStopping(boolean $AutoStopping) 设置<p>是否自动终止</p>
 * @method integer getAutomaticStopTime() 获取<p>自动停止时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutomaticStopTime(integer $AutomaticStopTime) 设置<p>自动停止时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVolumeSourceType() 获取<p>存储的类型。取值包含：<br>    FREE:        预付费的免费存储<br>    CLOUD_PREMIUM： 高性能云硬盘<br>    CLOUD_SSD： SSD云硬盘<br>    CFS:     CFS存储，包含NFS和turbo</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVolumeSourceType(string $VolumeSourceType) 设置<p>存储的类型。取值包含：<br>    FREE:        预付费的免费存储<br>    CLOUD_PREMIUM： 高性能云硬盘<br>    CLOUD_SSD： SSD云硬盘<br>    CFS:     CFS存储，包含NFS和turbo</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method CFSConfig getVolumeSourceCFS() 获取<p>CFS存储的配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVolumeSourceCFS(CFSConfig $VolumeSourceCFS) 设置<p>CFS存储的配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取<p>notebook 信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置<p>notebook 信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getUserTypes() 获取<p>notebook用户类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserTypes(array $UserTypes) 设置<p>notebook用户类型</p>
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
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubUin(string $SubUin) 设置<p>子用户ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubUinName() 获取<p>子用户名称</p>
 * @method void setSubUinName(string $SubUinName) 设置<p>子用户名称</p>
 * @method string getAppId() 获取<p>AppId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(string $AppId) 设置<p>AppId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ExposePortConfig getExposePortConfig() 获取<p>容器服务暴露端口配置</p>
 * @method void setExposePortConfig(ExposePortConfig $ExposePortConfig) 设置<p>容器服务暴露端口配置</p>
 * @method string getDescription() 获取<p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method OperatorInfo getLatestOperatorInfo() 获取<p>操作者信息</p>
 * @method void setLatestOperatorInfo(OperatorInfo $LatestOperatorInfo) 设置<p>操作者信息</p>
 */
class NotebookSetItem extends AbstractModel
{
    /**
     * @var string <p>notebook ID</p>
     */
    public $Id;

    /**
     * @var string <p>notebook 名称</p>
     */
    public $Name;

    /**
     * @var string <p>计费模式</p>
     */
    public $ChargeType;

    /**
     * @var ResourceConf <p>资源配置</p>
     */
    public $ResourceConf;

    /**
     * @var string <p>预付费资源组</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupId;

    /**
     * @var integer <p>存储卷大小</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VolumeSizeInGB;

    /**
     * @var array <p>计费金额信息，eg：2.00元/小时 (for后付费)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BillingInfos;

    /**
     * @var array <p>标签配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>启动时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var integer <p>运行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuntimeInSeconds;

    /**
     * @var string <p>计费状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChargeStatus;

    /**
     * @var string <p>状态</p>
     */
    public $Status;

    /**
     * @var string <p>错误原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailureReason;

    /**
     * @var string <p>结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string <p>Pod名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PodName;

    /**
     * @var string <p>后付费资源规格名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceTypeAlias;

    /**
     * @var string <p>预付费资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupName;

    /**
     * @var boolean <p>是否自动终止</p>
     */
    public $AutoStopping;

    /**
     * @var integer <p>自动停止时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutomaticStopTime;

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
     * @var string <p>notebook 信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var array <p>notebook用户类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserTypes;

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
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubUin;

    /**
     * @var string <p>子用户名称</p>
     */
    public $SubUinName;

    /**
     * @var string <p>AppId</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var ExposePortConfig <p>容器服务暴露端口配置</p>
     */
    public $ExposePortConfig;

    /**
     * @var string <p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var OperatorInfo <p>操作者信息</p>
     */
    public $LatestOperatorInfo;

    /**
     * @param string $Id <p>notebook ID</p>
     * @param string $Name <p>notebook 名称</p>
     * @param string $ChargeType <p>计费模式</p>
     * @param ResourceConf $ResourceConf <p>资源配置</p>
     * @param string $ResourceGroupId <p>预付费资源组</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VolumeSizeInGB <p>存储卷大小</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BillingInfos <p>计费金额信息，eg：2.00元/小时 (for后付费)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags <p>标签配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>创建时间</p>
     * @param string $StartTime <p>启动时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime <p>更新时间</p>
     * @param integer $RuntimeInSeconds <p>运行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChargeStatus <p>计费状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>状态</p>
     * @param string $FailureReason <p>错误原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime <p>结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PodName <p>Pod名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceTypeAlias <p>后付费资源规格名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroupName <p>预付费资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AutoStopping <p>是否自动终止</p>
     * @param integer $AutomaticStopTime <p>自动停止时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VolumeSourceType <p>存储的类型。取值包含：<br>    FREE:        预付费的免费存储<br>    CLOUD_PREMIUM： 高性能云硬盘<br>    CLOUD_SSD： SSD云硬盘<br>    CFS:     CFS存储，包含NFS和turbo</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param CFSConfig $VolumeSourceCFS <p>CFS存储的配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message <p>notebook 信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $UserTypes <p>notebook用户类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param SSHConfig $SSHConfig <p>SSH配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param GooseFS $VolumeSourceGooseFS <p>GooseFS存储配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubUin <p>子用户ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubUinName <p>子用户名称</p>
     * @param string $AppId <p>AppId</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ExposePortConfig $ExposePortConfig <p>容器服务暴露端口配置</p>
     * @param string $Description <p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param OperatorInfo $LatestOperatorInfo <p>操作者信息</p>
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

        if (array_key_exists("SubUin",$param) and $param["SubUin"] !== null) {
            $this->SubUin = $param["SubUin"];
        }

        if (array_key_exists("SubUinName",$param) and $param["SubUinName"] !== null) {
            $this->SubUinName = $param["SubUinName"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ExposePortConfig",$param) and $param["ExposePortConfig"] !== null) {
            $this->ExposePortConfig = new ExposePortConfig();
            $this->ExposePortConfig->deserialize($param["ExposePortConfig"]);
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
