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
 * @method AIOptimizeModel getAiOptimizeModel() 获取<p>AI一键优化模型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAiOptimizeModel(AIOptimizeModel $AiOptimizeModel) 设置<p>AI一键优化模型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method FileParseModel getFileParseModel() 获取<p>实时文件解析模型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileParseModel(FileParseModel $FileParseModel) 设置<p>实时文件解析模型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method GenerateModel getGenerateModel() 获取<p>生成模型配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGenerateModel(GenerateModel $GenerateModel) 设置<p>生成模型配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MultiModalQAModel getMultiModalQaModel() 获取<p>多模态问答模型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMultiModalQaModel(MultiModalQAModel $MultiModalQaModel) 设置<p>多模态问答模型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MultiModalUnderstandingModel getMultiModalUnderstandingModel() 获取<p>多模态理解模型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMultiModalUnderstandingModel(MultiModalUnderstandingModel $MultiModalUnderstandingModel) 设置<p>多模态理解模型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method PromptRewriteModel getPromptRewriteModel() 获取<p>Prompt改写模型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPromptRewriteModel(PromptRewriteModel $PromptRewriteModel) 设置<p>Prompt改写模型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ThinkModel getThinkModel() 获取<p>思考模型配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setThinkModel(ThinkModel $ThinkModel) 设置<p>思考模型配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method FileSplitModel getFileSplitModel() 获取<p>实时文档切分模型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileSplitModel(FileSplitModel $FileSplitModel) 设置<p>实时文档切分模型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method HeaderExtractModel getHeaderExtractModel() 获取<p>表头拆分模型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeaderExtractModel(HeaderExtractModel $HeaderExtractModel) 设置<p>表头拆分模型</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class AppModelConfig extends AbstractModel
{
    /**
     * @var AIOptimizeModel <p>AI一键优化模型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AiOptimizeModel;

    /**
     * @var FileParseModel <p>实时文件解析模型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileParseModel;

    /**
     * @var GenerateModel <p>生成模型配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GenerateModel;

    /**
     * @var MultiModalQAModel <p>多模态问答模型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MultiModalQaModel;

    /**
     * @var MultiModalUnderstandingModel <p>多模态理解模型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MultiModalUnderstandingModel;

    /**
     * @var PromptRewriteModel <p>Prompt改写模型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PromptRewriteModel;

    /**
     * @var ThinkModel <p>思考模型配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ThinkModel;

    /**
     * @var FileSplitModel <p>实时文档切分模型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileSplitModel;

    /**
     * @var HeaderExtractModel <p>表头拆分模型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HeaderExtractModel;

    /**
     * @param AIOptimizeModel $AiOptimizeModel <p>AI一键优化模型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param FileParseModel $FileParseModel <p>实时文件解析模型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param GenerateModel $GenerateModel <p>生成模型配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MultiModalQAModel $MultiModalQaModel <p>多模态问答模型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MultiModalUnderstandingModel $MultiModalUnderstandingModel <p>多模态理解模型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param PromptRewriteModel $PromptRewriteModel <p>Prompt改写模型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ThinkModel $ThinkModel <p>思考模型配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param FileSplitModel $FileSplitModel <p>实时文档切分模型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param HeaderExtractModel $HeaderExtractModel <p>表头拆分模型</p>
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

        if (array_key_exists("FileSplitModel",$param) and $param["FileSplitModel"] !== null) {
            $this->FileSplitModel = new FileSplitModel();
            $this->FileSplitModel->deserialize($param["FileSplitModel"]);
        }

        if (array_key_exists("HeaderExtractModel",$param) and $param["HeaderExtractModel"] !== null) {
            $this->HeaderExtractModel = new HeaderExtractModel();
            $this->HeaderExtractModel->deserialize($param["HeaderExtractModel"]);
        }
    }
}
