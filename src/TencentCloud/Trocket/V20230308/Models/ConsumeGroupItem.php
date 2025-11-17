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
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getConsumerGroup() 获取消费组名称
 * @method void setConsumerGroup(string $ConsumerGroup) 设置消费组名称
 * @method boolean getConsumeEnable() 获取是否开启消费
 * @method void setConsumeEnable(boolean $ConsumeEnable) 设置是否开启消费
 * @method boolean getConsumeMessageOrderly() 获取顺序投递：true
并发投递：false
 * @method void setConsumeMessageOrderly(boolean $ConsumeMessageOrderly) 设置顺序投递：true
并发投递：false
 * @method integer getMaxRetryTimes() 获取最大重试次数
 * @method void setMaxRetryTimes(integer $MaxRetryTimes) 设置最大重试次数
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method string getClusterIdV4() 获取4.x的集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterIdV4(string $ClusterIdV4) 设置4.x的集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespaceV4() 获取4.x的命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespaceV4(string $NamespaceV4) 设置4.x的命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConsumerGroupV4() 获取4.x的消费组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsumerGroupV4(string $ConsumerGroupV4) 设置4.x的消费组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFullNamespaceV4() 获取4.x的完整命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFullNamespaceV4(string $FullNamespaceV4) 设置4.x的完整命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSubscribeTopicNum() 获取订阅的主题个数
 * @method void setSubscribeTopicNum(integer $SubscribeTopicNum) 设置订阅的主题个数
 * @method integer getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTagList() 获取绑定的标签列表
 * @method void setTagList(array $TagList) 设置绑定的标签列表
 */
class ConsumeGroupItem extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 消费组名称
     */
    public $ConsumerGroup;

    /**
     * @var boolean 是否开启消费
     */
    public $ConsumeEnable;

    /**
     * @var boolean 顺序投递：true
并发投递：false
     */
    public $ConsumeMessageOrderly;

    /**
     * @var integer 最大重试次数
     */
    public $MaxRetryTimes;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var string 4.x的集群ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterIdV4;

    /**
     * @var string 4.x的命名空间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NamespaceV4;

    /**
     * @var string 4.x的消费组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConsumerGroupV4;

    /**
     * @var string 4.x的完整命名空间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FullNamespaceV4;

    /**
     * @var integer 订阅的主题个数
     */
    public $SubscribeTopicNum;

    /**
     * @var integer 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var array 绑定的标签列表
     */
    public $TagList;

    /**
     * @param string $InstanceId 实例ID
     * @param string $ConsumerGroup 消费组名称
     * @param boolean $ConsumeEnable 是否开启消费
     * @param boolean $ConsumeMessageOrderly 顺序投递：true
并发投递：false
     * @param integer $MaxRetryTimes 最大重试次数
     * @param string $Remark 备注
     * @param string $ClusterIdV4 4.x的集群ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NamespaceV4 4.x的命名空间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConsumerGroupV4 4.x的消费组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FullNamespaceV4 4.x的完整命名空间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SubscribeTopicNum 订阅的主题个数
     * @param integer $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TagList 绑定的标签列表
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
    }
}
