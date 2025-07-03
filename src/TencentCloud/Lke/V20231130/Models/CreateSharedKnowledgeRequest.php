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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSharedKnowledge请求参数结构体
 *
 * @method string getKnowledgeName() 获取共享知识库名称，字符数量范围：[1, 50]
 * @method void setKnowledgeName(string $KnowledgeName) 设置共享知识库名称，字符数量范围：[1, 50]
 * @method string getKnowledgeDescription() 获取共享知识库描述，字符数量上限2000
 * @method void setKnowledgeDescription(string $KnowledgeDescription) 设置共享知识库描述，字符数量上限2000
 * @method string getEmbeddingModel() 获取Embedding模型，字符数量上限128
 * @method void setEmbeddingModel(string $EmbeddingModel) 设置Embedding模型，字符数量上限128
 */
class CreateSharedKnowledgeRequest extends AbstractModel
{
    /**
     * @var string 共享知识库名称，字符数量范围：[1, 50]
     */
    public $KnowledgeName;

    /**
     * @var string 共享知识库描述，字符数量上限2000
     */
    public $KnowledgeDescription;

    /**
     * @var string Embedding模型，字符数量上限128
     */
    public $EmbeddingModel;

    /**
     * @param string $KnowledgeName 共享知识库名称，字符数量范围：[1, 50]
     * @param string $KnowledgeDescription 共享知识库描述，字符数量上限2000
     * @param string $EmbeddingModel Embedding模型，字符数量上限128
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
        if (array_key_exists("KnowledgeName",$param) and $param["KnowledgeName"] !== null) {
            $this->KnowledgeName = $param["KnowledgeName"];
        }

        if (array_key_exists("KnowledgeDescription",$param) and $param["KnowledgeDescription"] !== null) {
            $this->KnowledgeDescription = $param["KnowledgeDescription"];
        }

        if (array_key_exists("EmbeddingModel",$param) and $param["EmbeddingModel"] !== null) {
            $this->EmbeddingModel = $param["EmbeddingModel"];
        }
    }
}
