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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TurnPDFToObjectAsync请求参数结构体
 *
 * @method PdfInfo getPdfInfo() 获取体检报告PDF文件信息, 目前只支持传PDF文件的Base64编码字符(PDF文件不能超过10MB，如果超过建议先压缩PDF，再转成base64)
 * @method void setPdfInfo(PdfInfo $PdfInfo) 设置体检报告PDF文件信息, 目前只支持传PDF文件的Base64编码字符(PDF文件不能超过10MB，如果超过建议先压缩PDF，再转成base64)
 * @method boolean getTextBasedPdfFlag() 获取PDF文件中的文字是否为文本内容.
如果该字段为true,那么就会自动判断是电子版还是图片，自动选择直接读取文字还是 OCR 方式.
如果该字段为false, 那么始终采用 OCR 方式
 * @method void setTextBasedPdfFlag(boolean $TextBasedPdfFlag) 设置PDF文件中的文字是否为文本内容.
如果该字段为true,那么就会自动判断是电子版还是图片，自动选择直接读取文字还是 OCR 方式.
如果该字段为false, 那么始终采用 OCR 方式
 */
class TurnPDFToObjectAsyncRequest extends AbstractModel
{
    /**
     * @var PdfInfo 体检报告PDF文件信息, 目前只支持传PDF文件的Base64编码字符(PDF文件不能超过10MB，如果超过建议先压缩PDF，再转成base64)
     */
    public $PdfInfo;

    /**
     * @var boolean PDF文件中的文字是否为文本内容.
如果该字段为true,那么就会自动判断是电子版还是图片，自动选择直接读取文字还是 OCR 方式.
如果该字段为false, 那么始终采用 OCR 方式
     */
    public $TextBasedPdfFlag;

    /**
     * @param PdfInfo $PdfInfo 体检报告PDF文件信息, 目前只支持传PDF文件的Base64编码字符(PDF文件不能超过10MB，如果超过建议先压缩PDF，再转成base64)
     * @param boolean $TextBasedPdfFlag PDF文件中的文字是否为文本内容.
如果该字段为true,那么就会自动判断是电子版还是图片，自动选择直接读取文字还是 OCR 方式.
如果该字段为false, 那么始终采用 OCR 方式
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
        if (array_key_exists("PdfInfo",$param) and $param["PdfInfo"] !== null) {
            $this->PdfInfo = new PdfInfo();
            $this->PdfInfo->deserialize($param["PdfInfo"]);
        }

        if (array_key_exists("TextBasedPdfFlag",$param) and $param["TextBasedPdfFlag"] !== null) {
            $this->TextBasedPdfFlag = $param["TextBasedPdfFlag"];
        }
    }
}
