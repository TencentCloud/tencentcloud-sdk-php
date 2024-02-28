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
 * 表的元数据信息
 *
 * @method string getTableId() 获取表的全局唯一ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableId(string $TableId) 设置表的全局唯一ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceId() 获取数据源全局唯一ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceId(string $DatasourceId) 设置数据源全局唯一ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceName() 获取数据源名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceName(string $DatasourceName) 设置数据源名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseId() 获取数据库ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseId(string $DatabaseId) 设置数据库ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseName() 获取数据库名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableName() 获取表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableName(string $TableName) 设置表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getColumnName() 获取字段名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumnName(string $ColumnName) 设置字段名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataType() 获取数据类型,string/int等
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataType(string $DataType) 设置数据类型,string/int等
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getColumnType() 获取字段类型, varchar(32)/int(10)等
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumnType(string $ColumnType) 设置字段类型, varchar(32)/int(10)等
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getColumnDefault() 获取字段默认值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumnDefault(string $ColumnDefault) 设置字段默认值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getColumnKey() 获取索引类型, PRI/MUL/PARTITION等,普通字段该值为空串
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumnKey(string $ColumnKey) 设置索引类型, PRI/MUL/PARTITION等,普通字段该值为空串
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getColumnPosition() 获取字段顺序标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumnPosition(integer $ColumnPosition) 设置字段顺序标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getColumnComment() 获取字段注释
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumnComment(string $ColumnComment) 设置字段注释
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStoreType() 获取数据类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStoreType(string $StoreType) 设置数据类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取所属项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置所属项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectName() 获取所属项目英文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectName(string $ProjectName) 设置所属项目英文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectDisplayName() 获取所属项目中文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectDisplayName(string $ProjectDisplayName) 设置所属项目中文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScale() 获取精度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScale(integer $Scale) 设置精度
注意：此字段可能返回 null，表示取不到有效值。
 */
class ColumnBasicInfo extends AbstractModel
{
    /**
     * @var string 表的全局唯一ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableId;

    /**
     * @var string 数据源全局唯一ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceId;

    /**
     * @var string 数据源名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceName;

    /**
     * @var string 数据库ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseId;

    /**
     * @var string 数据库名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseName;

    /**
     * @var string 表名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableName;

    /**
     * @var string 字段名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColumnName;

    /**
     * @var string 数据类型,string/int等
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataType;

    /**
     * @var string 字段类型, varchar(32)/int(10)等
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColumnType;

    /**
     * @var string 字段默认值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColumnDefault;

    /**
     * @var string 索引类型, PRI/MUL/PARTITION等,普通字段该值为空串
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColumnKey;

    /**
     * @var integer 字段顺序标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColumnPosition;

    /**
     * @var string 字段注释
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColumnComment;

    /**
     * @var string 数据类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StoreType;

    /**
     * @var string 所属项目ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 所属项目英文名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectName;

    /**
     * @var string 所属项目中文名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectDisplayName;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var integer 精度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Scale;

    /**
     * @param string $TableId 表的全局唯一ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceId 数据源全局唯一ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceName 数据源名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseId 数据库ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseName 数据库名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableName 表名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ColumnName 字段名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataType 数据类型,string/int等
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ColumnType 字段类型, varchar(32)/int(10)等
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ColumnDefault 字段默认值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ColumnKey 索引类型, PRI/MUL/PARTITION等,普通字段该值为空串
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ColumnPosition 字段顺序标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ColumnComment 字段注释
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StoreType 数据类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 所属项目ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectName 所属项目英文名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectDisplayName 所属项目中文名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Scale 精度
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
        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("DatasourceName",$param) and $param["DatasourceName"] !== null) {
            $this->DatasourceName = $param["DatasourceName"];
        }

        if (array_key_exists("DatabaseId",$param) and $param["DatabaseId"] !== null) {
            $this->DatabaseId = $param["DatabaseId"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("ColumnName",$param) and $param["ColumnName"] !== null) {
            $this->ColumnName = $param["ColumnName"];
        }

        if (array_key_exists("DataType",$param) and $param["DataType"] !== null) {
            $this->DataType = $param["DataType"];
        }

        if (array_key_exists("ColumnType",$param) and $param["ColumnType"] !== null) {
            $this->ColumnType = $param["ColumnType"];
        }

        if (array_key_exists("ColumnDefault",$param) and $param["ColumnDefault"] !== null) {
            $this->ColumnDefault = $param["ColumnDefault"];
        }

        if (array_key_exists("ColumnKey",$param) and $param["ColumnKey"] !== null) {
            $this->ColumnKey = $param["ColumnKey"];
        }

        if (array_key_exists("ColumnPosition",$param) and $param["ColumnPosition"] !== null) {
            $this->ColumnPosition = $param["ColumnPosition"];
        }

        if (array_key_exists("ColumnComment",$param) and $param["ColumnComment"] !== null) {
            $this->ColumnComment = $param["ColumnComment"];
        }

        if (array_key_exists("StoreType",$param) and $param["StoreType"] !== null) {
            $this->StoreType = $param["StoreType"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("ProjectDisplayName",$param) and $param["ProjectDisplayName"] !== null) {
            $this->ProjectDisplayName = $param["ProjectDisplayName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Scale",$param) and $param["Scale"] !== null) {
            $this->Scale = $param["Scale"];
        }
    }
}
