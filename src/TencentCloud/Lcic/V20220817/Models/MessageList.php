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
 * 历史消息列表
 *
 * @method integer getTimestamp() 获取消息时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimestamp(integer $Timestamp) 设置消息时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFromAccount() 获取消息发送者
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFromAccount(string $FromAccount) 设置消息发送者
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSeq() 获取消息序列号，当前课堂内唯一且单调递增
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSeq(integer $Seq) 设置消息序列号，当前课堂内唯一且单调递增
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMessageBody() 获取历史消息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessageBody(array $MessageBody) 设置历史消息列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class MessageList extends AbstractModel
{
    /**
     * @var integer 消息时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timestamp;

    /**
     * @var string 消息发送者
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FromAccount;

    /**
     * @var integer 消息序列号，当前课堂内唯一且单调递增
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Seq;

    /**
     * @var array 历史消息列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MessageBody;

    /**
     * @param integer $Timestamp 消息时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FromAccount 消息发送者
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Seq 消息序列号，当前课堂内唯一且单调递增
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MessageBody 历史消息列表
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
        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("FromAccount",$param) and $param["FromAccount"] !== null) {
            $this->FromAccount = $param["FromAccount"];
        }

        if (array_key_exists("Seq",$param) and $param["Seq"] !== null) {
            $this->Seq = $param["Seq"];
        }

        if (array_key_exists("MessageBody",$param) and $param["MessageBody"] !== null) {
            $this->MessageBody = [];
            foreach ($param["MessageBody"] as $key => $value){
                $obj = new MessageItem();
                $obj->deserialize($value);
                array_push($this->MessageBody, $obj);
            }
        }
    }
}
