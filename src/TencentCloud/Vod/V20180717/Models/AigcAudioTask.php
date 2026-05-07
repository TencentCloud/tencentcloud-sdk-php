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
 * 创建 AIGC 音效任务信息。
 *
 * @method string getTaskId() 获取<p>任务ID。</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务ID。</p>
 * @method string getStatus() 获取<p>任务状态，取值：<li>PROCESSING：处理中；</li><li>FINISH：已完成。</li></p>
 * @method void setStatus(string $Status) 设置<p>任务状态，取值：<li>PROCESSING：处理中；</li><li>FINISH：已完成。</li></p>
 * @method integer getErrCode() 获取<p>错误码。源异常时返回非0错误码，返回0时请使用各个具体任务的 ErrCode。</p>
 * @method void setErrCode(integer $ErrCode) 设置<p>错误码。源异常时返回非0错误码，返回0时请使用各个具体任务的 ErrCode。</p>
 * @method string getErrCodeExt() 获取<p>扩展错误码。空字符串表示成功，其它值表示失败。</p>
 * @method void setErrCodeExt(string $ErrCodeExt) 设置<p>扩展错误码。空字符串表示成功，其它值表示失败。</p>
 * @method string getMessage() 获取<p>错误信息。</p>
 * @method void setMessage(string $Message) 设置<p>错误信息。</p>
 * @method integer getProgress() 获取<p>任务进度，取值范围 [0-100] 。</p>
 * @method void setProgress(integer $Progress) 设置<p>任务进度，取值范围 [0-100] 。</p>
 * @method AigcAudioTaskInput getInput() 获取<p>AIGC 音频任务的输入信息。</p>
 * @method void setInput(AigcAudioTaskInput $Input) 设置<p>AIGC 音频任务的输入信息。</p>
 * @method AigcAudioTaskOutput getOutput() 获取<p>AIGC 音频任务的输出信息。</p>
 * @method void setOutput(AigcAudioTaskOutput $Output) 设置<p>AIGC 音频任务的输出信息。</p>
 */
class AigcAudioTask extends AbstractModel
{
    /**
     * @var string <p>任务ID。</p>
     */
    public $TaskId;

    /**
     * @var string <p>任务状态，取值：<li>PROCESSING：处理中；</li><li>FINISH：已完成。</li></p>
     */
    public $Status;

    /**
     * @var integer <p>错误码。源异常时返回非0错误码，返回0时请使用各个具体任务的 ErrCode。</p>
     */
    public $ErrCode;

    /**
     * @var string <p>扩展错误码。空字符串表示成功，其它值表示失败。</p>
     */
    public $ErrCodeExt;

    /**
     * @var string <p>错误信息。</p>
     */
    public $Message;

    /**
     * @var integer <p>任务进度，取值范围 [0-100] 。</p>
     */
    public $Progress;

    /**
     * @var AigcAudioTaskInput <p>AIGC 音频任务的输入信息。</p>
     */
    public $Input;

    /**
     * @var AigcAudioTaskOutput <p>AIGC 音频任务的输出信息。</p>
     */
    public $Output;

    /**
     * @param string $TaskId <p>任务ID。</p>
     * @param string $Status <p>任务状态，取值：<li>PROCESSING：处理中；</li><li>FINISH：已完成。</li></p>
     * @param integer $ErrCode <p>错误码。源异常时返回非0错误码，返回0时请使用各个具体任务的 ErrCode。</p>
     * @param string $ErrCodeExt <p>扩展错误码。空字符串表示成功，其它值表示失败。</p>
     * @param string $Message <p>错误信息。</p>
     * @param integer $Progress <p>任务进度，取值范围 [0-100] 。</p>
     * @param AigcAudioTaskInput $Input <p>AIGC 音频任务的输入信息。</p>
     * @param AigcAudioTaskOutput $Output <p>AIGC 音频任务的输出信息。</p>
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
            $this->Input = new AigcAudioTaskInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new AigcAudioTaskOutput();
            $this->Output->deserialize($param["Output"]);
        }
    }
}
