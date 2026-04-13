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
 * 模型描述信息
 *
 * @method string getModelVersionId() 获取<p>模型版本id, DescribeTrainingModelVersion查询模型接口时的id<br>自动学习类型的模型填写自动学习的任务id</p>
 * @method void setModelVersionId(string $ModelVersionId) 设置<p>模型版本id, DescribeTrainingModelVersion查询模型接口时的id<br>自动学习类型的模型填写自动学习的任务id</p>
 * @method string getModelId() 获取<p>模型id</p>
 * @method void setModelId(string $ModelId) 设置<p>模型id</p>
 * @method string getModelName() 获取<p>模型名</p>
 * @method void setModelName(string $ModelName) 设置<p>模型名</p>
 * @method string getModelVersion() 获取<p>模型版本</p>
 * @method void setModelVersion(string $ModelVersion) 设置<p>模型版本</p>
 * @method string getModelSource() 获取<p>模型来源</p>
 * @method void setModelSource(string $ModelSource) 设置<p>模型来源</p>
 * @method CosPathInfo getCosPathInfo() 获取<p>cos路径信息</p>
 * @method void setCosPathInfo(CosPathInfo $CosPathInfo) 设置<p>cos路径信息</p>
 * @method GooseFSx getGooseFSx() 获取<p>GooseFSx的配置，ModelSource为GooseFSx时有效</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGooseFSx(GooseFSx $GooseFSx) 设置<p>GooseFSx的配置，ModelSource为GooseFSx时有效</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlgorithmFramework() 获取<p>模型对应的算法框架，预留</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlgorithmFramework(string $AlgorithmFramework) 设置<p>模型对应的算法框架，预留</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelType() 获取<p>默认为 NORMAL, 已加速模型: ACCELERATE, 自动学习模型 AUTO_ML</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelType(string $ModelType) 设置<p>默认为 NORMAL, 已加速模型: ACCELERATE, 自动学习模型 AUTO_ML</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelFormat() 获取<p>模型格式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelFormat(string $ModelFormat) 设置<p>模型格式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsPrivateModel() 获取<p>是否为私有化大模型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsPrivateModel(boolean $IsPrivateModel) 设置<p>是否为私有化大模型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelCategory() 获取<p>模型的类别 多模态MultiModal, 文本大模型 LLM</p>
 * @method void setModelCategory(string $ModelCategory) 设置<p>模型的类别 多模态MultiModal, 文本大模型 LLM</p>
 * @method PublicDataSourceFS getPublicDataSource() 获取<p>数据源的配置</p>
 * @method void setPublicDataSource(PublicDataSourceFS $PublicDataSource) 设置<p>数据源的配置</p>
 */
class ModelInfo extends AbstractModel
{
    /**
     * @var string <p>模型版本id, DescribeTrainingModelVersion查询模型接口时的id<br>自动学习类型的模型填写自动学习的任务id</p>
     */
    public $ModelVersionId;

    /**
     * @var string <p>模型id</p>
     */
    public $ModelId;

    /**
     * @var string <p>模型名</p>
     */
    public $ModelName;

    /**
     * @var string <p>模型版本</p>
     */
    public $ModelVersion;

    /**
     * @var string <p>模型来源</p>
     */
    public $ModelSource;

    /**
     * @var CosPathInfo <p>cos路径信息</p>
     */
    public $CosPathInfo;

    /**
     * @var GooseFSx <p>GooseFSx的配置，ModelSource为GooseFSx时有效</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GooseFSx;

    /**
     * @var string <p>模型对应的算法框架，预留</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlgorithmFramework;

    /**
     * @var string <p>默认为 NORMAL, 已加速模型: ACCELERATE, 自动学习模型 AUTO_ML</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelType;

    /**
     * @var string <p>模型格式</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelFormat;

    /**
     * @var boolean <p>是否为私有化大模型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsPrivateModel;

    /**
     * @var string <p>模型的类别 多模态MultiModal, 文本大模型 LLM</p>
     */
    public $ModelCategory;

    /**
     * @var PublicDataSourceFS <p>数据源的配置</p>
     */
    public $PublicDataSource;

    /**
     * @param string $ModelVersionId <p>模型版本id, DescribeTrainingModelVersion查询模型接口时的id<br>自动学习类型的模型填写自动学习的任务id</p>
     * @param string $ModelId <p>模型id</p>
     * @param string $ModelName <p>模型名</p>
     * @param string $ModelVersion <p>模型版本</p>
     * @param string $ModelSource <p>模型来源</p>
     * @param CosPathInfo $CosPathInfo <p>cos路径信息</p>
     * @param GooseFSx $GooseFSx <p>GooseFSx的配置，ModelSource为GooseFSx时有效</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlgorithmFramework <p>模型对应的算法框架，预留</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelType <p>默认为 NORMAL, 已加速模型: ACCELERATE, 自动学习模型 AUTO_ML</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelFormat <p>模型格式</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsPrivateModel <p>是否为私有化大模型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelCategory <p>模型的类别 多模态MultiModal, 文本大模型 LLM</p>
     * @param PublicDataSourceFS $PublicDataSource <p>数据源的配置</p>
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

        if (array_key_exists("GooseFSx",$param) and $param["GooseFSx"] !== null) {
            $this->GooseFSx = new GooseFSx();
            $this->GooseFSx->deserialize($param["GooseFSx"]);
        }

        if (array_key_exists("AlgorithmFramework",$param) and $param["AlgorithmFramework"] !== null) {
            $this->AlgorithmFramework = $param["AlgorithmFramework"];
        }

        if (array_key_exists("ModelType",$param) and $param["ModelType"] !== null) {
            $this->ModelType = $param["ModelType"];
        }

        if (array_key_exists("ModelFormat",$param) and $param["ModelFormat"] !== null) {
            $this->ModelFormat = $param["ModelFormat"];
        }

        if (array_key_exists("IsPrivateModel",$param) and $param["IsPrivateModel"] !== null) {
            $this->IsPrivateModel = $param["IsPrivateModel"];
        }

        if (array_key_exists("ModelCategory",$param) and $param["ModelCategory"] !== null) {
            $this->ModelCategory = $param["ModelCategory"];
        }

        if (array_key_exists("PublicDataSource",$param) and $param["PublicDataSource"] !== null) {
            $this->PublicDataSource = new PublicDataSourceFS();
            $this->PublicDataSource->deserialize($param["PublicDataSource"]);
        }
    }
}
