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
 * DescribeRocketMQCluster返回参数结构体
 *
 * @method RocketMQClusterInfo getClusterInfo() 获取集群信息
 * @method void setClusterInfo(RocketMQClusterInfo $ClusterInfo) 设置集群信息
 * @method RocketMQClusterConfig getClusterConfig() 获取集群配置
 * @method void setClusterConfig(RocketMQClusterConfig $ClusterConfig) 设置集群配置
 * @method RocketMQClusterRecentStats getClusterStats() 获取集群最近使用量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterStats(RocketMQClusterRecentStats $ClusterStats) 设置集群最近使用量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRocketMQClusterResponse extends AbstractModel
{
    /**
     * @var RocketMQClusterInfo 集群信息
     */
    public $ClusterInfo;

    /**
     * @var RocketMQClusterConfig 集群配置
     */
    public $ClusterConfig;

    /**
     * @var RocketMQClusterRecentStats 集群最近使用量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterStats;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param RocketMQClusterInfo $ClusterInfo 集群信息
     * @param RocketMQClusterConfig $ClusterConfig 集群配置
     * @param RocketMQClusterRecentStats $ClusterStats 集群最近使用量
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
            $this->ClusterInfo = new RocketMQClusterInfo();
            $this->ClusterInfo->deserialize($param["ClusterInfo"]);
        }

        if (array_key_exists("ClusterConfig",$param) and $param["ClusterConfig"] !== null) {
            $this->ClusterConfig = new RocketMQClusterConfig();
            $this->ClusterConfig->deserialize($param["ClusterConfig"]);
        }

        if (array_key_exists("ClusterStats",$param) and $param["ClusterStats"] !== null) {
            $this->ClusterStats = new RocketMQClusterRecentStats();
            $this->ClusterStats->deserialize($param["ClusterStats"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
