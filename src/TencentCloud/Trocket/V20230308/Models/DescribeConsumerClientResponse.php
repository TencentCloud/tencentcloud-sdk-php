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
 * DescribeConsumerClient返回参数结构体
 *
 * @method ConsumerClient getClient() 获取客户端详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClient(ConsumerClient $Client) 设置客户端详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTopicList() 获取主题消费信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicList(array $TopicList) 设置主题消费信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeConsumerClientResponse extends AbstractModel
{
    /**
     * @var ConsumerClient 客户端详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Client;

    /**
     * @var array 主题消费信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param ConsumerClient $Client 客户端详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TopicList 主题消费信息
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
        if (array_key_exists("Client",$param) and $param["Client"] !== null) {
            $this->Client = new ConsumerClient();
            $this->Client->deserialize($param["Client"]);
        }

        if (array_key_exists("TopicList",$param) and $param["TopicList"] !== null) {
            $this->TopicList = [];
            foreach ($param["TopicList"] as $key => $value){
                $obj = new TopicConsumeStats();
                $obj->deserialize($value);
                array_push($this->TopicList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
