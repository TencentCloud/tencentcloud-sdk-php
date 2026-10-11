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
 * VLM 推理结果
 *
 * @method string getOutputMode() 获取<p>实际使用的推理输出模式：enum 或 string。</p>
 * @method void setOutputMode(string $OutputMode) 设置<p>实际使用的推理输出模式：enum 或 string。</p>
 * @method string getEnumValue() 获取<p>枚举模式下的推理结果值。当 OutputMode=enum 时返回，取值对应请求中配置的 EnumValues。</p>
 * @method void setEnumValue(string $EnumValue) 设置<p>枚举模式下的推理结果值。当 OutputMode=enum 时返回，取值对应请求中配置的 EnumValues。</p>
 * @method string getTextValue() 获取<p>文本模式下的推理结果值。当 OutputMode=string 时返回，以文本形式描述推理结论。</p>
 * @method void setTextValue(string $TextValue) 设置<p>文本模式下的推理结果值。当 OutputMode=string 时返回，以文本形式描述推理结论。</p>
 * @method string getRawOutput() 获取<p>VLM 原始输出文本（未经过结构化校验）。该字段仅用于调试，生产环境可忽略。</p>
 * @method void setRawOutput(string $RawOutput) 设置<p>VLM 原始输出文本（未经过结构化校验）。该字段仅用于调试，生产环境可忽略。</p>
 * @method string getRenderedPrompt() 获取<p>变量替换后的用户 Prompt 文本。该字段仅用于调试，生产环境可忽略。</p>
 * @method void setRenderedPrompt(string $RenderedPrompt) 设置<p>变量替换后的用户 Prompt 文本。该字段仅用于调试，生产环境可忽略。</p>
 */
class ReasoningResult extends AbstractModel
{
    /**
     * @var string <p>实际使用的推理输出模式：enum 或 string。</p>
     */
    public $OutputMode;

    /**
     * @var string <p>枚举模式下的推理结果值。当 OutputMode=enum 时返回，取值对应请求中配置的 EnumValues。</p>
     */
    public $EnumValue;

    /**
     * @var string <p>文本模式下的推理结果值。当 OutputMode=string 时返回，以文本形式描述推理结论。</p>
     */
    public $TextValue;

    /**
     * @var string <p>VLM 原始输出文本（未经过结构化校验）。该字段仅用于调试，生产环境可忽略。</p>
     */
    public $RawOutput;

    /**
     * @var string <p>变量替换后的用户 Prompt 文本。该字段仅用于调试，生产环境可忽略。</p>
     */
    public $RenderedPrompt;

    /**
     * @param string $OutputMode <p>实际使用的推理输出模式：enum 或 string。</p>
     * @param string $EnumValue <p>枚举模式下的推理结果值。当 OutputMode=enum 时返回，取值对应请求中配置的 EnumValues。</p>
     * @param string $TextValue <p>文本模式下的推理结果值。当 OutputMode=string 时返回，以文本形式描述推理结论。</p>
     * @param string $RawOutput <p>VLM 原始输出文本（未经过结构化校验）。该字段仅用于调试，生产环境可忽略。</p>
     * @param string $RenderedPrompt <p>变量替换后的用户 Prompt 文本。该字段仅用于调试，生产环境可忽略。</p>
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
        if (array_key_exists("OutputMode",$param) and $param["OutputMode"] !== null) {
            $this->OutputMode = $param["OutputMode"];
        }

        if (array_key_exists("EnumValue",$param) and $param["EnumValue"] !== null) {
            $this->EnumValue = $param["EnumValue"];
        }

        if (array_key_exists("TextValue",$param) and $param["TextValue"] !== null) {
            $this->TextValue = $param["TextValue"];
        }

        if (array_key_exists("RawOutput",$param) and $param["RawOutput"] !== null) {
            $this->RawOutput = $param["RawOutput"];
        }

        if (array_key_exists("RenderedPrompt",$param) and $param["RenderedPrompt"] !== null) {
            $this->RenderedPrompt = $param["RenderedPrompt"];
        }
    }
}
