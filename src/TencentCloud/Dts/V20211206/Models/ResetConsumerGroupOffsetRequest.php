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
 * @method string getSubscribeId() 获取<p>订阅实例id，可通过<a href="https://cloud.tencent.com/document/product/571/82103">DescribeSyncJobs</a>接口获取。</p>
 * @method void setSubscribeId(string $SubscribeId) 设置<p>订阅实例id，可通过<a href="https://cloud.tencent.com/document/product/571/82103">DescribeSyncJobs</a>接口获取。</p>
 * @method string getTopicName() 获取<p>订阅的kafka topic，可通过<a href="https://cloud.tencent.com/document/product/571/82103">DescribeSyncJobs</a>接口获取。</p>
 * @method void setTopicName(string $TopicName) 设置<p>订阅的kafka topic，可通过<a href="https://cloud.tencent.com/document/product/571/82103">DescribeSyncJobs</a>接口获取。</p>
 * @method string getConsumerGroupName() 获取<p>消费组名称。实际的消费组全称形如：consumer-grp-#{SubscribeId}-#{ConsumerGroupName}。可通过<a href="https://cloud.tencent.com/document/api/571/102947">DescribeConsumerGroups</a>接口获取。</p>
 * @method void setConsumerGroupName(string $ConsumerGroupName) 设置<p>消费组名称。实际的消费组全称形如：consumer-grp-#{SubscribeId}-#{ConsumerGroupName}。可通过<a href="https://cloud.tencent.com/document/api/571/102947">DescribeConsumerGroups</a>接口获取。</p>
 * @method array getPartitionNos() 获取<p>需要修改offset的分区编号，可通过<a href="https://cloud.tencent.com/document/api/571/102946">DescribeOffsetByTime</a>接口获取。</p>
 * @method void setPartitionNos(array $PartitionNos) 设置<p>需要修改offset的分区编号，可通过<a href="https://cloud.tencent.com/document/api/571/102946">DescribeOffsetByTime</a>接口获取。</p>
 * @method string getResetMode() 获取<p>重置方式。枚举值为 earliest-从最开始位置开始消费；latest-从最新位置开始消费；datetime-从指定时间前最近的checkpoint开始消费</p>
 * @method void setResetMode(string $ResetMode) 设置<p>重置方式。枚举值为 earliest-从最开始位置开始消费；latest-从最新位置开始消费；datetime-从指定时间前最近的checkpoint开始消费</p>
 * @method string getResetDatetime() 获取<p>当 <code>ResetMode</code> 为 <code>datetime</code> 时该项需要填。当 <code>DateTimeISOFormat=true</code> 时按 RFC 3339 传入（如 <code>2026-04-23T20:21:35+08:00</code>），否则按 <code>Y-m-d h:m:s</code>（北京时间）传入。如果不填，默认用 0 时间，效果与 <code>earliest</code> 相同。 </p><p>参数格式：2026-04-23T20:21:35+08:00</p>
 * @method void setResetDatetime(string $ResetDatetime) 设置<p>当 <code>ResetMode</code> 为 <code>datetime</code> 时该项需要填。当 <code>DateTimeISOFormat=true</code> 时按 RFC 3339 传入（如 <code>2026-04-23T20:21:35+08:00</code>），否则按 <code>Y-m-d h:m:s</code>（北京时间）传入。如果不填，默认用 0 时间，效果与 <code>earliest</code> 相同。 </p><p>参数格式：2026-04-23T20:21:35+08:00</p>
 */
class ResetConsumerGroupOffsetRequest extends AbstractModel
{
    /**
     * @var string <p>订阅实例id，可通过<a href="https://cloud.tencent.com/document/product/571/82103">DescribeSyncJobs</a>接口获取。</p>
     */
    public $SubscribeId;

    /**
     * @var string <p>订阅的kafka topic，可通过<a href="https://cloud.tencent.com/document/product/571/82103">DescribeSyncJobs</a>接口获取。</p>
     */
    public $TopicName;

    /**
     * @var string <p>消费组名称。实际的消费组全称形如：consumer-grp-#{SubscribeId}-#{ConsumerGroupName}。可通过<a href="https://cloud.tencent.com/document/api/571/102947">DescribeConsumerGroups</a>接口获取。</p>
     */
    public $ConsumerGroupName;

    /**
     * @var array <p>需要修改offset的分区编号，可通过<a href="https://cloud.tencent.com/document/api/571/102946">DescribeOffsetByTime</a>接口获取。</p>
     */
    public $PartitionNos;

    /**
     * @var string <p>重置方式。枚举值为 earliest-从最开始位置开始消费；latest-从最新位置开始消费；datetime-从指定时间前最近的checkpoint开始消费</p>
     */
    public $ResetMode;

    /**
     * @var string <p>当 <code>ResetMode</code> 为 <code>datetime</code> 时该项需要填。当 <code>DateTimeISOFormat=true</code> 时按 RFC 3339 传入（如 <code>2026-04-23T20:21:35+08:00</code>），否则按 <code>Y-m-d h:m:s</code>（北京时间）传入。如果不填，默认用 0 时间，效果与 <code>earliest</code> 相同。 </p><p>参数格式：2026-04-23T20:21:35+08:00</p>
     */
    public $ResetDatetime;

    /**
     * @param string $SubscribeId <p>订阅实例id，可通过<a href="https://cloud.tencent.com/document/product/571/82103">DescribeSyncJobs</a>接口获取。</p>
     * @param string $TopicName <p>订阅的kafka topic，可通过<a href="https://cloud.tencent.com/document/product/571/82103">DescribeSyncJobs</a>接口获取。</p>
     * @param string $ConsumerGroupName <p>消费组名称。实际的消费组全称形如：consumer-grp-#{SubscribeId}-#{ConsumerGroupName}。可通过<a href="https://cloud.tencent.com/document/api/571/102947">DescribeConsumerGroups</a>接口获取。</p>
     * @param array $PartitionNos <p>需要修改offset的分区编号，可通过<a href="https://cloud.tencent.com/document/api/571/102946">DescribeOffsetByTime</a>接口获取。</p>
     * @param string $ResetMode <p>重置方式。枚举值为 earliest-从最开始位置开始消费；latest-从最新位置开始消费；datetime-从指定时间前最近的checkpoint开始消费</p>
     * @param string $ResetDatetime <p>当 <code>ResetMode</code> 为 <code>datetime</code> 时该项需要填。当 <code>DateTimeISOFormat=true</code> 时按 RFC 3339 传入（如 <code>2026-04-23T20:21:35+08:00</code>），否则按 <code>Y-m-d h:m:s</code>（北京时间）传入。如果不填，默认用 0 时间，效果与 <code>earliest</code> 相同。 </p><p>参数格式：2026-04-23T20:21:35+08:00</p>
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
