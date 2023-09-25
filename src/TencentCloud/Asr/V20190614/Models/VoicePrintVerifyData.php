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
 * [说话人验证数据](https://cloud.tencent.com/document/product/1093/94481#3.-.E8.BE.93.E5.87.BA.E5.8F.82.E6.95.B0)
 *
 * @method string getVoicePrintId() 获取说话人id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVoicePrintId(string $VoicePrintId) 设置说话人id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScore() 获取匹配度 取值范围(0.0 - 100.0)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScore(string $Score) 设置匹配度 取值范围(0.0 - 100.0)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDecision() 获取验证结果 0: 未通过 1: 通过
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDecision(integer $Decision) 设置验证结果 0: 未通过 1: 通过
注意：此字段可能返回 null，表示取不到有效值。
 */
class VoicePrintVerifyData extends AbstractModel
{
    /**
     * @var string 说话人id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VoicePrintId;

    /**
     * @var string 匹配度 取值范围(0.0 - 100.0)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Score;

    /**
     * @var integer 验证结果 0: 未通过 1: 通过
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Decision;

    /**
     * @param string $VoicePrintId 说话人id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Score 匹配度 取值范围(0.0 - 100.0)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Decision 验证结果 0: 未通过 1: 通过
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

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("Decision",$param) and $param["Decision"] !== null) {
            $this->Decision = $param["Decision"];
        }
    }
}
