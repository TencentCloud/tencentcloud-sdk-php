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
 * DescribeMigratingTopicStats返回参数结构体
 *
 * @method integer getSourceClusterConsumerCount() 获取源集群的消费者数量
 * @method void setSourceClusterConsumerCount(integer $SourceClusterConsumerCount) 设置源集群的消费者数量
 * @method integer getTargetClusterConsumerCount() 获取目标集群的消费者数量
 * @method void setTargetClusterConsumerCount(integer $TargetClusterConsumerCount) 设置目标集群的消费者数量
 * @method array getSourceClusterConsumerGroups() 获取源集群消费组列表
 * @method void setSourceClusterConsumerGroups(array $SourceClusterConsumerGroups) 设置源集群消费组列表
 * @method array getTargetClusterConsumerGroups() 获取目标集群消费组列表
 * @method void setTargetClusterConsumerGroups(array $TargetClusterConsumerGroups) 设置目标集群消费组列表
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeMigratingTopicStatsResponse extends AbstractModel
{
    /**
     * @var integer 源集群的消费者数量
     */
    public $SourceClusterConsumerCount;

    /**
     * @var integer 目标集群的消费者数量
     */
    public $TargetClusterConsumerCount;

    /**
     * @var array 源集群消费组列表
     */
    public $SourceClusterConsumerGroups;

    /**
     * @var array 目标集群消费组列表
     */
    public $TargetClusterConsumerGroups;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $SourceClusterConsumerCount 源集群的消费者数量
     * @param integer $TargetClusterConsumerCount 目标集群的消费者数量
     * @param array $SourceClusterConsumerGroups 源集群消费组列表
     * @param array $TargetClusterConsumerGroups 目标集群消费组列表
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
        if (array_key_exists("SourceClusterConsumerCount",$param) and $param["SourceClusterConsumerCount"] !== null) {
            $this->SourceClusterConsumerCount = $param["SourceClusterConsumerCount"];
        }

        if (array_key_exists("TargetClusterConsumerCount",$param) and $param["TargetClusterConsumerCount"] !== null) {
            $this->TargetClusterConsumerCount = $param["TargetClusterConsumerCount"];
        }

        if (array_key_exists("SourceClusterConsumerGroups",$param) and $param["SourceClusterConsumerGroups"] !== null) {
            $this->SourceClusterConsumerGroups = $param["SourceClusterConsumerGroups"];
        }

        if (array_key_exists("TargetClusterConsumerGroups",$param) and $param["TargetClusterConsumerGroups"] !== null) {
            $this->TargetClusterConsumerGroups = $param["TargetClusterConsumerGroups"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
