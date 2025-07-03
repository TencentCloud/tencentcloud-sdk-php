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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMessage返回参数结构体
 *
 * @method string getBody() 获取消息体
 * @method void setBody(string $Body) 设置消息体
 * @method string getProperties() 获取详情参数
 * @method void setProperties(string $Properties) 设置详情参数
 * @method string getProduceTime() 获取生产时间
 * @method void setProduceTime(string $ProduceTime) 设置生产时间
 * @method string getMessageId() 获取消息ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessageId(string $MessageId) 设置消息ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProducerAddr() 获取生产者地址
 * @method void setProducerAddr(string $ProducerAddr) 设置生产者地址
 * @method array getMessageTracks() 获取消息消费情况列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessageTracks(array $MessageTracks) 设置消息消费情况列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getShowTopicName() 获取主题名称
 * @method void setShowTopicName(string $ShowTopicName) 设置主题名称
 * @method integer getMessageTracksCount() 获取消息消费情况列表总条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessageTracksCount(integer $MessageTracksCount) 设置消息消费情况列表总条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeMessageResponse extends AbstractModel
{
    /**
     * @var string 消息体
     */
    public $Body;

    /**
     * @var string 详情参数
     */
    public $Properties;

    /**
     * @var string 生产时间
     */
    public $ProduceTime;

    /**
     * @var string 消息ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MessageId;

    /**
     * @var string 生产者地址
     */
    public $ProducerAddr;

    /**
     * @var array 消息消费情况列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MessageTracks;

    /**
     * @var string 主题名称
     */
    public $ShowTopicName;

    /**
     * @var integer 消息消费情况列表总条数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MessageTracksCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Body 消息体
     * @param string $Properties 详情参数
     * @param string $ProduceTime 生产时间
     * @param string $MessageId 消息ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProducerAddr 生产者地址
     * @param array $MessageTracks 消息消费情况列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ShowTopicName 主题名称
     * @param integer $MessageTracksCount 消息消费情况列表总条数
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
        if (array_key_exists("Body",$param) and $param["Body"] !== null) {
            $this->Body = $param["Body"];
        }

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = $param["Properties"];
        }

        if (array_key_exists("ProduceTime",$param) and $param["ProduceTime"] !== null) {
            $this->ProduceTime = $param["ProduceTime"];
        }

        if (array_key_exists("MessageId",$param) and $param["MessageId"] !== null) {
            $this->MessageId = $param["MessageId"];
        }

        if (array_key_exists("ProducerAddr",$param) and $param["ProducerAddr"] !== null) {
            $this->ProducerAddr = $param["ProducerAddr"];
        }

        if (array_key_exists("MessageTracks",$param) and $param["MessageTracks"] !== null) {
            $this->MessageTracks = [];
            foreach ($param["MessageTracks"] as $key => $value){
                $obj = new MessageTrackItem();
                $obj->deserialize($value);
                array_push($this->MessageTracks, $obj);
            }
        }

        if (array_key_exists("ShowTopicName",$param) and $param["ShowTopicName"] !== null) {
            $this->ShowTopicName = $param["ShowTopicName"];
        }

        if (array_key_exists("MessageTracksCount",$param) and $param["MessageTracksCount"] !== null) {
            $this->MessageTracksCount = $param["MessageTracksCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
