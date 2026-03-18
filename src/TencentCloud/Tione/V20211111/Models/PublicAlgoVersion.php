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
 * 公共算法版本信息
 *
 * @method string getPublicAlgoVersionId() 获取公共算法版本Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicAlgoVersionId(string $PublicAlgoVersionId) 设置公共算法版本Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublicAlgoGroupId() 获取对应的公共算法组Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicAlgoGroupId(string $PublicAlgoGroupId) 设置对应的公共算法组Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersion() 获取版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(string $Version) 设置版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIntroduction() 获取模型简介
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntroduction(string $Introduction) 设置模型简介
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPreviewInfo() 获取预览信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPreviewInfo(string $PreviewInfo) 设置预览信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method ImageInfo getPresetTrainImageInfo() 获取预置训练镜像信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPresetTrainImageInfo(ImageInfo $PresetTrainImageInfo) 设置预置训练镜像信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method MaterialInfo getPresetTrainCodeInfo() 获取预置训练代码信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPresetTrainCodeInfo(MaterialInfo $PresetTrainCodeInfo) 设置预置训练代码信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method MaterialInfo getPresetModelInfo() 获取预置模型信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPresetModelInfo(MaterialInfo $PresetModelInfo) 设置预置模型信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsImported() 获取是否已经被导入到我的算法
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsImported(boolean $IsImported) 设置是否已经被导入到我的算法
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method ResourceSpec getDefaultResourceSpec() 获取默认训练资源规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefaultResourceSpec(ResourceSpec $DefaultResourceSpec) 设置默认训练资源规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method ResourceSpec getDefaultInferenceResourceSpec() 获取默认推理资源规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefaultInferenceResourceSpec(ResourceSpec $DefaultInferenceResourceSpec) 设置默认推理资源规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSupportDeploy() 获取是否支持直接部署推理服务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportDeploy(boolean $SupportDeploy) 设置是否支持直接部署推理服务
注意：此字段可能返回 null，表示取不到有效值。
 * @method MaterialInfo getPresetTrainDataset() 获取内置训练数据集
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPresetTrainDataset(MaterialInfo $PresetTrainDataset) 设置内置训练数据集
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTrainCodeDownloadUrl() 获取训练代码包下载路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrainCodeDownloadUrl(string $TrainCodeDownloadUrl) 设置训练代码包下载路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTrainDataDownloadUrl() 获取内置数据下载路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrainDataDownloadUrl(string $TrainDataDownloadUrl) 设置内置数据下载路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTrainParams() 获取训练参数列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrainParams(array $TrainParams) 设置训练参数列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPresetTrainCodeStartCmd() 获取训练启动命令
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPresetTrainCodeStartCmd(string $PresetTrainCodeStartCmd) 设置训练启动命令
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsPrivateModel() 获取是否非公开模型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsPrivateModel(boolean $IsPrivateModel) 设置是否非公开模型
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPresetTrainImageInfoList() 获取各种设备下的训练镜像
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPresetTrainImageInfoList(array $PresetTrainImageInfoList) 设置各种设备下的训练镜像
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPresetInferenceImageInfoList() 获取各种设备下的推理镜像
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPresetInferenceImageInfoList(array $PresetInferenceImageInfoList) 设置各种设备下的推理镜像
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPresetTrainCodeInfoList() 获取各种设备下的训练代码信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPresetTrainCodeInfoList(array $PresetTrainCodeInfoList) 设置各种设备下的训练代码信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPresetModelInfoList() 获取各种设备下的内置模型信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPresetModelInfoList(array $PresetModelInfoList) 设置各种设备下的内置模型信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelCategory() 获取模型类别，比如LLM/MultiModal
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelCategory(string $ModelCategory) 设置模型类别，比如LLM/MultiModal
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublicAlgoSeriesId() 获取公共算法Id
 * @method void setPublicAlgoSeriesId(string $PublicAlgoSeriesId) 设置公共算法Id
 */
class PublicAlgoVersion extends AbstractModel
{
    /**
     * @var string 公共算法版本Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicAlgoVersionId;

    /**
     * @var string 对应的公共算法组Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicAlgoGroupId;

    /**
     * @var string 版本号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @var string 模型简介
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Introduction;

    /**
     * @var string 预览信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PreviewInfo;

    /**
     * @var ImageInfo 预置训练镜像信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PresetTrainImageInfo;

    /**
     * @var MaterialInfo 预置训练代码信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PresetTrainCodeInfo;

    /**
     * @var MaterialInfo 预置模型信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PresetModelInfo;

    /**
     * @var boolean 是否已经被导入到我的算法
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsImported;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var ResourceSpec 默认训练资源规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefaultResourceSpec;

    /**
     * @var ResourceSpec 默认推理资源规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefaultInferenceResourceSpec;

    /**
     * @var boolean 是否支持直接部署推理服务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportDeploy;

    /**
     * @var MaterialInfo 内置训练数据集
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PresetTrainDataset;

    /**
     * @var string 训练代码包下载路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrainCodeDownloadUrl;

    /**
     * @var string 内置数据下载路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrainDataDownloadUrl;

    /**
     * @var array 训练参数列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrainParams;

    /**
     * @var string 训练启动命令
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PresetTrainCodeStartCmd;

    /**
     * @var boolean 是否非公开模型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsPrivateModel;

    /**
     * @var array 各种设备下的训练镜像
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PresetTrainImageInfoList;

    /**
     * @var array 各种设备下的推理镜像
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PresetInferenceImageInfoList;

    /**
     * @var array 各种设备下的训练代码信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PresetTrainCodeInfoList;

    /**
     * @var array 各种设备下的内置模型信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PresetModelInfoList;

    /**
     * @var string 模型类别，比如LLM/MultiModal
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelCategory;

    /**
     * @var string 公共算法Id
     */
    public $PublicAlgoSeriesId;

    /**
     * @param string $PublicAlgoVersionId 公共算法版本Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublicAlgoGroupId 对应的公共算法组Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Version 版本号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Introduction 模型简介
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PreviewInfo 预览信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param ImageInfo $PresetTrainImageInfo 预置训练镜像信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param MaterialInfo $PresetTrainCodeInfo 预置训练代码信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param MaterialInfo $PresetModelInfo 预置模型信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsImported 是否已经被导入到我的算法
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param ResourceSpec $DefaultResourceSpec 默认训练资源规格
注意：此字段可能返回 null，表示取不到有效值。
     * @param ResourceSpec $DefaultInferenceResourceSpec 默认推理资源规格
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SupportDeploy 是否支持直接部署推理服务
注意：此字段可能返回 null，表示取不到有效值。
     * @param MaterialInfo $PresetTrainDataset 内置训练数据集
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TrainCodeDownloadUrl 训练代码包下载路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TrainDataDownloadUrl 内置数据下载路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TrainParams 训练参数列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PresetTrainCodeStartCmd 训练启动命令
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsPrivateModel 是否非公开模型
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PresetTrainImageInfoList 各种设备下的训练镜像
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PresetInferenceImageInfoList 各种设备下的推理镜像
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PresetTrainCodeInfoList 各种设备下的训练代码信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PresetModelInfoList 各种设备下的内置模型信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelCategory 模型类别，比如LLM/MultiModal
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublicAlgoSeriesId 公共算法Id
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
        if (array_key_exists("PublicAlgoVersionId",$param) and $param["PublicAlgoVersionId"] !== null) {
            $this->PublicAlgoVersionId = $param["PublicAlgoVersionId"];
        }

        if (array_key_exists("PublicAlgoGroupId",$param) and $param["PublicAlgoGroupId"] !== null) {
            $this->PublicAlgoGroupId = $param["PublicAlgoGroupId"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Introduction",$param) and $param["Introduction"] !== null) {
            $this->Introduction = $param["Introduction"];
        }

        if (array_key_exists("PreviewInfo",$param) and $param["PreviewInfo"] !== null) {
            $this->PreviewInfo = $param["PreviewInfo"];
        }

        if (array_key_exists("PresetTrainImageInfo",$param) and $param["PresetTrainImageInfo"] !== null) {
            $this->PresetTrainImageInfo = new ImageInfo();
            $this->PresetTrainImageInfo->deserialize($param["PresetTrainImageInfo"]);
        }

        if (array_key_exists("PresetTrainCodeInfo",$param) and $param["PresetTrainCodeInfo"] !== null) {
            $this->PresetTrainCodeInfo = new MaterialInfo();
            $this->PresetTrainCodeInfo->deserialize($param["PresetTrainCodeInfo"]);
        }

        if (array_key_exists("PresetModelInfo",$param) and $param["PresetModelInfo"] !== null) {
            $this->PresetModelInfo = new MaterialInfo();
            $this->PresetModelInfo->deserialize($param["PresetModelInfo"]);
        }

        if (array_key_exists("IsImported",$param) and $param["IsImported"] !== null) {
            $this->IsImported = $param["IsImported"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("DefaultResourceSpec",$param) and $param["DefaultResourceSpec"] !== null) {
            $this->DefaultResourceSpec = new ResourceSpec();
            $this->DefaultResourceSpec->deserialize($param["DefaultResourceSpec"]);
        }

        if (array_key_exists("DefaultInferenceResourceSpec",$param) and $param["DefaultInferenceResourceSpec"] !== null) {
            $this->DefaultInferenceResourceSpec = new ResourceSpec();
            $this->DefaultInferenceResourceSpec->deserialize($param["DefaultInferenceResourceSpec"]);
        }

        if (array_key_exists("SupportDeploy",$param) and $param["SupportDeploy"] !== null) {
            $this->SupportDeploy = $param["SupportDeploy"];
        }

        if (array_key_exists("PresetTrainDataset",$param) and $param["PresetTrainDataset"] !== null) {
            $this->PresetTrainDataset = new MaterialInfo();
            $this->PresetTrainDataset->deserialize($param["PresetTrainDataset"]);
        }

        if (array_key_exists("TrainCodeDownloadUrl",$param) and $param["TrainCodeDownloadUrl"] !== null) {
            $this->TrainCodeDownloadUrl = $param["TrainCodeDownloadUrl"];
        }

        if (array_key_exists("TrainDataDownloadUrl",$param) and $param["TrainDataDownloadUrl"] !== null) {
            $this->TrainDataDownloadUrl = $param["TrainDataDownloadUrl"];
        }

        if (array_key_exists("TrainParams",$param) and $param["TrainParams"] !== null) {
            $this->TrainParams = [];
            foreach ($param["TrainParams"] as $key => $value){
                $obj = new TrainParam();
                $obj->deserialize($value);
                array_push($this->TrainParams, $obj);
            }
        }

        if (array_key_exists("PresetTrainCodeStartCmd",$param) and $param["PresetTrainCodeStartCmd"] !== null) {
            $this->PresetTrainCodeStartCmd = $param["PresetTrainCodeStartCmd"];
        }

        if (array_key_exists("IsPrivateModel",$param) and $param["IsPrivateModel"] !== null) {
            $this->IsPrivateModel = $param["IsPrivateModel"];
        }

        if (array_key_exists("PresetTrainImageInfoList",$param) and $param["PresetTrainImageInfoList"] !== null) {
            $this->PresetTrainImageInfoList = [];
            foreach ($param["PresetTrainImageInfoList"] as $key => $value){
                $obj = new DeviceImageInfo();
                $obj->deserialize($value);
                array_push($this->PresetTrainImageInfoList, $obj);
            }
        }

        if (array_key_exists("PresetInferenceImageInfoList",$param) and $param["PresetInferenceImageInfoList"] !== null) {
            $this->PresetInferenceImageInfoList = [];
            foreach ($param["PresetInferenceImageInfoList"] as $key => $value){
                $obj = new DeviceImageInfo();
                $obj->deserialize($value);
                array_push($this->PresetInferenceImageInfoList, $obj);
            }
        }

        if (array_key_exists("PresetTrainCodeInfoList",$param) and $param["PresetTrainCodeInfoList"] !== null) {
            $this->PresetTrainCodeInfoList = [];
            foreach ($param["PresetTrainCodeInfoList"] as $key => $value){
                $obj = new DeviceMaterialInfo();
                $obj->deserialize($value);
                array_push($this->PresetTrainCodeInfoList, $obj);
            }
        }

        if (array_key_exists("PresetModelInfoList",$param) and $param["PresetModelInfoList"] !== null) {
            $this->PresetModelInfoList = [];
            foreach ($param["PresetModelInfoList"] as $key => $value){
                $obj = new DeviceMaterialInfo();
                $obj->deserialize($value);
                array_push($this->PresetModelInfoList, $obj);
            }
        }

        if (array_key_exists("ModelCategory",$param) and $param["ModelCategory"] !== null) {
            $this->ModelCategory = $param["ModelCategory"];
        }

        if (array_key_exists("PublicAlgoSeriesId",$param) and $param["PublicAlgoSeriesId"] !== null) {
            $this->PublicAlgoSeriesId = $param["PublicAlgoSeriesId"];
        }
    }
}
