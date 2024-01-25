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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工作流画布操作日志
 *
 * @method integer getCreateTimestamp() 获取创建时间，时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTimestamp(integer $CreateTimestamp) 设置创建时间，时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowId() 获取工作流ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowId(string $WorkflowId) 设置工作流ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOperatorId() 获取操作人ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperatorId(integer $OperatorId) 设置操作人ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperatorName() 获取操作人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperatorName(string $OperatorName) 设置操作人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContent() 获取操作日志
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(string $Content) 设置操作日志
注意：此字段可能返回 null，表示取不到有效值。
 */
class WorkflowCanvasOplog extends AbstractModel
{
    /**
     * @var integer 创建时间，时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTimestamp;

    /**
     * @var string 工作流ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowId;

    /**
     * @var integer 操作人ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperatorId;

    /**
     * @var string 操作人名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperatorName;

    /**
     * @var string 操作日志
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;

    /**
     * @param integer $CreateTimestamp 创建时间，时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowId 工作流ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OperatorId 操作人ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OperatorName 操作人名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Content 操作日志
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
        if (array_key_exists("CreateTimestamp",$param) and $param["CreateTimestamp"] !== null) {
            $this->CreateTimestamp = $param["CreateTimestamp"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("OperatorId",$param) and $param["OperatorId"] !== null) {
            $this->OperatorId = $param["OperatorId"];
        }

        if (array_key_exists("OperatorName",$param) and $param["OperatorName"] !== null) {
            $this->OperatorName = $param["OperatorName"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
