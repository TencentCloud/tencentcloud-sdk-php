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
 * 血缘列描述
 *
 * @method string getId() 获取列ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置列ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQualifiedName() 获取限定名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQualifiedName(string $QualifiedName) 设置限定名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getColumnName() 获取列名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumnName(string $ColumnName) 设置列名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getColumnNameCn() 获取列中文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumnNameCn(string $ColumnNameCn) 设置列中文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getColumnType() 获取列类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumnType(string $ColumnType) 设置列类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取列描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置列描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPrefixPath() 获取前缀路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrefixPath(string $PrefixPath) 设置前缀路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyTime() 获取修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceId() 获取数据源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceId(string $DatasourceId) 设置数据源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDownStreamCount() 获取下游数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDownStreamCount(integer $DownStreamCount) 设置下游数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpStreamCount() 获取上游数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpStreamCount(integer $UpStreamCount) 设置上游数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRelationParams() 获取关系参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelationParams(string $RelationParams) 设置关系参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParams() 获取参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParams(string $Params) 设置参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTasks() 获取任务集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTasks(array $Tasks) 设置任务集合
注意：此字段可能返回 null，表示取不到有效值。
 */
class SimpleColumnInfo extends AbstractModel
{
    /**
     * @var string 列ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 限定名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QualifiedName;

    /**
     * @var string 列名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColumnName;

    /**
     * @var string 列中文名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColumnNameCn;

    /**
     * @var string 列类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColumnType;

    /**
     * @var string 列描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 前缀路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrefixPath;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyTime;

    /**
     * @var string 数据源ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceId;

    /**
     * @var integer 下游数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DownStreamCount;

    /**
     * @var integer 上游数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpStreamCount;

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
     * @var array 任务集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tasks;

    /**
     * @param string $Id 列ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QualifiedName 限定名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ColumnName 列名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ColumnNameCn 列中文名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ColumnType 列类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 列描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PrefixPath 前缀路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyTime 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceId 数据源ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DownStreamCount 下游数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpStreamCount 上游数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RelationParams 关系参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Params 参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tasks 任务集合
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

        if (array_key_exists("QualifiedName",$param) and $param["QualifiedName"] !== null) {
            $this->QualifiedName = $param["QualifiedName"];
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

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("DownStreamCount",$param) and $param["DownStreamCount"] !== null) {
            $this->DownStreamCount = $param["DownStreamCount"];
        }

        if (array_key_exists("UpStreamCount",$param) and $param["UpStreamCount"] !== null) {
            $this->UpStreamCount = $param["UpStreamCount"];
        }

        if (array_key_exists("RelationParams",$param) and $param["RelationParams"] !== null) {
            $this->RelationParams = $param["RelationParams"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = $param["Params"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = $param["Tasks"];
        }
    }
}
