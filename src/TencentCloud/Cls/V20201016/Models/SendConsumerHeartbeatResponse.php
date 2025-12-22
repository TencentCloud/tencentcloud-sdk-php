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
 * SendConsumerHeartbeat返回参数结构体
 *
 * @method string getConsumerGroup() 获取日志主题对应的消费组标识
 * @method void setConsumerGroup(string $ConsumerGroup) 设置日志主题对应的消费组标识
 * @method array getTopicPartitionsInfo() 获取分区信息
 * @method void setTopicPartitionsInfo(array $TopicPartitionsInfo) 设置分区信息
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class SendConsumerHeartbeatResponse extends AbstractModel
{
    /**
     * @var string 日志主题对应的消费组标识
     */
    public $ConsumerGroup;

    /**
     * @var array 分区信息
     */
    public $TopicPartitionsInfo;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ConsumerGroup 日志主题对应的消费组标识
     * @param array $TopicPartitionsInfo 分区信息
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
        if (array_key_exists("ConsumerGroup",$param) and $param["ConsumerGroup"] !== null) {
            $this->ConsumerGroup = $param["ConsumerGroup"];
        }

        if (array_key_exists("TopicPartitionsInfo",$param) and $param["TopicPartitionsInfo"] !== null) {
            $this->TopicPartitionsInfo = [];
            foreach ($param["TopicPartitionsInfo"] as $key => $value){
                $obj = new TopicPartitionInfo();
                $obj->deserialize($value);
                array_push($this->TopicPartitionsInfo, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
