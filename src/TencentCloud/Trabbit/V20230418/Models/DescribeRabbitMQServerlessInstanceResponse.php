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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRabbitMQServerlessInstance返回参数结构体
 *
 * @method RabbitMQClusterInfo getClusterInfo() 获取集群信息
 * @method void setClusterInfo(RabbitMQClusterInfo $ClusterInfo) 设置集群信息
 * @method RabbitMQClusterSpecInfo getClusterSpecInfo() 获取集群规格信息
 * @method void setClusterSpecInfo(RabbitMQClusterSpecInfo $ClusterSpecInfo) 设置集群规格信息
 * @method VirtualHostQuota getVirtualHostQuota() 获取vhost配额信息
 * @method void setVirtualHostQuota(VirtualHostQuota $VirtualHostQuota) 设置vhost配额信息
 * @method ExchangeQuota getExchangeQuota() 获取exchange配额信息
 * @method void setExchangeQuota(ExchangeQuota $ExchangeQuota) 设置exchange配额信息
 * @method QueueQuota getQueueQuota() 获取queue配额信息
 * @method void setQueueQuota(QueueQuota $QueueQuota) 设置queue配额信息
 * @method RabbitMQServerlessAccessInfo getClusterNetInfo() 获取网络信息
 * @method void setClusterNetInfo(RabbitMQServerlessAccessInfo $ClusterNetInfo) 设置网络信息
 * @method RabbitMQServerlessWhiteListInfo getClusterWhiteListInfo() 获取公网白名单信息
 * @method void setClusterWhiteListInfo(RabbitMQServerlessWhiteListInfo $ClusterWhiteListInfo) 设置公网白名单信息
 * @method UserQuota getUserQuota() 获取user配额信息
 * @method void setUserQuota(UserQuota $UserQuota) 设置user配额信息
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRabbitMQServerlessInstanceResponse extends AbstractModel
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
     * @var RabbitMQServerlessAccessInfo 网络信息
     */
    public $ClusterNetInfo;

    /**
     * @var RabbitMQServerlessWhiteListInfo 公网白名单信息
     */
    public $ClusterWhiteListInfo;

    /**
     * @var UserQuota user配额信息
     */
    public $UserQuota;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param RabbitMQClusterInfo $ClusterInfo 集群信息
     * @param RabbitMQClusterSpecInfo $ClusterSpecInfo 集群规格信息
     * @param VirtualHostQuota $VirtualHostQuota vhost配额信息
     * @param ExchangeQuota $ExchangeQuota exchange配额信息
     * @param QueueQuota $QueueQuota queue配额信息
     * @param RabbitMQServerlessAccessInfo $ClusterNetInfo 网络信息
     * @param RabbitMQServerlessWhiteListInfo $ClusterWhiteListInfo 公网白名单信息
     * @param UserQuota $UserQuota user配额信息
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
        if (array_key_exists("ClusterInfo",$param) and $param["ClusterInfo"] !== null) {
            $this->ClusterInfo = new RabbitMQClusterInfo();
            $this->ClusterInfo->deserialize($param["ClusterInfo"]);
        }

        if (array_key_exists("ClusterSpecInfo",$param) and $param["ClusterSpecInfo"] !== null) {
            $this->ClusterSpecInfo = new RabbitMQClusterSpecInfo();
            $this->ClusterSpecInfo->deserialize($param["ClusterSpecInfo"]);
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

        if (array_key_exists("ClusterNetInfo",$param) and $param["ClusterNetInfo"] !== null) {
            $this->ClusterNetInfo = new RabbitMQServerlessAccessInfo();
            $this->ClusterNetInfo->deserialize($param["ClusterNetInfo"]);
        }

        if (array_key_exists("ClusterWhiteListInfo",$param) and $param["ClusterWhiteListInfo"] !== null) {
            $this->ClusterWhiteListInfo = new RabbitMQServerlessWhiteListInfo();
            $this->ClusterWhiteListInfo->deserialize($param["ClusterWhiteListInfo"]);
        }

        if (array_key_exists("UserQuota",$param) and $param["UserQuota"] !== null) {
            $this->UserQuota = new UserQuota();
            $this->UserQuota->deserialize($param["UserQuota"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
