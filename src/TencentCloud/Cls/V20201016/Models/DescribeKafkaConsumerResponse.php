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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeKafkaConsumer返回参数结构体
 *
 * @method boolean getStatus() 获取Kafka协议消费是否打开
 * @method void setStatus(boolean $Status) 设置Kafka协议消费是否打开
 * @method string getTopicID() 获取KafkaConsumer 消费时使用的Topic参数
 * @method void setTopicID(string $TopicID) 设置KafkaConsumer 消费时使用的Topic参数
 * @method integer getCompression() 获取压缩方式[0:NONE；2:SNAPPY；3:LZ4]
 * @method void setCompression(integer $Compression) 设置压缩方式[0:NONE；2:SNAPPY；3:LZ4]
 * @method KafkaConsumerContent getConsumerContent() 获取kafka协议消费数据格式
 * @method void setConsumerContent(KafkaConsumerContent $ConsumerContent) 设置kafka协议消费数据格式
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeKafkaConsumerResponse extends AbstractModel
{
    /**
     * @var boolean Kafka协议消费是否打开
     */
    public $Status;

    /**
     * @var string KafkaConsumer 消费时使用的Topic参数
     */
    public $TopicID;

    /**
     * @var integer 压缩方式[0:NONE；2:SNAPPY；3:LZ4]
     */
    public $Compression;

    /**
     * @var KafkaConsumerContent kafka协议消费数据格式
     */
    public $ConsumerContent;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $Status Kafka协议消费是否打开
     * @param string $TopicID KafkaConsumer 消费时使用的Topic参数
     * @param integer $Compression 压缩方式[0:NONE；2:SNAPPY；3:LZ4]
     * @param KafkaConsumerContent $ConsumerContent kafka协议消费数据格式
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("TopicID",$param) and $param["TopicID"] !== null) {
            $this->TopicID = $param["TopicID"];
        }

        if (array_key_exists("Compression",$param) and $param["Compression"] !== null) {
            $this->Compression = $param["Compression"];
        }

        if (array_key_exists("ConsumerContent",$param) and $param["ConsumerContent"] !== null) {
            $this->ConsumerContent = new KafkaConsumerContent();
            $this->ConsumerContent->deserialize($param["ConsumerContent"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
