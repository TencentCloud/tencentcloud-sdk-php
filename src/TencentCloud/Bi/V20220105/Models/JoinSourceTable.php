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
 * 多表关联原始表信息
 *
 * @method integer getTableNodeType() 获取1:数据源原表,2:本地表,3:Excel表,4:API表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableNodeType(integer $TableNodeType) 设置1:数据源原表,2:本地表,3:Excel表,4:API表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableNodeId() 获取原始表节点Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableNodeId(string $TableNodeId) 设置原始表节点Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParentId() 获取父节点id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentId(string $ParentId) 设置父节点id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableId() 获取非必填, 数据源原表没有ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableId(string $TableId) 设置非必填, 数据源原表没有ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableName() 获取必填,数据源原表用原始表名, 其他类型用BI的逻辑表名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableName(string $TableName) 设置必填,数据源原表用原始表名, 其他类型用BI的逻辑表名
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFields() 获取原始表需要展示的字段列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFields(array $Fields) 设置原始表需要展示的字段列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDatasourceId() 获取数据源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceId(integer $DatasourceId) 设置数据源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableAlias() 获取非必填,前端展示的数据源别名,excel建表需要
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableAlias(string $TableAlias) 设置非必填,前端展示的数据源别名,excel建表需要
注意：此字段可能返回 null，表示取不到有效值。
 */
class JoinSourceTable extends AbstractModel
{
    /**
     * @var integer 1:数据源原表,2:本地表,3:Excel表,4:API表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableNodeType;

    /**
     * @var string 原始表节点Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableNodeId;

    /**
     * @var string 父节点id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentId;

    /**
     * @var string 非必填, 数据源原表没有ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableId;

    /**
     * @var string 必填,数据源原表用原始表名, 其他类型用BI的逻辑表名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableName;

    /**
     * @var array 原始表需要展示的字段列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Fields;

    /**
     * @var integer 数据源id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceId;

    /**
     * @var string 非必填,前端展示的数据源别名,excel建表需要
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableAlias;

    /**
     * @param integer $TableNodeType 1:数据源原表,2:本地表,3:Excel表,4:API表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableNodeId 原始表节点Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParentId 父节点id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableId 非必填, 数据源原表没有ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableName 必填,数据源原表用原始表名, 其他类型用BI的逻辑表名
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Fields 原始表需要展示的字段列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DatasourceId 数据源id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableAlias 非必填,前端展示的数据源别名,excel建表需要
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
        if (array_key_exists("TableNodeType",$param) and $param["TableNodeType"] !== null) {
            $this->TableNodeType = $param["TableNodeType"];
        }

        if (array_key_exists("TableNodeId",$param) and $param["TableNodeId"] !== null) {
            $this->TableNodeId = $param["TableNodeId"];
        }

        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("Fields",$param) and $param["Fields"] !== null) {
            $this->Fields = [];
            foreach ($param["Fields"] as $key => $value){
                $obj = new TableField();
                $obj->deserialize($value);
                array_push($this->Fields, $obj);
            }
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("TableAlias",$param) and $param["TableAlias"] !== null) {
            $this->TableAlias = $param["TableAlias"];
        }
    }
}
