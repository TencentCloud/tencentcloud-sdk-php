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
namespace TencentCloud\Lkeap\V20240522\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 检索结果的元数据
 *
 * @method string getType() 获取结果的类型。
- `DOC`：文档
- `QA`：问答对
 * @method void setType(string $Type) 设置结果的类型。
- `DOC`：文档
- `QA`：问答对
 * @method string getResultSource() 获取检索结果的来源。
- `SEMANTIC`：从语义检索中得到的结果
- `FULL_TEXT`：从全文检索中得到的结果
 * @method void setResultSource(string $ResultSource) 设置检索结果的来源。
- `SEMANTIC`：从语义检索中得到的结果
- `FULL_TEXT`：从全文检索中得到的结果
 * @method array getChunkPageNumbers() 获取切片在文档中的页码，仅部分文档支持
 * @method void setChunkPageNumbers(array $ChunkPageNumbers) 设置切片在文档中的页码，仅部分文档支持
 */
class RetrievalRecordMetadata extends AbstractModel
{
    /**
     * @var string 结果的类型。
- `DOC`：文档
- `QA`：问答对
     */
    public $Type;

    /**
     * @var string 检索结果的来源。
- `SEMANTIC`：从语义检索中得到的结果
- `FULL_TEXT`：从全文检索中得到的结果
     */
    public $ResultSource;

    /**
     * @var array 切片在文档中的页码，仅部分文档支持
     */
    public $ChunkPageNumbers;

    /**
     * @param string $Type 结果的类型。
- `DOC`：文档
- `QA`：问答对
     * @param string $ResultSource 检索结果的来源。
- `SEMANTIC`：从语义检索中得到的结果
- `FULL_TEXT`：从全文检索中得到的结果
     * @param array $ChunkPageNumbers 切片在文档中的页码，仅部分文档支持
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ResultSource",$param) and $param["ResultSource"] !== null) {
            $this->ResultSource = $param["ResultSource"];
        }

        if (array_key_exists("ChunkPageNumbers",$param) and $param["ChunkPageNumbers"] !== null) {
            $this->ChunkPageNumbers = $param["ChunkPageNumbers"];
        }
    }
}
