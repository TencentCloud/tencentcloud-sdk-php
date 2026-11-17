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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取文件内容响应
 *
 * @method string getFileId() 获取文件ID；按 FilePath 查询时回显解析结果，便于调用方缓存
 * @method void setFileId(string $FileId) 设置文件ID；按 FilePath 查询时回显解析结果，便于调用方缓存
 * @method string getFileName() 获取文件名，不含路径
 * @method void setFileName(string $FileName) 设置文件名，不含路径
 * @method string getFilePath() 获取文件全路径
 * @method void setFilePath(string $FilePath) 设置文件全路径
 * @method string getFileType() 获取文件类型，参考 ListEntityTypeMetas 返回值为准
 * @method void setFileType(string $FileType) 设置文件类型，参考 ListEntityTypeMetas 返回值为准
 * @method string getFileSize() 获取文件大小，字节
 * @method void setFileSize(string $FileSize) 设置文件大小，字节
 * @method string getContent() 获取文件内容，base64 编码
 * @method void setContent(string $Content) 设置文件内容，base64 编码
 * @method string getContentEncoding() 获取内容编码方式，当前固定 base64
 * @method void setContentEncoding(string $ContentEncoding) 设置内容编码方式，当前固定 base64
 */
class GetFileContentRsp extends AbstractModel
{
    /**
     * @var string 文件ID；按 FilePath 查询时回显解析结果，便于调用方缓存
     */
    public $FileId;

    /**
     * @var string 文件名，不含路径
     */
    public $FileName;

    /**
     * @var string 文件全路径
     */
    public $FilePath;

    /**
     * @var string 文件类型，参考 ListEntityTypeMetas 返回值为准
     */
    public $FileType;

    /**
     * @var string 文件大小，字节
     */
    public $FileSize;

    /**
     * @var string 文件内容，base64 编码
     */
    public $Content;

    /**
     * @var string 内容编码方式，当前固定 base64
     */
    public $ContentEncoding;

    /**
     * @param string $FileId 文件ID；按 FilePath 查询时回显解析结果，便于调用方缓存
     * @param string $FileName 文件名，不含路径
     * @param string $FilePath 文件全路径
     * @param string $FileType 文件类型，参考 ListEntityTypeMetas 返回值为准
     * @param string $FileSize 文件大小，字节
     * @param string $Content 文件内容，base64 编码
     * @param string $ContentEncoding 内容编码方式，当前固定 base64
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("ContentEncoding",$param) and $param["ContentEncoding"] !== null) {
            $this->ContentEncoding = $param["ContentEncoding"];
        }
    }
}
