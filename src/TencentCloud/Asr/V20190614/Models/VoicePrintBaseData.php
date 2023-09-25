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
namespace TencentCloud\Asr\V20190614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * [说话人基础数据](https://cloud.tencent.com/document/product/1093/94483#3.-.E8.BE.93.E5.87.BA.E5.8F.82.E6.95.B0)，包括说话人id和说话人昵称
 *
 * @method string getVoicePrintId() 获取说话人id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVoicePrintId(string $VoicePrintId) 设置说话人id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSpeakerNick() 获取说话人昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpeakerNick(string $SpeakerNick) 设置说话人昵称
注意：此字段可能返回 null，表示取不到有效值。
 */
class VoicePrintBaseData extends AbstractModel
{
    /**
     * @var string 说话人id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VoicePrintId;

    /**
     * @var string 说话人昵称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpeakerNick;

    /**
     * @param string $VoicePrintId 说话人id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SpeakerNick 说话人昵称
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
        if (array_key_exists("VoicePrintId",$param) and $param["VoicePrintId"] !== null) {
            $this->VoicePrintId = $param["VoicePrintId"];
        }

        if (array_key_exists("SpeakerNick",$param) and $param["SpeakerNick"] !== null) {
            $this->SpeakerNick = $param["SpeakerNick"];
        }
    }
}
