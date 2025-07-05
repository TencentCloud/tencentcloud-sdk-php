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
 * 分片高亮内容
 *
 * @method string getStartPos() 获取高亮起始位置

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartPos(string $StartPos) 设置高亮起始位置

注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndPos() 获取高亮结束位置

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndPos(string $EndPos) 设置高亮结束位置

注意：此字段可能返回 null，表示取不到有效值。
 * @method string getText() 获取高亮子文本

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(string $Text) 设置高亮子文本

注意：此字段可能返回 null，表示取不到有效值。
 */
class Highlight extends AbstractModel
{
    /**
     * @var string 高亮起始位置

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartPos;

    /**
     * @var string 高亮结束位置

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndPos;

    /**
     * @var string 高亮子文本

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Text;

    /**
     * @param string $StartPos 高亮起始位置

注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndPos 高亮结束位置

注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Text 高亮子文本

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
        if (array_key_exists("StartPos",$param) and $param["StartPos"] !== null) {
            $this->StartPos = $param["StartPos"];
        }

        if (array_key_exists("EndPos",$param) and $param["EndPos"] !== null) {
            $this->EndPos = $param["EndPos"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }
    }
}
