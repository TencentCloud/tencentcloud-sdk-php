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
namespace TencentCloud\Nlp\V20190408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文本润色结果
 *
 * @method string getText() 获取润色后的文本。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(string $Text) 设置润色后的文本。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEmbellishType() 获取润色类型。类型列表
expansion：扩写
rewriting：改写
translation_m2a：从现代文改写为古文
translation_a2m：从古文改写为现代文


注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEmbellishType(string $EmbellishType) 设置润色类型。类型列表
expansion：扩写
rewriting：改写
translation_m2a：从现代文改写为古文
translation_a2m：从古文改写为现代文


注意：此字段可能返回 null，表示取不到有效值。
 */
class Embellish extends AbstractModel
{
    /**
     * @var string 润色后的文本。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Text;

    /**
     * @var string 润色类型。类型列表
expansion：扩写
rewriting：改写
translation_m2a：从现代文改写为古文
translation_a2m：从古文改写为现代文


注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EmbellishType;

    /**
     * @param string $Text 润色后的文本。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EmbellishType 润色类型。类型列表
expansion：扩写
rewriting：改写
translation_m2a：从现代文改写为古文
translation_a2m：从古文改写为现代文


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

        if (array_key_exists("EmbellishType",$param) and $param["EmbellishType"] !== null) {
            $this->EmbellishType = $param["EmbellishType"];
        }
    }
}
