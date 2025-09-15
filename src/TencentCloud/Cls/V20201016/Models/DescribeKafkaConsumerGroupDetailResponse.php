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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeKafkaConsumerGroupDetail返回参数结构体
 *
 * @method string getLogsetId() 获取日志集id
 * @method void setLogsetId(string $LogsetId) 设置日志集id
 * @method string getGroup() 获取消费组名称
 * @method void setGroup(string $Group) 设置消费组名称
 * @method array getPartitionInfos() 获取消费组信息列表
 * @method void setPartitionInfos(array $PartitionInfos) 设置消费组信息列表
 * @method string getState() 获取Empty：组内没有成员，但存在已提交的偏移量。所有消费者都离开但保留了偏移量
Dead：组内没有成员，且没有已提交的偏移量。组被删除或长时间无活动
Stable：组内成员正常消费，分区分配平衡。正常运行状态
PreparingRebalance：组正在准备重新平衡。有新成员加入或现有成员离开
CompletingRebalance：组正在准备重新平衡。有新成员加入或现有成员离开
 * @method void setState(string $State) 设置Empty：组内没有成员，但存在已提交的偏移量。所有消费者都离开但保留了偏移量
Dead：组内没有成员，且没有已提交的偏移量。组被删除或长时间无活动
Stable：组内成员正常消费，分区分配平衡。正常运行状态
PreparingRebalance：组正在准备重新平衡。有新成员加入或现有成员离开
CompletingRebalance：组正在准备重新平衡。有新成员加入或现有成员离开
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeKafkaConsumerGroupDetailResponse extends AbstractModel
{
    /**
     * @var string 日志集id
     */
    public $LogsetId;

    /**
     * @var string 消费组名称
     */
    public $Group;

    /**
     * @var array 消费组信息列表
     */
    public $PartitionInfos;

    /**
     * @var string Empty：组内没有成员，但存在已提交的偏移量。所有消费者都离开但保留了偏移量
Dead：组内没有成员，且没有已提交的偏移量。组被删除或长时间无活动
Stable：组内成员正常消费，分区分配平衡。正常运行状态
PreparingRebalance：组正在准备重新平衡。有新成员加入或现有成员离开
CompletingRebalance：组正在准备重新平衡。有新成员加入或现有成员离开
     */
    public $State;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $LogsetId 日志集id
     * @param string $Group 消费组名称
     * @param array $PartitionInfos 消费组信息列表
     * @param string $State Empty：组内没有成员，但存在已提交的偏移量。所有消费者都离开但保留了偏移量
Dead：组内没有成员，且没有已提交的偏移量。组被删除或长时间无活动
Stable：组内成员正常消费，分区分配平衡。正常运行状态
PreparingRebalance：组正在准备重新平衡。有新成员加入或现有成员离开
CompletingRebalance：组正在准备重新平衡。有新成员加入或现有成员离开
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
        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }

        if (array_key_exists("PartitionInfos",$param) and $param["PartitionInfos"] !== null) {
            $this->PartitionInfos = [];
            foreach ($param["PartitionInfos"] as $key => $value){
                $obj = new GroupPartitionInfo();
                $obj->deserialize($value);
                array_push($this->PartitionInfos, $obj);
            }
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
