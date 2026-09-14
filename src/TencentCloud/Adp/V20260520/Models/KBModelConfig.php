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
 * 知识库模型配置
 *
 * @method string getEmbeddingModel() 获取<p>Embedding 模型</p>
 * @method void setEmbeddingModel(string $EmbeddingModel) 设置<p>Embedding 模型</p>
 * @method string getQaExtractModel() 获取<p>QA 抽取模型</p>
 * @method void setQaExtractModel(string $QaExtractModel) 设置<p>QA 抽取模型</p>
 * @method string getSchemaModel() 获取<p>Schema 生成模型</p>
 * @method void setSchemaModel(string $SchemaModel) 设置<p>Schema 生成模型</p>
 */
class KBModelConfig extends AbstractModel
{
    /**
     * @var string <p>Embedding 模型</p>
     */
    public $EmbeddingModel;

    /**
     * @var string <p>QA 抽取模型</p>
     */
    public $QaExtractModel;

    /**
     * @var string <p>Schema 生成模型</p>
     */
    public $SchemaModel;

    /**
     * @param string $EmbeddingModel <p>Embedding 模型</p>
     * @param string $QaExtractModel <p>QA 抽取模型</p>
     * @param string $SchemaModel <p>Schema 生成模型</p>
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
        if (array_key_exists("EmbeddingModel",$param) and $param["EmbeddingModel"] !== null) {
            $this->EmbeddingModel = $param["EmbeddingModel"];
        }

        if (array_key_exists("QaExtractModel",$param) and $param["QaExtractModel"] !== null) {
            $this->QaExtractModel = $param["QaExtractModel"];
        }

        if (array_key_exists("SchemaModel",$param) and $param["SchemaModel"] !== null) {
            $this->SchemaModel = $param["SchemaModel"];
        }
    }
}
