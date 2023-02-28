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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单条消息体内容
 *
 * @method integer getMessageType() 获取消息类型。0表示文本消息，1表示图片消息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessageType(integer $MessageType) 设置消息类型。0表示文本消息，1表示图片消息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTextMessage() 获取文本消息内容。message type为0时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTextMessage(string $TextMessage) 设置文本消息内容。message type为0时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImageMessage() 获取图片消息URL。 message type为1时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageMessage(string $ImageMessage) 设置图片消息URL。 message type为1时有效。
注意：此字段可能返回 null，表示取不到有效值。
 */
class MessageItem extends AbstractModel
{
    /**
     * @var integer 消息类型。0表示文本消息，1表示图片消息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MessageType;

    /**
     * @var string 文本消息内容。message type为0时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TextMessage;

    /**
     * @var string 图片消息URL。 message type为1时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageMessage;

    /**
     * @param integer $MessageType 消息类型。0表示文本消息，1表示图片消息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TextMessage 文本消息内容。message type为0时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImageMessage 图片消息URL。 message type为1时有效。
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
        if (array_key_exists("MessageType",$param) and $param["MessageType"] !== null) {
            $this->MessageType = $param["MessageType"];
        }

        if (array_key_exists("TextMessage",$param) and $param["TextMessage"] !== null) {
            $this->TextMessage = $param["TextMessage"];
        }

        if (array_key_exists("ImageMessage",$param) and $param["ImageMessage"] !== null) {
            $this->ImageMessage = $param["ImageMessage"];
        }
    }
}
