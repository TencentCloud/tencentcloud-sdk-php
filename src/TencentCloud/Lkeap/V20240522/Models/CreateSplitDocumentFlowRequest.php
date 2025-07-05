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
namespace TencentCloud\Lkeap\V20240522\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSplitDocumentFlow请求参数结构体
 *
 * @method string getFileType() 获取文件类型。

**支持的文件类型：**
- `PDF`、`DOC`、`DOCX`、`XLS`、`XLSX`、`PPT`、`PPTX`、`MD`、`TXT`、`PNG`、`JPG`、`JPEG`、`CSV`、`HTML`、`EPUB`

**支持的文件大小：**
 - `PDF` 最大300M
 - `DOCX`、`DOC`、`PPT`、`PPTX` 最大 200M
 - `TXT`、`MD` 最大10M
 - 其他 最大20M

 * @method void setFileType(string $FileType) 设置文件类型。

**支持的文件类型：**
- `PDF`、`DOC`、`DOCX`、`XLS`、`XLSX`、`PPT`、`PPTX`、`MD`、`TXT`、`PNG`、`JPG`、`JPEG`、`CSV`、`HTML`、`EPUB`

**支持的文件大小：**
 - `PDF` 最大300M
 - `DOCX`、`DOC`、`PPT`、`PPTX` 最大 200M
 - `TXT`、`MD` 最大10M
 - 其他 最大20M

 * @method string getFileUrl() 获取文件的 URL 地址。
文件存储于腾讯云的 URL 可保障更高的下载速度和稳定性，建议文件存储于腾讯云。 非腾讯云存储的 URL 速度和稳定性可能受一定影响。
参考：[腾讯云COS文档](https://cloud.tencent.com/document/product/436/7749)
 * @method void setFileUrl(string $FileUrl) 设置文件的 URL 地址。
文件存储于腾讯云的 URL 可保障更高的下载速度和稳定性，建议文件存储于腾讯云。 非腾讯云存储的 URL 速度和稳定性可能受一定影响。
参考：[腾讯云COS文档](https://cloud.tencent.com/document/product/436/7749)
 * @method string getFileName() 获取文件名，可选。
**需带文件类型后缀**，当文件名无法从传入的`FileUrl`获取时需要通过该字段来明确。
 * @method void setFileName(string $FileName) 设置文件名，可选。
**需带文件类型后缀**，当文件名无法从传入的`FileUrl`获取时需要通过该字段来明确。
 * @method string getFileBase64() 获取文件的 Base64 值。
支持的文件大小：所下载文件经Base64编码后不超过 8M。文件下载时间不超过 3 秒。
支持的图片像素：单边介于20-10000px之间。
文件的 FileUrl、FileBase64 必须提供一个，如果都提供，只使用 FileUrl。
 * @method void setFileBase64(string $FileBase64) 设置文件的 Base64 值。
支持的文件大小：所下载文件经Base64编码后不超过 8M。文件下载时间不超过 3 秒。
支持的图片像素：单边介于20-10000px之间。
文件的 FileUrl、FileBase64 必须提供一个，如果都提供，只使用 FileUrl。
 * @method integer getFileStartPageNumber() 获取文档的起始页码。
当传入文件是PDF、PDF、PPT、PPTX、DOC类型时，用来指定识别的起始页码，识别的页码包含当前值。
 * @method void setFileStartPageNumber(integer $FileStartPageNumber) 设置文档的起始页码。
当传入文件是PDF、PDF、PPT、PPTX、DOC类型时，用来指定识别的起始页码，识别的页码包含当前值。
 * @method integer getFileEndPageNumber() 获取文档的结束页码。
当传入文件是PDF、PDF、PPT、PPTX、DOC类型时，用来指定识别的结束页码，识别的页码包含当前值。
 * @method void setFileEndPageNumber(integer $FileEndPageNumber) 设置文档的结束页码。
当传入文件是PDF、PDF、PPT、PPTX、DOC类型时，用来指定识别的结束页码，识别的页码包含当前值。
 * @method CreateSplitDocumentFlowConfig getConfig() 获取文档拆分任务的配置信息。

 * @method void setConfig(CreateSplitDocumentFlowConfig $Config) 设置文档拆分任务的配置信息。
 */
class CreateSplitDocumentFlowRequest extends AbstractModel
{
    /**
     * @var string 文件类型。

**支持的文件类型：**
- `PDF`、`DOC`、`DOCX`、`XLS`、`XLSX`、`PPT`、`PPTX`、`MD`、`TXT`、`PNG`、`JPG`、`JPEG`、`CSV`、`HTML`、`EPUB`

**支持的文件大小：**
 - `PDF` 最大300M
 - `DOCX`、`DOC`、`PPT`、`PPTX` 最大 200M
 - `TXT`、`MD` 最大10M
 - 其他 最大20M

     */
    public $FileType;

    /**
     * @var string 文件的 URL 地址。
文件存储于腾讯云的 URL 可保障更高的下载速度和稳定性，建议文件存储于腾讯云。 非腾讯云存储的 URL 速度和稳定性可能受一定影响。
参考：[腾讯云COS文档](https://cloud.tencent.com/document/product/436/7749)
     */
    public $FileUrl;

    /**
     * @var string 文件名，可选。
**需带文件类型后缀**，当文件名无法从传入的`FileUrl`获取时需要通过该字段来明确。
     */
    public $FileName;

    /**
     * @var string 文件的 Base64 值。
支持的文件大小：所下载文件经Base64编码后不超过 8M。文件下载时间不超过 3 秒。
支持的图片像素：单边介于20-10000px之间。
文件的 FileUrl、FileBase64 必须提供一个，如果都提供，只使用 FileUrl。
     * @deprecated
     */
    public $FileBase64;

    /**
     * @var integer 文档的起始页码。
当传入文件是PDF、PDF、PPT、PPTX、DOC类型时，用来指定识别的起始页码，识别的页码包含当前值。
     */
    public $FileStartPageNumber;

    /**
     * @var integer 文档的结束页码。
当传入文件是PDF、PDF、PPT、PPTX、DOC类型时，用来指定识别的结束页码，识别的页码包含当前值。
     */
    public $FileEndPageNumber;

    /**
     * @var CreateSplitDocumentFlowConfig 文档拆分任务的配置信息。

     */
    public $Config;

    /**
     * @param string $FileType 文件类型。

**支持的文件类型：**
- `PDF`、`DOC`、`DOCX`、`XLS`、`XLSX`、`PPT`、`PPTX`、`MD`、`TXT`、`PNG`、`JPG`、`JPEG`、`CSV`、`HTML`、`EPUB`

**支持的文件大小：**
 - `PDF` 最大300M
 - `DOCX`、`DOC`、`PPT`、`PPTX` 最大 200M
 - `TXT`、`MD` 最大10M
 - 其他 最大20M

     * @param string $FileUrl 文件的 URL 地址。
文件存储于腾讯云的 URL 可保障更高的下载速度和稳定性，建议文件存储于腾讯云。 非腾讯云存储的 URL 速度和稳定性可能受一定影响。
参考：[腾讯云COS文档](https://cloud.tencent.com/document/product/436/7749)
     * @param string $FileName 文件名，可选。
**需带文件类型后缀**，当文件名无法从传入的`FileUrl`获取时需要通过该字段来明确。
     * @param string $FileBase64 文件的 Base64 值。
支持的文件大小：所下载文件经Base64编码后不超过 8M。文件下载时间不超过 3 秒。
支持的图片像素：单边介于20-10000px之间。
文件的 FileUrl、FileBase64 必须提供一个，如果都提供，只使用 FileUrl。
     * @param integer $FileStartPageNumber 文档的起始页码。
当传入文件是PDF、PDF、PPT、PPTX、DOC类型时，用来指定识别的起始页码，识别的页码包含当前值。
     * @param integer $FileEndPageNumber 文档的结束页码。
当传入文件是PDF、PDF、PPT、PPTX、DOC类型时，用来指定识别的结束页码，识别的页码包含当前值。
     * @param CreateSplitDocumentFlowConfig $Config 文档拆分任务的配置信息。
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

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileBase64",$param) and $param["FileBase64"] !== null) {
            $this->FileBase64 = $param["FileBase64"];
        }

        if (array_key_exists("FileStartPageNumber",$param) and $param["FileStartPageNumber"] !== null) {
            $this->FileStartPageNumber = $param["FileStartPageNumber"];
        }

        if (array_key_exists("FileEndPageNumber",$param) and $param["FileEndPageNumber"] !== null) {
            $this->FileEndPageNumber = $param["FileEndPageNumber"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new CreateSplitDocumentFlowConfig();
            $this->Config->deserialize($param["Config"]);
        }
    }
}
