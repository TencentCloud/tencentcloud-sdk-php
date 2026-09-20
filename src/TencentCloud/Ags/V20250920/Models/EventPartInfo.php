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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 多模态内容片段信息
 *
 * @method string getText() 获取文本内容，最大长度 8192 字符。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(string $Text) 设置文本内容，最大长度 8192 字符。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getThought() 获取是否为思考内容。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setThought(boolean $Thought) 设置是否为思考内容。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFunctionCall() 获取工具调用信息，JSON 字符串，最大长度 8192 字符。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFunctionCall(string $FunctionCall) 设置工具调用信息，JSON 字符串，最大长度 8192 字符。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFunctionResponse() 获取工具返回信息，JSON 字符串，最大长度 8192 字符。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFunctionResponse(string $FunctionResponse) 设置工具返回信息，JSON 字符串，最大长度 8192 字符。
注意：此字段可能返回 null，表示取不到有效值。
 * @method InlineDataInfo getInlineData() 获取内联数据。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInlineData(InlineDataInfo $InlineData) 设置内联数据。
注意：此字段可能返回 null，表示取不到有效值。
 */
class EventPartInfo extends AbstractModel
{
    /**
     * @var string 文本内容，最大长度 8192 字符。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Text;

    /**
     * @var boolean 是否为思考内容。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Thought;

    /**
     * @var string 工具调用信息，JSON 字符串，最大长度 8192 字符。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FunctionCall;

    /**
     * @var string 工具返回信息，JSON 字符串，最大长度 8192 字符。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FunctionResponse;

    /**
     * @var InlineDataInfo 内联数据。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InlineData;

    /**
     * @param string $Text 文本内容，最大长度 8192 字符。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Thought 是否为思考内容。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FunctionCall 工具调用信息，JSON 字符串，最大长度 8192 字符。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FunctionResponse 工具返回信息，JSON 字符串，最大长度 8192 字符。
注意：此字段可能返回 null，表示取不到有效值。
     * @param InlineDataInfo $InlineData 内联数据。
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Thought",$param) and $param["Thought"] !== null) {
            $this->Thought = $param["Thought"];
        }

        if (array_key_exists("FunctionCall",$param) and $param["FunctionCall"] !== null) {
            $this->FunctionCall = $param["FunctionCall"];
        }

        if (array_key_exists("FunctionResponse",$param) and $param["FunctionResponse"] !== null) {
            $this->FunctionResponse = $param["FunctionResponse"];
        }

        if (array_key_exists("InlineData",$param) and $param["InlineData"] !== null) {
            $this->InlineData = new InlineDataInfo();
            $this->InlineData->deserialize($param["InlineData"]);
        }
    }
}
