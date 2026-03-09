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
 * ModifyLLMComprehendTemplate请求参数结构体
 *
 * @method integer getDefinition() 获取<p>大模型理解模板的唯一标识</p>
 * @method void setDefinition(integer $Definition) 设置<p>大模型理解模板的唯一标识</p>
 * @method integer getSubAppId() 获取<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method void setSubAppId(integer $SubAppId) 设置<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method string getName() 获取<p>大模型解析模板名称，长度限制：64 个字符。</p>
 * @method void setName(string $Name) 设置<p>大模型解析模板名称，长度限制：64 个字符。</p>
 * @method string getComment() 获取<p>大模型解析模板描述信息，长度限制：256 个字符。</p>
 * @method void setComment(string $Comment) 设置<p>大模型解析模板描述信息，长度限制：256 个字符。</p>
 * @method string getModel() 获取<p>解析模型，可选值为：</p><ul><li>Basic: 基础模型</li><li>Pro: 优化模型</li></ul>
 * @method void setModel(string $Model) 设置<p>解析模型，可选值为：</p><ul><li>Basic: 基础模型</li><li>Pro: 优化模型</li></ul>
 * @method LLMComprehendSummaryForUpdate getSummary() 获取<p>分段摘要解析配置</p>
 * @method void setSummary(LLMComprehendSummaryForUpdate $Summary) 设置<p>分段摘要解析配置</p>
 * @method LLMComprehendAsrForUpdate getAsr() 获取<p>文本转录解析配置</p>
 * @method void setAsr(LLMComprehendAsrForUpdate $Asr) 设置<p>文本转录解析配置</p>
 * @method LLMComprehendFaceRecognitionForUpdate getFaceRecognition() 获取<p>人脸识别配置</p>
 * @method void setFaceRecognition(LLMComprehendFaceRecognitionForUpdate $FaceRecognition) 设置<p>人脸识别配置</p>
 */
class ModifyLLMComprehendTemplateRequest extends AbstractModel
{
    /**
     * @var integer <p>大模型理解模板的唯一标识</p>
     */
    public $Definition;

    /**
     * @var integer <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>大模型解析模板名称，长度限制：64 个字符。</p>
     */
    public $Name;

    /**
     * @var string <p>大模型解析模板描述信息，长度限制：256 个字符。</p>
     */
    public $Comment;

    /**
     * @var string <p>解析模型，可选值为：</p><ul><li>Basic: 基础模型</li><li>Pro: 优化模型</li></ul>
     */
    public $Model;

    /**
     * @var LLMComprehendSummaryForUpdate <p>分段摘要解析配置</p>
     */
    public $Summary;

    /**
     * @var LLMComprehendAsrForUpdate <p>文本转录解析配置</p>
     */
    public $Asr;

    /**
     * @var LLMComprehendFaceRecognitionForUpdate <p>人脸识别配置</p>
     */
    public $FaceRecognition;

    /**
     * @param integer $Definition <p>大模型理解模板的唯一标识</p>
     * @param integer $SubAppId <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     * @param string $Name <p>大模型解析模板名称，长度限制：64 个字符。</p>
     * @param string $Comment <p>大模型解析模板描述信息，长度限制：256 个字符。</p>
     * @param string $Model <p>解析模型，可选值为：</p><ul><li>Basic: 基础模型</li><li>Pro: 优化模型</li></ul>
     * @param LLMComprehendSummaryForUpdate $Summary <p>分段摘要解析配置</p>
     * @param LLMComprehendAsrForUpdate $Asr <p>文本转录解析配置</p>
     * @param LLMComprehendFaceRecognitionForUpdate $FaceRecognition <p>人脸识别配置</p>
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = new LLMComprehendSummaryForUpdate();
            $this->Summary->deserialize($param["Summary"]);
        }

        if (array_key_exists("Asr",$param) and $param["Asr"] !== null) {
            $this->Asr = new LLMComprehendAsrForUpdate();
            $this->Asr->deserialize($param["Asr"]);
        }

        if (array_key_exists("FaceRecognition",$param) and $param["FaceRecognition"] !== null) {
            $this->FaceRecognition = new LLMComprehendFaceRecognitionForUpdate();
            $this->FaceRecognition->deserialize($param["FaceRecognition"]);
        }
    }
}
