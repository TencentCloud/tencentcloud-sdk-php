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
 * CreateConsumerGroup请求参数结构体
 *
 * @method string getInstanceId() 获取腾讯云 RocketMQ 实例 ID，从 [DescribeFusionInstanceList](https://cloud.tencent.com/document/api/1493/106745) 接口或控制台获得。
 * @method void setInstanceId(string $InstanceId) 设置腾讯云 RocketMQ 实例 ID，从 [DescribeFusionInstanceList](https://cloud.tencent.com/document/api/1493/106745) 接口或控制台获得。
 * @method integer getMaxRetryTimes() 获取<p>最大重试次数，取值范围0～1000</p>
 * @method void setMaxRetryTimes(integer $MaxRetryTimes) 设置<p>最大重试次数，取值范围0～1000</p>
 * @method boolean getConsumeEnable() 获取<p>是否开启消费</p>
 * @method void setConsumeEnable(boolean $ConsumeEnable) 设置<p>是否开启消费</p>
 * @method boolean getConsumeMessageOrderly() 获取<p>顺序投递：true<br>并发投递：false</p>
 * @method void setConsumeMessageOrderly(boolean $ConsumeMessageOrderly) 设置<p>顺序投递：true<br>并发投递：false</p>
 * @method string getConsumerGroup() 获取消费组名称，从 [DescribeConsumerGroupList](https://cloud.tencent.com/document/api/1493/101535) 接口返回的 [ConsumeGroupItem](https://cloud.tencent.com/document/api/1493/96031#ConsumeGroupItem) 或控制台获得。
 * @method void setConsumerGroup(string $ConsumerGroup) 设置消费组名称，从 [DescribeConsumerGroupList](https://cloud.tencent.com/document/api/1493/101535) 接口返回的 [ConsumeGroupItem](https://cloud.tencent.com/document/api/1493/96031#ConsumeGroupItem) 或控制台获得。
 * @method string getRemark() 获取<p>备注信息，最多 128 个字符</p>
 * @method void setRemark(string $Remark) 设置<p>备注信息，最多 128 个字符</p>
 * @method array getTagList() 获取<p>标签列表</p>
 * @method void setTagList(array $TagList) 设置<p>标签列表</p>
 * @method RetryPolicy getRetryPolicy() 获取<p>重试策略</p>
 * @method void setRetryPolicy(RetryPolicy $RetryPolicy) 设置<p>重试策略</p>
 * @method string getLiteTopic() 获取<p>轻量主题</p>
 * @method void setLiteTopic(string $LiteTopic) 设置<p>轻量主题</p>
 */
class CreateConsumerGroupRequest extends AbstractModel
{
    /**
     * @var string 腾讯云 RocketMQ 实例 ID，从 [DescribeFusionInstanceList](https://cloud.tencent.com/document/api/1493/106745) 接口或控制台获得。
     */
    public $InstanceId;

    /**
     * @var integer <p>最大重试次数，取值范围0～1000</p>
     */
    public $MaxRetryTimes;

    /**
     * @var boolean <p>是否开启消费</p>
     */
    public $ConsumeEnable;

    /**
     * @var boolean <p>顺序投递：true<br>并发投递：false</p>
     */
    public $ConsumeMessageOrderly;

    /**
     * @var string 消费组名称，从 [DescribeConsumerGroupList](https://cloud.tencent.com/document/api/1493/101535) 接口返回的 [ConsumeGroupItem](https://cloud.tencent.com/document/api/1493/96031#ConsumeGroupItem) 或控制台获得。
     */
    public $ConsumerGroup;

    /**
     * @var string <p>备注信息，最多 128 个字符</p>
     */
    public $Remark;

    /**
     * @var array <p>标签列表</p>
     */
    public $TagList;

    /**
     * @var RetryPolicy <p>重试策略</p>
     */
    public $RetryPolicy;

    /**
     * @var string <p>轻量主题</p>
     */
    public $LiteTopic;

    /**
     * @param string $InstanceId 腾讯云 RocketMQ 实例 ID，从 [DescribeFusionInstanceList](https://cloud.tencent.com/document/api/1493/106745) 接口或控制台获得。
     * @param integer $MaxRetryTimes <p>最大重试次数，取值范围0～1000</p>
     * @param boolean $ConsumeEnable <p>是否开启消费</p>
     * @param boolean $ConsumeMessageOrderly <p>顺序投递：true<br>并发投递：false</p>
     * @param string $ConsumerGroup 消费组名称，从 [DescribeConsumerGroupList](https://cloud.tencent.com/document/api/1493/101535) 接口返回的 [ConsumeGroupItem](https://cloud.tencent.com/document/api/1493/96031#ConsumeGroupItem) 或控制台获得。
     * @param string $Remark <p>备注信息，最多 128 个字符</p>
     * @param array $TagList <p>标签列表</p>
     * @param RetryPolicy $RetryPolicy <p>重试策略</p>
     * @param string $LiteTopic <p>轻量主题</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("MaxRetryTimes",$param) and $param["MaxRetryTimes"] !== null) {
            $this->MaxRetryTimes = $param["MaxRetryTimes"];
        }

        if (array_key_exists("ConsumeEnable",$param) and $param["ConsumeEnable"] !== null) {
            $this->ConsumeEnable = $param["ConsumeEnable"];
        }

        if (array_key_exists("ConsumeMessageOrderly",$param) and $param["ConsumeMessageOrderly"] !== null) {
            $this->ConsumeMessageOrderly = $param["ConsumeMessageOrderly"];
        }

        if (array_key_exists("ConsumerGroup",$param) and $param["ConsumerGroup"] !== null) {
            $this->ConsumerGroup = $param["ConsumerGroup"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("RetryPolicy",$param) and $param["RetryPolicy"] !== null) {
            $this->RetryPolicy = new RetryPolicy();
            $this->RetryPolicy->deserialize($param["RetryPolicy"]);
        }

        if (array_key_exists("LiteTopic",$param) and $param["LiteTopic"] !== null) {
            $this->LiteTopic = $param["LiteTopic"];
        }
    }
}
