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
 * 支持的文件类型
 *
 * @method string getDescription() 获取文件类型描述(如"文本文档")
 * @method void setDescription(string $Description) 设置文件类型描述(如"文本文档")
 * @method string getFileExt() 获取文件类型(如 txt、pdf、jpg, 建议用扩展名)
 * @method void setFileExt(string $FileExt) 设置文件类型(如 txt、pdf、jpg, 建议用扩展名)
 * @method string getMaxSizeBytes() 获取文件大小限制(单位: 字节)
 * @method void setMaxSizeBytes(string $MaxSizeBytes) 设置文件大小限制(单位: 字节)
 */
class SupportedFileType extends AbstractModel
{
    /**
     * @var string 文件类型描述(如"文本文档")
     */
    public $Description;

    /**
     * @var string 文件类型(如 txt、pdf、jpg, 建议用扩展名)
     */
    public $FileExt;

    /**
     * @var string 文件大小限制(单位: 字节)
     */
    public $MaxSizeBytes;

    /**
     * @param string $Description 文件类型描述(如"文本文档")
     * @param string $FileExt 文件类型(如 txt、pdf、jpg, 建议用扩展名)
     * @param string $MaxSizeBytes 文件大小限制(单位: 字节)
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
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("FileExt",$param) and $param["FileExt"] !== null) {
            $this->FileExt = $param["FileExt"];
        }

        if (array_key_exists("MaxSizeBytes",$param) and $param["MaxSizeBytes"] !== null) {
            $this->MaxSizeBytes = $param["MaxSizeBytes"];
        }
    }
}
