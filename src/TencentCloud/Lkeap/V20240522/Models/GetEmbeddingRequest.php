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
 * @method string getModel() 获取<p>说明：选择生成向量的模型</p><p>枚举值：</p><ul><li>lke-text-embedding-v1： 文本embedding v1</li><li>lke-text-embedding-v2： 文本embedding v2</li></ul>
 * @method void setModel(string $Model) 设置<p>说明：选择生成向量的模型</p><p>枚举值：</p><ul><li>lke-text-embedding-v1： 文本embedding v1</li><li>lke-text-embedding-v2： 文本embedding v2</li></ul>
 * @method array getInputs() 获取<p>说明：需要 embedding 的文本<br>备注：单条query最多2000个字符，总条数最多7条</p>
 * @method void setInputs(array $Inputs) 设置<p>说明：需要 embedding 的文本<br>备注：单条query最多2000个字符，总条数最多7条</p>
 * @method string getTextType() 获取<p>说明：文本向量化的类型，为使得检索任务有更好的检索效果，建议区分查询文本（query）和文档文本（document）类型, 聚类、分类等对称任务可以不用特殊指定，采用系统默认值document即可。</p>
 * @method void setTextType(string $TextType) 设置<p>说明：文本向量化的类型，为使得检索任务有更好的检索效果，建议区分查询文本（query）和文档文本（document）类型, 聚类、分类等对称任务可以不用特殊指定，采用系统默认值document即可。</p>
 * @method string getInstruction() 获取<p>说明：自定义任务指令词，当且仅当TextType=query且Model为lke-text-embedding-v1时，生效</p>
 * @method void setInstruction(string $Instruction) 设置<p>说明：自定义任务指令词，当且仅当TextType=query且Model为lke-text-embedding-v1时，生效</p>
 */
class GetEmbeddingRequest extends AbstractModel
{
    /**
     * @var string <p>说明：选择生成向量的模型</p><p>枚举值：</p><ul><li>lke-text-embedding-v1： 文本embedding v1</li><li>lke-text-embedding-v2： 文本embedding v2</li></ul>
     */
    public $Model;

    /**
     * @var array <p>说明：需要 embedding 的文本<br>备注：单条query最多2000个字符，总条数最多7条</p>
     */
    public $Inputs;

    /**
     * @var string <p>说明：文本向量化的类型，为使得检索任务有更好的检索效果，建议区分查询文本（query）和文档文本（document）类型, 聚类、分类等对称任务可以不用特殊指定，采用系统默认值document即可。</p>
     */
    public $TextType;

    /**
     * @var string <p>说明：自定义任务指令词，当且仅当TextType=query且Model为lke-text-embedding-v1时，生效</p>
     */
    public $Instruction;

    /**
     * @param string $Model <p>说明：选择生成向量的模型</p><p>枚举值：</p><ul><li>lke-text-embedding-v1： 文本embedding v1</li><li>lke-text-embedding-v2： 文本embedding v2</li></ul>
     * @param array $Inputs <p>说明：需要 embedding 的文本<br>备注：单条query最多2000个字符，总条数最多7条</p>
     * @param string $TextType <p>说明：文本向量化的类型，为使得检索任务有更好的检索效果，建议区分查询文本（query）和文档文本（document）类型, 聚类、分类等对称任务可以不用特殊指定，采用系统默认值document即可。</p>
     * @param string $Instruction <p>说明：自定义任务指令词，当且仅当TextType=query且Model为lke-text-embedding-v1时，生效</p>
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
