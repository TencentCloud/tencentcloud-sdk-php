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
 * 列表上的主题信息
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getTopic() 获取主题名称
 * @method void setTopic(string $Topic) 设置主题名称
 * @method string getTopicType() 获取主题类型
NORMAL:普通消息,
FIFO:顺序消息,
DELAY:延时消息,
TRANSACTION:事务消息
 * @method void setTopicType(string $TopicType) 设置主题类型
NORMAL:普通消息,
FIFO:顺序消息,
DELAY:延时消息,
TRANSACTION:事务消息
 * @method integer getQueueNum() 获取队列数量
 * @method void setQueueNum(integer $QueueNum) 设置队列数量
 * @method string getRemark() 获取备注信息
 * @method void setRemark(string $Remark) 设置备注信息
 * @method string getClusterIdV4() 获取4.x的集群id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterIdV4(string $ClusterIdV4) 设置4.x的集群id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespaceV4() 获取4.x的命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespaceV4(string $NamespaceV4) 设置4.x的命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopicV4() 获取4.x的主题名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicV4(string $TopicV4) 设置4.x的主题名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFullNamespaceV4() 获取4.x的完整命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFullNamespaceV4(string $FullNamespaceV4) 设置4.x的完整命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMsgTTL() 获取消息保留时长
 * @method void setMsgTTL(integer $MsgTTL) 设置消息保留时长
 * @method array getTagList() 获取绑定的标签列表
 * @method void setTagList(array $TagList) 设置绑定的标签列表
 */
class TopicItem extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 主题名称
     */
    public $Topic;

    /**
     * @var string 主题类型
NORMAL:普通消息,
FIFO:顺序消息,
DELAY:延时消息,
TRANSACTION:事务消息
     */
    public $TopicType;

    /**
     * @var integer 队列数量
     */
    public $QueueNum;

    /**
     * @var string 备注信息
     */
    public $Remark;

    /**
     * @var string 4.x的集群id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterIdV4;

    /**
     * @var string 4.x的命名空间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NamespaceV4;

    /**
     * @var string 4.x的主题名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicV4;

    /**
     * @var string 4.x的完整命名空间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FullNamespaceV4;

    /**
     * @var integer 消息保留时长
     */
    public $MsgTTL;

    /**
     * @var array 绑定的标签列表
     */
    public $TagList;

    /**
     * @param string $InstanceId 实例ID
     * @param string $Topic 主题名称
     * @param string $TopicType 主题类型
NORMAL:普通消息,
FIFO:顺序消息,
DELAY:延时消息,
TRANSACTION:事务消息
     * @param integer $QueueNum 队列数量
     * @param string $Remark 备注信息
     * @param string $ClusterIdV4 4.x的集群id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NamespaceV4 4.x的命名空间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TopicV4 4.x的主题名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FullNamespaceV4 4.x的完整命名空间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MsgTTL 消息保留时长
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

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("TopicType",$param) and $param["TopicType"] !== null) {
            $this->TopicType = $param["TopicType"];
        }

        if (array_key_exists("QueueNum",$param) and $param["QueueNum"] !== null) {
            $this->QueueNum = $param["QueueNum"];
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

        if (array_key_exists("TopicV4",$param) and $param["TopicV4"] !== null) {
            $this->TopicV4 = $param["TopicV4"];
        }

        if (array_key_exists("FullNamespaceV4",$param) and $param["FullNamespaceV4"] !== null) {
            $this->FullNamespaceV4 = $param["FullNamespaceV4"];
        }

        if (array_key_exists("MsgTTL",$param) and $param["MsgTTL"] !== null) {
            $this->MsgTTL = $param["MsgTTL"];
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
