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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工作流列表项的运行情况
 *
 * @method string getWorkflowRunId() 获取工作流运行ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowRunId(string $WorkflowRunId) 设置工作流运行ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunStartTime() 获取运行开始时间，单位：毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunStartTime(string $RunStartTime) 设置运行开始时间，单位：毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunState() 获取<p>运行状态。CREATE(&quot;初始化&quot;),     QUEUED(&quot;等待中&quot;),     PENDING(&quot;准备中&quot;),     RUNNING(&quot;运行中&quot;),     SKIPPED(&quot;跳过运行&quot;),     SUCCESS(&quot;成功&quot;),     FAILED(&quot;失败&quot;),     TERMINATING(&quot;终止中&quot;),     TERMINATED(&quot;终止&quot;),     CANCELLED(&quot;被手动终止&quot;)等</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunState(string $RunState) 设置<p>运行状态。CREATE(&quot;初始化&quot;),     QUEUED(&quot;等待中&quot;),     PENDING(&quot;准备中&quot;),     RUNNING(&quot;运行中&quot;),     SKIPPED(&quot;跳过运行&quot;),     SUCCESS(&quot;成功&quot;),     FAILED(&quot;失败&quot;),     TERMINATING(&quot;终止中&quot;),     TERMINATED(&quot;终止&quot;),     CANCELLED(&quot;被手动终止&quot;)等</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorCodeString() 获取运行错误码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorCodeString(string $ErrorCodeString) 设置运行错误码
注意：此字段可能返回 null，表示取不到有效值。
 */
class WorkflowRunBrief extends AbstractModel
{
    /**
     * @var string 工作流运行ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowRunId;

    /**
     * @var string 运行开始时间，单位：毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunStartTime;

    /**
     * @var string <p>运行状态。CREATE(&quot;初始化&quot;),     QUEUED(&quot;等待中&quot;),     PENDING(&quot;准备中&quot;),     RUNNING(&quot;运行中&quot;),     SKIPPED(&quot;跳过运行&quot;),     SUCCESS(&quot;成功&quot;),     FAILED(&quot;失败&quot;),     TERMINATING(&quot;终止中&quot;),     TERMINATED(&quot;终止&quot;),     CANCELLED(&quot;被手动终止&quot;)等</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunState;

    /**
     * @var string 运行错误码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorCodeString;

    /**
     * @param string $WorkflowRunId 工作流运行ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunStartTime 运行开始时间，单位：毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunState <p>运行状态。CREATE(&quot;初始化&quot;),     QUEUED(&quot;等待中&quot;),     PENDING(&quot;准备中&quot;),     RUNNING(&quot;运行中&quot;),     SKIPPED(&quot;跳过运行&quot;),     SUCCESS(&quot;成功&quot;),     FAILED(&quot;失败&quot;),     TERMINATING(&quot;终止中&quot;),     TERMINATED(&quot;终止&quot;),     CANCELLED(&quot;被手动终止&quot;)等</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorCodeString 运行错误码
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
        if (array_key_exists("WorkflowRunId",$param) and $param["WorkflowRunId"] !== null) {
            $this->WorkflowRunId = $param["WorkflowRunId"];
        }

        if (array_key_exists("RunStartTime",$param) and $param["RunStartTime"] !== null) {
            $this->RunStartTime = $param["RunStartTime"];
        }

        if (array_key_exists("RunState",$param) and $param["RunState"] !== null) {
            $this->RunState = $param["RunState"];
        }

        if (array_key_exists("ErrorCodeString",$param) and $param["ErrorCodeString"] !== null) {
            $this->ErrorCodeString = $param["ErrorCodeString"];
        }
    }
}
