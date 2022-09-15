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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 意愿核身相关结果
 *
 * @method string getIntentionVerifyVideo() 获取意愿确认环节中录制的视频（base64）。若不存在则为空字符串。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntentionVerifyVideo(string $IntentionVerifyVideo) 设置意愿确认环节中录制的视频（base64）。若不存在则为空字符串。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAsrResult() 获取意愿确认环节中用户语音转文字的识别结果。若不存在则为空字符串。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAsrResult(string $AsrResult) 设置意愿确认环节中用户语音转文字的识别结果。若不存在则为空字符串。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getErrorCode() 获取意愿确认环节的结果码。当该结果码为0时，语音朗读的视频与语音识别结果才会返回。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorCode(integer $ErrorCode) 设置意愿确认环节的结果码。当该结果码为0时，语音朗读的视频与语音识别结果才会返回。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorMessage() 获取意愿确认环节的结果信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorMessage(string $ErrorMessage) 设置意愿确认环节的结果信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIntentionVerifyBestFrame() 获取意愿确认环节中录制视频的最佳帧（base64）。若不存在则为空字符串。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntentionVerifyBestFrame(string $IntentionVerifyBestFrame) 设置意愿确认环节中录制视频的最佳帧（base64）。若不存在则为空字符串。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAsrResultSimilarity() 获取本次流程用户语音与传入文本比对的相似度分值，取值范围 [0.00, 100.00]。只有配置了相似度阈值后才进行语音校验并返回相似度分值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAsrResultSimilarity(string $AsrResultSimilarity) 设置本次流程用户语音与传入文本比对的相似度分值，取值范围 [0.00, 100.00]。只有配置了相似度阈值后才进行语音校验并返回相似度分值。
注意：此字段可能返回 null，表示取不到有效值。
 */
class IntentionVerifyData extends AbstractModel
{
    /**
     * @var string 意愿确认环节中录制的视频（base64）。若不存在则为空字符串。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IntentionVerifyVideo;

    /**
     * @var string 意愿确认环节中用户语音转文字的识别结果。若不存在则为空字符串。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AsrResult;

    /**
     * @var integer 意愿确认环节的结果码。当该结果码为0时，语音朗读的视频与语音识别结果才会返回。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorCode;

    /**
     * @var string 意愿确认环节的结果信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorMessage;

    /**
     * @var string 意愿确认环节中录制视频的最佳帧（base64）。若不存在则为空字符串。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IntentionVerifyBestFrame;

    /**
     * @var string 本次流程用户语音与传入文本比对的相似度分值，取值范围 [0.00, 100.00]。只有配置了相似度阈值后才进行语音校验并返回相似度分值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AsrResultSimilarity;

    /**
     * @param string $IntentionVerifyVideo 意愿确认环节中录制的视频（base64）。若不存在则为空字符串。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AsrResult 意愿确认环节中用户语音转文字的识别结果。若不存在则为空字符串。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ErrorCode 意愿确认环节的结果码。当该结果码为0时，语音朗读的视频与语音识别结果才会返回。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorMessage 意愿确认环节的结果信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IntentionVerifyBestFrame 意愿确认环节中录制视频的最佳帧（base64）。若不存在则为空字符串。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AsrResultSimilarity 本次流程用户语音与传入文本比对的相似度分值，取值范围 [0.00, 100.00]。只有配置了相似度阈值后才进行语音校验并返回相似度分值。
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
        if (array_key_exists("IntentionVerifyVideo",$param) and $param["IntentionVerifyVideo"] !== null) {
            $this->IntentionVerifyVideo = $param["IntentionVerifyVideo"];
        }

        if (array_key_exists("AsrResult",$param) and $param["AsrResult"] !== null) {
            $this->AsrResult = $param["AsrResult"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("IntentionVerifyBestFrame",$param) and $param["IntentionVerifyBestFrame"] !== null) {
            $this->IntentionVerifyBestFrame = $param["IntentionVerifyBestFrame"];
        }

        if (array_key_exists("AsrResultSimilarity",$param) and $param["AsrResultSimilarity"] !== null) {
            $this->AsrResultSimilarity = $param["AsrResultSimilarity"];
        }
    }
}
