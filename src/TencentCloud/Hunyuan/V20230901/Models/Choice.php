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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 返回的回复, 支持多个
 *
 * @method string getFinishReason() 获取结束标志位，可能为 stop、 sensitive或者tool_calls。
stop 表示输出正常结束。
sensitive 只在开启流式输出审核时会出现，表示安全审核未通过。
tool_calls 标识函数调用。
 * @method void setFinishReason(string $FinishReason) 设置结束标志位，可能为 stop、 sensitive或者tool_calls。
stop 表示输出正常结束。
sensitive 只在开启流式输出审核时会出现，表示安全审核未通过。
tool_calls 标识函数调用。
 * @method Delta getDelta() 获取增量返回值，流式调用时使用该字段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDelta(Delta $Delta) 设置增量返回值，流式调用时使用该字段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method Message getMessage() 获取返回值，非流式调用时使用该字段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(Message $Message) 设置返回值，非流式调用时使用该字段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIndex() 获取索引值，流式调用时使用该字段。
 * @method void setIndex(integer $Index) 设置索引值，流式调用时使用该字段。
 * @method string getModerationLevel() 获取多轮会话风险审核，值为1时，表明存在信息安全风险，建议终止客户多轮会话。
 * @method void setModerationLevel(string $ModerationLevel) 设置多轮会话风险审核，值为1时，表明存在信息安全风险，建议终止客户多轮会话。
 */
class Choice extends AbstractModel
{
    /**
     * @var string 结束标志位，可能为 stop、 sensitive或者tool_calls。
stop 表示输出正常结束。
sensitive 只在开启流式输出审核时会出现，表示安全审核未通过。
tool_calls 标识函数调用。
     */
    public $FinishReason;

    /**
     * @var Delta 增量返回值，流式调用时使用该字段。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Delta;

    /**
     * @var Message 返回值，非流式调用时使用该字段。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var integer 索引值，流式调用时使用该字段。
     */
    public $Index;

    /**
     * @var string 多轮会话风险审核，值为1时，表明存在信息安全风险，建议终止客户多轮会话。
     */
    public $ModerationLevel;

    /**
     * @param string $FinishReason 结束标志位，可能为 stop、 sensitive或者tool_calls。
stop 表示输出正常结束。
sensitive 只在开启流式输出审核时会出现，表示安全审核未通过。
tool_calls 标识函数调用。
     * @param Delta $Delta 增量返回值，流式调用时使用该字段。
注意：此字段可能返回 null，表示取不到有效值。
     * @param Message $Message 返回值，非流式调用时使用该字段。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Index 索引值，流式调用时使用该字段。
     * @param string $ModerationLevel 多轮会话风险审核，值为1时，表明存在信息安全风险，建议终止客户多轮会话。
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
        if (array_key_exists("FinishReason",$param) and $param["FinishReason"] !== null) {
            $this->FinishReason = $param["FinishReason"];
        }

        if (array_key_exists("Delta",$param) and $param["Delta"] !== null) {
            $this->Delta = new Delta();
            $this->Delta->deserialize($param["Delta"]);
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = new Message();
            $this->Message->deserialize($param["Message"]);
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("ModerationLevel",$param) and $param["ModerationLevel"] !== null) {
            $this->ModerationLevel = $param["ModerationLevel"];
        }
    }
}
