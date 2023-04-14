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
namespace TencentCloud\Vrs\V20200824\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 音频检测提示信息：
1.检测字是否存在多读、 少读、 错读等
2.检测准确度和流畅度
 *
 * @method float getPronAccuracy() 获取准确度 (<75则认为不合格)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPronAccuracy(float $PronAccuracy) 设置准确度 (<75则认为不合格)
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getPronFluency() 获取流畅度 (<0.95则认为不合格)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPronFluency(float $PronFluency) 设置流畅度 (<0.95则认为不合格)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTag() 获取tag: 
0: match  匹配
1: insert   多读
2: delete  少读
3: replace 错读
4: oov  待评估字不在发音评估的词库
5: unknown 未知错误
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTag(integer $Tag) 设置tag: 
0: match  匹配
1: insert   多读
2: delete  少读
3: replace 错读
4: oov  待评估字不在发音评估的词库
5: unknown 未知错误
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWord() 获取字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWord(string $Word) 设置字
注意：此字段可能返回 null，表示取不到有效值。
 */
class Words extends AbstractModel
{
    /**
     * @var float 准确度 (<75则认为不合格)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PronAccuracy;

    /**
     * @var float 流畅度 (<0.95则认为不合格)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PronFluency;

    /**
     * @var integer tag: 
0: match  匹配
1: insert   多读
2: delete  少读
3: replace 错读
4: oov  待评估字不在发音评估的词库
5: unknown 未知错误
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tag;

    /**
     * @var string 字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Word;

    /**
     * @param float $PronAccuracy 准确度 (<75则认为不合格)
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $PronFluency 流畅度 (<0.95则认为不合格)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Tag tag: 
0: match  匹配
1: insert   多读
2: delete  少读
3: replace 错读
4: oov  待评估字不在发音评估的词库
5: unknown 未知错误
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Word 字
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
        if (array_key_exists("PronAccuracy",$param) and $param["PronAccuracy"] !== null) {
            $this->PronAccuracy = $param["PronAccuracy"];
        }

        if (array_key_exists("PronFluency",$param) and $param["PronFluency"] !== null) {
            $this->PronFluency = $param["PronFluency"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("Word",$param) and $param["Word"] !== null) {
            $this->Word = $param["Word"];
        }
    }
}
