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
 * ParseLiveStreamProcessNotification返回参数结构体
 *
 * @method string getNotificationType() 获取直播流处理结果类型，包含：
<li>AiReviewResult：内容审核结果；</li>
<li>AiRecognitionResult：内容识别结果；</li>
<li>LiveRecordResult：直播录制结果；</li>
<li>ProcessEof：直播流处理结束。</li>
 * @method void setNotificationType(string $NotificationType) 设置直播流处理结果类型，包含：
<li>AiReviewResult：内容审核结果；</li>
<li>AiRecognitionResult：内容识别结果；</li>
<li>LiveRecordResult：直播录制结果；</li>
<li>ProcessEof：直播流处理结束。</li>
 * @method string getTaskId() 获取视频处理任务 ID。
 * @method void setTaskId(string $TaskId) 设置视频处理任务 ID。
 * @method LiveStreamProcessErrorInfo getProcessEofInfo() 获取直播流处理错误信息，当 NotificationType 为 ProcessEof 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessEofInfo(LiveStreamProcessErrorInfo $ProcessEofInfo) 设置直播流处理错误信息，当 NotificationType 为 ProcessEof 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method LiveStreamAiReviewResultInfo getAiReviewResultInfo() 获取内容审核结果，当 NotificationType 为 AiReviewResult 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAiReviewResultInfo(LiveStreamAiReviewResultInfo $AiReviewResultInfo) 设置内容审核结果，当 NotificationType 为 AiReviewResult 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method LiveStreamAiRecognitionResultInfo getAiRecognitionResultInfo() 获取内容识别结果，当 NotificationType 为 AiRecognitionResult 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAiRecognitionResultInfo(LiveStreamAiRecognitionResultInfo $AiRecognitionResultInfo) 设置内容识别结果，当 NotificationType 为 AiRecognitionResult 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method LiveStreamAiAnalysisResultInfo getAiAnalysisResultInfo() 获取内容分析结果，当 NotificationType 为 AiAnalysisResult 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAiAnalysisResultInfo(LiveStreamAiAnalysisResultInfo $AiAnalysisResultInfo) 设置内容分析结果，当 NotificationType 为 AiAnalysisResult 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method LiveStreamAiQualityControlResultInfo getAiQualityControlResultInfo() 获取媒体质检结果，当 NotificationType 为 AiQualityControlResult 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAiQualityControlResultInfo(LiveStreamAiQualityControlResultInfo $AiQualityControlResultInfo) 设置媒体质检结果，当 NotificationType 为 AiQualityControlResult 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method LiveStreamRecordResultInfo getLiveRecordResultInfo() 获取直播录制结果，当 NotificationType 为 LiveRecordResult 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLiveRecordResultInfo(LiveStreamRecordResultInfo $LiveRecordResultInfo) 设置直播录制结果，当 NotificationType 为 LiveRecordResult 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSessionId() 获取用于去重的识别码，如果七天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长50个字符，不带或者带空字符串表示不做去重。
 * @method void setSessionId(string $SessionId) 设置用于去重的识别码，如果七天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长50个字符，不带或者带空字符串表示不做去重。
 * @method string getSessionContext() 获取来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长1000个字符。
 * @method void setSessionContext(string $SessionContext) 设置来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长1000个字符。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ParseLiveStreamProcessNotificationResponse extends AbstractModel
{
    /**
     * @var string 直播流处理结果类型，包含：
<li>AiReviewResult：内容审核结果；</li>
<li>AiRecognitionResult：内容识别结果；</li>
<li>LiveRecordResult：直播录制结果；</li>
<li>ProcessEof：直播流处理结束。</li>
     */
    public $NotificationType;

    /**
     * @var string 视频处理任务 ID。
     */
    public $TaskId;

    /**
     * @var LiveStreamProcessErrorInfo 直播流处理错误信息，当 NotificationType 为 ProcessEof 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessEofInfo;

    /**
     * @var LiveStreamAiReviewResultInfo 内容审核结果，当 NotificationType 为 AiReviewResult 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AiReviewResultInfo;

    /**
     * @var LiveStreamAiRecognitionResultInfo 内容识别结果，当 NotificationType 为 AiRecognitionResult 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AiRecognitionResultInfo;

    /**
     * @var LiveStreamAiAnalysisResultInfo 内容分析结果，当 NotificationType 为 AiAnalysisResult 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AiAnalysisResultInfo;

    /**
     * @var LiveStreamAiQualityControlResultInfo 媒体质检结果，当 NotificationType 为 AiQualityControlResult 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AiQualityControlResultInfo;

    /**
     * @var LiveStreamRecordResultInfo 直播录制结果，当 NotificationType 为 LiveRecordResult 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LiveRecordResultInfo;

    /**
     * @var string 用于去重的识别码，如果七天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长50个字符，不带或者带空字符串表示不做去重。
     */
    public $SessionId;

    /**
     * @var string 来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长1000个字符。
     */
    public $SessionContext;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $NotificationType 直播流处理结果类型，包含：
<li>AiReviewResult：内容审核结果；</li>
<li>AiRecognitionResult：内容识别结果；</li>
<li>LiveRecordResult：直播录制结果；</li>
<li>ProcessEof：直播流处理结束。</li>
     * @param string $TaskId 视频处理任务 ID。
     * @param LiveStreamProcessErrorInfo $ProcessEofInfo 直播流处理错误信息，当 NotificationType 为 ProcessEof 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param LiveStreamAiReviewResultInfo $AiReviewResultInfo 内容审核结果，当 NotificationType 为 AiReviewResult 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param LiveStreamAiRecognitionResultInfo $AiRecognitionResultInfo 内容识别结果，当 NotificationType 为 AiRecognitionResult 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param LiveStreamAiAnalysisResultInfo $AiAnalysisResultInfo 内容分析结果，当 NotificationType 为 AiAnalysisResult 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param LiveStreamAiQualityControlResultInfo $AiQualityControlResultInfo 媒体质检结果，当 NotificationType 为 AiQualityControlResult 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param LiveStreamRecordResultInfo $LiveRecordResultInfo 直播录制结果，当 NotificationType 为 LiveRecordResult 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SessionId 用于去重的识别码，如果七天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长50个字符，不带或者带空字符串表示不做去重。
     * @param string $SessionContext 来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长1000个字符。
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
        if (array_key_exists("NotificationType",$param) and $param["NotificationType"] !== null) {
            $this->NotificationType = $param["NotificationType"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("ProcessEofInfo",$param) and $param["ProcessEofInfo"] !== null) {
            $this->ProcessEofInfo = new LiveStreamProcessErrorInfo();
            $this->ProcessEofInfo->deserialize($param["ProcessEofInfo"]);
        }

        if (array_key_exists("AiReviewResultInfo",$param) and $param["AiReviewResultInfo"] !== null) {
            $this->AiReviewResultInfo = new LiveStreamAiReviewResultInfo();
            $this->AiReviewResultInfo->deserialize($param["AiReviewResultInfo"]);
        }

        if (array_key_exists("AiRecognitionResultInfo",$param) and $param["AiRecognitionResultInfo"] !== null) {
            $this->AiRecognitionResultInfo = new LiveStreamAiRecognitionResultInfo();
            $this->AiRecognitionResultInfo->deserialize($param["AiRecognitionResultInfo"]);
        }

        if (array_key_exists("AiAnalysisResultInfo",$param) and $param["AiAnalysisResultInfo"] !== null) {
            $this->AiAnalysisResultInfo = new LiveStreamAiAnalysisResultInfo();
            $this->AiAnalysisResultInfo->deserialize($param["AiAnalysisResultInfo"]);
        }

        if (array_key_exists("AiQualityControlResultInfo",$param) and $param["AiQualityControlResultInfo"] !== null) {
            $this->AiQualityControlResultInfo = new LiveStreamAiQualityControlResultInfo();
            $this->AiQualityControlResultInfo->deserialize($param["AiQualityControlResultInfo"]);
        }

        if (array_key_exists("LiveRecordResultInfo",$param) and $param["LiveRecordResultInfo"] !== null) {
            $this->LiveRecordResultInfo = new LiveStreamRecordResultInfo();
            $this->LiveRecordResultInfo->deserialize($param["LiveRecordResultInfo"]);
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
