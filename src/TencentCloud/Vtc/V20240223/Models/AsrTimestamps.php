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
 * 文本片段及其时间戳
 *
 * @method string getText() 获取文本片段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(string $Text) 设置文本片段
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStartMs() 获取开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartMs(integer $StartMs) 设置开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEndMs() 获取结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndMs(integer $EndMs) 设置结束时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class AsrTimestamps extends AbstractModel
{
    /**
     * @var string 文本片段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Text;

    /**
     * @var integer 开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartMs;

    /**
     * @var integer 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndMs;

    /**
     * @param string $Text 文本片段
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StartMs 开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EndMs 结束时间
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

        if (array_key_exists("StartMs",$param) and $param["StartMs"] !== null) {
            $this->StartMs = $param["StartMs"];
        }

        if (array_key_exists("EndMs",$param) and $param["EndMs"] !== null) {
            $this->EndMs = $param["EndMs"];
        }
    }
}
