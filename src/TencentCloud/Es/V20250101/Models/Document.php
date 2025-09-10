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
 * 文档信息
 *
 * @method string getFileType() 获取支持的文件类型：PDF、DOC、DOCX、PPT、PPTX、MD、TXT、XLS、
XLSX、CSV、PNG、JPG、JPEG、BMP、GIF、WEBP、HEIC、EPS、ICNS、
IM、PCX、PPM、TIFF、XBM、HEIF、JP2

文档解析支持的文件大小：
-PDF、DOC、DOCX、PPT、PPTX支持100M
-MD、TXT、XLS、XLSX、CSV支特10M
-其他支持20M

文本切片支持的文件大小：
-PDF最大300M
-D0CX、D0C、PPT、PPTX最大200M
-TXT、MD最大10M
-其他最大20M
 * @method void setFileType(string $FileType) 设置支持的文件类型：PDF、DOC、DOCX、PPT、PPTX、MD、TXT、XLS、
XLSX、CSV、PNG、JPG、JPEG、BMP、GIF、WEBP、HEIC、EPS、ICNS、
IM、PCX、PPM、TIFF、XBM、HEIF、JP2

文档解析支持的文件大小：
-PDF、DOC、DOCX、PPT、PPTX支持100M
-MD、TXT、XLS、XLSX、CSV支特10M
-其他支持20M

文本切片支持的文件大小：
-PDF最大300M
-D0CX、D0C、PPT、PPTX最大200M
-TXT、MD最大10M
-其他最大20M
 * @method string getFileUrl() 获取文件存储于腾讯云的 URL 可保障更高的下载速度和稳定性，使用腾讯云COS 文件地址。
 * @method void setFileUrl(string $FileUrl) 设置文件存储于腾讯云的 URL 可保障更高的下载速度和稳定性，使用腾讯云COS 文件地址。
 * @method string getFileContent() 获取文件的 base64 值，携带 MineType前缀信息。编码后的后的文件不超过 10M。
支持的文件大小：所下载文件经Base64编码后不超过 8M。文件下载时间不超过3秒。
支持的图片像素：单边介于20-10000px之间。
 * @method void setFileContent(string $FileContent) 设置文件的 base64 值，携带 MineType前缀信息。编码后的后的文件不超过 10M。
支持的文件大小：所下载文件经Base64编码后不超过 8M。文件下载时间不超过3秒。
支持的图片像素：单边介于20-10000px之间。
 * @method string getFileName() 获取文件名称，当使用 base64上传的时候使用。
 * @method void setFileName(string $FileName) 设置文件名称，当使用 base64上传的时候使用。
 * @method integer getFileStartPageNumber() 获取文档的起始页码
 * @method void setFileStartPageNumber(integer $FileStartPageNumber) 设置文档的起始页码
 * @method integer getFileEndPageNumber() 获取文档的结束页码
 * @method void setFileEndPageNumber(integer $FileEndPageNumber) 设置文档的结束页码
 */
class Document extends AbstractModel
{
    /**
     * @var string 支持的文件类型：PDF、DOC、DOCX、PPT、PPTX、MD、TXT、XLS、
XLSX、CSV、PNG、JPG、JPEG、BMP、GIF、WEBP、HEIC、EPS、ICNS、
IM、PCX、PPM、TIFF、XBM、HEIF、JP2

文档解析支持的文件大小：
-PDF、DOC、DOCX、PPT、PPTX支持100M
-MD、TXT、XLS、XLSX、CSV支特10M
-其他支持20M

文本切片支持的文件大小：
-PDF最大300M
-D0CX、D0C、PPT、PPTX最大200M
-TXT、MD最大10M
-其他最大20M
     */
    public $FileType;

    /**
     * @var string 文件存储于腾讯云的 URL 可保障更高的下载速度和稳定性，使用腾讯云COS 文件地址。
     */
    public $FileUrl;

    /**
     * @var string 文件的 base64 值，携带 MineType前缀信息。编码后的后的文件不超过 10M。
支持的文件大小：所下载文件经Base64编码后不超过 8M。文件下载时间不超过3秒。
支持的图片像素：单边介于20-10000px之间。
     */
    public $FileContent;

    /**
     * @var string 文件名称，当使用 base64上传的时候使用。
     */
    public $FileName;

    /**
     * @var integer 文档的起始页码
     */
    public $FileStartPageNumber;

    /**
     * @var integer 文档的结束页码
     */
    public $FileEndPageNumber;

    /**
     * @param string $FileType 支持的文件类型：PDF、DOC、DOCX、PPT、PPTX、MD、TXT、XLS、
XLSX、CSV、PNG、JPG、JPEG、BMP、GIF、WEBP、HEIC、EPS、ICNS、
IM、PCX、PPM、TIFF、XBM、HEIF、JP2

文档解析支持的文件大小：
-PDF、DOC、DOCX、PPT、PPTX支持100M
-MD、TXT、XLS、XLSX、CSV支特10M
-其他支持20M

文本切片支持的文件大小：
-PDF最大300M
-D0CX、D0C、PPT、PPTX最大200M
-TXT、MD最大10M
-其他最大20M
     * @param string $FileUrl 文件存储于腾讯云的 URL 可保障更高的下载速度和稳定性，使用腾讯云COS 文件地址。
     * @param string $FileContent 文件的 base64 值，携带 MineType前缀信息。编码后的后的文件不超过 10M。
支持的文件大小：所下载文件经Base64编码后不超过 8M。文件下载时间不超过3秒。
支持的图片像素：单边介于20-10000px之间。
     * @param string $FileName 文件名称，当使用 base64上传的时候使用。
     * @param integer $FileStartPageNumber 文档的起始页码
     * @param integer $FileEndPageNumber 文档的结束页码
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

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("FileContent",$param) and $param["FileContent"] !== null) {
            $this->FileContent = $param["FileContent"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileStartPageNumber",$param) and $param["FileStartPageNumber"] !== null) {
            $this->FileStartPageNumber = $param["FileStartPageNumber"];
        }

        if (array_key_exists("FileEndPageNumber",$param) and $param["FileEndPageNumber"] !== null) {
            $this->FileEndPageNumber = $param["FileEndPageNumber"];
        }
    }
}
