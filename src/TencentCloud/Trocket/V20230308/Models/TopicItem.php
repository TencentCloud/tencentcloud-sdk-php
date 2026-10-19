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
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getTopic() 获取<p>主题名称</p>
 * @method void setTopic(string $Topic) 设置<p>主题名称</p>
 * @method string getTopicType() 获取<p>主题类型<br>NORMAL:普通消息,<br>FIFO:顺序消息,<br>DELAY:延时消息,<br>TRANSACTION:事务消息</p>
 * @method void setTopicType(string $TopicType) 设置<p>主题类型<br>NORMAL:普通消息,<br>FIFO:顺序消息,<br>DELAY:延时消息,<br>TRANSACTION:事务消息</p>
 * @method integer getQueueNum() 获取<p>队列数量</p>
 * @method void setQueueNum(integer $QueueNum) 设置<p>队列数量</p>
 * @method string getRemark() 获取<p>备注信息</p>
 * @method void setRemark(string $Remark) 设置<p>备注信息</p>
 * @method string getClusterIdV4() 获取<p>4.x的集群id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterIdV4(string $ClusterIdV4) 设置<p>4.x的集群id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespaceV4() 获取<p>4.x的命名空间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespaceV4(string $NamespaceV4) 设置<p>4.x的命名空间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopicV4() 获取<p>4.x的主题名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicV4(string $TopicV4) 设置<p>4.x的主题名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFullNamespaceV4() 获取<p>4.x的完整命名空间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFullNamespaceV4(string $FullNamespaceV4) 设置<p>4.x的完整命名空间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMsgTTL() 获取<p>消息保留时长</p>
 * @method void setMsgTTL(integer $MsgTTL) 设置<p>消息保留时长</p>
 * @method array getTagList() 获取<p>绑定的标签列表</p>
 * @method void setTagList(array $TagList) 设置<p>绑定的标签列表</p>
 * @method boolean getAutoExpireDelete() 获取<p>LITE 类型 Topic 专用：是否开启自动过期删除</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoExpireDelete(boolean $AutoExpireDelete) 设置<p>LITE 类型 Topic 专用：是否开启自动过期删除</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAutoExpireTime() 获取<p>LITE 类型 Topic 专用：自动过期时间</p><p>单位：分钟</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoExpireTime(integer $AutoExpireTime) 设置<p>LITE 类型 Topic 专用：自动过期时间</p><p>单位：分钟</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class TopicItem extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>主题名称</p>
     */
    public $Topic;

    /**
     * @var string <p>主题类型<br>NORMAL:普通消息,<br>FIFO:顺序消息,<br>DELAY:延时消息,<br>TRANSACTION:事务消息</p>
     */
    public $TopicType;

    /**
     * @var integer <p>队列数量</p>
     */
    public $QueueNum;

    /**
     * @var string <p>备注信息</p>
     */
    public $Remark;

    /**
     * @var string <p>4.x的集群id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterIdV4;

    /**
     * @var string <p>4.x的命名空间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NamespaceV4;

    /**
     * @var string <p>4.x的主题名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicV4;

    /**
     * @var string <p>4.x的完整命名空间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FullNamespaceV4;

    /**
     * @var integer <p>消息保留时长</p>
     */
    public $MsgTTL;

    /**
     * @var array <p>绑定的标签列表</p>
     */
    public $TagList;

    /**
     * @var boolean <p>LITE 类型 Topic 专用：是否开启自动过期删除</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoExpireDelete;

    /**
     * @var integer <p>LITE 类型 Topic 专用：自动过期时间</p><p>单位：分钟</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoExpireTime;

    /**
     * @param string $InstanceId <p>实例ID</p>
     * @param string $Topic <p>主题名称</p>
     * @param string $TopicType <p>主题类型<br>NORMAL:普通消息,<br>FIFO:顺序消息,<br>DELAY:延时消息,<br>TRANSACTION:事务消息</p>
     * @param integer $QueueNum <p>队列数量</p>
     * @param string $Remark <p>备注信息</p>
     * @param string $ClusterIdV4 <p>4.x的集群id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NamespaceV4 <p>4.x的命名空间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TopicV4 <p>4.x的主题名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FullNamespaceV4 <p>4.x的完整命名空间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MsgTTL <p>消息保留时长</p>
     * @param array $TagList <p>绑定的标签列表</p>
     * @param boolean $AutoExpireDelete <p>LITE 类型 Topic 专用：是否开启自动过期删除</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AutoExpireTime <p>LITE 类型 Topic 专用：自动过期时间</p><p>单位：分钟</p>
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("AutoExpireDelete",$param) and $param["AutoExpireDelete"] !== null) {
            $this->AutoExpireDelete = $param["AutoExpireDelete"];
        }

        if (array_key_exists("AutoExpireTime",$param) and $param["AutoExpireTime"] !== null) {
            $this->AutoExpireTime = $param["AutoExpireTime"];
        }
    }
}
