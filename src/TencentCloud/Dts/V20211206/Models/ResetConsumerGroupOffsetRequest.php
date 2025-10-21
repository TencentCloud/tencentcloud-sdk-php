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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResetConsumerGroupOffset请求参数结构体
 *
 * @method string getSubscribeId() 获取订阅实例id，可通过[DescribeSyncJobs](https://cloud.tencent.com/document/product/571/82103)接口获取。
 * @method void setSubscribeId(string $SubscribeId) 设置订阅实例id，可通过[DescribeSyncJobs](https://cloud.tencent.com/document/product/571/82103)接口获取。
 * @method string getTopicName() 获取订阅的kafka topic，可通过[DescribeSyncJobs](https://cloud.tencent.com/document/product/571/82103)接口获取。
 * @method void setTopicName(string $TopicName) 设置订阅的kafka topic，可通过[DescribeSyncJobs](https://cloud.tencent.com/document/product/571/82103)接口获取。
 * @method string getConsumerGroupName() 获取消费组名称。实际的消费组全称形如：consumer-grp-#{SubscribeId}-#{ConsumerGroupName}。可通过[DescribeConsumerGroups](https://cloud.tencent.com/document/api/571/102947)接口获取。
 * @method void setConsumerGroupName(string $ConsumerGroupName) 设置消费组名称。实际的消费组全称形如：consumer-grp-#{SubscribeId}-#{ConsumerGroupName}。可通过[DescribeConsumerGroups](https://cloud.tencent.com/document/api/571/102947)接口获取。
 * @method array getPartitionNos() 获取需要修改offset的分区编号，可通过[DescribeOffsetByTime](https://cloud.tencent.com/document/api/571/102946)接口获取。
 * @method void setPartitionNos(array $PartitionNos) 设置需要修改offset的分区编号，可通过[DescribeOffsetByTime](https://cloud.tencent.com/document/api/571/102946)接口获取。
 * @method string getResetMode() 获取重置方式。枚举值为 earliest-从最开始位置开始消费；latest-从最新位置开始消费；datetime-从指定时间前最近的checkpoint开始消费
 * @method void setResetMode(string $ResetMode) 设置重置方式。枚举值为 earliest-从最开始位置开始消费；latest-从最新位置开始消费；datetime-从指定时间前最近的checkpoint开始消费
 * @method string getResetDatetime() 获取当 ResetMode 为 datetime 时，该项需要填，格式为：Y-m-d h:m:s。如果不填，默认用0时间，效果与earliest相同。
 * @method void setResetDatetime(string $ResetDatetime) 设置当 ResetMode 为 datetime 时，该项需要填，格式为：Y-m-d h:m:s。如果不填，默认用0时间，效果与earliest相同。
 */
class ResetConsumerGroupOffsetRequest extends AbstractModel
{
    /**
     * @var string 订阅实例id，可通过[DescribeSyncJobs](https://cloud.tencent.com/document/product/571/82103)接口获取。
     */
    public $SubscribeId;

    /**
     * @var string 订阅的kafka topic，可通过[DescribeSyncJobs](https://cloud.tencent.com/document/product/571/82103)接口获取。
     */
    public $TopicName;

    /**
     * @var string 消费组名称。实际的消费组全称形如：consumer-grp-#{SubscribeId}-#{ConsumerGroupName}。可通过[DescribeConsumerGroups](https://cloud.tencent.com/document/api/571/102947)接口获取。
     */
    public $ConsumerGroupName;

    /**
     * @var array 需要修改offset的分区编号，可通过[DescribeOffsetByTime](https://cloud.tencent.com/document/api/571/102946)接口获取。
     */
    public $PartitionNos;

    /**
     * @var string 重置方式。枚举值为 earliest-从最开始位置开始消费；latest-从最新位置开始消费；datetime-从指定时间前最近的checkpoint开始消费
     */
    public $ResetMode;

    /**
     * @var string 当 ResetMode 为 datetime 时，该项需要填，格式为：Y-m-d h:m:s。如果不填，默认用0时间，效果与earliest相同。
     */
    public $ResetDatetime;

    /**
     * @param string $SubscribeId 订阅实例id，可通过[DescribeSyncJobs](https://cloud.tencent.com/document/product/571/82103)接口获取。
     * @param string $TopicName 订阅的kafka topic，可通过[DescribeSyncJobs](https://cloud.tencent.com/document/product/571/82103)接口获取。
     * @param string $ConsumerGroupName 消费组名称。实际的消费组全称形如：consumer-grp-#{SubscribeId}-#{ConsumerGroupName}。可通过[DescribeConsumerGroups](https://cloud.tencent.com/document/api/571/102947)接口获取。
     * @param array $PartitionNos 需要修改offset的分区编号，可通过[DescribeOffsetByTime](https://cloud.tencent.com/document/api/571/102946)接口获取。
     * @param string $ResetMode 重置方式。枚举值为 earliest-从最开始位置开始消费；latest-从最新位置开始消费；datetime-从指定时间前最近的checkpoint开始消费
     * @param string $ResetDatetime 当 ResetMode 为 datetime 时，该项需要填，格式为：Y-m-d h:m:s。如果不填，默认用0时间，效果与earliest相同。
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
        if (array_key_exists("SubscribeId",$param) and $param["SubscribeId"] !== null) {
            $this->SubscribeId = $param["SubscribeId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("ConsumerGroupName",$param) and $param["ConsumerGroupName"] !== null) {
            $this->ConsumerGroupName = $param["ConsumerGroupName"];
        }

        if (array_key_exists("PartitionNos",$param) and $param["PartitionNos"] !== null) {
            $this->PartitionNos = $param["PartitionNos"];
        }

        if (array_key_exists("ResetMode",$param) and $param["ResetMode"] !== null) {
            $this->ResetMode = $param["ResetMode"];
        }

        if (array_key_exists("ResetDatetime",$param) and $param["ResetDatetime"] !== null) {
            $this->ResetDatetime = $param["ResetDatetime"];
        }
    }
}
