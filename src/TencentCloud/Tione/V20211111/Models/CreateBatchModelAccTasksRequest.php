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
 * CreateBatchModelAccTasks请求参数结构体
 *
 * @method string getModelAccTaskName() 获取模型加速任务名称
 * @method void setModelAccTaskName(string $ModelAccTaskName) 设置模型加速任务名称
 * @method array getBatchModelAccTasks() 获取批量模型加速任务
 * @method void setBatchModelAccTasks(array $BatchModelAccTasks) 设置批量模型加速任务
 * @method CosPathInfo getModelOutputPath() 获取模型加速保存路径
 * @method void setModelOutputPath(CosPathInfo $ModelOutputPath) 设置模型加速保存路径
 * @method array getTags() 获取标签
 * @method void setTags(array $Tags) 设置标签
 * @method string getOptimizationLevel() 获取优化级别(NO_LOSS/FP16/INT8)，默认FP16
 * @method void setOptimizationLevel(string $OptimizationLevel) 设置优化级别(NO_LOSS/FP16/INT8)，默认FP16
 * @method string getGPUType() 获取GPU卡类型(T4/V100/A10)，默认T4
 * @method void setGPUType(string $GPUType) 设置GPU卡类型(T4/V100/A10)，默认T4
 * @method HyperParameter getHyperParameter() 获取专业参数设置
 * @method void setHyperParameter(HyperParameter $HyperParameter) 设置专业参数设置
 */
class CreateBatchModelAccTasksRequest extends AbstractModel
{
    /**
     * @var string 模型加速任务名称
     */
    public $ModelAccTaskName;

    /**
     * @var array 批量模型加速任务
     */
    public $BatchModelAccTasks;

    /**
     * @var CosPathInfo 模型加速保存路径
     */
    public $ModelOutputPath;

    /**
     * @var array 标签
     */
    public $Tags;

    /**
     * @var string 优化级别(NO_LOSS/FP16/INT8)，默认FP16
     */
    public $OptimizationLevel;

    /**
     * @var string GPU卡类型(T4/V100/A10)，默认T4
     */
    public $GPUType;

    /**
     * @var HyperParameter 专业参数设置
     */
    public $HyperParameter;

    /**
     * @param string $ModelAccTaskName 模型加速任务名称
     * @param array $BatchModelAccTasks 批量模型加速任务
     * @param CosPathInfo $ModelOutputPath 模型加速保存路径
     * @param array $Tags 标签
     * @param string $OptimizationLevel 优化级别(NO_LOSS/FP16/INT8)，默认FP16
     * @param string $GPUType GPU卡类型(T4/V100/A10)，默认T4
     * @param HyperParameter $HyperParameter 专业参数设置
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
        if (array_key_exists("ModelAccTaskName",$param) and $param["ModelAccTaskName"] !== null) {
            $this->ModelAccTaskName = $param["ModelAccTaskName"];
        }

        if (array_key_exists("BatchModelAccTasks",$param) and $param["BatchModelAccTasks"] !== null) {
            $this->BatchModelAccTasks = [];
            foreach ($param["BatchModelAccTasks"] as $key => $value){
                $obj = new BatchModelAccTask();
                $obj->deserialize($value);
                array_push($this->BatchModelAccTasks, $obj);
            }
        }

        if (array_key_exists("ModelOutputPath",$param) and $param["ModelOutputPath"] !== null) {
            $this->ModelOutputPath = new CosPathInfo();
            $this->ModelOutputPath->deserialize($param["ModelOutputPath"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("OptimizationLevel",$param) and $param["OptimizationLevel"] !== null) {
            $this->OptimizationLevel = $param["OptimizationLevel"];
        }

        if (array_key_exists("GPUType",$param) and $param["GPUType"] !== null) {
            $this->GPUType = $param["GPUType"];
        }

        if (array_key_exists("HyperParameter",$param) and $param["HyperParameter"] !== null) {
            $this->HyperParameter = new HyperParameter();
            $this->HyperParameter->deserialize($param["HyperParameter"]);
        }
    }
}
