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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeKafkaConsumer返回参数结构体
 *
 * @method boolean getStatus() 获取<p>Kafka协议消费是否打开</p>
 * @method void setStatus(boolean $Status) 设置<p>Kafka协议消费是否打开</p>
 * @method string getTopicID() 获取<p>KafkaConsumer 消费时使用的Topic参数</p>
 * @method void setTopicID(string $TopicID) 设置<p>KafkaConsumer 消费时使用的Topic参数</p>
 * @method integer getCompression() 获取<p>压缩方式[0:NONE；2:SNAPPY；3:LZ4]</p>
 * @method void setCompression(integer $Compression) 设置<p>压缩方式[0:NONE；2:SNAPPY；3:LZ4]</p>
 * @method KafkaConsumerContent getConsumerContent() 获取<p>kafka协议消费数据格式</p>
 * @method void setConsumerContent(KafkaConsumerContent $ConsumerContent) 设置<p>kafka协议消费数据格式</p>
 * @method integer getHasServicesLog() 获取<p>是否开启投递服务日志。1：关闭，2：开启。</p>
 * @method void setHasServicesLog(integer $HasServicesLog) 设置<p>是否开启投递服务日志。1：关闭，2：开启。</p>
 * @method integer getScopeType() 获取<p>消费范围类型，0:最新，1:历史+最新</p>
 * @method void setScopeType(integer $ScopeType) 设置<p>消费范围类型，0:最新，1:历史+最新</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeKafkaConsumerResponse extends AbstractModel
{
    /**
     * @var boolean <p>Kafka协议消费是否打开</p>
     */
    public $Status;

    /**
     * @var string <p>KafkaConsumer 消费时使用的Topic参数</p>
     */
    public $TopicID;

    /**
     * @var integer <p>压缩方式[0:NONE；2:SNAPPY；3:LZ4]</p>
     */
    public $Compression;

    /**
     * @var KafkaConsumerContent <p>kafka协议消费数据格式</p>
     */
    public $ConsumerContent;

    /**
     * @var integer <p>是否开启投递服务日志。1：关闭，2：开启。</p>
     */
    public $HasServicesLog;

    /**
     * @var integer <p>消费范围类型，0:最新，1:历史+最新</p>
     */
    public $ScopeType;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $Status <p>Kafka协议消费是否打开</p>
     * @param string $TopicID <p>KafkaConsumer 消费时使用的Topic参数</p>
     * @param integer $Compression <p>压缩方式[0:NONE；2:SNAPPY；3:LZ4]</p>
     * @param KafkaConsumerContent $ConsumerContent <p>kafka协议消费数据格式</p>
     * @param integer $HasServicesLog <p>是否开启投递服务日志。1：关闭，2：开启。</p>
     * @param integer $ScopeType <p>消费范围类型，0:最新，1:历史+最新</p>
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

        if (array_key_exists("HasServicesLog",$param) and $param["HasServicesLog"] !== null) {
            $this->HasServicesLog = $param["HasServicesLog"];
        }

        if (array_key_exists("ScopeType",$param) and $param["ScopeType"] !== null) {
            $this->ScopeType = $param["ScopeType"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
