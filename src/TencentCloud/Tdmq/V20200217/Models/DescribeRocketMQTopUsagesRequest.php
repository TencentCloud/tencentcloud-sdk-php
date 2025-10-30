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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRocketMQTopUsages请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getMetricName() 获取指标名称，支持以下：
consumeLag，消费组堆积数量
deadLetterCount，死信数量
topicRateIn,   Topic生产速率
topicRateOut，Topic消费速率
topicStorageSize，Topic存储空间
topicApiCalls，Topic API调用次数
 * @method void setMetricName(string $MetricName) 设置指标名称，支持以下：
consumeLag，消费组堆积数量
deadLetterCount，死信数量
topicRateIn,   Topic生产速率
topicRateOut，Topic消费速率
topicStorageSize，Topic存储空间
topicApiCalls，Topic API调用次数
 * @method integer getLimit() 获取排序数量，最大20
 * @method void setLimit(integer $Limit) 设置排序数量，最大20
 */
class DescribeRocketMQTopUsagesRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 指标名称，支持以下：
consumeLag，消费组堆积数量
deadLetterCount，死信数量
topicRateIn,   Topic生产速率
topicRateOut，Topic消费速率
topicStorageSize，Topic存储空间
topicApiCalls，Topic API调用次数
     */
    public $MetricName;

    /**
     * @var integer 排序数量，最大20
     */
    public $Limit;

    /**
     * @param string $ClusterId 集群ID
     * @param string $MetricName 指标名称，支持以下：
consumeLag，消费组堆积数量
deadLetterCount，死信数量
topicRateIn,   Topic生产速率
topicRateOut，Topic消费速率
topicStorageSize，Topic存储空间
topicApiCalls，Topic API调用次数
     * @param integer $Limit 排序数量，最大20
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

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
