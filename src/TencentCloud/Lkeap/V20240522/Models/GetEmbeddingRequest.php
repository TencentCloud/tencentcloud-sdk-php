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
namespace TencentCloud\Lkeap\V20240522\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetEmbedding请求参数结构体
 *
 * @method string getModel() 获取说明：选择生成向量的模型备注：可选[lke-text-embedding-v1,lke-text-embedding-v2,youtu-embedding-llm-v1]
 * @method void setModel(string $Model) 设置说明：选择生成向量的模型备注：可选[lke-text-embedding-v1,lke-text-embedding-v2,youtu-embedding-llm-v1]
 * @method array getInputs() 获取说明：需要 embedding 的文本
备注：单条query最多2000个字符，总条数最多7条
 * @method void setInputs(array $Inputs) 设置说明：需要 embedding 的文本
备注：单条query最多2000个字符，总条数最多7条
 * @method string getTextType() 获取说明：文本向量化的类型，为使得检索任务有更好的检索效果，建议区分查询文本（query）和文档文本（document）类型, 聚类、分类等对称任务可以不用特殊指定，采用系统默认值document即可。
 * @method void setTextType(string $TextType) 设置说明：文本向量化的类型，为使得检索任务有更好的检索效果，建议区分查询文本（query）和文档文本（document）类型, 聚类、分类等对称任务可以不用特殊指定，采用系统默认值document即可。
 * @method string getInstruction() 获取说明：自定义任务指令词，当且仅当TextType=query时，生效
 * @method void setInstruction(string $Instruction) 设置说明：自定义任务指令词，当且仅当TextType=query时，生效
 */
class GetEmbeddingRequest extends AbstractModel
{
    /**
     * @var string 说明：选择生成向量的模型备注：可选[lke-text-embedding-v1,lke-text-embedding-v2,youtu-embedding-llm-v1]
     */
    public $Model;

    /**
     * @var array 说明：需要 embedding 的文本
备注：单条query最多2000个字符，总条数最多7条
     */
    public $Inputs;

    /**
     * @var string 说明：文本向量化的类型，为使得检索任务有更好的检索效果，建议区分查询文本（query）和文档文本（document）类型, 聚类、分类等对称任务可以不用特殊指定，采用系统默认值document即可。
     */
    public $TextType;

    /**
     * @var string 说明：自定义任务指令词，当且仅当TextType=query时，生效
     */
    public $Instruction;

    /**
     * @param string $Model 说明：选择生成向量的模型备注：可选[lke-text-embedding-v1,lke-text-embedding-v2,youtu-embedding-llm-v1]
     * @param array $Inputs 说明：需要 embedding 的文本
备注：单条query最多2000个字符，总条数最多7条
     * @param string $TextType 说明：文本向量化的类型，为使得检索任务有更好的检索效果，建议区分查询文本（query）和文档文本（document）类型, 聚类、分类等对称任务可以不用特殊指定，采用系统默认值document即可。
     * @param string $Instruction 说明：自定义任务指令词，当且仅当TextType=query时，生效
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
        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Inputs",$param) and $param["Inputs"] !== null) {
            $this->Inputs = $param["Inputs"];
        }

        if (array_key_exists("TextType",$param) and $param["TextType"] !== null) {
            $this->TextType = $param["TextType"];
        }

        if (array_key_exists("Instruction",$param) and $param["Instruction"] !== null) {
            $this->Instruction = $param["Instruction"];
        }
    }
}
