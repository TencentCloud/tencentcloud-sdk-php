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
 * 批量模型加速任务
 *
 * @method string getModelId() 获取模型ID
 * @method void setModelId(string $ModelId) 设置模型ID
 * @method string getModelVersion() 获取模型版本
 * @method void setModelVersion(string $ModelVersion) 设置模型版本
 * @method string getModelSource() 获取模型来源(JOB/COS)
 * @method void setModelSource(string $ModelSource) 设置模型来源(JOB/COS)
 * @method string getModelFormat() 获取模型格式(TORCH_SCRIPT/DETECTRON2/SAVED_MODEL/FROZEN_GRAPH/MMDETECTION/ONNX/HUGGING_FACE)
 * @method void setModelFormat(string $ModelFormat) 设置模型格式(TORCH_SCRIPT/DETECTRON2/SAVED_MODEL/FROZEN_GRAPH/MMDETECTION/ONNX/HUGGING_FACE)
 * @method array getTensorInfos() 获取模型Tensor信息
 * @method void setTensorInfos(array $TensorInfos) 设置模型Tensor信息
 * @method string getAccEngineVersion() 获取加速引擎版本
 * @method void setAccEngineVersion(string $AccEngineVersion) 设置加速引擎版本
 * @method CosPathInfo getModelInputPath() 获取模型输入cos路径
 * @method void setModelInputPath(CosPathInfo $ModelInputPath) 设置模型输入cos路径
 * @method string getModelName() 获取模型名称
 * @method void setModelName(string $ModelName) 设置模型名称
 * @method string getModelSignature() 获取SavedModel保存时配置的签名
 * @method void setModelSignature(string $ModelSignature) 设置SavedModel保存时配置的签名
 */
class BatchModelAccTask extends AbstractModel
{
    /**
     * @var string 模型ID
     */
    public $ModelId;

    /**
     * @var string 模型版本
     */
    public $ModelVersion;

    /**
     * @var string 模型来源(JOB/COS)
     */
    public $ModelSource;

    /**
     * @var string 模型格式(TORCH_SCRIPT/DETECTRON2/SAVED_MODEL/FROZEN_GRAPH/MMDETECTION/ONNX/HUGGING_FACE)
     */
    public $ModelFormat;

    /**
     * @var array 模型Tensor信息
     */
    public $TensorInfos;

    /**
     * @var string 加速引擎版本
     */
    public $AccEngineVersion;

    /**
     * @var CosPathInfo 模型输入cos路径
     */
    public $ModelInputPath;

    /**
     * @var string 模型名称
     */
    public $ModelName;

    /**
     * @var string SavedModel保存时配置的签名
     */
    public $ModelSignature;

    /**
     * @param string $ModelId 模型ID
     * @param string $ModelVersion 模型版本
     * @param string $ModelSource 模型来源(JOB/COS)
     * @param string $ModelFormat 模型格式(TORCH_SCRIPT/DETECTRON2/SAVED_MODEL/FROZEN_GRAPH/MMDETECTION/ONNX/HUGGING_FACE)
     * @param array $TensorInfos 模型Tensor信息
     * @param string $AccEngineVersion 加速引擎版本
     * @param CosPathInfo $ModelInputPath 模型输入cos路径
     * @param string $ModelName 模型名称
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
        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("ModelVersion",$param) and $param["ModelVersion"] !== null) {
            $this->ModelVersion = $param["ModelVersion"];
        }

        if (array_key_exists("ModelSource",$param) and $param["ModelSource"] !== null) {
            $this->ModelSource = $param["ModelSource"];
        }

        if (array_key_exists("ModelFormat",$param) and $param["ModelFormat"] !== null) {
            $this->ModelFormat = $param["ModelFormat"];
        }

        if (array_key_exists("TensorInfos",$param) and $param["TensorInfos"] !== null) {
            $this->TensorInfos = $param["TensorInfos"];
        }

        if (array_key_exists("AccEngineVersion",$param) and $param["AccEngineVersion"] !== null) {
            $this->AccEngineVersion = $param["AccEngineVersion"];
        }

        if (array_key_exists("ModelInputPath",$param) and $param["ModelInputPath"] !== null) {
            $this->ModelInputPath = new CosPathInfo();
            $this->ModelInputPath->deserialize($param["ModelInputPath"]);
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("ModelSignature",$param) and $param["ModelSignature"] !== null) {
            $this->ModelSignature = $param["ModelSignature"];
        }
    }
}
