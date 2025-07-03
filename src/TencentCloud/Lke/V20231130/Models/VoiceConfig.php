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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 音色参数
 *
 * @method integer getVoiceType() 获取公有云音色id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVoiceType(integer $VoiceType) 设置公有云音色id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimbreKey() 获取音色key
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimbreKey(string $TimbreKey) 设置音色key
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVoiceName() 获取音色名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVoiceName(string $VoiceName) 设置音色名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class VoiceConfig extends AbstractModel
{
    /**
     * @var integer 公有云音色id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VoiceType;

    /**
     * @var string 音色key
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimbreKey;

    /**
     * @var string 音色名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VoiceName;

    /**
     * @param integer $VoiceType 公有云音色id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimbreKey 音色key
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VoiceName 音色名称
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
        if (array_key_exists("VoiceType",$param) and $param["VoiceType"] !== null) {
            $this->VoiceType = $param["VoiceType"];
        }

        if (array_key_exists("TimbreKey",$param) and $param["TimbreKey"] !== null) {
            $this->TimbreKey = $param["TimbreKey"];
        }

        if (array_key_exists("VoiceName",$param) and $param["VoiceName"] !== null) {
            $this->VoiceName = $param["VoiceName"];
        }
    }
}
