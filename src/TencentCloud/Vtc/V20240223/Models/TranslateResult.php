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
namespace TencentCloud\Vtc\V20240223\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 音频翻译结果。
 *
 * @method string getSourceText() 获取翻译源文字。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceText(string $SourceText) 设置翻译源文字。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetText() 获取翻译后文字。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetText(string $TargetText) 设置翻译后文字。
注意：此字段可能返回 null，表示取不到有效值。
 */
class TranslateResult extends AbstractModel
{
    /**
     * @var string 翻译源文字。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceText;

    /**
     * @var string 翻译后文字。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetText;

    /**
     * @param string $SourceText 翻译源文字。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetText 翻译后文字。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("SourceText",$param) and $param["SourceText"] !== null) {
            $this->SourceText = $param["SourceText"];
        }

        if (array_key_exists("TargetText",$param) and $param["TargetText"] !== null) {
            $this->TargetText = $param["TargetText"];
        }
    }
}
