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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GenerateTextEmbedding请求参数结构体
 *
 * @method string getModel() 获取<p>选择生成向量的模型（不同模型计费单价不同）。取值：</p><ul><li>0：text-embedding-0.6b</li><li>1：text-embedding-4b</li></ul>
 * @method void setModel(string $Model) 设置<p>选择生成向量的模型（不同模型计费单价不同）。取值：</p><ul><li>0：text-embedding-0.6b</li><li>1：text-embedding-4b</li></ul>
 * @method array getInputs() 获取<p>输入文本列表。单次最多 7 条，单条不超过 2000 字符。</p>
 * @method void setInputs(array $Inputs) 设置<p>输入文本列表。单次最多 7 条，单条不超过 2000 字符。</p>
 * @method string getTextType() 获取<p>文本向量化类型。取值：</p><ul><li>query：查询文本，用于检索场景的查询侧</li><li>document：文档文本，用于检索场景的文档侧</li></ul><p>默认为 document</p>
 * @method void setTextType(string $TextType) 设置<p>文本向量化类型。取值：</p><ul><li>query：查询文本，用于检索场景的查询侧</li><li>document：文档文本，用于检索场景的文档侧</li></ul><p>默认为 document</p>
 * @method string getInstruction() 获取<p>自定义任务指令词，用于指定向量化任务。最大 2000 字符。不传时按 TextType 使用系统默认指令词。</p>
 * @method void setInstruction(string $Instruction) 设置<p>自定义任务指令词，用于指定向量化任务。最大 2000 字符。不传时按 TextType 使用系统默认指令词。</p>
 */
class GenerateTextEmbeddingRequest extends AbstractModel
{
    /**
     * @var string <p>选择生成向量的模型（不同模型计费单价不同）。取值：</p><ul><li>0：text-embedding-0.6b</li><li>1：text-embedding-4b</li></ul>
     */
    public $Model;

    /**
     * @var array <p>输入文本列表。单次最多 7 条，单条不超过 2000 字符。</p>
     */
    public $Inputs;

    /**
     * @var string <p>文本向量化类型。取值：</p><ul><li>query：查询文本，用于检索场景的查询侧</li><li>document：文档文本，用于检索场景的文档侧</li></ul><p>默认为 document</p>
     */
    public $TextType;

    /**
     * @var string <p>自定义任务指令词，用于指定向量化任务。最大 2000 字符。不传时按 TextType 使用系统默认指令词。</p>
     */
    public $Instruction;

    /**
     * @param string $Model <p>选择生成向量的模型（不同模型计费单价不同）。取值：</p><ul><li>0：text-embedding-0.6b</li><li>1：text-embedding-4b</li></ul>
     * @param array $Inputs <p>输入文本列表。单次最多 7 条，单条不超过 2000 字符。</p>
     * @param string $TextType <p>文本向量化类型。取值：</p><ul><li>query：查询文本，用于检索场景的查询侧</li><li>document：文档文本，用于检索场景的文档侧</li></ul><p>默认为 document</p>
     * @param string $Instruction <p>自定义任务指令词，用于指定向量化任务。最大 2000 字符。不传时按 TextType 使用系统默认指令词。</p>
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
