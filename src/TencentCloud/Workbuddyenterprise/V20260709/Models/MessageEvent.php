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
namespace TencentCloud\Workbuddyenterprise\V20260709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 消息事件
 *
 * @method integer getSequence() 获取<p>序号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSequence(integer $Sequence) 设置<p>序号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventType() 获取<p>类型 USER/TOOL/ASSISTANT</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventType(string $EventType) 设置<p>类型 USER/TOOL/ASSISTANT</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOccurredAt() 获取<p>发生时间 ISO8601</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOccurredAt(string $OccurredAt) 设置<p>发生时间 ISO8601</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MessageEventMessage getMessage() 获取<p>消息内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(MessageEventMessage $Message) 设置<p>消息内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MessageEventToolCall getToolCall() 获取<p>工具调用</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setToolCall(MessageEventToolCall $ToolCall) 设置<p>工具调用</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class MessageEvent extends AbstractModel
{
    /**
     * @var integer <p>序号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Sequence;

    /**
     * @var string <p>类型 USER/TOOL/ASSISTANT</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventType;

    /**
     * @var string <p>发生时间 ISO8601</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OccurredAt;

    /**
     * @var MessageEventMessage <p>消息内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var MessageEventToolCall <p>工具调用</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ToolCall;

    /**
     * @param integer $Sequence <p>序号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventType <p>类型 USER/TOOL/ASSISTANT</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OccurredAt <p>发生时间 ISO8601</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MessageEventMessage $Message <p>消息内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MessageEventToolCall $ToolCall <p>工具调用</p>
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
        if (array_key_exists("Sequence",$param) and $param["Sequence"] !== null) {
            $this->Sequence = $param["Sequence"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("OccurredAt",$param) and $param["OccurredAt"] !== null) {
            $this->OccurredAt = $param["OccurredAt"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = new MessageEventMessage();
            $this->Message->deserialize($param["Message"]);
        }

        if (array_key_exists("ToolCall",$param) and $param["ToolCall"] !== null) {
            $this->ToolCall = new MessageEventToolCall();
            $this->ToolCall->deserialize($param["ToolCall"]);
        }
    }
}
