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
 * 模型加速任务
 *
 * @method string getModelAccTaskId() 获取模型加速任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelAccTaskId(string $ModelAccTaskId) 设置模型加速任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelAccTaskName() 获取模型加速任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelAccTaskName(string $ModelAccTaskName) 设置模型加速任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelId() 获取模型ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelId(string $ModelId) 设置模型ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelName() 获取模型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelName(string $ModelName) 设置模型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelVersion() 获取模型版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelVersion(string $ModelVersion) 设置模型版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelSource() 获取模型来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelSource(string $ModelSource) 设置模型来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOptimizationLevel() 获取优化级别
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOptimizationLevel(string $OptimizationLevel) 设置优化级别
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskStatus() 获取任务状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskStatus(string $TaskStatus) 设置任务状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getModelInputNum() 获取input节点个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelInputNum(integer $ModelInputNum) 设置input节点个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getModelInputInfos() 获取input节点信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelInputInfos(array $ModelInputInfos) 设置input节点信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGPUType() 获取GPU型号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGPUType(string $GPUType) 设置GPU型号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChargeType() 获取计费模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChargeType(string $ChargeType) 设置计费模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSpeedup() 获取加速比
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpeedup(string $Speedup) 设置加速比
注意：此字段可能返回 null，表示取不到有效值。
 * @method CosPathInfo getModelInputPath() 获取模型输入cos路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelInputPath(CosPathInfo $ModelInputPath) 设置模型输入cos路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method CosPathInfo getModelOutputPath() 获取模型输出cos路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelOutputPath(CosPathInfo $ModelOutputPath) 设置模型输出cos路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorMsg() 获取错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorMsg(string $ErrorMsg) 设置错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlgorithmFramework() 获取算法框架
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlgorithmFramework(string $AlgorithmFramework) 设置算法框架
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWaitNumber() 获取排队个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWaitNumber(integer $WaitNumber) 设置排队个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskProgress() 获取任务进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskProgress(integer $TaskProgress) 设置任务进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelFormat() 获取模型格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelFormat(string $ModelFormat) 设置模型格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTensorInfos() 获取模型Tensor信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTensorInfos(array $TensorInfos) 设置模型Tensor信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method HyperParameter getHyperParameter() 获取模型专业参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHyperParameter(HyperParameter $HyperParameter) 设置模型专业参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccEngineVersion() 获取加速引擎版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccEngineVersion(string $AccEngineVersion) 设置加速引擎版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsSaved() 获取优化模型是否已保存到模型仓库
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsSaved(boolean $IsSaved) 设置优化模型是否已保存到模型仓库
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelSignature() 获取SAVED_MODEL保存时配置的签名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelSignature(string $ModelSignature) 设置SAVED_MODEL保存时配置的签名
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getQATModel() 获取是否是QAT模型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQATModel(boolean $QATModel) 设置是否是QAT模型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFrameworkVersion() 获取加速引擎对应的框架版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrameworkVersion(string $FrameworkVersion) 设置加速引擎对应的框架版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelVersionId() 获取模型版本ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelVersionId(string $ModelVersionId) 设置模型版本ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroupId() 获取资源组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupId(string $ResourceGroupId) 设置资源组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroupName() 获取资源组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupName(string $ResourceGroupName) 设置资源组名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class ModelAccelerateTask extends AbstractModel
{
    /**
     * @var string 模型加速任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelAccTaskId;

    /**
     * @var string 模型加速任务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelAccTaskName;

    /**
     * @var string 模型ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelId;

    /**
     * @var string 模型名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelName;

    /**
     * @var string 模型版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelVersion;

    /**
     * @var string 模型来源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelSource;

    /**
     * @var string 优化级别
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OptimizationLevel;

    /**
     * @var string 任务状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskStatus;

    /**
     * @var integer input节点个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelInputNum;

    /**
     * @var array input节点信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelInputInfos;

    /**
     * @var string GPU型号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GPUType;

    /**
     * @var string 计费模式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChargeType;

    /**
     * @var string 加速比
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Speedup;

    /**
     * @var CosPathInfo 模型输入cos路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelInputPath;

    /**
     * @var CosPathInfo 模型输出cos路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelOutputPath;

    /**
     * @var string 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorMsg;

    /**
     * @var string 算法框架
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlgorithmFramework;

    /**
     * @var integer 排队个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WaitNumber;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer 任务进度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskProgress;

    /**
     * @var string 模型格式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelFormat;

    /**
     * @var array 模型Tensor信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TensorInfos;

    /**
     * @var HyperParameter 模型专业参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HyperParameter;

    /**
     * @var string 加速引擎版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccEngineVersion;

    /**
     * @var array 标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var boolean 优化模型是否已保存到模型仓库
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsSaved;

    /**
     * @var string SAVED_MODEL保存时配置的签名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelSignature;

    /**
     * @var boolean 是否是QAT模型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QATModel;

    /**
     * @var string 加速引擎对应的框架版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FrameworkVersion;

    /**
     * @var string 模型版本ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelVersionId;

    /**
     * @var string 资源组id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupId;

    /**
     * @var string 资源组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupName;

    /**
     * @param string $ModelAccTaskId 模型加速任务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelAccTaskName 模型加速任务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelId 模型ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelName 模型名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelVersion 模型版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelSource 模型来源
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OptimizationLevel 优化级别
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskStatus 任务状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ModelInputNum input节点个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ModelInputInfos input节点信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GPUType GPU型号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChargeType 计费模式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Speedup 加速比
注意：此字段可能返回 null，表示取不到有效值。
     * @param CosPathInfo $ModelInputPath 模型输入cos路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param CosPathInfo $ModelOutputPath 模型输出cos路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorMsg 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlgorithmFramework 算法框架
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WaitNumber 排队个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskProgress 任务进度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelFormat 模型格式
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TensorInfos 模型Tensor信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param HyperParameter $HyperParameter 模型专业参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccEngineVersion 加速引擎版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsSaved 优化模型是否已保存到模型仓库
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelSignature SAVED_MODEL保存时配置的签名
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $QATModel 是否是QAT模型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FrameworkVersion 加速引擎对应的框架版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelVersionId 模型版本ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroupId 资源组id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroupName 资源组名称
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
        if (array_key_exists("ModelAccTaskId",$param) and $param["ModelAccTaskId"] !== null) {
            $this->ModelAccTaskId = $param["ModelAccTaskId"];
        }

        if (array_key_exists("ModelAccTaskName",$param) and $param["ModelAccTaskName"] !== null) {
            $this->ModelAccTaskName = $param["ModelAccTaskName"];
        }

        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("ModelVersion",$param) and $param["ModelVersion"] !== null) {
            $this->ModelVersion = $param["ModelVersion"];
        }

        if (array_key_exists("ModelSource",$param) and $param["ModelSource"] !== null) {
            $this->ModelSource = $param["ModelSource"];
        }

        if (array_key_exists("OptimizationLevel",$param) and $param["OptimizationLevel"] !== null) {
            $this->OptimizationLevel = $param["OptimizationLevel"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("ModelInputNum",$param) and $param["ModelInputNum"] !== null) {
            $this->ModelInputNum = $param["ModelInputNum"];
        }

        if (array_key_exists("ModelInputInfos",$param) and $param["ModelInputInfos"] !== null) {
            $this->ModelInputInfos = [];
            foreach ($param["ModelInputInfos"] as $key => $value){
                $obj = new ModelInputInfo();
                $obj->deserialize($value);
                array_push($this->ModelInputInfos, $obj);
            }
        }

        if (array_key_exists("GPUType",$param) and $param["GPUType"] !== null) {
            $this->GPUType = $param["GPUType"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("Speedup",$param) and $param["Speedup"] !== null) {
            $this->Speedup = $param["Speedup"];
        }

        if (array_key_exists("ModelInputPath",$param) and $param["ModelInputPath"] !== null) {
            $this->ModelInputPath = new CosPathInfo();
            $this->ModelInputPath->deserialize($param["ModelInputPath"]);
        }

        if (array_key_exists("ModelOutputPath",$param) and $param["ModelOutputPath"] !== null) {
            $this->ModelOutputPath = new CosPathInfo();
            $this->ModelOutputPath->deserialize($param["ModelOutputPath"]);
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }

        if (array_key_exists("AlgorithmFramework",$param) and $param["AlgorithmFramework"] !== null) {
            $this->AlgorithmFramework = $param["AlgorithmFramework"];
        }

        if (array_key_exists("WaitNumber",$param) and $param["WaitNumber"] !== null) {
            $this->WaitNumber = $param["WaitNumber"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("TaskProgress",$param) and $param["TaskProgress"] !== null) {
            $this->TaskProgress = $param["TaskProgress"];
        }

        if (array_key_exists("ModelFormat",$param) and $param["ModelFormat"] !== null) {
            $this->ModelFormat = $param["ModelFormat"];
        }

        if (array_key_exists("TensorInfos",$param) and $param["TensorInfos"] !== null) {
            $this->TensorInfos = $param["TensorInfos"];
        }

        if (array_key_exists("HyperParameter",$param) and $param["HyperParameter"] !== null) {
            $this->HyperParameter = new HyperParameter();
            $this->HyperParameter->deserialize($param["HyperParameter"]);
        }

        if (array_key_exists("AccEngineVersion",$param) and $param["AccEngineVersion"] !== null) {
            $this->AccEngineVersion = $param["AccEngineVersion"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("IsSaved",$param) and $param["IsSaved"] !== null) {
            $this->IsSaved = $param["IsSaved"];
        }

        if (array_key_exists("ModelSignature",$param) and $param["ModelSignature"] !== null) {
            $this->ModelSignature = $param["ModelSignature"];
        }

        if (array_key_exists("QATModel",$param) and $param["QATModel"] !== null) {
            $this->QATModel = $param["QATModel"];
        }

        if (array_key_exists("FrameworkVersion",$param) and $param["FrameworkVersion"] !== null) {
            $this->FrameworkVersion = $param["FrameworkVersion"];
        }

        if (array_key_exists("ModelVersionId",$param) and $param["ModelVersionId"] !== null) {
            $this->ModelVersionId = $param["ModelVersionId"];
        }

        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
        }

        if (array_key_exists("ResourceGroupName",$param) and $param["ResourceGroupName"] !== null) {
            $this->ResourceGroupName = $param["ResourceGroupName"];
        }
    }
}
