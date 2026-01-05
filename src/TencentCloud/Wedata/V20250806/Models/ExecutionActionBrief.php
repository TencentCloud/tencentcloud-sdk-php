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
 * 执行操作结果
 *
 * @method string getItemId() 获取操作实体 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItemId(string $ItemId) 设置操作实体 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getItemName() 获取操作实体名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItemName(string $ItemName) 设置操作实体名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionActionId() 获取操作 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionActionId(string $ExecutionActionId) 设置操作 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorMessage() 获取失败信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorMessage(string $ErrorMessage) 设置失败信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getOpStatus() 获取操作状态，true：成功，false：失败
 * @method void setOpStatus(boolean $OpStatus) 设置操作状态，true：成功，false：失败
 */
class ExecutionActionBrief extends AbstractModel
{
    /**
     * @var string 操作实体 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ItemId;

    /**
     * @var string 操作实体名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ItemName;

    /**
     * @var string 操作 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionActionId;

    /**
     * @var string 失败信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorMessage;

    /**
     * @var boolean 操作状态，true：成功，false：失败
     */
    public $OpStatus;

    /**
     * @param string $ItemId 操作实体 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ItemName 操作实体名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionActionId 操作 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorMessage 失败信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $OpStatus 操作状态，true：成功，false：失败
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
        if (array_key_exists("ItemId",$param) and $param["ItemId"] !== null) {
            $this->ItemId = $param["ItemId"];
        }

        if (array_key_exists("ItemName",$param) and $param["ItemName"] !== null) {
            $this->ItemName = $param["ItemName"];
        }

        if (array_key_exists("ExecutionActionId",$param) and $param["ExecutionActionId"] !== null) {
            $this->ExecutionActionId = $param["ExecutionActionId"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("OpStatus",$param) and $param["OpStatus"] !== null) {
            $this->OpStatus = $param["OpStatus"];
        }
    }
}
