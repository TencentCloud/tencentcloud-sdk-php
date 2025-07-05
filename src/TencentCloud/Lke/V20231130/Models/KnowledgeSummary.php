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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 检索知识
 *
 * @method integer getType() 获取1是问答 2是文档片段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(integer $Type) 设置1是问答 2是文档片段
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContent() 获取知识内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(string $Content) 设置知识内容
注意：此字段可能返回 null，表示取不到有效值。
 */
class KnowledgeSummary extends AbstractModel
{
    /**
     * @var integer 1是问答 2是文档片段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 知识内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;

    /**
     * @param integer $Type 1是问答 2是文档片段
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Content 知识内容
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
