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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * dcn 配置情况
 *
 * @method string getRoReplicationMode() 获取DCN 运行状态，START为正常运行，STOP为暂停
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoReplicationMode(string $RoReplicationMode) 设置DCN 运行状态，START为正常运行，STOP为暂停
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDelayReplicationType() 获取延迟复制的类型，DEFAULT为正常，DUE_TIME为指定时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDelayReplicationType(string $DelayReplicationType) 设置延迟复制的类型，DEFAULT为正常，DUE_TIME为指定时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDueTime() 获取延迟复制的指定时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDueTime(string $DueTime) 设置延迟复制的指定时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReplicationDelay() 获取延迟复制时的延迟秒数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplicationDelay(integer $ReplicationDelay) 设置延迟复制时的延迟秒数
注意：此字段可能返回 null，表示取不到有效值。
 */
class DCNReplicaConfig extends AbstractModel
{
    /**
     * @var string DCN 运行状态，START为正常运行，STOP为暂停
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoReplicationMode;

    /**
     * @var string 延迟复制的类型，DEFAULT为正常，DUE_TIME为指定时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DelayReplicationType;

    /**
     * @var string 延迟复制的指定时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DueTime;

    /**
     * @var integer 延迟复制时的延迟秒数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReplicationDelay;

    /**
     * @param string $RoReplicationMode DCN 运行状态，START为正常运行，STOP为暂停
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DelayReplicationType 延迟复制的类型，DEFAULT为正常，DUE_TIME为指定时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DueTime 延迟复制的指定时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReplicationDelay 延迟复制时的延迟秒数
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
        if (array_key_exists("RoReplicationMode",$param) and $param["RoReplicationMode"] !== null) {
            $this->RoReplicationMode = $param["RoReplicationMode"];
        }

        if (array_key_exists("DelayReplicationType",$param) and $param["DelayReplicationType"] !== null) {
            $this->DelayReplicationType = $param["DelayReplicationType"];
        }

        if (array_key_exists("DueTime",$param) and $param["DueTime"] !== null) {
            $this->DueTime = $param["DueTime"];
        }

        if (array_key_exists("ReplicationDelay",$param) and $param["ReplicationDelay"] !== null) {
            $this->ReplicationDelay = $param["ReplicationDelay"];
        }
    }
}
