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
namespace TencentCloud\Es\V20250101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RunRerank请求参数结构体
 *
 * @method string getModelName() 获取模型名称，可选模型列表：bge-reranker-large，bge-reranker-v2-m3。
 * @method void setModelName(string $ModelName) 设置模型名称，可选模型列表：bge-reranker-large，bge-reranker-v2-m3。
 * @method string getQuery() 获取查询文本。
 * @method void setQuery(string $Query) 设置查询文本。
 * @method array getDocuments() 获取待排序的候选doc列表。
 * @method void setDocuments(array $Documents) 设置待排序的候选doc列表。
 * @method integer getTopN() 获取排序返回的top文档数量, 如果没有指定则返回全部候选doc，如果指定的top_n值大于输入的候选doc数量，返回全部doc。
 * @method void setTopN(integer $TopN) 设置排序返回的top文档数量, 如果没有指定则返回全部候选doc，如果指定的top_n值大于输入的候选doc数量，返回全部doc。
 * @method boolean getReturnDocuments() 获取返回的排序结果列表里面是否返回每一条document原文，默认值False。
 * @method void setReturnDocuments(boolean $ReturnDocuments) 设置返回的排序结果列表里面是否返回每一条document原文，默认值False。
 */
class RunRerankRequest extends AbstractModel
{
    /**
     * @var string 模型名称，可选模型列表：bge-reranker-large，bge-reranker-v2-m3。
     */
    public $ModelName;

    /**
     * @var string 查询文本。
     */
    public $Query;

    /**
     * @var array 待排序的候选doc列表。
     */
    public $Documents;

    /**
     * @var integer 排序返回的top文档数量, 如果没有指定则返回全部候选doc，如果指定的top_n值大于输入的候选doc数量，返回全部doc。
     */
    public $TopN;

    /**
     * @var boolean 返回的排序结果列表里面是否返回每一条document原文，默认值False。
     */
    public $ReturnDocuments;

    /**
     * @param string $ModelName 模型名称，可选模型列表：bge-reranker-large，bge-reranker-v2-m3。
     * @param string $Query 查询文本。
     * @param array $Documents 待排序的候选doc列表。
     * @param integer $TopN 排序返回的top文档数量, 如果没有指定则返回全部候选doc，如果指定的top_n值大于输入的候选doc数量，返回全部doc。
     * @param boolean $ReturnDocuments 返回的排序结果列表里面是否返回每一条document原文，默认值False。
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

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("Documents",$param) and $param["Documents"] !== null) {
            $this->Documents = $param["Documents"];
        }

        if (array_key_exists("TopN",$param) and $param["TopN"] !== null) {
            $this->TopN = $param["TopN"];
        }

        if (array_key_exists("ReturnDocuments",$param) and $param["ReturnDocuments"] !== null) {
            $this->ReturnDocuments = $param["ReturnDocuments"];
        }
    }
}
