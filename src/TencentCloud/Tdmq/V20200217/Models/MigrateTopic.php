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
 * 迁移topic列表数据
 *
 * @method string getNamespace() 获取命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespace(string $Namespace) 设置命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopicName() 获取topic名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicName(string $TopicName) 设置topic名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMigrationStatus() 获取迁移状态
S_RW_D_NA 源集群读写
S_RW_D_R 源集群读写目标集群读
S_RW_D_RW 源集群读写目标集群读写
S_R_D_RW 源集群读目标集群读写
S_NA_D_RW 目标集群读写
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMigrationStatus(string $MigrationStatus) 设置迁移状态
S_RW_D_NA 源集群读写
S_RW_D_R 源集群读写目标集群读
S_RW_D_RW 源集群读写目标集群读写
S_R_D_RW 源集群读目标集群读写
S_NA_D_RW 目标集群读写
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getHealthCheckPassed() 获取是否完成健康检查
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHealthCheckPassed(boolean $HealthCheckPassed) 设置是否完成健康检查
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHealthCheckError() 获取上次健康检查返回的错误信息，仅在HealthCheckPassed为false时有效。
NotChecked 未执行检查，
Unknown 未知错误,
TopicNotImported 主题未导入,
 TopicNotExistsInSourceCluster  主题在源集群中不存在,
    TopicNotExistsInTargetCluster 主题在目标集群中不存在,
    ConsumerConnectedOnTarget 目标集群上存在消费者连接,
    SourceTopicHasNewMessagesIn5Minutes 源集群主题前5分钟内有新消息写入,
TargetTopicHasNewMessagesIn5Minutes 目标集群主题前5分钟内有新消息写入,
    SourceTopicHasNoMessagesIn5Minutes 源集群前5分钟内没有新消息写入,
TargetTopicHasNoMessagesIn5Minutes 源集群前5分钟内没有新消息写入,
    ConsumerGroupCountNotMatch 订阅组数量不一致,
    SourceTopicHasUnconsumedMessages 源集群主题存在未消费消息,
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHealthCheckError(string $HealthCheckError) 设置上次健康检查返回的错误信息，仅在HealthCheckPassed为false时有效。
NotChecked 未执行检查，
Unknown 未知错误,
TopicNotImported 主题未导入,
 TopicNotExistsInSourceCluster  主题在源集群中不存在,
    TopicNotExistsInTargetCluster 主题在目标集群中不存在,
    ConsumerConnectedOnTarget 目标集群上存在消费者连接,
    SourceTopicHasNewMessagesIn5Minutes 源集群主题前5分钟内有新消息写入,
TargetTopicHasNewMessagesIn5Minutes 目标集群主题前5分钟内有新消息写入,
    SourceTopicHasNoMessagesIn5Minutes 源集群前5分钟内没有新消息写入,
TargetTopicHasNoMessagesIn5Minutes 源集群前5分钟内没有新消息写入,
    ConsumerGroupCountNotMatch 订阅组数量不一致,
    SourceTopicHasUnconsumedMessages 源集群主题存在未消费消息,
注意：此字段可能返回 null，表示取不到有效值。
 */
class MigrateTopic extends AbstractModel
{
    /**
     * @var string 命名空间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Namespace;

    /**
     * @var string topic名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicName;

    /**
     * @var string 迁移状态
S_RW_D_NA 源集群读写
S_RW_D_R 源集群读写目标集群读
S_RW_D_RW 源集群读写目标集群读写
S_R_D_RW 源集群读目标集群读写
S_NA_D_RW 目标集群读写
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MigrationStatus;

    /**
     * @var boolean 是否完成健康检查
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HealthCheckPassed;

    /**
     * @var string 上次健康检查返回的错误信息，仅在HealthCheckPassed为false时有效。
NotChecked 未执行检查，
Unknown 未知错误,
TopicNotImported 主题未导入,
 TopicNotExistsInSourceCluster  主题在源集群中不存在,
    TopicNotExistsInTargetCluster 主题在目标集群中不存在,
    ConsumerConnectedOnTarget 目标集群上存在消费者连接,
    SourceTopicHasNewMessagesIn5Minutes 源集群主题前5分钟内有新消息写入,
TargetTopicHasNewMessagesIn5Minutes 目标集群主题前5分钟内有新消息写入,
    SourceTopicHasNoMessagesIn5Minutes 源集群前5分钟内没有新消息写入,
TargetTopicHasNoMessagesIn5Minutes 源集群前5分钟内没有新消息写入,
    ConsumerGroupCountNotMatch 订阅组数量不一致,
    SourceTopicHasUnconsumedMessages 源集群主题存在未消费消息,
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HealthCheckError;

    /**
     * @param string $Namespace 命名空间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TopicName topic名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MigrationStatus 迁移状态
S_RW_D_NA 源集群读写
S_RW_D_R 源集群读写目标集群读
S_RW_D_RW 源集群读写目标集群读写
S_R_D_RW 源集群读目标集群读写
S_NA_D_RW 目标集群读写
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $HealthCheckPassed 是否完成健康检查
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HealthCheckError 上次健康检查返回的错误信息，仅在HealthCheckPassed为false时有效。
NotChecked 未执行检查，
Unknown 未知错误,
TopicNotImported 主题未导入,
 TopicNotExistsInSourceCluster  主题在源集群中不存在,
    TopicNotExistsInTargetCluster 主题在目标集群中不存在,
    ConsumerConnectedOnTarget 目标集群上存在消费者连接,
    SourceTopicHasNewMessagesIn5Minutes 源集群主题前5分钟内有新消息写入,
TargetTopicHasNewMessagesIn5Minutes 目标集群主题前5分钟内有新消息写入,
    SourceTopicHasNoMessagesIn5Minutes 源集群前5分钟内没有新消息写入,
TargetTopicHasNoMessagesIn5Minutes 源集群前5分钟内没有新消息写入,
    ConsumerGroupCountNotMatch 订阅组数量不一致,
    SourceTopicHasUnconsumedMessages 源集群主题存在未消费消息,
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
        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("MigrationStatus",$param) and $param["MigrationStatus"] !== null) {
            $this->MigrationStatus = $param["MigrationStatus"];
        }

        if (array_key_exists("HealthCheckPassed",$param) and $param["HealthCheckPassed"] !== null) {
            $this->HealthCheckPassed = $param["HealthCheckPassed"];
        }

        if (array_key_exists("HealthCheckError",$param) and $param["HealthCheckError"] !== null) {
            $this->HealthCheckError = $param["HealthCheckError"];
        }
    }
}
