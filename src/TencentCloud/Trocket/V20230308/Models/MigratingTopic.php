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
 * 迁移中的主题
 *
 * @method string getTopicName() 获取主题名称
 * @method void setTopicName(string $TopicName) 设置主题名称
 * @method string getMigrationStatus() 获取迁移状态 
S_RW_D_NA 源集群读写，
S_RW_D_R 源集群读写目标集群读，
S_RW_D_RW 源集群读写目标集群读写，
S_R_D_RW 源集群读目标集群读写，
S_NA_D_RW 目标集群读写
 * @method void setMigrationStatus(string $MigrationStatus) 设置迁移状态 
S_RW_D_NA 源集群读写，
S_RW_D_R 源集群读写目标集群读，
S_RW_D_RW 源集群读写目标集群读写，
S_R_D_RW 源集群读目标集群读写，
S_NA_D_RW 目标集群读写
 * @method boolean getHealthCheckPassed() 获取是否完成健康检查	
 * @method void setHealthCheckPassed(boolean $HealthCheckPassed) 设置是否完成健康检查	
 * @method string getHealthCheckError() 获取上次健康检查返回的错误信息，仅在HealthCheckPassed为false时有效。 NotChecked 未执行检查， Unknown 未知错误, TopicNotImported 主题未导入, TopicNotExistsInSourceCluster 主题在源集群中不存在, TopicNotExistsInTargetCluster 主题在目标集群中不存在, ConsumerConnectedOnTarget 目标集群上存在消费者连接, SourceTopicHasNewMessagesIn5Minutes 源集群主题前5分钟内有新消息写入, TargetTopicHasNewMessagesIn5Minutes 目标集群主题前5分钟内有新消息写入, SourceTopicHasNoMessagesIn5Minutes 源集群前5分钟内没有新消息写入, TargetTopicHasNoMessagesIn5Minutes 源集群前5分钟内没有新消息写入, ConsumerGroupCountNotMatch 订阅组数量不一致, SourceTopicHasUnconsumedMessages 源集群主题存在未消费消息,
 * @method void setHealthCheckError(string $HealthCheckError) 设置上次健康检查返回的错误信息，仅在HealthCheckPassed为false时有效。 NotChecked 未执行检查， Unknown 未知错误, TopicNotImported 主题未导入, TopicNotExistsInSourceCluster 主题在源集群中不存在, TopicNotExistsInTargetCluster 主题在目标集群中不存在, ConsumerConnectedOnTarget 目标集群上存在消费者连接, SourceTopicHasNewMessagesIn5Minutes 源集群主题前5分钟内有新消息写入, TargetTopicHasNewMessagesIn5Minutes 目标集群主题前5分钟内有新消息写入, SourceTopicHasNoMessagesIn5Minutes 源集群前5分钟内没有新消息写入, TargetTopicHasNoMessagesIn5Minutes 源集群前5分钟内没有新消息写入, ConsumerGroupCountNotMatch 订阅组数量不一致, SourceTopicHasUnconsumedMessages 源集群主题存在未消费消息,
 * @method string getNamespace() 获取命名空间，仅4.x集群有效
 * @method void setNamespace(string $Namespace) 设置命名空间，仅4.x集群有效
 * @method string getNamespaceV4() 获取4.x的命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespaceV4(string $NamespaceV4) 设置4.x的命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopicNameV4() 获取4.x的主题名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicNameV4(string $TopicNameV4) 设置4.x的主题名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFullNamespaceV4() 获取4.x的完整命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFullNamespaceV4(string $FullNamespaceV4) 设置4.x的完整命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getHealthCheckErrorList() 获取上次健康检查返回的错误列表
 * @method void setHealthCheckErrorList(array $HealthCheckErrorList) 设置上次健康检查返回的错误列表
 */
class MigratingTopic extends AbstractModel
{
    /**
     * @var string 主题名称
     */
    public $TopicName;

    /**
     * @var string 迁移状态 
S_RW_D_NA 源集群读写，
S_RW_D_R 源集群读写目标集群读，
S_RW_D_RW 源集群读写目标集群读写，
S_R_D_RW 源集群读目标集群读写，
S_NA_D_RW 目标集群读写
     */
    public $MigrationStatus;

    /**
     * @var boolean 是否完成健康检查	
     */
    public $HealthCheckPassed;

    /**
     * @var string 上次健康检查返回的错误信息，仅在HealthCheckPassed为false时有效。 NotChecked 未执行检查， Unknown 未知错误, TopicNotImported 主题未导入, TopicNotExistsInSourceCluster 主题在源集群中不存在, TopicNotExistsInTargetCluster 主题在目标集群中不存在, ConsumerConnectedOnTarget 目标集群上存在消费者连接, SourceTopicHasNewMessagesIn5Minutes 源集群主题前5分钟内有新消息写入, TargetTopicHasNewMessagesIn5Minutes 目标集群主题前5分钟内有新消息写入, SourceTopicHasNoMessagesIn5Minutes 源集群前5分钟内没有新消息写入, TargetTopicHasNoMessagesIn5Minutes 源集群前5分钟内没有新消息写入, ConsumerGroupCountNotMatch 订阅组数量不一致, SourceTopicHasUnconsumedMessages 源集群主题存在未消费消息,
     */
    public $HealthCheckError;

    /**
     * @var string 命名空间，仅4.x集群有效
     */
    public $Namespace;

    /**
     * @var string 4.x的命名空间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NamespaceV4;

    /**
     * @var string 4.x的主题名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicNameV4;

    /**
     * @var string 4.x的完整命名空间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FullNamespaceV4;

    /**
     * @var array 上次健康检查返回的错误列表
     */
    public $HealthCheckErrorList;

    /**
     * @param string $TopicName 主题名称
     * @param string $MigrationStatus 迁移状态 
S_RW_D_NA 源集群读写，
S_RW_D_R 源集群读写目标集群读，
S_RW_D_RW 源集群读写目标集群读写，
S_R_D_RW 源集群读目标集群读写，
S_NA_D_RW 目标集群读写
     * @param boolean $HealthCheckPassed 是否完成健康检查	
     * @param string $HealthCheckError 上次健康检查返回的错误信息，仅在HealthCheckPassed为false时有效。 NotChecked 未执行检查， Unknown 未知错误, TopicNotImported 主题未导入, TopicNotExistsInSourceCluster 主题在源集群中不存在, TopicNotExistsInTargetCluster 主题在目标集群中不存在, ConsumerConnectedOnTarget 目标集群上存在消费者连接, SourceTopicHasNewMessagesIn5Minutes 源集群主题前5分钟内有新消息写入, TargetTopicHasNewMessagesIn5Minutes 目标集群主题前5分钟内有新消息写入, SourceTopicHasNoMessagesIn5Minutes 源集群前5分钟内没有新消息写入, TargetTopicHasNoMessagesIn5Minutes 源集群前5分钟内没有新消息写入, ConsumerGroupCountNotMatch 订阅组数量不一致, SourceTopicHasUnconsumedMessages 源集群主题存在未消费消息,
     * @param string $Namespace 命名空间，仅4.x集群有效
     * @param string $NamespaceV4 4.x的命名空间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TopicNameV4 4.x的主题名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FullNamespaceV4 4.x的完整命名空间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $HealthCheckErrorList 上次健康检查返回的错误列表
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

        if (array_key_exists("MigrationStatus",$param) and $param["MigrationStatus"] !== null) {
            $this->MigrationStatus = $param["MigrationStatus"];
        }

        if (array_key_exists("HealthCheckPassed",$param) and $param["HealthCheckPassed"] !== null) {
            $this->HealthCheckPassed = $param["HealthCheckPassed"];
        }

        if (array_key_exists("HealthCheckError",$param) and $param["HealthCheckError"] !== null) {
            $this->HealthCheckError = $param["HealthCheckError"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("NamespaceV4",$param) and $param["NamespaceV4"] !== null) {
            $this->NamespaceV4 = $param["NamespaceV4"];
        }

        if (array_key_exists("TopicNameV4",$param) and $param["TopicNameV4"] !== null) {
            $this->TopicNameV4 = $param["TopicNameV4"];
        }

        if (array_key_exists("FullNamespaceV4",$param) and $param["FullNamespaceV4"] !== null) {
            $this->FullNamespaceV4 = $param["FullNamespaceV4"];
        }

        if (array_key_exists("HealthCheckErrorList",$param) and $param["HealthCheckErrorList"] !== null) {
            $this->HealthCheckErrorList = $param["HealthCheckErrorList"];
        }
    }
}
