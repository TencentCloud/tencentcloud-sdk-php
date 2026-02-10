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
 * CreateLLMComprehendTemplate请求参数结构体
 *
 * @method string getLevel() 获取解析级别，可选值为：
- Audio: 音频级解析
- Video: 视频级解析
 * @method void setLevel(string $Level) 设置解析级别，可选值为：
- Audio: 音频级解析
- Video: 视频级解析
 * @method integer getSubAppId() 获取<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method string getName() 获取大模型解析模板名称，长度限制：64 个字符。
 * @method void setName(string $Name) 设置大模型解析模板名称，长度限制：64 个字符。
 * @method string getComment() 获取大模型解析模板描述信息，长度限制：256 个字符。
 * @method void setComment(string $Comment) 设置大模型解析模板描述信息，长度限制：256 个字符。
 * @method LLMComprehendSummary getSummary() 获取分段摘要解析配置
 * @method void setSummary(LLMComprehendSummary $Summary) 设置分段摘要解析配置
 * @method LLMComprehendAsr getAsr() 获取文本转录解析配置
 * @method void setAsr(LLMComprehendAsr $Asr) 设置文本转录解析配置
 */
class CreateLLMComprehendTemplateRequest extends AbstractModel
{
    /**
     * @var string 解析级别，可选值为：
- Audio: 音频级解析
- Video: 视频级解析
     */
    public $Level;

    /**
     * @var integer <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     */
    public $SubAppId;

    /**
     * @var string 大模型解析模板名称，长度限制：64 个字符。
     */
    public $Name;

    /**
     * @var string 大模型解析模板描述信息，长度限制：256 个字符。
     */
    public $Comment;

    /**
     * @var LLMComprehendSummary 分段摘要解析配置
     */
    public $Summary;

    /**
     * @var LLMComprehendAsr 文本转录解析配置
     */
    public $Asr;

    /**
     * @param string $Level 解析级别，可选值为：
- Audio: 音频级解析
- Video: 视频级解析
     * @param integer $SubAppId <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     * @param string $Name 大模型解析模板名称，长度限制：64 个字符。
     * @param string $Comment 大模型解析模板描述信息，长度限制：256 个字符。
     * @param LLMComprehendSummary $Summary 分段摘要解析配置
     * @param LLMComprehendAsr $Asr 文本转录解析配置
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
        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = new LLMComprehendSummary();
            $this->Summary->deserialize($param["Summary"]);
        }

        if (array_key_exists("Asr",$param) and $param["Asr"] !== null) {
            $this->Asr = new LLMComprehendAsr();
            $this->Asr->deserialize($param["Asr"]);
        }
    }
}
