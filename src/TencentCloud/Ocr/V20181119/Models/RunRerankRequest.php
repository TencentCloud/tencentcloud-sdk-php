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
 * RunRerank请求参数结构体
 *
 * @method string getModel() 获取<p>选择模型。<br>0：Rerank-2b<br>1：Rerank-0.6b</p>
 * @method void setModel(string $Model) 设置<p>选择模型。<br>0：Rerank-2b<br>1：Rerank-0.6b</p>
 * @method string getQuery() 获取<p>查询内容。用于匹配的query，即用户检索意图。</p>
 * @method void setQuery(string $Query) 设置<p>查询内容。用于匹配的query，即用户检索意图。</p>
 * @method array getDocs() 获取<p>文档内容列表。</p>
 * @method void setDocs(array $Docs) 设置<p>文档内容列表。</p>
 */
class RunRerankRequest extends AbstractModel
{
    /**
     * @var string <p>选择模型。<br>0：Rerank-2b<br>1：Rerank-0.6b</p>
     */
    public $Model;

    /**
     * @var string <p>查询内容。用于匹配的query，即用户检索意图。</p>
     */
    public $Query;

    /**
     * @var array <p>文档内容列表。</p>
     */
    public $Docs;

    /**
     * @param string $Model <p>选择模型。<br>0：Rerank-2b<br>1：Rerank-0.6b</p>
     * @param string $Query <p>查询内容。用于匹配的query，即用户检索意图。</p>
     * @param array $Docs <p>文档内容列表。</p>
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

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("Docs",$param) and $param["Docs"] !== null) {
            $this->Docs = $param["Docs"];
        }
    }
}
