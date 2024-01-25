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
 * 任务数据库登记项
 *
 * @method string getTaskId() 获取任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskName() 获取任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceId() 获取数据源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceId(string $DatasourceId) 设置数据源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseName() 获取数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableName() 获取表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableName(string $TableName) 设置表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDbGuid() 获取库唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDbGuid(string $DbGuid) 设置库唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableGuid() 获取表唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableGuid(string $TableGuid) 设置表唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPartitionName() 获取分区名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPartitionName(string $PartitionName) 设置分区名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getId() 获取登记项id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置登记项id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppId() 获取租户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(string $AppId) 设置租户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataFlowType() 获取输入输出表类型 /**
     * 输入流
     */
    UPSTREAM,
    /**
     * 输出流
     */
    DOWNSTREAM;
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataFlowType(string $DataFlowType) 设置输入输出表类型 /**
     * 输入流
     */
    UPSTREAM,
    /**
     * 输出流
     */
    DOWNSTREAM;
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserUin() 获取用户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserUin(string $UserUin) 设置用户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerUin() 获取主账号id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUin(string $OwnerUin) 设置主账号id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExt() 获取扩展信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExt(string $Ext) 设置扩展信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTablePhysicalId() 获取表物理唯一id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTablePhysicalId(string $TablePhysicalId) 设置表物理唯一id
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskDataRegistryDTO extends AbstractModel
{
    /**
     * @var string 任务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var string 项目id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 数据源id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceId;

    /**
     * @var string 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseName;

    /**
     * @var string 表名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableName;

    /**
     * @var string 库唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DbGuid;

    /**
     * @var string 表唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableGuid;

    /**
     * @var string 分区名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PartitionName;

    /**
     * @var integer 登记项id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 租户id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string 输入输出表类型 /**
     * 输入流
     */
    UPSTREAM,
    /**
     * 输出流
     */
    DOWNSTREAM;
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataFlowType;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 用户id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserUin;

    /**
     * @var string 主账号id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUin;

    /**
     * @var string 扩展信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ext;

    /**
     * @var string 表物理唯一id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TablePhysicalId;

    /**
     * @param string $TaskId 任务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceId 数据源id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseName 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableName 表名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DbGuid 库唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableGuid 表唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PartitionName 分区名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Id 登记项id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppId 租户id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataFlowType 输入输出表类型 /**
     * 输入流
     */
    UPSTREAM,
    /**
     * 输出流
     */
    DOWNSTREAM;
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserUin 用户id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerUin 主账号id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Ext 扩展信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TablePhysicalId 表物理唯一id
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("DbGuid",$param) and $param["DbGuid"] !== null) {
            $this->DbGuid = $param["DbGuid"];
        }

        if (array_key_exists("TableGuid",$param) and $param["TableGuid"] !== null) {
            $this->TableGuid = $param["TableGuid"];
        }

        if (array_key_exists("PartitionName",$param) and $param["PartitionName"] !== null) {
            $this->PartitionName = $param["PartitionName"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("DataFlowType",$param) and $param["DataFlowType"] !== null) {
            $this->DataFlowType = $param["DataFlowType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UserUin",$param) and $param["UserUin"] !== null) {
            $this->UserUin = $param["UserUin"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("Ext",$param) and $param["Ext"] !== null) {
            $this->Ext = $param["Ext"];
        }

        if (array_key_exists("TablePhysicalId",$param) and $param["TablePhysicalId"] !== null) {
            $this->TablePhysicalId = $param["TablePhysicalId"];
        }
    }
}
