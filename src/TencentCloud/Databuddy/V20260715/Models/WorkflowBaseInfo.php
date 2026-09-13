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
 * 工作流基本信息（入参用）
 *
 * @method string getWorkflowName() 获取工作流名称，长度不超过 1024
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowName(string $WorkflowName) 设置工作流名称，长度不超过 1024
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowId() 获取工作流ID，创建时无需传入，由服务端生成
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowId(string $WorkflowId) 设置工作流ID，创建时无需传入，由服务端生成
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunUserUin() 获取工作流运行人UIN
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunUserUin(string $RunUserUin) 设置工作流运行人UIN
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerUserName() 获取工作流负责人用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUserName(string $OwnerUserName) 设置工作流负责人用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateUserUin() 获取创建人UIN。系统生成字段，入参传值不生效（服务端忽略且不报错）
【已废弃】服务端忽略传入值，不报错。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateUserUin(string $CreateUserUin) 设置创建人UIN。系统生成字段，入参传值不生效（服务端忽略且不报错）
【已废弃】服务端忽略传入值，不报错。
注意：此字段可能返回 null，表示取不到有效值。
 */
class WorkflowBaseInfo extends AbstractModel
{
    /**
     * @var string 工作流名称，长度不超过 1024
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowName;

    /**
     * @var string 工作流ID，创建时无需传入，由服务端生成
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowId;

    /**
     * @var string 工作流运行人UIN
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunUserUin;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 工作流负责人用户名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUserName;

    /**
     * @var string 创建人UIN。系统生成字段，入参传值不生效（服务端忽略且不报错）
【已废弃】服务端忽略传入值，不报错。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateUserUin;

    /**
     * @param string $WorkflowName 工作流名称，长度不超过 1024
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowId 工作流ID，创建时无需传入，由服务端生成
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunUserUin 工作流运行人UIN
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerUserName 工作流负责人用户名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateUserUin 创建人UIN。系统生成字段，入参传值不生效（服务端忽略且不报错）
【已废弃】服务端忽略传入值，不报错。
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
        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("RunUserUin",$param) and $param["RunUserUin"] !== null) {
            $this->RunUserUin = $param["RunUserUin"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("OwnerUserName",$param) and $param["OwnerUserName"] !== null) {
            $this->OwnerUserName = $param["OwnerUserName"];
        }

        if (array_key_exists("CreateUserUin",$param) and $param["CreateUserUin"] !== null) {
            $this->CreateUserUin = $param["CreateUserUin"];
        }
    }
}
