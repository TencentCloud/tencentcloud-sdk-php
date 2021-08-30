<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * topic副本及详细信息
 *
 * @method string getPartition() 获取分区名称
 * @method void setPartition(string $Partition) 设置分区名称
 * @method integer getLeader() 获取Leader Id
 * @method void setLeader(integer $Leader) 设置Leader Id
 * @method string getReplica() 获取副本集
 * @method void setReplica(string $Replica) 设置副本集
 * @method string getInSyncReplica() 获取ISR
 * @method void setInSyncReplica(string $InSyncReplica) 设置ISR
 * @method integer getBeginOffset() 获取起始Offset
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBeginOffset(integer $BeginOffset) 设置起始Offset
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEndOffset() 获取末端Offset
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndOffset(integer $EndOffset) 设置末端Offset
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMessageCount() 获取消息数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessageCount(integer $MessageCount) 设置消息数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutOfSyncReplica() 获取未同步副本集
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutOfSyncReplica(string $OutOfSyncReplica) 设置未同步副本集
注意：此字段可能返回 null，表示取不到有效值。
 */
class TopicInSyncReplicaInfo extends AbstractModel
{
    /**
     * @var string 分区名称
     */
    public $Partition;

    /**
     * @var integer Leader Id
     */
    public $Leader;

    /**
     * @var string 副本集
     */
    public $Replica;

    /**
     * @var string ISR
     */
    public $InSyncReplica;

    /**
     * @var integer 起始Offset
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BeginOffset;

    /**
     * @var integer 末端Offset
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndOffset;

    /**
     * @var integer 消息数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MessageCount;

    /**
     * @var string 未同步副本集
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutOfSyncReplica;

    /**
     * @param string $Partition 分区名称
     * @param integer $Leader Leader Id
     * @param string $Replica 副本集
     * @param string $InSyncReplica ISR
     * @param integer $BeginOffset 起始Offset
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EndOffset 末端Offset
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MessageCount 消息数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutOfSyncReplica 未同步副本集
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
        if (array_key_exists("Partition",$param) and $param["Partition"] !== null) {
            $this->Partition = $param["Partition"];
        }

        if (array_key_exists("Leader",$param) and $param["Leader"] !== null) {
            $this->Leader = $param["Leader"];
        }

        if (array_key_exists("Replica",$param) and $param["Replica"] !== null) {
            $this->Replica = $param["Replica"];
        }

        if (array_key_exists("InSyncReplica",$param) and $param["InSyncReplica"] !== null) {
            $this->InSyncReplica = $param["InSyncReplica"];
        }

        if (array_key_exists("BeginOffset",$param) and $param["BeginOffset"] !== null) {
            $this->BeginOffset = $param["BeginOffset"];
        }

        if (array_key_exists("EndOffset",$param) and $param["EndOffset"] !== null) {
            $this->EndOffset = $param["EndOffset"];
        }

        if (array_key_exists("MessageCount",$param) and $param["MessageCount"] !== null) {
            $this->MessageCount = $param["MessageCount"];
        }

        if (array_key_exists("OutOfSyncReplica",$param) and $param["OutOfSyncReplica"] !== null) {
            $this->OutOfSyncReplica = $param["OutOfSyncReplica"];
        }
    }
}
