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
 * 推理输出配置
 *
 * @method string getOutputMode() 获取<p>实际使用的推理输出模式：enum 或 string。</p>
 * @method void setOutputMode(string $OutputMode) 设置<p>实际使用的推理输出模式：enum 或 string。</p>
 * @method array getEnumValues() 获取<p>枚举值集合，仅在 OutputMode=enum 时生效。  VLM 输出必须精确命中此集合中的某个值。</p>
 * @method void setEnumValues(array $EnumValues) 设置<p>枚举值集合，仅在 OutputMode=enum 时生效。  VLM 输出必须精确命中此集合中的某个值。</p>
 * @method integer getMaxLength() 获取<p>文本输出最大长度，仅在 OutputMode=string 时生效。</p><p>取值范围：[1, 500]</p><p>默认值：200</p>
 * @method void setMaxLength(integer $MaxLength) 设置<p>文本输出最大长度，仅在 OutputMode=string 时生效。</p><p>取值范围：[1, 500]</p><p>默认值：200</p>
 * @method boolean getEnableImageInput() 获取<p>是否在推理调用时向 VLM 传入原图进行多模态理解。  true（默认）：VLM 同时接收原图和渲染后的 Prompt，具备多模态理解能力，可直接&quot;看&quot;图片内容进行推理。  false：不传入原图，仅以渲染后的 Prompt（含变量注入值）进行纯文本推理。适用于推理逻辑完全基于结构化出参字段（如水印文字、置信度比较等）的场景，可降低推理延迟和计费成本。  建议：当 ReasoningPrompt 中未涉及&quot;观察图片&quot;、&quot;直接看图&quot;等多模态指令，且推理规则完全基于 ${变量名} 引用的文字结果时，可设为 false 以优化性能。</p>
 * @method void setEnableImageInput(boolean $EnableImageInput) 设置<p>是否在推理调用时向 VLM 传入原图进行多模态理解。  true（默认）：VLM 同时接收原图和渲染后的 Prompt，具备多模态理解能力，可直接&quot;看&quot;图片内容进行推理。  false：不传入原图，仅以渲染后的 Prompt（含变量注入值）进行纯文本推理。适用于推理逻辑完全基于结构化出参字段（如水印文字、置信度比较等）的场景，可降低推理延迟和计费成本。  建议：当 ReasoningPrompt 中未涉及&quot;观察图片&quot;、&quot;直接看图&quot;等多模态指令，且推理规则完全基于 ${变量名} 引用的文字结果时，可设为 false 以优化性能。</p>
 */
class ReasoningConfig extends AbstractModel
{
    /**
     * @var string <p>实际使用的推理输出模式：enum 或 string。</p>
     */
    public $OutputMode;

    /**
     * @var array <p>枚举值集合，仅在 OutputMode=enum 时生效。  VLM 输出必须精确命中此集合中的某个值。</p>
     */
    public $EnumValues;

    /**
     * @var integer <p>文本输出最大长度，仅在 OutputMode=string 时生效。</p><p>取值范围：[1, 500]</p><p>默认值：200</p>
     */
    public $MaxLength;

    /**
     * @var boolean <p>是否在推理调用时向 VLM 传入原图进行多模态理解。  true（默认）：VLM 同时接收原图和渲染后的 Prompt，具备多模态理解能力，可直接&quot;看&quot;图片内容进行推理。  false：不传入原图，仅以渲染后的 Prompt（含变量注入值）进行纯文本推理。适用于推理逻辑完全基于结构化出参字段（如水印文字、置信度比较等）的场景，可降低推理延迟和计费成本。  建议：当 ReasoningPrompt 中未涉及&quot;观察图片&quot;、&quot;直接看图&quot;等多模态指令，且推理规则完全基于 ${变量名} 引用的文字结果时，可设为 false 以优化性能。</p>
     */
    public $EnableImageInput;

    /**
     * @param string $OutputMode <p>实际使用的推理输出模式：enum 或 string。</p>
     * @param array $EnumValues <p>枚举值集合，仅在 OutputMode=enum 时生效。  VLM 输出必须精确命中此集合中的某个值。</p>
     * @param integer $MaxLength <p>文本输出最大长度，仅在 OutputMode=string 时生效。</p><p>取值范围：[1, 500]</p><p>默认值：200</p>
     * @param boolean $EnableImageInput <p>是否在推理调用时向 VLM 传入原图进行多模态理解。  true（默认）：VLM 同时接收原图和渲染后的 Prompt，具备多模态理解能力，可直接&quot;看&quot;图片内容进行推理。  false：不传入原图，仅以渲染后的 Prompt（含变量注入值）进行纯文本推理。适用于推理逻辑完全基于结构化出参字段（如水印文字、置信度比较等）的场景，可降低推理延迟和计费成本。  建议：当 ReasoningPrompt 中未涉及&quot;观察图片&quot;、&quot;直接看图&quot;等多模态指令，且推理规则完全基于 ${变量名} 引用的文字结果时，可设为 false 以优化性能。</p>
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

        if (array_key_exists("EnumValues",$param) and $param["EnumValues"] !== null) {
            $this->EnumValues = $param["EnumValues"];
        }

        if (array_key_exists("MaxLength",$param) and $param["MaxLength"] !== null) {
            $this->MaxLength = $param["MaxLength"];
        }

        if (array_key_exists("EnableImageInput",$param) and $param["EnableImageInput"] !== null) {
            $this->EnableImageInput = $param["EnableImageInput"];
        }
    }
}
