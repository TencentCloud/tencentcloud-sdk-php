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
 * ParseDocument请求参数结构体
 *
 * @method ParseDocument getDocument() 获取文件信息
 * @method void setDocument(ParseDocument $Document) 设置文件信息
 * @method string getModelName() 获取模型名称，doc-llm。
 * @method void setModelName(string $ModelName) 设置模型名称，doc-llm。
 */
class ParseDocumentRequest extends AbstractModel
{
    /**
     * @var ParseDocument 文件信息
     */
    public $Document;

    /**
     * @var string 模型名称，doc-llm。
     */
    public $ModelName;

    /**
     * @param ParseDocument $Document 文件信息
     * @param string $ModelName 模型名称，doc-llm。
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
        if (array_key_exists("Document",$param) and $param["Document"] !== null) {
            $this->Document = new ParseDocument();
            $this->Document->deserialize($param["Document"]);
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }
    }
}
