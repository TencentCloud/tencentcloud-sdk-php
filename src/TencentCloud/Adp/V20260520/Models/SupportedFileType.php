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
 * @method string getDescription() 获取<p>描述信息</p>
 * @method void setDescription(string $Description) 设置<p>描述信息</p>
 * @method string getFileExt() 获取<p>文件类型（如 txt、pdf、jpg，建议用扩展名）</p>
 * @method void setFileExt(string $FileExt) 设置<p>文件类型（如 txt、pdf、jpg，建议用扩展名）</p>
 * @method string getMaxSizeBytes() 获取<p>文件大小限制（单位：字节）</p>
 * @method void setMaxSizeBytes(string $MaxSizeBytes) 设置<p>文件大小限制（单位：字节）</p>
 */
class SupportedFileType extends AbstractModel
{
    /**
     * @var string <p>描述信息</p>
     */
    public $Description;

    /**
     * @var string <p>文件类型（如 txt、pdf、jpg，建议用扩展名）</p>
     */
    public $FileExt;

    /**
     * @var string <p>文件大小限制（单位：字节）</p>
     */
    public $MaxSizeBytes;

    /**
     * @param string $Description <p>描述信息</p>
     * @param string $FileExt <p>文件类型（如 txt、pdf、jpg，建议用扩展名）</p>
     * @param string $MaxSizeBytes <p>文件大小限制（单位：字节）</p>
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
