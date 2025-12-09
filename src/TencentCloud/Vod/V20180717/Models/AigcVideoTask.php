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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AIGC 生视频任务信息
 *
 * @method string getTaskId() 获取任务 ID。
 * @method void setTaskId(string $TaskId) 设置任务 ID。
 * @method string getStatus() 获取任务状态，取值：<li>PROCESSING：处理中；</li><li>FINISH：已完成。</li>
 * @method void setStatus(string $Status) 设置任务状态，取值：<li>PROCESSING：处理中；</li><li>FINISH：已完成。</li>
 * @method integer getErrCode() 获取错误码。源异常时返回非0错误码，返回0时请使用各个具体任务的 ErrCode。
 * @method void setErrCode(integer $ErrCode) 设置错误码。源异常时返回非0错误码，返回0时请使用各个具体任务的 ErrCode。
 * @method string getMessage() 获取错误信息。
 * @method void setMessage(string $Message) 设置错误信息。
 * @method integer getProgress() 获取任务进度，取值范围 [0-100] 。
 * @method void setProgress(integer $Progress) 设置任务进度，取值范围 [0-100] 。
 * @method AigcVideoTaskInput getInput() 获取AIGC 生视频任务的输入信息。
 * @method void setInput(AigcVideoTaskInput $Input) 设置AIGC 生视频任务的输入信息。
 * @method AigcVideoTaskOutput getOutput() 获取AIGC 生视频任务的输出信息。
 * @method void setOutput(AigcVideoTaskOutput $Output) 设置AIGC 生视频任务的输出信息。
 * @method string getSessionId() 获取用于去重的识别码，如果七天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
 * @method void setSessionId(string $SessionId) 设置用于去重的识别码，如果七天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
 * @method string getSessionContext() 获取来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。
 * @method void setSessionContext(string $SessionContext) 设置来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。
 */
class AigcVideoTask extends AbstractModel
{
    /**
     * @var string 任务 ID。
     */
    public $TaskId;

    /**
     * @var string 任务状态，取值：<li>PROCESSING：处理中；</li><li>FINISH：已完成。</li>
     */
    public $Status;

    /**
     * @var integer 错误码。源异常时返回非0错误码，返回0时请使用各个具体任务的 ErrCode。
     */
    public $ErrCode;

    /**
     * @var string 错误信息。
     */
    public $Message;

    /**
     * @var integer 任务进度，取值范围 [0-100] 。
     */
    public $Progress;

    /**
     * @var AigcVideoTaskInput AIGC 生视频任务的输入信息。
     */
    public $Input;

    /**
     * @var AigcVideoTaskOutput AIGC 生视频任务的输出信息。
     */
    public $Output;

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
     * @param string $Status 任务状态，取值：<li>PROCESSING：处理中；</li><li>FINISH：已完成。</li>
     * @param integer $ErrCode 错误码。源异常时返回非0错误码，返回0时请使用各个具体任务的 ErrCode。
     * @param string $Message 错误信息。
     * @param integer $Progress 任务进度，取值范围 [0-100] 。
     * @param AigcVideoTaskInput $Input AIGC 生视频任务的输入信息。
     * @param AigcVideoTaskOutput $Output AIGC 生视频任务的输出信息。
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

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new AigcVideoTaskInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new AigcVideoTaskOutput();
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
