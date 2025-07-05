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
 * DescribeRocketMQConsumerConnections返回参数结构体
 *
 * @method integer getTotalCount() 获取总数目
 * @method void setTotalCount(integer $TotalCount) 设置总数目
 * @method array getConnections() 获取在线消费者信息
 * @method void setConnections(array $Connections) 设置在线消费者信息
 * @method RocketMQGroup getGroupDetail() 获取订阅组信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupDetail(RocketMQGroup $GroupDetail) 设置订阅组信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRocketMQConsumerConnectionsResponse extends AbstractModel
{
    /**
     * @var integer 总数目
     */
    public $TotalCount;

    /**
     * @var array 在线消费者信息
     */
    public $Connections;

    /**
     * @var RocketMQGroup 订阅组信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupDetail;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 总数目
     * @param array $Connections 在线消费者信息
     * @param RocketMQGroup $GroupDetail 订阅组信息
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Connections",$param) and $param["Connections"] !== null) {
            $this->Connections = [];
            foreach ($param["Connections"] as $key => $value){
                $obj = new RocketMQConsumerConnection();
                $obj->deserialize($value);
                array_push($this->Connections, $obj);
            }
        }

        if (array_key_exists("GroupDetail",$param) and $param["GroupDetail"] !== null) {
            $this->GroupDetail = new RocketMQGroup();
            $this->GroupDetail->deserialize($param["GroupDetail"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
