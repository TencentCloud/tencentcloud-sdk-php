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
 * DescribeMsgTrace返回参数结构体
 *
 * @method ProducerLog getProducerLog() 获取生产信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProducerLog(ProducerLog $ProducerLog) 设置生产信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ServerLog getServerLog() 获取服务方信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServerLog(ServerLog $ServerLog) 设置服务方信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ConsumerLogs getConsumerLogs() 获取消费信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsumerLogs(ConsumerLogs $ConsumerLogs) 设置消费信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeMsgTraceResponse extends AbstractModel
{
    /**
     * @var ProducerLog 生产信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProducerLog;

    /**
     * @var ServerLog 服务方信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServerLog;

    /**
     * @var ConsumerLogs 消费信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConsumerLogs;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param ProducerLog $ProducerLog 生产信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ServerLog $ServerLog 服务方信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ConsumerLogs $ConsumerLogs 消费信息。
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
        if (array_key_exists("ProducerLog",$param) and $param["ProducerLog"] !== null) {
            $this->ProducerLog = new ProducerLog();
            $this->ProducerLog->deserialize($param["ProducerLog"]);
        }

        if (array_key_exists("ServerLog",$param) and $param["ServerLog"] !== null) {
            $this->ServerLog = new ServerLog();
            $this->ServerLog->deserialize($param["ServerLog"]);
        }

        if (array_key_exists("ConsumerLogs",$param) and $param["ConsumerLogs"] !== null) {
            $this->ConsumerLogs = new ConsumerLogs();
            $this->ConsumerLogs->deserialize($param["ConsumerLogs"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
