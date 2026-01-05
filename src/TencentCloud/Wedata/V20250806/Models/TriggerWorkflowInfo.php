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
 * 获取工作流的列表信息item
 *
 * @method string getWorkflowId() 获取工作流ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowId(string $WorkflowId) 设置工作流ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowName() 获取工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowName(string $WorkflowName) 设置工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerUin() 获取负责人ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUin(string $OwnerUin) 设置负责人ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyTime() 获取最新修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyTime(string $ModifyTime) 设置最新修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateUserUin() 获取最后更新人ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateUserUin(string $UpdateUserUin) 设置最后更新人ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowDesc() 获取工作流描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowDesc(string $WorkflowDesc) 设置工作流描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateUserUin() 获取创建人ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateUserUin(string $CreateUserUin) 设置创建人ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class TriggerWorkflowInfo extends AbstractModel
{
    /**
     * @var string 工作流ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowId;

    /**
     * @var string 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowName;

    /**
     * @var string 负责人ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUin;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 最新修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyTime;

    /**
     * @var string 最后更新人ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateUserUin;

    /**
     * @var string 工作流描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowDesc;

    /**
     * @var string 创建人ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateUserUin;

    /**
     * @param string $WorkflowId 工作流ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowName 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerUin 负责人ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyTime 最新修改时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateUserUin 最后更新人ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowDesc 工作流描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateUserUin 创建人ID
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
        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("UpdateUserUin",$param) and $param["UpdateUserUin"] !== null) {
            $this->UpdateUserUin = $param["UpdateUserUin"];
        }

        if (array_key_exists("WorkflowDesc",$param) and $param["WorkflowDesc"] !== null) {
            $this->WorkflowDesc = $param["WorkflowDesc"];
        }

        if (array_key_exists("CreateUserUin",$param) and $param["CreateUserUin"] !== null) {
            $this->CreateUserUin = $param["CreateUserUin"];
        }
    }
}
