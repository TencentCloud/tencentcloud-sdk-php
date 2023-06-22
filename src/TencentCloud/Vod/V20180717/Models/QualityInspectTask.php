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
 * 音画质检测任务信息。
 *
 * @method string getTaskId() 获取任务 ID。
 * @method void setTaskId(string $TaskId) 设置任务 ID。
 * @method string getStatus() 获取任务状态，取值：
<li>PROCESSING：处理中；</li>
<li>FINISH：已完成。</li>
 * @method void setStatus(string $Status) 设置任务状态，取值：
<li>PROCESSING：处理中；</li>
<li>FINISH：已完成。</li>
 * @method string getErrCodeExt() 获取错误码，空字符串表示成功，其他值表示失败，取值请参考 [视频处理类错误码](https://cloud.tencent.com/document/product/266/50368#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81) 列表。
 * @method void setErrCodeExt(string $ErrCodeExt) 设置错误码，空字符串表示成功，其他值表示失败，取值请参考 [视频处理类错误码](https://cloud.tencent.com/document/product/266/50368#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81) 列表。
 * @method string getMessage() 获取错误信息。
 * @method void setMessage(string $Message) 设置错误信息。
 * @method MediaMetaData getMetaData() 获取音画质检测输入音视频的元信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetaData(MediaMetaData $MetaData) 设置音画质检测输入音视频的元信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method QualityInspectTaskInput getInput() 获取音画质检测任务输入。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInput(QualityInspectTaskInput $Input) 设置音画质检测任务输入。
注意：此字段可能返回 null，表示取不到有效值。
 * @method QualityInspectTaskOutput getOutput() 获取音画质检测任务输出。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutput(QualityInspectTaskOutput $Output) 设置音画质检测任务输出。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSessionId() 获取用于去重的识别码，如果七天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
 * @method void setSessionId(string $SessionId) 设置用于去重的识别码，如果七天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
 * @method string getSessionContext() 获取来源上下文，用于透传用户请求信息，音画质检测完成回调将返回该字段值，最长 1000 个字符。
 * @method void setSessionContext(string $SessionContext) 设置来源上下文，用于透传用户请求信息，音画质检测完成回调将返回该字段值，最长 1000 个字符。
 */
class QualityInspectTask extends AbstractModel
{
    /**
     * @var string 任务 ID。
     */
    public $TaskId;

    /**
     * @var string 任务状态，取值：
<li>PROCESSING：处理中；</li>
<li>FINISH：已完成。</li>
     */
    public $Status;

    /**
     * @var string 错误码，空字符串表示成功，其他值表示失败，取值请参考 [视频处理类错误码](https://cloud.tencent.com/document/product/266/50368#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81) 列表。
     */
    public $ErrCodeExt;

    /**
     * @var string 错误信息。
     */
    public $Message;

    /**
     * @var MediaMetaData 音画质检测输入音视频的元信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetaData;

    /**
     * @var QualityInspectTaskInput 音画质检测任务输入。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Input;

    /**
     * @var QualityInspectTaskOutput 音画质检测任务输出。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Output;

    /**
     * @var string 用于去重的识别码，如果七天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
     */
    public $SessionId;

    /**
     * @var string 来源上下文，用于透传用户请求信息，音画质检测完成回调将返回该字段值，最长 1000 个字符。
     */
    public $SessionContext;

    /**
     * @param string $TaskId 任务 ID。
     * @param string $Status 任务状态，取值：
<li>PROCESSING：处理中；</li>
<li>FINISH：已完成。</li>
     * @param string $ErrCodeExt 错误码，空字符串表示成功，其他值表示失败，取值请参考 [视频处理类错误码](https://cloud.tencent.com/document/product/266/50368#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81) 列表。
     * @param string $Message 错误信息。
     * @param MediaMetaData $MetaData 音画质检测输入音视频的元信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param QualityInspectTaskInput $Input 音画质检测任务输入。
注意：此字段可能返回 null，表示取不到有效值。
     * @param QualityInspectTaskOutput $Output 音画质检测任务输出。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SessionId 用于去重的识别码，如果七天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
     * @param string $SessionContext 来源上下文，用于透传用户请求信息，音画质检测完成回调将返回该字段值，最长 1000 个字符。
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

        if (array_key_exists("ErrCodeExt",$param) and $param["ErrCodeExt"] !== null) {
            $this->ErrCodeExt = $param["ErrCodeExt"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new MediaMetaData();
            $this->MetaData->deserialize($param["MetaData"]);
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new QualityInspectTaskInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new QualityInspectTaskOutput();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }
    }
}
