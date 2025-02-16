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
 * UploadDocRealtime请求参数结构体
 *
 * @method string getKnowledgeBaseId() 获取知识库ID
 * @method void setKnowledgeBaseId(string $KnowledgeBaseId) 设置知识库ID
 * @method string getFileName() 获取文件名，可选。
**需带文件类型后缀**，当文件名无法从传入的`FileUrl`获取时需要通过该字段来明确。
 * @method void setFileName(string $FileName) 设置文件名，可选。
**需带文件类型后缀**，当文件名无法从传入的`FileUrl`获取时需要通过该字段来明确。
 * @method string getFileType() 获取文件类型。
**支持的文件类型：**
- `PDF`、`DOC`、`DOCX`、`XLS`、`XLSX`、`PPT`、`PPTX`、`MD`、`TXT`、`PNG`、`JPG`、`JPEG`、`CSV`、`HTML`、`EPUB`

**支持的文件大小：**
 - `PDF`、`DOCX`、`DOC`、`PPT`、`PPTX` 最大 200M 
 - `TXT`、`MD` 最大10M 
 - 其他 最大20M
 * @method void setFileType(string $FileType) 设置文件类型。
**支持的文件类型：**
- `PDF`、`DOC`、`DOCX`、`XLS`、`XLSX`、`PPT`、`PPTX`、`MD`、`TXT`、`PNG`、`JPG`、`JPEG`、`CSV`、`HTML`、`EPUB`

**支持的文件大小：**
 - `PDF`、`DOCX`、`DOC`、`PPT`、`PPTX` 最大 200M 
 - `TXT`、`MD` 最大10M 
 - 其他 最大20M
 * @method string getFileUrl() 获取文件的 URL 地址。
文件存储于腾讯云的 URL 可保障更高的下载速度和稳定性，建议文件存储于腾讯云。 非腾讯云存储的 URL 速度和稳定性可能受一定影响。
参考：[腾讯云COS文档](https://cloud.tencent.com/document/product/436/7749)
 * @method void setFileUrl(string $FileUrl) 设置文件的 URL 地址。
文件存储于腾讯云的 URL 可保障更高的下载速度和稳定性，建议文件存储于腾讯云。 非腾讯云存储的 URL 速度和稳定性可能受一定影响。
参考：[腾讯云COS文档](https://cloud.tencent.com/document/product/436/7749)
 * @method integer getExpireTime() 获取过期时间的秒数，最长24小时，默认24小时
 * @method void setExpireTime(integer $ExpireTime) 设置过期时间的秒数，最长24小时，默认24小时
 */
class UploadDocRealtimeRequest extends AbstractModel
{
    /**
     * @var string 知识库ID
     */
    public $KnowledgeBaseId;

    /**
     * @var string 文件名，可选。
**需带文件类型后缀**，当文件名无法从传入的`FileUrl`获取时需要通过该字段来明确。
     */
    public $FileName;

    /**
     * @var string 文件类型。
**支持的文件类型：**
- `PDF`、`DOC`、`DOCX`、`XLS`、`XLSX`、`PPT`、`PPTX`、`MD`、`TXT`、`PNG`、`JPG`、`JPEG`、`CSV`、`HTML`、`EPUB`

**支持的文件大小：**
 - `PDF`、`DOCX`、`DOC`、`PPT`、`PPTX` 最大 200M 
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
     * @var integer 过期时间的秒数，最长24小时，默认24小时
     */
    public $ExpireTime;

    /**
     * @param string $KnowledgeBaseId 知识库ID
     * @param string $FileName 文件名，可选。
**需带文件类型后缀**，当文件名无法从传入的`FileUrl`获取时需要通过该字段来明确。
     * @param string $FileType 文件类型。
**支持的文件类型：**
- `PDF`、`DOC`、`DOCX`、`XLS`、`XLSX`、`PPT`、`PPTX`、`MD`、`TXT`、`PNG`、`JPG`、`JPEG`、`CSV`、`HTML`、`EPUB`

**支持的文件大小：**
 - `PDF`、`DOCX`、`DOC`、`PPT`、`PPTX` 最大 200M 
 - `TXT`、`MD` 最大10M 
 - 其他 最大20M
     * @param string $FileUrl 文件的 URL 地址。
文件存储于腾讯云的 URL 可保障更高的下载速度和稳定性，建议文件存储于腾讯云。 非腾讯云存储的 URL 速度和稳定性可能受一定影响。
参考：[腾讯云COS文档](https://cloud.tencent.com/document/product/436/7749)
     * @param integer $ExpireTime 过期时间的秒数，最长24小时，默认24小时
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
        if (array_key_exists("KnowledgeBaseId",$param) and $param["KnowledgeBaseId"] !== null) {
            $this->KnowledgeBaseId = $param["KnowledgeBaseId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
