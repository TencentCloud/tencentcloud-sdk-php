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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ParseNotification返回参数结构体
 *
 * @method string getEventType() 获取支持事件类型，目前取值有：
<li>WorkflowTask：视频工作流处理任务。</li>
<li>EditMediaTask：视频编辑任务。</li>
<li>ScheduleTask：编排任务。</li>
 * @method void setEventType(string $EventType) 设置支持事件类型，目前取值有：
<li>WorkflowTask：视频工作流处理任务。</li>
<li>EditMediaTask：视频编辑任务。</li>
<li>ScheduleTask：编排任务。</li>
 * @method WorkflowTask getWorkflowTaskEvent() 获取视频处理任务信息，仅当 EventType 为 WorkflowTask，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowTaskEvent(WorkflowTask $WorkflowTaskEvent) 设置视频处理任务信息，仅当 EventType 为 WorkflowTask，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method EditMediaTask getEditMediaTaskEvent() 获取视频编辑任务信息，仅当 EventType 为 EditMediaTask，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEditMediaTaskEvent(EditMediaTask $EditMediaTaskEvent) 设置视频编辑任务信息，仅当 EventType 为 EditMediaTask，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSessionId() 获取用于去重的识别码，如果七天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长50个字符，不带或者带空字符串表示不做去重。
 * @method void setSessionId(string $SessionId) 设置用于去重的识别码，如果七天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长50个字符，不带或者带空字符串表示不做去重。
 * @method string getSessionContext() 获取来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长1000个字符。
 * @method void setSessionContext(string $SessionContext) 设置来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长1000个字符。
 * @method ScheduleTask getScheduleTaskEvent() 获取编排任务信息，仅当 EventType 为 ScheduleTask，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduleTaskEvent(ScheduleTask $ScheduleTaskEvent) 设置编排任务信息，仅当 EventType 为 ScheduleTask，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimestamp() 获取- 过期时间，事件通知签名过期 UNIX 时间戳。
- 来自媒体处理的消息通知默认过期时间是10分钟，如果一条消息通知中的 Timestamp 值所指定的时间已经过期，则可以判定这条通知无效，进而可以防止网络重放攻击。
- Timestamp 的格式为十进制 UNIX 时间戳，即从1970年01月01日（UTC/GMT 的午夜）开始所经过的秒数。

 * @method void setTimestamp(integer $Timestamp) 设置- 过期时间，事件通知签名过期 UNIX 时间戳。
- 来自媒体处理的消息通知默认过期时间是10分钟，如果一条消息通知中的 Timestamp 值所指定的时间已经过期，则可以判定这条通知无效，进而可以防止网络重放攻击。
- Timestamp 的格式为十进制 UNIX 时间戳，即从1970年01月01日（UTC/GMT 的午夜）开始所经过的秒数。

 * @method string getSign() 获取事件通知安全签名 Sign = MD5（NotifyKey + Timestamp）。说明：媒体处理把 TaskNotifyConfig 里面的NotifyKey 和 Timestamp 进行字符串拼接后通过 MD5 计算得出 Sign 值，并将其放在通知消息里，您的后台服务器在收到通知消息后可以根据同样的算法确认 Sign 是否正确，进而确认消息是否确实来自媒体处理后台。
 * @method void setSign(string $Sign) 设置事件通知安全签名 Sign = MD5（NotifyKey + Timestamp）。说明：媒体处理把 TaskNotifyConfig 里面的NotifyKey 和 Timestamp 进行字符串拼接后通过 MD5 计算得出 Sign 值，并将其放在通知消息里，您的后台服务器在收到通知消息后可以根据同样的算法确认 Sign 是否正确，进而确认消息是否确实来自媒体处理后台。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ParseNotificationResponse extends AbstractModel
{
    /**
     * @var string 支持事件类型，目前取值有：
<li>WorkflowTask：视频工作流处理任务。</li>
<li>EditMediaTask：视频编辑任务。</li>
<li>ScheduleTask：编排任务。</li>
     */
    public $EventType;

    /**
     * @var WorkflowTask 视频处理任务信息，仅当 EventType 为 WorkflowTask，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowTaskEvent;

    /**
     * @var EditMediaTask 视频编辑任务信息，仅当 EventType 为 EditMediaTask，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EditMediaTaskEvent;

    /**
     * @var string 用于去重的识别码，如果七天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长50个字符，不带或者带空字符串表示不做去重。
     */
    public $SessionId;

    /**
     * @var string 来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长1000个字符。
     */
    public $SessionContext;

    /**
     * @var ScheduleTask 编排任务信息，仅当 EventType 为 ScheduleTask，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduleTaskEvent;

    /**
     * @var integer - 过期时间，事件通知签名过期 UNIX 时间戳。
- 来自媒体处理的消息通知默认过期时间是10分钟，如果一条消息通知中的 Timestamp 值所指定的时间已经过期，则可以判定这条通知无效，进而可以防止网络重放攻击。
- Timestamp 的格式为十进制 UNIX 时间戳，即从1970年01月01日（UTC/GMT 的午夜）开始所经过的秒数。

     */
    public $Timestamp;

    /**
     * @var string 事件通知安全签名 Sign = MD5（NotifyKey + Timestamp）。说明：媒体处理把 TaskNotifyConfig 里面的NotifyKey 和 Timestamp 进行字符串拼接后通过 MD5 计算得出 Sign 值，并将其放在通知消息里，您的后台服务器在收到通知消息后可以根据同样的算法确认 Sign 是否正确，进而确认消息是否确实来自媒体处理后台。
     */
    public $Sign;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $EventType 支持事件类型，目前取值有：
<li>WorkflowTask：视频工作流处理任务。</li>
<li>EditMediaTask：视频编辑任务。</li>
<li>ScheduleTask：编排任务。</li>
     * @param WorkflowTask $WorkflowTaskEvent 视频处理任务信息，仅当 EventType 为 WorkflowTask，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param EditMediaTask $EditMediaTaskEvent 视频编辑任务信息，仅当 EventType 为 EditMediaTask，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SessionId 用于去重的识别码，如果七天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长50个字符，不带或者带空字符串表示不做去重。
     * @param string $SessionContext 来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长1000个字符。
     * @param ScheduleTask $ScheduleTaskEvent 编排任务信息，仅当 EventType 为 ScheduleTask，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Timestamp - 过期时间，事件通知签名过期 UNIX 时间戳。
- 来自媒体处理的消息通知默认过期时间是10分钟，如果一条消息通知中的 Timestamp 值所指定的时间已经过期，则可以判定这条通知无效，进而可以防止网络重放攻击。
- Timestamp 的格式为十进制 UNIX 时间戳，即从1970年01月01日（UTC/GMT 的午夜）开始所经过的秒数。

     * @param string $Sign 事件通知安全签名 Sign = MD5（NotifyKey + Timestamp）。说明：媒体处理把 TaskNotifyConfig 里面的NotifyKey 和 Timestamp 进行字符串拼接后通过 MD5 计算得出 Sign 值，并将其放在通知消息里，您的后台服务器在收到通知消息后可以根据同样的算法确认 Sign 是否正确，进而确认消息是否确实来自媒体处理后台。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("WorkflowTaskEvent",$param) and $param["WorkflowTaskEvent"] !== null) {
            $this->WorkflowTaskEvent = new WorkflowTask();
            $this->WorkflowTaskEvent->deserialize($param["WorkflowTaskEvent"]);
        }

        if (array_key_exists("EditMediaTaskEvent",$param) and $param["EditMediaTaskEvent"] !== null) {
            $this->EditMediaTaskEvent = new EditMediaTask();
            $this->EditMediaTaskEvent->deserialize($param["EditMediaTaskEvent"]);
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("ScheduleTaskEvent",$param) and $param["ScheduleTaskEvent"] !== null) {
            $this->ScheduleTaskEvent = new ScheduleTask();
            $this->ScheduleTaskEvent->deserialize($param["ScheduleTaskEvent"]);
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Sign",$param) and $param["Sign"] !== null) {
            $this->Sign = $param["Sign"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
