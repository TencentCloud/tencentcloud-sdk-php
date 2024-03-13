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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSignFaceVideo返回参数结构体
 *
 * @method DetectInfoVideoData getVideoData() 获取核身视频结果。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVideoData(DetectInfoVideoData $VideoData) 设置核身视频结果。
注意：此字段可能返回 null，表示取不到有效值。
 * @method IntentionQuestionResult getIntentionQuestionResult() 获取意愿核身问答模式结果。若未使用该意愿核身功能，该字段返回值可以不处理。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntentionQuestionResult(IntentionQuestionResult $IntentionQuestionResult) 设置意愿核身问答模式结果。若未使用该意愿核身功能，该字段返回值可以不处理。
注意：此字段可能返回 null，表示取不到有效值。
 * @method IntentionActionResult getIntentionActionResult() 获取意愿核身点头确认模式的结果信息，若未使用该意愿核身功能，该字段返回值可以不处理。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntentionActionResult(IntentionActionResult $IntentionActionResult) 设置意愿核身点头确认模式的结果信息，若未使用该意愿核身功能，该字段返回值可以不处理。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSignFaceVideoResponse extends AbstractModel
{
    /**
     * @var DetectInfoVideoData 核身视频结果。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VideoData;

    /**
     * @var IntentionQuestionResult 意愿核身问答模式结果。若未使用该意愿核身功能，该字段返回值可以不处理。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IntentionQuestionResult;

    /**
     * @var IntentionActionResult 意愿核身点头确认模式的结果信息，若未使用该意愿核身功能，该字段返回值可以不处理。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IntentionActionResult;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param DetectInfoVideoData $VideoData 核身视频结果。
注意：此字段可能返回 null，表示取不到有效值。
     * @param IntentionQuestionResult $IntentionQuestionResult 意愿核身问答模式结果。若未使用该意愿核身功能，该字段返回值可以不处理。
注意：此字段可能返回 null，表示取不到有效值。
     * @param IntentionActionResult $IntentionActionResult 意愿核身点头确认模式的结果信息，若未使用该意愿核身功能，该字段返回值可以不处理。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("VideoData",$param) and $param["VideoData"] !== null) {
            $this->VideoData = new DetectInfoVideoData();
            $this->VideoData->deserialize($param["VideoData"]);
        }

        if (array_key_exists("IntentionQuestionResult",$param) and $param["IntentionQuestionResult"] !== null) {
            $this->IntentionQuestionResult = new IntentionQuestionResult();
            $this->IntentionQuestionResult->deserialize($param["IntentionQuestionResult"]);
        }

        if (array_key_exists("IntentionActionResult",$param) and $param["IntentionActionResult"] !== null) {
            $this->IntentionActionResult = new IntentionActionResult();
            $this->IntentionActionResult->deserialize($param["IntentionActionResult"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
