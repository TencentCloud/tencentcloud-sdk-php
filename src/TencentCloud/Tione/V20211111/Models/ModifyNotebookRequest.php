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
 * ModifyNotebook请求参数结构体
 *
 * @method string getId() 获取notebook id
 * @method void setId(string $Id) 设置notebook id
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getChargeType() 获取计算资源付费模式 ，可选值为：
PREPAID：预付费，即包年包月
POSTPAID_BY_HOUR：按小时后付费
 * @method void setChargeType(string $ChargeType) 设置计算资源付费模式 ，可选值为：
PREPAID：预付费，即包年包月
POSTPAID_BY_HOUR：按小时后付费
 * @method ResourceConf getResourceConf() 获取计算资源配置
 * @method void setResourceConf(ResourceConf $ResourceConf) 设置计算资源配置
 * @method boolean getLogEnable() 获取是否上报日志
 * @method void setLogEnable(boolean $LogEnable) 设置是否上报日志
 * @method boolean getAutoStopping() 获取是否自动停止
 * @method void setAutoStopping(boolean $AutoStopping) 设置是否自动停止
 * @method boolean getDirectInternetAccess() 获取是否访问公网
 * @method void setDirectInternetAccess(boolean $DirectInternetAccess) 设置是否访问公网
 * @method boolean getRootAccess() 获取是否ROOT权限
 * @method void setRootAccess(boolean $RootAccess) 设置是否ROOT权限
 * @method string getResourceGroupId() 获取资源组ID(for预付费)
 * @method void setResourceGroupId(string $ResourceGroupId) 设置资源组ID(for预付费)
 * @method string getVpcId() 获取Vpc-Id
 * @method void setVpcId(string $VpcId) 设置Vpc-Id
 * @method string getSubnetId() 获取子网Id
 * @method void setSubnetId(string $SubnetId) 设置子网Id
 * @method integer getVolumeSizeInGB() 获取存储卷大小，单位GB
 * @method void setVolumeSizeInGB(integer $VolumeSizeInGB) 设置存储卷大小，单位GB
 * @method string getVolumeSourceType() 获取存储的类型。取值包含： 
    FREE:    预付费的免费存储
    CLOUD_PREMIUM： 高性能云硬盘
    CLOUD_SSD： SSD云硬盘
    CFS:     CFS存储，包含NFS和turbo
 * @method void setVolumeSourceType(string $VolumeSourceType) 设置存储的类型。取值包含： 
    FREE:    预付费的免费存储
    CLOUD_PREMIUM： 高性能云硬盘
    CLOUD_SSD： SSD云硬盘
    CFS:     CFS存储，包含NFS和turbo
 * @method CFSConfig getVolumeSourceCFS() 获取CFS存储的配置
 * @method void setVolumeSourceCFS(CFSConfig $VolumeSourceCFS) 设置CFS存储的配置
 * @method LogConfig getLogConfig() 获取日志配置
 * @method void setLogConfig(LogConfig $LogConfig) 设置日志配置
 * @method string getLifecycleScriptId() 获取生命周期脚本的ID
 * @method void setLifecycleScriptId(string $LifecycleScriptId) 设置生命周期脚本的ID
 * @method string getDefaultCodeRepoId() 获取默认GIT存储库的ID
 * @method void setDefaultCodeRepoId(string $DefaultCodeRepoId) 设置默认GIT存储库的ID
 * @method array getAdditionalCodeRepoIds() 获取其他GIT存储库的ID，最多3个
 * @method void setAdditionalCodeRepoIds(array $AdditionalCodeRepoIds) 设置其他GIT存储库的ID，最多3个
 * @method integer getAutomaticStopTime() 获取自动停止时间，单位小时
 * @method void setAutomaticStopTime(integer $AutomaticStopTime) 设置自动停止时间，单位小时
 * @method array getTags() 获取标签配置
 * @method void setTags(array $Tags) 设置标签配置
 * @method array getDataConfigs() 获取数据配置
 * @method void setDataConfigs(array $DataConfigs) 设置数据配置
 * @method ImageInfo getImageInfo() 获取镜像信息
 * @method void setImageInfo(ImageInfo $ImageInfo) 设置镜像信息
 * @method string getImageType() 获取镜像类型
 * @method void setImageType(string $ImageType) 设置镜像类型
 */
class ModifyNotebookRequest extends AbstractModel
{
    /**
     * @var string notebook id
     */
    public $Id;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 计算资源付费模式 ，可选值为：
PREPAID：预付费，即包年包月
POSTPAID_BY_HOUR：按小时后付费
     */
    public $ChargeType;

    /**
     * @var ResourceConf 计算资源配置
     */
    public $ResourceConf;

    /**
     * @var boolean 是否上报日志
     */
    public $LogEnable;

    /**
     * @var boolean 是否自动停止
     */
    public $AutoStopping;

    /**
     * @var boolean 是否访问公网
     */
    public $DirectInternetAccess;

    /**
     * @var boolean 是否ROOT权限
     */
    public $RootAccess;

    /**
     * @var string 资源组ID(for预付费)
     */
    public $ResourceGroupId;

    /**
     * @var string Vpc-Id
     */
    public $VpcId;

    /**
     * @var string 子网Id
     */
    public $SubnetId;

    /**
     * @var integer 存储卷大小，单位GB
     */
    public $VolumeSizeInGB;

    /**
     * @var string 存储的类型。取值包含： 
    FREE:    预付费的免费存储
    CLOUD_PREMIUM： 高性能云硬盘
    CLOUD_SSD： SSD云硬盘
    CFS:     CFS存储，包含NFS和turbo
     */
    public $VolumeSourceType;

    /**
     * @var CFSConfig CFS存储的配置
     */
    public $VolumeSourceCFS;

    /**
     * @var LogConfig 日志配置
     */
    public $LogConfig;

    /**
     * @var string 生命周期脚本的ID
     */
    public $LifecycleScriptId;

    /**
     * @var string 默认GIT存储库的ID
     */
    public $DefaultCodeRepoId;

    /**
     * @var array 其他GIT存储库的ID，最多3个
     */
    public $AdditionalCodeRepoIds;

    /**
     * @var integer 自动停止时间，单位小时
     */
    public $AutomaticStopTime;

    /**
     * @var array 标签配置
     */
    public $Tags;

    /**
     * @var array 数据配置
     */
    public $DataConfigs;

    /**
     * @var ImageInfo 镜像信息
     */
    public $ImageInfo;

    /**
     * @var string 镜像类型
     */
    public $ImageType;

    /**
     * @param string $Id notebook id
     * @param string $Name 名称
     * @param string $ChargeType 计算资源付费模式 ，可选值为：
PREPAID：预付费，即包年包月
POSTPAID_BY_HOUR：按小时后付费
     * @param ResourceConf $ResourceConf 计算资源配置
     * @param boolean $LogEnable 是否上报日志
     * @param boolean $AutoStopping 是否自动停止
     * @param boolean $DirectInternetAccess 是否访问公网
     * @param boolean $RootAccess 是否ROOT权限
     * @param string $ResourceGroupId 资源组ID(for预付费)
     * @param string $VpcId Vpc-Id
     * @param string $SubnetId 子网Id
     * @param integer $VolumeSizeInGB 存储卷大小，单位GB
     * @param string $VolumeSourceType 存储的类型。取值包含： 
    FREE:    预付费的免费存储
    CLOUD_PREMIUM： 高性能云硬盘
    CLOUD_SSD： SSD云硬盘
    CFS:     CFS存储，包含NFS和turbo
     * @param CFSConfig $VolumeSourceCFS CFS存储的配置
     * @param LogConfig $LogConfig 日志配置
     * @param string $LifecycleScriptId 生命周期脚本的ID
     * @param string $DefaultCodeRepoId 默认GIT存储库的ID
     * @param array $AdditionalCodeRepoIds 其他GIT存储库的ID，最多3个
     * @param integer $AutomaticStopTime 自动停止时间，单位小时
     * @param array $Tags 标签配置
     * @param array $DataConfigs 数据配置
     * @param ImageInfo $ImageInfo 镜像信息
     * @param string $ImageType 镜像类型
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

        if (array_key_exists("LogEnable",$param) and $param["LogEnable"] !== null) {
            $this->LogEnable = $param["LogEnable"];
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
    }
}
