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
 * 工作流基本信息（出参用，含系统生成字段与负责人展示信息）
 *
 * @method string getWorkflowName() 获取工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowName(string $WorkflowName) 设置工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowId() 获取工作流ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowId(string $WorkflowId) 设置工作流ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateUserUin() 获取创建人UIN
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateUserUin(string $CreateUserUin) 设置创建人UIN
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
 * @method string getOwnerUserUin() 获取工作流负责人UIN
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUserUin(string $OwnerUserUin) 设置工作流负责人UIN
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerDisplayName() 获取工作流负责人展示名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerDisplayName(string $OwnerDisplayName) 设置工作流负责人展示名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间，单位：毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间，单位：毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间，单位：毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间，单位：毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
 */
class WorkflowBaseInfoDetail extends AbstractModel
{
    /**
     * @var string 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowName;

    /**
     * @var string 工作流ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowId;

    /**
     * @var string 创建人UIN
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateUserUin;

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
     * @var string 工作流负责人UIN
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUserUin;

    /**
     * @var string 工作流负责人展示名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerDisplayName;

    /**
     * @var string 创建时间，单位：毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 更新时间，单位：毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @param string $WorkflowName 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowId 工作流ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateUserUin 创建人UIN
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunUserUin 工作流运行人UIN
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerUserName 工作流负责人用户名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerUserUin 工作流负责人UIN
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerDisplayName 工作流负责人展示名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间，单位：毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间，单位：毫秒时间戳
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

        if (array_key_exists("CreateUserUin",$param) and $param["CreateUserUin"] !== null) {
            $this->CreateUserUin = $param["CreateUserUin"];
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

        if (array_key_exists("OwnerUserUin",$param) and $param["OwnerUserUin"] !== null) {
            $this->OwnerUserUin = $param["OwnerUserUin"];
        }

        if (array_key_exists("OwnerDisplayName",$param) and $param["OwnerDisplayName"] !== null) {
            $this->OwnerDisplayName = $param["OwnerDisplayName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
