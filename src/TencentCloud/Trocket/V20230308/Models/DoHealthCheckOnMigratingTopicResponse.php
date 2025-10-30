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
 * DoHealthCheckOnMigratingTopic返回参数结构体
 *
 * @method boolean getPassed() 获取是否通过	
 * @method void setPassed(boolean $Passed) 设置是否通过	
 * @method string getReason() 获取健康检查返回的错误信息
NotChecked 未执行检查， 
Unknown 未知错误, 
TopicNotImported 主题未导入,
TopicNotExistsInSourceCluster 主题在源集群中不存在, 
TopicNotExistsInTargetCluster 主题在目标集群中不存在, 
ConsumerConnectedOnTarget 目标集群上存在消费者连接, 
SourceTopicHasNewMessagesIn5Minutes 源集群主题前5分钟内有新消息写入, 
TargetTopicHasNewMessagesIn5Minutes 目标集群主题前5分钟内有新消息写入, 
SourceTopicHasNoMessagesIn5Minutes 源集群前5分钟内没有新消息写入, 
TargetTopicHasNoMessagesIn5Minutes 源集群前5分钟内没有新消息写入, 
ConsumerGroupCountNotMatch 订阅组数量不一致, 
SourceTopicHasUnconsumedMessages 源集群主题存在未消费消息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReason(string $Reason) 设置健康检查返回的错误信息
NotChecked 未执行检查， 
Unknown 未知错误, 
TopicNotImported 主题未导入,
TopicNotExistsInSourceCluster 主题在源集群中不存在, 
TopicNotExistsInTargetCluster 主题在目标集群中不存在, 
ConsumerConnectedOnTarget 目标集群上存在消费者连接, 
SourceTopicHasNewMessagesIn5Minutes 源集群主题前5分钟内有新消息写入, 
TargetTopicHasNewMessagesIn5Minutes 目标集群主题前5分钟内有新消息写入, 
SourceTopicHasNoMessagesIn5Minutes 源集群前5分钟内没有新消息写入, 
TargetTopicHasNoMessagesIn5Minutes 源集群前5分钟内没有新消息写入, 
ConsumerGroupCountNotMatch 订阅组数量不一致, 
SourceTopicHasUnconsumedMessages 源集群主题存在未消费消息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getReasonList() 获取健康检查返回的错误信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReasonList(array $ReasonList) 设置健康检查返回的错误信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DoHealthCheckOnMigratingTopicResponse extends AbstractModel
{
    /**
     * @var boolean 是否通过	
     */
    public $Passed;

    /**
     * @var string 健康检查返回的错误信息
NotChecked 未执行检查， 
Unknown 未知错误, 
TopicNotImported 主题未导入,
TopicNotExistsInSourceCluster 主题在源集群中不存在, 
TopicNotExistsInTargetCluster 主题在目标集群中不存在, 
ConsumerConnectedOnTarget 目标集群上存在消费者连接, 
SourceTopicHasNewMessagesIn5Minutes 源集群主题前5分钟内有新消息写入, 
TargetTopicHasNewMessagesIn5Minutes 目标集群主题前5分钟内有新消息写入, 
SourceTopicHasNoMessagesIn5Minutes 源集群前5分钟内没有新消息写入, 
TargetTopicHasNoMessagesIn5Minutes 源集群前5分钟内没有新消息写入, 
ConsumerGroupCountNotMatch 订阅组数量不一致, 
SourceTopicHasUnconsumedMessages 源集群主题存在未消费消息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Reason;

    /**
     * @var array 健康检查返回的错误信息列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReasonList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $Passed 是否通过	
     * @param string $Reason 健康检查返回的错误信息
NotChecked 未执行检查， 
Unknown 未知错误, 
TopicNotImported 主题未导入,
TopicNotExistsInSourceCluster 主题在源集群中不存在, 
TopicNotExistsInTargetCluster 主题在目标集群中不存在, 
ConsumerConnectedOnTarget 目标集群上存在消费者连接, 
SourceTopicHasNewMessagesIn5Minutes 源集群主题前5分钟内有新消息写入, 
TargetTopicHasNewMessagesIn5Minutes 目标集群主题前5分钟内有新消息写入, 
SourceTopicHasNoMessagesIn5Minutes 源集群前5分钟内没有新消息写入, 
TargetTopicHasNoMessagesIn5Minutes 源集群前5分钟内没有新消息写入, 
ConsumerGroupCountNotMatch 订阅组数量不一致, 
SourceTopicHasUnconsumedMessages 源集群主题存在未消费消息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ReasonList 健康检查返回的错误信息列表
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Passed",$param) and $param["Passed"] !== null) {
            $this->Passed = $param["Passed"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("ReasonList",$param) and $param["ReasonList"] !== null) {
            $this->ReasonList = $param["ReasonList"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
