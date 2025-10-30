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
 * 切片文档信息
 *
 * @method string getFileType() 获取文件类型，支持 MD，TXT 格式。
 * @method void setFileType(string $FileType) 设置文件类型，支持 MD，TXT 格式。
 * @method string getFileContent() 获取文本原文，使用字符串格式输入。
 * @method void setFileContent(string $FileContent) 设置文本原文，使用字符串格式输入。
 */
class ChunkDocument extends AbstractModel
{
    /**
     * @var string 文件类型，支持 MD，TXT 格式。
     */
    public $FileType;

    /**
     * @var string 文本原文，使用字符串格式输入。
     */
    public $FileContent;

    /**
     * @param string $FileType 文件类型，支持 MD，TXT 格式。
     * @param string $FileContent 文本原文，使用字符串格式输入。
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
        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("FileContent",$param) and $param["FileContent"] !== null) {
            $this->FileContent = $param["FileContent"];
        }
    }
}
