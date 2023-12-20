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
 * 模型来源
 *
 * @method string getSource() 获取来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSource(string $Source) 设置来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJobName() 获取来源任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobName(string $JobName) 设置来源任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJobVersion() 获取来源任务版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobVersion(string $JobVersion) 设置来源任务版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJobId() 获取来源任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobId(string $JobId) 设置来源任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelName() 获取模型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelName(string $ModelName) 设置模型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlgorithmFramework() 获取算法框架
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlgorithmFramework(string $AlgorithmFramework) 设置算法框架
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTrainingPreference() 获取训练偏好
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrainingPreference(string $TrainingPreference) 设置训练偏好
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReasoningEnvironmentSource() 获取推理环境来源，SYSTEM/CUSTOM
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReasoningEnvironmentSource(string $ReasoningEnvironmentSource) 设置推理环境来源，SYSTEM/CUSTOM
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReasoningEnvironment() 获取推理环境
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReasoningEnvironment(string $ReasoningEnvironment) 设置推理环境
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReasoningEnvironmentId() 获取推理环境id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReasoningEnvironmentId(string $ReasoningEnvironmentId) 设置推理环境id
注意：此字段可能返回 null，表示取不到有效值。
 * @method ImageInfo getReasoningImageInfo() 获取自定义推理环境
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReasoningImageInfo(ImageInfo $ReasoningImageInfo) 设置自定义推理环境
注意：此字段可能返回 null，表示取不到有效值。
 */
class ModelSource extends AbstractModel
{
    /**
     * @var string 来源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Source;

    /**
     * @var string 来源任务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobName;

    /**
     * @var string 来源任务版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobVersion;

    /**
     * @var string 来源任务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobId;

    /**
     * @var string 模型名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelName;

    /**
     * @var string 算法框架
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlgorithmFramework;

    /**
     * @var string 训练偏好
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrainingPreference;

    /**
     * @var string 推理环境来源，SYSTEM/CUSTOM
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReasoningEnvironmentSource;

    /**
     * @var string 推理环境
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReasoningEnvironment;

    /**
     * @var string 推理环境id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReasoningEnvironmentId;

    /**
     * @var ImageInfo 自定义推理环境
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReasoningImageInfo;

    /**
     * @param string $Source 来源
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JobName 来源任务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JobVersion 来源任务版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JobId 来源任务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelName 模型名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlgorithmFramework 算法框架
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TrainingPreference 训练偏好
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReasoningEnvironmentSource 推理环境来源，SYSTEM/CUSTOM
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReasoningEnvironment 推理环境
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReasoningEnvironmentId 推理环境id
注意：此字段可能返回 null，表示取不到有效值。
     * @param ImageInfo $ReasoningImageInfo 自定义推理环境
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
        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("JobVersion",$param) and $param["JobVersion"] !== null) {
            $this->JobVersion = $param["JobVersion"];
        }

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("AlgorithmFramework",$param) and $param["AlgorithmFramework"] !== null) {
            $this->AlgorithmFramework = $param["AlgorithmFramework"];
        }

        if (array_key_exists("TrainingPreference",$param) and $param["TrainingPreference"] !== null) {
            $this->TrainingPreference = $param["TrainingPreference"];
        }

        if (array_key_exists("ReasoningEnvironmentSource",$param) and $param["ReasoningEnvironmentSource"] !== null) {
            $this->ReasoningEnvironmentSource = $param["ReasoningEnvironmentSource"];
        }

        if (array_key_exists("ReasoningEnvironment",$param) and $param["ReasoningEnvironment"] !== null) {
            $this->ReasoningEnvironment = $param["ReasoningEnvironment"];
        }

        if (array_key_exists("ReasoningEnvironmentId",$param) and $param["ReasoningEnvironmentId"] !== null) {
            $this->ReasoningEnvironmentId = $param["ReasoningEnvironmentId"];
        }

        if (array_key_exists("ReasoningImageInfo",$param) and $param["ReasoningImageInfo"] !== null) {
            $this->ReasoningImageInfo = new ImageInfo();
            $this->ReasoningImageInfo->deserialize($param["ReasoningImageInfo"]);
        }
    }
}
