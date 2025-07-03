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
 * CreateTasks请求参数结构体
 *
 * @method string getDatabaseName() 获取数据库名称。如果SQL语句中有数据库名称，优先使用SQL语句中的数据库，否则使用该参数指定的数据库（注：当提交建库sql时，该字段传空字符串）。
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名称。如果SQL语句中有数据库名称，优先使用SQL语句中的数据库，否则使用该参数指定的数据库（注：当提交建库sql时，该字段传空字符串）。
 * @method TasksInfo getTasks() 获取SQL任务信息
 * @method void setTasks(TasksInfo $Tasks) 设置SQL任务信息
 * @method string getDatasourceConnectionName() 获取数据源名称，默认为DataLakeCatalog
 * @method void setDatasourceConnectionName(string $DatasourceConnectionName) 设置数据源名称，默认为DataLakeCatalog
 * @method string getDataEngineName() 获取计算引擎名称，不填任务提交到默认集群
 * @method void setDataEngineName(string $DataEngineName) 设置计算引擎名称，不填任务提交到默认集群
 * @method string getResourceGroupName() 获取spark集群资源组名称
 * @method void setResourceGroupName(string $ResourceGroupName) 设置spark集群资源组名称
 * @method boolean getIsMultiStatement() 获取是否使用multi- statement方式运行一批次任务，true: 是，false: 否
 * @method void setIsMultiStatement(boolean $IsMultiStatement) 设置是否使用multi- statement方式运行一批次任务，true: 是，false: 否
 * @method array getSourceInfo() 获取任务来源信息
 * @method void setSourceInfo(array $SourceInfo) 设置任务来源信息
 */
class CreateTasksRequest extends AbstractModel
{
    /**
     * @var string 数据库名称。如果SQL语句中有数据库名称，优先使用SQL语句中的数据库，否则使用该参数指定的数据库（注：当提交建库sql时，该字段传空字符串）。
     */
    public $DatabaseName;

    /**
     * @var TasksInfo SQL任务信息
     */
    public $Tasks;

    /**
     * @var string 数据源名称，默认为DataLakeCatalog
     */
    public $DatasourceConnectionName;

    /**
     * @var string 计算引擎名称，不填任务提交到默认集群
     */
    public $DataEngineName;

    /**
     * @var string spark集群资源组名称
     */
    public $ResourceGroupName;

    /**
     * @var boolean 是否使用multi- statement方式运行一批次任务，true: 是，false: 否
     */
    public $IsMultiStatement;

    /**
     * @var array 任务来源信息
     */
    public $SourceInfo;

    /**
     * @param string $DatabaseName 数据库名称。如果SQL语句中有数据库名称，优先使用SQL语句中的数据库，否则使用该参数指定的数据库（注：当提交建库sql时，该字段传空字符串）。
     * @param TasksInfo $Tasks SQL任务信息
     * @param string $DatasourceConnectionName 数据源名称，默认为DataLakeCatalog
     * @param string $DataEngineName 计算引擎名称，不填任务提交到默认集群
     * @param string $ResourceGroupName spark集群资源组名称
     * @param boolean $IsMultiStatement 是否使用multi- statement方式运行一批次任务，true: 是，false: 否
     * @param array $SourceInfo 任务来源信息
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

        if (array_key_exists("DataEngineName",$param) and $param["DataEngineName"] !== null) {
            $this->DataEngineName = $param["DataEngineName"];
        }

        if (array_key_exists("ResourceGroupName",$param) and $param["ResourceGroupName"] !== null) {
            $this->ResourceGroupName = $param["ResourceGroupName"];
        }

        if (array_key_exists("IsMultiStatement",$param) and $param["IsMultiStatement"] !== null) {
            $this->IsMultiStatement = $param["IsMultiStatement"];
        }

        if (array_key_exists("SourceInfo",$param) and $param["SourceInfo"] !== null) {
            $this->SourceInfo = [];
            foreach ($param["SourceInfo"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->SourceInfo, $obj);
            }
        }
    }
}
