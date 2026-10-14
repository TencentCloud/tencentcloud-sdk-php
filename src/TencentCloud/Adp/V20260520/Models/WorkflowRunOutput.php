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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工作流运行实例输出信息
 *
 * @method string getOutput() 获取工作流输出
 * @method void setOutput(string $Output) 设置工作流输出
 * @method ReplyMessage getLatestMessage() 获取当前的回复消息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestMessage(ReplyMessage $LatestMessage) 设置当前的回复消息
注意：此字段可能返回 null，表示取不到有效值。
 */
class WorkflowRunOutput extends AbstractModel
{
    /**
     * @var string 工作流输出
     */
    public $Output;

    /**
     * @var ReplyMessage 当前的回复消息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestMessage;

    /**
     * @param string $Output 工作流输出
     * @param ReplyMessage $LatestMessage 当前的回复消息
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
        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = $param["Output"];
        }

        if (array_key_exists("LatestMessage",$param) and $param["LatestMessage"] !== null) {
            $this->LatestMessage = new ReplyMessage();
            $this->LatestMessage->deserialize($param["LatestMessage"]);
        }
    }
}
