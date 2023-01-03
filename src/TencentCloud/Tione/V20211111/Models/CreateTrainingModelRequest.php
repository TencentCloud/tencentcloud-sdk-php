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
 * CreateTrainingModel请求参数结构体
 *
 * @method string getImportMethod() 获取导入方式
MODEL：导入新模型
VERSION：导入新版本
EXIST：导入现有版本
 * @method void setImportMethod(string $ImportMethod) 设置导入方式
MODEL：导入新模型
VERSION：导入新版本
EXIST：导入现有版本
 * @method CosPathInfo getTrainingModelCosPath() 获取模型来源cos目录，以/结尾
 * @method void setTrainingModelCosPath(CosPathInfo $TrainingModelCosPath) 设置模型来源cos目录，以/结尾
 * @method string getReasoningEnvironmentSource() 获取推理环境来源（SYSTEM/CUSTOM）
 * @method void setReasoningEnvironmentSource(string $ReasoningEnvironmentSource) 设置推理环境来源（SYSTEM/CUSTOM）
 * @method string getTrainingModelName() 获取模型名称，不超过60个字符，仅支持中英文、数字、下划线"_"、短横"-"，只能以中英文、数字开头
 * @method void setTrainingModelName(string $TrainingModelName) 设置模型名称，不超过60个字符，仅支持中英文、数字、下划线"_"、短横"-"，只能以中英文、数字开头
 * @method array getTags() 获取标签配置
 * @method void setTags(array $Tags) 设置标签配置
 * @method string getTrainingJobName() 获取训练任务名称
 * @method void setTrainingJobName(string $TrainingJobName) 设置训练任务名称
 * @method string getAlgorithmFramework() 获取算法框架 （PYTORCH/TENSORFLOW/DETECTRON2/PMML/MMDETECTION)
 * @method void setAlgorithmFramework(string $AlgorithmFramework) 设置算法框架 （PYTORCH/TENSORFLOW/DETECTRON2/PMML/MMDETECTION)
 * @method string getReasoningEnvironment() 获取推理环境
 * @method void setReasoningEnvironment(string $ReasoningEnvironment) 设置推理环境
 * @method string getTrainingModelIndex() 获取训练指标，最多支持1000字符
 * @method void setTrainingModelIndex(string $TrainingModelIndex) 设置训练指标，最多支持1000字符
 * @method string getTrainingModelVersion() 获取模型版本
 * @method void setTrainingModelVersion(string $TrainingModelVersion) 设置模型版本
 * @method ImageInfo getReasoningImageInfo() 获取自定义推理环境
 * @method void setReasoningImageInfo(ImageInfo $ReasoningImageInfo) 设置自定义推理环境
 * @method string getModelMoveMode() 获取模型移动方式（CUT/COPY）
 * @method void setModelMoveMode(string $ModelMoveMode) 设置模型移动方式（CUT/COPY）
 * @method string getTrainingJobId() 获取训练任务ID
 * @method void setTrainingJobId(string $TrainingJobId) 设置训练任务ID
 * @method string getTrainingModelId() 获取模型ID（导入新模型不需要，导入新版本需要）
 * @method void setTrainingModelId(string $TrainingModelId) 设置模型ID（导入新模型不需要，导入新版本需要）
 * @method CosPathInfo getModelOutputPath() 获取模型存储cos目录
 * @method void setModelOutputPath(CosPathInfo $ModelOutputPath) 设置模型存储cos目录
 * @method string getTrainingModelSource() 获取模型来源 （JOB/COS）
 * @method void setTrainingModelSource(string $TrainingModelSource) 设置模型来源 （JOB/COS）
 * @method string getTrainingPreference() 获取模型偏好
 * @method void setTrainingPreference(string $TrainingPreference) 设置模型偏好
 * @method string getAutoMLTaskId() 获取自动学习任务ID（已废弃）
 * @method void setAutoMLTaskId(string $AutoMLTaskId) 设置自动学习任务ID（已废弃）
 * @method string getTrainingJobVersion() 获取任务版本
 * @method void setTrainingJobVersion(string $TrainingJobVersion) 设置任务版本
 * @method string getModelVersionType() 获取模型版本类型；
枚举值：NORMAL(通用)  ACCELERATE(加速)
注意:  默认为NORMAL
 * @method void setModelVersionType(string $ModelVersionType) 设置模型版本类型；
枚举值：NORMAL(通用)  ACCELERATE(加速)
注意:  默认为NORMAL
 * @method string getModelFormat() 获取模型格式 （PYTORCH/TORCH_SCRIPT/DETECTRON2/SAVED_MODEL/FROZEN_GRAPH/PMML/MMDETECTION/ONNX/HUGGING_FACE）
 * @method void setModelFormat(string $ModelFormat) 设置模型格式 （PYTORCH/TORCH_SCRIPT/DETECTRON2/SAVED_MODEL/FROZEN_GRAPH/PMML/MMDETECTION/ONNX/HUGGING_FACE）
 * @method string getReasoningEnvironmentId() 获取推理镜像ID
 * @method void setReasoningEnvironmentId(string $ReasoningEnvironmentId) 设置推理镜像ID
 * @method string getAutoClean() 获取模型自动清理开关(true/false)，当前版本仅支持SAVED_MODEL格式模型
 * @method void setAutoClean(string $AutoClean) 设置模型自动清理开关(true/false)，当前版本仅支持SAVED_MODEL格式模型
 * @method integer getMaxReservedModels() 获取模型数量保留上限(默认值为24个，上限为24，下限为1，步长为1)
 * @method void setMaxReservedModels(integer $MaxReservedModels) 设置模型数量保留上限(默认值为24个，上限为24，下限为1，步长为1)
 * @method integer getModelCleanPeriod() 获取模型清理周期(默认值为1分钟，上限为1440，下限为1分钟，步长为1)
 * @method void setModelCleanPeriod(integer $ModelCleanPeriod) 设置模型清理周期(默认值为1分钟，上限为1440，下限为1分钟，步长为1)
 * @method boolean getIsQAT() 获取是否QAT模型
 * @method void setIsQAT(boolean $IsQAT) 设置是否QAT模型
 */
class CreateTrainingModelRequest extends AbstractModel
{
    /**
     * @var string 导入方式
MODEL：导入新模型
VERSION：导入新版本
EXIST：导入现有版本
     */
    public $ImportMethod;

    /**
     * @var CosPathInfo 模型来源cos目录，以/结尾
     */
    public $TrainingModelCosPath;

    /**
     * @var string 推理环境来源（SYSTEM/CUSTOM）
     */
    public $ReasoningEnvironmentSource;

    /**
     * @var string 模型名称，不超过60个字符，仅支持中英文、数字、下划线"_"、短横"-"，只能以中英文、数字开头
     */
    public $TrainingModelName;

    /**
     * @var array 标签配置
     */
    public $Tags;

    /**
     * @var string 训练任务名称
     */
    public $TrainingJobName;

    /**
     * @var string 算法框架 （PYTORCH/TENSORFLOW/DETECTRON2/PMML/MMDETECTION)
     */
    public $AlgorithmFramework;

    /**
     * @var string 推理环境
     */
    public $ReasoningEnvironment;

    /**
     * @var string 训练指标，最多支持1000字符
     */
    public $TrainingModelIndex;

    /**
     * @var string 模型版本
     */
    public $TrainingModelVersion;

    /**
     * @var ImageInfo 自定义推理环境
     */
    public $ReasoningImageInfo;

    /**
     * @var string 模型移动方式（CUT/COPY）
     */
    public $ModelMoveMode;

    /**
     * @var string 训练任务ID
     */
    public $TrainingJobId;

    /**
     * @var string 模型ID（导入新模型不需要，导入新版本需要）
     */
    public $TrainingModelId;

    /**
     * @var CosPathInfo 模型存储cos目录
     */
    public $ModelOutputPath;

    /**
     * @var string 模型来源 （JOB/COS）
     */
    public $TrainingModelSource;

    /**
     * @var string 模型偏好
     */
    public $TrainingPreference;

    /**
     * @var string 自动学习任务ID（已废弃）
     */
    public $AutoMLTaskId;

    /**
     * @var string 任务版本
     */
    public $TrainingJobVersion;

    /**
     * @var string 模型版本类型；
枚举值：NORMAL(通用)  ACCELERATE(加速)
注意:  默认为NORMAL
     */
    public $ModelVersionType;

    /**
     * @var string 模型格式 （PYTORCH/TORCH_SCRIPT/DETECTRON2/SAVED_MODEL/FROZEN_GRAPH/PMML/MMDETECTION/ONNX/HUGGING_FACE）
     */
    public $ModelFormat;

    /**
     * @var string 推理镜像ID
     */
    public $ReasoningEnvironmentId;

    /**
     * @var string 模型自动清理开关(true/false)，当前版本仅支持SAVED_MODEL格式模型
     */
    public $AutoClean;

    /**
     * @var integer 模型数量保留上限(默认值为24个，上限为24，下限为1，步长为1)
     */
    public $MaxReservedModels;

    /**
     * @var integer 模型清理周期(默认值为1分钟，上限为1440，下限为1分钟，步长为1)
     */
    public $ModelCleanPeriod;

    /**
     * @var boolean 是否QAT模型
     */
    public $IsQAT;

    /**
     * @param string $ImportMethod 导入方式
MODEL：导入新模型
VERSION：导入新版本
EXIST：导入现有版本
     * @param CosPathInfo $TrainingModelCosPath 模型来源cos目录，以/结尾
     * @param string $ReasoningEnvironmentSource 推理环境来源（SYSTEM/CUSTOM）
     * @param string $TrainingModelName 模型名称，不超过60个字符，仅支持中英文、数字、下划线"_"、短横"-"，只能以中英文、数字开头
     * @param array $Tags 标签配置
     * @param string $TrainingJobName 训练任务名称
     * @param string $AlgorithmFramework 算法框架 （PYTORCH/TENSORFLOW/DETECTRON2/PMML/MMDETECTION)
     * @param string $ReasoningEnvironment 推理环境
     * @param string $TrainingModelIndex 训练指标，最多支持1000字符
     * @param string $TrainingModelVersion 模型版本
     * @param ImageInfo $ReasoningImageInfo 自定义推理环境
     * @param string $ModelMoveMode 模型移动方式（CUT/COPY）
     * @param string $TrainingJobId 训练任务ID
     * @param string $TrainingModelId 模型ID（导入新模型不需要，导入新版本需要）
     * @param CosPathInfo $ModelOutputPath 模型存储cos目录
     * @param string $TrainingModelSource 模型来源 （JOB/COS）
     * @param string $TrainingPreference 模型偏好
     * @param string $AutoMLTaskId 自动学习任务ID（已废弃）
     * @param string $TrainingJobVersion 任务版本
     * @param string $ModelVersionType 模型版本类型；
枚举值：NORMAL(通用)  ACCELERATE(加速)
注意:  默认为NORMAL
     * @param string $ModelFormat 模型格式 （PYTORCH/TORCH_SCRIPT/DETECTRON2/SAVED_MODEL/FROZEN_GRAPH/PMML/MMDETECTION/ONNX/HUGGING_FACE）
     * @param string $ReasoningEnvironmentId 推理镜像ID
     * @param string $AutoClean 模型自动清理开关(true/false)，当前版本仅支持SAVED_MODEL格式模型
     * @param integer $MaxReservedModels 模型数量保留上限(默认值为24个，上限为24，下限为1，步长为1)
     * @param integer $ModelCleanPeriod 模型清理周期(默认值为1分钟，上限为1440，下限为1分钟，步长为1)
     * @param boolean $IsQAT 是否QAT模型
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
        if (array_key_exists("ImportMethod",$param) and $param["ImportMethod"] !== null) {
            $this->ImportMethod = $param["ImportMethod"];
        }

        if (array_key_exists("TrainingModelCosPath",$param) and $param["TrainingModelCosPath"] !== null) {
            $this->TrainingModelCosPath = new CosPathInfo();
            $this->TrainingModelCosPath->deserialize($param["TrainingModelCosPath"]);
        }

        if (array_key_exists("ReasoningEnvironmentSource",$param) and $param["ReasoningEnvironmentSource"] !== null) {
            $this->ReasoningEnvironmentSource = $param["ReasoningEnvironmentSource"];
        }

        if (array_key_exists("TrainingModelName",$param) and $param["TrainingModelName"] !== null) {
            $this->TrainingModelName = $param["TrainingModelName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("TrainingJobName",$param) and $param["TrainingJobName"] !== null) {
            $this->TrainingJobName = $param["TrainingJobName"];
        }

        if (array_key_exists("AlgorithmFramework",$param) and $param["AlgorithmFramework"] !== null) {
            $this->AlgorithmFramework = $param["AlgorithmFramework"];
        }

        if (array_key_exists("ReasoningEnvironment",$param) and $param["ReasoningEnvironment"] !== null) {
            $this->ReasoningEnvironment = $param["ReasoningEnvironment"];
        }

        if (array_key_exists("TrainingModelIndex",$param) and $param["TrainingModelIndex"] !== null) {
            $this->TrainingModelIndex = $param["TrainingModelIndex"];
        }

        if (array_key_exists("TrainingModelVersion",$param) and $param["TrainingModelVersion"] !== null) {
            $this->TrainingModelVersion = $param["TrainingModelVersion"];
        }

        if (array_key_exists("ReasoningImageInfo",$param) and $param["ReasoningImageInfo"] !== null) {
            $this->ReasoningImageInfo = new ImageInfo();
            $this->ReasoningImageInfo->deserialize($param["ReasoningImageInfo"]);
        }

        if (array_key_exists("ModelMoveMode",$param) and $param["ModelMoveMode"] !== null) {
            $this->ModelMoveMode = $param["ModelMoveMode"];
        }

        if (array_key_exists("TrainingJobId",$param) and $param["TrainingJobId"] !== null) {
            $this->TrainingJobId = $param["TrainingJobId"];
        }

        if (array_key_exists("TrainingModelId",$param) and $param["TrainingModelId"] !== null) {
            $this->TrainingModelId = $param["TrainingModelId"];
        }

        if (array_key_exists("ModelOutputPath",$param) and $param["ModelOutputPath"] !== null) {
            $this->ModelOutputPath = new CosPathInfo();
            $this->ModelOutputPath->deserialize($param["ModelOutputPath"]);
        }

        if (array_key_exists("TrainingModelSource",$param) and $param["TrainingModelSource"] !== null) {
            $this->TrainingModelSource = $param["TrainingModelSource"];
        }

        if (array_key_exists("TrainingPreference",$param) and $param["TrainingPreference"] !== null) {
            $this->TrainingPreference = $param["TrainingPreference"];
        }

        if (array_key_exists("AutoMLTaskId",$param) and $param["AutoMLTaskId"] !== null) {
            $this->AutoMLTaskId = $param["AutoMLTaskId"];
        }

        if (array_key_exists("TrainingJobVersion",$param) and $param["TrainingJobVersion"] !== null) {
            $this->TrainingJobVersion = $param["TrainingJobVersion"];
        }

        if (array_key_exists("ModelVersionType",$param) and $param["ModelVersionType"] !== null) {
            $this->ModelVersionType = $param["ModelVersionType"];
        }

        if (array_key_exists("ModelFormat",$param) and $param["ModelFormat"] !== null) {
            $this->ModelFormat = $param["ModelFormat"];
        }

        if (array_key_exists("ReasoningEnvironmentId",$param) and $param["ReasoningEnvironmentId"] !== null) {
            $this->ReasoningEnvironmentId = $param["ReasoningEnvironmentId"];
        }

        if (array_key_exists("AutoClean",$param) and $param["AutoClean"] !== null) {
            $this->AutoClean = $param["AutoClean"];
        }

        if (array_key_exists("MaxReservedModels",$param) and $param["MaxReservedModels"] !== null) {
            $this->MaxReservedModels = $param["MaxReservedModels"];
        }

        if (array_key_exists("ModelCleanPeriod",$param) and $param["ModelCleanPeriod"] !== null) {
            $this->ModelCleanPeriod = $param["ModelCleanPeriod"];
        }

        if (array_key_exists("IsQAT",$param) and $param["IsQAT"] !== null) {
            $this->IsQAT = $param["IsQAT"];
        }
    }
}
