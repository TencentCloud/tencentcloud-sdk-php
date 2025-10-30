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
namespace TencentCloud\Asr\V20190614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 声纹组对比结果top数据
 *
 * @method string getScore() 获取相似度打分
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScore(string $Score) 设置相似度打分
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVoicePrintId() 获取说话人id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVoicePrintId(string $VoicePrintId) 设置说话人id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSpeakerId() 获取说话人昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpeakerId(string $SpeakerId) 设置说话人昵称
注意：此字段可能返回 null，表示取不到有效值。
 */
class VerifyTop extends AbstractModel
{
    /**
     * @var string 相似度打分
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Score;

    /**
     * @var string 说话人id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VoicePrintId;

    /**
     * @var string 说话人昵称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpeakerId;

    /**
     * @param string $Score 相似度打分
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VoicePrintId 说话人id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SpeakerId 说话人昵称
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
        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("VoicePrintId",$param) and $param["VoicePrintId"] !== null) {
            $this->VoicePrintId = $param["VoicePrintId"];
        }

        if (array_key_exists("SpeakerId",$param) and $param["SpeakerId"] !== null) {
            $this->SpeakerId = $param["SpeakerId"];
        }
    }
}
