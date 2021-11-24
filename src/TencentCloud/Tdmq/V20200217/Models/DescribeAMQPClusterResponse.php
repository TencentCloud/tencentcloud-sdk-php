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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAMQPCluster返回参数结构体
 *
 * @method AMQPClusterInfo getClusterInfo() 获取集群信息
 * @method void setClusterInfo(AMQPClusterInfo $ClusterInfo) 设置集群信息
 * @method AMQPClusterConfig getClusterConfig() 获取集群配置
 * @method void setClusterConfig(AMQPClusterConfig $ClusterConfig) 设置集群配置
 * @method AMQPClusterRecentStats getClusterStats() 获取集群最近使用量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterStats(AMQPClusterRecentStats $ClusterStats) 设置集群最近使用量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAMQPClusterResponse extends AbstractModel
{
    /**
     * @var AMQPClusterInfo 集群信息
     */
    public $ClusterInfo;

    /**
     * @var AMQPClusterConfig 集群配置
     */
    public $ClusterConfig;

    /**
     * @var AMQPClusterRecentStats 集群最近使用量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterStats;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param AMQPClusterInfo $ClusterInfo 集群信息
     * @param AMQPClusterConfig $ClusterConfig 集群配置
     * @param AMQPClusterRecentStats $ClusterStats 集群最近使用量
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ClusterInfo",$param) and $param["ClusterInfo"] !== null) {
            $this->ClusterInfo = new AMQPClusterInfo();
            $this->ClusterInfo->deserialize($param["ClusterInfo"]);
        }

        if (array_key_exists("ClusterConfig",$param) and $param["ClusterConfig"] !== null) {
            $this->ClusterConfig = new AMQPClusterConfig();
            $this->ClusterConfig->deserialize($param["ClusterConfig"]);
        }

        if (array_key_exists("ClusterStats",$param) and $param["ClusterStats"] !== null) {
            $this->ClusterStats = new AMQPClusterRecentStats();
            $this->ClusterStats->deserialize($param["ClusterStats"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
