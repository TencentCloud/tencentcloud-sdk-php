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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMsg返回参数结构体
 *
 * @method string getProperties() 获取消息属性。
 * @method void setProperties(string $Properties) 设置消息属性。
 * @method string getBody() 获取消息体。
 * @method void setBody(string $Body) 设置消息体。
 * @method string getBatchId() 获取批次ID。
 * @method void setBatchId(string $BatchId) 设置批次ID。
 * @method string getProduceTime() 获取生产时间。
 * @method void setProduceTime(string $ProduceTime) 设置生产时间。
 * @method string getMsgId() 获取消息ID。
 * @method void setMsgId(string $MsgId) 设置消息ID。
 * @method string getProducerName() 获取生产者名称。
 * @method void setProducerName(string $ProducerName) 设置生产者名称。
 * @method string getKey() 获取消息 key
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKey(string $Key) 设置消息 key
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMetadata() 获取消息的元数据信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetadata(string $Metadata) 设置消息的元数据信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeMsgResponse extends AbstractModel
{
    /**
     * @var string 消息属性。
     */
    public $Properties;

    /**
     * @var string 消息体。
     */
    public $Body;

    /**
     * @var string 批次ID。
     */
    public $BatchId;

    /**
     * @var string 生产时间。
     */
    public $ProduceTime;

    /**
     * @var string 消息ID。
     */
    public $MsgId;

    /**
     * @var string 生产者名称。
     */
    public $ProducerName;

    /**
     * @var string 消息 key
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Key;

    /**
     * @var string 消息的元数据信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Metadata;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Properties 消息属性。
     * @param string $Body 消息体。
     * @param string $BatchId 批次ID。
     * @param string $ProduceTime 生产时间。
     * @param string $MsgId 消息ID。
     * @param string $ProducerName 生产者名称。
     * @param string $Key 消息 key
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Metadata 消息的元数据信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = $param["Properties"];
        }

        if (array_key_exists("Body",$param) and $param["Body"] !== null) {
            $this->Body = $param["Body"];
        }

        if (array_key_exists("BatchId",$param) and $param["BatchId"] !== null) {
            $this->BatchId = $param["BatchId"];
        }

        if (array_key_exists("ProduceTime",$param) and $param["ProduceTime"] !== null) {
            $this->ProduceTime = $param["ProduceTime"];
        }

        if (array_key_exists("MsgId",$param) and $param["MsgId"] !== null) {
            $this->MsgId = $param["MsgId"];
        }

        if (array_key_exists("ProducerName",$param) and $param["ProducerName"] !== null) {
            $this->ProducerName = $param["ProducerName"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = $param["Metadata"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
