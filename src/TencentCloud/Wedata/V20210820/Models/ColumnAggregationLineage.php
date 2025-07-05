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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 列血缘聚合信息
 *
 * @method string getTableName() 获取表名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableName(string $TableName) 设置表名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParentId() 获取父节点ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentId(string $ParentId) 设置父节点ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMetastoreType() 获取元数据类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetastoreType(string $MetastoreType) 设置元数据类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParentSet() 获取字符串类型的父节点集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentSet(string $ParentSet) 设置字符串类型的父节点集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChildSet() 获取字符串类型的子节点集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChildSet(string $ChildSet) 设置字符串类型的子节点集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getColumnInfoSet() 获取列信息集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumnInfoSet(array $ColumnInfoSet) 设置列信息集合
注意：此字段可能返回 null，表示取不到有效值。
 */
class ColumnAggregationLineage extends AbstractModel
{
    /**
     * @var string 表名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableName;

    /**
     * @var string 父节点ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentId;

    /**
     * @var string 元数据类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetastoreType;

    /**
     * @var string 字符串类型的父节点集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentSet;

    /**
     * @var string 字符串类型的子节点集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChildSet;

    /**
     * @var array 列信息集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColumnInfoSet;

    /**
     * @param string $TableName 表名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParentId 父节点ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MetastoreType 元数据类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParentSet 字符串类型的父节点集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChildSet 字符串类型的子节点集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ColumnInfoSet 列信息集合
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
        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }

        if (array_key_exists("MetastoreType",$param) and $param["MetastoreType"] !== null) {
            $this->MetastoreType = $param["MetastoreType"];
        }

        if (array_key_exists("ParentSet",$param) and $param["ParentSet"] !== null) {
            $this->ParentSet = $param["ParentSet"];
        }

        if (array_key_exists("ChildSet",$param) and $param["ChildSet"] !== null) {
            $this->ChildSet = $param["ChildSet"];
        }

        if (array_key_exists("ColumnInfoSet",$param) and $param["ColumnInfoSet"] !== null) {
            $this->ColumnInfoSet = [];
            foreach ($param["ColumnInfoSet"] as $key => $value){
                $obj = new SimpleColumnInfo();
                $obj->deserialize($value);
                array_push($this->ColumnInfoSet, $obj);
            }
        }
    }
}
