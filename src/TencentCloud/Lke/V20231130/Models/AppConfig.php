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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用配置
 *
 * @method KnowledgeQaConfig getKnowledgeQa() 获取知识问答管理应用配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKnowledgeQa(KnowledgeQaConfig $KnowledgeQa) 设置知识问答管理应用配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method SummaryConfig getSummary() 获取知识摘要应用配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSummary(SummaryConfig $Summary) 设置知识摘要应用配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method ClassifyConfig getClassify() 获取标签提取应用配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClassify(ClassifyConfig $Classify) 设置标签提取应用配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class AppConfig extends AbstractModel
{
    /**
     * @var KnowledgeQaConfig 知识问答管理应用配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KnowledgeQa;

    /**
     * @var SummaryConfig 知识摘要应用配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Summary;

    /**
     * @var ClassifyConfig 标签提取应用配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Classify;

    /**
     * @param KnowledgeQaConfig $KnowledgeQa 知识问答管理应用配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param SummaryConfig $Summary 知识摘要应用配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param ClassifyConfig $Classify 标签提取应用配置
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
        if (array_key_exists("KnowledgeQa",$param) and $param["KnowledgeQa"] !== null) {
            $this->KnowledgeQa = new KnowledgeQaConfig();
            $this->KnowledgeQa->deserialize($param["KnowledgeQa"]);
        }

        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = new SummaryConfig();
            $this->Summary->deserialize($param["Summary"]);
        }

        if (array_key_exists("Classify",$param) and $param["Classify"] !== null) {
            $this->Classify = new ClassifyConfig();
            $this->Classify->deserialize($param["Classify"]);
        }
    }
}
