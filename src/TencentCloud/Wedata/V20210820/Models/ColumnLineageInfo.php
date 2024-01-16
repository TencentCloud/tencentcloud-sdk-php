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
 * 血缘字段信息
 *
 * @method string getId() 获取血缘id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置血缘id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceId() 获取数据源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceId(string $DatasourceId) 设置数据源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableId() 获取表ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableId(string $TableId) 设置表ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getColumnName() 获取字段名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumnName(string $ColumnName) 设置字段名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getColumnNameCn() 获取字段中文名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumnNameCn(string $ColumnNameCn) 设置字段中文名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getColumnType() 获取字段类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumnType(string $ColumnType) 设置字段类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRelationParams() 获取关系参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelationParams(string $RelationParams) 设置关系参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParams() 获取参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParams(string $Params) 设置参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParentId() 获取父id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentId(string $ParentId) 设置父id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMetastoreType() 获取元数据类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetastoreType(string $MetastoreType) 设置元数据类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMetastoreTypeName() 获取元数据类型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetastoreTypeName(string $MetastoreTypeName) 设置元数据类型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableName() 获取表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableName(string $TableName) 设置表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQualifiedName() 获取字段全名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQualifiedName(string $QualifiedName) 设置字段全名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDownStreamCount() 获取下游节点数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDownStreamCount(integer $DownStreamCount) 设置下游节点数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpStreamCount() 获取上游节点数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpStreamCount(integer $UpStreamCount) 设置上游节点数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPrefixPath() 获取由中心节点出发的路径信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrefixPath(string $PrefixPath) 设置由中心节点出发的路径信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyTime(string $ModifyTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTasks() 获取任务id列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTasks(array $Tasks) 设置任务id列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParentSet() 获取父节点列表字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentSet(string $ParentSet) 设置父节点列表字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChildSet() 获取子节点列表字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChildSet(string $ChildSet) 设置子节点列表字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExtParams() 获取额外参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtParams(array $ExtParams) 设置额外参数
注意：此字段可能返回 null，表示取不到有效值。
 */
class ColumnLineageInfo extends AbstractModel
{
    /**
     * @var string 血缘id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 数据源ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceId;

    /**
     * @var string 表ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableId;

    /**
     * @var string 字段名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColumnName;

    /**
     * @var string 字段中文名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColumnNameCn;

    /**
     * @var string 字段类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColumnType;

    /**
     * @var string 关系参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RelationParams;

    /**
     * @var string 参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Params;

    /**
     * @var string 父id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentId;

    /**
     * @var string 元数据类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetastoreType;

    /**
     * @var string 元数据类型名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetastoreTypeName;

    /**
     * @var string 表名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableName;

    /**
     * @var string 字段全名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QualifiedName;

    /**
     * @var integer 下游节点数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DownStreamCount;

    /**
     * @var integer 上游节点数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpStreamCount;

    /**
     * @var string 描述信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 由中心节点出发的路径信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrefixPath;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyTime;

    /**
     * @var array 任务id列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tasks;

    /**
     * @var string 父节点列表字符串
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentSet;

    /**
     * @var string 子节点列表字符串
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChildSet;

    /**
     * @var array 额外参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtParams;

    /**
     * @param string $Id 血缘id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceId 数据源ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableId 表ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ColumnName 字段名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ColumnNameCn 字段中文名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ColumnType 字段类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RelationParams 关系参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Params 参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParentId 父id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MetastoreType 元数据类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MetastoreTypeName 元数据类型名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableName 表名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QualifiedName 字段全名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DownStreamCount 下游节点数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpStreamCount 上游节点数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 描述信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PrefixPath 由中心节点出发的路径信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tasks 任务id列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParentSet 父节点列表字符串
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChildSet 子节点列表字符串
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ExtParams 额外参数
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("ColumnName",$param) and $param["ColumnName"] !== null) {
            $this->ColumnName = $param["ColumnName"];
        }

        if (array_key_exists("ColumnNameCn",$param) and $param["ColumnNameCn"] !== null) {
            $this->ColumnNameCn = $param["ColumnNameCn"];
        }

        if (array_key_exists("ColumnType",$param) and $param["ColumnType"] !== null) {
            $this->ColumnType = $param["ColumnType"];
        }

        if (array_key_exists("RelationParams",$param) and $param["RelationParams"] !== null) {
            $this->RelationParams = $param["RelationParams"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = $param["Params"];
        }

        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }

        if (array_key_exists("MetastoreType",$param) and $param["MetastoreType"] !== null) {
            $this->MetastoreType = $param["MetastoreType"];
        }

        if (array_key_exists("MetastoreTypeName",$param) and $param["MetastoreTypeName"] !== null) {
            $this->MetastoreTypeName = $param["MetastoreTypeName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("QualifiedName",$param) and $param["QualifiedName"] !== null) {
            $this->QualifiedName = $param["QualifiedName"];
        }

        if (array_key_exists("DownStreamCount",$param) and $param["DownStreamCount"] !== null) {
            $this->DownStreamCount = $param["DownStreamCount"];
        }

        if (array_key_exists("UpStreamCount",$param) and $param["UpStreamCount"] !== null) {
            $this->UpStreamCount = $param["UpStreamCount"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("PrefixPath",$param) and $param["PrefixPath"] !== null) {
            $this->PrefixPath = $param["PrefixPath"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = $param["Tasks"];
        }

        if (array_key_exists("ParentSet",$param) and $param["ParentSet"] !== null) {
            $this->ParentSet = $param["ParentSet"];
        }

        if (array_key_exists("ChildSet",$param) and $param["ChildSet"] !== null) {
            $this->ChildSet = $param["ChildSet"];
        }

        if (array_key_exists("ExtParams",$param) and $param["ExtParams"] !== null) {
            $this->ExtParams = [];
            foreach ($param["ExtParams"] as $key => $value){
                $obj = new LineageParamRecord();
                $obj->deserialize($value);
                array_push($this->ExtParams, $obj);
            }
        }
    }
}
