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
namespace TencentCloud\Dataagent\V20250513\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 追加文件
 *
 * @method string getFileName() 获取<p>文件名称</p>
 * @method void setFileName(string $FileName) 设置<p>文件名称</p>
 * @method string getFileId() 获取<p>文件id</p>
 * @method void setFileId(string $FileId) 设置<p>文件id</p>
 * @method string getFileUrl() 获取<p>文件url</p>
 * @method void setFileUrl(string $FileUrl) 设置<p>文件url</p>
 * @method float getFileSize() 获取<p>文件大小</p>
 * @method void setFileSize(float $FileSize) 设置<p>文件大小</p>
 */
class AppendDocument extends AbstractModel
{
    /**
     * @var string <p>文件名称</p>
     */
    public $FileName;

    /**
     * @var string <p>文件id</p>
     */
    public $FileId;

    /**
     * @var string <p>文件url</p>
     */
    public $FileUrl;

    /**
     * @var float <p>文件大小</p>
     */
    public $FileSize;

    /**
     * @param string $FileName <p>文件名称</p>
     * @param string $FileId <p>文件id</p>
     * @param string $FileUrl <p>文件url</p>
     * @param float $FileSize <p>文件大小</p>
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
        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }
    }
}
