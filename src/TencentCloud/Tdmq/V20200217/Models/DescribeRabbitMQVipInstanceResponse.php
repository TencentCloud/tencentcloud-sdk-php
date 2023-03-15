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
 * DescribeRabbitMQVipInstance返回参数结构体
 *
 * @method RabbitMQClusterInfo getClusterInfo() 获取集群信息
 * @method void setClusterInfo(RabbitMQClusterInfo $ClusterInfo) 设置集群信息
 * @method RabbitMQClusterSpecInfo getClusterSpecInfo() 获取集群规格信息
 * @method void setClusterSpecInfo(RabbitMQClusterSpecInfo $ClusterSpecInfo) 设置集群规格信息
 * @method RabbitMQClusterAccessInfo getClusterNetInfo() 获取集群访问
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterNetInfo(RabbitMQClusterAccessInfo $ClusterNetInfo) 设置集群访问
注意：此字段可能返回 null，表示取不到有效值。
 * @method RabbitMQClusterWhiteListInfo getClusterWhiteListInfo() 获取集群白名单
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterWhiteListInfo(RabbitMQClusterWhiteListInfo $ClusterWhiteListInfo) 设置集群白名单
注意：此字段可能返回 null，表示取不到有效值。
 * @method VirtualHostQuota getVirtualHostQuota() 获取vhost配额信息
 * @method void setVirtualHostQuota(VirtualHostQuota $VirtualHostQuota) 设置vhost配额信息
 * @method ExchangeQuota getExchangeQuota() 获取exchange配额信息
 * @method void setExchangeQuota(ExchangeQuota $ExchangeQuota) 设置exchange配额信息
 * @method QueueQuota getQueueQuota() 获取queue配额信息
 * @method void setQueueQuota(QueueQuota $QueueQuota) 设置queue配额信息
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRabbitMQVipInstanceResponse extends AbstractModel
{
    /**
     * @var RabbitMQClusterInfo 集群信息
     */
    public $ClusterInfo;

    /**
     * @var RabbitMQClusterSpecInfo 集群规格信息
     */
    public $ClusterSpecInfo;

    /**
     * @var RabbitMQClusterAccessInfo 集群访问
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterNetInfo;

    /**
     * @var RabbitMQClusterWhiteListInfo 集群白名单
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterWhiteListInfo;

    /**
     * @var VirtualHostQuota vhost配额信息
     */
    public $VirtualHostQuota;

    /**
     * @var ExchangeQuota exchange配额信息
     */
    public $ExchangeQuota;

    /**
     * @var QueueQuota queue配额信息
     */
    public $QueueQuota;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param RabbitMQClusterInfo $ClusterInfo 集群信息
     * @param RabbitMQClusterSpecInfo $ClusterSpecInfo 集群规格信息
     * @param RabbitMQClusterAccessInfo $ClusterNetInfo 集群访问
注意：此字段可能返回 null，表示取不到有效值。
     * @param RabbitMQClusterWhiteListInfo $ClusterWhiteListInfo 集群白名单
注意：此字段可能返回 null，表示取不到有效值。
     * @param VirtualHostQuota $VirtualHostQuota vhost配额信息
     * @param ExchangeQuota $ExchangeQuota exchange配额信息
     * @param QueueQuota $QueueQuota queue配额信息
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
            $this->ClusterInfo = new RabbitMQClusterInfo();
            $this->ClusterInfo->deserialize($param["ClusterInfo"]);
        }

        if (array_key_exists("ClusterSpecInfo",$param) and $param["ClusterSpecInfo"] !== null) {
            $this->ClusterSpecInfo = new RabbitMQClusterSpecInfo();
            $this->ClusterSpecInfo->deserialize($param["ClusterSpecInfo"]);
        }

        if (array_key_exists("ClusterNetInfo",$param) and $param["ClusterNetInfo"] !== null) {
            $this->ClusterNetInfo = new RabbitMQClusterAccessInfo();
            $this->ClusterNetInfo->deserialize($param["ClusterNetInfo"]);
        }

        if (array_key_exists("ClusterWhiteListInfo",$param) and $param["ClusterWhiteListInfo"] !== null) {
            $this->ClusterWhiteListInfo = new RabbitMQClusterWhiteListInfo();
            $this->ClusterWhiteListInfo->deserialize($param["ClusterWhiteListInfo"]);
        }

        if (array_key_exists("VirtualHostQuota",$param) and $param["VirtualHostQuota"] !== null) {
            $this->VirtualHostQuota = new VirtualHostQuota();
            $this->VirtualHostQuota->deserialize($param["VirtualHostQuota"]);
        }

        if (array_key_exists("ExchangeQuota",$param) and $param["ExchangeQuota"] !== null) {
            $this->ExchangeQuota = new ExchangeQuota();
            $this->ExchangeQuota->deserialize($param["ExchangeQuota"]);
        }

        if (array_key_exists("QueueQuota",$param) and $param["QueueQuota"] !== null) {
            $this->QueueQuota = new QueueQuota();
            $this->QueueQuota->deserialize($param["QueueQuota"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
