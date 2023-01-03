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
 * RestartModelAccelerateTask请求参数结构体
 *
 * @method string getModelAccTaskId() 获取模型加速任务ID
 * @method void setModelAccTaskId(string $ModelAccTaskId) 设置模型加速任务ID
 * @method string getModelAccTaskName() 获取模型加速任务名称
 * @method void setModelAccTaskName(string $ModelAccTaskName) 设置模型加速任务名称
 * @method string getModelSource() 获取模型来源（JOB/COS）
 * @method void setModelSource(string $ModelSource) 设置模型来源（JOB/COS）
 * @method string getAlgorithmFramework() 获取算法框架（废弃）
 * @method void setAlgorithmFramework(string $AlgorithmFramework) 设置算法框架（废弃）
 * @method string getModelId() 获取模型ID
 * @method void setModelId(string $ModelId) 设置模型ID
 * @method string getModelName() 获取模型名称
 * @method void setModelName(string $ModelName) 设置模型名称
 * @method string getModelVersion() 获取模型版本
 * @method void setModelVersion(string $ModelVersion) 设置模型版本
 * @method CosPathInfo getModelInputPath() 获取模型输入cos路径
 * @method void setModelInputPath(CosPathInfo $ModelInputPath) 设置模型输入cos路径
 * @method string getOptimizationLevel() 获取优化级别（NO_LOSS/FP16/INT8），默认FP16
 * @method void setOptimizationLevel(string $OptimizationLevel) 设置优化级别（NO_LOSS/FP16/INT8），默认FP16
 * @method integer getModelInputNum() 获取input节点个数（废弃）
 * @method void setModelInputNum(integer $ModelInputNum) 设置input节点个数（废弃）
 * @method array getModelInputInfos() 获取input节点信息（废弃）
 * @method void setModelInputInfos(array $ModelInputInfos) 设置input节点信息（废弃）
 * @method CosPathInfo getModelOutputPath() 获取模型输出cos路径
 * @method void setModelOutputPath(CosPathInfo $ModelOutputPath) 设置模型输出cos路径
 * @method string getModelFormat() 获取模型格式（TORCH_SCRIPT/DETECTRON2/SAVED_MODEL/FROZEN_GRAPH/MMDETECTION/ONNX/HUGGING_FACE）
 * @method void setModelFormat(string $ModelFormat) 设置模型格式（TORCH_SCRIPT/DETECTRON2/SAVED_MODEL/FROZEN_GRAPH/MMDETECTION/ONNX/HUGGING_FACE）
 * @method array getTensorInfos() 获取模型Tensor信息
 * @method void setTensorInfos(array $TensorInfos) 设置模型Tensor信息
 * @method string getGPUType() 获取GPU类型（T4/V100/A10），默认T4
 * @method void setGPUType(string $GPUType) 设置GPU类型（T4/V100/A10），默认T4
 * @method HyperParameter getHyperParameter() 获取模型专业参数
 * @method void setHyperParameter(HyperParameter $HyperParameter) 设置模型专业参数
 * @method string getAccEngineVersion() 获取加速引擎版本
 * @method void setAccEngineVersion(string $AccEngineVersion) 设置加速引擎版本
 * @method array getTags() 获取标签
 * @method void setTags(array $Tags) 设置标签
 * @method string getModelSignature() 获取SavedModel保存时配置的签名
 * @method void setModelSignature(string $ModelSignature) 设置SavedModel保存时配置的签名
 */
class RestartModelAccelerateTaskRequest extends AbstractModel
{
    /**
     * @var string 模型加速任务ID
     */
    public $ModelAccTaskId;

    /**
     * @var string 模型加速任务名称
     */
    public $ModelAccTaskName;

    /**
     * @var string 模型来源（JOB/COS）
     */
    public $ModelSource;

    /**
     * @var string 算法框架（废弃）
     */
    public $AlgorithmFramework;

    /**
     * @var string 模型ID
     */
    public $ModelId;

    /**
     * @var string 模型名称
     */
    public $ModelName;

    /**
     * @var string 模型版本
     */
    public $ModelVersion;

    /**
     * @var CosPathInfo 模型输入cos路径
     */
    public $ModelInputPath;

    /**
     * @var string 优化级别（NO_LOSS/FP16/INT8），默认FP16
     */
    public $OptimizationLevel;

    /**
     * @var integer input节点个数（废弃）
     */
    public $ModelInputNum;

    /**
     * @var array input节点信息（废弃）
     */
    public $ModelInputInfos;

    /**
     * @var CosPathInfo 模型输出cos路径
     */
    public $ModelOutputPath;

    /**
     * @var string 模型格式（TORCH_SCRIPT/DETECTRON2/SAVED_MODEL/FROZEN_GRAPH/MMDETECTION/ONNX/HUGGING_FACE）
     */
    public $ModelFormat;

    /**
     * @var array 模型Tensor信息
     */
    public $TensorInfos;

    /**
     * @var string GPU类型（T4/V100/A10），默认T4
     */
    public $GPUType;

    /**
     * @var HyperParameter 模型专业参数
     */
    public $HyperParameter;

    /**
     * @var string 加速引擎版本
     */
    public $AccEngineVersion;

    /**
     * @var array 标签
     */
    public $Tags;

    /**
     * @var string SavedModel保存时配置的签名
     */
    public $ModelSignature;

    /**
     * @param string $ModelAccTaskId 模型加速任务ID
     * @param string $ModelAccTaskName 模型加速任务名称
     * @param string $ModelSource 模型来源（JOB/COS）
     * @param string $AlgorithmFramework 算法框架（废弃）
     * @param string $ModelId 模型ID
     * @param string $ModelName 模型名称
     * @param string $ModelVersion 模型版本
     * @param CosPathInfo $ModelInputPath 模型输入cos路径
     * @param string $OptimizationLevel 优化级别（NO_LOSS/FP16/INT8），默认FP16
     * @param integer $ModelInputNum input节点个数（废弃）
     * @param array $ModelInputInfos input节点信息（废弃）
     * @param CosPathInfo $ModelOutputPath 模型输出cos路径
     * @param string $ModelFormat 模型格式（TORCH_SCRIPT/DETECTRON2/SAVED_MODEL/FROZEN_GRAPH/MMDETECTION/ONNX/HUGGING_FACE）
     * @param array $TensorInfos 模型Tensor信息
     * @param string $GPUType GPU类型（T4/V100/A10），默认T4
     * @param HyperParameter $HyperParameter 模型专业参数
     * @param string $AccEngineVersion 加速引擎版本
     * @param array $Tags 标签
     * @param string $ModelSignature SavedModel保存时配置的签名
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

        if (array_key_exists("ModelSource",$param) and $param["ModelSource"] !== null) {
            $this->ModelSource = $param["ModelSource"];
        }

        if (array_key_exists("AlgorithmFramework",$param) and $param["AlgorithmFramework"] !== null) {
            $this->AlgorithmFramework = $param["AlgorithmFramework"];
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

        if (array_key_exists("ModelInputPath",$param) and $param["ModelInputPath"] !== null) {
            $this->ModelInputPath = new CosPathInfo();
            $this->ModelInputPath->deserialize($param["ModelInputPath"]);
        }

        if (array_key_exists("OptimizationLevel",$param) and $param["OptimizationLevel"] !== null) {
            $this->OptimizationLevel = $param["OptimizationLevel"];
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

        if (array_key_exists("ModelOutputPath",$param) and $param["ModelOutputPath"] !== null) {
            $this->ModelOutputPath = new CosPathInfo();
            $this->ModelOutputPath->deserialize($param["ModelOutputPath"]);
        }

        if (array_key_exists("ModelFormat",$param) and $param["ModelFormat"] !== null) {
            $this->ModelFormat = $param["ModelFormat"];
        }

        if (array_key_exists("TensorInfos",$param) and $param["TensorInfos"] !== null) {
            $this->TensorInfos = $param["TensorInfos"];
        }

        if (array_key_exists("GPUType",$param) and $param["GPUType"] !== null) {
            $this->GPUType = $param["GPUType"];
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

        if (array_key_exists("ModelSignature",$param) and $param["ModelSignature"] !== null) {
            $this->ModelSignature = $param["ModelSignature"];
        }
    }
}
