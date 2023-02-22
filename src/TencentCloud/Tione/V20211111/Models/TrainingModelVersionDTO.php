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
 * 模型版本列表
 *
 * @method string getTrainingModelId() 获取模型id
 * @method void setTrainingModelId(string $TrainingModelId) 设置模型id
 * @method string getTrainingModelVersionId() 获取模型版本id
 * @method void setTrainingModelVersionId(string $TrainingModelVersionId) 设置模型版本id
 * @method string getTrainingModelVersion() 获取模型版本
 * @method void setTrainingModelVersion(string $TrainingModelVersion) 设置模型版本
 * @method string getTrainingModelSource() 获取模型来源
 * @method void setTrainingModelSource(string $TrainingModelSource) 设置模型来源
 * @method string getTrainingModelCreateTime() 获取创建时间
 * @method void setTrainingModelCreateTime(string $TrainingModelCreateTime) 设置创建时间
 * @method string getTrainingModelCreator() 获取创建人uin
 * @method void setTrainingModelCreator(string $TrainingModelCreator) 设置创建人uin
 * @method string getAlgorithmFramework() 获取算法框架
 * @method void setAlgorithmFramework(string $AlgorithmFramework) 设置算法框架
 * @method string getReasoningEnvironment() 获取推理环境
 * @method void setReasoningEnvironment(string $ReasoningEnvironment) 设置推理环境
 * @method string getReasoningEnvironmentSource() 获取推理环境来源
 * @method void setReasoningEnvironmentSource(string $ReasoningEnvironmentSource) 设置推理环境来源
 * @method string getTrainingModelIndex() 获取模型指标
 * @method void setTrainingModelIndex(string $TrainingModelIndex) 设置模型指标
 * @method string getTrainingJobName() 获取训练任务名称
 * @method void setTrainingJobName(string $TrainingJobName) 设置训练任务名称
 * @method CosPathInfo getTrainingModelCosPath() 获取模型cos路径
 * @method void setTrainingModelCosPath(CosPathInfo $TrainingModelCosPath) 设置模型cos路径
 * @method string getTrainingModelName() 获取模型名称
 * @method void setTrainingModelName(string $TrainingModelName) 设置模型名称
 * @method string getTrainingJobId() 获取训练任务id
 * @method void setTrainingJobId(string $TrainingJobId) 设置训练任务id
 * @method ImageInfo getReasoningImageInfo() 获取自定义推理环境
 * @method void setReasoningImageInfo(ImageInfo $ReasoningImageInfo) 设置自定义推理环境
 * @method string getCreateTime() 获取模型版本创建时间
 * @method void setCreateTime(string $CreateTime) 设置模型版本创建时间
 * @method string getTrainingModelStatus() 获取模型处理状态
STATUS_SUCCESS：导入成功，STATUS_FAILED：导入失败 ，STATUS_RUNNING：导入中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrainingModelStatus(string $TrainingModelStatus) 设置模型处理状态
STATUS_SUCCESS：导入成功，STATUS_FAILED：导入失败 ，STATUS_RUNNING：导入中
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTrainingModelProgress() 获取模型处理进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrainingModelProgress(integer $TrainingModelProgress) 设置模型处理进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTrainingModelErrorMsg() 获取模型错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrainingModelErrorMsg(string $TrainingModelErrorMsg) 设置模型错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTrainingModelFormat() 获取模型格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrainingModelFormat(string $TrainingModelFormat) 设置模型格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersionType() 获取模型版本类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionType(string $VersionType) 设置模型版本类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGPUType() 获取GPU类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGPUType(string $GPUType) 设置GPU类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAutoClean() 获取模型自动清理开关
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoClean(string $AutoClean) 设置模型自动清理开关
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getModelCleanPeriod() 获取模型清理周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelCleanPeriod(integer $ModelCleanPeriod) 设置模型清理周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxReservedModels() 获取模型数量保留上限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxReservedModels(integer $MaxReservedModels) 设置模型数量保留上限
注意：此字段可能返回 null，表示取不到有效值。
 * @method CosPathInfo getModelHotUpdatePath() 获取模型热更新目录
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelHotUpdatePath(CosPathInfo $ModelHotUpdatePath) 设置模型热更新目录
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReasoningEnvironmentId() 获取推理环境id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReasoningEnvironmentId(string $ReasoningEnvironmentId) 设置推理环境id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTrainingJobVersion() 获取训练任务版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrainingJobVersion(string $TrainingJobVersion) 设置训练任务版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTrainingPreference() 获取训练偏好
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrainingPreference(string $TrainingPreference) 设置训练偏好
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAutoMLTaskId() 获取自动学习任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoMLTaskId(string $AutoMLTaskId) 设置自动学习任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsQAT() 获取是否QAT模型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsQAT(boolean $IsQAT) 设置是否QAT模型
注意：此字段可能返回 null，表示取不到有效值。
 */
class TrainingModelVersionDTO extends AbstractModel
{
    /**
     * @var string 模型id
     */
    public $TrainingModelId;

    /**
     * @var string 模型版本id
     */
    public $TrainingModelVersionId;

    /**
     * @var string 模型版本
     */
    public $TrainingModelVersion;

    /**
     * @var string 模型来源
     */
    public $TrainingModelSource;

    /**
     * @var string 创建时间
     */
    public $TrainingModelCreateTime;

    /**
     * @var string 创建人uin
     */
    public $TrainingModelCreator;

    /**
     * @var string 算法框架
     */
    public $AlgorithmFramework;

    /**
     * @var string 推理环境
     */
    public $ReasoningEnvironment;

    /**
     * @var string 推理环境来源
     */
    public $ReasoningEnvironmentSource;

    /**
     * @var string 模型指标
     */
    public $TrainingModelIndex;

    /**
     * @var string 训练任务名称
     */
    public $TrainingJobName;

    /**
     * @var CosPathInfo 模型cos路径
     */
    public $TrainingModelCosPath;

    /**
     * @var string 模型名称
     */
    public $TrainingModelName;

    /**
     * @var string 训练任务id
     */
    public $TrainingJobId;

    /**
     * @var ImageInfo 自定义推理环境
     */
    public $ReasoningImageInfo;

    /**
     * @var string 模型版本创建时间
     */
    public $CreateTime;

    /**
     * @var string 模型处理状态
STATUS_SUCCESS：导入成功，STATUS_FAILED：导入失败 ，STATUS_RUNNING：导入中
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrainingModelStatus;

    /**
     * @var integer 模型处理进度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrainingModelProgress;

    /**
     * @var string 模型错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrainingModelErrorMsg;

    /**
     * @var string 模型格式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrainingModelFormat;

    /**
     * @var string 模型版本类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionType;

    /**
     * @var string GPU类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GPUType;

    /**
     * @var string 模型自动清理开关
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoClean;

    /**
     * @var integer 模型清理周期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelCleanPeriod;

    /**
     * @var integer 模型数量保留上限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxReservedModels;

    /**
     * @var CosPathInfo 模型热更新目录
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelHotUpdatePath;

    /**
     * @var string 推理环境id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReasoningEnvironmentId;

    /**
     * @var string 训练任务版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrainingJobVersion;

    /**
     * @var string 训练偏好
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrainingPreference;

    /**
     * @var string 自动学习任务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoMLTaskId;

    /**
     * @var boolean 是否QAT模型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsQAT;

    /**
     * @param string $TrainingModelId 模型id
     * @param string $TrainingModelVersionId 模型版本id
     * @param string $TrainingModelVersion 模型版本
     * @param string $TrainingModelSource 模型来源
     * @param string $TrainingModelCreateTime 创建时间
     * @param string $TrainingModelCreator 创建人uin
     * @param string $AlgorithmFramework 算法框架
     * @param string $ReasoningEnvironment 推理环境
     * @param string $ReasoningEnvironmentSource 推理环境来源
     * @param string $TrainingModelIndex 模型指标
     * @param string $TrainingJobName 训练任务名称
     * @param CosPathInfo $TrainingModelCosPath 模型cos路径
     * @param string $TrainingModelName 模型名称
     * @param string $TrainingJobId 训练任务id
     * @param ImageInfo $ReasoningImageInfo 自定义推理环境
     * @param string $CreateTime 模型版本创建时间
     * @param string $TrainingModelStatus 模型处理状态
STATUS_SUCCESS：导入成功，STATUS_FAILED：导入失败 ，STATUS_RUNNING：导入中
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TrainingModelProgress 模型处理进度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TrainingModelErrorMsg 模型错误信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TrainingModelFormat 模型格式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VersionType 模型版本类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GPUType GPU类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AutoClean 模型自动清理开关
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ModelCleanPeriod 模型清理周期
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxReservedModels 模型数量保留上限
注意：此字段可能返回 null，表示取不到有效值。
     * @param CosPathInfo $ModelHotUpdatePath 模型热更新目录
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReasoningEnvironmentId 推理环境id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TrainingJobVersion 训练任务版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TrainingPreference 训练偏好
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AutoMLTaskId 自动学习任务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsQAT 是否QAT模型
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
        if (array_key_exists("TrainingModelId",$param) and $param["TrainingModelId"] !== null) {
            $this->TrainingModelId = $param["TrainingModelId"];
        }

        if (array_key_exists("TrainingModelVersionId",$param) and $param["TrainingModelVersionId"] !== null) {
            $this->TrainingModelVersionId = $param["TrainingModelVersionId"];
        }

        if (array_key_exists("TrainingModelVersion",$param) and $param["TrainingModelVersion"] !== null) {
            $this->TrainingModelVersion = $param["TrainingModelVersion"];
        }

        if (array_key_exists("TrainingModelSource",$param) and $param["TrainingModelSource"] !== null) {
            $this->TrainingModelSource = $param["TrainingModelSource"];
        }

        if (array_key_exists("TrainingModelCreateTime",$param) and $param["TrainingModelCreateTime"] !== null) {
            $this->TrainingModelCreateTime = $param["TrainingModelCreateTime"];
        }

        if (array_key_exists("TrainingModelCreator",$param) and $param["TrainingModelCreator"] !== null) {
            $this->TrainingModelCreator = $param["TrainingModelCreator"];
        }

        if (array_key_exists("AlgorithmFramework",$param) and $param["AlgorithmFramework"] !== null) {
            $this->AlgorithmFramework = $param["AlgorithmFramework"];
        }

        if (array_key_exists("ReasoningEnvironment",$param) and $param["ReasoningEnvironment"] !== null) {
            $this->ReasoningEnvironment = $param["ReasoningEnvironment"];
        }

        if (array_key_exists("ReasoningEnvironmentSource",$param) and $param["ReasoningEnvironmentSource"] !== null) {
            $this->ReasoningEnvironmentSource = $param["ReasoningEnvironmentSource"];
        }

        if (array_key_exists("TrainingModelIndex",$param) and $param["TrainingModelIndex"] !== null) {
            $this->TrainingModelIndex = $param["TrainingModelIndex"];
        }

        if (array_key_exists("TrainingJobName",$param) and $param["TrainingJobName"] !== null) {
            $this->TrainingJobName = $param["TrainingJobName"];
        }

        if (array_key_exists("TrainingModelCosPath",$param) and $param["TrainingModelCosPath"] !== null) {
            $this->TrainingModelCosPath = new CosPathInfo();
            $this->TrainingModelCosPath->deserialize($param["TrainingModelCosPath"]);
        }

        if (array_key_exists("TrainingModelName",$param) and $param["TrainingModelName"] !== null) {
            $this->TrainingModelName = $param["TrainingModelName"];
        }

        if (array_key_exists("TrainingJobId",$param) and $param["TrainingJobId"] !== null) {
            $this->TrainingJobId = $param["TrainingJobId"];
        }

        if (array_key_exists("ReasoningImageInfo",$param) and $param["ReasoningImageInfo"] !== null) {
            $this->ReasoningImageInfo = new ImageInfo();
            $this->ReasoningImageInfo->deserialize($param["ReasoningImageInfo"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("TrainingModelStatus",$param) and $param["TrainingModelStatus"] !== null) {
            $this->TrainingModelStatus = $param["TrainingModelStatus"];
        }

        if (array_key_exists("TrainingModelProgress",$param) and $param["TrainingModelProgress"] !== null) {
            $this->TrainingModelProgress = $param["TrainingModelProgress"];
        }

        if (array_key_exists("TrainingModelErrorMsg",$param) and $param["TrainingModelErrorMsg"] !== null) {
            $this->TrainingModelErrorMsg = $param["TrainingModelErrorMsg"];
        }

        if (array_key_exists("TrainingModelFormat",$param) and $param["TrainingModelFormat"] !== null) {
            $this->TrainingModelFormat = $param["TrainingModelFormat"];
        }

        if (array_key_exists("VersionType",$param) and $param["VersionType"] !== null) {
            $this->VersionType = $param["VersionType"];
        }

        if (array_key_exists("GPUType",$param) and $param["GPUType"] !== null) {
            $this->GPUType = $param["GPUType"];
        }

        if (array_key_exists("AutoClean",$param) and $param["AutoClean"] !== null) {
            $this->AutoClean = $param["AutoClean"];
        }

        if (array_key_exists("ModelCleanPeriod",$param) and $param["ModelCleanPeriod"] !== null) {
            $this->ModelCleanPeriod = $param["ModelCleanPeriod"];
        }

        if (array_key_exists("MaxReservedModels",$param) and $param["MaxReservedModels"] !== null) {
            $this->MaxReservedModels = $param["MaxReservedModels"];
        }

        if (array_key_exists("ModelHotUpdatePath",$param) and $param["ModelHotUpdatePath"] !== null) {
            $this->ModelHotUpdatePath = new CosPathInfo();
            $this->ModelHotUpdatePath->deserialize($param["ModelHotUpdatePath"]);
        }

        if (array_key_exists("ReasoningEnvironmentId",$param) and $param["ReasoningEnvironmentId"] !== null) {
            $this->ReasoningEnvironmentId = $param["ReasoningEnvironmentId"];
        }

        if (array_key_exists("TrainingJobVersion",$param) and $param["TrainingJobVersion"] !== null) {
            $this->TrainingJobVersion = $param["TrainingJobVersion"];
        }

        if (array_key_exists("TrainingPreference",$param) and $param["TrainingPreference"] !== null) {
            $this->TrainingPreference = $param["TrainingPreference"];
        }

        if (array_key_exists("AutoMLTaskId",$param) and $param["AutoMLTaskId"] !== null) {
            $this->AutoMLTaskId = $param["AutoMLTaskId"];
        }

        if (array_key_exists("IsQAT",$param) and $param["IsQAT"] !== null) {
            $this->IsQAT = $param["IsQAT"];
        }
    }
}
