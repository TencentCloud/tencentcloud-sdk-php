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
 * 创建产出登记项
 *
 * @method string getTaskId() 获取任务id
 * @method void setTaskId(string $TaskId) 设置任务id
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getTablePhysicalId() 获取表物理唯一id
 * @method void setTablePhysicalId(string $TablePhysicalId) 设置表物理唯一id
 * @method string getDatasourceId() 获取数据源id
 * @method void setDatasourceId(string $DatasourceId) 设置数据源id
 * @method string getDatabaseName() 获取数据库名
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名
 * @method string getTableName() 获取表名
 * @method void setTableName(string $TableName) 设置表名
 * @method string getTableGuid() 获取表唯一标识
 * @method void setTableGuid(string $TableGuid) 设置表唯一标识
 * @method string getPartitionName() 获取分区名
 * @method void setPartitionName(string $PartitionName) 设置分区名
 * @method string getDbGuid() 获取库唯一标识
 * @method void setDbGuid(string $DbGuid) 设置库唯一标识
 */
class CreateTaskOutputRegistry extends AbstractModel
{
    /**
     * @var string 任务id
     */
    public $TaskId;

    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 表物理唯一id
     */
    public $TablePhysicalId;

    /**
     * @var string 数据源id
     */
    public $DatasourceId;

    /**
     * @var string 数据库名
     */
    public $DatabaseName;

    /**
     * @var string 表名
     */
    public $TableName;

    /**
     * @var string 表唯一标识
     */
    public $TableGuid;

    /**
     * @var string 分区名
     */
    public $PartitionName;

    /**
     * @var string 库唯一标识
     */
    public $DbGuid;

    /**
     * @param string $TaskId 任务id
     * @param string $TaskName 任务名称
     * @param string $ProjectId 项目id
     * @param string $TablePhysicalId 表物理唯一id
     * @param string $DatasourceId 数据源id
     * @param string $DatabaseName 数据库名
     * @param string $TableName 表名
     * @param string $TableGuid 表唯一标识
     * @param string $PartitionName 分区名
     * @param string $DbGuid 库唯一标识
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

        if (array_key_exists("TablePhysicalId",$param) and $param["TablePhysicalId"] !== null) {
            $this->TablePhysicalId = $param["TablePhysicalId"];
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

        if (array_key_exists("TableGuid",$param) and $param["TableGuid"] !== null) {
            $this->TableGuid = $param["TableGuid"];
        }

        if (array_key_exists("PartitionName",$param) and $param["PartitionName"] !== null) {
            $this->PartitionName = $param["PartitionName"];
        }

        if (array_key_exists("DbGuid",$param) and $param["DbGuid"] !== null) {
            $this->DbGuid = $param["DbGuid"];
        }
    }
}
