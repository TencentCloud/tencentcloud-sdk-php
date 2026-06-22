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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMessage返回参数结构体
 *
 * @method string getBody() 获取<p>消息体</p>
 * @method void setBody(string $Body) 设置<p>消息体</p>
 * @method string getProperties() 获取<p>详情参数</p>
 * @method void setProperties(string $Properties) 设置<p>详情参数</p>
 * @method string getProduceTime() 获取<p>生产时间</p>
 * @method void setProduceTime(string $ProduceTime) 设置<p>生产时间</p>
 * @method string getMessageId() 获取<p>消息ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessageId(string $MessageId) 设置<p>消息ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProducerAddr() 获取<p>生产者地址</p>
 * @method void setProducerAddr(string $ProducerAddr) 设置<p>生产者地址</p>
 * @method array getMessageTracks() 获取<p>消息消费情况列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessageTracks(array $MessageTracks) 设置<p>消息消费情况列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getShowTopicName() 获取<p>主题名称</p>
 * @method void setShowTopicName(string $ShowTopicName) 设置<p>主题名称</p>
 * @method string getLiteTopic() 获取<p>轻量主题名称</p>
 * @method void setLiteTopic(string $LiteTopic) 设置<p>轻量主题名称</p>
 * @method integer getMessageTracksCount() 获取<p>消息消费情况列表总条数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessageTracksCount(integer $MessageTracksCount) 设置<p>消息消费情况列表总条数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeMessageResponse extends AbstractModel
{
    /**
     * @var string <p>消息体</p>
     */
    public $Body;

    /**
     * @var string <p>详情参数</p>
     */
    public $Properties;

    /**
     * @var string <p>生产时间</p>
     */
    public $ProduceTime;

    /**
     * @var string <p>消息ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MessageId;

    /**
     * @var string <p>生产者地址</p>
     */
    public $ProducerAddr;

    /**
     * @var array <p>消息消费情况列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MessageTracks;

    /**
     * @var string <p>主题名称</p>
     */
    public $ShowTopicName;

    /**
     * @var string <p>轻量主题名称</p>
     */
    public $LiteTopic;

    /**
     * @var integer <p>消息消费情况列表总条数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MessageTracksCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Body <p>消息体</p>
     * @param string $Properties <p>详情参数</p>
     * @param string $ProduceTime <p>生产时间</p>
     * @param string $MessageId <p>消息ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProducerAddr <p>生产者地址</p>
     * @param array $MessageTracks <p>消息消费情况列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ShowTopicName <p>主题名称</p>
     * @param string $LiteTopic <p>轻量主题名称</p>
     * @param integer $MessageTracksCount <p>消息消费情况列表总条数</p>
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

        if (array_key_exists("LiteTopic",$param) and $param["LiteTopic"] !== null) {
            $this->LiteTopic = $param["LiteTopic"];
        }

        if (array_key_exists("MessageTracksCount",$param) and $param["MessageTracksCount"] !== null) {
            $this->MessageTracksCount = $param["MessageTracksCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
