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
 * 消费组信息
 *
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getConsumerGroup() 获取<p>消费组名称</p>
 * @method void setConsumerGroup(string $ConsumerGroup) 设置<p>消费组名称</p>
 * @method boolean getConsumeEnable() 获取<p>是否开启消费</p>
 * @method void setConsumeEnable(boolean $ConsumeEnable) 设置<p>是否开启消费</p>
 * @method boolean getConsumeMessageOrderly() 获取<p>顺序投递：true<br>并发投递：false</p>
 * @method void setConsumeMessageOrderly(boolean $ConsumeMessageOrderly) 设置<p>顺序投递：true<br>并发投递：false</p>
 * @method integer getMaxRetryTimes() 获取<p>最大重试次数</p>
 * @method void setMaxRetryTimes(integer $MaxRetryTimes) 设置<p>最大重试次数</p>
 * @method string getRemark() 获取<p>备注</p>
 * @method void setRemark(string $Remark) 设置<p>备注</p>
 * @method string getClusterIdV4() 获取<p>4.x的集群ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterIdV4(string $ClusterIdV4) 设置<p>4.x的集群ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespaceV4() 获取<p>4.x的命名空间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespaceV4(string $NamespaceV4) 设置<p>4.x的命名空间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConsumerGroupV4() 获取<p>4.x的消费组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsumerGroupV4(string $ConsumerGroupV4) 设置<p>4.x的消费组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFullNamespaceV4() 获取<p>4.x的完整命名空间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFullNamespaceV4(string $FullNamespaceV4) 设置<p>4.x的完整命名空间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSubscribeTopicNum() 获取<p>订阅的主题个数</p>
 * @method void setSubscribeTopicNum(integer $SubscribeTopicNum) 设置<p>订阅的主题个数</p>
 * @method integer getCreateTime() 获取<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTagList() 获取<p>绑定的标签列表</p>
 * @method void setTagList(array $TagList) 设置<p>绑定的标签列表</p>
 * @method RetryPolicy getRetryPolicy() 获取<p>重试策略</p>
 * @method void setRetryPolicy(RetryPolicy $RetryPolicy) 设置<p>重试策略</p>
 * @method string getConsumeModel() 获取<p>消费模式，枚举值如下：</p><ul><li>CLUSTERING：集群/广播消费</li><li>LITE：LiteTopic 消费</li></ul>
 * @method void setConsumeModel(string $ConsumeModel) 设置<p>消费模式，枚举值如下：</p><ul><li>CLUSTERING：集群/广播消费</li><li>LITE：LiteTopic 消费</li></ul>
 * @method string getDeadLetterTargetTopic() 获取<p>自定义的死信Topic名称</p>
 * @method void setDeadLetterTargetTopic(string $DeadLetterTargetTopic) 设置<p>自定义的死信Topic名称</p>
 */
class ConsumeGroupItem extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>消费组名称</p>
     */
    public $ConsumerGroup;

    /**
     * @var boolean <p>是否开启消费</p>
     */
    public $ConsumeEnable;

    /**
     * @var boolean <p>顺序投递：true<br>并发投递：false</p>
     */
    public $ConsumeMessageOrderly;

    /**
     * @var integer <p>最大重试次数</p>
     */
    public $MaxRetryTimes;

    /**
     * @var string <p>备注</p>
     */
    public $Remark;

    /**
     * @var string <p>4.x的集群ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterIdV4;

    /**
     * @var string <p>4.x的命名空间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NamespaceV4;

    /**
     * @var string <p>4.x的消费组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConsumerGroupV4;

    /**
     * @var string <p>4.x的完整命名空间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FullNamespaceV4;

    /**
     * @var integer <p>订阅的主题个数</p>
     */
    public $SubscribeTopicNum;

    /**
     * @var integer <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var array <p>绑定的标签列表</p>
     */
    public $TagList;

    /**
     * @var RetryPolicy <p>重试策略</p>
     */
    public $RetryPolicy;

    /**
     * @var string <p>消费模式，枚举值如下：</p><ul><li>CLUSTERING：集群/广播消费</li><li>LITE：LiteTopic 消费</li></ul>
     */
    public $ConsumeModel;

    /**
     * @var string <p>自定义的死信Topic名称</p>
     */
    public $DeadLetterTargetTopic;

    /**
     * @param string $InstanceId <p>实例ID</p>
     * @param string $ConsumerGroup <p>消费组名称</p>
     * @param boolean $ConsumeEnable <p>是否开启消费</p>
     * @param boolean $ConsumeMessageOrderly <p>顺序投递：true<br>并发投递：false</p>
     * @param integer $MaxRetryTimes <p>最大重试次数</p>
     * @param string $Remark <p>备注</p>
     * @param string $ClusterIdV4 <p>4.x的集群ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NamespaceV4 <p>4.x的命名空间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConsumerGroupV4 <p>4.x的消费组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FullNamespaceV4 <p>4.x的完整命名空间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SubscribeTopicNum <p>订阅的主题个数</p>
     * @param integer $CreateTime <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TagList <p>绑定的标签列表</p>
     * @param RetryPolicy $RetryPolicy <p>重试策略</p>
     * @param string $ConsumeModel <p>消费模式，枚举值如下：</p><ul><li>CLUSTERING：集群/广播消费</li><li>LITE：LiteTopic 消费</li></ul>
     * @param string $DeadLetterTargetTopic <p>自定义的死信Topic名称</p>
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

        if (array_key_exists("ConsumerGroup",$param) and $param["ConsumerGroup"] !== null) {
            $this->ConsumerGroup = $param["ConsumerGroup"];
        }

        if (array_key_exists("ConsumeEnable",$param) and $param["ConsumeEnable"] !== null) {
            $this->ConsumeEnable = $param["ConsumeEnable"];
        }

        if (array_key_exists("ConsumeMessageOrderly",$param) and $param["ConsumeMessageOrderly"] !== null) {
            $this->ConsumeMessageOrderly = $param["ConsumeMessageOrderly"];
        }

        if (array_key_exists("MaxRetryTimes",$param) and $param["MaxRetryTimes"] !== null) {
            $this->MaxRetryTimes = $param["MaxRetryTimes"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ClusterIdV4",$param) and $param["ClusterIdV4"] !== null) {
            $this->ClusterIdV4 = $param["ClusterIdV4"];
        }

        if (array_key_exists("NamespaceV4",$param) and $param["NamespaceV4"] !== null) {
            $this->NamespaceV4 = $param["NamespaceV4"];
        }

        if (array_key_exists("ConsumerGroupV4",$param) and $param["ConsumerGroupV4"] !== null) {
            $this->ConsumerGroupV4 = $param["ConsumerGroupV4"];
        }

        if (array_key_exists("FullNamespaceV4",$param) and $param["FullNamespaceV4"] !== null) {
            $this->FullNamespaceV4 = $param["FullNamespaceV4"];
        }

        if (array_key_exists("SubscribeTopicNum",$param) and $param["SubscribeTopicNum"] !== null) {
            $this->SubscribeTopicNum = $param["SubscribeTopicNum"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
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

        if (array_key_exists("ConsumeModel",$param) and $param["ConsumeModel"] !== null) {
            $this->ConsumeModel = $param["ConsumeModel"];
        }

        if (array_key_exists("DeadLetterTargetTopic",$param) and $param["DeadLetterTargetTopic"] !== null) {
            $this->DeadLetterTargetTopic = $param["DeadLetterTargetTopic"];
        }
    }
}
