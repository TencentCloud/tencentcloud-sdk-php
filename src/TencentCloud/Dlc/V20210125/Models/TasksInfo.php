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
 * 批量顺序执行任务集合
 *
 * @method string getTaskType() 获取任务类型，SQLTask：SQL查询任务。SparkSQLTask：Spark SQL查询任务
 * @method void setTaskType(string $TaskType) 设置任务类型，SQLTask：SQL查询任务。SparkSQLTask：Spark SQL查询任务
 * @method string getFailureTolerance() 获取容错策略。Proceed：前面任务出错/取消后继续执行后面的任务。Terminate：前面的任务出错/取消之后终止后面任务的执行，后面的任务全部标记为已取消。
 * @method void setFailureTolerance(string $FailureTolerance) 设置容错策略。Proceed：前面任务出错/取消后继续执行后面的任务。Terminate：前面的任务出错/取消之后终止后面任务的执行，后面的任务全部标记为已取消。
 * @method string getSQL() 获取base64加密后的SQL语句，用";"号分隔每个SQL语句，一次最多提交50个任务。严格按照前后顺序执行
 * @method void setSQL(string $SQL) 设置base64加密后的SQL语句，用";"号分隔每个SQL语句，一次最多提交50个任务。严格按照前后顺序执行
 * @method array getConfig() 获取任务的配置信息，当前仅支持SparkSQLTask任务。
 * @method void setConfig(array $Config) 设置任务的配置信息，当前仅支持SparkSQLTask任务。
 * @method array getParams() 获取任务的用户自定义参数信息
 * @method void setParams(array $Params) 设置任务的用户自定义参数信息
 */
class TasksInfo extends AbstractModel
{
    /**
     * @var string 任务类型，SQLTask：SQL查询任务。SparkSQLTask：Spark SQL查询任务
     */
    public $TaskType;

    /**
     * @var string 容错策略。Proceed：前面任务出错/取消后继续执行后面的任务。Terminate：前面的任务出错/取消之后终止后面任务的执行，后面的任务全部标记为已取消。
     */
    public $FailureTolerance;

    /**
     * @var string base64加密后的SQL语句，用";"号分隔每个SQL语句，一次最多提交50个任务。严格按照前后顺序执行
     */
    public $SQL;

    /**
     * @var array 任务的配置信息，当前仅支持SparkSQLTask任务。
     */
    public $Config;

    /**
     * @var array 任务的用户自定义参数信息
     */
    public $Params;

    /**
     * @param string $TaskType 任务类型，SQLTask：SQL查询任务。SparkSQLTask：Spark SQL查询任务
     * @param string $FailureTolerance 容错策略。Proceed：前面任务出错/取消后继续执行后面的任务。Terminate：前面的任务出错/取消之后终止后面任务的执行，后面的任务全部标记为已取消。
     * @param string $SQL base64加密后的SQL语句，用";"号分隔每个SQL语句，一次最多提交50个任务。严格按照前后顺序执行
     * @param array $Config 任务的配置信息，当前仅支持SparkSQLTask任务。
     * @param array $Params 任务的用户自定义参数信息
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
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("FailureTolerance",$param) and $param["FailureTolerance"] !== null) {
            $this->FailureTolerance = $param["FailureTolerance"];
        }

        if (array_key_exists("SQL",$param) and $param["SQL"] !== null) {
            $this->SQL = $param["SQL"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = [];
            foreach ($param["Config"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->Config, $obj);
            }
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = [];
            foreach ($param["Params"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->Params, $obj);
            }
        }
    }
}
