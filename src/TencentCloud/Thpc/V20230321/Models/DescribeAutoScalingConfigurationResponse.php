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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAutoScalingConfiguration返回参数结构体
 *
 * @method string getClusterId() 获取<p>集群ID。</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID。</p>
 * @method integer getExpansionBusyTime() 获取<p>任务连续等待时间，队列的任务处于连续等待的时间。单位秒。</p>
 * @method void setExpansionBusyTime(integer $ExpansionBusyTime) 设置<p>任务连续等待时间，队列的任务处于连续等待的时间。单位秒。</p>
 * @method integer getShrinkIdleTime() 获取<p>节点连续空闲（未运行作业）时间，一个节点连续处于空闲状态时间。</p>
 * @method void setShrinkIdleTime(integer $ShrinkIdleTime) 设置<p>节点连续空闲（未运行作业）时间，一个节点连续处于空闲状态时间。</p>
 * @method array getQueueConfigs() 获取<p>扩容队列配置概览列表。</p>
 * @method void setQueueConfigs(array $QueueConfigs) 设置<p>扩容队列配置概览列表。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAutoScalingConfigurationResponse extends AbstractModel
{
    /**
     * @var string <p>集群ID。</p>
     */
    public $ClusterId;

    /**
     * @var integer <p>任务连续等待时间，队列的任务处于连续等待的时间。单位秒。</p>
     */
    public $ExpansionBusyTime;

    /**
     * @var integer <p>节点连续空闲（未运行作业）时间，一个节点连续处于空闲状态时间。</p>
     */
    public $ShrinkIdleTime;

    /**
     * @var array <p>扩容队列配置概览列表。</p>
     */
    public $QueueConfigs;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ClusterId <p>集群ID。</p>
     * @param integer $ExpansionBusyTime <p>任务连续等待时间，队列的任务处于连续等待的时间。单位秒。</p>
     * @param integer $ShrinkIdleTime <p>节点连续空闲（未运行作业）时间，一个节点连续处于空闲状态时间。</p>
     * @param array $QueueConfigs <p>扩容队列配置概览列表。</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ExpansionBusyTime",$param) and $param["ExpansionBusyTime"] !== null) {
            $this->ExpansionBusyTime = $param["ExpansionBusyTime"];
        }

        if (array_key_exists("ShrinkIdleTime",$param) and $param["ShrinkIdleTime"] !== null) {
            $this->ShrinkIdleTime = $param["ShrinkIdleTime"];
        }

        if (array_key_exists("QueueConfigs",$param) and $param["QueueConfigs"] !== null) {
            $this->QueueConfigs = [];
            foreach ($param["QueueConfigs"] as $key => $value){
                $obj = new QueueConfigOverview();
                $obj->deserialize($value);
                array_push($this->QueueConfigs, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
