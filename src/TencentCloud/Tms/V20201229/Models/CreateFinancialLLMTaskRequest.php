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
 * @method string getBizType() 获取审核策略BizType
 * @method void setBizType(string $BizType) 设置审核策略BizType
 * @method string getFileType() 获取待审文件类型，目前支持：PDF, DOC, DOCX
 * @method void setFileType(string $FileType) 设置待审文件类型，目前支持：PDF, DOC, DOCX
 * @method integer getContentType() 获取送审内容类型：1-文档，2-文本
 * @method void setContentType(integer $ContentType) 设置送审内容类型：1-文档，2-文本
 * @method string getContent() 获取送审内容，根据ContentType字段的取值，传入送审文档的Url链接，或送审文本的Base64编码

文档限制：

- 文件下载时间不超过15秒（文件存储于腾讯云的Url可保障更高的下载速度和稳定性，建议文件存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。）
- 所下载文件经 Base64 编码后不超过支持的文件大小：PDF/DOC/DOCX - 200M
- 文档解析后的纯文本长度不超过 10000字

文本限制：Base64解码后的文本长度不超过10000字

 * @method void setContent(string $Content) 设置送审内容，根据ContentType字段的取值，传入送审文档的Url链接，或送审文本的Base64编码

文档限制：

- 文件下载时间不超过15秒（文件存储于腾讯云的Url可保障更高的下载速度和稳定性，建议文件存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。）
- 所下载文件经 Base64 编码后不超过支持的文件大小：PDF/DOC/DOCX - 200M
- 文档解析后的纯文本长度不超过 10000字

文本限制：Base64解码后的文本长度不超过10000字
 */
class CreateFinancialLLMTaskRequest extends AbstractModel
{
    /**
     * @var string 审核策略BizType
     */
    public $BizType;

    /**
     * @var string 待审文件类型，目前支持：PDF, DOC, DOCX
     */
    public $FileType;

    /**
     * @var integer 送审内容类型：1-文档，2-文本
     */
    public $ContentType;

    /**
     * @var string 送审内容，根据ContentType字段的取值，传入送审文档的Url链接，或送审文本的Base64编码

文档限制：

- 文件下载时间不超过15秒（文件存储于腾讯云的Url可保障更高的下载速度和稳定性，建议文件存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。）
- 所下载文件经 Base64 编码后不超过支持的文件大小：PDF/DOC/DOCX - 200M
- 文档解析后的纯文本长度不超过 10000字

文本限制：Base64解码后的文本长度不超过10000字

     */
    public $Content;

    /**
     * @param string $BizType 审核策略BizType
     * @param string $FileType 待审文件类型，目前支持：PDF, DOC, DOCX
     * @param integer $ContentType 送审内容类型：1-文档，2-文本
     * @param string $Content 送审内容，根据ContentType字段的取值，传入送审文档的Url链接，或送审文本的Base64编码

文档限制：

- 文件下载时间不超过15秒（文件存储于腾讯云的Url可保障更高的下载速度和稳定性，建议文件存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。）
- 所下载文件经 Base64 编码后不超过支持的文件大小：PDF/DOC/DOCX - 200M
- 文档解析后的纯文本长度不超过 10000字

文本限制：Base64解码后的文本长度不超过10000字
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

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
