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
 * ChunkDocument请求参数结构体
 *
 * @method ChunkDocument getDocument() 获取切片文件信息。
 * @method void setDocument(ChunkDocument $Document) 设置切片文件信息。
 * @method string getModelName() 获取模型名称，可选模型列表：doc-chunk。
 * @method void setModelName(string $ModelName) 设置模型名称，可选模型列表：doc-chunk。
 * @method ChunkConfig getConfig() 获取文件切片配置。
 * @method void setConfig(ChunkConfig $Config) 设置文件切片配置。
 */
class ChunkDocumentRequest extends AbstractModel
{
    /**
     * @var ChunkDocument 切片文件信息。
     */
    public $Document;

    /**
     * @var string 模型名称，可选模型列表：doc-chunk。
     */
    public $ModelName;

    /**
     * @var ChunkConfig 文件切片配置。
     */
    public $Config;

    /**
     * @param ChunkDocument $Document 切片文件信息。
     * @param string $ModelName 模型名称，可选模型列表：doc-chunk。
     * @param ChunkConfig $Config 文件切片配置。
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
            $this->Document = new ChunkDocument();
            $this->Document->deserialize($param["Document"]);
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new ChunkConfig();
            $this->Config->deserialize($param["Config"]);
        }
    }
}
