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
 * DescribeConsumerGroup返回参数结构体
 *
 * @method integer getConsumerNum() 获取<p>在线消费者数量</p>
 * @method void setConsumerNum(integer $ConsumerNum) 设置<p>在线消费者数量</p>
 * @method integer getTps() 获取<p>TPS</p>
 * @method void setTps(integer $Tps) 设置<p>TPS</p>
 * @method integer getConsumerLag() 获取<p>消息堆积数量</p>
 * @method void setConsumerLag(integer $ConsumerLag) 设置<p>消息堆积数量</p>
 * @method string getConsumeType() 获取<p>消费类型，枚举值如下：</p><ul><li>PULL：PULL 消费类型</li><li>PUSH：PUSH 消费类型</li><li>POP：POP 消费类型</li></ul>
 * @method void setConsumeType(string $ConsumeType) 设置<p>消费类型，枚举值如下：</p><ul><li>PULL：PULL 消费类型</li><li>PUSH：PUSH 消费类型</li><li>POP：POP 消费类型</li></ul>
 * @method integer getCreatedTime() 获取<p>创建时间，<strong>Unix时间戳（毫秒）</strong></p>
 * @method void setCreatedTime(integer $CreatedTime) 设置<p>创建时间，<strong>Unix时间戳（毫秒）</strong></p>
 * @method boolean getConsumeMessageOrderly() 获取<p>顺序投递：true<br>并发投递：false</p>
 * @method void setConsumeMessageOrderly(boolean $ConsumeMessageOrderly) 设置<p>顺序投递：true<br>并发投递：false</p>
 * @method boolean getConsumeEnable() 获取<p>是否开启消费</p>
 * @method void setConsumeEnable(boolean $ConsumeEnable) 设置<p>是否开启消费</p>
 * @method integer getMaxRetryTimes() 获取<p>最大重试次数</p>
 * @method void setMaxRetryTimes(integer $MaxRetryTimes) 设置<p>最大重试次数</p>
 * @method string getRemark() 获取<p>备注</p>
 * @method void setRemark(string $Remark) 设置<p>备注</p>
 * @method string getMessageModel() 获取<p>消费模式：<br>BROADCASTING 广播模式<br>CLUSTERING 集群模式</p>
 * @method void setMessageModel(string $MessageModel) 设置<p>消费模式：<br>BROADCASTING 广播模式<br>CLUSTERING 集群模式</p>
 * @method RetryPolicy getRetryPolicy() 获取<p>重试策略</p>
 * @method void setRetryPolicy(RetryPolicy $RetryPolicy) 设置<p>重试策略</p>
 * @method string getConsumeModel() 获取<p>消费模式</p><p>枚举值：</p><ul><li>CLUSTERING： 集群/广播消费</li><li>LITE： LiteTopic消费</li></ul><p>默认值：CLUSTERING</p>
 * @method void setConsumeModel(string $ConsumeModel) 设置<p>消费模式</p><p>枚举值：</p><ul><li>CLUSTERING： 集群/广播消费</li><li>LITE： LiteTopic消费</li></ul><p>默认值：CLUSTERING</p>
 * @method string getLiteTopic() 获取<p>订阅的轻量主题（仅适用于轻量消费模式）</p>
 * @method void setLiteTopic(string $LiteTopic) 设置<p>订阅的轻量主题（仅适用于轻量消费模式）</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeConsumerGroupResponse extends AbstractModel
{
    /**
     * @var integer <p>在线消费者数量</p>
     */
    public $ConsumerNum;

    /**
     * @var integer <p>TPS</p>
     */
    public $Tps;

    /**
     * @var integer <p>消息堆积数量</p>
     */
    public $ConsumerLag;

    /**
     * @var string <p>消费类型，枚举值如下：</p><ul><li>PULL：PULL 消费类型</li><li>PUSH：PUSH 消费类型</li><li>POP：POP 消费类型</li></ul>
     */
    public $ConsumeType;

    /**
     * @var integer <p>创建时间，<strong>Unix时间戳（毫秒）</strong></p>
     */
    public $CreatedTime;

    /**
     * @var boolean <p>顺序投递：true<br>并发投递：false</p>
     */
    public $ConsumeMessageOrderly;

    /**
     * @var boolean <p>是否开启消费</p>
     */
    public $ConsumeEnable;

    /**
     * @var integer <p>最大重试次数</p>
     */
    public $MaxRetryTimes;

    /**
     * @var string <p>备注</p>
     */
    public $Remark;

    /**
     * @var string <p>消费模式：<br>BROADCASTING 广播模式<br>CLUSTERING 集群模式</p>
     */
    public $MessageModel;

    /**
     * @var RetryPolicy <p>重试策略</p>
     */
    public $RetryPolicy;

    /**
     * @var string <p>消费模式</p><p>枚举值：</p><ul><li>CLUSTERING： 集群/广播消费</li><li>LITE： LiteTopic消费</li></ul><p>默认值：CLUSTERING</p>
     */
    public $ConsumeModel;

    /**
     * @var string <p>订阅的轻量主题（仅适用于轻量消费模式）</p>
     */
    public $LiteTopic;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ConsumerNum <p>在线消费者数量</p>
     * @param integer $Tps <p>TPS</p>
     * @param integer $ConsumerLag <p>消息堆积数量</p>
     * @param string $ConsumeType <p>消费类型，枚举值如下：</p><ul><li>PULL：PULL 消费类型</li><li>PUSH：PUSH 消费类型</li><li>POP：POP 消费类型</li></ul>
     * @param integer $CreatedTime <p>创建时间，<strong>Unix时间戳（毫秒）</strong></p>
     * @param boolean $ConsumeMessageOrderly <p>顺序投递：true<br>并发投递：false</p>
     * @param boolean $ConsumeEnable <p>是否开启消费</p>
     * @param integer $MaxRetryTimes <p>最大重试次数</p>
     * @param string $Remark <p>备注</p>
     * @param string $MessageModel <p>消费模式：<br>BROADCASTING 广播模式<br>CLUSTERING 集群模式</p>
     * @param RetryPolicy $RetryPolicy <p>重试策略</p>
     * @param string $ConsumeModel <p>消费模式</p><p>枚举值：</p><ul><li>CLUSTERING： 集群/广播消费</li><li>LITE： LiteTopic消费</li></ul><p>默认值：CLUSTERING</p>
     * @param string $LiteTopic <p>订阅的轻量主题（仅适用于轻量消费模式）</p>
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
        if (array_key_exists("ConsumerNum",$param) and $param["ConsumerNum"] !== null) {
            $this->ConsumerNum = $param["ConsumerNum"];
        }

        if (array_key_exists("Tps",$param) and $param["Tps"] !== null) {
            $this->Tps = $param["Tps"];
        }

        if (array_key_exists("ConsumerLag",$param) and $param["ConsumerLag"] !== null) {
            $this->ConsumerLag = $param["ConsumerLag"];
        }

        if (array_key_exists("ConsumeType",$param) and $param["ConsumeType"] !== null) {
            $this->ConsumeType = $param["ConsumeType"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ConsumeMessageOrderly",$param) and $param["ConsumeMessageOrderly"] !== null) {
            $this->ConsumeMessageOrderly = $param["ConsumeMessageOrderly"];
        }

        if (array_key_exists("ConsumeEnable",$param) and $param["ConsumeEnable"] !== null) {
            $this->ConsumeEnable = $param["ConsumeEnable"];
        }

        if (array_key_exists("MaxRetryTimes",$param) and $param["MaxRetryTimes"] !== null) {
            $this->MaxRetryTimes = $param["MaxRetryTimes"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("MessageModel",$param) and $param["MessageModel"] !== null) {
            $this->MessageModel = $param["MessageModel"];
        }

        if (array_key_exists("RetryPolicy",$param) and $param["RetryPolicy"] !== null) {
            $this->RetryPolicy = new RetryPolicy();
            $this->RetryPolicy->deserialize($param["RetryPolicy"]);
        }

        if (array_key_exists("ConsumeModel",$param) and $param["ConsumeModel"] !== null) {
            $this->ConsumeModel = $param["ConsumeModel"];
        }

        if (array_key_exists("LiteTopic",$param) and $param["LiteTopic"] !== null) {
            $this->LiteTopic = $param["LiteTopic"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
