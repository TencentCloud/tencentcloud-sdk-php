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
 * 智能分析通用结果类型
 *
 * @method string getStatus() 获取<p>任务状态，有 PROCESSING，SUCCESS 和 FAIL 三种。</p><p>枚举值：</p><ul><li>PROCESSING： 处理中</li><li>SUCCESS： 成功</li><li>FAIL： 失败</li></ul>
 * @method void setStatus(string $Status) 设置<p>任务状态，有 PROCESSING，SUCCESS 和 FAIL 三种。</p><p>枚举值：</p><ul><li>PROCESSING： 处理中</li><li>SUCCESS： 成功</li><li>FAIL： 失败</li></ul>
 * @method integer getErrCode() 获取<p>错误码，0：成功，其他值：失败。</p>
 * @method void setErrCode(integer $ErrCode) 设置<p>错误码，0：成功，其他值：失败。</p>
 * @method string getMessage() 获取<p>错误信息。</p>
 * @method void setMessage(string $Message) 设置<p>错误信息。</p>
 * @method AiAnalysisTaskGenericInput getInput() 获取<p>智能分析任务输入。</p>
 * @method void setInput(AiAnalysisTaskGenericInput $Input) 设置<p>智能分析任务输入。</p>
 * @method AiAnalysisTaskGenericOutput getOutput() 获取<p>智能分析任务输出。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutput(AiAnalysisTaskGenericOutput $Output) 设置<p>智能分析任务输出。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class AiAnalysisTaskGenericResult extends AbstractModel
{
    /**
     * @var string <p>任务状态，有 PROCESSING，SUCCESS 和 FAIL 三种。</p><p>枚举值：</p><ul><li>PROCESSING： 处理中</li><li>SUCCESS： 成功</li><li>FAIL： 失败</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>错误码，0：成功，其他值：失败。</p>
     */
    public $ErrCode;

    /**
     * @var string <p>错误信息。</p>
     */
    public $Message;

    /**
     * @var AiAnalysisTaskGenericInput <p>智能分析任务输入。</p>
     */
    public $Input;

    /**
     * @var AiAnalysisTaskGenericOutput <p>智能分析任务输出。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Output;

    /**
     * @param string $Status <p>任务状态，有 PROCESSING，SUCCESS 和 FAIL 三种。</p><p>枚举值：</p><ul><li>PROCESSING： 处理中</li><li>SUCCESS： 成功</li><li>FAIL： 失败</li></ul>
     * @param integer $ErrCode <p>错误码，0：成功，其他值：失败。</p>
     * @param string $Message <p>错误信息。</p>
     * @param AiAnalysisTaskGenericInput $Input <p>智能分析任务输入。</p>
     * @param AiAnalysisTaskGenericOutput $Output <p>智能分析任务输出。</p>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new AiAnalysisTaskGenericInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new AiAnalysisTaskGenericOutput();
            $this->Output->deserialize($param["Output"]);
        }
    }
}
