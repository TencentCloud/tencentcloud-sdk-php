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
namespace TencentCloud\Tts\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 时间戳信息。
 *
 * @method string getText() 获取⽂本信息。
 * @method void setText(string $Text) 设置⽂本信息。
 * @method integer getBeginTime() 获取⽂本对应tts语⾳开始时间戳，单位ms。
 * @method void setBeginTime(integer $BeginTime) 设置⽂本对应tts语⾳开始时间戳，单位ms。
 * @method integer getEndTime() 获取⽂本对应tts语⾳结束时间戳，单位ms。
 * @method void setEndTime(integer $EndTime) 设置⽂本对应tts语⾳结束时间戳，单位ms。
 * @method integer getBeginIndex() 获取该字在整句中的开始位置，从0开始。
 * @method void setBeginIndex(integer $BeginIndex) 设置该字在整句中的开始位置，从0开始。
 * @method integer getEndIndex() 获取该字在整句中的结束位置，从0开始。
 * @method void setEndIndex(integer $EndIndex) 设置该字在整句中的结束位置，从0开始。
 * @method string getPhoneme() 获取该字的音素
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhoneme(string $Phoneme) 设置该字的音素
注意：此字段可能返回 null，表示取不到有效值。
 */
class Subtitle extends AbstractModel
{
    /**
     * @var string ⽂本信息。
     */
    public $Text;

    /**
     * @var integer ⽂本对应tts语⾳开始时间戳，单位ms。
     */
    public $BeginTime;

    /**
     * @var integer ⽂本对应tts语⾳结束时间戳，单位ms。
     */
    public $EndTime;

    /**
     * @var integer 该字在整句中的开始位置，从0开始。
     */
    public $BeginIndex;

    /**
     * @var integer 该字在整句中的结束位置，从0开始。
     */
    public $EndIndex;

    /**
     * @var string 该字的音素
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Phoneme;

    /**
     * @param string $Text ⽂本信息。
     * @param integer $BeginTime ⽂本对应tts语⾳开始时间戳，单位ms。
     * @param integer $EndTime ⽂本对应tts语⾳结束时间戳，单位ms。
     * @param integer $BeginIndex 该字在整句中的开始位置，从0开始。
     * @param integer $EndIndex 该字在整句中的结束位置，从0开始。
     * @param string $Phoneme 该字的音素
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

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("BeginIndex",$param) and $param["BeginIndex"] !== null) {
            $this->BeginIndex = $param["BeginIndex"];
        }

        if (array_key_exists("EndIndex",$param) and $param["EndIndex"] !== null) {
            $this->EndIndex = $param["EndIndex"];
        }

        if (array_key_exists("Phoneme",$param) and $param["Phoneme"] !== null) {
            $this->Phoneme = $param["Phoneme"];
        }
    }
}
