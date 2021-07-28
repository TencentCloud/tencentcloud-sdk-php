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
 * CreateTasksInOrder请求参数结构体
 *
 * @method string getDatabaseName() 获取数据库名称。如果SQL语句中有数据库名称，优先使用SQL语句中的数据库，否则使用该参数指定的数据库。
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名称。如果SQL语句中有数据库名称，优先使用SQL语句中的数据库，否则使用该参数指定的数据库。
 * @method TasksInfo getTasks() 获取SQL任务信息
 * @method void setTasks(TasksInfo $Tasks) 设置SQL任务信息
 * @method string getDatasourceConnectionName() 获取数据源名称，默认为COSDataCatalog
 * @method void setDatasourceConnectionName(string $DatasourceConnectionName) 设置数据源名称，默认为COSDataCatalog
 */
class CreateTasksInOrderRequest extends AbstractModel
{
    /**
     * @var string 数据库名称。如果SQL语句中有数据库名称，优先使用SQL语句中的数据库，否则使用该参数指定的数据库。
     */
    public $DatabaseName;

    /**
     * @var TasksInfo SQL任务信息
     */
    public $Tasks;

    /**
     * @var string 数据源名称，默认为COSDataCatalog
     */
    public $DatasourceConnectionName;

    /**
     * @param string $DatabaseName 数据库名称。如果SQL语句中有数据库名称，优先使用SQL语句中的数据库，否则使用该参数指定的数据库。
     * @param TasksInfo $Tasks SQL任务信息
     * @param string $DatasourceConnectionName 数据源名称，默认为COSDataCatalog
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
        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = new TasksInfo();
            $this->Tasks->deserialize($param["Tasks"]);
        }

        if (array_key_exists("DatasourceConnectionName",$param) and $param["DatasourceConnectionName"] !== null) {
            $this->DatasourceConnectionName = $param["DatasourceConnectionName"];
        }
    }
}
