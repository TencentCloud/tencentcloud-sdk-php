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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SubmitMultimodalDocParseJob请求参数结构体
 *
 * @method integer getFileType() 获取<p>支持解析的文件类型。取值：</p><ul><li>1：PDF 文档</li><li>2：Word 文档（.doc/.docx）</li><li>3：PPT 演示文稿（.ppt/.pptx）</li><li>4：Excel 表格（.xls/.xlsx）</li><li>5：Markdown 文档（.md）</li><li>6：纯文本文件（.txt）</li><li>7：图片文件（.png/.jpg/.jpeg 等）</li><li>8：WPS 文档<br>支持的文件大小：PDF/WORD/PPT 支持 150M 且 300 页。</li></ul>
 * @method void setFileType(integer $FileType) 设置<p>支持解析的文件类型。取值：</p><ul><li>1：PDF 文档</li><li>2：Word 文档（.doc/.docx）</li><li>3：PPT 演示文稿（.ppt/.pptx）</li><li>4：Excel 表格（.xls/.xlsx）</li><li>5：Markdown 文档（.md）</li><li>6：纯文本文件（.txt）</li><li>7：图片文件（.png/.jpg/.jpeg 等）</li><li>8：WPS 文档<br>支持的文件大小：PDF/WORD/PPT 支持 150M 且 300 页。</li></ul>
 * @method string getFileUrl() 获取<p>文件的 Url 地址，支持 FileType 参数对应的文件格式及大小。文件下载时间不超过 3 秒。文件存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议文件存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。</p>
 * @method void setFileUrl(string $FileUrl) 设置<p>文件的 Url 地址，支持 FileType 参数对应的文件格式及大小。文件下载时间不超过 3 秒。文件存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议文件存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。</p>
 * @method string getFileBase64() 获取<p>文件的 Base64 值。支持 FileType 参数对应的文件格式，支持的文件大小不超过 8M。文件下载时间不超过 3 秒。<br>文件的 FileUrl、FileBase64 必须提供一个，如果都提供，只使用 FileUrl。</p>
 * @method void setFileBase64(string $FileBase64) 设置<p>文件的 Base64 值。支持 FileType 参数对应的文件格式，支持的文件大小不超过 8M。文件下载时间不超过 3 秒。<br>文件的 FileUrl、FileBase64 必须提供一个，如果都提供，只使用 FileUrl。</p>
 * @method integer getResultType() 获取<p>输出格式。<br>1：json格式<br>2：markdown格式<br>3：xml格式<br>9：json+markdown+xml格式</p>
 * @method void setResultType(integer $ResultType) 设置<p>输出格式。<br>1：json格式<br>2：markdown格式<br>3：xml格式<br>9：json+markdown+xml格式</p>
 * @method boolean getEnableSubImg() 获取<p>是否开启子图提取，默认为 false。</p>
 * @method void setEnableSubImg(boolean $EnableSubImg) 设置<p>是否开启子图提取，默认为 false。</p>
 * @method integer getFileStartPageNumber() 获取<p>文档的起始页码。用来指定识别的起始页码，识别的页码包含当前值，不填时默认从文档第一页开始解析。本参数与 FileEndPageNumber 可分开填写，也可只填其中一个。</p>
 * @method void setFileStartPageNumber(integer $FileStartPageNumber) 设置<p>文档的起始页码。用来指定识别的起始页码，识别的页码包含当前值，不填时默认从文档第一页开始解析。本参数与 FileEndPageNumber 可分开填写，也可只填其中一个。</p>
 * @method integer getFileEndPageNumber() 获取<p>文档的结束页码。用来指定识别的结束页码，识别的页码包含当前值，不填时默认解析到文档最后一页。本参数与 FileStartPageNumber 可分开填写，也可只填其中一个。</p>
 * @method void setFileEndPageNumber(integer $FileEndPageNumber) 设置<p>文档的结束页码。用来指定识别的结束页码，识别的页码包含当前值，不填时默认解析到文档最后一页。本参数与 FileStartPageNumber 可分开填写，也可只填其中一个。</p>
 * @method integer getTaskType() 获取<p>任务类型，默认为 0。取值：</p><ul><li>0：默认</li><li>1：Free OCR</li><li>2：OCR</li><li>3：表格识别</li><li>4：代码识别</li></ul>
 * @method void setTaskType(integer $TaskType) 设置<p>任务类型，默认为 0。取值：</p><ul><li>0：默认</li><li>1：Free OCR</li><li>2：OCR</li><li>3：表格识别</li><li>4：代码识别</li></ul>
 */
class SubmitMultimodalDocParseJobRequest extends AbstractModel
{
    /**
     * @var integer <p>支持解析的文件类型。取值：</p><ul><li>1：PDF 文档</li><li>2：Word 文档（.doc/.docx）</li><li>3：PPT 演示文稿（.ppt/.pptx）</li><li>4：Excel 表格（.xls/.xlsx）</li><li>5：Markdown 文档（.md）</li><li>6：纯文本文件（.txt）</li><li>7：图片文件（.png/.jpg/.jpeg 等）</li><li>8：WPS 文档<br>支持的文件大小：PDF/WORD/PPT 支持 150M 且 300 页。</li></ul>
     */
    public $FileType;

    /**
     * @var string <p>文件的 Url 地址，支持 FileType 参数对应的文件格式及大小。文件下载时间不超过 3 秒。文件存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议文件存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。</p>
     */
    public $FileUrl;

    /**
     * @var string <p>文件的 Base64 值。支持 FileType 参数对应的文件格式，支持的文件大小不超过 8M。文件下载时间不超过 3 秒。<br>文件的 FileUrl、FileBase64 必须提供一个，如果都提供，只使用 FileUrl。</p>
     */
    public $FileBase64;

    /**
     * @var integer <p>输出格式。<br>1：json格式<br>2：markdown格式<br>3：xml格式<br>9：json+markdown+xml格式</p>
     */
    public $ResultType;

    /**
     * @var boolean <p>是否开启子图提取，默认为 false。</p>
     */
    public $EnableSubImg;

    /**
     * @var integer <p>文档的起始页码。用来指定识别的起始页码，识别的页码包含当前值，不填时默认从文档第一页开始解析。本参数与 FileEndPageNumber 可分开填写，也可只填其中一个。</p>
     */
    public $FileStartPageNumber;

    /**
     * @var integer <p>文档的结束页码。用来指定识别的结束页码，识别的页码包含当前值，不填时默认解析到文档最后一页。本参数与 FileStartPageNumber 可分开填写，也可只填其中一个。</p>
     */
    public $FileEndPageNumber;

    /**
     * @var integer <p>任务类型，默认为 0。取值：</p><ul><li>0：默认</li><li>1：Free OCR</li><li>2：OCR</li><li>3：表格识别</li><li>4：代码识别</li></ul>
     */
    public $TaskType;

    /**
     * @param integer $FileType <p>支持解析的文件类型。取值：</p><ul><li>1：PDF 文档</li><li>2：Word 文档（.doc/.docx）</li><li>3：PPT 演示文稿（.ppt/.pptx）</li><li>4：Excel 表格（.xls/.xlsx）</li><li>5：Markdown 文档（.md）</li><li>6：纯文本文件（.txt）</li><li>7：图片文件（.png/.jpg/.jpeg 等）</li><li>8：WPS 文档<br>支持的文件大小：PDF/WORD/PPT 支持 150M 且 300 页。</li></ul>
     * @param string $FileUrl <p>文件的 Url 地址，支持 FileType 参数对应的文件格式及大小。文件下载时间不超过 3 秒。文件存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议文件存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。</p>
     * @param string $FileBase64 <p>文件的 Base64 值。支持 FileType 参数对应的文件格式，支持的文件大小不超过 8M。文件下载时间不超过 3 秒。<br>文件的 FileUrl、FileBase64 必须提供一个，如果都提供，只使用 FileUrl。</p>
     * @param integer $ResultType <p>输出格式。<br>1：json格式<br>2：markdown格式<br>3：xml格式<br>9：json+markdown+xml格式</p>
     * @param boolean $EnableSubImg <p>是否开启子图提取，默认为 false。</p>
     * @param integer $FileStartPageNumber <p>文档的起始页码。用来指定识别的起始页码，识别的页码包含当前值，不填时默认从文档第一页开始解析。本参数与 FileEndPageNumber 可分开填写，也可只填其中一个。</p>
     * @param integer $FileEndPageNumber <p>文档的结束页码。用来指定识别的结束页码，识别的页码包含当前值，不填时默认解析到文档最后一页。本参数与 FileStartPageNumber 可分开填写，也可只填其中一个。</p>
     * @param integer $TaskType <p>任务类型，默认为 0。取值：</p><ul><li>0：默认</li><li>1：Free OCR</li><li>2：OCR</li><li>3：表格识别</li><li>4：代码识别</li></ul>
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

        if (array_key_exists("FileBase64",$param) and $param["FileBase64"] !== null) {
            $this->FileBase64 = $param["FileBase64"];
        }

        if (array_key_exists("ResultType",$param) and $param["ResultType"] !== null) {
            $this->ResultType = $param["ResultType"];
        }

        if (array_key_exists("EnableSubImg",$param) and $param["EnableSubImg"] !== null) {
            $this->EnableSubImg = $param["EnableSubImg"];
        }

        if (array_key_exists("FileStartPageNumber",$param) and $param["FileStartPageNumber"] !== null) {
            $this->FileStartPageNumber = $param["FileStartPageNumber"];
        }

        if (array_key_exists("FileEndPageNumber",$param) and $param["FileEndPageNumber"] !== null) {
            $this->FileEndPageNumber = $param["FileEndPageNumber"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }
    }
}
