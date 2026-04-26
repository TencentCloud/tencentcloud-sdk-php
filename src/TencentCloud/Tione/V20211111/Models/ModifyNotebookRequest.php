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
 * ModifyNotebook请求参数结构体
 *
 * @method string getId() 获取<p>notebook id</p>
 * @method void setId(string $Id) 设置<p>notebook id</p>
 * @method string getName() 获取<p>名称。不超过60个字符，仅支持中英文、数字、下划线&quot;_&quot;、短横&quot;-&quot;，只能以中英文、数字开头</p>
 * @method void setName(string $Name) 设置<p>名称。不超过60个字符，仅支持中英文、数字、下划线&quot;_&quot;、短横&quot;-&quot;，只能以中英文、数字开头</p>
 * @method string getChargeType() 获取<p>（不允许修改）计算资源付费模式 ，可选值为：<br>PREPAID：预付费，即包年包月<br>POSTPAID_BY_HOUR：按小时后付费</p>
 * @method void setChargeType(string $ChargeType) 设置<p>（不允许修改）计算资源付费模式 ，可选值为：<br>PREPAID：预付费，即包年包月<br>POSTPAID_BY_HOUR：按小时后付费</p>
 * @method ResourceConf getResourceConf() 获取<p>计算资源配置</p>
 * @method void setResourceConf(ResourceConf $ResourceConf) 设置<p>计算资源配置</p>
 * @method boolean getAutoStopping() 获取<p>是否自动停止</p>
 * @method void setAutoStopping(boolean $AutoStopping) 设置<p>是否自动停止</p>
 * @method boolean getDirectInternetAccess() 获取<p>是否访问公网</p>
 * @method void setDirectInternetAccess(boolean $DirectInternetAccess) 设置<p>是否访问公网</p>
 * @method boolean getRootAccess() 获取<p>是否ROOT权限</p>
 * @method void setRootAccess(boolean $RootAccess) 设置<p>是否ROOT权限</p>
 * @method boolean getLogEnable() 获取<p>是否上报日志</p>
 * @method void setLogEnable(boolean $LogEnable) 设置<p>是否上报日志</p>
 * @method string getResourceGroupId() 获取<p>资源组ID(for预付费)</p>
 * @method void setResourceGroupId(string $ResourceGroupId) 设置<p>资源组ID(for预付费)</p>
 * @method string getVpcId() 获取<p>（不允许修改）Vpc-Id</p>
 * @method void setVpcId(string $VpcId) 设置<p>（不允许修改）Vpc-Id</p>
 * @method string getSubnetId() 获取<p>（不允许修改）子网Id</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>（不允许修改）子网Id</p>
 * @method integer getVolumeSizeInGB() 获取<p>存储卷大小，单位GB</p>
 * @method void setVolumeSizeInGB(integer $VolumeSizeInGB) 设置<p>存储卷大小，单位GB</p>
 * @method string getVolumeSourceType() 获取<p>（不允许修改）存储的类型。取值包含：<br>    FREE:    预付费的免费存储<br>    CLOUD_PREMIUM： 高性能云硬盘<br>    CLOUD_SSD： SSD云硬盘<br>    CFS:     CFS存储，包含NFS和turbo</p>
 * @method void setVolumeSourceType(string $VolumeSourceType) 设置<p>（不允许修改）存储的类型。取值包含：<br>    FREE:    预付费的免费存储<br>    CLOUD_PREMIUM： 高性能云硬盘<br>    CLOUD_SSD： SSD云硬盘<br>    CFS:     CFS存储，包含NFS和turbo</p>
 * @method CFSConfig getVolumeSourceCFS() 获取<p>（不允许修改）CFS存储的配置</p>
 * @method void setVolumeSourceCFS(CFSConfig $VolumeSourceCFS) 设置<p>（不允许修改）CFS存储的配置</p>
 * @method LogConfig getLogConfig() 获取<p>日志配置</p>
 * @method void setLogConfig(LogConfig $LogConfig) 设置<p>日志配置</p>
 * @method string getLifecycleScriptId() 获取<p>生命周期脚本的ID</p>
 * @method void setLifecycleScriptId(string $LifecycleScriptId) 设置<p>生命周期脚本的ID</p>
 * @method string getDefaultCodeRepoId() 获取<p>默认GIT存储库的ID</p>
 * @method void setDefaultCodeRepoId(string $DefaultCodeRepoId) 设置<p>默认GIT存储库的ID</p>
 * @method array getAdditionalCodeRepoIds() 获取<p>其他GIT存储库的ID，最多3个</p>
 * @method void setAdditionalCodeRepoIds(array $AdditionalCodeRepoIds) 设置<p>其他GIT存储库的ID，最多3个</p>
 * @method integer getAutomaticStopTime() 获取<p>自动停止时间，单位小时</p>
 * @method void setAutomaticStopTime(integer $AutomaticStopTime) 设置<p>自动停止时间，单位小时</p>
 * @method array getTags() 获取<p>标签配置</p>
 * @method void setTags(array $Tags) 设置<p>标签配置</p>
 * @method array getDataConfigs() 获取<p>数据配置，只支持WEDATA_HDFS</p>
 * @method void setDataConfigs(array $DataConfigs) 设置<p>数据配置，只支持WEDATA_HDFS</p>
 * @method ImageInfo getImageInfo() 获取<p>镜像信息</p>
 * @method void setImageInfo(ImageInfo $ImageInfo) 设置<p>镜像信息</p>
 * @method string getImageType() 获取<p>镜像类型，包括SYSTEM、TCR、CCR</p>
 * @method void setImageType(string $ImageType) 设置<p>镜像类型，包括SYSTEM、TCR、CCR</p>
 * @method SSHConfig getSSHConfig() 获取<p>SSH配置</p>
 * @method void setSSHConfig(SSHConfig $SSHConfig) 设置<p>SSH配置</p>
 * @method array getEnvs() 获取<p>自定义环境变量</p>
 * @method void setEnvs(array $Envs) 设置<p>自定义环境变量</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 */
class ModifyNotebookRequest extends AbstractModel
{
    /**
     * @var string <p>notebook id</p>
     */
    public $Id;

    /**
     * @var string <p>名称。不超过60个字符，仅支持中英文、数字、下划线&quot;_&quot;、短横&quot;-&quot;，只能以中英文、数字开头</p>
     */
    public $Name;

    /**
     * @var string <p>（不允许修改）计算资源付费模式 ，可选值为：<br>PREPAID：预付费，即包年包月<br>POSTPAID_BY_HOUR：按小时后付费</p>
     */
    public $ChargeType;

    /**
     * @var ResourceConf <p>计算资源配置</p>
     */
    public $ResourceConf;

    /**
     * @var boolean <p>是否自动停止</p>
     */
    public $AutoStopping;

    /**
     * @var boolean <p>是否访问公网</p>
     */
    public $DirectInternetAccess;

    /**
     * @var boolean <p>是否ROOT权限</p>
     */
    public $RootAccess;

    /**
     * @var boolean <p>是否上报日志</p>
     */
    public $LogEnable;

    /**
     * @var string <p>资源组ID(for预付费)</p>
     */
    public $ResourceGroupId;

    /**
     * @var string <p>（不允许修改）Vpc-Id</p>
     */
    public $VpcId;

    /**
     * @var string <p>（不允许修改）子网Id</p>
     */
    public $SubnetId;

    /**
     * @var integer <p>存储卷大小，单位GB</p>
     */
    public $VolumeSizeInGB;

    /**
     * @var string <p>（不允许修改）存储的类型。取值包含：<br>    FREE:    预付费的免费存储<br>    CLOUD_PREMIUM： 高性能云硬盘<br>    CLOUD_SSD： SSD云硬盘<br>    CFS:     CFS存储，包含NFS和turbo</p>
     */
    public $VolumeSourceType;

    /**
     * @var CFSConfig <p>（不允许修改）CFS存储的配置</p>
     */
    public $VolumeSourceCFS;

    /**
     * @var LogConfig <p>日志配置</p>
     */
    public $LogConfig;

    /**
     * @var string <p>生命周期脚本的ID</p>
     */
    public $LifecycleScriptId;

    /**
     * @var string <p>默认GIT存储库的ID</p>
     */
    public $DefaultCodeRepoId;

    /**
     * @var array <p>其他GIT存储库的ID，最多3个</p>
     */
    public $AdditionalCodeRepoIds;

    /**
     * @var integer <p>自动停止时间，单位小时</p>
     */
    public $AutomaticStopTime;

    /**
     * @var array <p>标签配置</p>
     */
    public $Tags;

    /**
     * @var array <p>数据配置，只支持WEDATA_HDFS</p>
     */
    public $DataConfigs;

    /**
     * @var ImageInfo <p>镜像信息</p>
     */
    public $ImageInfo;

    /**
     * @var string <p>镜像类型，包括SYSTEM、TCR、CCR</p>
     */
    public $ImageType;

    /**
     * @var SSHConfig <p>SSH配置</p>
     */
    public $SSHConfig;

    /**
     * @var array <p>自定义环境变量</p>
     */
    public $Envs;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @param string $Id <p>notebook id</p>
     * @param string $Name <p>名称。不超过60个字符，仅支持中英文、数字、下划线&quot;_&quot;、短横&quot;-&quot;，只能以中英文、数字开头</p>
     * @param string $ChargeType <p>（不允许修改）计算资源付费模式 ，可选值为：<br>PREPAID：预付费，即包年包月<br>POSTPAID_BY_HOUR：按小时后付费</p>
     * @param ResourceConf $ResourceConf <p>计算资源配置</p>
     * @param boolean $AutoStopping <p>是否自动停止</p>
     * @param boolean $DirectInternetAccess <p>是否访问公网</p>
     * @param boolean $RootAccess <p>是否ROOT权限</p>
     * @param boolean $LogEnable <p>是否上报日志</p>
     * @param string $ResourceGroupId <p>资源组ID(for预付费)</p>
     * @param string $VpcId <p>（不允许修改）Vpc-Id</p>
     * @param string $SubnetId <p>（不允许修改）子网Id</p>
     * @param integer $VolumeSizeInGB <p>存储卷大小，单位GB</p>
     * @param string $VolumeSourceType <p>（不允许修改）存储的类型。取值包含：<br>    FREE:    预付费的免费存储<br>    CLOUD_PREMIUM： 高性能云硬盘<br>    CLOUD_SSD： SSD云硬盘<br>    CFS:     CFS存储，包含NFS和turbo</p>
     * @param CFSConfig $VolumeSourceCFS <p>（不允许修改）CFS存储的配置</p>
     * @param LogConfig $LogConfig <p>日志配置</p>
     * @param string $LifecycleScriptId <p>生命周期脚本的ID</p>
     * @param string $DefaultCodeRepoId <p>默认GIT存储库的ID</p>
     * @param array $AdditionalCodeRepoIds <p>其他GIT存储库的ID，最多3个</p>
     * @param integer $AutomaticStopTime <p>自动停止时间，单位小时</p>
     * @param array $Tags <p>标签配置</p>
     * @param array $DataConfigs <p>数据配置，只支持WEDATA_HDFS</p>
     * @param ImageInfo $ImageInfo <p>镜像信息</p>
     * @param string $ImageType <p>镜像类型，包括SYSTEM、TCR、CCR</p>
     * @param SSHConfig $SSHConfig <p>SSH配置</p>
     * @param array $Envs <p>自定义环境变量</p>
     * @param string $Description <p>描述</p>
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

        if (array_key_exists("AutoStopping",$param) and $param["AutoStopping"] !== null) {
            $this->AutoStopping = $param["AutoStopping"];
        }

        if (array_key_exists("DirectInternetAccess",$param) and $param["DirectInternetAccess"] !== null) {
            $this->DirectInternetAccess = $param["DirectInternetAccess"];
        }

        if (array_key_exists("RootAccess",$param) and $param["RootAccess"] !== null) {
            $this->RootAccess = $param["RootAccess"];
        }

        if (array_key_exists("LogEnable",$param) and $param["LogEnable"] !== null) {
            $this->LogEnable = $param["LogEnable"];
        }

        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("VolumeSizeInGB",$param) and $param["VolumeSizeInGB"] !== null) {
            $this->VolumeSizeInGB = $param["VolumeSizeInGB"];
        }

        if (array_key_exists("VolumeSourceType",$param) and $param["VolumeSourceType"] !== null) {
            $this->VolumeSourceType = $param["VolumeSourceType"];
        }

        if (array_key_exists("VolumeSourceCFS",$param) and $param["VolumeSourceCFS"] !== null) {
            $this->VolumeSourceCFS = new CFSConfig();
            $this->VolumeSourceCFS->deserialize($param["VolumeSourceCFS"]);
        }

        if (array_key_exists("LogConfig",$param) and $param["LogConfig"] !== null) {
            $this->LogConfig = new LogConfig();
            $this->LogConfig->deserialize($param["LogConfig"]);
        }

        if (array_key_exists("LifecycleScriptId",$param) and $param["LifecycleScriptId"] !== null) {
            $this->LifecycleScriptId = $param["LifecycleScriptId"];
        }

        if (array_key_exists("DefaultCodeRepoId",$param) and $param["DefaultCodeRepoId"] !== null) {
            $this->DefaultCodeRepoId = $param["DefaultCodeRepoId"];
        }

        if (array_key_exists("AdditionalCodeRepoIds",$param) and $param["AdditionalCodeRepoIds"] !== null) {
            $this->AdditionalCodeRepoIds = $param["AdditionalCodeRepoIds"];
        }

        if (array_key_exists("AutomaticStopTime",$param) and $param["AutomaticStopTime"] !== null) {
            $this->AutomaticStopTime = $param["AutomaticStopTime"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("DataConfigs",$param) and $param["DataConfigs"] !== null) {
            $this->DataConfigs = [];
            foreach ($param["DataConfigs"] as $key => $value){
                $obj = new DataConfig();
                $obj->deserialize($value);
                array_push($this->DataConfigs, $obj);
            }
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

        if (array_key_exists("Envs",$param) and $param["Envs"] !== null) {
            $this->Envs = [];
            foreach ($param["Envs"] as $key => $value){
                $obj = new EnvVar();
                $obj->deserialize($value);
                array_push($this->Envs, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
