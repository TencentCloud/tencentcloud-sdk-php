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
 * 嵌入盲水印配置
 *
 * @method string getEmbedText() 获取盲水印文字，需要经过 URL 安全的 Base64 编码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEmbedText(string $EmbedText) 设置盲水印文字，需要经过 URL 安全的 Base64 编码。
注意：此字段可能返回 null，表示取不到有效值。
 */
class BlindWatermarkEmbedInfo extends AbstractModel
{
    /**
     * @var string 盲水印文字，需要经过 URL 安全的 Base64 编码。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EmbedText;

    /**
     * @param string $EmbedText 盲水印文字，需要经过 URL 安全的 Base64 编码。
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
        if (array_key_exists("EmbedText",$param) and $param["EmbedText"] !== null) {
            $this->EmbedText = $param["EmbedText"];
        }
    }
}
