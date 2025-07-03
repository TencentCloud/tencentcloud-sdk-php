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
namespace TencentCloud\Es\V20250101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetTextEmbedding请求参数结构体
 *
 * @method string getModelName() 获取模型名称，可选模型列表：bge-base-zh-v1.5,conan-embedding-v1,bge-m3,KaLM-embedding-multilingual-mini-v1。
 * @method void setModelName(string $ModelName) 设置模型名称，可选模型列表：bge-base-zh-v1.5,conan-embedding-v1,bge-m3,KaLM-embedding-multilingual-mini-v1。
 * @method array getTexts() 获取需进行向量化的文本集。
 * @method void setTexts(array $Texts) 设置需进行向量化的文本集。
 */
class GetTextEmbeddingRequest extends AbstractModel
{
    /**
     * @var string 模型名称，可选模型列表：bge-base-zh-v1.5,conan-embedding-v1,bge-m3,KaLM-embedding-multilingual-mini-v1。
     */
    public $ModelName;

    /**
     * @var array 需进行向量化的文本集。
     */
    public $Texts;

    /**
     * @param string $ModelName 模型名称，可选模型列表：bge-base-zh-v1.5,conan-embedding-v1,bge-m3,KaLM-embedding-multilingual-mini-v1。
     * @param array $Texts 需进行向量化的文本集。
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
        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("Texts",$param) and $param["Texts"] !== null) {
            $this->Texts = $param["Texts"];
        }
    }
}
