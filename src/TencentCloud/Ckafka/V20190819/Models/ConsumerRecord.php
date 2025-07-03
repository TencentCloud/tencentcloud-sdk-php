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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 消息记录
 *
 * @method string getTopic() 获取主题名
 * @method void setTopic(string $Topic) 设置主题名
 * @method integer getPartition() 获取分区id
 * @method void setPartition(integer $Partition) 设置分区id
 * @method integer getOffset() 获取位点
 * @method void setOffset(integer $Offset) 设置位点
 * @method string getKey() 获取消息key
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKey(string $Key) 设置消息key
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取消息value
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置消息value
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimestamp() 获取消息时间戳
 * @method void setTimestamp(integer $Timestamp) 设置消息时间戳
 * @method string getHeaders() 获取消息headers
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeaders(string $Headers) 设置消息headers
注意：此字段可能返回 null，表示取不到有效值。
 */
class ConsumerRecord extends AbstractModel
{
    /**
     * @var string 主题名
     */
    public $Topic;

    /**
     * @var integer 分区id
     */
    public $Partition;

    /**
     * @var integer 位点
     */
    public $Offset;

    /**
     * @var string 消息key
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Key;

    /**
     * @var string 消息value
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @var integer 消息时间戳
     */
    public $Timestamp;

    /**
     * @var string 消息headers
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Headers;

    /**
     * @param string $Topic 主题名
     * @param integer $Partition 分区id
     * @param integer $Offset 位点
     * @param string $Key 消息key
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value 消息value
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Timestamp 消息时间戳
     * @param string $Headers 消息headers
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
        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("Partition",$param) and $param["Partition"] !== null) {
            $this->Partition = $param["Partition"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Headers",$param) and $param["Headers"] !== null) {
            $this->Headers = $param["Headers"];
        }
    }
}
