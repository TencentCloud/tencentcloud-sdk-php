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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateExperiment请求参数结构体
 *
 * @method string getWorkspaceId() 获取<p>工作空间ID（必填），可通过 ListWorkspaces 接口获取</p>
 * @method void setWorkspaceId(string $WorkspaceId) 设置<p>工作空间ID（必填），可通过 ListWorkspaces 接口获取</p>
 * @method string getName() 获取<p>实验名称（必填），同一工作空间内唯一</p>
 * @method void setName(string $Name) 设置<p>实验名称（必填），同一工作空间内唯一</p>
 * @method string getType() 获取<p>实验类型（必填），取值：MACHINE_LEARNING（机器学习）/ CLASSIFICATION（分类）/ REGRESSION（回归）/ FORECASTING（时间序列预测）/ AGENT（智能体）。传入其他值将返回 InvalidParameter.ExperimentTypeInvalid</p>
 * @method void setType(string $Type) 设置<p>实验类型（必填），取值：MACHINE_LEARNING（机器学习）/ CLASSIFICATION（分类）/ REGRESSION（回归）/ FORECASTING（时间序列预测）/ AGENT（智能体）。传入其他值将返回 InvalidParameter.ExperimentTypeInvalid</p>
 * @method string getDescription() 获取<p>实验描述（可选），建议长度不超过 1024 字符</p>
 * @method void setDescription(string $Description) 设置<p>实验描述（可选），建议长度不超过 1024 字符</p>
 * @method string getStudioId() 获取<p>Studio目录树文件夹节点ID，即实验所在的目录节点，可通过 ListFiles 接口获取</p>
 * @method void setStudioId(string $StudioId) 设置<p>Studio目录树文件夹节点ID，即实验所在的目录节点，可通过 ListFiles 接口获取</p>
 * @method array getTags() 获取<p>实验标签列表（可选），key/value 均为字符串</p>
 * @method void setTags(array $Tags) 设置<p>实验标签列表（可选），key/value 均为字符串</p>
 * @method AutoMlConf getAutoMlConf() 获取<p>AutoML配置（可选，仅 Type 为 CLASSIFICATION/REGRESSION/FORECASTING 时需要），包含评估指标、搜索空间、最大运行时间/次数/并发等</p>
 * @method void setAutoMlConf(AutoMlConf $AutoMlConf) 设置<p>AutoML配置（可选，仅 Type 为 CLASSIFICATION/REGRESSION/FORECASTING 时需要），包含评估指标、搜索空间、最大运行时间/次数/并发等</p>
 * @method TrainingData getTrainingData() 获取<p>训练数据配置（可选，仅 AutoML 类型实验需要），指定训练数据表（Catalog.Schema.Table 三段式）与目标标签列</p>
 * @method void setTrainingData(TrainingData $TrainingData) 设置<p>训练数据配置（可选，仅 AutoML 类型实验需要），指定训练数据表（Catalog.Schema.Table 三段式）与目标标签列</p>
 * @method string getResourceGroupId() 获取<p>计算资源组ID（可选），指定实验运行所使用的计算资源，可通过 ListComputeResourceOptions 接口获取</p>
 * @method void setResourceGroupId(string $ResourceGroupId) 设置<p>计算资源组ID（可选），指定实验运行所使用的计算资源，可通过 ListComputeResourceOptions 接口获取</p>
 */
class CreateExperimentRequest extends AbstractModel
{
    /**
     * @var string <p>工作空间ID（必填），可通过 ListWorkspaces 接口获取</p>
     */
    public $WorkspaceId;

    /**
     * @var string <p>实验名称（必填），同一工作空间内唯一</p>
     */
    public $Name;

    /**
     * @var string <p>实验类型（必填），取值：MACHINE_LEARNING（机器学习）/ CLASSIFICATION（分类）/ REGRESSION（回归）/ FORECASTING（时间序列预测）/ AGENT（智能体）。传入其他值将返回 InvalidParameter.ExperimentTypeInvalid</p>
     */
    public $Type;

    /**
     * @var string <p>实验描述（可选），建议长度不超过 1024 字符</p>
     */
    public $Description;

    /**
     * @var string <p>Studio目录树文件夹节点ID，即实验所在的目录节点，可通过 ListFiles 接口获取</p>
     */
    public $StudioId;

    /**
     * @var array <p>实验标签列表（可选），key/value 均为字符串</p>
     */
    public $Tags;

    /**
     * @var AutoMlConf <p>AutoML配置（可选，仅 Type 为 CLASSIFICATION/REGRESSION/FORECASTING 时需要），包含评估指标、搜索空间、最大运行时间/次数/并发等</p>
     */
    public $AutoMlConf;

    /**
     * @var TrainingData <p>训练数据配置（可选，仅 AutoML 类型实验需要），指定训练数据表（Catalog.Schema.Table 三段式）与目标标签列</p>
     */
    public $TrainingData;

    /**
     * @var string <p>计算资源组ID（可选），指定实验运行所使用的计算资源，可通过 ListComputeResourceOptions 接口获取</p>
     */
    public $ResourceGroupId;

    /**
     * @param string $WorkspaceId <p>工作空间ID（必填），可通过 ListWorkspaces 接口获取</p>
     * @param string $Name <p>实验名称（必填），同一工作空间内唯一</p>
     * @param string $Type <p>实验类型（必填），取值：MACHINE_LEARNING（机器学习）/ CLASSIFICATION（分类）/ REGRESSION（回归）/ FORECASTING（时间序列预测）/ AGENT（智能体）。传入其他值将返回 InvalidParameter.ExperimentTypeInvalid</p>
     * @param string $Description <p>实验描述（可选），建议长度不超过 1024 字符</p>
     * @param string $StudioId <p>Studio目录树文件夹节点ID，即实验所在的目录节点，可通过 ListFiles 接口获取</p>
     * @param array $Tags <p>实验标签列表（可选），key/value 均为字符串</p>
     * @param AutoMlConf $AutoMlConf <p>AutoML配置（可选，仅 Type 为 CLASSIFICATION/REGRESSION/FORECASTING 时需要），包含评估指标、搜索空间、最大运行时间/次数/并发等</p>
     * @param TrainingData $TrainingData <p>训练数据配置（可选，仅 AutoML 类型实验需要），指定训练数据表（Catalog.Schema.Table 三段式）与目标标签列</p>
     * @param string $ResourceGroupId <p>计算资源组ID（可选），指定实验运行所使用的计算资源，可通过 ListComputeResourceOptions 接口获取</p>
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
        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("StudioId",$param) and $param["StudioId"] !== null) {
            $this->StudioId = $param["StudioId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new ExperimentTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("AutoMlConf",$param) and $param["AutoMlConf"] !== null) {
            $this->AutoMlConf = new AutoMlConf();
            $this->AutoMlConf->deserialize($param["AutoMlConf"]);
        }

        if (array_key_exists("TrainingData",$param) and $param["TrainingData"] !== null) {
            $this->TrainingData = new TrainingData();
            $this->TrainingData->deserialize($param["TrainingData"]);
        }

        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
        }
    }
}
