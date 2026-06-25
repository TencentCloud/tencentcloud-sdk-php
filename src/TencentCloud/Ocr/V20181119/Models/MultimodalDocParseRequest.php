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
 * MultimodalDocParse请求参数结构体
 *
 * @method string getFileUrl() 获取<p>文件的 Url 地址，支持FileType参数对应的文件格式及大小。文件下载时间不超过3秒。文件存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议文件存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。</p>
 * @method void setFileUrl(string $FileUrl) 设置<p>文件的 Url 地址，支持FileType参数对应的文件格式及大小。文件下载时间不超过3秒。文件存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议文件存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。</p>
 * @method integer getFileType() 获取<p>支持解析的文件类型。</p><p>1：PDF 文档；</p><p>2：Word 文档（.doc / .docx）；</p><p>3：PPT 演示文稿（.ppt / .pptx）；</p><p>4：Excel 表格（.xls / .xlsx）；</p><p>5：Markdown 文档（.md）；</p><p>6：纯文本文件（.txt）；</p><p>7：图片文件（.png / .jpg / .jpeg 等）；</p><p>8：WPS 文档；</p><p>0：未知文件类型。</p><p></p><p>支持的文件大小：</p><p>PDF/WORD/PPT支持150M且300页以内、EXCEL支持10M以内、TXT支持10M以内、图片文件支持70M以内。</p><p></p><p>默认值：1</p>
 * @method void setFileType(integer $FileType) 设置<p>支持解析的文件类型。</p><p>1：PDF 文档；</p><p>2：Word 文档（.doc / .docx）；</p><p>3：PPT 演示文稿（.ppt / .pptx）；</p><p>4：Excel 表格（.xls / .xlsx）；</p><p>5：Markdown 文档（.md）；</p><p>6：纯文本文件（.txt）；</p><p>7：图片文件（.png / .jpg / .jpeg 等）；</p><p>8：WPS 文档；</p><p>0：未知文件类型。</p><p></p><p>支持的文件大小：</p><p>PDF/WORD/PPT支持150M且300页以内、EXCEL支持10M以内、TXT支持10M以内、图片文件支持70M以内。</p><p></p><p>默认值：1</p>
 * @method integer getResultType() 获取<p>输出格式。</p><p>1：json格式</p><p>2：markdown格式</p><p>3：xml格式</p><p>9：json+markdown+xml格式</p><p></p><p>默认值：9</p>
 * @method void setResultType(integer $ResultType) 设置<p>输出格式。</p><p>1：json格式</p><p>2：markdown格式</p><p>3：xml格式</p><p>9：json+markdown+xml格式</p><p></p><p>默认值：9</p>
 * @method boolean getEnableSubImg() 获取<p>是否支持子图解析。</p><p></p><p>默认值：false</p>
 * @method void setEnableSubImg(boolean $EnableSubImg) 设置<p>是否支持子图解析。</p><p></p><p>默认值：false</p>
 * @method string getPageRange() 获取<p>需要识别的页码范围，单次调用最多支持300页。</p><p>参数格式：1-10</p>
 * @method void setPageRange(string $PageRange) 设置<p>需要识别的页码范围，单次调用最多支持300页。</p><p>参数格式：1-10</p>
 */
class MultimodalDocParseRequest extends AbstractModel
{
    /**
     * @var string <p>文件的 Url 地址，支持FileType参数对应的文件格式及大小。文件下载时间不超过3秒。文件存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议文件存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。</p>
     */
    public $FileUrl;

    /**
     * @var integer <p>支持解析的文件类型。</p><p>1：PDF 文档；</p><p>2：Word 文档（.doc / .docx）；</p><p>3：PPT 演示文稿（.ppt / .pptx）；</p><p>4：Excel 表格（.xls / .xlsx）；</p><p>5：Markdown 文档（.md）；</p><p>6：纯文本文件（.txt）；</p><p>7：图片文件（.png / .jpg / .jpeg 等）；</p><p>8：WPS 文档；</p><p>0：未知文件类型。</p><p></p><p>支持的文件大小：</p><p>PDF/WORD/PPT支持150M且300页以内、EXCEL支持10M以内、TXT支持10M以内、图片文件支持70M以内。</p><p></p><p>默认值：1</p>
     */
    public $FileType;

    /**
     * @var integer <p>输出格式。</p><p>1：json格式</p><p>2：markdown格式</p><p>3：xml格式</p><p>9：json+markdown+xml格式</p><p></p><p>默认值：9</p>
     */
    public $ResultType;

    /**
     * @var boolean <p>是否支持子图解析。</p><p></p><p>默认值：false</p>
     */
    public $EnableSubImg;

    /**
     * @var string <p>需要识别的页码范围，单次调用最多支持300页。</p><p>参数格式：1-10</p>
     */
    public $PageRange;

    /**
     * @param string $FileUrl <p>文件的 Url 地址，支持FileType参数对应的文件格式及大小。文件下载时间不超过3秒。文件存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议文件存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。</p>
     * @param integer $FileType <p>支持解析的文件类型。</p><p>1：PDF 文档；</p><p>2：Word 文档（.doc / .docx）；</p><p>3：PPT 演示文稿（.ppt / .pptx）；</p><p>4：Excel 表格（.xls / .xlsx）；</p><p>5：Markdown 文档（.md）；</p><p>6：纯文本文件（.txt）；</p><p>7：图片文件（.png / .jpg / .jpeg 等）；</p><p>8：WPS 文档；</p><p>0：未知文件类型。</p><p></p><p>支持的文件大小：</p><p>PDF/WORD/PPT支持150M且300页以内、EXCEL支持10M以内、TXT支持10M以内、图片文件支持70M以内。</p><p></p><p>默认值：1</p>
     * @param integer $ResultType <p>输出格式。</p><p>1：json格式</p><p>2：markdown格式</p><p>3：xml格式</p><p>9：json+markdown+xml格式</p><p></p><p>默认值：9</p>
     * @param boolean $EnableSubImg <p>是否支持子图解析。</p><p></p><p>默认值：false</p>
     * @param string $PageRange <p>需要识别的页码范围，单次调用最多支持300页。</p><p>参数格式：1-10</p>
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
        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("ResultType",$param) and $param["ResultType"] !== null) {
            $this->ResultType = $param["ResultType"];
        }

        if (array_key_exists("EnableSubImg",$param) and $param["EnableSubImg"] !== null) {
            $this->EnableSubImg = $param["EnableSubImg"];
        }

        if (array_key_exists("PageRange",$param) and $param["PageRange"] !== null) {
            $this->PageRange = $param["PageRange"];
        }
    }
}
