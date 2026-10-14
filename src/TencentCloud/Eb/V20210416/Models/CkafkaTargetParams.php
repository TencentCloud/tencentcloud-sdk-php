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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用来描述ckafka投递目标
 *
 * @method string getTopicName() 获取<p>要投递到的ckafka topic</p>
 * @method void setTopicName(string $TopicName) 设置<p>要投递到的ckafka topic</p>
 * @method RetryPolicy getRetryPolicy() 获取<p>重试策略</p>
 * @method void setRetryPolicy(RetryPolicy $RetryPolicy) 设置<p>重试策略</p>
 * @method string getEventDeliveryFormat() 获取<p>事件投递kafka时的协议格式；目前只支持两种格式：1.CloudEvent(完整的cloudevent消息协议)2.CloudEventDataKey(cloudevent协议中的data字段内容)</p>
 * @method void setEventDeliveryFormat(string $EventDeliveryFormat) 设置<p>事件投递kafka时的协议格式；目前只支持两种格式：1.CloudEvent(完整的cloudevent消息协议)2.CloudEventDataKey(cloudevent协议中的data字段内容)</p>
 * @method string getTimeFormat() 获取<p>事件顶层Time参数投递格式</p><p>枚举值：</p><ul><li>RFC3339： 将时间戳转换成 YYYY-MM-DDTHH:mm:ssZ 格式</li></ul>
 * @method void setTimeFormat(string $TimeFormat) 设置<p>事件顶层Time参数投递格式</p><p>枚举值：</p><ul><li>RFC3339： 将时间戳转换成 YYYY-MM-DDTHH:mm:ssZ 格式</li></ul>
 */
class CkafkaTargetParams extends AbstractModel
{
    /**
     * @var string <p>要投递到的ckafka topic</p>
     */
    public $TopicName;

    /**
     * @var RetryPolicy <p>重试策略</p>
     */
    public $RetryPolicy;

    /**
     * @var string <p>事件投递kafka时的协议格式；目前只支持两种格式：1.CloudEvent(完整的cloudevent消息协议)2.CloudEventDataKey(cloudevent协议中的data字段内容)</p>
     */
    public $EventDeliveryFormat;

    /**
     * @var string <p>事件顶层Time参数投递格式</p><p>枚举值：</p><ul><li>RFC3339： 将时间戳转换成 YYYY-MM-DDTHH:mm:ssZ 格式</li></ul>
     */
    public $TimeFormat;

    /**
     * @param string $TopicName <p>要投递到的ckafka topic</p>
     * @param RetryPolicy $RetryPolicy <p>重试策略</p>
     * @param string $EventDeliveryFormat <p>事件投递kafka时的协议格式；目前只支持两种格式：1.CloudEvent(完整的cloudevent消息协议)2.CloudEventDataKey(cloudevent协议中的data字段内容)</p>
     * @param string $TimeFormat <p>事件顶层Time参数投递格式</p><p>枚举值：</p><ul><li>RFC3339： 将时间戳转换成 YYYY-MM-DDTHH:mm:ssZ 格式</li></ul>
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
        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("RetryPolicy",$param) and $param["RetryPolicy"] !== null) {
            $this->RetryPolicy = new RetryPolicy();
            $this->RetryPolicy->deserialize($param["RetryPolicy"]);
        }

        if (array_key_exists("EventDeliveryFormat",$param) and $param["EventDeliveryFormat"] !== null) {
            $this->EventDeliveryFormat = $param["EventDeliveryFormat"];
        }

        if (array_key_exists("TimeFormat",$param) and $param["TimeFormat"] !== null) {
            $this->TimeFormat = $param["TimeFormat"];
        }
    }
}
