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
 * 表血缘详细信息
 *
 * @method string getMetastoreType() 获取元数据类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetastoreType(string $MetastoreType) 设置元数据类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取空间id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置空间id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceId() 获取数据源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceId(string $DatasourceId) 设置数据源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableId() 获取表id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableId(string $TableId) 设置表id
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getParams() 获取表血缘参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParams(array $Params) 设置表血缘参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParentSet() 获取父节点列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentSet(string $ParentSet) 设置父节点列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChildSet() 获取子节点列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChildSet(string $ChildSet) 设置子节点列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExtParams() 获取额外参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtParams(array $ExtParams) 设置额外参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getId() 获取血缘id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置血缘id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMetastoreTypeName() 获取元数据类型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetastoreTypeName(string $MetastoreTypeName) 设置元数据类型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableName() 获取表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableName(string $TableName) 设置表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQualifiedName() 获取表全称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQualifiedName(string $QualifiedName) 设置表全称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDownStreamCount() 获取血缘下游节点数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDownStreamCount(integer $DownStreamCount) 设置血缘下游节点数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpStreamCount() 获取血缘上游节点数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpStreamCount(integer $UpStreamCount) 设置血缘上游节点数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取血缘描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置血缘描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPrefixPath() 获取由中心节点到该节点的路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrefixPath(string $PrefixPath) 设置由中心节点到该节点的路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取血缘创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置血缘创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyTime() 获取血缘更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyTime(string $ModifyTime) 设置血缘更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTasks() 获取修改血缘的任务id列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTasks(array $Tasks) 设置修改血缘的任务id列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChannelType() 获取模块/应用类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelType(string $ChannelType) 设置模块/应用类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDisplayType() 获取展示类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisplayType(string $DisplayType) 设置展示类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngineType() 获取表类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineType(string $EngineType) 设置表类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableType() 获取表类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableType(string $TableType) 设置表类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceName() 获取datasourceName
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceName(string $DatasourceName) 设置datasourceName
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseName() 获取DatabaseName
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseName(string $DatabaseName) 设置DatabaseName
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseId() 获取DatabaseId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseId(string $DatabaseId) 设置DatabaseId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataFromType() 获取数据来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataFromType(string $DataFromType) 设置数据来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCollectJobId() 获取采集id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCollectJobId(string $CollectJobId) 设置采集id
注意：此字段可能返回 null，表示取不到有效值。
 */
class TableLineageInfo extends AbstractModel
{
    /**
     * @var string 元数据类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetastoreType;

    /**
     * @var string 空间id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 数据源id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceId;

    /**
     * @var string 表id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableId;

    /**
     * @var array 表血缘参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Params;

    /**
     * @var string 父节点列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentSet;

    /**
     * @var string 子节点列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChildSet;

    /**
     * @var array 额外参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtParams;

    /**
     * @var string 血缘id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

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
     * @var string 表全称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QualifiedName;

    /**
     * @var integer 血缘下游节点数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DownStreamCount;

    /**
     * @var integer 血缘上游节点数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpStreamCount;

    /**
     * @var string 血缘描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 由中心节点到该节点的路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrefixPath;

    /**
     * @var string 血缘创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 血缘更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyTime;

    /**
     * @var array 修改血缘的任务id列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tasks;

    /**
     * @var string 模块/应用类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelType;

    /**
     * @var string 展示类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisplayType;

    /**
     * @var string 表类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineType;

    /**
     * @var string 表类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableType;

    /**
     * @var string datasourceName
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceName;

    /**
     * @var string DatabaseName
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseName;

    /**
     * @var string DatabaseId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseId;

    /**
     * @var string 数据来源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataFromType;

    /**
     * @var string 采集id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CollectJobId;

    /**
     * @param string $MetastoreType 元数据类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 空间id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceId 数据源id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableId 表id
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Params 表血缘参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParentSet 父节点列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChildSet 子节点列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ExtParams 额外参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Id 血缘id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MetastoreTypeName 元数据类型名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableName 表名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QualifiedName 表全称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DownStreamCount 血缘下游节点数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpStreamCount 血缘上游节点数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 血缘描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PrefixPath 由中心节点到该节点的路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 血缘创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyTime 血缘更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tasks 修改血缘的任务id列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChannelType 模块/应用类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DisplayType 展示类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EngineType 表类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableType 表类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceName datasourceName
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseName DatabaseName
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseId DatabaseId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataFromType 数据来源
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CollectJobId 采集id
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
        if (array_key_exists("MetastoreType",$param) and $param["MetastoreType"] !== null) {
            $this->MetastoreType = $param["MetastoreType"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = [];
            foreach ($param["Params"] as $key => $value){
                $obj = new LineageParamRecord();
                $obj->deserialize($value);
                array_push($this->Params, $obj);
            }
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
                $obj = new RecordField();
                $obj->deserialize($value);
                array_push($this->ExtParams, $obj);
            }
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
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

        if (array_key_exists("ChannelType",$param) and $param["ChannelType"] !== null) {
            $this->ChannelType = $param["ChannelType"];
        }

        if (array_key_exists("DisplayType",$param) and $param["DisplayType"] !== null) {
            $this->DisplayType = $param["DisplayType"];
        }

        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }

        if (array_key_exists("TableType",$param) and $param["TableType"] !== null) {
            $this->TableType = $param["TableType"];
        }

        if (array_key_exists("DatasourceName",$param) and $param["DatasourceName"] !== null) {
            $this->DatasourceName = $param["DatasourceName"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("DatabaseId",$param) and $param["DatabaseId"] !== null) {
            $this->DatabaseId = $param["DatabaseId"];
        }

        if (array_key_exists("DataFromType",$param) and $param["DataFromType"] !== null) {
            $this->DataFromType = $param["DataFromType"];
        }

        if (array_key_exists("CollectJobId",$param) and $param["CollectJobId"] !== null) {
            $this->CollectJobId = $param["CollectJobId"];
        }
    }
}
