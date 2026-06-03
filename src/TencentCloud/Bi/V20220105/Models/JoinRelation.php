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
 * 多表关联原始表之间的关联信息
 *
 * @method string getJoinId() 获取表关联关系id,前端使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJoinId(string $JoinId) 设置表关联关系id,前端使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceTableNodeId() 获取原表节点id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceTableNodeId(string $SourceTableNodeId) 设置原表节点id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetTableNodeId() 获取目标表节点id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetTableNodeId(string $TargetTableNodeId) 设置目标表节点id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJoinType() 获取多表关联的关联类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJoinType(string $JoinType) 设置多表关联的关联类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFields() 获取多表关联的字段列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFields(array $Fields) 设置多表关联的字段列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class JoinRelation extends AbstractModel
{
    /**
     * @var string 表关联关系id,前端使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JoinId;

    /**
     * @var string 原表节点id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceTableNodeId;

    /**
     * @var string 目标表节点id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetTableNodeId;

    /**
     * @var string 多表关联的关联类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JoinType;

    /**
     * @var array 多表关联的字段列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Fields;

    /**
     * @param string $JoinId 表关联关系id,前端使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceTableNodeId 原表节点id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetTableNodeId 目标表节点id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JoinType 多表关联的关联类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Fields 多表关联的字段列表
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
        if (array_key_exists("JoinId",$param) and $param["JoinId"] !== null) {
            $this->JoinId = $param["JoinId"];
        }

        if (array_key_exists("SourceTableNodeId",$param) and $param["SourceTableNodeId"] !== null) {
            $this->SourceTableNodeId = $param["SourceTableNodeId"];
        }

        if (array_key_exists("TargetTableNodeId",$param) and $param["TargetTableNodeId"] !== null) {
            $this->TargetTableNodeId = $param["TargetTableNodeId"];
        }

        if (array_key_exists("JoinType",$param) and $param["JoinType"] !== null) {
            $this->JoinType = $param["JoinType"];
        }

        if (array_key_exists("Fields",$param) and $param["Fields"] !== null) {
            $this->Fields = [];
            foreach ($param["Fields"] as $key => $value){
                $obj = new JoinRelationField();
                $obj->deserialize($value);
                array_push($this->Fields, $obj);
            }
        }
    }
}
