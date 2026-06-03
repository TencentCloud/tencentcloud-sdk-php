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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 多表关联原始表之间使用的关联字段信息
 *
 * @method string getFieldJoinId() 获取字段关联关系id,前端使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFieldJoinId(string $FieldJoinId) 设置字段关联关系id,前端使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method TableField getSourceField() 获取原表字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceField(TableField $SourceField) 设置原表字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method TableField getTargetField() 获取目标表字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetField(TableField $TargetField) 设置目标表字段
注意：此字段可能返回 null，表示取不到有效值。
 */
class JoinRelationField extends AbstractModel
{
    /**
     * @var string 字段关联关系id,前端使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FieldJoinId;

    /**
     * @var TableField 原表字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceField;

    /**
     * @var TableField 目标表字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetField;

    /**
     * @param string $FieldJoinId 字段关联关系id,前端使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param TableField $SourceField 原表字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param TableField $TargetField 目标表字段
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
        if (array_key_exists("FieldJoinId",$param) and $param["FieldJoinId"] !== null) {
            $this->FieldJoinId = $param["FieldJoinId"];
        }

        if (array_key_exists("SourceField",$param) and $param["SourceField"] !== null) {
            $this->SourceField = new TableField();
            $this->SourceField->deserialize($param["SourceField"]);
        }

        if (array_key_exists("TargetField",$param) and $param["TargetField"] !== null) {
            $this->TargetField = new TableField();
            $this->TargetField->deserialize($param["TargetField"]);
        }
    }
}
