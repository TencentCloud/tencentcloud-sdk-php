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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTask请求参数结构体
 *
 * @method Task getTask() 获取计算任务，该参数中包含任务类型及其相关配置信息
 * @method void setTask(Task $Task) 设置计算任务，该参数中包含任务类型及其相关配置信息
 * @method string getDatabaseName() 获取数据库名称。如果SQL语句中有数据库名称，优先使用SQL语句中的数据库，否则使用该参数指定的数据库（注：当提交建库sql时，该字段传空字符串）。
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名称。如果SQL语句中有数据库名称，优先使用SQL语句中的数据库，否则使用该参数指定的数据库（注：当提交建库sql时，该字段传空字符串）。
 * @method string getDatasourceConnectionName() 获取默认数据源名称。
 * @method void setDatasourceConnectionName(string $DatasourceConnectionName) 设置默认数据源名称。
 * @method string getDataEngineName() 获取数据引擎名称，不填提交到默认集群
 * @method void setDataEngineName(string $DataEngineName) 设置数据引擎名称，不填提交到默认集群
 */
class CreateTaskRequest extends AbstractModel
{
    /**
     * @var Task 计算任务，该参数中包含任务类型及其相关配置信息
     */
    public $Task;

    /**
     * @var string 数据库名称。如果SQL语句中有数据库名称，优先使用SQL语句中的数据库，否则使用该参数指定的数据库（注：当提交建库sql时，该字段传空字符串）。
     */
    public $DatabaseName;

    /**
     * @var string 默认数据源名称。
     */
    public $DatasourceConnectionName;

    /**
     * @var string 数据引擎名称，不填提交到默认集群
     */
    public $DataEngineName;

    /**
     * @param Task $Task 计算任务，该参数中包含任务类型及其相关配置信息
     * @param string $DatabaseName 数据库名称。如果SQL语句中有数据库名称，优先使用SQL语句中的数据库，否则使用该参数指定的数据库（注：当提交建库sql时，该字段传空字符串）。
     * @param string $DatasourceConnectionName 默认数据源名称。
     * @param string $DataEngineName 数据引擎名称，不填提交到默认集群
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
        if (array_key_exists("Task",$param) and $param["Task"] !== null) {
            $this->Task = new Task();
            $this->Task->deserialize($param["Task"]);
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("DatasourceConnectionName",$param) and $param["DatasourceConnectionName"] !== null) {
            $this->DatasourceConnectionName = $param["DatasourceConnectionName"];
        }

        if (array_key_exists("DataEngineName",$param) and $param["DataEngineName"] !== null) {
            $this->DataEngineName = $param["DataEngineName"];
        }
    }
}
