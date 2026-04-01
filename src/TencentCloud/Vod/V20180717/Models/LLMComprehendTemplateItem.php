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
 * @method integer getDefinition() 获取<p>图片异步处理模板唯一标识。</p>
 * @method void setDefinition(integer $Definition) 设置<p>图片异步处理模板唯一标识。</p>
 * @method string getName() 获取<p>图片异步处理模板名称。</p>
 * @method void setName(string $Name) 设置<p>图片异步处理模板名称。</p>
 * @method string getComment() 获取<p>图片异步处理模板描述信息。</p>
 * @method void setComment(string $Comment) 设置<p>图片异步处理模板描述信息。</p>
 * @method string getLevel() 获取<p>解析级别，可选值为：</p><ul><li>Audio: 音频级解析</li><li>Video: 视频级解析</li></ul>
 * @method void setLevel(string $Level) 设置<p>解析级别，可选值为：</p><ul><li>Audio: 音频级解析</li><li>Video: 视频级解析</li></ul>
 * @method LLMComprehendSummary getSummary() 获取<p>分段摘要解析配置</p>
 * @method void setSummary(LLMComprehendSummary $Summary) 设置<p>分段摘要解析配置</p>
 * @method LLMComprehendAsr getAsr() 获取<p>文本转录解析配置</p>
 * @method void setAsr(LLMComprehendAsr $Asr) 设置<p>文本转录解析配置</p>
 * @method LLMComprehendFaceRecognition getFaceRecognition() 获取<p>人脸识别解析配置</p>
 * @method void setFaceRecognition(LLMComprehendFaceRecognition $FaceRecognition) 设置<p>人脸识别解析配置</p>
 * @method string getCreateTime() 获取<p>模板创建时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>模板创建时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 * @method string getUpdateTime() 获取<p>模板最后修改时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>模板最后修改时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 */
class LLMComprehendTemplateItem extends AbstractModel
{
    /**
     * @var integer <p>图片异步处理模板唯一标识。</p>
     */
    public $Definition;

    /**
     * @var string <p>图片异步处理模板名称。</p>
     */
    public $Name;

    /**
     * @var string <p>图片异步处理模板描述信息。</p>
     */
    public $Comment;

    /**
     * @var string <p>解析级别，可选值为：</p><ul><li>Audio: 音频级解析</li><li>Video: 视频级解析</li></ul>
     */
    public $Level;

    /**
     * @var LLMComprehendSummary <p>分段摘要解析配置</p>
     */
    public $Summary;

    /**
     * @var LLMComprehendAsr <p>文本转录解析配置</p>
     */
    public $Asr;

    /**
     * @var LLMComprehendFaceRecognition <p>人脸识别解析配置</p>
     */
    public $FaceRecognition;

    /**
     * @var string <p>模板创建时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
     */
    public $CreateTime;

    /**
     * @var string <p>模板最后修改时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
     */
    public $UpdateTime;

    /**
     * @param integer $Definition <p>图片异步处理模板唯一标识。</p>
     * @param string $Name <p>图片异步处理模板名称。</p>
     * @param string $Comment <p>图片异步处理模板描述信息。</p>
     * @param string $Level <p>解析级别，可选值为：</p><ul><li>Audio: 音频级解析</li><li>Video: 视频级解析</li></ul>
     * @param LLMComprehendSummary $Summary <p>分段摘要解析配置</p>
     * @param LLMComprehendAsr $Asr <p>文本转录解析配置</p>
     * @param LLMComprehendFaceRecognition $FaceRecognition <p>人脸识别解析配置</p>
     * @param string $CreateTime <p>模板创建时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
     * @param string $UpdateTime <p>模板最后修改时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
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

        if (array_key_exists("FaceRecognition",$param) and $param["FaceRecognition"] !== null) {
            $this->FaceRecognition = new LLMComprehendFaceRecognition();
            $this->FaceRecognition->deserialize($param["FaceRecognition"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
