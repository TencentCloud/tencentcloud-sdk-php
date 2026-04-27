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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能字幕翻译的输入。
 *
 * @method integer getDefinition() 获取<p>智能字幕模板 ID。</p>
 * @method void setDefinition(integer $Definition) 设置<p>智能字幕模板 ID。</p>
 * @method RawSmartSubtitleParameter getRawParameter() 获取<p>智能字幕自定义参数，当 Definition 填 0 时有效。<br>该参数用于高度定制场景，建议您优先使用 Definition 指定智能字幕参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRawParameter(RawSmartSubtitleParameter $RawParameter) 设置<p>智能字幕自定义参数，当 Definition 填 0 时有效。<br>该参数用于高度定制场景，建议您优先使用 Definition 指定智能字幕参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserExtPara() 获取<p>扩展参数。</p>
 * @method void setUserExtPara(string $UserExtPara) 设置<p>扩展参数。</p>
 */
class SmartSubtitleTaskResultInput extends AbstractModel
{
    /**
     * @var integer <p>智能字幕模板 ID。</p>
     */
    public $Definition;

    /**
     * @var RawSmartSubtitleParameter <p>智能字幕自定义参数，当 Definition 填 0 时有效。<br>该参数用于高度定制场景，建议您优先使用 Definition 指定智能字幕参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RawParameter;

    /**
     * @var string <p>扩展参数。</p>
     */
    public $UserExtPara;

    /**
     * @param integer $Definition <p>智能字幕模板 ID。</p>
     * @param RawSmartSubtitleParameter $RawParameter <p>智能字幕自定义参数，当 Definition 填 0 时有效。<br>该参数用于高度定制场景，建议您优先使用 Definition 指定智能字幕参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserExtPara <p>扩展参数。</p>
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

        if (array_key_exists("RawParameter",$param) and $param["RawParameter"] !== null) {
            $this->RawParameter = new RawSmartSubtitleParameter();
            $this->RawParameter->deserialize($param["RawParameter"]);
        }

        if (array_key_exists("UserExtPara",$param) and $param["UserExtPara"] !== null) {
            $this->UserExtPara = $param["UserExtPara"];
        }
    }
}
