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
 * DescribeMigratingGroupStats返回参数结构体
 *
 * @method integer getSourceConsumeLag() 获取源集群消费组堆积
 * @method void setSourceConsumeLag(integer $SourceConsumeLag) 设置源集群消费组堆积
 * @method integer getTargetConsumeLag() 获取目标集群消费组堆积
 * @method void setTargetConsumeLag(integer $TargetConsumeLag) 设置目标集群消费组堆积
 * @method array getSourceConsumerClients() 获取源集群连接客户端列表
 * @method void setSourceConsumerClients(array $SourceConsumerClients) 设置源集群连接客户端列表
 * @method array getTargetConsumerClients() 获取目标集群连接客户端列表
 * @method void setTargetConsumerClients(array $TargetConsumerClients) 设置目标集群连接客户端列表
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeMigratingGroupStatsResponse extends AbstractModel
{
    /**
     * @var integer 源集群消费组堆积
     */
    public $SourceConsumeLag;

    /**
     * @var integer 目标集群消费组堆积
     */
    public $TargetConsumeLag;

    /**
     * @var array 源集群连接客户端列表
     */
    public $SourceConsumerClients;

    /**
     * @var array 目标集群连接客户端列表
     */
    public $TargetConsumerClients;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $SourceConsumeLag 源集群消费组堆积
     * @param integer $TargetConsumeLag 目标集群消费组堆积
     * @param array $SourceConsumerClients 源集群连接客户端列表
     * @param array $TargetConsumerClients 目标集群连接客户端列表
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
        if (array_key_exists("SourceConsumeLag",$param) and $param["SourceConsumeLag"] !== null) {
            $this->SourceConsumeLag = $param["SourceConsumeLag"];
        }

        if (array_key_exists("TargetConsumeLag",$param) and $param["TargetConsumeLag"] !== null) {
            $this->TargetConsumeLag = $param["TargetConsumeLag"];
        }

        if (array_key_exists("SourceConsumerClients",$param) and $param["SourceConsumerClients"] !== null) {
            $this->SourceConsumerClients = [];
            foreach ($param["SourceConsumerClients"] as $key => $value){
                $obj = new ConsumerClient();
                $obj->deserialize($value);
                array_push($this->SourceConsumerClients, $obj);
            }
        }

        if (array_key_exists("TargetConsumerClients",$param) and $param["TargetConsumerClients"] !== null) {
            $this->TargetConsumerClients = [];
            foreach ($param["TargetConsumerClients"] as $key => $value){
                $obj = new ConsumerClient();
                $obj->deserialize($value);
                array_push($this->TargetConsumerClients, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
