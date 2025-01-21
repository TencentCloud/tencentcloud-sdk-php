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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Agent的思考过程
 *
 * @method string getSessionId() 获取会话 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSessionId(string $SessionId) 设置会话 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取请求 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestId(string $RequestId) 设置请求 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRecordId() 获取对应哪条会话, 会话 ID, 用于回答的消息存储使用, 可提前生成, 保存消息时使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordId(string $RecordId) 设置对应哪条会话, 会话 ID, 用于回答的消息存储使用, 可提前生成, 保存消息时使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getElapsed() 获取当前请求执行时间, 单位 ms
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setElapsed(integer $Elapsed) 设置当前请求执行时间, 单位 ms
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsWorkflow() 获取当前是否为工作流
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsWorkflow(boolean $IsWorkflow) 设置当前是否为工作流
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowName() 获取如果当前是工作流，工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowName(string $WorkflowName) 设置如果当前是工作流，工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProcedures() 获取具体思考过程详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcedures(array $Procedures) 设置具体思考过程详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTraceId() 获取TraceId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTraceId(string $TraceId) 设置TraceId
注意：此字段可能返回 null，表示取不到有效值。
 */
class AgentThought extends AbstractModel
{
    /**
     * @var string 会话 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SessionId;

    /**
     * @var string 请求 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestId;

    /**
     * @var string 对应哪条会话, 会话 ID, 用于回答的消息存储使用, 可提前生成, 保存消息时使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecordId;

    /**
     * @var integer 当前请求执行时间, 单位 ms
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Elapsed;

    /**
     * @var boolean 当前是否为工作流
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsWorkflow;

    /**
     * @var string 如果当前是工作流，工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowName;

    /**
     * @var array 具体思考过程详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Procedures;

    /**
     * @var string TraceId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TraceId;

    /**
     * @param string $SessionId 会话 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 请求 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RecordId 对应哪条会话, 会话 ID, 用于回答的消息存储使用, 可提前生成, 保存消息时使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Elapsed 当前请求执行时间, 单位 ms
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsWorkflow 当前是否为工作流
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowName 如果当前是工作流，工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Procedures 具体思考过程详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TraceId TraceId
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
        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("Elapsed",$param) and $param["Elapsed"] !== null) {
            $this->Elapsed = $param["Elapsed"];
        }

        if (array_key_exists("IsWorkflow",$param) and $param["IsWorkflow"] !== null) {
            $this->IsWorkflow = $param["IsWorkflow"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("Procedures",$param) and $param["Procedures"] !== null) {
            $this->Procedures = [];
            foreach ($param["Procedures"] as $key => $value){
                $obj = new AgentProcedure();
                $obj->deserialize($value);
                array_push($this->Procedures, $obj);
            }
        }

        if (array_key_exists("TraceId",$param) and $param["TraceId"] !== null) {
            $this->TraceId = $param["TraceId"];
        }
    }
}
