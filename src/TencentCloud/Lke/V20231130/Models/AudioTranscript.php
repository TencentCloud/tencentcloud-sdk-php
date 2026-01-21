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
 * 音频转录的文本内容
 *
 * @method string getSpeaker() 获取音频的发言者
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpeaker(string $Speaker) 设置音频的发言者
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTranscript() 获取音频转录为文字后的内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTranscript(string $Transcript) 设置音频转录为文字后的内容
注意：此字段可能返回 null，表示取不到有效值。
 */
class AudioTranscript extends AbstractModel
{
    /**
     * @var string 音频的发言者
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Speaker;

    /**
     * @var string 音频转录为文字后的内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Transcript;

    /**
     * @param string $Speaker 音频的发言者
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Transcript 音频转录为文字后的内容
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
        if (array_key_exists("Speaker",$param) and $param["Speaker"] !== null) {
            $this->Speaker = $param["Speaker"];
        }

        if (array_key_exists("Transcript",$param) and $param["Transcript"] !== null) {
            $this->Transcript = $param["Transcript"];
        }
    }
}
