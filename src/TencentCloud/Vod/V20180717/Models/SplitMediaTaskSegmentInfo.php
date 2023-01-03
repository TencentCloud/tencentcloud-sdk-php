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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频拆条任务信息。
 *
 * @method SplitMediaTaskInput getInput() 获取视频拆条任务输入信息。
 * @method void setInput(SplitMediaTaskInput $Input) 设置视频拆条任务输入信息。
 * @method TaskOutputMediaInfo getOutput() 获取视频拆条任务输出信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutput(TaskOutputMediaInfo $Output) 设置视频拆条任务输出信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProcedureTaskId() 获取任务类型为 Procedure 的任务 ID。若发起[视频拆条](https://cloud.tencent.com/document/api/266/51098)任务时，视频拆条任务信息列表指定了任务流模板(ProcedureName)，当该任务流模板指定了 MediaProcessTask、AiAnalysisTask、AiRecognitionTask 中的一个或多个时发起该任务。
 * @method void setProcedureTaskId(string $ProcedureTaskId) 设置任务类型为 Procedure 的任务 ID。若发起[视频拆条](https://cloud.tencent.com/document/api/266/51098)任务时，视频拆条任务信息列表指定了任务流模板(ProcedureName)，当该任务流模板指定了 MediaProcessTask、AiAnalysisTask、AiRecognitionTask 中的一个或多个时发起该任务。
 * @method string getReviewAudioVideoTaskId() 获取任务类型为 ReviewAudioVideo 的任务 ID。若发起[视频拆条](https://cloud.tencent.com/document/api/266/51098)任务时，视频拆条任务信息列表指定了任务流模板(ProcedureName)，当该任务流模板指定了 ReviewAudioVideoTask 时，发起该任务。
 * @method void setReviewAudioVideoTaskId(string $ReviewAudioVideoTaskId) 设置任务类型为 ReviewAudioVideo 的任务 ID。若发起[视频拆条](https://cloud.tencent.com/document/api/266/51098)任务时，视频拆条任务信息列表指定了任务流模板(ProcedureName)，当该任务流模板指定了 ReviewAudioVideoTask 时，发起该任务。
 */
class SplitMediaTaskSegmentInfo extends AbstractModel
{
    /**
     * @var SplitMediaTaskInput 视频拆条任务输入信息。
     */
    public $Input;

    /**
     * @var TaskOutputMediaInfo 视频拆条任务输出信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Output;

    /**
     * @var string 任务类型为 Procedure 的任务 ID。若发起[视频拆条](https://cloud.tencent.com/document/api/266/51098)任务时，视频拆条任务信息列表指定了任务流模板(ProcedureName)，当该任务流模板指定了 MediaProcessTask、AiAnalysisTask、AiRecognitionTask 中的一个或多个时发起该任务。
     */
    public $ProcedureTaskId;

    /**
     * @var string 任务类型为 ReviewAudioVideo 的任务 ID。若发起[视频拆条](https://cloud.tencent.com/document/api/266/51098)任务时，视频拆条任务信息列表指定了任务流模板(ProcedureName)，当该任务流模板指定了 ReviewAudioVideoTask 时，发起该任务。
     */
    public $ReviewAudioVideoTaskId;

    /**
     * @param SplitMediaTaskInput $Input 视频拆条任务输入信息。
     * @param TaskOutputMediaInfo $Output 视频拆条任务输出信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProcedureTaskId 任务类型为 Procedure 的任务 ID。若发起[视频拆条](https://cloud.tencent.com/document/api/266/51098)任务时，视频拆条任务信息列表指定了任务流模板(ProcedureName)，当该任务流模板指定了 MediaProcessTask、AiAnalysisTask、AiRecognitionTask 中的一个或多个时发起该任务。
     * @param string $ReviewAudioVideoTaskId 任务类型为 ReviewAudioVideo 的任务 ID。若发起[视频拆条](https://cloud.tencent.com/document/api/266/51098)任务时，视频拆条任务信息列表指定了任务流模板(ProcedureName)，当该任务流模板指定了 ReviewAudioVideoTask 时，发起该任务。
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
        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new SplitMediaTaskInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new TaskOutputMediaInfo();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("ProcedureTaskId",$param) and $param["ProcedureTaskId"] !== null) {
            $this->ProcedureTaskId = $param["ProcedureTaskId"];
        }

        if (array_key_exists("ReviewAudioVideoTaskId",$param) and $param["ReviewAudioVideoTaskId"] !== null) {
            $this->ReviewAudioVideoTaskId = $param["ReviewAudioVideoTaskId"];
        }
    }
}
