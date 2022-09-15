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
 * 模型描述信息
 *
 * @method string getModelVersionId() 获取模型版本id, DescribeTrainingModelVersion查询模型接口时的id
自动学习类型的模型填写自动学习的任务id
 * @method void setModelVersionId(string $ModelVersionId) 设置模型版本id, DescribeTrainingModelVersion查询模型接口时的id
自动学习类型的模型填写自动学习的任务id
 * @method string getModelId() 获取模型id
 * @method void setModelId(string $ModelId) 设置模型id
 * @method string getModelName() 获取模型名
 * @method void setModelName(string $ModelName) 设置模型名
 * @method string getModelVersion() 获取模型版本
 * @method void setModelVersion(string $ModelVersion) 设置模型版本
 * @method string getModelSource() 获取模型来源
 * @method void setModelSource(string $ModelSource) 设置模型来源
 * @method CosPathInfo getCosPathInfo() 获取cos路径信息
 * @method void setCosPathInfo(CosPathInfo $CosPathInfo) 设置cos路径信息
 * @method string getAlgorithmFramework() 获取模型对应的算法框架，预留
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlgorithmFramework(string $AlgorithmFramework) 设置模型对应的算法框架，预留
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelType() 获取默认为 NORMAL, 已加速模型: ACCELERATE, 自动学习模型 AUTO_ML
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelType(string $ModelType) 设置默认为 NORMAL, 已加速模型: ACCELERATE, 自动学习模型 AUTO_ML
注意：此字段可能返回 null，表示取不到有效值。
 */
class ModelInfo extends AbstractModel
{
    /**
     * @var string 模型版本id, DescribeTrainingModelVersion查询模型接口时的id
自动学习类型的模型填写自动学习的任务id
     */
    public $ModelVersionId;

    /**
     * @var string 模型id
     */
    public $ModelId;

    /**
     * @var string 模型名
     */
    public $ModelName;

    /**
     * @var string 模型版本
     */
    public $ModelVersion;

    /**
     * @var string 模型来源
     */
    public $ModelSource;

    /**
     * @var CosPathInfo cos路径信息
     */
    public $CosPathInfo;

    /**
     * @var string 模型对应的算法框架，预留
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlgorithmFramework;

    /**
     * @var string 默认为 NORMAL, 已加速模型: ACCELERATE, 自动学习模型 AUTO_ML
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelType;

    /**
     * @param string $ModelVersionId 模型版本id, DescribeTrainingModelVersion查询模型接口时的id
自动学习类型的模型填写自动学习的任务id
     * @param string $ModelId 模型id
     * @param string $ModelName 模型名
     * @param string $ModelVersion 模型版本
     * @param string $ModelSource 模型来源
     * @param CosPathInfo $CosPathInfo cos路径信息
     * @param string $AlgorithmFramework 模型对应的算法框架，预留
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelType 默认为 NORMAL, 已加速模型: ACCELERATE, 自动学习模型 AUTO_ML
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
        if (array_key_exists("ModelVersionId",$param) and $param["ModelVersionId"] !== null) {
            $this->ModelVersionId = $param["ModelVersionId"];
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

        if (array_key_exists("CosPathInfo",$param) and $param["CosPathInfo"] !== null) {
            $this->CosPathInfo = new CosPathInfo();
            $this->CosPathInfo->deserialize($param["CosPathInfo"]);
        }

        if (array_key_exists("AlgorithmFramework",$param) and $param["AlgorithmFramework"] !== null) {
            $this->AlgorithmFramework = $param["AlgorithmFramework"];
        }

        if (array_key_exists("ModelType",$param) and $param["ModelType"] !== null) {
            $this->ModelType = $param["ModelType"];
        }
    }
}
