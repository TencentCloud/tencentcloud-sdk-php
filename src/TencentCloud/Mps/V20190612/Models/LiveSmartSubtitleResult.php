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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 直播智能字幕结果
 *
 * @method string getText() 获取识别文本。
 * @method void setText(string $Text) 设置识别文本。
 * @method float getStartPTSTime() 获取翻译片段起始的 PTS 时间，单位：秒。
 * @method void setStartPTSTime(float $StartPTSTime) 设置翻译片段起始的 PTS 时间，单位：秒。
 * @method float getEndPTSTime() 获取翻译片段终止的 PTS 时间，单位：秒。
 * @method void setEndPTSTime(float $EndPTSTime) 设置翻译片段终止的 PTS 时间，单位：秒。
 * @method string getTrans() 获取翻译文本。
 * @method void setTrans(string $Trans) 设置翻译文本。
 * @method string getStartTime() 获取翻译开始UTC时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置翻译开始UTC时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取翻译结束UTC时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置翻译结束UTC时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSteadyState() 获取稳态标记。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSteadyState(boolean $SteadyState) 设置稳态标记。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserId() 获取websocket与trtc实时翻译的UserId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserId(string $UserId) 设置websocket与trtc实时翻译的UserId
注意：此字段可能返回 null，表示取不到有效值。
 */
class LiveSmartSubtitleResult extends AbstractModel
{
    /**
     * @var string 识别文本。
     */
    public $Text;

    /**
     * @var float 翻译片段起始的 PTS 时间，单位：秒。
     */
    public $StartPTSTime;

    /**
     * @var float 翻译片段终止的 PTS 时间，单位：秒。
     */
    public $EndPTSTime;

    /**
     * @var string 翻译文本。
     */
    public $Trans;

    /**
     * @var string 翻译开始UTC时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 翻译结束UTC时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var boolean 稳态标记。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SteadyState;

    /**
     * @var string websocket与trtc实时翻译的UserId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserId;

    /**
     * @param string $Text 识别文本。
     * @param float $StartPTSTime 翻译片段起始的 PTS 时间，单位：秒。
     * @param float $EndPTSTime 翻译片段终止的 PTS 时间，单位：秒。
     * @param string $Trans 翻译文本。
     * @param string $StartTime 翻译开始UTC时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 翻译结束UTC时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SteadyState 稳态标记。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserId websocket与trtc实时翻译的UserId
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

        if (array_key_exists("StartPTSTime",$param) and $param["StartPTSTime"] !== null) {
            $this->StartPTSTime = $param["StartPTSTime"];
        }

        if (array_key_exists("EndPTSTime",$param) and $param["EndPTSTime"] !== null) {
            $this->EndPTSTime = $param["EndPTSTime"];
        }

        if (array_key_exists("Trans",$param) and $param["Trans"] !== null) {
            $this->Trans = $param["Trans"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SteadyState",$param) and $param["SteadyState"] !== null) {
            $this->SteadyState = $param["SteadyState"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}
