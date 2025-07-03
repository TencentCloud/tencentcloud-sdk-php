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
namespace TencentCloud\Es\V20250101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文档信息
 *
 * @method string getFileType() 获取文件类型。
支持的文件类型：PDF、DOC、DOCX、PPT、PPTX、MD、TXT、XLS、XLSX、CSV、PNG、JPG、JPEG、BMP、GIF、WEBP、HEIC、EPS、ICNS、IM、PCX、PPM、TIFF、XBM、HEIF、JP2
支持的文件大小：
- PDF、DOC、DOCX、PPT、PPTX 支持100M
- MD、TXT、XLS、XLSX、CSV 支持10M
- 其他支持20M
 * @method void setFileType(string $FileType) 设置文件类型。
支持的文件类型：PDF、DOC、DOCX、PPT、PPTX、MD、TXT、XLS、XLSX、CSV、PNG、JPG、JPEG、BMP、GIF、WEBP、HEIC、EPS、ICNS、IM、PCX、PPM、TIFF、XBM、HEIF、JP2
支持的文件大小：
- PDF、DOC、DOCX、PPT、PPTX 支持100M
- MD、TXT、XLS、XLSX、CSV 支持10M
- 其他支持20M
 * @method string getFileUrl() 获取文件存储于腾讯云的 URL 可保障更高的下载速度和稳定性，使用腾讯云COS 文件地址。
 * @method void setFileUrl(string $FileUrl) 设置文件存储于腾讯云的 URL 可保障更高的下载速度和稳定性，使用腾讯云COS 文件地址。
 * @method string getFileContent() 获取文件的 base64 值，携带 MineType前缀信息。编码后的后的文件不超过 10M。
支持的文件大小：所下载文件经Base64编码后不超过 8M。文件下载时间不超过3秒。
支持的图片像素：单边介于20-10000px之间。
 * @method void setFileContent(string $FileContent) 设置文件的 base64 值，携带 MineType前缀信息。编码后的后的文件不超过 10M。
支持的文件大小：所下载文件经Base64编码后不超过 8M。文件下载时间不超过3秒。
支持的图片像素：单边介于20-10000px之间。
 * @method DocumentParseConfig getDocumentParseConfig() 获取文档解析配置
 * @method void setDocumentParseConfig(DocumentParseConfig $DocumentParseConfig) 设置文档解析配置
 * @method integer getFileStartPageNumber() 获取文档的起始页码
 * @method void setFileStartPageNumber(integer $FileStartPageNumber) 设置文档的起始页码
 * @method integer getFileEndPageNumber() 获取文档的结束页码
 * @method void setFileEndPageNumber(integer $FileEndPageNumber) 设置文档的结束页码
 */
class ParseDocument extends AbstractModel
{
    /**
     * @var string 文件类型。
支持的文件类型：PDF、DOC、DOCX、PPT、PPTX、MD、TXT、XLS、XLSX、CSV、PNG、JPG、JPEG、BMP、GIF、WEBP、HEIC、EPS、ICNS、IM、PCX、PPM、TIFF、XBM、HEIF、JP2
支持的文件大小：
- PDF、DOC、DOCX、PPT、PPTX 支持100M
- MD、TXT、XLS、XLSX、CSV 支持10M
- 其他支持20M
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
     * @var DocumentParseConfig 文档解析配置
     */
    public $DocumentParseConfig;

    /**
     * @var integer 文档的起始页码
     */
    public $FileStartPageNumber;

    /**
     * @var integer 文档的结束页码
     */
    public $FileEndPageNumber;

    /**
     * @param string $FileType 文件类型。
支持的文件类型：PDF、DOC、DOCX、PPT、PPTX、MD、TXT、XLS、XLSX、CSV、PNG、JPG、JPEG、BMP、GIF、WEBP、HEIC、EPS、ICNS、IM、PCX、PPM、TIFF、XBM、HEIF、JP2
支持的文件大小：
- PDF、DOC、DOCX、PPT、PPTX 支持100M
- MD、TXT、XLS、XLSX、CSV 支持10M
- 其他支持20M
     * @param string $FileUrl 文件存储于腾讯云的 URL 可保障更高的下载速度和稳定性，使用腾讯云COS 文件地址。
     * @param string $FileContent 文件的 base64 值，携带 MineType前缀信息。编码后的后的文件不超过 10M。
支持的文件大小：所下载文件经Base64编码后不超过 8M。文件下载时间不超过3秒。
支持的图片像素：单边介于20-10000px之间。
     * @param DocumentParseConfig $DocumentParseConfig 文档解析配置
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

        if (array_key_exists("DocumentParseConfig",$param) and $param["DocumentParseConfig"] !== null) {
            $this->DocumentParseConfig = new DocumentParseConfig();
            $this->DocumentParseConfig->deserialize($param["DocumentParseConfig"]);
        }

        if (array_key_exists("FileStartPageNumber",$param) and $param["FileStartPageNumber"] !== null) {
            $this->FileStartPageNumber = $param["FileStartPageNumber"];
        }

        if (array_key_exists("FileEndPageNumber",$param) and $param["FileEndPageNumber"] !== null) {
            $this->FileEndPageNumber = $param["FileEndPageNumber"];
        }
    }
}
