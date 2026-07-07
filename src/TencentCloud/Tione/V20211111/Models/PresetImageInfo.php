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
 * 预制镜像详情
 *
 * @method string getImageId() 获取<p>镜像id</p>
 * @method void setImageId(string $ImageId) 设置<p>镜像id</p>
 * @method string getImageRepo() 获取<p>镜像仓库名称</p>
 * @method void setImageRepo(string $ImageRepo) 设置<p>镜像仓库名称</p>
 * @method string getImageTag() 获取<p>镜像标签</p>
 * @method void setImageTag(string $ImageTag) 设置<p>镜像标签</p>
 * @method string getImageUrl() 获取<p>镜像url地址</p>
 * @method void setImageUrl(string $ImageUrl) 设置<p>镜像url地址</p>
 * @method string getImageSize() 获取<p>镜像的大小</p>
 * @method void setImageSize(string $ImageSize) 设置<p>镜像的大小</p>
 * @method string getDescription() 获取<p>镜像描述</p>
 * @method void setDescription(string $Description) 设置<p>镜像描述</p>
 * @method array getApplicableModuleList() 获取<p>适用模块</p>
 * @method void setApplicableModuleList(array $ApplicableModuleList) 设置<p>适用模块</p>
 * @method string getScenario() 获取<p>使用场景</p>
 * @method void setScenario(string $Scenario) 设置<p>使用场景</p>
 * @method string getFramework() 获取<p>框架名称</p>
 * @method void setFramework(string $Framework) 设置<p>框架名称</p>
 * @method string getFrameworkVersion() 获取<p>框架版本</p>
 * @method void setFrameworkVersion(string $FrameworkVersion) 设置<p>框架版本</p>
 * @method array getChipTypeList() 获取<p>芯片类型</p>
 * @method void setChipTypeList(array $ChipTypeList) 设置<p>芯片类型</p>
 * @method string getComputeLibVersion() 获取<p>运行库版本</p>
 * @method void setComputeLibVersion(string $ComputeLibVersion) 设置<p>运行库版本</p>
 * @method string getPythonVersion() 获取<p>python版本</p>
 * @method void setPythonVersion(string $PythonVersion) 设置<p>python版本</p>
 * @method string getOS() 获取<p>操作系统</p>
 * @method void setOS(string $OS) 设置<p>操作系统</p>
 * @method array getRuntimeLibList() 获取<p>运行库列表</p>
 * @method void setRuntimeLibList(array $RuntimeLibList) 设置<p>运行库列表</p>
 * @method array getSupportGpuList() 获取<p>支持的gpu列表</p>
 * @method void setSupportGpuList(array $SupportGpuList) 设置<p>支持的gpu列表</p>
 * @method array getExtraAttributeList() 获取<p>扩展属性</p>
 * @method void setExtraAttributeList(array $ExtraAttributeList) 设置<p>扩展属性</p>
 * @method boolean getSupportDistributedDeploy() 获取<p>是否支持分布式部署</p>
 * @method void setSupportDistributedDeploy(boolean $SupportDistributedDeploy) 设置<p>是否支持分布式部署</p>
 * @method boolean getIsLatestStable() 获取<p>是否最新稳定版本</p>
 * @method void setIsLatestStable(boolean $IsLatestStable) 设置<p>是否最新稳定版本</p>
 * @method string getImageName() 获取<p>镜像的名称</p>
 * @method void setImageName(string $ImageName) 设置<p>镜像的名称</p>
 * @method integer getVersion() 获取<p>镜像版本号（内部）</p>
 * @method void setVersion(integer $Version) 设置<p>镜像版本号（内部）</p>
 * @method string getCreateTime() 获取<p>录入时间</p><p>参数格式：YYYY-MM-DDThh:mm:ssZ</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>录入时间</p><p>参数格式：YYYY-MM-DDThh:mm:ssZ</p>
 * @method string getUpdateTime() 获取<p>更新时间</p><p>参数格式：YYYY-MM-DDThh:mm:ssZ</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p><p>参数格式：YYYY-MM-DDThh:mm:ssZ</p>
 * @method string getImageType() 获取<p>镜像类型</p><p>枚举值：</p><ul><li>TCR： TCR类型的镜像</li></ul>
 * @method void setImageType(string $ImageType) 设置<p>镜像类型</p><p>枚举值：</p><ul><li>TCR： TCR类型的镜像</li></ul>
 */
class PresetImageInfo extends AbstractModel
{
    /**
     * @var string <p>镜像id</p>
     */
    public $ImageId;

    /**
     * @var string <p>镜像仓库名称</p>
     */
    public $ImageRepo;

    /**
     * @var string <p>镜像标签</p>
     */
    public $ImageTag;

    /**
     * @var string <p>镜像url地址</p>
     */
    public $ImageUrl;

    /**
     * @var string <p>镜像的大小</p>
     */
    public $ImageSize;

    /**
     * @var string <p>镜像描述</p>
     */
    public $Description;

    /**
     * @var array <p>适用模块</p>
     */
    public $ApplicableModuleList;

    /**
     * @var string <p>使用场景</p>
     */
    public $Scenario;

    /**
     * @var string <p>框架名称</p>
     */
    public $Framework;

    /**
     * @var string <p>框架版本</p>
     */
    public $FrameworkVersion;

    /**
     * @var array <p>芯片类型</p>
     */
    public $ChipTypeList;

    /**
     * @var string <p>运行库版本</p>
     */
    public $ComputeLibVersion;

    /**
     * @var string <p>python版本</p>
     */
    public $PythonVersion;

    /**
     * @var string <p>操作系统</p>
     */
    public $OS;

    /**
     * @var array <p>运行库列表</p>
     */
    public $RuntimeLibList;

    /**
     * @var array <p>支持的gpu列表</p>
     */
    public $SupportGpuList;

    /**
     * @var array <p>扩展属性</p>
     */
    public $ExtraAttributeList;

    /**
     * @var boolean <p>是否支持分布式部署</p>
     */
    public $SupportDistributedDeploy;

    /**
     * @var boolean <p>是否最新稳定版本</p>
     */
    public $IsLatestStable;

    /**
     * @var string <p>镜像的名称</p>
     */
    public $ImageName;

    /**
     * @var integer <p>镜像版本号（内部）</p>
     */
    public $Version;

    /**
     * @var string <p>录入时间</p><p>参数格式：YYYY-MM-DDThh:mm:ssZ</p>
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间</p><p>参数格式：YYYY-MM-DDThh:mm:ssZ</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>镜像类型</p><p>枚举值：</p><ul><li>TCR： TCR类型的镜像</li></ul>
     */
    public $ImageType;

    /**
     * @param string $ImageId <p>镜像id</p>
     * @param string $ImageRepo <p>镜像仓库名称</p>
     * @param string $ImageTag <p>镜像标签</p>
     * @param string $ImageUrl <p>镜像url地址</p>
     * @param string $ImageSize <p>镜像的大小</p>
     * @param string $Description <p>镜像描述</p>
     * @param array $ApplicableModuleList <p>适用模块</p>
     * @param string $Scenario <p>使用场景</p>
     * @param string $Framework <p>框架名称</p>
     * @param string $FrameworkVersion <p>框架版本</p>
     * @param array $ChipTypeList <p>芯片类型</p>
     * @param string $ComputeLibVersion <p>运行库版本</p>
     * @param string $PythonVersion <p>python版本</p>
     * @param string $OS <p>操作系统</p>
     * @param array $RuntimeLibList <p>运行库列表</p>
     * @param array $SupportGpuList <p>支持的gpu列表</p>
     * @param array $ExtraAttributeList <p>扩展属性</p>
     * @param boolean $SupportDistributedDeploy <p>是否支持分布式部署</p>
     * @param boolean $IsLatestStable <p>是否最新稳定版本</p>
     * @param string $ImageName <p>镜像的名称</p>
     * @param integer $Version <p>镜像版本号（内部）</p>
     * @param string $CreateTime <p>录入时间</p><p>参数格式：YYYY-MM-DDThh:mm:ssZ</p>
     * @param string $UpdateTime <p>更新时间</p><p>参数格式：YYYY-MM-DDThh:mm:ssZ</p>
     * @param string $ImageType <p>镜像类型</p><p>枚举值：</p><ul><li>TCR： TCR类型的镜像</li></ul>
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
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("ImageRepo",$param) and $param["ImageRepo"] !== null) {
            $this->ImageRepo = $param["ImageRepo"];
        }

        if (array_key_exists("ImageTag",$param) and $param["ImageTag"] !== null) {
            $this->ImageTag = $param["ImageTag"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("ImageSize",$param) and $param["ImageSize"] !== null) {
            $this->ImageSize = $param["ImageSize"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ApplicableModuleList",$param) and $param["ApplicableModuleList"] !== null) {
            $this->ApplicableModuleList = $param["ApplicableModuleList"];
        }

        if (array_key_exists("Scenario",$param) and $param["Scenario"] !== null) {
            $this->Scenario = $param["Scenario"];
        }

        if (array_key_exists("Framework",$param) and $param["Framework"] !== null) {
            $this->Framework = $param["Framework"];
        }

        if (array_key_exists("FrameworkVersion",$param) and $param["FrameworkVersion"] !== null) {
            $this->FrameworkVersion = $param["FrameworkVersion"];
        }

        if (array_key_exists("ChipTypeList",$param) and $param["ChipTypeList"] !== null) {
            $this->ChipTypeList = $param["ChipTypeList"];
        }

        if (array_key_exists("ComputeLibVersion",$param) and $param["ComputeLibVersion"] !== null) {
            $this->ComputeLibVersion = $param["ComputeLibVersion"];
        }

        if (array_key_exists("PythonVersion",$param) and $param["PythonVersion"] !== null) {
            $this->PythonVersion = $param["PythonVersion"];
        }

        if (array_key_exists("OS",$param) and $param["OS"] !== null) {
            $this->OS = $param["OS"];
        }

        if (array_key_exists("RuntimeLibList",$param) and $param["RuntimeLibList"] !== null) {
            $this->RuntimeLibList = [];
            foreach ($param["RuntimeLibList"] as $key => $value){
                $obj = new RuntimeLib();
                $obj->deserialize($value);
                array_push($this->RuntimeLibList, $obj);
            }
        }

        if (array_key_exists("SupportGpuList",$param) and $param["SupportGpuList"] !== null) {
            $this->SupportGpuList = $param["SupportGpuList"];
        }

        if (array_key_exists("ExtraAttributeList",$param) and $param["ExtraAttributeList"] !== null) {
            $this->ExtraAttributeList = [];
            foreach ($param["ExtraAttributeList"] as $key => $value){
                $obj = new Attribute();
                $obj->deserialize($value);
                array_push($this->ExtraAttributeList, $obj);
            }
        }

        if (array_key_exists("SupportDistributedDeploy",$param) and $param["SupportDistributedDeploy"] !== null) {
            $this->SupportDistributedDeploy = $param["SupportDistributedDeploy"];
        }

        if (array_key_exists("IsLatestStable",$param) and $param["IsLatestStable"] !== null) {
            $this->IsLatestStable = $param["IsLatestStable"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ImageType",$param) and $param["ImageType"] !== null) {
            $this->ImageType = $param["ImageType"];
        }
    }
}
