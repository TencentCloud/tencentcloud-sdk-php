<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * 视频检索的检索输入
 *
 * @method string getSearchValueType() 获取检索输入的类型，目前支持：
Text：文本检索
 * @method void setSearchValueType(string $SearchValueType) 设置检索输入的类型，目前支持：
Text：文本检索
 * @method string getTextInput() 获取当SearchValueType为Text时有效且必填，用于检索视频的文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTextInput(string $TextInput) 设置当SearchValueType为Text时有效且必填，用于检索视频的文本
注意：此字段可能返回 null，表示取不到有效值。
 */
class SearchValueInput extends AbstractModel
{
    /**
     * @var string 检索输入的类型，目前支持：
Text：文本检索
     */
    public $SearchValueType;

    /**
     * @var string 当SearchValueType为Text时有效且必填，用于检索视频的文本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TextInput;

    /**
     * @param string $SearchValueType 检索输入的类型，目前支持：
Text：文本检索
     * @param string $TextInput 当SearchValueType为Text时有效且必填，用于检索视频的文本
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
        if (array_key_exists("SearchValueType",$param) and $param["SearchValueType"] !== null) {
            $this->SearchValueType = $param["SearchValueType"];
        }

        if (array_key_exists("TextInput",$param) and $param["TextInput"] !== null) {
            $this->TextInput = $param["TextInput"];
        }
    }
}
