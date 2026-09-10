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
 * 媒体处理任务信息
 *
 * @method string getTaskId() 获取<p>媒体处理任务 ID。</p>
 * @method void setTaskId(string $TaskId) 设置<p>媒体处理任务 ID。</p>
 * @method string getStatus() 获取<p>任务流状态，取值：</p><li>PROCESSING：处理中；</li><li>FINISH：已完成。</li>
 * @method void setStatus(string $Status) 设置<p>任务流状态，取值：</p><li>PROCESSING：处理中；</li><li>FINISH：已完成。</li>
 * @method integer getErrCode() 获取<p>源异常时返回非0错误码，返回0 时请使用各个具体任务的 ErrCode。</p>
 * @method void setErrCode(integer $ErrCode) 设置<p>源异常时返回非0错误码，返回0 时请使用各个具体任务的 ErrCode。</p>
 * @method string getMessage() 获取<p>源异常时返回对应异常Message，否则请使用各个具体任务的 Message。</p>
 * @method void setMessage(string $Message) 设置<p>源异常时返回对应异常Message，否则请使用各个具体任务的 Message。</p>
 * @method MediaInputInfo getInputInfo() 获取<p>媒体处理的目标文件信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputInfo(MediaInputInfo $InputInfo) 设置<p>媒体处理的目标文件信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaMetaData getMetaData() 获取<p>原始视频的元信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetaData(MediaMetaData $MetaData) 设置<p>原始视频的元信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMediaProcessResultSet() 获取<p>媒体处理任务的执行状态与结果。</p>
 * @method void setMediaProcessResultSet(array $MediaProcessResultSet) 设置<p>媒体处理任务的执行状态与结果。</p>
 * @method array getAiContentReviewResultSet() 获取<p>视频内容审核任务的执行状态与结果。</p>
 * @method void setAiContentReviewResultSet(array $AiContentReviewResultSet) 设置<p>视频内容审核任务的执行状态与结果。</p>
 * @method array getAiAnalysisResultSet() 获取<p>视频内容分析任务的执行状态与结果。</p>
 * @method void setAiAnalysisResultSet(array $AiAnalysisResultSet) 设置<p>视频内容分析任务的执行状态与结果。</p>
 * @method array getAiRecognitionResultSet() 获取<p>视频内容识别任务的执行状态与结果。</p>
 * @method void setAiRecognitionResultSet(array $AiRecognitionResultSet) 设置<p>视频内容识别任务的执行状态与结果。</p>
 * @method ScheduleQualityControlTaskResult getAiQualityControlTaskResult() 获取<p>媒体质检任务的执行状态与结果。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAiQualityControlTaskResult(ScheduleQualityControlTaskResult $AiQualityControlTaskResult) 设置<p>媒体质检任务的执行状态与结果。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSmartSubtitlesTaskResult() 获取<p>智能字幕任务的执行结果</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSmartSubtitlesTaskResult(array $SmartSubtitlesTaskResult) 设置<p>智能字幕任务的执行结果</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method SmartEraseTaskResult getSmartEraseTaskResult() 获取<p>智能擦除任务的执行结果</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSmartEraseTaskResult(SmartEraseTaskResult $SmartEraseTaskResult) 设置<p>智能擦除任务的执行结果</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method AIDubbingTaskResult getAiDubbingTaskResult() 获取<p>AI配音任务的执行结果。</p>
 * @method void setAiDubbingTaskResult(AIDubbingTaskResult $AiDubbingTaskResult) 设置<p>AI配音任务的执行结果。</p>
 */
class WorkflowTask extends AbstractModel
{
    /**
     * @var string <p>媒体处理任务 ID。</p>
     */
    public $TaskId;

    /**
     * @var string <p>任务流状态，取值：</p><li>PROCESSING：处理中；</li><li>FINISH：已完成。</li>
     */
    public $Status;

    /**
     * @var integer <p>源异常时返回非0错误码，返回0 时请使用各个具体任务的 ErrCode。</p>
     */
    public $ErrCode;

    /**
     * @var string <p>源异常时返回对应异常Message，否则请使用各个具体任务的 Message。</p>
     */
    public $Message;

    /**
     * @var MediaInputInfo <p>媒体处理的目标文件信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputInfo;

    /**
     * @var MediaMetaData <p>原始视频的元信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetaData;

    /**
     * @var array <p>媒体处理任务的执行状态与结果。</p>
     */
    public $MediaProcessResultSet;

    /**
     * @var array <p>视频内容审核任务的执行状态与结果。</p>
     */
    public $AiContentReviewResultSet;

    /**
     * @var array <p>视频内容分析任务的执行状态与结果。</p>
     */
    public $AiAnalysisResultSet;

    /**
     * @var array <p>视频内容识别任务的执行状态与结果。</p>
     */
    public $AiRecognitionResultSet;

    /**
     * @var ScheduleQualityControlTaskResult <p>媒体质检任务的执行状态与结果。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AiQualityControlTaskResult;

    /**
     * @var array <p>智能字幕任务的执行结果</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SmartSubtitlesTaskResult;

    /**
     * @var SmartEraseTaskResult <p>智能擦除任务的执行结果</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SmartEraseTaskResult;

    /**
     * @var AIDubbingTaskResult <p>AI配音任务的执行结果。</p>
     */
    public $AiDubbingTaskResult;

    /**
     * @param string $TaskId <p>媒体处理任务 ID。</p>
     * @param string $Status <p>任务流状态，取值：</p><li>PROCESSING：处理中；</li><li>FINISH：已完成。</li>
     * @param integer $ErrCode <p>源异常时返回非0错误码，返回0 时请使用各个具体任务的 ErrCode。</p>
     * @param string $Message <p>源异常时返回对应异常Message，否则请使用各个具体任务的 Message。</p>
     * @param MediaInputInfo $InputInfo <p>媒体处理的目标文件信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaMetaData $MetaData <p>原始视频的元信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MediaProcessResultSet <p>媒体处理任务的执行状态与结果。</p>
     * @param array $AiContentReviewResultSet <p>视频内容审核任务的执行状态与结果。</p>
     * @param array $AiAnalysisResultSet <p>视频内容分析任务的执行状态与结果。</p>
     * @param array $AiRecognitionResultSet <p>视频内容识别任务的执行状态与结果。</p>
     * @param ScheduleQualityControlTaskResult $AiQualityControlTaskResult <p>媒体质检任务的执行状态与结果。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SmartSubtitlesTaskResult <p>智能字幕任务的执行结果</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param SmartEraseTaskResult $SmartEraseTaskResult <p>智能擦除任务的执行结果</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param AIDubbingTaskResult $AiDubbingTaskResult <p>AI配音任务的执行结果。</p>
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("InputInfo",$param) and $param["InputInfo"] !== null) {
            $this->InputInfo = new MediaInputInfo();
            $this->InputInfo->deserialize($param["InputInfo"]);
        }

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new MediaMetaData();
            $this->MetaData->deserialize($param["MetaData"]);
        }

        if (array_key_exists("MediaProcessResultSet",$param) and $param["MediaProcessResultSet"] !== null) {
            $this->MediaProcessResultSet = [];
            foreach ($param["MediaProcessResultSet"] as $key => $value){
                $obj = new MediaProcessTaskResult();
                $obj->deserialize($value);
                array_push($this->MediaProcessResultSet, $obj);
            }
        }

        if (array_key_exists("AiContentReviewResultSet",$param) and $param["AiContentReviewResultSet"] !== null) {
            $this->AiContentReviewResultSet = [];
            foreach ($param["AiContentReviewResultSet"] as $key => $value){
                $obj = new AiContentReviewResult();
                $obj->deserialize($value);
                array_push($this->AiContentReviewResultSet, $obj);
            }
        }

        if (array_key_exists("AiAnalysisResultSet",$param) and $param["AiAnalysisResultSet"] !== null) {
            $this->AiAnalysisResultSet = [];
            foreach ($param["AiAnalysisResultSet"] as $key => $value){
                $obj = new AiAnalysisResult();
                $obj->deserialize($value);
                array_push($this->AiAnalysisResultSet, $obj);
            }
        }

        if (array_key_exists("AiRecognitionResultSet",$param) and $param["AiRecognitionResultSet"] !== null) {
            $this->AiRecognitionResultSet = [];
            foreach ($param["AiRecognitionResultSet"] as $key => $value){
                $obj = new AiRecognitionResult();
                $obj->deserialize($value);
                array_push($this->AiRecognitionResultSet, $obj);
            }
        }

        if (array_key_exists("AiQualityControlTaskResult",$param) and $param["AiQualityControlTaskResult"] !== null) {
            $this->AiQualityControlTaskResult = new ScheduleQualityControlTaskResult();
            $this->AiQualityControlTaskResult->deserialize($param["AiQualityControlTaskResult"]);
        }

        if (array_key_exists("SmartSubtitlesTaskResult",$param) and $param["SmartSubtitlesTaskResult"] !== null) {
            $this->SmartSubtitlesTaskResult = [];
            foreach ($param["SmartSubtitlesTaskResult"] as $key => $value){
                $obj = new SmartSubtitlesResult();
                $obj->deserialize($value);
                array_push($this->SmartSubtitlesTaskResult, $obj);
            }
        }

        if (array_key_exists("SmartEraseTaskResult",$param) and $param["SmartEraseTaskResult"] !== null) {
            $this->SmartEraseTaskResult = new SmartEraseTaskResult();
            $this->SmartEraseTaskResult->deserialize($param["SmartEraseTaskResult"]);
        }

        if (array_key_exists("AiDubbingTaskResult",$param) and $param["AiDubbingTaskResult"] !== null) {
            $this->AiDubbingTaskResult = new AIDubbingTaskResult();
            $this->AiDubbingTaskResult->deserialize($param["AiDubbingTaskResult"]);
        }
    }
}
