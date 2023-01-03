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
 * 编辑视频任务信息
 *
 * @method string getTaskId() 获取任务 ID。
 * @method void setTaskId(string $TaskId) 设置任务 ID。
 * @method string getStatus() 获取任务流状态，取值：
<li>PROCESSING：处理中；</li>
<li>FINISH：已完成。</li>
 * @method void setStatus(string $Status) 设置任务流状态，取值：
<li>PROCESSING：处理中；</li>
<li>FINISH：已完成。</li>
 * @method integer getErrCode() 获取错误码，0 表示成功，其他值表示失败：
<li>40000：输入参数不合法，请检查输入参数；</li>
<li>60000：源文件错误（如视频数据损坏），请确认源文件是否正常；</li>
<li>70000：内部服务错误，建议重试。</li>
 * @method void setErrCode(integer $ErrCode) 设置错误码，0 表示成功，其他值表示失败：
<li>40000：输入参数不合法，请检查输入参数；</li>
<li>60000：源文件错误（如视频数据损坏），请确认源文件是否正常；</li>
<li>70000：内部服务错误，建议重试。</li>
 * @method string getErrCodeExt() 获取错误码，空字符串表示成功，其他值表示失败，取值请参考 [视频处理类错误码](https://cloud.tencent.com/document/product/266/50368#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81) 列表。
 * @method void setErrCodeExt(string $ErrCodeExt) 设置错误码，空字符串表示成功，其他值表示失败，取值请参考 [视频处理类错误码](https://cloud.tencent.com/document/product/266/50368#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81) 列表。
 * @method string getMessage() 获取错误信息。
 * @method void setMessage(string $Message) 设置错误信息。
 * @method integer getProgress() 获取编辑视频任务进度，取值范围 [0-100] 。
 * @method void setProgress(integer $Progress) 设置编辑视频任务进度，取值范围 [0-100] 。
 * @method EditMediaTaskInput getInput() 获取视频编辑任务的输入。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInput(EditMediaTaskInput $Input) 设置视频编辑任务的输入。
注意：此字段可能返回 null，表示取不到有效值。
 * @method EditMediaTaskOutput getOutput() 获取视频编辑任务的输出。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutput(EditMediaTaskOutput $Output) 设置视频编辑任务的输出。
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaMetaData getMetaData() 获取输出视频的元信息。
 * @method void setMetaData(MediaMetaData $MetaData) 设置输出视频的元信息。
 * @method string getProcedureTaskId() 获取任务类型为 Procedure 的任务 ID。若发起[编辑视频](https://cloud.tencent.com/document/api/266/34783)任务时指定了任务流模板(ProcedureName)，当该任务流模板指定了 MediaProcessTask、AiAnalysisTask、AiRecognitionTask 中的一个或多个时发起该任务。
 * @method void setProcedureTaskId(string $ProcedureTaskId) 设置任务类型为 Procedure 的任务 ID。若发起[编辑视频](https://cloud.tencent.com/document/api/266/34783)任务时指定了任务流模板(ProcedureName)，当该任务流模板指定了 MediaProcessTask、AiAnalysisTask、AiRecognitionTask 中的一个或多个时发起该任务。
 * @method string getReviewAudioVideoTaskId() 获取任务类型为 ReviewAudioVideo 的任务 ID。若发起[编辑视频](https://cloud.tencent.com/document/api/266/34783)任务时指定了任务流模板(ProcedureName)，当该任务流模板指定了 ReviewAudioVideoTask 时，发起该任务。
 * @method void setReviewAudioVideoTaskId(string $ReviewAudioVideoTaskId) 设置任务类型为 ReviewAudioVideo 的任务 ID。若发起[编辑视频](https://cloud.tencent.com/document/api/266/34783)任务时指定了任务流模板(ProcedureName)，当该任务流模板指定了 ReviewAudioVideoTask 时，发起该任务。
 * @method string getSessionId() 获取用于去重的识别码，如果七天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
 * @method void setSessionId(string $SessionId) 设置用于去重的识别码，如果七天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
 * @method string getSessionContext() 获取来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。
 * @method void setSessionContext(string $SessionContext) 设置来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。
 */
class EditMediaTask extends AbstractModel
{
    /**
     * @var string 任务 ID。
     */
    public $TaskId;

    /**
     * @var string 任务流状态，取值：
<li>PROCESSING：处理中；</li>
<li>FINISH：已完成。</li>
     */
    public $Status;

    /**
     * @var integer 错误码，0 表示成功，其他值表示失败：
<li>40000：输入参数不合法，请检查输入参数；</li>
<li>60000：源文件错误（如视频数据损坏），请确认源文件是否正常；</li>
<li>70000：内部服务错误，建议重试。</li>
     */
    public $ErrCode;

    /**
     * @var string 错误码，空字符串表示成功，其他值表示失败，取值请参考 [视频处理类错误码](https://cloud.tencent.com/document/product/266/50368#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81) 列表。
     */
    public $ErrCodeExt;

    /**
     * @var string 错误信息。
     */
    public $Message;

    /**
     * @var integer 编辑视频任务进度，取值范围 [0-100] 。
     */
    public $Progress;

    /**
     * @var EditMediaTaskInput 视频编辑任务的输入。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Input;

    /**
     * @var EditMediaTaskOutput 视频编辑任务的输出。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Output;

    /**
     * @var MediaMetaData 输出视频的元信息。
     */
    public $MetaData;

    /**
     * @var string 任务类型为 Procedure 的任务 ID。若发起[编辑视频](https://cloud.tencent.com/document/api/266/34783)任务时指定了任务流模板(ProcedureName)，当该任务流模板指定了 MediaProcessTask、AiAnalysisTask、AiRecognitionTask 中的一个或多个时发起该任务。
     */
    public $ProcedureTaskId;

    /**
     * @var string 任务类型为 ReviewAudioVideo 的任务 ID。若发起[编辑视频](https://cloud.tencent.com/document/api/266/34783)任务时指定了任务流模板(ProcedureName)，当该任务流模板指定了 ReviewAudioVideoTask 时，发起该任务。
     */
    public $ReviewAudioVideoTaskId;

    /**
     * @var string 用于去重的识别码，如果七天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
     */
    public $SessionId;

    /**
     * @var string 来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。
     */
    public $SessionContext;

    /**
     * @param string $TaskId 任务 ID。
     * @param string $Status 任务流状态，取值：
<li>PROCESSING：处理中；</li>
<li>FINISH：已完成。</li>
     * @param integer $ErrCode 错误码，0 表示成功，其他值表示失败：
<li>40000：输入参数不合法，请检查输入参数；</li>
<li>60000：源文件错误（如视频数据损坏），请确认源文件是否正常；</li>
<li>70000：内部服务错误，建议重试。</li>
     * @param string $ErrCodeExt 错误码，空字符串表示成功，其他值表示失败，取值请参考 [视频处理类错误码](https://cloud.tencent.com/document/product/266/50368#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81) 列表。
     * @param string $Message 错误信息。
     * @param integer $Progress 编辑视频任务进度，取值范围 [0-100] 。
     * @param EditMediaTaskInput $Input 视频编辑任务的输入。
注意：此字段可能返回 null，表示取不到有效值。
     * @param EditMediaTaskOutput $Output 视频编辑任务的输出。
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaMetaData $MetaData 输出视频的元信息。
     * @param string $ProcedureTaskId 任务类型为 Procedure 的任务 ID。若发起[编辑视频](https://cloud.tencent.com/document/api/266/34783)任务时指定了任务流模板(ProcedureName)，当该任务流模板指定了 MediaProcessTask、AiAnalysisTask、AiRecognitionTask 中的一个或多个时发起该任务。
     * @param string $ReviewAudioVideoTaskId 任务类型为 ReviewAudioVideo 的任务 ID。若发起[编辑视频](https://cloud.tencent.com/document/api/266/34783)任务时指定了任务流模板(ProcedureName)，当该任务流模板指定了 ReviewAudioVideoTask 时，发起该任务。
     * @param string $SessionId 用于去重的识别码，如果七天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
     * @param string $SessionContext 来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。
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

        if (array_key_exists("ErrCodeExt",$param) and $param["ErrCodeExt"] !== null) {
            $this->ErrCodeExt = $param["ErrCodeExt"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new EditMediaTaskInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new EditMediaTaskOutput();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new MediaMetaData();
            $this->MetaData->deserialize($param["MetaData"]);
        }

        if (array_key_exists("ProcedureTaskId",$param) and $param["ProcedureTaskId"] !== null) {
            $this->ProcedureTaskId = $param["ProcedureTaskId"];
        }

        if (array_key_exists("ReviewAudioVideoTaskId",$param) and $param["ReviewAudioVideoTaskId"] !== null) {
            $this->ReviewAudioVideoTaskId = $param["ReviewAudioVideoTaskId"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }
    }
}
