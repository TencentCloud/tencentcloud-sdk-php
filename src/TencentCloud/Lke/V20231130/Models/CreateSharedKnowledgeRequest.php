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
 * CreateSharedKnowledge请求参数结构体
 *
 * @method string getKnowledgeName() 获取<p>共享知识库名称，字符数量范围：[1, 50]</p>
 * @method void setKnowledgeName(string $KnowledgeName) 设置<p>共享知识库名称，字符数量范围：[1, 50]</p>
 * @method string getKnowledgeDescription() 获取<p>共享知识库描述，字符数量上限2000</p>
 * @method void setKnowledgeDescription(string $KnowledgeDescription) 设置<p>共享知识库描述，字符数量上限2000</p>
 * @method string getEmbeddingModel() 获取<p>Embedding模型，字符数量上限128</p>
 * @method void setEmbeddingModel(string $EmbeddingModel) 设置<p>Embedding模型，字符数量上限128</p>
 * @method integer getKnowledgeType() 获取<p>共享知识库类型，0普通，1公众号</p>
 * @method void setKnowledgeType(integer $KnowledgeType) 设置<p>共享知识库类型，0普通，1公众号</p>
 * @method ESConfig getEsConfig() 获取<p>ES存储配置</p>
 * @method void setEsConfig(ESConfig $EsConfig) 设置<p>ES存储配置</p>
 */
class CreateSharedKnowledgeRequest extends AbstractModel
{
    /**
     * @var string <p>共享知识库名称，字符数量范围：[1, 50]</p>
     */
    public $KnowledgeName;

    /**
     * @var string <p>共享知识库描述，字符数量上限2000</p>
     */
    public $KnowledgeDescription;

    /**
     * @var string <p>Embedding模型，字符数量上限128</p>
     * @deprecated
     */
    public $EmbeddingModel;

    /**
     * @var integer <p>共享知识库类型，0普通，1公众号</p>
     */
    public $KnowledgeType;

    /**
     * @var ESConfig <p>ES存储配置</p>
     */
    public $EsConfig;

    /**
     * @param string $KnowledgeName <p>共享知识库名称，字符数量范围：[1, 50]</p>
     * @param string $KnowledgeDescription <p>共享知识库描述，字符数量上限2000</p>
     * @param string $EmbeddingModel <p>Embedding模型，字符数量上限128</p>
     * @param integer $KnowledgeType <p>共享知识库类型，0普通，1公众号</p>
     * @param ESConfig $EsConfig <p>ES存储配置</p>
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

        if (array_key_exists("KnowledgeType",$param) and $param["KnowledgeType"] !== null) {
            $this->KnowledgeType = $param["KnowledgeType"];
        }

        if (array_key_exists("EsConfig",$param) and $param["EsConfig"] !== null) {
            $this->EsConfig = new ESConfig();
            $this->EsConfig->deserialize($param["EsConfig"]);
        }
    }
}
