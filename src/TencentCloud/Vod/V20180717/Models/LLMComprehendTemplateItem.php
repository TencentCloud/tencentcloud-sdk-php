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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 大模型解析模板详情。
 *
 * @method integer getDefinition() 获取图片异步处理模板唯一标识。
 * @method void setDefinition(integer $Definition) 设置图片异步处理模板唯一标识。
 * @method string getName() 获取图片异步处理模板名称。
 * @method void setName(string $Name) 设置图片异步处理模板名称。
 * @method string getComment() 获取图片异步处理模板描述信息。
 * @method void setComment(string $Comment) 设置图片异步处理模板描述信息。
 * @method string getLevel() 获取解析级别，可选值为：
- Audio: 音频级解析
- Video: 视频级解析
 * @method void setLevel(string $Level) 设置解析级别，可选值为：
- Audio: 音频级解析
- Video: 视频级解析
 * @method LLMComprehendSummary getSummary() 获取分段摘要解析配置
 * @method void setSummary(LLMComprehendSummary $Summary) 设置分段摘要解析配置
 * @method LLMComprehendAsr getAsr() 获取文本转录解析配置
 * @method void setAsr(LLMComprehendAsr $Asr) 设置文本转录解析配置
 * @method string getCreateTime() 获取模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setCreateTime(string $CreateTime) 设置模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method string getUpdateTime() 获取模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setUpdateTime(string $UpdateTime) 设置模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 */
class LLMComprehendTemplateItem extends AbstractModel
{
    /**
     * @var integer 图片异步处理模板唯一标识。
     */
    public $Definition;

    /**
     * @var string 图片异步处理模板名称。
     */
    public $Name;

    /**
     * @var string 图片异步处理模板描述信息。
     */
    public $Comment;

    /**
     * @var string 解析级别，可选值为：
- Audio: 音频级解析
- Video: 视频级解析
     */
    public $Level;

    /**
     * @var LLMComprehendSummary 分段摘要解析配置
     */
    public $Summary;

    /**
     * @var LLMComprehendAsr 文本转录解析配置
     */
    public $Asr;

    /**
     * @var string 模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $CreateTime;

    /**
     * @var string 模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $UpdateTime;

    /**
     * @param integer $Definition 图片异步处理模板唯一标识。
     * @param string $Name 图片异步处理模板名称。
     * @param string $Comment 图片异步处理模板描述信息。
     * @param string $Level 解析级别，可选值为：
- Audio: 音频级解析
- Video: 视频级解析
     * @param LLMComprehendSummary $Summary 分段摘要解析配置
     * @param LLMComprehendAsr $Asr 文本转录解析配置
     * @param string $CreateTime 模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     * @param string $UpdateTime 模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = new LLMComprehendSummary();
            $this->Summary->deserialize($param["Summary"]);
        }

        if (array_key_exists("Asr",$param) and $param["Asr"] !== null) {
            $this->Asr = new LLMComprehendAsr();
            $this->Asr->deserialize($param["Asr"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
