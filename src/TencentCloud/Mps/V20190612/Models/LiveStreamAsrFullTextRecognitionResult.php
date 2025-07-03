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
 * 直播识别 Asr 全文识别
 *
 * @method string getText() 获取识别文本。
 * @method void setText(string $Text) 设置识别文本。
 * @method float getStartPtsTime() 获取识别片段起始的 PTS 时间，单位：秒。
 * @method void setStartPtsTime(float $StartPtsTime) 设置识别片段起始的 PTS 时间，单位：秒。
 * @method float getEndPtsTime() 获取识别片段终止的 PTS 时间，单位：秒。
 * @method void setEndPtsTime(float $EndPtsTime) 设置识别片段终止的 PTS 时间，单位：秒。
 * @method float getConfidence() 获取识别片段置信度。取值：0~100。
 * @method void setConfidence(float $Confidence) 设置识别片段置信度。取值：0~100。
 * @method string getStartTime() 获取识别开始UTC时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置识别开始UTC时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取识别结束UTC时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置识别结束UTC时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSteadyState() 获取稳态标记。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSteadyState(boolean $SteadyState) 设置稳态标记。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserId() 获取websocket与trtc识别结果的UserId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserId(string $UserId) 设置websocket与trtc识别结果的UserId
注意：此字段可能返回 null，表示取不到有效值。
 */
class LiveStreamAsrFullTextRecognitionResult extends AbstractModel
{
    /**
     * @var string 识别文本。
     */
    public $Text;

    /**
     * @var float 识别片段起始的 PTS 时间，单位：秒。
     */
    public $StartPtsTime;

    /**
     * @var float 识别片段终止的 PTS 时间，单位：秒。
     */
    public $EndPtsTime;

    /**
     * @var float 识别片段置信度。取值：0~100。
     */
    public $Confidence;

    /**
     * @var string 识别开始UTC时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 识别结束UTC时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var boolean 稳态标记。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SteadyState;

    /**
     * @var string websocket与trtc识别结果的UserId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserId;

    /**
     * @param string $Text 识别文本。
     * @param float $StartPtsTime 识别片段起始的 PTS 时间，单位：秒。
     * @param float $EndPtsTime 识别片段终止的 PTS 时间，单位：秒。
     * @param float $Confidence 识别片段置信度。取值：0~100。
     * @param string $StartTime 识别开始UTC时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 识别结束UTC时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SteadyState 稳态标记。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserId websocket与trtc识别结果的UserId
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

        if (array_key_exists("StartPtsTime",$param) and $param["StartPtsTime"] !== null) {
            $this->StartPtsTime = $param["StartPtsTime"];
        }

        if (array_key_exists("EndPtsTime",$param) and $param["EndPtsTime"] !== null) {
            $this->EndPtsTime = $param["EndPtsTime"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
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
