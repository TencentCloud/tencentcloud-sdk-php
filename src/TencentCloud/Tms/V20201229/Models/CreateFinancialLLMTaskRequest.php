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
namespace TencentCloud\Tms\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateFinancialLLMTask请求参数结构体
 *
 * @method string getBizType() 获取接口使用的识别策略 ID，请参考 [快速指引](https://cloud.tencent.com/document/product/1124/124604) 获取该值。  
 * @method void setBizType(string $BizType) 设置接口使用的识别策略 ID，请参考 [快速指引](https://cloud.tencent.com/document/product/1124/124604) 获取该值。  
 * @method integer getContentType() 获取送审内容的格式，有两个可选值：
- 1：代表送审内容为**文档**，如DOC文档
- 2：代表送审内容为**纯文本**
 * @method void setContentType(integer $ContentType) 设置送审内容的格式，有两个可选值：
- 1：代表送审内容为**文档**，如DOC文档
- 2：代表送审内容为**纯文本**
 * @method string getFileType() 获取若送审内容为文档（ContentType=1），需要传入具体格式，当前支持：DOC、DOCX、PDF。  
说明：若送审内容为纯文本（ContentType=2），则本字段传空（FileType=""）。
 * @method void setFileType(string $FileType) 设置若送审内容为文档（ContentType=1），需要传入具体格式，当前支持：DOC、DOCX、PDF。  
说明：若送审内容为纯文本（ContentType=2），则本字段传空（FileType=""）。
 * @method string getContent() 获取送审内容的传入方式如下：
- 若为文档类，需传入文档的URL（原文档文字数不超过10,000字），例如：http://xxxxxxxxxxxx/financial_test.doc
- 若为纯文本类，请以UTF-8格式进行Base64编码后传入（编码后字符数不超过10,000字），例如：5piO5aSpNjAz5LiA5a6a5rao
 * @method void setContent(string $Content) 设置送审内容的传入方式如下：
- 若为文档类，需传入文档的URL（原文档文字数不超过10,000字），例如：http://xxxxxxxxxxxx/financial_test.doc
- 若为纯文本类，请以UTF-8格式进行Base64编码后传入（编码后字符数不超过10,000字），例如：5piO5aSpNjAz5LiA5a6a5rao
 */
class CreateFinancialLLMTaskRequest extends AbstractModel
{
    /**
     * @var string 接口使用的识别策略 ID，请参考 [快速指引](https://cloud.tencent.com/document/product/1124/124604) 获取该值。  
     */
    public $BizType;

    /**
     * @var integer 送审内容的格式，有两个可选值：
- 1：代表送审内容为**文档**，如DOC文档
- 2：代表送审内容为**纯文本**
     */
    public $ContentType;

    /**
     * @var string 若送审内容为文档（ContentType=1），需要传入具体格式，当前支持：DOC、DOCX、PDF。  
说明：若送审内容为纯文本（ContentType=2），则本字段传空（FileType=""）。
     */
    public $FileType;

    /**
     * @var string 送审内容的传入方式如下：
- 若为文档类，需传入文档的URL（原文档文字数不超过10,000字），例如：http://xxxxxxxxxxxx/financial_test.doc
- 若为纯文本类，请以UTF-8格式进行Base64编码后传入（编码后字符数不超过10,000字），例如：5piO5aSpNjAz5LiA5a6a5rao
     */
    public $Content;

    /**
     * @param string $BizType 接口使用的识别策略 ID，请参考 [快速指引](https://cloud.tencent.com/document/product/1124/124604) 获取该值。  
     * @param integer $ContentType 送审内容的格式，有两个可选值：
- 1：代表送审内容为**文档**，如DOC文档
- 2：代表送审内容为**纯文本**
     * @param string $FileType 若送审内容为文档（ContentType=1），需要传入具体格式，当前支持：DOC、DOCX、PDF。  
说明：若送审内容为纯文本（ContentType=2），则本字段传空（FileType=""）。
     * @param string $Content 送审内容的传入方式如下：
- 若为文档类，需传入文档的URL（原文档文字数不超过10,000字），例如：http://xxxxxxxxxxxx/financial_test.doc
- 若为纯文本类，请以UTF-8格式进行Base64编码后传入（编码后字符数不超过10,000字），例如：5piO5aSpNjAz5LiA5a6a5rao
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
        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
