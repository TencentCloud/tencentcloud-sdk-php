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
 * DescribeAMQPCreateQuota返回参数结构体
 *
 * @method integer getMaxClusterNum() 获取租户总共可使用集群数量
 * @method void setMaxClusterNum(integer $MaxClusterNum) 设置租户总共可使用集群数量
 * @method integer getUsedClusterNum() 获取租户已创建集群数量
 * @method void setUsedClusterNum(integer $UsedClusterNum) 设置租户已创建集群数量
 * @method integer getExchangeCapacity() 获取Exchange容量
 * @method void setExchangeCapacity(integer $ExchangeCapacity) 设置Exchange容量
 * @method integer getQueueCapacity() 获取Queue容量
 * @method void setQueueCapacity(integer $QueueCapacity) 设置Queue容量
 * @method integer getMaxTpsPerVHost() 获取单Vhost TPS
 * @method void setMaxTpsPerVHost(integer $MaxTpsPerVHost) 设置单Vhost TPS
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAMQPCreateQuotaResponse extends AbstractModel
{
    /**
     * @var integer 租户总共可使用集群数量
     */
    public $MaxClusterNum;

    /**
     * @var integer 租户已创建集群数量
     */
    public $UsedClusterNum;

    /**
     * @var integer Exchange容量
     */
    public $ExchangeCapacity;

    /**
     * @var integer Queue容量
     */
    public $QueueCapacity;

    /**
     * @var integer 单Vhost TPS
     */
    public $MaxTpsPerVHost;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $MaxClusterNum 租户总共可使用集群数量
     * @param integer $UsedClusterNum 租户已创建集群数量
     * @param integer $ExchangeCapacity Exchange容量
     * @param integer $QueueCapacity Queue容量
     * @param integer $MaxTpsPerVHost 单Vhost TPS
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
        if (array_key_exists("MaxClusterNum",$param) and $param["MaxClusterNum"] !== null) {
            $this->MaxClusterNum = $param["MaxClusterNum"];
        }

        if (array_key_exists("UsedClusterNum",$param) and $param["UsedClusterNum"] !== null) {
            $this->UsedClusterNum = $param["UsedClusterNum"];
        }

        if (array_key_exists("ExchangeCapacity",$param) and $param["ExchangeCapacity"] !== null) {
            $this->ExchangeCapacity = $param["ExchangeCapacity"];
        }

        if (array_key_exists("QueueCapacity",$param) and $param["QueueCapacity"] !== null) {
            $this->QueueCapacity = $param["QueueCapacity"];
        }

        if (array_key_exists("MaxTpsPerVHost",$param) and $param["MaxTpsPerVHost"] !== null) {
            $this->MaxTpsPerVHost = $param["MaxTpsPerVHost"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
