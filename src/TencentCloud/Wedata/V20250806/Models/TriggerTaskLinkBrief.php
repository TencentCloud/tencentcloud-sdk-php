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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务链接概要信息
 *
 * @method string getLinkId() 获取连接ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLinkId(string $LinkId) 设置连接ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowId() 获取所属工作流ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowId(string $WorkflowId) 设置所属工作流ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowVersionId() 获取所属工作流版本ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowVersionId(string $WorkflowVersionId) 设置所属工作流版本ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpstreamTaskId() 获取上游任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpstreamTaskId(string $UpstreamTaskId) 设置上游任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDownstreamTaskId() 获取下游任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDownstreamTaskId(string $DownstreamTaskId) 设置下游任务ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class TriggerTaskLinkBrief extends AbstractModel
{
    /**
     * @var string 连接ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LinkId;

    /**
     * @var string 所属工作流ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowId;

    /**
     * @var string 所属工作流版本ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowVersionId;

    /**
     * @var string 上游任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpstreamTaskId;

    /**
     * @var string 下游任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DownstreamTaskId;

    /**
     * @param string $LinkId 连接ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowId 所属工作流ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowVersionId 所属工作流版本ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpstreamTaskId 上游任务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DownstreamTaskId 下游任务ID
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
        if (array_key_exists("LinkId",$param) and $param["LinkId"] !== null) {
            $this->LinkId = $param["LinkId"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowVersionId",$param) and $param["WorkflowVersionId"] !== null) {
            $this->WorkflowVersionId = $param["WorkflowVersionId"];
        }

        if (array_key_exists("UpstreamTaskId",$param) and $param["UpstreamTaskId"] !== null) {
            $this->UpstreamTaskId = $param["UpstreamTaskId"];
        }

        if (array_key_exists("DownstreamTaskId",$param) and $param["DownstreamTaskId"] !== null) {
            $this->DownstreamTaskId = $param["DownstreamTaskId"];
        }
    }
}
