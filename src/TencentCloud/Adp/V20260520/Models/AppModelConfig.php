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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模型配置
 *
 * @method AIOptimizeModel getAiOptimizeModel() 获取AI一键优化模型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAiOptimizeModel(AIOptimizeModel $AiOptimizeModel) 设置AI一键优化模型
注意：此字段可能返回 null，表示取不到有效值。
 * @method FileParseModel getFileParseModel() 获取实时文件解析模型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileParseModel(FileParseModel $FileParseModel) 设置实时文件解析模型
注意：此字段可能返回 null，表示取不到有效值。
 * @method GenerateModel getGenerateModel() 获取生成模型配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGenerateModel(GenerateModel $GenerateModel) 设置生成模型配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method MultiModalQAModel getMultiModalQaModel() 获取多模态问答模型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMultiModalQaModel(MultiModalQAModel $MultiModalQaModel) 设置多模态问答模型
注意：此字段可能返回 null，表示取不到有效值。
 * @method MultiModalUnderstandingModel getMultiModalUnderstandingModel() 获取多模态理解模型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMultiModalUnderstandingModel(MultiModalUnderstandingModel $MultiModalUnderstandingModel) 设置多模态理解模型
注意：此字段可能返回 null，表示取不到有效值。
 * @method PromptRewriteModel getPromptRewriteModel() 获取Prompt改写模型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPromptRewriteModel(PromptRewriteModel $PromptRewriteModel) 设置Prompt改写模型
注意：此字段可能返回 null，表示取不到有效值。
 * @method ThinkModel getThinkModel() 获取思考模型配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setThinkModel(ThinkModel $ThinkModel) 设置思考模型配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class AppModelConfig extends AbstractModel
{
    /**
     * @var AIOptimizeModel AI一键优化模型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AiOptimizeModel;

    /**
     * @var FileParseModel 实时文件解析模型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileParseModel;

    /**
     * @var GenerateModel 生成模型配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GenerateModel;

    /**
     * @var MultiModalQAModel 多模态问答模型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MultiModalQaModel;

    /**
     * @var MultiModalUnderstandingModel 多模态理解模型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MultiModalUnderstandingModel;

    /**
     * @var PromptRewriteModel Prompt改写模型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PromptRewriteModel;

    /**
     * @var ThinkModel 思考模型配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ThinkModel;

    /**
     * @param AIOptimizeModel $AiOptimizeModel AI一键优化模型
注意：此字段可能返回 null，表示取不到有效值。
     * @param FileParseModel $FileParseModel 实时文件解析模型
注意：此字段可能返回 null，表示取不到有效值。
     * @param GenerateModel $GenerateModel 生成模型配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param MultiModalQAModel $MultiModalQaModel 多模态问答模型
注意：此字段可能返回 null，表示取不到有效值。
     * @param MultiModalUnderstandingModel $MultiModalUnderstandingModel 多模态理解模型
注意：此字段可能返回 null，表示取不到有效值。
     * @param PromptRewriteModel $PromptRewriteModel Prompt改写模型
注意：此字段可能返回 null，表示取不到有效值。
     * @param ThinkModel $ThinkModel 思考模型配置
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
        if (array_key_exists("AiOptimizeModel",$param) and $param["AiOptimizeModel"] !== null) {
            $this->AiOptimizeModel = new AIOptimizeModel();
            $this->AiOptimizeModel->deserialize($param["AiOptimizeModel"]);
        }

        if (array_key_exists("FileParseModel",$param) and $param["FileParseModel"] !== null) {
            $this->FileParseModel = new FileParseModel();
            $this->FileParseModel->deserialize($param["FileParseModel"]);
        }

        if (array_key_exists("GenerateModel",$param) and $param["GenerateModel"] !== null) {
            $this->GenerateModel = new GenerateModel();
            $this->GenerateModel->deserialize($param["GenerateModel"]);
        }

        if (array_key_exists("MultiModalQaModel",$param) and $param["MultiModalQaModel"] !== null) {
            $this->MultiModalQaModel = new MultiModalQAModel();
            $this->MultiModalQaModel->deserialize($param["MultiModalQaModel"]);
        }

        if (array_key_exists("MultiModalUnderstandingModel",$param) and $param["MultiModalUnderstandingModel"] !== null) {
            $this->MultiModalUnderstandingModel = new MultiModalUnderstandingModel();
            $this->MultiModalUnderstandingModel->deserialize($param["MultiModalUnderstandingModel"]);
        }

        if (array_key_exists("PromptRewriteModel",$param) and $param["PromptRewriteModel"] !== null) {
            $this->PromptRewriteModel = new PromptRewriteModel();
            $this->PromptRewriteModel->deserialize($param["PromptRewriteModel"]);
        }

        if (array_key_exists("ThinkModel",$param) and $param["ThinkModel"] !== null) {
            $this->ThinkModel = new ThinkModel();
            $this->ThinkModel->deserialize($param["ThinkModel"]);
        }
    }
}
